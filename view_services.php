<?php
include './class/include.php';
$id = '';

$id = $_GET['id'];

$Services = new Service($id);
?>
<!DOCTYPE html>
<html lang="en">


   <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        
        <meta name="description" content="We will guide to the most enjoyble and popular Activities amoung the Srilanka. You will be able to experience best  activies around srilanka along with us with a superiour guidence.You will get lost in a huge amount of Pleasure during these activities for sure." />
        <meta name="keywords" content="best activities sri lanka, adventurous activities sri lanka, indoor activities, outdoor activities, coastal activies, beach activities sri lanka, hiking mountanins srilanka, things to do in srilanka, ways to spend time in sri lanka, things to do in sri lanka" />
        <meta name="author" content="Synotec Holdings Private Limited" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">       <title>Peter Tours</title>
        <title>Peter Tours</title>


        <!------------------------------------------
        Main CSS File
      <------------------------------------------>

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">

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
                                <h4><?php echo $Services->title ?></h4>

                                <p><a href="index.php">Home</a> -> <?php echo $Services->title ?></p>
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
                                <img src="upload/service/<?php echo $Services->image_name?>"

                                </div>

                                <div class="details-content mb-40">

                                    <p class="mb-20"><?php echo $Services->description ?></p>


                                </div>

                            </div>
                    </div>
                        <div class="col-md-4 col-lg-3">
                            <div class="theme-sidebar">



                                <div class="widget">
                                    <div class="title-box">
                                        <h3>Other <span>Services</span></h3>
                                    </div>
                                    <?php
                                    $Service = new Service(NULL);
                                    foreach ($Service->all()as $key => $service) {
                                        if ($key < 7) {
                                            ?>
                                            <div class="blog-small-item">
                                                <a href="view_activities.php?id=<?php echo $service['id'] ?>">
                                                    <img src="upload/service/<?php echo $service['image_name']; ?>" alt=""></a>
                                                <div class="tex">
                                                    <h5><a href="view_activities.php?id=<?php echo $service['id'] ?>"><?php echo $service['title']; ?></h5>
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