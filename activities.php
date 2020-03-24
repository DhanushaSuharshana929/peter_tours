<?php
include './class/include.php';
?>
<!DOCTYPE html>
<html lang="en">


    <head>
        <!-- Required meta tags -->
         <meta charset="utf-8">
        
        <meta name="description" content="We will guide to the most enjoyble and popular Activities amoung the Srilanka. You will be able to experience best  activies around srilanka along with us with a superiour guidence.You will get lost in a huge amount of Pleasure during these activities for sure." />
        <meta name="keywords" content="best activities sri lanka, adventurous activities sri lanka, indoor activities, outdoor activities, coastal activies, beach activities sri lanka, hiking mountanins srilanka, things to do in srilanka, ways to spend time in sri lanka, things to do in sri lanka, galle tours ,srilanka peter tours" />
        <meta name="author" content="Synotec Holdings Private Limited" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">       <title>Peter Tours</title>


        <!------------------------------------------
        Main CSS File
      <------------------------------------------>

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
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
                                <h4>Activities</h4>
                                <p><a href="index.php">Home</a> -> Activities</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Inner Section End -->

            <!-- team Section Start -->
            <section class="team-section">
                <div class="container">
                    <div class="row">
                        
                        <?php
                        $ACTIVITY = new Activities(NULL);
                        foreach ($ACTIVITY->all()as $activity) {
                            ?>
                           <div class="col-lg-4 col-md-4 col-sm-6">
                           
                           <div class="team-col">
                                     
                                    <div class="thumb">
                                        <a href="view_activities.php?id=<?php echo $activity['id'] ?>">
                                            <img src="upload/activity/<?php echo $activity['image_name']; ?>" alt=""></a>
                                    </div>
                                    <div class="content text-center">

                                        <a href="view_activities.php?id=<?php echo $activity['id'] ?>">
                                        <h4><?php echo $activity['title']; ?></h4>
                                        
                                        </a>
                                      
                                       <br/>
                                            
                                        <a class="btn-theme" href="view_activities.php?id=<?php echo $activity['id'] ?>">View Details</a>

                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                        
                    </div>
                </div>
            </section>
            <!-- team Section End -->


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