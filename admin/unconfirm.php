<?php  

session_start();

include "connection.php";

$username = $_GET['username'];
$id = $_GET['id'];
$sql = "UPDATE property SET admin_status='0' WHERE property_id = '$id'";
mysqli_query($conn,$sql);
Header("Location: more_details.php?username=$username");
?>