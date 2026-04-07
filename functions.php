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
 * 🚀 3. PROGRAMMATIC CONTENT INJECTION (STEP 3)
 * Use this hook once to create/update the Home page with the verified blueprint.
 */
function clinical_os_sync_home_page() {
    if ( ! is_admin() ) return;

    $blueprint = <<<'BLOCKS'
<!-- wp:uagb/container {"block_id":"home-hero","contentWidth":"alignfull","direction":"row-reverse","align":"full","backgroundType":"color","backgroundColor":"#1B263B","paddingDesktop":{"top":80,"right":20,"bottom":80,"left":20},"paddingType":"px"} -->
<div class="wp-block-uagb-container uagb-block-home-hero alignfull">
    <!-- wp:uagb/container {"block_id":"hero-image-col","widthDesktop":40} -->
    <div class="wp-block-uagb-container uagb-block-hero-image-col">
        <!-- wp:image {"id":1152,"sizeSlug":"full","linkDestination":"none"} -->
        <figure class="wp-block-image size-full"><img src="https://shaunlacob.com/wp-content/uploads/Shaun-Lacob-1152x1536.png" alt="Shaun Lacob" class="wp-image-1152"/></figure>
        <!-- /wp:image -->
    </div>
    <!-- /wp:uagb/container -->

    <!-- wp:uagb/container {"block_id":"hero-text-col","widthDesktop":60,"justifyContent":"center"} -->
    <div class="wp-block-uagb-container uagb-block-hero-text-col">
        <!-- wp:uagb/advanced-heading {"block_id":"hero-title","headingTag":"h1","textAlign":"right","textColor":"#FFFFFF"} -->
        <h1 class="wp-block-uagb-advanced-heading uagb-block-hero-title">שון לייקוב – בין חינוך לטיפול, כמו בין שחור ללבן, יש עולם צבעוני מאוד</h1>
        <!-- /wp:advanced-heading -->

        <!-- wp:paragraph {"align":"right","style":{"color":{"text":"#F8F9FA"}}} -->
        <p class="has-text-align-right has-text-color" style="color:#f8f9fa">שלום, אני שון לייקוב,אני חבר קיבוץ, מחנך, יועץ ומטפל.אני מאמין שלכל אדם יש את הכוח לחולל שינוי משמעותי בחייו. הגישה שלי משלבת ידע מקצועי עם אמפתיה עמוקה וגישה לא שיפוטית.אני מתמחה במגוון תחומים, כולל אימון חיים, תמיכה במשתמשי חומרים פסיכואקטיביים, ייעוץ משפחתי, ואינטגרציה של חוויות פסיכדליות.</p>
        <!-- /wp:paragraph -->

        <!-- wp:uagb/buttons {"block_id":"hero-cta","align":"right"} -->
        <div class="wp-block-uagb-buttons uagb-block-hero-cta">
            <!-- wp:uagb/button {"block_id":"cta-start","text":"בואו נתחיל","backgroundType":"color","backgroundColor":"#81D4A8","textColor":"#1B263B","hoverBackgroundColor":"#FFFFFF","hoverTextColor":"#1B263B","borderRadius":50} -->
            <div class="wp-block-uagb-button uagb-block-cta-start"><a class="uagb-button__link" href="/contact/">בואו נתחיל</a></div>
            <!-- /wp:uagb/button -->
        </div>
        <!-- /wp:uagb/buttons -->
    </div>
    <!-- /wp:uagb/container -->
</div>
<!-- /wp:uagb/container -->

<!-- wp:uagb/container {"block_id":"services-intro","paddingDesktop":{"top":100,"bottom":40}} -->
<div class="wp-block-uagb-container uagb-block-services-intro">
    <!-- wp:uagb/advanced-heading {"block_id":"serv-title","textAlign":"center","textColor":"#1B263B"} -->
    <h2 class="wp-block-uagb-advanced-heading uagb-block-serv-title">השירותים שאני מציע</h2>
    <!-- /wp:uagb/advanced-heading -->
    <!-- wp:uagb/advanced-heading {"block_id":"serv-subtitle","headingTag":"h4","textAlign":"center","textColor":"#374151"} -->
    <h4 class="wp-block-uagb-advanced-heading uagb-block-serv-subtitle">אני פוגש כל אחד איפה שהוא – וכל אחד הוא עולם שלם וצרכים שונים</h4>
    <!-- /wp:uagb/advanced-heading -->
</div>
<!-- /wp:uagb/container -->

<!-- wp:uagb/container {"block_id":"services-grid","direction":"row","justifyContent":"space-between"} -->
<div class="wp-block-uagb-container uagb-block-services-grid">
    <!-- wp:uagb/info-box {"block_id":"box-1","icon":"briefcase","showIcon":false,"showImage":true,"imageURL":"https://shaunlacob.com/wp-content/uploads/g86867d82446554b263b5d54f9dac315781d5ef7a6a881f078f662d1937702757b1aeda711881486b41152bd233ab9ca5009cc373907530c9bd4abf703cbc86a1_1280-6253174.jpg","imageWidth":100,"heading":"טיפול מתמשך","headingTag":"h3","ctaType":"button","ctaText":"מפגשים אישיים","ctaLink":"/meetings/","ctaBgColor":"#1B263B","ctaTextColor":"#FFFFFF"} -->
    <div class="wp-block-uagb-info-box uagb-block-box-1"><div class="uagb-ifb-content"><img class="uagb-ifb-image" src="https://shaunlacob.com/wp-content/uploads/g86867d82446554b263b5d54f9dac315781d5ef7a6a881f078f662d1937702757b1aeda711881486b41152bd233ab9ca5009cc373907530c9bd4abf703cbc86a1_1280-6253174.jpg" alt=""/><h3 class="uagb-ifb-title">טיפול מתמשך</h3><p class="uagb-ifb-desc">גישה מותאמת אישית לצרכים הייחודיים שלכם. משלב שיטות טיפול מגוונות לתמיכה בהתמודדות עם אתגרי החיים.</p><div class="uagb-ifb-cta"><a href="/meetings/" class="uagb-ifb-cta-link">מפגשים אישיים</a></div></div></div>
    <!-- /wp:uagb/info-box -->

    <!-- wp:uagb/info-box {"block_id":"box-2","showImage":true,"imageURL":"https://shaunlacob.com/wp-content/uploads/IMG_20230222_164806-scaled.jpg","imageWidth":100,"heading":"טיפול בסיוע פסיכדליים","headingTag":"h3","ctaType":"button","ctaText":"סדנאות והרצאות","ctaLink":"/workshops/"} -->
    <div class="wp-block-uagb-info-box uagb-block-box-2"><div class="uagb-ifb-content"><img class="uagb-ifb-image" src="https://shaunlacob.com/wp-content/uploads/IMG_20230222_164806-scaled.jpg" alt=""/><h3 class="uagb-ifb-title">טיפול בסיוע פסיכדליים</h3><p class="uagb-ifb-desc">מציע ליווי מקצועי בטיפולים מוכרים וחוקיים בישראל: טיפול בסיוע קנאביס (CAPT) וטיפול בסיוע קטמין (KAP).</p><div class="uagb-ifb-cta"><a href="/workshops/" class="uagb-ifb-cta-link">סדנאות והרצאות</a></div></div></div>
    <!-- /wp:uagb/info-box -->

    <!-- wp:uagb/info-box {"block_id":"box-3","showImage":true,"imageURL":"https://shaunlacob.com/wp-content/uploads/2019/09/April-06-2017-at-0559PM-Wize-.jpg","imageWidth":100,"heading":"הרצאות וסדנאות","headingTag":"h3","ctaType":"button","ctaText":"הרצאות","ctaLink":"/workshops/"} -->
    <div class="wp-block-uagb-info-box uagb-block-box-3"><div class="uagb-ifb-content"><img class="uagb-ifb-image" src="https://shaunlacob.com/wp-content/uploads/2019/09/April-06-2017-at-0559PM-Wize-.jpg" alt=""/><h3 class="uagb-ifb-title">הרצאות וסדנאות</h3><p class="uagb-ifb-desc">הרצאות מרתקות בנושאי הפחתת נזקים, שימוש מושכל בחומרים פסיכואקטיביים, והתפתחות אישית.</p><div class="uagb-ifb-cta"><a href="/workshops/" class="uagb-ifb-cta-link">הרצאות</a></div></div></div>
    <!-- /wp:uagb/info-box -->
</div>
<!-- /wp:uagb/container -->

<!-- wp:uagb/container {"block_id":"values-grid","direction":"row","flexWrap":"wrap","justifyContent":"center","paddingDesktop":{"top":80,"bottom":80}} -->
<div class="wp-block-uagb-container uagb-block-values-grid">
    <!-- wp:uagb/info-box {"block_id":"val-1","heading":"אינטגרציה של חוויות פסיכדליות","ctaType":"text","ctaText":"See More","ctaLink":"/psychedelic-integration/"} -->
    <div class="wp-block-uagb-info-box uagb-block-val-1"><div class="uagb-ifb-content"><h3 class="uagb-ifb-title">אינטגרציה של חוויות פסיכדליות</h3><div class="uagb-ifb-cta"><a href="/psychedelic-integration/" class="uagb-ifb-cta-link">See More</a></div></div></div>
    <!-- /wp:uagb/info-box -->

    <!-- wp:uagb/info-box {"block_id":"val-2","heading":"המסע להודו והחזרה הביתה","ctaType":"text","ctaLink":"/twenties/"} -->
    <div class="wp-block-uagb-info-box uagb-block-val-2"><div class="uagb-ifb-content"><h3 class="uagb-ifb-title">המסע להודו והחזרה הביתה</h3><div class="uagb-ifb-cta"><a href="/twenties/" class="uagb-ifb-cta-link">See More</a></div></div></div>
    <!-- /wp:uagb/info-box -->

    <!-- wp:uagb/info-box {"block_id":"val-3","heading":"התמודדות עם שינויים, משברים ומעברים","ctaType":"text","ctaLink":"/life-changes/"} -->
    <div class="wp-block-uagb-info-box uagb-block-val-3"><div class="uagb-ifb-content"><h3 class="uagb-ifb-title">התמודדות עם שינויים, משברים ומעברים</h3><div class="uagb-ifb-cta"><a href="/life-changes/" class="uagb-ifb-cta-link">See More</a></div></div></div>
    <!-- /wp:uagb/info-box -->

    <!-- wp:uagb/info-box {"block_id":"val-4","heading":"טיפול פסיכדלי והרחבת התודעה","ctaType":"text","ctaLink":"/psychedelic-therapy/"} -->
    <div class="wp-block-uagb-info-box uagb-block-val-4"><div class="uagb-ifb-content"><h3 class="uagb-ifb-title">טיפול פסיכדלי והרחבת התודעה</h3><div class="uagb-ifb-cta"><a href="/psychedelic-therapy/" class="uagb-ifb-cta-link">See More</a></div></div></div>
    <!-- /wp:uagb/info-box -->

    <!-- wp:uagb/info-box {"block_id":"val-5","heading":"חומרים פסיכואקטיביים ומזעור נזקים","ctaType":"text","ctaLink":"/harm-reduction-general/"} -->
    <div class="wp-block-uagb-info-box uagb-block-val-5"><div class="uagb-ifb-content"><h3 class="uagb-ifb-title">חומרים פסיכואקטיביים ומזעור נזקים</h3><div class="uagb-ifb-cta"><a href="/harm-reduction-general/" class="uagb-ifb-cta-link">See More</a></div></div></div>
    <!-- /wp:uagb/info-box -->

    <!-- wp:uagb/info-box {"block_id":"val-6","heading":"רוצה יותר פירוט?","ctaType":"text","ctaLink":"/about/"} -->
    <div class="wp-block-uagb-info-box uagb-block-val-6"><div class="uagb-ifb-content"><h3 class="uagb-ifb-title">רוצה יותר פירוט?</h3><div class="uagb-ifb-cta"><a href="/about/" class="uagb-ifb-cta-link">מי אני</a></div></div></div>
    <!-- /wp:uagb/info-box -->
</div>
<!-- /wp:uagb/container -->

<!-- wp:uagb/container {"block_id":"booking-section","paddingDesktop":{"top":80,"bottom":80},"backgroundType":"color","backgroundColor":"#F8F9FA"} -->
<div class="wp-block-uagb-container uagb-block-booking-section">
    <!-- wp:uagb/advanced-heading {"block_id":"book-title","textAlign":"center","textColor":"#1B263B"} -->
    <h2 class="wp-block-uagb-advanced-heading uagb-block-book-title">קבע פגישה</h2>
    <!-- /wp:uagb/advanced-heading -->
    
    <!-- wp:html -->
    <div class="hubspot-meeting-widget">
        <!-- Placeholder for HubSpot Scheduler Embed -->
        <p style="text-align:center;">[HubSpot Meeting Widget Placeholder]</p>
    </div>
    <!-- /wp:html -->
</div>
<!-- /wp:uagb/container -->
BLOCKS;

    $home_page_id = get_option( 'page_on_front' );
    
    // If no front page set, look for a page titled "Home"
    if ( ! $home_page_id ) {
        $home = get_page_by_path( 'home' );
        if ( ! $home ) {
            $home_page_id = wp_insert_post( array(
                'post_title'   => 'Home',
                'post_content' => $blueprint,
                'post_status'  => 'publish',
                'post_type'    => 'page',
            ) );
        } else {
            $home_page_id = $home->ID;
        }
        update_option( 'show_on_front', 'page' );
        update_option( 'page_on_front', $home_page_id );
    }

    if ( $home_page_id ) {
        wp_update_post( array(
            'ID'           => $home_page_id,
            'post_content' => $blueprint,
        ) );
    }
}
add_action( 'admin_init', 'clinical_os_sync_home_page' );
