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


//=======================
## Slider customizer
//=======================

require_once dirname(__FILE__) . '/inc/customizer.php';


//=======================
## Custom website logo
//=======================


function jb_dripdeals_custom_logo_setup()
{
    $defaults = array(
        'height' => 47,
        'width' => 174,
        'flex-height' => true,
        'flex-width' => true,
        'header-text' => array('dripdeals', 'site-description'),
        'unlink-homepage-logo' => true,
    );
    add_theme_support('custom-logo', $defaults);
}
add_action('after_setup_theme', 'jb_dripdeals_custom_logo_setup');

// Add Thumbnail Support
add_theme_support('post-thumbnails');
set_post_thumbnail_size(1200, 900, true);


function jb_dripdeals_nav_menu()
{
    register_nav_menu('mainMenu', 'main Menu');
    register_nav_menu('footerMenu', 'footer Menu');
}
add_action('after_setup_theme', 'jb_dripdeals_nav_menu');


function jb_dripdeals_review_post()
{
    register_post_type('review', array(
        'public' => true,
        'show_in_menu' => true,
        'has_archive' => true,
        'rewrite' => array('slug' => 'reviews'),
        'show_in_rest' => true,
        'labels' => array(
            'name' => 'Reviews',
            'singular_name' => 'Review',
            'add_new_item' => 'Add New Review',
            'edit_item' => 'Edit review',
            'all_items' => 'All reviews',
            'featured_image' => 'Review Image',
            'set_featured_image' => 'Set image',
            'remove_featured_image' => 'Remove image',
            'use_featured_image' => 'Use as review image',
        ),
        'supports' => array('title', 'editor', 'thumbnail', 'custom-fields'),
        'menu_icon' => 'dashicons-screenoptions',
    ));
}

add_action('init', 'jb_dripdeals_review_post');


function jb_dripdeals_address_widget()
{

    register_sidebar(array(
        'name' => 'Footer Address widget Area',
        'id' => 'address_widget',
        'before_widget' => '<div class="headinga">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>',
    ));

}
add_action('widgets_init', 'jb_dripdeals_address_widget');


function jb_dripdeals_copyrignt_widget()
{

    register_sidebar(array(
        'name' => 'Footer copyrignt widget Area',
        'id' => 'copyrignt_widget',
        'before_widget' => '<div class="container">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>',
    ));

}
add_action('widgets_init', 'jb_dripdeals_copyrignt_widget');
