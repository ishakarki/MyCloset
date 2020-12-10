<!-- UPLOAD TAB -->
<?php
include("includes/session.php")
?>
<!-- FOR SPACE -->
<div class="mt-5 col-md-12"> 
<!-- PLACING THE FORM IN A CARD -->
  <div class="card text-center">
    <div class="card-header" style="background-color: #C39EA0;">
  </div>
  <div class="card-body">
    <h9 class="card-title">UPLOAD</h9>
    <div class="mt-5 col-md-12"> 
  </div>
    <div class="d-flex justify-content-center">
    <form action = "includes/uploadclothes.php" method = "post" enctype="multipart/form-data">
    <!-- UPLOAD FILE -->
  
    <?php
        //check the url return to display notification
				if(isset($_GET['found']))
				{
          //if there is any empty field
					if($_GET['found']=="emptyfields")
					{
						echo '<h7>*Please fill in all fields*</h7>';
					}
          //if there is anything wrong with the connection
					else if($_GET['found']=="error")
					{
						echo '<h7>*Connection Error*</h7>';
          }
          //if there is a duplicate file name
          else if($_GET['found']=="duplicatefilename")
          {
            echo '<h7>*Filename already exists*</h7>';

          }
          //if everything is successful uploaded to the database
          else if($_GET['found']=="success")
          {
            echo '<h8>*Upload Success*</h8>';

          }
				}
			?>
  <div class="form-group">
      <input type="file" name="file" id="file_">
      <div class="show_img" id="image_box">
          <img src="" alt="" class="view-image">
          <!-- <span class= "img_box_text">Cloth</span> -->
      </div>
  </div>
  <script>
      const file_ = document.getElementById("file_");
      const preview_box = document.getElementById("image_box");
      const preview_img = preview_box.querySelector(".view-image");
      const image_text = preview_box.querySelector(".img_box_text");
      
      file_.addEventListener("change", function()
      {
          const file = this.files[0];

          if(file)
          {
            const file_show = new FileReader();
            image_text.style.display = "none";

            preview_img.style.display = "block";
            preview_box.style.display="block";

            file_show.addEventListener("load", function(){
              console.log(this);
              preview_img.setAttribute("src", this.result);
            });

            file_show.readAsDataURL(file);
          }
      });
  </script>
  <!-- UPLOAD NAME OF THE PIECE OF CLOTHING -->
  <div class="form-group">
    <!-- <label for="cloth-title">Title</label> -->
    <input type="text" class="form-control" id="cloth-title" name="title" placeholder="Title" required="">
  </div>
  <!-- SPECIFY THE TYPE OF CLOTHING [BASE ON INPUT IT WILL SHOW THE CATEGORY RELATED TO THAT TYPE]--> 
  <div class="form-group">
      <select class="form-control" name = "type" id = "type_"> 
        <option selected value = ''>Type</option>
        <option value = "Bottom">Bottom</option>
        <option value= "Shirt">Top</option>
        <option value = "Sweater">Sweater</option>
        <option value = "Onepiece">One Piece</option>
      </select>
</div>
<!-- CATEGORY FOR BOTTOMS -->
<div class="form-group" id="bottomtype">
      <select class="form-control" name = "type_of_bottom">
        <option selected>Category</option>
        <option value = "Pant">Pant</option>
        <option value = "Skirt">Skirt</option>
        <option value = "Short">Short</option>
      </select>
</div>
<!-- CATEGORY FOR SHIRT -->
<div class="form-group" id="toptype">
      <select class="form-control" name = "type_of_top">
        <option selected>Category</option>
        <option value = "Tank Top">Tank Top</option>
        <option value = "T-Shirt">T-Shirt</option>
        <option value = "Long Sleeve">Long Sleeve</option>
        <option value = "Blouse">Blouse</option>

      </select>
</div>
<!-- CATEGORY FOR SWEATER -->
<div class="form-group" id="sweatertype">
      <select class="form-control" name = "type_of_sweater">
        <option selected>Category</option>
        <option value = "Cardigan">Cardigan</option>
        <option value = "Pullover">Pullover</option>
        <option value = "Jacket">Jacket</option>
      </select>
</div>
<!-- CATEGORY FOR ONE PIECE -->
<div class="form-group" id="onepiecetype">
      <select class="form-control" name = "type_of_one_piece">
        <option selected>Category</option>
        <option value = "Short Dress">Short Dress</option>
        <option value = "Romper">Romper</option>
        <option value = "Jump Suit">Jump Suit</option>
        <option value = "Long Dress">Long Dress</option>
      </select>
</div>
<!-- CATEGORY FOR OCCASION -->
<div class="form-group">
      <select class="form-control" name="occasion">
        <option selected>Occasion</option>
        <option value = 4>Fancy</option>
        <option value = 3>Business</option>
        <option value = 2>Casual</option>
        <option value = 1>A Walk in the Park Type of Casual</option>
      </select>
</div>
<!-- SPECIFY COLOR -->
<div class="form-group">
      <select class="form-control" name="color" required=""> 
        <option selected>Color</option>
        <option value = "Red">Red</option>
        <option value = "Green">Green</option>
        <option value = "Blue">Blue</option>
        <option value = "Purple">Purple</option>
        <option value = "White">White</option>
        <option value = "Black">Black</option>
        <option value = "Green">Green</option>
        <option value = "Orange">Orange</option>
        <option value = "Gray">Gray</option>
        <option value = "Tan">Tan</option>
        <option value = "Brown">Brown</option>
        <option value = "Yellow">Yellow</option>
        <option value = "Multi-Color">Multi-Color</option>
      </select>
</div>
<!-- SPECIFY IF THERE'S A PATTERN -->
<div class="form-group">
      <select class="form-control" name="pattern" required=""> 
        <option selected>Pattern</option>
        <option value = True>Yes</option>
        <option value = False>No</option>
      </select>
</div>
<!-- SUBMIT BUTTON -->
  <button type="submit" class="btn btn-primary" name="upload-submit">Submit</button>
</form>
    </div>
    <!-- <p class="card-text">With supporting text below as a natural lead-in to additional content.</p> -->
    <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
  </div>
  <div class="card-footer text-muted" style="background-color:#C39EA0;">
  </div>
</div>
</div>

<?php
include("includes/footer.php") 
?>