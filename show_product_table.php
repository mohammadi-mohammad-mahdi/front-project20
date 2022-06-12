<?php
include ('settings.php');
include ('lib/db.php');
include ('utils/security.php');
if( ! Authorization :: checkRole('admin') ){

$dbc = new DB( $dbHost, $dbUser, $dbPass, $dbName);
$sql = "SELECT * FROM products
        ORDER BY code_product DESC ";
$result = $dbc -> query( $sql );
$t_products = $dbc -> fetchAll();
$dbc -> close();

include 'view/show_product_table.php';
}
?>