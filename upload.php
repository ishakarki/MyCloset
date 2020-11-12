<?php
include("includes/session.php")
?>
<div class="mt-5 col-md-12">

  <div class="card text-center">
    <div class="card-header">
  </div>
  <div class="card-body">
    <h5 class="card-title">UPLOAD</h5>
    <div class="d-flex justify-content-center">
    <form action = "includes/uploadclothes.php" method = "post">
    <div class="form-group">
      <input type="file" name="file">
  </div>
  <div class="form-group">
    <!-- <label for="cloth-title">Title</label> -->
    <input type="text" class="form-control" id="cloth-title" name="title" placeholder="Title">
    <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
  </div>
  <div class="form-group">
      <select class="form-control" name = "type" id = "type_" onchange="showHide(this.value);"> 
        <option selected value = ''>Type</option>
        <option value = "Bottom">Bottom</option>
        <option value= "Top">Top</option>
        <option value = "Sweater">Sweater</option>
        <option value = "One Piece">One Piece</option>
      </select>
</div>
<div class="form-group" id="bottomtype">
      <select class="form-control" name = "type_of">
        <option selected>Bottom</option>
        <option>Pant</option>
        <option>Skirt</option>
        <option>Shorts</option>
      </select>
</div>
<div class="form-group" id="toptype">
      <select class="form-control" name = "type_of">
        <option selected>Top</option>
        <option>Tank Top</option>
        <option>T-Shirt</option>
        <option>Long Sleeve</option>
      </select>
</div>
<div class="form-group" id="sweatertype">
      <select class="form-control" name = "type_of">
        <option selected>Sweater</option>
        <option>Cardigan</option>
        <option>Pullover</option>
        <option>Jacket</option>
      </select>
</div>
<div class="form-group" id="onepiecetype">
      <select class="form-control" name = "type_of">
        <option selected>One Piece</option>
        <option>Short Dress</option>
        <option>Romper</option>
        <option>Jump Suit</option>
        <option>Dress</option>
      </select>
</div>
<div class="form-group">
      <select class="form-control" name="occasion">
        <option selected>Occasion</option>
        <option>Fancy</option>
        <option>Business</option>
        <option>Casual</option>
        <option>A Walk in the Park Type of Casual</option>
      </select>
</div>

<div class="form-group">
      <select class="form-control" name="color">
        <option selected>Color</option>
        <option>Red</option>
        <option>Green</option>
        <option>Blue</option>
        <option>Purple</option>
        <option>White</option>
        <option>Black</option>
        <option>Green</option>
        <option>Orange</option>
        <option>Multi-Colored</option>
      </select>
</div>

  </div>
  <div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name = "Pattern" value="haspattern">
  <label class="form-check-label">Pattern</label>
</div>
<div class="form-check form-check-inline">
<input class="form-check-input" type="radio" name = "Pattern" value="nopattern">
  <label class="form-check-label">No Pattern</label>
</div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>
    </div>
    <!-- <p class="card-text">With supporting text below as a natural lead-in to additional content.</p> -->
    <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
  </div>
  <div class="card-footer text-muted">
  </div>
</div>
</div>

<script type="text/javascript"  src = "includes/javascript/formdisplay.js">
</script>

<?php
include("includes/footer.php") 
?>