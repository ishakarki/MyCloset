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
    <input type="text" class="form-control" id="cloth-title" name="title" placeholder="Title" required="">
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
        <option selected>Category</option>
        <option>Pant</option>
        <option>Skirt</option>
        <option>Shorts</option>
      </select>
</div>
<div class="form-group" id="toptype">
      <select class="form-control" name = "type_of">
        <option selected>Category</option>
        <option>Tank Top</option>
        <option>T-Shirt</option>
        <option>Long Sleeve</option>
      </select>
</div>
<div class="form-group" id="sweatertype">
      <select class="form-control" name = "type_of">
        <option selected>Category</option>
        <option>Cardigan</option>
        <option>Pullover</option>
        <option>Jacket</option>
      </select>
</div>
<div class="form-group" id="onepiecetype">
      <select class="form-control" name = "type_of">
        <option selected>Category</option>
        <option>Short Dress</option>
        <option>Romper</option>
        <option>Jump Suit</option>
        <option>Dress</option>
      </select>
</div>
<div class="form-group">
      <select class="form-control" name="occasion">
        <option selected>Occasion</option>
        <option value = "Fancy">Fancy</option>
        <option value = "Business">Business</option>
        <option value = "Casual">Casual</option>
        <option value = "A Walk in the Park Type of Casual">A Walk in the Park Type of Casual</option>
      </select>
</div>

<div class="form-group">
      <select class="form-control" name="color" required=""> 
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

  <button type="submit" class="btn btn-primary" name="upload-submit">Submit</button>
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