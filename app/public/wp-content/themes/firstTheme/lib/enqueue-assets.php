<?php

function firstexample_assets(){
    wp_enqueue_style(
        'firstexample_stylesheet',
        get_template_directory_uri().'/style.css',
        array(),
        '1.0.0',
        'all'
    );

    wp_enqueue_style(
        'firstexample_wp_stylesheet',
        get_template_directory_uri().'/assets/css/wpcore.css',
        array(),
        '1.0.0',
        'all'
    );

    wp_enqueue_style(
        'firstexample_bootstrap_stylesheet',
        get_template_directory_uri().'/assets/css/bootstrap.css',
        array(),
        '1.0.0',
        'all'
    );

    wp_enqueue_script(
        'firstexample_bootstrap_script',
        get_template_directory_uri().'/assets/js/bootstrap.js',
        array(),
        '1.0.0',
        true
    );    
}

add_action('wp_enqueue_scripts','firstexample_assets')

?>