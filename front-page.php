<?php
/**
 * Kelvin Cameo Organization (RC: 1613032)
 * Front Page Template
 *
 * @package Kelvin_Cameo
 */

get_header();
?>

  <!-- ========================================================================
       CONVERSATIONAL SKY BLUE HERO (Dribbble-Grade Executive Presentation)
       ======================================================================== -->
  <section class="page-hero hero-estate" style="min-height: 82vh; display: flex; align-items: center; padding: 6.5rem 0 5rem; position: relative;">
    <div class="container">
      <div class="page-hero-inner" style="max-width: 880px;">
        <div class="breadcrumb-row">
          <span class="rc-badge" style="background: rgba(255, 255, 255, 0.2); color: #ffffff; border-color: rgba(255, 255, 255, 0.4);">
            🟢 VERIFIED & ACTIVE IN NIGERIA • RC: 1613032
          </span>
        </div>

        <h1 class="page-hero-title" style="font-size: clamp(2.3rem, 4.4vw, 3.85rem); line-height: 1.15; margin-bottom: 1.35rem; color: #ffffff;">
          Honest Fuel. Safe Land. Fresh Food. Luxurious Weekends.
        </h1>

        <p class="page-hero-desc" style="font-size: 1.15rem; line-height: 1.75; color: #e0f2fe; margin-bottom: 2.25rem;">
          Let's be completely real: you want fuel that actually fills your tank without pump tricks, land you can build on without <em>"omonile"</em> drama, fresh farm food at fair prices, and a resort hotel where the light never cuts out mid-shower. That is exactly what <strong>Kelvin Cameo</strong> delivers every single day across Nigeria.
        </p>

        <div style="display:flex; gap:1.15rem; flex-wrap:wrap; margin-bottom: 2.5rem;">
          <a href="#interactive-picker" class="btn btn-primary btn-lg" style="background: linear-gradient(135deg, #0ea5e9 0%, #38bdf8 100%); color: #082f49; font-weight: 800; box-shadow: 0 10px 25px rgba(2, 132, 199, 0.35);">
            Pick What You Need Today ↓
          </a>
          <a href="https://wa.me/2348055558197?text=Hello%20Kelvin%20Cameo%2C%20I%20would%20like%20to%20speak%20with%20your%20team." target="_blank" rel="noopener" class="btn btn-whatsapp btn-lg">
            Chat on WhatsApp
          </a>
          <button type="button" class="btn btn-outline-white btn-lg" data-open-modal="inquiry">
            Submit Corporate RFP
          </button>
        </div>

        <!-- Quick Proof Strip -->
        <div style="display:flex; gap:1.75rem; flex-wrap:wrap; padding-top:1.5rem; border-top:1px solid rgba(255, 255, 255, 0.2); font-size:0.875rem; color:#f0f9ff;">
          <div style="display:flex; align-items:center; gap:0.5rem;">
            <span style="color:#f59e0b; font-weight:900;">✓</span> 100% Calibrated Fuel Pumps
          </div>
          <div style="display:flex; align-items:center; gap:0.5rem;">
            <span style="color:#f59e0b; font-weight:900;">✓</span> Registered C of O Land Titles
          </div>
          <div style="display:flex; align-items:center; gap:0.5rem;">
            <span style="color:#f59e0b; font-weight:900;">✓</span> 24/7 Guaranteed Resort Power & AC
          </div>
          <div style="display:flex; align-items:center; gap:0.5rem;">
            <span style="color:#f59e0b; font-weight:900;">✓</span> 50,000-Bird Fresh Eggs Farm
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ========================================================================
       DRIBBLE INTERACTIVE EXPERIENCE: "WHAT CAN WE DO FOR YOU?"
       ======================================================================== -->
  <section class="experience-picker-section" id="interactive-picker">
    <div class="container">
      <div class="section-head" style="text-align: center; max-width: 780px; margin: 0 auto 1rem;">
        <span class="exp-badge-eyebrow">Interactive Sector Switcher</span>
        <h2 class="section-title">What can we help you with today?</h2>
        <p class="section-subtitle">
          Click any division below to see our direct real-talk commitments, transparent pricing, and instant contact lines.
        </p>
      </div>

      <!-- Segmented Tabs Row -->
      <div class="picker-tabs-row" role="tablist">
        <button type="button" class="exp-tab-pill active" data-sector="energy" role="tab">
          <span class="pill-icon">⛽</span> Fuel & Cooking Gas
        </button>
        <button type="button" class="exp-tab-pill" data-sector="estate" role="tab">
          <span class="pill-icon">🏡</span> Land & Properties
        </button>
        <button type="button" class="exp-tab-pill" data-sector="agro" role="tab">
          <span class="pill-icon">🌾</span> Farm Produce & Silos
        </button>
        <button type="button" class="exp-tab-pill" data-sector="resort" role="tab">
          <span class="pill-icon">🏨</span> Resort Hotel & Grand Hall
        </button>
      </div>

      <!-- Live Interactive Showcase Panel -->
      <div class="exp-showcase-panel">
        <div class="exp-left-col">
          <span class="exp-badge-eyebrow" id="expBadge">Division 01 • Energy & Filling Stations</span>
          <h3 class="exp-headline" id="expHeadline">Honest, 100% Calibrated Fuel. No Meter Games.</h3>
          <p class="exp-real-talk" id="expRealTalk">
            Ever driven away from a filling station feeling like your gauge barely moved? We despise pump tampering. At Kelvin Cameo stations, our digital dispensers are certified and strictly calibrated. 10 Litres is 10 Litres—every single time.
          </p>

          <div class="exp-perks-list" id="expPerksList">
            <div class="exp-perk-item">
              <span class="exp-perk-check">✓</span>
              <span>Certified PMS (Petrol) & AGO (Automotive Diesel)</span>
            </div>
            <div class="exp-perk-item">
              <span class="exp-perk-check">✓</span>
              <span>Digital accurate calibration with zero pump tampering</span>
            </div>
            <div class="exp-perk-item">
              <span class="exp-perk-check">✓</span>
              <span>Clean cooking gas (LPG) refill skids on-site</span>
            </div>
            <div class="exp-perk-item">
              <span class="exp-perk-check">✓</span>
              <span>Dedicated fleet fueling & corporate accounts</span>
            </div>
          </div>

          <div class="exp-cta-actions">
            <a href="<?php echo kc_url('energy'); ?>" class="btn btn-primary" id="expCtaBtn">Visit Energy Division →</a>
            <a href="https://wa.me/2348055558197?text=Hello%20Kelvin%20Cameo%2C%20I%20would%20like%20to%20inquire%20about%20your%20fuel%20stations%20and%20petroleum%20supply." target="_blank" rel="noopener" class="btn btn-whatsapp" id="expWhatsappBtn">
              Chat on WhatsApp
            </a>
          </div>
        </div>

        <div class="exp-preview-card">
          <div class="exp-preview-media">
            <img src="https://images.unsplash.com/photo-1545459720-aac8509eb02c?auto=format&fit=crop&w=800&q=80" alt="Kelvin Cameo Station Preview" id="expPreviewImg">
          </div>
          <div class="exp-price-badge-row">
            <div>
              <span class="exp-price-label" id="expPriceLabel">Availability</span>
              <div class="exp-price-val" id="expPriceVal">24/7 Retail Stations</div>
            </div>
            <span class="rc-badge">RC: 1613032</span>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ========================================================================
       CONVERSATIONAL "REAL-TALK" GUARANTEES SECTION
       ======================================================================== -->
  <section class="real-talk-section">
    <div class="container">
      <div class="section-head" style="text-align: center; max-width: 760px; margin: 0 auto;">
        <span class="section-badge" style="background: #e0f2fe; color: #0284c7;">The Kelvin Cameo Standard</span>
        <h2 class="section-title">Why Doing Business With Us Feels Different</h2>
        <p class="section-subtitle">
          We built this business by treating customers the way we would want our own families treated. Here are our four non-negotiable promises to you.
        </p>
      </div>

      <div class="real-talk-grid">
        <!-- Promise 1 -->
        <article class="real-talk-card">
          <div class="real-talk-icon-wrap">⛽</div>
          <h3 class="real-talk-title">10 Litres Means 10 Litres</h3>
          <p class="real-talk-desc">
            We inspect and calibrate our digital meters constantly. When you buy petrol, diesel, or cooking gas from us, you get every drop you paid for. No tricks, no excuses.
          </p>
          <span class="real-talk-tag">100% Meter Accuracy</span>
        </article>

        <!-- Promise 2 -->
        <article class="real-talk-card">
          <div class="real-talk-icon-wrap">🏡</div>
          <h3 class="real-talk-title">Zero "Omonile" Drama</h3>
          <p class="real-talk-desc">
            Bring your trusted surveyor. Bring your family lawyer. We verify every plot through the official lands registry (C of O / Gazette) before we ever offer it for sale.
          </p>
          <span class="real-talk-tag">Verified Land Titles</span>
        </article>

        <!-- Promise 3 -->
        <article class="real-talk-card">
          <div class="real-talk-icon-wrap">💡</div>
          <h3 class="real-talk-title">The Light Stays On 24/7</h3>
          <p class="real-talk-desc">
            Nigeria's power grid does what it likes, but our resort hotel doesn't. Heavy-duty industrial generators backed by solar ensure your AC stays freezing cold around the clock.
          </p>
          <span class="real-talk-tag">Guaranteed Power & AC</span>
        </article>

        <!-- Promise 4 -->
        <article class="real-talk-card">
          <div class="real-talk-icon-wrap">🌾</div>
          <h3 class="real-talk-title">From Our Soil to Your Table</h3>
          <p class="real-talk-desc">
            Fresh crates of eggs from 50,000 layer birds, healthy cattle, and grain silos. We eliminate greedy middlemen so families and food businesses get honest farm-gate rates.
          </p>
          <span class="real-talk-tag">Direct Farm Produce</span>
        </article>
      </div>
    </div>
  </section>

  <!-- ========================================================================
       THE 4 OPERATING SECTORS (Clean, High-Contrast Dribbble Mega-Cards)
       ======================================================================== -->
  <section class="section-padding" id="sectors" style="background:var(--white);">
    <div class="container">
      <div class="section-head" style="text-align: center; max-width: 760px; margin: 0 auto 3rem;">
        <span class="section-badge" style="background: rgba(242,92,5,0.15); color: var(--orange-600);">Corporate Divisions</span>
        <h2 class="section-title">Built for Scale, Rooted in Excellence</h2>
        <p class="section-subtitle">
          Our four specialized operating divisions deliver end-to-end solutions powering local commerce, family security, food systems, and leisure.
        </p>
      </div>

      <div class="sectors-mega-grid">
        <!-- 1. Energy & Filling Stations Card -->
        <article class="sector-mega-card card-energy">
          <div class="sector-card-media">
            <img src="https://images.unsplash.com/photo-1545459720-aac8509eb02c?auto=format&fit=crop&w=1000&q=80" alt="Kelvin Cameo Energy Filling Station" loading="lazy">
            <span class="sector-pill-badge badge-energy">Division 01 • Energy & Fuel</span>
          </div>
          <div class="sector-card-body">
            <div>
              <h3 class="sector-card-title">Kelvin Cameo Energy</h3>
              <p class="sector-card-desc">
                Downstream petroleum distribution through modern, digitally calibrated retail filling stations supplying PMS, AGO (Diesel), DPK, high-grade engine lubricants, and 50-tonne LPG cooking gas skids.
              </p>
              <div class="sector-features-chips">
                <span class="feature-chip">PMS & AGO Retail</span>
                <span class="feature-chip">50-Tonne LPG Skids</span>
                <span class="feature-chip">Engine Lubricants</span>
                <span class="feature-chip">Solar Microgrids</span>
                <span class="feature-chip">Station Franchising</span>
              </div>
            </div>

            <div style="display:flex; justify-content:space-between; align-items:center; padding-top:1.5rem; border-top:1px solid var(--slate-100);">
              <a href="<?php echo kc_url('energy'); ?>" class="learn-more-link" style="color:var(--energy-orange); font-weight: 700; display: inline-flex; align-items: center; gap: 0.35rem;">
                Explore Energy Division
                <svg viewBox="0 0 24 24" width="16" height="16" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
              </a>
              <a href="<?php echo kc_url('energy'); ?>#dealership" class="btn btn-energy btn-sm">Franchise RFP</a>
            </div>
          </div>
        </article>

        <!-- 2. Real Estate & Infrastructure Card -->
        <article class="sector-mega-card card-estate">
          <div class="sector-card-media">
            <img src="https://images.unsplash.com/photo-1600596542815-ffad4c1539a9?auto=format&fit=crop&w=1000&q=80" alt="Kelvin Cameo Real Estate Developments" loading="lazy">
            <span class="sector-pill-badge badge-estate">Division 02 • Real Estate</span>
          </div>
          <div class="sector-card-body">
            <div>
              <h3 class="sector-card-title">Kelvin Cameo Real Estate</h3>
              <p class="sector-card-desc">
                Master-planned gated residential communities, commercial highway parcels ideal for filling stations, and high-yield strategic land banking schemes backed by verified government titles (C of O / Gazette).
              </p>
              <div class="sector-features-chips">
                <span class="feature-chip">Gated Smart Estates</span>
                <span class="feature-chip">Highway Filling Plots</span>
                <span class="feature-chip">Verifiable C of O</span>
                <span class="feature-chip">Land Banking</span>
                <span class="feature-chip">Paved Civil Access</span>
              </div>
            </div>

            <div style="display:flex; justify-content:space-between; align-items:center; padding-top:1.5rem; border-top:1px solid var(--slate-100);">
              <a href="<?php echo kc_url('real-estate'); ?>" class="learn-more-link" style="color:var(--estate-gold); font-weight: 700; display: inline-flex; align-items: center; gap: 0.35rem;">
                Explore Properties
                <svg viewBox="0 0 24 24" width="16" height="16" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
              </a>
              <a href="<?php echo kc_url('real-estate'); ?>#inquire" class="btn btn-estate btn-sm">Book Inspection</a>
            </div>
          </div>
        </article>

        <!-- 3. Agriculture & Agro-Allied Card -->
        <article class="sector-mega-card card-agro">
          <div class="sector-card-media">
            <img src="https://images.unsplash.com/photo-1500937386664-56d1dfef3854?auto=format&fit=crop&w=1000&q=80" alt="Kelvin Cameo Commercial Agriculture" loading="lazy">
            <span class="sector-pill-badge badge-agro">Division 03 • Agriculture</span>
          </div>
          <div class="sector-card-body">
            <div>
              <h3 class="sector-card-title">Kelvin Cameo Agriculture</h3>
              <p class="sector-card-desc">
                Powering national food security through 2,500+ hectares of mechanized grain farming, automated commercial poultry battery complexes (50,000+ birds), cattle ranches, 10,000 MT silos, and outgrower partnerships.
              </p>
              <div class="sector-features-chips">
                <span class="feature-chip">2,500+ Hectares</span>
                <span class="feature-chip">50,000+ Poultry Birds</span>
                <span class="feature-chip">10,000 MT Silos</span>
                <span class="feature-chip">Cattle Feedlots</span>
                <span class="feature-chip">Outgrower Scheme</span>
              </div>
            </div>

            <div style="display:flex; justify-content:space-between; align-items:center; padding-top:1.5rem; border-top:1px solid var(--slate-100);">
              <a href="<?php echo kc_url('agriculture'); ?>" class="learn-more-link" style="color:var(--agro-emerald); font-weight: 700; display: inline-flex; align-items: center; gap: 0.35rem;">
                Explore Farm Operations
                <svg viewBox="0 0 24 24" width="16" height="16" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
              </a>
              <a href="<?php echo kc_url('agriculture'); ?>#supply-rfp" class="btn btn-agro btn-sm">Produce Off-Take</a>
            </div>
          </div>
        </article>

        <!-- 4. Hospitality & Resort Hotel Card -->
        <article class="sector-mega-card card-resort">
          <div class="sector-card-media">
            <img src="https://images.unsplash.com/photo-1566073771259-6a8506099945?auto=format&fit=crop&w=1000&q=80" alt="Kelvin Cameo Resort Hotel Suleja" loading="lazy">
            <span class="sector-pill-badge badge-resort">Division 04 • Hospitality</span>
          </div>
          <div class="sector-card-body">
            <div>
              <h3 class="sector-card-title">Kelvin Cameo Resort Hotel</h3>
              <p class="sector-card-desc">
                Premier luxury oasis in Suleja along the Abuja Capital Corridor. Features two branches (Main Hotel & The Annex), 10 authentic accommodation tiers (₦25,000–₦180,000), swimming pool, and our majestic <strong>1,000-seat banquet hall</strong>.
              </p>
              <div class="sector-features-chips">
                <span class="feature-chip">Main Hotel & The Annex</span>
                <span class="feature-chip">Rooms From ₦25,000</span>
                <span class="feature-chip">1,000-Seat Banquet Hall</span>
                <span class="feature-chip">Swimming Pool (₦3,000)</span>
                <span class="feature-chip">Direct Paystack Checkout</span>
              </div>
            </div>

            <div style="display:flex; justify-content:space-between; align-items:center; padding-top:1.5rem; border-top:1px solid var(--slate-100);">
              <a href="<?php echo kc_url('hospitality'); ?>" class="learn-more-link" style="color:var(--orange-500); font-weight: 700; display: inline-flex; align-items: center; gap: 0.35rem;">
                Explore Resort & Suites
                <svg viewBox="0 0 24 24" width="16" height="16" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
              </a>
              <a href="<?php echo kc_url('hospitality'); ?>#rooms" class="btn btn-primary btn-sm">Reserve Rooms</a>
            </div>
          </div>
        </article>
      </div>
    </div>
  </section>

  <!-- ========================================================================
       CONGLOMERATE MILESTONES (Clean Counters)
       ======================================================================== -->
  <section class="stats-section" style="padding: 4.5rem 0;">
    <div class="container">
      <div class="stats-grid">
        <div class="stat-card">
          <div class="stat-number-wrap">
            <span class="stat-number" data-target="4">0</span>
          </div>
          <span class="stat-label">Core Economic Sectors</span>
          <span class="stat-subtext">Energy, Real Estate, Agriculture, Hospitality</span>
        </div>

        <div class="stat-card">
          <div class="stat-number-wrap">
            <span class="stat-number" data-target="1000">0</span>
          </div>
          <span class="stat-label">Banquet Auditorium Capacity</span>
          <span class="stat-subtext">Grand celebrations, weddings & corporate AGMs</span>
        </div>

        <div class="stat-card">
          <div class="stat-number-wrap">
            <span class="stat-number" data-target="2500">0</span>
            <span class="stat-suffix">+</span>
          </div>
          <span class="stat-label">Hectares in Agriculture</span>
          <span class="stat-subtext">Commercial grains, poultry & cattle ranches</span>
        </div>

        <div class="stat-card">
          <div class="stat-number-wrap">
            <span class="stat-number" data-target="100">0</span>
            <span class="stat-suffix">%</span>
          </div>
          <span class="stat-label">Regulatory Compliance</span>
          <span class="stat-subtext">Operating under Nigerian registration RC: 1613032</span>
        </div>
      </div>
    </div>
  </section>

  <!-- ========================================================================
       EXECUTIVE VALUE PROPOSITION (Clean & Professional 2-Column)
       ======================================================================== -->
  <section class="section-padding" style="background:var(--sand-50); border-top: 1px solid var(--sand-200);">
    <div class="container">
      <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 4rem; align-items: center;">
        <div>
          <span class="section-badge" style="background: rgba(15,76,129,0.15); color: var(--resort-sapphire);">Institutional Integrity</span>
          <h2 class="section-title" style="margin-top: 0.5rem;">Engineered for Performance, Governed with Integrity</h2>
          <p style="color: var(--slate-600); line-height: 1.75; font-size: 1.05rem; margin-bottom: 1.5rem;">
            At Kelvin Cameo, we believe sustainable business success is grounded in transparent corporate governance, certified regulatory compliance, and tangible value creation for our clients, partners, and host communities.
          </p>
          <div style="display: flex; flex-direction: column; gap: 1.25rem; margin-bottom: 2rem;">
            <div style="display: flex; align-items: flex-start; gap: 1rem;">
              <div style="width: 32px; height: 32px; border-radius: 50%; background: var(--orange-500); color: var(--white); display: flex; align-items: center; justify-content: center; font-weight: 800; flex-shrink: 0;">✓</div>
              <div>
                <strong style="color: var(--navy-900); font-size: 1.05rem;">Certified Legal Standing (RC: 1613032)</strong>
                <p style="font-size: 0.875rem; color: var(--slate-600);">Fully registered under the Corporate Affairs Commission (CAC) with rigorous statutory audits.</p>
              </div>
            </div>
            <div style="display: flex; align-items: flex-start; gap: 1rem;">
              <div style="width: 32px; height: 32px; border-radius: 50%; background: var(--energy-orange); color: var(--white); display: flex; align-items: center; justify-content: center; font-weight: 800; flex-shrink: 0;">✓</div>
              <div>
                <strong style="color: var(--navy-900); font-size: 1.05rem;">Downstream NMDPRA Calibration</strong>
                <p style="font-size: 0.875rem; color: var(--slate-600);">Uncompromising precision dispensing across PMS, AGO, DPK, and LPG plants with zero compromises.</p>
              </div>
            </div>
            <div style="display: flex; align-items: flex-start; gap: 1rem;">
              <div style="width: 32px; height: 32px; border-radius: 50%; background: var(--agro-emerald); color: var(--white); display: flex; align-items: center; justify-content: center; font-weight: 800; flex-shrink: 0;">✓</div>
              <div>
                <strong style="color: var(--navy-900); font-size: 1.05rem;">Empowering 1,500+ Smallholder Outgrowers</strong>
                <p style="font-size: 0.875rem; color: var(--slate-600);">Driving rural agricultural empowerment through tractor mechanization, input credit, and guaranteed off-take.</p>
              </div>
            </div>
          </div>
          <a href="<?php echo kc_url('about'); ?>" class="btn btn-navy btn-lg">Read Our Corporate Profile</a>
        </div>
        <div>
          <img src="https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?auto=format&fit=crop&w=1000&q=80" alt="Kelvin Cameo Corporate Architecture" style="width: 100%; height: 480px; object-fit: cover; border-radius: var(--radius-xl); box-shadow: var(--shadow-xl); border: 1px solid var(--slate-200);" loading="lazy">
        </div>
      </div>
    </div>
  </section>

  <!-- ========================================================================
       STRATEGIC PARTNERS & INSTITUTIONAL CLIENTS
       ======================================================================== -->
  <section class="partners-section" id="partners">
    <div class="container">
      <div class="section-head" style="text-align: center; max-width: 780px; margin: 0 auto 3rem;">
        <span class="section-badge" style="background: rgba(242,92,5,0.15); color: var(--orange-600);">Strategic Alliances</span>
        <h2 class="section-title">Trusted by Leading Healthcare, Financial & Regulatory Partners</h2>
        <p class="section-subtitle">
          From national healthcare research bodies and enterprise conglomerates to federal regulators and agribusiness off-takers, Kelvin Cameo partners with reputable institutions across Nigeria.
        </p>
      </div>

      <!-- Quick Logo Strip -->
      <div class="partners-logo-row" style="margin-bottom: 3.5rem;">
        <div class="partner-logo-item">
          <div class="partner-logo-icon" style="background: rgba(15,76,129,0.12); color: var(--resort-sapphire);">
            CC
          </div>
          <div class="partner-logo-text">
            <span class="partner-logo-name">CCCRN Nigeria</span>
            <span class="partner-logo-sub">Clinical Research & Health NGO</span>
          </div>
        </div>

        <div class="partner-logo-item">
          <div class="partner-logo-icon" style="background: rgba(201,154,69,0.15); color: var(--estate-gold);">
            IMK
          </div>
          <div class="partner-logo-text">
            <span class="partner-logo-name">IMKash Group</span>
            <span class="partner-logo-sub">Enterprise & Capital Alliance</span>
          </div>
        </div>

        <div class="partner-logo-item">
          <div class="partner-logo-icon" style="background: rgba(242,92,5,0.15); color: var(--energy-orange);">
            NM
          </div>
          <div class="partner-logo-text">
            <span class="partner-logo-name">NMDPRA</span>
            <span class="partner-logo-sub">Midstream & Downstream Authority</span>
          </div>
        </div>

        <div class="partner-logo-item">
          <div class="partner-logo-icon" style="background: rgba(16,185,129,0.15); color: var(--agro-emerald);">
            RED
          </div>
          <div class="partner-logo-text">
            <span class="partner-logo-name">REDAN</span>
            <span class="partner-logo-sub">Real Estate Developers Association</span>
          </div>
        </div>

        <div class="partner-logo-item">
          <div class="partner-logo-icon" style="background: rgba(16,185,129,0.15); color: var(--agro-emerald);">
            BOA
          </div>
          <div class="partner-logo-text">
            <span class="partner-logo-name">Bank of Agriculture</span>
            <span class="partner-logo-sub">Agro Credit & Off-Take</span>
          </div>
        </div>
      </div>

      <!-- Detailed Partner Cards Grid -->
      <div class="partners-cards-grid">
        <!-- Partner 1: CCCRN -->
        <article class="partner-card">
          <div>
            <div class="partner-card-header">
              <div class="partner-card-brand">
                <div class="partner-avatar" style="background: linear-gradient(135deg, #0f4c81, #0a2540); color: var(--white);">
                  CC
                </div>
                <div>
                  <h3 class="partner-card-title">CCCRN</h3>
                  <span class="partner-card-sector">Healthcare Research & Conferences</span>
                </div>
              </div>
              <span class="rc-badge" style="font-size:0.65rem;">Hospitality Client</span>
            </div>
            <p class="partner-card-desc">
              Centre for Clinical Care & Clinical Research Nigeria (CCCRN) partners with Kelvin Cameo Resort Hotel to host high-level clinical health workshops, regional medical symposia, and executive retreat accommodations.
            </p>
          </div>
          <div class="partner-card-tags">
            <span class="partner-tag">1,000-Seat Banquet Hall</span>
            <span class="partner-tag">Executive Suites</span>
            <span class="partner-tag">Medical Summits</span>
          </div>
        </article>

        <!-- Partner 2: IMKash Group -->
        <article class="partner-card">
          <div>
            <div class="partner-card-header">
              <div class="partner-card-brand">
                <div class="partner-avatar" style="background: linear-gradient(135deg, #c99a45, #7a5814); color: var(--white);">
                  IMK
                </div>
                <div>
                  <h3 class="partner-card-title">IMKash Group</h3>
                  <span class="partner-card-sector">Enterprise & Investment Alliance</span>
                </div>
              </div>
              <span class="rc-badge" style="font-size:0.65rem;">Conglomerate Partner</span>
            </div>
            <p class="partner-card-desc">
              A diversified corporate capital and conglomerate partner collaborating with Kelvin Cameo on multi-sector expansion, commercial infrastructure development, strategic investments, and executive best practices.
            </p>
          </div>
          <div class="partner-card-tags">
            <span class="partner-tag">Strategic Capital</span>
            <span class="partner-tag">Real Estate Expansion</span>
            <span class="partner-tag">Energy Logistics</span>
          </div>
        </article>

        <!-- Partner 3: NMDPRA Compliance -->
        <article class="partner-card">
          <div>
            <div class="partner-card-header">
              <div class="partner-card-brand">
                <div class="partner-avatar" style="background: linear-gradient(135deg, #ea580c, #9a3412); color: var(--white);">
                  NM
                </div>
                <div>
                  <h3 class="partner-card-title">NMDPRA</h3>
                  <span class="partner-card-sector">Downstream Petroleum Authority</span>
                </div>
              </div>
              <span class="rc-badge" style="font-size:0.65rem;">Statutory Authority</span>
            </div>
            <p class="partner-card-desc">
              Statutory regulatory alliance with the Nigerian Midstream and Downstream Petroleum Regulatory Authority ensuring full calibration accuracy, safety protocols, and retail licensing across all Kelvin Cameo Energy stations.
            </p>
          </div>
          <div class="partner-card-tags">
            <span class="partner-tag">PMS & AGO Dispensing</span>
            <span class="partner-tag">LPG Skid Licensing</span>
            <span class="partner-tag">Safety Standards</span>
          </div>
        </article>

        <!-- Partner 4: REDAN -->
        <article class="partner-card">
          <div>
            <div class="partner-card-header">
              <div class="partner-card-brand">
                <div class="partner-avatar" style="background: linear-gradient(135deg, #dfb25e, #a87820); color: var(--white);">
                  RE
                </div>
                <div>
                  <h3 class="partner-card-title">REDAN</h3>
                  <span class="partner-card-sector">Real Estate Developers Association</span>
                </div>
              </div>
              <span class="rc-badge" style="font-size:0.65rem;">Industry Body</span>
            </div>
            <p class="partner-card-desc">
              Real Estate Developers Association of Nigeria affiliate ensuring all Kelvin Cameo Real Estate layouts, residential communities, and commercial highway plots strictly conform to approved urban engineering standards.
            </p>
          </div>
          <div class="partner-card-tags">
            <span class="partner-tag">Verified Titles (C of O)</span>
            <span class="partner-tag">Master-Planned Layouts</span>
            <span class="partner-tag">Highway Commercial</span>
          </div>
        </article>

        <!-- Partner 5: Bank of Agriculture & Off-Takers -->
        <article class="partner-card">
          <div>
            <div class="partner-card-header">
              <div class="partner-card-brand">
                <div class="partner-avatar" style="background: linear-gradient(135deg, #059669, #064e3b); color: var(--white);">
                  BOA
                </div>
                <div>
                  <h3 class="partner-card-title">Bank of Agriculture</h3>
                  <span class="partner-card-sector">Agribusiness & Off-Take Alliance</span>
                </div>
              </div>
              <span class="rc-badge" style="font-size:0.65rem;">Agro Network</span>
            </div>
            <p class="partner-card-desc">
              Institutional agricultural financing and commercial off-take partnerships enabling 2,500+ hectares of crop farming, modern storage silos, and input subsidies for 1,500+ rural outgrowers in host communities.
            </p>
          </div>
          <div class="partner-card-tags">
            <span class="partner-tag">Mechanized Tractorization</span>
            <span class="partner-tag">Grain Silo Reserves</span>
            <span class="partner-tag">Outgrower Scheme</span>
          </div>
        </article>

        <!-- Partner 6: Commercial Banks & Corporate Clients -->
        <article class="partner-card">
          <div>
            <div class="partner-card-header">
              <div class="partner-card-brand">
                <div class="partner-avatar" style="background: linear-gradient(135deg, #1d4f8a, #040d1a); color: var(--white);">
                  CB
                </div>
                <div>
                  <h3 class="partner-card-title">Corporate Clients</h3>
                  <span class="partner-card-sector">Banking, FMCG & Government Summits</span>
                </div>
              </div>
              <span class="rc-badge" style="font-size:0.65rem;">Banquet & Stays</span>
            </div>
            <p class="partner-card-desc">
              Tier-1 financial institutions, federal agencies, and FMCG brands partnering with Kelvin Cameo for corporate executive accommodation, regional AGMs, product launches, and secure transit hospitality along the Abuja corridor.
            </p>
          </div>
          <div class="partner-card-tags">
            <span class="partner-tag">Corporate AGMs</span>
            <span class="partner-tag">VIP Delegations</span>
            <span class="partner-tag">24/7 Power & Security</span>
          </div>
        </article>
      </div>
    </div>
  </section>

  <!-- ========================================================================
       DRIBBLE INTERACTIVE CONCIERGE ESTIMATOR
       ======================================================================== -->
  <section class="section-padding" style="background: #ffffff;">
    <div class="container">
      <div class="interactive-concierge-box">
        <div class="concierge-grid">
          <div>
            <span class="rc-badge" style="background: rgba(255, 255, 255, 0.2); color: #ffffff; border-color: rgba(255, 255, 255, 0.4); margin-bottom: 1.25rem;">
              Interactive Pricing Guide
            </span>
            <h2 style="font-family: var(--font-display); font-size: clamp(1.8rem, 3vw, 2.5rem); font-weight: 800; color: #ffffff; line-height: 1.25; margin-bottom: 1rem;">
              Get Instant Pricing & Next Steps
            </h2>
            <p style="color: #e0f2fe; line-height: 1.7; font-size: 1rem; margin-bottom: 1.5rem;">
              Select what you are looking to do. We believe in total upfront clarity with zero hidden surprises.
            </p>

            <div class="concierge-chip-row">
              <button type="button" class="concierge-chip-btn active" data-option="room">
                <span>🏨 Book a Resort Room / Suite</span>
                <span>From ₦25,000 →</span>
              </button>
              <button type="button" class="concierge-chip-btn" data-option="wedding">
                <span>🎉 1,000-Seat Grand Banquet Hall</span>
                <span>From ₦850,000 →</span>
              </button>
              <button type="button" class="concierge-chip-btn" data-option="land">
                <span>🏡 Buy Verified Land / Plots</span>
                <span>From ₦3.5M →</span>
              </button>
              <button type="button" class="concierge-chip-btn" data-option="fuel">
                <span>⛽ Bulk Fuel Off-Take & Fleet Fueling</span>
                <span>Depot Rates →</span>
              </button>
              <button type="button" class="concierge-chip-btn" data-option="farm">
                <span>🌾 Wholesale Eggs & Grains</span>
                <span>Farm-Gate →</span>
              </button>
            </div>
          </div>

          <div>
            <div class="concierge-result-card">
              <span class="rc-badge" style="margin-bottom:0.75rem; display:inline-flex; background:#e0f2fe; color:#0284c7; border-color:#bae6fd;">Estimated Package</span>
              <h3 id="conciergeTitle" style="font-family:var(--font-display); font-size:1.4rem; font-weight:800; color:#0c4a6e; margin-bottom:0.4rem;">
                Resort Room / Executive Suite
              </h3>
              <div id="conciergePrice" style="font-family:var(--font-display); font-size:1.75rem; font-weight:900; color:#0284c7; margin-bottom:1.25rem;">
                From ₦25,000 / night
              </div>

              <div style="border-top:1px solid #e2e8f0; padding-top:1rem; margin-bottom:1.5rem;">
                <strong style="font-size:0.8rem; text-transform:uppercase; letter-spacing:0.06em; color:#64748b; display:block; margin-bottom:0.75rem;">What is Included:</strong>
                <ul id="conciergeList" style="list-style:none; padding:0; margin:0;">
                  <li style="display:flex; align-items:flex-start; gap:0.6rem; font-size:0.875rem; color:#334155; margin-bottom:0.5rem;">
                    <span style="color:#0284c7; font-weight:800;">✓</span>
                    <span>24/7 Guaranteed Power (Solar + Industrial Gen)</span>
                  </li>
                  <li style="display:flex; align-items:flex-start; gap:0.6rem; font-size:0.875rem; color:#334155; margin-bottom:0.5rem;">
                    <span style="color:#0284c7; font-weight:800;">✓</span>
                    <span>Freezing cold split air conditioning & hot shower</span>
                  </li>
                  <li style="display:flex; align-items:flex-start; gap:0.6rem; font-size:0.875rem; color:#334155; margin-bottom:0.5rem;">
                    <span style="color:#0284c7; font-weight:800;">✓</span>
                    <span>High-speed Wi-Fi & pristine swimming pool access</span>
                  </li>
                  <li style="display:flex; align-items:flex-start; gap:0.6rem; font-size:0.875rem; color:#334155; margin-bottom:0.5rem;">
                    <span style="color:#0284c7; font-weight:800;">✓</span>
                    <span>Secure, guarded premises with ample parking</span>
                  </li>
                </ul>
              </div>

              <div style="display:flex; flex-direction:column; gap:0.75rem;">
                <a href="https://wa.me/2348055558197?text=Hello%20Kelvin%20Cameo%2C%20I%20would%20like%20to%20book%20a%20room%20at%20your%20Resort%20Hotel." target="_blank" rel="noopener" id="conciergeWhatsapp" class="btn btn-whatsapp btn-lg" style="width:100%;">
                  Talk Directly on WhatsApp
                </a>
                <button type="button" class="btn btn-primary btn-sm" data-open-modal="inquiry" style="width:100%;">
                  Submit Official RFP Form
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ========================================================================
       HUMAN CONVERSATIONAL FAQ ACCORDION
       ======================================================================== -->
  <section class="faq-section">
    <div class="container">
      <div class="section-head" style="text-align: center; max-width: 740px; margin: 0 auto;">
        <span class="section-badge" style="background: #e0f2fe; color: #0284c7;">Real Answers to Real Questions</span>
        <h2 class="section-title">Everything You'd Ask Over a Cup of Coffee</h2>
        <p class="section-subtitle">
          No corporate evasion. Here are straight answers to the questions our customers ask us most often.
        </p>
      </div>

      <div class="faq-list-wrap">
        <div class="faq-card open">
          <button type="button" class="faq-question-btn">
            <span>Is the light really 24 hours at Kelvin Cameo Resort?</span>
            <svg class="faq-chevron" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="6 9 12 15 18 9"/></svg>
          </button>
          <div class="faq-answer-panel">
            Yes, 100%. We understand how frustrating power cuts are. We operate dual synchronized heavy-duty Caterpillar generators supported by an industrial solar inverter microgrid. The air conditioners, hot water showers, and Wi-Fi run uninterrupted day and night.
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
            Absolutely! Our 1,000-seat grand auditorium is one of the premier event venues along the Abuja corridor. Weekday bookings start at ₦850,000 and Saturdays/Sundays are ₦1,050,000. It comes fully air-conditioned, with two private VIP dressing suites, dedicated generator standby, and parking for 150+ cars.
          </div>
        </div>

        <div class="faq-card">
          <button type="button" class="faq-question-btn">
            <span>Can I buy table eggs or grain in bulk directly from your farm?</span>
            <svg class="faq-chevron" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="6 9 12 15 18 9"/></svg>
          </button>
          <div class="faq-answer-panel">
            Yes. Our commercial poultry farm produces thousands of fresh crates daily, and our 10,000 MT silos store clean grains (maize, sorghum, soya). Wholesalers, supermarkets, bakeries, and feed millers can contract directly with us at farm-gate prices.
          </div>
        </div>

        <div class="faq-card">
          <button type="button" class="faq-question-btn">
            <span>How do your filling stations guarantee accurate fuel measurement?</span>
            <svg class="faq-chevron" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="6 9 12 15 18 9"/></svg>
          </button>
          <div class="faq-answer-panel">
            Our pumps are certified by the Nigerian Midstream and Downstream Petroleum Regulatory Authority (NMDPRA). We also conduct daily internal 10-Litre and 20-Litre seraphin can tests to ensure that the digital readout matches the physical volume down to the exact millilitre.
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ========================================================================
       SKY BLUE HUMAN CTA BANNER
       ======================================================================== -->
  <section class="cta-banner-section" style="background: linear-gradient(135deg, #0369a1 0%, #0284c7 50%, #0ea5e9 100%);">
    <div class="container">
      <div class="cta-banner-inner">
        <span class="rc-badge" style="margin-bottom:1.5rem; display:inline-flex; background:rgba(255,255,255,0.2); color:#ffffff; border-color:rgba(255,255,255,0.4);">
          RC: 1613032 • REAL VALUE FOR EVERY NAIRA
        </span>
        <h2 style="color:#ffffff;">Ready to Experience Kelvin Cameo?</h2>
        <p style="color:#e0f2fe; max-width:680px; margin:0 auto 2rem;">
          Whether you need dependable petrol, titled real estate, nutritious farm produce, or a serene weekend with guaranteed 24/7 power, we are here to serve you.
        </p>

        <div class="cta-btns">
          <a href="https://wa.me/2348055558197?text=Hello%20Kelvin%20Cameo%2C%20I%20would%20like%20to%20discuss%20a%20booking%20or%20service." target="_blank" rel="noopener" class="btn btn-whatsapp btn-lg">
            Chat on WhatsApp (+234 805 555 8197)
          </a>
          <button type="button" class="btn btn-outline-white btn-lg" data-open-modal="inquiry">
            Submit Corporate RFP
          </button>
        </div>
      </div>
    </div>
  </section>

<?php
get_footer();
