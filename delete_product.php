<?php
include ('settings.php');
include ('lib/db.php');
include ('utils/security.php');

$dbc = new DB( $dbHost, $dbUser, $dbPass, $dbName);
$sql = " DELETE FROM products WHERE code_product = ? ";
$result = $dbc -> query( $sql , $_GET['code_product']);
$dbc -> close();
echo "Deleted" ;

?>