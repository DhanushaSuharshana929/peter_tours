<?php
$ABOUT = new Page(1);
?>
<footer class="bg-faded pt-70 pb-40 bg-theme-color-2">
    <div class="container">
        <div class="section-content">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-12 footer-contact" >
                    <div class="footer-item footer-widget-one">
                        <img class="footer-logo mb-25" src="images/logo-1.png" alt="">
                        <ul class="footer-list footer-contact">
                            <li><i class="fa fa-phone"></i> (+94) 77 621 6932</li> 
                            <li><i class="fa fa-phone"></i> (+94) 77 169 0247</li>
<!--                            <li><i class="fa fa-phone"></i> (+94) 76 935 4804</li>-->
<!--
                            <li><i class="fa fa-map-marker"></i> Address: PK Padmasiri,
                                Dombagoda,Thiththagalla,
                                           Ahangama.</li>-->
                            <li><i class="fa fa-envelope"></i> <a href="mailto:">Email: mail@petertours.com</a></li>
                        </ul>
                     
                        <h6>Follow<span> Us</span></h6>
                        <ul class="social-icon bordered-theme">
                            <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-whatsapp" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-tripadvisor" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="footer-item">

                        <div class="footer-title">
                            <h4>Our <span>Services</span></h4>
                            <div class="border-style-3"></div>
                        </div>
                        <?php
                        $SERVICE = new Service(NULL);
                        foreach ($SERVICE->all() as $key => $service) {
                            if($key < 6){
                            ?>
                            <ul class="footer-list">
                                <li><a href="services.php"><?php echo $service['title']; ?></a></li>

                            </ul>
                        <?php }} ?>
                    </div>

                </div>


                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="footer-item">
                        <div class="footer-title">
                            <h4>Usefull <span>Links</span></h4>
                            <div class="border-style-3"></div>
                        </div>
                        <ul class="footer-list">

                            <li><a href="about.php">About</a></li>
                            <li><a href="activities.php">Activities</a></li>
                            <li><a href="attractions.php">Attractions</a></li>
                            <li><a href="gallery.php">Gallery</a></li>
                            <li><a href="services.php">Services</a></li>
                            <li><a href="contact.php">Contact</a></li>
                        </ul>

                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="footer-item">
                        <div class="footer-title">
                            <h4>About Peter <span>Tours</span></h4>
                            <div class="border-style-3"></div>
                        </div>
                        <p style="text-align: justify"><?php echo $ABOUT->description ?></p>



                    </div>

                </div>
            </div>
        </div>
    </div>
</footer>
<section class="footer-copy-right bg-theme-color-2 text-white p-0">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <p class="pull-left">© 2020, All Rights Reserved :<a href="#"> Peter Tours Sri Lanka</a></p>
                <p class="pull-right">Design & Developed By :<a href="#"> Synotec Holdings (Pvt.) Ltd </a></p>
            </div>
        </div>
    </div>
</section>