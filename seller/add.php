<?php
session_start();
include_once('connection.php');
$username = $_GET['username'];


if (isset($_POST['add'])) {
	$property_name = $_POST['property_name'];
	$property_description = $_POST['property_description'];
	$property_price = $_POST['property_price'];
	$property_status = $_POST['property_status'];
	$property_type = $_POST['property_type'];
	$sub_proper = $_POST['sub_proper'];
	$username = $_GET['username'];
	$city = $_POST['city'];
	$address = $_POST['address'];
	$con = $_POST['con'];
	$property_size = $_POST['property_size'];

	
        
       

	$sql = "INSERT INTO property (property_name, property_description, property_price,property_status,property_type,sub_proper,city,username,address,construction_status,property_size,admin_status) VALUES ('$property_name', '$property_description', '$property_price', '$property_status', '$property_type', '$sub_proper', '$city', '$username','$address','$con','$property_size','0')";


	if ($conn->query($sql)) {
		$_SESSION['success'] = 'Property added successfully';
	} else {
		$_SESSION['error'] = 'Something went wrong while adding';
	}
} else {
	$_SESSION['error'] = 'Fill up add form first';
}


 header("Location: index.php?username=$username");
?>