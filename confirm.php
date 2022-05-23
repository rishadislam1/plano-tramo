<?php
include 'dbconnect.php';
include 'header.php';
require('functions.inc.php');
$msg='';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$username=get_safe_value($conn,$_POST['username']);
	$password=get_safe_value($conn,$_POST['password']);
 
    echo $username;
	$sql="select * from signup where signup_username = '$username' and signup_password='$password'";
	$res=mysqli_query($conn,$sql);
	$count=mysqli_num_rows($res);

  
	if($count>0){
		$_SESSION['signup_username']=$username;
		header('location:hosteldetails.php');
		die();
	}else{
		$msg="Please enter correct login details";	
	}
	
}
?>