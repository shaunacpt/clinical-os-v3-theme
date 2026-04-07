<?php
/**
 * Clinical OS Child Theme v3.0 Functions and Definitions (FSE Architecture).
 *
 * @package Clinical-OS-Child
 */

/**
 * Enqueue Parent Styles (Spectra One)
 */
function clinical_os_child_enqueue_styles() {
    $parent_style = 'spectra-one-style'; 
    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'clinical-os-child-css', 
        get_stylesheet_directory_uri() . '/style.css', 
        array( $parent_style ), 
        wp_get_theme()->get('Version') 
    );
}
add_action( 'wp_enqueue_scripts', 'clinical_os_child_enqueue_styles' );

// Note: Global options and layout restrictions are now enforced purely via theme.json.
// Do NOT add database-driven Customizer modifications here.
