<!DOCTYPE html>
<?php include 'header.php' ;

include 'dbconnect.php';
$sql = 'SELECT property.*, gallary_image.*,property_basic_feature.*
FROM property
INNER JOIN gallary_image INNER JOIN property_basic_feature ON property.property_id=gallary_image.id AND property.property_id=property_basic_feature.id';
$query = mysqli_query($conn, $sql);

?>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Responsive Website Landing Page With Full Screen Draggable Image Slider - Html, Css & Javascript</title>
  <link rel="stylesheet" href="css/swiper-bundle.min.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
</head>
<body>


  <section class="home">
    <div class="media-icons">
      <a href="https://www.facebook.com/" target="blank"><i class="uil uil-facebook-f"></i></a>
      <a href="https://www.instagram.com/" target="blank"><i class="uil uil-instagram"></i></a>
      <a href="https://twitter.com/" target="blank"><i class="uil uil-twitter"></i></a>
    </div>

    <div class="swiper bg-slider">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <img src="img/bg1.jpg" alt="">
          <div class="text-content">
            <h2 class="title">Residential   <span>Property</span></h2>
            <p class="paratext">Lorem ipsum dolor sit amet consectetur adipisicing elit. Error eos, voluptatum nesciunt magnam maxime quibusdam!</p>
            <a href="residential.php?username=<?php echo $_GET['username'] ?>" target="blank"><button class="read-btn">Read More <i class="uil uil-arrow-right"></i></button></a>
          </div>
        </div>
        <div class="swiper-slide dark-layer">
          <img src="img/bg2.jpg" alt="">
          <div class="text-content">
            <h2 class="title">Commercial <span>Real estate </span></h2>
            <p>Looking for a PDF of this content?
Download
2022 U.S. Real Estate Market Outlook Event Recording
Realizing Potential in Tomorrow's Economy
            </p>
<a href="real.php" target="blank"><button class="read-btn">Read More <i class="uil uil-arrow-right"></i></button></a>
          </div>
        </div>
        <div class="swiper-slide dark-layer">
          <img src="img/bg3.jpg" alt="">
          <div class="text-content">
            <h2 class="title">Land<span>Or Plots</span></h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda minus, consequuntur exercitationem dignissimos eos maiores optio harum numquam possimus cumque?</p>
            <a href="land.php?username=<?php echo $_GET['username'] ?>" target="blank"><button class="read-btn">Read More <i class="uil uil-arrow-right"></i></button></a>
          </div>
        </div>
       
      </div>
    </div>

  
    
    <div class="bg-slider-thumbs">
      <div class="swiper-wrapper thumbs-container">
        <img src="img/bg1.jpg" class="swiper-slide" alt="">
        <img src="img/bg2.jpg" class="swiper-slide" alt="">
        <img src="img/bg3.jpg" class="swiper-slide" alt="">
      </div>
    </div>

    

  </section>
  <div class="search2 container">
      
      <select name="location" id="location" class="search__box">
        <option value="location">Location</option>
        <option value="dhaka">Dhaka</option>
        <option value="khulna">Khulna</option>
        <option value="ctg">Chittagong</option>
        <option value="rajshahi">Rajshahi</option>
        <option value="sylhet">Sylhet</option>
        <option value="rangpur">Rangpur</option>
        <option value="barishal">Barishal</option>
        <option value="gazipur">Gazipur</option>
        <option value="narayanganj">Narayanganj</option>
        <option value="comilla">Comilla</option>
        <option value="bogra">Bogra</option>
        <option value="kuakata">Kuakata</option>
        <option value="tangail">Tangail</option>
       

      </select>
      <select name="propertytype" id="propertytype" class="search__box">
        <option value="propertytype">Property Type</option>
        <option value="all_residential">All Residential</option>
        <option value="independent_house">Independent House</option>
        <option value="duplex_home">Duplex Home</option>
        <option value="land">Land Sharing Flat</option>
        <option value="studio">Studio Apartment</option>
        <option value="all_commercial">All Commercial</option>
        <option value="office_space">Office Space</option>
        <option value="showroom">Shop Showroom</option>
        <option value="all_land">All Land</option>
        <option value="residential_plot">Residential Plot</option>
        <option value="commercial_plot">Commercial Plot</option>
        <option value="agriculture_plot">Agriculture Plot</option>

      </select>

      <select name="buysell" id="buysell" class="search__box">
        <option value="buy">Buy</option>
        <option value="sell">Sell</option>
      </select>
      <button class="button_search">Search</button>
    </div>

    
  <script src="js/swiper-bundle.min.js"></script>
  <script src="js/main.js"></script>


<div class="hostel_area">
    <h1 class="container" style="text-align: center; padding: 1rem 0; color: #2f4a69;
    font-weight: 700;
    font-size: 2rem;">Properties</h1><br>


    <div class="hostel container">
    <?php $counter=0;
    
    foreach($query as $q){
      if($counter < 6 ){
            if($q['admin_status']==1){
          ?>
    
      <div class="hostel__card">

    <img class="hostel__card__img" src="../seller/gallary_images/<?php $im=$q['file_name']; echo $im;?>" />
             
        <p class="hostel__card__call"><?php echo $q['property_type'];?></p>
        <h5 class="hostel__card__name"><?php echo $q['property_name'];?></h5>
        <p class="hostel__card__type"><?php echo $q['property_status'];?></p>
        <p class="hostel__card__address">
          <span><i class="fa-solid fa-location-dot"></i></span>
          <?php echo $q['address'];?>
        </p>
        <div class="hostel__card__room">
          <div class="hostel__card__room__details">
            <p class="hostel__card__room__details__info">Price</p>
            <p class="hostel__card__room__details__num"><?php echo $q['property_price'];?>bdt</p>
          </div>
               
        
        </div>
<div class="cl" style="display: flex; margin: 10px;">
        <div class="hostel__card__room__details">
            <p class="hostel__card__room__details__info">Bath</p>
            <p class="hostel__card__room__details__num"><?php echo $q['bathroom'];?></p>
           
          </div>
          <div class="hostel__card__card__room__details" style="margin-left: 50px;">
            <p class="hostel__card__room__details__info">Size(Sq.ft)</p>
            
            <p class="hostel__card__room__details__num"><?php echo $q['property_size'];?>sqft</p>
            
          </div>
          </div><br>
        
        <a href="view.php?id=<?php echo $q['id'] ?>&username=<?php echo $_GET['username'] ?>" class="btn btn-light"> <button class="btn_read" style="margin: 25px; height: 50px; width: 150px;"> Read More <span class="text-danger">&rarr;</span></button></a>
       
      </div>
    
      <?php $counter++;} }
    
    } ?>
       </div>
       <?php $username = $_GET['username']; 
        echo '<a href="property.php?username='.$username.'" class="btn btn-light" style="margin-left: 40%"> <button class="btn_read" style="margin: 25px; height: 50px; width: 400px; background-color: gray; left: 50%"> Load More <span class="text-danger">&rarr;</span></button></a>';
    ?>
     
   
  
       </div> 
    
<?php include 'footer.php';  ?>

</body>
</html>
      