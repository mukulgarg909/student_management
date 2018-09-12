<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap-theme.css">
    <title>Student Management</title>
    <link rel="stylesheet" type="text/css" href="style.css">

    <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.2/html5shiv.js"></script>
    <![endif]-->

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
                    <li><a href="show_all.php">Show all</a></li>
                    <li class="active"><a href="search.php">Search</a></li>
                </ul>
            </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
    </nav>

    <div class="container-fluid">
        <form action="search.php" method="post" class="text-center">
            <div class="row search-section">
                    <div class="col-md-6">
                        <input style="margin-bottom: 10px;" class="form-control" type="text" name="fname" value="" placeholder="Enter the student name">
                    </div>
            
                    <div class="col-md-6">
                        <button style="margin-right:500px;" class="btn btn-primary" type="submit" name="submit" value="submit">Search</button>
                    </div>
            </div>
        </form>
    </div>

        <?php
        if(isset($_POST['submit']) && ($_POST['submit'] == 'submit')){
                include 'connection.php';
                $search = $_POST['fname'];
                $query = "SELECT * FROM student WHERE fname = '$search'";
                $result = mysqli_query($conn,$query);

                while($person = mysqli_fetch_array($result))
                {?>
                    <table class="table table-bordered text-center">
                     <thead>
                        <tr>
                        <th>ID</th>
                        <th>Rollno</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Branch</th>
                        <th>Gender</th>
                        <th>Academic Year</th>
                        </tr>
                     </thead>
                    <tbody>
                        <tr>
                            <td>
                                <p> <?php echo $person["id"]; ?> </p>
                            </td>
                             <td>
                                <p> <?php echo $person["rollno"]; ?> </p>
                            </td>
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
                        </tr>
                   </tbody>
            </table>

                <?php }
        }
    ?>

<!-- Bootstrap core JavaScript
  =========================================================  -->

<script src="http://code.jquery.com/jquery-latest.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/script.js"></script>

</body>
</html>