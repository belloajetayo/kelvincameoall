<?php
/**
 * Template Name: Guest Room Reservation & Bank Transfer
 * Template Post Type: page
 *
 * Kelvin Cameo Resort Hotel - Online Room Reservation & Direct Bank Transfer
 * Registration: RC 1613032
 */

if (!defined('ABSPATH')) {
    exit;
}

$bank_details = function_exists('kc_hotel_get_bank_details') ? kc_hotel_get_bank_details() : [
    'bank_name' => 'ZENITH BANK',
    'account_name' => 'KELVIN CAMEO RESORT',
    'account_number' => '1311320179',
    'notification_email' => 'admin@kelvincameo.com'
];

$rooms = function_exists('kc_hotel_get_room_inventory') ? kc_hotel_get_room_inventory() : [];
$ajax_url = admin_url('admin-ajax.php');
$site_home = home_url('/');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Reserve a Room & Suite | Kelvin Cameo Resort Hotel (RC 1613032)</title>
  
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,600;0,700;1,600&family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

  <style>
    :root {
      --kc-navy-950: #040914;
      --kc-navy-900: #060e1e;
      --kc-navy-800: #0b1a36;
      --kc-navy-700: #122852;
      --kc-gold-500: #d4af37;
      --kc-gold-600: #b89327;
      --kc-gold-100: #fef9e7;
      --kc-slate-50: #f8fafc;
      --kc-slate-100: #f1f5f9;
      --kc-slate-200: #e2e8f0;
      --kc-slate-300: #cbd5e1;
      --kc-slate-400: #94a3b8;
      --kc-slate-500: #64748b;
      --kc-slate-600: #475569;
      --kc-slate-700: #334155;
      --kc-slate-800: #1e293b;
      --kc-slate-900: #0f172a;
      
      --kc-success: #10b981;
      --kc-success-bg: #ecfdf5;
      --kc-danger: #ef4444;
      --kc-danger-bg: #fef2f2;
    }

    * { box-sizing: border-box; margin: 0; padding: 0; }
    body {
      font-family: 'Plus Jakarta Sans', sans-serif;
      background: #060e1e;
      color: #fff;
      line-height: 1.6;
      min-height: 100vh;
      display: flex;
      flex-direction: column;
    }

    /* TOP HEADER */
    .reserve-header {
      background: rgba(4,9,20,0.9);
      border-bottom: 1px solid rgba(212,175,55,0.3);
      padding: 16px 28px;
      display: flex;
      align-items: center;
      justify-content: space-between;
      backdrop-filter: blur(8px);
      position: sticky;
      top: 0;
      z-index: 50;
    }
    .brand-group {
      display: flex;
      align-items: center;
      gap: 14px;
      text-decoration: none;
      color: inherit;
    }
    .brand-crest {
      width: 42px;
      height: 42px;
      border-radius: 10px;
      background: linear-gradient(135deg, #fce079, var(--kc-gold-500), var(--kc-gold-600));
      color: var(--kc-navy-950);
      font-weight: 800;
      font-size: 18px;
      display: flex;
      align-items: center;
      justify-content: center;
      border: 1px solid #fff3b0;
      box-shadow: 0 4px 12px rgba(212,175,55,0.35);
    }
    .brand-title {
      font-size: 15px;
      font-weight: 700;
      letter-spacing: 0.8px;
      text-transform: uppercase;
      color: #fff;
    }
    .brand-sub {
      font-size: 11px;
      color: var(--kc-slate-400);
    }

    .btn-outline {
      padding: 7px 16px;
      border: 1px solid rgba(255,255,255,0.25);
      background: transparent;
      color: #fff;
      border-radius: 8px;
      font-size: 12px;
      font-weight: 600;
      text-decoration: none;
      transition: all 0.2s;
    }
    .btn-outline:hover {
      background: rgba(255,255,255,0.1);
      border-color: #fff;
    }

    /* MAIN CONTAINER */
    .reserve-hero {
      text-align: center;
      padding: 40px 20px 24px;
      background: radial-gradient(circle at top, rgba(26,66,138,0.25) 0%, transparent 70%);
    }
    .reserve-hero h1 {
      font-family: 'Playfair Display', serif;
      font-size: 32px;
      font-weight: 700;
      color: #fff;
      margin-bottom: 8px;
    }
    .reserve-hero p {
      font-size: 14px;
      color: var(--kc-slate-300);
      max-width: 600px;
      margin: 0 auto;
    }

    .reserve-layout {
      max-width: 1280px;
      width: 100%;
      margin: 0 auto 60px;
      padding: 0 20px;
      display: grid;
      grid-template-columns: 1.2fr 0.8fr;
      gap: 30px;
      align-items: flex-start;
    }

    @media (max-width: 960px) {
      .reserve-layout { grid-template-columns: 1fr; }
    }

    /* CARD CONTAINERS */
    .form-card {
      background: #0b1a36;
      border-radius: 18px;
      border: 1px solid rgba(212,175,55,0.25);
      box-shadow: 0 20px 40px rgba(0,0,0,0.4);
      padding: 28px;
    }
    .form-card h2 {
      font-size: 16px;
      font-weight: 700;
      text-transform: uppercase;
      letter-spacing: 0.5px;
      color: var(--kc-gold-500);
      margin-bottom: 20px;
      display: flex;
      align-items: center;
      gap: 10px;
      border-bottom: 1px solid rgba(255,255,255,0.08);
      padding-bottom: 12px;
    }

    /* INPUTS */
    .form-row {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 16px;
      margin-bottom: 16px;
    }
    @media (max-width: 600px) {
      .form-row { grid-template-columns: 1fr; }
    }
    .form-group {
      margin-bottom: 16px;
    }
    .form-group label {
      display: block;
      font-size: 11px;
      font-weight: 700;
      color: var(--kc-slate-300);
      text-transform: uppercase;
      letter-spacing: 0.5px;
      margin-bottom: 6px;
    }
    .form-control {
      width: 100%;
      padding: 11px 14px;
      border-radius: 8px;
      border: 1px solid rgba(255,255,255,0.18);
      background: #060e1e;
      color: #fff;
      font-size: 13px;
      outline: none;
      transition: all 0.2s;
    }
    .form-control:focus {
      border-color: var(--kc-gold-500);
      box-shadow: 0 0 0 3px rgba(212,175,55,0.15);
    }
    .form-control::placeholder {
      color: var(--kc-slate-500);
    }

    /* ROOM SELECTION CARDS */
    .rooms-scroll-list {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 12px;
      max-height: 380px;
      overflow-y: auto;
      padding-right: 4px;
      margin-bottom: 18px;
    }
    @media (max-width: 600px) {
      .rooms-scroll-list { grid-template-columns: 1fr; }
    }
    .room-choice-card {
      background: #060e1e;
      border: 2px solid rgba(255,255,255,0.12);
      border-radius: 12px;
      padding: 12px;
      cursor: pointer;
      transition: all 0.2s;
      position: relative;
    }
    .room-choice-card:hover {
      border-color: rgba(212,175,55,0.5);
      transform: translateY(-2px);
    }
    .room-choice-card.selected {
      border-color: var(--kc-gold-500);
      background: #0d2044;
      box-shadow: 0 4px 16px rgba(212,175,55,0.25);
    }
    .room-choice-thumb {
      width: 100%;
      height: 90px;
      border-radius: 8px;
      background-size: cover;
      background-position: center;
      margin-bottom: 8px;
      position: relative;
    }
    .room-choice-num {
      position: absolute;
      bottom: 6px;
      left: 6px;
      background: rgba(6,14,30,0.85);
      color: #fff;
      font-weight: 800;
      font-size: 11px;
      padding: 2px 7px;
      border-radius: 4px;
      border: 1px solid rgba(255,255,255,0.2);
    }
    .room-choice-title {
      font-size: 13px;
      font-weight: 700;
      color: #fff;
      margin-bottom: 2px;
    }
    .room-choice-rate {
      font-size: 13px;
      font-weight: 800;
      color: var(--kc-gold-500);
    }
    .room-choice-rate span {
      font-size: 10px;
      font-weight: normal;
      color: var(--kc-slate-400);
    }

    /* BANK DETAILS HIGHLIGHT BOX */
    .bank-account-card {
      background: linear-gradient(135deg, #0d234d 0%, #061129 100%);
      border: 2px solid var(--kc-gold-500);
      border-radius: 14px;
      padding: 20px;
      margin-bottom: 20px;
      box-shadow: 0 10px 25px rgba(0,0,0,0.3);
      position: relative;
      overflow: hidden;
    }
    .bank-account-card::before {
      content: '';
      position: absolute;
      top: -30px;
      right: -30px;
      width: 100px;
      height: 100px;
      background: radial-gradient(circle, rgba(212,175,55,0.25) 0%, transparent 70%);
      pointer-events: none;
    }
    .bank-brand-header {
      display: flex;
      align-items: center;
      justify-content: space-between;
      margin-bottom: 14px;
      padding-bottom: 10px;
      border-bottom: 1px solid rgba(212,175,55,0.3);
    }
    .bank-title-text {
      font-size: 11px;
      text-transform: uppercase;
      font-weight: 700;
      color: var(--kc-gold-500);
      letter-spacing: 0.6px;
    }
    .bank-val-row {
      margin-bottom: 10px;
    }
    .bank-label {
      font-size: 10px;
      text-transform: uppercase;
      color: var(--kc-slate-400);
      font-weight: 600;
    }
    .bank-val-large {
      font-size: 26px;
      font-weight: 800;
      color: #fff;
      letter-spacing: 2px;
      font-feature-settings: "tnum";
      display: flex;
      align-items: center;
      justify-content: space-between;
    }
    .bank-val-name {
      font-size: 14px;
      font-weight: 700;
      color: #fff;
    }

    .btn-copy {
      background: rgba(212,175,55,0.2);
      border: 1px solid var(--kc-gold-500);
      color: var(--kc-gold-500);
      padding: 4px 12px;
      border-radius: 6px;
      font-size: 11px;
      font-weight: 700;
      cursor: pointer;
      transition: all 0.2s;
    }
    .btn-copy:hover {
      background: var(--kc-gold-500);
      color: var(--kc-navy-950);
    }

    /* STAY SUMMARY */
    .summary-box {
      background: #060e1e;
      border-radius: 12px;
      padding: 16px;
      margin-bottom: 20px;
      border: 1px solid rgba(255,255,255,0.1);
    }
    .summary-row {
      display: flex;
      justify-content: space-between;
      font-size: 12px;
      color: var(--kc-slate-300);
      margin-bottom: 6px;
    }
    .summary-row.total-row {
      font-size: 16px;
      font-weight: 800;
      color: var(--kc-gold-500);
      border-top: 1px dashed rgba(255,255,255,0.2);
      padding-top: 10px;
      margin-top: 10px;
      margin-bottom: 0;
    }

    /* ACTION BUTTON */
    .btn-paid-submit {
      width: 100%;
      padding: 16px;
      background: linear-gradient(135deg, #fce079 0%, var(--kc-gold-500) 50%, var(--kc-gold-600) 100%);
      color: var(--kc-navy-950);
      font-size: 16px;
      font-weight: 800;
      border: none;
      border-radius: 10px;
      cursor: pointer;
      box-shadow: 0 6px 20px rgba(212,175,55,0.4);
      display: flex;
      align-items: center;
      justify-content: center;
      gap: 10px;
      transition: all 0.2s;
      letter-spacing: 0.5px;
    }
    .btn-paid-submit:hover {
      transform: translateY(-2px);
      box-shadow: 0 8px 25px rgba(212,175,55,0.55);
      background: linear-gradient(135deg, #ffe89e 0%, #e5be42 100%);
    }

    /* CONFIRMATION OVERLAY */
    .success-modal-backdrop {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: rgba(4,9,20,0.85);
      backdrop-filter: blur(6px);
      display: none;
      align-items: center;
      justify-content: center;
      z-index: 1000;
      padding: 20px;
    }
    .success-modal-backdrop.active {
      display: flex;
    }
    .success-card {
      background: #0b1a36;
      border: 2px solid var(--kc-gold-500);
      border-radius: 20px;
      max-width: 540px;
      width: 100%;
      padding: 36px 30px;
      text-align: center;
      box-shadow: 0 25px 50px rgba(0,0,0,0.5);
      animation: modalSlide 0.25s ease-out;
    }
    @keyframes modalSlide {
      from { transform: scale(0.95); opacity: 0; }
      to { transform: scale(1); opacity: 1; }
    }
    .success-icon {
      width: 64px;
      height: 64px;
      border-radius: 50%;
      background: var(--kc-success-bg);
      color: var(--kc-success);
      font-size: 32px;
      display: flex;
      align-items: center;
      justify-content: center;
      margin: 0 auto 16px;
      border: 2px solid var(--kc-success);
    }
    .ref-pill {
      font-family: monospace;
      font-size: 20px;
      font-weight: 800;
      background: #060e1e;
      color: var(--kc-gold-500);
      padding: 6px 16px;
      border-radius: 8px;
      display: inline-block;
      border: 1px solid rgba(212,175,55,0.4);
      margin: 14px 0;
    }

    /* FOOTER */
    .reserve-footer {
      margin-top: auto;
      background: rgba(4,9,20,0.9);
      border-top: 1px solid rgba(255,255,255,0.08);
      padding: 20px;
      text-align: center;
      font-size: 11px;
      color: var(--kc-slate-400);
    }
  </style>
</head>
<body>

  <!-- HEADER -->
  <header class="reserve-header">
    <a href="<?php echo esc_url($site_home); ?>" class="brand-group">
      <div class="brand-crest">KC</div>
      <div>
        <div class="brand-title">Kelvin Cameo Resort Hotel</div>
        <div class="brand-sub">Luxury Accommodations • RC 1613032</div>
      </div>
    </a>
    <div style="display: flex; gap: 10px;">
      <a href="<?php echo esc_url($site_home); ?>" class="btn-outline">← Back to Main Site</a>
    </div>
  </header>

  <!-- HERO BANNER -->
  <section class="reserve-hero">
    <h1>Reserve Your Luxury Suite</h1>
    <p>Select your dates and preferred room, transfer directly to our corporate Zenith Bank account, and tap <strong>"I Have Paid"</strong> for instant front desk verification.</p>
  </section>

  <!-- MAIN BOOKING LAYOUT -->
  <main class="reserve-layout">
    
    <!-- LEFT COLUMN: ROOM & GUEST SELECTION -->
    <section class="form-card">
      <h2>
        <span>1. Choose Dates & Select Room</span>
      </h2>

      <div class="form-row">
        <div class="form-group">
          <label>Check-In Date *</label>
          <input type="date" id="reserveCheckIn" class="form-control" onchange="GuestReserveApp.calculateSummary()" required>
        </div>
        <div class="form-group">
          <label>Check-Out Date *</label>
          <input type="date" id="reserveCheckOut" class="form-control" onchange="GuestReserveApp.calculateSummary()" required>
        </div>
      </div>

      <div class="form-group">
        <label>Select Room Assignment *</label>
        <div class="rooms-scroll-list" id="roomOptionsContainer">
          <?php 
          $fallback_img = 'https://images.unsplash.com/photo-1590490360182-c33d57733427?auto=format&fit=crop&w=800&q=80';
          foreach ($rooms as $r): 
            $photo = !empty($r['image_url']) ? $r['image_url'] : $fallback_img;
            $rate = floatval($r['rate']);
          ?>
            <div class="room-choice-card" 
                 data-room-num="<?php echo esc_attr($r['number']); ?>" 
                 data-room-type="<?php echo esc_attr($r['type']); ?>"
                 data-room-branch="<?php echo esc_attr($r['branch']); ?>"
                 data-rate="<?php echo esc_attr($rate); ?>"
                 onclick="GuestReserveApp.selectRoom(this)">
              <div class="room-choice-thumb" style="background-image: url('<?php echo esc_url($photo); ?>');">
                <span class="room-choice-num"><?php echo esc_html($r['number']); ?></span>
              </div>
              <div class="room-choice-title"><?php echo esc_html($r['type']); ?></div>
              <div class="room-choice-rate">₦<?php echo number_format($rate); ?> <span>/night</span></div>
            </div>
          <?php endforeach; ?>
        </div>
      </div>

      <h2 style="margin-top: 24px;">
        <span>2. Guest Details</span>
      </h2>

      <div class="form-row">
        <div class="form-group">
          <label>Full Name *</label>
          <input type="text" id="guestFullName" class="form-control" placeholder="e.g. Chief Emeka Nwosu" required>
        </div>
        <div class="form-group">
          <label>Phone / WhatsApp Number *</label>
          <input type="tel" id="guestPhone" class="form-control" placeholder="e.g. +234 803 123 4567" required>
        </div>
      </div>

      <div class="form-row">
        <div class="form-group">
          <label>Email Address</label>
          <input type="email" id="guestEmail" class="form-control" placeholder="guest@example.com (for receipt voucher)">
        </div>
        <div class="form-group">
          <label>Special Requests</label>
          <input type="text" id="guestNotes" class="form-control" placeholder="e.g. Late arrival, High floor">
        </div>
      </div>
    </section>

    <!-- RIGHT COLUMN: BANK TRANSFER CARD & I HAVE PAID -->
    <section class="form-card">
      <h2>
        <span>3. Bank Transfer & Confirmation</span>
      </h2>

      <!-- OFFICIAL BANK DETAILS BOX -->
      <div class="bank-account-card">
        <div class="bank-brand-header">
          <span class="bank-title-text">Official Corporate Account</span>
          <span style="font-size: 10px; background: rgba(212,175,55,0.3); color: #ffe89e; padding: 2px 7px; border-radius: 4px;">Zero Transfer Fee</span>
        </div>

        <div class="bank-val-row">
          <div class="bank-label">Bank Name</div>
          <div class="bank-val-name" id="bankNameDisplay"><?php echo esc_html($bank_details['bank_name']); ?></div>
        </div>

        <div class="bank-val-row">
          <div class="bank-label">Account Name</div>
          <div class="bank-val-name" id="bankAccountNameDisplay"><?php echo esc_html($bank_details['account_name']); ?></div>
        </div>

        <div class="bank-val-row" style="margin-bottom: 0;">
          <div class="bank-label">Account Number (NUBAN)</div>
          <div class="bank-val-large">
            <span id="bankAccountNumber"><?php echo esc_html($bank_details['account_number']); ?></span>
            <button type="button" class="btn-copy" id="btnCopyAccount" onclick="GuestReserveApp.copyAccountNumber()">
              📋 Copy
            </button>
          </div>
        </div>
      </div>

      <!-- RESERVATION BILL SUMMARY -->
      <div class="summary-box">
        <div class="summary-row">
          <span>Selected Suite:</span>
          <strong id="summarySuiteName">Select a room</strong>
        </div>
        <div class="summary-row">
          <span>Stay Duration:</span>
          <strong id="summaryNights">1 Night</strong>
        </div>
        <div class="summary-row">
          <span>Nightly Rate:</span>
          <strong id="summaryRate">₦0</strong>
        </div>
        <div class="summary-row total-row">
          <span>Total Transfer Amount:</span>
          <strong id="summaryTotal">₦0.00</strong>
        </div>
      </div>

      <!-- SENDER VERIFICATION INPUTS -->
      <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.1); border-radius: 12px; padding: 16px; margin-bottom: 20px;">
        <div style="font-size: 12px; font-weight: 700; color: #ffe89e; margin-bottom: 12px; text-transform: uppercase;">
          Enter Your Transfer Details for Verification
        </div>

        <div class="form-group">
          <label>Name on Sender Bank Account *</label>
          <input type="text" id="senderAccountName" class="form-control" placeholder="e.g. EMEKA NWOSU" required>
        </div>

        <div class="form-row" style="margin-bottom: 0;">
          <div class="form-group">
            <label>Bank Transferred From *</label>
            <input type="text" id="senderBankName" class="form-control" placeholder="e.g. Zenith Bank, GTB, First Bank" required>
          </div>
          <div class="form-group">
            <label>Ref / Session ID (Optional)</label>
            <input type="text" id="senderRef" class="form-control" placeholder="e.g. 000012345678">
          </div>
        </div>
      </div>

      <button type="button" class="btn-paid-submit" id="btnSubmitPayment" onclick="GuestReserveApp.handleSubmitPaid()">
        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
        I Have Made Transfer / I Have Paid
      </button>

      <div style="text-align: center; font-size: 11px; color: var(--kc-slate-400); margin-top: 12px;">
        ⚡ Instant notification is dispatched to our front desk upon tapping.
      </div>
    </section>

  </main>

  <!-- SUCCESS CONFIRMATION MODAL -->
  <div id="successModal" class="success-modal-backdrop">
    <div class="success-card">
      <div class="success-icon">✓</div>
      <h2 style="font-size: 20px; font-weight: 800; color: #fff; font-family: 'Playfair Display', serif;">Payment Alert Received!</h2>
      <p style="font-size: 13px; color: var(--kc-slate-300); margin-top: 6px;">
        Our front desk has been pinged and is verifying your Zenith Bank credit.
      </p>

      <div style="margin-top: 14px;">
        <div style="font-size: 11px; text-transform: uppercase; color: var(--kc-slate-400); font-weight: 700;">Your Booking Reference</div>
        <div class="ref-pill" id="successRefDisplay">KC-26-XXXXX</div>
      </div>

      <div style="background: rgba(255,255,255,0.05); border-radius: 10px; padding: 14px; text-align: left; font-size: 12px; margin: 16px 0;">
        <div style="margin-bottom: 4px;"><strong>Room:</strong> <span id="successRoomDisplay">--</span></div>
        <div style="margin-bottom: 4px;"><strong>Stay:</strong> <span id="successDatesDisplay">--</span></div>
        <div><strong>Amount:</strong> <span id="successAmountDisplay" style="color: var(--kc-gold-500); font-weight: bold;">--</span></div>
      </div>

      <p style="font-size: 12px; color: var(--kc-slate-400); margin-bottom: 20px;">
        Please save your reference code. An official receipt will be issued upon arrival at the desk.
      </p>

      <div style="margin: 18px 0 14px;">
        <a id="successWhatsAppPingBtn" href="#" target="_blank" rel="noopener" class="btn-paid-submit" style="background: linear-gradient(135deg, #25D366 0%, #128C7E 100%); color: #fff; padding: 12px 20px; font-size: 14px; width: 100%; text-decoration: none; display: flex; align-items: center; justify-content: center; gap: 8px; box-shadow: 0 6px 20px rgba(37,211,102,0.35);">
          <svg viewBox="0 0 24 24" width="20" height="20" fill="currentColor"><path d="M12.031 6.172c-3.181 0-5.767 2.586-5.768 5.766-.001 1.298.38 2.27 1.019 3.287l-.582 2.128 2.182-.573c.978.58 1.911.928 3.145.929 3.178 0 5.767-2.587 5.768-5.766.001-3.187-2.575-5.77-5.764-5.771zm3.392 8.244c-.144.405-.837.774-1.17.824-.299.045-.677.063-1.092-.069-.252-.08-.575-.187-.988-.365-1.739-.751-2.874-2.502-2.961-2.617-.087-.116-.708-.94-.708-1.793s.448-1.273.607-1.446c.159-.173.346-.217.462-.217l.332.006c.106.005.249-.04.39.298.144.347.491 1.2.534 1.287.043.087.072.188.014.304-.058.116-.087.188-.173.289l-.26.304c-.087.086-.177.18-.076.354.101.174.449.741.964 1.201.662.591 1.221.774 1.394.86.174.086.275.073.376-.044.101-.116.433-.506.549-.68.116-.173.231-.145.39-.087s1.011.477 1.184.564.289.13.332.202c.045.072.045.419-.1.824z"/></svg>
          <span>Tap to Ping Front Desk on WhatsApp</span>
        </a>
        <small style="color: var(--kc-slate-400); display: block; font-size: 11px; margin-top: 6px;">Fast-tracks your Zenith transfer verification &amp; room key ready on arrival.</small>
      </div>

      <div style="display: flex; gap: 10px; justify-content: center;">
        <button type="button" class="btn-outline" onclick="window.print()">🖨️ Print Voucher</button>
        <a href="<?php echo esc_url($site_home); ?>" class="btn-paid-submit" style="padding: 8px 20px; font-size: 13px; width: auto; text-decoration: none;">Done & Return Home</a>
      </div>
    </div>
  </div>

  <!-- FOOTER -->
  <footer class="reserve-footer">
    Kelvin Cameo Resort Hotel • Opposite Suleiman Barau Technical College, Kwamba, Suleja, Niger State (Abuja Capital Corridor) • RC: 1613032
  </footer>

  <!-- SCRIPT -->
  <script>
    const GuestReserveApp = {
      ajaxUrl: '<?php echo esc_js($ajax_url); ?>',
      selectedRoom: null,

      init: function() {
        const today = new Date().toISOString().split('T')[0];
        const tomorrow = new Date(Date.now() + 86400000).toISOString().split('T')[0];
        const inEl = document.getElementById('reserveCheckIn');
        const outEl = document.getElementById('reserveCheckOut');
        inEl.value = today;
        inEl.min = today;
        outEl.value = tomorrow;
        outEl.min = tomorrow;

        // Pre-select first room
        const first = document.querySelector('.room-choice-card');
        if (first) this.selectRoom(first);
      },

      selectRoom: function(elem) {
        document.querySelectorAll('.room-choice-card').forEach(c => c.classList.remove('selected'));
        elem.classList.add('selected');

        this.selectedRoom = {
          number: elem.dataset.roomNum,
          type: elem.dataset.roomType,
          branch: elem.dataset.roomBranch,
          rate: Number(elem.dataset.rate)
        };

        this.calculateSummary();
      },

      calculateSummary: function() {
        if (!this.selectedRoom) return;

        const inEl = document.getElementById('reserveCheckIn');
        const outEl = document.getElementById('reserveCheckOut');

        const d1 = new Date(inEl.value);
        const d2 = new Date(outEl.value);
        let nights = Math.ceil((d2 - d1) / (1000 * 60 * 60 * 24));
        if (isNaN(nights) || nights < 1) nights = 1;

        const total = this.selectedRoom.rate * nights;

        document.getElementById('summarySuiteName').innerText = `${this.selectedRoom.number} (${this.selectedRoom.type})`;
        document.getElementById('summaryNights').innerText = `${nights} Night${nights > 1 ? 's' : ''}`;
        document.getElementById('summaryRate').innerText = '₦' + this.selectedRoom.rate.toLocaleString() + '/night';
        document.getElementById('summaryTotal').innerText = '₦' + total.toLocaleString() + '.00';
      },

      copyAccountNumber: function() {
        const acc = document.getElementById('bankAccountNumber').innerText.trim();
        navigator.clipboard.writeText(acc).then(() => {
          const btn = document.getElementById('btnCopyAccount');
          btn.innerText = '✓ Copied!';
          btn.style.background = 'var(--kc-gold-500)';
          btn.style.color = '#060e1e';
          setTimeout(() => {
            btn.innerText = '📋 Copy';
            btn.style.background = 'rgba(212,175,55,0.2)';
            btn.style.color = 'var(--kc-gold-500)';
          }, 2000);
        });
      },

      handleSubmitPaid: function() {
        if (!this.selectedRoom) {
          alert('Please select a room first.');
          return;
        }

        const name = document.getElementById('guestFullName').value.trim();
        const phone = document.getElementById('guestPhone').value.trim();
        const email = document.getElementById('guestEmail').value.trim();
        const checkIn = document.getElementById('reserveCheckIn').value;
        const checkOut = document.getElementById('reserveCheckOut').value;
        const senderName = document.getElementById('senderAccountName').value.trim();
        const senderBank = document.getElementById('senderBankName').value.trim();
        const ref = document.getElementById('senderRef').value.trim();
        const notes = document.getElementById('guestNotes').value.trim();

        if (!name || !phone) {
          alert('Please enter your full name and phone number.');
          return;
        }
        if (!senderName || !senderBank) {
          alert('Please enter the Sender Bank Account Name and Bank Name used to make the transfer.');
          return;
        }

        const d1 = new Date(checkIn);
        const d2 = new Date(checkOut);
        let nights = Math.ceil((d2 - d1) / (1000 * 60 * 60 * 24));
        if (isNaN(nights) || nights < 1) nights = 1;
        const total = this.selectedRoom.rate * nights;

        const btn = document.getElementById('btnSubmitPayment');
        btn.innerText = 'Transmitting Payment Alert...';
        btn.disabled = true;

        const fd = new FormData();
        fd.append('action', 'kc_hotel_guest_submit_transfer');
        fd.append('guest_name', name);
        fd.append('guest_phone', phone);
        fd.append('guest_email', email);
        fd.append('room_number', this.selectedRoom.number);
        fd.append('check_in', checkIn);
        fd.append('check_out', checkOut);
        fd.append('sender_name', senderName);
        fd.append('sender_bank', senderBank);
        fd.append('transfer_reference', ref);
        fd.append('amount_paid', total);
        fd.append('notes', notes);

        fetch(this.ajaxUrl, { method: 'POST', body: fd })
          .then(r => r.json())
          .then(res => {
            btn.innerText = 'I Have Made Transfer / I Have Paid';
            btn.disabled = false;
            if (res.success && res.data) {
              document.getElementById('successRefDisplay').innerText = res.data.booking_ref;
              document.getElementById('successRoomDisplay').innerText = `${res.data.room_number} (${res.data.room_type})`;
              document.getElementById('successDatesDisplay').innerText = `${checkIn} to ${checkOut} (${nights} nights)`;
              document.getElementById('successAmountDisplay').innerText = '₦' + Number(res.data.amount_paid).toLocaleString();
              
              const pingBtn = document.getElementById('successWhatsAppPingBtn');
              if (pingBtn && res.data.manager_whatsapp_url) {
                pingBtn.href = res.data.manager_whatsapp_url;
              }
              document.getElementById('successModal').classList.add('active');
            } else {
              alert(res.data && res.data.message ? res.data.message : 'Error submitting payment');
            }
          })
          .catch(() => {
            btn.innerText = 'I Have Made Transfer / I Have Paid';
            btn.disabled = false;
            alert('Network error submitting payment notification.');
          });
      }
    };

    document.addEventListener('DOMContentLoaded', () => {
      GuestReserveApp.init();
    });
  </script>
</body>
</html>