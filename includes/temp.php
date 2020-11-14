<?php

if(isset($_POST['upload-submit']))
{
    $name = $_POST['title'];
    $type = $_POST['type'];
    $type_of = $_POST['type_of'];
    $occasion = $_POST['occasion'];
    $color = $_POST['color'];
    $file = $_FILES['file'];
    $pattern = $_POST['pattern'];
    echo $name, $type, $type_of, $occasion, $color, $file, $pattern;
    if(empty($name) || $type == '' || $occasion == "Occasion" || $color == "Color" || empty("file") || ($type_of == "Bottom" && $type_of == "Top" && $type_of == "Sweater" && $type_of == 'One Piece') || $pattern == "Pattern" )
    {
        header("Location: ../upload.php?found=emptyfields");
        exit();
    }
            print_r($file); //princing this will show properties of the file

    $fName = $file["name"];
    $fileName = $file["name"];
    $fType = $file["type"];
    $ftemp = $file["tmp_name"];
    $fError = $file["error"];
    $fSize = $file["size"];

    $fileExtension= explode(".",$fName);
    $fileActualExtension=strtolower(end($fileExtension));
    $allow = array("jpg", "jpeg", "png");

    if(in_array($fileActualExtension,$allow))
    {
        if($fError==0)
        {
            $filedir = "images/" . $fileName;
            require 'database_setup.php';

            $sql = "SELECT * FROM clothing WHERE file_title =?";
            $stmt = mysqli_stmt_init($conn);

            if(!mysqli_stmt_prepare($stmt, $sql))
            {

                header("Location: ../upload.php?found=error");
                exit();
            }

            else{
                mysqli_stmt_bind_param($stmt, "s", $fileName);
                mysqli_stmt_execute($stmt);
                mysqli_stmt_store_result($stmt);
                $result = mysqli_stmt_num_rows($stmt);
                print_r("Hello");
    
                if($result > 0)
                {
                    header("Location: ../upload.php?found=duplicatefilename");
                    exit();
                }
                else{
                    $sql = "INSERT INTO clothing (nameofclothing, typeofclothing,color,temp,pattern,occasion,file_title, type_) VALUES (?,?,?,?,?,?,?,?);";
                    if(!mysqli_stmt_prepare($stmt, $sql))
                    {
                        header("Location: ../upload.php?found=error");
                        exit();
                    }
                    else{
                        $temp = "-1";
                        if($type = "Bottom")
                        {
                            if($type_of == "Pant")
                            {
                                $temp = "15";
                            }
                            else if ($type_of == "Short" || $type_of == "Skirt"){
                                $temp = "6";
                            }
                        }
                        else if($type = "Top")
                        {
                            print_r("What?");
                            if($type_of == "Long Sleeve")
                            {
                                $temp = "15";
                            }
                            else if ($type_of == "T-Shirt")
                            {
                                print_r("Yes?");
                                $temp = "8";
                            }
                            else if ($type_of == "Tank Top")
                            {
                                $temp = "5";
                            }
                        }
                        else if ($type_of == "Sweater")
                        {
                            if($type_of == "Jacket")
                            {
                                $temp = "40";
                            }
                            else if($type_of == "Cardigan")
                            {
                                $temp = "6";
                            }
                            else if ($type_of == "Pullover")
                            {
                                $temp = "20";
                            }
                        }
                        else if ($type_of == "One Piece")
                        {
                            if($type_of == "Short Dress" || $type_of == "Romper")
                            {
                                $temp = "5";
                            }
                            else if ($type_of = "Long Dress" || $type_of = "Jump Suit")
                            {
                                $temp = "20";
                            }
                        }

                        if(!mysqli_stmt_prepare($stmt, $sql))
                        {
                            echo "SQL statement failed";
                        }
                        else{
                            mysqli_stmt_bind_param($stmt, "ssssssss", $name, $type_of, $color, $temp, $pattern, $occasion, $fileName, $type);
                            mysqli_stmt_execute($stmt);
                            print_r($temp);
                            // move_uploaded_file($ftemp,$filedir); // upload into respective folder (image/)
                            // header("Location: ../upload.php?upload=success");
                        }
                    }
                }
            }
        }

    }



}
else{
    header("Location: ../upload.php?found=didnot");
}