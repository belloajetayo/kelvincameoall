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
            'ajax_url'  => admin_url( 'admin-ajax.php' ),
            'nonce'     => wp_create_nonce( 'kc_booking_nonce' ),
            'home_url'  => home_url( '/' ),
            'hotel_num' => '+2348055558197',
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
        'logo'        => $logo_url,
        'email'       => $email_addr,
        'telephone'   => '+2348055558197',
        'description' => 'Diversified Nigerian corporate conglomerate operating in Petroleum Retail Stations, Real Estate Developments, Commercial Agriculture, and Premier Resort Hospitality.',
        'address'     => array(
            '@type'           => 'PostalAddress',
            'streetAddress'   => 'Abuja-Suleja Corridor',
            'addressLocality' => 'Suleja',
            'addressRegion'   => 'Niger State',
            'addressCountry'  => 'NG',
        ),
        'sameAs'      => array(
            'https://instagram.com/kelvincameoresort_ng',
            'https://facebook.com/kelvincameoresort_ng',
            'https://x.com/kelvincameoresort_ng',
        ),
    );

    echo "\n<!-- Kelvin Cameo SEO Schema: Organization -->\n";
    echo '<script type="application/ld+json">' . wp_json_encode( $org_schema, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT ) . "</script>\n";

    // 2. Hospitality / Resort Hotel Schema (On Resort Page)
    if ( is_page( 'hospitality' ) || is_page_template( 'page-hospitality.php' ) ) {
        $resort_schema = array(
            '@context'        => 'https://schema.org',
            '@type'           => 'LodgingBusiness',
            '@id'             => $site_url . 'hospitality/#resort',
            'name'            => 'Kelvin Cameo Resort Hotel & Banquet Halls',
            'description'     => 'Premier luxury resort hotel in Suleja / Abuja corridor. Featuring Executive suites from ₦25,000, 1,000-seat grand banquet hall, pool, and 24/7 power.',
            'url'             => esc_url( home_url( '/hospitality/' ) ),
            'telephone'       => '+2348055558197',
            'email'           => $email_addr,
            'priceRange'      => '₦25,000 - ₦180,000',
            'address'         => array(
                '@type'           => 'PostalAddress',
                'streetAddress'   => 'Kelvin Cameo Resort Way',
                'addressLocality' => 'Suleja',
                'addressRegion'   => 'Niger State',
                'addressCountry'  => 'NG',
            ),
            'amenityFeature'  => array(
                array(
                    '@type' => 'LocationFeatureSpecification',
                    'name'  => '24/7 Uninterrupted Electricity',
                    'value' => true,
                ),
                array(
                    '@type' => 'LocationFeatureSpecification',
                    'name'  => 'Olympic-Size Swimming Pool',
                    'value' => true,
                ),
                array(
                    '@type' => 'LocationFeatureSpecification',
                    'name'  => '1,000-Guest Grand Banquet Hall',
                    'value' => true,
                ),
                array(
                    '@type' => 'LocationFeatureSpecification',
                    'name'  => 'Secured Gated Compound',
                    'value' => true,
                ),
            ),
        );

        echo "<!-- Kelvin Cameo SEO Schema: LodgingBusiness -->\n";
        echo '<script type="application/ld+json">' . wp_json_encode( $resort_schema, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT ) . "</script>\n";
    }

    // 3. Homepage FAQ Schema
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
                        'text'  => 'Our corporate headquarters and flagship Kelvin Cameo Resort Hotel are located along the Abuja-Suleja corridor in Niger State, Nigeria, easily accessible from the Federal Capital Territory.',
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
