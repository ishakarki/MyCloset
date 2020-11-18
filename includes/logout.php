<?php
//handle logout buttion, destroying the session
    session_start();
    session_unset();
    session_destroy();
    header("Location:../home.php");
    exit();
