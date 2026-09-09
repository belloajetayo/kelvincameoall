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

        <div style="display:flex; align-items:center; gap:0.6rem; flex-wrap:wrap;">
          <a href="https://instagram.com/kelvincameoresort_ng" target="_blank" rel="noopener" class="social-icon-btn" style="width:34px; height:34px; font-size:0.8rem;" aria-label="Instagram">
            <svg viewBox="0 0 24 24" width="16" height="16" fill="currentColor"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg>
          </a>
          <a href="https://facebook.com/kelvincameoresort_ng" target="_blank" rel="noopener" class="social-icon-btn" style="width:34px; height:34px; font-size:0.8rem;" aria-label="Facebook">
            <svg viewBox="0 0 24 24" width="16" height="16" fill="currentColor"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
          </a>
          <a href="https://x.com/kelvincameoresort_ng" target="_blank" rel="noopener" class="social-icon-btn" style="width:34px; height:34px; font-size:0.8rem;" aria-label="X">
            <svg viewBox="0 0 24 24" width="14" height="14" fill="currentColor"><path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/></svg>
          </a>
          <a href="#resort-location" class="btn btn-navy btn-sm" style="gap:0.4rem;">
            <svg viewBox="0 0 24 24" width="13" height="13" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5a2.5 2.5 0 1 1 0-5 2.5 2.5 0 0 1 0 5z"/></svg>
            Resort Map & Socials
          </a>
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

      <!-- Rooms Catalogue Toolbar with Tabs & Controls -->
      <div class="rooms-catalog-toolbar">
        <div class="filter-tabs-wrapper room-tabs" style="margin:0;">
          <button type="button" class="tab-btn tab-resort active" data-room-filter="all">All Accommodations (10)</button>
          <button type="button" class="tab-btn tab-resort" data-room-filter="main">Branch 01: Main Hotel (5)</button>
          <button type="button" class="tab-btn tab-resort" data-room-filter="annex">Branch 02: The Annex (5)</button>
        </div>

        <div class="rooms-catalog-controls">
          <span class="slider-hint-pill">👉 Scroll / Swipe Right ⟶</span>
          <button type="button" class="slider-nav-btn prev-btn" id="roomCatalogPrevBtn" data-target="roomsScrollTrack" aria-label="Previous room">‹</button>
          <button type="button" class="slider-nav-btn next-btn" id="roomCatalogNextBtn" data-target="roomsScrollTrack" aria-label="Next room">›</button>
        </div>
      </div>

      <!-- Unified Horizontal Rooms Catalogue Wrapper -->
      <div class="rooms-slider-wrapper">
        <button type="button" class="track-floating-btn prev" id="floatPrevBtn" aria-label="Scroll left">‹</button>
        <button type="button" class="track-floating-btn next" id="floatNextBtn" aria-label="Scroll right">›</button>

        <!-- Continuous Horizontal Scroll Track -->
        <div class="suites-scroll-track" id="roomsScrollTrack">

        <!-- 1. Love Night Room (Main Hotel) -->
        <article class="suite-card" data-room-cat="main">
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

        <!-- 2. Golden Nest Room (Main Hotel) -->
        <article class="suite-card" data-room-cat="main">
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

        <!-- 3. Blissful Breeze Suite (Main Hotel) -->
        <article class="suite-card" data-room-cat="main">
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

        <!-- 4. Luxury Retreat Apartment (Main Hotel) -->
        <article class="suite-card" data-room-cat="main">
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

        <!-- 5. Royal Retreat Apartment (Main Hotel) -->
        <article class="suite-card" data-room-cat="main">
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

        <!-- 5. Royal Treat Suite (Annex Suite) -->
        <article class="suite-card" data-room-cat="annex">
          <div class="suite-card-media">
            <span class="suite-branch-badge branch-annex">Branch 02 • The Annex</span>
            <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/photos/resort/suite-lounge.jpg' ); ?>" alt="Royal Treat Suite at Kelvin Cameo Resort Annex" loading="lazy">
          </div>
          <div class="suite-card-body">
            <div>
              <span class="suite-category-label">Regal Annex Suite</span>
              <h3 class="suite-name">Royal Treat Suite</h3>
              <p class="suite-desc">
                The premier crown jewel suite at The Annex branch. Indulge in regal comfort featuring an expansive master bedroom, gold-accented fixtures, separate guest powder room, and personalized 24-hour butler service.
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
                  data-room-branch="Branch 02 • The Annex"
                  data-room-img="<?php echo esc_url( get_template_directory_uri() . '/assets/photos/resort/suite-lounge.jpg' ); ?>"
                  data-paystack-url="https://paystack.com/buy/golden-nest-ugswqe">
                  <svg viewBox="0 0 24 24" width="13" height="13" fill="none" stroke="currentColor" stroke-width="2.5"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg>
                  Book Now
                </button>
                <a href="https://wa.me/2348055558197?text=Hello%20Kelvin%20Cameo%20Resort,%20I%20am%20interested%20in%20the%20Royal%20Treat%20Suite%20Annex%20(60k/night)" target="_blank" rel="noopener" class="btn btn-secondary btn-sm">WhatsApp</a>
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

  <!-- Online Travel Directories & Verified Booking Platforms -->
  <section class="partners-section dark" id="booking-platforms" style="background: var(--navy-950); padding: 5.5rem 0;">
    <div class="container">
      <div class="section-head" style="text-align: center; max-width: 820px; margin: 0 auto 3rem;">
        <span class="rc-badge" style="background: rgba(242,92,5,0.25); color: var(--orange-400); margin-bottom: 0.75rem; display: inline-flex;">
          Global Directories & Online Travel Agencies
        </span>
        <h2 class="section-title" style="color: var(--white);">Listed Across the World's Leading Booking Platforms</h2>
        <p class="section-subtitle" style="color: var(--slate-300);">
          Reserve your stay with absolute confidence. Kelvin Cameo Resort Hotel is verified, reviewed, and bookable across top global travel networks — or book directly on our website for guaranteed best rates, zero commission fees, and VIP front desk treatment.
        </p>
      </div>

      <!-- Quick Platform Logo Strip -->
      <div class="partners-logo-row" style="margin-bottom: 3.5rem; flex-wrap: wrap; justify-content: center; gap: 1rem;">
        <a href="https://www.booking.com/searchresults.html?ss=Kelvin+Cameo+Resort+Hotel+Suleja" target="_blank" rel="noopener noreferrer" class="partner-logo-item" style="background: rgba(255,255,255,0.06); border-color: rgba(255,255,255,0.12); text-decoration: none;">
          <div class="partner-logo-icon" style="background: #003580; color: #ffffff; font-weight: 900;">B.</div>
          <div class="partner-logo-text">
            <span class="partner-logo-name" style="color: var(--white);">Booking.com</span>
            <span class="partner-logo-sub" style="color: var(--orange-400);">Verified Listing</span>
          </div>
        </a>

        <a href="https://www.agoda.com/search?text=Kelvin%20Cameo%20Resort%20Hotel%20Suleja" target="_blank" rel="noopener noreferrer" class="partner-logo-item" style="background: rgba(255,255,255,0.06); border-color: rgba(255,255,255,0.12); text-decoration: none;">
          <div class="partner-logo-icon" style="background: #5392f9; color: #ffffff; font-weight: 900;">AG</div>
          <div class="partner-logo-text">
            <span class="partner-logo-name" style="color: var(--white);">Agoda</span>
            <span class="partner-logo-sub" style="color: #60a5fa;">Top Rated Suleja</span>
          </div>
        </a>

        <a href="https://hotels.ng/hotel/1013444-kelvin-cameo-resort-hotel-niger" target="_blank" rel="noopener noreferrer" class="partner-logo-item" style="background: rgba(255,255,255,0.06); border-color: rgba(255,255,255,0.12); text-decoration: none;">
          <div class="partner-logo-icon" style="background: #00a651; color: #ffffff; font-weight: 900;">H.</div>
          <div class="partner-logo-text">
            <span class="partner-logo-name" style="color: var(--white);">Hotels.ng</span>
            <span class="partner-logo-sub" style="color: #34d399;">Nigeria's #1</span>
          </div>
        </a>

        <a href="https://www.tripadvisor.com/Search?q=Kelvin+Cameo+Resort+Hotel+Suleja" target="_blank" rel="noopener noreferrer" class="partner-logo-item" style="background: rgba(255,255,255,0.06); border-color: rgba(255,255,255,0.12); text-decoration: none;">
          <div class="partner-logo-icon" style="background: #00af87; color: #ffffff; font-weight: 900;">TA</div>
          <div class="partner-logo-text">
            <span class="partner-logo-name" style="color: var(--white);">Tripadvisor</span>
            <span class="partner-logo-sub" style="color: #2dd4bf;">Guest Reviews</span>
          </div>
        </a>

        <a href="https://www.expedia.com/Hotel-Search?destination=Kelvin+Cameo+Resort+Hotel+Suleja" target="_blank" rel="noopener noreferrer" class="partner-logo-item" style="background: rgba(255,255,255,0.06); border-color: rgba(255,255,255,0.12); text-decoration: none;">
          <div class="partner-logo-icon" style="background: #ffcc00; color: #00355f; font-weight: 900;">EX</div>
          <div class="partner-logo-text">
            <span class="partner-logo-name" style="color: var(--white);">Expedia</span>
            <span class="partner-logo-sub" style="color: var(--estate-gold);">Global Network</span>
          </div>
        </a>

        <a href="https://www.google.com/travel/search?q=Kelvin%20Cameo%20Resort%20Hotel%20Suleja" target="_blank" rel="noopener noreferrer" class="partner-logo-item" style="background: rgba(255,255,255,0.06); border-color: rgba(255,255,255,0.12); text-decoration: none;">
          <div class="partner-logo-icon" style="background: #4285f4; color: #ffffff; font-weight: 900;">G</div>
          <div class="partner-logo-text">
            <span class="partner-logo-name" style="color: var(--white);">Google Travel</span>
            <span class="partner-logo-sub" style="color: #93c5fd;">Verified Business</span>
          </div>
        </a>
      </div>

      <!-- Platform Detailed Cards (3x2 Grid) -->
      <div class="partners-cards-grid">
        <!-- 1. Booking.com -->
        <article class="partner-card dark-card">
          <div>
            <div class="partner-card-header">
              <div class="partner-card-brand">
                <div class="partner-avatar" style="background: linear-gradient(135deg, #003580, #00224f); color: var(--white); font-size: 1.3rem;">B.</div>
                <div>
                  <h3 class="partner-card-title">Booking.com</h3>
                  <span class="partner-card-sector" style="color: #60a5fa;">Global Hotel Network</span>
                </div>
              </div>
              <span class="rc-badge" style="font-size:0.65rem; background: rgba(0,53,128,0.35); color: #93c5fd; border: 1px solid rgba(147,197,253,0.3);">Verified Listing</span>
            </div>
            <p class="partner-card-desc">
              Browse guest reviews, verified amenity checklists, flexible reservation terms, and instant booking confirmations on the world’s leading accommodation marketplace.
            </p>
          </div>
          <div>
            <div class="partner-card-tags">
              <span class="partner-tag">Instant Confirmation</span>
              <span class="partner-tag">Guest Ratings</span>
              <span class="partner-tag">Mobile Deals</span>
              <span class="partner-tag">Flexible Terms</span>
            </div>
            <a href="https://www.booking.com/searchresults.html?ss=Kelvin+Cameo+Resort+Hotel+Suleja" target="_blank" rel="noopener noreferrer" class="platform-link">
              <span>View on Booking.com</span>
              <svg viewBox="0 0 24 24" width="14" height="14" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"></path><polyline points="15 3 21 3 21 9"></polyline><line x1="10" y1="14" x2="21" y2="3"></line></svg>
            </a>
          </div>
        </article>

        <!-- 2. Agoda -->
        <article class="partner-card dark-card">
          <div>
            <div class="partner-card-header">
              <div class="partner-card-brand">
                <div class="partner-avatar" style="background: linear-gradient(135deg, #5392f9, #2b6cb0); color: var(--white); font-size: 1.15rem;">AG</div>
                <div>
                  <h3 class="partner-card-title">Agoda</h3>
                  <span class="partner-card-sector" style="color: #93c5fd;">Resort & Leisure Specialist</span>
                </div>
              </div>
              <span class="rc-badge" style="font-size:0.65rem; background: rgba(83,146,249,0.3); color: #bfdbfe; border: 1px solid rgba(191,219,254,0.3);">Top Pick Suleja</span>
            </div>
            <p class="partner-card-desc">
              Discover exclusive Agoda VIP member discounts, mobile-app privileges, real-time suite availability, and guaranteed room allocations across our Main Hotel and Annex.
            </p>
          </div>
          <div>
            <div class="partner-card-tags">
              <span class="partner-tag">Member Discounts</span>
              <span class="partner-tag">Instant Voucher</span>
              <span class="partner-tag">Real-Time Rooms</span>
              <span class="partner-tag">Secure Checkout</span>
            </div>
            <a href="https://www.agoda.com/search?text=Kelvin%20Cameo%20Resort%20Hotel%20Suleja" target="_blank" rel="noopener noreferrer" class="platform-link">
              <span>View on Agoda</span>
              <svg viewBox="0 0 24 24" width="14" height="14" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"></path><polyline points="15 3 21 3 21 9"></polyline><line x1="10" y1="14" x2="21" y2="3"></line></svg>
            </a>
          </div>
        </article>

        <!-- 3. Hotels.ng -->
        <article class="partner-card dark-card">
          <div>
            <div class="partner-card-header">
              <div class="partner-card-brand">
                <div class="partner-avatar" style="background: linear-gradient(135deg, #00a651, #065f46); color: var(--white); font-size: 1.3rem;">H.</div>
                <div>
                  <h3 class="partner-card-title">Hotels.ng</h3>
                  <span class="partner-card-sector" style="color: #34d399;">Nigeria's #1 Hotel Engine</span>
                </div>
              </div>
              <span class="rc-badge" style="font-size:0.65rem; background: rgba(0,166,81,0.25); color: #6ee7b7; border: 1px solid rgba(110,231,183,0.3);">Verified Partner</span>
            </div>
            <p class="partner-card-desc">
              Book seamlessly in Nigerian Naira (₦) through Nigeria's premier hotel reservation platform, complete with 24/7 localized concierge assistance and verified traveler testimonials.
            </p>
          </div>
          <div>
            <div class="partner-card-tags">
              <span class="partner-tag">Direct Naira (₦) Pay</span>
              <span class="partner-tag">24/7 Local Support</span>
              <span class="partner-tag">Pay at Hotel Option</span>
              <span class="partner-tag">Top Capital Choice</span>
            </div>
            <a href="https://hotels.ng/hotel/1013444-kelvin-cameo-resort-hotel-niger" target="_blank" rel="noopener noreferrer" class="platform-link">
              <span>View on Hotels.ng</span>
              <svg viewBox="0 0 24 24" width="14" height="14" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"></path><polyline points="15 3 21 3 21 9"></polyline><line x1="10" y1="14" x2="21" y2="3"></line></svg>
            </a>
          </div>
        </article>

        <!-- 4. Tripadvisor -->
        <article class="partner-card dark-card">
          <div>
            <div class="partner-card-header">
              <div class="partner-card-brand">
                <div class="partner-avatar" style="background: linear-gradient(135deg, #00af87, #065f46); color: var(--white); font-size: 1.15rem;">TA</div>
                <div>
                  <h3 class="partner-card-title">Tripadvisor</h3>
                  <span class="partner-card-sector" style="color: #2dd4bf;">Traveler Guidance & Reviews</span>
                </div>
              </div>
              <span class="rc-badge" style="font-size:0.65rem; background: rgba(0,175,135,0.25); color: #5eead4; border: 1px solid rgba(94,234,212,0.3);">Guest Reviews</span>
            </div>
            <p class="partner-card-desc">
              Read candid traveler experiences, view authentic guest photos, and verify traveler ratings for our outdoor pool, cocktail bar, restaurant dining, and guest suites.
            </p>
          </div>
          <div>
            <div class="partner-card-tags">
              <span class="partner-tag">Unbiased Reviews</span>
              <span class="partner-tag">Guest Photos</span>
              <span class="partner-tag">Resort Rating</span>
              <span class="partner-tag">Traveler Insights</span>
            </div>
            <a href="https://www.tripadvisor.com/Search?q=Kelvin+Cameo+Resort+Hotel+Suleja" target="_blank" rel="noopener noreferrer" class="platform-link">
              <span>View on Tripadvisor</span>
              <svg viewBox="0 0 24 24" width="14" height="14" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"></path><polyline points="15 3 21 3 21 9"></polyline><line x1="10" y1="14" x2="21" y2="3"></line></svg>
            </a>
          </div>
        </article>

        <!-- 5. Expedia -->
        <article class="partner-card dark-card">
          <div>
            <div class="partner-card-header">
              <div class="partner-card-brand">
                <div class="partner-avatar" style="background: linear-gradient(135deg, #ffcc00, #d97706); color: #00355f; font-size: 1.15rem;">EX</div>
                <div>
                  <h3 class="partner-card-title">Expedia</h3>
                  <span class="partner-card-sector" style="color: var(--estate-gold);">Worldwide Travel Marketplace</span>
                </div>
              </div>
              <span class="rc-badge" style="font-size:0.65rem; background: rgba(255,204,0,0.2); color: #fde047; border: 1px solid rgba(253,224,71,0.3);">Global Network</span>
            </div>
            <p class="partner-card-desc">
              Preferred platform for international travelers, diaspora visitors, and corporate delegations booking flight-and-stay bundles and earning global loyalty points.
            </p>
          </div>
          <div>
            <div class="partner-card-tags">
              <span class="partner-tag">Flight + Stay Bundles</span>
              <span class="partner-tag">Expedia Rewards</span>
              <span class="partner-tag">Corporate Portals</span>
              <span class="partner-tag">Global Support</span>
            </div>
            <a href="https://www.expedia.com/Hotel-Search?destination=Kelvin+Cameo+Resort+Hotel+Suleja" target="_blank" rel="noopener noreferrer" class="platform-link">
              <span>View on Expedia</span>
              <svg viewBox="0 0 24 24" width="14" height="14" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"></path><polyline points="15 3 21 3 21 9"></polyline><line x1="10" y1="14" x2="21" y2="3"></line></svg>
            </a>
          </div>
        </article>

        <!-- 6. Google Travel & Hotels -->
        <article class="partner-card dark-card">
          <div>
            <div class="partner-card-header">
              <div class="partner-card-brand">
                <div class="partner-avatar" style="background: linear-gradient(135deg, #4285f4, #1d4ed8); color: var(--white); font-size: 1.3rem;">G</div>
                <div>
                  <h3 class="partner-card-title">Google Hotels</h3>
                  <span class="partner-card-sector" style="color: #93c5fd;">Maps & Verified Business</span>
                </div>
              </div>
              <span class="rc-badge" style="font-size:0.65rem; background: rgba(66,133,244,0.3); color: #bfdbfe; border: 1px solid rgba(191,219,254,0.3);">Google Verified</span>
            </div>
            <p class="partner-card-desc">
              Locate Kelvin Cameo Resort directly on Google Maps with real-time GPS navigation, street access directions, aggregated live pricing, and direct front desk calling.
            </p>
          </div>
          <div>
            <div class="partner-card-tags">
              <span class="partner-tag">Turn-by-Turn GPS</span>
              <span class="partner-tag">Google Maps Listing</span>
              <span class="partner-tag">Direct Front Desk</span>
              <span class="partner-tag">Live Rate Compare</span>
            </div>
            <a href="https://www.google.com/travel/search?q=Kelvin%20Cameo%20Resort%20Hotel%20Suleja" target="_blank" rel="noopener noreferrer" class="platform-link">
              <span>View on Google Travel</span>
              <svg viewBox="0 0 24 24" width="14" height="14" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"></path><polyline points="15 3 21 3 21 9"></polyline><line x1="10" y1="14" x2="21" y2="3"></line></svg>
            </a>
          </div>
        </article>
      </div>

      <!-- Direct Booking Advantage Banner -->
      <div class="direct-booking-banner" style="margin-top: 3.5rem; background: linear-gradient(135deg, rgba(242,92,5,0.12), rgba(201,154,69,0.08)); border: 1px solid rgba(242,92,5,0.35); border-radius: var(--radius-xl); padding: 2.75rem 2rem; text-align: center; position: relative; overflow: hidden;">
        <span class="rc-badge" style="background: var(--orange-500); color: var(--white); margin-bottom: 0.75rem; display: inline-flex; font-weight: 800;">
          Direct Booking Guarantee
        </span>
        <h3 style="font-family: var(--font-display); font-size: 1.85rem; color: var(--white); margin-bottom: 0.75rem; font-weight: 800;">
          Why Book Directly on KelvinCameo.com?
        </h3>
        <p style="color: var(--slate-300); font-size: 1rem; max-width: 720px; margin: 0 auto 2rem; line-height: 1.65;">
          While you can find us on all major international travel sites, reserving directly with us guarantees you the lowest possible rate with zero booking fees, priority room selection, complimentary welcome refreshments, and 24/7 dedicated WhatsApp reception concierge.
        </p>

        <!-- Direct Perks Row -->
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 1rem; max-width: 960px; margin: 0 auto 2.5rem; text-align: left;">
          <div style="background: rgba(255,255,255,0.05); border: 1px solid rgba(255,255,255,0.1); border-radius: var(--radius-md); padding: 1.25rem;">
            <div style="font-size: 1.5rem; margin-bottom: 0.35rem;">💰</div>
            <div style="font-weight: 700; color: var(--white); font-size: 0.95rem; margin-bottom: 0.2rem;">Guaranteed Best Rate</div>
            <div style="font-size: 0.82rem; color: var(--slate-300);">Zero intermediary fees or third-party markups. Always our best price.</div>
          </div>

          <div style="background: rgba(255,255,255,0.05); border: 1px solid rgba(255,255,255,0.1); border-radius: var(--radius-md); padding: 1.25rem;">
            <div style="font-size: 1.5rem; margin-bottom: 0.35rem;">⚡</div>
            <div style="font-weight: 700; color: var(--white); font-size: 0.95rem; margin-bottom: 0.2rem;">Instant Front Desk Lock-In</div>
            <div style="font-size: 0.82rem; color: var(--slate-300);">Direct reservation entry in front desk ledger and instant email voucher.</div>
          </div>

          <div style="background: rgba(255,255,255,0.05); border: 1px solid rgba(255,255,255,0.1); border-radius: var(--radius-md); padding: 1.25rem;">
            <div style="font-size: 1.5rem; margin-bottom: 0.35rem;">🍹</div>
            <div style="font-weight: 700; color: var(--white); font-size: 0.95rem; margin-bottom: 0.2rem;">Complimentary Welcome Drinks</div>
            <div style="font-size: 0.82rem; color: var(--slate-300);">Chilled tropical refreshment upon arrival at our poolside lounge.</div>
          </div>

          <div style="background: rgba(255,255,255,0.05); border: 1px solid rgba(255,255,255,0.1); border-radius: var(--radius-md); padding: 1.25rem;">
            <div style="font-size: 1.5rem; margin-bottom: 0.35rem;">🕒</div>
            <div style="font-weight: 700; color: var(--white); font-size: 0.95rem; margin-bottom: 0.2rem;">Flexible Check-In Priority</div>
            <div style="font-size: 0.82rem; color: var(--slate-300);">Early check-in and late check-out priority subject to room availability.</div>
          </div>
        </div>

        <div style="display: flex; gap: 1rem; justify-content: center; flex-wrap: wrap;">
          <a href="#rooms" class="btn btn-primary btn-lg" style="gap: 0.5rem;">
            <svg viewBox="0 0 24 24" width="16" height="16" fill="none" stroke="currentColor" stroke-width="2.5"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg>
            Book Directly & Save (Select Room Above)
          </a>
          <a href="https://wa.me/2348055558197?text=Hello%20Kelvin%20Cameo,%20I%20am%20booking%20directly%20and%20need%20assistance%20with%20a%20reservation" target="_blank" rel="noopener noreferrer" class="btn btn-whatsapp btn-lg" style="gap: 0.5rem;">
            <svg viewBox="0 0 24 24" width="16" height="16" fill="currentColor"><path d="M12.031 6.172c-3.181 0-5.767 2.586-5.768 5.766-.001 1.298.38 2.27 1.019 3.287l-.711 2.598 2.664-.699c.971.53 1.83.81 2.802.81 3.182 0 5.768-2.587 5.768-5.766 0-3.18-2.586-5.766-5.774-5.766zm8.47 5.766c0 4.686-3.814 8.498-8.47 8.498-1.464 0-2.85-.376-4.062-1.037l-4.509 1.182 1.205-4.402c-.754-1.272-1.157-2.73-1.157-4.241 0-4.686 3.813-8.499 8.47-8.499 4.656 0 8.47 3.813 8.47 8.499z"/></svg>
            WhatsApp Front Desk: +234 805 555 8197
          </a>
        </div>

        <!-- Corporate / Event note -->
        <p style="margin-top: 1.75rem; font-size: 0.85rem; color: var(--slate-400); margin-bottom: 0;">
          Planning a corporate conference, group residential retreat, or booking our 1,000-seat banquet hall?
          <a href="https://wa.me/2348055558197?text=Hello%20Kelvin%20Cameo,%20we%20are%20planning%20a%20corporate%20conference/retreat%20and%20need%20a%20formal%20proposal" target="_blank" rel="noopener noreferrer" style="color: var(--orange-400); font-weight: 700; text-decoration: underline; margin-left: 0.35rem;">
            Request a Corporate Group Proposal
          </a>
        </p>
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

  <!-- Resort Location Map & Social Media Community Section -->
  <section id="resort-location" class="section-padding" style="background:var(--white); border-top:1px solid var(--sand-200);">
    <div class="container">
      <div class="section-head" style="text-align:center; max-width:780px; margin:0 auto 2.5rem;">
        <span class="section-badge" style="background:rgba(242,92,5,0.15); color:var(--orange-600);">Find Us & Stay Connected</span>
        <h2 class="section-title">Resort Location & Social Media Hub</h2>
        <p class="section-subtitle">
          Kelvin Cameo Resort Hotel is situated along the major Abuja–Kaduna highway corridor in Suleja, Niger State — providing swift, seamless access from the Federal Capital Territory and northern business hubs. Connect with us across our active social channels.
        </p>
      </div>

      <div class="resort-map-card">
        <div class="grid-2-responsive">
          <!-- Left: Google Maps Interactive Embed -->
          <div>
            <div class="resort-map-frame">
              <iframe 
                title="Kelvin Cameo Resort Hotel Map Location"
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126093.8447849184!2d7.1084803!3d9.1822858!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x104e0e5a6ef67253%3A0xe9f7ff8b09da7482!2sSuleja%2C%20Niger!5e0!3m2!1sen!2sng!4v1710000000000!5m2!1sen!2sng" 
                width="100%" 
                height="100%" 
                style="border:0;" 
                allowfullscreen="" 
                loading="lazy" 
                referrerpolicy="no-referrer-when-downgrade">
              </iframe>
            </div>
            <div style="display:flex; gap:0.75rem; margin-top:1rem; flex-wrap:wrap;">
              <a href="https://maps.google.com/?q=Suleja+Niger+State+Nigeria" target="_blank" rel="noopener" class="btn btn-navy btn-sm">
                <svg viewBox="0 0 24 24" width="14" height="14" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5a2.5 2.5 0 1 1 0-5 2.5 2.5 0 0 1 0 5z"/></svg>
                Open in Google Maps ↗
              </a>
              <a href="https://wa.me/2348055558197?text=Hello%20Kelvin%20Cameo%20Concierge,%20please%20send%20me%20the%20exact%20Google%20Maps%20live%20location%20pin%20for%20the%20Resort" target="_blank" rel="noopener" class="btn btn-whatsapp btn-sm">
                <svg viewBox="0 0 24 24" width="14" height="14" fill="currentColor"><path d="M12.031 6.172c-3.181 0-5.767 2.586-5.768 5.766-.001 1.298.38 2.27 1.019 3.287l-.582 2.128 2.182-.573c.978.58 1.911.928 3.145.929 3.178 0 5.767-2.587 5.768-5.766.001-3.187-2.575-5.77-5.764-5.771zm3.392 8.244c-.144.405-.837.774-1.17.824-.299.045-.677.063-1.092-.069-.252-.08-.575-.187-.988-.365-1.739-.751-2.874-2.502-2.961-2.617-.087-.116-.708-.94-.708-1.793s.448-1.273.607-1.446c.159-.173.346-.217.462-.217l.332.006c.106.005.249-.04.39.298.144.347.491 1.2.534 1.287.043.087.072.188.014.304-.058.116-.087.188-.173.289l-.26.304c-.087.086-.177.18-.076.354.101.174.449.741.964 1.201.662.591 1.221.774 1.394.86.174.086.275.073.376-.044.101-.116.433-.506.549-.68.116-.173.231-.145.39-.087s1.011.477 1.184.564.289.13.332.202c.045.072.045.419-.1.824z"/></svg>
                Request WhatsApp Pin
              </a>
            </div>
          </div>

          <!-- Right: Branch Addresses & Official Social Channels -->
          <div>
            <h3 style="font-family:var(--font-display); font-size:1.5rem; font-weight:800; color:var(--navy-900); margin-bottom:0.75rem;">
              Resort Location & Social Channels
            </h3>
            <p style="color:var(--slate-600); line-height:1.6; font-size:0.9rem; margin-bottom:1.25rem;">
              Plan your visit or stay connected with updates on weekend events, live pool sessions, culinary specials, and presidential suites.
            </p>

            <div style="background:var(--white); border:1px solid var(--slate-200); border-radius:var(--radius-md); padding:1rem 1.25rem; margin-bottom:1.25rem;">
              <div style="display:flex; flex-direction:column; gap:0.65rem; font-size:0.85rem; color:var(--slate-700);">
                <div>
                  <strong style="color:var(--orange-600);">• Branch 01 (Main Hotel & Grand Auditorium):</strong> 
                  Abuja–Kaduna Expressway Corridor, Suleja, Niger State (Pool, Banquet Hall, Dining).
                </div>
                <div>
                  <strong style="color:#0284c7;">• Branch 02 (The Annex):</strong> 
                  Executive Residential Quarter, Suleja, Niger State (Deluxe Rooms & Royal Treat Suite).
                </div>
                <div>
                  <strong style="color:var(--navy-900);">• Direct Concierge Desk:</strong> 
                  <a href="tel:+2348055558197" style="color:var(--navy-900); font-weight:700;">+234 805 555 8197</a> | 
                  <a href="mailto:concierge@kelvincameo.com" style="color:var(--navy-900); font-weight:700;">concierge@kelvincameo.com</a>
                </div>
              </div>
            </div>

            <!-- Social Media Cards Grid -->
            <div class="resort-social-grid">
              <!-- Instagram -->
              <a href="https://instagram.com/kelvincameoresort_ng" target="_blank" rel="noopener" class="resort-social-card">
                <div class="resort-social-icon instagram">
                  <svg viewBox="0 0 24 24" width="22" height="22" fill="currentColor"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg>
                </div>
                <div>
                  <span class="resort-social-title">Instagram</span>
                  <span class="resort-social-handle">@kelvincameoresort_ng</span>
                </div>
              </a>

              <!-- Facebook -->
              <a href="https://facebook.com/kelvincameoresort_ng" target="_blank" rel="noopener" class="resort-social-card">
                <div class="resort-social-icon facebook">
                  <svg viewBox="0 0 24 24" width="22" height="22" fill="currentColor"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
                </div>
                <div>
                  <span class="resort-social-title">Facebook</span>
                  <span class="resort-social-handle">Kelvin Cameo Resort</span>
                </div>
              </a>

              <!-- X / Twitter -->
              <a href="https://x.com/kelvincameoresort_ng" target="_blank" rel="noopener" class="resort-social-card">
                <div class="resort-social-icon twitter">
                  <svg viewBox="0 0 24 24" width="20" height="20" fill="currentColor"><path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/></svg>
                </div>
                <div>
                  <span class="resort-social-title">X (Twitter)</span>
                  <span class="resort-social-handle">@kelvincameoresort_ng</span>
                </div>
              </a>

              <!-- WhatsApp -->
              <a href="https://wa.me/2348055558197" target="_blank" rel="noopener" class="resort-social-card">
                <div class="resort-social-icon whatsapp">
                  <svg viewBox="0 0 24 24" width="22" height="22" fill="currentColor"><path d="M12.031 6.172c-3.181 0-5.767 2.586-5.768 5.766-.001 1.298.38 2.27 1.019 3.287l-.582 2.128 2.182-.573c.978.58 1.911.928 3.145.929 3.178 0 5.767-2.587 5.768-5.766.001-3.187-2.575-5.77-5.764-5.771zm3.392 8.244c-.144.405-.837.774-1.17.824-.299.045-.677.063-1.092-.069-.252-.08-.575-.187-.988-.365-1.739-.751-2.874-2.502-2.961-2.617-.087-.116-.708-.94-.708-1.793s.448-1.273.607-1.446c.159-.173.346-.217.462-.217l.332.006c.106.005.249-.04.39.298.144.347.491 1.2.534 1.287.043.087.072.188.014.304-.058.116-.087.188-.173.289l-.26.304c-.087.086-.177.18-.076.354.101.174.449.741.964 1.201.662.591 1.221.774 1.394.86.174.086.275.073.376-.044.101-.116.433-.506.549-.68.116-.173.231-.145.39-.087s1.011.477 1.184.564.289.13.332.202c.045.072.045.419-.1.824z"/></svg>
                </div>
                <div>
                  <span class="resort-social-title">WhatsApp Concierge</span>
                  <span class="resort-social-handle">+234 805 555 8197</span>
                </div>
              </a>
            </div>
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

