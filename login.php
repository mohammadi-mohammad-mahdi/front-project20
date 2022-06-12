<?php
    include 'settings.php';
    include 'lib/db.php';
    include 'utils/security.php';


if( isset( $_POST['submit'] ) ){ 
    $dbc = new DB( $dbHost, $dbUser, $dbPass, $dbName);
   
    $sql = "SELECT * FROM user
     WHERE username = ? AND password = ?";

    $result = $dbc -> query( $sql, $_POST['usern'], $_POST['pass'] );
    if ($dbc -> numRows() > 0){ 
        echo ("  Welcome") ;
        include("view/main.php");
        $user = $dbc -> fetchArray();
        $uid = $user['id'];
        Authentication :: login( $uid ); 
       
    }
    else{
        echo 'نام کاربری یا کلمه عبور اشتباه است';
        include 'view/login.php';
    }
    $dbc -> close();
}
else{
    include 'view/login.php';
}
?>

