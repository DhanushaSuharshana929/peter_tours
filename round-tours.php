<?php
include './class/include.php';
$TOUR_PACKAGE = new TourPackage(NULL);
$TOURS = $TOUR_PACKAGE->allToursByType(2);
?>
<!DOCTYPE html>
<html lang="en">


    <!-- Mirrored from heatmaponline.com/html/touran/hotel-1.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 19 Feb 2020 04:49:18 GMT -->
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="description" content="" />
        <meta name="keywords" 
              content="creative, portfolio, agency, template, theme, designed, html5, html, css3, responsive, onepage" />
        <meta name="author" content="Set Private Limited" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
        <title>Peter Tours</title>


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
            include("./innerheader.php");
            ?>
            <!-- Header Section End -->

            <!-- Inner Section Start -->
            <section class="inner-area banner-parralax">
                <div class="container">
                    <div class="section-content">
                        <div class="row">
                            <div class="col-12">
                                <h4>Round Tours</h4>
                                <p><a href="./">Home</a> -> Round Tours</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Inner Section End -->

            <div class="container">
                <section>
                    <div class="col-lg-12 col-md-12 pb-70">
                        <div class="row">
                            <?php
                            foreach ($TOURS as $tour) {
                                ?>
                                <div class="col-md-4">
                                    <a href="view_tour_round.php?id=<?php echo $tour['id'];?>">
                                        <div class="special-packages" style="margin-top: 20px">
                                            <div class="thumb">
                                                <img src="upload/tour-package/<?php echo $tour['image_name']; ?>" alt="">

                                                <div class="post-title-box">


                                                    <h4><?php echo $tour['title']; ?></h4>

                                                </div>
                                            </div>
                                            <div class="content">

                                                <p><?php echo $tour['short_description']; ?></p>
                                                <div class="center"><a class="btn-theme" href="view_tour_round.php?id=<?php echo $tour['id']?>">View More</a></div>

                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <?php
                            }
                            ?>
                        </div>

                    </div>
                </section>
            </div>

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