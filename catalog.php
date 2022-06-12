<?php
include ('settings.php');
include ('lib/db.php');
include ('utils/security.php');

$dbc = new DB( $dbHost, $dbUser, $dbPass, $dbName);
$sql = "SELECT * FROM products
        ORDER BY code_product DESC
        LIMIT 10";
$result = $dbc -> query( $sql );
$products = $dbc -> fetchAll();
$dbc -> close();

include 'view/show_product.php'
?>

