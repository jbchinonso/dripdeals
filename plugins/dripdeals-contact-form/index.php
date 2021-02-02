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
 require_once __DIR__.'/functions.php';

add_action('enqueue_block_editor_assets', 'c_enqueue_block_editor_assets');
add_action('enqueue_block_assets', 'c_enqueue_block_assets');



function jb_dripdeals_form(){
    
  $content =  '<div class="contact" id="contact">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="titlepage">
                        <h2>Contact us</h2>
                        '.dripdeals_contact_plugin_notices().'
                    </div>
                    <form class="main_form" action="?" method="POST">
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                <input class="form-control" placeholder="Your name" type="text" name="name" required>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                <input class="form-control" placeholder="Email" type="text" name="email" required>
                            </div>
                            <div class=" col-md-12">
                                <input class="form-control" placeholder="080-395-022-49" type="text" name="phone" required>
                            </div>
                            <div class="col-md-12">
                                <textarea class="textarea" placeholder="Message" name="message" required></textarea>
                            </div>
                            <div class=" col-md-12">
                                <button class="send" name="dripdeals_message_submit_btn">Send</button>
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

