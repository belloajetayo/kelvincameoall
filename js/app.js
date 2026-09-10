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
  initSuiteTrackSliders();
  initCardMediaSliders();
  initHeroMovingBackground();
  initMovingGallery();
  initRoomBookingModal();
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
  const toggleBtns = document.querySelectorAll('.mobile-toggle');
  if (!toggleBtns.length) return;

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

  toggleBtns.forEach(btn => btn.addEventListener('click', openDrawer));
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
   Room & Accommodation Category Filter Tabs & Horizontal Slider
   -------------------------------------------------------------------------- */
function initRoomTabs() {
  const unifiedTrack = document.getElementById('roomsScrollTrack');
  const tabBtns = document.querySelectorAll('.room-tabs .tab-btn');
  const cards = document.querySelectorAll('.suite-card');
  const annexBar = document.querySelector('.branch-section-bar.annex-bar');
  const mainBar = document.querySelector('.branch-section-bar.main-bar');
  const mainTrack = document.getElementById('mainHotelTrack');
  const annexTrack = document.getElementById('annexTrack');

  if (!tabBtns.length || !cards.length) return;

  tabBtns.forEach(btn => {
    btn.addEventListener('click', () => {
      tabBtns.forEach(b => b.classList.remove('active'));
      btn.classList.add('active');

      const filter = btn.getAttribute('data-room-filter');

      const mainGrid = document.querySelector('.suites-grid[data-branch-grid="main"]');
      const annexGrid = document.querySelector('.suites-grid[data-branch-grid="annex"]');

      // If separate tracks/grids exist
      if (mainBar) mainBar.style.display = (filter === 'all' || filter === 'main') ? '' : 'none';
      if (mainGrid) mainGrid.style.display = (filter === 'all' || filter === 'main') ? '' : 'none';
      if (mainTrack) mainTrack.style.display = (filter === 'all' || filter === 'main') ? '' : 'none';
      if (annexBar) annexBar.style.display = (filter === 'all' || filter === 'annex') ? '' : 'none';
      if (annexGrid) annexGrid.style.display = (filter === 'all' || filter === 'annex') ? '' : 'none';
      if (annexTrack) annexTrack.style.display = (filter === 'all' || filter === 'annex') ? '' : 'none';

      // Unified track card filtering
      cards.forEach(card => {
        const category = card.getAttribute('data-room-cat');
        let matches = false;
        if (filter === 'all') {
          matches = true;
        } else if (filter === 'main' && (category === 'main' || category === 'main-room' || category === 'main-suite')) {
          matches = true;
        } else if (filter === 'annex' && category === 'annex') {
          matches = true;
        } else if (category === filter) {
          matches = true;
        }

        if (matches) {
          card.style.display = '';
          card.style.opacity = '0';
          setTimeout(() => {
            card.style.opacity = '1';
          }, 40);
        } else {
          card.style.display = 'none';
        }
      });

      if (unifiedTrack) {
        unifiedTrack.scrollTo({ left: 0, behavior: 'smooth' });
      }
    });
  });
}

/* --------------------------------------------------------------------------
   Horizontal Suite Track Navigation (Arrows, Floating Buttons & Auto-Scroll)
   -------------------------------------------------------------------------- */
function initSuiteTrackSliders() {
  const unifiedTrack = document.getElementById('roomsScrollTrack');
  const navBtns = document.querySelectorAll('.slider-nav-btn, .track-floating-btn');
  const toggleBtn = document.getElementById('autoScrollToggle');
  const statusDot = document.getElementById('autoScrollStatusDot');

  // Generic Button handler (works for any target track)
  navBtns.forEach(btn => {
    btn.addEventListener('click', (e) => {
      e.preventDefault();
      const targetId = btn.getAttribute('data-target') || (btn.id.includes('float') || btn.id.includes('roomCatalog') ? 'roomsScrollTrack' : null);
      const track = targetId ? document.getElementById(targetId) : unifiedTrack;
      if (!track) return;

      const firstVisibleCard = track.querySelector('.suite-card:not([style*="display: none"])');
      const cardWidth = firstVisibleCard ? firstVisibleCard.offsetWidth : 370;
      const scrollStep = cardWidth + 28; // card width + gap

      if (btn.classList.contains('prev-btn') || btn.classList.contains('prev') || btn.id.includes('Prev')) {
        if (track.scrollLeft <= 15) {
          track.scrollTo({ left: track.scrollWidth - track.clientWidth, behavior: 'smooth' });
        } else {
          track.scrollBy({ left: -scrollStep, behavior: 'smooth' });
        }
      } else {
        const maxScroll = track.scrollWidth - track.clientWidth - 15;
        if (track.scrollLeft >= maxScroll) {
          track.scrollTo({ left: 0, behavior: 'smooth' });
        } else {
          track.scrollBy({ left: scrollStep, behavior: 'smooth' });
        }
      }

      resetAutoScroll();
    });
  });

  // Auto-scroll to the right
  if (!unifiedTrack) return;

  let isAutoScrolling = true;
  let autoScrollTimer = null;

  function advanceRight() {
    const firstVisibleCard = unifiedTrack.querySelector('.suite-card:not([style*="display: none"])');
    const cardWidth = firstVisibleCard ? firstVisibleCard.offsetWidth : 370;
    const scrollStep = cardWidth + 28;
    const maxScroll = unifiedTrack.scrollWidth - unifiedTrack.clientWidth - 15;

    if (unifiedTrack.scrollLeft >= maxScroll) {
      unifiedTrack.scrollTo({ left: 0, behavior: 'smooth' });
    } else {
      unifiedTrack.scrollBy({ left: scrollStep, behavior: 'smooth' });
    }
  }

  function startAutoScroll() {
    if (autoScrollTimer) clearInterval(autoScrollTimer);
    autoScrollTimer = setInterval(() => {
      if (isAutoScrolling) {
        advanceRight();
      }
    }, 3800);
  }

  function resetAutoScroll() {
    if (toggleBtn && toggleBtn.getAttribute('data-paused') === 'true') return;
    if (autoScrollTimer) clearInterval(autoScrollTimer);
    startAutoScroll();
  }

  // Pause on hover or touch
  unifiedTrack.addEventListener('mouseenter', () => { isAutoScrolling = false; });
  unifiedTrack.addEventListener('mouseleave', () => {
    if (!toggleBtn || toggleBtn.getAttribute('data-paused') !== 'true') {
      isAutoScrolling = true;
      resetAutoScroll();
    }
  });

  unifiedTrack.addEventListener('touchstart', () => { isAutoScrolling = false; }, { passive: true });
  unifiedTrack.addEventListener('touchend', () => {
    if (!toggleBtn || toggleBtn.getAttribute('data-paused') !== 'true') {
      isAutoScrolling = true;
      resetAutoScroll();
    }
  }, { passive: true });

  // Toggle button control
  if (toggleBtn) {
    toggleBtn.addEventListener('click', () => {
      const isPaused = toggleBtn.getAttribute('data-paused') === 'true';
      if (isPaused) {
        toggleBtn.setAttribute('data-paused', 'false');
        isAutoScrolling = true;
        toggleBtn.innerHTML = '<span id="autoScrollStatusDot" style="width:8px; height:8px; border-radius:50%; background:#10b981; display:inline-block; margin-right:5px;"></span> Auto-Scroll: ON';
        startAutoScroll();
      } else {
        toggleBtn.setAttribute('data-paused', 'true');
        isAutoScrolling = false;
        if (autoScrollTimer) clearInterval(autoScrollTimer);
        toggleBtn.innerHTML = '<span id="autoScrollStatusDot" style="width:8px; height:8px; border-radius:50%; background:#ef4444; display:inline-block; margin-right:5px;"></span> Auto-Scroll: Paused';
      }
    });
  }

  startAutoScroll();
}

/* --------------------------------------------------------------------------
   Room Booking Modal with Instant Front Desk Dispatch & Paystack Flow
   -------------------------------------------------------------------------- */
function initRoomBookingModal() {
  const modal = document.getElementById('roomReservationModal');
  const closeBtn = document.getElementById('roomModalCloseBtn');
  const form = document.getElementById('roomReservationForm');
  const bookBtns = document.querySelectorAll('.btn-book-room');

  if (!modal || !form) return;

  const roomImg = document.getElementById('modalRoomImg');
  const roomNameEl = document.getElementById('modalRoomName');
  const roomBranchEl = document.getElementById('modalRoomBranch');
  const roomPriceEl = document.getElementById('modalRoomPrice');

  const inputRoomName = document.getElementById('bookingRoomName');
  const inputRoomBranch = document.getElementById('bookingRoomBranch');
  const inputRoomPrice = document.getElementById('bookingRoomPrice');
  const inputPaystackUrl = document.getElementById('bookingPaystackUrl');
  const inputNights = document.getElementById('bookingNights');
  const inputTotalAmount = document.getElementById('bookingTotalAmount');

  const checkinInput = document.getElementById('bookingCheckin');
  const checkoutInput = document.getElementById('bookingCheckout');
  const guestCountSelect = document.getElementById('bookingGuestCount');
  const calcRateSummary = document.getElementById('calcSummaryRate');
  const calcTotalDisplay = document.getElementById('calcTotalDisplay');
  const waFallbackBtn = document.getElementById('bookingWaFallback');
  const submitBtn = document.getElementById('bookingSubmitBtn');
  const errorBox = document.getElementById('bookingFormError');

  function getISODate(date) {
    return date.toISOString().split('T')[0];
  }

  function setDefaultDates() {
    const today = new Date();
    const tomorrow = new Date(today);
    tomorrow.setDate(tomorrow.getDate() + 1);

    const checkinMin = getISODate(today);
    const checkoutMin = getISODate(tomorrow);

    if (checkinInput) {
      checkinInput.min = checkinMin;
      if (!checkinInput.value) checkinInput.value = checkinMin;
    }
    if (checkoutInput) {
      checkoutInput.min = checkoutMin;
      if (!checkoutInput.value) checkoutInput.value = checkoutMin;
    }
  }

  function updateCostCalculation() {
    const price = parseInt(inputRoomPrice.value, 10) || 0;
    const checkinVal = checkinInput ? checkinInput.value : '';
    const checkoutVal = checkoutInput ? checkoutInput.value : '';

    let nights = 1;
    if (checkinVal && checkoutVal) {
      const d1 = new Date(checkinVal);
      const d2 = new Date(checkoutVal);
      const diffTime = d2 - d1;
      const diffDays = Math.ceil(diffTime / (1000 * 60 * 60 * 24));
      nights = diffDays > 0 ? diffDays : 1;
    }

    const total = price * nights;
    const formattedPrice = '₦' + price.toLocaleString();
    const formattedTotal = '₦' + total.toLocaleString();

    if (inputNights) inputNights.value = nights;
    if (inputTotalAmount) inputTotalAmount.value = formattedTotal;

    if (calcRateSummary) {
      calcRateSummary.textContent = `${formattedPrice} × ${nights} Night${nights > 1 ? 's' : ''}`;
    }
    if (calcTotalDisplay) {
      calcTotalDisplay.textContent = formattedTotal;
    }

    if (waFallbackBtn) {
      const room = inputRoomName ? inputRoomName.value : 'Resort Room';
      const branch = inputRoomBranch ? inputRoomBranch.value : 'Kelvin Cameo';
      const waText = encodeURIComponent(
        `Hello Kelvin Cameo Resort, I would like to book the ${room} (${branch}) from ${checkinVal} to ${checkoutVal} (${nights} night${nights > 1 ? 's' : ''}) for ${formattedTotal}. Please confirm availability.`
      );
      waFallbackBtn.href = `https://wa.me/2348055558197?text=${waText}`;
    }
  }

  if (checkinInput) {
    checkinInput.addEventListener('change', () => {
      const d1 = new Date(checkinInput.value);
      const nextDay = new Date(d1);
      nextDay.setDate(nextDay.getDate() + 1);
      const nextDayStr = getISODate(nextDay);
      if (checkoutInput) {
        checkoutInput.min = nextDayStr;
        if (checkoutInput.value <= checkinInput.value) {
          checkoutInput.value = nextDayStr;
        }
      }
      updateCostCalculation();
    });
  }

  if (checkoutInput) {
    checkoutInput.addEventListener('change', updateCostCalculation);
  }

  function openModal(btn) {
    const roomName = btn.getAttribute('data-room-name') || 'Resort Room';
    const roomPrice = btn.getAttribute('data-room-price') || '25000';
    const roomBranch = btn.getAttribute('data-room-branch') || 'Branch 01 • Main Hotel';
    const roomImgSrc = btn.getAttribute('data-room-img') || '';
    const paystackUrl = btn.getAttribute('data-paystack-url') || '';

    if (roomNameEl) roomNameEl.textContent = roomName;
    if (roomBranchEl) {
      roomBranchEl.textContent = roomBranch;
      roomBranchEl.className = 'room-modal-branch ' + (roomBranch.includes('02') || roomBranch.includes('Annex') ? 'branch-annex' : 'branch-main');
    }
    if (roomPriceEl) roomPriceEl.textContent = '₦' + parseInt(roomPrice, 10).toLocaleString();
    if (roomImg && roomImgSrc) {
      roomImg.src = roomImgSrc;
      roomImg.alt = roomName;
    }

    if (inputRoomName) inputRoomName.value = roomName;
    if (inputRoomBranch) inputRoomBranch.value = roomBranch;
    if (inputRoomPrice) inputRoomPrice.value = roomPrice;
    if (inputPaystackUrl) inputPaystackUrl.value = paystackUrl;

    setDefaultDates();
    updateCostCalculation();

    if (errorBox) errorBox.style.display = 'none';

    modal.classList.add('active');
    modal.setAttribute('aria-hidden', 'false');
    document.body.style.overflow = 'hidden';
  }

  function closeModal() {
    modal.classList.remove('active');
    modal.setAttribute('aria-hidden', 'true');
    document.body.style.overflow = '';
  }

  bookBtns.forEach(btn => {
    btn.addEventListener('click', (e) => {
      e.preventDefault();
      openModal(btn);
    });
  });

  if (closeBtn) {
    closeBtn.addEventListener('click', closeModal);
  }

  modal.addEventListener('click', (e) => {
    if (e.target === modal) closeModal();
  });

  document.addEventListener('keydown', (e) => {
    if (e.key === 'Escape' && modal.classList.contains('active')) {
      closeModal();
    }
  });

  // Handle Form Submit
  form.addEventListener('submit', (e) => {
    e.preventDefault();
    if (errorBox) errorBox.style.display = 'none';

    const originalText = submitBtn.innerHTML;
    submitBtn.disabled = true;
    submitBtn.innerHTML = `
      <svg viewBox="0 0 24 24" width="18" height="18" fill="none" stroke="currentColor" stroke-width="2.5" style="animation: spin 1s linear infinite; margin-right: 0.5rem; display: inline-block; vertical-align: middle;">
        <circle cx="12" cy="12" r="10" stroke-opacity="0.25"></circle>
        <path d="M12 2a10 10 0 0 1 10 10" stroke-linecap="round"></path>
      </svg>
      <span>Connecting to Paystack...</span>
    `;

    const formData = new FormData(form);
    formData.append('action', 'kc_room_booking');
    if (typeof kcData !== 'undefined' && kcData.nonce) {
      formData.append('nonce', kcData.nonce);
    }

    const ajaxUrl = (typeof kcData !== 'undefined' && kcData.ajax_url) 
      ? kcData.ajax_url 
      : '/wp-admin/admin-ajax.php';

    fetch(ajaxUrl, {
      method: 'POST',
      body: formData
    })
    .then(response => response.json())
    .then(data => {
      if (data.success) {
        showToast(
          'Reservation Logged!',
          'Opening secure Paystack gateway to finalize booking.'
        );
        const redirectUrl = data.data.paystack_url || (inputPaystackUrl ? inputPaystackUrl.value : '');
        setTimeout(() => {
          window.location.href = redirectUrl;
        }, 1000);
      } else {
        submitBtn.disabled = false;
        submitBtn.innerHTML = originalText;
        if (errorBox) {
          errorBox.textContent = data.data?.message || 'Unable to record booking. Please try again or chat via WhatsApp.';
          errorBox.style.display = 'block';
        }
      }
    })
    .catch(err => {
      console.warn('Booking dispatch error:', err);
      // Fallback redirect so customer can proceed even if offline or ajax glitch
      const fallbackUrl = (inputPaystackUrl && inputPaystackUrl.value) 
        ? inputPaystackUrl.value 
        : 'https://paystack.com/buy/deluxe-room-avbdle';
      window.location.href = fallbackUrl;
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

  // Open buttons (supports data-open-modal, data-modal="inquiryModal", and hold date triggers)
  document.querySelectorAll('[data-open-modal="inquiry"], [data-modal="inquiryModal"], [data-modal="inquiry"]').forEach(btn => {
    btn.addEventListener('click', (e) => {
      e.preventDefault();
      const suiteName = btn.getAttribute('data-suite-name') || btn.closest('.banquet-tier-card')?.querySelector('.banquet-tier-title')?.textContent || '';
      const serviceType = btn.getAttribute('data-service') || (suiteName.toLowerCase().includes('banquet') || suiteName.toLowerCase().includes('hall') ? 'banquet' : (suiteName ? 'resort' : 'corporate'));
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

  // Form submission with real AJAX dispatch to WordPress backend & email
  if (form) {
    form.addEventListener('submit', (e) => {
      e.preventDefault();
      const submitBtn = form.querySelector('button[type="submit"]');
      const originalText = submitBtn.innerHTML;
      
      submitBtn.disabled = true;
      submitBtn.innerHTML = `
        <svg viewBox="0 0 24 24" width="16" height="16" fill="none" stroke="currentColor" stroke-width="2.5" style="animation: spin 1s linear infinite; margin-right: 0.5rem; display: inline-block; vertical-align: middle;">
          <circle cx="12" cy="12" r="10" stroke-opacity="0.25"></circle>
          <path d="M12 2a10 10 0 0 1 10 10" stroke-linecap="round"></path>
        </svg>
        <span>Dispatching Request...</span>
      `;

      const formData = new FormData(form);
      formData.append('action', 'kc_submit_inquiry');

      const ajaxUrl = (typeof kcData !== 'undefined' && kcData.ajax_url) 
        ? kcData.ajax_url 
        : '/wp-admin/admin-ajax.php';

      fetch(ajaxUrl, {
        method: 'POST',
        body: formData
      })
      .then(res => res.json())
      .then(data => {
        submitBtn.disabled = false;
        submitBtn.innerHTML = originalText;
        closeModal();
        form.reset();

        showToast(
          'Inquiry Received!',
          'Thank you. Your request has been logged and our team will contact you via phone / WhatsApp (+234 805 555 8197).'
        );
      })
      .catch(err => {
        console.warn('Inquiry dispatch note:', err);
        submitBtn.disabled = false;
        submitBtn.innerHTML = originalText;
        closeModal();
        form.reset();

        showToast(
          'Inquiry Logged!',
          'Our executive reception team will follow up via phone / WhatsApp (+234 805 555 8197).'
        );
      });
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
    const sType = details.serviceType || '';
    if (sType === 'realestate' || sType === 'estate') {
      noteField.value = `Interested in acquiring/inspecting: ${details.suiteName}. Please send layout map, title verification, and payment plan options.`;
    } else if (sType === 'energy') {
      noteField.value = `Interested in commercial energy inquiry: ${details.suiteName}. Please provide franchise terms and wholesale tariff.`;
    } else if (sType === 'agriculture' || sType === 'agro') {
      noteField.value = `Interested in agricultural commodity off-take: ${details.suiteName}. Please send current bulk supply pricing.`;
    } else {
      noteField.value = `Interested in reserving: ${details.suiteName}. Please confirm current weekday/weekend tariff and availability.`;
    }
  }

  if (noteField && (details.checkin || details.checkout)) {
    const datesInfo = `Requested Dates: Check-in ${details.checkin || 'N/A'} to Check-out ${details.checkout || 'N/A'} (${details.guests || '1-2'} guests)`;
    noteField.value = noteField.value ? `${noteField.value}\n${datesInfo}` : datesInfo;
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

function getSectorUrl(sector) {
  if (typeof kcData !== 'undefined' && kcData[sector + '_url']) {
    return kcData[sector + '_url'];
  }
  if (window.location.pathname.endsWith('.html')) {
    const map = {
      energy: 'energy.html',
      estate: 'real-estate.html',
      agro: 'agriculture.html',
      resort: 'hospitality.html'
    };
    return map[sector] || (sector + '.html');
  }
  const slugMap = {
    energy: '/energy/',
    estate: '/real-estate/',
    agro: '/agriculture/',
    resort: '/hospitality/'
  };
  return slugMap[sector] || ('/' + sector + '/');
}

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
          ctaBtn.href = getSectorUrl(sector);
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
            <span style="color:#0b4ea2; font-weight:800;">✓</span>
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

/* --------------------------------------------------------------------------
   Google Site Kit & GA4 Smart Conversion Tracking
   -------------------------------------------------------------------------- */
function initSiteKitAnalytics() {
  function sendGaEvent(eventName, params) {
    if (typeof window.gtag === 'function') {
      window.gtag('event', eventName, params);
    } else if (window.dataLayer && Array.isArray(window.dataLayer)) {
      window.dataLayer.push({ event: eventName, ...params });
    }
  }

  // Track all WhatsApp clicks
  document.querySelectorAll('a[href*="wa.me"], a[href*="whatsapp.com"]').forEach(link => {
    link.addEventListener('click', () => {
      sendGaEvent('generate_lead', {
        event_category: 'Engagement',
        event_label: 'WhatsApp Click',
        lead_channel: 'WhatsApp',
        link_url: link.href
      });
    });
  });

  // Track direct telephone calls
  document.querySelectorAll('a[href^="tel:"]').forEach(link => {
    link.addEventListener('click', () => {
      sendGaEvent('contact', {
        event_category: 'Engagement',
        event_label: 'Phone Call',
        lead_channel: 'Phone',
        phone_number: link.href.replace('tel:', '')
      });
    });
  });

  // Track email clicks
  document.querySelectorAll('a[href^="mailto:"]').forEach(link => {
    link.addEventListener('click', () => {
      sendGaEvent('contact', {
        event_category: 'Engagement',
        event_label: 'Email Inbound',
        lead_channel: 'Email'
      });
    });
  });

  // Track Form Submissions & RFP buttons
    document.querySelectorAll('form').forEach(form => {
    form.addEventListener('submit', () => {
      const formId = form.id || form.getAttribute('data-form-type') || 'inquiry-form';
      sendGaEvent('generate_lead', {
        event_category: 'Forms',
        event_label: formId,
        form_name: formId
      });
    });
  });
}

/* --------------------------------------------------------------------------
   Hero Moving Exterior Background Slideshow
   -------------------------------------------------------------------------- */
function initHeroMovingBackground() {
  const sliders = document.querySelectorAll('.hero-moving-bg-slider');
  if (!sliders.length) return;

  const slideLabels = [
    'Branch 01 • Main Hotel Exterior',
    'Branch 02 • The Annex Exterior',
    'Resort Evening Illumination',
    'Grand Entrance & Valet Arrival'
  ];

  sliders.forEach(slider => {
    const slides = slider.querySelectorAll('.hero-bg-slide');
    const labelEl = slider.parentElement?.querySelector('#heroSlideName');
    if (slides.length <= 1) return;

    let current = 0;
    setInterval(() => {
      slides[current].classList.remove('active');
      current = (current + 1) % slides.length;
      slides[current].classList.add('active');

      if (labelEl && slideLabels[current]) {
        labelEl.style.opacity = '0';
        setTimeout(() => {
          labelEl.textContent = slideLabels[current];
          labelEl.style.opacity = '1';
        }, 300);
      }
    }, 5500);
  });
}

/* --------------------------------------------------------------------------
   Card Media Micro-Slider (Multiple Photos Support per Room)
   -------------------------------------------------------------------------- */
function initCardMediaSliders() {
  const sliders = document.querySelectorAll('.card-media-slider');
  if (!sliders.length) return;

  sliders.forEach(slider => {
    const slides = slider.querySelectorAll('.card-media-slides img');
    const dots = slider.querySelectorAll('.card-media-dots .dot');
    const prevBtn = slider.querySelector('.card-media-nav.prev');
    const nextBtn = slider.querySelector('.card-media-nav.next');
    if (slides.length <= 1) return;

    let currentIndex = 0;

    function showSlide(index) {
      slides.forEach(img => img.classList.remove('active'));
      dots.forEach(dot => dot.classList.remove('active'));

      currentIndex = (index + slides.length) % slides.length;
      slides[currentIndex].classList.add('active');
      if (dots[currentIndex]) dots[currentIndex].classList.add('active');

      const card = slider.closest('.suite-card');
      if (card) {
        const bookBtn = card.querySelector('.btn-book-room');
        if (bookBtn) {
          bookBtn.setAttribute('data-room-img', slides[currentIndex].src);
        }
      }
    }

    if (prevBtn) {
      prevBtn.addEventListener('click', (e) => {
        e.stopPropagation();
        e.preventDefault();
        showSlide(currentIndex - 1);
      });
    }

    if (nextBtn) {
      nextBtn.addEventListener('click', (e) => {
        e.stopPropagation();
        e.preventDefault();
        showSlide(currentIndex + 1);
      });
    }

    dots.forEach((dot, i) => {
      dot.addEventListener('click', (e) => {
        e.stopPropagation();
        e.preventDefault();
        showSlide(i);
      });
    });

    let touchStartX = 0;
    slider.addEventListener('touchstart', (e) => {
      touchStartX = e.changedTouches[0].screenX;
    }, { passive: true });

    slider.addEventListener('touchend', (e) => {
      const touchEndX = e.changedTouches[0].screenX;
      const diff = touchEndX - touchStartX;
      if (Math.abs(diff) > 40) {
        if (diff < 0) {
          showSlide(currentIndex + 1);
        } else {
          showSlide(currentIndex - 1);
        }
      }
    }, { passive: true });
  });
}

/* --------------------------------------------------------------------------
   Continuous Moving Resort Gallery & Lightbox
   -------------------------------------------------------------------------- */
function initMovingGallery() {
  const viewport = document.getElementById('movingGalleryViewport');
  const track = document.getElementById('movingGalleryTrack');
  const toggleBtn = document.getElementById('galleryMotionToggle');
  const prevBtn = document.getElementById('galleryPrevBtn');
  const nextBtn = document.getElementById('galleryNextBtn');
  const filterBtns = document.querySelectorAll('.gallery-filter-bar .tab-btn');

  if (!viewport || !track) return;

  if (toggleBtn) {
    toggleBtn.addEventListener('click', () => {
      const isPaused = viewport.classList.toggle('is-paused');
      const dot = toggleBtn.querySelector('.motion-dot');
      const label = document.getElementById('galleryMotionLabel');
      if (isPaused) {
        if (dot) dot.classList.add('paused');
        if (label) label.textContent = 'Resume Motion';
      } else {
        if (dot) dot.classList.remove('paused');
        if (label) label.textContent = 'Pause Motion';
      }
    });
  }

  if (prevBtn) {
    prevBtn.addEventListener('click', () => {
      viewport.classList.add('is-paused');
      track.style.animation = 'none';
      viewport.scrollBy({ left: -340, behavior: 'smooth' });
    });
  }

  if (nextBtn) {
    nextBtn.addEventListener('click', () => {
      viewport.classList.add('is-paused');
      track.style.animation = 'none';
      viewport.scrollBy({ left: 340, behavior: 'smooth' });
    });
  }

  if (filterBtns.length) {
    filterBtns.forEach(btn => {
      btn.addEventListener('click', () => {
        filterBtns.forEach(b => b.classList.remove('active'));
        btn.classList.add('active');

        const cat = btn.getAttribute('data-gallery-filter');
        const items = track.querySelectorAll('.moving-gallery-item');

        items.forEach(item => {
          const itemCat = item.getAttribute('data-category');
          if (cat === 'all' || itemCat === cat) {
            item.style.opacity = '1';
            item.style.filter = 'none';
          } else {
            item.style.opacity = '0.25';
            item.style.filter = 'grayscale(80%)';
          }
        });
      });
    });
  }

  let lightbox = document.getElementById('resortGalleryLightbox');
  if (!lightbox) {
    lightbox = document.createElement('div');
    lightbox.id = 'resortGalleryLightbox';
    lightbox.className = 'gallery-lightbox';
    lightbox.innerHTML = `
      <div class="gallery-lightbox-content">
        <button type="button" class="gallery-lightbox-close" aria-label="Close image">✕</button>
        <button type="button" class="lightbox-nav prev" id="lightboxPrev" aria-label="Previous view">‹</button>
        <button type="button" class="lightbox-nav next" id="lightboxNext" aria-label="Next view">›</button>
        <img src="" alt="Resort View" class="gallery-lightbox-img" id="lightboxImg">
        <div class="gallery-lightbox-caption">
          <span class="moving-gallery-badge" id="lightboxBadge">Resort View</span>
          <h4 class="moving-gallery-title" id="lightboxTitle" style="font-size:1.35rem; margin:0.35rem 0 0.25rem;"></h4>
          <p class="moving-gallery-desc" id="lightboxDesc"></p>
        </div>
      </div>
    `;
    document.body.appendChild(lightbox);

    const closeBtn = lightbox.querySelector('.gallery-lightbox-close');
    closeBtn.addEventListener('click', () => {
      lightbox.classList.remove('active');
      document.body.style.overflow = '';
    });
    lightbox.addEventListener('click', (e) => {
      if (e.target === lightbox) {
        lightbox.classList.remove('active');
        document.body.style.overflow = '';
      }
    });
  }

  const lightboxImg = document.getElementById('lightboxImg');
  const lightboxBadge = document.getElementById('lightboxBadge');
  const lightboxTitle = document.getElementById('lightboxTitle');
  const lightboxDesc = document.getElementById('lightboxDesc');

  const galleryItems = Array.from(track.querySelectorAll('.moving-gallery-item'));
  let currentLightboxIdx = 0;

  function setLightboxData(idx) {
    if (!galleryItems.length) return;
    currentLightboxIdx = (idx + galleryItems.length) % galleryItems.length;
    const item = galleryItems[currentLightboxIdx];
    const img = item.querySelector('img');
    const badge = item.querySelector('.moving-gallery-badge');
    const title = item.querySelector('.moving-gallery-title');
    const desc = item.querySelector('.moving-gallery-desc');

    if (lightboxImg && img) lightboxImg.src = img.src;
    if (lightboxBadge && badge) lightboxBadge.textContent = badge.textContent;
    if (lightboxTitle && title) lightboxTitle.textContent = title.textContent;
    if (lightboxDesc && desc) lightboxDesc.textContent = desc.textContent;
  }

  galleryItems.forEach((item, index) => {
    item.addEventListener('click', () => {
      setLightboxData(index);
      lightbox.classList.add('active');
      document.body.style.overflow = 'hidden';
    });
  });

  const lbPrev = document.getElementById('lightboxPrev');
  const lbNext = document.getElementById('lightboxNext');
  if (lbPrev) lbPrev.addEventListener('click', (e) => { e.stopPropagation(); setLightboxData(currentLightboxIdx - 1); });
  if (lbNext) lbNext.addEventListener('click', (e) => { e.stopPropagation(); setLightboxData(currentLightboxIdx + 1); });

  document.addEventListener('keydown', (e) => {
    if (!lightbox.classList.contains('active')) return;
    if (e.key === 'ArrowLeft') setLightboxData(currentLightboxIdx - 1);
    if (e.key === 'ArrowRight') setLightboxData(currentLightboxIdx + 1);
  });
}
