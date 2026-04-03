<?php
/**
 * Clinical OS Child Theme v3.0 Functions and Definitions.
 *
 * @package Clinical-OS-Child
 */

/**
 * 🎨 1. ENQUEUE PARENT & CHILD STYLES
 */
function clinical_os_child_enqueue_styles() {
    $parent_style = 'astra-theme-css';
    
    // Enqueue Parent Style
    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    
    // Enqueue Child Style
    wp_enqueue_style( 'clinical-os-child-css', 
        get_stylesheet_directory_uri() . '/style.css', 
        array( $parent_style ), 
        wp_get_theme()->get( 'Version' ) 
    );
}
add_action( 'wp_enqueue_scripts', 'clinical_os_child_enqueue_styles' );

/**
 * 📐 2. GLOBAL DIMENSION HOOKS (THE 800px RULE)
 * Enforcing the 800px clinical reading width via Astra Content Width hooks.
 */
function clinical_os_content_width_enforce( $width ) {
    return 800;
}
add_filter( 'astra_get_option_site-content-width', 'clinical_os_content_width_enforce' );

/**
 * 🏗️ 3. ASTRA PRO HEADER CUSTOMIZATIONS
 * Ensuring our 'Split Header' fix is globally applied in the builder.
 */
function clinical_os_header_builder_cleanup() {
    echo '<style>
        /* Fix for Astra Pro Header Row Alignment in RTL */
        .ast-main-header-wrap .main-header-bar {
            display: flex !important;
            flex-direction: row-reverse !important;
        }
    </style>';
}
add_action( 'wp_head', 'clinical_os_header_builder_cleanup' );

/**
 * ⚡ 4. SPECTRA CALIBRATION
 * Warning: Asset Generation should be "Internal" in Spectra Settings.
 */
function clinical_os_spectra_admin_notice() {
    if ( ! is_admin() ) return;
    // (Optional: Admin notice logic if Spectra is misconfigured)
}
