<?php
require 'database_setup.php';
include 'closet.php';
//sql statement to select the following columns in order to create clothing object
$sql = "SELECT nameofclothing, typeofclothing, color, pattern, occasion, file_title, type_ FROM clothing;";
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
    // $mycloset = new Closet();
    $mycloset = Closet::getInstance();
    //get every row in the database
    while($row = mysqli_fetch_assoc($result))
    {
        // echo $row["nameofclothing"] .$row["typeofclothing"] .$row["color"] .$row["pattern"] .$row["occasion"] .$row["file_title"];
        // echo "<br>";
        //adding bottom 
        if ($row["type_"] == "Bottom")
        {
            // $bottom_piece = new Bottom($row["nameofclothing"], $row["typeofclothing"], $row["color"], $row["pattern"], $row["occasion"], $row["file_title"]);
            // $mycloset->insert_bottom($bottom_piece);

            $bottom_piece = BottomFactory::create($row["nameofclothing"], $row["typeofclothing"], $row["color"], $row["pattern"], $row["occasion"], $row["file_title"]);
            $mycloset->insert_bottom($bottom_piece);

        }
        //adding top
        elseif ($row["type_"] == "Shirt")
        {
            $top_piece = ShirtFactory::create($row["nameofclothing"], $row["typeofclothing"], $row["color"], $row["pattern"], $row["occasion"], $row["file_title"]);
            $mycloset->insert_shirt($top_piece);
        }
        //adding sweater
        elseif($row["type_"] == "Sweater")
        {
            $sweater_piece = SweaterFactory::create($row["nameofclothing"], $row["typeofclothing"], $row["color"], $row["pattern"], $row["occasion"], $row["file_title"]);
            $mycloset->insert_sweater($sweater_piece);
        }
        //adding onepiece
        elseif($row["type_"] == "Onepiece")
        {
            $one_piece = OnepieceFactory::create($row["nameofclothing"], $row["typeofclothing"], $row["color"], $row["pattern"], $row["occasion"], $row["file_title"]);
            $mycloset->insert_onepiece($one_piece);
        }
    }
    // $mycloset->print_bottoms();
    // $mycloset->print_shirts();
    // $mycloset->print_sweaters();
    // $mycloset->print_onepieces();
}



