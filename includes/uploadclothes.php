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

    if(empty($name) || $type == 'Type' || empty($occasion) || empty($color) || $type_of == 'Category' || empty("file"))
    {
        header("Location: ../upload.php?found=emptyfields");
        exit();
    }

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
            $fildir = "../images/" . $fileName;
            include_once "database_setup.php";

            $sql = "SELECT * FROM clothing WHERE file_title =?";
            $stmt = mysqli_stmt_init($conn);
            if(!mysqli_stmt_prepare($stmt, $sql))
            {
                header("Location: ../upload.php?found=error");
                exit();
            }
        }
        else{
            mysqli_stmt_bind_param($stmt, "s", $fileName);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_store_result($stmt);
            $result = mysqli_stmt_num_rows($stmt);
            if($result > 0)
            {
                header("Location: ../upload.php?found=duplicatefilename")
                exit();
            }
            else{
                $sql = "INSERT INTO clothing (nameofclothing, typeofclothing,color,temp,pattern,occasion,file_title, type_) VALUES (?,?,?,?,?,?,?,?)";
                if(!mysqli_stmt_prepare($stmt, $sql))
                {
                    header("Location: ../upload.php?found=error");
                    exit();
                }
                else{
                    if($occasion == "Fancy")
                    {
                        $occasion = 4;
                    }
                    else if ($occasion == "Business")
                    {
                        $occasion = 3;
                    }
                    else if ($occasion == "Casual")
                    {
                        $occasion = 2;
                    }
                    else if ($occasion == "A Walk in the Park Type of Casual")
                    {
                        $occasion = 1;
                    }
                    mysqli_stmt_bind_param($stmt, "ssssssss", $name, $type_of, $color, $temp, $pattern, $occasion, $fileName, $type)
                }
            }
        }
    }



}