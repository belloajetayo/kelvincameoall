<?php
/**
 * Template Name: Automobile Sales & CNG Car Shop
 * Description: Premium Car Sales, CNG Dual-Fuel Hybrid Vehicles, Conversion Services, Commercial Fleets, and Instant WhatsApp Car Shop.
 *
 * @package Kelvin_Cameo
 */

get_header();
?>

  <!-- Hero Section -->
  <section class="page-hero hero-energy" style="position: relative; overflow: hidden; background: linear-gradient(135deg, #020817 0%, #0b1a36 60%, #1e293b 100%);">
    <div class="container" style="position: relative; z-index: 10;">
      <div class="page-hero-inner">
        <div class="breadcrumb-row">
          <a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a>
          <span>/</span>
          <span>Operating Sectors</span>
          <span>/</span>
          <span style="color:#38bdf8;">Automobiles &amp; CNG Clean Mobility</span>
        </div>

        <h1 class="page-hero-title">
          Drive Smarter: <span class="text-gradient-brand">Direct Car Sales</span>, Luxury Autos &amp; <span style="color:#38bdf8;">CNG Clean Mobility</span>.
        </h1>

        <p class="page-hero-desc">
          <strong>Kelvin Cameo Automobile Dealership &amp; CNG Hub</strong> provides certified Nigerian-used and foreign-used (Tokunbo) vehicles, commercial logistics haulers, luxury SUVs, and cutting-edge <strong>Compressed Natural Gas (CNG) dual-fuel cars</strong> that cut your daily fuel running costs by up to <strong>70%</strong>.
        </p>

        <div style="display:flex; gap:1.25rem; flex-wrap:wrap; margin-top:2rem;">
          <a href="#car-inventory" class="btn btn-primary btn-lg">Browse Car Inventory</a>
          <a href="#cng-benefits" class="btn btn-outline-white btn-lg">Why Switch to CNG?</a>
          <a href="https://wa.me/2348055558197?text=Hello%20Kelvin%20Cameo%20Automobiles,%20I%20am%20inquiring%20about%20your%20available%20cars%20and%20CNG%20vehicles." target="_blank" rel="noopener" class="btn btn-whatsapp btn-lg">
            Chat with Auto Desk
          </a>
        </div>
      </div>
    </div>
  </section>

  <!-- Key Metrics & Guarantees Banner -->
  <section style="background:var(--sand-50); padding: 2.25rem 0 3.5rem; border-bottom:1px solid var(--sand-200);">
    <div class="container">
      <div class="agro-stats-banner" style="grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));">
        <div class="agro-stat-box">
          <h4 class="stat-number">Up to 70%</h4>
          <p>Fuel Expense Savings with CNG Dual-Fuel</p>
        </div>
        <div class="agro-stat-box">
          <h4 class="stat-number">100%</h4>
          <p>Verified Duty &amp; Complete Custom Papers</p>
        </div>
        <div class="agro-stat-box">
          <h4 class="stat-number">150+</h4>
          <p>Point Comprehensive Mechanical Inspection</p>
        </div>
        <div class="agro-stat-box">
          <h4 class="stat-number">Trade-In</h4>
          <p>Swap &amp; Upgrade Options Available</p>
        </div>
      </div>
    </div>
  </section>

  <!-- ====================================================================
       CAR SHOP INVENTORY SHOWCASE
       ==================================================================== -->
  <section id="car-inventory" class="section-padding" style="background:var(--white);">
    <div class="container">
      <div class="section-head" style="text-align:center; max-width:820px; margin:0 auto 2.5rem;">
        <span class="section-badge" style="background:rgba(14,165,233,0.15); color:#0284c7; font-weight:700;">Showroom &amp; Lot Inventory</span>
        <h2 class="section-title" style="margin-top:0.6rem; font-size:2.4rem;">Featured Vehicles in Stock</h2>
        <p class="section-subtitle">
          Explore our handpicked selection of factory-fresh, foreign-used (Tokunbo), and certified factory-fitted or converted CNG bi-fuel vehicles ready for immediate drive-off and nationwide registration.
        </p>
      </div>

      <!-- Inventory Category Filter Pills -->
      <div style="display:flex; justify-content:center; gap:0.75rem; flex-wrap:wrap; margin-bottom:3rem;" id="autoFilterBar">
        <button type="button" class="btn btn-sm auto-filter-btn active" data-filter="all" style="border-radius:9999px; padding:0.5rem 1.25rem; font-weight:700;">All Vehicles</button>
        <button type="button" class="btn btn-sm auto-filter-btn" data-filter="cng" style="border-radius:9999px; padding:0.5rem 1.25rem; font-weight:700; background:#e0f2fe; color:#0369a1; border-color:#bae6fd;">🍃 CNG Bi-Fuel</button>
        <button type="button" class="btn btn-sm auto-filter-btn" data-filter="sedan" style="border-radius:9999px; padding:0.5rem 1.25rem; font-weight:700;">🚗 Sedans &amp; City Cars</button>
        <button type="button" class="btn btn-sm auto-filter-btn" data-filter="suv" style="border-radius:9999px; padding:0.5rem 1.25rem; font-weight:700;">🚙 Luxury SUVs</button>
        <button type="button" class="btn btn-sm auto-filter-btn" data-filter="commercial" style="border-radius:9999px; padding:0.5rem 1.25rem; font-weight:700;">🚐 Commercial &amp; Haulage</button>
      </div>

      <!-- Vehicle Grid -->
      <div style="display:grid; grid-template-columns:repeat(auto-fit, minmax(320px, 1fr)); gap:2rem;" id="autoInventoryGrid">

        <!-- Vehicle 1: Toyota Corolla (CNG Bi-Fuel) -->
        <article class="auto-car-card" data-category="cng sedan" style="background:#fff; border-radius:18px; border:1px solid #e2e8f0; overflow:hidden; box-shadow:0 10px 25px -5px rgba(0,0,0,0.06); transition:transform 0.3s ease, box-shadow 0.3s ease; display:flex; flex-direction:column;">
          <div style="height:230px; position:relative; overflow:hidden;">
            <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/photos/automotive/cng-toyota-corolla.jpg' ); ?>" alt="Toyota Corolla CNG Dual-Fuel" style="width:100%; height:100%; object-fit:cover;">
            <span style="position:absolute; top:1rem; left:1rem; background:linear-gradient(135deg, #0284c7, #0369a1); color:#fff; font-size:0.75rem; font-weight:800; text-transform:uppercase; letter-spacing:0.05em; padding:0.35rem 0.8rem; border-radius:9999px;">CNG + Petrol Bi-Fuel</span>
            <span style="position:absolute; bottom:1rem; right:1rem; background:rgba(0,0,0,0.75); color:#fff; font-size:0.75rem; font-weight:700; padding:0.25rem 0.65rem; border-radius:6px;">Tokunbo / 2016</span>
          </div>
          <div style="padding:1.5rem; flex:1; display:flex; flex-direction:column;">
            <div style="display:flex; justify-content:space-between; align-items:flex-start; margin-bottom:0.5rem;">
              <h3 style="font-size:1.35rem; font-weight:800; color:var(--navy-900); margin:0;">Toyota Corolla LE (CNG)</h3>
              <span style="font-size:1.25rem; font-weight:800; color:var(--orange-600);">₦12,800,000</span>
            </div>
            <p style="font-size:0.875rem; color:var(--slate-600); line-height:1.6; margin-bottom:1rem;">
              Super reliable daily driver equipped with a sequential Italian CNG injection system &amp; 65L lightweight composite cylinder. Switch seamlessly between Petrol and CNG at the flick of a button.
            </p>
            <div style="display:grid; grid-template-columns:1fr 1fr; gap:0.5rem; margin-bottom:1.25rem; font-size:0.8rem; color:var(--slate-700); background:#f8fafc; padding:0.75rem; border-radius:8px;">
              <div><strong>Engine:</strong> 1.8L 4-Cylinder</div>
              <div><strong>Transmission:</strong> Automatic</div>
              <div><strong>Fuel Type:</strong> Petrol + CNG Hybrid</div>
              <div><strong>Mileage:</strong> 58,000 miles</div>
            </div>
            <div style="margin-top:auto; display:flex; gap:0.75rem;">
              <a href="https://wa.me/2348055558197?text=Hello%20Kelvin%20Cameo%20Automobiles,%20I%20am%20interested%20in%20inspecting%20the%20Toyota%20Corolla%20LE%20(CNG%20Bi-Fuel)%20priced%20at%20N12,800,000." target="_blank" rel="noopener" class="btn btn-whatsapp btn-sm" style="flex:1; justify-content:center;">
                Inquire on WhatsApp
              </a>
              <button type="button" class="btn btn-outline btn-sm auto-inspect-btn" data-car="Toyota Corolla LE (CNG Bi-Fuel)" style="padding:0.5rem 0.85rem;">
                Hold Car
              </button>
            </div>
          </div>
        </article>

        <!-- Vehicle 2: Toyota Camry XSE (CNG Bi-Fuel) -->
        <article class="auto-car-card" data-category="cng sedan" style="background:#fff; border-radius:18px; border:1px solid #e2e8f0; overflow:hidden; box-shadow:0 10px 25px -5px rgba(0,0,0,0.06); transition:transform 0.3s ease, box-shadow 0.3s ease; display:flex; flex-direction:column;">
          <div style="height:230px; position:relative; overflow:hidden;">
            <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/photos/automotive/cng-toyota-camry.jpg' ); ?>" alt="Toyota Camry Sport CNG Sedan" style="width:100%; height:100%; object-fit:cover;">
            <span style="position:absolute; top:1rem; left:1rem; background:linear-gradient(135deg, #0284c7, #0369a1); color:#fff; font-size:0.75rem; font-weight:800; text-transform:uppercase; letter-spacing:0.05em; padding:0.35rem 0.8rem; border-radius:9999px;">CNG + Petrol Bi-Fuel</span>
            <span style="position:absolute; bottom:1rem; right:1rem; background:rgba(0,0,0,0.75); color:#fff; font-size:0.75rem; font-weight:700; padding:0.25rem 0.65rem; border-radius:6px;">Tokunbo / 2019</span>
          </div>
          <div style="padding:1.5rem; flex:1; display:flex; flex-direction:column;">
            <div style="display:flex; justify-content:space-between; align-items:flex-start; margin-bottom:0.5rem;">
              <h3 style="font-size:1.35rem; font-weight:800; color:var(--navy-900); margin:0;">Toyota Camry Sport</h3>
              <span style="font-size:1.25rem; font-weight:800; color:var(--orange-600);">₦21,500,000</span>
            </div>
            <p style="font-size:0.875rem; color:var(--slate-600); line-height:1.6; margin-bottom:1rem;">
              High-trim luxury sedan featuring panoramic leather cabin, digital cockpit, and certified bi-fuel CNG conversion. Cruise Abuja-Kaduna corridors with whisper-quiet operation and 65% cheaper fueling.
            </p>
            <div style="display:grid; grid-template-columns:1fr 1fr; gap:0.5rem; margin-bottom:1.25rem; font-size:0.8rem; color:var(--slate-700); background:#f8fafc; padding:0.75rem; border-radius:8px;">
              <div><strong>Engine:</strong> 2.5L Dynamic Force</div>
              <div><strong>Transmission:</strong> 8-Speed Auto</div>
              <div><strong>Fuel Type:</strong> Petrol + CNG Hybrid</div>
              <div><strong>Mileage:</strong> 42,000 miles</div>
            </div>
            <div style="margin-top:auto; display:flex; gap:0.75rem;">
              <a href="https://wa.me/2348055558197?text=Hello%20Kelvin%20Cameo%20Automobiles,%20I%20am%20interested%20in%20inspecting%20the%20Toyota%20Camry%20Sport%20(CNG)%20priced%20at%20N21,500,000." target="_blank" rel="noopener" class="btn btn-whatsapp btn-sm" style="flex:1; justify-content:center;">
                Inquire on WhatsApp
              </a>
              <button type="button" class="btn btn-outline btn-sm auto-inspect-btn" data-car="Toyota Camry Sport (CNG)" style="padding:0.5rem 0.85rem;">
                Hold Car
              </button>
            </div>
          </div>
        </article>

        <!-- Vehicle 3: Lexus RX 350 Luxury SUV -->
        <article class="auto-car-card" data-category="suv cng" style="background:#fff; border-radius:18px; border:1px solid #e2e8f0; overflow:hidden; box-shadow:0 10px 25px -5px rgba(0,0,0,0.06); transition:transform 0.3s ease, box-shadow 0.3s ease; display:flex; flex-direction:column;">
          <div style="height:230px; position:relative; overflow:hidden;">
            <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/photos/automotive/cng-suv-lexus.jpg' ); ?>" alt="Lexus RX 350 Luxury SUV" style="width:100%; height:100%; object-fit:cover;">
            <span style="position:absolute; top:1rem; left:1rem; background:linear-gradient(135deg, #f59e0b, #d97706); color:#fff; font-size:0.75rem; font-weight:800; text-transform:uppercase; letter-spacing:0.05em; padding:0.35rem 0.8rem; border-radius:9999px;">Executive AWD SUV</span>
            <span style="position:absolute; bottom:1rem; right:1rem; background:rgba(0,0,0,0.75); color:#fff; font-size:0.75rem; font-weight:700; padding:0.25rem 0.65rem; border-radius:6px;">Tokunbo / 2018</span>
          </div>
          <div style="padding:1.5rem; flex:1; display:flex; flex-direction:column;">
            <div style="display:flex; justify-content:space-between; align-items:flex-start; margin-bottom:0.5rem;">
              <h3 style="font-size:1.35rem; font-weight:800; color:var(--navy-900); margin:0;">Lexus RX 350 AWD</h3>
              <span style="font-size:1.25rem; font-weight:800; color:var(--orange-600);">₦34,000,000</span>
            </div>
            <p style="font-size:0.875rem; color:var(--slate-600); line-height:1.6; margin-bottom:1rem;">
              Flagship luxury crossover featuring Mark Levinson sound, ventilated leather seats, navigation, and optional trunk-concealed dual CNG tank system for long-distance zero-range-anxiety travel.
            </p>
            <div style="display:grid; grid-template-columns:1fr 1fr; gap:0.5rem; margin-bottom:1.25rem; font-size:0.8rem; color:var(--slate-700); background:#f8fafc; padding:0.75rem; border-radius:8px;">
              <div><strong>Engine:</strong> 3.5L V6 Dual VVT-i</div>
              <div><strong>Drivetrain:</strong> All-Wheel Drive</div>
              <div><strong>Fuel Type:</strong> Petrol (CNG Ready)</div>
              <div><strong>Condition:</strong> Super Clean Tokunbo</div>
            </div>
            <div style="margin-top:auto; display:flex; gap:0.75rem;">
              <a href="https://wa.me/2348055558197?text=Hello%20Kelvin%20Cameo%20Automobiles,%20I%20am%20interested%20in%20the%20Lexus%20RX%20350%20priced%20at%20N34,000,000." target="_blank" rel="noopener" class="btn btn-whatsapp btn-sm" style="flex:1; justify-content:center;">
                Inquire on WhatsApp
              </a>
              <button type="button" class="btn btn-outline btn-sm auto-inspect-btn" data-car="Lexus RX 350 AWD" style="padding:0.5rem 0.85rem;">
                Hold Car
              </button>
            </div>
          </div>
        </article>

        <!-- Vehicle 4: Toyota Hilux 4x4 (CNG Hybrid Utility) -->
        <article class="auto-car-card" data-category="commercial cng" style="background:#fff; border-radius:18px; border:1px solid #e2e8f0; overflow:hidden; box-shadow:0 10px 25px -5px rgba(0,0,0,0.06); transition:transform 0.3s ease, box-shadow 0.3s ease; display:flex; flex-direction:column;">
          <div style="height:230px; position:relative; overflow:hidden;">
            <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/photos/automotive/cng-hilux-truck.jpg' ); ?>" alt="Toyota Hilux 4x4 Dual-Fuel Pickup" style="width:100%; height:100%; object-fit:cover;">
            <span style="position:absolute; top:1rem; left:1rem; background:linear-gradient(135deg, #10b981, #059669); color:#fff; font-size:0.75rem; font-weight:800; text-transform:uppercase; letter-spacing:0.05em; padding:0.35rem 0.8rem; border-radius:9999px;">Commercial Workhorse</span>
            <span style="position:absolute; bottom:1rem; right:1rem; background:rgba(0,0,0,0.75); color:#fff; font-size:0.75rem; font-weight:700; padding:0.25rem 0.65rem; border-radius:6px;">2021 Double Cabin</span>
          </div>
          <div style="padding:1.5rem; flex:1; display:flex; flex-direction:column;">
            <div style="display:flex; justify-content:space-between; align-items:flex-start; margin-bottom:0.5rem;">
              <h3 style="font-size:1.35rem; font-weight:800; color:var(--navy-900); margin:0;">Toyota Hilux 4x4 (CNG)</h3>
              <span style="font-size:1.25rem; font-weight:800; color:var(--orange-600);">₦38,500,000</span>
            </div>
            <p style="font-size:0.875rem; color:var(--slate-600); line-height:1.6; margin-bottom:1rem;">
              Heavy-duty double-cabin pickup built for farm logistics, construction site oversight, and interstate cargo haulage. Factory chassis reinforced with underbody CNG tank guards.
            </p>
            <div style="display:grid; grid-template-columns:1fr 1fr; gap:0.5rem; margin-bottom:1.25rem; font-size:0.8rem; color:var(--slate-700); background:#f8fafc; padding:0.75rem; border-radius:8px;">
              <div><strong>Engine:</strong> 2.7L Petrol + CNG</div>
              <div><strong>Drive:</strong> Selectable 4WD</div>
              <div><strong>Payload:</strong> 1,100 kg Cargo</div>
              <div><strong>Cylinder:</strong> 80L Heavy Composite</div>
            </div>
            <div style="margin-top:auto; display:flex; gap:0.75rem;">
              <a href="https://wa.me/2348055558197?text=Hello%20Kelvin%20Cameo%20Automobiles,%20I%20am%20interested%20in%20the%20Toyota%20Hilux%204x4%20(CNG)%20priced%20at%20N38,500,000." target="_blank" rel="noopener" class="btn btn-whatsapp btn-sm" style="flex:1; justify-content:center;">
                Inquire on WhatsApp
              </a>
              <button type="button" class="btn btn-outline btn-sm auto-inspect-btn" data-car="Toyota Hilux 4x4 (CNG)" style="padding:0.5rem 0.85rem;">
                Hold Car
              </button>
            </div>
          </div>
        </article>

        <!-- Vehicle 5: Toyota HiAce 16-Seater Bus (CNG Mass Transit) -->
        <article class="auto-car-card" data-category="commercial cng" style="background:#fff; border-radius:18px; border:1px solid #e2e8f0; overflow:hidden; box-shadow:0 10px 25px -5px rgba(0,0,0,0.06); transition:transform 0.3s ease, box-shadow 0.3s ease; display:flex; flex-direction:column;">
          <div style="height:230px; position:relative; overflow:hidden;">
            <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/photos/automotive/cng-hiace-bus.jpg' ); ?>" alt="Toyota HiAce 16-Passenger Bus CNG" style="width:100%; height:100%; object-fit:cover;">
            <span style="position:absolute; top:1rem; left:1rem; background:linear-gradient(135deg, #0284c7, #0369a1); color:#fff; font-size:0.75rem; font-weight:800; text-transform:uppercase; letter-spacing:0.05em; padding:0.35rem 0.8rem; border-radius:9999px;">Commercial Fleet King</span>
            <span style="position:absolute; bottom:1rem; right:1rem; background:rgba(0,0,0,0.75); color:#fff; font-size:0.75rem; font-weight:700; padding:0.25rem 0.65rem; border-radius:6px;">High-Roof / 2017</span>
          </div>
          <div style="padding:1.5rem; flex:1; display:flex; flex-direction:column;">
            <div style="display:flex; justify-content:space-between; align-items:flex-start; margin-bottom:0.5rem;">
              <h3 style="font-size:1.35rem; font-weight:800; color:var(--navy-900); margin:0;">Toyota HiAce Commuter (CNG)</h3>
              <span style="font-size:1.25rem; font-weight:800; color:var(--orange-600);">₦26,000,000</span>
            </div>
            <p style="font-size:0.875rem; color:var(--slate-600); line-height:1.6; margin-bottom:1rem;">
              The undisputed choice for intercity transport operators and school shuttle services. Converted to bi-fuel CNG to slash operational costs on routes connecting Abuja, Suleja, Minna, and Kaduna.
            </p>
            <div style="display:grid; grid-template-columns:1fr 1fr; gap:0.5rem; margin-bottom:1.25rem; font-size:0.8rem; color:var(--slate-700); background:#f8fafc; padding:0.75rem; border-radius:8px;">
              <div><strong>Capacity:</strong> 16 Passengers</div>
              <div><strong>Engine:</strong> 2.7L VVT-i Petrol</div>
              <div><strong>CNG Range:</strong> 240 km on single fill</div>
              <div><strong>Cooling:</strong> Dual A/C Vents</div>
            </div>
            <div style="margin-top:auto; display:flex; gap:0.75rem;">
              <a href="https://wa.me/2348055558197?text=Hello%20Kelvin%20Cameo%20Automobiles,%20I%20am%20interested%20in%20the%20Toyota%20HiAce%20Bus%20(CNG)%20priced%20at%20N26,000,000." target="_blank" rel="noopener" class="btn btn-whatsapp btn-sm" style="flex:1; justify-content:center;">
                Inquire on WhatsApp
              </a>
              <button type="button" class="btn btn-outline btn-sm auto-inspect-btn" data-car="Toyota HiAce Commuter Bus (CNG)" style="padding:0.5rem 0.85rem;">
                Hold Car
              </button>
            </div>
          </div>
        </article>

        <!-- Vehicle 6: Honda Accord Touring (CNG Bi-Fuel) -->
        <article class="auto-car-card" data-category="cng sedan" style="background:#fff; border-radius:18px; border:1px solid #e2e8f0; overflow:hidden; box-shadow:0 10px 25px -5px rgba(0,0,0,0.06); transition:transform 0.3s ease, box-shadow 0.3s ease; display:flex; flex-direction:column;">
          <div style="height:230px; position:relative; overflow:hidden;">
            <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/photos/automotive/cng-sedan-honda.jpg' ); ?>" alt="Honda Accord Touring Sedan" style="width:100%; height:100%; object-fit:cover;">
            <span style="position:absolute; top:1rem; left:1rem; background:linear-gradient(135deg, #0284c7, #0369a1); color:#fff; font-size:0.75rem; font-weight:800; text-transform:uppercase; letter-spacing:0.05em; padding:0.35rem 0.8rem; border-radius:9999px;">CNG + Petrol Bi-Fuel</span>
            <span style="position:absolute; bottom:1rem; right:1rem; background:rgba(0,0,0,0.75); color:#fff; font-size:0.75rem; font-weight:700; padding:0.25rem 0.65rem; border-radius:6px;">Tokunbo / 2017</span>
          </div>
          <div style="padding:1.5rem; flex:1; display:flex; flex-direction:column;">
            <div style="display:flex; justify-content:space-between; align-items:flex-start; margin-bottom:0.5rem;">
              <h3 style="font-size:1.35rem; font-weight:800; color:var(--navy-900); margin:0;">Honda Accord EX-L</h3>
              <span style="font-size:1.25rem; font-weight:800; color:var(--orange-600);">₦16,500,000</span>
            </div>
            <p style="font-size:0.875rem; color:var(--slate-600); line-height:1.6; margin-bottom:1rem;">
              Smooth executive sedan with push-button start, leather seating, lane departure watch, and high-precision Italian CNG electronic pressure regulation for flawless acceleration.
            </p>
            <div style="display:grid; grid-template-columns:1fr 1fr; gap:0.5rem; margin-bottom:1.25rem; font-size:0.8rem; color:var(--slate-700); background:#f8fafc; padding:0.75rem; border-radius:8px;">
              <div><strong>Engine:</strong> 2.4L Earth Dreams</div>
              <div><strong>Transmission:</strong> CVT Automatic</div>
              <div><strong>Fuel Type:</strong> Petrol + CNG Hybrid</div>
              <div><strong>Mileage:</strong> 61,000 miles</div>
            </div>
            <div style="margin-top:auto; display:flex; gap:0.75rem;">
              <a href="https://wa.me/2348055558197?text=Hello%20Kelvin%20Cameo%20Automobiles,%20I%20am%20interested%20in%20the%20Honda%20Accord%20EX-L%20(CNG)%20priced%20at%20N16,500,000." target="_blank" rel="noopener" class="btn btn-whatsapp btn-sm" style="flex:1; justify-content:center;">
                Inquire on WhatsApp
              </a>
              <button type="button" class="btn btn-outline btn-sm auto-inspect-btn" data-car="Honda Accord EX-L (CNG)" style="padding:0.5rem 0.85rem;">
                Hold Car
              </button>
            </div>
          </div>
        </article>

      </div>
    </div>
  </section>

  <!-- ====================================================================
       WHY SWITCH TO CNG? (ECONOMIC & TECHNICAL ADVANTAGES)
       ==================================================================== -->
  <section id="cng-benefits" class="section-padding" style="background:linear-gradient(180deg, #f0fdf4 0%, #ffffff 100%); border-top:1px solid #bbf7d0;">
    <div class="container">
      <div class="section-head" style="text-align:center; max-width:820px; margin:0 auto 3.5rem;">
        <span class="section-badge" style="background:rgba(16,185,129,0.18); color:#047857; font-weight:700;">Clean Energy Revolution</span>
        <h2 class="section-title" style="font-size:2.4rem; margin-top:0.6rem;">Why Nigerian Drivers &amp; Fleets Are Switching to CNG</h2>
        <p class="section-subtitle">
          With gasoline prices topping ₦1,000+ per liter, Compressed Natural Gas (CNG) is transforming transport economics across Nigeria at approximately <strong>₦230 &ndash; ₦250 per Standard Cubic Meter (SCM)</strong>.
        </p>
      </div>

      <div class="grid-2-responsive" style="align-items:center; gap:3rem; margin-bottom:3.5rem;">
        <div>
          <h3 style="font-size:1.85rem; font-weight:800; color:var(--navy-900); margin-bottom:1.25rem;">
            Massive Fuel Cost Savings &amp; True Bi-Fuel Peace of Mind
          </h3>
          <p style="color:var(--slate-600); line-height:1.7; margin-bottom:1.25rem;">
            A vehicle converted or factory-fitted with CNG does not lose its petrol tank. It becomes a <strong>Bi-Fuel Hybrid</strong>: you can drive on CNG for maximum savings, and if CNG is ever depleted, the car switches automatically to petrol without stalling or sputtering!
          </p>

          <div style="display:flex; flex-direction:column; gap:1.25rem;">
            <div style="display:flex; gap:1rem; align-items:flex-start;">
              <div style="width:36px; height:36px; border-radius:50%; background:#10b981; color:#fff; display:flex; align-items:center; justify-content:center; font-weight:800; flex-shrink:0;">1</div>
              <div>
                <h5 style="font-size:1.05rem; font-weight:700; color:var(--navy-900); margin-bottom:0.25rem;">Over ₦250,000 Saved Monthly for Commuters</h5>
                <p style="font-size:0.875rem; color:var(--slate-600); margin:0;">Daily commuters along the Suleja-Abuja expressway reduce their monthly fuel bills from over ₦350,000 to under ₦90,000.</p>
              </div>
            </div>

            <div style="display:flex; gap:1rem; align-items:flex-start;">
              <div style="width:36px; height:36px; border-radius:50%; background:#10b981; color:#fff; display:flex; align-items:center; justify-content:center; font-weight:800; flex-shrink:0;">2</div>
              <div>
                <h5 style="font-size:1.05rem; font-weight:700; color:var(--navy-900); margin-bottom:0.25rem;">Cleaner Combustion &amp; Longer Engine Life</h5>
                <p style="font-size:0.875rem; color:var(--slate-600); margin:0;">Natural gas burns clean with zero carbon deposits, keeping engine oil fresh and doubling spark plug and valve service intervals.</p>
              </div>
            </div>

            <div style="display:flex; gap:1rem; align-items:flex-start;">
              <div style="width:36px; height:36px; border-radius:50%; background:#10b981; color:#fff; display:flex; align-items:center; justify-content:center; font-weight:800; flex-shrink:0;">3</div>
              <div>
                <h5 style="font-size:1.05rem; font-weight:700; color:var(--navy-900); margin-bottom:0.25rem;">Safety-Certified Pressure Cylinders</h5>
                <p style="font-size:0.875rem; color:var(--slate-600); margin:0;">Every CNG tank we install is certified Type-1 or Type-2, blast-resistant, equipped with emergency pressure-relief safety valves.</p>
              </div>
            </div>
          </div>
        </div>

        <div>
          <div style="background:#fff; border-radius:18px; border:1px solid #bbf7d0; padding:2rem; box-shadow:0 15px 35px -10px rgba(16,185,129,0.15);">
            <h4 style="font-size:1.35rem; font-weight:800; color:var(--navy-900); margin-bottom:1rem; text-align:center;">Fuel Cost Comparison: 500km Travel</h4>
            
            <div style="display:grid; grid-template-columns:1fr 1fr; gap:1.25rem; margin-bottom:1.5rem;">
              <div style="background:#fee2e2; border-radius:12px; padding:1.25rem; text-align:center;">
                <span style="font-size:0.75rem; font-weight:800; color:#991b1b; text-transform:uppercase; display:block; margin-bottom:0.35rem;">Standard Petrol (PMS)</span>
                <strong style="font-size:1.6rem; color:#dc2626; display:block;">₦55,000</strong>
                <span style="font-size:0.75rem; color:#7f1d1d;">~50 Litres @ ₦1,100/L</span>
              </div>
              <div style="background:#dcfce7; border-radius:12px; padding:1.25rem; text-align:center; border:2px solid #10b981;">
                <span style="font-size:0.75rem; font-weight:800; color:#166534; text-transform:uppercase; display:block; margin-bottom:0.35rem;">Kelvin Cameo CNG</span>
                <strong style="font-size:1.6rem; color:#15803d; display:block;">₦16,500</strong>
                <span style="font-size:0.75rem; color:#14532d;">~66 SCM @ ₦250/SCM</span>
              </div>
            </div>

            <div style="text-align:center; padding:1rem; background:#f0fdf4; border-radius:10px; margin-bottom:1.5rem;">
              <span style="font-weight:800; color:#15803d; font-size:1.05rem;">You Save ₦38,500 on Every 500 Kilometers!</span>
            </div>

            <a href="#cng-conversion-form" class="btn btn-agro btn-lg" style="width:100%; text-align:center;">Book CNG Conversion or Purchase</a>
          </div>
        </div>
      </div>

    </div>
  </section>

  <!-- ====================================================================
       CNG CONVERSION WORKSHOP & AFTER-SALES
       ==================================================================== -->
  <section class="section-padding" style="background:var(--sand-50); border-top:1px solid var(--sand-200);">
    <div class="container">
      <div class="grid-2-responsive" style="align-items:center; gap:3rem;">
        <div>
          <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/photos/automotive/cng-conversion-kit.jpg' ); ?>" alt="Certified CNG Dual-Fuel Conversion Kit" style="width:100%; height:440px; object-fit:cover; border-radius:var(--radius-xl); box-shadow:var(--shadow-xl); border:1px solid var(--slate-200);">
        </div>
        <div>
          <span class="section-badge" style="background:rgba(14,165,233,0.15); color:#0284c7;">Automotive Engineering Services</span>
          <h2 class="section-title" style="margin-top:0.5rem; font-size:2.35rem;">Already Have a Car? Convert It to Bi-Fuel CNG!</h2>
          <p style="color:var(--slate-600); line-height:1.75; margin-bottom:1.5rem;">
            You don't need to buy a brand new vehicle to enjoy the CNG savings advantage. Our certified conversion technicians install premium, computer-mapped <strong>Italian sequential bi-fuel conversion kits</strong> on your existing petrol or diesel car within <strong>48 hours</strong>.
          </p>
          <ul style="display:flex; flex-direction:column; gap:0.6rem; color:var(--slate-700); font-weight:600; font-size:0.92rem; margin-bottom:2rem;">
            <li style="display:flex; align-items:center; gap:0.6rem;">
              <svg viewBox="0 0 20 20" fill="#10b981" width="18" height="18"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
              Compatible with 4-Cylinder, 6-Cylinder &amp; V8 Petrol Engines
            </li>
            <li style="display:flex; align-items:center; gap:0.6rem;">
              <svg viewBox="0 0 20 20" fill="#10b981" width="18" height="18"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
              Digital Fuel Gauge &amp; Instant Dashboard Petrol/CNG Switch
            </li>
            <li style="display:flex; align-items:center; gap:0.6rem;">
              <svg viewBox="0 0 20 20" fill="#10b981" width="18" height="18"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
              12-Month Comprehensive Warranty on Kit Components &amp; Workmanship
            </li>
            <li style="display:flex; align-items:center; gap:0.6rem;">
              <svg viewBox="0 0 20 20" fill="#10b981" width="18" height="18"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
              Full Safety Leak Testing &amp; Pressure Certification Documents
            </li>
          </ul>
          <a href="#cng-conversion-form" class="btn btn-primary btn-lg">Request Conversion Quote</a>
        </div>
      </div>
    </div>
  </section>

  <!-- ====================================================================
       INTERACTIVE VEHICLE INQUIRY & CNG BOOKING FORM
       ==================================================================== -->
  <section id="cng-conversion-form" class="section-padding" style="background:var(--white);">
    <div class="container">
      <div style="max-width:860px; margin:0 auto; background:var(--sand-50); border:1px solid var(--sand-200); border-radius:var(--radius-xl); padding: clamp(1.5rem, 5vw, 3.5rem); box-shadow:var(--shadow-lg);">
        <div style="text-align:center; margin-bottom:2.5rem;">
          <span class="section-badge" style="background:rgba(14,165,233,0.15); color:#0284c7; font-weight:700;">Vehicle Order &amp; Inspection Desk</span>
          <h2 class="section-title" style="margin-top:0.5rem; font-size:2.2rem;">Hold a Car or Book a CNG Conversion</h2>
          <p class="section-subtitle">
            Submit your car preference or vehicle details below. Our automotive specialists will reserve the vehicle for physical inspection or schedule your conversion date.
          </p>
        </div>

        <form id="autoSalesForm" onsubmit="event.preventDefault(); showToast('Inquiry Received', 'Our Automobile desk will contact you shortly with vehicle inspection details.'); this.reset();">
          <div class="form-group-row">
            <div class="form-group">
              <label>Full Name *</label>
              <input type="text" id="autoContactName" class="form-control" placeholder="e.g. Engr. Babatunde Alabi" required>
            </div>
            <div class="form-group">
              <label>Phone / WhatsApp *</label>
              <input type="tel" id="autoContactPhone" class="form-control" placeholder="0803 123 4567" required>
            </div>
          </div>

          <div class="form-group-row">
            <div class="form-group">
              <label>Email Address</label>
              <input type="email" id="autoContactEmail" class="form-control" placeholder="buyer@example.com">
            </div>
            <div class="form-group">
              <label>Service / Vehicle of Interest *</label>
              <select id="autoServiceChoice" class="form-control" required>
                <option value="">-- Select Option --</option>
                <option value="Buy Toyota Corolla LE (CNG)">Buy Toyota Corolla LE (CNG Bi-Fuel) - ₦12.8M</option>
                <option value="Buy Toyota Camry Sport (CNG)">Buy Toyota Camry Sport (CNG Bi-Fuel) - ₦21.5M</option>
                <option value="Buy Lexus RX 350 AWD">Buy Lexus RX 350 AWD - ₦34M</option>
                <option value="Buy Toyota Hilux 4x4 (CNG)">Buy Toyota Hilux 4x4 (CNG) - ₦38.5M</option>
                <option value="Buy Toyota HiAce Bus (CNG)">Buy Toyota HiAce Bus (CNG) - ₦26M</option>
                <option value="Buy Honda Accord EX-L (CNG)">Buy Honda Accord EX-L (CNG) - ₦16.5M</option>
                <option value="CNG Conversion Kit Installation">Convert My Existing Car to CNG Bi-Fuel</option>
                <option value="Trade-In / Swap Vehicle">Car Swap / Trade-In Valuation</option>
                <option value="Custom Import Request">Order Specific Foreign Vehicle (Tokunbo)</option>
              </select>
            </div>
          </div>

          <div class="form-group-row">
            <div class="form-group">
              <label>Your Current Vehicle (If Converting or Swapping)</label>
              <input type="text" class="form-control" placeholder="e.g. 2012 Toyota Camry 4-Cylinder">
            </div>
            <div class="form-group">
              <label>Preferred Inspection / Conversion Timeline</label>
              <select class="form-control">
                <option value="Immediate (This Week)">Immediate (This Week)</option>
                <option value="Within 2 Weeks">Within 2 Weeks</option>
                <option value="Next Month">Next Month</option>
                <option value="Flexible / Just Inquiring">Flexible / Just Inquiring</option>
              </select>
            </div>
          </div>

          <div class="form-group" style="margin-bottom:1.75rem;">
            <label>Additional Notes / Questions</label>
            <textarea class="form-control" rows="3" placeholder="Tell us any specific requirements, financing questions, or desired inspection date..."></textarea>
          </div>

          <div style="display:flex; gap:1rem; flex-wrap:wrap;">
            <button type="submit" class="btn btn-primary btn-lg" style="flex:1; min-width:240px; justify-content:center;">
              Submit Automobile Inquiry
            </button>
            <a href="https://wa.me/2348055558197?text=Hello%20Kelvin%20Cameo%20Automobiles,%20I%20would%20like%20to%20inquire%20about%20your%20available%20cars%20and%20CNG%20options." target="_blank" rel="noopener" class="btn btn-whatsapp btn-lg" style="display:inline-flex; align-items:center; gap:0.5rem; justify-content:center;">
              <svg viewBox="0 0 24 24" width="20" height="20" fill="currentColor"><path d="M12.031 6.172c-3.181 0-5.767 2.586-5.768 5.766-.001 1.298.38 2.27 1.019 3.287l-.582 2.128 2.182-.573c.978.58 1.911.928 3.145.929 3.178 0 5.767-2.587 5.768-5.766.001-3.187-2.575-5.77-5.764-5.771zm3.392 8.244c-.144.405-.837.774-1.17.824-.299.045-.677.063-1.092-.069-.252-.08-.575-.187-.988-.365-1.739-.751-2.874-2.502-2.961-2.617-.087-.116-.708-.94-.708-1.793s.448-1.273.607-1.446c.159-.173.346-.217.462-.217l.332.006c.106.005.249-.04.39.298.144.347.491 1.2.534 1.287.043.087.072.188.014.304-.058.116-.087.188-.173.289l-.26.304c-.087.086-.177.18-.076.354.101.174.449.741.964 1.201.662.591 1.221.774 1.394.86.174.086.275.073.376-.044.101-.116.433-.506.549-.68.116-.173.231-.145.39-.087s1.011.477 1.184.564.289.13.332.202c.045.072.045.419-.1.824z"/></svg>
              <span>Instant WhatsApp Concierge</span>
            </a>
          </div>
        </form>
      </div>
    </div>
  </section>

  <!-- Location & Showroom Contact -->
  <section class="section-padding" style="background:var(--sand-50); border-top:1px solid var(--sand-200);">
    <div class="container">
      <div style="max-width:860px; margin:0 auto; text-align:center;">
        <span class="section-badge" style="background:rgba(16,185,129,0.15); color:var(--agro-emerald);">Showroom Location</span>
        <h2 class="section-title" style="margin-top:0.5rem;">Visit Our Physical Car Lot &amp; CNG Workshop</h2>
        <p style="color:var(--slate-600); line-height:1.75; font-size:1.05rem; margin-bottom:2rem;">
          Conveniently located along Maje-Minna Road, directly <strong>opposite Suleiman Barau Technical College, Kwamba, Suleja, Niger State (Abuja Corridor)</strong>. Come test drive any car or get a free technical diagnosis for CNG conversion.
        </p>
        <div style="display:flex; justify-content:center; gap:1.25rem; flex-wrap:wrap;">
          <a href="<?php echo kc_url('contact'); ?>" class="btn btn-secondary btn-lg">Get Driving Directions</a>
          <a href="https://wa.me/2348055558197?text=Hello%20Kelvin%20Cameo,%20I%20would%20like%20to%20schedule%20a%20car%20test%20drive." target="_blank" rel="noopener" class="btn btn-whatsapp btn-lg">Schedule Test Drive on WhatsApp</a>
        </div>
      </div>
    </div>
  </section>

  <script>
    document.addEventListener('DOMContentLoaded', function() {
      // Inventory Filtering
      const filterBtns = document.querySelectorAll('#autoFilterBar .auto-filter-btn');
      const cards = document.querySelectorAll('#autoInventoryGrid .auto-car-card');

      filterBtns.forEach(btn => {
        btn.addEventListener('click', function() {
          filterBtns.forEach(b => {
            b.classList.remove('active');
            b.style.background = '';
            b.style.color = '';
            b.style.borderColor = '';
          });
          this.classList.add('active');
          this.style.background = 'var(--primary-600, #0b4ea2)';
          this.style.color = '#fff';

          const filter = this.getAttribute('data-filter');
          cards.forEach(card => {
            if (filter === 'all') {
              card.style.display = 'flex';
            } else {
              const cats = card.getAttribute('data-category') || '';
              if (cats.indexOf(filter) !== -1) {
                card.style.display = 'flex';
              } else {
                card.style.display = 'none';
              }
            }
          });
        });
      });

      // Quick Hold Car buttons populate dropdown
      const holdBtns = document.querySelectorAll('.auto-inspect-btn');
      const serviceSelect = document.getElementById('autoServiceChoice');
      const formSection = document.getElementById('cng-conversion-form');

      holdBtns.forEach(btn => {
        btn.addEventListener('click', function() {
          const carName = this.getAttribute('data-car');
          if (serviceSelect) {
            for (let i = 0; i < serviceSelect.options.length; i++) {
              if (serviceSelect.options[i].text.indexOf(carName) !== -1) {
                serviceSelect.selectedIndex = i;
                break;
              }
            }
          }
          if (formSection) {
            formSection.scrollIntoView({ behavior: 'smooth' });
          }
        });
      });
    });
  </script>

<?php
get_footer();
