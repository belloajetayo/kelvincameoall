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
          Fueling Food Security Through <span class="text-gradient-agro">Mechanized Farming</span>, Maize Processing &amp; Packaging.
        </h1>

        <p class="page-hero-desc">
          <strong>Kelvin Cameo Agriculture</strong> operates extensive mechanized crop plantations, automated commercial poultry complexes, livestock ranches, and industrial agro-processing facilities. We plant, process, and package premium grains and maize to fuel regional food stability and industrial supply across Nigeria.
        </p>

        <div style="display:flex; gap:1.25rem; flex-wrap:wrap;">
          <a href="#maize-processing" class="btn btn-agro btn-lg">Maize Processing &amp; Packaging Line</a>
          <a href="#operations" class="btn btn-outline-white btn-lg">Explore Farm Operations</a>
          <a href="#supply-rfp" class="btn btn-outline-white btn-lg">Order Packaged Grains</a>
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
            <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/photos/agriculture/maize-planting-field.jpg' ); ?>" alt="Commercial Maize Plantation and Grain Cultivation" loading="lazy">
          </div>
          <div class="agro-card-body">
            <span class="agro-metric-badge">Mechanized Plantation</span>
            <h4 class="agro-card-title" style="margin-top:0.75rem;">Commercial Grain &amp; Cereals</h4>
            <p class="agro-card-desc">
              Extensive cultivation of high-yield yellow and white maize, soybeans, sorghum, and millet across thousands of arable hectares. Supported by modern tractor fleets, GPS-assisted soil mapping, and pivot irrigation for multi-season harvesting.
            </p>
            <ul style="font-size:0.82rem; color:var(--slate-600); display:flex; flex-direction:column; gap:0.35rem; margin-bottom:1.25rem;">
              <li>✔ Dual-season cultivation via hybrid irrigation</li>
              <li>✔ Bulk off-take to feed millers, breweries &amp; food processors</li>
              <li>✔ Automated de-husking, moisture-controlled drying &amp; grading</li>
            </ul>
            <a href="#maize-processing" class="btn btn-secondary btn-sm" style="width:100%;">View Maize Processing Line &darr;</a>
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
            <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/photos/agriculture/maize-milling-processing.jpg' ); ?>" alt="Industrial Agro-Processing and Silo Storage" loading="lazy">
          </div>
          <div class="agro-card-body">
            <span class="agro-metric-badge">Industrial Processing</span>
            <h4 class="agro-card-title" style="margin-top:0.75rem;">Silos, Milling &amp; Agro-Processing</h4>
            <p class="agro-card-desc">
              Strategic post-harvest infrastructure including temperature-regulated grain storage silos, mechanical de-stoners, hammer mills, and oil expellers that eliminate post-harvest losses and stabilize market prices.
            </p>
            <ul style="font-size:0.82rem; color:var(--slate-600); display:flex; flex-direction:column; gap:0.35rem; margin-bottom:1.25rem;">
              <li>✔ 10,000 MT aerated vertical silo capacity</li>
              <li>✔ Automated bagging lines (25kg &amp; 50kg)</li>
              <li>✔ Guaranteed moisture content below 12%</li>
            </ul>
            <a href="#supply-rfp" class="btn btn-secondary btn-sm" style="width:100%;">Silo &amp; Milling Off-Take</a>
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

  <!-- ====================================================================
       MAIZE VALUE CHAIN: PLANTING, PROCESSING & PACKAGING
       ==================================================================== -->
  <section id="maize-processing" class="section-padding" style="background:linear-gradient(180deg, #f0fdf4 0%, #ffffff 100%); border-top:1px solid #bbf7d0; position:relative;">
    <div class="container">
      <div class="section-head" style="text-align:center; max-width:820px; margin:0 auto 3.5rem;">
        <span class="section-badge" style="background:rgba(16,185,129,0.18); color:#047857; font-weight:700;">Complete Farm-to-Factory Chain</span>
        <h2 class="section-title" style="font-size:2.35rem; margin-top:0.6rem;">We Plant, Process &amp; Package Premium Maize</h2>
        <p class="section-subtitle" style="font-size:1.05rem; line-height:1.7;">
          At Kelvin Cameo Agriculture, we maintain 100% control over the entire maize value chain. From extensive mechanized planting on fertile arable plantations to industrial cleaning, de-stoning, milling, and precision packaging in certified 25kg &amp; 50kg moisture-sealed sacks.
        </p>
      </div>

      <!-- 3-Pillar Process Showcase -->
      <div style="display:grid; grid-template-columns:repeat(auto-fit, minmax(320px, 1fr)); gap:2rem; margin-bottom:3.5rem;">
        
        <!-- Pillar 1: Planting -->
        <div style="background:#ffffff; border-radius:16px; border:1px solid #e2e8f0; overflow:hidden; box-shadow:0 10px 25px -5px rgba(0,0,0,0.06); transition:transform 0.3s ease, box-shadow 0.3s ease;">
          <div style="height:240px; overflow:hidden; position:relative;">
            <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/photos/agriculture/maize-planting-field.jpg' ); ?>" alt="Mechanized Maize Planting and Cultivation" style="width:100%; height:100%; object-fit:cover;">
            <span style="position:absolute; top:1rem; left:1rem; background:rgba(4,120,87,0.92); color:#ffffff; font-size:0.75rem; font-weight:800; text-transform:uppercase; letter-spacing:0.06em; padding:0.35rem 0.8rem; border-radius:9999px;">Phase 01: Planting</span>
          </div>
          <div style="padding:1.75rem;">
            <div style="display:flex; align-items:center; gap:0.6rem; margin-bottom:0.75rem;">
              <span style="display:inline-flex; align-items:center; justify-content:center; width:32px; height:32px; border-radius:50%; background:#dcfce7; color:#15803d; font-weight:800; font-size:0.9rem;">1</span>
              <h3 style="font-size:1.3rem; font-weight:800; color:var(--navy-900); margin:0;">Mechanized Cultivation</h3>
            </div>
            <p style="font-size:0.9rem; color:var(--slate-600); line-height:1.65; margin-bottom:1.25rem;">
              We cultivate high-yield, drought-tolerant hybrid yellow and white maize across extensive arable farm tracts. Our mechanized tractors, disc ploughs, precision seed drills, and pivot irrigation infrastructure guarantee healthy germination, weed control, and rich cob formation across both wet and dry irrigation cycles.
            </p>
            <ul style="font-size:0.85rem; color:var(--slate-700); display:flex; flex-direction:column; gap:0.45rem;">
              <li style="display:flex; align-items:center; gap:0.5rem;"><span style="color:#10b981; font-weight:bold;">✓</span> Certified non-GMO hybrid parent seed stock</li>
              <li style="display:flex; align-items:center; gap:0.5rem;"><span style="color:#10b981; font-weight:bold;">✓</span> Soil nutrients calibrated via precision agro-science</li>
              <li style="display:flex; align-items:center; gap:0.5rem;"><span style="color:#10b981; font-weight:bold;">✓</span> Dual-cycle harvest maximizing annual tonnage</li>
            </ul>
          </div>
        </div>

        <!-- Pillar 2: Harvesting & Processing -->
        <div style="background:#ffffff; border-radius:16px; border:1px solid #e2e8f0; overflow:hidden; box-shadow:0 10px 25px -5px rgba(0,0,0,0.06); transition:transform 0.3s ease, box-shadow 0.3s ease;">
          <div style="height:240px; overflow:hidden; position:relative;">
            <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/photos/agriculture/maize-harvest-cobs.jpg' ); ?>" alt="Harvested Fresh Golden Maize Cobs" style="width:100%; height:100%; object-fit:cover;">
            <span style="position:absolute; top:1rem; left:1rem; background:rgba(217,119,6,0.92); color:#ffffff; font-size:0.75rem; font-weight:800; text-transform:uppercase; letter-spacing:0.06em; padding:0.35rem 0.8rem; border-radius:9999px;">Phase 02: Processing</span>
          </div>
          <div style="padding:1.75rem;">
            <div style="display:flex; align-items:center; gap:0.6rem; margin-bottom:0.75rem;">
              <span style="display:inline-flex; align-items:center; justify-content:center; width:32px; height:32px; border-radius:50%; background:#fef3c7; color:#b45309; font-weight:800; font-size:0.9rem;">2</span>
              <h3 style="font-size:1.3rem; font-weight:800; color:var(--navy-900); margin:0;">Industrial Processing &amp; Milling</h3>
            </div>
            <p style="font-size:0.9rem; color:var(--slate-600); line-height:1.65; margin-bottom:1.25rem;">
              Harvested maize undergoes thorough automated de-husking, multi-stage rotary screening, aspirator de-stoning, and aerated drying towers. Moisture content is lowered and maintained below 12% to prevent aflatoxin contamination before milling into coarse grits, brewery grains, or fine flour.
            </p>
            <ul style="font-size:0.85rem; color:var(--slate-700); display:flex; flex-direction:column; gap:0.45rem;">
              <li style="display:flex; align-items:center; gap:0.5rem;"><span style="color:#10b981; font-weight:bold;">✓</span> Industrial mechanical de-stoners &amp; magnetic separators</li>
              <li style="display:flex; align-items:center; gap:0.5rem;"><span style="color:#10b981; font-weight:bold;">✓</span> Aerated grain dryers guaranteeing &lt; 12% moisture</li>
              <li style="display:flex; align-items:center; gap:0.5rem;"><span style="color:#10b981; font-weight:bold;">✓</span> Strict aflatoxin and insect-free quality benchmarks</li>
            </ul>
          </div>
        </div>

        <!-- Pillar 3: Packaging & Off-Take -->
        <div style="background:#ffffff; border-radius:16px; border:1px solid #e2e8f0; overflow:hidden; box-shadow:0 10px 25px -5px rgba(0,0,0,0.06); transition:transform 0.3s ease, box-shadow 0.3s ease;">
          <div style="height:240px; overflow:hidden; position:relative;">
            <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/photos/agriculture/maize-packaging-bags.jpg' ); ?>" alt="Packaged High Quality Clean Maize Bags" style="width:100%; height:100%; object-fit:cover;">
            <span style="position:absolute; top:1rem; left:1rem; background:rgba(30,58,138,0.92); color:#ffffff; font-size:0.75rem; font-weight:800; text-transform:uppercase; letter-spacing:0.06em; padding:0.35rem 0.8rem; border-radius:9999px;">Phase 03: Packaging</span>
          </div>
          <div style="padding:1.75rem;">
            <div style="display:flex; align-items:center; gap:0.6rem; margin-bottom:0.75rem;">
              <span style="display:inline-flex; align-items:center; justify-content:center; width:32px; height:32px; border-radius:50%; background:#dbeafe; color:#1d4ed8; font-weight:800; font-size:0.9rem;">3</span>
              <h3 style="font-size:1.3rem; font-weight:800; color:var(--navy-900); margin:0;">Automated Bagging &amp; Off-Take</h3>
            </div>
            <p style="font-size:0.9rem; color:var(--slate-600); line-height:1.65; margin-bottom:1.25rem;">
              Processed maize is mechanically weighed and bagged into branded, heavy-duty polypropylene woven sacks with tamper-evident stitch sealing. We supply 25kg, 50kg, and 100kg bags ready for long-distance transport to commercial food processors, feed compounders, and regional markets.
            </p>
            <ul style="font-size:0.85rem; color:var(--slate-700); display:flex; flex-direction:column; gap:0.45rem;">
              <li style="display:flex; align-items:center; gap:0.5rem;"><span style="color:#10b981; font-weight:bold;">✓</span> Calibrated electronic weighing &amp; double-stitch seam sealing</li>
              <li style="display:flex; align-items:center; gap:0.5rem;"><span style="color:#10b981; font-weight:bold;">✓</span> Heavy-gauge food-grade polypropylene sacks (25kg &amp; 50kg)</li>
              <li style="display:flex; align-items:center; gap:0.5rem;"><span style="color:#10b981; font-weight:bold;">✓</span> Direct warehouse palletizing and interstate trailer loading</li>
            </ul>
          </div>
        </div>

      </div>

      <!-- Maize Specifications & Off-Take Callout Strip -->
      <div style="background:#ffffff; border-radius:18px; border:2px solid #bbf7d0; padding:2.5rem; box-shadow:0 15px 30px -10px rgba(16,185,129,0.12);">
        <div style="display:grid; grid-template-columns:repeat(auto-fit, minmax(220px, 1fr)); gap:2rem; align-items:center;">
          <div>
            <h4 style="font-size:1.25rem; font-weight:800; color:var(--navy-900); margin-bottom:0.4rem;">Grain Purity Standard</h4>
            <p style="font-size:0.85rem; color:var(--slate-600); margin:0;">99.2% Clean Grain &bull; Mechanical Destoned &bull; Free from foreign debris</p>
          </div>
          <div>
            <h4 style="font-size:1.25rem; font-weight:800; color:var(--navy-900); margin-bottom:0.4rem;">Moisture Threshold</h4>
            <p style="font-size:0.85rem; color:var(--slate-600); margin:0;">Under 12.0% Safe Moisture &bull; Suitable for 12+ months silo and warehouse storage</p>
          </div>
          <div>
            <h4 style="font-size:1.25rem; font-weight:800; color:var(--navy-900); margin-bottom:0.4rem;">Wholesale Bagging</h4>
            <p style="font-size:0.85rem; color:var(--slate-600); margin:0;">50kg &amp; 100kg Heavy Polypropylene &bull; Bulk Tonne Hopper Loads Available</p>
          </div>
          <div style="text-align:right;">
            <a href="#supply-rfp" class="btn btn-agro btn-lg" style="width:100%; text-align:center;">Order Packaged Maize Now</a>
          </div>
        </div>
      </div>

    </div>
  </section>

  <!-- Contract Farming & Partnership Architecture -->
  <section class="section-padding" style="background:var(--sand-50); border-top:1px solid var(--sand-200);">
    <div class="container">
      <div class="grid-2-responsive">
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
                <option value="packaged-maize">Clean Packaged Maize (25kg / 50kg Bags)</option>
                <option value="raw-maize">Bulk Maize Grain (Yellow / White Hopper Truckloads)</option>
                <option value="soybeans">Soybeans (Raw High-Protein)</option>
                <option value="eggs">Fresh Table Eggs (Wholesale Crates)</option>
                <option value="poultry">Live / Dressed Broiler Poultry</option>
                <option value="cattle">Feedlot Cattle / Livestock</option>
                <option value="cassava">Cassava Starch / Processed Garri</option>
                <option value="silo">Silo Storage &amp; Grain Drying Services</option>
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
