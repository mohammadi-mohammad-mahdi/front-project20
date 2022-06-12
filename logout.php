<?php
include 'settings.php';
include 'utils/security.php';
Authentication :: logout();
echo " امیدوارم لذت برده باشید    ";
include("view/login.php");
?>