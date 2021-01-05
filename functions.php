<?php
    add_action('wp_enqueue_scripts', 'childhood_styles');
    add_action('wp_enqueue_scripts', 'childhood_scripts');

    function childhood_styles() {
        /* main style sheet */
        wp_enqueue_style('childhood-style', get_stylesheet_uri());
        
        /* extra style sheet from folder styles */
        /* wp_enqueue_style( 'header-style', get_template_directory_uri() . '/assets/styles/main.min.css'  ); */
        /* extern styling */
       /*  wp_enqueue_style( 'animate-style', 'https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.compat.min.css'  ); */
    
    };

    function childhood_scripts() {
        /* script js */
       wp_enqueue_script('childhood-scripts', get_template_directory_uri() . '/assets/js/main.min.js', array(), null, true);
    
    };

    add_theme_support('custom-logo');
    add_theme_support('post-thumbnails');

?>