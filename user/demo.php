<?php 
$id = $_GET['id'];

$amount = "";
$c_id = "";
$name = "";
$email = "";
$p_number = "";
$add = "";
        include 'dbconnect.php';
        $q3 =  "SELECT * FROM signup WHERE `signup_username`='$username';";
        $run = mysqli_query($conn, $q3);
        while($row = $run->fetch_assoc()) {
            $c_id = $row["signup_id"];
            $name = $row["signup_name"];
            $email = $row["signup_email"];
            $p_number = $row["signup_number"];
            $add = $row["address"];
            
        }
        
$email = $_GET['username'];
$amount=$_GET['amount'];

echo $email;
echo $amount;
 ?>