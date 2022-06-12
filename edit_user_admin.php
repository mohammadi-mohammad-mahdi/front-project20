<?php


include ('settings.php');
include ('lib/db.php');
if( isset( $_POST['submit'] ) ){
$id = $_GET['id'];
$dbc = new DB ( $dbHost, $dbUser, $dbPass, $dbName);
$sql = "UPDATE user SET
    fullname = ?,
    username = ?,
    gender   = ?
    WHERE id = ?";

$result = $dbc -> query( $sql , $_POST['fname'] ,$_POST['usern'] ,$_POST['gender'],$_GET['id']);

$dbc -> close();
include ("view/!edit_user_admin.php");
}

else {

    $dbc = new DB( $dbHost, $dbUser, $dbPass, $dbName);
   
    $sql = "SELECT * FROM user
            WHERE id = ?";
   
    $result = $dbc -> query( $sql, $_GET['id'] );
    $row = $result -> fetchArray();
    
    $dbc -> close();

   
    include ('view/edit_user_admin.php');

}

?>