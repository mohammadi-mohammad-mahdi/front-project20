<?php
include ('settings.php');
include ('lib/db.php');
include ('utils/security.php');

$dbc = new DB( $dbHost, $dbUser, $dbPass, $dbName);
$sql = " DELETE FROM user WHERE id = ? ";
$result = $dbc -> query( $sql , $_GET['id']);
$dbc -> close();
echo "Deleted" ;

?>