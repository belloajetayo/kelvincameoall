<?php
/**
 * Kelvin Cameo Organization (RC: 1613032)
 * Header Template
 *
 * @package Kelvin_Cameo
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <!-- Google Tag Manager -->
  <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
  new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
  j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
  'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
  })(window,document,'script','dataLayer','GTM-5SDD8SWV');</script>
  <!-- End Google Tag Manager -->
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" type="image/png" href="<?php echo esc_url( get_template_directory_uri() . '/assets/favicon.png' ); ?>">
  <link rel="apple-touch-icon" href="<?php echo esc_url( get_template_directory_uri() . '/assets/logo-emblem.png' ); ?>">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5SDD8SWV"
  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->
<?php wp_body_open(); ?>

  <!-- Top Utility Bar -->
  <aside class="top-utility-bar" aria-label="Corporate Registration and Quick Contact">
    <div class="container container-wide">
      <div class="utility-left">
        <span class="rc-badge">
          <svg viewBox="0 0 24 24" width="12" height="12" fill="none" stroke="currentColor" stroke-width="2.5">
            <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>
          </svg>
          RC: 1613032
        </span>
        <span class="utility-link">
          <svg viewBox="0 0 24 24" width="13" height="13" fill="none" stroke="currentColor" stroke-width="2">
            <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
            <circle cx="12" cy="10" r="3"></circle>
          </svg>
          Kelvin Cameo • Nigeria
        </span>
      </div>

      <div class="utility-right">
        <a href="tel:+2348055558197" class="utility-link">
          <svg viewBox="0 0 24 24" width="13" height="13" fill="none" stroke="currentColor" stroke-width="2">
            <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
          </svg>
          +234 805 555 8197
        </a>
        <span class="utility-link" style="opacity: 0.3;">|</span>
        <a href="<?php echo kc_url('energy'); ?>" class="utility-link">Energy & Fuel</a>
        <a href="<?php echo kc_url('real-estate'); ?>" class="utility-link">Real Estate</a>
        <a href="<?php echo kc_url('agriculture'); ?>" class="utility-link">Agriculture</a>
        <a href="<?php echo kc_url('hospitality'); ?>" class="utility-link">Resort Hotel</a>
      </div>
    </div>
  </aside>

  <!-- Persistent Site Header -->
  <header class="site-header">
    <div class="container container-wide">
      <nav class="navbar" aria-label="Main Navigation">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="brand-logo-wrap" title="Kelvin Cameo (RC: 1613032)">
          <div class="brand-emblem-badge" aria-label="Kelvin Cameo Brand Emblem">
            <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/logo-emblem.png' ); ?>" alt="Kelvin Cameo Monogram" class="brand-emblem-img" width="46" height="46" />
          </div>
          <div class="brand-text-block">
            <span class="brand-title">KELVIN <span style="color:var(--orange-500);">CAMEO</span></span>
            <span class="brand-subtitle">RC: 1613032 • NIGERIAN MULTI-INDUSTRY</span>
          </div>
        </a>

        <ul class="nav-menu">
          <li class="nav-item">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="nav-link <?php echo ( is_front_page() || is_home() ) ? 'active' : ''; ?>">Home</a>
          </li>

          <!-- Energy Dropdown -->
          <li class="nav-item">
            <a href="<?php echo kc_url('energy'); ?>" class="nav-link <?php echo is_page('energy') ? 'active' : ''; ?>">
              Energy & Fuel
              <svg class="chevron" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                <polyline points="6 9 12 15 18 9"></polyline>
              </svg>
            </a>
            <div class="mega-dropdown">
              <div class="dropdown-header-banner">
                <span class="dropdown-eyebrow">Downstream Petroleum & Clean Energy</span>
                <span class="rc-badge">Division 01</span>
              </div>
              <div class="mega-grid-2">
                <a href="<?php echo kc_url('energy'); ?>#stations" class="mega-link-card">
                  <div class="mega-icon-box">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 2v20M21 2v20M12 2v20"></path></svg>
                  </div>
                  <div class="mega-card-content">
                    <h4>Fuel Retail Stations <span class="mega-badge">PMS · AGO</span></h4>
                    <p>Modern retail filling stations with 24/7 calibrated fuel dispensing.</p>
                  </div>
                </a>
                <a href="<?php echo kc_url('energy'); ?>#lpg" class="mega-link-card">
                  <div class="mega-icon-box">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="9"></circle><path d="M12 3v18"></path></svg>
                  </div>
                  <div class="mega-card-content">
                    <h4>LPG Gas Refilling Plants</h4>
                    <p>Clean cooking gas refilling plants and industrial cylinder logistics.</p>
                  </div>
                </a>
                <a href="<?php echo kc_url('energy'); ?>#solar" class="mega-link-card">
                  <div class="mega-icon-box">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="5"></circle><line x1="12" y1="1" x2="12" y2="3"></line></svg>
                  </div>
                  <div class="mega-card-content">
                    <h4>Solar Microgrids</h4>
                    <p>Industrial solar and commercial hybrid power installations.</p>
                  </div>
                </a>
                <a href="<?php echo kc_url('energy'); ?>#dealership" class="mega-link-card">
                  <div class="mega-icon-box">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="7" width="20" height="14" rx="2" ry="2"></rect><path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"></path></svg>
                  </div>
                  <div class="mega-card-content">
                    <h4>Franchise & Dealership</h4>
                    <p>Partner with Kelvin Cameo on station co-branding and bulk supply.</p>
                  </div>
                </a>
              </div>
            </div>
          </li>

          <!-- Real Estate Dropdown -->
          <li class="nav-item">
            <a href="<?php echo kc_url('real-estate'); ?>" class="nav-link <?php echo is_page('real-estate') ? 'active' : ''; ?>">
              Real Estate
              <svg class="chevron" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                <polyline points="6 9 12 15 18 9"></polyline>
              </svg>
            </a>
            <div class="mega-dropdown">
              <div class="dropdown-header-banner">
                <span class="dropdown-eyebrow">Prime Land & Infrastructure Development</span>
                <span class="rc-badge">Division 02</span>
              </div>
              <div class="mega-grid-2">
                <a href="<?php echo kc_url('real-estate'); ?>#residential" class="mega-link-card">
                  <div class="mega-icon-box">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path></svg>
                  </div>
                  <div class="mega-card-content">
                    <h4>Gated Residential Estates</h4>
                    <p>Master-planned residential schemes with paved access and drainage.</p>
                  </div>
                </a>
                <a href="<?php echo kc_url('real-estate'); ?>#commercial" class="mega-link-card">
                  <div class="mega-icon-box">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="3" width="18" height="18" rx="2"></rect></svg>
                  </div>
                  <div class="mega-card-content">
                    <h4>Commercial Parcels</h4>
                    <p>Highway frontages ideal for filling stations, retail hubs, and logistics.</p>
                  </div>
                </a>
                <a href="<?php echo kc_url('real-estate'); ?>#banking" class="mega-link-card">
                  <div class="mega-icon-box">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="23 6 13.5 15.5 8.5 10.5 1 18"></polyline></svg>
                  </div>
                  <div class="mega-card-content">
                    <h4>Land Banking Programs</h4>
                    <p>High-yield land appreciation acquisitions along growth corridors.</p>
                  </div>
                </a>
                <a href="<?php echo kc_url('real-estate'); ?>#inquire" class="mega-link-card">
                  <div class="mega-icon-box">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path></svg>
                  </div>
                  <div class="mega-card-content">
                    <h4>Book Site Inspection</h4>
                    <p>Schedule guided layout visits with our verified survey team.</p>
                  </div>
                </a>
              </div>
            </div>
          </li>

          <!-- Agriculture Dropdown -->
          <li class="nav-item">
            <a href="<?php echo kc_url('agriculture'); ?>" class="nav-link <?php echo is_page('agriculture') ? 'active' : ''; ?>">
              Agriculture
              <svg class="chevron" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                <polyline points="6 9 12 15 18 9"></polyline>
              </svg>
            </a>
            <div class="mega-dropdown">
              <div class="dropdown-header-banner">
                <span class="dropdown-eyebrow">Integrated Farming & Agro-Allied Processing</span>
                <span class="rc-badge">Division 03</span>
              </div>
              <div class="mega-grid-2">
                <a href="<?php echo kc_url('agriculture'); ?>#farming" class="mega-link-card">
                  <div class="mega-icon-box">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"></path></svg>
                  </div>
                  <div class="mega-card-content">
                    <h4>Commercial Crops & Grains</h4>
                    <p>High-yield grains, maize, soya beans, and staples cultivation.</p>
                  </div>
                </a>
                <a href="<?php echo kc_url('agriculture'); ?>#livestock" class="mega-link-card">
                  <div class="mega-icon-box">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"></circle><path d="M8 14s1.5 2 4 2 4-2 4-2"></path></svg>
                  </div>
                  <div class="mega-card-content">
                    <h4>Livestock & Poultry</h4>
                    <p>Modern poultry farms, cattle ranching, and farm-fresh meat production.</p>
                  </div>
                </a>
                <a href="<?php echo kc_url('agriculture'); ?>#processing" class="mega-link-card">
                  <div class="mega-icon-box">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 7h-7L10 4H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2z"></path></svg>
                  </div>
                  <div class="mega-card-content">
                    <h4>Agro-Processing & Cold Chain</h4>
                    <p>Processing, hygienic bagging, and distribution to wholesale off-takers.</p>
                  </div>
                </a>
                <a href="<?php echo kc_url('agriculture'); ?>#offtake" class="mega-link-card">
                  <div class="mega-icon-box">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="12" y1="1" x2="12" y2="23"></line><path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path></svg>
                  </div>
                  <div class="mega-card-content">
                    <h4>Bulk Supply Contracts</h4>
                    <p>Direct farm-to-hotel and corporate institutional food supply agreements.</p>
                  </div>
                </a>
              </div>
            </div>
          </li>

          <!-- Hospitality Dropdown -->
          <li class="nav-item">
            <a href="<?php echo kc_url('hospitality'); ?>" class="nav-link <?php echo is_page('hospitality') ? 'active' : ''; ?>">
              Resort Hotel
              <svg class="chevron" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                <polyline points="6 9 12 15 18 9"></polyline>
              </svg>
            </a>
            <div class="mega-dropdown">
              <div class="dropdown-header-banner">
                <span class="dropdown-eyebrow">Kelvin Cameo Resort Hotel • Suleja (Abuja Corridor)</span>
                <span class="rc-badge">Division 04</span>
              </div>
              <div class="mega-grid-2">
                <a href="<?php echo kc_url('hospitality'); ?>#rooms" class="mega-link-card">
                  <div class="mega-icon-box">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M2 4v16M2 8h18a2 2 0 0 1 2 2v10M2 17h20M6 8v9"></path></svg>
                  </div>
                  <div class="mega-card-content">
                    <h4>Rooms & Suites <span class="mega-badge">From ₦25,000</span></h4>
                    <p>10 room tiers across Main Hotel & The Annex with Paystack checkout.</p>
                  </div>
                </a>
                <a href="<?php echo kc_url('hospitality'); ?>#banquet" class="mega-link-card">
                  <div class="mega-icon-box">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle></svg>
                  </div>
                  <div class="mega-card-content">
                    <h4>1,000-Seat Grand Banquet Hall</h4>
                    <p>State-of-the-art event hall (₦1.05M full / ₦850k à la carte) with power.</p>
                  </div>
                </a>
                <a href="<?php echo kc_url('hospitality'); ?>#amenities" class="mega-link-card">
                  <div class="mega-icon-box">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"></circle><path d="M8 12h8"></path></svg>
                  </div>
                  <div class="mega-card-content">
                    <h4>Swimming Pool & Lounge</h4>
                    <p>₦3,000 pool access, VIP sports lounge, bar, and outdoor bush bar.</p>
                  </div>
                </a>
                <a href="<?php echo kc_url('hospitality'); ?>#booking" class="mega-link-card">
                  <div class="mega-icon-box">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line></svg>
                  </div>
                  <div class="mega-card-content">
                    <h4>Instant Online Reservation</h4>
                    <p>Direct WhatsApp booking engine and secure payment confirmation.</p>
                  </div>
                </a>
              </div>
            </div>
          </li>

          <li class="nav-item">
            <a href="<?php echo kc_url('about'); ?>" class="nav-link <?php echo is_page('about') ? 'active' : ''; ?>">About</a>
          </li>
          <li class="nav-item">
            <a href="<?php echo kc_url('contact'); ?>" class="nav-link <?php echo is_page('contact') ? 'active' : ''; ?>">Contact</a>
          </li>
        </ul>

        <div class="nav-actions">
          <a href="<?php echo kc_url('hospitality'); ?>#rooms" class="btn btn-outline-white btn-sm hide-mobile">
            Room Rates
          </a>
          <button class="btn btn-primary btn-sm" data-modal="inquiryModal">
            Partner With Us
          </button>
          <button class="mobile-toggle" aria-label="Toggle navigation menu">
            <span></span>
            <span></span>
            <span></span>
          </button>
        </div>
      </nav>
    </div>
  </header>
