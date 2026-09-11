<?php
/**
 * Kelvin Cameo Organization (RC: 1613032)
 * Theme Functions & Definitions
 *
 * @package Kelvin_Cameo
 * @version 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 */
function kelvin_cameo_setup() {
    // Add default posts and comments RSS feed links to head.
    add_theme_support( 'automatic-feed-links' );

    // Let WordPress manage the document title.
    add_theme_support( 'title-tag' );

    // Enable support for Post Thumbnails on posts and pages.
    add_theme_support( 'post-thumbnails' );

    // Switch default core markup for search form, comment form, etc. to valid HTML5.
    add_theme_support(
        'html5',
        array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
            'style',
            'script',
        )
    );

    // Register navigation menus
    register_nav_menus(
        array(
            'primary' => __( 'Primary Header Menu', 'kelvin-cameo' ),
            'footer'  => __( 'Footer Sectors Menu', 'kelvin-cameo' ),
        )
    );
}
add_action( 'after_setup_theme', 'kelvin_cameo_setup' );

/**
 * Enqueue scripts and styles.
 */
function kelvin_cameo_scripts() {
    // Google Fonts
    wp_enqueue_style(
        'kelvin-cameo-fonts',
        'https://fonts.googleapis.com/css2?family=Outfit:wght@400;500;600;700;800;900&family=Playfair+Display:ital,wght@0,600;0,700;1,400&family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap',
        array(),
        null
    );

    // Master Conglomerate Stylesheet (Sky Blue Edition)
    $css_version = file_exists( get_template_directory() . '/css/styles.css' ) 
        ? filemtime( get_template_directory() . '/css/styles.css' ) 
        : '1.0.0';

    wp_enqueue_style(
        'kelvin-cameo-core-styles',
        get_template_directory_uri() . '/css/styles.css',
        array(),
        $css_version
    );

    // Root Theme Stylesheet
    wp_enqueue_style(
        'kelvin-cameo-theme-style',
        get_stylesheet_uri(),
        array( 'kelvin-cameo-core-styles' ),
        '1.0.0'
    );

    // Master Client-side JavaScript
    $js_version = file_exists( get_template_directory() . '/js/app.js' ) 
        ? filemtime( get_template_directory() . '/js/app.js' ) 
        : '1.0.0';

    wp_enqueue_script(
        'kelvin-cameo-app-js',
        get_template_directory_uri() . '/js/app.js',
        array(),
        $js_version,
        true
    );

    wp_localize_script(
        'kelvin-cameo-app-js',
        'kcData',
        array(
            'ajax_url'    => admin_url( 'admin-ajax.php' ),
            'nonce'       => wp_create_nonce( 'kc_booking_nonce' ),
            'home_url'    => home_url( '/' ),
            'energy_url'  => kc_url( 'energy' ),
            'estate_url'  => kc_url( 'real-estate' ),
            'agro_url'    => kc_url( 'agriculture' ),
            'resort_url'  => kc_url( 'hospitality' ),
            'about_url'   => kc_url( 'about' ),
            'contact_url' => kc_url( 'contact' ),
            'hotel_num'   => '+2348055558197',
        )
    );
}
add_action( 'wp_enqueue_scripts', 'kelvin_cameo_scripts' );

/**
 * Output JSON-LD Structured Data Schema for Search Engines (Rank Math & Yoast Friendly).
 */
function kelvin_cameo_seo_schema() {
    $site_url  = esc_url( home_url( '/' ) );
    $logo_url  = esc_url( get_template_directory_uri() . '/assets/logo.svg' );
    $phone_num = '+234 805 555 8197';
    $email_addr = 'kelvincameo73@gmail.com';

    // 1. Corporate Organization Schema (Every page)
    $org_schema = array(
        '@context'    => 'https://schema.org',
        '@type'       => 'Organization',
        '@id'         => $site_url . '#organization',
        'name'        => 'Kelvin Cameo Organization',
        'legalName'   => 'Kelvin Cameo Organization (RC: 1613032)',
        'url'         => $site_url,
        'logo'        => esc_url( get_template_directory_uri() . '/assets/logo-emblem.png' ),
        'email'       => $email_addr,
        'telephone'   => '+2348055558197',
        'description' => 'Diversified Nigerian corporate conglomerate operating in Petroleum Retail Stations, Real Estate Developments, Commercial Agriculture, and Premier Resort Hospitality.',
        'address'     => array(
            '@type'           => 'PostalAddress',
            'streetAddress'   => 'Opposite Suleman Police Technical College, Kwamba',
            'addressLocality' => 'Suleja',
            'postalCode'      => '910104',
            'addressRegion'   => 'Niger State',
            'addressCountry'  => 'NG',
        ),
        'sameAs'      => array(
            'https://instagram.com/kelvincameoresort_ng',
            'https://facebook.com/kelvincameoresort_ng',
            'https://www.tiktok.com/@kelvincameoresort_ng',
        ),
    );

    echo "\n<!-- Kelvin Cameo SEO Schema: Organization -->\n";
    echo '<script type="application/ld+json">' . wp_json_encode( $org_schema, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT ) . "</script>\n";

    // 2. WebSite & SiteNavigationElement Schema (Front Page for Google Sitelinks)
    if ( is_front_page() || is_home() ) {
        $website_schema = array(
            '@context'      => 'https://schema.org',
            '@type'         => 'WebSite',
            '@id'           => $site_url . '#website',
            'name'          => 'Kelvin Cameo Organization',
            'alternateName' => 'Kelvin Cameo',
            'url'           => $site_url,
        );

        $sitelinks_schema = array(
            '@context'        => 'https://schema.org',
            '@type'           => 'ItemList',
            'itemListElement' => array(
                array(
                    '@type'       => 'SiteNavigationElement',
                    'position'    => 1,
                    'name'        => 'Resort Hotel & Suites',
                    'description' => 'Luxury boutique hotel rooms, suites, and swimming pool along Abuja corridor.',
                    'url'         => esc_url( home_url( '/hospitality/' ) ),
                ),
                array(
                    '@type'       => 'SiteNavigationElement',
                    'position'    => 2,
                    'name'        => '1,000-Seat Grand Banquet Hall',
                    'description' => 'Niger State premier event auditorium for high-society weddings and AGMs.',
                    'url'         => esc_url( home_url( '/hospitality/#banquet' ) ),
                ),
                array(
                    '@type'       => 'SiteNavigationElement',
                    'position'    => 3,
                    'name'        => 'Energy & Petrol Stations',
                    'description' => 'Modern retail fuel stations, bulk diesel haulage, and clean LPG skid plants.',
                    'url'         => esc_url( home_url( '/energy/' ) ),
                ),
                array(
                    '@type'       => 'SiteNavigationElement',
                    'position'    => 4,
                    'name'        => 'Real Estate & Land Plots',
                    'description' => 'Master-planned estates, verified C of O land plots, and turnkey construction.',
                    'url'         => esc_url( home_url( '/real-estate/' ) ),
                ),
                array(
                    '@type'       => 'SiteNavigationElement',
                    'position'    => 5,
                    'name'        => 'Commercial Agriculture',
                    'description' => 'Mechanized farming, 50,000-layer poultry egg complex, and grain silos.',
                    'url'         => esc_url( home_url( '/agriculture/' ) ),
                ),
                array(
                    '@type'       => 'SiteNavigationElement',
                    'position'    => 6,
                    'name'        => 'Contact & Headquarters',
                    'description' => 'Executive reception, direct WhatsApp booking, and corporate RFPs.',
                    'url'         => esc_url( home_url( '/contact/' ) ),
                ),
            ),
        );

        echo "<!-- Kelvin Cameo SEO Schema: WebSite -->\n";
        echo '<script type="application/ld+json">' . wp_json_encode( $website_schema, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT ) . "</script>\n";

        echo "<!-- Kelvin Cameo SEO Schema: Sitelinks Navigation -->\n";
        echo '<script type="application/ld+json">' . wp_json_encode( $sitelinks_schema, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT ) . "</script>\n";
    }

    // 3. BreadcrumbList Schema (Inner Pages)
    if ( ! is_front_page() && ! is_home() ) {
        $page_title = get_the_title();
        $page_url   = get_permalink();

        $breadcrumbs_schema = array(
            '@context'        => 'https://schema.org',
            '@type'           => 'BreadcrumbList',
            'itemListElement' => array(
                array(
                    '@type'    => 'ListItem',
                    'position' => 1,
                    'name'     => 'Home',
                    'item'     => $site_url,
                ),
                array(
                    '@type'    => 'ListItem',
                    'position' => 2,
                    'name'     => $page_title,
                    'item'     => $page_url,
                ),
            ),
        );

        echo "<!-- Kelvin Cameo SEO Schema: BreadcrumbList -->\n";
        echo '<script type="application/ld+json">' . wp_json_encode( $breadcrumbs_schema, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT ) . "</script>\n";
    }

    // 4. Hospitality / Resort Hotel Schema (On Resort Page)
    if ( is_page( 'hospitality' ) || is_page_template( 'page-hospitality.php' ) ) {
        $resort_schema = array(
            '@context'        => 'https://schema.org',
            '@type'           => array( 'Hotel', 'Resort' ),
            '@id'             => esc_url( home_url( '/hospitality/#hotel' ) ),
            'name'            => 'Kelvin Cameo Resort Hotel',
            'alternateName'   => 'Kelvin Cameo Hotel & Suites',
            'description'     => 'Premier luxury resort hotel in Suleja along the Abuja Capital Corridor (opposite Suleman Police Technical College). Featuring boutique suites from ₦25,000, 1,000-seat grand banquet hall, crystal swimming pool, and fine dining.',
            'url'             => esc_url( home_url( '/hospitality/' ) ),
            'telephone'       => '+2348055558197',
            'email'           => $email_addr,
            'priceRange'      => '₦25,000 - ₦200,000',
            'currenciesAccepted' => 'NGN',
            'paymentAccepted' => 'Cash, Debit Card, Bank Transfer, Paystack',
            'checkinTime'     => '14:00',
            'checkoutTime'    => '12:00',
            'aggregateRating' => array(
                '@type'       => 'AggregateRating',
                'ratingValue' => '3.9',
                'reviewCount' => '144',
                'bestRating'  => '5',
                'worstRating' => '1',
            ),
            'address'         => array(
                '@type'           => 'PostalAddress',
                'streetAddress'   => 'Opposite Suleman Police Technical College, Kwamba',
                'addressLocality' => 'Suleja',
                'postalCode'      => '910104',
                'addressRegion'   => 'Niger State',
                'addressCountry'  => 'NG',
            ),
            'geo'             => array(
                '@type'     => 'GeoCoordinates',
                'latitude'  => 9.1802,
                'longitude' => 7.1785,
            ),
            'image'           => array(
                esc_url( get_template_directory_uri() . '/assets/photos/resort/exterior.jpg' ),
                esc_url( get_template_directory_uri() . '/assets/photos/swimming-pool-pergola.jpg' ),
                esc_url( get_template_directory_uri() . '/assets/photos/deluxe-room.jpg' ),
                esc_url( get_template_directory_uri() . '/assets/photos/executive-room.jpg' ),
                esc_url( get_template_directory_uri() . '/assets/photos/blissful-breeze-suite.jpg' ),
                esc_url( get_template_directory_uri() . '/assets/photos/resort/banquet-hall.jpg' ),
            ),
            'amenityFeature'  => array(
                array(
                    '@type' => 'LocationFeatureSpecification',
                    'name'  => 'Resort Swimming Pool & Pergola Lounge',
                    'value' => true,
                ),
                array(
                    '@type' => 'LocationFeatureSpecification',
                    'name'  => '1,000-Seat Grand Banquet Auditorium',
                    'value' => true,
                ),
                array(
                    '@type' => 'LocationFeatureSpecification',
                    'name'  => '24/7 Uninterrupted Electricity (Dual Standby Generators)',
                    'value' => true,
                ),
                array(
                    '@type' => 'LocationFeatureSpecification',
                    'name'  => 'Free High-Speed Wi-Fi',
                    'value' => true,
                ),
                array(
                    '@type' => 'LocationFeatureSpecification',
                    'name'  => 'Cameo Restaurant & Bar',
                    'value' => true,
                ),
                array(
                    '@type' => 'LocationFeatureSpecification',
                    'name'  => 'Billiards & Snooker Lounge',
                    'value' => true,
                ),
                array(
                    '@type' => 'LocationFeatureSpecification',
                    'name'  => '24-Hour Armed Perimeter Security',
                    'value' => true,
                ),
                array(
                    '@type' => 'LocationFeatureSpecification',
                    'name'  => 'Free Secured On-Site Parking (200+ Cars)',
                    'value' => true,
                ),
            ),
            'sameAs'          => array(
                'https://instagram.com/kelvincameoresort_ng',
                'https://facebook.com/kelvincameoresort_ng',
                'https://www.tiktok.com/@kelvincameoresort_ng',
                'https://www.booking.com/hotel/ng/kelvin-cameo-resort.html',
            ),
        );

        echo "<!-- Kelvin Cameo SEO Schema: Hotel -->\n";
        echo '<script type="application/ld+json">' . wp_json_encode( $resort_schema, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT ) . "</script>\n";

        // Hospitality FAQ Schema for AI Search Engines (ChatGPT, Perplexity, Gemini)
        $hotel_faq = array(
            '@context'   => 'https://schema.org',
            '@type'      => 'FAQPage',
            'mainEntity' => array(
                array(
                    '@type'          => 'Question',
                    'name'           => 'What are the room rates at Kelvin Cameo Resort Hotel?',
                    'acceptedAnswer' => array(
                        '@type' => 'Answer',
                        'text'  => 'Kelvin Cameo Resort Hotel room rates start from ₦25,000 for Standard Rooms, ₦40,000 for Deluxe Rooms (The Annex), ₦60,000 for Executive Rooms, ₦120,000 for the Blissful Breeze Suite, and up to ₦200,000 for the Presidential Penthouse Suite. All bookings include 24/7 power, air conditioning, flat-screen satellite TV, ensuite bathrooms, and pool access.',
                    ),
                ),
                array(
                    '@type'          => 'Question',
                    'name'           => 'Does Kelvin Cameo Resort Hotel have a swimming pool?',
                    'acceptedAnswer' => array(
                        '@type' => 'Answer',
                        'text'  => 'Yes! Kelvin Cameo Resort features an outdoor swimming pool equipped with water fountain jets, an ivy pergola sun terrace, and a poolside bar & grill. Hotel guests swim free of charge, and visiting non-residents can obtain a day pass for ₦3,000.',
                    ),
                ),
                array(
                    '@type'          => 'Question',
                    'name'           => 'How large is the event hall at Kelvin Cameo Resort?',
                    'acceptedAnswer' => array(
                        '@type' => 'Answer',
                        'text'  => 'The Kelvin Cameo Grand Banquet Hall is a fully air-conditioned 1,000-seat auditorium featuring crystal chandeliers, VIP greenrooms, PA audio systems, and stage facilities for weddings, corporate AGMs, and banquets.',
                    ),
                ),
                array(
                    '@type'          => 'Question',
                    'name'           => 'Where is Kelvin Cameo Resort Hotel located?',
                    'acceptedAnswer' => array(
                        '@type' => 'Answer',
                        'text'  => 'Kelvin Cameo Resort Hotel is located opposite Suleman Police Technical College, Kwamba, Suleja, 910104, Niger State, Nigeria, along the Abuja Capital Expressway Corridor.',
                    ),
                ),
                array(
                    '@type'          => 'Question',
                    'name'           => 'How do I book a room or event at Kelvin Cameo Resort?',
                    'acceptedAnswer' => array(
                        '@type' => 'Answer',
                        'text'  => 'Guests can book instantly online via secure Paystack checkout on our official website (kelvincameo.com/hospitality/), or contact our 24/7 front desk and WhatsApp concierge at +234 805 555 8197.',
                    ),
                ),
            ),
        );

        echo "<!-- Kelvin Cameo SEO Schema: Hospitality FAQ -->\n";
        echo '<script type="application/ld+json">' . wp_json_encode( $hotel_faq, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT ) . "</script>\n";
    }

    // 5. Homepage FAQ Schema
    if ( is_front_page() || is_home() ) {
        $faq_schema = array(
            '@context'   => 'https://schema.org',
            '@type'      => 'FAQPage',
            'mainEntity' => array(
                array(
                    '@type'          => 'Question',
                    'name'           => 'Where is Kelvin Cameo located?',
                    'acceptedAnswer' => array(
                        '@type' => 'Answer',
                        'text'  => 'Our corporate headquarters and flagship Kelvin Cameo Resort Hotel are located opposite Suleman Police Technical College, Kwamba, Suleja, Niger State, easily accessible along the Abuja-Kaduna highway corridor.',
                    ),
                ),
                array(
                    '@type'          => 'Question',
                    'name'           => 'How does Kelvin Cameo Energy ensure accurate fuel measurements?',
                    'acceptedAnswer' => array(
                        '@type' => 'Answer',
                        'text'  => 'All Cameo Petroleum retail dispensing pumps are digitally calibrated and tested daily to ensure 10 Liters paid is exactly 10 Liters dispensed without meter tampering.',
                    ),
                ),
                array(
                    '@type'          => 'Question',
                    'name'           => 'Can I reserve rooms or event halls online at Kelvin Cameo Resort?',
                    'acceptedAnswer' => array(
                        '@type' => 'Answer',
                        'text'  => 'Yes! You can reserve rooms directly via WhatsApp concierge (+234 805 555 8197) or instant Paystack secured checkout with immediate receipt and room guarantee.',
                    ),
                ),
                array(
                    '@type'          => 'Question',
                    'name'           => 'Are your real estate plots free from disputes?',
                    'acceptedAnswer' => array(
                        '@type' => 'Answer',
                        'text'  => 'Yes. Every Cameo Imperial property comes with verified government titles, surveyed coordinates, and our strict Zero-Omonile legal guarantee.',
                    ),
                ),
            ),
        );

        echo "<!-- Kelvin Cameo SEO Schema: FAQPage -->\n";
        echo '<script type="application/ld+json">' . wp_json_encode( $faq_schema, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT ) . "</script>\n";
    }
}
add_action( 'wp_head', 'kelvin_cameo_seo_schema', 20 );

/**
 * Optimize robots.txt for AI Search Engines & LLM Assistants (GEO / LLMO)
 */
function kelvin_cameo_custom_robots_txt( $output, $public ) {
    $site_url = esc_url( home_url( '/' ) );
    $lines = array();
    $lines[] = 'User-agent: *';
    $lines[] = 'Allow: /';
    $lines[] = '';
    $lines[] = '# Explicit permissions for AI Search Engines & LLM Assistants (GEO / LLMO)';
    $ai_bots = array(
        'Googlebot',
        'Google-Extended',
        'Bingbot',
        'GPTBot',
        'OAI-SearchBot',
        'PerplexityBot',
        'ClaudeBot',
        'Applebot',
        'Applebot-Extended',
        'cohere-ai',
        'Meta-ExternalAgent',
    );
    foreach ( $ai_bots as $bot ) {
        $lines[] = 'User-agent: ' . $bot;
        $lines[] = 'Allow: /';
        $lines[] = '';
    }
    $lines[] = 'Sitemap: ' . esc_url( $site_url . 'sitemap_index.xml' );
    $lines[] = '';
    $lines[] = '# AI Knowledge Standard:';
    $lines[] = '# llms.txt: ' . esc_url( $site_url . 'llms.txt' );
    return implode( "\n", $lines ) . "\n";
}
add_filter( 'robots_txt', 'kelvin_cameo_custom_robots_txt', 100000, 2 );

/**
 * Smart Link Helper: Resolves WordPress permalinks or falls back to static files.
 */
function kc_url( $slug, $static_fallback = '' ) {
    if ( empty( $slug ) || $slug === 'home' || $slug === 'index' ) {
        return esc_url( home_url( '/' ) );
    }

    $page = get_page_by_path( $slug );
    if ( $page ) {
        return esc_url( get_permalink( $page->ID ) );
    }

    return esc_url( home_url( '/' . trim( $slug, '/' ) . '/' ) );
}

/**
 * Handle Room Booking AJAX Submission & Email Notification.
 */
function kc_handle_room_booking() {
    // Verify nonce
    if ( ! isset( $_POST['nonce'] ) || ! wp_verify_nonce( sanitize_text_field( wp_unslash( $_POST['nonce'] ) ), 'kc_booking_nonce' ) ) {
        wp_send_json_error( array( 'message' => 'Security token expired. Please reload the page.' ), 403 );
    }

    $name       = isset( $_POST['guest_name'] ) ? sanitize_text_field( wp_unslash( $_POST['guest_name'] ) ) : '';
    $email      = isset( $_POST['guest_email'] ) ? sanitize_email( wp_unslash( $_POST['guest_email'] ) ) : '';
    $phone      = isset( $_POST['guest_phone'] ) ? sanitize_text_field( wp_unslash( $_POST['guest_phone'] ) ) : '';
    $room       = isset( $_POST['room_name'] ) ? sanitize_text_field( wp_unslash( $_POST['room_name'] ) ) : 'Standard Room';
    $branch     = isset( $_POST['room_branch'] ) ? sanitize_text_field( wp_unslash( $_POST['room_branch'] ) ) : 'Main Hotel';
    $checkin    = isset( $_POST['checkin_date'] ) ? sanitize_text_field( wp_unslash( $_POST['checkin_date'] ) ) : '';
    $checkout   = isset( $_POST['checkout_date'] ) ? sanitize_text_field( wp_unslash( $_POST['checkout_date'] ) ) : '';
    $guests     = isset( $_POST['guest_count'] ) ? intval( $_POST['guest_count'] ) : 1;
    $nights     = isset( $_POST['nights_count'] ) ? intval( $_POST['nights_count'] ) : 1;
    $total      = isset( $_POST['total_amount'] ) ? sanitize_text_field( wp_unslash( $_POST['total_amount'] ) ) : '';
    $notes      = isset( $_POST['special_requests'] ) ? sanitize_textarea_field( wp_unslash( $_POST['special_requests'] ) ) : 'None';
    $paystack   = isset( $_POST['paystack_url'] ) ? esc_url_raw( wp_unslash( $_POST['paystack_url'] ) ) : '';

    if ( empty( $name ) || empty( $email ) || empty( $phone ) ) {
        wp_send_json_error( array( 'message' => 'Please fill in all required fields (Name, Email, Phone).' ), 400 );
    }

    // Fallback room Paystack map
    $room_paystack_map = array(
        'Deluxe Room'              => 'https://paystack.com/buy/deluxe-room-fgzwtc',
        'Executive Room'           => 'https://paystack.com/buy/executive-room-qyjqms',
        'Sunset Room'              => 'https://paystack.com/buy/sunset-room-nxwzrk',
        'Prestige Room'            => 'https://paystack.com/buy/prestige-lknrmy',
        'Love Night Room'          => 'https://paystack.com/buy/love-night-hdtfxs',
        'Golden Nest Room'         => 'https://paystack.com/buy/golden-nest-ugswqe',
        'Royal Treat Suite'        => 'https://paystack.com/buy/golden-nest-ugswqe',
        'Blissful Breeze Suite'    => 'https://paystack.com/buy/blissful-breeze-suite-jrcwry',
        'Luxury Retreat Apartment' => 'https://paystack.com/buy/luxury-retreat-apartment-nvadhl',
        'Royal Retreat Apartment'  => 'https://paystack.com/buy/royal-retreat-apartment-twvshd',
        'Celebrations Full Package'=> 'https://paystack.com/buy/banquet-hall--celebrations-vuwyfa',
    );

    if ( empty( $paystack ) && isset( $room_paystack_map[ $room ] ) ) {
        $paystack = $room_paystack_map[ $room ];
    }
    if ( empty( $paystack ) ) {
        $paystack = 'https://paystack.com/buy/deluxe-room-avbdle';
    }

    // Prepare Executive HTML Email
    $to = array( 'kelvincameo73@gmail.com', get_option( 'admin_email' ) );
    $subject = sprintf( '[New Room Booking] %s - %s (%s to %s)', $room, $name, $checkin, $checkout );

    $clean_phone_digits = preg_replace( '/[^0-9]/', '', $phone );
    if ( substr( $clean_phone_digits, 0, 1 ) === '0' ) {
        $whatsapp_link = 'https://wa.me/234' . substr( $clean_phone_digits, 1 );
    } else {
        $whatsapp_link = 'https://wa.me/' . $clean_phone_digits;
    }

    $message  = '<!DOCTYPE html><html><body style="font-family: Arial, sans-serif; background:#f8fafc; margin:0; padding:24px; color:#1e293b;">';
    $message .= '<div style="max-width:600px; margin:0 auto; background:#ffffff; border-radius:12px; overflow:hidden; border:1px solid #e2e8f0; box-shadow:0 4px 15px rgba(0,0,0,0.06);">';
    $message .= '<div style="background: linear-gradient(135deg, #0b4ea2 0%, #ea580c 100%); padding:24px; text-align:center; color:#ffffff;">';
    $message .= '<h2 style="margin:0; font-size:22px; font-weight:800; letter-spacing:-0.5px;">KELVIN CAMEO RESORT HOTEL</h2>';
    $message .= '<p style="margin:4px 0 0; font-size:13px; opacity:0.9;">New Room Reservation Notification • RC: 1613032</p>';
    $message .= '</div>';
    $message .= '<div style="padding:28px;">';
    $message .= '<h3 style="margin:0 0 16px; color:#0b4ea2; font-size:18px;">Reservation Summary</h3>';
    $message .= '<table style="width:100%; border-collapse:collapse; font-size:14px; margin-bottom:20px;">';
    $message .= '<tr style="border-bottom:1px solid #f1f5f9;"><td style="padding:10px 0; color:#64748b; width:40%;"><strong>Selected Room:</strong></td><td style="padding:10px 0; font-weight:700; color:#0f172a;">' . esc_html( $room ) . '</td></tr>';
    $message .= '<tr style="border-bottom:1px solid #f1f5f9;"><td style="padding:10px 0; color:#64748b;"><strong>Branch Location:</strong></td><td style="padding:10px 0; color:#0f172a;">' . esc_html( $branch ) . '</td></tr>';
    $message .= '<tr style="border-bottom:1px solid #f1f5f9;"><td style="padding:10px 0; color:#64748b;"><strong>Guest Name:</strong></td><td style="padding:10px 0; font-weight:700; color:#0f172a;">' . esc_html( $name ) . '</td></tr>';
    $message .= '<tr style="border-bottom:1px solid #f1f5f9;"><td style="padding:10px 0; color:#64748b;"><strong>Phone / WhatsApp:</strong></td><td style="padding:10px 0; color:#0f172a;"><a href="tel:' . esc_attr( $phone ) . '" style="color:#0b4ea2; text-decoration:none; font-weight:700;">' . esc_html( $phone ) . '</a></td></tr>';
    $message .= '<tr style="border-bottom:1px solid #f1f5f9;"><td style="padding:10px 0; color:#64748b;"><strong>Email Address:</strong></td><td style="padding:10px 0; color:#0f172a;"><a href="mailto:' . esc_attr( $email ) . '" style="color:#0b4ea2; text-decoration:none;">' . esc_html( $email ) . '</a></td></tr>';
    $message .= '<tr style="border-bottom:1px solid #f1f5f9;"><td style="padding:10px 0; color:#64748b;"><strong>Check-In Date:</strong></td><td style="padding:10px 0; font-weight:700; color:#0f172a;">' . esc_html( $checkin ) . '</td></tr>';
    $message .= '<tr style="border-bottom:1px solid #f1f5f9;"><td style="padding:10px 0; color:#64748b;"><strong>Check-Out Date:</strong></td><td style="padding:10px 0; font-weight:700; color:#0f172a;">' . esc_html( $checkout ) . '</td></tr>';
    $message .= '<tr style="border-bottom:1px solid #f1f5f9;"><td style="padding:10px 0; color:#64748b;"><strong>Stay Duration:</strong></td><td style="padding:10px 0; color:#0f172a;">' . intval( $nights ) . ' Night(s)</td></tr>';
    $message .= '<tr style="border-bottom:1px solid #f1f5f9;"><td style="padding:10px 0; color:#64748b;"><strong>Guests:</strong></td><td style="padding:10px 0; color:#0f172a;">' . intval( $guests ) . ' Guest(s)</td></tr>';
    $message .= '<tr style="border-bottom:1px solid #f1f5f9;"><td style="padding:10px 0; color:#64748b;"><strong>Estimated Total:</strong></td><td style="padding:10px 0; font-size:16px; font-weight:800; color:#ea580c;">' . esc_html( $total ) . '</td></tr>';
    $message .= '<tr><td style="padding:10px 0; color:#64748b; vertical-align:top;"><strong>Special Requests:</strong></td><td style="padding:10px 0; color:#334155;">' . nl2br( esc_html( $notes ) ) . '</td></tr>';
    $message .= '</table>';
    $message .= '<div style="text-align:center; margin-top:24px;">';
    $message .= '<a href="' . esc_url( $whatsapp_link ) . '" style="display:inline-block; background:#25D366; color:#ffffff; font-weight:700; padding:12px 24px; border-radius:6px; text-decoration:none; margin-right:10px;">Chat with Guest on WhatsApp</a>';
    $message .= '<a href="tel:' . esc_attr( $phone ) . '" style="display:inline-block; background:#0b4ea2; color:#ffffff; font-weight:700; padding:12px 24px; border-radius:6px; text-decoration:none;">Call Guest Directly</a>';
    $message .= '</div>';
    $message .= '</div>';
    $message .= '<div style="background:#f1f5f9; padding:14px; text-align:center; font-size:12px; color:#64748b;">';
    $message .= 'Kelvin Cameo Organization • RC: 1613032 • Automated Booking Gateway';
    $message .= '</div>';
    $message .= '</div></body></html>';

    // Always log reservation to database first so booking is never lost
    $recent_bookings = get_option( 'kc_recent_bookings', array() );
    if ( ! is_array( $recent_bookings ) ) {
        $recent_bookings = array();
    }
    array_unshift( $recent_bookings, array(
        'timestamp' => current_time( 'mysql' ),
        'room'      => $room,
        'branch'    => $branch,
        'name'      => $name,
        'email'     => $email,
        'phone'     => $phone,
        'checkin'   => $checkin,
        'checkout'  => $checkout,
        'nights'    => $nights,
        'guests'    => $guests,
        'total'     => $total,
        'notes'     => $notes,
    ) );
    if ( count( $recent_bookings ) > 100 ) {
        $recent_bookings = array_slice( $recent_bookings, 0, 100 );
    }
    update_option( 'kc_recent_bookings', $recent_bookings, false );

    $headers = array(
        'Content-Type: text/html; charset=UTF-8',
        'From: Kelvin Cameo Portal <' . get_option( 'admin_email' ) . '>',
        'Reply-To: ' . $name . ' <' . $email . '>',
    );

    // Attempt email dispatch (gracefully caught if host disabled mail() before SMTP setup)
    $mail_sent = false;
    try {
        if ( function_exists( 'mail' ) || has_action( 'phpmailer_init' ) ) {
            $mail_sent = @wp_mail( $to, $subject, $message, $headers );
        }
    } catch ( \Throwable $e ) {
        error_log( '[Kelvin Cameo Booking] Mail notice: ' . $e->getMessage() );
    }

    wp_send_json_success( array(
        'message'      => 'Booking details recorded! Redirecting to secure Paystack payment...',
        'paystack_url' => $paystack,
        'mail_sent'    => $mail_sent,
    ) );
}
add_action( 'wp_ajax_kc_room_booking', 'kc_handle_room_booking' );
add_action( 'wp_ajax_nopriv_kc_room_booking', 'kc_handle_room_booking' );

/**
 * Handle Corporate / Banquet Inquiry Form AJAX.
 */
function kc_handle_inquiry_submission() {
    $service  = isset( $_POST['service_type'] ) ? sanitize_text_field( wp_unslash( $_POST['service_type'] ) ) : 'General';
    $name     = isset( $_POST['full_name'] ) ? sanitize_text_field( wp_unslash( $_POST['full_name'] ) ) : '';
    $email    = isset( $_POST['email'] ) ? sanitize_email( wp_unslash( $_POST['email'] ) ) : '';
    $phone    = isset( $_POST['phone'] ) ? sanitize_text_field( wp_unslash( $_POST['phone'] ) ) : '';
    $timeline = isset( $_POST['timeline'] ) ? sanitize_text_field( wp_unslash( $_POST['timeline'] ) ) : '';
    $notes    = isset( $_POST['notes'] ) ? sanitize_textarea_field( wp_unslash( $_POST['notes'] ) ) : '';

    if ( empty( $name ) || empty( $email ) || empty( $phone ) ) {
        wp_send_json_error( array( 'message' => 'Please provide your name, email, and telephone line.' ), 400 );
    }

    // Save inquiry to options
    $inquiries = get_option( 'kc_recent_inquiries', array() );
    if ( ! is_array( $inquiries ) ) {
        $inquiries = array();
    }
    array_unshift( $inquiries, array(
        'timestamp' => current_time( 'mysql' ),
        'service'   => $service,
        'name'      => $name,
        'email'     => $email,
        'phone'     => $phone,
        'timeline'  => $timeline,
        'notes'     => $notes,
    ) );
    if ( count( $inquiries ) > 100 ) {
        $inquiries = array_slice( $inquiries, 0, 100 );
    }
    update_option( 'kc_recent_inquiries', $inquiries, false );

    // Send email
    $to = array( 'kelvincameo73@gmail.com', get_option( 'admin_email' ) );
    $subject = sprintf( '[Business Inquiry / Quote] %s - %s', ucfirst( $service ), $name );
    $headers = array(
        'Content-Type: text/html; charset=UTF-8',
        'From: Kelvin Cameo Portal <' . get_option( 'admin_email' ) . '>',
        'Reply-To: ' . $name . ' <' . $email . '>',
    );

    $clean_phone = preg_replace( '/[^0-9]/', '', $phone );
    $wa_url = ( substr( $clean_phone, 0, 1 ) === '0' ) ? 'https://wa.me/234' . substr( $clean_phone, 1 ) : 'https://wa.me/' . $clean_phone;

    $msg  = '<!DOCTYPE html><html><body style="font-family:Arial,sans-serif;background:#f8fafc;padding:24px;color:#1e293b;">';
    $msg .= '<div style="max-width:600px;margin:0 auto;background:#fff;border-radius:12px;overflow:hidden;border:1px solid #e2e8f0;">';
    $msg .= '<div style="background:linear-gradient(135deg,#0b4ea2,#ea580c);padding:24px;text-align:center;color:#fff;">';
    $msg .= '<h2 style="margin:0;">KELVIN CAMEO ORGANIZATION</h2>';
    $msg .= '<p style="margin:4px 0 0;font-size:13px;opacity:0.9;">New Business Inquiry / Quote Request • RC: 1613032</p>';
    $msg .= '</div>';
    $msg .= '<div style="padding:28px;">';
    $msg .= '<table style="width:100%;border-collapse:collapse;font-size:14px;">';
    $msg .= '<tr style="border-bottom:1px solid #f1f5f9;"><td style="padding:10px 0;color:#64748b;width:35%;"><strong>Sector / Service:</strong></td><td style="padding:10px 0;font-weight:700;color:#0b4ea2;">' . esc_html( ucfirst( $service ) ) . '</td></tr>';
    $msg .= '<tr style="border-bottom:1px solid #f1f5f9;"><td style="padding:10px 0;color:#64748b;"><strong>Contact Name:</strong></td><td style="padding:10px 0;font-weight:700;">' . esc_html( $name ) . '</td></tr>';
    $msg .= '<tr style="border-bottom:1px solid #f1f5f9;"><td style="padding:10px 0;color:#64748b;"><strong>Phone Line:</strong></td><td style="padding:10px 0;"><a href="tel:' . esc_attr( $phone ) . '">' . esc_html( $phone ) . '</a></td></tr>';
    $msg .= '<tr style="border-bottom:1px solid #f1f5f9;"><td style="padding:10px 0;color:#64748b;"><strong>Email:</strong></td><td style="padding:10px 0;"><a href="mailto:' . esc_attr( $email ) . '">' . esc_html( $email ) . '</a></td></tr>';
    $msg .= '<tr style="border-bottom:1px solid #f1f5f9;"><td style="padding:10px 0;color:#64748b;"><strong>Target Timeline:</strong></td><td style="padding:10px 0;">' . esc_html( $timeline ) . '</td></tr>';
    $msg .= '<tr><td style="padding:10px 0;color:#64748b;vertical-align:top;"><strong>Project Scope / Notes:</strong></td><td style="padding:10px 0;">' . nl2br( esc_html( $notes ) ) . '</td></tr>';
    $msg .= '</table>';
    $msg .= '<div style="text-align:center;margin-top:24px;">';
    $msg .= '<a href="' . esc_url( $wa_url ) . '" style="background:#25D366;color:#fff;font-weight:700;padding:12px 24px;border-radius:6px;text-decoration:none;display:inline-block;margin-right:10px;">Chat on WhatsApp</a>';
    $msg .= '<a href="tel:' . esc_attr( $phone ) . '" style="background:#0b4ea2;color:#fff;font-weight:700;padding:12px 24px;border-radius:6px;text-decoration:none;display:inline-block;">Call Contact</a>';
    $msg .= '</div>';
    $msg .= '</div>';
    $msg .= '</div></body></html>';

    try {
        @wp_mail( $to, $subject, $msg, $headers );
    } catch ( \Throwable $e ) {
        error_log( '[Kelvin Cameo Inquiry] Mail note: ' . $e->getMessage() );
    }

    wp_send_json_success( array( 'message' => 'Thank you! Your request has been dispatched to our executive desk.' ) );
}
add_action( 'wp_ajax_kc_submit_inquiry', 'kc_handle_inquiry_submission' );
add_action( 'wp_ajax_nopriv_kc_submit_inquiry', 'kc_handle_inquiry_submission' );

/**
 * Automatically 301-redirect all 404 (Not Found) requests directly to the homepage.
 */
function kc_redirect_404_to_homepage() {
    if ( is_404() ) {
        wp_safe_redirect( home_url( '/' ), 301 );
        exit;
    }
}
add_action( 'template_redirect', 'kc_redirect_404_to_homepage' );

