<?php
$user = $_POST['fuser'];
$pass = $_POST['fpass'];

if($_POST['submit']){
    if($user == 'batman' && $pass == '12345'){
        echo 'Log in success';
    }
    else{
        echo 'Username or Password error!';
    }
}
?>
