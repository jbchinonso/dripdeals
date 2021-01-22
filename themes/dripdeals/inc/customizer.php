<?php

function jb_dripdeals_slider_customizer($wp_customize)
{
    $wp_customize->add_section('dripdeals_slider_customizer', array(
        'title' => esc_html__('Slider Customizer', 'dripdeals'),
        'description' => 'setup the slider for the home page. You can add html tags to make your text neat',
        'priority' => 20,
    ));

    //first paragraph text input for slider
    $wp_customize->add_setting('dripdeals_slider_text1', array(
        'default' => '',
        'capability' => 'edit_theme_options',
        'type' => 'option',

    ));

    $wp_customize->add_control('dripdeals_text1', array(
        'label' => __('slider first line', 'dripdeals'),
        'section' => 'dripdeals_slider_customizer',
        'settings' => 'dripdeals_slider_text1',
    ));

    //second paragraph text input (H1) for slider
    $wp_customize->add_setting('dripdeals_slider_H1text', array(
        'default' => '',
        'capability' => 'edit_theme_options',
        'type' => 'option',

    ));

    $wp_customize->add_control('dripdeals_slider_H1text', array(
        'label' => __('H1 text for slider', 'dripdeals'),
        'section' => 'dripdeals_slider_customizer',
        'settings' => 'dripdeals_slider_H1text',
    ));
    //last and main paragraph text input for slider
    $wp_customize->add_setting('dripdeals_slider_p', array(
        'default' => '',
        'capability' => 'edit_theme_options',
        'type' => 'option',

    ));

    $wp_customize->add_control('dripdeals_slider_Ptext', array(
        'label' => __('paragraph text for slider', 'dripdeals'),
        'section' => 'dripdeals_slider_customizer',
        'settings' => 'dripdeals_slider_p',
    ));

    //Banner Button text
    $wp_customize->add_setting('dripdeals_slider_button', array(
        'default' => '',
        'capability' => 'edit_theme_options',
        'type' => 'option',

    ));

    $wp_customize->add_control('slider_button_text', array(
        'label' => __('Button text', 'dripdeals'),
        'section' => 'dripdeals_slider_customizer',
        'settings' => 'dripdeals_slider_button',
    ));

    //slider Button slug
    $wp_customize->add_setting('dripdeals_slider_button_slug', array(
        'default' => '#',
        'capability' => 'edit_theme_options',
        'type' => 'option',

    ));

    $wp_customize->add_control('dripdeals_slider_url', array(
        'label' => __('Button slug eg (contact)', 'dripdeals'),
        'section' => 'dripdeals_slider_customizer',
        'settings' => 'dripdeals_slider_button_slug',
    ));

    //  =============================
    //  = Image Upload              =
    //  =============================
    $wp_customize->add_setting('dripdeal_slider_image1', array(
        'default' => 'image.jpg',
        'capability' => 'edit_theme_options',

    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'slider_image1', array(
        'label' => __('Slider Image1', 'dripdeals'),
        'section' => 'dripdeals_slider_customizer',
        'settings' => 'dripdeal_slider_image1',
    )));

    $wp_customize->add_setting('dripdeal_slider_image2', array(
        'default' => 'image.jpg',
        'capability' => 'edit_theme_options',

    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'slider_image2', array(
        'label' => __('Slider Image2', 'dripdeals'),
        'section' => 'dripdeals_slider_customizer',
        'settings' => 'dripdeal_slider_image2',
    )));

    $wp_customize->add_setting('dripdeal_slider_image3', array(
        'default' => 'image.jpg',
        'capability' => 'edit_theme_options',

    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'slider_image3', array(
        'label' => __('Slider Image3', 'dripdeals'),
        'section' => 'dripdeals_slider_customizer',
        'settings' => 'dripdeal_slider_image3',
    )));

}
add_action('customize_register', 'jb_dripdeals_slider_customizer');


// ==================
// Social Icon Customizer
//======================



function dripdeals_social_icon_customizer($wp_customize)
{
    $wp_customize->add_section('dripdeals_social_customizer', array(
        'title' => esc_html__('Social Icons', 'dripdeals'),
        'description' => 'Setup the social Media Profiles you want to display on your site',
        'priority' => 20,
    ));

//first social media link and icon
    $wp_customize->add_setting('dripdeals_facebook_icon', array(
        'default' => '',
        'capability' => 'edit_theme_options',
        'type' => 'option',
        'sanitize_callback' => 'esc_url_raw'

    ));

    $wp_customize->add_control('dripdeals_social_icon1', array(
        'label' => __('Facebook Profile Link', 'dripdeals'),
        'section' => 'dripdeals_social_customizer',
        'settings' => 'dripdeals_facebook_icon',
    ));
//second social media link and icon
    $wp_customize->add_setting('dripdeals_twitter_icon', array(
        'default' => '',
        'capability' => 'edit_theme_options',
        'type' => 'option',
        'sanitize_callback' => 'esc_url_raw'

    ));

    $wp_customize->add_control('dripdeals_social_icon2', array(
        'label' => __('Twitter Profile Link', 'dripdeals'),
        'section' => 'dripdeals_social_customizer',
        'settings' => 'dripdeals_twitter_icon',
    ));
//Third social media link and icon
    $wp_customize->add_setting('dripdeals_instagram_icon', array(
        'default' => '',
        'capability' => 'edit_theme_options',
        'type' => 'option',
        'sanitize_callback' => 'esc_url_raw'

    ));

    $wp_customize->add_control('dripdeals_social_icon3', array(
        'label' => __('Instagram Profile Link', 'dripdeals'),
        'section' => 'dripdeals_social_customizer',
        'settings' => 'dripdeals_instagram_icon',
    ));

}

add_action('customize_register', 'dripdeals_social_icon_customizer');
