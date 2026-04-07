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

/**
 * 🚀 4. REFINED CONTENT INJECTION (PHASE 4)
 * Materializing the final, 1:1 home page with the custom frame and boxed layout.
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
                <div class="hubspot-form"> [HubSpot Form Placeholder] </div>
                <!-- /wp:html -->
            </div>
            <!-- /wp:column -->
            <!-- wp:column {"width":"50%"} -->
            <div class="wp-block-column" style="flex-basis:50%">
                <!-- wp:html -->
                <div class="hubspot-scheduler"> [HubSpot Scheduler Placeholder] </div>
                <!-- /wp:html -->
            </div>
            <!-- /wp:column -->
        </div>
        <!-- /wp:columns -->
    </div>
</div>
<!-- /wp:uagb/container -->

<!-- wp:html -->
<a href="https://wa.me/972527010039" class="whatsapp-float" target="_blank" rel="noopener noreferrer">
    <svg width="35" height="35" viewBox="0 0 448 512" fill="currentColor"><path d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222 0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222 0-59.3-25.2-115-67.1-157zm-157 341.6c-33.2 0-65.7-8.9-94-25.7l-6.7-4-69.8 18.3L72 359.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2 0-101.7 82.8-184.5 184.6-184.5 49.3 0 95.6 19.2 130.4 54.1 34.8 34.9 56.2 81.2 56.1 130.5 0 101.8-84.9 184.6-186.6 184.6zm101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18-5.1-1.9-8.8-2.8-12.5 2.8-3.7 5.6-14.3 18-17.6 21.8-3.2 3.7-6.5 4.2-12 1.4-5.5-2.8-23.2-8.5-44.2-27.1-16.4-14.6-27.4-32.7-30.6-38.2-3.2-5.6-.3-8.6 2.4-11.3 2.5-2.4 5.5-6.5 8.3-9.7 2.8-3.3 3.7-5.6 5.5-9.3 1.8-3.7.9-6.9-.5-9.7-1.4-2.8-12.5-30.1-17.1-41.2-4.5-10.8-9.1-9.3-12.5-9.5-3.2-.2-6.9-.2-10.6-.2-3.7 0-9.7 1.4-14.8 6.9-5.1 5.6-19.4 19-19.4 46.3 0 27.3 19.9 53.7 22.6 57.4 2.8 3.7 39.1 59.7 94.8 83.8 13.2 5.8 23.5 9.2 31.6 11.8 13.3 4.2 25.4 3.6 35 2.2 10.7-1.6 32.8-13.4 37.4-26.4 4.6-13 4.6-24.1 3.2-26.4-1.3-2.5-5-3.9-10.5-6.6z"/></svg>
</a>
<!-- /wp:html -->
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
