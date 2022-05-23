<!DOCTYPE html>

<?php
include "connection.php";
session_start();

if (!isset($_SESSION["username"])) {
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
    <link rel="stylesheet" href="css/details.css">

    <!----===== Boxicons CSS ===== -->
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />


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
                        <?php echo '<a href="index.php?username=' . $username . '">' ?>
                        <i class='bx bx-home-alt icon'></i>
                        <span class="text nav-text">Dashboard</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <?php echo '<a href="profile.php?username=' . $username . '">' ?>


                        <img src="img/profile.png" alt="" height="40px" width="40px" style="margin-left: 10px;">
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span class="text nav-text">Profile</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <?php echo '<a href="more_details.php?username=' . $username . '">' ?>


                        <img src="img/plus.png" alt="" height="40px" width="40px" style="margin-left: 10px;">
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span class="text nav-text">Add More details</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <?php echo '<a href="chat.php?username=' . $username . '">' ?>


                        <img src="img/chat.png" alt="" height="40px" width="40px" style="margin-left: 10px;">
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span class="text nav-text">Chat</span>
                        </a>
                    </li>







                </ul>
            </div>

            <div class="bottom-content">
                <li class="">

                    <a href="logout.php">
                        <i class='bx bx-log-out icon'></i></a>
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
        <div class="text">Add More Details about your property</div>
        <div class="container">
            <div class="details">

                <div class="progress-bar">
                    <div class="step">
                        <p>
                            Basic Information
                        </p>
                        <div class="bullet">
                            <span>1</span>
                        </div>
                        <div class="check fas fa-check"></div>
                    </div>
                    <div class="step">
                        <p>
                            Description
                        </p>
                        <div class="bullet">
                            <span>2</span>
                        </div>
                        <div class="check fas fa-check"></div>
                    </div>
                    <div class="step">
                        <p>
                            Attachment
                        </p>
                        <div class="bullet">
                            <span>3</span>
                        </div>
                        <div class="check fas fa-check"></div>
                    </div>
                    <div class="step">
                        <p>
                            Submit
                        </p>
                        <div class="bullet">
                            <span>4</span>
                        </div>
                        <div class="check fas fa-check"></div>
                    </div>
                </div>
                <div class="form-outer">
                    <?php $username = $_GET['username'];
                    
                    echo '
                    <form action="two.php?username='.$username.'"method="POST">'?> 
                        <div class="page slide-page">
                            <div class="title">
                                Property Basic Features *
                            </div>
                            <div class="title">
									
										
                                    <select class="form-control" name="idselection">
										<option selected>Select Your Property</option>
										<?php
										$res=mysqli_query($conn,"select * from property WHERE username = '$username'");
										while($row=mysqli_fetch_assoc($res)){
											// if($row['id']==$id){
											// 	echo "<option selected value=".$row['property_id'].">".$row['property_name']."</option>";
											// }else{
												echo "<option value=".$row['property_id'].">".$row['property_name']."</option>";
											
											
										}
										?>
									</select>
											
										
									
                            </div>
                            <div class="con">
                                <div class="field">
                                    <div class="label">
                                        BedRoom
                                    </div>
                                    <select name="bedroom" class="form-control">
                                        <option value="1 Bed">1 Bed</option>
                                        <option value="2 Bed">2 Bed</option>
                                        <option value="3 Bed">3 Bed</option>
                                        <option value="3+ Bed">3+ Bed</option>
                                    </select>
                                </div>
                                <div class="field">
                                    <div class="label">
                                        Bathroom
                                    </div>
                                    <select name="bathroom" class="form-control">
                                        <option value="1 Bathroom">1 Bathroom</option>
                                        <option value="2 Bathroom">2 Bathroom</option>
                                        <option value="3 Bathroom">3 Bathroom</option>
                                        <option value="3+ Bathroom">3+ Bathroom</option>
                                    </select>
                                </div>
                                <div class="field">
                                    <div class="label">
                                        Balconies
                                    </div>
                                    <select name="balconies" class="form-control">
                                        <option value="No Balconies">No Balconies</option>
                                        <option value="1 Balconies">1 Balconies</option>
                                        <option value="2 Balconies">2 Balconies</option>
                                        <option value="3 Balconies">3 Balconies</option>
                                        <option value="3+ Balconies">3+ Balconies</option>
                                    </select>
                                </div>
                                <div class="field">
                                    <div class="label">
                                        Garages
                                    </div>
                                    <select name="garages" class="form-control">
                                        <option value="No Garages">No Garages</option>
                                        <option value="1 Garages">1 Garages</option>
                                        <option value="2 Garages">2 Garages</option>
                                        <option value="3 Garages">3 Garages</option>
                                        <option value="3+ Garages">3+ Garages</option>
                                    </select>
                                </div>
                            </div>
                            <div class="field">
                                <button class="firstNext next">Next</button>
                            </div>

                        </div>
                          
                    </form>
                </div>



            </div>
        </div>
    </section>
    <script src="js/script.js"></script>
    <script>
        const body = document.querySelector('body'),
            sidebar = body.querySelector('nav'),
            toggle = body.querySelector(".toggle"),
            searchBtn = body.querySelector(".search-box"),
            modeSwitch = body.querySelector(".toggle-switch"),
            modeText = body.querySelector(".mode-text");
  

        toggle.addEventListener("click", () => {
            sidebar.classList.toggle("close");
        })

        searchBtn.addEventListener("click", () => {
            sidebar.classList.remove("close");
        })

        modeSwitch.addEventListener("click", () => {
            body.classList.toggle("dark");

            if (body.classList.contains("dark")) {
                modeText.innerText = "Light mode";
            } else {
                modeText.innerText = "Dark mode";

            }
        });
    </script>

</body>

</html>