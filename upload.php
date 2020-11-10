<?php
include("includes/session.php")
?>
<!-- <div class="card">
  <div class="card-body">
<div class="mt-5 col-md-12">
<form action = "includes/uploadclothes.php" method = "post">
  <div class="d-flex justify-content-center">
    <div class="col-auto">
      <label class="sr-only" for="inlineFormInput">Name</label>
      <input type="text" class="form-control mb-2" name= "clothes_name" placeholder="Title">
    </div>
    <div class="col-auto">
      <label class="sr-only" for="inlineFormInputGroup">Username</label>
      <div class="input-group mb-2">
        <div class="input-group-prepend">
          <div class="input-group-text">@</div>
        </div>
        <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Username">
      </div>
    </div>
    <div class="col-auto">
      <div class="form-check mb-2">
        <input class="form-check-input" type="checkbox" id="autoSizingCheck">
        <label class="form-check-label" for="autoSizingCheck">
          Remember me
        </label>
      </div>
    </div>
    <div class="col-auto">
      <button type="submit" class="btn btn-primary mb-2">Submit</button>
    </div>
  </div>
</form>
</div>
</div></div> -->
<div class="mt-5 col-md-12">

<div class="card text-center">
  <div class="card-header">
  </div>
  <div class="card-body">
    <h5 class="card-title">UPLOAD</h5>
    <div class="d-flex justify-content-center">
    <form>
  <div class="form-group">
    <!-- <label for="cloth-title">Title</label> -->
    <input type="email" class="form-control" id="cloth-title" name="title" placeholder="Title">
    <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
  </div>
  <div class="form-group">
    <!-- <label for="exampleInputPassword1">Password</label> -->
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  <div class="form-group">
      <select id="inputState" class="form-control">
        <option selected>Type</option>
        <option>Bottom</option>
        <option>Top</option>
        <option>Sweater</option>
        <option>One Piece</option>
      </select>
</div>
<div class="form-group">
      <select id="inputState" class="form-control" placeholder="Occasion">
        <option selected>Occasion</option>
        <option>Fancy</option>
        <option>Business</option>
        <option>Casual</option>
        <option>A Walk in the Park Type of Casual</option>
      </select>
</div>
  </div>
  <div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="Red">
  <label class="form-check-label" for="inlineRadio1">Red</label>
</div>
<div class="form-check form-check-inline">
<input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="Blue">
  <label class="form-check-label" for="inlineRadio2">Blue</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="Purple">
  <label class="form-check-label" for="inlineRadio3">Purple</label>
</div>
  <button type="submit" class="btn btn-primary">Submit</button>
  <div class="form-group">
    <!-- <label for="exampleInputPassword1">Password</label> -->
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Temperature">
  </div>
</form>
    </div>
    <!-- <p class="card-text">With supporting text below as a natural lead-in to additional content.</p> -->
    <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
  </div>
  <div class="card-footer text-muted">
  </div>
</div>
</div>