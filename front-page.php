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
            <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/photos/golden-nest-room.jpg' ); ?>" alt="Kelvin Cameo Resort Hotel" loading="lazy">
          </div>
          <div class="hp-division-body">
            <span class="hp-division-tag">Division 04</span>
            <h3 class="hp-division-name">Resort Hotel &amp; Suites</h3>
            <p class="hp-division-desc">Premier luxury oasis along the Abuja corridor — 10 accommodation tiers, swimming pool, and a majestic 1,000-seat banquet hall.</p>
            <ul class="hp-division-highlights">
              <li><svg viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg> 10 Accommodation Tiers (From &#8358;25,000 to &#8358;180,000/night)</li>
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
