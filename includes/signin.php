<?php
//check if the submit button was clicked
if(isset($_POST['submit-signin']))
{
    require 'database_setup.php';
    $user = $_POST['inputUsername'];
    $pwd = $_POST['inputPassword'];
    // if the username is empty or the password is empty
    if(empty($user) || empty($pwd))
    {
        header("Location: ../home.php?found=emptyinput");
        exit();
    }
    //makes prepare statement to send in sql query and check username and password
    else{
        $query = "SELECT * FROM account WHERE username=?";
        $statement = mysqli_stmt_init($conn);

        if(!mysqli_stmt_prepare($statement, $query))
		{
            header("Location: ../home.php?found=error");
			exit();
        }
        else{
            mysqli_stmt_bind_param($statement, "s", $user);
            mysqli_stmt_execute($statement);
            $result = mysqli_stmt_get_result($statement);

            if ($row = mysqli_fetch_assoc($result))
            {
                if($row['pwd'] != $pwd)
                {   
                    header("Location: ../home.php?found=error");
			        exit();
                }
                else if ($row['pwd'] == $pwd){
                    session_start();
                    $_SESSION['userId'] = $row['username'];
                    $_SESSION['start'] = time();
                    $_SESSION['expiration'] = $_SESSION['start'] + (30*60);
                    header("Location: ../main.php");
                    exit();

                }
            }

            else{
                    header("Location: ../home.php?found=incorrectuser");
			        exit();
            }
        }
    }

    mysqli_stmt_close($statement);
    mysqli_close($conn);

}

else{
    header("Location: ../home.php");
}