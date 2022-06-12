<?php
include ('settings.php');
include ('lib/db.php');

if( isset( $_POST['submit'] ) ){
$dbc = new DB ( $dbHost, $dbUser, $dbPass, $dbName);

$sql = "INSERT INTO user(fullname, username, password,email) 
VALUES(?,?,?,?)";

$result = $dbc -> query( $sql ,$_POST['fname'] ,$_POST['usern'] ,$_POST['pass'],$_POST['email']);

$dbc -> close();
include ('view/!register.php');

}
else{
    include ('view/add_user_admin.php');

}
?>