<?php
include './class/include.php';
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
                                <h4>Attractions</h4>
                                <p><a href="index.php">Home</a> -> Attractions</p>
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
                        <?php
                        $ATTRACTION = new Attraction(NULL);
                        foreach ($ATTRACTION->all() as $attraction) {
                            ?>
                            <div class="col-md-6 col-lg-4">
                                <div class="blog-post">
                                    <div class="thumb">
                                        <a href="view_attractions.php?id=<?php echo $attraction['id'] ?>">
                                            <img src="upload/attraction/<?php echo $attraction['image_name']; ?>" alt=""> </a>                                   
                                        <div class="content">
                                            <a href="view_attractions.php?id=<?php echo $attraction['id'] ?>">
                                                <h3><?php echo $attraction['title']; ?></h3></a>
                                            <div class="meta-box">
                                                <div class="inner">
                                                    <div class="date">
                                                        <i class="fa fa-calendar-plus-o"></i> Feb 24
                                                    </div>
                                                    <div class="comment">
                                                        <i class="fa fa-commenting-o"></i> 8
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <a href="view_attractions.php?id=<?php echo $attraction['id'] ?>" class="read-btn">Continue Reading
                                        <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </div>
                            <?php
                        }
                        ?>
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
</body>


<!-- Mirrored from heatmaponline.com/html/touran/hotel-1.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 19 Feb 2020 04:49:18 GMT -->
</html> 