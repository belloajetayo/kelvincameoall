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
       HERO — Prestigious Conglomerate Experience with Live Sector Slider
       ==================================================================== -->
  <section class="hp-hero">
    <!-- Ambient Ken Burns Background Slideshow (Authentic Operating Sectors) -->
    <div class="hp-hero-bg-slider" aria-hidden="true">
      <div class="hp-hero-slide active" style="background-image: url('<?php echo esc_url( get_template_directory_uri() . '/assets/photos/resort/exterior.jpg' ); ?>');" data-index="0"></div>
      <div class="hp-hero-slide" style="background-image: url('<?php echo esc_url( get_template_directory_uri() . '/assets/photos/kelvin-filling-station-canopy.jpg' ); ?>');" data-index="1"></div>
      <div class="hp-hero-slide" style="background-image: url('<?php echo esc_url( get_template_directory_uri() . '/assets/photos/cameo-real-estate-luxury.jpg' ); ?>');" data-index="2"></div>
      <div class="hp-hero-slide" style="background-image: url('https://images.unsplash.com/photo-1500937386664-56d1dfef3854?auto=format&fit=crop&w=1600&q=80');" data-index="3"></div>
      <div class="hp-hero-overlay"></div>
    </div>

    <div class="container hp-hero-content-wrap">
      <div class="hp-hero-inner">
        <!-- Live Verified Badge with Animated Pulse Indicator -->
        <div class="hp-hero-badge">
          <span class="hp-pulse-dot" aria-hidden="true"></span>
          <span>RC: 1613032 &mdash; Verified &amp; Active Conglomerate &bull; Nigeria</span>
        </div>

        <h1 class="hp-hero-title">
          <span class="hp-hero-line-1">Honest Fuel. Safe Land.</span><br>
          <span class="hp-hero-line-2">Fresh Food. <span class="hp-title-highlight">Luxurious Weekends.</span></span>
        </h1>

        <p class="hp-hero-desc">
          A diversified Nigerian multi-sector group delivering calibrated petroleum, dispute-free real estate, farm-gate agricultural produce, and premier resort hospitality — built on daily verifiable integrity.
        </p>

        <!-- Interactive 4-Sector Selector Pills -->
        <div class="hp-hero-sectors" role="tablist" aria-label="Operating Sectors">
          <button class="hp-sector-pill active" data-slide="0" type="button" role="tab" aria-selected="true">
            <span class="pill-num">01</span> Resort Hotel &amp; Suites
          </button>
          <button class="hp-sector-pill" data-slide="1" type="button" role="tab" aria-selected="false">
            <span class="pill-num">02</span> Energy &amp; Fuel Stations
          </button>
          <button class="hp-sector-pill" data-slide="2" type="button" role="tab" aria-selected="false">
            <span class="pill-num">03</span> Real Estate &amp; Land
          </button>
          <button class="hp-sector-pill" data-slide="3" type="button" role="tab" aria-selected="false">
            <span class="pill-num">04</span> Commercial Agriculture
          </button>
        </div>

        <div class="hp-hero-actions">
          <a href="https://wa.me/2348055558197?text=Hello%20Kelvin%20Cameo%2C%20I%20would%20like%20to%20speak%20with%20your%20team." target="_blank" rel="noopener" class="btn btn-whatsapp btn-lg">
            <svg viewBox="0 0 24 24" width="18" height="18" fill="currentColor" style="flex-shrink:0;">
              <path d="M12.04 2c-5.46 0-9.91 4.45-9.91 9.91 0 1.75.46 3.45 1.32 4.95L2.05 22l5.25-1.38c1.45.79 3.08 1.21 4.74 1.21 5.46 0 9.91-4.45 9.91-9.91 0-2.65-1.03-5.14-2.9-7.01A9.816 9.816 0 0 0 12.04 2z"/>
            </svg>
            Chat on WhatsApp
          </a>
          <a href="#sectors" class="btn btn-outline-white btn-lg">
            Explore All 4 Divisions &darr;
          </a>
        </div>

        <!-- Micro-Trust Guarantee Strip -->
        <div class="hp-hero-trust-bar">
          <div class="hp-trust-item">
            <svg viewBox="0 0 20 20" fill="currentColor" width="16" height="16"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
            <span>10L = 10L Calibrated Pumps</span>
          </div>
          <div class="hp-trust-item">
            <svg viewBox="0 0 20 20" fill="currentColor" width="16" height="16"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
            <span>C of O Verifiable Land Titles</span>
          </div>
          <div class="hp-trust-item">
            <svg viewBox="0 0 20 20" fill="currentColor" width="16" height="16"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
            <span>24/7 Power Guarantee &bull; 1,000-Seat Hall</span>
          </div>
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
          <div class="hp-stat-icon">
            <svg viewBox="0 0 24 24" width="22" height="22" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="7" width="20" height="14" rx="2" ry="2"></rect><path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"></path></svg>
          </div>
          <div class="hp-stat-val-wrap">
            <span class="hp-stat-number" data-target="4">4</span>
          </div>
          <span class="hp-stat-label">Operating Sectors</span>
        </div>
        <div class="hp-stat">
          <div class="hp-stat-icon">
            <svg viewBox="0 0 24 24" width="22" height="22" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 2v20M21 2v20M12 2v20"></path></svg>
          </div>
          <div class="hp-stat-val-wrap">
            <span class="hp-stat-number" data-target="100">100</span><span class="hp-stat-suffix">%</span>
          </div>
          <span class="hp-stat-label">Calibrated Fuel Pumps</span>
        </div>
        <div class="hp-stat">
          <div class="hp-stat-icon">
            <svg viewBox="0 0 24 24" width="22" height="22" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"></path></svg>
          </div>
          <div class="hp-stat-val-wrap">
            <span class="hp-stat-number" data-target="2500">2,500</span><span class="hp-stat-suffix">+</span>
          </div>
          <span class="hp-stat-label">Hectares in Agriculture</span>
        </div>
        <div class="hp-stat">
          <div class="hp-stat-icon">
            <svg viewBox="0 0 24 24" width="22" height="22" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle></svg>
          </div>
          <div class="hp-stat-val-wrap">
            <span class="hp-stat-number" data-target="1000">1,000</span><span class="hp-stat-suffix">+</span>
          </div>
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
            <h3 class="hp-division-name">Energy &amp; Fuel Stations</h3>
            <p class="hp-division-desc">Digitally calibrated retail fuel stations supplying PMS, AGO, DPK, engine lubricants, and 50-tonne automated LPG skids.</p>
            <ul class="hp-division-highlights">
              <li><svg viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg> 10L = 10L NMDPRA Calibrated Dispensing</li>
              <li><svg viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg> 50-Tonne Automated LPG Cooking Gas Skids</li>
              <li><svg viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg> Bulk AGO Deliveries &amp; Commercial Solar Microgrids</li>
            </ul>
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
            <h3 class="hp-division-name">Real Estate &amp; Land Banking</h3>
            <p class="hp-division-desc">Master-planned gated residential communities, commercial highway parcels, and strategic land banking with verified government titles (C of O).</p>
            <ul class="hp-division-highlights">
              <li><svg viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg> Verifiable C of O &amp; Gazette Titles (Zero-Omonile)</li>
              <li><svg viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg> Gated Residential Layouts &amp; Highway Commercial Plots</li>
              <li><svg viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg> Guaranteed Physical Site Inspections along Abuja Corridor</li>
            </ul>
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
            <h3 class="hp-division-name">Agriculture &amp; Silos</h3>
            <p class="hp-division-desc">2,500+ hectares of mechanized grain farming, 50,000-bird poultry complexes, cattle ranches, and 10,000 MT grain silos.</p>
            <ul class="hp-division-highlights">
              <li><svg viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg> 2,500+ Hectares Mechanized Maize &amp; Soya Farming</li>
              <li><svg viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg> Automated 50,000-Layer Poultry Farm &amp; Feedlots</li>
              <li><svg viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg> 10,000 MT Storage Silos &amp; Corporate Off-Take</li>
            </ul>
            <span class="hp-division-link">Explore Farm Operations &rarr;</span>
          </div>
        </a>

        <!-- Hospitality -->
        <a href="<?php echo kc_url('hospitality'); ?>" class="hp-division-card hp-card-resort">
          <div class="hp-division-img">
            <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/photos/resort/exterior.jpg' ); ?>" alt="Kelvin Cameo Resort Hotel &amp; Suites" loading="lazy">
          </div>
          <div class="hp-division-body">
            <span class="hp-division-tag">Division 04</span>
            <h3 class="hp-division-name">Resort Hotel &amp; Suites</h3>
            <p class="hp-division-desc">Premier luxury oasis along the Abuja corridor — 10 accommodation tiers, swimming pool, and a majestic 1,000-seat banquet hall.</p>
            <ul class="hp-division-highlights">
              <li><svg viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg> 10 Accommodation Tiers (From &#8358;25,000 to &#8358;200,000/night)</li>
              <li><svg viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg> Guaranteed 24/7 Power (Dual Caterpillar Standby + Solar)</li>
              <li><svg viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg> 1,000-Seat Grand Banquet Hall for Weddings &amp; AGMs</li>
            </ul>
            <span class="hp-division-link">Explore Resort &amp; Suites &rarr;</span>
          </div>
        </a>

      </div>
    </div>
  </section>

  <!-- ====================================================================
       STRATEGIC PARTNERS & INSTITUTIONAL ALLIANCES
       ==================================================================== -->
  <section class="partners-strip" aria-label="Institutional Clients and Strategic Alliances">
    <div class="container">
      <div class="partners-strip-title">Institutional Alliances &amp; Trusted Corporate Clients</div>
      <div class="partners-logo-row">
        <div class="partner-logo-item">
          <div class="partner-avatar" style="width:34px; height:34px; border-radius:8px; background:linear-gradient(135deg, #0b4ea2, #04142b); color:#fff; display:flex; align-items:center; justify-content:center; font-weight:800; font-size:0.75rem;">CC</div>
          <div>
            <strong style="display:block; font-size:0.85rem; color:var(--navy-900);">CCCRN Nigeria</strong>
            <span style="font-size:0.7rem; color:var(--slate-500);">Health Research &amp; Retreats Host</span>
          </div>
        </div>

        <div class="partner-logo-item">
          <div class="partner-avatar" style="width:34px; height:34px; border-radius:8px; background:linear-gradient(135deg, #ea580c, #c2410c); color:#fff; display:flex; align-items:center; justify-content:center; font-weight:800; font-size:0.75rem;">NM</div>
          <div>
            <strong style="display:block; font-size:0.85rem; color:var(--navy-900);">NMDPRA Certified</strong>
            <span style="font-size:0.7rem; color:var(--slate-500);">100% Calibrated Retail Skids</span>
          </div>
        </div>

        <div class="partner-logo-item">
          <div class="partner-avatar" style="width:34px; height:34px; border-radius:8px; background:linear-gradient(135deg, #10b981, #047857); color:#fff; display:flex; align-items:center; justify-content:center; font-weight:800; font-size:0.75rem;">AG</div>
          <div>
            <strong style="display:block; font-size:0.85rem; color:var(--navy-900);">Commercial Agro Off-Takers</strong>
            <span style="font-size:0.7rem; color:var(--slate-500);">Direct Farm-Gate Grains &amp; Poultry</span>
          </div>
        </div>

        <div class="partner-logo-item">
          <div class="partner-avatar" style="width:34px; height:34px; border-radius:8px; background:linear-gradient(135deg, #d4af37, #b45309); color:#fff; display:flex; align-items:center; justify-content:center; font-weight:800; font-size:0.75rem;">RC</div>
          <div>
            <strong style="display:block; font-size:0.85rem; color:var(--navy-900);">Corporate Affairs Commission</strong>
            <span style="font-size:0.7rem; color:var(--slate-500);">RC: 1613032 Statutory Compliance</span>
          </div>
        </div>
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

            <div class="founder-photo-halo-wrap">
              <div class="founder-photo-halo">
                <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/photos/director-alh-kamorudeen-oladejo.jpg' ); ?>" alt="Kelvin Cameo - Founder &amp; Group Managing Director" class="founder-photo-img" />
              </div>
              <div class="founder-mini-seal" title="Kelvin Cameo Official Monogram">
                <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/logo-emblem.png' ); ?>" alt="Kelvin Cameo Official Monogram" />
              </div>
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
          <div class="hp-trust-media-inner" style="position:relative; border-radius:var(--radius-lg); overflow:hidden; box-shadow:var(--shadow-xl);">
            <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/photos/fuel-tankers-fleet.jpg' ); ?>" alt="Kelvin Cameo Corporate Heavy Tanker Logistics Fleet" loading="lazy" style="width:100%; height:100%; min-height:360px; object-fit:cover; display:block;">
            <div style="position:absolute; bottom:1.25rem; left:1.25rem; right:1.25rem; background:rgba(4,20,43,0.92); backdrop-filter:blur(10px); -webkit-backdrop-filter:blur(10px); border:1px solid rgba(255,255,255,0.2); padding:1rem 1.25rem; border-radius:var(--radius-md); color:#ffffff;">
              <span class="rc-badge" style="margin-bottom:0.35rem; display:inline-flex;">RC: 1613032</span>
              <div style="font-size:0.875rem; font-weight:700; color:#bad7fc;">Kelvin Cameo Heavy Logistics &amp; Downstream Fleet</div>
              <div style="font-size:0.75rem; color:rgba(255,255,255,0.75); margin-top:2px;">Certified NMDPRA Petroleum Haulage &bull; Operating across Nigeria</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>



  <!-- ====================================================================
       EDITORIAL INSIGHTS & HOSPITALITY GUIDES — SEO & Content Hub
       ==================================================================== -->
  <section class="hp-insights section-padding" id="insights" style="background: var(--sand-50); border-top: 1px solid var(--sand-200); border-bottom: 1px solid var(--sand-200);">
    <div class="container">
      <div class="hp-section-head" style="margin-bottom: 2rem;">
        <span class="badge badge-primary">EDITORIAL GUIDES &amp; HOSPITALITY HUB</span>
        <h2 class="hp-section-title">Knowledge, Transparency &amp; Travel Guides</h2>
        <p class="hp-section-sub">Authoritative reports from our executive desks &mdash; designed for travelers, event organizers, and corporate partners.</p>
      </div>

      <!-- Spotlight Feature: Flagship Guide -->
      <article class="hp-spotlight-feature" data-topic="rooms leisure">
        <div class="hp-spotlight-media">
          <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/photos/resort/exterior.jpg' ); ?>" alt="Kelvin Cameo Resort Front Facade in Suleja" loading="lazy">
          <div class="hp-spotlight-badge-group">
            <span class="hp-spotlight-badge">⭐ FLAGSHIP GUIDE &bull; RANKED #1</span>
            <span class="hp-spotlight-tariff-chip">Suites from ₦25,000/night</span>
          </div>
        </div>
        <div class="hp-spotlight-content">
          <div class="hp-spotlight-meta">
            <span>5 min read</span>
            <span>&bull;</span>
            <span>Kwamba, Suleja (Opposite Suleiman Barau Tech College)</span>
          </div>
          <h3 class="hp-spotlight-title">
            <a href="<?php echo kc_url('best-hotels-in-suleja-abuja-corridor'); ?>">Top 7 Reasons Kelvin Cameo Resort is Ranked the Best Hotel in Suleja</a>
          </h3>
          <p class="hp-spotlight-desc">
            Explore why travelers and corporate executives rate Kelvin Cameo Resort #1 along the Abuja-Kaduna corridor &mdash; featuring 24/7 dual Caterpillar power, crystal swimming pool, luxury suites from &#8358;25,000, and a 1,000-seat grand banquet hall.
          </p>
          <div class="hp-spotlight-amenities">
            <span class="hp-spotlight-pill">⚡ 24/7 Zero Blackouts</span>
            <span class="hp-spotlight-pill">🏊 Crystal Swimming Pool</span>
            <span class="hp-spotlight-pill">🏛️ 1,000-Seat Hall</span>
            <span class="hp-spotlight-pill">🍽️ Fresh Catfish Grill</span>
            <span class="hp-spotlight-pill">🔒 24/7 Armed Security</span>
          </div>
          <div class="hp-spotlight-actions">
            <a href="<?php echo kc_url('best-hotels-in-suleja-abuja-corridor'); ?>" class="btn btn-primary btn-sm">Read Full Guide &rarr;</a>
            <a href="<?php echo kc_url('reserve'); ?>" class="btn btn-outline btn-sm">Book a Suite</a>
          </div>
        </div>
      </article>

      <!-- Advanced Post Plugin & Editorial Showcase -->
      <?php
      if ( function_exists( 'kc_render_post_plugin_showcase' ) ) {
          echo kc_render_post_plugin_showcase( array(
              'layout'         => 'carousel',
              'posts_per_page' => 12,
              'show_filters'   => 'yes',
              'show_switcher'  => 'yes',
          ) );
      }
      ?>

      <!-- Concierge Callout Bar -->
      <div class="hp-insights-concierge-bar">
        <div class="hp-concierge-prompt">
          <div class="hp-concierge-avatar">🛎️</div>
          <div class="hp-concierge-text">
            <h4>Have Questions or Need an Immediate Booking?</h4>
            <p>Our front desk concierge is staffed 24/7 in Kwamba, Suleja (Opposite Suleiman Barau Technical College).</p>
          </div>
        </div>
        <div class="hp-concierge-actions">
          <a href="https://wa.me/2348055558197?text=Hello%20Kelvin%20Cameo%20Resort,%20I%20am%20inquiring%20about%20a%20reservation." target="_blank" rel="noopener" class="btn btn-sm" style="background:#25D366; color:#fff; border-color:#25D366; display:inline-flex; align-items:center; gap:0.4rem; font-weight:700;">
            <svg viewBox="0 0 24 24" width="16" height="16" fill="currentColor"><path d="M12.031 6.172c-3.181 0-5.767 2.586-5.768 5.766-.001 1.298.38 2.27 1.019 3.287l-.711 2.598 2.664-.698c.99.57 1.776.848 2.795.849 3.18 0 5.768-2.587 5.768-5.766.001-3.18-2.585-5.636-5.767-5.636zm3.393 8.163c-.144.405-.837.774-1.17.823-.312.045-.694.062-2.18-.553-1.898-.786-3.125-2.733-3.22-2.859-.094-.126-.763-.984-.763-1.879 0-.895.467-1.336.634-1.517.166-.18.364-.225.485-.225.12 0 .241.002.346.007.11.006.257-.042.402.308.149.362.51 1.244.555 1.335.045.09.075.197.015.318-.06.121-.09.197-.18.303-.09.106-.189.237-.27.318-.09.09-.184.188-.079.369.105.18.468.772 1.004 1.25.688.613 1.269.803 1.449.893.18.09.285.076.39-.045.105-.121.45-.526.57-.706.12-.18.24-.15.405-.09.165.06 1.045.492 1.225.582.18.09.3.135.345.21.045.075.045.436-.099.841z"/></svg>
            WhatsApp Concierge
          </a>
          <a href="<?php echo kc_url('reserve'); ?>" class="btn btn-outline btn-sm" style="color:#fff; border-color:rgba(255,255,255,0.4);">
            Reserve Online
          </a>
          <a href="<?php echo kc_url('banquet-hall'); ?>" class="btn btn-outline btn-sm" style="color:#fde68a; border-color:#fde68a;">
            Check Banquet Dates
          </a>
        </div>
      </div>
    </div>
  </section>

  <!-- Interactive Topic Filtering Script -->
  <script>
  document.addEventListener('DOMContentLoaded', function() {
    var tabs = document.querySelectorAll('.hp-tab-btn');
    var filterables = document.querySelectorAll('.hp-insight-filterable');
    if (!tabs.length || !filterables.length) return;

    tabs.forEach(function(tab) {
      tab.addEventListener('click', function() {
        tabs.forEach(function(t) { t.classList.remove('active'); });
        this.classList.add('active');
        var filter = this.getAttribute('data-filter') || 'all';

        filterables.forEach(function(el) {
          var topic = el.getAttribute('data-topic') || '';
          if (filter === 'all' || topic.indexOf(filter) !== -1) {
            el.style.display = '';
            el.style.opacity = '0';
            setTimeout(function() {
              el.style.transition = 'opacity 0.25s ease';
              el.style.opacity = '1';
            }, 20);
          } else {
            el.style.display = 'none';
          }
        });
      });
    });
  });
  </script>

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
        <span class="rc-badge" style="margin-bottom:1.25rem; display:inline-flex; background:rgba(255,255,255,0.15); border-color:rgba(255,255,255,0.3); color:#ffffff;">RC: 1613032 &bull; Direct Corporate Access</span>
        <h2 class="hp-cta-title">Ready to Partner With Kelvin Cameo?</h2>
        <p class="hp-cta-desc">
          Whether you need bulk calibrated petroleum, dispute-free real estate, farm-gate agricultural supply, or a serene weekend with guaranteed 24/7 power &bull; our executive desks are ready to assist.
        </p>
        <div class="hp-cta-actions">
          <a href="https://wa.me/2348055558197?text=Hello%20Kelvin%20Cameo%2C%20I%20would%20like%20to%20discuss%20a%20booking%20or%20service." target="_blank" rel="noopener" class="btn btn-whatsapp btn-lg">
            <svg viewBox="0 0 24 24" width="18" height="18" fill="currentColor">
              <path d="M12.04 2c-5.46 0-9.91 4.45-9.91 9.91 0 1.75.46 3.45 1.32 4.95L2.05 22l5.25-1.38c1.45.79 3.08 1.21 4.74 1.21 5.46 0 9.91-4.45 9.91-9.91 0-2.65-1.03-5.14-2.9-7.01A9.816 9.816 0 0 0 12.04 2z"/>
            </svg>
            Chat on WhatsApp
          </a>
          <a href="tel:+2348055558197" class="btn btn-outline-white btn-lg">
            <svg viewBox="0 0 24 24" width="16" height="16" fill="none" stroke="currentColor" stroke-width="2">
              <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/>
            </svg>
            +234 805 555 8197
          </a>
          <button class="btn btn-primary btn-lg" data-modal="inquiryModal">
            Partner With Us / RFP &rarr;
          </button>
        </div>
      </div>
    </div>
  </section>

<?php
get_footer();
