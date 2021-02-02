<?php

function c_enqueue_block_editor_assets(){
    wp_register_script(
        'c_blocks_bundle',
        plugins_url('/blocks/dist/bundle.js', CONTACT_PLUGIN_URL),
        ['wp-i18n', 'wp-element', 'wp-blocks', 'wp-components', 'wp-editor', 'wp-api'],
        filemtime(plugin_dir_path(CONTACT_PLUGIN_URL).'/blocks/dist/bundle.js')
    );


    wp_enqueue_script('c_blocks_bundle');
}

function c_enqueue_block_assets(){
    wp_register_style(
        'c_blocks',
        plugins_url('/blocks/dist/blocks-main.css', CONTACT_PLUGIN_URL),
    );

    wp_enqueue_style('c_blocks');
    
}