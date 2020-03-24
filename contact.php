<?php
include './class/include.php';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <title>Sri Lanka Tours | Peter Tour Sri Lanka</title>
        <meta name="description" content="Never hesitate to contact us if you need further assistance from the Sri lanka Peter Tours Who known as one of the most tour package Best Provider in Srilanka with a real Sri Lankan Treatment. " />
        <meta name="keywords" content="round tours sri lanka, sri lanka tours, ahangama tours, galle tours, travel srilanka, day tours sri lanka, day tours srilanka, srilanka peter tours" />
        <meta name="author" content="Synotec Holdings Private Limited" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
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

        <!--contact form style-->
        <link href="contact-form/style.css" rel="stylesheet" type="text/css"/>
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
                                <h4>contact</h4>
                                <p><a href="index.php">Home</a> -> Contact</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Inner Section End -->


            <section class="contact-details pb-0">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="service-item style-1 border-1px">
                                <div class="service-icon">
                                    <i class="fa fa-map"></i>
                                </div>
                                <div class="content">
                                    <h5><a href="#">Contact Info</a></h5>
                                    <p> PK Padmasiri,Dombagoda, <br>Thiththagalla,Ahangama.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="service-item style-1 border-1px">
                                <div class="service-icon">
                                    <i class="fa fa-clock-o"></i>
                                </div>
                                <div class="content">
                                    <h5><a href="#">Business Hours</a></h5>
                                    <p>Monday-Friday: 10am to 8pm <br>Saturday: 11am to 3pm</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="service-item style-1 border-1px">
                                <div class="service-icon">
                                    <i class="fa fa-envelope"></i>
                                </div>
                                <div class="content">
                                    <h5><a href="#">Email</a></h5>
                                    <p><a href="#">info@srilankapetertours.com</a> <br> <a href="#">mail@srilankapetertours.com</a> </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="contact-details pb-60">
                <div class="container">
                    <div class="section-content">
                        <div class="row">
                            <div class="col-12 col-sm-12 col-md-7 col-lg-7">
                                <h3 class="title">Contact <span>us</span></h3>

                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <input type="text" name="name" id="txtFullName" class="form-control" placeholder="Enter Your Full Name" required>
                                        <span id="spanFullName"></span>
                                    </div>
                                       <div class="form-group col-md-6">
                                        <input type="email" name="email" id="txtPhone" class="form-control" placeholder="Enter Your Phone Number"  required>
                                          <span id="spanPhone"></span>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <input type="text" name="l_name" id="txtEmail" class="form-control" placeholder="Enter Your Email" required>
                                          <span id="spanEmail"></span>
                                    </div>
                                 
                                    <div class="contact-textarea col-md-12">
                                        <textarea class="form-control" rows="6" placeholder="Write Message" id="txtMessage" name="message" required></textarea>
                                          <span id="spanMessage"></span>
                                    </div>



                                    <div class="form-group col-md-5" style="margin-top: 28px">
                                          <input type="text" name="captchacode" placeholder="Security Code"  class="form-control" id="captchacode" >

                                            <div class="vc-cd-12 vc-od-12">
                                                <span id="capspan" ></span> 
                                            </div>
                                    </div>
                                    <div class="form-group col-md-3"style="margin-top: 28px">
                                        <?php include './contact-form/captchacode-widget.php'; ?>

                                    </div>
                                    <div class="form-group col-md-4">
                                        <button id="btnSubmit" class="btn btn-theme mt-4" type="submit" value="Submit Form">Send Message</button>
                                    </div>
                                 
                                        <div class="vc-cd-12 vc-od-2">
                                            <img src="./contact-form/img/checking.gif"   alt="checking" id="checking"/>
                                        </div>

                                </div>
                                 <div class="col-sm-12">
                                        <div id="dismessage" align="center"></div>
                                    </div>



                            </div>
                            <div class="col-12 col-sm-12 col-md-5 col-lg-5 mt-50">
                                <div class="map">
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3961.3271708310695!2d79.91496081483695!3d6.851329195048741!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae25bd97320a087%3A0xfa4766a56acdd267!2sSynotec%20Holdings%20Pvt.%20Ltd!5e0!3m2!1sen!2slk!4v1580985309894!5m2!1sen!2slk" width="100%" height="532px" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>


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

        <!--contact-->
        <script src="contact-form/scripts.js" type="text/javascript"></script>
    </body>

</html> 