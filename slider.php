<section class="slider-wrapper p-0">
    <div id="slider-style-one" class="carousel slide bs-slider control-round indicators-line" data-ride="carousel" data-pause="hover" data-interval="5000" >
        <!--
                     Indicators 
                    <ol class="carousel-indicators">
                        <li data-target="#slider-style-one" data-slide-to="0" class="active"></li>
                        <li data-target="#slider-style-one" data-slide-to="1"></li>
                        <li data-target="#slider-style-one" data-slide-to="2"></li>
                    </ol>-->

        <!-- Wrapper For Slides -->
        <div class="carousel-inner" role="listbox">

            <?php
            $SLIDER = new Slider(NULL);
            foreach ($SLIDER->all() as $key => $slider) {
                if ($key == 0) {
                    ?>
                    <!-- Item Slide -->
                    <div class="carousel-item active">

                        <!-- Slide Background -->
                        <img src="upload/slider/<?php echo $slider['image_name']; ?>" alt="Slider Images"  class="slide-image img-responsive"/>
                        <div class="bs-slider-overlay"></div>

                        <div class="container">
                            <div class="row">
                                <!-- Slide Text Layer -->
                                <div class="slide-text slide-style-right">
                                    <div class="sub-title">

                                        <h4><?php echo $slider['title']; ?></h4>
                                    </div>
                                    <div class="title-box">
                                        <?php echo $slider['description']; ?>

                                    </div>
                                    <!--                                <div class="btn-box">
                                                                        <a href="#" class="btn-theme">Read more</a>
                                                                    </div>-->

                                </div>
                                <!--                            <div class="package-box">
                                                                <h1><span>45%</span> off</h1>
                                                                <h4>on all package</h4>
                                                                <a href="#">Book Now</a>
                                                            </div>-->
                            </div>
                        </div>
                    </div>
                    <!-- End of Slide -->
                    <?php
                } else {
                    ?>
                    <!-- Item Slide -->
                    <div class="carousel-item">

                        <!-- Slide Background -->
                        <img src="upload/slider/<?php echo $slider['image_name']; ?>" alt="Slider Images"  class="slide-image"/>
                        <div class="bs-slider-overlay"></div>

                        <div class="container">

                            <div class="row">
                                <!-- Slide Text Layer -->
                                <div class="slide-text slide-style-left">
                                    <div class="sub-title">
                                        <h4><?php echo $slider['title']; ?></h4>
                                    </div>
                                    <div class="title-box">
                                        <?php echo $slider['description']; ?>

                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- End of Slide -->
                    <?php
                }
            }
            ?>

        </div><!-- End of Wrapper For Slides -->

        <!-- Left Control -->
        <a class="left carousel-control" href="#slider-style-one" role="button" data-slide="prev">
            <span class="fa fa-angle-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>

        <!-- Right Control -->
        <a class="right carousel-control" href="#slider-style-one" role="button" data-slide="next">
            <span class="fa fa-angle-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>

    </div> <!-- End  slider-style-one Slider -->
</section>