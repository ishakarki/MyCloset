<!-- UPLOAD TAB -->
<?php
include("includes/session.php");

if (isset($_GET['saved']))
{
  if($_GET['saved'] == 'error')
  {
    echo '<script type="text/javascript">';
    echo 'alert("Outfit Saving Error")';  //Error with saving the outfit)
    echo '</script>';
  }
  elseif($_GET['saved'] == 'duplicate')
  {
    echo '<script type="text/javascript">';
    echo 'alert("Duplicate Outfit")';  //outfit is duplicated
    echo '</script>';
  }
  elseif($_GET['saved'] == 'success')
  {
    echo '<script type="text/javascript">';
    echo 'alert("Yay! Your outfit has been saved")';  //outfit is successfully saved
    echo '</script>';
  }
}
?>
<!-- FOR SPACE -->
<div class="mt-5 col-md-12"> 
<!-- PLACING THE FORM IN A CARD -->
  <div class="card text-center">

  <div class="card-body">
    <h4 class="card-title">UPLOAD</h4>
    <div class="d-flex justify-content-center">
    <form action = <?=$_SERVER['PHP_SELF']?> method = "post">
  <!-- UPLOAD NAME OF THE PIECE OF CLOTHING -->
  <div class="form-group">
    <!-- <label for="cloth-title">Title</label> -->
    <input type="number" class="form-control" name="temperature" placeholder="Fahrenheit " required="">
  </div>

<!-- CATEGORY FOR OCCASION -->
<div class="form-group">
      <select class="form-control" name="occasion_request" required="">
        <option selected>Occasion</option>
        <option value = 4>Fancy</option>
        <option value = 3>Business</option>
        <option value = 2>Casual</option>
        <option value = 1>A Walk in the Park Type of Casual</option>
      </select>
</div>
<!-- SUBMIT BUTTON -->
  <button type="submit" class="btn btn-primary" name="request-submit">Submit</button>
</form>
    </div>
    <!-- <p class="card-text">With supporting text below as a natural lead-in to additional content.</p> -->
    <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
  </div>
  <div class="card-footer text-muted">
  </div>
</div>
</div>


<div class="mt-5 col-md-12">
<!-- <input type="button" name="test" id="test" value="RUN" /><br/> -->

<?php
// include files to have connection to the data and be able to use the oufitcreator class
include('includes/readdata.php');
include('includes/outfitcreator.php');

if(isset($_POST['request-submit']))
{
    $temperature = $_POST['temperature'];
    

    $occasion_ = $_POST['occasion_request'];
    //check for empty input
    if(empty($temperature) || $occasion_ == "Occasion")
    {
        header("Location: ../main.php?found=emptyfields");
    }

    //new outfit created
    $creator = new OutfitCreator($mycloset);
    

    $creator->searchForOptions($temperature, $occasion_);
    $ar = $creator->random_outfit();
    //check if the generated outfit is empty
    if(empty($ar))
    {
      echo 'No outfit available for given conditions.';
    }

    //present the outfit created
    for($i = 0; $i < count($ar); $i++)
    {
        $file = $ar[$i]->get_file_title();
        $name = $ar[$i]->get_name();
        echo '<div class = "container">
        <img src="includes/images/' .$file. '"alt = "' .$name. '" style="width:100%">
        </div>';
    }

    //again if the generated outfit is not empty and the user want to save a particular outfit 
    if(!empty($ar))
    {
      // 3 max pieces in an outfit
      $p1 = "NULL";
      $p2 = "NULL";
      $p3 = "NULL";

      //stores every piece in a variable
      for($i = 0; $i < count($ar); $i++)
      {
        if($i==0)
        {
          //get the file of each piece
          $p1 = $ar[$i]->get_file_title();
        }
        if($i==1)
        {
          //get the file of the piece
          $p2 = $ar[$i]->get_file_title();
        }
        if($i==2)
        {
          //get the file of the piece
          $p3 = $ar[$i]->get_file_title();
        }
      }

      //ask the user if they wanted to name the outfit anything in particular, this form has all of the information of the outfit files for the user to save the outfit
      echo '<form method = "post" action = "includes/favorite_insert.php">
      <input type="text" name="piece1" value=' .$p1. ' style="display:none;"/>
      <input type="text" name="piece2" value=' .$p2. ' style="display:none;"/>
      <input type="text" name="piece3" value=' .$p3. ' style="display:none;"/>
      <input type = "text" name = "temp" value = ' .$temperature. ' style= display:none;"/>
      <input type = "text" name = "occasion" value = ' .$occasion_. ' style= display:none;"/>
      <input type = "text" name = "nameofoutfit" placeholder = "Outfit Name"></input>
      <input type="submit" name="test" id="test" value="RUN" />
      </form>';
    }
    
}
?>

</div>


<?php
include("includes/footer.php") 
?>
