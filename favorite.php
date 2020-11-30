<?php
include("includes/session.php");

include_once 'includes/database_setup.php';
$sql = "SELECT outfitname, piece1, piece2, piece3, temperature, occasion FROM outfits;";
$stmt = mysqli_stmt_init($conn);

if(!mysqli_stmt_prepare($stmt, $sql))
{
    echo 'SQL connection fail';
}
else{
    mysqli_stmt_execute($stmt);

    $result = mysqli_stmt_get_result($stmt);

    while($row = mysqli_fetch_assoc($result))
    {
        echo 
        '<div class="center">
            <div class = "fav_outfits">
                <div class="text=center">
                    <h6>'.$row["outfitname"].'</h6>
                    <h6>'.$row["temperature"].'</h6>
                    <h6>'.$row["occasion"].'</h6>
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





<!-- <div class="center">
<div class = "fav_outfits">
    <img src= "includes/images/blue_jacket.PNG" alt="jacket">
    <div class="text-center">
        <h6>Hello!</h6>
        <h6>Hello!</h6>
    </div>
</div>

<div class = "fav_outfits">
    <img src= "includes/images/blue_jacket.PNG" alt="jacket">
</div>

<div class = "fav_outfits">
    <img src= "includes/images/blue_jacket.PNG" alt="jacket">
</div>
<div class = "fav_outfits">
    <img src= "includes/images/blue_jacket.PNG" alt="jacket">
</div>
</div>

<div>
<div class = "fav_outfits">
    <img src= "includes/images/blue_jacket.PNG" alt="jacket">
</div>

<div class = "fav_outfits">
    <img src= "includes/images/blue_jacket.PNG" alt="jacket">
</div>

<div class = "fav_outfits">
    <img src= "includes/images/blue_jacket.PNG" alt="jacket">
</div>
</div> -->