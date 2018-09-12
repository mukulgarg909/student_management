<?php
//if(!isset($_SESSION['username'])){
//    echo '<meta http-equiv="refresh" content="0; url=index.php" />';
//}

include('login_required.php');
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
                    <li><a href="insert.php">Insert</a></li>
                    <li class="active"><a href="show_all.php">Show all</a></li>
                    <li><a href="search.php">Search</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right log-out">
                    <li><a href="log_out.php" class="log-out">LOG OUT</a></li>
                </ul>
            </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
    </nav>
  <!-- fetch data of sudent table from insert.php to display in show_all.php file-->
     <?php
    include 'connection.php';
    $query = "SELECT * FROM student";
    $result = mysqli_query($conn,$query);
     while($person = mysqli_fetch_array($result)){
        ?>
        
        <div class="container-fluid">
            <table class="table table-bordered margin-content text-center">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Roll Number</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Branch</th>
                    <th>Gender</th>
                    <th>Academic year</th>
                    <th>Action</th>
                    
                </tr>
                </thead>
                <tbody>
                <tr class="show-all-content">
                   <?php
                    $i=$person["id"];
                    ?>
                    
                    <td><?php echo $person["id"];?></td>
                    <td><?php echo $person["rollno"];?></td>
                    <td>
                        <p> <?php echo $person["fname"]; ?> </p>
                    </td>
                    <td>
                        <p> <?php echo $person["lname"] ?> </p>
                    </td>
                    <td>
                        <p> <?php echo $person["branch"]; ?> </p>
                    </td>
                    <td>
                        <p> <?php echo $person["gender"]; ?> </p>
                    </td>
                    <td>
                        <p> <?php echo $person["acayear"]; ?> </p>
                    </td>
                    <td>
                        <!--delete ka button-->
                      <?php  echo "<a style='text-decoration:none;' class='btn btn-danger' href='delete.php?sid=$i'>Delete</a>";
                    ?>
                        <!-- Button trigger modal -->
                        <button  type="button" class="btn btn-success edit_person" data-toggle="modal" data-target="#myModal" data-personid="<?php //echo $person['id']; ?>">
                            Edit
                        </button>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>

    <?php } ?>

 
    <!--edit krny py Modal khuly usi page py aur edit ho jaye student detalils using update.php -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Edit the information to be changed!</h4>
                </div>
                <div class="modal-body">

                    <div class="row">
                        <form action="update.php" method="post" class="text-center insert-form">
                            <?php
                       //     $id=$person["id"];
                            ?>
                            <div class="col-md-4 col-sm-6">
                                <label for="rln">Roll no</label>
                                <input type="number" name="rn" id="rln" value="">
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <label for="fm">First Name</label>
                                <input type="text" name="fn" id="fm" value="">
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <label for="ltn">Last Name</label>
                                <input type="text" name="ln" id="ltn" value="">
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <label for="br">Branch</label>
                                <input type="text" name="bra" id="br" value="">
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <label for="gr">Gender</label>
                                <input type="text" name="gen" id="gr" value="">
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <label for="ad">Academic year</label>
                                <input type="text" name="ay" id="ad" value="">
                            </div>
                            
                    </div>
                </div>


                <div class="modal-footer">
                    <input type="submit" name="submit">
                    
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                 </div>
            </form>
            </div>
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
<!-- End container -->


<!-- Bootstrap core JavaScript
  =========================================================  -->

<script src="http://code.jquery.com/jquery-latest.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/script.js"></script>
<script src="js.js"></script>

</body>