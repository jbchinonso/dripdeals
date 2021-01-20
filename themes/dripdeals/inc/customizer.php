<?php

function jb_dripdeals_slider_customizer($wp_customize)
{
    $wp_customize->add_section('dripdeals_slider_customizer', array(
        'title' => __('Slider Customizer', 'dripdeals'),
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
