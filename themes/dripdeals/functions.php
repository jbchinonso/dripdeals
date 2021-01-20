<?php

function jb_dripdeals_scripts(){
    wp_enqueue_script('jquery3', '//ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js', null, '1.0', true);
    wp_enqueue_script('fancyboxjs', '//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js', null, '1.0', true);

    wp_enqueue_script('jquery', get_theme_file_uri('/js/jquery.min.js'), null, '1.0', true);
    wp_enqueue_script('popper', get_theme_file_uri('/js/popper.min.js'), null, '1.0', true);
    wp_enqueue_script('bootstrap-js', get_theme_file_uri('/js/bootstrap.bundle.min.js'), null, '1.0', true);
    // wp_enqueue_script('jquery-3', get_theme_file_uri('/js/jquery-3.0.0.min.js'), null, '1.0', true);
    wp_enqueue_script('custom-js', get_theme_file_uri('/js/custom.js'), null, '1.0', true);
    wp_enqueue_script('plugin', get_theme_file_uri('/js/plugin.js'), null, '1.0', true);
    // wp_enqueue_script('owl-js', get_theme_file_uri('/js/owl.carousel.js'), null, '1.0', true);
    wp_enqueue_script('mCustomScrollbar', get_theme_file_uri('/js/jquery.mCustomScrollbar.concat.min.js'), null, '1.0', true);

    wp_enqueue_style('dripdeals-style', get_theme_file_uri('/css/style.css'));
    // wp_enqueue_style('dripdeals-style', get_theme_file_uri('/css/meanmenu.css'));
    wp_enqueue_style('responsive', get_theme_file_uri('/css/responsive.css'));
    wp_enqueue_style('owl.carousel', get_theme_file_uri('/css/owl.carousel.min.css'));
    wp_enqueue_style('owl.theme', get_theme_file_uri('/css/owl.theme.default.min.css'));
    wp_enqueue_style('mCustomScrollbar-js', get_theme_file_uri('/css/jquery.mCustomScrollbar.min.css'));
    wp_enqueue_style('bootstrap.min', get_theme_file_uri('/css/bootstrap.min.css'));
    wp_enqueue_style('bootstrapcdn', '//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css');
    wp_enqueue_style('font-awesome', '//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css');
    wp_enqueue_style('fancybox', '//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css');

    

}



add_action('wp_enqueue_scripts', 'jb_dripdeals_scripts');
