<?php
#Display the favorite outfit the user saved
include("includes/session.php");
#include to connect to database
include_once 'includes/database_setup.php';
#set up sql statement
$sql = "SELECT outfitname, piece1, piece2, piece3, temperature, occasion FROM outfits;";
$stmt = mysqli_stmt_init($conn);
#check if the sql statement failed
if(!mysqli_stmt_prepare($stmt, $sql))
{
    echo 'SQL connection fail';
}
else{
    mysqli_stmt_execute($stmt);
    #get the result of the statement
    $result = mysqli_stmt_get_result($stmt);
    $occasion = "";
    #display every row
    while($row = mysqli_fetch_assoc($result))
    {
        #check the occasion to display text depending on the occasion
        if($row["occasion"] ==1)
        {
            $occasion = "A walk in the park type of casual";
        }
        elseif ($row["occasion"] ==2){
            $occasion = "Casual";
        }
        elseif ($row["occasion"] ==3){
            $occasion = "Business";
        }
        elseif ($row["occasion"] ==4){
            $occasion = "Fancy";
        }
        #html displaying the information of the outfit and clothing pics
        echo 
        '<div class="center">
            <div class = "fav_outfits">
                <div class="text-center" style="border-width: 5px;">
                    <h6> Outfit: '.$row["outfitname"].'</h6>
                    <h3> Temperature: '.$row["temperature"].'</h3>
                    <h3> Occasion: '.$occasion.'</h3>
                </div>
            </div>
            <div class = "fav_outfits">
                <img src="includes/images/' .$row["piece1"].'">
            </div>';

            if($row['piece2'] != "NULL")
            {
                echo '<div class = "fav_outfits">
                    <img src="includes/images/' .$row["piece2"].'">
                </div>';
            }
            if($row['piece3'] != "NULL")
            {
                echo '<div class = "fav_outfits">
                    <img src="includes/images/' .$row["piece3"].'">
                </div>';
            }

        echo '</div>';
    }

}
?>