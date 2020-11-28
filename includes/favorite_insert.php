<?php
if(isset($_POST['test']))
{
    $outfitname = $_POST['nameofoutfit'];
    $p1 = $_POST['piece1'];
    $p2 = $_POST['piece2'];
    $p3 = $_POST['piece3'];
    require 'database_setup.php';

    $sql = "INSERT INTO outfits (outfitname, piece1, piece2, piece3) VALUES (?, ?,?,?);";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql))
    {
        header("Location: ../main.php?saved=error");
    }

    else{
        mysqli_stmt_bind_param($stmt, "ssss", $outfitname, $p1, $p2, $p3);
        mysqli_stmt_execute($stmt);
        header("Location: ../main.php?saved=success");
    }

}
