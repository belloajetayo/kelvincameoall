<?php
/**
 * Template Name: Energy & Fuel
 * Description: Downstream Petroleum Retail Stations, LPG Gas Skids, Solar & Franchise RFP.
 *
 * @package Kelvin_Cameo
 */

get_header();
?>

  <!-- Hero Section -->
  <section class="page-hero hero-energy">
    <div class="container">
      <div class="page-hero-inner">
        <div class="breadcrumb-row">
          <a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a>
          <span>/</span>
          <span>Operating Sectors</span>
          <span>/</span>
          <span style="color:var(--energy-amber);">Energy & Filling Stations</span>
        </div>

        <h1 class="page-hero-title">
          Powering Nigeria with <span class="text-gradient-energy">Reliable Fuel Stations</span>, Clean Gas & Renewable Microgrids.
        </h1>

        <p class="page-hero-desc">
          <strong>Kelvin Cameo Energy</strong> operates downstream retail petroleum stations, bulk fuel haulage, LPG cooking gas distribution, and clean industrial solar installations. Built upon transparent volume metrics, uninterrupted supply, and exceptional customer service.
        </p>

        <div style="display:flex; gap:1.25rem; flex-wrap:wrap;">
          <a href="#stations" class="btn btn-energy btn-lg">Explore Retail Outlets</a>
          <a href="#dealership" class="btn btn-outline-white btn-lg">Station Franchise & Wholesale</a>
        </div>
      </div>
    </div>
  </section>

  <!-- Key Operational Numbers -->
  <div class="container" style="margin-top:-2.5rem; position:relative; z-index:20;">
    <div class="fuel-specs-bar" style="margin-top:0;">
      <div class="fuel-spec-item">
        <h5>100% Calibrated</h5>
        <p>Digitally certified fuel pumps guaranteeing accurate metric delivery.</p>
      </div>
      <div class="fuel-spec-item">
        <h5>24/7 Power Backup</h5>
        <p>Solar and automated generator power ensuring stations never stop dispensing.</p>
      </div>
      <div class="fuel-spec-item">
        <h5>Clean LPG Skids</h5>
        <p>Certified household and commercial cooking gas refilling plants.</p>
      </div>
      <div class="fuel-spec-item">
        <h5>Fleet Card Billing</h5>
        <p>Automated fuel expense cards for corporate and haulage vehicle fleets.</p>
      </div>
    </div>
  </div>

  <!-- Capabilities Section -->
  <section class="section-padding" id="stations" style="background:var(--sand-50);">
    <div class="container">
      <div class="section-head">
        <span class="section-badge" style="background:rgba(234,88,12,0.15); color:var(--energy-orange);">Core Energy Operations</span>
        <h2 class="section-title">Downstream Petroleum & Renewable Solutions</h2>
        <p class="section-subtitle">
          From the highway fuel stops powering daily commutes to solar microgrids powering regional agro-farms, Cameo Energy delivers reliability.
        </p>
      </div>

      <div class="capabilities-grid">
        <!-- 1. Retail Fuel Dispensing -->
        <div class="capability-card">
          <div class="capability-icon-wrap icon-energy">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 2v20M21 2v20M12 2v20"></path></svg>
          </div>
          <h4>Retail Petroleum Stations</h4>
          <p>
            Multi-island modern filling stations dispensing PMS (Petrol), AGO (Diesel), and DPK (Kerosene) with automated digital nozzles, clean restrooms, and well-stocked convenience marts.
          </p>
        </div>

        <!-- 2. LPG Cooking Gas Plants -->
        <div class="capability-card" id="lpg">
          <div class="capability-icon-wrap icon-energy">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"></circle><path d="M12 6v12"></path></svg>
          </div>
          <h4>LPG Cooking Gas Plants</h4>
          <p>
            Certified Liquefied Petroleum Gas refill skid stations equipped with precision electronic scales, emergency shutoff valves, and safe cylinder re-certification.
          </p>
        </div>

        <!-- 3. Lubricants & Automotive Care -->
        <div class="capability-card">
          <div class="capability-icon-wrap icon-energy">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2a10 10 0 1 0 10 10H12V2z"></path></svg>
          </div>
          <h4>Cameo Engine Lubricants</h4>
          <p>
            High-performance engine oils, heavy-duty diesel engine oils (15W-40, 20W-50), hydraulic fluids, and gear lubricants engineered to extend engine longevity under tropical conditions.
          </p>
        </div>

        <!-- 4. Bulk Fuel Supply & Haulage -->
        <div class="capability-card">
          <div class="capability-icon-wrap icon-energy">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="1" y="3" width="15" height="13"></rect><polygon points="16 8 20 8 23 11 23 16 16 16 16 8"></polygon></svg>
          </div>
          <h4>Bulk Petroleum Haulage</h4>
          <p>
            A dedicated fleet of 33,000-liter and 45,000-liter fuel tankers supplying telecommunication towers, manufacturing plants, construction firms, and institutional diesel storage tanks.
          </p>
        </div>

        <!-- 5. Commercial Solar Microgrids -->
        <div class="capability-card" id="solar">
          <div class="capability-icon-wrap icon-energy">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="5"></circle><line x1="12" y1="1" x2="12" y2="3"></line></svg>
          </div>
          <h4>Solar Microgrid Infrastructure</h4>
          <p>
            Designing and deploying 500kW to 3.5MW captive solar-battery hybrid microgrids for private estates, hotels, and agro-processing facilities, reducing diesel reliance by over 70%.
          </p>
        </div>

        <!-- 6. Fleet Management Solutions -->
        <div class="capability-card">
          <div class="capability-icon-wrap icon-energy">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="5" width="20" height="14" rx="2"></rect><line x1="2" y1="10" x2="22" y2="10"></line></svg>
          </div>
          <h4>Corporate Fleet Fuel Cards</h4>
          <p>
            Smart RFID cashless fuel cards giving logistics fleet owners real-time consumption reports, driver accountability, volume limits, and monthly consolidated VAT invoicing.
          </p>
        </div>
      </div>
    </div>
  </section>

  <!-- Authentic Operations Showcase Gallery -->
  <section class="section-padding" style="background:var(--white); border-bottom:1px solid var(--sand-200);">
    <div class="container">
      <div class="section-head" style="text-align:center; max-width:760px; margin:0 auto 3rem;">
        <span class="section-badge" style="background:rgba(234,88,12,0.15); color:var(--energy-orange);">Operational Infrastructure</span>
        <h2 class="section-title">Authentic Fleet & Station Operations</h2>
        <p class="section-subtitle">
          Direct from our operational hub: modern retail stations, haulage tankers, doorstep mobile diesel delivery, and certified digital calibration.
        </p>
      </div>

      <div class="grid-4-responsive">
        <div class="estate-card">
          <div class="estate-img-wrap">
            <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/photos/kelvin-filling-station-canopy.jpg' ); ?>" alt="Kelvin Energy Services Ltd Retail Filling Station" loading="lazy">
          </div>
          <div class="estate-body">
            <h4 style="font-size:1.1rem; font-weight:800; color:var(--navy-900); margin-bottom:0.35rem;">Mega Retail Outlets</h4>
            <p style="font-size:0.85rem; color:var(--slate-600); line-height:1.5;">Kelvin Energy Services modern multi-island canopy filling stations.</p>
          </div>
        </div>

        <div class="estate-card">
          <div class="estate-img-wrap">
            <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/photos/fuel-dispenser-truck.jpg' ); ?>" alt="Dispenser Pedier - Mobile Fuel Delivery Truck" loading="lazy">
          </div>
          <div class="estate-body">
            <h4 style="font-size:1.1rem; font-weight:800; color:var(--navy-900); margin-bottom:0.35rem;">Diesel At Doorstep</h4>
            <p style="font-size:0.85rem; color:var(--slate-600); line-height:1.5;">Mobile dispenser pedier trucks delivering diesel directly to company premises.</p>
          </div>
        </div>

        <div class="estate-card">
          <div class="estate-img-wrap">
            <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/photos/fuel-tankers-fleet.jpg' ); ?>" alt="Kelvin Energy Haulage Fleet" loading="lazy">
          </div>
          <div class="estate-body">
            <h4 style="font-size:1.1rem; font-weight:800; color:var(--navy-900); margin-bottom:0.35rem;">Bulk Haulage Tankers</h4>
            <p style="font-size:0.85rem; color:var(--slate-600); line-height:1.5;">Fleet of heavy-duty MAN Diesel tanker trucks for bulk haulage delivery.</p>
          </div>
        </div>

        <div class="estate-card">
          <div class="estate-img-wrap">
            <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/photos/fuel-attendants-dispensing.jpg' ); ?>" alt="Kelvin Energy Fuel Attendants" loading="lazy">
          </div>
          <div class="estate-body">
            <h4 style="font-size:1.1rem; font-weight:800; color:var(--navy-900); margin-bottom:0.35rem;">Uniformed Attendants</h4>
            <p style="font-size:0.85rem; color:var(--slate-600); line-height:1.5;">Professional pump attendants delivering 100% digitally calibrated fuel.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Station Dealership & Supply Inquiry Form -->
  <section class="section-padding" id="dealership" style="background:var(--sand-50);">
    <div class="container">
      <div class="grid-2-responsive">
        <div>
          <span class="section-badge" style="background:rgba(234,88,12,0.15); color:var(--energy-orange);">Commercial Partnerships</span>
          <h2 class="section-title">Station Franchising & Bulk Fuel Supply</h2>
          <p class="section-subtitle">
            Are you a landowner on a high-traffic corridor seeking a lucrative petrol station joint venture? Or a corporation needing guaranteed weekly AGO/Diesel tanker deliveries?
          </p>
          <div class="features-list">
            <div class="feature-item">
              <div class="feature-check-icon" style="background:var(--orange-100); color:var(--energy-orange);">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"></polyline></svg>
              </div>
              <div>
                <h5>Franchise & Station Co-Branding</h5>
                <p>Convert your existing retail outlet into a high-volume Kelvin Cameo Energy station with guaranteed product loading priority.</p>
              </div>
            </div>
            <div class="feature-item">
              <div class="feature-check-icon" style="background:var(--orange-100); color:var(--energy-orange);">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"></polyline></svg>
              </div>
              <div>
                <h5>Guaranteed Product Quality</h5>
                <p>Strict laboratory flash-point and density verification on every delivery batch to protect customer engines and industrial generators.</p>
              </div>
            </div>
          </div>
        </div>

        <!-- Form Card -->
        <div style="background:var(--sand-50); border:1px solid var(--slate-200); border-radius:var(--radius-xl); padding:2.5rem; box-shadow:var(--shadow-md);">
          <h3 style="font-family:var(--font-display); font-size:1.45rem; font-weight:800; color:var(--navy-900); margin-bottom:1rem;">Request Energy Proposal</h3>
          <form id="energyRfpForm" onsubmit="event.preventDefault(); showToast('Energy Inquiry Received', 'Our petroleum distribution desk will review your inquiry and follow up within 2 hours.'); this.reset();">
            <div class="form-group">
              <label>Nature of Inquiry *</label>
              <select class="form-control" required>
                <option value="franchise">Petrol Filling Station Franchise / Co-Branding</option>
                <option value="bulk-diesel">Bulk Tanker AGO (Diesel) Delivery (11,000L - 45,000L)</option>
                <option value="bulk-pms">Bulk PMS / Fuel Wholesale Supply</option>
                <option value="lpg-plant">LPG Gas Skid Installation / Off-take</option>
                <option value="solar">Solar Microgrid Installation Proposal</option>
                <option value="fleet-card">Corporate Fleet Card System</option>
              </select>
            </div>
            <div class="form-group-row">
              <div class="form-group">
                <label>Company / Contact Name *</label>
                <input type="text" class="form-control" placeholder="e.g. Total Logistics Ltd" required>
              </div>
              <div class="form-group">
                <label>Phone / WhatsApp *</label>
                <input type="tel" class="form-control" placeholder="+234 ..." required>
              </div>
            </div>
            <div class="form-group">
              <label>Delivery Location / Target Town</label>
              <input type="text" class="form-control" placeholder="e.g. Abuja / Suleja / Niger State corridor">
            </div>
            <div class="form-group">
              <label>Estimated Volume / Project Details</label>
              <textarea class="form-control" rows="3" placeholder="Specify estimated monthly volume, site coordinates, or requirements..."></textarea>
            </div>
            <button type="submit" class="btn btn-energy btn-lg" style="width:100%;">
              Request Fuel & Energy Quote
            </button>
          </form>
        </div>
      </div>
    </div>
  </section>

<?php
get_footer();
