<?php

// Load HTML5 Blank scripts (header.php)
function shipwright_header_scripts() {
    if ( $GLOBALS['pagenow'] != 'wp-login.php' && ! is_admin() ) {
        if ( HTML5_DEBUG ) {
            // jQuery
            //wp_deregister_script( 'jquery' );
            //wp_register_script( 'jquery', get_template_directory_uri() . '/assets/js/lib/jquery.js', array(), '1.11.1' );

            // Conditionizr
            wp_register_script( 'conditionizr', get_template_directory_uri() . '/assets/js/lib/conditionizr-4.3.0.min.js', array(), '4.3.0' );

            // Modernizr
            wp_register_script( 'modernizr', get_template_directory_uri() . '/assets/js/lib/modernizr.js', array(), null );

        // If production
        } else {
            // Scripts minify
            wp_register_script( 'shipwrightscripts-min', get_template_directory_uri() . '/assets/js/scripts.min.js', array(), '1.0.0' );
            // Enqueue Scripts
            wp_enqueue_script( 'shipwrightscripts-min' );
        }
    }
}
add_action( 'wp_enqueue_scripts', 'shipwright_header_scripts' ); // Add Custom Scripts to wp_head

// Load HTML5 Blank conditional scripts
/*
function shipwright_conditional_scripts() {
    if ( is_page( array(172, 174, 176) ) ) {
        // Conditional script(s)
        wp_register_script( 'header-scripts', get_template_directory_uri() . '/assets/js/header-scripts.js', array( 'jquery' ), '1.0.0' );
        wp_enqueue_script( 'header-scripts' );
    }
}
add_action( 'wp_print_scripts', 'shipwright_conditional_scripts' ); // Add Conditional Page Scripts
*/

// Load HTML5 Blank styles
function gf_styles() {
    if ( HTML5_DEBUG ) {
        // Register CSS
        wp_enqueue_style( 'shipwright' );
    } else {
        // Custom CSS
        wp_register_style( 'shipwrightcssmin', get_template_directory_uri() . '/style.css', array(), '1.0' );
        // Register CSS
        wp_enqueue_style( 'shipwrightcssmin' );
    }
    // MAIN CSS
    wp_register_style( 'main', get_template_directory_uri() . '/assets/css/style.css', array(), null );
    // REGISTER MAIN CSS
    wp_enqueue_style( 'main' );
    
    // GOOGLE FONTS
    wp_register_style( 'google-fonts', 'https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@200;300;400&family=Mulish:wght@200&family=Poppins:wght@100;200&display=swap', array(), null );
    // Register CSS
    wp_enqueue_style( 'google-fonts' );
    
    // LIGHTBOX STYLES
    wp_register_style( 'lightbox-styles', 'https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css', array(), null );
    
    // SLICK SCRIPT
    wp_register_script('slick', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js', array('jquery'), null, true );
	// Enqueue Scripts
	wp_enqueue_script( 'slick' );
	
	// LIGHTBOX SCRIPT
    wp_register_script('lightbox', 'https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js', array('jquery'), null, true );
	
	// AOS SCRIPT
	wp_register_script('aos', 'https://unpkg.com/aos@2.3.1/dist/aos.js', array('jquery'), null, true );
	// Enqueue Scripts
	wp_enqueue_script( 'aos' );
	
	// Custom scripts
    wp_register_script('shipwrightscripts', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), null, true );
	// Enqueue Scripts
	wp_enqueue_script( 'shipwrightscripts' );
    
    // FONT AWESOME CSS
    wp_register_style( 'fontawesome', 'https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css', array(), null );
    wp_enqueue_style( 'fontawesome' );
}
add_action( 'wp_enqueue_scripts', 'gf_styles' ); // Add Theme Stylesheet