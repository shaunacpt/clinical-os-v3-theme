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

/**
 * 🎨 5. CLINICAL OS DESIGN SYSTEM ENFORCEMENT
 * Bypasses the Customizer to programmatically inject Global Options.
 */

define( 'CLINICAL_OS_DESIGN_VERSION', 3 );

add_action( 'admin_init', 'clinical_os_enforce_astra_design_system' );

function clinical_os_enforce_astra_design_system() {
    
    $current_sync_version = (int) get_option( 'clinical_os_design_sync_version', 0 );
    
    // Halt if already synced
    if ( $current_sync_version >= CLINICAL_OS_DESIGN_VERSION ) {
        return;
    }

    $current_settings = get_option( 'astra-settings', array() );

    $clinical_os_payload = array(
        // 1. Enforce Global Color Palette (Astra 4.x format)
        'global-color-palette' => array(
            'currentPalette' => 'palette_1',
            'palette' => array(
                'palette_1' => array(
                    'color1' => '#1B263B', // Accent / Primary Interactive (Navy)
                    'color2' => '#81D4A8', // Accent Hover (Teal)
                    'color3' => '#1B263B', // Headings Color (Navy)
                    'color4' => '#374151', // Body Text Color
                    'color5' => '#F8F9FA', // Subtle Background (Soft Gray)
                    'color6' => '#FFFFFF', // Site Background
                    'color7' => '#81D4A8', // Border / Divider (Teal)
                    'color8' => '#F8F9FA', // Alt 1
                    'color9' => '#E5E7EB', // Alt 2
                ),
            ),
        ),

        // 2. Enforce Global Typography System
        'body-font-family'    => "'Heebo', sans-serif",
        'body-font-weight'    => '400',
        'body-line-height'    => '1.6',
        'font-size-body'      => array(
            'desktop'      => 16,
            'tablet'       => 15,
            'mobile'       => 14,
            'desktop-unit' => 'px',
            'tablet-unit'  => 'px',
            'mobile-unit'  => 'px'
        ),

        'headings-font-family'    => "'Outfit', sans-serif",
        'headings-font-weight'    => '600',
        'headings-text-transform' => 'none',

        // 3. Enforce Header Builder Structure
        'builder-header' => true,
        'header-desktop-items' => array(
            'primary' => array(
                'primary_left'         => array( 'button-1' ), // Left: Action Button
                'primary_left_center'  => array(),
                'primary_center'       => array( 'menu-1' ), // Center: Menus
                'primary_right_center' => array(),
                'primary_right'        => array( 'logo' ), // Right: Logo via RTL
            ),
        ),

        // Bottom border for the middle header row: 2px Teal
        'hb-header-main-sep' => 2,
        'hb-header-main-sep-color' => '#81D4A8',
        'hb-header-bg-obj-responsive' => array(
            'desktop' => array(
                'background-color' => '#1B263B', // Header Navy Background
                'background-image' => '',
            )
        ),

        // Define Button-1 configuration inside the Header:
        'header-button1-text'          => 'בואו נתחיל',
        'header-button1-color'         => '#F8F9FA',
        'header-button1-bg-color'      => '#1B263B',
        'header-button1-h-color'       => '#1B263B',
        'header-button1-bg-h-color'    => '#81D4A8',
        'header-button1-border-color'  => '#81D4A8',
        'header-button1-border-size'   => array(
            'top'    => 2,
            'right'  => 2,
            'bottom' => 2,
            'left'   => 2,
        ),
        'header-button1-border-radius' => 50, // Pill shape

        // 4. Enforce Footer Builder Structure
        'builder-footer' => true,
        'footer-desktop-items' => array(
            'below'   => array(
                'below_1' => array( 'copyright' ), // Using below layout for copyright
            ),
        ),

        // Top border for the below footer row: 8px Teal
        'hbb-footer-separator' => 8,
        'hbb-footer-separator-color' => '#81D4A8',
        'hbb-footer-bg-obj-responsive' => array(
            'desktop' => array(
                'background-color' => '#1B263B', // Footer Navy Background
                'background-image' => '',
            )
        ),

        // Copyright text definition
        'footer-copyright-editor' => '© שון לייקוב | כל הזכויות שמורות',
        'footer-copyright-color'  => '#F8F9FA',
    );

    // Deep merge over existing settings
    $updated_settings = array_replace_recursive( $current_settings, $clinical_os_payload );

    // Push back to database table
    update_option( 'astra-settings', $updated_settings );
    update_option( 'clinical_os_design_sync_version', CLINICAL_OS_DESIGN_VERSION );

    // Invalidate Astra's Dynamic CSS cache
    if ( function_exists( 'astra_clear_all_assets_cache' ) ) {
        astra_clear_all_assets_cache();
    }
}

