<!-- UPLOAD TAB -->
<?php
include("includes/session.php")
?>
<!-- FOR SPACE -->
<div class="mt-5 col-md-12"> 
<!-- PLACING THE FORM IN A CARD -->
  <div class="card text-center">

  <div class="card-body">
    <h4 class="card-title">CREATE NEW OUTFIT</h4>
    <div class="d-flex justify-content-center">
    <form action = <?=$_SERVER['PHP_SELF']?> method = "post">
  <!-- UPLOAD NAME OF THE PIECE OF CLOTHING -->
  <div class="form-group">
    <!-- <label for="cloth-title">Title</label> -->
    <input type="number" class="form-control" name="temperature" placeholder="Fahrenheit " required="">
  </div>

<!-- CATEGORY FOR OCCASION -->
<div class="form-group">
      <select class="form-control" name="occasion_request">
        <option selected>Occasion</option>
        <option value = 4>Fancy</option>
        <option value = 3>Business</option>
        <option value = 2>Casual</option>
        <option value = 1>A Walk in the Park Type of Casual</option>
      </select>
</div>
<!-- SUBMIT BUTTON -->
  <button type="submit" class="btn btn-primary" name="request-submit">Generate!</button>
</form>
    </div>
    <!-- <p class="card-text">With supporting text below as a natural lead-in to additional content.</p> -->
    <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
  </div>
  <div class="card-footer text-muted">
  </div>
</div>
</div>

<!-- <div class = "container">
    <img src="includes/images/tanktop.png" alt="Snow" style="width:100%">

</div>
<div class = "container">

    <img src="includes/images/skirt.png" alt="Forest" style="width:100%">

</div> -->

<div class="mt-5 col-md-12">

<?php
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

    // creating new generator object
    $creator = new OutfitCreator($mycloset);

    // filtering based on input temp and occasion
    $creator->searchForOptions($temperature, $occasion_);

    // array of random clothing objects (generated from creator)
    $ar = $creator->random_outfit();

    if(empty($ar))
    {
      echo 'No outfit available for given conditions.';
    }
    for($i = 0; $i < count($ar); $i++)
    {
        $file = $ar[$i]->get_file_title();
        $name = $ar[$i]->get_name();
        echo '<div class = "container">
        <img src="includes/images/' .$file. '"alt = "' .$name. '" style="width:100%">
        </div>';
    }

   
}
?>

</div>


<?php
include("includes/footer.php") 
?>
