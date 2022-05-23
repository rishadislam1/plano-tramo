<?php  
$username = $_GET['username'];
echo '<script>alert("Payment successfull");
    window.location.href="http://localhost/plano&tramo/user?username='.$username.'";
</script>';
 ?>