<?php  
$username = $_GET['username'];
$id = $_GET['id'];
echo '<script>alert("Payment Failed");
    window.location.href="http://localhost/plano&tramo/user/view.php?username='.$username.'&id='.$id.'";
</script>';
 ?>