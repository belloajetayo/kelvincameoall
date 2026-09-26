<?php
/**
 * Kelvin Cameo Organization (RC: 1613032)
 * Front Page Template — Clean Revamp
 *
 * @package Kelvin_Cameo
 */

get_header();
?>

  <!-- ====================================================================
       HERO — Confident & Minimal
       ==================================================================== -->
  <section class="hp-hero">
    <div class="container">
      <div class="hp-hero-inner">
        <span class="hp-hero-badge">RC: 1613032 &mdash; Verified &amp; Active in Nigeria</span>

        <h1 class="hp-hero-title">
          Honest Fuel. Safe Land.<br>
          Fresh Food. Luxurious Weekends.
        </h1>

        <p class="hp-hero-desc">
          A diversified Nigerian conglomerate delivering calibrated petroleum, dispute-free real estate, farm-gate produce, and uncompromised luxury hospitality — every single day.
        </p>

        <div class="hp-hero-actions">
          <a href="https://wa.me/2348055558197?text=Hello%20Kelvin%20Cameo%2C%20I%20would%20like%20to%20speak%20with%20your%20team." target="_blank" rel="noopener" class="btn btn-whatsapp btn-lg">
            Chat on WhatsApp
          </a>
          <a href="#sectors" class="btn btn-outline-white btn-lg">
            Explore Our Divisions
          </a>
        </div>
      </div>
    </div>
  </section>

  <!-- ====================================================================
       STATS BAR — Compact Horizontal Numbers
       ==================================================================== -->
  <section class="hp-stats-bar">
    <div class="container">
      <div class="hp-stats-row">
        <div class="hp-stat">
          <span class="hp-stat-number" data-target="4">0</span>
          <span class="hp-stat-label">Operating Sectors</span>
        </div>
        <div class="hp-stat">
          <span class="hp-stat-number" data-target="100">0</span><span class="hp-stat-suffix">%</span>
          <span class="hp-stat-label">Calibrated Fuel Pumps</span>
        </div>
        <div class="hp-stat">
          <span class="hp-stat-number" data-target="2500">0</span><span class="hp-stat-suffix">+</span>
          <span class="hp-stat-label">Hectares in Agriculture</span>
        </div>
        <div class="hp-stat">
          <span class="hp-stat-number" data-target="1000">0</span>
          <span class="hp-stat-label">Seat Banquet Hall</span>
        </div>
      </div>
    </div>
  </section>

  <!-- ====================================================================
       DIVISIONS — Clean 2×2 Bento Grid
       ==================================================================== -->
  <section class="hp-divisions" id="sectors">
    <div class="container">
      <div class="hp-section-head">
        <h2 class="hp-section-title">Our Operating Divisions</h2>
        <p class="hp-section-sub">Four specialized sectors delivering end-to-end solutions across energy, property, agriculture, and hospitality.</p>
      </div>

      <div class="hp-divisions-grid">

        <!-- Energy -->
        <a href="<?php echo kc_url('energy'); ?>" class="hp-division-card hp-card-energy">
          <div class="hp-division-img">
            <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/photos/kelvin-filling-station-canopy.jpg' ); ?>" alt="Kelvin Cameo Filling Station" loading="lazy">
          </div>
          <div class="hp-division-body">
            <span class="hp-division-tag">Division 01</span>
            <h3 class="hp-division-name">Energy &amp; Fuel</h3>
            <p class="hp-division-desc">Digitally calibrated retail filling stations supplying PMS, AGO, DPK, engine lubricants, and 50-tonne LPG cooking gas skids.</p>
            <span class="hp-division-link">Explore Energy &rarr;</span>
          </div>
        </a>

        <!-- Real Estate -->
        <a href="<?php echo kc_url('real-estate'); ?>" class="hp-division-card hp-card-estate">
          <div class="hp-division-img">
            <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/photos/cameo-real-estate-luxury.jpg' ); ?>" alt="Kelvin Cameo Real Estate" loading="lazy">
          </div>
          <div class="hp-division-body">
            <span class="hp-division-tag">Division 02</span>
            <h3 class="hp-division-name">Real Estate</h3>
            <p class="hp-division-desc">Gated residential communities, commercial highway parcels, and strategic land banking with verified government titles (C of O).</p>
            <span class="hp-division-link">Explore Properties &rarr;</span>
          </div>
        </a>

        <!-- Agriculture -->
        <a href="<?php echo kc_url('agriculture'); ?>" class="hp-division-card hp-card-agro">
          <div class="hp-division-img">
            <img src="https://images.unsplash.com/photo-1500937386664-56d1dfef3854?auto=format&fit=crop&w=800&q=80" alt="Kelvin Cameo Agriculture" loading="lazy">
          </div>
          <div class="hp-division-body">
            <span class="hp-division-tag">Division 03</span>
            <h3 class="hp-division-name">Agriculture</h3>
            <p class="hp-division-desc">2,500+ hectares of mechanized grain farming, 50,000-bird poultry complexes, cattle ranches, and 10,000 MT grain silos.</p>
            <span class="hp-division-link">Explore Farm Operations &rarr;</span>
          </div>
        </a>

        <!-- Hospitality -->
        <a href="<?php echo kc_url('hospitality'); ?>" class="hp-division-card hp-card-resort">
          <div class="hp-division-img">
            <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/photos/golden-nest-room.jpg' ); ?>" alt="Kelvin Cameo Resort Hotel" loading="lazy">
          </div>
          <div class="hp-division-body">
            <span class="hp-division-tag">Division 04</span>
            <h3 class="hp-division-name">Resort Hotel</h3>
            <p class="hp-division-desc">Premier luxury oasis along the Abuja corridor — 10 accommodation tiers, swimming pool, and a majestic 1,000-seat banquet hall.</p>
            <span class="hp-division-link">Explore Resort &amp; Suites &rarr;</span>
          </div>
        </a>

      </div>
    </div>
  </section>

  <!-- ====================================================================
       MEET OUR FOUNDER & GROUP MANAGING DIRECTOR
       ==================================================================== -->
  <section class="founder-section" id="founder">
    <div class="container">
      <div class="founder-container-inner">
        <!-- Founder Portrait & Emblem Card -->
        <div class="founder-media-wrap">
          <div class="founder-portrait-frame">
            <div class="founder-seal-float">
              <svg viewBox="0 0 24 24" width="14" height="14" fill="currentColor"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
              <span>RC: 1613032</span>
            </div>

            <div class="founder-emblem-halo">
              <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/logo-emblem.png' ); ?>" alt="Kelvin Cameo Official Monogram" />
            </div>

            <h3 class="founder-name-plate">Kelvin Cameo</h3>
            <span class="founder-title-badge">Founder &amp; Group Managing Director</span>
            
            <p class="founder-bio-brief">
              Industrialist, indigenous investor, and chief executive steering Nigeria's fastest-growing multi-sector conglomerate across Energy, Real Estate, Agriculture, and Hospitality.
            </p>

            <div class="founder-stats-strip">
              <div class="founder-stat-item">
                <span class="founder-stat-num text-gradient-gold">4 Sectors</span>
                <span class="founder-stat-lbl">Active Divisions</span>
              </div>
              <div class="founder-stat-item">
                <span class="founder-stat-num text-gradient-gold">100%</span>
                <span class="founder-stat-lbl">Statutory Compliance</span>
              </div>
              <div class="founder-stat-item">
                <span class="founder-stat-num text-gradient-gold">1,000+</span>
                <span class="founder-stat-lbl">Seats Grand Hall</span>
              </div>
              <div class="founder-stat-item">
                <span class="founder-stat-num text-gradient-gold">0 Drama</span>
                <span class="founder-stat-lbl">Zero-Omonile Land</span>
              </div>
            </div>
          </div>
        </div>

        <!-- Founder Narrative & Vision -->
        <div class="founder-content-wrap">
          <span class="founder-eyebrow">Meet Our Founder</span>
          <h2 class="founder-headline">
            Building An Indigenous Conglomerate On <span class="text-gradient-gold">Uncompromising Integrity</span>.
          </h2>

          <p class="founder-narrative">
            Under the visionary leadership of <strong>Kelvin Cameo</strong>, our organization was founded with a singular conviction: that Nigerian enterprise must be anchored on trust, verified quality, and genuine value for everyday citizens. 
          </p>

          <p class="founder-narrative">
            Whether it's ensuring our fuel pumps dispense every single millilitre paid for, securing dispute-free land titles with guaranteed legal backing, producing clean food at farm-gate prices, or offering an uncompromised luxury resort where the power never fails — Kelvin Cameo's hands-on leadership defines our operational excellence.
          </p>

          <!-- Executive Pull Quote -->
          <div class="founder-quote-card">
            <blockquote class="founder-quote-text">
              "True Nigerian enterprise isn't built on shortcuts; it's earned through unyielding integrity, calibrated honesty, and genuine value delivered to every family, traveler, and business that honors us with their trust."
            </blockquote>
            <span class="founder-creed-tag">— Kelvin Cameo &bull; Founder &amp; Group Managing Director</span>
          </div>

          <div class="founder-action-row">
            <a href="<?php echo kc_url('about'); ?>#governance" class="btn-gold-luxury">
              <span>Read Full Executive Profile</span>
              <svg viewBox="0 0 24 24" width="16" height="16" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
            </a>
            <a href="https://wa.me/2348055558197?text=Hello%20Mr.%20Kelvin%20Cameo%2C%20I%20would%20like%20to%20connect%20with%20your%20executive%20office." target="_blank" rel="noopener" class="btn-gold-outline">
              Connect on WhatsApp
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ====================================================================
       TRUST & GOVERNANCE — Clean 2-Column
       ==================================================================== -->
  <section class="hp-trust">
    <div class="container">
      <div class="hp-trust-grid">
        <div class="hp-trust-content">
          <h2 class="hp-section-title">Engineered for Performance,<br>Governed with Integrity</h2>
          <p class="hp-trust-text">
            Sustainable business success is grounded in transparent corporate governance, certified regulatory compliance, and tangible value creation for our clients, partners, and host communities.
          </p>

          <div class="hp-trust-list">
            <div class="hp-trust-item">
              <span class="hp-trust-check"></span>
              <div>
                <strong>Certified Legal Standing (RC: 1613032)</strong>
                <p>Fully registered under the Corporate Affairs Commission with rigorous statutory audits.</p>
              </div>
            </div>
            <div class="hp-trust-item">
              <span class="hp-trust-check"></span>
              <div>
                <strong>Downstream NMDPRA Calibration</strong>
                <p>Precision dispensing across PMS, AGO, DPK, and LPG with zero compromises.</p>
              </div>
            </div>
            <div class="hp-trust-item">
              <span class="hp-trust-check"></span>
              <div>
                <strong>1,500+ Smallholder Outgrowers Empowered</strong>
                <p>Tractor mechanization, input credit, and guaranteed off-take for rural farmers.</p>
              </div>
            </div>
          </div>

          <a href="<?php echo kc_url('about'); ?>" class="btn btn-navy btn-lg">Read Our Corporate Profile</a>
        </div>
        <div class="hp-trust-media">
          <img src="https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?auto=format&fit=crop&w=800&q=80" alt="Corporate Architecture" loading="lazy">
        </div>
      </div>
    </div>
  </section>

  <!-- ====================================================================
       CONGLOMERATE FAST-CRAWL DIRECTORY & SITE INDEX
       ==================================================================== -->
  <section class="hp-site-directory" id="site-directory" aria-label="Kelvin Cameo Conglomerate Sitelinks Directory">
    <div class="container">
      <div class="hp-section-head">
        <span class="directory-eyebrow">
          <svg viewBox="0 0 24 24" width="14" height="14" fill="currentColor"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
          Conglomerate Directory &bull; RC: 1613032
        </span>
        <h2 class="hp-section-title">Explore All Divisions &amp; Official Portals</h2>
        <p class="hp-section-sub">Direct access to the full operating scope of Kelvin Cameo across downstream energy, master-planned property, commercial agriculture, and luxury hospitality.</p>
      </div>

      <div class="directory-grid">
        <!-- Directory Card 1: Hospitality & Resort -->
        <article class="directory-card directory-card-resort" itemscope itemtype="https://schema.org/SiteNavigationElement">
          <div class="directory-top-meta">
            <div class="directory-icon-pill pill-resort">
              <svg viewBox="0 0 24 24" width="16" height="16" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 21h18M3 7v14M21 7v14M6 11h4M14 11h4M6 15h4M14 15h4M9 3h6v4H9z"/></svg>
              <span>Hospitality &bull; Suleja</span>
            </div>
            <span class="directory-num">01</span>
          </div>
          <h3 itemprop="name" class="directory-title">
            <a itemprop="url" href="<?php echo kc_url('hospitality'); ?>">Kelvin Cameo Resort Hotel &amp; Suites</a>
          </h3>
          <p class="directory-desc">
            10 Authentic accommodation classes from &#8358;25,000 to &#8358;180,000/night, 24/7 uninterrupted power guarantee, crystal swimming pool, and 1,000-guest grand banquet hall.
          </p>
          <div class="directory-links-wrap">
            <a href="<?php echo kc_url('hospitality'); ?>#rooms" class="dir-chip">
              <span>View Room Classes &amp; Tariffs</span>
              <svg viewBox="0 0 24 24" width="14" height="14" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
            </a>
            <a href="<?php echo kc_url('hospitality'); ?>#banquet" class="dir-chip">
              <span>1,000-Seat Banquet Hall Rates</span>
              <svg viewBox="0 0 24 24" width="14" height="14" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
            </a>
            <a href="<?php echo kc_url('reserve'); ?>" class="dir-chip dir-chip-highlight">
              <span>Online Room Reservation Desk</span>
              <svg viewBox="0 0 24 24" width="14" height="14" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
            </a>
          </div>
        </article>

        <!-- Directory Card 2: Energy & Petrol Stations -->
        <article class="directory-card directory-card-energy" itemscope itemtype="https://schema.org/SiteNavigationElement">
          <div class="directory-top-meta">
            <div class="directory-icon-pill pill-energy">
              <svg viewBox="0 0 24 24" width="16" height="16" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 22h12M4 9h10M4 22V4a2 2 0 012-2h6a2 2 0 012 2v18M14 13h2a2 2 0 012 2v2a2 2 0 002 2h0a2 2 0 002-2V9.83a2 2 0 00-.59-1.42L19 6"/></svg>
              <span>Downstream Energy</span>
            </div>
            <span class="directory-num">02</span>
          </div>
          <h3 itemprop="name" class="directory-title">
            <a itemprop="url" href="<?php echo kc_url('energy'); ?>">Kelvin Cameo Energy &amp; Fuel Stations</a>
          </h3>
          <p class="directory-desc">
            Modern retail fuel stations delivering certified 10L = 10L pump calibration, 50-tonne automated LPG skids, bulk AGO deliveries, and solar microgrid installations.
          </p>
          <div class="directory-links-wrap">
            <a href="<?php echo kc_url('energy'); ?>#stations" class="dir-chip">
              <span>Retail Filling Station Network</span>
              <svg viewBox="0 0 24 24" width="14" height="14" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
            </a>
            <a href="<?php echo kc_url('energy'); ?>#lpg" class="dir-chip">
              <span>50-Tonne LPG Cooking Gas</span>
              <svg viewBox="0 0 24 24" width="14" height="14" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
            </a>
            <a href="<?php echo kc_url('energy'); ?>#solar" class="dir-chip dir-chip-highlight">
              <span>Commercial Solar Microgrids</span>
              <svg viewBox="0 0 24 24" width="14" height="14" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
            </a>
          </div>
        </article>

        <!-- Directory Card 3: Real Estate & Land -->
        <article class="directory-card directory-card-estate" itemscope itemtype="https://schema.org/SiteNavigationElement">
          <div class="directory-top-meta">
            <div class="directory-icon-pill pill-estate">
              <svg viewBox="0 0 24 24" width="16" height="16" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 9l9-7 9 7v11a2 2 0 01-2 2H5a2 2 0 01-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg>
              <span>Real Estate &bull; C of O</span>
            </div>
            <span class="directory-num">03</span>
          </div>
          <h3 itemprop="name" class="directory-title">
            <a itemprop="url" href="<?php echo kc_url('real-estate'); ?>">Kelvin Cameo Real Estate &amp; Land</a>
          </h3>
          <p class="directory-desc">
            Master-planned gated estates, commercial highway filling station plots, and verifiable C of O / Gazette land banking along Abuja-Suleja economic growth corridor.
          </p>
          <div class="directory-links-wrap">
            <a href="<?php echo kc_url('real-estate'); ?>#residential" class="dir-chip">
              <span>Gated Residential Layouts</span>
              <svg viewBox="0 0 24 24" width="14" height="14" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
            </a>
            <a href="<?php echo kc_url('real-estate'); ?>#commercial" class="dir-chip">
              <span>Highway Commercial Plots</span>
              <svg viewBox="0 0 24 24" width="14" height="14" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
            </a>
            <a href="<?php echo kc_url('real-estate'); ?>#inquire" class="dir-chip dir-chip-highlight">
              <span>Book Physical Site Inspection</span>
              <svg viewBox="0 0 24 24" width="14" height="14" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
            </a>
          </div>
        </article>

        <!-- Directory Card 4: Agriculture & Agro-Allied -->
        <article class="directory-card directory-card-agro" itemscope itemtype="https://schema.org/SiteNavigationElement">
          <div class="directory-top-meta">
            <div class="directory-icon-pill pill-agro">
              <svg viewBox="0 0 24 24" width="16" height="16" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2a10 10 0 0 1 10 10c0 5.523-4.477 10-10 10S2 17.523 2 12A10 10 0 0 1 12 2z"/><path d="M12 6v12M8 10l4-4 4 4"/></svg>
              <span>Commercial Agro</span>
            </div>
            <span class="directory-num">04</span>
          </div>
          <h3 itemprop="name" class="directory-title">
            <a itemprop="url" href="<?php echo kc_url('agriculture'); ?>">Kelvin Cameo Agriculture &amp; Silos</a>
          </h3>
          <p class="directory-desc">
            2,500+ Hectares of mechanized maize &amp; soya farming, automated 50,000-layer poultry egg complex, disease-screened cattle feedlots, and 10,000 MT storage silos.
          </p>
          <div class="directory-links-wrap">
            <a href="<?php echo kc_url('agriculture'); ?>#farming" class="dir-chip">
              <span>Mechanized Grain Plantations</span>
              <svg viewBox="0 0 24 24" width="14" height="14" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
            </a>
            <a href="<?php echo kc_url('agriculture'); ?>#livestock" class="dir-chip">
              <span>Commercial Layer Poultry Farm</span>
              <svg viewBox="0 0 24 24" width="14" height="14" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
            </a>
            <a href="<?php echo kc_url('agriculture'); ?>#offtake" class="dir-chip dir-chip-highlight">
              <span>Corporate Commodity Off-Take</span>
              <svg viewBox="0 0 24 24" width="14" height="14" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
            </a>
          </div>
        </article>

        <!-- Directory Card 5: Corporate Heritage & About -->
        <article class="directory-card directory-card-corp" itemscope itemtype="https://schema.org/SiteNavigationElement">
          <div class="directory-top-meta">
            <div class="directory-icon-pill pill-corp">
              <svg viewBox="0 0 24 24" width="16" height="16" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
              <span>Corporate &bull; CAC Reg</span>
            </div>
            <span class="directory-num">05</span>
          </div>
          <h3 itemprop="name" class="directory-title">
            <a itemprop="url" href="<?php echo kc_url('about'); ?>">Corporate Heritage &amp; Governance</a>
          </h3>
          <p class="directory-desc">
            Incorporated under the Corporate Affairs Commission (RC: 1613032). Read our founding history, executive board profile, and community philanthropic foundation.
          </p>
          <div class="directory-links-wrap">
            <a href="<?php echo kc_url('about'); ?>#governance" class="dir-chip">
              <span>Executive Board &amp; Leadership</span>
              <svg viewBox="0 0 24 24" width="14" height="14" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
            </a>
            <a href="<?php echo kc_url('about'); ?>#foundation" class="dir-chip">
              <span>Kelvin Cameo Foundation (CSR)</span>
              <svg viewBox="0 0 24 24" width="14" height="14" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
            </a>
            <a href="<?php echo kc_url('about'); ?>#vision" class="dir-chip dir-chip-highlight">
              <span>Conglomerate Vision &amp; Creed</span>
              <svg viewBox="0 0 24 24" width="14" height="14" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
            </a>
          </div>
        </article>

        <!-- Directory Card 6: Universal Headquarters & Desk -->
        <article class="directory-card directory-card-contact" itemscope itemtype="https://schema.org/SiteNavigationElement">
          <div class="directory-top-meta">
            <div class="directory-icon-pill pill-contact">
              <svg viewBox="0 0 24 24" width="16" height="16" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
              <span>Universal Desk &bull; 24/7</span>
            </div>
            <span class="directory-num">06</span>
          </div>
          <h3 itemprop="name" class="directory-title">
            <a itemprop="url" href="<?php echo kc_url('contact'); ?>">Contact Headquarters &amp; Desk</a>
          </h3>
          <p class="directory-desc">
            Located along Maje, Minna Road, opposite Technical College in Suleja, Niger State. Reach our corporate reception, order bulk supplies, or request quotes.
          </p>
          <div class="directory-links-wrap">
            <a href="tel:+2348055558197" class="dir-chip">
              <span>Direct Call: +234 805 555 8197</span>
              <svg viewBox="0 0 24 24" width="14" height="14" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
            </a>
            <a href="https://wa.me/2348055558197" target="_blank" rel="noopener" class="dir-chip dir-chip-highlight">
              <span>WhatsApp 24/7 Concierge</span>
              <svg viewBox="0 0 24 24" width="14" height="14" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
            </a>
            <a href="<?php echo kc_url('reception'); ?>" class="dir-chip">
              <span>Hotel Reception Desk Portal</span>
              <svg viewBox="0 0 24 24" width="14" height="14" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
            </a>
          </div>
        </article>
      </div>
    </div>
  </section>

  <!-- ====================================================================
       FAQ — Clean Accordion
       ==================================================================== -->
  <section class="hp-faq">
    <div class="container">
      <div class="hp-section-head">
        <h2 class="hp-section-title">Frequently Asked Questions</h2>
        <p class="hp-section-sub">Straight answers to the questions our customers ask most often.</p>
      </div>

      <div class="hp-faq-list">
        <div class="faq-card open">
          <button type="button" class="faq-question-btn">
            <span>Is the light really 24 hours at Kelvin Cameo Resort?</span>
            <svg class="faq-chevron" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="6 9 12 15 18 9"/></svg>
          </button>
          <div class="faq-answer-panel">
            Yes, 100%. We operate dual synchronized heavy-duty Caterpillar generators supported by an industrial solar inverter microgrid. The air conditioners, hot water showers, and Wi-Fi run uninterrupted day and night.
          </div>
        </div>

        <div class="faq-card">
          <button type="button" class="faq-question-btn">
            <span>How do I verify that your estate land titles are genuine?</span>
            <svg class="faq-chevron" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="6 9 12 15 18 9"/></svg>
          </button>
          <div class="faq-answer-panel">
            We welcome and encourage verification. Before you commit a single naira, we provide the survey plan, layout beacon numbers, and title documents (C of O / Gazette numbers) so your lawyer or surveyor can conduct a search at the Ministry of Lands.
          </div>
        </div>

        <div class="faq-card">
          <button type="button" class="faq-question-btn">
            <span>Can I book the 1,000-Seat Grand Banquet Hall for a wedding or AGM?</span>
            <svg class="faq-chevron" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="6 9 12 15 18 9"/></svg>
          </button>
          <div class="faq-answer-panel">
            Absolutely! Our 1,000-seat grand auditorium is one of the premier event venues along the Abuja corridor. Weekday bookings start at &#8358;850,000 and weekends are &#8358;1,050,000. It comes fully air-conditioned, with two private VIP dressing suites, dedicated generator standby, and parking for 150+ cars.
          </div>
        </div>

        <div class="faq-card">
          <button type="button" class="faq-question-btn">
            <span>How do your filling stations guarantee accurate fuel measurement?</span>
            <svg class="faq-chevron" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="6 9 12 15 18 9"/></svg>
          </button>
          <div class="faq-answer-panel">
            Our pumps are certified by the Nigerian Midstream and Downstream Petroleum Regulatory Authority (NMDPRA). We conduct daily internal 10-Litre and 20-Litre seraphin can tests to ensure the digital readout matches the physical volume exactly.
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ====================================================================
       CTA BANNER — Clean & Confident
       ==================================================================== -->
  <section class="hp-cta">
    <div class="container">
      <div class="hp-cta-inner">
        <h2 class="hp-cta-title">Ready to Experience Kelvin Cameo?</h2>
        <p class="hp-cta-desc">
          Whether you need dependable petrol, titled real estate, nutritious farm produce, or a serene weekend with guaranteed 24/7 power — we are here.
        </p>
        <div class="hp-cta-actions">
          <a href="https://wa.me/2348055558197?text=Hello%20Kelvin%20Cameo%2C%20I%20would%20like%20to%20discuss%20a%20booking%20or%20service." target="_blank" rel="noopener" class="btn btn-whatsapp btn-lg">
            Chat on WhatsApp
          </a>
          <a href="<?php echo kc_url('contact'); ?>" class="btn btn-outline-white btn-lg">
            Contact Us
          </a>
        </div>
      </div>
    </div>
  </section>

<?php
get_footer();
