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
            $uid=$row["id"];
            }
            
        $query2 = "SELECT * FROM `booked_package` WHERE `user`=$uid AND  `status`='no paid' ";
        $result2 = mysqli_query($connection, $query2);
        // echo mysqli_num_rows($result2);

        // if (mysqli_num_rows($result2) > 0){
        //     $row2 = mysqli_fetch_array($result2);
        //     // $price = $row2["pacPrice"];
        //     }
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
              <h2>Make Your Payment</h2>
            </div>
          </div>
        </div>
        <div class="row">

<!--  -->
<table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Package</th>
                        <th>Adults</th>
                        <th>Children</th>
                        <th>Checkin date</th>
                        <th>Price</th>
                        <th>Status</th>
                        <th>Booking Cansel</th>
                        <th>Payment</th>

                    </tr>
                </thead>
                <tbody>
                    <?php 
                      while($row3 = $result2->fetch_assoc()){
                    ?>
                    <tr>
                        <td>
                            <?php  echo $row3['id'] ?>
                        </td>
                        <td>
                            <?php  echo $row3['package'] ?>
                        </td>
                        <td>
                            <?php  echo $row3['adults'] ?>
                        </td>
                        <td>
                            <?php echo $row3['children'] ?>
                        </td>
                        <td>
                            <?php echo $row3['startDate'] ?>
                        </td>
                        <td>
                            <?php echo  $row3['price']?>
                        </td>
                        <td>
                            <?php echo  $row3['status']?>
                        </td>
                        <td>
                            <button class="genric-btn danger small"><a href="controller/canselPackageBooking.php?id=<?php echo $row3['id'];?>">Cansel</button></a>
                        </td>
                        <td>
                            <button class="genric-btn primary small"><a href="controller/cashPayPackage.php?id=<?php echo $row3['id'];?>">CASH</button></a>
                            <button class="genric-btn primary small"><a  href="onlinePayPackage.php?id=<?php echo $row3['id'];?>">Online</button></a>
                        </td>

                    </tr>

            <?php } ?>
                </tbody>
            </table>
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