<?php
include ('settings.php');
include ('lib/db.php');

if( isset( $_POST['submit'] ) ){
$dbc = new DB ( $dbHost, $dbUser, $dbPass, $dbName);

$sql = "INSERT INTO user(fullname, username, password,email,gender) 
VALUES(?,?,?,?,?)";

$result = $dbc -> query( $sql ,$_POST['fname'] ,$_POST['usern'] ,$_POST['pass'],$_POST['email'],$_POST['gender']);

$dbc -> close();

include ('view/!register.php');

}
else{
    include ('view/register.php');

}
?>
