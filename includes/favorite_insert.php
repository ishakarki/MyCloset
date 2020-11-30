<?php

if(isset($_POST['test']))
{
    $outfitname = $_POST['nameofoutfit'];
    $temperature = intval($_POST['temp']);
    $occasion = intval($_POST['occasion']);
    $p1 = $_POST['piece1'];
    $p2 = $_POST['piece2'];
    $p3 = $_POST['piece3'];

    if($temperature >= 70)
    {
        $temperature = "Hot";
    }
    elseif ($temperature <= 30)
    {
        $temperature = "Cold";
    }
    else
    {
        $temperature = "Warm";
    }
    require 'database_setup.php';

    $sql = "INSERT INTO outfits (outfitname, piece1, piece2, piece3, temperature, occasion) VALUES (?,?,?,?,?,?);";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql))
    {
        header("Location: ../main.php?saved=error");
    }

    else{
        mysqli_stmt_bind_param($stmt, "ssssss", $outfitname, $p1, $p2, $p3, $temperature, $occasion);
        mysqli_stmt_execute($stmt);
        header("Location: ../main.php?saved=success");
    }

}
