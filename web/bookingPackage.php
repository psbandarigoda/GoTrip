<?php session_start(); ?>
<?php require_once('inc/confrig.php'); ?>

<?php

$id='';

if(isset($_GET["id"])){
    		
    $id= $_GET['id'];
		// echo '<script>alert("Incorrect Password or Username")</script>';			
  }
?>

<?php
  if (!isset($_SESSION['email'])){
  echo'Login Eror !  Triyagan Login...';
  header('Location: index.php');
 }else{
    if(!$connection){
        echo mysqli_connect_error();
    }else{
        $user = $_SESSION['email'];
        $query ="SELECT * FROM `user` where `email`='$user'";
        $result = mysqli_query($connection, $query);
        // echo mysqli_num_rows($result);

        if (mysqli_num_rows($result) > 0){
            $row = mysqli_fetch_array($result);
            $res=$row["fName"];
            }
            
        $query2 = "SELECT * FROM `package` WHERE `id`=$id";
        $result2 = mysqli_query($connection, $query2);
        // echo mysqli_num_rows($result2);

        if (mysqli_num_rows($result2) > 0){
            $row2 = mysqli_fetch_array($result2);
            $price = $row2["pacPrice"];
            }
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
                    <li><a href="home.php">Home</a></li>
                    <li><a href="about.php">About US</a></li>
                    <li><a href="packages.php">Package</a></li>
                    <li><a href="taxi.php">Taxi</a></li>
                    <li><a href="contact.php">Contact Us</a></li>
                    <li><a href="profile.php"><?php echo $res ?></a></li>
                    <li><button class="btn genric-btn small" onclick="window.location.href='controller/logout.php';">Log Out</button></li>                       
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
      <div class="single-slider slider-height2 d-flex align-items-center"
        data-background="assets/img/hero/contact_hero.jpg">
        <div class="container">
          <div class="row">
            <div class="col-xl-12">
              <div class="hero-cap text-center">
                <h2>Our Packages</h2>
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
              <span>FEATURED TOURS Packages</span>
              <h2>Make Your Reservation</h2>
            </div>
          </div>
        </div>
        <div class="row">

                    <!-- Booking Model -->
                    <div class="col-xl-6 col-lg-6 col-md-8">

                    <form methode="post" action="controller/bookingPackageCTRL.php" name="fpackage">
                <table>
                    <tr>
                        <td><span class="form-label">Check In</span>
                        <input class="single-input" type="date" placeholder="Enter Check In" name="checkin"id="checkin"></td>
                    </tr>
                    <tr>
                        <td><span class="form-label">Adults</span>
                        <input class="single-input" type="number" placeholder="Enter no of adults" name="adults"id="adults"></td>
                    </tr>
                    <tr>
                        <td><span class="form-label">Children</span>
                        <input class="single-input" type="number" placeholder="Enter no of children" name="children" id="children"></td>
                    </tr>
                    <tr>
                        <td><span class="form-label">Price $</span>
                        <input class="single-input disabled" type="number" value="<?php echo $price ?>" name="price" id="price" disabled></td>
                    </tr>
                    <tr style="margin-bottom: 10px;">
                        <td><a href="packages.php"><input class="genric-btn primary small" value="Cansel" id="cansel" style="width: 45%;"></a>
                        <input class="genric-btn primary small f-right" type="reset" value="Reset" name="res" id="res" style="width: 45%;"></td>
                    </tr>
                    <tr >
                        <td>
                          <input type="hidden" value="<?php  echo $row['id'] ?>" name="userid" id="userid">
                          <input type="hidden" value="<?php  echo $row2['id'] ?>" name="pacid" id="pacid">
                          <input type="hidden" value="<?php  echo $row2['pacPrice'] ?>" name="pacprice" id="pacprice">
                          <input class="genric-btn success medium" style="width: 100%;" type="submit" value="Submit" name="sub" id="sub">
                        </td>
                    </tr>
                </table>
            </form>
          </div>
                    
                    <!-- Booking Model End -->
<!--  -->
            <div class="col-xl-4 col-lg-4 col-md-6">
            <div class="single-place mb-30">
              <div class="place-cap">
                <div class="place-cap-top">
                  <span><i class="fas fa-star"></i><span>8.0 Superb</span> </span>
                  <h3><a href="#"><?php  echo $row2['pacName'] ?></a></h3>
                  <p><?php  echo $row2['pacDetails'] ?></p>
                  <p class="dolor">$<?php  echo $row2['pacPrice'] ?> <span>/ Per Person</span></p>
                </div>
                <div class="place-cap-bottom">
                  <ul>
                    <li><i class="far fa-clock"></i><?php  echo $row2['pacDays'] ?> Days</li>
                    <li><i class="fas fa-map-marker-alt"></i><?php  echo $row2['pacLoaction'] ?></li>
                    <li><i class="fas fa-check-circle"></i><?php  echo $row2['pacAvailability'] ?> More Booking Available </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
<!--  -->

        </div>
      </div>
    </div>
  </main>

  <?php 
    }
        mysqli_close($connection);
    }              
    ?>

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
                  <a href="home.php"><img src="assets/img/logo/logo2_footer.png" alt=""></a>
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
                Website is made with <i class="ti-heart" aria-hidden="true"></i> by <a href="our_team.php"
                  target="_blank">NIBM Project Team</a>
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

</body>

</html>