<?php
include("includes/session.php")
?>

<?php
    //connect database
    include_once 'includes/database_setup.php';
    //select every type_ shirt in the database
    $sql_top = "SELECT nameofclothing, typeofclothing, color, pattern, occasion, file_title, type_ FROM clothing WHERE type_ = 'Shirt';";
    $stmt_top = mysqli_stmt_init($conn);
    //check if there is a statement error
    if(!mysqli_stmt_prepare($stmt_top, $sql_top))
    {
        echo "SQL connection failed";
    }
    //if there is no error
    else{
        //make the slide show for top
        echo 
        '<div class="mt-5 col-md-12"> 
            <div class="container">
                <div class = "full_closet">
                    <h5>top</h5> </div>';
        mysqli_stmt_execute($stmt_top);
        $result_top = mysqli_stmt_get_result($stmt_top);
        echo '<div class = "full_closet"> ';
        while($row_top = mysqli_fetch_assoc($result_top)){
            echo 
            '<div class="slideshow_top">
            <img src="includes/images/' .$row_top["file_title"].'" alt = "' .$row_top["nameofclothing"]. '"class="center"></div>';
        }
        echo '</div>';
        //next and previous arrows allow user to navigate
        echo '<div class = "center"> 
        <svg width="3em" height="3em" viewBox="0 0 16 16" class="prev" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
        <path fill-rule="evenodd" d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-4.5.5a.5.5 0 0 0 0-1H5.707l2.147-2.146a.5.5 0 1 0-.708-.708l-3 3a.5.5 0 0 0 0 .708l3 3a.5.5 0 0 0 .708-.708L5.707 8.5H11.5z" onclick="nav_top(-1)">/>
        </svg>
        <svg width="3em" height="3em" viewBox="0 0 16 16" class="next" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
        <path fill-rule="evenodd" d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-11.5.5a.5.5 0 0 1 0-1h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5z" onclick="nav_top(1)"/>
        </svg>

        </div>';
    }
    
    //select every type_ sweater in the database
    $sql_sweater = "SELECT nameofclothing, typeofclothing, color, pattern, occasion, file_title, type_ FROM clothing WHERE type_ = 'Sweater';";
    $stmt_sweater = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt_sweater, $sql_sweater))
    {
        echo "SQL connection failed";
    }

    //if there is no error
    else{
        //make the slide show for sweater
        echo 
        '<div class="mt-5 col-md-12"> 
            <div class="container">
                <div class = "full_closet">
                    <h5>sweater</h5> </div>';
        mysqli_stmt_execute($stmt_sweater);
        $result_sweater = mysqli_stmt_get_result($stmt_sweater);
        echo '<div class = "full_closet">';
        while($row_sweater = mysqli_fetch_assoc($result_sweater)){
            echo '<div class="slideshow_sweater">
            <img src="includes/images/' .$row_sweater["file_title"].'" alt = "' .$row_sweater["nameofclothing"]. '"class="center"></div>';
        }
        echo '</div>';
        //next and previous arrows allow user to navigate
        echo '<div class = "center"> 
        <svg width="3em" height="3em" viewBox="0 0 16 16" class="prev" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
        <path fill-rule="evenodd" d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-4.5.5a.5.5 0 0 0 0-1H5.707l2.147-2.146a.5.5 0 1 0-.708-.708l-3 3a.5.5 0 0 0 0 .708l3 3a.5.5 0 0 0 .708-.708L5.707 8.5H11.5z" onclick="nav_sweater(-1)">/>
        </svg>
        <svg width="3em" height="3em" viewBox="0 0 16 16" class="next" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
        <path fill-rule="evenodd" d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-11.5.5a.5.5 0 0 1 0-1h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5z" onclick="nav_sweater(1)"/>
        </svg>

        </div>';
    }
    //select every type_ bottom in the database
    $sql_bottom = "SELECT nameofclothing, typeofclothing, color, pattern, occasion, file_title, type_ FROM clothing WHERE type_ = 'Bottom';";
    $stmt_bottom = mysqli_stmt_init($conn);
    //check for statement error
    if(!mysqli_stmt_prepare($stmt_bottom, $sql_bottom))
    {
        echo "SQL connection failed";
    }
    
    //if there is no error
    else{
        //make the slide show for pant
        echo '<div class="mt-5 col-md-12"> 
        <div class="container">
        <div class = "full_closet">
        <h5>bottom</h5> </div>';
        mysqli_stmt_execute($stmt_bottom);
        $result_bottom = mysqli_stmt_get_result($stmt_bottom);
        echo '<div class = "full_closet">';
        while($row_bottom = mysqli_fetch_assoc($result_bottom)){
            echo '<div class="slideshow_bottom">
            <img src="includes/images/' .$row_bottom["file_title"].'" alt = "' .$row_bottom["nameofclothing"]. '"class="center"></div>';
        }
        echo '</div>';
        //next and previous arrows allow user to navigate
        echo '<div class = "center"> 
        <svg width="3em" height="3em" viewBox="0 0 16 16" class="prev" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
        <path fill-rule="evenodd" d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-4.5.5a.5.5 0 0 0 0-1H5.707l2.147-2.146a.5.5 0 1 0-.708-.708l-3 3a.5.5 0 0 0 0 .708l3 3a.5.5 0 0 0 .708-.708L5.707 8.5H11.5z" onclick="nav_bottom(-1)">/>
        </svg>
        <svg width="3em" height="3em" viewBox="0 0 16 16" class="next" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
        <path fill-rule="evenodd" d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-11.5.5a.5.5 0 0 1 0-1h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5z" onclick="nav_bottom(1)"/>
        </svg>

        </div>';
    }
    


    //select every type_ onepiece in the database
    $sql_onepiece = "SELECT nameofclothing, typeofclothing, color, pattern, occasion, file_title, type_ FROM clothing WHERE type_ = 'Onepiece';";
    $stmt_onepiece = mysqli_stmt_init($conn);
    //check if there is a statement error
    if(!mysqli_stmt_prepare($stmt_onepiece, $sql_onepiece))
    {
        echo "SQL connection failed";
    }

    //if there is no error
    else{
        //make the slide show for onepiece
        echo '<div class="mt-5 col-md-12"> 
        <div class="container">
        <div class = "full_closet">
        <h5>one piece</h5> </div>';
        mysqli_stmt_execute($stmt_onepiece);
        $result_onepiece = mysqli_stmt_get_result($stmt_onepiece);
        echo '<div class = "full_closet">';
        while($row_onepiece = mysqli_fetch_assoc($result_onepiece)){
            echo '<div class="slideshow_onepiece">
            <img src="includes/images/' .$row_onepiece["file_title"].'" alt = "' .$row_onepiece["nameofclothing"]. '"class="center"></div>';
        }
        echo '</div>';
        //next and previous arrows allow user to navigate
        echo '<div class = "center"> 
        <svg width="3em" height="3em" viewBox="0 0 16 16" class="prev" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
        <path fill-rule="evenodd" d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-4.5.5a.5.5 0 0 0 0-1H5.707l2.147-2.146a.5.5 0 1 0-.708-.708l-3 3a.5.5 0 0 0 0 .708l3 3a.5.5 0 0 0 .708-.708L5.707 8.5H11.5z" onclick="nav_onepiece(-1)">/>
        </svg>
        <svg width="3em" height="3em" viewBox="0 0 16 16" class="next" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
        <path fill-rule="evenodd" d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-11.5.5a.5.5 0 0 1 0-1h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5z" onclick="nav_onepiece(1)"/>
        </svg>

        </div>';
    }
?>





<!-- javascript -->
<?php
include("includes/footer.php") 
?> 
