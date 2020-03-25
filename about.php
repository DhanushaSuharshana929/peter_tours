<?php
include './class/include.php';
$ABOUT1 = new Page(3);
?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <title>Sri Lanka Tours | Peter Tour Sri Lanka</title>
        <meta name="description" content="We take you around the most beautiful places in Sri Lanka. You can join us and experience the beauty of Sri Lanka. " />
        <meta name="keywords" content="round tours sri lanka, sri lanka tours, ahangama tours, galle tours, travel srilanka, day tours sri lanka, day tours srilanka, srilanka peter tours" />
        <meta name="author" content="Synotec Holdings Private Limited" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> 


        <!------------------------------------------
        Main CSS File
      <------------------------------------------>

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

        <link rel="stylesheet" href="css/menu.css">
        <link rel="stylesheet" href="css/custom-animation.css">
        <!-- Style CSS -->
        <link rel="stylesheet" href="css/style.css">
        <!-- Responsive CSS -->
        <link rel="stylesheet" href="css/responsive.css">

        <!-- Favicon -->
        <link href="images/favicon.png" rel="shortcut icon" type="image/png">

    </head>

    <body>


        <!-- Start Page Wrapper  -->
        <div class="page-wrapper">

            <!-- Header Section Start -->
            <?php
            include("./header.php");
            ?>
            <!-- Header Section End -->

            <!-- Inner Section Start -->
          <section class="inner-area banner-parralax">
                <div class="container">
                    <div class="section-content">
                        <div class="row">
                            <div class="col-12">
                                <h4>about</h4>
                                <p><a href="index.php">Home</a> -> About</p>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Inner Section End -->
            <section class="global-section over-layer-white pt-80 pb-70">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-7 col-lg-12">
                            <div class="global-area">
                                <div class="inner-title">
                                    <h2>Lets get to<span> Know about Us</span></h2>
                                    <div class="sec-line"></div>
                                </div>
                                <p><?php echo $ABOUT1->description ?></p>
                                <h4>We are the best Tour Providers in Srilanka Because:</h4>
                                <ul>
                                    <li>Reliability.</li>
                                    <li>Friendliness.</li>
                                    <li>Cost-Effective.</li>
                                    <li>Timely-Manner.</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-5 col-lg-8 col-md-10">
                            <div class="map-area">
                                <img src="images/photos/map01.png" alt="image">
                            </div>
                            <p class="map-content">Call us Now for a Better Explanation <span>(+94) 77 123 4356</span></p>                </div>
                    </div>
                </div>

            </section>


            <!-- Footer Style Seven Start -->
            <?php
            include("./footer.php");
            ?>
            <!-- Footer Style Seven End -->

        </div>
        <!-- End Page Wrapper  -->

        <a href="#" class="scrollup"><i class="fa fa-chevron-up" aria-hidden="true"></i></a>


        <!------------------------------------------
        Main JavaScript
      <------------------------------------------>
        <script src="js/jquery-3.2.1.min.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>


        <!-- Optional JavaScript -->
        <script src="js/bootstrap-dropdownhover.min.js"></script>
        <script src="js/bootstrap-slider.js"></script>
        <script src="js/jquery.flexslider-min.js"></script>
        <script src="js/slick.min.js"></script>
        <script src="js/owl.carousel.min.js"></script>
        <script src="js/css3-animate-it.js"></script>
        <script src="js/magnific-popup.min.js"></script>
        <script src="js/jquery.fancybox.js"></script>
        <script src="js/player-min.js"></script>

        <!-- Custom JavaScript -->
        <script src="js/script.js"></script>

    </body>


    <!-- Mirrored from heatmaponline.com/html/touran/hotel-1.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 19 Feb 2020 04:49:18 GMT -->
</html> 