<?php
/**
 * The template for displaying all single posts
 *
 * @package Kelvin_Cameo
 * @version 1.1.0
 */

get_header();

// Fetch post data
$post_id        = get_the_ID();
$post_title     = get_the_title();
$post_url       = get_permalink();
$post_date      = get_the_date( 'F j, Y' );
$post_time_iso  = get_the_date( 'c' );
$post_mod_iso   = get_the_modified_date( 'c' );
$categories     = get_the_category();
$category_name  = ! empty( $categories ) ? esc_html( $categories[0]->name ) : 'Corporate Insights';
$reading_time   = max( 3, ceil( str_word_count( wp_strip_all_tags( get_the_content() ) ) / 200 ) );

// Determine featured image
$featured_img_url = get_the_post_thumbnail_url( $post_id, 'full' );
if ( ! $featured_img_url ) {
    $post_slug = get_post_field( 'post_name', $post_id );
    // Default contextual fallback based on category or slug
    if ( strpos( $post_slug, 'banquet' ) !== false ) {
        $featured_img_url = get_template_directory_uri() . '/assets/photos/resort/banquet-hall.jpg';
    } elseif ( strpos( $post_slug, 'getaway' ) !== false || strpos( $post_slug, 'pool' ) !== false ) {
        $featured_img_url = get_template_directory_uri() . '/assets/photos/resort/swimming-pool.jpg';
    } elseif ( strpos( $post_slug, 'fuel' ) !== false || strpos( $post_slug, 'energy' ) !== false ) {
        $featured_img_url = get_template_directory_uri() . '/assets/photos/fuel-attendants-dispensing.jpg';
    } elseif ( strpos( $post_slug, 'land' ) !== false || strpos( $post_slug, 'real-estate' ) !== false ) {
        $featured_img_url = get_template_directory_uri() . '/assets/photos/cameo-real-estate-luxury.jpg';
    } else {
        $featured_img_url = get_template_directory_uri() . '/assets/photos/resort/exterior.jpg';
    }
}
?>

<!-- Schema.org JSON-LD Article & Hospitality Grounding -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "Article",
      "@id": "<?php echo esc_url( $post_url ); ?>#article",
      "isPartOf": {
        "@type": "WebPage",
        "@id": "<?php echo esc_url( $post_url ); ?>",
        "url": "<?php echo esc_url( $post_url ); ?>",
        "name": "<?php echo esc_attr( $post_title ); ?>"
      },
      "headline": "<?php echo esc_attr( $post_title ); ?>",
      "description": "<?php echo esc_attr( wp_strip_all_tags( get_the_excerpt() ) ); ?>",
      "image": "<?php echo esc_url( $featured_img_url ); ?>",
      "datePublished": "<?php echo esc_attr( $post_time_iso ); ?>",
      "dateModified": "<?php echo esc_attr( $post_mod_iso ); ?>",
      "mainEntityOfPage": "<?php echo esc_url( $post_url ); ?>",
      "author": {
        "@type": "Organization",
        "name": "Kelvin Cameo Executive Desk",
        "url": "<?php echo esc_url( home_url( '/about/' ) ); ?>",
        "founder": {
          "@type": "Person",
          "name": "Alhaji Kamorudeen Oladejo",
          "jobTitle": "Founder & Group Managing Director"
        }
      },
      "publisher": {
        "@type": "Organization",
        "name": "Kelvin Cameo Organization",
        "url": "<?php echo esc_url( home_url( '/' ) ); ?>",
        "logo": {
          "@type": "ImageObject",
          "url": "<?php echo esc_url( get_template_directory_uri() . '/assets/brand-emblem.png' ); ?>"
        }
      },
      "articleSection": "<?php echo esc_attr( $category_name ); ?>",
      "inLanguage": "en-NG"
    },
    {
      "@type": "BreadcrumbList",
      "itemListElement": [
        {
          "@type": "ListItem",
          "position": 1,
          "name": "Home",
          "item": "<?php echo esc_url( home_url( '/' ) ); ?>"
        },
        {
          "@type": "ListItem",
          "position": 2,
          "name": "Insights & Guides",
          "item": "<?php echo esc_url( home_url( '/#insights' ) ); ?>"
        },
        {
          "@type": "ListItem",
          "position": 3,
          "name": "<?php echo esc_attr( $post_title ); ?>",
          "item": "<?php echo esc_url( $post_url ); ?>"
        }
      ]
    },
    {
      "@type": "Hotel",
      "@id": "https://kelvincameo.com/hospitality/#hotel",
      "name": "Kelvin Cameo Resort Hotel & Suites",
      "url": "https://kelvincameo.com/hospitality/",
      "telephone": "+2348055558197",
      "priceRange": "₦25,000 - ₦200,000",
      "currenciesAccepted": "NGN",
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "Opposite Suleman Police Technical College, Kwamba",
        "addressLocality": "Suleja",
        "addressRegion": "Niger State",
        "postalCode": "910104",
        "addressCountry": "NG"
      },
      "geo": {
        "@type": "GeoCoordinates",
        "latitude": 9.1802,
        "longitude": 7.1785
      },
      "amenityFeature": [
        { "@type": "LocationFeatureSpecification", "name": "24/7 Dual Standby Generators", "value": true },
        { "@type": "LocationFeatureSpecification", "name": "Olympic Swimming Pool", "value": true },
        { "@type": "LocationFeatureSpecification", "name": "1,000-Seat Grand Banquet Hall", "value": true },
        { "@type": "LocationFeatureSpecification", "name": "Free High-Speed Wi-Fi", "value": true }
      ]
    }
  ]
}
</script>

<!-- Breadcrumbs Header -->
<div class="article-breadcrumbs-bar">
  <div class="container">
    <nav class="article-breadcrumbs" aria-label="Breadcrumb">
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a>
      <span class="crumb-sep">/</span>
      <a href="<?php echo esc_url( home_url( '/#insights' ) ); ?>">Insights &amp; Guides</a>
      <span class="crumb-sep">/</span>
      <span class="crumb-current" aria-current="page"><?php echo esc_html( wp_trim_words( $post_title, 7 ) ); ?></span>
    </nav>
  </div>
</div>

<!-- Article Hero Section -->
<header class="article-hero">
  <div class="container article-hero-container">
    <div class="article-meta-badge">
      <span class="article-cat-pill"><?php echo esc_html( $category_name ); ?></span>
      <span class="article-rc-pill"><svg viewBox="0 0 24 24" width="13" height="13" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg> RC: 1613032 Verified</span>
    </div>

    <h1 class="article-title"><?php echo esc_html( $post_title ); ?></h1>

    <div class="article-byline">
      <div class="article-author">
        <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/photos/director-alh-kamorudeen-oladejo.jpg' ); ?>" alt="Executive Desk" class="author-avatar" width="44" height="44" loading="lazy">
        <div>
          <span class="author-name">Executive Editorial Desk</span>
          <span class="author-sub">Kelvin Cameo Organization &bull; Abuja Corridor</span>
        </div>
      </div>
      <div class="article-stats">
        <span class="article-stat-item">
          <svg viewBox="0 0 24 24" width="15" height="15" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg>
          <?php echo esc_html( $post_date ); ?>
        </span>
        <span class="article-stat-dot">&bull;</span>
        <span class="article-stat-item">
          <svg viewBox="0 0 24 24" width="15" height="15" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
          <?php echo esc_html( $reading_time ); ?> min read
        </span>
      </div>
    </div>
  </div>
</header>

<!-- Main Article Section -->
<main class="article-main-wrap section-padding" style="background: var(--sand-50); padding-top: 2rem;">
  <div class="container article-layout">
    
    <!-- Primary Content Area -->
    <article class="article-content-area">

      <!-- Featured Image Banner -->
      <?php if ( $featured_img_url ) : ?>
        <figure class="article-featured-banner">
          <img src="<?php echo esc_url( $featured_img_url ); ?>" alt="<?php echo esc_attr( $post_title ); ?>" class="featured-img" loading="eager">
          <figcaption class="featured-caption">
            <svg viewBox="0 0 24 24" width="14" height="14" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
            Kelvin Cameo Corporate Estate &bull; Opposite Suleman Police Technical College, Kwamba, Suleja (Abuja Corridor)
          </figcaption>
        </figure>
      <?php endif; ?>

      <!-- Article Body -->
      <div class="article-prose">
        <?php
        while ( have_posts() ) :
            the_post();
            the_content();
        endwhile;
        ?>
      </div>

      <!-- Verified Corporate Action Box -->
      <div class="article-action-box">
        <div class="action-box-inner">
          <div class="action-box-icon">
            <svg viewBox="0 0 24 24" width="28" height="28" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg>
          </div>
          <div class="action-box-text">
            <h3>Experience Kelvin Cameo Resort Hotel</h3>
            <p>Ready to reserve your room from ₦25,000 or inspect our 1,000-seat grand banquet hall? Our 24/7 reception desk and WhatsApp concierge are ready to assist you instantly.</p>
          </div>
          <div class="action-box-buttons">
            <a href="https://wa.me/2348055558197?text=Hello%20Kelvin%20Cameo%20Resort%2C%20I%20read%20your%20article%20and%20would%20like%20to%20make%20a%20reservation." target="_blank" rel="noreferrer" class="btn btn-whatsapp">
              <svg viewBox="0 0 24 24" width="18" height="18" fill="currentColor"><path d="M12.04 2c-5.46 0-9.91 4.45-9.91 9.91 0 1.75.46 3.45 1.32 4.95L2.05 22l5.25-1.38c1.45.79 3.08 1.21 4.74 1.21 5.46 0 9.91-4.45 9.91-9.91 0-2.65-1.03-5.14-2.9-7.01A9.816 9.816 0 0 0 12.04 2z"/></svg>
              Chat with Front Desk
            </a>
            <a href="<?php echo esc_url( home_url( '/reserve/' ) ); ?>" class="btn btn-primary">
              Book Room Online
            </a>
          </div>
        </div>
      </div>

      <!-- Author Attribution Card -->
      <div class="article-author-card">
        <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/photos/director-alh-kamorudeen-oladejo.jpg' ); ?>" alt="Alhaji Kamorudeen Oladejo" class="author-card-avatar" width="70" height="70" loading="lazy">
        <div class="author-card-bio">
          <div class="author-card-header">
            <h4>Alhaji Kamorudeen Oladejo</h4>
            <span class="author-title-pill">Founder &amp; Group Managing Director</span>
          </div>
          <p>Industrialist and indigenous investor steering Kelvin Cameo Organization (RC: 1613032). Providing verified corporate leadership across Downstream Energy, Master-Planned Real Estate, Commercial Agriculture, and Premier Hospitality in Suleja and the Federal Capital Territory corridor.</p>
          <div class="author-trust-meta">
            <span>Corporate Registration: <strong>RC: 1613032</strong></span>
            <span>&bull;</span>
            <span>Headquarters: <strong>Kwamba, Suleja, Niger State</strong></span>
          </div>
        </div>
      </div>

      <!-- Social & WhatsApp Sharing -->
      <div class="article-share-strip">
        <span class="share-label">Share this guide:</span>
        <a href="https://api.whatsapp.com/send?text=<?php echo urlencode( $post_title . ' - Read more: ' . $post_url ); ?>" target="_blank" rel="noreferrer" class="share-btn share-whatsapp" aria-label="Share on WhatsApp">
          <svg viewBox="0 0 24 24" width="16" height="16" fill="currentColor"><path d="M12.04 2c-5.46 0-9.91 4.45-9.91 9.91 0 1.75.46 3.45 1.32 4.95L2.05 22l5.25-1.38c1.45.79 3.08 1.21 4.74 1.21 5.46 0 9.91-4.45 9.91-9.91 0-2.65-1.03-5.14-2.9-7.01A9.816 9.816 0 0 0 12.04 2z"/></svg>
          WhatsApp
        </a>
        <a href="https://twitter.com/intent/tweet?text=<?php echo urlencode( $post_title ); ?>&url=<?php echo urlencode( $post_url ); ?>" target="_blank" rel="noreferrer" class="share-btn share-twitter" aria-label="Share on X">
          <svg viewBox="0 0 24 24" width="16" height="16" fill="currentColor"><path d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z"/></svg>
          X (Twitter)
        </a>
        <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo urlencode( $post_url ); ?>" target="_blank" rel="noreferrer" class="share-btn share-facebook" aria-label="Share on Facebook">
          <svg viewBox="0 0 24 24" width="16" height="16" fill="currentColor"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"/></svg>
          Facebook
        </a>
      </div>

    </article>

    <!-- Sidebar Area -->
    <aside class="article-sidebar">

      <!-- Quick Room Booking Card -->
      <div class="sidebar-card booking-widget-card">
        <div class="sidebar-card-badge">DIRECT RESERVATION</div>
        <h4 class="sidebar-card-title">Stay at Kelvin Cameo Resort</h4>
        <p class="sidebar-card-subtitle">Rooms starting from <strong>₦25,000 / night</strong> with 24/7 power, Olympic pool &amp; Wi-Fi.</p>
        
        <ul class="sidebar-features-list">
          <li>
            <svg viewBox="0 0 24 24" width="16" height="16" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
            Dual Caterpillar 24/7 Generators
          </li>
          <li>
            <svg viewBox="0 0 24 24" width="16" height="16" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
            Swimming Pool &amp; Pergola Lounge
          </li>
          <li>
            <svg viewBox="0 0 24 24" width="16" height="16" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
            Opposite Police Technical College (Armed Security)
          </li>
          <li>
            <svg viewBox="0 0 24 24" width="16" height="16" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
            Instant Zenith Bank &amp; Paystack Check-In
          </li>
        </ul>

        <div class="sidebar-card-actions">
          <a href="https://wa.me/2348055558197?text=Hello%20Front%20Desk%2C%20I%20want%20to%20reserve%20a%20room%20at%20Kelvin%20Cameo%20Resort." target="_blank" rel="noreferrer" class="btn btn-whatsapp btn-block">
            <svg viewBox="0 0 24 24" width="18" height="18" fill="currentColor"><path d="M12.04 2c-5.46 0-9.91 4.45-9.91 9.91 0 1.75.46 3.45 1.32 4.95L2.05 22l5.25-1.38c1.45.79 3.08 1.21 4.74 1.21 5.46 0 9.91-4.45 9.91-9.91 0-2.65-1.03-5.14-2.9-7.01A9.816 9.816 0 0 0 12.04 2z"/></svg>
            Chat Reception (WhatsApp)
          </a>
          <a href="<?php echo esc_url( home_url( '/reserve/' ) ); ?>" class="btn btn-primary btn-block">
            Book Online with Rates
          </a>
          <a href="tel:+2348055558197" class="sidebar-call-link">
            <svg viewBox="0 0 24 24" width="14" height="14" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
            Direct Call: +234 805 555 8197
          </a>
        </div>
      </div>

      <!-- Banquet Hall Promotion -->
      <div class="sidebar-card banquet-card">
        <div class="sidebar-card-badge">1,000 CAPACITY</div>
        <h4 class="sidebar-card-title">Grand Banquet Auditorium</h4>
        <p class="sidebar-card-subtitle">Abuja corridor's largest event hall for weddings, AGMs &amp; conferences.</p>
        <div class="banquet-pricing-mini">
          <div><span class="day-lbl">Weekday:</span> <strong>₦850,000</strong></div>
          <div><span class="day-lbl">Weekend:</span> <strong>₦1,050,000</strong></div>
        </div>
        <a href="https://wa.me/2348055558197?text=Hello%2C%20I%20am%20inquiring%20about%20booking%20the%201000-seat%20Banquet%20Hall." target="_blank" rel="noreferrer" class="btn btn-outline btn-block">
          Inspect Hall / Inquire
        </a>
      </div>

      <!-- Other Sectors Quick Links -->
      <div class="sidebar-card sectors-mini-card">
        <h4 class="sidebar-card-title">Operating Sectors</h4>
        <nav class="sidebar-sectors-nav">
          <a href="<?php echo esc_url( home_url( '/energy/' ) ); ?>" class="sidebar-sector-link">
            <span class="sector-dot dot-energy"></span>
            <div>
              <strong>Downstream Energy</strong>
              <small>Calibrated fuel (10L = 10L) &amp; LPG</small>
            </div>
            <svg viewBox="0 0 24 24" width="16" height="16" fill="none" stroke="currentColor" stroke-width="2"><polyline points="9 18 15 12 9 6"/></svg>
          </a>
          <a href="<?php echo esc_url( home_url( '/real-estate/' ) ); ?>" class="sidebar-sector-link">
            <span class="sector-dot dot-estate"></span>
            <div>
              <strong>Real Estate &amp; Land</strong>
              <small>Dispute-free plots with C of O</small>
            </div>
            <svg viewBox="0 0 24 24" width="16" height="16" fill="none" stroke="currentColor" stroke-width="2"><polyline points="9 18 15 12 9 6"/></svg>
          </a>
          <a href="<?php echo esc_url( home_url( '/agriculture/' ) ); ?>" class="sidebar-sector-link">
            <span class="sector-dot dot-agro"></span>
            <div>
              <strong>Commercial Agriculture</strong>
              <small>2,500+ hectares grain &amp; poultry</small>
            </div>
            <svg viewBox="0 0 24 24" width="16" height="16" fill="none" stroke="currentColor" stroke-width="2"><polyline points="9 18 15 12 9 6"/></svg>
          </a>
        </nav>
      </div>

      <!-- Physical Office Card -->
      <div class="sidebar-card address-card">
        <h4 class="sidebar-card-title">Resort Location</h4>
        <p class="address-text">
          <strong>Kelvin Cameo Resort Hotel</strong><br>
          Along Maje, Minna Road,<br>
          Opposite Suleman Police Technical College,<br>
          Kwamba, Suleja, Niger State (Abuja Corridor).
        </p>
        <a href="https://maps.google.com/?q=Kelvin+Cameo+Resort+Suleja" target="_blank" rel="noreferrer" class="map-link">
          <svg viewBox="0 0 24 24" width="15" height="15" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
          Open in Google Maps &rarr;
        </a>
      </div>

    </aside>

  </div>
</main>

<!-- Related Articles Strip -->
<?php
$related_posts = new WP_Query( array(
    'post_type'      => 'post',
    'posts_per_page' => 3,
    'post__not_in'   => array( $post_id ),
    'orderby'        => 'date',
    'order'          => 'DESC',
) );

if ( $related_posts->have_posts() ) :
?>
  <section class="related-articles-section section-padding" style="background: var(--white); border-top: 1px solid var(--sand-200);">
    <div class="container">
      <div class="section-header-compact" style="margin-bottom: 2rem;">
        <span class="badge badge-primary">MORE GUIDES &amp; ARTICLES</span>
        <h2 style="font-family: var(--font-display); font-size: 1.75rem; color: var(--navy-900); margin-top: 0.5rem;">Explore Further Hospitality &amp; Industry Insights</h2>
      </div>

      <div class="related-posts-grid">
        <?php
        while ( $related_posts->have_posts() ) :
            $related_posts->the_post();
            $rel_img = get_the_post_thumbnail_url( get_the_ID(), 'medium_large' );
            if ( ! $rel_img ) {
                $rel_img = get_template_directory_uri() . '/assets/photos/resort/exterior.jpg';
            }
        ?>
          <article class="related-post-card">
            <a href="<?php the_permalink(); ?>" class="related-post-img-wrap">
              <img src="<?php echo esc_url( $rel_img ); ?>" alt="<?php the_title_attribute(); ?>" loading="lazy">
            </a>
            <div class="related-post-body">
              <span class="related-post-date"><?php echo get_the_date(); ?></span>
              <h3 class="related-post-title">
                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
              </h3>
              <p class="related-post-excerpt"><?php echo wp_trim_words( get_the_excerpt(), 18 ); ?></p>
              <a href="<?php the_permalink(); ?>" class="related-post-link">Read Full Guide &rarr;</a>
            </div>
          </article>
        <?php endwhile; wp_reset_postdata(); ?>
      </div>
    </div>
  </section>
<?php endif; ?>

<?php
get_footer();
