<?php
include './class/include.php';
$id = '';

$id = $_GET['id'];

$ACTIVITY = new Activities($id);
?>
<!DOCTYPE html>
<html lang="en">

   <head>
       
         <!-- Required meta tags -->
         <meta charset="utf-8">
         <title>Peter Tours</title>

        <meta name="description" content="We will guide to the most enjoyble and popular Activities amoung the Srilanka. You will be able to experience best  activies around srilanka along with us with a superiour guidence.You will get lost in a huge amount of Pleasure during these activities for sure." />
        <meta name="keywords" content="best activities sri lanka, adventurous activities sri lanka, indoor activities, outdoor activities, coastal activies, beach activities sri lanka, hiking mountanins srilanka, things to do in srilanka, ways to spend time in sri lanka, things to do in sri lanka" />
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
            include("./header.php");
            ?>
            <!-- Header Section End -->
            <!-- Inner Section Start -->
            <section class="inner-area banner-parralax">
                <div class="container">
                    <div class="section-content">
                        <div class="row">
                            <div class="col-12">
                                <h4><?php echo $ACTIVITY->title ?></h4>

                                <p><a href="index.php">Home</a> -> <?php echo $ACTIVITY->title ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Inner Section End -->

            <!-- Blog Section Start -->
            <section class="blog-section">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-lg-9">
                            <div class="blog-details">

                                <div class="view_carousel owl-carousel owl-theme owl-navst">
                                    <?php
                                    $ACTIVITY_PHOTO_OBJ = new ActivitiesPhoto(NULL);
                                    foreach ($ACTIVITY_PHOTO_OBJ->getActivitiesPhotosById($ACTIVITY->id) as $activities__photo) {
                                        ?>
                                        <div class="thumb">
                                            <img src="upload/activity/gallery/<?php echo $activities__photo['image_name']; ?>" alt="">
                                        </div>
                                    <?php } ?>


                                </div>

                                <div class="details-content mb-40">

                                    <p class="mb-20"><?php echo $ACTIVITY->description ?></p>


                                </div>

                            </div>
                        </div>
                        <div class="col-md-4 col-lg-3">
                            <div class="theme-sidebar">



                                <div class="widget">
                                    <div class="title-box">
                                        <h3>Other <span>Activities</span></h3>
                                    </div>
                                    <?php
                                    $ACTIVITY = new Activities(NULL);
                                    foreach ($ACTIVITY->all()as $key => $activity) {
                                        if ($key < 7) {
                                            ?>
                                            <div class="blog-small-item">
                                                <a href="view_activities.php?id=<?php echo $activity['id'] ?>">
                                                    <img src="upload/activity/<?php echo $activity['image_name']; ?>" alt=""></a>
                                                <div class="tex">
                                                    <h5><a href="view_activities.php?id=<?php echo $activity['id'] ?>"><?php echo $activity['title']; ?></h5>
                                                </div>
                                            </div>

                                            <?php
                                        }
                                    }
                                    ?>
                                </div>



                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Blog Section End -->

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