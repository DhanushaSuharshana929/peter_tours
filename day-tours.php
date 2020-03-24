<?php
include './class/include.php';
$DAY_TOUR = new TourType(NULL);
$TOUR_PACKAGE = new TourPackage(NULL);
$TOURS = $TOUR_PACKAGE->allToursByType(1);
?>
<!DOCTYPE html>
<html lang="en">

<head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="description" content="We arrange the best day tour packages in Sri Lanka with best Coverage. We will guide you to beautiful,historic,enjoyable and adventureous places of Sri Lanka which can be reach within day.we offer large number of the places to select and travel upon your intrest" />
        <meta name="keywords" content="day tours sri lanka, sri lanka tours, ahangama tours, galle tours,travel srilanka,  srilanka peter tours, best places srilanaka, day tour packages, best day tours, economical tour packages, experienced guide srilanka, attractive places sri lanka.things to do sri lanka" />
        <meta name="author" content="Synotec Holdings Private Limited" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
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
            include("./header.php");
            ?>
            <!-- Header Section End -->

            <!-- Inner Section Start -->
            <section class="inner-area banner-parralax">
                <div class="container">
                    <div class="section-content">
                        <div class="row">
                            <div class="col-12">                                                              
                                <h4>Day Tours</h4>
                                <p><a href="index.php">Home</a> -> Day Tours</p>
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
                            foreach ($TOURS as $day_tour) {
                                ?>
                                <div class="col-md-4">

                                    <div class="special-packages" style="margin-top: 20px">
                                        <div class="thumb">
                                            <a href="view_tour_day.php?id=<?php echo $day_tour['id'] ?>">
                                                <img src="upload/tour-package/<?php echo $day_tour['image_name']; ?>" alt="">  
                                            </a>
                                            <div class="post-title-box">


                                                <a href="view_tour_day.php?id=<?php echo $day_tour['id'] ?>">
                                                    <h4><?php echo $day_tour['title']; ?></h4>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="content">

                                            <p><?php echo $day_tour['short_description']; ?></p>
                                            <div class="center">
                                                <a class="btn-theme" href="view_tour_day.php?id=<?php echo $day_tour['id'] ?>">View More</a></div>

                                        </div>
                                    </div>
                                    </a>
                                </div>
                            <?php } ?>

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