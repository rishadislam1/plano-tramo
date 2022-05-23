<!DOCTYPE html>

<?php
  include "connection.php";
   session_start();

  if(!isset($_SESSION["username"])){
    header("Location: ../signup.php");
  }
  $username = $_GET['username'];
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!----======== CSS ======== -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/developer.css">
    
    <!----===== Boxicons CSS ===== -->
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!--<title>Dashboard Sidebar Menu</title>--> 
</head>
<body>
    <nav class="sidebar close">
        <header>
            <div class="image-text">
                <span class="image">
                    <img src="../img/logo.png" alt="">
                </span>

                <div class="text logo-text">
                    <span class="name">Plano &</span>
                    <span class="profession">Tramo</span>
                </div>
            </div>

            <i class='bx bx-chevron-right toggle'></i>
        </header>

        <div class="menu-bar">
            <div class="menu">

                <li class="search-box">
                    <i class='bx bx-search icon'></i>
                    <input type="text" placeholder="Search...">
                </li>

                <ul class="menu-links">
                    <li class="nav-link">
                      <?php echo '<a href="index.php?username='. $username.'">'?>
                            <i class='bx bx-home-alt icon' ></i>
                            <span class="text nav-text">Dashboard</span>
                        </a>
                    </li>

                    <li class="nav-link">
					<?php echo '<a href="profile.php?username='. $username.'">'?>
                     
                       
					<img src="img/profile.png" alt="" height="40px" width="40px" style="margin-left: 10px;">
                           &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span class="text nav-text">Profile</span>
                        </a>
                    </li>

                       
                    <li class="nav-link">
					<?php echo '<a href="more_details.php?username='. $username.'">'?>
                     
                       
					<i class="fa-solid icon fa-circle-check"></i>
                            <span class="text nav-text">Confirm Pannel</span>
                        </a>
                    </li> 

					<li class="nav-link">
					<?php echo '<a href="adddevelopers.php?username='. $username.'">'?>
                     
                       
					&nbsp;&nbsp;&nbsp;<i class="fa-solid fa-plus"></i>&nbsp;&nbsp;&nbsp;
                            <span class="text nav-text">ADD Developer</span>
                        </a>
                    </li> 

					<li class="nav-link">
					<a href="https://dashboard.tawk.to/#/dashboard/6262fbe67b967b11798c0cda" target="blank">
                     
                       
					<img src="img/chat.png" alt="" height="40px" width="40px" style="margin-left: 10px;">
                           &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span class="text nav-text">Chat</span>
                        </a>
                    </li> 

                 

                    

                

                </ul>
            </div>

            <div class="bottom-content">
                <li class="">
                    
                    <a href="logout.php">
                    <i class='bx bx-log-out icon' ></i></a>
                        <a href="logout.php"><span class="text nav-text">Logout</span></a>
                   
                </li>

                <li class="mode">
                    <div class="sun-moon">
                        <i class='bx bx-moon icon moon'></i>
                        <i class='bx bx-sun icon sun'></i>
                    </div>
                    <span class="mode-text text">Dark mode</span>

                    <div class="toggle-switch">
                        <span class="switch"></span>
                    </div>
                </li>
                
            </div>
        </div>

    </nav>


   


    <section class="home" style="height: 100%;">
        <div class="text">Profile</div><br><br><br>

        <div class="container">
        <div id="admin-content">
      <div class="container1">
          <div class="row">
              <div class="col-md-12">
                  <h1 class="admin-heading">Add Developer</h1>
              </div>
              <div class="col-md-offset-3 col-md-6">
                  <!-- Form Start -->
                  <form  action="<?php $_SERVER['PHP_SELF']; ?>" method ="POST" autocomplete="off">
                      <div class="form-group">
                          <label>Enter Username</label>
                          <input type="text" name="fname" class="form-control" placeholder="username" required>
                      </div>
                          <div class="form-group">
                          <label>Enter Name</label>
                          <input type="text" name="lname" class="form-control" placeholder="name" required>
                      </div>
                      <div class="form-group">
                          <label>Number</label>
                          <input type="text" name="user" class="form-control" placeholder="number" required>
                      </div>


                      <input type="submit"  name="save" class="btn btn-primary" value="Save" required />
                  </form>
                   <!-- Form End-->
                   <?php include "connection.php";

if(isset($_POST['save'])){
 

  $fname =mysqli_real_escape_string($conn,$_POST['fname']);
  $lname = mysqli_real_escape_string($conn,$_POST['lname']);
  $user = mysqli_real_escape_string($conn,$_POST['user']);

  $sql = "SELECT * FROM developers";

  $result = mysqli_query($conn, $sql) or die("Query Failed.");

  if(mysqli_num_rows($result) > 0){
    echo "<p style='color:red;text-align:center;margin: 10px 0;'>UserName already Exists.</p>";
  }else{
    $sql1 = "INSERT INTO developers (developer_username,developer_name,developer_number)
              VALUES ('$fname','$lname','$user')";
    if(mysqli_query($conn,$sql1)){
        echo "<p style='color:green;text-align:center;margin: 10px 0;'>Insert Succesfully.</p>";
    }else{
      echo "<p style='color:red;text-align:center;margin: 10px 0;'>Can't Insert User.</p>";
    }
  }
}
?>
               </div>
           </div>
       </div>
   </div>
        </div>
        
    </section>

    <script>
        const body = document.querySelector('body'),
      sidebar = body.querySelector('nav'),
      toggle = body.querySelector(".toggle"),
      searchBtn = body.querySelector(".search-box"),
      modeSwitch = body.querySelector(".toggle-switch"),
      modeText = body.querySelector(".mode-text");


toggle.addEventListener("click" , () =>{
    sidebar.classList.toggle("close");
})

searchBtn.addEventListener("click" , () =>{
    sidebar.classList.remove("close");
})

modeSwitch.addEventListener("click" , () =>{
    body.classList.toggle("dark");
    
    if(body.classList.contains("dark")){
        modeText.innerText = "Light mode";
    }else{
        modeText.innerText = "Dark mode";
        
    }
});
    </script>

</body>
</html>
