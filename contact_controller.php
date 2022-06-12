 
<?php

include ('settings.php');
include ('lib/db.php');

$dbc = new DB ($dbHost,$dbUser,$dbPass,$dbName);

$sql = "INSERT INTO message (namee,phone,email,title,textt)
        VALUES(?,?,?,?,?)";

$result = $dbc -> query ($sql ,$_POST['name'],$_POST['phone'],$_POST['email'],$_POST['title'],$_POST['textt']);

$dbc -> close();
echo('Thank you');

?>

