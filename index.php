<?php

session_start();

if(!isset($_SESSION['username'])){
    echo "You are logged out";
    header('location:http://localhost/Project/On%20CLINIC-GEN/Login/index.php');
}

?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE-edge">
<meta name="viewport" content="width=device-width, intial-scale=1.0">
<title>website HTML CSS</title>
<link rel="stylesheet" href="css/style.css"/>
<!--fav-icon-->
<link rel="shortcut icon" href="images/fav-icon.png"/>
</head>

<body>
    <section class="main">
        <!--navigation-->
        <nav>
            <!--logo-->
            <a href="#" class="logo">
                <img src="logo.png"/>
            </a>
            <!--menu-btn----------->
            <input class="menu-btn" type="checkbox" id="menu-btn"/>
            <label class="menu-icon" for="menu-btn">
                <span class="nav-icon"></span>
            </label>
            <!--menu-->
            <ul class="menu">
                <li><a href="#">Home</a></li>
                <li><a href="#services">Services</a></li>
                <li><a href="http://localhost/Project/On%20CLINIC-GEN/Contact%20Form/contact_form.php">Contact</a></li>
                <li><a href="http://localhost/Project/On%20CLINIC-GEN/Profile_Settings/Profile_Settings_page.php">Account</a></li>
                <li><a href="http://localhost/Project/On%20CLINIC-GEN/Home_Page/logout.php">Logout</a></li>
                <!--<li><a href="#">Notices</a></li>
                <li><a href="#">Team</a></li>-->
            </ul>
        </nav>
        <!--main-content-->
        <div class="home-content">
            <!--text-->
            <div class="home-text">
                <h2>Hello, <?php echo $_SESSION['username']; ?>. Welcome to</h2>
                <h1>On CLINIC-GEN</h1>
                <p>On-Clinic GEN is a computer software/application that helps patients/users to access their medical information/data on a single click.</p>
            <!--login-btn-->
            <a href="#services" class="main-login">View</a>
            </div>
            <!--img-->
            <div class="home-img">
                <img src="image.png"/>
            </div>
        </div>
        <!--timing------------------->
        <div class="timing">
            <!--office-contact-->
            <div class="office-number">
                <h3>Experience</h3>
                <p>Better way to store medical files<font> at one place.</font></p>
            </div>
            <!--office-time-->
            <div class="office-time">
                <h3>Key Point</h3>
                <p> Patients or user can store their <font>medical data/records</font> for future use.</p>
            </div>
        </div>
        <!--arrow-->
        <div class="arrow"></div>
        <span class="scroll">Scroll</span>
    </section>
    <!--services----------------------->
    <section id="services" class="services">
        <!--heading----------->
        <div class="services-heading">
            <h2> Services</h2>
            <p>We provides a confidential, discreet and hassle-free resolution to store your medical records. Make sure to log in.</p>
        </div>
        <!--box-container----------------->
        <div class="box-container">
            <!--box-1-------->
            <div class="box">
                <img src="images/login1.svg">
                <font>Sign-Up to our Secure Site</font>
                <p>To begin the process, please Log-In to our secure system. Everything you need to Log-In is available in the communication letter you have received from us.</p>
                <!--btn--------->
                <a href="http://localhost/Project/On%20CLINIC-GEN/Registration_Form/index.php">Sign Up</a>
            </div>
            <!--box-2-------->
            <div class="box">
                <img src="images/account view1.svg">
                <font>Review Your Records</font>
                <p>You will have a chance to review your account for accuracy and update your contact information. Should you find any incorrect information on your account or if you prefer to talk to us directly, please Contact Us.</p>
                <!--btn--------->
                <a href="http://localhost/Project/On%20CLINIC-GEN/file-upload-download/index.php">View</a>
            </div>
            <!--box-3-------->
            <div class="box">
                <img src="images/payment method1.svg">
                <font>Improved Efficiency</font>
                <p>In addition it is developed to improve efficiency of storing patients’ medical records and to provide a comfortable, flexible service to both patient and the user.</p>
                <!--btn--------->
                <a href="http://localhost/Project/On%20CLINIC-GEN/file-upload-download/index.php">View</a>
            </div>
            <!--box-4-------->
            <div class="box">
                <img src="images/lock1.svg">
                <font>Secure Storage</font>
                <p>Physical copies are often lost or misplaced due to mishandling, this require a comprehensive storing process to ensure that no vital information is lost. We provide sercure handling to store data.</p>
                <!--btn--------->
                <a href="http://localhost/Project/On%20CLINIC-GEN/Login/index.php">Log In</a>
            </div>
            <!--box-1-------->
            <div class="box">
                <img src="images/document1.svg">
                <font>Access Your Records</font>
                <p>We provide seamless experience in which people are not supposed carry their medical files of previous checkups and records of previous prescribed medicine.</p>
                <!--btn--------->
                <a href="#">View</a>
            </div>
        </div>
    </section>
    <!--footer------------->
    <footer>
        <a href="#">Going To Internet, Consumer.</a>
        <p>Copyright (C) 2020 Going To Internet.</p>
    </footer>
</body>

</html>
