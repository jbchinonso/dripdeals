<!DOCTYPE html>
<html lang="en">

<head>
    <!-- basic -->
    <meta charset="<?php bloginfo('charset');?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
   

    <!-- fevicon -->
    <link rel="icon" href="images/fevicon.png" type="image/gif" />
  <?php wp_head();?>
</head>
<!-- body -->

<body class="main-layout" <?php body_class() ?>>
    <!-- loader  -->
    <div class="loader_bg">
        <div class="loader"><img src="<?php echo get_theme_file_uri('/images/loading.gif') ?>" alt="#" /></div>
    </div>
    <!-- end loader -->
    <!-- header -->
    <header>
        <!-- header inner -->
        <div class="header">

            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                        <div class="full">
                            <div class="center-desk">
                                <div class="logo">
                                    <a href="index.html"><img src="<?php echo get_theme_file_uri('/images/logo.png') ?>"alt="#"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                        <div class="menu-area">
                            <div class="limit-box">
                                <nav class="main-menu">
                                    <ul class="menu-area-main">
                                        <li class="active"> <a href="index.html">Homemy</a> </li>
                                        <li> <a href="about.html">About</a> </li>
                                        <li><a href="brand.html">Brand</a></li>
                                        <li><a href="special.html">Specials</a></li>
                                        <li><a href="contact.html">Contact Us</a></li>
                                        <li class="last">
                                            <a href="#"><img src="<?php echo get_theme_file_uri('images/search_icon.png') ?>" alt="icon" /></a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 offset-md-6">
                        <div class="location_icon_bottum">
                            <ul>
                                <li><img src="<?php echo get_theme_file_uri('icon/call.png')?>" />(+71)9876543109</li>
                                <li><img src="<?php echo get_theme_file_uri('icon/email.png')?>" />demo@gmail.com</li>
                                <li><img src="<?php echo get_theme_file_uri('icon/loc.png')?>" />Location</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end header inner -->
    </header>
    <!-- end header -->