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
                                <h4>Gallery</h4>
                               <p><a href="index.php">Home</a> -> Gallery</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Inner Section End -->

            <!-- Gallery Section Start -->
            <section class="gallery-section pt-70 pb-70" style="padding-top: 5px">
                <div class="container">
                    <div class="row">

                    </div>
                    <div class="row gallery-items">
                        <?php
                        $GALLERY = new AlbumPhoto(NULL);
                        foreach ($GALLERY->all() as $gallery) {
                            ?>
                            <div class="col-sm-3  col-grid col-center">
                                <a href="upload/photo-album/gallery/<?php echo $gallery['image_name']; ?>" class="lightbox-image">
                                    <div class="gallery-item">
                                        <div class="thumb">
                                            <img src="upload/photo-album/gallery/thumb/<?php echo $gallery['image_name']; ?>" alt="image">
                                            <div class="overlay">
                                                <div class="inner">



                                                    <h4><?php echo $gallery['caption']; ?></h4>

                                                </div>
                                            </div>
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
            <!-- Gallery Section End -->



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