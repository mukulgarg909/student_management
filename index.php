<?php 
session_start();//yahn b session bnaya taki login_reuired or yeh access ho sky 
?>
<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Student Management</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap-theme.css">
    <style>
      body  {
          background-image : url('b3.jpg');


        }
    </style>
</head>

<body>
<div style="margin-top: 7%;" class="container-fluid ">

    <form class="form-signin" action="index.php" method="post">
        <h2 style="color: white;" class="form-signin-heading page-header">Please sign in</h2>
        <label for="inputEmail" class="sr-only"></label>
        <input  type="text" id="inputEmail" name="fuser" class="form-control" placeholder="User Name" required autofocus>
        <label for="inputPassword" class="sr-only"></label>
        <input type="password" id="inputPassword" name="fpass" class="form-control" placeholder="Password" required>

        <button class="btn btn-lg btn-primary btn-block" type="submit" name="submit" value="submit">Sign in</button>

        <?php
        if(isset($_POST['submit']))
        {   
        //The isset () function is used to check whether a variable is set or not and it also checks if the variable is assigned to Null if yes, then it returns false
            $user = $_POST['fuser'];
            $pass = $_POST['fpass'];
            if($user == 'batman' && $pass == '12345')
            {
                $_SESSION['username'] = 'name';// Set session variables ab set ho gya session ka variable using $_SESSION[''] global keyword or jb feild py input $user $pass batman or 12345 hoga tbi login hoga user fir voh home page py redurect hoga
                echo '<meta http-equiv="refresh" content="0; url=home.php" />';
                die();
            }
            else
            {
                echo '<div class="login-notice"><p class="text-center login-notice">Username or Password Error!</p></div>';
            }

        }
        ?>


    </form>

</div> <!-- /container -->


<!-- Bootstrap core JavaScript
  =========================================================  -->

<script src="http://code.jquery.com/jquery-latest.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/script.js"></script>

</body>