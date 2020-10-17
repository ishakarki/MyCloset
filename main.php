<?php
session_start();
if(!isset($_SESSION['userId']))
{
    header("Location:signin.php");
    exit();
}
else
{
    $now = time();
    if ($now > $_SESSION['expiration']){
    header("Location: home.php");
    exit();
    }
}
?>