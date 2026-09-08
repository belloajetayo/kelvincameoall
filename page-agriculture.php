<?php
/**
 * Template Name: Agriculture & Agro-Allied
 * Description: Commercial Crop Farming, 50,000-Bird Poultry, Silo Reserves & Outgrower Schemes.
 *
 * @package Kelvin_Cameo
 */

get_header();
?>

  <!-- Hero Section -->
  <section class="page-hero hero-agro">
    <div class="container">
      <div class="page-hero-inner">
        <div class="breadcrumb-row">
          <a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a>
          <span>/</span>
          <span>Operating Sectors</span>
          <span>/</span>
          <span style="color:#a7f3d0;">Commercial Agriculture & Agro-Allied</span>
        </div>

        <h1 class="page-hero-title">
          Fueling Food Security Through <span class="text-gradient-agro">Mechanized Farming</span> & Agro-Processing.
        </h1>

        <p class="page-hero-desc">
          <strong>Kelvin Cameo Agriculture</strong> operates extensive mechanized crop plantations, automated commercial poultry complexes, livestock ranches, and industrial agro-processing facilities driving self-sufficiency and raw material supply across West Africa.
        </p>

        <div style="display:flex; gap:1.25rem; flex-wrap:wrap;">
          <a href="#operations" class="btn btn-agro btn-lg">Explore Farm Operations</a>
          <a href="#supply-rfp" class="btn btn-outline-white btn-lg">Bulk Supply Off-Take RFP</a>
        </div>
      </div>
    </div>
  </section>

  <!-- Key Metrics Banner -->
  <section style="background:var(--sand-50); padding: 2rem 0 4rem;">
    <div class="container">
      <div class="agro-stats-banner">
        <div class="agro-stat-box">
          <h4 class="stat-number" data-target="2500">2,500+</h4>
          <p>Hectares of Mechanized Arable Land Cultivated</p>
        </div>
        <div class="agro-stat-box">
          <h4 class="stat-number" data-target="50000">50,000+</h4>
          <p>Commercial Poultry Battery Bird Capacity</p>
        </div>
        <div class="agro-stat-box">
          <h4 class="stat-number" data-target="10000">10,000+</h4>
          <p>Metric Tonnes Annual Grain & Silo Storage</p>
        </div>
        <div class="agro-stat-box">
          <h4>100%</h4>
          <p>Traceable, Bio-Secure & Good Agricultural Practices (GAP)</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Core Operations Grid -->
  <section id="operations" class="section-padding" style="background:var(--white);">
    <div class="container">
      <div class="section-head" style="text-align:center; max-width:760px; margin:0 auto 3rem;">
        <span class="section-badge" style="background:rgba(16,185,129,0.15); color:var(--agro-emerald);">Integrated Agro-Ecosystem</span>
        <h2 class="section-title">Our Agricultural Value Chains</h2>
        <p class="section-subtitle">
          From high-yield precision seedbeds to high-throughput feed manufacturing and regional commodity distribution, we manage the complete lifecycle of staple agricultural production.
        </p>
      </div>

      <div class="agro-production-grid">
        <!-- Card 1: Grains & Cereals -->
        <article class="agro-card">
          <div class="agro-card-media">
            <img src="https://images.unsplash.com/photo-1574943320219-553eb213f72d?auto=format&fit=crop&w=800&q=80" alt="Commercial Maize and Grain Farming" loading="lazy">
          </div>
          <div class="agro-card-body">
            <span class="agro-metric-badge">Mechanized Plantation</span>
            <h4 class="agro-card-title" style="margin-top:0.75rem;">Commercial Grain & Cereals</h4>
            <p class="agro-card-desc">
              Extensive cultivation of high-yield yellow and white maize, soybeans, sorghum, and millet. Supported by tractor fleets, GPS-assisted soil nutrition, and pivot irrigation systems ensuring dual-season harvesting.
            </p>
            <ul style="font-size:0.82rem; color:var(--slate-600); display:flex; flex-direction:column; gap:0.35rem; margin-bottom:1.25rem;">
              <li>✔ Dual-season cultivation via hybrid irrigation</li>
              <li>✔ Bulk supply to poultry feed millers & breweries</li>
              <li>✔ Moister-controlled drying & bagging line</li>
            </ul>
            <a href="#supply-rfp" class="btn btn-secondary btn-sm" style="width:100%;">Inquire Grain Supply</a>
          </div>
        </article>

        <!-- Card 2: Commercial Poultry -->
        <article class="agro-card">
          <div class="agro-card-media">
            <img src="https://images.unsplash.com/photo-1548550023-2bdb3c5beed7?auto=format&fit=crop&w=800&q=80" alt="Automated Commercial Poultry Farming" loading="lazy">
          </div>
          <div class="agro-card-body">
            <span class="agro-metric-badge">Bio-Secure Complex</span>
            <h4 class="agro-card-title" style="margin-top:0.75rem;">Commercial Poultry & Egg Production</h4>
            <p class="agro-card-desc">
              State-of-the-art climate-controlled battery cages housing 50,000+ layer birds producing fresh table eggs daily, alongside broiler production for blast-frozen chicken off-take to corporate hospitality and supermarket chains.
            </p>
            <ul style="font-size:0.82rem; color:var(--slate-600); display:flex; flex-direction:column; gap:0.35rem; margin-bottom:1.25rem;">
              <li>✔ Daily output of 1,200+ crates of fresh table eggs</li>
              <li>✔ Blast-frozen eviscerated dressed chicken packs</li>
              <li>✔ Zero-antibiotic residue monitoring protocols</li>
            </ul>
            <a href="#supply-rfp" class="btn btn-secondary btn-sm" style="width:100%;">Order Poultry Off-Take</a>
          </div>
        </article>

        <!-- Card 3: Livestock & Cattle Ranching -->
        <article class="agro-card">
          <div class="agro-card-media">
            <img src="https://images.unsplash.com/photo-1570042225831-d98fa7577f1e?auto=format&fit=crop&w=800&q=80" alt="Commercial Cattle Ranching and Dairy" loading="lazy">
          </div>
          <div class="agro-card-body">
            <span class="agro-metric-badge">Controlled Feedlot</span>
            <h4 class="agro-card-title" style="margin-top:0.75rem;">Livestock, Beef & Dairy Feedlots</h4>
            <p class="agro-card-desc">
              Fenced pastoral ranches and intensive feedlot facilities utilizing balanced silage and veterinary monitoring to rear disease-resistant beef cattle, goats, and dairy herds for institutional meat packers and event caterers.
            </p>
            <ul style="font-size:0.82rem; color:var(--slate-600); display:flex; flex-direction:column; gap:0.35rem; margin-bottom:1.25rem;">
              <li>✔ High-carcass yield fattening programs</li>
              <li>✔ Dedicated veterinary health and vaccination audits</li>
              <li>✔ Bulk live and dressed supply for festive seasons</li>
            </ul>
            <a href="#supply-rfp" class="btn btn-secondary btn-sm" style="width:100%;">Inquire Livestock Supply</a>
          </div>
        </article>

        <!-- Card 4: Cassava & Tubers -->
        <article class="agro-card">
          <div class="agro-card-media">
            <img src="https://images.unsplash.com/photo-1592417817098-8f3d6910985b?auto=format&fit=crop&w=800&q=80" alt="Cassava and Tuber Cultivation" loading="lazy">
          </div>
          <div class="agro-card-body">
            <span class="agro-metric-badge">Staple Root Crops</span>
            <h4 class="agro-card-title" style="margin-top:0.75rem;">Cassava, Yam & Tuber Farming</h4>
            <p class="agro-card-desc">
              Hundreds of acres dedicated to fortified vitamin-A cassava varieties and premium export-grade yams. Seamlessly linked to our processing mills for high-quality food-grade starch and premium garri production.
            </p>
            <ul style="font-size:0.82rem; color:var(--slate-600); display:flex; flex-direction:column; gap:0.35rem; margin-bottom:1.25rem;">
              <li>✔ TME 419 high-starch industrial cassava stems</li>
              <li>✔ Certified white and yellow garri processing</li>
              <li>✔ Supply to food manufacturers & retail distributors</li>
            </ul>
            <a href="#supply-rfp" class="btn btn-secondary btn-sm" style="width:100%;">Order Tuber Products</a>
          </div>
        </article>

        <!-- Card 5: Agro-Processing & Storage Silos -->
        <article class="agro-card">
          <div class="agro-card-media">
            <img src="https://images.unsplash.com/photo-1586528116311-ad8dd3c8310d?auto=format&fit=crop&w=800&q=80" alt="Agro-Processing and Silo Storage" loading="lazy">
          </div>
          <div class="agro-card-body">
            <span class="agro-metric-badge">Industrial Processing</span>
            <h4 class="agro-card-title" style="margin-top:0.75rem;">Silos, Milling & Agro-Processing</h4>
            <p class="agro-card-desc">
              Strategic post-harvest infrastructure including temperature-regulated grain storage silos, mechanical de-stoners, hammer mills, and oil expellers that eliminate post-harvest losses and stabilize market prices.
            </p>
            <ul style="font-size:0.82rem; color:var(--slate-600); display:flex; flex-direction:column; gap:0.35rem; margin-bottom:1.25rem;">
              <li>✔ 10,000 MT aerated vertical silo capacity</li>
              <li>✔ Automated bagging lines (25kg & 50kg)</li>
              <li>✔ Moisture content below 12% guarantee</li>
            </ul>
            <a href="#supply-rfp" class="btn btn-secondary btn-sm" style="width:100%;">Silo & Milling Off-Take</a>
          </div>
        </article>

        <!-- Card 6: Farm-to-Fork Logistics -->
        <article class="agro-card">
          <div class="agro-card-media">
            <img src="https://images.unsplash.com/photo-1601584115197-04ecc0da31d7?auto=format&fit=crop&w=800&q=80" alt="Agro Distribution Fleet and Haulage" loading="lazy">
          </div>
          <div class="agro-card-body">
            <span class="agro-metric-badge">Distribution Network</span>
            <h4 class="agro-card-title" style="margin-top:0.75rem;">Bulk Logistics & Interstate Haulage</h4>
            <p class="agro-card-desc">
              Leveraging the Kelvin Cameo conglomerate's fleet haulage network to transport perishable farm produce, grain bags, and live animals directly from our rural farm gates to urban trade hubs and processing centers.
            </p>
            <ul style="font-size:0.82rem; color:var(--slate-600); display:flex; flex-direction:column; gap:0.35rem; margin-bottom:1.25rem;">
              <li>✔ Direct farm gate to warehouse delivery</li>
              <li>✔ Transit loss insurance and verified tracking</li>
              <li>✔ Strategic corridor coverage across North & South</li>
            </ul>
            <a href="#supply-rfp" class="btn btn-secondary btn-sm" style="width:100%;">Book Haulage Supply</a>
          </div>
        </article>
      </div>
    </div>
  </section>

  <!-- Contract Farming & Partnership Architecture -->
  <section class="section-padding" style="background:var(--sand-50); border-top:1px solid var(--sand-200);">
    <div class="container">
      <div style="display:grid; grid-template-columns:1fr 1fr; gap:3.5rem; align-items:center;">
        <div>
          <span class="section-badge" style="background:rgba(16,185,129,0.15); color:var(--agro-emerald);">Sustainable Partnership</span>
          <h2 class="section-title" style="margin-top:0.5rem;">Empowering Rural Outgrowers, Feeding Modern Nigeria</h2>
          <p style="color:var(--slate-600); line-height:1.7; margin-bottom:1.5rem;">
            Kelvin Cameo Agriculture operates an inclusive Outgrower Scheme partnering with over 1,500 smallholder farmers across host communities. We provide certified high-germination seeds, tractorization services, fertilizer subsidies, and guaranteed off-take contracts at fair market value.
          </p>
          <div style="display:flex; flex-direction:column; gap:1rem; margin-bottom:2rem;">
            <div style="display:flex; gap:1rem; align-items:flex-start;">
              <div style="width:36px; height:36px; border-radius:50%; background:var(--agro-emerald); color:var(--white); display:flex; align-items:center; justify-content:center; font-weight:800; flex-shrink:0;">1</div>
              <div>
                <h5 style="font-size:1.05rem; font-weight:700; color:var(--navy-900);">Mechanization As A Service</h5>
                <p style="font-size:0.875rem; color:var(--slate-600);">Ploughing, harrowing, and ridging tractor support provided to community clusters to expand their arable land.</p>
              </div>
            </div>
            <div style="display:flex; gap:1rem; align-items:flex-start;">
              <div style="width:36px; height:36px; border-radius:50%; background:var(--agro-emerald); color:var(--white); display:flex; align-items:center; justify-content:center; font-weight:800; flex-shrink:0;">2</div>
              <div>
                <h5 style="font-size:1.05rem; font-weight:700; color:var(--navy-900);">Input Financing & Extension Services</h5>
                <p style="font-size:0.875rem; color:var(--slate-600);">Certified seeds, organic crop care, and ongoing agronomist guidance on disease prevention and weed control.</p>
              </div>
            </div>
            <div style="display:flex; gap:1rem; align-items:flex-start;">
              <div style="width:36px; height:36px; border-radius:50%; background:var(--agro-emerald); color:var(--white); display:flex; align-items:center; justify-content:center; font-weight:800; flex-shrink:0;">3</div>
              <div>
                <h5 style="font-size:1.05rem; font-weight:700; color:var(--navy-900);">Guaranteed Minimum Price Off-Take</h5>
                <p style="font-size:0.875rem; color:var(--slate-600);">Eliminating price exploitation by middle-men by purchasing harvest yields directly at transparent farm-gate rates.</p>
              </div>
            </div>
          </div>
          <a href="https://wa.me/2348055558197?text=Hello%20Cameo%20Farms,%20I%20am%20interested%20in%20the%20Outgrower%20Program" class="btn btn-agro btn-lg">Partner As An Outgrower</a>
        </div>
        <div>
          <img src="https://images.unsplash.com/photo-1595974482597-4b8da8879bc5?auto=format&fit=crop&w=1000&q=80" alt="Farmer Inspecting Harvest Crops" style="border-radius:var(--radius-xl); box-shadow:var(--shadow-xl); border:1px solid var(--slate-200); width:100%; height:460px; object-fit:cover;">
        </div>
      </div>
    </div>
  </section>

  <!-- Produce Off-Take RFP Form Section -->
  <section id="supply-rfp" class="section-padding" style="background:var(--white);">
    <div class="container">
      <div style="max-width:860px; margin:0 auto; background:var(--sand-50); border:1px solid var(--sand-200); border-radius:var(--radius-xl); padding:3.5rem; box-shadow:var(--shadow-lg);">
        <div style="text-align:center; margin-bottom:2.5rem;">
          <span class="section-badge" style="background:rgba(16,185,129,0.15); color:var(--agro-emerald);">Institutional Procurement</span>
          <h2 class="section-title" style="margin-top:0.5rem;">Request Produce Quotation & Off-Take Terms</h2>
          <p class="section-subtitle">
            Supply contracts tailored for FMCG processors, livestock feed compounders, state feeding programs, and corporate food distributors.
          </p>
        </div>

        <form id="agroSupplyForm" onsubmit="event.preventDefault(); showToast('Commodity Inquiry Received', 'Our Agro-Allied desk will prepare your supply schedule and send formal quotations.'); this.reset();">
          <div class="form-group-row">
            <div class="form-group">
              <label>Full Name / Contact Person *</label>
              <input type="text" class="form-control" placeholder="e.g. Alhaji Mustapha Danladi" required>
            </div>
            <div class="form-group">
              <label>Company / Organization Name *</label>
              <input type="text" class="form-control" placeholder="e.g. Crestview Feeds & Foods Ltd" required>
            </div>
          </div>

          <div class="form-group-row">
            <div class="form-group">
              <label>Phone / WhatsApp *</label>
              <input type="tel" class="form-control" placeholder="+234 ..." required>
            </div>
            <div class="form-group">
              <label>Corporate Email *</label>
              <input type="email" class="form-control" placeholder="procurement@company.com" required>
            </div>
          </div>

          <div class="form-group-row">
            <div class="form-group">
              <label>Commodity of Interest *</label>
              <select class="form-control" required>
                <option value="">-- Select Commodity --</option>
                <option value="maize">Maize (Yellow / White Grain)</option>
                <option value="soybeans">Soybeans (Raw High-Protein)</option>
                <option value="eggs">Fresh Table Eggs (Wholesale Crates)</option>
                <option value="poultry">Live / Dressed Broiler Poultry</option>
                <option value="cattle">Feedlot Cattle / Livestock</option>
                <option value="cassava">Cassava Starch / Processed Garri</option>
                <option value="silo">Silo Storage & Drying Services</option>
              </select>
            </div>
            <div class="form-group">
              <label>Estimated Quantity / Frequency</label>
              <input type="text" class="form-control" placeholder="e.g. 50 Metric Tonnes monthly">
            </div>
          </div>

          <div class="form-group">
            <label>Delivery Destination / Specifications</label>
            <textarea class="form-control" rows="3" placeholder="Specify preferred warehouse location, bagging type (25kg/50kg), target delivery timeline, or special moisture specifications..."></textarea>
          </div>

          <button type="submit" class="btn btn-agro btn-lg" style="width:100%;">
            Submit Wholesale Supply Request
          </button>
        </form>
      </div>
    </div>
  </section>

<?php
get_footer();
