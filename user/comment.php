<?php 


include 'dbconnect.php';
$name = mysqli_real_escape_string($conn,$_POST['name']);
$email = mysqli_real_escape_string($conn,$_POST['email']);
$message = mysqli_real_escape_string($conn,$_POST['comment']);
$id = $_GET['id'];
$username = $_GET['username'];


$sql = "INSERT INTO comm(comm_name,property_id,comm_des,email) VALUES ('$name','$id','$message','$email')";
$result = mysqli_query($conn,$sql);

if($result){
    echo "<script>alert('your message send successfull.');
    window.location.href='view.php?username=".$username."&id=".$id."';
    </script>";
    
}
 ?>