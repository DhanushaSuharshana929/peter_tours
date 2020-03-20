<?php
include './class/include.php';
$id = '';

$id = $_GET['id'];
$TOUR_PACKAGE = new TourPackage($id);
$DAY_DATES_OBJ = new TourDate(NULL);
$TOUR_DATES = $DAY_DATES_OBJ->getTourDatesById($id);
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
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="css/menu.css">
        <link rel="stylesheet" href="css/custom-animation.css">
        <!-- Style CSS -->
        <link rel="stylesheet" href="css/style.css">
        <!-- Responsive CSS -->
        <link rel="stylesheet" href="css/responsive.css">
        <link href="css/simplelightbox.min.css" rel="stylesheet" type="text/css"/>
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
                                <h4><?php echo $TOUR_PACKAGE->title; ?></h4>
                                <p><a href="index.php">Home</a> -> <?php echo $TOUR_PACKAGE->title; ?></p>

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

                            <?php
                            foreach ($TOUR_DATES as $day_tour) {
                                ?>
                                <DIV class="title-box">
                                    <H2><span>  <?php echo $day_tour['title']; ?></span></h2>
                                </DIV>
                                <br>
                                <div class="blog-details">
                                    <div class="details-content mb-40">

                                        <?php echo $day_tour['description']; ?>


                                    </div>
                                    <div class="row gallery-items">
                                        <?php
                                        $TOUR_DATES_PHOTO_OBJ = new TourDatePhoto(NULL);
                                        foreach ($TOUR_DATES_PHOTO_OBJ->getTourDatePhotosById($day_tour['id']) as $day_photo) {
                                            ?>
                                            <div class="col-sm-4 col-grid">
                                                <a href="upload/tour-package/date/gallery/<?php echo $day_photo['image_name'] ?>" class="icon lightbox-image">
                                                    <div class="gallery-item">
                                                        <div class="thumb pb-30">
                                                            <img src="upload/tour-package/date/gallery/thumb/<?php echo $day_photo['image_name'] ?>" alt="image">
                                                            <div class="overlay">
                                                                <div class="inner">


                                                                    <h4><?php echo $day_photo['caption']; ?></h4>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div></a>

                                            </div>


                                            <?php
                                        }
                                        ?>
                                        
                                    </div>
                                </div>
                                <?php
                            }
                            ?>
                                <center><div class="pb-30 pt-30" >

                                        <a href="booking.php?type=<?php echo $TOUR_PACKAGE->id ?>" class="read-btn2">Inquire This Tour Now

                                            <i class="fa fa-long-arrow-right" aria-hidden="true"></i>

                                        </a>
                                    </div></center>
                        </div>
                        <div class="col-md-4 col-lg-3">

                            <div class="theme-sidebar">


                                <div class="widget">
                                    <div class="title-box">
                                        <h3>Other <span>Day Tours</span></h3>
                                    </div>
                                    <?php
                                    foreach ($TOURS as $key => $day_tour) {
                                        if ($key < 7) {
                                            ?>
                                            <div class="blog-small-item">
                                                <a href="view_tour_round.php?id=<?php echo $day_tour['id'] ?>">

                                                    <img src="./upload/tour-package/<?php echo $day_tour['image_name'] ?>">
                                                </a>
                                                <div class="tex">
                                                    <h5> 
                                                        <a href="view_tour_round.php?id=<?php echo $day_tour['id'] ?>"><?php echo $day_tour['title']; ?></a>
                                                    </h5>
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

        <a href="#" class="scrollup"><i class="flaticon-long-arrow-pointing-up" aria-hidden="true"></i></a>


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
        <script src="js/simple-lightbox.min.js" type="text/javascript"></script>
        <script>
            $(function () {
                var $gallery = $('.gallery a').simpleLightbox();

                $gallery.on('show.simplelightbox', function () {
                    console.log('Requested for showing');
                })
                        .on('shown.simplelightbox', function () {
                            console.log('Shown');
                        })
                        .on('close.simplelightbox', function () {
                            console.log('Requested for closing');
                        })
                        .on('closed.simplelightbox', function () {
                            console.log('Closed');
                        })
                        .on('change.simplelightbox', function () {
                            console.log('Requested for change');
                        })
                        .on('next.simplelightbox', function () {
                            console.log('Requested for next');
                        })
                        .on('prev.simplelightbox', function () {
                            console.log('Requested for prev');
                        })
                        .on('nextImageLoaded.simplelightbox', function () {
                            console.log('Next image loaded');
                        })
                        .on('prevImageLoaded.simplelightbox', function () {
                            console.log('Prev image loaded');
                        })
                        .on('changed.simplelightbox', function () {
                            console.log('Image changed');
                        })
                        .on('nextDone.simplelightbox', function () {
                            console.log('Image changed to next');
                        })
                        .on('prevDone.simplelightbox', function () {
                            console.log('Image changed to prev');
                        })
                        .on('error.simplelightbox', function (e) {
                            console.log('No image found, go to the next/prev');
                            console.log(e);
                        });
            });
        </script>
    </body>


    <!-- Mirrored from heatmaponline.com/html/touran/hotel-1.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 19 Feb 2020 04:49:18 GMT -->
</html> 