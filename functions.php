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
        
        /* ⚓ Sticky Header Fix */
        .is-sticky-header, .wp-block-template-part header {
            position: sticky !important;
            top: 0 !important;
            background: #fff !important;
            z-index: 9999 !important;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1) !important;
        }

        /* 🖼️ Hero Frame */
        .hero-teal-frame img {
            border: 20px solid #81D4A8 !important;
            border-radius: 30px !important;
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
<!-- wp:uagb/container {"block_id":"home-hero","contentWidth":"alignwide","direction":"row-reverse","align":"full","paddingDesktop":{"top":80,"bottom":80},"paddingType":"px"} -->
<div class="wp-block-uagb-container uagb-block-home-hero alignfull alignwide">
    <!-- wp:uagb/container {"block_id":"hero-image","widthDesktop":45,"className":"hero-teal-frame"} -->
    <div class="wp-block-uagb-container uagb-block-hero-image hero-teal-frame">
        <!-- wp:image {"id":1152,"sizeSlug":"full","linkDestination":"none"} -->
        <figure class="wp-block-image size-full"><img src="https://shaunlacob.com/wp-content/uploads/Shaun-Lacob-1152x1536.png" alt="שון לייקוב"/></figure>
        <!-- /wp:image -->
    </div>
    <!-- /wp:uagb/container -->

    <!-- wp:uagb/container {"block_id":"hero-text","widthDesktop":55,"justifyContent":"center"} -->
    <div class="wp-block-uagb-container uagb-block-hero-text">
        <!-- wp:uagb/advanced-heading {"block_id":"hero-tagline","headingTag":"h6","textAlign":"right","textColor":"#81D4A8"} -->
        <h6 class="wp-block-uagb-advanced-heading uagb-block-hero-tagline">ברוכים הבאים - נעים להכיר</h6>
        <!-- /wp:uagb/advanced-heading -->
        
        <!-- wp:uagb/advanced-heading {"block_id":"hero-main-title","headingTag":"h1","textAlign":"right","textColor":"#1B263B"} -->
        <h1 class="wp-block-uagb-advanced-heading uagb-block-hero-main-title">שון לייקוב – בין חינוך לטיפול, כמו בין שחור ללבן, יש עולם צבעוני מאוד</h1>
        <!-- /wp:uagb/advanced-heading -->

        <!-- wp:paragraph {"align":"right"} -->
        <p class="has-text-align-right">אני חבר קיבוץ, מחנך, יועץ ומטפל. אני מאמין שלכל אדם יש את הכוח לחולל שינוי משמעותי בחייו. הגישה שלי משלבת ידע מקצועי עם אמפתיה עמוקה וגישה לא שיפוטית. אני מתמחה במגוון תחומים, כולל אימון חיים, תמיכה במשתמשי חומרים פסיכואקטיביים, ייעוץ משפחתי, ואינטגרציה של חוויות פסיכדליות.</p>
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
</div>
<!-- /wp:uagb/container -->

<!-- wp:uagb/container {"block_id":"services-section","align":"full","paddingDesktop":{"top":100,"bottom":100},"backgroundType":"color","backgroundColor":"#FFFFFF"} -->
<div class="wp-block-uagb-container uagb-block-services-section alignfull">
    <!-- wp:uagb/advanced-heading {"block_id":"serv-title","textAlign":"center","textColor":"#1B263B"} -->
    <h2 class="wp-block-uagb-advanced-heading uagb-block-serv-title">השירותים שאני מציע</h2>
    <!-- /wp:uagb/advanced-heading -->

    <!-- wp:uagb/container {"block_id":"services-grid","direction":"row","justifyContent":"center","gutter":30} -->
    <div class="wp-block-uagb-container uagb-block-services-grid">
        <!-- wp:uagb/info-box {"block_id":"card-1","showImage":true,"imageURL":"https://shaunlacob.com/wp-content/uploads/g86867d82446554b263b5d54f9dac315781d5ef7a6a881f078f662d1937702757b1aeda711881486b41152bd233ab9ca5009cc373907530c9bd4abf703cbc86a1_1280-6253174.jpg","imageWidth":100,"heading":"טיפול מתמשך","ctaType":"button","ctaText":"קרא עוד"} -->
        <div class="wp-block-uagb-info-box uagb-block-card-1"><div class="uagb-ifb-content"><img class="uagb-ifb-image" src="https://shaunlacob.com/wp-content/uploads/g86867d82446554b263b5d54f9dac315781d5ef7a6a881f078f662d1937702757b1aeda711881486b41152bd233ab9ca5009cc373907530c9bd4abf703cbc86a1_1280-6253174.jpg" alt="" style="border-radius:30px;"/><h3 class="uagb-ifb-title">טיפול מתמשך</h3><p class="uagb-ifb-desc">גישה מותאמת אישית לצרכים הייחודיים שלכם.</p><div class="uagb-ifb-cta"><a href="/meetings/" class="uagb-ifb-cta-link">קרא עוד</a></div></div></div>
        <!-- /wp:uagb/info-box -->

        <!-- wp:uagb/info-box {"block_id":"card-2","showImage":true,"imageURL":"https://shaunlacob.com/wp-content/uploads/IMG_20230222_164806-scaled.jpg","imageWidth":100,"heading":"טיפול בסיוע פסיכדליים","ctaType":"button","ctaText":"קרא עוד"} -->
        <div class="wp-block-uagb-info-box uagb-block-card-2"><div class="uagb-ifb-content"><img class="uagb-ifb-image" src="https://shaunlacob.com/wp-content/uploads/IMG_20230222_164806-scaled.jpg" alt="" style="border-radius:30px;"/><h3 class="uagb-ifb-title">טיפול בסיוע פסיכדליים</h3><p class="uagb-ifb-desc">ליווי מקצועי בטיפולים מוכרים וחוקיים בישראל.</p><div class="uagb-ifb-cta"><a href="/workshops/" class="uagb-ifb-cta-link">קרא עוד</a></div></div></div>
        <!-- /wp:uagb/info-box -->

        <!-- wp:uagb/info-box {"block_id":"card-3","showImage":true,"imageURL":"https://shaunlacob.com/wp-content/uploads/2019/09/April-06-2017-at-0559PM-Wize-.jpg","imageWidth":100,"heading":"הרצאות וסדנאות","ctaType":"button","ctaText":"קרא עוד"} -->
        <div class="wp-block-uagb-info-box uagb-block-card-3"><div class="uagb-ifb-content"><img class="uagb-ifb-image" src="https://shaunlacob.com/wp-content/uploads/2019/09/April-06-2017-at-0559PM-Wize-.jpg" alt="" style="border-radius:30px;"/><h3 class="uagb-ifb-title">הרצאות וסדנאות</h3><p class="uagb-ifb-desc">הרצאות מרתקות בנושאי הפחתת נזקים.</p><div class="uagb-ifb-cta"><a href="/workshops/" class="uagb-ifb-cta-link">קרא עוד</a></div></div></div>
        <!-- /wp:uagb/info-box -->
    </div>
    <!-- /wp:uagb/container -->
</div>
<!-- /wp:uagb/container -->

<!-- wp:uagb/container {"block_id":"topics-section","align":"full","paddingDesktop":{"top":80,"bottom":80}} -->
<div class="wp-block-uagb-container uagb-block-topics-section alignfull">
    <!-- wp:uagb/advanced-heading {"block_id":"topics-title","textAlign":"center","textColor":"#1B263B"} -->
    <h2 class="wp-block-uagb-advanced-heading uagb-block-topics-title">הנושאים בהם אני עוסק</h2>
    <!-- /wp:uagb/advanced-heading -->

    <!-- wp:uagb/container {"block_id":"topic-1","direction":"row-reverse","align":"wide","gutter":40} -->
    <div class="wp-block-uagb-container uagb-block-topic-1 alignwide">
        <!-- wp:uagb/container {"block_id":"t1-img","widthDesktop":50} -->
        <div class="wp-block-uagb-container uagb-block-t1-img">
            <!-- wp:image {"sizeSlug":"full"} -->
            <figure class="wp-block-image size-full"><img src="https://shaunlacob.com/wp-content/uploads/2021/04/IMG-20210214-WA0011.jpg" alt="" style="border-radius:30px;"/></figure>
            <!-- /wp:image -->
        </div>
        <!-- /wp:uagb/container -->
        <!-- wp:uagb/container {"block_id":"t1-txt","widthDesktop":50} -->
        <div class="wp-block-uagb-container uagb-block-t1-txt">
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

    <!-- wp:uagb/container {"block_id":"topic-2","direction":"row","align":"wide","gutter":40} -->
    <div class="wp-block-uagb-container uagb-block-topic-2 alignwide">
        <!-- wp:uagb/container {"block_id":"t2-img","widthDesktop":50} -->
        <div class="wp-block-uagb-container uagb-block-t2-img">
            <!-- wp:image {"sizeSlug":"full"} -->
            <figure class="wp-block-image size-full"><img src="https://shaunlacob.com/wp-content/uploads/2019/09/Harm_Reduction_Logo.png" alt="" style="border-radius:30px;"/></figure>
            <!-- /wp:image -->
        </div>
        <!-- /wp:uagb/container -->
        <!-- wp:uagb/container {"block_id":"t2-txt","widthDesktop":50} -->
        <div class="wp-block-uagb-container uagb-block-t2-txt">
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

    $home_page_id = get_option( 'page_on_front' );
    if ( $home_page_id ) {
        wp_update_post( array(
            'ID'           => $home_page_id,
            'post_content' => $blueprint,
        ) );
    }
}
add_action( 'admin_init', 'clinical_os_sync_final_home_page' );
