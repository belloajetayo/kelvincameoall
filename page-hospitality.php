<?php
/**
 * Template Name: Hospitality & Resort Hotel
 * Description: Kelvin Cameo Resort Hotel, Room Tariffs, 1,000-Seat Banquet Hall & Leisure Amenities.
 *
 * @package Kelvin_Cameo
 */

get_header();
?>

  <!-- Hero Section -->
  <section class="page-hero hero-resort">
    <div class="container">
      <div class="page-hero-inner">
        <div class="breadcrumb-row">
          <a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a>
          <span>/</span>
          <span>Operating Sectors</span>
          <span>/</span>
          <span style="color:var(--orange-400);">Hospitality & Leisure</span>
        </div>

        <span class="rc-badge" style="margin-bottom:1rem; display:inline-flex;">
          Relax • Recharge • Reconnect
        </span>

        <h1 class="page-hero-title">
          Experience Unrivaled Luxury, Serenity & <span class="text-gradient-resort">Grand Celebrations</span>.
        </h1>

        <p class="page-hero-desc">
          Welcome to <strong>Kelvin Cameo Resort Hotel</strong> — Suleja’s premier hospitality oasis along the Abuja capital corridor. Discover designer boutique suites, two distinctive branch locations (Main Hotel & The Annex), a majestic 1,000-seat grand banquet hall, pristine pool, and gourmet dining.
        </p>

        <div style="display:flex; gap:1.25rem; flex-wrap:wrap;">
          <a href="#rooms" class="btn btn-primary btn-lg">Explore Suites & Book</a>
          <a href="#banquet" class="btn btn-outline-white btn-lg">1,000-Seat Banquet Hall</a>
          <a href="https://wa.me/2348055558197?text=Hello%20Kelvin%20Cameo%20Resort,%20I%20want%20to%20inquire%20about%20booking%20a%20stay" class="btn btn-whatsapp btn-lg" target="_blank" rel="noopener">WhatsApp Concierge</a>
        </div>
      </div>
    </div>
  </section>

  <!-- Quick Booking Strip & Branch Indicator -->
  <section style="background:var(--sand-100); border-bottom:1px solid var(--sand-200); padding:1.75rem 0;">
    <div class="container">
      <div style="display:flex; justify-content:space-between; align-items:center; flex-wrap:wrap; gap:1.5rem;">
        <div style="display:flex; align-items:center; gap:1.5rem; flex-wrap:wrap;">
          <div style="display:flex; align-items:center; gap:0.5rem;">
            <span style="width:12px; height:12px; border-radius:50%; background:var(--orange-500); display:inline-block;"></span>
            <span style="font-size:0.9rem; font-weight:700; color:var(--navy-900);">Branch 01: Main Hotel</span>
            <span style="font-size:0.8rem; color:var(--slate-500);">(Suites, Apartments & Grand Banquet Hall)</span>
          </div>
          <div style="display:flex; align-items:center; gap:0.5rem;">
            <span style="width:12px; height:12px; border-radius:50%; background:#0284c7; display:inline-block;"></span>
            <span style="font-size:0.9rem; font-weight:700; color:var(--navy-900);">Branch 02: The Annex</span>
            <span style="font-size:0.8rem; color:var(--slate-500);">(Executive, Sunset & Deluxe Rooms)</span>
          </div>
        </div>

        <div>
          <a href="#rooms" class="btn btn-paystack btn-sm" style="gap:0.4rem;">
            <svg viewBox="0 0 24 24" width="14" height="14" fill="none" stroke="currentColor" stroke-width="2.5"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg>
            Select Room & Tariff
          </a>
        </div>
      </div>
    </div>
  </section>

  <!-- Rooms & Accommodation Section (Segmented: Branch 01 Main Hotel vs Branch 02 The Annex) -->
  <section id="rooms" class="section-padding" style="background:var(--sand-50);">
    <div class="container">
      <div class="section-head" style="text-align:center; max-width:780px; margin:0 auto;">
        <span class="section-badge" style="background:rgba(242,92,5,0.15); color:var(--orange-600);">Two Distinctive Hospitality Branches</span>
        <h2 class="section-title">Rooms, Luxury Suites & Residences</h2>
        <p class="section-subtitle">
          Experience premium hospitality tailored to your budget and travel style across our two properties: <strong>Branch 01 (Main Hotel)</strong> and <strong>Branch 02 (The Annex)</strong>. Every room features plush orthopedic bedding, high-speed fiber Wi-Fi, split air conditioning, smart entertainment, and 24/7 uninterrupted power.
        </p>
      </div>

      <!-- Filter Tabs -->
      <div class="filter-tabs-wrapper room-tabs">
        <button type="button" class="tab-btn tab-resort active" data-room-filter="all">All Accommodations (10)</button>
        <button type="button" class="tab-btn tab-resort" data-room-filter="annex">Branch 02: The Annex (4)</button>
        <button type="button" class="tab-btn tab-resort" data-room-filter="main-room">Branch 01: Main Rooms (2)</button>
        <button type="button" class="tab-btn tab-resort" data-room-filter="main-suite">Branch 01: Suites & Apartments (4)</button>
      </div>

      <!-- Branch 02 Section Indicator -->
      <div class="branch-section-bar annex-bar">
        <div class="branch-bar-title-group">
          <span class="branch-pill annex">Branch 02</span>
          <div>
            <h3 class="branch-bar-heading">The Annex Branch — Executive & Deluxe Rooms</h3>
            <p class="branch-bar-sub">Affordable business comfort, quiet residential privacy, and modern executive amenities from ₦25,000/night.</p>
          </div>
        </div>
        <a href="https://wa.me/2348055558197?text=Hello%20Kelvin%20Cameo,%20I%20want%20to%20inquire%20about%20staying%20at%20The%20Annex%20Branch" target="_blank" rel="noopener" class="btn btn-secondary btn-sm">Inquire The Annex</a>
      </div>

      <!-- Annex Suites Grid -->
      <div class="suites-grid">

        <!-- 1. Deluxe Room (Annex) -->
        <article class="suite-card" data-room-cat="annex">
          <div class="suite-card-media">
            <span class="suite-branch-badge branch-annex">Branch 02 • The Annex</span>
            <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/photos/resort/room-deluxe.jpg' ); ?>" alt="Deluxe Room at Kelvin Cameo Resort Annex" loading="lazy">
          </div>
          <div class="suite-card-body">
            <div>
              <span class="suite-category-label">Standard Luxury</span>
              <h3 class="suite-name">Deluxe Room</h3>
              <p class="suite-desc">
                Cozy, modern retreat featuring a plush queen bed, ambient mood lighting, ensuite rain shower, and dedicated work desk ideal for solo travelers and short stays.
              </p>
              <div class="suite-amenities-row">
                <span class="suite-amenity-tag">Queen Bed</span>
                <span class="suite-amenity-tag">Air Conditioning</span>
                <span class="suite-amenity-tag">Free Wi-Fi</span>
                <span class="suite-amenity-tag">Flat LED TV</span>
              </div>
            </div>
            <div class="suite-footer">
              <div class="suite-price-block">
                <span class="suite-price-currency">Tariff Per Night</span>
                <div class="suite-price-amount">₦25,000<span>/night</span></div>
              </div>
              <div class="suite-action-btns">
                <button type="button" class="btn btn-primary btn-sm btn-book-room" 
                  data-room-name="Deluxe Room"
                  data-room-price="25000"
                  data-room-branch="Branch 02 • The Annex"
                  data-room-img="<?php echo esc_url( get_template_directory_uri() . '/assets/photos/resort/room-deluxe.jpg' ); ?>"
                  data-paystack-url="https://paystack.com/buy/deluxe-room-avbdle">
                  <svg viewBox="0 0 24 24" width="13" height="13" fill="none" stroke="currentColor" stroke-width="2.5"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg>
                  Book Now
                </button>
                <a href="https://wa.me/2348055558197?text=Hello%20Kelvin%20Cameo%20Resort,%20I%20am%20interested%20in%20the%20Deluxe%20Room%20(25k/night)" target="_blank" rel="noopener" class="btn btn-secondary btn-sm">WhatsApp</a>
              </div>
            </div>
          </div>
        </article>

        <!-- 2. Executive Room (Annex) -->
        <article class="suite-card" data-room-cat="annex">
          <div class="suite-card-media">
            <span class="suite-branch-badge branch-annex">Branch 02 • The Annex</span>
            <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/photos/resort/room-executive.jpg' ); ?>" alt="Executive Room at Kelvin Cameo Resort Annex" loading="lazy">
          </div>
          <div class="suite-card-body">
            <div>
              <span class="suite-category-label">Business Comfort</span>
              <h3 class="suite-name">Executive Room</h3>
              <p class="suite-desc">
                Generous living space designed for business travelers. Features an ergonomic workspace, upgraded bath fittings, mini-fridge, and complimentary tea setup.
              </p>
              <div class="suite-amenities-row">
                <span class="suite-amenity-tag">King Bed</span>
                <span class="suite-amenity-tag">Work Desk</span>
                <span class="suite-amenity-tag">Mini Fridge</span>
                <span class="suite-amenity-tag">Cable TV</span>
              </div>
            </div>
            <div class="suite-footer">
              <div class="suite-price-block">
                <span class="suite-price-currency">Tariff Per Night</span>
                <div class="suite-price-amount">₦35,000<span>/night</span></div>
              </div>
              <div class="suite-action-btns">
                <button type="button" class="btn btn-primary btn-sm btn-book-room" 
                  data-room-name="Executive Room"
                  data-room-price="35000"
                  data-room-branch="Branch 02 • The Annex"
                  data-room-img="<?php echo esc_url( get_template_directory_uri() . '/assets/photos/resort/room-executive.jpg' ); ?>"
                  data-paystack-url="https://paystack.com/buy/executive-ncjolm">
                  <svg viewBox="0 0 24 24" width="13" height="13" fill="none" stroke="currentColor" stroke-width="2.5"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg>
                  Book Now
                </button>
                <a href="https://wa.me/2348055558197?text=Hello%20Kelvin%20Cameo%20Resort,%20I%20am%20interested%20in%20the%20Executive%20Room%20(35k/night)" target="_blank" rel="noopener" class="btn btn-secondary btn-sm">WhatsApp</a>
              </div>
            </div>
          </div>
        </article>

        <!-- 3. Sunset Room (Annex) -->
        <article class="suite-card" data-room-cat="annex">
          <div class="suite-card-media">
            <span class="suite-branch-badge branch-annex">Branch 02 • The Annex</span>
            <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/photos/resort/room-sunset.jpg' ); ?>" alt="Sunset Room at Kelvin Cameo Resort Annex" loading="lazy">
          </div>
          <div class="suite-card-body">
            <div>
              <span class="suite-category-label">Panoramic View</span>
              <h3 class="suite-name">Sunset Room</h3>
              <p class="suite-desc">
                Oriented toward golden evening skies, this elegant room boasts oversized windows, premium drapes, custom vanity mirror, and plush armchair seating.
              </p>
              <div class="suite-amenities-row">
                <span class="suite-amenity-tag">Sunset Vista</span>
                <span class="suite-amenity-tag">King Bed</span>
                <span class="suite-amenity-tag">Room Service</span>
                <span class="suite-amenity-tag">High-Speed Wi-Fi</span>
              </div>
            </div>
            <div class="suite-footer">
              <div class="suite-price-block">
                <span class="suite-price-currency">Tariff Per Night</span>
                <div class="suite-price-amount">₦40,000<span>/night</span></div>
              </div>
              <div class="suite-action-btns">
                <button type="button" class="btn btn-primary btn-sm btn-book-room" 
                  data-room-name="Sunset Room"
                  data-room-price="40000"
                  data-room-branch="Branch 02 • The Annex"
                  data-room-img="<?php echo esc_url( get_template_directory_uri() . '/assets/photos/resort/room-sunset.jpg' ); ?>"
                  data-paystack-url="https://paystack.com/buy/sunset-pcoofy">
                  <svg viewBox="0 0 24 24" width="13" height="13" fill="none" stroke="currentColor" stroke-width="2.5"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg>
                  Book Now
                </button>
                <a href="https://wa.me/2348055558197?text=Hello%20Kelvin%20Cameo%20Resort,%20I%20am%20interested%20in%20the%20Sunset%20Room%20(40k/night)" target="_blank" rel="noopener" class="btn btn-secondary btn-sm">WhatsApp</a>
              </div>
            </div>
          </div>
        </article>

        <!-- 4. Prestige Room (Annex) -->
        <article class="suite-card" data-room-cat="annex">
          <div class="suite-card-media">
            <span class="suite-branch-badge branch-annex">Branch 02 • The Annex</span>
            <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/photos/resort/room-prestige.jpg' ); ?>" alt="Prestige Room at Kelvin Cameo Resort Annex" loading="lazy">
          </div>
          <div class="suite-card-body">
            <div>
              <span class="suite-category-label">Premier Comfort</span>
              <h3 class="suite-name">Prestige Room</h3>
              <p class="suite-desc">
                The flagship offering at The Annex branch. Crafted for discerning guests with custom acoustic insulation, luxury bathrobes, and express concierge.
              </p>
              <div class="suite-amenities-row">
                <span class="suite-amenity-tag">Soundproofed</span>
                <span class="suite-amenity-tag">Luxury Linens</span>
                <span class="suite-amenity-tag">Smart TV</span>
                <span class="suite-amenity-tag">Daily Housekeeping</span>
              </div>
            </div>
            <div class="suite-footer">
              <div class="suite-price-block">
                <span class="suite-price-currency">Tariff Per Night</span>
                <div class="suite-price-amount">₦45,000<span>/night</span></div>
              </div>
              <div class="suite-action-btns">
                <button type="button" class="btn btn-primary btn-sm btn-book-room" 
                  data-room-name="Prestige Room"
                  data-room-price="45000"
                  data-room-branch="Branch 02 • The Annex"
                  data-room-img="<?php echo esc_url( get_template_directory_uri() . '/assets/photos/resort/room-prestige.jpg' ); ?>"
                  data-paystack-url="https://paystack.com/buy/prestige-lknrmy">
                  <svg viewBox="0 0 24 24" width="13" height="13" fill="none" stroke="currentColor" stroke-width="2.5"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg>
                  Book Now
                </button>
                <a href="https://wa.me/2348055558197?text=Hello%20Kelvin%20Cameo%20Resort,%20I%20am%20interested%20in%20the%20Prestige%20Room%20(45k/night)" target="_blank" rel="noopener" class="btn btn-secondary btn-sm">WhatsApp</a>
              </div>
            </div>
          </div>
        </article>

      </div>

      <!-- Branch 01 Section Indicator -->
      <div class="branch-section-bar main-bar">
        <div class="branch-bar-title-group">
          <span class="branch-pill main">Branch 01</span>
          <div>
            <h3 class="branch-bar-heading">Main Hotel — Luxury Rooms, Boutique Suites & Serviced Residences</h3>
            <p class="branch-bar-sub">Direct access to the swimming pool, gourmet restaurant, cocktail bar, and the 1,000-seat grand banquet auditorium.</p>
          </div>
        </div>
        <a href="https://wa.me/2348055558197?text=Hello%20Kelvin%20Cameo,%20I%20want%20to%20inquire%20about%20staying%20at%20Branch%2001%20Main%20Hotel" target="_blank" rel="noopener" class="btn btn-primary btn-sm">Inquire Main Hotel</a>
      </div>

      <!-- Main Hotel Grid -->
      <div class="suites-grid">

        <!-- 5. Love Night Room (Main Hotel) -->
        <article class="suite-card" data-room-cat="main-room">
          <div class="suite-card-media">
            <span class="suite-branch-badge branch-main">Branch 01 • Main Hotel</span>
            <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/photos/resort/single-room.jpg' ); ?>" alt="Love Night Room at Kelvin Cameo Resort Hotel" loading="lazy">
          </div>
          <div class="suite-card-body">
            <div>
              <span class="suite-category-label">Romantic Getaway Room</span>
              <h3 class="suite-name">Love Night Room</h3>
              <p class="suite-desc">
                Curated for couples, anniversaries, and romantic getaways. Authentic plush upholstered headboard, ambient mood lighting, bedside intercom, and ensuite luxury bath.
              </p>
              <div class="suite-amenities-row">
                <span class="suite-amenity-tag">Designer Bed</span>
                <span class="suite-amenity-tag">Intercom</span>
                <span class="suite-amenity-tag">Air Conditioning</span>
                <span class="suite-amenity-tag">Plush Linens</span>
              </div>
            </div>
            <div class="suite-footer">
              <div class="suite-price-block">
                <span class="suite-price-currency">Tariff Per Night</span>
                <div class="suite-price-amount">₦50,000<span>/night</span></div>
              </div>
              <div class="suite-action-btns">
                <button type="button" class="btn btn-primary btn-sm btn-book-room" 
                  data-room-name="Love Night Room"
                  data-room-price="50000"
                  data-room-branch="Branch 01 • Main Hotel"
                  data-room-img="<?php echo esc_url( get_template_directory_uri() . '/assets/photos/resort/single-room.jpg' ); ?>"
                  data-paystack-url="https://paystack.com/buy/love-night-hdtfxs">
                  <svg viewBox="0 0 24 24" width="13" height="13" fill="none" stroke="currentColor" stroke-width="2.5"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg>
                  Book Now
                </button>
                <a href="https://wa.me/2348055558197?text=Hello%20Kelvin%20Cameo%20Resort,%20I%20am%20interested%20in%20the%20Love%20Night%20Room%20(50k/night)" target="_blank" rel="noopener" class="btn btn-secondary btn-sm">WhatsApp</a>
              </div>
            </div>
          </div>
        </article>

        <!-- 6. Golden Nest Room (Main Hotel) -->
        <article class="suite-card" data-room-cat="main-room">
          <div class="suite-card-media">
            <span class="suite-branch-badge branch-main">Branch 01 • Main Hotel</span>
            <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/photos/resort/room-purple.jpg' ); ?>" alt="Golden Nest Room at Kelvin Cameo Resort Hotel" loading="lazy">
          </div>
          <div class="suite-card-body">
            <div>
              <span class="suite-category-label">Signature Luxury Room</span>
              <h3 class="suite-name">Golden Nest Room</h3>
              <p class="suite-desc">
                Warm amber finishes, custom velvet ribbed headboard, bedside ambient sconces, executive armchair, carpeted floor, and full split-unit air conditioning.
              </p>
              <div class="suite-amenities-row">
                <span class="suite-amenity-tag">Ambient Sconces</span>
                <span class="suite-amenity-tag">Lounge Chair</span>
                <span class="suite-amenity-tag">Split AC</span>
                <span class="suite-amenity-tag">Intercom</span>
              </div>
            </div>
            <div class="suite-footer">
              <div class="suite-price-block">
                <span class="suite-price-currency">Tariff Per Night</span>
                <div class="suite-price-amount">₦60,000<span>/night</span></div>
              </div>
              <div class="suite-action-btns">
                <button type="button" class="btn btn-primary btn-sm btn-book-room" 
                  data-room-name="Golden Nest Room"
                  data-room-price="60000"
                  data-room-branch="Branch 01 • Main Hotel"
                  data-room-img="<?php echo esc_url( get_template_directory_uri() . '/assets/photos/resort/room-purple.jpg' ); ?>"
                  data-paystack-url="https://paystack.com/buy/golden-nest-ugswqe">
                  <svg viewBox="0 0 24 24" width="13" height="13" fill="none" stroke="currentColor" stroke-width="2.5"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg>
                  Book Now
                </button>
                <a href="https://wa.me/2348055558197?text=Hello%20Kelvin%20Cameo%20Resort,%20I%20am%20interested%20in%20the%20Golden%20Nest%20Room%20(60k/night)" target="_blank" rel="noopener" class="btn btn-secondary btn-sm">WhatsApp</a>
              </div>
            </div>
          </div>
        </article>

        <!-- 7. Royal Treat Suite (Main Hotel) -->
        <article class="suite-card" data-room-cat="main-suite">
          <div class="suite-card-media">
            <span class="suite-branch-badge branch-main">Branch 01 • Main Hotel</span>
            <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/photos/resort/suite-lounge.jpg' ); ?>" alt="Royal Treat Suite at Kelvin Cameo Resort" loading="lazy">
          </div>
          <div class="suite-card-body">
            <div>
              <span class="suite-category-label">Regal Experience Suite</span>
              <h3 class="suite-name">Royal Treat Suite</h3>
              <p class="suite-desc">
                Indulge in royal comfort featuring an expansive master bedroom, gold-accented fixtures, separate guest powder room, and personalized 24-hour butler service.
              </p>
              <div class="suite-amenities-row">
                <span class="suite-amenity-tag">Regal Finish</span>
                <span class="suite-amenity-tag">Powder Room</span>
                <span class="suite-amenity-tag">Butler Service</span>
                <span class="suite-amenity-tag">VIP Turn-down</span>
              </div>
            </div>
            <div class="suite-footer">
              <div class="suite-price-block">
                <span class="suite-price-currency">Tariff Per Night</span>
                <div class="suite-price-amount">₦60,000<span>/night</span></div>
              </div>
              <div class="suite-action-btns">
                <button type="button" class="btn btn-primary btn-sm btn-book-room" 
                  data-room-name="Royal Treat Suite"
                  data-room-price="60000"
                  data-room-branch="Branch 01 • Main Hotel"
                  data-room-img="<?php echo esc_url( get_template_directory_uri() . '/assets/photos/resort/suite-lounge.jpg' ); ?>"
                  data-paystack-url="https://paystack.com/buy/golden-nest-ugswqe">
                  <svg viewBox="0 0 24 24" width="13" height="13" fill="none" stroke="currentColor" stroke-width="2.5"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg>
                  Book Now
                </button>
                <a href="https://wa.me/2348055558197?text=Hello%20Kelvin%20Cameo%20Resort,%20I%20am%20interested%20in%20the%20Royal%20Treat%20Suite%20(60k/night)" target="_blank" rel="noopener" class="btn btn-secondary btn-sm">WhatsApp</a>
              </div>
            </div>
          </div>
        </article>

        <!-- 8. Blissful Breeze Suite (Main Hotel) -->
        <article class="suite-card" data-room-cat="main-suite">
          <div class="suite-card-media">
            <span class="suite-branch-badge branch-main">Branch 01 • Main Hotel</span>
            <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/photos/resort/apartment-hall.jpg' ); ?>" alt="Blissful Breeze Suite at Kelvin Cameo Resort" loading="lazy">
          </div>
          <div class="suite-card-body">
            <div>
              <span class="suite-category-label">Terrace Penthouse Suite</span>
              <h3 class="suite-name">Blissful Breeze Suite</h3>
              <p class="suite-desc">
                Positioned on the highest floor with an expansive private terrace overlooking the resort courtyard and pool. Pure aeration, natural light, and unmatched serenity.
              </p>
              <div class="suite-amenities-row">
                <span class="suite-amenity-tag">Private Balcony</span>
                <span class="suite-amenity-tag">Poolside View</span>
                <span class="suite-amenity-tag">Jacuzzi Bath</span>
                <span class="suite-amenity-tag">Espresso Bar</span>
              </div>
            </div>
            <div class="suite-footer">
              <div class="suite-price-block">
                <span class="suite-price-currency">Tariff Per Night</span>
                <div class="suite-price-amount">₦75,000<span>/night</span></div>
              </div>
              <div class="suite-action-btns">
                <button type="button" class="btn btn-primary btn-sm btn-book-room" 
                  data-room-name="Blissful Breeze Suite"
                  data-room-price="75000"
                  data-room-branch="Branch 01 • Main Hotel"
                  data-room-img="<?php echo esc_url( get_template_directory_uri() . '/assets/photos/resort/apartment-hall.jpg' ); ?>"
                  data-paystack-url="https://paystack.com/buy/blissful-breeze-aqlhld">
                  <svg viewBox="0 0 24 24" width="13" height="13" fill="none" stroke="currentColor" stroke-width="2.5"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg>
                  Book Now
                </button>
                <a href="https://wa.me/2348055558197?text=Hello%20Kelvin%20Cameo%20Resort,%20I%20am%20interested%20in%20the%20Blissful%20Breeze%20Suite%20(75k/night)" target="_blank" rel="noopener" class="btn btn-secondary btn-sm">WhatsApp</a>
              </div>
            </div>
          </div>
        </article>

        <!-- 9. Luxury Retreat Apartment (Main Hotel) -->
        <article class="suite-card" data-room-cat="main-suite">
          <div class="suite-card-media">
            <span class="suite-branch-badge branch-main">Branch 01 • Serviced Apartment</span>
            <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/photos/resort/dining-2.jpg' ); ?>" alt="Luxury Retreat Apartment at Kelvin Cameo Resort" loading="lazy">
          </div>
          <div class="suite-card-body">
            <div>
              <span class="suite-category-label">Multi-Room Serviced Residence</span>
              <h3 class="suite-name">Luxury Retreat Apartment</h3>
              <p class="suite-desc">
                Fully serviced apartment featuring a sprawling private living parlor, dining room, fully equipped kitchenette, master bedroom ensuite, and private entrance.
              </p>
              <div class="suite-amenities-row">
                <span class="suite-amenity-tag">Private Living Room</span>
                <span class="suite-amenity-tag">Fitted Kitchenette</span>
                <span class="suite-amenity-tag">Dining Area</span>
                <span class="suite-amenity-tag">Extended Stays</span>
              </div>
            </div>
            <div class="suite-footer">
              <div class="suite-price-block">
                <span class="suite-price-currency">Tariff Per Night</span>
                <div class="suite-price-amount">₦160,000<span>/night</span></div>
              </div>
              <div class="suite-action-btns">
                <button type="button" class="btn btn-primary btn-sm btn-book-room" 
                  data-room-name="Luxury Retreat Apartment"
                  data-room-price="160000"
                  data-room-branch="Branch 01 • Main Hotel"
                  data-room-img="<?php echo esc_url( get_template_directory_uri() . '/assets/photos/resort/dining-2.jpg' ); ?>"
                  data-paystack-url="https://paystack.com/buy/luxury-retreat-orufnn">
                  <svg viewBox="0 0 24 24" width="13" height="13" fill="none" stroke="currentColor" stroke-width="2.5"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg>
                  Book Now
                </button>
                <a href="https://wa.me/2348055558197?text=Hello%20Kelvin%20Cameo%20Resort,%20I%20am%20interested%20in%20the%20Luxury%20Retreat%20Apartment%20(160k/night)" target="_blank" rel="noopener" class="btn btn-secondary btn-sm">WhatsApp</a>
              </div>
            </div>
          </div>
        </article>

        <!-- 10. Royal Retreat Apartment (Main Hotel) -->
        <article class="suite-card" data-room-cat="main-suite">
          <div class="suite-card-media">
            <span class="suite-branch-badge branch-main">Branch 01 • Presidential Suite</span>
            <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/photos/resort/apartment-lounge.jpg' ); ?>" alt="Royal Retreat Apartment at Kelvin Cameo Resort" loading="lazy">
          </div>
          <div class="suite-card-body">
            <div>
              <span class="suite-category-label">Presidential Penthouse Residence</span>
              <h3 class="suite-name">Royal Retreat Apartment</h3>
              <p class="suite-desc">
                The pinnacle of hospitality excellence. A palatial 2-bedroom executive apartment with formal dining, security quarters interlink, jacuzzi, and dedicated chef services.
              </p>
              <div class="suite-amenities-row">
                <span class="suite-amenity-tag">Dual Ensuite Bedrooms</span>
                <span class="suite-amenity-tag">Full Kitchen</span>
                <span class="suite-amenity-tag">Executive Dining</span>
                <span class="suite-amenity-tag">Private Concierge</span>
              </div>
            </div>
            <div class="suite-footer">
              <div class="suite-price-block">
                <span class="suite-price-currency">Tariff Per Night</span>
                <div class="suite-price-amount">₦180,000<span>/night</span></div>
              </div>
              <div class="suite-action-btns">
                <button type="button" class="btn btn-primary btn-sm btn-book-room" 
                  data-room-name="Royal Retreat Apartment"
                  data-room-price="180000"
                  data-room-branch="Branch 01 • Main Hotel"
                  data-room-img="<?php echo esc_url( get_template_directory_uri() . '/assets/photos/resort/apartment-lounge.jpg' ); ?>"
                  data-paystack-url="https://paystack.com/buy/royal-retreat-mnbzbj">
                  <svg viewBox="0 0 24 24" width="13" height="13" fill="none" stroke="currentColor" stroke-width="2.5"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg>
                  Book Now
                </button>
                <a href="https://wa.me/2348055558197?text=Hello%20Kelvin%20Cameo%20Resort,%20I%20am%20interested%20in%20the%20Royal%20Retreat%20Apartment%20(180k/night)" target="_blank" rel="noopener" class="btn btn-secondary btn-sm">WhatsApp</a>
              </div>
            </div>
          </div>
        </article>

      </div>
    </div>
  </section>

  <!-- 1,000-Seat Grand Banquet Hall & Events Showcase -->
  <section id="banquet" class="section-padding" style="background:var(--navy-950); color:var(--white);">
    <div class="container">
      <div class="section-head" style="text-align:center; max-width:800px; margin:0 auto;">
        <span class="section-badge" style="background:rgba(242,92,5,0.25); color:var(--orange-400);">Event & Convention Center</span>
        <h2 class="section-title" style="color:var(--white);">The 1,000-Seat Grand Banquet Hall</h2>
        <p class="section-subtitle" style="color:var(--slate-300);">
          Host unforgettable high-society weddings, political conventions, corporate AGMs, and gala celebrations in Niger State’s most magnificent event auditorium.
        </p>
      </div>

      <div class="banquet-showcase-box">
        <div class="grid-2-responsive">
          <div>
            <span class="rc-badge" style="background:rgba(242,92,5,0.2); color:var(--orange-400); margin-bottom:1rem; display:inline-flex;">
              Capacity: Up To 1,000 Guests (Banquet Style)
            </span>
            <h3 style="font-family:var(--font-display); font-size:2.25rem; font-weight:800; line-height:1.2; margin-bottom:1rem;">
              Where Grand Moments Become Cherished Memories.
            </h3>
            <p style="color:var(--slate-300); line-height:1.7; margin-bottom:1.75rem;">
              The Kelvin Cameo Grand Banquet Hall features expansive pillarless sightlines, soaring ceilings adorned with crystal chandeliers, commercial-grade central chilling air conditioning, and dual 250kVA standby soundproof generators.
            </p>
            <div class="grid-2-stats" style="margin-bottom:2rem;">
              <div>
                <h5 style="color:var(--orange-400); font-size:1.1rem; font-weight:800;">1,000 Seats</h5>
                <p style="font-size:0.85rem; color:var(--slate-400);">Banquet or theatre layout configuration</p>
              </div>
              <div>
                <h5 style="color:var(--orange-400); font-size:1.1rem; font-weight:800;">200+ Cars</h5>
                <p style="font-size:0.85rem; color:var(--slate-400);">Secure paved perimeter parking</p>
              </div>
              <div>
                <h5 style="color:var(--orange-400); font-size:1.1rem; font-weight:800;">VIP Lounge</h5>
                <p style="font-size:0.85rem; color:var(--slate-400);">Dedicated bridal suite & dressing room</p>
              </div>
              <div>
                <h5 style="color:var(--orange-400); font-size:1.1rem; font-weight:800;">100% Power</h5>
                <p style="font-size:0.85rem; color:var(--slate-400);">Zero outage dual synchronized plants</p>
              </div>
            </div>
            <a href="https://wa.me/2348055558197?text=Hello%20Kelvin%20Cameo,%20I%20want%20to%20book%20the%201000-Seat%20Banquet%20Hall%20for%20an%20event" class="btn btn-whatsapp btn-lg" target="_blank" rel="noopener">Chat With Events Coordinator</a>
          </div>
          <div>
            <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/photos/resort/banquet-hall.jpg' ); ?>" alt="Kelvin Cameo Grand Banquet Hall Interior" style="width:100%; height:440px; object-fit:cover; border-radius:var(--radius-lg); box-shadow:0 20px 40px rgba(0,0,0,0.5); border:1px solid rgba(255,255,255,0.15);" loading="lazy">
          </div>
        </div>

        <!-- Banquet Pricing Packages -->
        <div class="banquet-pricing-grid">
          <!-- Tier 1: Celebrations Full Package -->
          <div class="banquet-tier-card featured">
            <span class="banquet-tier-ribbon">Most Popular</span>
            <div>
              <span style="font-size:0.75rem; text-transform:uppercase; letter-spacing:0.08em; color:var(--orange-400); font-weight:700;">All-Inclusive Production</span>
              <h4 class="banquet-tier-title">Celebrations Full Package</h4>
              <div class="banquet-tier-price">₦1,050,000</div>
              <div class="banquet-perks-list">
                <div class="banquet-perk-item">
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
                  <span>Full Hall Access (1,000 Capacity) for 10 Hours</span>
                </div>
                <div class="banquet-perk-item">
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
                  <span>Industrial Chilling Air Conditioning & Ventilation</span>
                </div>
                <div class="banquet-perk-item">
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
                  <span>Dual Synchronized Heavy Power Generator Backup</span>
                </div>
                <div class="banquet-perk-item">
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
                  <span>Standard Banquet Chairs, Round Tables & Stage Platform</span>
                </div>
                <div class="banquet-perk-item">
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
                  <span>VIP Green Dressing Suite for Bride / VIP Guests</span>
                </div>
                <div class="banquet-perk-item">
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
                  <span>Armed Uniformed Security & Traffic Wardens</span>
                </div>
              </div>
            </div>
            <div>
              <a href="https://paystack.com/buy/banquet-hall--celebrations-vuwyfa" target="_blank" rel="noopener" class="btn btn-primary btn-lg" style="width:100%; margin-bottom:0.75rem;">Paystack Instant Booking (₦1,050,000)</a>
              <button type="button" class="btn btn-outline-white btn-sm" style="width:100%;" data-modal="inquiryModal">Hold Event Date</button>
            </div>
          </div>

          <!-- Tier 2: À La Carte Hall Rental -->
          <div class="banquet-tier-card">
            <div>
              <span style="font-size:0.75rem; text-transform:uppercase; letter-spacing:0.08em; color:var(--slate-400); font-weight:700;">Standard Space Rental</span>
              <h4 class="banquet-tier-title">À La Carte Package</h4>
              <div class="banquet-tier-price" style="color:var(--white);">₦850,000</div>
              <div class="banquet-perks-list">
                <div class="banquet-perk-item">
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
                  <span>Full Hall Space Access (8 Hours Rental)</span>
                </div>
                <div class="banquet-perk-item">
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
                  <span>Standard Lighting & General Ventilation</span>
                </div>
                <div class="banquet-perk-item">
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
                  <span>Dedicated Standby Generator Power During Event</span>
                </div>
                <div class="banquet-perk-item">
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
                  <span>Paved Vehicle Parking for Guests & Attendees</span>
                </div>
                <div class="banquet-perk-item">
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
                  <span>Perimeter Security Officers</span>
                </div>
              </div>
            </div>
            <div>
              <a href="https://wa.me/2348055558197?text=Hello%20Kelvin%20Cameo,%20I%20want%20to%20inquire%20about%20the%20A%20La%20Carte%20Banquet%20Package%20(850,000)" target="_blank" rel="noopener" class="btn btn-secondary btn-lg" style="width:100%; margin-bottom:0.75rem;">Inquire via WhatsApp</a>
              <button type="button" class="btn btn-outline-white btn-sm" style="width:100%;" data-modal="inquiryModal">Hold Event Date</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Conference & Retreat Partners -->
  <section class="partners-section dark" id="corporate-clients" style="background: var(--navy-950); padding: 5.5rem 0;">
    <div class="container">
      <div class="section-head" style="text-align: center; max-width: 800px; margin: 0 auto 3rem;">
        <span class="rc-badge" style="background: rgba(242,92,5,0.25); color: var(--orange-400); margin-bottom: 0.75rem; display: inline-flex;">
          Trusted Conference & Retreat Hosts
        </span>
        <h2 class="section-title" style="color: var(--white);">Premier Destination for Healthcare, Corporate & Institutional Summits</h2>
        <p class="section-subtitle" style="color: var(--slate-300);">
          Kelvin Cameo Resort Hotel is the venue of choice along the Abuja Capital Corridor for leading clinical research NGOs, multi-sector conglomerates, and corporate institutions conducting executive workshops, residential retreats, and grand summits.
        </p>
      </div>

      <!-- Quick Logo Strip -->
      <div class="partners-logo-row" style="margin-bottom: 3.5rem;">
        <div class="partner-logo-item" style="background: rgba(255,255,255,0.06); border-color: rgba(255,255,255,0.12);">
          <div class="partner-logo-icon" style="background: var(--resort-sapphire); color: var(--white);">CC</div>
          <div class="partner-logo-text">
            <span class="partner-logo-name" style="color: var(--white);">CCCRN Nigeria</span>
            <span class="partner-logo-sub" style="color: var(--orange-400);">Clinical Care & Research</span>
          </div>
        </div>

        <div class="partner-logo-item" style="background: rgba(255,255,255,0.06); border-color: rgba(255,255,255,0.12);">
          <div class="partner-logo-icon" style="background: var(--estate-gold); color: var(--navy-950);">IMK</div>
          <div class="partner-logo-text">
            <span class="partner-logo-name" style="color: var(--white);">IMKash Group</span>
            <span class="partner-logo-sub" style="color: var(--estate-gold);">Conglomerate Partner</span>
          </div>
        </div>

        <div class="partner-logo-item" style="background: rgba(255,255,255,0.06); border-color: rgba(255,255,255,0.12);">
          <div class="partner-logo-icon" style="background: var(--orange-500); color: var(--white);">FCT</div>
          <div class="partner-logo-text">
            <span class="partner-logo-name" style="color: var(--white);">Federal Health Missions</span>
            <span class="partner-logo-sub" style="color: var(--slate-300);">Symposia & Training</span>
          </div>
        </div>

        <div class="partner-logo-item" style="background: rgba(255,255,255,0.06); border-color: rgba(255,255,255,0.12);">
          <div class="partner-logo-icon" style="background: var(--navy-700); color: var(--white);">CB</div>
          <div class="partner-logo-text">
            <span class="partner-logo-name" style="color: var(--white);">Corporate Banking Desks</span>
            <span class="partner-logo-sub" style="color: var(--slate-300);">Regional AGMs</span>
          </div>
        </div>
      </div>

      <!-- Partner Cards -->
      <div class="partners-cards-grid">
        <article class="partner-card dark-card">
          <div>
            <div class="partner-card-header">
              <div class="partner-card-brand">
                <div class="partner-avatar" style="background: linear-gradient(135deg, #0f4c81, #163d6b); color: var(--white);">CC</div>
                <div>
                  <h3 class="partner-card-title">CCCRN Nigeria</h3>
                  <span class="partner-card-sector" style="color: var(--orange-400);">Clinical Care & Research NGO</span>
                </div>
              </div>
              <span class="rc-badge" style="font-size:0.65rem; background: rgba(242,92,5,0.2); color: var(--orange-400);">Key Client</span>
            </div>
            <p class="partner-card-desc">
              Centre for Clinical Care & Clinical Research Nigeria (CCCRN) consistently utilizes Kelvin Cameo Resort Hotel's 1,000-seat banquet auditorium and executive residential suites for multi-day clinical training seminars, regional healthcare retreats, and program review meetings.
            </p>
          </div>
          <div class="partner-card-tags">
            <span class="partner-tag">Residential Stays</span>
            <span class="partner-tag">1,000-Seat Hall</span>
            <span class="partner-tag">Health Workshops</span>
            <span class="partner-tag">Executive Catering</span>
          </div>
        </article>

        <article class="partner-card dark-card">
          <div>
            <div class="partner-card-header">
              <div class="partner-card-brand">
                <div class="partner-avatar" style="background: linear-gradient(135deg, #c99a45, #dfb25e); color: var(--navy-950);">IMK</div>
                <div>
                  <h3 class="partner-card-title">IMKash Group</h3>
                  <span class="partner-card-sector" style="color: var(--estate-gold);">Enterprise & Capital Partner</span>
                </div>
              </div>
              <span class="rc-badge" style="font-size:0.65rem; background: rgba(201,154,69,0.2); color: var(--estate-gold);">Strategic Partner</span>
            </div>
            <p class="partner-card-desc">
              Strategic enterprise alliance collaborating with Kelvin Cameo on executive retreats, investor roundtables, high-level business summits, and milestone corporate celebrations hosted within our VIP luxury apartments and banquet suites.
            </p>
          </div>
          <div class="partner-card-tags">
            <span class="partner-tag">Executive Boardrooms</span>
            <span class="partner-tag">Corporate Summits</span>
            <span class="partner-tag">VIP Apartments</span>
            <span class="partner-tag">Investor Dinners</span>
          </div>
        </article>

        <article class="partner-card dark-card">
          <div>
            <div class="partner-card-header">
              <div class="partner-card-brand">
                <div class="partner-avatar" style="background: linear-gradient(135deg, #10b981, #064e3b); color: var(--white);">PH</div>
                <div>
                  <h3 class="partner-card-title">Public Health & NGOs</h3>
                  <span class="partner-card-sector" style="color: var(--agro-emerald);">Developmental Summits</span>
                </div>
              </div>
              <span class="rc-badge" style="font-size:0.65rem; background: rgba(16,185,129,0.2); color: var(--agro-emerald);">Institutional</span>
            </div>
            <p class="partner-card-desc">
              National health intervention bodies and development partners frequent our quiet annex suites and spacious auditorium for intensive strategy sessions, technical workshops, and confidential stakeholder symposiums.
            </p>
          </div>
          <div class="partner-card-tags">
            <span class="partner-tag">Breakout Rooms</span>
            <span class="partner-tag">Pillarless Auditorium</span>
            <span class="partner-tag">Dual Power Generators</span>
            <span class="partner-tag">200+ Cars Parking</span>
          </div>
        </article>
      </div>

      <!-- Book A Corporate Retreat CTA -->
      <div style="margin-top: 3.5rem; text-align: center; background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.1); border-radius: var(--radius-xl); padding: 2.5rem;">
        <h4 style="font-family: var(--font-display); font-size: 1.5rem; color: var(--white); margin-bottom: 0.5rem;">
          Planning a Corporate Retreat or Institutional Workshop?
        </h4>
        <p style="color: var(--slate-300); font-size: 0.95rem; max-width: 650px; margin: 0 auto 1.5rem;">
          Take advantage of discounted institutional block-booking rates on suites and full banquet hall rental with synchronized 24/7 power, dedicated sound engineers, and tailored conference dining.
        </p>
        <div style="display: flex; gap: 1rem; justify-content: center; flex-wrap: wrap;">
          <a href="https://wa.me/2348055558197?text=Hello%20Kelvin%20Cameo,%20we%20are%20planning%20a%20corporate%20conference/retreat%20and%20need%20a%20formal%20proposal" target="_blank" rel="noopener" class="btn btn-whatsapp btn-lg">
            Request Corporate Retreat RFP via WhatsApp
          </a>
          <a href="tel:+2348055558197" class="btn btn-outline-white btn-lg">
            Call Event Director: +234 805 555 8197
          </a>
        </div>
      </div>
    </div>
  </section>

  <!-- Resort Amenities: Pool, Games Lounge, Dining -->
  <section class="section-padding" style="background:var(--white);">
    <div class="container">
      <div class="section-head" style="text-align:center; max-width:760px; margin:0 auto 3rem;">
        <span class="section-badge" style="background:rgba(242,92,5,0.15); color:var(--orange-600);">Recreation & Lifestyle</span>
        <h2 class="section-title">World-Class Leisure Amenities</h2>
        <p class="section-subtitle">
          Everything you need to unwind, socialise, and savour the good life without leaving the resort premises.
        </p>
      </div>

      <div class="capabilities-grid">
        <!-- Amenity 1: Swimming Pool -->
        <div class="capability-card">
          <div class="capability-icon-wrap icon-resort">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M2 12h20M2 17h20M2 7h20"/></svg>
          </div>
          <h4>Pristine Swimming Pool</h4>
          <p>
            Crystal-clear outdoor pool with sun loungers, poolside cocktail service, and professional lifeguard on duty. Free for all in-house residents; accessible to daytime visitors for just <strong>₦3,000 per entry</strong>.
          </p>
        </div>

        <!-- Amenity 2: Snooker & Games Lounge -->
        <div class="capability-card">
          <div class="capability-icon-wrap icon-resort">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><circle cx="12" cy="12" r="4"/><circle cx="12" cy="12" r="1"/></svg>
          </div>
          <h4>Billiards & Games Lounge</h4>
          <p>
            Championship-grade snooker and pool tables, board games, high-definition sports screens, and craft cocktails. The perfect evening hub to network or kick back with friends.
          </p>
        </div>

        <!-- Amenity 3: Restaurant & Bar -->
        <div class="capability-card">
          <div class="capability-icon-wrap icon-resort">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M18 8h1a4 4 0 0 1 0 8h-1M2 8h16v9a4 4 0 0 1-4 4H6a4 4 0 0 1-4-4V8z"/><line x1="6" y1="1" x2="6" y2="4"/><line x1="10" y1="1" x2="10" y2="4"/><line x1="14" y1="1" x2="14" y2="4"/></svg>
          </div>
          <h4>Fine Dining Restaurant</h4>
          <p>
            Authentic Nigerian favorites — from catfish point-and-kill to fiery goat meat pepper soup, asun, and smoky jollof — complemented by savory continental cuisine prepared by culinary masters.
          </p>
        </div>
      </div>
    </div>
  </section>

  <!-- A Look Around The Resort Gallery Section -->
  <section id="gallery" class="section-padding" style="background:var(--sand-50); border-top:1px solid var(--sand-200);">
    <div class="container">
      <div class="section-head" style="text-align:center; max-width:760px; margin:0 auto 2.5rem;">
        <span class="section-badge" style="background:rgba(242,92,5,0.15); color:var(--orange-600);">Visual Walkthrough</span>
        <h2 class="section-title">A Look Around The Resort</h2>
        <p class="section-subtitle">
          Take a photographic tour through our sparkling pool, cozy cocktail bar, gourmet restaurant, 1,000-seat grand auditorium, billiards lounge, and manicured grounds.
        </p>
      </div>

      <!-- Gallery Filter Tabs -->
      <div class="filter-tabs-wrapper gallery-filter-bar" style="margin-bottom:2.5rem;">
        <button type="button" class="tab-btn tab-resort active" data-gallery-filter="all">All Resort Views (11)</button>
        <button type="button" class="tab-btn tab-resort" data-gallery-filter="pool">Swimming Pool</button>
        <button type="button" class="tab-btn tab-resort" data-gallery-filter="bar">Bar & Lounge</button>
        <button type="button" class="tab-btn tab-resort" data-gallery-filter="restaurant">Dining & Restaurant</button>
        <button type="button" class="tab-btn tab-resort" data-gallery-filter="banquet">Grand Banquet Hall</button>
        <button type="button" class="tab-btn tab-resort" data-gallery-filter="games">Billiards & Games</button>
        <button type="button" class="tab-btn tab-resort" data-gallery-filter="grounds">Grounds & Exterior</button>
      </div>

      <!-- Gallery Grid -->
      <div class="resort-gallery-grid">
        <!-- 1. Swimming Pool -->
        <div class="gallery-card gallery-item" data-category="pool">
          <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/photos/resort/swimming-pool.jpg' ); ?>" alt="Kelvin Cameo Resort Swimming Pool" loading="lazy">
          <div class="gallery-overlay">
            <span class="gallery-badge">Swimming Pool</span>
            <h4 class="gallery-title">Pristine Outdoor Pool</h4>
            <p class="gallery-caption">Crystal-clear resort pool with sun loungers, poolside refreshments, and certified lifeguards.</p>
          </div>
        </div>

        <!-- 2. Bar Counter -->
        <div class="gallery-card gallery-item" data-category="bar">
          <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/photos/resort/bar-counter.jpg' ); ?>" alt="Cameo Cocktail Bar Counter" loading="lazy">
          <div class="gallery-overlay">
            <span class="gallery-badge">Bar & Mixology</span>
            <h4 class="gallery-title">Cameo Cocktail Bar</h4>
            <p class="gallery-caption">Full-service cocktail bar offering premium spirits, signature blends, and artisan cocktails.</p>
          </div>
        </div>

        <!-- 3. VIP Bar Lounge -->
        <div class="gallery-card gallery-item" data-category="bar">
          <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/photos/resort/bar-lounge.jpg' ); ?>" alt="VIP Lounge at Kelvin Cameo Resort" loading="lazy">
          <div class="gallery-overlay">
            <span class="gallery-badge">VIP Lounge</span>
            <h4 class="gallery-title">Executive Lounge Seating</h4>
            <p class="gallery-caption">Plush mood-lit parlor crafted for discreet networking and evening social downtime.</p>
          </div>
        </div>

        <!-- 4. Restaurant -->
        <div class="gallery-card gallery-item" data-category="restaurant">
          <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/photos/resort/restaurant.jpg' ); ?>" alt="Kelvin Cameo Fine Dining Restaurant" loading="lazy">
          <div class="gallery-overlay">
            <span class="gallery-badge">Gourmet Dining</span>
            <h4 class="gallery-title">Cameo Restaurant</h4>
            <p class="gallery-caption">Fresh Nigerian favorites (point-and-kill catfish, pepper soup) and continental specialties.</p>
          </div>
        </div>

        <!-- 5. 1,000-Seat Grand Banquet Hall -->
        <div class="gallery-card gallery-item" data-category="banquet">
          <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/photos/resort/banquet-hall.jpg' ); ?>" alt="Kelvin Cameo 1,000-Seat Grand Banquet Hall" loading="lazy">
          <div class="gallery-overlay">
            <span class="gallery-badge">Event Auditorium</span>
            <h4 class="gallery-title">1,000-Seat Grand Hall</h4>
            <p class="gallery-caption">Soaring pillarless sightlines, crystal chandeliers, industrial AC, and VIP suites.</p>
          </div>
        </div>

        <!-- 6. Billiards & Snooker Table -->
        <div class="gallery-card gallery-item" data-category="games">
          <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/photos/resort/lounge-pool-table.jpg' ); ?>" alt="Billiards and Pool Table Lounge" loading="lazy">
          <div class="gallery-overlay">
            <span class="gallery-badge">Games & Leisure</span>
            <h4 class="gallery-title">Billiards & Snooker Lounge</h4>
            <p class="gallery-caption">Tournament-quality pool tables, sports broadcasts, and cold beverages.</p>
          </div>
        </div>

        <!-- 7. Games Recreation Hub -->
        <div class="gallery-card gallery-item" data-category="games">
          <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/photos/resort/lounge-view.jpg' ); ?>" alt="Games Recreation Hub" loading="lazy">
          <div class="gallery-overlay">
            <span class="gallery-badge">Recreation</span>
            <h4 class="gallery-title">Clubhouse Recreation</h4>
            <p class="gallery-caption">Comfortable lounge armchairs and board gaming corner for unwinding.</p>
          </div>
        </div>

        <!-- 8. Exterior Architecture -->
        <div class="gallery-card gallery-item" data-category="grounds">
          <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/photos/resort/exterior.jpg' ); ?>" alt="Kelvin Cameo Resort Exterior Architecture" loading="lazy">
          <div class="gallery-overlay">
            <span class="gallery-badge">Architecture</span>
            <h4 class="gallery-title">Resort Architectural Facade</h4>
            <p class="gallery-caption">Grand architectural presence with perimeter security and manicured palm avenues.</p>
          </div>
        </div>

        <!-- 9. Evening Atmosphere -->
        <div class="gallery-card gallery-item" data-category="grounds">
          <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/photos/resort/evening.jpg' ); ?>" alt="Evening Atmosphere at Kelvin Cameo Resort" loading="lazy">
          <div class="gallery-overlay">
            <span class="gallery-badge">Night Ambiance</span>
            <h4 class="gallery-title">Enchanting Evening Ambiance</h4>
            <p class="gallery-caption">Warm architectural lighting illuminating the courtyard as twilight settles over Suleja.</p>
          </div>
        </div>

        <!-- 10. Grand Entrance -->
        <div class="gallery-card gallery-item" data-category="grounds">
          <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/photos/resort/entrance.jpg' ); ?>" alt="Kelvin Cameo Resort Entrance" loading="lazy">
          <div class="gallery-overlay">
            <span class="gallery-badge">Porte-Cochère</span>
            <h4 class="gallery-title">Grand Entrance & Reception</h4>
            <p class="gallery-caption">Welcoming 24-hour reception desk, luggage assistance, and valet arrival parking.</p>
          </div>
        </div>

        <!-- 11. The Annex Branch -->
        <div class="gallery-card gallery-item" data-category="grounds">
          <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/photos/resort/annex.jpg' ); ?>" alt="The Annex Branch of Kelvin Cameo Resort" loading="lazy">
          <div class="gallery-overlay">
            <span class="gallery-badge">Branch 02</span>
            <h4 class="gallery-title">The Annex Courtyard</h4>
            <p class="gallery-caption">The quiet, secluded secondary branch offering private executive accommodations.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Interactive Room Booking Modal with Paystack Gateway -->
  <div class="modal-backdrop" id="roomReservationModal" role="dialog" aria-modal="true" aria-hidden="true">
    <div class="modal-card">
      <button type="button" class="modal-close-btn" id="roomModalCloseBtn" aria-label="Close modal">&times;</button>
      
      <div class="modal-header" style="margin-bottom: 1.25rem;">
        <span class="rc-badge" style="margin-bottom:0.4rem; display:inline-flex;">Direct Room Reservation</span>
        <h3 style="font-family:var(--font-display); font-size: 1.45rem; font-weight: 800; color: var(--navy-900); margin:0;">Complete Your Stay Reservation</h3>
        <p style="font-size: 0.85rem; color: var(--slate-600); margin:0.35rem 0 0;">Lock in your dates instantly. Details are dispatched directly to our reception desk.</p>
      </div>

      <!-- Dynamic Room Preview Banner -->
      <div class="room-modal-preview">
        <img id="modalRoomImg" src="" alt="Selected Room" class="room-modal-thumb">
        <div class="room-modal-info">
          <span id="modalRoomBranch" class="room-modal-branch branch-main">Branch 01 • Main Hotel</span>
          <h4 id="modalRoomName" class="room-modal-title">Room Name</h4>
          <div class="room-modal-price"><span id="modalRoomPrice">₦0</span> <span style="font-size:0.75rem; color:var(--slate-500); font-weight:normal;">/ night</span></div>
        </div>
      </div>

      <form id="roomReservationForm">
        <input type="hidden" id="bookingRoomName" name="room_name" value="">
        <input type="hidden" id="bookingRoomBranch" name="room_branch" value="">
        <input type="hidden" id="bookingRoomPrice" name="room_price" value="0">
        <input type="hidden" id="bookingPaystackUrl" name="paystack_url" value="">
        <input type="hidden" id="bookingNights" name="nights_count" value="1">
        <input type="hidden" id="bookingTotalAmount" name="total_amount" value="">

        <div class="form-group-row">
          <div class="form-group">
            <label for="bookingGuestName" style="font-size:0.8rem; font-weight:700; color:var(--slate-700); margin-bottom:0.25rem; display:block;">Full Name *</label>
            <input type="text" id="bookingGuestName" name="guest_name" class="form-control" placeholder="e.g. Dr. Emeka Danladi" required>
          </div>
          <div class="form-group">
            <label for="bookingGuestEmail" style="font-size:0.8rem; font-weight:700; color:var(--slate-700); margin-bottom:0.25rem; display:block;">Email Address *</label>
            <input type="email" id="bookingGuestEmail" name="guest_email" class="form-control" placeholder="guest@domain.com" required>
          </div>
        </div>

        <div class="form-group-row">
          <div class="form-group">
            <label for="bookingGuestPhone" style="font-size:0.8rem; font-weight:700; color:var(--slate-700); margin-bottom:0.25rem; display:block;">Phone / WhatsApp *</label>
            <input type="tel" id="bookingGuestPhone" name="guest_phone" class="form-control" placeholder="0805 555 8197" required>
          </div>
          <div class="form-group">
            <label for="bookingGuestCount" style="font-size:0.8rem; font-weight:700; color:var(--slate-700); margin-bottom:0.25rem; display:block;">Number of Guests</label>
            <select id="bookingGuestCount" name="guest_count" class="form-control">
              <option value="1">1 Guest</option>
              <option value="2" selected>2 Guests</option>
              <option value="3">3 Guests</option>
              <option value="4">4+ Guests</option>
            </select>
          </div>
        </div>

        <div class="form-group-row">
          <div class="form-group">
            <label for="bookingCheckin" style="font-size:0.8rem; font-weight:700; color:var(--slate-700); margin-bottom:0.25rem; display:block;">Check-In Date *</label>
            <input type="date" id="bookingCheckin" name="checkin_date" class="form-control" required>
          </div>
          <div class="form-group">
            <label for="bookingCheckout" style="font-size:0.8rem; font-weight:700; color:var(--slate-700); margin-bottom:0.25rem; display:block;">Check-Out Date *</label>
            <input type="date" id="bookingCheckout" name="checkout_date" class="form-control" required>
          </div>
        </div>

        <div class="form-group">
          <label for="bookingNotes" style="font-size:0.8rem; font-weight:700; color:var(--slate-700); margin-bottom:0.25rem; display:block;">Special Requests / Arrival Time (Optional)</label>
          <textarea id="bookingNotes" name="special_requests" class="form-control" rows="2" placeholder="e.g. Late check-in around 8 PM, extra pillows, quiet floor..."></textarea>
        </div>

        <!-- Live Cost Breakdown -->
        <div class="booking-calc-strip">
          <div class="calc-breakdown">
            <strong id="calcSummaryRate">₦25,000 × 1 Night</strong>
            <span>Standard tariff per room</span>
          </div>
          <div class="calc-total">
            <span id="calcTotalLabel">Estimated Total</span>
            <div id="calcTotalDisplay" style="color:var(--orange-600);">₦25,000</div>
          </div>
        </div>

        <!-- Trust Guarantee & Paystack Notice -->
        <div class="paystack-trust-badge">
          <svg viewBox="0 0 24 24" width="20" height="20" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect><path d="M7 11V7a5 5 0 0 1 10 0v4"></path></svg>
          <div>
            <strong>Instant Front Desk Notification & Paystack Checkout:</strong>
            Upon submission, our reception desk receives your reservation and you will proceed to Paystack’s 256-bit SSL secured payment gateway.
          </div>
        </div>

        <div id="bookingFormError" style="display:none; background:#fee2e2; color:#b91c1c; padding:0.75rem; border-radius:var(--radius-md); font-size:0.85rem; margin-bottom:1rem;"></div>

        <div style="display:flex; gap:0.75rem; flex-wrap:wrap;">
          <button type="submit" id="bookingSubmitBtn" class="btn btn-primary btn-lg" style="flex:1; justify-content:center;">
            <span>Confirm & Proceed to Payment</span>
          </button>
          <a id="bookingWaFallback" href="https://wa.me/2348055558197" target="_blank" rel="noopener" class="btn btn-whatsapp btn-lg" style="padding:0.75rem 1rem;" title="Book via WhatsApp Concierge">
            <svg viewBox="0 0 24 24" width="18" height="18" fill="currentColor"><path d="M12.031 6.172c-3.181 0-5.767 2.586-5.768 5.766-.001 1.298.38 2.27 1.019 3.287l-.582 2.128 2.182-.573c.978.58 1.911.928 3.145.929 3.178 0 5.767-2.587 5.768-5.766.001-3.187-2.575-5.77-5.764-5.771zm3.392 8.244c-.144.405-.837.774-1.17.824-.299.045-.677.063-1.092-.069-.252-.08-.575-.187-.988-.365-1.739-.751-2.874-2.502-2.961-2.617-.087-.116-.708-.94-.708-1.793s.448-1.273.607-1.446c.159-.173.346-.217.462-.217l.332.006c.106.005.249-.04.39.298.144.347.491 1.2.534 1.287.043.087.072.188.014.304-.058.116-.087.188-.173.289l-.26.304c-.087.086-.177.18-.076.354.101.174.449.741.964 1.201.662.591 1.221.774 1.394.86.174.086.275.073.376-.044.101-.116.433-.506.549-.68.116-.173.231-.145.39-.087s1.011.477 1.184.564.289.13.332.202c.045.072.045.419-.1.824z"/></svg>
          </a>
        </div>
      </form>
    </div>
  </div>

<?php
get_footer();

