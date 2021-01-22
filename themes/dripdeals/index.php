<?php get_header() ?>
    <section class="slider_section">
        <div id="myCarousel" class="carousel slide banner-main" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="first-slide" src="<?php echo esc_url(get_theme_mod('dripdeal_slider_image1'))?>" alt="First slide">
                    <div class="container">
                        <div class="carousel-caption relative">
                            <span><?php echo get_option('dripdeals_slider_text1'); ?></span>
                            <h1><?php echo get_option('dripdeals_slider_H1text'); ?></h1>
                            <p><?php echo get_option('dripdeals_slider_p');?></p>
                            <a class="buynow" href="<?php echo site_url(''.get_option('dripdeals_slider_button_slug').'');?>">
                                <?php echo get_option('dripdeals_slider_button'); ?>
                            </a>
                            <ul class="social_icon">
                                <li> <a href="#"><i class="fa fa-facebook-f"></i></a></li>
                                <li> <a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li> <a href="#"><i class="fa fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="second-slide" src="<?php echo esc_url(get_theme_mod('dripdeal_slider_image2'))?>" alt="Second slide">
                    <div class="container">
                        <div class="carousel-caption relative">
                            <span><?php echo get_option('dripdeals_slider_text1') ?></span>
                            <h1><?php echo get_option('dripdeals_slider_H1text'); ?></h1>
                            <p><?php echo get_option('dripdeals_slider_p');?></p>
                            <a class="buynow" href="<?php echo site_url(''.get_option('dripdeals_slider_button_slug').'');?>">
                                <?php echo get_option('dripdeals_slider_button'); ?>
                            </a>
                            <ul class="social_icon">
                                <li> <a href="#"><i class="fa fa-facebook-f"></i></a></li>
                                <li> <a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li> <a href="#"><i class="fa fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="third-slide" src="<?php echo esc_url(get_theme_mod('dripdeal_slider_image3'))?>" alt="Third slide">
                    <div class="container">
                        <div class="carousel-caption relative">
                            <span><?php echo get_option('dripdeals_slider_text1') ?></span>
                            <h1><?php echo get_option('dripdeals_slider_H1text'); ?></h1>
                            <p><?php echo get_option('dripdeals_slider_p'); ?></p>
                            <a class="buynow" href="<?php echo site_url(''.get_option('dripdeals_slider_button_slug').'');?>">
                                <?php echo get_option('dripdeals_slider_button'); ?>
                            </a>
                            <ul class="social_icon">
                                <li> <a href="#"><i class="fa fa-facebook-f"></i></a></li>
                                <li> <a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li> <a href="#"><i class="fa fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                <i class='fa fa-angle-left'></i>
            </a>
            <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                <i class='fa fa-angle-right'></i>
            </a>
        </div>
    </section>

    <!-- about -->
    <div class="about" id="about">
        <div class="container">
            <div class="row">
                <div class="col-xl-5 col-lg-5 col-md-5 co-sm-l2">
                    <div class="about_img">
                        <figure><img src="<?php echo get_theme_file_uri('images/about.png')?>" alt="img" /></figure>
                    </div>
                </div>
                <div class="col-xl-7 col-lg-7 col-md-7 co-sm-l2">
                    <div class="about_box">
                        <h3>About Us</h3>
                        <span>Our Mobile Shop</span>
                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of It is a long established fact that a reader will be distracted by the </p>

                    </div>
               
            </div>
        </div>
    </div>
    </div>
    <!-- end about -->

    <!-- brand -->
    <div class="brand" id="brand">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="titlepage">
                        <h2>Our Brand</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="brand-bg">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 margin">
                        <div class="brand_box">
                            <img src="<?php echo get_theme_file_uri('images/1.png')?>" alt="img" />
                            <h3>$<strong class="red">100</strong></h3>
                            <span>Mobile Phone</span>
                            <i><img src="<?php echo get_theme_file_uri('images/star.png')?>"/></i>
                            <i><img src="<?php echo get_theme_file_uri('images/star.png')?>"/></i>
                            <i><img src="<?php echo get_theme_file_uri('images/star.png')?>"/></i>
                            <i><img src="<?php echo get_theme_file_uri('images/star.png')?>"/></i>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 margin">
                        <div class="brand_box">
                            <img src="<?php echo get_theme_file_uri('images/2.png')?>" alt="img" />
                            <h3>$<strong class="red">100</strong></h3>
                            <span>Mobile Phone</span>
                            <i><img src="<?php echo get_theme_file_uri('images/star.png')?>"/></i>
                            <i><img src="<?php echo get_theme_file_uri('images/star.png')?>"/></i>
                            <i><img src="<?php echo get_theme_file_uri('images/star.png')?>"/></i>
                            <i><img src="<?php echo get_theme_file_uri('images/star.png')?>"/></i>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 margin">
                        <div class="brand_box">
                            <img src="<?php echo get_theme_file_uri('images/3.png')?>" alt="img" />
                            <h3>$<strong class="red">100</strong></h3>
                            <span>Mobile Phone</span>
                            <i><img src="<?php echo get_theme_file_uri('images/star.png')?>"/></i>
                            <i><img src="<?php echo get_theme_file_uri('images/star.png')?>"/></i>
                            <i><img src="<?php echo get_theme_file_uri('images/star.png')?>"/></i>
                            <i><img src="<?php echo get_theme_file_uri('images/star.png')?>"/></i>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
                        <div class="brand_box">
                            <img src="<?php echo get_theme_file_uri('images/4.png')?>" alt="img" />
                            <h3>$<strong class="red">100</strong></h3>
                            <span>Mobile Phone</span>
                            <i><img src="<?php echo get_theme_file_uri('images/star.png')?>"/></i>
                            <i><img src="<?php echo get_theme_file_uri('images/star.png')?>"/></i>
                            <i><img src="<?php echo get_theme_file_uri('images/star.png')?>"/></i>
                            <i><img src="<?php echo get_theme_file_uri('images/star.png')?>"/></i>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 mrgn">
                        <div class="brand_box">
                            <img src="<?php echo get_theme_file_uri('images/5.png')?>" alt="img" />
                            <h3>$<strong class="red">100</strong></h3>
                            <span>Mobile Phone</span>
                            <i><img src="<?php echo get_theme_file_uri('images/star.png')?>"/></i>
                            <i><img src="<?php echo get_theme_file_uri('images/star.png')?>"/></i>
                            <i><img src="<?php echo get_theme_file_uri('images/star.png')?>"/></i>
                            <i><img src="<?php echo get_theme_file_uri('images/star.png')?>"/></i>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 mrgn">
                        <div class="brand_box">
                            <img src="<?php echo get_theme_file_uri('images/6.png')?>" alt="img" />
                            <h3>$<strong class="red">100</strong></h3>
                            <span>Mobile Phone</span>
                            <i><img src="<?php echo get_theme_file_uri('images/star.png')?>"/></i>
                            <i><img src="<?php echo get_theme_file_uri('images/star.png')?>"/></i>
                            <i><img src="<?php echo get_theme_file_uri('images/star.png')?>"/></i>
                            <i><img src="<?php echo get_theme_file_uri('images/star.png')?>"/></i>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <a class="read-more">See More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- end brand -->
    <!-- clients -->
    <div class="clients" id="clients">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="titlepage">
                        <h2>what say our clients</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="clients_red">
        <div class="container">
            <div id="testimonial_slider" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ul class="carousel-indicators">
                    <li data-target="#testimonial_slider" data-slide-to="0" class=""></li>
                    <li data-target="#testimonial_slider" data-slide-to="1" class="active"></li>
                    <li data-target="#testimonial_slider" data-slide-to="2" class=""></li>
                </ul>
                <!-- The slideshow -->
                <div class="carousel-inner">
                    <?php
                        $clients = new WP_Query(array(
                        'posts_per_page' => 3,
                        'post_type' => 'Review',
                        'orderby' => 'ID',
                        'order' => 'DESC',
                    ));
                    
                    $postids = [];

                    foreach($clients->posts as $post){
                        $postids[] = $post->ID;
                    }

                    while($clients->have_posts()){
                        $clients->the_post();
                        $class= '';
                         if(get_the_ID () === max($postids)) $class= 'active'
                     ?>
                    <div class="carousel-item <?php echo $class  ?>">
                        <div class="testomonial_section">
                            <div class="full center">
                            </div>
                            <div class="full testimonial_cont text_align_center cross_layout">
                                <div class="cross_inner">
                                    <h3><?php the_title(); ?><br><strong class="ornage_color"><?php the_field('client_status') ?></strong></h3>
                                    <p>
                                        <?php the_content(); ?>
                                    </p>
                                    <div class="full text_align_center margin_top_30">
                                        <img src="<?php echo get_theme_file_uri('icon/testimonial_qoute.png')?>">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <?php }  ?>

                   

                </div>

            </div>

        </div>
    </div>
    <!-- end clients -->
    <!-- contact -->
    <div class="contact" id="contact">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="titlepage">
                        <h2>Contact us</h2>
                    </div>
                    <form class="main_form">
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                <input class="form-control" placeholder="Your name" type="text" name="Your Name">
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                <input class="form-control" placeholder="Email" type="text" name="Email">
                            </div>
                            <div class=" col-md-12">
                                <input class="form-control" placeholder="Phone" type="text" name="Phone">
                            </div>
                            <div class="col-md-12">
                                <textarea class="textarea" placeholder="Message"></textarea>
                            </div>
                            <div class=" col-md-12">
                                <button class="send">Send</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- end contact -->

   <?php get_footer(); ?>