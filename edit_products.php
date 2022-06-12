<?php

include ('settings.php');
include ('lib/db.php');
if( isset( $_POST['submit'] ) ){
    $id = $_GET['code_product'];
   $dbc = new DB ( $dbHost, $dbUser, $dbPass, $dbName);
   $sql = "UPDATE products SET
    name_product = ?, 
    Number       = ?,
    money_product= ?,
    image_product= ?,
    about_product= ?,
    type_product = ?
    WHERE code_product = ?";
   $result = $dbc -> query( $sql ,$_POST['name_product'] ,$_POST['Number'],$_POST['money_product'],$_POST['image_product'],$_POST['about_product'],$_POST['type_product'],$_GET['code_product'] );

   $dbc -> close();
   include ("view/!edit_user.php");


}
else{

    $dbc = new DB( $dbHost, $dbUser, $dbPass, $dbName);
   
    $sql = "SELECT * FROM products
            WHERE code_product = ?";
   
    $result = $dbc -> query( $sql, $_GET['code_product'] );
    $row = $result -> fetchArray();
    
    $dbc -> close();

   
    include ('view/edit_products.php');

}

?>