<?php
include ('settings.php');
include ('lib/db.php');

if( isset( $_POST['submit'] ) ){
$dbc = new DB ( $dbHost, $dbUser, $dbPass, $dbName);

$sql = "INSERT INTO products(code_product, name_product, Number,money_product,image_product,about_product,type_product) 
VALUES(?,?,?,?,?,?,?)";

$result = $dbc -> query( $sql ,$_POST['code_product'] ,$_POST['name_product'] ,$_POST['Number'],$_POST['money_product'],$_POST['image_product'],$_POST['about_product'],$_POST['type_product']);

$dbc -> close();
include ('view/!register.php');

}
else{
    include ('view/add_products.php');

}
?>