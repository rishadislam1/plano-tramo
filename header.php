<!DOCTYPE html>
<?php include 'dbconnect.php' ; ?>
<html>
<head>
	<title>Plano And Trama</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="css/headerstyle.css">
</head>
<body>
 
 <!-- header start -->
 <header class="header">
 	<div class="container">
 		<div class="row v-center">
 			<div class="header-item item-left">
 				<div class="logo">
 					<a href="index.php"><img src="img/logo.png" width="200px" height="150px" alt="logo"></a>
 				</div>
 			</div>
 			<!-- menu start here -->
 			<div class="header-item item-center">
 				<div class="menu-overlay">
 				</div>
 				<nav class="menu">
 					<div class="mobile-menu-head">
 						<div class="go-back"><i class="fa fa-angle-left"></i></div>
 						<div class="current-menu-title"></div>
 						<div class="mobile-menu-close">&times;</div>
 					</div>
 					<ul class="menu-main">
 						<li>
 							<a href="index.php">Home</a>
 						</li>
 						
 						<li class="menu-item-has-children">
 							<a href="#">For Sell <i class="fa fa-angle-down"></i></a>
 							<div class="sub-menu mega-menu mega-menu-column-4">
                               <div class="list-item">
                               	  <h4 class="title">Residential</h4>
                               	  <ul>
                               	  	 <li><a href="sell_appartment.php">Appartment/Flat</a></li>
                               	  	 <li><a href="sell_independent.php">Independent House</a></li>
                               	  	 <li><a href="sell_duplex.php">Duplex Home</a></li>
                               	  	 <li><a href="sell_residential_land.php">Land Sharing Flat</a></li>
                               	  </ul>
                               	  <h4 class="title">Commercial</h4>
                               	  <ul>
                               	  	 <li><a href="commercial_office.php">Office Space</a></li>
                               	  	 <li><a href="sell_industrial_space.php">Industrial Space</a></li>
                               	  	
                               	  </ul>
                               </div>
                               <div class="list-item">
                               	<h4 class="title">Land/Plot</h4>
                               	<ul>
                               	  	 <li><a href="sell_residential_plot.php">Residential Plot</a></li>
                               	  	 <li><a href="sell_commercial_plot.php">Commercial Plot</a></li>
                               	  	 <li><a href="sell_agriculture_plot.php">Agriculture Plot</a></li>
                               	  	
                               	  </ul>
                               	  <br><br>
                                   </div>
                              
                               <div class="list-item">
                               	 <img src="img/shop-menu-image.jpg" alt="shop">
                               </div><br>

                               <h2 style="color: green; cursor: pointer; margin-left: 200px"><a href="">Sell your property Here</a></h2>
                           
 							</div>
 						</li>

                         		
 						<li class="menu-item-has-children">
 							<a href="#">For Rent <i class="fa fa-angle-down"></i></a>
 							<div class="sub-menu mega-menu mega-menu-column-4">
                               <div class="list-item">
                               	  <h4 class="title">Residential</h4>
                               	  <ul>
                               	  	 <li><a href="rent_appartment.php">Appartment/Flat</a></li>
                               	  	 <li><a href="rent_independent.php">Independent House</a></li>
                               	  	 <li><a href="rent_duplex.php">Duplex Home</a></li>
                               	  	 <li><a href="rent_residential_land.php">Land Sharing Flat</a></li>
                                          <li><a href="">Sublet/Room</a></li>
                               	  </ul>
                               	  <h4 class="title">Commercial</h4>
                               	  <ul>
                               	  	 <li><a href="rent_commercial_office.php">Office Space</a></li>
                               	  	 <li><a href="rent_industrial_space.php">Industrial Space</a></li>
                               	  	
                               	  </ul>
                               </div>
                               <div class="list-item">
                               	<h4 class="title">Land/Plot</h4>
                               	<ul>
                               	  	 <li><a href="rent_residential_plot.php">Residential Plot</a></li>
                               	  	 <li><a href="rent_commercial_plot.php">Commercial Plot</a></li>
                               	  	 <li><a href="sell_agriculture_plot.php">Agriculture Plot</a></li>
                               	  	
                               	  </ul>
                                     
                               	
                               </div>
                              
                               
                               <div class="list-item">
                               	 <img src="img/shop-menu-image.jpg" alt="shop">
                               </div><br>
                               <h2 style="color: green; cursor: pointer; margin-left: 200px"><a href="">Rent your property Here</a></h2>
                             
                                     
 							</div>
 						</li>

 						<li class="menu-item-has-children">
 							<a href="blogs.php">Blogs</a>
 							
 						</li>

						 <li class="menu-item-has-children">
 							<a href="property.php">Property</a>
 							
 						</li>
 					
 					

                         <li class="menu-item-has-children">
 							<a href="signup.php">My Account &nbsp;&nbsp;<i class="fa-solid fa-people-roof"></i></a>
 							
 						</li>

                         
 					</ul>
 				</nav>
 			</div>
 			<!-- menu end here -->
 			<div class="header-item item-right">
 				<div class="search">
                     <div class="icon"></div>
					 <form class="d-flex navigation__ manu__search" method="POST">
                     <div class="input">
                         <input type="text" placeholder="search" name="str" id="mysearch">
						 
                     </div>
                     <span class="clear" onclick="document.getElementById('mysearch').value = ''"></span>
                 </div>
				 

<input type="submit" name="submit" value="Search" class="submit" style="width: 70px; background-color: gray; color: black;">
 				
 				<!-- mobile menu trigger -->
 				<div class="mobile-menu-trigger">
 					<span></span>
 				</div>
				 </form>
 			</div>
			


 		</div>

	
 	</div>
 </header>
 <!-- header end -->

 <?php

if (isset($_POST['submit'])) {
   
  $str = mysqli_real_escape_string($conn, $_POST['str']);
  $sql1 = "select * from property where property_name like '%$str%' or property_description like '%$str%' or property_price like '%$str%' or property_status like '%$str%' or property_type like '%$str%' or city like '%$str%' or address like '%$str%'";
  $res = mysqli_query($conn, $sql1);
  if (mysqli_num_rows($res) > 0) {
    while ($row = mysqli_fetch_assoc($res)) {
      // echo "<span style='color:white; font-size: 40px'>Your search result: &nbsp;&nbsp;</span>";
      // echo "<a href='view.php?id=".$row['property_id']."'>".$row['property_name'];

      echo '<div class="hostel container">
      <div class="hostel__card">
        
           
          
            
        
  
        <p class="hostel__card__call">'.$row['property_type'].'</p>
        <h5 class="hostel__card__name">'. $row['property_name'].'</h5>
        <p class="hostel__card__type">'.$row['property_status'].'</p>
        <p class="hostel__card__address">
          <span><i class="fa-solid fa-location-dot"></i></span>
          '.$row['address'].'?>
        </p>
        <div class="hostel__card__room">
          <div class="hostel__card__room__details">
            <p class="hostel__card__room__details__info">Price</p>
            <p class="hostel__card__room__details__num">'.$row['property_price'].'bdt</p>
          </div>
          <a href="view.php?id='.$row['property_id'].'" class="btn btn-light">Read More <span class="text-danger">&rarr;</span></a>
              <?php } ?>
        
        </div>
      </div>
   
    </div>';
     
      echo '<br>';
      
    
    }
  } else {
    echo 'no data found';
  }
}
?>



<script src="js/script.js"></script>


  <!--Start of Tawk.to Script-->
  <script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/6262fc227b967b11798c0ce3/1g19ahq86';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->

</body>
</html>



