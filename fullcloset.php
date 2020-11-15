<?php
include("includes/session.php")
?>
<div class="container">
    <!-- CURRENT TEST ON DISPLAY -->
    <div class="slideshow">
        <img src= "includes/images/dress.png" alt= "dress" class="center">
    </div>
    <div class="slideshow">
        <img src= "includes/images/blue_jacket.png" alt= "dress" class="center">
    </div>
    <!-- <a class="prev" onclick="nav(-1)">&#10094;</a> -->
    <!-- ARROWS SPECIFYING NEXT AND PREVIOUS -->
    <svg width="3em" height="3em" viewBox="0 0 16 16" class="prev" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
        <!-- TYPE OF ARROW, CALL NAV FUNCTION TO HANDLE REQUEST-->
        <path fill-rule="evenodd" d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-4.5.5a.5.5 0 0 0 0-1H5.707l2.147-2.146a.5.5 0 1 0-.708-.708l-3 3a.5.5 0 0 0 0 .708l3 3a.5.5 0 0 0 .708-.708L5.707 8.5H11.5z" onclick="nav(-1)">/>
    </svg>
    <svg width="3em" height="3em" viewBox="0 0 16 16" class="next" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
        <path fill-rule="evenodd" d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-11.5.5a.5.5 0 0 1 0-1h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5z" onclick="nav(-1)"/>
    </svg>

</div>


<?php
include("includes/footer.php") 
?>