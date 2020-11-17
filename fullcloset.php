<?php
include("includes/session.php")
?>

<?php
    include_once 'includes/database_setup.php';
    $sql_top = "SELECT nameofclothing, typeofclothing, color, pattern, occasion, file_title, type_ FROM clothing WHERE type_ = 'Shirt';";
    $stmt_top = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt_top, $sql_top))
    {
        echo "SQL connection failed";
    }
    else{
        echo '<div class="mt-5 col-md-12"> 
        <div class="container">
        <h2>top</h2>';
        mysqli_stmt_execute($stmt_top);
        $result_top = mysqli_stmt_get_result($stmt_top);
        while($row_top = mysqli_fetch_assoc($result_top)){
            echo '<div class="slideshow_top">
            <img src="includes/images/' .$row_top["file_title"].'" alt = "' .$row_top["nameofclothing"]. '"class="center"></div>';
        }
        echo '<div class = "center"> <a class="prev" onclick="nav_top(-1)">&#10094;</a>
        <a class="next" onclick="nav_top(1)">&#10095;</a>
        </div> </div></div>';
    }

    $sql_sweater = "SELECT nameofclothing, typeofclothing, color, pattern, occasion, file_title, type_ FROM clothing WHERE type_ = 'Sweater';";
    $stmt_sweater = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt_sweater, $sql_sweater))
    {
        echo "SQL connection failed";
    }

    else{
        echo '<div class="mt-5 col-md-12"> 
        <div class="container">
        <h5>sweater</h5>';
        mysqli_stmt_execute($stmt_sweater);
        $result_sweater = mysqli_stmt_get_result($stmt_sweater);
        while($row_sweater = mysqli_fetch_assoc($result_sweater)){
            echo '<div class="slideshow_sweater">
            <img src="includes/images/' .$row_sweater["file_title"].'" alt = "' .$row_sweater["nameofclothing"]. '"class="center"></div>';
        }
    }

    echo '<div class = "center"><a class="prev" onclick="nav_sweater(-1)">&#10094;</a>
    <a class="next" onclick="nav_sweater(1)">&#10095;</a>
    </div></div></div>';

    $sql_bottom = "SELECT nameofclothing, typeofclothing, color, pattern, occasion, file_title, type_ FROM clothing WHERE type_ = 'Bottom';";
    $stmt_bottom = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt_bottom, $sql_bottom))
    {
        echo "SQL connection failed";
    }

    else{
        echo '<div class="mt-5 col-md-12"> 
        <div class="container">
        <h5>bottom</h5>';
        mysqli_stmt_execute($stmt_bottom);
        $result_bottom = mysqli_stmt_get_result($stmt_bottom);
        while($row_bottom = mysqli_fetch_assoc($result_bottom)){
            echo '<div class="slideshow_bottom">
            <img src="includes/images/' .$row_bottom["file_title"].'" alt = "' .$row_bottom["nameofclothing"]. '"class="center"></div>';
        }
    }

    echo '<div class = "center"><a class="prev" onclick="nav_bottom(-1)">&#10094;</a>
    <a class="next" onclick="nav_bottom(1)">&#10095;</a>
    </div></div></div>';


    $sql_onepiece = "SELECT nameofclothing, typeofclothing, color, pattern, occasion, file_title, type_ FROM clothing WHERE type_ = 'Onepiece';";
    $stmt_onepiece = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt_onepiece, $sql_onepiece))
    {
        echo "SQL connection failed";
    }

    else{
        echo '<div class="mt-5 col-md-12"> 
        <div class="container">
        <h5>One Piece</h5>';
        mysqli_stmt_execute($stmt_onepiece);
        $result_onepiece = mysqli_stmt_get_result($stmt_onepiece);
        while($row_onepiece = mysqli_fetch_assoc($result_onepiece)){
            echo '<div class="slideshow_onepiece">
            <img src="includes/images/' .$row_onepiece["file_title"].'" alt = "' .$row_onepiece["nameofclothing"]. '"class="center"></div>';
        }
    }

    echo '<div class = "center"><a class="prev" onclick="nav_onepiece(-1)">&#10094;</a>
    <a class="next" onclick="nav_onepiece(1)">&#10095;</a>
    </div></div></div>';


?>






<?php
include("includes/footer.php") 
?> 
