<?php
session_start();
#if the login was not successful go back to sigin.php
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
