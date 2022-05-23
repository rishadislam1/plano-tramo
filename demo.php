<?php 
include 'dbconnect.php';
        $sql = 'SELECT chat.*,property.* FROM chat INNER JOIN property ON chat.outgoing_msg_id=property.property_id HAVING property.username = "seller02" ';
        // $sql = "SELECT * FROM chat";
            $query = mysqli_query($conn,$sql);
         while($q=mysqli_fetch_assoc($query)){
        ?>
       
        <h1><?php echo $q['message']; }?></h1>
        