<?php
include './class/include.php';
$TOUR_PACKAGE = new TourPackage(NULL);
$TOURS = $TOUR_PACKAGE->allToursByType(2);
?>
<!DOCTYPE html>
<html lang="en">


    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
             <title>Peter Tours | Peter Round Tours</title>
        <meta name="description" content="We arrange the best round tour packages in reasonable price range in Sri Lanka. We will guide you to the each and every beautiful,historic,enjoyable and adventureous places of Sri Lanka. " />
        <meta name="keywords" content="round tours sri lanka, sri lanka tours, ahangama tours, galle tours,travel srilanka,  srilanka peter tours, best places srilanaka, round tour packages, best round tours, economical tour packages, experienced guide srilanka, attractive places sri lanka.things to do sri lanka" />
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


</html> 