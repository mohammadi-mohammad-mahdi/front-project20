<?php
include ('settings.php');
include ('lib/db.php');

if (!(isset($_SESSION["state_login"]) && $_SESSION["state_login"] === true ))
{   
 
    $dbc = new DB ( $dbHost, $dbUser, $dbPass, $dbName);
    
    $sql = "INSERT INTO ticket(username, email, subject,Priority,text) 
    VALUES(?,?,?,?,?)";
    
    $result = $dbc -> query( $sql ,$_POST['username'] ,$_POST['email'] ,$_POST['subject'],$_POST['Priority'],$_POST['text']);
    
    $dbc -> close();
    include ('view/!ticket.php');
}
   

?>