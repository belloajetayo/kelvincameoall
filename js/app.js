/**
 * Kelvin Cameo (RC: 1613032)
 * Master Client-Side JavaScript
 * Integrated with authentic Kelvin Cameo Resort Hotel tariffs & booking links
 */

document.addEventListener('DOMContentLoaded', () => {
  initNavbarScroll();
  initMobileDrawer();
  initSubsidiaryTabs();
  initRoomTabs();
  initBookingWidget();
  initModalActions();
  initGalleryFilter();
  initStatsCounter();
  initExperiencePicker();
  initConciergeEstimator();
  initFaqAccordion();
  initSiteKitAnalytics();
});

/* --------------------------------------------------------------------------
   Sticky Header Elevation
   -------------------------------------------------------------------------- */
function initNavbarScroll() {
  const header = document.querySelector('.site-header');
  if (!header) return;

  window.addEventListener('scroll', () => {
    if (window.scrollY > 40) {
      header.classList.add('scrolled');
    } else {
      header.classList.remove('scrolled');
    }
  }, { passive: true });
}

/* --------------------------------------------------------------------------
   Mobile Navigation Drawer
   -------------------------------------------------------------------------- */
function initMobileDrawer() {
  const toggleBtn = document.querySelector('.mobile-toggle');
  if (!toggleBtn) return;

  let drawer = document.getElementById('mobileNavDrawer');
  let backdrop = document.getElementById('drawerBackdrop');

  // Dynamically inject if not in DOM
  if (!drawer || !backdrop) {
    backdrop = document.createElement('div');
    backdrop.id = 'drawerBackdrop';
    backdrop.className = 'drawer-backdrop';
    document.body.appendChild(backdrop);

    drawer = document.createElement('aside');
    drawer.id = 'mobileNavDrawer';
    drawer.className = 'mobile-nav-drawer';
    drawer.innerHTML = `
      <div>
        <div class="drawer-header">
          <div style="display:flex; align-items:center; gap:0.65rem;">
            <div class="brand-emblem-badge" style="width:38px; height:38px; border-radius:10px; background:#ffffff;" aria-label="Kelvin Cameo Logo">
              <img src="/wp-content/themes/kelvincameoall/assets/logo-emblem.png" alt="Kelvin Cameo Monogram" style="width:100%; height:100%; object-fit:cover; border-radius:8px;" onerror="this.src='/assets/logo-emblem.png';" />
            </div>
            <div>
              <strong style="font-family:var(--font-display); font-size:1.05rem; color:var(--cobalt-900);">KELVIN <span style="color:var(--orange-500);">CAMEO</span></strong>
              <div style="font-size:0.65rem; color:var(--cobalt-700); font-weight:700;">RC: 1613032</div>
            </div>
          </div>
          <button id="closeDrawerBtn" class="modal-close-btn" style="position:static;" aria-label="Close Navigation">✕</button>
        </div>

        <nav class="drawer-links" aria-label="Mobile Menu">
          <a href="/" class="drawer-link">Home (Conglomerate)</a>
          <a href="/energy/" class="drawer-link">Energy & Filling Stations</a>
          <a href="/real-estate/" class="drawer-link">Real Estate & Land</a>
          <a href="/agriculture/" class="drawer-link">Commercial Agriculture</a>
          <a href="/hospitality/" class="drawer-link" style="color:var(--orange-500);">Resort Hotel & Banquets</a>
          <a href="/about/" class="drawer-link">About The Group</a>
          <a href="/contact/" class="drawer-link">Contact & Inquiries</a>
        </nav>
      </div>

      <div style="border-top:1px solid var(--slate-200); padding-top:1.5rem; margin-top:2rem; display:flex; flex-direction:column; gap:0.75rem;">
        <a href="tel:+2348055558197" class="btn btn-navy btn-sm" style="width:100%;">Call +234 805 555 8197</a>
        <a href="https://wa.me/2348055558197" class="btn btn-whatsapp btn-sm" style="width:100%;" target="_blank" rel="noopener">WhatsApp Concierge</a>
      </div>
    `;
    document.body.appendChild(drawer);
  }

  const closeBtn = document.getElementById('closeDrawerBtn');

  function openDrawer() {
    drawer.classList.add('active');
    backdrop.classList.add('active');
    document.body.style.overflow = 'hidden';
  }

  function closeDrawer() {
    drawer.classList.remove('active');
    backdrop.classList.remove('active');
    document.body.style.overflow = '';
  }

  toggleBtn.addEventListener('click', openDrawer);
  backdrop.addEventListener('click', closeDrawer);
  if (closeBtn) closeBtn.addEventListener('click', closeDrawer);

  drawer.querySelectorAll('a').forEach(link => {
    link.addEventListener('click', closeDrawer);
  });
}

/* --------------------------------------------------------------------------
   Subsidiary Filter Tabs (Conglomerate Units)
   -------------------------------------------------------------------------- */
function initSubsidiaryTabs() {
  const tabBtns = document.querySelectorAll('.subsidiaries-tabs .tab-btn');
  const cards = document.querySelectorAll('.subsidiary-card');

  if (!tabBtns.length || !cards.length) return;

  tabBtns.forEach(btn => {
    btn.addEventListener('click', () => {
      tabBtns.forEach(b => b.classList.remove('active'));
      btn.classList.add('active');

      const filter = btn.getAttribute('data-filter');

      cards.forEach(card => {
        const category = card.getAttribute('data-category');
        if (filter === 'all' || category === filter) {
          card.style.display = '';
          card.style.opacity = '0';
          setTimeout(() => {
            card.style.opacity = '1';
          }, 50);
        } else {
          card.style.display = 'none';
        }
      });
    });
  });
}

/* --------------------------------------------------------------------------
   Room & Accommodation Category Filter Tabs
   -------------------------------------------------------------------------- */
function initRoomTabs() {
  const tabBtns = document.querySelectorAll('.room-tabs .tab-btn');
  const cards = document.querySelectorAll('.suite-card');

  if (!tabBtns.length || !cards.length) return;

  tabBtns.forEach(btn => {
    btn.addEventListener('click', () => {
      tabBtns.forEach(b => b.classList.remove('active'));
      btn.classList.add('active');

      const filter = btn.getAttribute('data-room-filter');

      cards.forEach(card => {
        const category = card.getAttribute('data-room-cat');
        if (filter === 'all' || category === filter) {
          card.style.display = '';
          card.style.opacity = '0';
          setTimeout(() => {
            card.style.opacity = '1';
          }, 50);
        } else {
          card.style.display = 'none';
        }
      });
    });
  });
}

/* --------------------------------------------------------------------------
   Booking Bar & Reservation Modal Trigger
   -------------------------------------------------------------------------- */
function initBookingWidget() {
  const bookingForm = document.getElementById('heroBookingForm');
  if (!bookingForm) return;

  const checkinInput = document.getElementById('quickCheckin');
  const checkoutInput = document.getElementById('quickCheckout');

  if (checkinInput && checkoutInput) {
    const today = new Date();
    const tomorrow = new Date(today);
    tomorrow.setDate(tomorrow.getDate() + 1);
    
    const checkoutDay = new Date(today);
    checkoutDay.setDate(checkoutDay.getDate() + 3);

    checkinInput.value = tomorrow.toISOString().split('T')[0];
    checkoutInput.value = checkoutDay.toISOString().split('T')[0];
    checkinInput.min = today.toISOString().split('T')[0];
    checkoutInput.min = tomorrow.toISOString().split('T')[0];

    checkinInput.addEventListener('change', () => {
      if (checkoutInput.value <= checkinInput.value) {
        const newCheckout = new Date(checkinInput.value);
        newCheckout.setDate(newCheckout.getDate() + 1);
        checkoutInput.value = newCheckout.toISOString().split('T')[0];
      }
      checkoutInput.min = checkinInput.value;
    });
  }

  bookingForm.addEventListener('submit', (e) => {
    e.preventDefault();
    const serviceType = document.getElementById('quickServiceType')?.value || 'resort';
    openInquiryModal({
      serviceType: serviceType,
      checkin: checkinInput?.value,
      checkout: checkoutInput?.value,
      guests: document.getElementById('quickGuests')?.value || '2'
    });
  });
}

/* --------------------------------------------------------------------------
   Interactive Modal & Toast Handling
   -------------------------------------------------------------------------- */
let activeModal = null;

function initModalActions() {
  const modal = document.getElementById('inquiryModal');
  const closeBtn = document.getElementById('modalCloseBtn');
  const form = document.getElementById('reservationRfpForm');

  if (!modal) return;

  // Open buttons
  document.querySelectorAll('[data-open-modal="inquiry"]').forEach(btn => {
    btn.addEventListener('click', (e) => {
      e.preventDefault();
      const suiteName = btn.getAttribute('data-suite-name');
      const serviceType = btn.getAttribute('data-service') || (suiteName ? 'resort' : 'corporate');
      openInquiryModal({ suiteName, serviceType });
    });
  });

  function closeModal() {
    modal.classList.remove('active');
    document.body.style.overflow = '';
    activeModal = null;
  }

  if (closeBtn) closeBtn.addEventListener('click', closeModal);

  modal.addEventListener('click', (e) => {
    if (e.target === modal) closeModal();
  });

  document.addEventListener('keydown', (e) => {
    if (e.key === 'Escape' && activeModal) {
      closeModal();
    }
  });

  // Form submission with toast
  if (form) {
    form.addEventListener('submit', (e) => {
      e.preventDefault();
      const submitBtn = form.querySelector('button[type="submit"]');
      const originalText = submitBtn.innerHTML;
      
      submitBtn.disabled = true;
      submitBtn.innerHTML = 'Submitting...';

      setTimeout(() => {
        submitBtn.disabled = false;
        submitBtn.innerHTML = originalText;
        closeModal();
        form.reset();

        showToast(
          'Reservation Request Received',
          'Our front desk reception team will contact you via phone / WhatsApp (+234 805 555 8197) to confirm your stay.'
        );
      }, 900);
    });
  }
}

function openInquiryModal(details = {}) {
  const modal = document.getElementById('inquiryModal');
  if (!modal) return;

  const typeSelect = document.getElementById('modalServiceType');
  const noteField = document.getElementById('modalNotes');

  if (typeSelect && details.serviceType) {
    typeSelect.value = details.serviceType;
  }

  if (noteField && details.suiteName) {
    noteField.value = `Interested in reserving: ${details.suiteName}. Please confirm current weekday/weekend tariff and availability.`;
  }

  modal.classList.add('active');
  document.body.style.overflow = 'hidden';
  activeModal = modal;
}

function showToast(title, message) {
  let container = document.querySelector('.toast-container');
  if (!container) {
    container = document.createElement('div');
    container.className = 'toast-container';
    document.body.appendChild(container);
  }

  const toast = document.createElement('div');
  toast.className = 'toast';
  toast.innerHTML = `
    <div class="toast-icon">
      <svg viewBox="0 0 24 24" width="18" height="18" fill="none" stroke="currentColor" stroke-width="2.5">
        <polyline points="20 6 9 17 4 12"></polyline>
      </svg>
    </div>
    <div class="toast-content">
      <h6>${title}</h6>
      <p>${message}</p>
    </div>
  `;

  container.appendChild(toast);

  requestAnimationFrame(() => {
    toast.classList.add('show');
  });

  setTimeout(() => {
    toast.classList.remove('show');
    setTimeout(() => toast.remove(), 400);
  }, 5000);
}

/* --------------------------------------------------------------------------
   Gallery Category Filter
   -------------------------------------------------------------------------- */
function initGalleryFilter() {
  const filterBtns = document.querySelectorAll('.gallery-filter-bar .tab-btn');
  const items = document.querySelectorAll('.gallery-item');

  if (!filterBtns.length || !items.length) return;

  filterBtns.forEach(btn => {
    btn.addEventListener('click', () => {
      filterBtns.forEach(b => b.classList.remove('active'));
      btn.classList.add('active');

      const cat = btn.getAttribute('data-gallery-filter');

      items.forEach(item => {
        const itemCat = item.getAttribute('data-category');
        if (cat === 'all' || itemCat === cat) {
          item.style.display = '';
        } else {
          item.style.display = 'none';
        }
      });
    });
  });
}

/* --------------------------------------------------------------------------
   Animated Number Counters for Corporate Milestones
   -------------------------------------------------------------------------- */
function initStatsCounter() {
  const statNumbers = document.querySelectorAll('.stat-number');
  if (!statNumbers.length) return;

  let hasAnimated = false;

  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting && !hasAnimated) {
        hasAnimated = true;
        statNumbers.forEach(counter => {
          const target = parseInt(counter.getAttribute('data-target'), 10);
          if (isNaN(target)) return;

          let current = 0;
          const increment = Math.ceil(target / 45);
          const duration = 1200;
          const stepTime = Math.abs(Math.floor(duration / (target / increment)));

          const timer = setInterval(() => {
            current += increment;
            if (current >= target) {
              counter.textContent = target;
              clearInterval(timer);
            } else {
              counter.textContent = current;
            }
          }, stepTime);
        });
      }
    });
  }, { threshold: 0.3 });

  const statsSection = document.querySelector('.stats-section');
  if (statsSection) observer.observe(statsSection);
}

/* --------------------------------------------------------------------------
   Dribbble Interactive Sector Switcher: "What Can We Do For You?"
   -------------------------------------------------------------------------- */
const experienceData = {
  energy: {
    badge: 'Division 01 • Energy & Filling Stations',
    headline: 'Honest, 100% Calibrated Fuel. No Meter Games.',
    realTalk: 'Ever driven away from a filling station feeling like your gauge barely moved? We despise pump tampering. At Kelvin Cameo stations, our digital dispensers are certified and strictly calibrated. 10 Litres is 10 Litres—every single time.',
    perks: [
      'Certified PMS (Petrol) & AGO (Automotive Diesel)',
      'Digital accurate calibration with zero pump tampering',
      'Clean cooking gas (LPG) refill skids on-site',
      'Dedicated fleet fueling & corporate accounts'
    ],
    ctaText: 'Visit Energy Division →',
    ctaLink: 'energy.html',
    whatsappMsg: 'Hello Kelvin Cameo, I would like to inquire about your fuel stations and petroleum supply.',
    img: 'https://images.unsplash.com/photo-1545459720-aac8509eb02c?auto=format&fit=crop&w=800&q=80',
    priceLabel: 'Availability',
    priceVal: '24/7 Retail Stations'
  },
  estate: {
    badge: 'Division 02 • Real Estate & Properties',
    headline: 'Genuine Land. Verified Titles. Zero "Omonile" Drama.',
    realTalk: 'Buying land in Nigeria shouldn’t give you sleepless nights or high blood pressure. All our residential and commercial layouts come with clean, registered documentation (C of O / Gazettes). You buy with peace of mind, and build when you are ready.',
    perks: [
      '100% dry, accessible land along key Abuja development corridors',
      'Gated, master-planned residential estates with perimeter fencing',
      'Commercial highway plots for logistics and filling stations',
      'Flexible, structured milestone payment plans'
    ],
    ctaText: 'View Available Land →',
    ctaLink: 'real-estate.html',
    whatsappMsg: 'Hello Kelvin Cameo, I am interested in inspecting your verified land and estate plots.',
    img: 'https://images.unsplash.com/photo-1600585154340-be6161a56a0c?auto=format&fit=crop&w=800&q=80',
    priceLabel: 'Starting Investment',
    priceVal: 'From ₦3.5M / Plot'
  },
  agro: {
    badge: 'Division 03 • Commercial Agribusiness',
    headline: 'Real Farm Produce Straight From Nigerian Soil.',
    realTalk: 'No middlemen inflating costs. We run high-volume mechanized operations producing fresh table eggs daily from our 50,000-bird poultry facility, rearing disease-free beef cattle, and storing grains in 10,000 MT silos to feed families and industries.',
    perks: [
      'Freshly collected high-grade table eggs daily',
      'Healthy, disease-screened beef cattle and goats',
      '10,000 MT grain storage and post-harvest drying facilities',
      'Direct farm-gate supply contracts for FMCGs & distributors'
    ],
    ctaText: 'Explore Farm Products →',
    ctaLink: 'agriculture.html',
    whatsappMsg: 'Hello Kelvin Cameo, I want to inquire about bulk farm produce and eggs supply.',
    img: 'https://images.unsplash.com/photo-1500937386664-56d1dfef3854?auto=format&fit=crop&w=800&q=80',
    priceLabel: 'Farm Capacity',
    priceVal: '50,000+ Birds Daily'
  },
  resort: {
    badge: 'Division 04 • Luxury Resort Hotel',
    headline: 'Where 24/7 Light is a Guarantee, Not a Wish.',
    realTalk: 'Escape the heat, traffic, and noise. Kelvin Cameo Resort Hotel guarantees continuous 24/7 electricity backed by heavy-duty generators and solar. Sleep like royalty from ₦25,000/night, cool off in our pristine pool, or celebrate in our 1,000-seat grand banquet hall.',
    perks: [
      'Cozy rooms & executive suites from ₦25,000 to ₦180,000/night',
      '1,000-seat fully air-conditioned Grand Banquet Hall',
      'Sparkling outdoor swimming pool (₦3,000 day access)',
      'High-speed Wi-Fi, fine dining & 24-hour guarded security'
    ],
    ctaText: 'Book a Room / Hall →',
    ctaLink: 'hospitality.html',
    whatsappMsg: 'Hello Kelvin Cameo, I would like to book a room or inquire about the 1,000-seat banquet hall.',
    img: 'https://images.unsplash.com/photo-1566073771259-6a8506099945?auto=format&fit=crop&w=800&q=80',
    priceLabel: 'Rooms & Banquet Hall',
    priceVal: 'Rooms from ₦25k · Hall ₦1.05M'
  }
};

function initExperiencePicker() {
  const tabPills = document.querySelectorAll('.exp-tab-pill');
  if (!tabPills.length) return;

  const eyebrow = document.getElementById('expBadge');
  const headline = document.getElementById('expHeadline');
  const realTalk = document.getElementById('expRealTalk');
  const perksList = document.getElementById('expPerksList');
  const ctaBtn = document.getElementById('expCtaBtn');
  const whatsappBtn = document.getElementById('expWhatsappBtn');
  const previewImg = document.getElementById('expPreviewImg');
  const priceLabel = document.getElementById('expPriceLabel');
  const priceVal = document.getElementById('expPriceVal');

  tabPills.forEach(pill => {
    pill.addEventListener('click', () => {
      tabPills.forEach(p => p.classList.remove('active'));
      pill.classList.add('active');

      const sector = pill.getAttribute('data-sector');
      const data = experienceData[sector];
      if (!data) return;

      // Animate content swap
      const panel = document.querySelector('.exp-showcase-panel');
      if (panel) {
        panel.style.opacity = '0.4';
        panel.style.transform = 'scale(0.99)';
      }

      setTimeout(() => {
        if (eyebrow) eyebrow.textContent = data.badge;
        if (headline) headline.textContent = data.headline;
        if (realTalk) realTalk.textContent = data.realTalk;
        if (ctaBtn) {
          ctaBtn.textContent = data.ctaText;
          ctaBtn.href = data.ctaLink;
        }
        if (whatsappBtn) {
          whatsappBtn.href = `https://wa.me/2348055558197?text=${encodeURIComponent(data.whatsappMsg)}`;
        }
        if (previewImg) previewImg.src = data.img;
        if (priceLabel) priceLabel.textContent = data.priceLabel;
        if (priceVal) priceVal.textContent = data.priceVal;

        if (perksList) {
          perksList.innerHTML = data.perks.map(perk => `
            <div class="exp-perk-item">
              <span class="exp-perk-check">✓</span>
              <span>${perk}</span>
            </div>
          `).join('');
        }

        if (panel) {
          panel.style.opacity = '1';
          panel.style.transform = 'scale(1)';
        }
      }, 150);
    });
  });
}

/* --------------------------------------------------------------------------
   Dribbble Instant Concierge Estimator
   -------------------------------------------------------------------------- */
const conciergeEstimates = {
  room: {
    title: 'Resort Room / Executive Suite',
    price: 'From ₦25,000 / night',
    details: [
      '24/7 Guaranteed Power (Solar + Industrial Gen)',
      'Freezing cold split air conditioning & hot shower',
      'High-speed Wi-Fi & pristine swimming pool access',
      'Secure, guarded premises with ample parking'
    ],
    whatsappMsg: 'Hello Kelvin Cameo, I would like to book a room at your Resort Hotel.'
  },
  wedding: {
    title: '1,000-Seat Grand Banquet Hall',
    price: '₦1,050,000 (Weekend) / ₦850,000 (Weekday)',
    details: [
      'Accommodates 1,000 banquet seated guests comfortably',
      'Fully air-conditioned with dedicated heavy generator standby',
      '2 Private VIP changing suites & green rooms included',
      'Guarded parking for 150+ vehicles & protocol escort'
    ],
    whatsappMsg: 'Hello Kelvin Cameo, I would like to reserve the 1,000-Seat Grand Banquet Hall for an upcoming event.'
  },
  land: {
    title: 'Verified Land / Estate Plot',
    price: 'From ₦3,500,000 / Plot',
    details: [
      'Registered C of O / Gazette documentation with zero omonile',
      'Immediate physical plot demarcation & allocation',
      'Perimeter fencing, security gatehouse & layout road access',
      'Flexible installment options available upon request'
    ],
    whatsappMsg: 'Hello Kelvin Cameo, I would like to schedule a site inspection for your estate plots.'
  },
  fuel: {
    title: 'Petroleum Bulk Supply / Fleet Tankering',
    price: 'Official NNPC/NMDPRA Bulk Depots Rate',
    details: [
      '100% Calibrated PMS & AGO (Diesel) wholesale delivery',
      'Fleet fuel card integration & digital meter metering',
      '24/7 dedicated commercial dispenser lanes at our stations',
      'Standardized quality test certificate with every load'
    ],
    whatsappMsg: 'Hello Kelvin Cameo, I want to discuss corporate fuel supply for our fleet.'
  },
  farm: {
    title: 'Wholesale Farm Produce & Table Eggs',
    price: 'Direct Farm-Gate Bulk Rates',
    details: [
      'Fresh crates of jumbo table eggs collected daily',
      'Healthy, vetted beef cattle & goats for events or butchery',
      'Bulk grains (Maize, Sorghum, Soya) from 10,000 MT silos',
      'Logistics delivery available across Niger State & Abuja FCT'
    ],
    whatsappMsg: 'Hello Kelvin Cameo, I would like to request your current wholesale farm price list.'
  }
};

function initConciergeEstimator() {
  const chipBtns = document.querySelectorAll('.concierge-chip-btn');
  if (!chipBtns.length) return;

  const resultTitle = document.getElementById('conciergeTitle');
  const resultPrice = document.getElementById('conciergePrice');
  const resultList = document.getElementById('conciergeList');
  const resultWhatsapp = document.getElementById('conciergeWhatsapp');

  chipBtns.forEach(btn => {
    btn.addEventListener('click', () => {
      chipBtns.forEach(b => b.classList.remove('active'));
      btn.classList.add('active');

      const option = btn.getAttribute('data-option');
      const item = conciergeEstimates[option];
      if (!item) return;

      if (resultTitle) resultTitle.textContent = item.title;
      if (resultPrice) resultPrice.textContent = item.price;
      if (resultWhatsapp) {
        resultWhatsapp.href = `https://wa.me/2348055558197?text=${encodeURIComponent(item.whatsappMsg)}`;
      }

      if (resultList) {
        resultList.innerHTML = item.details.map(d => `
          <li style="display:flex; align-items:flex-start; gap:0.6rem; font-size:0.875rem; color:#334155; margin-bottom:0.5rem;">
            <span style="color:#0284c7; font-weight:800;">✓</span>
            <span>${d}</span>
          </li>
        `).join('');
      }
    });
  });
}

/* --------------------------------------------------------------------------
   Human Conversational FAQ Accordion
   -------------------------------------------------------------------------- */
function initFaqAccordion() {
  const faqCards = document.querySelectorAll('.faq-card');
  if (!faqCards.length) return;

  faqCards.forEach(card => {
    const btn = card.querySelector('.faq-question-btn');
    if (!btn) return;

    btn.addEventListener('click', () => {
      const isOpen = card.classList.contains('open');
      // Close other cards for accordion effect
      faqCards.forEach(c => c.classList.remove('open'));
      if (!isOpen) {
        card.classList.add('open');
      }
    });
  });
}
