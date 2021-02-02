<?php

function dripdeals_contact_form_dashboard_css()
{
    wp_enqueue_style('main', plugin_dir_url(__FILE__) . 'assets/css/main.css', null, '1.0', false);

}

add_action('admin_enqueue_scripts', 'dripdeals_contact_form_dashboard_css');

function drip_contact_plugin_create_db()
{
    global $wpdb;
    $charset_collate = $wpdb->get_charset_collate();
    $table_name = $wpdb->prefix . 'dripdeals_contact';

    $sql = "CREATE TABLE " . $table_name . "(
        id INT NOT NULL AUTO_INCREMENT,
        name VARCHAR(255) NOT NULL,
        email VARCHAR(255) NOT NULL,
        phone VARCHAR(255) NOT NULL,
        message TEXT NOT NULL,
        PRIMARY KEY  (id)
    )" . $charset_collate . ";";

    require_once ABSPATH . 'wp-admin/includes/upgrade.php';
    dbDelta($sql);

}

register_activation_hook(__FILE__, 'drip_contact_plugin_create_db');

function dripdeals_contact_plugin_menu()
{
    add_menu_page('dripdeals contact form', 'Dripdeals Contact', 'manage_options', 'dripdeals-contact-form', 'dripdeals_contact_main_menu', 'dashicons-email-alt', 72);
}

add_action('admin_menu', 'dripdeals_contact_plugin_menu');

function dripdeals_contact_main_menu()
{
    $contacts = dripdeals_fetch_contacts();
    require_once __DIR__ . '/form-contact-info.php';
}

function dripdeals_process_contact_plugin_form()
{
    global $wpdb;
    $charset_collate = $wpdb->get_charset_collate();
    $table_name = $wpdb->prefix . 'dripdeals_contact';

    if (isset($_POST['dripdeals_message_submit_btn'])) {
        $name = sanitize_text_field($_POST['name']);
        $email = sanitize_text_field($_POST['email']);
        $phone = sanitize_text_field($_POST['phone']);
        $message = sanitize_text_field($_POST['message']);

        if (!$name || !$phone || !$message) {
            $_SESSION['dripdeals_contact_plugin_error'] = 'Please all fields are required';
        }

        if (!is_email($email)) {
            $_SESSION['dripdeals_contact_plugin_error'] = 'Please Enter a Valid Email address';
        }

        if (!preg_match('/^[0-9]{3}-[0-9]{3}-[0-9]{3}-[0-9]{2}$/', $phone)) {
            $_SESSION['dripdeals_contact_plugin_error'] = 'Please Enter a Valid Phone Number';
        }

        $data = [
            'name' => $name,
            'email' => $email,
            'phone' => $phone,
            'message' => $message,

        ];


        $format = ['%s', '%s', '%s', '%s'];
        if (!isset($_SESSION['dripdeals_contact_plugin_error'])) {

            if ($wpdb->insert($table_name, $data, $format)) {
                $_SESSION['dripdeals_contact_plugin_success'] = 'We have Received your Message. Thank You';

            }
        }

        

    }
}

add_action('wp_head', 'dripdeals_process_contact_plugin_form');


// function dripdeals_redirection()
// {
//     if (isset($_SESSION['dripdeals_form_submited'])) {
//         wp_safe_redirect(site_url('/#contact'), 302);
//         exit();
//     }

// }
// add_action('template_redirect', 'dripdeals_redirection');


function dripdeals_contact_plugin_notices()
{
    $styles = "
        position: absolute;
    ";
    if (isset($_SESSION['dripdeals_contact_plugin_error'])) {
        $notice = "<p class='alert alert-danger submit-noticce' style=" . $styles . " >" . $_SESSION['dripdeals_contact_plugin_error'] . "</p>";
        unset($_SESSION['dripdeals_contact_plugin_error']);
        return $notice;

    }

    if ($_SESSION['dripdeals_contact_plugin_success']) {
        $notice = "<p class='alert alert-success submit-noticce' style=" . $styles . " >" . $_SESSION['dripdeals_contact_plugin_success'] . "</p>";
        unset($_SESSION['dripdeals_contact_plugin_success']);
        return $notice;
    }

}

function dripdeals_fetch_contacts(){
    global $wpdb;
        $table = $wpdb->prefix . 'dripdeals_contact';
            $messages =  $wpdb->get_results(
                "SELECT * FROM $table 
                ORDER BY id DESC
                "
            );

            return $messages;
}