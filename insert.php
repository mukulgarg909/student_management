<?php
//if(!isset($_SESSION['username'])){
//    echo '<meta http-equiv="refresh" content="0; url=index.php" />';
//}

include('login_required.php');
?>


<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">
<head lang="en">
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap-theme.css">
    <title>Student Management</title>
    <link rel="stylesheet" type="text/css" href="style.css">

</head>
<body>

<div class="container-fluid">

        <!-- Static navbar -->
        <nav class="navbar navbar-default nav-edit">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="home.php">Students Report</a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li><a href="home.php">Home</a></li>
                        <li class="active"><a href="insert.php">Insert</a></li>
                        <li><a href="show_all.php">Show all</a></li>
                         <li><a href="search.php">Search</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right log-out">
                        <li><a href="log_out.php" class="log-out">LOG OUT</a></li>
                    </ul>
                </div><!--/.nav-collapse -->
            </div><!--/.container-fluid -->
        </nav>

        <?php

        if(isset($_POST['submit'])){
            include "connection.php";
            $rollno = $_POST["rn"];
            $fname = $_POST["fn"];
            $lname = $_POST["ln"];
            $branch = $_POST["bra"];
            $gender = $_POST["gen"];
            $acayr = $_POST["ay"];
            $sql="insert into student(rollno,fname,lname,branch,gender,acayear)values('$rollno','$fname','$lname','$branch','$gender','$acayr')";

         if(mysqli_query($conn,$sql)==true){
                echo '<h1 class="notice text-center">Insert successfully</h1>';
            }
            else{
                echo '<h1 class="notice text-center">Not Inserted</h1>';
            }
        }
        ?>

    <div class="row">
        <form action="insert.php" method="post" class="text-center insert-form">
            <div class="col-md-4 col-sm-6">
                <p>Roll no</p>
                <input type="number" name="rn" value="">
            </div>
            <div class="col-md-4 col-sm-6">
                <p>FirstName</p>
                <input type="text" name="fn" value="">
            </div>
            <div class="col-md-4 col-sm-6">
                <p>LastName</p>
                <input type="text" name="ln" value="">
            </div>
            <div class="col-md-4 col-sm-6">
                <p>Gender</p>
                <input type="text" name="gen" value="">
            </div>
            <div class="col-md-4 col-sm-6">
                <p>Branch</p>
                <input type="text" name="bra" value="">
            </div>
            <div class="col-md-4 col-sm-6">
                <p>Academic Year</p>
                <input type="number" name="ay" value="">
            </div>
            <div class="col-md-12">
                <div class="submite-button">
                    <button class="btn btn-success btn-block" type="submit" name="submit" value="submit">Submit</button>
                </div>
            </div>
        </form>
    </div>

    <!-- footer -->
    <nav class="navbar navbar-default nav-edit home-footer">
        <div class="container-fluid">
            <p class="main-footer">&copy; Mukul Garg 2018</p>
        </div>
    </nav>
    <!-- footer -->
</div>





<!-- Bootstrap core JavaScript
  =========================================================  -->

<script src="http://code.jquery.com/jquery-latest.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/script.js"></script>

</body>