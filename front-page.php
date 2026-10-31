<?php
/**
 * Kelvin Cameo Organization (RC: 1613032)
 * Executive Front Page Template — World-Class Luxury Revamp
 *
 * @package Kelvin_Cameo
 */

get_header();
?>

  <!-- ====================================================================
       HERO — Prestigious Conglomerate Experience with Ambient Sector Slider
       ==================================================================== -->
  <section class="hp-hero">
    <!-- Ambient Ken Burns Background Slideshow (Authentic Operating Sectors) -->
    <div class="hp-hero-bg-slider" aria-hidden="true">
      <div class="hp-hero-slide active" style="background-image: url('<?php echo esc_url( get_template_directory_uri() . '/assets/photos/resort/exterior.jpg' ); ?>');" data-index="0"></div>
      <div class="hp-hero-slide" style="background-image: url('<?php echo esc_url( get_template_directory_uri() . '/assets/photos/kelvin-filling-station-canopy-clean.jpg' ); ?>');" data-index="1"></div>
      <div class="hp-hero-slide" style="background-image: url('<?php echo esc_url( get_template_directory_uri() . '/assets/photos/cameo-real-estate-luxury.jpg' ); ?>');" data-index="2"></div>
      <div class="hp-hero-slide" style="background-image: url('<?php echo esc_url( get_template_directory_uri() . '/assets/photos/agriculture/maize-planting-field.jpg' ); ?>');" data-index="3"></div>
      <div class="hp-hero-slide" style="background-image: url('<?php echo esc_url( get_template_directory_uri() . '/assets/photos/automotive/dealership-showroom.jpg' ); ?>');" data-index="4"></div>
      <div class="hp-hero-overlay"></div>
    </div>

    <div class="container hp-hero-content-wrap">
      <div class="hp-hero-inner">
        <!-- Live Verified Badge with Animated Pulse Indicator -->
        <div class="hp-hero-badge" style="background: rgba(3, 12, 26, 0.75); border: 1px solid rgba(245, 158, 11, 0.4); box-shadow: 0 4px 20px rgba(0,0,0,0.3);">
          <span class="hp-pulse-dot" style="background:#22c55e;" aria-hidden="true"></span>
          <span style="color:#fef08a; font-weight:800; letter-spacing:0.04em;">RC: 1613032 &bull; CAC VERIFIED CONGLOMERATE &bull; NIGERIA</span>
        </div>

        <h1 class="hp-hero-title">
          <span class="hp-hero-line-1">Precision Energy. Dispute-Free Land.</span><br>
          <span class="hp-hero-line-2">Commercial Agro. <span class="hp-title-highlight" style="background: linear-gradient(135deg, #fde047 0%, #f97316 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">Premier Hospitality.</span></span>
        </h1>

        <p class="hp-hero-desc">
          Kelvin Cameo Organization (RC: 1613032) is a diversified multi-sector powerhouse delivering calibrated petroleum dispensing, verified master-planned real estate, industrial agro-processing, automotive mobility, and Suleja’s premier luxury resort hotel.
        </p>

        <!-- Interactive 5-Sector Selector Pills -->
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
          <button class="hp-sector-pill" data-slide="4" type="button" role="tab" aria-selected="false">
            <span class="pill-num">05</span> Automobiles &amp; CNG
          </button>
        </div>

        <div class="hp-hero-actions" style="margin-top: 1.75rem;">
          <a href="<?php echo kc_url('reserve'); ?>" class="btn-gold btn-lg" style="padding: 0.85rem 1.75rem; border-radius: 12px; font-size: 1rem;">
            <svg viewBox="0 0 24 24" width="20" height="20" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path></svg>
            Book Hotel Room
          </a>
          <a href="#sectors" class="btn btn-outline-white btn-lg" style="padding: 0.85rem 1.6rem; border-radius: 12px; font-size: 1rem;">
            Explore All 5 Sectors &darr;
          </a>
          <a href="https://wa.me/2348055558197?text=Hello%20Kelvin%20Cameo%2C%20I%20would%20like%20to%20make%20an%20inquiry%20regarding%20your%20services." target="_blank" rel="noopener" class="btn btn-whatsapp btn-lg" style="padding: 0.85rem 1.5rem; border-radius: 12px; font-size: 1rem;">
            <svg viewBox="0 0 24 24" width="20" height="20" fill="currentColor">
              <path d="M12.04 2c-5.46 0-9.91 4.45-9.91 9.91 0 1.75.46 3.45 1.32 4.95L2.05 22l5.25-1.38c1.45.79 3.08 1.21 4.74 1.21 5.46 0 9.91-4.45 9.91-9.91 0-2.65-1.03-5.14-2.9-7.01A9.816 9.816 0 0 0 12.04 2z"/>
            </svg>
            WhatsApp Concierge
          </a>
        </div>

        <!-- Micro-Trust Guarantee Strip -->
        <div class="hp-hero-trust-bar" style="margin-top: 2.25rem;">
          <div class="hp-trust-item">
            <svg viewBox="0 0 20 20" fill="#22c55e" width="16" height="16"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
            <span>24/7 Solar &amp; Gen Power</span>
          </div>
          <div class="hp-trust-item">
            <svg viewBox="0 0 20 20" fill="#22c55e" width="16" height="16"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
            <span>10L = 10L Calibrated Fuel</span>
          </div>
          <div class="hp-trust-item">
            <svg viewBox="0 0 20 20" fill="#22c55e" width="16" height="16"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
            <span>C of O Verifiable Land</span>
          </div>
          <div class="hp-trust-item">
            <svg viewBox="0 0 20 20" fill="#22c55e" width="16" height="16"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
            <span>1,000-Seat Banquet Hall</span>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ====================================================================
       INSTANT ROOM AVAILABILITY BAR — REDESIGNED & ANIMATED LUXURY ENGINE
       ==================================================================== -->
  <div class="container container-wide hp-booking-bar-wrap" style="position: relative; z-index: 25; margin-top: -3.5rem; margin-bottom: 2rem;">
    <div class="hp-booking-bar-luxury" style="background: linear-gradient(135deg, rgba(8, 20, 44, 0.96) 0%, rgba(4, 10, 24, 0.98) 100%); border: 1.5px solid rgba(212, 175, 55, 0.4); border-radius: 20px; box-shadow: 0 16px 45px rgba(0,0,0,0.5), 0 0 25px rgba(212,175,55,0.15); backdrop-filter: blur(16px); padding: 22px 26px; transition: transform 0.3s ease, box-shadow 0.3s ease;">
      
      <!-- Top Micro-Badge -->
      <div style="display: flex; align-items: center; justify-content: space-between; margin-bottom: 14px; flex-wrap: wrap; gap: 8px;">
        <div style="display: inline-flex; align-items: center; gap: 8px; font-size: 11.5px; font-weight: 800; letter-spacing: 0.8px; color: #d4af37; text-transform: uppercase;">
          <span style="width: 8px; height: 8px; border-radius: 50%; background: #22c55e; box-shadow: 0 0 10px #22c55e; display: inline-block;"></span>
          DIRECT ROOM RESERVATION ENGINE &bull; 50 SUITES &amp; ROOMS
        </div>
        <div style="font-size: 11.5px; color: #94a3b8; font-weight: 600;">
          🔒 Best Rate Guarantee &bull; Instant Confirmation
        </div>
      </div>

      <form action="<?php echo kc_url('reserve'); ?>" method="get" class="hp-booking-grid-luxury" style="display: grid; grid-template-columns: 2fr 1.25fr 1.25fr 1.25fr 1.4fr; gap: 14px; align-items: end;">
        
        <!-- Field 1: Room Category -->
        <div class="hp-booking-field-luxury">
          <label for="hpRoomSelect" style="display: flex; align-items: center; gap: 6px; font-size: 12px; font-weight: 700; color: #cbd5e1; margin-bottom: 6px; letter-spacing: 0.2px;">
            <svg viewBox="0 0 24 24" width="14" height="14" fill="none" stroke="#d4af37" stroke-width="2.5"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path></svg>
            Select Room Category
          </label>
          <div class="hp-input-inner-wrap" style="position: relative;">
            <select id="hpRoomSelect" name="room" required style="width: 100%; height: 50px; background: rgba(255,255,255,0.06); border: 1.5px solid rgba(212,175,55,0.3); border-radius: 10px; color: #ffffff; padding: 0 14px; font-size: 13.5px; font-weight: 600; outline: none; transition: all 0.25s ease;">
              <option value="deluxe-uk" selected style="background: #09172e; color: #ffffff;">Deluxe (UK Room) (₦25,000 - ₦45,000)</option>
              <option value="love-night" style="background: #09172e; color: #ffffff;">Love Night Room (₦45,000 / Night) &bull; Rooms 401–415</option>
              <option value="golden-nest" style="background: #09172e; color: #ffffff;">Golden Nest Room (₦55,000 / Night) &bull; Rooms 416–430</option>
              <option value="suite" style="background: #09172e; color: #ffffff;">Executive VIP Suite (₦60,000 / Night) &bull; Rooms 422 &amp; 428</option>
              <option value="apartment" style="background: #09172e; color: #ffffff;">Luxury Serviced Apartment (₦160,000 / Night) &bull; 6 Apartments</option>
            </select>
          </div>
        </div>

        <!-- Field 2: Check-In Date -->
        <div class="hp-booking-field-luxury">
          <label for="hpCheckIn" style="display: flex; align-items: center; gap: 6px; font-size: 12px; font-weight: 700; color: #cbd5e1; margin-bottom: 6px; letter-spacing: 0.2px;">
            <svg viewBox="0 0 24 24" width="14" height="14" fill="none" stroke="#d4af37" stroke-width="2.5"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line></svg>
            Check-In Date
          </label>
          <div class="hp-input-inner-wrap" style="position: relative;">
            <input type="date" id="hpCheckIn" name="checkin" value="<?php echo date('Y-m-d'); ?>" min="<?php echo date('Y-m-d'); ?>" required style="width: 100%; height: 50px; background: rgba(255,255,255,0.06); border: 1.5px solid rgba(212,175,55,0.3); border-radius: 10px; color: #ffffff; padding: 0 14px; font-size: 13.5px; font-weight: 600; outline: none; transition: all 0.25s ease;">
          </div>
        </div>

        <!-- Field 3: Check-Out Date -->
        <div class="hp-booking-field-luxury">
          <label for="hpCheckOut" style="display: flex; align-items: center; gap: 6px; font-size: 12px; font-weight: 700; color: #cbd5e1; margin-bottom: 6px; letter-spacing: 0.2px;">
            <svg viewBox="0 0 24 24" width="14" height="14" fill="none" stroke="#d4af37" stroke-width="2.5"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line></svg>
            Check-Out Date
          </label>
          <div class="hp-input-inner-wrap" style="position: relative;">
            <input type="date" id="hpCheckOut" name="checkout" value="<?php echo date('Y-m-d', strtotime('+1 day')); ?>" min="<?php echo date('Y-m-d', strtotime('+1 day')); ?>" required style="width: 100%; height: 50px; background: rgba(255,255,255,0.06); border: 1.5px solid rgba(212,175,55,0.3); border-radius: 10px; color: #ffffff; padding: 0 14px; font-size: 13.5px; font-weight: 600; outline: none; transition: all 0.25s ease;">
          </div>
        </div>

        <!-- Field 4: Number of Guests -->
        <div class="hp-booking-field-luxury">
          <label for="hpGuests" style="display: flex; align-items: center; gap: 6px; font-size: 12px; font-weight: 700; color: #cbd5e1; margin-bottom: 6px; letter-spacing: 0.2px;">
            <svg viewBox="0 0 24 24" width="14" height="14" fill="none" stroke="#d4af37" stroke-width="2.5"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
            Number of Guests
          </label>
          <div class="hp-input-inner-wrap" style="position: relative;">
            <select id="hpGuests" name="guests" style="width: 100%; height: 50px; background: rgba(255,255,255,0.06); border: 1.5px solid rgba(212,175,55,0.3); border-radius: 10px; color: #ffffff; padding: 0 14px; font-size: 13.5px; font-weight: 600; outline: none; transition: all 0.25s ease;">
              <option value="1" style="background: #09172e; color: #ffffff;">1 Adult (Single)</option>
              <option value="2" selected style="background: #09172e; color: #ffffff;">2 Adults (Couple)</option>
              <option value="3" style="background: #09172e; color: #ffffff;">3 Adults (Family)</option>
              <option value="4+" style="background: #09172e; color: #ffffff;">4+ Adults / Delegation</option>
            </select>
          </div>
        </div>

        <!-- Submit Button with Shimmer Animation -->
        <div>
          <button type="submit" class="btn-booking-reserve-animated" style="width: 100%; height: 50px; background: linear-gradient(135deg, #d4af37 0%, #f59e0b 50%, #b89327 100%); color: #040914; border: none; border-radius: 10px; font-size: 14.5px; font-weight: 800; letter-spacing: 0.3px; cursor: pointer; display: inline-flex; align-items: center; justify-content: center; gap: 8px; position: relative; overflow: hidden; box-shadow: 0 4px 18px rgba(212,175,55,0.4); transition: all 0.25s ease;">
            <span style="position: relative; z-index: 2;">Check &amp; Reserve</span>
            <span class="btn-arrow" style="position: relative; z-index: 2; font-size: 17px; transition: transform 0.25s ease;">&rarr;</span>
            <span class="shimmer-sweep" aria-hidden="true"></span>
          </button>
        </div>

      </form>
    </div>
  </div>

  <!-- ====================================================================
       STATS STRIP — VERIFIABLE SCALE & ANIMATED METRIC COUNTERS
       ==================================================================== -->
  <section class="hp-stats-bar" id="hpStatsBar" style="background: linear-gradient(180deg, #020713 0%, #061126 50%, #030814 100%); border-top: 1px solid rgba(212, 175, 55, 0.22); border-bottom: 1px solid rgba(212, 175, 55, 0.22); padding: 3rem 0; position: relative; overflow: hidden;">
    
    <div class="container container-wide">
      <div class="hp-stats-row-luxury" style="display: grid; grid-template-columns: repeat(5, 1fr); gap: 16px;">
        
        <!-- Stat 1: CAC Incorporation -->
        <div class="hp-stat-card-luxury">
          <div class="hp-stat-icon-wrap" aria-hidden="true">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
          </div>
          <div class="hp-stat-val-wrap">
            <span class="hp-stat-number hp-counter" data-target="1613032" style="font-size: 1.85rem; font-weight: 900; letter-spacing: -0.5px;">1613032</span>
            <span class="hp-stat-suffix" style="font-size: 0.95rem; font-weight: 800; color: #f59e0b; margin-left: 4px;">RC</span>
          </div>
          <div class="hp-stat-label">CAC Corporate Incorporation</div>
        </div>

        <!-- Stat 2: Rooms & Suites -->
        <div class="hp-stat-card-luxury">
          <div class="hp-stat-icon-wrap" aria-hidden="true">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path></svg>
          </div>
          <div class="hp-stat-val-wrap">
            <span class="hp-stat-number hp-counter" data-target="50" style="font-size: 1.85rem; font-weight: 900;">50</span>
            <span class="hp-stat-suffix" style="font-size: 1.25rem; font-weight: 900; color: #d4af37; margin-left: 2px;">+</span>
          </div>
          <div class="hp-stat-label">Luxury Rooms &amp; Suites (From ₦20k)</div>
        </div>

        <!-- Stat 3: Banquet Hall -->
        <div class="hp-stat-card-luxury">
          <div class="hp-stat-icon-wrap" aria-hidden="true">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle></svg>
          </div>
          <div class="hp-stat-val-wrap">
            <span class="hp-stat-number hp-counter" data-target="1000" data-format="comma" style="font-size: 1.85rem; font-weight: 900;">1,000</span>
            <span class="hp-stat-suffix" style="font-size: 0.9rem; font-weight: 800; color: #f59e0b; margin-left: 4px;">Guests</span>
          </div>
          <div class="hp-stat-label">Grand Banquet &amp; Summit Hall</div>
        </div>

        <!-- Stat 4: Fuel Calibration -->
        <div class="hp-stat-card-luxury">
          <div class="hp-stat-icon-wrap" aria-hidden="true">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M3 2v20M21 2v20M12 2v20"></path></svg>
          </div>
          <div class="hp-stat-val-wrap">
            <span class="hp-stat-number hp-counter" data-target="100" style="font-size: 1.85rem; font-weight: 900;">100</span>
            <span class="hp-stat-suffix" style="font-size: 1.15rem; font-weight: 900; color: #d4af37; margin-left: 2px;">%</span>
          </div>
          <div class="hp-stat-label">Calibrated Zero-Dispute Fuel Pumps</div>
        </div>

        <!-- Stat 5: Operating Sectors -->
        <div class="hp-stat-card-luxury">
          <div class="hp-stat-icon-wrap" aria-hidden="true">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 14 14"></polyline></svg>
          </div>
          <div class="hp-stat-val-wrap">
            <span class="hp-stat-number hp-counter" data-target="5" style="font-size: 1.85rem; font-weight: 900;">5</span>
            <span class="hp-stat-suffix" style="font-size: 0.9rem; font-weight: 800; color: #f59e0b; margin-left: 4px;">Sectors</span>
          </div>
          <div class="hp-stat-label">United Group Divisions</div>
        </div>

      </div>
    </div>

    <!-- STYLES FOR BOOKING BAR & STATS ANIMATIONS -->
    <style>
      .hp-booking-bar-luxury select:focus,
      .hp-booking-bar-luxury input:focus {
        border-color: #d4af37 !important;
        box-shadow: 0 0 0 3px rgba(212, 175, 55, 0.25) !important;
      }

      .btn-booking-reserve-animated:hover .btn-arrow {
        transform: translateX(5px);
      }
      .btn-booking-reserve-animated:hover {
        transform: translateY(-2px);
        box-shadow: 0 6px 24px rgba(212, 175, 55, 0.55) !important;
      }

      /* Shimmer sweep animation across the reserve button */
      .shimmer-sweep {
        position: absolute;
        top: -50%;
        left: -60%;
        width: 40%;
        height: 200%;
        background: linear-gradient(90deg, transparent, rgba(255,255,255,0.4), transparent);
        transform: rotate(25deg);
        animation: bookingShimmer 3.5s infinite;
      }

      @keyframes bookingShimmer {
        0% { left: -60%; }
        25% { left: 140%; }
        100% { left: 140%; }
      }

      /* Stat Card Luxury Styling */
      .hp-stat-card-luxury {
        background: rgba(255, 255, 255, 0.035);
        border: 1px solid rgba(255, 255, 255, 0.09);
        border-radius: 16px;
        padding: 24px 18px;
        display: flex;
        flex-direction: column;
        align-items: center;
        text-align: center;
        transition: transform 0.3s ease, border-color 0.3s ease, box-shadow 0.3s ease, background 0.3s ease;
      }
      .hp-stat-card-luxury:hover {
        transform: translateY(-6px);
        background: rgba(255, 255, 255, 0.06);
        border-color: rgba(212, 175, 55, 0.45);
        box-shadow: 0 10px 25px rgba(0,0,0,0.4), 0 0 15px rgba(212,175,55,0.15);
      }

      .hp-stat-icon-wrap {
        width: 44px;
        height: 44px;
        border-radius: 12px;
        background: rgba(212, 175, 55, 0.12);
        color: #d4af37;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 12px;
        border: 1px solid rgba(212, 175, 55, 0.25);
      }
      .hp-stat-icon-wrap svg {
        width: 22px;
        height: 22px;
      }

      .hp-stat-val-wrap {
        display: flex;
        align-items: baseline;
        justify-content: center;
        margin-bottom: 6px;
      }
      .hp-stat-number {
        color: #ffffff;
        font-family: var(--font-display, 'Playfair Display', serif);
      }
      .hp-stat-label {
        font-size: 12.5px;
        color: #94a3b8;
        font-weight: 600;
        line-height: 1.4;
      }

      @media (max-width: 1024px) {
        .hp-booking-grid-luxury {
          grid-template-columns: 1fr 1fr !important;
        }
        .hp-stats-row-luxury {
          grid-template-columns: repeat(3, 1fr) !important;
        }
      }

      @media (max-width: 640px) {
        .hp-booking-grid-luxury {
          grid-template-columns: 1fr !important;
        }
        .hp-stats-row-luxury {
          grid-template-columns: 1fr 1fr !important;
        }
      }
    </style>

    <script>
      (function() {
        // Date auto-sync on check-in change
        const inDate = document.getElementById('hpCheckIn');
        const outDate = document.getElementById('hpCheckOut');
        if (inDate && outDate) {
          inDate.addEventListener('change', function() {
            if (this.value) {
              const d = new Date(this.value);
              d.setDate(d.getDate() + 1);
              const nextDay = d.toISOString().split('T')[0];
              outDate.min = nextDay;
              if (outDate.value <= this.value) {
                outDate.value = nextDay;
              }
            }
          });
        }

        // Animated Metric Counters via IntersectionObserver
        const statsEl = document.getElementById('hpStatsBar');
        let animated = false;

        function animateCounters() {
          if (animated) return;
          animated = true;

          const counters = document.querySelectorAll('#hpStatsBar .hp-counter');
          counters.forEach(counter => {
            const target = Number(counter.dataset.target || 0);
            const isComma = counter.dataset.format === 'comma';
            const duration = 1800; // 1.8 seconds
            const startTime = performance.now();

            function updateCounter(currentTime) {
              const elapsed = currentTime - startTime;
              const progress = Math.min(elapsed / duration, 1);
              // Ease-out cubic formula
              const easeOut = 1 - Math.pow(1 - progress, 3);
              const currentVal = Math.floor(easeOut * target);

              if (isComma) {
                counter.textContent = currentVal.toLocaleString();
              } else {
                counter.textContent = String(currentVal);
              }

              if (progress < 1) {
                requestAnimationFrame(updateCounter);
              } else {
                counter.textContent = isComma ? target.toLocaleString() : String(target);
              }
            }

            requestAnimationFrame(updateCounter);
          });
        }

        if ('IntersectionObserver' in window && statsEl) {
          const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
              if (entry.isIntersecting) {
                animateCounters();
                observer.disconnect();
              }
            });
          }, { threshold: 0.15 });

          observer.observe(statsEl);

          // If already in view on load
          const rect = statsEl.getBoundingClientRect();
          if (rect.top < window.innerHeight && rect.bottom >= 0) {
            animateCounters();
            observer.disconnect();
          }
        } else {
          // Fallback
          animateCounters();
        }
      })();
    </script>
  </section>

  <!-- ====================================================================
       OUR OPERATING DIVISIONS & PORTALS — ANIMATED LUXURY HORIZONTAL SHOWCASE
       ==================================================================== -->
  <section class="hp-divisions" id="sectors" style="padding: 5.5rem 0 5rem; background: linear-gradient(180deg, #030814 0%, #061024 50%, #040916 100%); color: #ffffff; position: relative; overflow: hidden;">
    
    <!-- Decorative Ambient Glows -->
    <div style="position: absolute; top: 10%; left: -100px; width: 350px; height: 350px; background: radial-gradient(circle, rgba(212,175,55,0.12) 0%, transparent 70%); pointer-events: none; border-radius: 50%;"></div>
    <div style="position: absolute; bottom: 10%; right: -100px; width: 450px; height: 450px; background: radial-gradient(circle, rgba(2,132,199,0.12) 0%, transparent 70%); pointer-events: none; border-radius: 50%;"></div>

    <div class="container container-wide" style="position: relative; z-index: 2;">
      
      <!-- Section Header with Controls -->
      <div style="display: flex; justify-content: space-between; align-items: flex-end; flex-wrap: wrap; gap: 1.5rem; margin-bottom: 2rem;">
        <div style="max-width: 680px;">
          <span class="rc-badge" style="background: rgba(212,175,55,0.15); color: #d4af37; border: 1px solid rgba(212,175,55,0.4); padding: 5px 14px; border-radius: 30px; font-weight: 800; font-size: 12px; letter-spacing: 0.8px; margin-bottom: 0.75rem; display: inline-flex; align-items: center; gap: 6px;">
            <span style="width: 7px; height: 7px; background: #d4af37; border-radius: 50%; box-shadow: 0 0 8px #d4af37;"></span>
            CORPORATE PORTFOLIO
          </span>
          <h2 class="hp-section-title" style="color: #ffffff; font-size: 2.35rem; font-weight: 800; letter-spacing: -0.5px; line-height: 1.2; margin: 0.5rem 0 0.85rem;">
            Our Operating Divisions &amp; Portals
          </h2>
          <p class="hp-section-sub" style="color: #94a3b8; font-size: 1.05rem; line-height: 1.6; margin: 0;">
            Five specialized corporate divisions delivering institutional excellence across hospitality, clean energy, commercial real estate, mechanized agriculture, and automotive solutions.
          </p>
        </div>

        <!-- Slider Navigation & Autoplay Controls -->
        <div class="hp-slider-controls" style="display: flex; align-items: center; gap: 10px;">
          <div style="display: flex; align-items: center; background: rgba(255,255,255,0.06); border: 1px solid rgba(255,255,255,0.1); border-radius: 30px; padding: 4px 12px; font-size: 13px; font-weight: 700; color: #cbd5e1; gap: 6px;">
            <span id="divisionSlideNum" style="color: #d4af37; font-size: 15px;">01</span>
            <span style="opacity: 0.5;">/</span>
            <span>06</span>
          </div>

          <button type="button" id="divisionPlayPauseBtn" onclick="KCDivisionsCarousel.toggleAutoplay()" class="btn btn-outline-light btn-sm" style="width: 38px; height: 38px; border-radius: 50%; padding: 0; display: inline-flex; align-items: center; justify-content: center; border-color: rgba(255,255,255,0.2); color: #cbd5e1;" title="Pause / Play Horizontal Motion">
            <span id="playPauseIcon">⏸</span>
          </button>

          <button type="button" onclick="KCDivisionsCarousel.prev()" class="btn btn-outline-light btn-sm" style="width: 42px; height: 42px; border-radius: 50%; padding: 0; display: inline-flex; align-items: center; justify-content: center; border-color: rgba(212,175,55,0.4); color: #d4af37; font-size: 18px; transition: all 0.2s;" title="Previous Division">
            &larr;
          </button>
          
          <button type="button" onclick="KCDivisionsCarousel.next()" class="btn btn-outline-light btn-sm" style="width: 42px; height: 42px; border-radius: 50%; padding: 0; display: inline-flex; align-items: center; justify-content: center; background: linear-gradient(135deg, #d4af37, #b89327); color: #040914; border: none; font-size: 18px; font-weight: 800; box-shadow: 0 4px 15px rgba(212,175,55,0.35); transition: all 0.2s;" title="Next Division">
            &rarr;
          </button>
        </div>
      </div>

      <!-- Category Filter Pills (Click to Slide Directly) -->
      <div class="hp-division-pills-bar" style="display: flex; gap: 8px; overflow-x: auto; padding-bottom: 12px; margin-bottom: 1.5rem; scrollbar-width: none; -webkit-overflow-scrolling: touch;">
        <button type="button" class="hp-div-pill active" onclick="KCDivisionsCarousel.slideTo(0)" data-div-index="0">
          🌐 All Divisions
        </button>
        <button type="button" class="hp-div-pill" onclick="KCDivisionsCarousel.slideTo(0)" data-div-index="0">
          🏨 01. Resort &amp; Suites
        </button>
        <button type="button" class="hp-div-pill" onclick="KCDivisionsCarousel.slideTo(1)" data-div-index="1">
          ⛽ 02. Petroleum &amp; Energy
        </button>
        <button type="button" class="hp-div-pill" onclick="KCDivisionsCarousel.slideTo(2)" data-div-index="2">
          🏢 03. Real Estate
        </button>
        <button type="button" class="hp-div-pill" onclick="KCDivisionsCarousel.slideTo(3)" data-div-index="3">
          🌾 04. Agriculture
        </button>
        <button type="button" class="hp-div-pill" onclick="KCDivisionsCarousel.slideTo(4)" data-div-index="4">
          🚗 05. Automobiles &amp; CNG
        </button>
        <button type="button" class="hp-div-pill" onclick="KCDivisionsCarousel.slideTo(5)" data-div-index="5">
          🏛️ 06. Grand Banquet Hall
        </button>
      </div>

      <!-- ================================================================
           ANIMATED HORIZONTAL CAROUSEL TRACK
           ================================================================ -->
      <div class="hp-divisions-carousel-wrap" style="position: relative; margin: 0 -12px;">
        
        <div id="hpDivisionsTrack" class="hp-divisions-track" style="display: flex; gap: 24px; overflow-x: auto; scroll-snap-type: x mandatory; scroll-behavior: smooth; padding: 10px 12px 28px; scrollbar-width: none;">

          <!-- CARD 1: RESORT HOTEL & SUITES -->
          <article class="hp-division-slide-card" data-card-idx="0">
            <div class="hp-slide-media">
              <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/photos/resort/exterior.jpg' ); ?>" alt="Kelvin Cameo Resort Hotel Exterior" class="hp-slide-img" loading="lazy">
              <div class="hp-slide-overlay"></div>
              <span class="hp-slide-badge badge-hospitality">DIV 01 &bull; HOSPITALITY</span>
              <span class="hp-slide-loc">📍 Suleja &bull; Abuja Corridor</span>
            </div>
            <div class="hp-slide-body">
              <div class="hp-slide-eyebrow">Resort Hotel, Suites &amp; Leisure</div>
              <h3 class="hp-slide-title">Kelvin Cameo Resort Hotel &amp; Suites</h3>
              <p class="hp-slide-desc">
                Premier destination featuring 50 luxury air-conditioned suites &amp; rooms (Love Night Rooms 401–415, Golden Nest 416–430, Executive Suites 422 &amp; 428, UK Rooms 401–414, Serviced Apartments), Olympic swimming pool, 24/7 power, and VIP cocktail bar.
              </p>
              <div class="hp-slide-specs">
                <div class="hp-spec-item"><span class="spec-dot"></span> <strong>Rooms:</strong> 50 Suites &amp; Rooms from ₦25,000 / Night</div>
                <div class="hp-spec-item"><span class="spec-dot"></span> <strong>Power:</strong> 24/7 Heavy Generator &amp; Inverter</div>
                <div class="hp-spec-item"><span class="spec-dot"></span> <strong>Leisure:</strong> Pool, Shisha, Snooker &amp; Bush Bar</div>
              </div>
              <div class="hp-slide-actions">
                <a href="<?php echo kc_url('hospitality'); ?>" class="btn btn-outline-gold btn-sm">
                  View Resort Portal
                </a>
                <a href="<?php echo kc_url('reserve'); ?>" class="btn-gold btn-sm">
                  Book Room
                </a>
              </div>
            </div>
          </article>

          <!-- CARD 2: PETROLEUM & CLEAN ENERGY -->
          <article class="hp-division-slide-card" data-card-idx="1">
            <div class="hp-slide-media">
              <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/photos/kelvin-filling-station-canopy-clean.jpg' ); ?>" alt="Kelvin Cameo Fuel Retail Station" class="hp-slide-img" loading="lazy">
              <div class="hp-slide-overlay"></div>
              <span class="hp-slide-badge badge-energy">DIV 02 &bull; PETROLEUM</span>
              <span class="hp-slide-loc">⛽ 24/7 Energy Retail</span>
            </div>
            <div class="hp-slide-body">
              <div class="hp-slide-eyebrow">Downstream Energy Distribution</div>
              <h3 class="hp-slide-title">Petroleum &amp; Clean Energy Retail</h3>
              <p class="hp-slide-desc">
                24/7 commercial retail filling stations delivering calibrated PMS &amp; AGO with zero tolerance for meter manipulation. Supported by LPG cooking gas refilling plants and industrial solar microgrids.
              </p>
              <div class="hp-slide-specs">
                <div class="hp-spec-item"><span class="spec-dot"></span> <strong>Calibration:</strong> 10 Litres Dispensed = 10 Litres In Tank</div>
                <div class="hp-spec-item"><span class="spec-dot"></span> <strong>Supply:</strong> Calibrated PMS, AGO &amp; Dual Purpose Kerosene</div>
                <div class="hp-spec-item"><span class="spec-dot"></span> <strong>Clean Power:</strong> Industrial Solar Microgrids &amp; LPG Gas</div>
              </div>
              <div class="hp-slide-actions">
                <a href="<?php echo kc_url('energy'); ?>" class="btn btn-outline-gold btn-sm">
                  Energy Division
                </a>
                <button type="button" class="btn-gold btn-sm" data-modal="inquiryModal">
                  Partner With Us
                </button>
              </div>
            </div>
          </article>

          <!-- CARD 3: REAL ESTATE & CAMEO ESTATES -->
          <article class="hp-division-slide-card" data-card-idx="2">
            <div class="hp-slide-media">
              <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/photos/cameo-real-estate-luxury.jpg' ); ?>" alt="Kelvin Cameo Real Estate Duplexes" class="hp-slide-img" loading="lazy">
              <div class="hp-slide-overlay"></div>
              <span class="hp-slide-badge badge-estate">DIV 03 &bull; INFRASTRUCTURE</span>
              <span class="hp-slide-loc">🏢 Cameo Estates &bull; C of O</span>
            </div>
            <div class="hp-slide-body">
              <div class="hp-slide-eyebrow">Prime Commercial &amp; Residential Land</div>
              <h3 class="hp-slide-title">Cameo Estates &amp; Commercial Realty</h3>
              <p class="hp-slide-desc">
                Master-planned residential estates, prime commercial plazas along the Maje–Minna highway, and luxury duplexes. 100% verified titles with Certificate of Occupancy (C of O) and zero land encumbrances.
              </p>
              <div class="hp-slide-specs">
                <div class="hp-spec-item"><span class="spec-dot"></span> <strong>Assets:</strong> Prime Residential Plots &amp; Commercial Plazas</div>
                <div class="hp-spec-item"><span class="spec-dot"></span> <strong>Titles:</strong> Guaranteed C of O &amp; Instant Plot Allocation</div>
                <div class="hp-spec-item"><span class="spec-dot"></span> <strong>Terms:</strong> Flexible Corporate Milestone Payment Plans</div>
              </div>
              <div class="hp-slide-actions">
                <a href="<?php echo kc_url('real-estate'); ?>" class="btn btn-outline-gold btn-sm">
                  Estate Division
                </a>
                <a href="<?php echo kc_url('real-estate'); ?>#inventory" class="btn-gold btn-sm">
                  Inspect Land
                </a>
              </div>
            </div>
          </article>

          <!-- CARD 4: MECHANIZED AGRICULTURE -->
          <article class="hp-division-slide-card" data-card-idx="3">
            <div class="hp-slide-media">
              <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/photos/agriculture/tractor-field.jpg' ); ?>" alt="Mechanized Farming Tractors at Kelvin Cameo Farms" class="hp-slide-img" loading="lazy">
              <div class="hp-slide-overlay"></div>
              <span class="hp-slide-badge badge-agro">DIV 04 &bull; AGRO-ALLIED</span>
              <span class="hp-slide-loc">🌾 Commercial Farms</span>
            </div>
            <div class="hp-slide-body">
              <div class="hp-slide-eyebrow">Mechanized Farming &amp; Livestock</div>
              <h3 class="hp-slide-title">Commercial Agriculture &amp; Agro-Allied</h3>
              <p class="hp-slide-desc">
                Extensive mechanized grain cultivation (maize, soya beans), modern commercial poultry production, and cattle ranching. Hygienic milling, automated bagging, and wholesale institutional food supply.
              </p>
              <div class="hp-slide-specs">
                <div class="hp-spec-item"><span class="spec-dot"></span> <strong>Crops:</strong> Hybrid Grains, Maize, Soya &amp; Feed Stuffs</div>
                <div class="hp-spec-item"><span class="spec-dot"></span> <strong>Livestock:</strong> Commercial Poultry (Layers/Broilers) &amp; Cattle</div>
                <div class="hp-spec-item"><span class="spec-dot"></span> <strong>Offtake:</strong> Corporate Food Contracts &amp; Agro Processing</div>
              </div>
              <div class="hp-slide-actions">
                <a href="<?php echo kc_url('agriculture'); ?>" class="btn btn-outline-gold btn-sm">
                  Agro Division
                </a>
                <a href="<?php echo kc_url('agriculture'); ?>#offtake" class="btn-gold btn-sm">
                  Bulk Contracts
                </a>
              </div>
            </div>
          </article>

          <!-- CARD 5: AUTOMOBILES & CNG MOBILITY -->
          <article class="hp-division-slide-card" data-card-idx="4">
            <div class="hp-slide-media">
              <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/photos/automotive/dealership-showroom.jpg' ); ?>" alt="Kelvin Cameo Automobiles Dealership Showroom" class="hp-slide-img" loading="lazy">
              <div class="hp-slide-overlay"></div>
              <span class="hp-slide-badge badge-mobility">DIV 05 &bull; MOBILITY</span>
              <span class="hp-slide-loc">🚗 Dealership &bull; CNG Tech</span>
            </div>
            <div class="hp-slide-body">
              <div class="hp-slide-eyebrow">Vehicle Sales &amp; Clean Fuel Technology</div>
              <h3 class="hp-slide-title">Automobiles &amp; CNG Mobility Solutions</h3>
              <p class="hp-slide-desc">
                Certified car sales dealership offering inspected sedans, SUVs, and commercial trucks. Authorized pioneer CNG conversion center cutting fleet operational fuel costs by up to 60%.
              </p>
              <div class="hp-slide-specs">
                <div class="hp-spec-item"><span class="spec-dot"></span> <strong>Showroom:</strong> Toyota, Lexus, Mercedes-Benz, Hyundai</div>
                <div class="hp-spec-item"><span class="spec-dot"></span> <strong>CNG Tech:</strong> Certified Gas Conversion Kits &amp; Tanks</div>
                <div class="hp-spec-item"><span class="spec-dot"></span> <strong>Logistics:</strong> Commercial Haulage Tankers &amp; Fleets</div>
              </div>
              <div class="hp-slide-actions">
                <a href="<?php echo kc_url('automobiles'); ?>" class="btn btn-outline-gold btn-sm">
                  Auto Showroom
                </a>
                <a href="<?php echo kc_url('automobiles'); ?>#cng" class="btn-gold btn-sm">
                  CNG Conversion
                </a>
              </div>
            </div>
          </article>

          <!-- CARD 6: 1,000-SEAT GRAND BANQUET HALL -->
          <article class="hp-division-slide-card" data-card-idx="5">
            <div class="hp-slide-media">
              <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/photos/resort/banquet-hall.jpg' ); ?>" alt="Kelvin Cameo 1,000-Seat Grand Banquet Hall" class="hp-slide-img" loading="lazy">
              <div class="hp-slide-overlay"></div>
              <span class="hp-slide-badge badge-events">SUMMIT CENTER &bull; EVENTS</span>
              <span class="hp-slide-loc">🏛️ 1,000-Seat Auditorium</span>
            </div>
            <div class="hp-slide-body">
              <div class="hp-slide-eyebrow">Weddings &bull; Summits &bull; AGMs</div>
              <h3 class="hp-slide-title">1,000-Seat Grand Banquet Hall</h3>
              <p class="hp-slide-desc">
                Ultra-modern column-free amphitheater event hall with central chilling air-conditioning, dedicated 250kVA standby generator, luxury banquet seating, and private VIP bridal dressing suite.
              </p>
              <div class="hp-slide-specs">
                <div class="hp-spec-item"><span class="spec-dot"></span> <strong>Capacity:</strong> 1,000 Banquet / 1,500 Theater Style</div>
                <div class="hp-spec-item"><span class="spec-dot"></span> <strong>Packages:</strong> ₦1.05M Full Service / ₦850,000 Hall Only</div>
                <div class="hp-spec-item"><span class="spec-dot"></span> <strong>Power:</strong> Guaranteed Zero-Blink 250kVA Dedicated Gen</div>
              </div>
              <div class="hp-slide-actions">
                <a href="<?php echo kc_url('banquet-hall'); ?>" class="btn btn-outline-gold btn-sm">
                  Hall Specs
                </a>
                <a href="<?php echo kc_url('banquet-hall'); ?>#reserve" class="btn-gold btn-sm">
                  Reserve Date
                </a>
              </div>
            </div>
          </article>

        </div>
      </div>

      <!-- Horizontal Carousel Progress & Indicator Dots -->
      <div style="display: flex; align-items: center; justify-content: space-between; margin-top: 1.25rem; flex-wrap: wrap; gap: 1rem;">
        
        <!-- Progress Bar -->
        <div style="flex: 1; min-width: 200px; height: 4px; background: rgba(255,255,255,0.1); border-radius: 4px; overflow: hidden;">
          <div id="divisionScrollProgress" style="height: 100%; width: 16.66%; background: linear-gradient(90deg, #d4af37, #f59e0b); border-radius: 4px; transition: width 0.3s ease;"></div>
        </div>

        <!-- Dot Indicators -->
        <div style="display: flex; gap: 8px;" id="divisionDotGroup">
          <button type="button" class="hp-div-dot active" onclick="KCDivisionsCarousel.slideTo(0)" aria-label="Slide 1"></button>
          <button type="button" class="hp-div-dot" onclick="KCDivisionsCarousel.slideTo(1)" aria-label="Slide 2"></button>
          <button type="button" class="hp-div-dot" onclick="KCDivisionsCarousel.slideTo(2)" aria-label="Slide 3"></button>
          <button type="button" class="hp-div-dot" onclick="KCDivisionsCarousel.slideTo(3)" aria-label="Slide 4"></button>
          <button type="button" class="hp-div-dot" onclick="KCDivisionsCarousel.slideTo(4)" aria-label="Slide 5"></button>
          <button type="button" class="hp-div-dot" onclick="KCDivisionsCarousel.slideTo(5)" aria-label="Slide 6"></button>
        </div>

        <!-- Touch/Swipe Hint -->
        <div style="font-size: 12px; color: #64748b; font-weight: 600; display: flex; align-items: center; gap: 6px;">
          <span>Swipe or drag horizontally &harr;</span>
        </div>

      </div>

    </div>

    <!-- STYLES & INTERACTIVE SCRIPT FOR HORIZONTAL ANIMATED CAROUSEL -->
    <style>
      .hp-divisions-track::-webkit-scrollbar { display: none; }
      
      .hp-div-pill {
        padding: 7px 16px;
        background: rgba(255,255,255,0.05);
        border: 1px solid rgba(255,255,255,0.12);
        color: #94a3b8;
        border-radius: 30px;
        font-size: 13px;
        font-weight: 700;
        cursor: pointer;
        white-space: nowrap;
        transition: all 0.25s ease;
      }
      .hp-div-pill:hover {
        background: rgba(255,255,255,0.12);
        color: #ffffff;
        border-color: rgba(212,175,55,0.4);
      }
      .hp-div-pill.active {
        background: linear-gradient(135deg, #d4af37, #b89327);
        color: #040914;
        border-color: transparent;
        font-weight: 800;
        box-shadow: 0 4px 15px rgba(212,175,55,0.3);
      }

      .hp-division-slide-card {
        flex: 0 0 380px;
        width: 380px;
        max-width: 86vw;
        scroll-snap-align: start;
        display: flex;
        flex-direction: column;
        background: linear-gradient(165deg, #0a172e 0%, #050c18 100%);
        border: 1.5px solid rgba(212,175,55,0.25);
        border-radius: 20px;
        overflow: hidden;
        box-shadow: 0 10px 30px rgba(0,0,0,0.4);
        transition: transform 0.35s cubic-bezier(0.16, 1, 0.3, 1), border-color 0.35s ease, box-shadow 0.35s ease;
      }
      .hp-division-slide-card:hover {
        transform: translateY(-8px);
        border-color: rgba(212,175,55,0.7);
        box-shadow: 0 20px 45px rgba(0,0,0,0.6), 0 0 25px rgba(212,175,55,0.18);
      }

      .hp-slide-media {
        height: 215px;
        position: relative;
        overflow: hidden;
        background: #020610;
      }
      .hp-slide-img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.6s cubic-bezier(0.16, 1, 0.3, 1);
      }
      .hp-division-slide-card:hover .hp-slide-img {
        transform: scale(1.08);
      }
      .hp-slide-overlay {
        position: absolute;
        inset: 0;
        background: linear-gradient(180deg, rgba(4,9,20,0.1) 0%, rgba(4,9,20,0.85) 100%);
      }
      .hp-slide-badge {
        position: absolute;
        top: 14px;
        left: 14px;
        padding: 5px 12px;
        border-radius: 30px;
        font-size: 11px;
        font-weight: 800;
        letter-spacing: 0.6px;
        z-index: 2;
      }
      .badge-hospitality { background: linear-gradient(135deg, #d4af37, #b89327); color: #040914; }
      .badge-energy { background: linear-gradient(135deg, #0284c7, #0369a1); color: #ffffff; }
      .badge-estate { background: linear-gradient(135deg, #10b981, #059669); color: #ffffff; }
      .badge-agro { background: linear-gradient(135deg, #16a34a, #15803d); color: #ffffff; }
      .badge-mobility { background: linear-gradient(135deg, #ea580c, #c2410c); color: #ffffff; }
      .badge-events { background: linear-gradient(135deg, #8b5cf6, #7c3aed); color: #ffffff; }

      .hp-slide-loc {
        position: absolute;
        top: 14px;
        right: 14px;
        background: rgba(4,9,20,0.85);
        backdrop-filter: blur(8px);
        color: #cbd5e1;
        font-size: 11px;
        font-weight: 700;
        padding: 4px 10px;
        border-radius: 20px;
        border: 1px solid rgba(255,255,255,0.15);
        z-index: 2;
      }

      .hp-slide-body {
        padding: 22px;
        display: flex;
        flex-direction: column;
        flex: 1;
      }
      .hp-slide-eyebrow {
        font-size: 11px;
        font-weight: 800;
        text-transform: uppercase;
        letter-spacing: 0.8px;
        color: #d4af37;
        margin-bottom: 6px;
      }
      .hp-slide-title {
        font-size: 20px;
        font-weight: 800;
        color: #ffffff;
        line-height: 1.3;
        margin: 0 0 10px;
      }
      .hp-slide-desc {
        font-size: 13.5px;
        color: #94a3b8;
        line-height: 1.6;
        margin: 0 0 16px;
        flex: 1;
      }

      .hp-slide-specs {
        background: rgba(255,255,255,0.03);
        border: 1px solid rgba(255,255,255,0.07);
        border-radius: 12px;
        padding: 12px 14px;
        margin-bottom: 20px;
        display: flex;
        flex-direction: column;
        gap: 6px;
      }
      .hp-spec-item {
        font-size: 12.5px;
        color: #cbd5e1;
        display: flex;
        align-items: center;
        gap: 8px;
      }
      .hp-spec-item strong {
        color: #f1f5f9;
      }
      .spec-dot {
        width: 6px;
        height: 6px;
        border-radius: 50%;
        background: #d4af37;
        flex-shrink: 0;
      }

      .hp-slide-actions {
        display: flex;
        gap: 10px;
        margin-top: auto;
      }
      .btn-outline-gold {
        flex: 1;
        padding: 9px 12px;
        border: 1.5px solid rgba(212,175,55,0.5);
        color: #f59e0b;
        background: transparent;
        border-radius: 8px;
        font-size: 13px;
        font-weight: 700;
        text-align: center;
        text-decoration: none;
        transition: all 0.2s ease;
        display: inline-flex;
        align-items: center;
        justify-content: center;
      }
      .btn-outline-gold:hover {
        background: rgba(212,175,55,0.15);
        color: #ffffff;
        border-color: #d4af37;
      }

      .hp-div-dot {
        width: 10px;
        height: 10px;
        border-radius: 50%;
        background: rgba(255,255,255,0.2);
        border: none;
        cursor: pointer;
        padding: 0;
        transition: all 0.25s ease;
      }
      .hp-div-dot.active {
        width: 28px;
        border-radius: 10px;
        background: #d4af37;
        box-shadow: 0 0 10px rgba(212,175,55,0.6);
      }

      @media (max-width: 768px) {
        .hp-division-slide-card {
          flex: 0 0 310px;
          width: 310px;
        }
        .hp-slide-media {
          height: 180px;
        }
      }
    </style>

    <script>
      const KCDivisionsCarousel = {
        track: null,
        autoPlayTimer: null,
        isPlaying: true,
        intervalMs: 3800,

        init: function() {
          this.track = document.getElementById('hpDivisionsTrack');
          if (!this.track) return;

          // Pause on hover
          this.track.addEventListener('mouseenter', () => this.pause());
          this.track.addEventListener('mouseleave', () => {
            if (this.isPlaying) this.start();
          });

          // Track scroll progress and update active indicators
          this.track.addEventListener('scroll', () => {
            this.updateActiveIndicators();
          }, { passive: true });

          this.start();
        },

        start: function() {
          clearInterval(this.autoPlayTimer);
          this.autoPlayTimer = setInterval(() => {
            this.next(true);
          }, this.intervalMs);
        },

        pause: function() {
          clearInterval(this.autoPlayTimer);
        },

        toggleAutoplay: function() {
          const icon = document.getElementById('playPauseIcon');
          if (this.isPlaying) {
            this.pause();
            this.isPlaying = false;
            if (icon) icon.textContent = '▶';
          } else {
            this.isPlaying = true;
            this.start();
            if (icon) icon.textContent = '⏸';
          }
        },

        next: function(isAuto = false) {
          if (!this.track) return;
          const card = this.track.querySelector('.hp-division-slide-card');
          const step = card ? card.offsetWidth + 24 : 404;
          const maxScroll = this.track.scrollWidth - this.track.clientWidth;

          if (this.track.scrollLeft >= maxScroll - 20) {
            // Loop back to start smoothly
            this.track.scrollTo({ left: 0, behavior: 'smooth' });
          } else {
            this.track.scrollBy({ left: step, behavior: 'smooth' });
          }
        },

        prev: function() {
          if (!this.track) return;
          const card = this.track.querySelector('.hp-division-slide-card');
          const step = card ? card.offsetWidth + 24 : 404;
          this.track.scrollBy({ left: -step, behavior: 'smooth' });
        },

        slideTo: function(index) {
          if (!this.track) return;
          const card = this.track.querySelector('.hp-division-slide-card');
          const step = card ? card.offsetWidth + 24 : 404;
          this.track.scrollTo({ left: index * step, behavior: 'smooth' });
        },

        updateActiveIndicators: function() {
          if (!this.track) return;
          const card = this.track.querySelector('.hp-division-slide-card');
          const step = card ? card.offsetWidth + 24 : 404;
          const maxScroll = this.track.scrollWidth - this.track.clientWidth;
          
          let curIdx = Math.round(this.track.scrollLeft / step);
          if (curIdx < 0) curIdx = 0;
          if (curIdx > 5) curIdx = 5;

          // Update counter
          const numEl = document.getElementById('divisionSlideNum');
          if (numEl) numEl.textContent = String(curIdx + 1).padStart(2, '0');

          // Update dots
          const dots = document.querySelectorAll('#divisionDotGroup .hp-div-dot');
          dots.forEach((d, i) => {
            if (i === curIdx) d.classList.add('active');
            else d.classList.remove('active');
          });

          // Update category pills
          const pills = document.querySelectorAll('.hp-division-pills-bar .hp-div-pill');
          pills.forEach((p) => {
            const idx = Number(p.dataset.divIndex);
            if (idx === curIdx) p.classList.add('active');
            else p.classList.remove('active');
          });

          // Update progress line
          const progressEl = document.getElementById('divisionScrollProgress');
          if (progressEl) {
            const pct = maxScroll > 0 ? Math.min(100, Math.max(16, ((this.track.scrollLeft) / maxScroll) * 100)) : 16;
            progressEl.style.width = pct + '%';
          }
        }
      };

      document.addEventListener('DOMContentLoaded', function() {
        KCDivisionsCarousel.init();
      });
    </script>
  </section>

  <!-- ====================================================================
       HOTEL LUXURY SUITES SPOTLIGHT — Flagship Rooms Showcase
       ==================================================================== -->
  <section class="hp-rooms-spotlight">
    <div class="container container-wide">
      <div class="hp-section-head">
        <span class="rc-badge" style="margin-bottom:0.75rem; display:inline-flex;">Luxury Stays &bull; Suleja</span>
        <h2 class="hp-section-title">Featured Suites &amp; Rooms</h2>
        <p class="hp-section-sub">Experience serene comfort, executive ergonomic workspaces, rainfall showers, and guaranteed 24/7 power on the Abuja Capital Corridor.</p>
      </div>

      <div class="hp-rooms-grid">
        
        <!-- Room 1: Love Night -->
        <div class="hp-room-card">
          <div class="hp-room-thumb-wrap">
            <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/photos/love-night-room.jpg' ); ?>" alt="Love Night Room at Kelvin Cameo Resort" class="hp-room-thumb" loading="lazy">
            <span class="hp-room-tag">Popular Choice</span>
            <div class="hp-room-price-badge">₦20,000 &ndash; ₦25,000 <span style="font-size:0.75rem; font-weight:600; color:#cbd5e1;">/ night</span></div>
          </div>
          <div class="hp-room-body">
            <h3>Love Night Room</h3>
            <p>Romantic intimate ambiance with mood backlighting, plush queen mattress, smart streaming TV, and private ensuite bathroom.</p>
            <div class="hp-room-features">
              <span class="hp-room-feature-tag">Smart TV</span>
              <span class="hp-room-feature-tag">24/7 Power</span>
              <span class="hp-room-feature-tag">Air Conditioned</span>
              <span class="hp-room-feature-tag">Free Wi-Fi</span>
            </div>
            <div class="hp-room-actions">
              <a href="<?php echo kc_url('reserve'); ?>?room=love-night" class="btn-gold">Book Now</a>
              <a href="<?php echo kc_url('hospitality'); ?>#rooms" class="btn btn-outline-primary">Details</a>
            </div>
          </div>
        </div>

        <!-- Room 2: Golden Nest -->
        <div class="hp-room-card">
          <div class="hp-room-thumb-wrap">
            <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/photos/golden-nest-room.jpg' ); ?>" alt="Golden Nest Room at Kelvin Cameo Resort" class="hp-room-thumb" loading="lazy">
            <span class="hp-room-tag" style="background:#0b4ea2;">Serene Comfort</span>
            <div class="hp-room-price-badge">₦20,000 &ndash; ₦25,000 <span style="font-size:0.75rem; font-weight:600; color:#cbd5e1;">/ night</span></div>
          </div>
          <div class="hp-room-body">
            <h3>Golden Nest Room</h3>
            <p>Peaceful executive retreat designed for deep relaxation, featuring warm wood accents, dedicated desk, and silent split-unit AC.</p>
            <div class="hp-room-features">
              <span class="hp-room-feature-tag">Silent AC</span>
              <span class="hp-room-feature-tag">Work Desk</span>
              <span class="hp-room-feature-tag">Rainfall Shower</span>
              <span class="hp-room-feature-tag">Daily Housekeeping</span>
            </div>
            <div class="hp-room-actions">
              <a href="<?php echo kc_url('reserve'); ?>?room=golden-nest" class="btn-gold">Book Now</a>
              <a href="<?php echo kc_url('hospitality'); ?>#rooms" class="btn btn-outline-primary">Details</a>
            </div>
          </div>
        </div>

        <!-- Room 3: Deluxe Room (UK Room) -->
        <div class="hp-room-card">
          <div class="hp-room-thumb-wrap">
            <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/photos/deluxe-room.jpg' ); ?>" alt="Deluxe Room (UK Room) at Kelvin Cameo Resort" class="hp-room-thumb" loading="lazy">
            <span class="hp-room-tag" style="background:#ea580c;">Executive Top Pick</span>
            <div class="hp-room-price-badge">₦25,000 &ndash; ₦45,000 <span style="font-size:0.75rem; font-weight:600; color:#cbd5e1;">/ night</span></div>
          </div>
          <div class="hp-room-body">
            <h3>Deluxe Room (UK Room)</h3>
            <p>Spacious executive suite with luxury queen/king bedding, compact refrigerator, premium toiletries, and priority room service.</p>
            <div class="hp-room-features">
              <span class="hp-room-feature-tag">King Bed</span>
              <span class="hp-room-feature-tag">Minibar Fridge</span>
              <span class="hp-room-feature-tag">High-Speed Wi-Fi</span>
              <span class="hp-room-feature-tag">Room Service</span>
            </div>
            <div class="hp-room-actions">
              <a href="<?php echo kc_url('reserve'); ?>?room=deluxe-uk" class="btn-gold">Book Now</a>
              <a href="<?php echo kc_url('hospitality'); ?>#rooms" class="btn btn-outline-primary">Details</a>
            </div>
          </div>
        </div>

      </div>

      <!-- Additional Rooms Strip -->
      <div style="margin-top: 2rem; background: #ffffff; border-radius: 16px; padding: 1.5rem 2rem; border: 1px solid #e2e8f0; display: flex; flex-wrap: wrap; justify-content: space-between; align-items: center; gap: 1rem;">
        <div>
          <h4 style="font-family:var(--font-display); font-size:1.15rem; font-weight:800; color:var(--cobalt-950); margin:0 0 0.25rem 0;">Looking for VIP Suites or 3-Bedroom Serviced Apartments?</h4>
          <p style="font-size:0.875rem; color:#64748b; margin:0;">
            We offer Royal Treat (₦50k), Executive VIP Suites (₦60k), and fully-furnished 3-Bedroom Luxury Apartments (₦160,000 / night).
          </p>
        </div>
        <div style="display:flex; gap:0.75rem;">
          <a href="<?php echo kc_url('hospitality'); ?>#rooms" class="btn btn-outline-primary btn-sm">
            View All 10 Room Tiers &rarr;
          </a>
          <a href="<?php echo kc_url('reserve'); ?>" class="btn-gold btn-sm" style="border-radius:8px;">
            Reserve Apartment / Suite
          </a>
        </div>
      </div>

    </div>
  </section>

  <!-- ====================================================================
       RESORT LIFESTYLE — Sports Bar, Games, Shisha & Swimming Pool
       ==================================================================== -->
  <section class="hp-lifestyle-strip">
    <div class="container container-wide">
      <div class="hp-section-head">
        <span class="rc-badge" style="background:rgba(245,158,11,0.15); color:#fef08a; border-color:rgba(245,158,11,0.35); margin-bottom:0.75rem; display:inline-flex;">Leisure &bull; Recreation &bull; Nightlife</span>
        <h2 class="hp-section-title" style="color:#ffffff;">The Resort Lifestyle Experience</h2>
        <p class="hp-section-sub" style="color:#cbd5e1;">Unwind with friends, watch premier football clashes, shoot snooker, enjoy smooth shisha, and swim in our crystal blue pool.</p>
      </div>

      <div class="hp-lifestyle-grid">
        
        <!-- Lifestyle 1: Sports Bar & Games -->
        <div class="hp-lifestyle-card">
          <div class="hp-lifestyle-thumb-wrap">
            <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/photos/resort/lounge-pool-table.jpg' ); ?>" alt="VIP Sports Bar & Snooker Table" class="hp-lifestyle-thumb" loading="lazy">
          </div>
          <div class="hp-lifestyle-body">
            <h4>VIP Sports Bar, Snooker &amp; Games</h4>
            <p>Equipped with tournament-grade snooker tables, competitive table tennis, ultra-HD match screening, and a dedicated restocked beverage lounge.</p>
            <a href="<?php echo kc_url('bar'); ?>" class="btn btn-outline-white btn-sm" style="width:100%; justify-content:center;">
              Explore Bar &amp; Games &rarr;
            </a>
          </div>
        </div>

        <!-- Lifestyle 2: Shisha & Cocktails Lounge -->
        <div class="hp-lifestyle-card">
          <div class="hp-lifestyle-thumb-wrap">
            <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/photos/resort/bar-counter.jpg' ); ?>" alt="Kelvin Cameo Bar Counter" class="hp-lifestyle-thumb" loading="lazy">
          </div>
          <div class="hp-lifestyle-body">
            <h4>Premium Shisha &amp; Cocktail Bar</h4>
            <p>Smooth exotic shisha flavors, chilled craft beers, premium spirits, fine wines, and custom cocktails served in an air-conditioned VIP lounge.</p>
            <a href="<?php echo kc_url('bar'); ?>" class="btn btn-outline-white btn-sm" style="width:100%; justify-content:center;">
              View Drink &amp; Shisha Menu &rarr;
            </a>
          </div>
        </div>

        <!-- Lifestyle 3: Swimming Pool & Bush Bar -->
        <div class="hp-lifestyle-card">
          <div class="hp-lifestyle-thumb-wrap">
            <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/photos/swimming-pool-sunny.jpg' ); ?>" alt="Olympic Swimming Pool at Kelvin Cameo Resort" class="hp-lifestyle-thumb" loading="lazy">
          </div>
          <div class="hp-lifestyle-body">
            <h4>Olympic Swimming Pool &amp; Bush Bar</h4>
            <p>Crystal-clean waters with ₦3,000 day passes, private sun cabanas, outdoor poolside grills, suya skewers, and fresh pepper soup.</p>
            <a href="<?php echo kc_url('hospitality'); ?>#amenities" class="btn btn-outline-white btn-sm" style="width:100%; justify-content:center;">
              Pool &amp; Dining Details &rarr;
            </a>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- ====================================================================
       INSTITUTIONAL STRATEGIC ALLIANCES & CLIENTS STRIP
       ==================================================================== -->
  <section class="partners-strip" aria-label="Institutional Clients and Strategic Alliances" style="background:#ffffff; border-top:1px solid #e2e8f0; border-bottom:1px solid #e2e8f0; padding:2.5rem 0;">
    <div class="container container-wide">
      <div style="text-align:center; margin-bottom:1.25rem;">
        <span style="font-size:0.75rem; font-weight:800; color:#64748b; letter-spacing:0.08em; text-transform:uppercase;">Trusted By Corporate Institutions, NGOs &amp; Public Sector Delegations</span>
      </div>
      <div class="partners-logo-grid" style="display:flex; justify-content:center; align-items:center; gap:3rem; flex-wrap:wrap; opacity:0.85;">
        <div style="font-weight:800; font-size:1.1rem; color:var(--cobalt-900);">CCCRN Health Alliance</div>
        <div style="font-weight:800; font-size:1.1rem; color:var(--cobalt-900);">Federal Road Transport Alliances</div>
        <div style="font-weight:800; font-size:1.1rem; color:var(--cobalt-900);">Niger State Commercial Guild</div>
        <div style="font-weight:800; font-size:1.1rem; color:var(--cobalt-900);">Abuja Corridor Logistics Network</div>
      </div>
    </div>
  </section>

  <!-- ====================================================================
       FOUNDER & EXECUTIVE GOVERNANCE
       ==================================================================== -->
  <section class="founder-section" id="founder" style="padding: 5.5rem 0; background: #ffffff;">
    <div class="container container-wide">
      <div class="founder-layout" style="display: grid; grid-template-columns: 1fr 1.35fr; gap: 3.5rem; align-items: center;">
        
        <!-- Founder Portrait Card -->
        <div class="founder-portrait-card">
          <div class="portrait-frame" style="border-radius:20px; overflow:hidden; box-shadow:0 20px 40px rgba(4,20,43,0.15); border:3px solid #f1f5f9;">
            <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/photos/director-alh-kamorudeen-oladejo.jpg' ); ?>" alt="Alh. Kamorudeen Oladejo, Chairman & CEO" class="founder-img" loading="lazy" style="width:100%; height:auto; display:block;">
          </div>
          <div class="portrait-caption" style="margin-top:1rem; text-align:center;">
            <h4 style="font-family:var(--font-display); font-size:1.2rem; font-weight:800; color:var(--cobalt-950); margin:0;">Alh. Kamorudeen Oladejo</h4>
            <span style="font-size:0.85rem; color:var(--orange-600); font-weight:700;">Executive Chairman &bull; Kelvin Cameo Organization</span>
          </div>
        </div>

        <!-- Vision Narrative -->
        <div>
          <span class="rc-badge" style="margin-bottom:0.75rem; display:inline-flex;">Executive Governance</span>
          <h2 style="font-family:var(--font-display); font-size:2.25rem; font-weight:900; color:var(--cobalt-950); line-height:1.2; margin-bottom:1.25rem;">
            "We build on what can be independently verified every single day."
          </h2>
          <p style="font-size:1rem; color:#475569; line-height:1.7; margin-bottom:1.25rem;">
            At Kelvin Cameo Organization (RC: 1613032), our operating philosophy is uncompromising: when a customer buys fuel, our pump meters must read 100% exact. When an investor acquires land, the survey and title must be legally bulletproof. When a guest sleeps in our resort, power and security must be flawless 24 hours a day.
          </p>
          <p style="font-size:1rem; color:#475569; line-height:1.7; margin-bottom:2rem;">
            We are deeply committed to socioeconomic empowerment across Suleja, Niger State, and the wider Federal Capital Territory corridor — creating sustainable employment, fostering local agro-allied industries, and setting international benchmarks for Nigerian enterprise.
          </p>

          <div style="display:flex; gap:1rem; align-items:center;">
            <a href="<?php echo kc_url('about'); ?>" class="btn btn-primary btn-md">
              Read Our Corporate Heritage &rarr;
            </a>
            <button class="btn btn-outline-primary btn-md" data-modal="inquiryModal">
              Direct Executive Inquiry
            </button>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- ====================================================================
       GUEST & CLIENT TESTIMONIALS
       ==================================================================== -->
  <section class="hp-trust" style="padding: 5rem 0; background: #f8fafc; border-top:1px solid #e2e8f0; border-bottom:1px solid #e2e8f0;">
    <div class="container container-wide">
      <div class="hp-section-head">
        <span class="rc-badge" style="margin-bottom:0.75rem; display:inline-flex;">Verified Client Experiences</span>
        <h2 class="hp-section-title">Tested by Travelers, Businesses &amp; Investors</h2>
        <p class="hp-section-sub">Real words from those who stay at our suites, pump at our stations, and develop on our land.</p>
      </div>

      <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 2rem; margin-top: 2.5rem;">
        
        <!-- Review 1 -->
        <div style="background:#ffffff; border-radius:16px; padding:2rem; box-shadow:0 8px 24px -6px rgba(4,20,43,0.06); border:1px solid #e2e8f0;">
          <div style="color:#f59e0b; font-size:1.1rem; margin-bottom:0.75rem;">★★★★★</div>
          <p style="font-size:0.95rem; color:#334155; line-height:1.6; font-style:italic; margin-bottom:1.25rem;">
            "We hosted our NGO health summit in the Grand Banquet Hall and lodged over 20 delegates in the Deluxe and Love Night suites. Uninterrupted power, cold AC, and top-tier staff hospitality. Truly exceptional."
          </p>
          <div>
            <strong style="display:block; color:var(--cobalt-950); font-size:0.95rem;">Dr. E. Okafor</strong>
            <span style="font-size:0.8rem; color:#64748b;">Regional Director, Healthcare NGO</span>
          </div>
        </div>

        <!-- Review 2 -->
        <div style="background:#ffffff; border-radius:16px; padding:2rem; box-shadow:0 8px 24px -6px rgba(4,20,43,0.06); border:1px solid #e2e8f0;">
          <div style="color:#f59e0b; font-size:1.1rem; margin-bottom:0.75rem;">★★★★★</div>
          <p style="font-size:0.95rem; color:#334155; line-height:1.6; font-style:italic; margin-bottom:1.25rem;">
            "Their fuel station on the Minna corridor has the most honest pumps in Suleja. My fleet drivers are strictly instructed to refuel only at Kelvin Cameo because their meter counts are 100% accurate."
          </p>
          <div>
            <strong style="display:block; color:var(--cobalt-950); font-size:0.95rem;">Alhaji S. Bello</strong>
            <span style="font-size:0.8rem; color:#64748b;">Logistics &amp; Interstate Haulage Operator</span>
          </div>
        </div>

        <!-- Review 3 -->
        <div style="background:#ffffff; border-radius:16px; padding:2rem; box-shadow:0 8px 24px -6px rgba(4,20,43,0.06); border:1px solid #e2e8f0;">
          <div style="color:#f59e0b; font-size:1.1rem; margin-bottom:0.75rem;">★★★★★</div>
          <p style="font-size:0.95rem; color:#334155; line-height:1.6; font-style:italic; margin-bottom:1.25rem;">
            "Acquiring two commercial plots along the growth corridor with verified C of O documentation gave me total peace of mind. The survey team was prompt, professional, and completely transparent."
          </p>
          <div>
            <strong style="display:block; color:var(--cobalt-950); font-size:0.95rem;">Engr. Dapo Alabi</strong>
            <span style="font-size:0.8rem; color:#64748b;">Commercial Property Developer</span>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- ====================================================================
       SIGNATURE RESORT AMENITIES & EXECUTIVE PRIVILEGES SHOWCASE
       (Replaces blog posts with premier corporate hospitality features)
       ==================================================================== -->
  <section class="hp-amenities-privileges" id="amenities" style="background: linear-gradient(180deg, #030814 0%, #07152e 50%, #040916 100%); color: #ffffff; padding: 6rem 0; border-top: 1px solid rgba(212,175,55,0.3); border-bottom: 1px solid rgba(212,175,55,0.3); position: relative; overflow: hidden;">
    
    <!-- Ambient Luxury Background Accents -->
    <div style="position: absolute; top: -100px; right: -100px; width: 400px; height: 400px; background: radial-gradient(circle, rgba(212,175,55,0.1) 0%, transparent 70%); border-radius: 50%; pointer-events: none;"></div>
    <div style="position: absolute; bottom: -100px; left: -100px; width: 450px; height: 450px; background: radial-gradient(circle, rgba(2,132,199,0.1) 0%, transparent 70%); border-radius: 50%; pointer-events: none;"></div>

    <div class="container container-wide" style="position: relative; z-index: 2;">
      
      <!-- Section Header -->
      <div style="text-align: center; max-width: 820px; margin: 0 auto 3.5rem;">
        <div style="display: inline-flex; align-items: center; gap: 8px; background: rgba(212,175,55,0.12); border: 1px solid rgba(212,175,55,0.35); padding: 5px 16px; border-radius: 30px; font-size: 12px; font-weight: 800; letter-spacing: 1px; color: #f59e0b; text-transform: uppercase; margin-bottom: 1rem;">
          <span style="width: 7px; height: 7px; border-radius: 50%; background: #d4af37;"></span>
          WORLD-CLASS RESORT COMFORTS &bull; UNCOMPROMISED EXCELLENCE
        </div>
        <h2 style="font-family: var(--font-display, 'Playfair Display', serif); font-size: 2.65rem; font-weight: 900; color: #ffffff; line-height: 1.2; margin-bottom: 1rem; letter-spacing: -0.5px;">
          Signature Guest Privileges &amp; Resort Amenities
        </h2>
        <p style="color: #94a3b8; font-size: 1.1rem; line-height: 1.65; margin: 0;">
          Engineered for international travelers, diplomatic delegations, wedding parties, and corporate leadership seeking tranquility along the Federal Capital Territory &mdash; Suleja economic gateway.
        </p>
      </div>

      <!-- Amenities Grid (8 Premier Cards) -->
      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 24px; margin-bottom: 3.5rem;">
        
        <!-- Feature 1: 24/7 Power -->
        <div class="hp-amenity-card" style="background: rgba(255,255,255,0.035); border: 1px solid rgba(255,255,255,0.08); border-radius: 16px; padding: 28px 24px; transition: all 0.3s cubic-bezier(0.4,0,0.2,1); position: relative; overflow: hidden;">
          <div style="width: 52px; height: 52px; border-radius: 12px; background: linear-gradient(135deg, rgba(212,175,55,0.2), rgba(212,175,55,0.05)); border: 1px solid rgba(212,175,55,0.4); display: flex; align-items: center; justify-content: center; font-size: 24px; margin-bottom: 18px; color: #f59e0b;">
            ⚡
          </div>
          <h3 style="font-size: 1.2rem; font-weight: 800; color: #ffffff; margin-bottom: 8px;">
            24/7 Uninterrupted Heavy Power
          </h3>
          <p style="color: #94a3b8; font-size: 0.92rem; line-height: 1.6; margin: 0;">
            Dual heavy-duty soundproof industrial generators backed by smart solar-inverter systems guarantee zero power blackouts day and night.
          </p>
        </div>

        <!-- Feature 2: Armed Security & CCTV -->
        <div class="hp-amenity-card" style="background: rgba(255,255,255,0.035); border: 1px solid rgba(255,255,255,0.08); border-radius: 16px; padding: 28px 24px; transition: all 0.3s cubic-bezier(0.4,0,0.2,1); position: relative; overflow: hidden;">
          <div style="width: 52px; height: 52px; border-radius: 12px; background: linear-gradient(135deg, rgba(16,185,129,0.2), rgba(16,185,129,0.05)); border: 1px solid rgba(16,185,129,0.4); display: flex; align-items: center; justify-content: center; font-size: 24px; margin-bottom: 18px; color: #34d399;">
            🛡️
          </div>
          <h3 style="font-size: 1.2rem; font-weight: 800; color: #ffffff; margin-bottom: 8px;">
            Guarded Sanctuary &amp; 24/7 CCTV
          </h3>
          <p style="color: #94a3b8; font-size: 0.92rem; line-height: 1.6; margin: 0;">
            Fully perimeter-walled compound with round-the-clock armed security personnel, digital access controls, and comprehensive high-definition CCTV coverage.
          </p>
        </div>

        <!-- Feature 3: Olympic Pool & Cabanas -->
        <div class="hp-amenity-card" style="background: rgba(255,255,255,0.035); border: 1px solid rgba(255,255,255,0.08); border-radius: 16px; padding: 28px 24px; transition: all 0.3s cubic-bezier(0.4,0,0.2,1); position: relative; overflow: hidden;">
          <div style="width: 52px; height: 52px; border-radius: 12px; background: linear-gradient(135deg, rgba(2,132,199,0.2), rgba(2,132,199,0.05)); border: 1px solid rgba(2,132,199,0.4); display: flex; align-items: center; justify-content: center; font-size: 24px; margin-bottom: 18px; color: #38bdf8;">
            🏊
          </div>
          <h3 style="font-size: 1.2rem; font-weight: 800; color: #ffffff; margin-bottom: 8px;">
            Olympic Leisure Pool &amp; Cabanas
          </h3>
          <p style="color: #94a3b8; font-size: 0.92rem; line-height: 1.6; margin: 0;">
            Crystal-clear outdoor swimming pool with private lounging cabanas, sun loungers, poolside beverage service, and twilight ambient lighting.
          </p>
        </div>

        <!-- Feature 4: Gourmet Kitchen & Room Service -->
        <div class="hp-amenity-card" style="background: rgba(255,255,255,0.035); border: 1px solid rgba(255,255,255,0.08); border-radius: 16px; padding: 28px 24px; transition: all 0.3s cubic-bezier(0.4,0,0.2,1); position: relative; overflow: hidden;">
          <div style="width: 52px; height: 52px; border-radius: 12px; background: linear-gradient(135deg, rgba(234,88,12,0.2), rgba(234,88,12,0.05)); border: 1px solid rgba(234,88,12,0.4); display: flex; align-items: center; justify-content: center; font-size: 24px; margin-bottom: 18px; color: #fb923c;">
            🍳
          </div>
          <h3 style="font-size: 1.2rem; font-weight: 800; color: #ffffff; margin-bottom: 8px;">
            Gourmet Kitchen &amp; In-Suite Dining
          </h3>
          <p style="color: #94a3b8; font-size: 0.92rem; line-height: 1.6; margin: 0;">
            Signature Nigerian delicacies, continental cuisine, evening barbecue suya, and prompt in-suite dining delivered directly from our central kitchen.
          </p>
        </div>

        <!-- Feature 5: 1,000-Seat Grand Banquet Auditorium -->
        <div class="hp-amenity-card" style="background: rgba(255,255,255,0.035); border: 1px solid rgba(255,255,255,0.08); border-radius: 16px; padding: 28px 24px; transition: all 0.3s cubic-bezier(0.4,0,0.2,1); position: relative; overflow: hidden;">
          <div style="width: 52px; height: 52px; border-radius: 12px; background: linear-gradient(135deg, rgba(212,175,55,0.2), rgba(212,175,55,0.05)); border: 1px solid rgba(212,175,55,0.4); display: flex; align-items: center; justify-content: center; font-size: 24px; margin-bottom: 18px; color: #f59e0b;">
            🏛️
          </div>
          <h3 style="font-size: 1.2rem; font-weight: 800; color: #ffffff; margin-bottom: 8px;">
            1,000-Seat Banquet &amp; Summit Hall
          </h3>
          <p style="color: #94a3b8; font-size: 0.92rem; line-height: 1.6; margin: 0;">
            Acoustically tuned, fully air-conditioned grand ballroom with integrated VIP bridal suites, podium, stage lighting, and banquet staging.
          </p>
        </div>

        <!-- Feature 6: High-Speed Fiber Internet -->
        <div class="hp-amenity-card" style="background: rgba(255,255,255,0.035); border: 1px solid rgba(255,255,255,0.08); border-radius: 16px; padding: 28px 24px; transition: all 0.3s cubic-bezier(0.4,0,0.2,1); position: relative; overflow: hidden;">
          <div style="width: 52px; height: 52px; border-radius: 12px; background: linear-gradient(135deg, rgba(56,189,248,0.2), rgba(56,189,248,0.05)); border: 1px solid rgba(56,189,248,0.4); display: flex; align-items: center; justify-content: center; font-size: 24px; margin-bottom: 18px; color: #38bdf8;">
            📶
          </div>
          <h3 style="font-size: 1.2rem; font-weight: 800; color: #ffffff; margin-bottom: 8px;">
            High-Speed Enterprise Wi-Fi
          </h3>
          <p style="color: #94a3b8; font-size: 0.92rem; line-height: 1.6; margin: 0;">
            Dedicated high-bandwidth fiber-optic wireless access spanning all rooms, suites, meeting rooms, lounges, and outdoor leisure spaces.
          </p>
        </div>

        <!-- Feature 7: Airport VIP Chauffeur & Shuttle -->
        <div class="hp-amenity-card" style="background: rgba(255,255,255,0.035); border: 1px solid rgba(255,255,255,0.08); border-radius: 16px; padding: 28px 24px; transition: all 0.3s cubic-bezier(0.4,0,0.2,1); position: relative; overflow: hidden;">
          <div style="width: 52px; height: 52px; border-radius: 12px; background: linear-gradient(135deg, rgba(168,85,247,0.2), rgba(168,85,247,0.05)); border: 1px solid rgba(168,85,247,0.4); display: flex; align-items: center; justify-content: center; font-size: 24px; margin-bottom: 18px; color: #c084fc;">
            🚗
          </div>
          <h3 style="font-size: 1.2rem; font-weight: 800; color: #ffffff; margin-bottom: 8px;">
            Airport VIP Chauffeur &amp; Escort
          </h3>
          <p style="color: #94a3b8; font-size: 0.92rem; line-height: 1.6; margin: 0;">
            Seamless executive pickup and transfer services between Nnamdi Azikiwe International Airport Abuja (ABV) and our resort gates.
          </p>
        </div>

        <!-- Feature 8: Corporate Compliance & Billing -->
        <div class="hp-amenity-card" style="background: rgba(255,255,255,0.035); border: 1px solid rgba(255,255,255,0.08); border-radius: 16px; padding: 28px 24px; transition: all 0.3s cubic-bezier(0.4,0,0.2,1); position: relative; overflow: hidden;">
          <div style="width: 52px; height: 52px; border-radius: 12px; background: linear-gradient(135deg, rgba(212,175,55,0.2), rgba(212,175,55,0.05)); border: 1px solid rgba(212,175,55,0.4); display: flex; align-items: center; justify-content: center; font-size: 24px; margin-bottom: 18px; color: #f59e0b;">
            📑
          </div>
          <h3 style="font-size: 1.2rem; font-weight: 800; color: #ffffff; margin-bottom: 8px;">
            CAC &amp; NGO Institutional Billing
          </h3>
          <p style="color: #94a3b8; font-size: 0.92rem; line-height: 1.6; margin: 0;">
            Full corporate incorporation (RC: 1613032) supporting formal procurement, NGO/CCCRN vendor accounts, and automated itemized receipts.
          </p>
        </div>

      </div>

      <!-- Bottom Interactive Concierge Action Strip -->
      <div style="background: linear-gradient(135deg, rgba(212,175,55,0.12) 0%, rgba(11,26,54,0.6) 100%); border: 1.5px solid rgba(212,175,55,0.4); border-radius: 20px; padding: 28px 32px; display: flex; align-items: center; justify-content: space-between; flex-wrap: wrap; gap: 20px; box-shadow: 0 10px 30px rgba(0,0,0,0.4);">
        <div style="max-width: 600px;">
          <div style="font-size: 11px; font-weight: 800; color: #f59e0b; text-transform: uppercase; letter-spacing: 0.8px; margin-bottom: 4px;">
            RESERVATION CONCIERGE DESK &bull; 24/7 LIVE ASSISTANCE
          </div>
          <h4 style="font-size: 1.35rem; font-weight: 800; color: #ffffff; margin: 0 0 6px;">
            Planning an Executive Stay, Wedding, or Corporate Delegation?
          </h4>
          <p style="color: #cbd5e1; font-size: 0.92rem; margin: 0; line-height: 1.5;">
            Speak directly with our front desk managers or book directly online for priority suite assignment and guaranteed best rates.
          </p>
        </div>
        <div style="display: flex; gap: 12px; flex-wrap: wrap;">
          <a href="<?php echo kc_url('reserve'); ?>" class="btn" style="background: linear-gradient(135deg, #d4af37 0%, #b89327 100%); color: #040914; font-weight: 800; padding: 12px 24px; border-radius: 10px; text-decoration: none; display: inline-flex; align-items: center; gap: 8px; box-shadow: 0 4px 15px rgba(212,175,55,0.4);">
            <span>Book A Room Now</span>
            <span>&rarr;</span>
          </a>
          <a href="https://wa.me/2348055558197?text=Hello%20Kelvin%20Cameo%20Concierge,%20I%20would%20like%20to%20inquire%20about%20booking%20suites%20and%20event%20halls" target="_blank" rel="noopener" class="btn" style="background: rgba(37,211,102,0.15); border: 1.5px solid #25D366; color: #25D366; font-weight: 800; padding: 12px 22px; border-radius: 10px; text-decoration: none; display: inline-flex; align-items: center; gap: 8px;">
            <span>WhatsApp Concierge ↗</span>
          </a>
        </div>
      </div>

    </div>

    <!-- Hover styles for amenity cards -->
    <style>
      .hp-amenity-card:hover {
        transform: translateY(-5px);
        background: rgba(255, 255, 255, 0.07) !important;
        border-color: rgba(212, 175, 55, 0.45) !important;
        box-shadow: 0 12px 30px rgba(0, 0, 0, 0.4);
      }
    </style>
  </section>

  <!-- ====================================================================
       INTERACTIVE FAQ SECTION
       ==================================================================== -->
  <section class="hp-faq" style="padding: 5rem 0; background: #ffffff;">
    <div class="container container-wide" style="max-width: 900px;">
      <div class="hp-section-head">
        <span class="rc-badge" style="margin-bottom:0.75rem; display:inline-flex;">Help &amp; Information</span>
        <h2 class="hp-section-title">Frequently Asked Questions</h2>
        <p class="hp-section-sub">Clear answers to questions regarding our rooms, event hall, fuel, and land acquisitions.</p>
      </div>

      <div class="faq-accordion" style="display:flex; flex-direction:column; gap:1rem; margin-top:2rem;">
        
        <details class="faq-item" style="background:#f8fafc; border:1px solid #e2e8f0; border-radius:12px; padding:1.25rem 1.5rem; cursor:pointer;" open>
          <summary style="font-weight:800; font-size:1.05rem; color:var(--cobalt-950); list-style:none; display:flex; justify-content:space-between; align-items:center;">
            How do I reserve a room at Kelvin Cameo Resort Hotel?
            <span style="color:var(--orange-500); font-size:1.25rem;">&darr;</span>
          </summary>
          <p style="margin-top:0.85rem; font-size:0.9rem; color:#475569; line-height:1.6;">
            You can book directly through our <a href="<?php echo kc_url('reserve'); ?>" style="color:var(--cobalt-600); font-weight:700;">Instant Online Reservation Page</a>. Choose your preferred room (Love Night, Golden Nest, Deluxe UK Room, etc.), dates, and confirm instantly. You can also chat directly with our 24/7 reception concierge on WhatsApp at +234 805 555 8197.
          </p>
        </details>

        <details class="faq-item" style="background:#f8fafc; border:1px solid #e2e8f0; border-radius:12px; padding:1.25rem 1.5rem; cursor:pointer;">
          <summary style="font-weight:800; font-size:1.05rem; color:var(--cobalt-950); list-style:none; display:flex; justify-content:space-between; align-items:center;">
            What is included in the 1,000-Seat Grand Banquet Hall package?
            <span style="color:var(--orange-500); font-size:1.25rem;">&darr;</span>
          </summary>
          <p style="margin-top:0.85rem; font-size:0.9rem; color:#475569; line-height:1.6;">
            The full service package (₦1.05M) includes central chilling air-conditioning, full acoustic PA system, high-lux ambient lighting, banquet chairs and tables, dedicated 250kVA standby generator fuel, and an air-conditioned bridal dressing room. The hall-only package is also available at ₦850,000.
          </p>
        </details>

        <details class="faq-item" style="background:#f8fafc; border:1px solid #e2e8f0; border-radius:12px; padding:1.25rem 1.5rem; cursor:pointer;">
          <summary style="font-weight:800; font-size:1.05rem; color:var(--cobalt-950); list-style:none; display:flex; justify-content:space-between; align-items:center;">
            How can corporate clients contract bulk fuel supply or station partnerships?
            <span style="color:var(--orange-500); font-size:1.25rem;">&darr;</span>
          </summary>
          <p style="margin-top:0.85rem; font-size:0.9rem; color:#475569; line-height:1.6;">
            Corporate fleet operators and industrial off-takers can trigger our <a href="#" data-modal="inquiryModal" style="color:var(--cobalt-600); font-weight:700;">Corporate Partnership Modal</a> or reach our Energy Desk at +234 805 555 8197 to arrange calibrated bulk PMS/AGO deliveries with documented quality compliance.
          </p>
        </details>

        <details class="faq-item" style="background:#f8fafc; border:1px solid #e2e8f0; border-radius:12px; padding:1.25rem 1.5rem; cursor:pointer;">
          <summary style="font-weight:800; font-size:1.05rem; color:var(--cobalt-950); list-style:none; display:flex; justify-content:space-between; align-items:center;">
            Are land titles with Kelvin Cameo Real Estate verified by the Ministry?
            <span style="color:var(--orange-500); font-size:1.25rem;">&darr;</span>
          </summary>
          <p style="margin-top:0.85rem; font-size:0.9rem; color:#475569; line-height:1.6;">
            Yes. Every residential scheme and commercial plot sold by Kelvin Cameo possesses fully verifiable documentation, registered survey coordinates, and genuine Certificate of Occupancy (C of O) / Governor's Consent. Site inspections can be scheduled anytime free of charge.
          </p>
        </details>

      </div>
    </div>
  </section>

  <!-- ====================================================================
       GRAND PRE-FOOTER CORPORATE CALL TO ACTION
       ==================================================================== -->
  <section class="hp-cta" style="background: linear-gradient(135deg, #071e3d 0%, #030c1a 100%); color: #ffffff; padding: 5rem 0; border-top: 3px solid #f59e0b; text-align: center;">
    <div class="container container-wide" style="max-width: 850px;">
      <span class="rc-badge" style="background: rgba(245, 158, 11, 0.2); color: #fef08a; border-color: rgba(245, 158, 11, 0.4); margin-bottom: 1.25rem; display: inline-flex;">
        RC: 1613032 &bull; Direct Corporate Access
      </span>
      <h2 style="font-family: var(--font-display); font-size: 2.5rem; font-weight: 900; color: #ffffff; line-height: 1.2; margin-bottom: 1rem;">
        Experience Verifiable Excellence Across Nigeria
      </h2>
      <p style="font-size: 1.1rem; color: #cbd5e1; line-height: 1.6; margin-bottom: 2.25rem;">
        Whether you are booking a luxury weekend stay, acquiring prime real estate, fueling an interstate fleet, or hosting a 1,000-guest summit — our team is ready to serve you with prompt integrity.
      </p>

      <div style="display: flex; flex-wrap: wrap; justify-content: center; gap: 1rem;">
        <a href="<?php echo kc_url('reserve'); ?>" class="btn-gold btn-lg" style="padding: 0.85rem 1.85rem; border-radius: 12px; font-size: 1rem;">
          Book Hotel Room Online &rarr;
        </a>
        <a href="https://wa.me/2348055558197?text=Hello%20Kelvin%20Cameo%2C%20I%20would%20like%20to%20speak%20with%20your%20team." target="_blank" rel="noopener" class="btn btn-whatsapp btn-lg" style="padding: 0.85rem 1.75rem; border-radius: 12px; font-size: 1rem;">
          <svg viewBox="0 0 24 24" width="18" height="18" fill="currentColor">
            <path d="M12.04 2c-5.46 0-9.91 4.45-9.91 9.91 0 1.75.46 3.45 1.32 4.95L2.05 22l5.25-1.38c1.45.79 3.08 1.21 4.74 1.21 5.46 0 9.91-4.45 9.91-9.91 0-2.65-1.03-5.14-2.9-7.01A9.816 9.816 0 0 0 12.04 2z"/>
          </svg>
          Chat on WhatsApp
        </a>
        <button class="btn btn-outline-white btn-lg" data-modal="inquiryModal" style="padding: 0.85rem 1.75rem; border-radius: 12px; font-size: 1rem;">
          Submit Corporate Inquiry
        </button>
      </div>
    </div>
  </section>

  <!-- Interactive Hero Slider Controller Script -->
  <script>
  document.addEventListener('DOMContentLoaded', function() {
    var slides = document.querySelectorAll('.hp-hero-slide');
    var pills = document.querySelectorAll('.hp-sector-pill');
    var currentSlide = 0;
    var slideTimer = null;

    function goToSlide(idx) {
      if (idx < 0 || idx >= slides.length) return;
      slides.forEach(function(s, i) {
        if (i === idx) {
          s.classList.add('active');
        } else {
          s.classList.remove('active');
        }
      });
      pills.forEach(function(p, i) {
        if (i === idx) {
          p.classList.add('active');
          p.setAttribute('aria-selected', 'true');
        } else {
          p.classList.remove('active');
          p.setAttribute('aria-selected', 'false');
        }
      });
      currentSlide = idx;
    }

    pills.forEach(function(pill) {
      pill.addEventListener('click', function() {
        var targetIndex = parseInt(this.getAttribute('data-slide'), 10);
        goToSlide(targetIndex);
        resetTimer();
      });
    });

    function nextSlide() {
      var next = (currentSlide + 1) % slides.length;
      goToSlide(next);
    }

    function resetTimer() {
      if (slideTimer) clearInterval(slideTimer);
      slideTimer = setInterval(nextSlide, 7000);
    }

    resetTimer();
  });
  </script>

<?php
get_footer();
?>
