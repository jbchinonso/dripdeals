<?php

//define global variables
define('POST_PER_PAGE', 2);

//END


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

add_theme_support('title-tag');


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


if(class_exists('WooCommerce')){
    function dripdeals_add_woocommerce_support(){
        add_theme_support('woocommerce');
    }

    add_action('after_setup_theme', 'dripdeals_add_woocommerce_support');
}

//Remove default woocommerce styles
//add_filter('woocommerce_enqueue_styles', '__return_false');


//Remove shop title
 add_filter('woocommerce_show_page_title', '__return_false');

//Add support

add_theme_support('wc-product-gallery-zoom');
add_theme_support('wc-product-gallery-lightbox');
add_theme_support('wc-product-gallery-slider');




//Update cart when customers add items to cart

function dripdeals_add_to_cart_fragment($fragments)
{
    
    global $woocommerce;
    $count = $woocommerce->cart->cart_contents_count;
    
    $fragments['.cart-count'] = "<div class='cart-count'>".$count."</div>";
    return $fragments;
    
}
add_filter('woocommerce_add_to_cart_fragments', 'dripdeals_add_to_cart_fragment');



//====================
// Everything about the see more button starts here
//Register and Enqueue
//Load more script
//==================

function jb_dripdeals_load_more_scripts()
{

    global $wp_query;

    $args = array(
    'post_type' => 'product',
    'posts_per_page' => POST_PER_PAGE,
);
$products = new WP_Query($args);
$variables = $products->query_vars;
$page = $variables['paged'];

//var_dump($products->max_num_pages);
    // In most cases it is already included on the page and this line can be removed
    wp_enqueue_script('jquery');

    wp_register_script('loadmore', get_stylesheet_directory_uri() . '/js/loadmore.js', array('jquery'));

    
    wp_localize_script('loadmore', 'jb_dripdeals_loadmore_params', array(
        'ajaxurl' => site_url() . '/wp-admin/admin-ajax.php', // WordPress AJAX
        'posts' => json_encode($variables), // everything about our loop is here
        'current_page' => $page ? $page : 1,
        'max_page' => $products->max_num_pages,
    ));

    wp_enqueue_script('loadmore');
}

add_action('wp_enqueue_scripts', 'jb_dripdeals_load_more_scripts');



function jb_dripdeals_loadmore_ajax_handler()
{

    // prepare our arguments for the query
    $args = json_decode(stripslashes($_POST['query']), true);
    $args['paged'] = $_POST['page'] + 1; // we need next page to be loaded
    $args['post_status'] = 'publish';


    //run the query
   $prop = new WP_Query($args);

    if ($prop->have_posts()):
        // run the loop
        
        
        while($prop->have_posts()) {
            $prop->the_post();
            $pid = get_the_ID();
            $product = wc_get_product($pid);
            ?>
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 margin product">
                        <div class="brand_box">
                            <a href="<?php the_permalink() ?>">
                            <img src="<?php the_post_thumbnail_url() ?>" alt="<?php the_title()?>" />
                            <h3>₦<strong class="red"><?php echo number_format($product->get_sale_price(), 2, '.', ','); ?></strong></h3>
                            <span> <a href="<?php the_permalink() ?>" ><?php the_title() ?></a></span>
                            <i><img src="<?php echo get_theme_file_uri('images/star.png')?>"/></i>
                            <i><img src="<?php echo get_theme_file_uri('images/star.png')?>"/></i>
                            <i><img src="<?php echo get_theme_file_uri('images/star.png')?>"/></i>
                            <i><img src="<?php echo get_theme_file_uri('images/star.png')?>"/></i>
                            </a>
                        </div>
                    </div>
            <?php 
        }
    endif;
    die; // here we exit the script and even no wp_reset_query() required!
}

add_action('wp_ajax_loadmore', 'jb_dripdeals_loadmore_ajax_handler'); // wp_ajax_{action}
add_action('wp_ajax_nopriv_loadmore', 'jb_dripdeals_loadmore_ajax_handler'); // wp_ajax_nopriv_{action}