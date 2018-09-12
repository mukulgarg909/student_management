<?php
    include 'connection.php';
    $id = $_GET['sid'];
    $query = "DELETE FROM student WHERE id = '$id'";
    if(mysqli_query($conn,$query)==true)
	{
		echo"<script>alert('Data deleted successfully');</script>";
		echo "<script>window.location='show_all.php';</script>";
	}
	else
	{
		echo"<script>alert('Data not deleted');</script>";
		echo "<script>window.location='home.php';</script>";
	}




?>

