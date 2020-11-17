<?php
require 'database_setup.php';
include 'clothing.php';
//sql statement to select the following columns in order to create clothing object
$sql = "SELECT nameofclothing, typeofclothing, color, pattern, occasion, file_title FROM clothing;";
$stmt = mysqli_stmt_init($conn);

//check for connection error
if(!mysqli_stmt_prepare($stmt, $sql))
{
    echo "fail connection";
    exit();
}
else{
    //execute the sql statement
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    //get every row in the database
    while($row = mysqli_fetch_assoc($result))
    {
        echo $row["nameofclothing"] .$row["typeofclothing"] .$row["color"] .$row["pattern"] .$row["occasion"] .$row["file_title"];
        //adding bottom 
        if ($row["typeofclothing"] == "Bottom")
        {
            $bottom_piece = new Bottom($row["nameofclothing"], $row["typeofclothing"], $row["color"], $row["pattern"], $row["occasion"], $row["file_title"]);
        }
        //adding top
        elseif ($row["typeofclothing"] == "Top")
        {
            $top_piece = new Top($row["nameofclothing"], $row["typeofclothing"], $row["color"], $row["pattern"], $row["occasion"], $row["file_title"]);
        }
        //adding sweater
        elseif($row["typeofclothing"] == "Sweater")
        {
            $sweater_piece = new Sweater($row["nameofclothing"], $row["typeofclothing"], $row["color"], $row["pattern"], $row["occasion"], $row["file_title"]);
        }
        //adding onepiece
        elseif($row["typeofclothing"] == "Onepiece")
        {
            $one_piece = new Onepiece($row["nameofclothing"], $row["typeofclothing"], $row["color"], $row["pattern"], $row["occasion"], $row["file_title"]);
        }
    }
}



