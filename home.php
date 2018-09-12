<?php
//if(!isset($_SESSION['username'])){
//    echo '<meta http-equiv="refresh" content="0; url=index.php" />';
//}

include('login_required.php');//directly koi login kre bina na access kr sky home page ko essiliye file include kri
?>

<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap-theme.css">
    <title>Student Management</title>
    <link rel="stylesheet" type="text/css" href="style.css">

</head>
<body>
    <style>
        .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    </style>

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
                    <li class="active"><a href="home.php">Home</a></li>
                    <li><a href="insert.php">Insert</a></li>
                    <li><a href="show_all.php">Show all</a></li>
                    <li><a href="search.php">Search</a></li>

                </ul>
                <ul class="nav navbar-nav navbar-right log-out">
                    <li><a href="log_out.php" class="log-out">LOG OUT</a></li>
                </ul>
            </div><!--/.nav-collapse -->
    </nav>
<div class="container">
    <div class="row text-center">
     <!--<p class="margin-content welcome"" >Welcome to the student management system.</p>-->
        <h1 style="text-align: center; font-size: 40px; color: #333;" class="page-header"><strong><em>Welcome to the student database management system</em></strong></h1>
    </div>
    <div class="row">
        <table class="table home-table">
            <thead>
            <tr>
                <th  class="text-center">Name</th>
                <th  class="text-center">Email</th>
                <th  class="text-center">Mobile</th>
                <th  class="text-center">University</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td  class="text-center">Mukul Garg</td>
                <td  class="text-center">mukulgarg909@gmail.com</td>
                <td  class="text-center">+91-7018936121</td>
                <td  class="text-center">Jaypee University of Informtion and Technology, Solan(H.P)</td>
            </tr>
            </tbody>
        </table>
    </div>
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