<?php require_once('inc/confrig.php'); ?>
<?php

    if(!$connection){
        echo mysqli_connect_error();
    }else{
          
?>
                
<!doctype html>
<html class="no-js" lang="zxx">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Travel HTML-5 Template </title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="manifest" href="site.webmanifest">
		<link rel="shortcut icon" type="image/x-icon" href="../assets/img/favicon.ico">

		<!-- CSS here -->
            <link rel="stylesheet" href="assets/css/bootstrap.min.css">
            <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
            <link rel="stylesheet" href="assets/css/flaticon.css">
            <link rel="stylesheet" href="assets/css/slicknav.css">
            <link rel="stylesheet" href="assets/css/animate.min.css">
            <link rel="stylesheet" href="assets/css/magnific-popup.css">
            <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
            <link rel="stylesheet" href="assets/css/themify-icons.css">
            <link rel="stylesheet" href="assets/css/slick.css">
            <link rel="stylesheet" href="assets/css/nice-select.css">
            <link rel="stylesheet" href="assets/css/style.css">
            <link rel="stylesheet" href="assets/css/login_reg_button.css">
   </head>

   <body>
    <!-- Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="assets/img/logo/logo.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader Start -->
    <header>
        <!-- Header Start -->
       <div class="header-area">
            <div class="main-header ">
                <div class="header-top top-bg d-none d-lg-block">
                   <div class="container">
                    <div class="row justify-content-between align-items-center">
                        <div class="col-lg-8">
                            <div class="header-info-left">
                                <ul>                          
                                    <li>gotrip@nibm.com</li>
                                    <li>+94 22 22 222</li>
                                    <li>GALLE SRI LANKA</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="header-info-right f-right">
                                <ul class="header-social">    
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                   <li> <a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                                </ul>
                            </div>
                        </div>
                       </div>
                   </div>
                </div>
               <div class="header-bottom  header-sticky">
                    <div class="container">
                        <div class="row align-items-center">
                            <!-- Logo -->
                            <div class="col-xl-2 col-lg-2 col-md-1">
                                <div class="logo">
                                  <a href="index.html"><img src="assets/img/logo/logo.png" alt=""></a>
                                </div>
                            </div>
                            <div class="col-xl-10 col-lg-10 col-md-10">
                                <!-- Main-menu -->
                                <div class="main-menu f-right d-none d-lg-block">
                                    <nav>               
                                        <ul id="navigation">                                                                                                                                     
                                        <li><a href="index.php">Home</a></li>
                                            <li><a href="prepage_about.html">About US</a></li>
                                            <li><a href="prepage_packages.php">Package</a></li>
                                            <li><a href="prepage_taxi.php">Taxi</a></li>
                                            <li><a href="prepage_contact.php">Contact Us</a></li>
                                            <li style="margin-left:10px;margin-right:10px;"><button class="btn genric-btn small" onclick="document.getElementById('modal-wrapper').style.display='block'">Login</button>
                                                <div id="modal-wrapper" class="modal">

                                                <form methode="post" action="controller/loginControl.php" name="fpackage" class="modal-content animate">
                                        
                                                    <div class="imgcontainer">
                                                        <span onclick="document.getElementById('modal-wrapper').style.display='none'" class="close"
                                                            title="Close PopUp">&times;</span>
                                                        <img src="../assets/img/icon/login.jpg" alt="Avatar" class="avatar"
                                                            style="width: 100px;height:100px;border-radius: 50%;">
                                                        <h1 style="text-align:center">Login</h1>
                                                    </div>
                                        
                                                    <div class="container">
                                                        <input type="text" placeholder="Enter Username" name="uname" id="uname">
                                                        <input type="password" placeholder="Enter Password" name="psw" id="psw">
                                                        <input class="formbutton" type="submit" value="Submit" name="sub" id="sub">
                                                        <input type="checkbox" style="margin:26px 30px;"> Remember me
                                                        <a href="#" style="text-decoration:none; float:right; margin-right:34px; margin-top:26px;">Forgot
                                                            Password ?</a>
                                                    </div>
                                                </form>
                                            </div></li>
                                            <li><button class="btn genric-btn small" onclick="document.getElementById('modal-wrapper1').style.display='block'">Register</button>
                                                <div id="modal-wrapper1" class="modal">


                                                    <form methode="post" action="controller/registerControl.php" name="fpackage" class="modal-content animate">
                                            
                                                        <div class="imgcontainer">
                                                            <span onclick="document.getElementById('modal-wrapper1').style.display='none'" class="close"
                                                                title="Close PopUp">&times;</span>
                                                            <img src="../assets/img/icon/register.jpg" alt="Avatar" class="avatar"
                                                                style="width: 125px;height:100px;border-radius: 50%;">
                                                            <h1 style="text-align:center">Register</h1>
                                                        </div>
                                            
                                                        <div class="container">
                                                            <input type="text" placeholder="Enter First Name" name="fname" id="fname">
                                                            <input type="text" placeholder="Enter Last Name" name="lname" id="lname">
                                                            <input type="text" placeholder="Enter Email" name="email" id="email">
                                                            <input type="text" placeholder="Mobile Number" name="mn" id="mn">
                                                            <input type="password" placeholder="Enter Password" name="psw" id="psw">
                                                            <input type="password" placeholder="Confirm Password" name="cpsw" id="cpsw">
                                            
                                                            <input class="formbutton" type="submit" value="Submit" name="sub" id="sub">
                                            
                                                        </div>
                                                    </form>
                                                </div>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                            <!-- Mobile Menu -->
                            <div class="col-12">
                                <div class="mobile_menu d-block d-lg-none"></div>
                            </div>
                        </div>
                    </div>
               </div>
            </div>
       </div>
        <!-- Header End -->
    </header>

    <main>
        <!-- slider Area Start-->
        <div class="slider-area ">
            <!-- Mobile Menu -->
            <div class="single-slider slider-height2 d-flex align-items-center" data-background="assets/img/hero/contact_hero.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="hero-cap text-center">
                                <h2>Taxi-cabs</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- slider Area End-->

        <!-- Favourite Places Start -->
        <div class="favourite-place place-padding">
            <div class="container">
                <!-- Section Tittle -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-tittle text-center">
                            <span>FEATURED TOURS Taxi-cabs</span>
                            <h2>Favourite Vehicle</h2>
                        </div>
                        <p>VacationPlanner.lk, the best choice; make your trip comfortable. Our branded cars and professional drivers available for hire in Pearl of Indian Ocean “Sri Lanka”. We are partnering with Top 10 Taxi companies in Sri Lanka such as Galle Taxi Sri Lanka, Kandy Taxi Sri Lanka, Bentota Taxi, Ella Taxi, Budget Taxi and with Bandaranaike International Airport Taxi Counter in Sri Lanka.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <?php 
                            $qv1 = "SELECT * FROM `vehicle_type` WHERE `id`= 1";
                            $v1 = mysqli_query($connection,$qv1);
                            while($res = $v1->fetch_assoc()){
                        ?>
                        <div class="single-place mb-30">
                            <div class="place-img" style="height: 250px;">
                                <img src="assets/img/taxi/v1.jpg" alt="">
                            </div>
                            <div class="place-cap">
                                <div class="place-cap-top">
                                    <span><i class="fas fa-star"></i><span>8.0 Superb</span> </span>
                                    <h3><a href="#">scooty bile</a></h3>
                                    <p class="dolor">$<?php  echo $res['price'] ?> <span>/ 2 Person</span>
                                    <span style="float: right;"><button class="btn genric-btn small" onclick="function_alert()"> booking</button></span></p>
                                </div>
                                <div class="place-cap-bottom">
                                    <ul>
                                        <li><i class="far fa-clock"></i>1 Day</li>
                                        <li><i class="fas fa-check-circle"></i><?php  echo $res['availability'] ?> More Available</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                    <?php 
                            $qv2 = "SELECT * FROM `vehicle_type` WHERE `id`= 2";
                            $v2 = mysqli_query($connection,$qv2);
                            while($res = $v2->fetch_assoc()){
                        ?>
                        <div class="single-place mb-30">
                            <div class="place-img" style="height: 250px;">
                                <img src="assets/img/taxi/v2.png" alt="">
                            </div>
                            <div class="place-cap">
                                <div class="place-cap-top">
                                    <span><i class="fas fa-star"></i><span>8.0 Superb</span> </span>
                                    <h3><a href="#">off road bike</a></h3>
                                    <p class="dolor">$<?php  echo $res['price'] ?> <span>/ 2 Person</span>
                                    <span style="float: right;"><button class="btn genric-btn small" onclick="function_alert()"> booking</button></span></p>
                                </div>
                                <div class="place-cap-bottom">
                                    <ul>
                                        <li><i class="far fa-clock"></i>1 Day</li>
                                        <li><i class="fas fa-check-circle"></i><?php  echo $res['availability'] ?> More Available</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                    <?php 
                            $qv3 = "SELECT * FROM `vehicle_type` WHERE `id`= 3";
                            $v3 = mysqli_query($connection,$qv3);
                            while($res = $v3->fetch_assoc()){
                        ?>
                        <div class="single-place mb-30">
                            <div class="place-img" style="height: 250px;">
                                <img src="assets/img/taxi/v3.jpg" alt="">
                            </div>
                            <div class="place-cap">
                                <div class="place-cap-top">
                                    <span><i class="fas fa-star"></i><span>8.0 Superb</span> </span>
                                    <h3><a href="#">tuk tuk</a></h3>
                                    <p class="dolor">$<?php  echo $res['price'] ?> <span>/ 3 Person</span>
                                    <span style="float: right;"><button class="btn genric-btn small" onclick="function_alert()"> booking</button></span></p>
                                </div>
                                <div class="place-cap-bottom">
                                    <ul>
                                        <li><i class="far fa-clock"></i>1 Day</li>
                                        <li><i class="fas fa-check-circle"></i><?php  echo $res['availability'] ?> More Available</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                    <?php 
                            $qv4 = "SELECT * FROM `vehicle_type` WHERE `id`= 4";
                            $v4 = mysqli_query($connection,$qv4);
                            while($res = $v4->fetch_assoc()){
                        ?>
                        <div class="single-place mb-30">
                            <div class="place-img" style="height: 250px;">
                                <img src="assets/img/taxi/v4.jpg" alt="">
                            </div>
                            <div class="place-cap">
                                <div class="place-cap-top">
                                    <span><i class="fas fa-star"></i><span>8.0 Superb</span> </span>
                                    <h3><a href="#">Mini Car</a></h3>
                                    <p class="dolor">$<?php  echo $res['price'] ?> <span>/ 4 Person</span>
                                    <span style="float: right;"><button class="btn genric-btn small" onclick="function_alert()"> booking</button></span></p>
                                </div>
                                <div class="place-cap-bottom">
                                    <ul>
                                        <li><i class="far fa-clock"></i>1 Day</li>
                                        <li><i class="fas fa-check-circle"></i><?php  echo $res['availability'] ?> More Available</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                    <?php 
                            $qv5 = "SELECT * FROM `vehicle_type` WHERE `id`= 5";
                            $v5 = mysqli_query($connection,$qv5);
                            while($res = $v5->fetch_assoc()){
                        ?>
                        <div class="single-place mb-30">
                            <div class="place-img" style="height: 250px;">
                                <img src="assets/img/taxi/v5.jpg" alt="">
                            </div>
                            <div class="place-cap">
                                <div class="place-cap-top">
                                    <span><i class="fas fa-star"></i><span>8.0 Superb</span> </span>
                                    <h3><a href="#">Premier Car</a></h3>
                                    <p class="dolor">$<?php  echo $res['price'] ?> <span>/ 4-5 Person</span>
                                    <span style="float: right;"><button class="btn genric-btn small" onclick="function_alert()"> booking</button></span></p>
                                </div>
                                <div class="place-cap-bottom">
                                    <ul>
                                        <li><i class="far fa-clock"></i>1 Day</li>
                                        <li><i class="fas fa-check-circle"></i><?php  echo $res['availability'] ?> More Available</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                    <?php 
                            $qv6 = "SELECT * FROM `vehicle_type` WHERE `id`= 6";
                            $v6 = mysqli_query($connection,$qv6);
                            while($res = $v6->fetch_assoc()){
                        ?>
                        <div class="single-place mb-30">
                            <div class="place-img" style="height: 250px;">
                                <img src="assets/img/taxi/v6.jpg" alt="">
                            </div>
                            <div class="place-cap">
                                <div class="place-cap-top">
                                    <span><i class="fas fa-star"></i><span>8.0 Superb</span> </span>
                                    <h3><a href="#">luxury Car</a></h3>
                                    <p class="dolor">$<?php  echo $res['price'] ?> <span>/ 4 Person</span>
                                    <span style="float: right;"><button class="btn genric-btn small" onclick="function_alert()"> booking</button></span></p>
                                </div>
                                <div class="place-cap-bottom">
                                    <ul>
                                        <li><i class="far fa-clock"></i>1 Day</li>
                                        <li><i class="fas fa-check-circle"></i><?php  echo $res['availability'] ?> More Available</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                    <?php 
                            $qv7 = "SELECT * FROM `vehicle_type` WHERE `id`= 7";
                            $v7 = mysqli_query($connection,$qv7);
                            while($res = $v7->fetch_assoc()){
                        ?>
                        <div class="single-place mb-30">
                            <div class="place-img" style="height: 250px;">
                                <img src="assets/img/taxi/v7.jpg" alt="">
                            </div>
                            <div class="place-cap">
                                <div class="place-cap-top">
                                    <span><i class="fas fa-star"></i><span>8.0 Superb</span> </span>
                                    <h3><a href="#">Mini Van</a></h3>
                                    <p class="dolor">$<?php  echo $res['price'] ?> <span>/ 7-12 Person</span>
                                    <span style="float: right;"><button class="btn genric-btn small" onclick="function_alert()"> booking</button></span></p>
                                </div>
                                <div class="place-cap-bottom">
                                    <ul>
                                        <li><i class="far fa-clock"></i>1 Day</li>
                                        <li><i class="fas fa-check-circle"></i><?php  echo $res['availability'] ?> More Available</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                    <?php 
                            $qv8 = "SELECT * FROM `vehicle_type` WHERE `id`= 8";
                            $v8 = mysqli_query($connection,$qv8);
                            while($res = $v8->fetch_assoc()){
                        ?>
                        <div class="single-place mb-30">
                            <div class="place-img" style="height: 250px;">
                                <img src="assets/img/taxi/v8.jpg" alt="">
                            </div>
                            <div class="place-cap">
                                <div class="place-cap-top">
                                    <span><i class="fas fa-star"></i><span>8.0 Superb</span> </span>
                                    <h3><a href="#">luxury Van</a></h3>
                                    <p class="dolor">$<?php  echo $res['price'] ?> <span>/ 12-17 Person</span>
                                    <span style="float: right;"><button class="btn genric-btn small" onclick="function_alert()"> booking</button></span></p>
                                </div>
                                <div class="place-cap-bottom">
                                    <ul>
                                        <li><i class="far fa-clock"></i>1 Day</li>
                                        <li><i class="fas fa-check-circle"></i><?php  echo $res['availability'] ?> More Available</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                    <?php 
                            $qv9 = "SELECT * FROM `vehicle_type` WHERE `id`= 9";
                            $v9 = mysqli_query($connection,$qv9);
                            while($res = $v9->fetch_assoc()){
                        ?>
                        <div class="single-place mb-30">
                            <div class="place-img" style="height: 250px;">
                                <img src="assets/img/taxi/v9.jpg" alt="">
                            </div>
                            <div class="place-cap">
                                <div class="place-cap-top">
                                    <span><i class="fas fa-star"></i><span>8.0 Superb</span> </span>
                                    <h3><a href="#">luxury Bus</a></h3>
                                    <p class="dolor">$<?php  echo $res['price'] ?> <span>/ 40-60 Person</span>
                                    <span style="float: right;"><button class="btn genric-btn small" onclick="function_alert()"> booking</button></span></p>
                                </div>
                                <div class="place-cap-bottom">
                                    <ul>
                                        <li><i class="far fa-clock"></i>1 Day</li>
                                        <li><i class="fas fa-check-circle"></i><?php  echo $res['availability'] ?> More Available</li>
                                    </ul>
                                </div>
                            </div>
                        </div> 
                        <?php } ?>  
                    </div>
                    <?php
                            mysqli_close($connection);
                        }
                    ?>
                </div>
            </div>
        </div>
        <!-- Favourite Places End -->

        <!-- Pagination-area Start -->
        <div class="pagination-area pb-100 text-center">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="single-wrap d-flex justify-content-center">
                            <nav aria-label="Page navigation example">
                                <ul class="pagination justify-content-start">
                                  <li class="page-item"><a class="page-link" href="#"><span class="flaticon-arrow roted left-arrow"></span></a></li>
                                    <li class="page-item active"><a class="page-link" href="#">01</a></li>
                                    <li class="page-item"><a class="page-link" href="#">02</a></li>
                                    <li class="page-item"><a class="page-link" href="#">03</a></li>
                                  <li class="page-item"><a class="page-link" href="#"><span class="flaticon-arrow right-arrow"></span></a></li>
                                </ul>
                              </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Pagination-area End -->
    </main>
    <footer>
        
        <!-- Footer Start-->
        <div class="footer-area footer-padding footer-bg" data-background="assets/img/service/footer_bg.jpg">
            <div class="container">
                <div class="row d-flex justify-content-between">
                    <div class="col-xl-3 col-lg-3 col-md-5 col-sm-6">
                       <div class="single-footer-caption mb-50">
                         <div class="single-footer-caption mb-30">
                                <!-- logo -->
                                <div class="footer-logo">
                                    <a href="index.html"><img src="assets/img/logo/logo2_footer.png" alt=""></a>
                                </div>
                                <div class="footer-tittle">
                                    <div class="footer-pera">
                                        <p>Booking and Reserving Rooms Lodging Houses, Restaurants, Taxi-cabs, Tickets
                                            and choose Packages.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-3 col-sm-5">
                        <div class="single-footer-caption mb-50">
                            <div class="footer-tittle">
                                <h4>Quick Links</h4>
                                <ul>
                                    <li><a href="#"> About</a></li>
                                    <li><a href="#"> Packages</a></li>
                                    <li><a href="#"> Taxi</a></li>
                                    <li><a href="#"> Contact Us</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-7">
                        <div class="single-footer-caption mb-50">
                            <div class="footer-tittle">
                                <h4>Our Services</h4>
                                <ul>
                                    <li><a href="#"> Comfortable Taxi-cabs</a></li>
                                    <li><a href="#"> Luxury Rooms</a></li>
                                    <li><a href="#"> Packages</a></li>
                                    <li><a href="#"> Taxi Owners Can Join With Us</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Footer bottom -->
                <div class="row pt-padding">
                    <div class="col-xl-7 col-lg-7 col-md-7">
                        <div class="footer-copy-right">
                            <p>
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                Copyright &copy;
                                <script>document.write(new Date().getFullYear());</script> All rights reserved | This
                                Website is made with <i class="ti-heart" aria-hidden="true"></i> by <a
                                    href="prepage_our_team.html" target="_blank">NIBM Project Team</a>
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            </p>
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-5 col-md-5">
                        <!-- social -->
                        <div class="footer-social f-right">
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-behance"></i></a>
                            <a href="#"><i class="fas fa-globe"></i></a>
                        </div>
                 </div>
             </div>
            </div>
        </div>
        <!-- Footer End-->
 
    </footer>

	<!-- JS here -->
	
		<!-- All JS Custom Plugins Link Here here -->
        <script src="./assets/js/vendor/modernizr-3.5.0.min.js"></script>
		
		<!-- Jquery, Popper, Bootstrap -->
		<script src="./assets/js/vendor/jquery-1.12.4.min.js"></script>
        <script src="./assets/js/popper.min.js"></script>
        <script src="./assets/js/bootstrap.min.js"></script>
	    <!-- Jquery Mobile Menu -->
        <script src="./assets/js/jquery.slicknav.min.js"></script>

		<!-- Jquery Slick , Owl-Carousel Plugins -->
        <script src="./assets/js/owl.carousel.min.js"></script>
        <script src="./assets/js/slick.min.js"></script>
		<!-- One Page, Animated-HeadLin -->
        <script src="./assets/js/wow.min.js"></script>
		<script src="./assets/js/animated.headline.js"></script>
        <script src="./assets/js/jquery.magnific-popup.js"></script>

		<!-- Scrollup, nice-select, sticky -->
        <script src="./assets/js/jquery.scrollUp.min.js"></script>
        <script src="./assets/js/jquery.nice-select.min.js"></script>
		<script src="./assets/js/jquery.sticky.js"></script>
        
        <!-- contact js -->
        <script src="./assets/js/contact.js"></script>
        <script src="./assets/js/jquery.form.js"></script>
        <script src="./assets/js/jquery.validate.min.js"></script>
        <script src="./assets/js/mail-script.js"></script>
        <script src="./assets/js/jquery.ajaxchimp.min.js"></script>
        
		<!-- Jquery Plugins, main Jquery -->	
        <script src="./assets/js/plugins.js"></script>
        <script src="./assets/js/main.js"></script>

        <script>
            function function_alert() { 
        // Display the alert box  
            alert('If You have an Account, Please log in Your Account.\nIf not You must have to Register ');  } 
        </script>
        
    </body>
</html>