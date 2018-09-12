<?php
session_start();

if(!isset($_SESSION['username'])){
	//yhn iska meaning yeh hai ki k jb session variable set hi nhi kia toh user login nhi kr payega or index.php by default pge py hi rhyga
    echo '<meta http-equiv="refresh" content="0; url=index.php" />';
    die();
}
?>

