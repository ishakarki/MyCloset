<?php

//inserting favorite outfit into the database

if(isset($_POST['test']))
{
    //stores everything in the form in the repective variable
    $outfitname = $_POST['nameofoutfit'];
    $temperature = intval($_POST['temp']);
    $occasion = intval($_POST['occasion']);
    $p1 = $_POST['piece1'];
    $p2 = $_POST['piece2'];
    $p3 = $_POST['piece3'];
    //check if the temperature input is larger than or equal to 70, then the outfit is for the hot weather
    if($temperature >= 70)
    {
        $temperature = "Hot";
    }
    //if is below or equal to 30, then the outfit is for the cold weather
    elseif ($temperature <= 30)
    {
        $temperature = "Cold";
    }
    //if it is in between, then it is for the warm weather
    else
    {
        $temperature = "Warm";
    }
    require 'database_setup.php';
    //checking if a particular outfit has already been saved
    $sql = "SELECT * FROM outfits WHERE piece1 =? AND piece2 = ? AND piece3 = ?";
    $stmt = mysqli_stmt_init($conn);
    //check if there is any error with the connection
    if(!mysqli_stmt_prepare($stmt, $sql))
    {
        header("Location: ../main.php?saved=error");
    }
    else{
        //bind and execute sql statement
        mysqli_stmt_bind_param($stmt, "sss", $p1, $p2, $p3);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_store_result($stmt);
        //check if there is 1 or more row returned
        $result = mysqli_stmt_num_rows($stmt);
        //if the rows return is more than or equal to one then that means the outfit has already been save, we will not save it again
        if ($result>0)
        {
            header("Location: ../main.php?saved=duplicate");
        }
        else{
                 //setting up sql statement and the database connection
            $sql = "INSERT INTO outfits (outfitname, piece1, piece2, piece3, temperature, occasion) VALUES (?,?,?,?,?,?);";
            //if there was an error, then return to the main.php with an error
            if(!mysqli_stmt_prepare($stmt, $sql))
            {
                header("Location: ../main.php?saved=error");
            }
            //input the info into the database and return with a success
            else{
                mysqli_stmt_bind_param($stmt, "ssssss", $outfitname, $p1, $p2, $p3, $temperature, $occasion);
                mysqli_stmt_execute($stmt);
                header("Location: ../main.php?saved=success");
            }

        }
    }

   
}
