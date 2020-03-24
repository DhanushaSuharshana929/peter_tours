<?php
include './class/include.php';
?>

<!DOCTYPE html>

<html lang="en">

    <head>

        <!-- Required meta tags -->


         <meta charset="utf-8">
        
        <meta name="description" content="We offer to book one of the best tour packages in Sri Lanka.Not Only We will take you to Your destinations and We will also guide you to have a real Sri Lankan Teatment which you will not able to have from anywere else. " />
        <meta name="keywords" content="tour packages sri lanka, book your tour, best tour packages, round tours sri lanka, day tours sri lanaka, booking tours , travel packages in sri lanka , best tour package providers, sri lanka travels, galle tours ,srilanka peter tours" />
        <meta name="author" content="Synotec Holdings Private Limited" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">       <title>Peter Tours</title>
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

                                <p><a href="./">Home</a> -> Contact</p>

                            </div>

                        </div>

                    </div>

                </div>

            </section>

            <!-- Inner Section End -->







            <section class="contact-details pb-60">

                <div class="container">

                    <div class="section-content">

                        <div class="row">

                            <div class="col-12 col-sm-12 col-md-12 col-lg-12">

                                <h3 class="title">Inquery Tour Package <span>Now</span></h3>



                                <div class="form-row">

                                    <div class="form-group col-md-4">
                                        <label>Your Name</label>
                                        <input type="text" name="name" id="txtFullName" class="form-control" placeholder="Enter Your Full Name" required>

                                        <span id="spanFullName"></span>

                                    </div>



                                    <div class="form-group col-md-4">
                                        <label>Email</label>
                                        <input type="text" name="email" id="txtEmail" class="form-control" placeholder="Enter Your Email" required>

                                        <span id="spanEmail"></span>

                                    </div>

                                    <div class="form-group col-md-4">
                                        <label>Phone Number</label>
                                        <input type="text" name="phone" id="txtPhone" class="form-control" placeholder="Enter Your Phone Number"  required>

                                        <span id="spanPhone"></span>

                                    </div>                                 

                                    <div class="form-group col-md-12" >
                                        <label>Tour Package</label>

                                        <select class="form-control" name="txtPackage" id="txtPackage" style="height: 56px ;margin-bottom: 10px;background-color: #fbfbfb;border: 1px solid #eee;font-size: 16px;font-family: 'Lora', serif;font-weight: 500;letter-spacing: 0.6px;text-transform: capitalize;">

                                            <?php
                                            $TOUR_PACKAGE = new TourPackage(null);


                                            if (isset($_GET['type'])) {

                                                $TYPE = new TourPackage($_GET['type']);
                                                ?>
                                                <option style="height: 56px">
                                                    <?php echo $TYPE->title ?>
                                                </option>
                                                <?php } else {
                                                ?> 
                                                <option style="height: 56px">-- Select Your Tour Package --</option><?php
                                                foreach ($TOUR_PACKAGE->all() as $tour) {
                                                    ?>

                                                    <option style="height: 56px">
                                                        <?php echo $tour['title']; ?>
                                                    </option>
                                                <?php }
                                            }
                                            ?>
                                        </select>

                                        <span id="spanEmail"></span>

                                    </div>


                                    <div class="form-group col-md-6">
                                        <label>Check-In Date</label>
                                        <input type="date" name="txtCheckin"  id="txtCheckin" class="form-control" placeholder=""  required>

                                        <span id="spanCheckin"></span>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Check-out Date</label>
                                        <input type="date" name="txtCheckout" id="txtCheckout" class="form-control" placeholder=""  required>

                                        <span id="spanCheckout"></span>
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label>No Of Adults</label>
                                        <input type="text" name="txtAdults"  id="txtAdults" class="form-control" placeholder="No Of Adults" required>

                                        <span id="spanAdults"></span>

                                    </div>

                                    <div class="form-group col-md-6">
                                        <label>No of Children</label>
                                        <input type="text" name="txtChildren" id="txtChildren" class="form-control" placeholder="Number of Children" required>

                                        <span id="spanChildren"></span>

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

                                    <div class="form-group col-md-2"style="margin-top: 28px">

                                        <center> <?php include './booking-form/captchacode-widget.php'; ?>
                                        </center>


                                    </div>

                                    <div class="form-group col-md-5">

                                        <center><button id="btnSubmit" class="btn btn-theme mt-4" type="submit" value="Submit Form">Send Message</button>
                                        </center>
                                    </div>
                                     <div class="vc-cd-12 vc-od-2">
                                            <img src="./booking-form/img/checking.gif"   alt="checking" id="checking"/>
                                        </div>
                                     <div class="col-sm-12">
                                        <div id="dismessage" align="center"></div>
                                    </div>




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

        <script src="booking-form/scripts.js" type="text/javascript"></script>
        
  

    </body>





    <!-- Mirrored from heatmaponline.com/html/touran/hotel-1.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 19 Feb 2020 04:49:18 GMT -->

</html> 