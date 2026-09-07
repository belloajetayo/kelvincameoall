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
          <div style="display:flex; align-items:center; gap:0.6rem;">
            <img src="assets/logo.svg" alt="Kelvin Cameo Logo" style="height:38px;">
            <div>
              <strong style="font-family:var(--font-display); font-size:1.05rem; color:var(--navy-900);">KELVIN CAMEO</strong>
              <div style="font-size:0.65rem; color:var(--orange-500); font-weight:700;">RC: 1613032</div>
            </div>
          </div>
          <button id="closeDrawerBtn" class="modal-close-btn" style="position:static;" aria-label="Close Navigation">✕</button>
        </div>

        <nav class="drawer-links" aria-label="Mobile Menu">
          <a href="index.html" class="drawer-link">Home (Conglomerate)</a>
          <a href="energy.html" class="drawer-link">Energy & Filling Stations</a>
          <a href="real-estate.html" class="drawer-link">Real Estate & Land</a>
          <a href="agriculture.html" class="drawer-link">Commercial Agriculture</a>
          <a href="hospitality.html" class="drawer-link" style="color:var(--orange-500);">Resort Hotel & Banquets</a>
          <a href="about.html" class="drawer-link">About The Group</a>
          <a href="contact.html" class="drawer-link">Contact & Inquiries</a>
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
