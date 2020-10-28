<?php
include("includes/session.php")
?>
<div class="container">
    <div class="slideshow">
        <img src= "includes/images/dress.png" alt= "dress" class="center">
    </div>
    <div class="slideshow">
        <img src= "includes/images/jacket.png" alt= "dress" class="center">
    </div>
    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>

</div>

<?php
include("includes/footer.php") 
?>