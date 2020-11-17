<!-- UPLOAD TAB -->
<?php
include("includes/session.php")
?>
<!-- FOR SPACE -->
<div class="mt-5 col-md-12"> 
<!-- PLACING THE FORM IN A CARD -->
  <div class="card text-center">

  <div class="card-body">
    <h4 class="card-title">UPLOAD</h4>
    <div class="d-flex justify-content-center">
    <form action = "includes/outfitrequest.php" method = "post">
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

<?php
include("includes/footer.php") 
?>