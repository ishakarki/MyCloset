<?php
include("includes/session.php")
?>
<div class="container">
    <div class="slideshow_top">
    <img src= "includes/images/yellow_dress.png" alt= "dress" class="center">
    </div>
    <div class="slideshow_top">
    <img src= "includes/images/blue_jacket.png" alt= "dress" class="center"> 
    </div>
    <div class = "center">
        <a class="prev" onclick="nav_top(-1)">&#10094;</a>
        <a class="next" onclick="nav_top(1)">&#10095;</a>
    </div>
</div>

<div class="container">
    <div class="slideshow_bottom">
    <img src= "includes/images/black_pant_big.png" alt= "dress" class="center">
    </div>
    <div class="slideshow_bottom">
    <img src= "includes/images/blue_jacket.png" alt= "dress" class="center"> 
    </div>
    <div class = "center">
        <a class="prev" onclick="nav_bottom(-1)">&#10094;</a>
        <a class="next" onclick="nav_bottom(1)">&#10095;</a>
    </div>
</div>

<div class="container">
    <div class="slideshow_onepiece">
    <img src= "includes/images/yellow_dress.png" alt= "dress" class="center">
    </div>
    <div class="slideshow_onepiece">
    <img src= "includes/images/blue_jacket.png" alt= "dress" class="center"> 
    </div>
    <div class = "center">
        <a class="prev" onclick="nav_onepiece(-1)">&#10094;</a>
        <a class="next" onclick="nav_onepiece(1)">&#10095;</a>
    </div>
</div>

<div class="container">
    <div class="slideshow_sweater">
    <img src= "includes/images/black_cardigan.png" alt= "dress" class="center">
    </div>
    <div class="slideshow_sweater">
    <img src= "includes/images/blue_jacket.png" alt= "dress" class="center"> 
    </div>
    <div class = "center">
        <a class="prev" onclick="nav_sweater(-1)">&#10094;</a>
        <a class="next" onclick="nav_sweater(1)">&#10095;</a>
    </div>
</div>
<?php
include("includes/footer.php") 
?> 