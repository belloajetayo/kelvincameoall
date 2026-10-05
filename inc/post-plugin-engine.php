<?php
/**
 * Kelvin Cameo Organization (RC: 1613032)
 * Advanced WordPress Post Plugin & Editorial Showcase Engine
 *
 * Provides a modern, responsive, high-performance Post Plugin experience:
 * - Dynamic Carousel / Slider View with smooth scroll-snap & touch swipe
 * - High-impact 3-Column Grid View with instant category filter pills
 * - View Switcher (Grid ▦ vs Carousel ↔)
 * - Smart image resolver & fallback gallery
 * - Reading time calculator & verified concierge author badge
 * - Instant WhatsApp article sharing
 * - Third-Party Post Plugin detection & shortcode override hook
 *
 * @package Kelvin_Cameo
 * @version 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * Calculate estimated reading time in minutes.
 */
function kc_calculate_reading_time( $content ) {
    $clean_content = strip_shortcodes( $content );
    $clean_content = strip_tags( $clean_content );
    $word_count    = str_word_count( $clean_content );
    $minutes       = max( 1, (int) ceil( $word_count / 200 ) );
    return $minutes . ' min read';
}

/**
 * Smart image resolver for posts.
 */
function kc_get_post_display_image( $post_id, $slug = '' ) {
    // 1. Featured image
    if ( has_post_thumbnail( $post_id ) ) {
        $thumb = get_the_post_thumbnail_url( $post_id, 'large' );
        if ( $thumb ) {
            return esc_url( $thumb );
        }
    }

    $theme_uri = get_template_directory_uri();

    // 2. Slug-based mapping
    $image_map = array(
        'best-hotels'      => '/assets/photos/resort/exterior.jpg',
        '1000-seat'        => '/assets/photos/resort/banquet-hall.jpg',
        'banquet'          => '/assets/photos/resort/banquet-hall.jpg',
        'wedding'          => '/assets/photos/resort/apartment-hall.jpg',
        'rates-and-tariff' => '/assets/photos/deluxe-room.jpg',
        'room-rates'       => '/assets/photos/deluxe-room.jpg',
        'love-night'       => '/assets/photos/love-night-room.jpg',
        'romantic'         => '/assets/photos/love-night-room.jpg',
        'swimming-pool'    => '/assets/photos/resort/swimming-pool.jpg',
        'pool-day-pass'    => '/assets/photos/resort/swimming-pool.jpg',
        'dining-cameo'     => '/assets/photos/resort/restaurant.jpg',
        'catfish'          => '/assets/photos/resort/restaurant.jpg',
        '24-hours-light'   => '/assets/photos/resort/evening.jpg',
        'uninterrupted'    => '/assets/photos/resort/evening.jpg',
        'business-travel'  => '/assets/photos/executive-room.jpg',
        'corporate'        => '/assets/photos/executive-room.jpg',
        'weekend-getaway'  => '/assets/photos/swimming-pool-pergola.jpg',
        'honest-fuel'      => '/assets/photos/fuel-attendants-dispensing.jpg',
        'complete-guide'   => '/assets/photos/resort/banquet-hall.jpg',
        'poolside-bliss'   => '/assets/photos/resort/swimming-pool.jpg',
        'nightlife'        => '/assets/photos/resort/bar-counter.jpg',
        'why-abuja'        => '/assets/photos/resort/apartment-lounge.jpg',
    );

    foreach ( $image_map as $key => $path ) {
        if ( strpos( $slug, $key ) !== false ) {
            return esc_url( $theme_uri . $path );
        }
    }

    return esc_url( $theme_uri . '/assets/photos/resort/exterior.jpg' );
}

/**
 * Topic mapping helper.
 */
function kc_get_post_topic_meta( $slug, $title = '' ) {
    $text = strtolower( $slug . ' ' . $title );

    if ( strpos( $text, 'wedding' ) !== false || strpos( $text, 'banquet' ) !== false || strpos( $text, '1000-seat' ) !== false ) {
        return array(
            'topic'   => 'banquet',
            'badge'   => '🏛️ Banquet &amp; Weddings',
            'chip'    => '4 Official Packages',
            'cta_url' => kc_url( 'banquet-hall' ),
            'cta_txt' => 'Check Venue',
        );
    }

    if ( strpos( $text, 'rate' ) !== false || strpos( $text, 'tariff' ) !== false || strpos( $text, 'room' ) !== false ) {
        return array(
            'topic'   => 'rooms',
            'badge'   => '🛏️ Rooms &amp; Tariffs',
            'chip'    => '₦25k – ₦200k',
            'cta_url' => kc_url( 'reserve' ),
            'cta_txt' => 'Check Tariffs',
        );
    }

    if ( strpos( $text, 'love-night' ) !== false || strpos( $text, 'romantic' ) !== false || strpos( $text, 'couple' ) !== false ) {
        return array(
            'topic'   => 'rooms leisure',
            'badge'   => '❤️ Romantic Suites',
            'chip'    => '₦45,000/night',
            'cta_url' => kc_url( 'reserve' ) . '?room=love-night',
            'cta_txt' => 'Book Suite',
        );
    }

    if ( strpos( $text, 'pool' ) !== false || strpos( $text, 'relaxation' ) !== false || strpos( $text, 'getaway' ) !== false ) {
        return array(
            'topic'   => 'leisure',
            'badge'   => '🏊 Pool &amp; Leisure',
            'chip'    => 'Day Pass: ₦3,000',
            'cta_url' => kc_url( 'hospitality' ) . '#pool',
            'cta_txt' => 'View Pool',
        );
    }

    if ( strpos( $text, 'dining' ) !== false || strpos( $text, 'restaurant' ) !== false || strpos( $text, 'catfish' ) !== false ) {
        return array(
            'topic'   => 'dining',
            'badge'   => '🍽️ Cameo Dining',
            'chip'    => 'Farm-to-Table Grill',
            'cta_url' => kc_url( 'hospitality' ) . '#dining',
            'cta_txt' => 'View Menu',
        );
    }

    if ( strpos( $text, 'bar' ) !== false || strpos( $text, 'nightlife' ) !== false || strpos( $text, 'drinks' ) !== false || strpos( $text, 'snooker' ) !== false ) {
        return array(
            'topic'   => 'dining leisure',
            'badge'   => '🍸 Vintage Bar &amp; Lounge',
            'chip'    => 'Cold Drinks &amp; Sports',
            'cta_url' => kc_url( 'hospitality' ) . '#dining',
            'cta_txt' => 'Explore Bar',
        );
    }

    if ( strpos( $text, 'light' ) !== false || strpos( $text, 'power' ) !== false || strpos( $text, 'business' ) !== false || strpos( $text, 'corporate' ) !== false ) {
        return array(
            'topic'   => 'business',
            'badge'   => '⚡ 24/7 Power &amp; Wi-Fi',
            'chip'    => 'Dual Caterpillar',
            'cta_url' => kc_url( 'hospitality' ),
            'cta_txt' => 'Explore Resort',
        );
    }

    return array(
        'topic'   => 'rooms leisure',
        'badge'   => '⭐ Luxury Hospitality',
        'chip'    => 'Ranked #1',
        'cta_url' => kc_url( 'reserve' ),
        'cta_txt' => 'Book Now',
    );
}

/**
 * Render Post Plugin Showcase.
 */
function kc_render_post_plugin_showcase( $atts = array() ) {
    $args = shortcode_atts( array(
        'posts_per_page' => 12,
        'layout'         => 'carousel', // 'carousel' or 'grid'
        'show_filters'   => 'yes',
        'show_switcher'  => 'yes',
    ), $atts );

    // Check if an external post plugin shortcode is configured in options
    $external_shortcode = get_option( 'kc_external_post_plugin_shortcode', '' );
    if ( ! empty( $external_shortcode ) ) {
        return do_shortcode( $external_shortcode );
    }

    // Query posts
    $query_args = array(
        'post_type'      => 'post',
        'post_status'    => 'publish',
        'posts_per_page' => (int) $args['posts_per_page'],
        'orderby'        => 'date',
        'order'          => 'DESC',
    );

    $posts_query = new WP_Query( $query_args );

    if ( ! $posts_query->have_posts() ) {
        return '<p class="text-muted">No published editorial guides found.</p>';
    }

    ob_start();
    ?>
    <div class="kc-post-plugin-container" id="kc-post-plugin">
      <!-- Toolbar: Topic Filters & Layout Switcher -->
      <div class="kc-post-plugin-toolbar">
        <?php if ( $args['show_filters'] === 'yes' ) : ?>
        <div class="kc-filter-pills" role="tablist">
          <button type="button" class="kc-filter-btn active" data-filter="all">All Stories <span class="kc-count"><?php echo esc_html( $posts_query->found_posts ); ?></span></button>
          <button type="button" class="kc-filter-btn" data-filter="rooms">🛏️ Rooms &amp; Tariffs</button>
          <button type="button" class="kc-filter-btn" data-filter="banquet">🏛️ Banquet &amp; Weddings</button>
          <button type="button" class="kc-filter-btn" data-filter="leisure">🏊 Pool &amp; Leisure</button>
          <button type="button" class="kc-filter-btn" data-filter="dining">🍽️ Dining &amp; Bar</button>
          <button type="button" class="kc-filter-btn" data-filter="business">⚡ Power &amp; Corporate</button>
        </div>
        <?php endif; ?>

        <?php if ( $args['show_switcher'] === 'yes' ) : ?>
        <div class="kc-view-switcher">
          <button type="button" class="kc-view-btn <?php echo ( $args['layout'] === 'carousel' ) ? 'active' : ''; ?>" data-view="carousel" title="Carousel Slider View">
            <svg viewBox="0 0 24 24" width="16" height="16" fill="none" stroke="currentColor" stroke-width="2.2"><rect x="3" y="5" width="18" height="14" rx="2"/><path d="M7 12h10"/><path d="M14 9l3 3-3 3"/><path d="M10 15l-3-3 3-3"/></svg>
            <span>Slider</span>
          </button>
          <button type="button" class="kc-view-btn <?php echo ( $args['layout'] === 'grid' ) ? 'active' : ''; ?>" data-view="grid" title="Standard Grid View">
            <svg viewBox="0 0 24 24" width="16" height="16" fill="none" stroke="currentColor" stroke-width="2.2"><rect x="3" y="3" width="7" height="7"/><rect x="14" y="3" width="7" height="7"/><rect x="14" y="14" width="7" height="7"/><rect x="3" y="14" width="7" height="7"/></svg>
            <span>Grid</span>
          </button>
        </div>
        <?php endif; ?>
      </div>

      <!-- Carousel Navigation Controls -->
      <div class="kc-carousel-header-controls">
        <span class="kc-carousel-hint">Swipe or click arrows to explore guides &rarr;</span>
        <div class="kc-carousel-arrows">
          <button type="button" class="kc-slider-arrow prev" aria-label="Previous posts" title="Scroll Left">
            <svg viewBox="0 0 24 24" width="20" height="20" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="15 18 9 12 15 6"/></svg>
          </button>
          <button type="button" class="kc-slider-arrow next" aria-label="Next posts" title="Scroll Right">
            <svg viewBox="0 0 24 24" width="20" height="20" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="9 18 15 12 9 6"/></svg>
          </button>
        </div>
      </div>

      <!-- Main Posts Wrapper: Carousel or Grid -->
      <div class="kc-posts-wrapper <?php echo ( $args['layout'] === 'carousel' ) ? 'layout-carousel' : 'layout-grid'; ?>" id="kc-posts-track">
        <?php
        while ( $posts_query->have_posts() ) :
            $posts_query->the_post();
            $post_id    = get_the_ID();
            $slug       = get_post_field( 'post_name', $post_id );
            $title      = get_the_title();
            $permalink  = get_permalink();
            $image_url  = kc_get_post_display_image( $post_id, $slug );
            $read_time  = kc_calculate_reading_time( get_the_content() );
            $meta_info  = kc_get_post_topic_meta( $slug, $title );
            $excerpt    = wp_trim_words( get_the_excerpt(), 18, '&hellip;' );
            $date_str   = get_the_date( 'M j, Y' );
            $whatsapp_share = 'https://wa.me/?text=' . rawurlencode( $title . ' - Read more: ' . $permalink );
        ?>
        <article class="kc-post-card kc-plugin-item" data-topic="<?php echo esc_attr( $meta_info['topic'] ); ?>">
          <div class="kc-card-media-wrap">
            <a href="<?php echo esc_url( $permalink ); ?>" class="kc-card-img-link" tabindex="-1" aria-hidden="true">
              <img src="<?php echo esc_url( $image_url ); ?>" alt="<?php echo esc_attr( $title ); ?>" loading="lazy" class="kc-card-img">
            </a>
            <span class="kc-card-badge"><?php echo $meta_info['badge']; ?></span>
            <span class="kc-card-chip"><?php echo esc_html( $meta_info['chip'] ); ?></span>
          </div>

          <div class="kc-card-body">
            <!-- Author & Read Time Meta Strip -->
            <div class="kc-card-author-strip">
              <div class="kc-author-info">
                <span class="kc-author-avatar">🛎️</span>
                <span class="kc-author-name">Concierge Desk</span>
              </div>
              <div class="kc-meta-right">
                <span class="kc-read-time"><?php echo esc_html( $read_time ); ?></span>
                <span class="kc-dot">&bull;</span>
                <span class="kc-date"><?php echo esc_html( $date_str ); ?></span>
              </div>
            </div>

            <!-- Title & Excerpt -->
            <h3 class="kc-card-title">
              <a href="<?php echo esc_url( $permalink ); ?>"><?php echo esc_html( $title ); ?></a>
            </h3>
            <p class="kc-card-excerpt"><?php echo esc_html( $excerpt ); ?></p>

            <!-- Card Interactive Footer -->
            <div class="kc-card-footer">
              <a href="<?php echo esc_url( $permalink ); ?>" class="kc-read-btn">
                <span>Read Guide</span>
                <svg viewBox="0 0 24 24" width="14" height="14" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="9 18 15 12 9 6"/></svg>
              </a>

              <div class="kc-card-actions">
                <a href="<?php echo esc_url( $whatsapp_share ); ?>" target="_blank" rel="noopener" class="kc-share-icon" title="Share via WhatsApp">
                  <svg viewBox="0 0 24 24" width="15" height="15" fill="currentColor"><path d="M12.031 6.172c-3.181 0-5.767 2.586-5.768 5.766-.001 1.298.38 2.27 1.019 3.287l-.711 2.598 2.664-.698c.99.57 1.776.848 2.795.849 3.18 0 5.768-2.587 5.768-5.766.001-3.18-2.585-5.636-5.767-5.636zm3.393 8.163c-.144.405-.837.774-1.17.823-.312.045-.694.062-2.18-.553-1.898-.786-3.125-2.733-3.22-2.859-.094-.126-.763-.984-.763-1.879 0-.895.467-1.336.634-1.517.166-.18.364-.225.485-.225.12 0 .241.002.346.007.11.006.257-.042.402.308.149.362.51 1.244.555 1.335.045.09.075.197.015.318-.06.121-.09.197-.18.303-.09.106-.189.237-.27.318-.09.09-.184.188-.079.369.105.18.468.772 1.004 1.25.688.613 1.269.803 1.449.893.18.09.285.076.39-.045.105-.121.45-.526.57-.706.12-.18.24-.15.405-.09.165.06 1.045.492 1.225.582.18.09.3.135.345.21.045.075.045.436-.099.841z"/></svg>
                </a>
                <a href="<?php echo esc_url( $meta_info['cta_url'] ); ?>" class="kc-card-pill-btn">
                  <?php echo esc_html( $meta_info['cta_txt'] ); ?>
                </a>
              </div>
            </div>
          </div>
        </article>
        <?php
        endwhile;
        wp_reset_postdata();
        ?>
      </div>

      <!-- Carousel Pagination Indicator Bar -->
      <div class="kc-carousel-progress-wrap">
        <div class="kc-carousel-progress-bar">
          <div class="kc-carousel-progress-fill" id="kc-carousel-fill"></div>
        </div>
      </div>
    </div>

    <!-- Client-side Interactive Script for Slider, Switcher & Filtering -->
    <script>
    (function() {
      function initKcPostPlugin() {
        var container = document.getElementById('kc-post-plugin');
        if (!container) return;

        var track = document.getElementById('kc-posts-track');
        var prevBtn = container.querySelector('.kc-slider-arrow.prev');
        var nextBtn = container.querySelector('.kc-slider-arrow.next');
        var filterBtns = container.querySelectorAll('.kc-filter-btn');
        var viewBtns = container.querySelectorAll('.kc-view-btn');
        var fill = document.getElementById('kc-carousel-fill');
        var items = container.querySelectorAll('.kc-plugin-item');

        // Scroll track
        if (track && prevBtn && nextBtn) {
          prevBtn.addEventListener('click', function() {
            var scrollAmount = track.offsetWidth * 0.8;
            track.scrollBy({ left: -scrollAmount, behavior: 'smooth' });
          });
          nextBtn.addEventListener('click', function() {
            var scrollAmount = track.offsetWidth * 0.8;
            track.scrollBy({ left: scrollAmount, behavior: 'smooth' });
          });

          // Update progress fill
          track.addEventListener('scroll', function() {
            if (!fill) return;
            var maxScroll = track.scrollWidth - track.clientWidth;
            if (maxScroll > 0) {
              var percent = Math.min(100, Math.max(0, (track.scrollLeft / maxScroll) * 100));
              fill.style.width = percent + '%';
            }
          });
        }

        // View Switcher (Carousel vs Grid)
        if (viewBtns.length && track) {
          viewBtns.forEach(function(btn) {
            btn.addEventListener('click', function() {
              viewBtns.forEach(function(b) { b.classList.remove('active'); });
              this.classList.add('active');
              var view = this.getAttribute('data-view');
              if (view === 'grid') {
                track.classList.remove('layout-carousel');
                track.classList.add('layout-grid');
                container.classList.add('is-grid-mode');
              } else {
                track.classList.remove('layout-grid');
                track.classList.add('layout-carousel');
                container.classList.remove('is-grid-mode');
              }
            });
          });
        }

        // Category Filtering
        if (filterBtns.length && items.length) {
          filterBtns.forEach(function(btn) {
            btn.addEventListener('click', function() {
              filterBtns.forEach(function(b) { b.classList.remove('active'); });
              this.classList.add('active');
              var filter = this.getAttribute('data-filter') || 'all';

              items.forEach(function(card) {
                var topic = card.getAttribute('data-topic') || '';
                if (filter === 'all' || topic.indexOf(filter) !== -1) {
                  card.style.display = '';
                  card.style.opacity = '0';
                  setTimeout(function() {
                    card.style.transition = 'opacity 0.25s ease';
                    card.style.opacity = '1';
                  }, 20);
                } else {
                  card.style.display = 'none';
                }
              });

              // Reset scroll to start
              if (track) {
                track.scrollTo({ left: 0, behavior: 'smooth' });
              }
            });
          });
        }
      }

      if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', initKcPostPlugin);
      } else {
        initKcPostPlugin();
      }
    })();
    </script>
    <?php
    return ob_get_clean();
}
add_shortcode( 'kc_post_plugin', 'kc_render_post_plugin_showcase' );
add_shortcode( 'kc_posts', 'kc_render_post_plugin_showcase' );
add_shortcode( 'kc_post_grid', 'kc_render_post_plugin_showcase' );
