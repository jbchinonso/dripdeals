<?php
/**
 * Dripdeals Contact form
 *
 * Plugin Name: Dripdeals Contact Form
 * Plugin URI:  https://wordpress.org/plugins/dripdeals/
 * Description: Enable contact form in your wordpress website
 * Version:     1.0
 * Author:      johnbosco
 * Author URI:  https://github.com/jbchinonso
 * License:     GPLv2 or later
 * License URI: http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 * Text Domain: Dripdeals
 * Domain Path: /languages
 * Requires at least: 4.9
 * Requires PHP: 5.2.4
 *
 */

 define('CONTACT_PLUGIN_URL', __FILE__);

 require_once 'blocks/functions.php';

add_action('enqueue_block_editor_assets', 'c_enqueue_block_editor_assets');
add_action('enqueue_block_assets', 'c_enqueue_block_assets');


function jb_dripdeals_form(){
    
  $content =  '<div class="contact" id="contact">
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
    </div>';

    return $content;

}

add_shortcode('dripdeals-contact-form', 'jb_dripdeals_form');

