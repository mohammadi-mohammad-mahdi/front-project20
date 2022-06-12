<?php
include ('settings.php');
include ('lib/db.php');
include ('utils/security.php');
if( ! Authorization :: checkRole('admin') ){

$dbc = new DB( $dbHost, $dbUser, $dbPass, $dbName);
$sql = "SELECT * FROM message
        ORDER BY id DESC ";
$result = $dbc -> query( $sql );
$massages = $dbc -> fetchAll();
$dbc -> close();

include ('view/show_massage.php');
   }
?>