<?php
include ('settings.php');
include ('lib/db.php');
include ('utils/security.php');
if( ! Authorization :: checkRole('admin') )
{

$dbc = new DB( $dbHost, $dbUser, $dbPass, $dbName);
$sql = "SELECT * FROM user
        ORDER BY id DESC ";
$result = $dbc -> query( $sql );
$users = $dbc -> fetchAll();
$dbc -> close();

include 'view/show_user.php';
}
?>