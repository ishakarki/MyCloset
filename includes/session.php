<?php
session_start();
#Log in if the the login was successful
if(!isset($_SESSION['userId']))
{
    header("Location:signin.php");
    exit();
}
#the session is only valid for 30 minutes, it will automatically log out
else
{
    $now = time();
    if ($now > $_SESSION['expiration']){
    header("Location: home.php");
    exit();
    }
}

include("includes/header.inc.php")
?>
