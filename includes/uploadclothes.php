<?php
/*
    This is in charge of uploading newly added piece of clothing to the data base

*/
if(isset($_POST['upload-submit'])) 
{
    //these variable are grabbing the information sent for the form
    $name = $_POST['title'];
    $type = $_POST['type'];
    $occasion = $_POST['occasion'];
    $color = $_POST['color'];
    $file = $_FILES['file'];
    $pattern = $_POST['pattern'];
    //checking if anything is not filled, if it is not filled then it will return to the upload page 
    if(empty($name) || $type == "" || $occasion == "Occasion" || $color == "Color" || empty("file") || $pattern == "Pattern" )
    {
        header("Location: ../upload.php?found=emptyfields");
        exit();
    }
    //switch cases to get what type of bottom/top/sweater/onepiece it is based on the user's input in the form
    switch($type){
        case "Bottom":
            $type_of = $_POST['type_of_bottom'];
            break;
        case "Top":
            $type_of = $_POST['type_of_top'];
            echo $type_of;

            break;
        case "Sweater":
            $type_of = $_POST['type_of_sweater'];
            break;
        case "One Piece":
            $type_of = $_POST['type_of_one_piece'];
            break;
        default: 
            header("Location: ../upload.php?found=emptyfields"); //if the category type is not filled, then it takes the user back to the first page
    }
    
    //extracting the infortmaion from the files that was uploaded
    $fName = $file["name"]; //get the name and the extension of the file
    $fileName = $file["name"];
    // $fType = $file["type"];
    $ftemp = $file["tmp_name"];
    $fError = $file["error"]; //check to see if there is any error
    // $fSize = $file["size"]; //check the size of the file

    $fileExtension= explode(".",$fName); // get the extension
    $fileActualExtension=strtolower(end($fileExtension)); //lower case the file extension to check if the exension is valid
    $allow = array("jpg", "jpeg", "png"); //possible extension that are valid

    if(in_array($fileActualExtension,$allow)) //if the extension matches that of the $allow array
    {
        if($fError==0) //checking to see if there is any error from the file
        {
            $filedir = "images/" . $fileName; //initialize the location where the file show be at
            require 'database_setup.php'; //requirement of the database connection

            $sql = "SELECT * FROM clothing WHERE file_title =?"; // sql statement to check if there already exist the same file name as the one the user want to insert
            $stmt = mysqli_stmt_init($conn); //checking the connection

            if(!mysqli_stmt_prepare($stmt, $sql)) //if there is an error with the $sql statement then it returns with an error
            {

                header("Location: ../upload.php?found=error");
                exit();
            }

            else{
                //bind statement
                mysqli_stmt_bind_param($stmt, "s", $fileName); 
                mysqli_stmt_execute($stmt);
                mysqli_stmt_store_result($stmt); //check the number of rows return
                $result = mysqli_stmt_num_rows($stmt);
    
                if($result > 0) //if it is more then 0, then that means the data already exist in the table, so return with error
                {
                    header("Location: ../upload.php?found=duplicatefilename");
                    exit();
                }
                else{
                    //prepare and bind
                    $sql = "INSERT INTO clothing (nameofclothing, typeofclothing,color,temp,pattern,occasion,file_title, type_) VALUES (?,?,?,?,?,?,?,?);";
                    if(!mysqli_stmt_prepare($stmt, $sql))
                    {
                        header("Location: ../upload.php?found=error");
                        exit();
                    }
                    else{
                        $temp = -1;
                        //must evaluate, depending on what category the piece of clothing belong to, that we assign the correct temperature, that will fit which weather the piece of clothing can be worn
                        if($type == "Bottom") 
                        {
                            if($type_of == "Pant")
                            {
                                $temp = 15;
                            }
                            elseif ($type_of == "Short" || $type_of == "Skirt"){
                                $temp = 6;
                            }
                        }
                        elseif($type == "Top")
                        {
                            if($type_of == "Long Sleeve")
                            {
                                $temp = 15;
                            }
                            elseif ($type_of == "T-Shirt")
                            {
                                $temp = 8;
                            }
                            elseif ($type_of == "Tank Top")
                            {
                                $temp = 5;
                            }
                        }
                        elseif ($type == "Sweater")
                        {
                            if($type_of == "Jacket")
                            {
                                $temp = 40;
                            }
                            else if($type_of == "Cardigan")
                            {
                                $temp = 6;
                            }
                            else if ($type_of == "Pullover")
                            {
                                $temp = 20;
                            }
                        }
                        elseif ($type == "One Piece")
                        {
                            if($type_of == "Short Dress" || $type_of == "Romper")
                            {
                                $temp = 5;
                            }
                            elseif ($type_of == "Long Dress" || $type_of == "Jump Suit")
                            {
                                $temp = 20;
                            }
                        }

                        //checking the prepare statement again before we insert
                        if(!mysqli_stmt_prepare($stmt, $sql))
                        {
                            echo "SQL statement failed";
                        }
                        else{
                            //insert the information to our database
                            mysqli_stmt_bind_param($stmt, "ssssssss", $name, $type_of, $color, $temp, $pattern, $occasion, $fileName, $type);
                            mysqli_stmt_execute($stmt);
                            //move the file to the respective folder
                            move_uploaded_file($ftemp,$filedir); // upload into respective folder (image/)
                            header("Location: ../upload.php?upload=success");
                        }
                        
                    }
                }
            }

               //for security purposes, close off connection
                mysqli_stmt_close($stmt);
                mysqli_close($conn);
        }
        //if there was an error to the file, return to main page
        else{
            header("Location: ../upload.php?found=error");
        }

    }



}
//if there was an error with the submit buttm, return to main page
else{
    header("Location: ../upload.php?found=error");
}