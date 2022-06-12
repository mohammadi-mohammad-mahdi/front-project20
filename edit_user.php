<?php
include ('settings.php');
include ('lib/db.php');
include ('utils/security.php');

if( ! Authorization :: checkRole('admin') ){
  
if( isset( $_POST['submit'] ) ){
 $id = $_GET['id'];
$dbc = new DB ( $dbHost, $dbUser, $dbPass, $dbName);
if($_POST['pass'] == ''){
    $sql = "UPDATE user SET
       fullname = ?,
       username = ?,
       email    = ?,
       gender   = ?
       WHERE id = ?";
    $result = $dbc -> query( $sql, $_POST['fname'], $_POST['usern'],$_POST['email'], $_POST['gender'], $_GET['id'] );
}
else {
    $sql = "UPDATE user SET
    fullname = ?,
    username = ?,
    password = ?,
    email    = ?,
    gender   = ?
    WHERE id = ?";

$result = $dbc -> query( $sql , $_POST['fname'] ,$_POST['usern'] ,$_POST['pass'],$_POST['email'],$_POST['gender'],$_GET['id']);
}


$dbc -> close();
include ("view/!edit_user.php");

}

else{

    $dbc = new DB( $dbHost, $dbUser, $dbPass, $dbName);
   
    $sql = "SELECT * FROM user
            WHERE id = ?";
   
    $result = $dbc -> query( $sql, $_GET['id'] );
    $row = $result -> fetchArray();
    
    $dbc -> close();

   
    include ('view/edit_user.php');

}
}



?>