<?php
/**
 * Clinical OS Child Theme v3.0 Functions and Definitions (FSE Architecture).
 *
 * @package Clinical-OS-Child
 */

/**
 * Enqueue Parent Styles (Spectra One) with Cache Busting
 */
function clinical_os_child_enqueue_styles() {
    $parent_style = 'spectra-one-style'; 
    $version = time(); // Cache busting
    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'clinical-os-child-css', 
        get_stylesheet_directory_uri() . '/style.css', 
        array( $parent_style ), 
        $version 
    );
}
add_action( 'wp_enqueue_scripts', 'clinical_os_child_enqueue_styles', 999 );

/**
 * 🛠️ NUCLEAR CSS INJECTION (Bypasses Hostinger Cache)
 */
function clinical_os_nuclear_css() {
    ?>
    <style id="clinical-os-nuclear-css">
        /* 📱 Floating WhatsApp Button */
        .whatsapp-float {
            position: fixed !important;
            width: 60px !important;
            height: 60px !important;
            bottom: 30px !important;
            right: 30px !important;
            background-color: #25d366 !important;
            color: #ffffff !important;
            border-radius: 50% !important;
            display: flex !important;
            align-items: center !important;
            justify-content: center !important;
            z-index: 2147483647 !important;
            box-shadow: 0 4px 15px rgba(0,0,0,0.3) !important;
            text-decoration: none !important;
        }
        .whatsapp-float::after { content: "💬"; font-size: 30px; }

        /* 📦 Core Grid Fallbacks */
        @media (min-width: 1025px) {
            .uagb-block-services-grid {
                display: flex !important;
                flex-direction: row !important;
                gap: 30px !important;
                justify-content: center !important;
            }
            .uagb-block-services-grid > .uagb-block-info-box {
                flex: 0 0 31% !important;
                width: 31% !important;
            }
            .uagb-block-topic-1, .uagb-block-topic-3 {
                display: flex !important;
                flex-direction: row-reverse !important;
                align-items: center !important;
                gap: 60px !important;
                margin-bottom: 80px !important;
            }
            .uagb-block-topic-2 {
                display: flex !important;
                flex-direction: row !important;
                align-items: center !important;
                gap: 60px !important;
                margin-bottom: 80px !important;
            }
            .uagb-block-topic-1 > div, .uagb-block-topic-2 > div, .uagb-block-topic-3 > div {
                flex: 1 1 50% !important;
                width: 50% !important;
            }
        }
        
        /* ⚓ Sticky Header Fix (Nuclear) */
        html, body { overflow-x: hidden !important; } 
        
        header.is-sticky-header, 
        .wp-block-template-part header,
        .wp-block-group.is-sticky-header {
            position: fixed !important; 
            top: 0 !important;
            left: 0 !important;
            right: 0 !important;
            width: 100% !important;
            background: #ffffff !important;
            z-index: 999999 !important;
            box-shadow: 0 2px 15px rgba(0,0,0,0.1) !important;
        }

        body { padding-top: 80px !important; }

        /* 🖼️ HERO REPAIR: Force 2-Column RTL */
        @media (min-width: 1025px) {
            #home-hero {
                display: flex !important;
                flex-direction: row !important; /* Forces Text Right / Image Left in RTL */
                align-items: center !important;
                justify-content: space-between !important;
                gap: 80px !important;
                max-width: 1200px !important;
                margin: 0 auto !important;
            }
            #hero-text { flex: 0 0 55% !important; width: 55% !important; }
            #hero-image { flex: 0 0 35% !important; width: 35% !important; }
        }

        .hero-title-parity {
            color: #1B263B !important;
            text-shadow: 2px 2px 5px rgba(129, 212, 168, 0.4) !important;
        }

        .hero-img-parity figure, .hero-img-parity img {
            border: 2px solid #81D4A8 !important; /* Fixes the oversized border */
            border-radius: 30px !important;
            box-shadow: 0 10px 40px rgba(0,0,0,0.1) !important;
            background: transparent !important; /* Removes block-level background glows */
            padding: 0 !important;
        }

        /* 🎢 TOPICS REPAIR: Force Functional Slider */
        #topics-carousel {
            display: flex !important;
            overflow-x: auto !important;
            scroll-snap-type: x mandatory !important;
            gap: 40px !important;
            padding: 40px 0 !important;
            -webkit-overflow-scrolling: touch;
        }
        #topics-carousel::-webkit-scrollbar { display: none; }
        
        .topic-slide {
            flex: 0 0 100% !important;
            scroll-snap-align: start !important;
            display: flex !important;
            flex-direction: row-reverse !important; 
            align-items: center !important;
            gap: 60px !important;
            background: #ffffff;
            padding: 40px !important;
            border-radius: 40px !important;
            box-shadow: 0 10px 30px rgba(27, 38, 59, 0.05) !important;
        }
        @media (max-width: 768px) {
            .topic-slide { flex-direction: column !important; text-align: center !important; }
        }

        /* 📦 SERVICE CARDS */
        .service-card-parity {
            box-shadow: 0 12px 35px rgba(27, 38, 59, 0.08) !important;
            border-radius: 35px !important;
        }
        .service-card-parity img {
            aspect-ratio: 1/1 !important;
            object-fit: cover !important;
            border-radius: 25px !important;
        }
    </style>
    <?php
}
add_action( 'wp_head', 'clinical_os_nuclear_css', 999 );

/**
 * 🚀 4. REFINED CONTENT INJECTION (PHASE 4 - REPAIR)
 * Materializing the final, 1:1 home page with full Z-pattern and layout fixes.
 */
function clinical_os_sync_final_home_page() {
    if ( ! is_admin() ) return;

    $blueprint = <<<'BLOCKS'
<!-- wp:uagb/container {"block_id":"home-hero","contentWidth":"alignwide","direction":"row","align":"full","paddingDesktop":{"top":100,"bottom":100},"paddingType":"px","backgroundType":"color","backgroundColor":"#f4f8fb"} -->
<div class="wp-block-uagb-container uagb-block-home-hero alignfull alignwide">
    <!-- wp:uagb/container {"block_id":"hero-text","widthDesktop":60,"justifyContent":"center"} -->
    <div class="wp-block-uagb-container uagb-block-hero-text">
        <!-- wp:uagb/advanced-heading {"block_id":"hero-tagline","headingTag":"h6","textAlign":"right","textColor":"#81D4A8"} -->
        <h6 class="wp-block-uagb-advanced-heading uagb-block-hero-tagline">ברוכים הבאים - נעים להכיר</h6>
        <!-- /wp:uagb/advanced-heading -->
        
        <!-- wp:uagb/advanced-heading {"block_id":"hero-main-title","headingTag":"h1","textAlign":"right","textColor":"#1B263B","className":"hero-title-parity"} -->
        <h1 class="wp-block-uagb-advanced-heading uagb-block-hero-main-title hero-title-parity">שון לייקוב – בין חינוך לטיפול, כמו בין שחור ללבן, יש עולם צבעוני מאוד</h1>
        <!-- /wp:uagb/advanced-heading -->

        <!-- wp:paragraph {"align":"right"} -->
        <p class="has-text-align-right">אני חבר קיבוץ, מחנך, יועץ ומטפל. אני מאמין שלכל אדם יש את הכוח לחולל שינוי משמעותי בחייו. הגישה שלי משלבת ידע מקצועי עם אמפתיה עמוקה וגישה לא שיפוטית.</p>
        <!-- /wp:paragraph -->

        <!-- wp:uagb/buttons {"block_id":"hero-ctas","align":"right"} -->
        <div class="wp-block-uagb-buttons uagb-block-hero-ctas">
            <!-- wp:uagb/button {"block_id":"start-now","text":"בואו נתחיל","borderRadius":50,"backgroundColor":"#1B263B"} -->
            <div class="wp-block-uagb-button uagb-block-start-now"><a class="uagb-button__link" href="/contact/">בואו נתחיל</a></div>
            <!-- /wp:uagb/button -->
        </div>
        <!-- /wp:uagb/buttons -->
    </div>
    <!-- /wp:uagb/container -->

    <!-- wp:uagb/container {"block_id":"hero-image","widthDesktop":40,"className":"hero-img-parity"} -->
    <div class="wp-block-uagb-container uagb-block-hero-image hero-img-parity">
        <!-- wp:image {"id":1152,"sizeSlug":"full","linkDestination":"none"} -->
        <figure class="wp-block-image size-full"><img src="https://shaunlacob.com/wp-content/uploads/Shaun-Lacob-1152x1536.png" alt="שון לייקוב"/></figure>
        <!-- /wp:image -->
    </div>
    <!-- /wp:uagb/container -->
</div>
<!-- /wp:uagb/container -->

<!-- wp:uagb/container {"block_id":"services-section","align":"full","paddingDesktop":{"top":100,"bottom":100},"backgroundType":"color","backgroundColor":"#FFFFFF"} -->
<div class="wp-block-uagb-container uagb-block-services-section alignfull">
    <!-- wp:uagb/advanced-heading {"block_id":"serv-title","textAlign":"center","textColor":"#1B263B"} -->
    <h2 class="wp-block-uagb-advanced-heading uagb-block-serv-title">השירותים שאני מציע</h2>
    <!-- /wp:uagb/advanced-heading -->

    <!-- wp:uagb/container {"block_id":"services-grid","direction":"row","justifyContent":"center","gutter":30} -->
    <div class="wp-block-uagb-container uagb-block-services-grid">
        <!-- wp:uagb/container {"block_id":"card-1","widthDesktop":30,"className":"service-card-parity"} -->
        <div class="wp-block-uagb-container uagb-block-card-1 service-card-parity">
            <!-- wp:image {"sizeSlug":"full"} -->
            <figure class="wp-block-image size-full"><img src="https://shaunlacob.com/wp-content/uploads/g86867d82446554b263b5d54f9dac315781d5ef7a6a881f078f662d1937702757b1aeda711881486b41152bd233ab9ca5009cc373907530c9bd4abf703cbc86a1_1280-6253174.jpg" alt=""/></figure>
            <!-- /wp:image -->
            <!-- wp:heading {"level":3,"textAlign":"center"} -->
            <h3 class="wp-block-heading has-text-align-center">טיפול מתמשך</h3>
            <!-- /wp:heading -->
            <!-- wp:paragraph {"align":"center"} -->
            <p class="has-text-align-center">גישה מותאמת אישית לצרכים הייחודיים שלכם.</p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:uagb/container -->

        <!-- wp:uagb/container {"block_id":"card-2","widthDesktop":30,"className":"service-card-parity"} -->
        <div class="wp-block-uagb-container uagb-block-card-2 service-card-parity">
            <!-- wp:image {"sizeSlug":"full"} -->
            <figure class="wp-block-image size-full"><img src="https://shaunlacob.com/wp-content/uploads/IMG_20230222_164806-scaled.jpg" alt=""/></figure>
            <!-- /wp:image -->
            <!-- wp:heading {"level":3,"textAlign":"center"} -->
            <h3 class="wp-block-heading has-text-align-center">טיפול בסיוע פסיכדליים</h3>
            <!-- /wp:heading -->
            <!-- wp:paragraph {"align":"center"} -->
            <p class="has-text-align-center">ליווי מקצועי בטיפולים מוכרים וחוקיים בישראל.</p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:uagb/container -->

        <!-- wp:uagb/container {"block_id":"card-3","widthDesktop":30,"className":"service-card-parity"} -->
        <div class="wp-block-uagb-container uagb-block-card-3 service-card-parity">
            <!-- wp:image {"sizeSlug":"full"} -->
            <figure class="wp-block-image size-full"><img src="https://shaunlacob.com/wp-content/uploads/2019/09/April-06-2017-at-0559PM-Wize-.jpg" alt=""/></figure>
            <!-- /wp:image -->
            <!-- wp:heading {"level":3,"textAlign":"center"} -->
            <h3 class="wp-block-heading has-text-align-center">הרצאות וסדנאות</h3>
            <!-- /wp:heading -->
            <!-- wp:paragraph {"align":"center"} -->
            <p class="has-text-align-center">הרצאות מרתקות בנושאי הפחתת נזקים.</p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:uagb/container -->
    </div>
    <!-- /wp:uagb/container -->
</div>
<!-- /wp:uagb/container -->

<!-- wp:uagb/container {"block_id":"topics-section","align":"full","paddingDesktop":{"top":80,"bottom":80},"backgroundType":"color","backgroundColor":"#f4f8fb"} -->
<div class="wp-block-uagb-container uagb-block-topics-section alignfull">
    <!-- wp:uagb/advanced-heading {"block_id":"topics-title","textAlign":"center","textColor":"#1B263B"} -->
    <h2 class="wp-block-uagb-advanced-heading uagb-block-topics-title">הנושאים בהם אני עוסק</h2>
    <!-- /wp:uagb/advanced-heading -->

    <!-- wp:uagb/container {"block_id":"topics-carousel","className":"topics-carousel-container"} -->
    <div class="wp-block-uagb-container uagb-block-topics-carousel topics-carousel-container">
        <!-- wp:uagb/container {"block_id":"slide-1","className":"topic-slide"} -->
        <div class="wp-block-uagb-container uagb-block-slide-1 topic-slide">
            <!-- wp:image {"sizeSlug":"full"} -->
            <figure class="wp-block-image size-full"><img src="https://shaunlacob.com/wp-content/uploads/2021/04/IMG-20210214-WA0011.jpg" alt="" style="border-radius:30px;"/></figure>
            <!-- /wp:image -->
            <!-- wp:uagb/container {"widthDesktop":50} -->
            <div class="wp-block-uagb-container">
                <!-- wp:heading {"level":3} -->
                <h3 class="wp-block-heading">אינטגרציה וליווי פסיכדלי</h3>
                <!-- /wp:heading -->
                <!-- wp:paragraph -->
                <p>תהליך האינטגרציה הוא השלב החשוב ביותר בעבודה עם חוויות משנות תודעה. אני עוזר למטופלים לעבד את החוויות שעברו ולהטמיע את התובנות בחיי היומיום שלהם.</p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:uagb/container -->
        </div>
        <!-- /wp:uagb/container -->

        <!-- wp:uagb/container {"block_id":"slide-2","className":"topic-slide"} -->
        <div class="wp-block-uagb-container uagb-block-slide-2 topic-slide">
            <!-- wp:image {"sizeSlug":"full"} -->
            <figure class="wp-block-image size-full"><img src="https://shaunlacob.com/wp-content/uploads/2019/09/Harm_Reduction_Logo.png" alt="" style="border-radius:30px;"/></figure>
            <!-- /wp:image -->
            <!-- wp:uagb/container {"widthDesktop":50} -->
            <div class="wp-block-uagb-container">
                <!-- wp:heading {"level":3} -->
                <h3 class="wp-block-heading">הפחתת נזקים</h3>
                <!-- /wp:heading -->
                <!-- wp:paragraph -->
                <p>שיטת העבודה שלי מבוססת על עקרונות המזעור הנזק. אני מאמין במתן מידע אמין, נגיש ולא שיפוטי כדי לעזור לאנשים לקבל החלטות מושכלות ובטוחות יותר.</p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:uagb/container -->
        </div>
        <!-- /wp:uagb/container -->
    </div>
    <!-- /wp:uagb/container -->
</div>
<!-- /wp:uagb/container -->

<!-- wp:uagb/container {"block_id":"contact-section","align":"full","paddingDesktop":{"top":100,"bottom":100},"backgroundType":"color","backgroundColor":"#f8f9fa"} -->
<div class="wp-block-uagb-container uagb-block-contact-section alignfull">
    <div class="alignwide">
        <!-- wp:uagb/advanced-heading {"block_id":"contact-title","textAlign":"center","textColor":"#1B263B"} -->
        <h2 class="wp-block-uagb-advanced-heading uagb-block-contact-title">קבע פגישה</h2>
        <!-- /wp:uagb/advanced-heading -->
        
        <!-- wp:columns {"align":"wide"} -->
        <div class="wp-block-columns alignwide">
            <!-- wp:column {"width":"50%"} -->
            <div class="wp-block-column" style="flex-basis:50%">
                <!-- wp:html -->
                <div class="hubspot-form"> [HubSpot Form Embed Code Here] </div>
                <!-- /wp:html -->
            </div>
            <!-- /wp:column -->
            <!-- wp:column {"width":"50%"} -->
            <div class="wp-block-column" style="flex-basis:50%">
                <!-- wp:html -->
                <div class="hubspot-scheduler"> [HubSpot Scheduler Embed Code Here] </div>
                <!-- /wp:html -->
            </div>
            <!-- /wp:column -->
        </div>
        <!-- /wp:columns -->
    </div>
</div>
<!-- /wp:uagb/container -->
BLOCKS;

    $home_page_id = 7; // Hard-coded target from audit
    if ( $home_page_id ) {
        wp_update_post( array(
            'ID'           => $home_page_id,
            'post_content' => $blueprint,
            'post_status'  => 'publish', // Force publish to clear any draft shadows
        ) );
    }
}
add_action( 'init', 'clinical_os_sync_final_home_page' ); // Move to 'init' for broader scope

// Clinical OS v3 — FSE Enqueues, RTL, Patterns, Editor Support
// ============================================================

add_action( 'after_setup_theme', 'clinical_os_theme_support' );
function clinical_os_theme_support() {
    add_theme_support( 'wp-block-styles' );
    add_theme_support( 'editor-styles' );
    add_editor_style( 'style.css' );
}

add_action( 'wp_enqueue_scripts', 'clinical_os_enqueue_fonts' );
function clinical_os_enqueue_fonts() {
    wp_enqueue_style(
        'clinical-os-google-fonts',
        'https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;700&family=Outfit:wght@600;700&display=swap',
        array(),
        null
    );
}

add_filter( 'language_attributes', 'clinical_os_rtl_html_attributes' );
function clinical_os_rtl_html_attributes( $output ) {
    $output = preg_replace( '/dir="[^"]*"/', '', $output );
    $output = preg_replace( '/lang="[^"]*"/', '', $output );
    $output = 'lang="he" dir="rtl" ' . trim( $output );
    return $output;
}

add_action( 'init', 'clinical_os_register_block_patterns' );
function clinical_os_register_block_patterns() {
    register_block_pattern_category(
        'clinical-os',
        array( 'label' => __( 'Clinical OS', 'clinical-os-v3' ) )
    );
}
