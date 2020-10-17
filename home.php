<?php include('includes/header.inc.php'); ?>
<body class="text-center"> 
    <h2>MY</h2>
    <h1>CLOSET</h1>

<form class="form-signin" action = "includes/signin.php" method="post">
<input type="username" name="inputUsername" class="form-control" placeholder="Username" required="" autofocus="">
<input type="password" name="inputPassword" class="form-control" placeholder="Password" required="">
<button class="btn btn-lg btn-primary btn-block" type="submit" name="submit-signin">Sign in</button>
</form>
</body>