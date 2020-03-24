<?php
include './class/include.php';
$ABOUT = new Page(1);
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

            <!-- Slick Section Start -->

            <!-- Slick Section End -->
            <?php
            include("./slider.php");
            ?>


            <!-- Special Places Section Start -->
            <section class="global-section over-layer-white pt-80 pb-70">

                <div class="container">

                    <div class="row">

                        <div class="col-xl-7 col-lg-12">

                            <div class="global-area">

                                <div class="inner-title">
                                    <h2>Lets get to<span> Know about Us</span></h2>
                                    <div class="sec-line"></div>
                                </div>

                                <p><?php echo $ABOUT->description ?></p>

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

                            <p class="map-content">Call us Now for a Better Explanation 
                                <span>(+94) 77 621 6932</span></p>

                        </div>

                    </div>

                </div>

            </section>
            <!-- Special Places Section End -->




            <!-- Features Section Start -->
            <section class="feature-section over-layer-black pt-85 pb-90">

                <div class="container">

                    <div class="row">

                        <div class="section-title">
                            <h4>Lets Have a close look at </h4>
                            <h2>Our  <span>Services </span></h2>
                        </div>

                    </div>

                    <div class="row">

                        <div class="row">

                            <?php
                            $SERVICE = new Service(NULL);
                            foreach ($SERVICE->all() as $service) {
                                ?>

                                <div class="col-md-4 service-item-index">

                                    <div class="feature-item">

                                        <div class="content">
                                            <a href="services.php"><h3><?php echo $service['title']; ?></h3></a>
                                            <a href="services.php"><p><?php echo $service['description'] ?></p></a>
                                        </div>

                                    </div>

                                </div>

                                <?php
                            }
                            ?>

                        </div>

                    </div>

                </div>

            </section>
            <!-- Process Section End -->




            <!-- Special Packages Section Start -->
            <section class="special-packages-sec pt-85 pb-90"style="margin-bottom: 30px;">

                <div class="container">

                    <div class="row">

                        <div class="col-md-9">

                            <div class="section-title stitle-left">
                                <h4>Here is Our Best</h4>
                                <h2>Tour <span>Packages</span></h2>
                            </div>

                        </div>

                    </div>

                    <div class="row">

                        <div class="col-lg-9 col-md-12">

                            <div class="row">

                                <div class="col-md-6">

                                    <div class="special-packages">

                                        <div class="thumb">

                                            <a href="day-tours.php"><img src="images/features/dt-1.jpg" alt=""></a>
                                            <div class="post-title-box">
                                                <a href="day-tours.php"><h4>Day Tours</h4></a>
                                            </div>

                                        </div>

                                        <div class="content">

                                            <p align="justify">Sri Lanka is a fascinating country. It is full of beaches, wildlife, 
                                                culture, and rivers. Our one day tour excursions include Kanneliya, Sinharaja, 
                                                Bundala, Yala, Madu Ganga and Whale watching etc. We have the experiences it.</p>

                                            <div class="">
                                                <a class="btn-theme" href="day-tours.php">View all day tours</a>
                                            </div>

                                        </div>

                                    </div>

                                </div>


                                <div class="col-md-6">

                                    <div class="special-packages">

                                        <div class="thumb">

                                            <a href="round-tours.php"><img src="images/features/dt-2.jpg" alt=""></a> 

                                            <div class="post-title-box">
                                                <a href="round-tours.php"><h4>Round Tours</h4></a>
                                            </div>

                                        </div>

                                        <div class="content">

                                            <p align="justify">Sri Lanka is the best country in the world. It is a tourists' destination. 
                                                Our round tour excursions are Colombo, Nuwara Eliya, Kandy and 
                                                Polonnaruwa etc. We have the experience to do that.</p>

                                            <div class="">
                                                <a class="btn-theme" href="round-tours.php">View all round tours</a>
                                            </div>

                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>

                        <div class="col-lg-3 col-md-4">

                            <div class="add-box thumb">
                                <a href="booking.php"> <img src="images/features/ad-1.png" alt="" ></a>
                            </div>

                        </div>

                    </div>

                </div>

            </section>
            <!-- Special Packages Section End -->




            <!-- Latest Hotel Section Start -->
            <section class="team-section pb-60">

                <div class="container">

                    <div class="row">

                        <div class="section-title">
                            <h4>The Sri Lanka's Most Exciting And Adventurous </h4>
                            <h2><span>Activities</span></h2>
                        </div>

                    </div>


                    <div class="col-md-12">

                        <div class="latesthotel_carousel owl-carousel owl-theme owl-navst">

                            <?php
                            $ACTIVITY = new Activities(NULL);
                            foreach ($ACTIVITY->all()as $activity) {
                                ?>

                                <div class="team-col">

                                    <div class="thumb">
                                        <a href="activities.php"><img src="upload/activity/<?php echo $activity['image_name']; ?>" alt=""></a>
                                    </div>

                                    <div class="content text-center">
                                        <a href="activities.php"><h4><?php echo $activity['title']; ?></h4></a>
                                        <br/>
                                        <a class="btn-theme" href="view_activities.php">View Details</a>
                                    </div>

                                </div>

                            <?php } ?>

                        </div>

                    </div>


                    <div class="text-center pt-30">
                        <a href="activities.php" class="read-btn2">View More
                            <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
                        </a>
                    </div>

                </div>


            </section>
            <!-- Latest Hotel Section End -->




            <!-- Blog Section Start -->
            <section class="app-section over-layer-white pt-85 pb-60">

                <div class="container">

                    <div class="row">

                        <div class="section-title">
                            <h4>Lets see About The Sri Lanka's Most Jaw-Dropping</h4>
                            <h2><span>Attractions</span></h2>
                        </div>

                    </div>


                    <div class="row">

                        <?php
                        $ATTRACTION = new Attraction(NULL);
                        foreach ($ATTRACTION->all() as $key => $attraction) {
                            if ($key < 6) {
                                ?>

                                <div class="col-md-6 col-lg-4">
                                    <div class="blog-post">
                                        <div class="thumb">
                                            <a href="view_attractions.php"><img alt="" src="upload/attraction/<?php echo $attraction['image_name']; ?>"></a>
                                            <div class="content-index">
                                                <a href="attractions.php"><h3><?php echo $attraction['title']; ?></h3></a>

                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <?php
                            }
                        }
                        ?>
                    </div>

                    <div class="pt-30" >
                        <a href="attractions.php" class="read-btn2">View More
                            <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
                        </a>
                    </div>
                </div>
            </section>
            <!-- Blog Section End -->

            <!-- Testimonials Section Start -->
            <section class="testimonials-section pt-80 pb-80">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="inner-title">
                                <h2 style="color: black">Our Client's Say</h2>
                                <div class="sec-line mb-40"></div>
                            </div>
                            <div class="testimonials-post testimonials_slide owl-carousel owl-theme owl-navst st-three">
                                <?php
                                $COMMENT = new Comments(NULL);
                                foreach ($COMMENT->activeComments() as $comment) {
                                    ?>
                                    <div class="testimonials-item">
                                        <div class="thumb">
                                            <img src="upload/comments/<?php echo $comment['image_name']; ?>" alt="">
                                        </div>
                                        <div class="content">
                                            <h5><?php echo $comment['name']; ?></h5>
                                            <h6><?php echo $comment['country']; ?></h6>
                                            <ul>
                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star-half-empty"></i></a></li>
                                                <li><a href="#"><i class="fa  fa-star-o"></i></a></li>
                                            </ul>
                                            <p><i class="fa fa-quote-left"></i><?php echo $comment['comment']; ?></p>
                                        </div>
                                    </div>
                                    <?php
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Testimonials Section End -->

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