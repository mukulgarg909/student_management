<!--  edit section -->
<?php
        include "connection.php";
   //     $id=$_GET["eid"];
        $rollno=$_POST["rn"];
        $fname = $_POST["fn"];
        $lname = $_POST["ln"];
        $branch = $_POST["bra"];
        $gen = $_POST["gen"];
        $acayr = $_POST["ay"];
        $sql = "update student set  fname='$fname', lname='$lname',branch='$branch', gender='$gen', acayear='$acayr' where rollno='$rollno'";

        if(mysqli_query($conn,$sql)==true)
        {
            echo"<script>alert('Details has been edited successfully');</script>";
           echo"<script>window.location='show_all.php';</script>";

        }
        else{
           echo"<script>alert('Details has not been edited');</script>";
           echo"<script>window.location='show_all.php';</script>";
        }

    ?>