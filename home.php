<!DOCTYPE html>
<html lang="en">
<head>
    <title>MyCloset</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <!-- bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="includes/css/style.css" />
    <!-- jQuery, Popper.js, Bootstrap JS -->
  
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet'>

    <meta http-equiv="imagetoolbar" content="no" />
  
</head>

<?php
    //check if there has been an error with the input
    if(isset($_GET['found']))
    {
        if($_GET['found']=="error")
        {
            echo '<script type="text/javascript">';
            echo 'alert("incorrect username/password")';  //not showing an alert box. (incorrect user/password)
            echo '</script>';
        }
        else if($_GET['found']=="incorrectuser")
        {
            echo '<script type="text/javascript">';
            echo 'alert("username not found")';  //not showing an alert box. (username is not found)
            echo '</script>';
        }
    }


?>

<body class="text-center">

    <img src="includes/images/closetlogo.png" alt="closet logo" style="width:400px;height:400px;">
    <!-- WELCOME MESSAGE -->
    <h4> Welcome to My Closet! Please sign in. <h4>
    <!-- SIGN IN FORM -->
    <form class="form-signin" action = "includes/signin.php" method="post">
    <input type="username" name="inputUsername" class="form-control" placeholder="Username" required="" autofocus="">
    <input type="password" name="inputPassword" class="form-control" placeholder="Password" required="">
    <button class="btn btn-lg btn-primary btn-block" type="submit" name="submit-signin">Sign in</button>
    </form>
</body>



