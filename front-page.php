<?php
/**
 * Kelvin Cameo Organization (RC: 1613032)
 * Front Page Template — Impeccable Compact Edition
 *
 * @package Kelvin_Cameo
 */

get_header();
?>

<div class="kc-home-layout">
  
  <!-- HERO: Compact & Confident -->
  <section class="kc-section hero-section">
    <div class="kc-container">
      <div class="hero-grid">
        <div class="hero-content">
          <div class="hero-badge">
            <span class="pulse-dot"></span> RC: 1613032 &bull; Active
          </div>
          <h1 class="hero-headline">
            Honest Fuel. Safe Land.<br>
            Fresh Food. Luxurious Weekends.
          </h1>
          <p class="hero-subtext">
            A diversified Nigerian conglomerate delivering calibrated petroleum, dispute-free real estate, farm-gate produce, and uncompromised luxury hospitality — every single day.
          </p>
          <div class="hero-actions">
            <a href="https://wa.me/2348055558197" target="_blank" rel="noopener" class="kc-btn kc-btn-primary">
              Executive WhatsApp Desk
            </a>
            <a href="#divisions" class="kc-btn kc-btn-outline">
              View Our Sectors
            </a>
          </div>
        </div>
        
        <div class="hero-stats-bento">
          <div class="stat-cell">
            <span class="stat-num">04</span>
            <span class="stat-lbl">Operating Sectors</span>
          </div>
          <div class="stat-cell">
            <span class="stat-num">100%</span>
            <span class="stat-lbl">Pump Calibration</span>
          </div>
          <div class="stat-cell">
            <span class="stat-num">2.5k</span>
            <span class="stat-lbl">Hectares Farmed</span>
          </div>
          <div class="stat-cell">
            <span class="stat-num">1k</span>
            <span class="stat-lbl">Seat Banquet Hall</span>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- DIVISIONS: Asymmetric Bento Grid -->
  <section id="divisions" class="kc-section divisions-section">
    <div class="kc-container">
      <div class="section-header">
        <h2 class="section-title">Conglomerate Divisions</h2>
        <p class="section-desc">Four specialized sectors engineered for performance and governed with integrity.</p>
      </div>

      <div class="bento-grid">
        <!-- Energy (Large Span) -->
        <a href="<?php echo kc_url('energy'); ?>" class="bento-card bento-energy">
          <div class="bento-img-wrap">
            <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/photos/kelvin-filling-station-canopy.jpg' ); ?>" alt="Energy" loading="lazy">
          </div>
          <div class="bento-content">
            <span class="bento-tag">Div 01</span>
            <h3 class="bento-title">Energy &amp; Fuel</h3>
            <p class="bento-desc">Digitally calibrated retail stations supplying PMS, AGO, DPK, and 50-tonne LPG skids.</p>
          </div>
        </a>

        <!-- Real Estate (Tall Span) -->
        <a href="<?php echo kc_url('real-estate'); ?>" class="bento-card bento-estate">
          <div class="bento-img-wrap">
            <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/photos/cameo-real-estate-luxury.jpg' ); ?>" alt="Real Estate" loading="lazy">
          </div>
          <div class="bento-content">
            <span class="bento-tag">Div 02</span>
            <h3 class="bento-title">Real Estate</h3>
            <p class="bento-desc">Gated communities &amp; strategic land banking with verified C of O.</p>
          </div>
        </a>

        <!-- Agriculture (Small Span) -->
        <a href="<?php echo kc_url('agriculture'); ?>" class="bento-card bento-agro">
          <div class="bento-img-wrap">
            <img src="https://images.unsplash.com/photo-1500937386664-56d1dfef3854?auto=format&fit=crop&w=800&q=80" alt="Agriculture" loading="lazy">
          </div>
          <div class="bento-content">
            <span class="bento-tag">Div 03</span>
            <h3 class="bento-title">Agriculture</h3>
            <p class="bento-desc">Mechanized farming &amp; 10,000 MT silos.</p>
          </div>
        </a>

        <!-- Hospitality (Small Span) -->
        <a href="<?php echo kc_url('hospitality'); ?>" class="bento-card bento-resort">
          <div class="bento-img-wrap">
            <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/photos/golden-nest-room.jpg' ); ?>" alt="Hospitality" loading="lazy">
          </div>
          <div class="bento-content">
            <span class="bento-tag">Div 04</span>
            <h3 class="bento-title">Resort Hotel</h3>
            <p class="bento-desc">Premier luxury oasis with 24/7 power.</p>
          </div>
        </a>
      </div>
    </div>
  </section>

  <!-- FOUNDER PROFILE: Compact & Executive -->
  <section id="founder" class="kc-section founder-section">
    <div class="kc-container">
      <div class="founder-compact-grid">
        <div class="founder-photo-box">
          <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/photos/chairman-forbes-portrait.jpg' ); ?>" alt="Alhaji Kamarudeen Oladejo - Chairman" class="founder-img">
        </div>
        <div class="founder-text-box">
          <span class="kc-eyebrow">Executive Leadership</span>
          <h2 class="founder-name">Alhaji Kamarudeen Oladejo</h2>
          <p class="founder-title">Asiwaju of Owu Kingdom &bull; Chairman / CEO, Kelvin Cameo</p>
          <div class="founder-quote">
            <p>"True Nigerian enterprise isn't built on shortcuts; it's earned through unyielding integrity, calibrated honesty, and genuine value delivered to every family and business that honors us with their trust."</p>
          </div>
          <div class="founder-actions">
             <a href="<?php echo kc_url('about'); ?>#governance" class="kc-link-arrow">Read Executive Profile &rarr;</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- SITE DIRECTORY (For Google Search Console Deep Crawling) -->
  <section class="kc-section directory-section" aria-label="Sitelinks Directory">
    <div class="kc-container">
      <div class="section-header">
        <h2 class="section-title">Corporate Directory</h2>
        <p class="section-desc">Direct access portals to all Kelvin Cameo services.</p>
      </div>
      
      <div class="dir-grid">
        <article class="dir-item" itemscope itemtype="https://schema.org/SiteNavigationElement">
          <h4 itemprop="name"><a itemprop="url" href="<?php echo kc_url('hospitality'); ?>">Hospitality &amp; Resort</a></h4>
          <p>Book luxury suites and the 1,000-seat banquet hall in Suleja.</p>
        </article>
        <article class="dir-item" itemscope itemtype="https://schema.org/SiteNavigationElement">
          <h4 itemprop="name"><a itemprop="url" href="<?php echo kc_url('energy'); ?>">Downstream Energy</a></h4>
          <p>Find calibrated filling stations and 50-tonne LPG skids.</p>
        </article>
        <article class="dir-item" itemscope itemtype="https://schema.org/SiteNavigationElement">
          <h4 itemprop="name"><a itemprop="url" href="<?php echo kc_url('real-estate'); ?>">Real Estate &amp; Lands</a></h4>
          <p>Secure C of O titled lands and commercial plots.</p>
        </article>
        <article class="dir-item" itemscope itemtype="https://schema.org/SiteNavigationElement">
          <h4 itemprop="name"><a itemprop="url" href="<?php echo kc_url('agriculture'); ?>">Agriculture Operations</a></h4>
          <p>Mechanized farming, poultry, and commodity off-take.</p>
        </article>
        <article class="dir-item" itemscope itemtype="https://schema.org/SiteNavigationElement">
          <h4 itemprop="name"><a itemprop="url" href="<?php echo kc_url('about'); ?>">Corporate Profile</a></h4>
          <p>Board of directors, compliance, and CSR foundation.</p>
        </article>
        <article class="dir-item" itemscope itemtype="https://schema.org/SiteNavigationElement">
          <h4 itemprop="name"><a itemprop="url" href="<?php echo kc_url('contact'); ?>">Help Desk &amp; Contact</a></h4>
          <p>24/7 support, headquarters map, and inquiry forms.</p>
        </article>
      </div>
    </div>
  </section>

</div>

<?php
get_footer();
