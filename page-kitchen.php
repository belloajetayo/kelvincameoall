<?php
/**
 * Template Name: Kitchen POS & Food Inventory System
 * Template Post Type: page
 *
 * Kelvin Cameo Resort Hotel - Kitchen & Restaurant Management System
 * Official RC: 1613032
 * Access Levels: Admin PIN (1122) | Kitchen Staff PIN (1613)
 *
 * @package Kelvin_Cameo
 */

if (!defined('ABSPATH')) {
    exit;
}

$ajax_url = admin_url('admin-ajax.php');
$site_home = home_url('/');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <title>Kitchen POS &amp; Inventory | Kelvin Cameo Resort (RC 1613032)</title>
  
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&family=JetBrains+Mono:wght@500;700;800&display=swap" rel="stylesheet">
  <script>
    (function() {
      var savedTheme = localStorage.getItem('kc_kitchen_theme') || 'dark';
      document.documentElement.setAttribute('data-theme', savedTheme);
    })();
  </script>
  
  <style>
    :root {
      --kc-navy-950: #040914;
      --kc-navy-900: #060e1e;
      --kc-navy-800: #0b1a36;
      --kc-navy-700: #122852;
      --kc-terracotta: #ea580c;
      --kc-amber-500: #f59e0b;
      --kc-amber-600: #d97706;
      --kc-gold-500: #eab308;
      --kc-emerald-500: #10b981;
      --kc-emerald-600: #059669;
      --kc-rose-500: #ef4444;
      --kc-slate-50: #f8fafc;
      --kc-slate-100: #f1f5f9;
      --kc-slate-200: #e2e8f0;
      --kc-slate-300: #cbd5e1;
      --kc-slate-600: #475569;
      --kc-slate-700: #334155;
      --kc-slate-800: #1e293b;
      --kc-slate-900: #0f172a;
    }

    * { box-sizing: border-box; margin: 0; padding: 0; }
    body {
      font-family: 'Plus Jakarta Sans', -apple-system, sans-serif;
      background: #090e1a;
      color: #e2e8f0;
      height: 100vh;
      display: flex;
      flex-direction: column;
      overflow: hidden;
    }

    /* TOP HEADER */
    .pos-header {
      background: #060a14;
      border-bottom: 1px solid #1e293b;
      padding: 0.65rem 1.25rem;
      display: flex;
      align-items: center;
      justify-content: space-between;
      flex-shrink: 0;
      gap: 1rem;
    }
    .pos-brand {
      display: flex;
      align-items: center;
      gap: 0.75rem;
    }
    .brand-icon {
      width: 42px;
      height: 42px;
      border-radius: 12px;
      background: linear-gradient(135deg, #ea580c, #c2410c);
      color: #ffffff;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 1.4rem;
      font-weight: 800;
      box-shadow: 0 4px 14px rgba(234, 88, 12, 0.4);
    }
    .brand-text h1 {
      font-size: 1.1rem;
      font-weight: 800;
      color: #ffffff;
      line-height: 1.2;
    }
    .brand-text p {
      font-size: 0.68rem;
      color: #cbd5e1;
      font-weight: 700;
      letter-spacing: 0.05em;
    }
    .pos-top-actions {
      display: flex;
      align-items: center;
      gap: 0.5rem;
      flex-wrap: wrap;
    }
    .pos-btn {
      padding: 0.45rem 0.85rem;
      border-radius: 8px;
      font-size: 0.8rem;
      font-weight: 700;
      border: 1px solid #334155;
      background: #1e293b;
      color: #e2e8f0;
      cursor: pointer;
      display: inline-flex;
      align-items: center;
      gap: 0.4rem;
      transition: all 0.2s ease;
      text-decoration: none;
    }
    .pos-btn:hover {
      background: #334155;
      color: #ffffff;
      border-color: #475569;
    }
    .pos-btn.primary {
      background: linear-gradient(135deg, #ea580c, #c2410c);
      color: #ffffff;
      border-color: transparent;
      box-shadow: 0 2px 8px rgba(234, 88, 12, 0.35);
    }
    .pos-btn.primary:hover {
      background: linear-gradient(135deg, #f97316, #ea580c);
      box-shadow: 0 4px 12px rgba(234, 88, 12, 0.5);
    }
    .pos-btn.gold {
      background: linear-gradient(135deg, #f59e0b, #d97706);
      color: #ffffff;
      border-color: transparent;
      box-shadow: 0 2px 8px rgba(245, 158, 11, 0.35);
    }
    .pos-badge {
      padding: 0.2rem 0.55rem;
      border-radius: 6px;
      font-size: 0.72rem;
      font-weight: 800;
      background: rgba(234, 88, 12, 0.18);
      color: #fb923c;
      border: 1px solid rgba(234, 88, 12, 0.4);
    }

    /* MAIN CONTAINER */
    .pos-main {
      display: flex;
      flex: 1;
      overflow: hidden;
    }

    /* LEFT SIDE: CATEGORY & PRODUCT CATALOG */
    .catalog-pane {
      flex: 1;
      display: flex;
      flex-direction: column;
      border-right: 1px solid #1e293b;
      overflow: hidden;
      background: #090e1a;
    }

    .catalog-bar {
      padding: 0.75rem 1.25rem;
      background: #0d1527;
      border-bottom: 1px solid #1e293b;
      display: flex;
      align-items: center;
      justify-content: space-between;
      gap: 1rem;
      flex-shrink: 0;
    }

    .cat-pills {
      display: flex;
      align-items: center;
      gap: 0.4rem;
      overflow-x: auto;
      padding-bottom: 2px;
    }
    .cat-pill {
      padding: 0.45rem 0.95rem;
      border-radius: 999px;
      font-size: 0.8rem;
      font-weight: 700;
      background: #1e293b;
      color: #94a3b8;
      border: 1px solid transparent;
      cursor: pointer;
      white-space: nowrap;
      transition: all 0.2s ease;
    }
    .cat-pill:hover {
      background: #334155;
      color: #f1f5f9;
    }
    .cat-pill.active {
      background: linear-gradient(135deg, #ea580c, #c2410c);
      color: #ffffff;
      box-shadow: 0 2px 8px rgba(234, 88, 12, 0.35);
    }

    .search-wrap {
      position: relative;
      min-width: 220px;
    }
    .search-wrap input {
      width: 100%;
      height: 38px;
      background: #162032;
      border: 1px solid #334155;
      border-radius: 8px;
      padding: 0 0.85rem 0 2rem;
      color: #ffffff;
      font-size: 0.85rem;
      outline: none;
    }
    .search-wrap svg {
      position: absolute;
      left: 0.65rem;
      top: 50%;
      transform: translateY(-50%);
      color: #64748b;
      width: 14px;
      height: 14px;
    }

    .products-grid-scroll {
      flex: 1;
      overflow-y: auto;
      padding: 1.25rem;
    }
    .products-grid {
      display: grid;
      grid-template-columns: repeat(auto-fill, minmax(210px, 1fr));
      gap: 1rem;
    }

    .food-card {
      background: #0d1527;
      border: 1px solid #1e293b;
      border-radius: 12px;
      padding: 1rem;
      display: flex;
      flex-direction: column;
      justify-content: space-between;
      cursor: pointer;
      transition: all 0.2s ease;
      position: relative;
    }
    .food-card:hover {
      border-color: #ea580c;
      transform: translateY(-2px);
      box-shadow: 0 8px 20px rgba(0,0,0,0.3);
    }
    .food-card.out-of-stock {
      opacity: 0.45;
      cursor: not-allowed;
    }
    .food-cat-tag {
      font-size: 0.68rem;
      font-weight: 800;
      text-transform: uppercase;
      letter-spacing: 0.05em;
      color: #ea580c;
      margin-bottom: 0.35rem;
    }
    .food-name {
      font-size: 0.95rem;
      font-weight: 800;
      color: #ffffff;
      margin-bottom: 0.65rem;
      line-height: 1.35;
      min-height: 2.6em;
    }
    .food-meta {
      display: flex;
      align-items: center;
      justify-content: space-between;
      margin-top: auto;
      padding-top: 0.5rem;
      border-top: 1px solid #162032;
    }
    .food-price {
      font-family: 'JetBrains Mono', monospace;
      font-size: 1.05rem;
      font-weight: 800;
      color: #f59e0b;
    }
    .stock-pill {
      font-size: 0.72rem;
      font-weight: 700;
      padding: 0.2rem 0.5rem;
      border-radius: 6px;
      background: #162032;
      color: #94a3b8;
    }
    .stock-pill.low {
      background: rgba(239, 68, 68, 0.15);
      color: #f87171;
    }
    .stock-pill.in-stock {
      background: rgba(16, 185, 129, 0.15);
      color: #34d399;
    }

    /* RIGHT SIDE: CART & CHECKOUT */
    .cart-pane {
      width: 380px;
      background: #060a14;
      display: flex;
      flex-direction: column;
      flex-shrink: 0;
    }
    .cart-head {
      padding: 1rem 1.25rem;
      border-bottom: 1px solid #1e293b;
      display: flex;
      align-items: center;
      justify-content: space-between;
    }
    .cart-head h2 {
      font-size: 1.05rem;
      font-weight: 800;
      color: #ffffff;
      display: flex;
      align-items: center;
      gap: 0.5rem;
    }
    .cart-clear {
      font-size: 0.75rem;
      color: #ef4444;
      background: none;
      border: none;
      cursor: pointer;
      font-weight: 700;
    }
    .cart-clear:hover { text-decoration: underline; }

    .cart-customer-bar {
      padding: 0.85rem 1.25rem;
      background: #0d1527;
      border-bottom: 1px solid #1e293b;
      display: flex;
      flex-direction: column;
      gap: 0.5rem;
    }
    .cart-field {
      display: flex;
      gap: 0.5rem;
    }
    .cart-field input, .cart-field select {
      flex: 1;
      height: 36px;
      background: #162032;
      border: 1px solid #334155;
      border-radius: 6px;
      padding: 0 0.65rem;
      color: #ffffff;
      font-size: 0.825rem;
      outline: none;
    }

    .cart-items-scroll {
      flex: 1;
      overflow-y: auto;
      padding: 0.85rem 1.25rem;
    }
    .cart-empty {
      text-align: center;
      padding: 3rem 1rem;
      color: #64748b;
      font-size: 0.875rem;
    }
    .cart-item {
      display: flex;
      align-items: center;
      justify-content: space-between;
      gap: 0.5rem;
      padding: 0.65rem 0;
      border-bottom: 1px solid #162032;
    }
    .cart-item-info {
      flex: 1;
    }
    .cart-item-name {
      font-size: 0.85rem;
      font-weight: 700;
      color: #ffffff;
      margin-bottom: 0.2rem;
    }
    .cart-item-price {
      font-size: 0.78rem;
      color: #94a3b8;
      font-family: 'JetBrains Mono', monospace;
    }
    .cart-qty-ctrl {
      display: flex;
      align-items: center;
      gap: 0.35rem;
    }
    .qty-btn {
      width: 26px;
      height: 26px;
      border-radius: 6px;
      background: #1e293b;
      border: 1px solid #334155;
      color: #ffffff;
      cursor: pointer;
      display: flex;
      align-items: center;
      justify-content: center;
      font-weight: 800;
      font-size: 0.9rem;
    }
    .qty-btn:hover { background: #334155; }
    .cart-qty-val {
      font-family: 'JetBrains Mono', monospace;
      font-weight: 800;
      font-size: 0.85rem;
      width: 22px;
      text-align: center;
    }

    .cart-foot {
      padding: 1rem 1.25rem;
      background: #0d1527;
      border-top: 1px solid #1e293b;
      display: flex;
      flex-direction: column;
      gap: 0.85rem;
    }
    .cart-total-row {
      display: flex;
      align-items: center;
      justify-content: space-between;
    }
    .cart-total-label {
      font-size: 0.875rem;
      font-weight: 700;
      color: #94a3b8;
    }
    .cart-total-val {
      font-family: 'JetBrains Mono', monospace;
      font-size: 1.4rem;
      font-weight: 900;
      color: #f59e0b;
    }

    .payment-grid {
      display: grid;
      grid-template-columns: repeat(4, 1fr);
      gap: 0.4rem;
    }
    .pay-btn {
      padding: 0.5rem 0.25rem;
      border-radius: 6px;
      background: #162032;
      border: 1px solid #334155;
      color: #cbd5e1;
      font-size: 0.75rem;
      font-weight: 700;
      cursor: pointer;
      text-align: center;
      transition: all 0.2s ease;
    }
    .pay-btn.active {
      background: #ea580c;
      color: #ffffff;
      border-color: #ea580c;
    }

    .btn-checkout {
      width: 100%;
      height: 48px;
      border-radius: 10px;
      background: linear-gradient(135deg, #ea580c 0%, #c2410c 100%);
      color: #ffffff;
      font-size: 0.95rem;
      font-weight: 800;
      border: none;
      cursor: pointer;
      box-shadow: 0 4px 14px rgba(234, 88, 12, 0.4);
      display: flex;
      align-items: center;
      justify-content: center;
      gap: 0.5rem;
      transition: all 0.2s ease;
    }
    .btn-checkout:hover {
      background: linear-gradient(135deg, #f97316 0%, #ea580c 100%);
      transform: translateY(-1px);
    }
    .btn-checkout:disabled {
      opacity: 0.4;
      cursor: not-allowed;
      transform: none;
    }

    /* MODAL SYSTEM */
    .pos-modal-overlay {
      position: fixed;
      inset: 0;
      background: rgba(4, 9, 20, 0.85);
      backdrop-filter: blur(8px);
      z-index: 999;
      display: none;
      align-items: center;
      justify-content: center;
      padding: 1.5rem;
    }
    .pos-modal-overlay.open {
      display: flex;
    }
    .pos-modal {
      background: #0d1527;
      border: 1px solid #1e293b;
      border-radius: 16px;
      width: 100%;
      max-width: 520px;
      max-height: 90vh;
      display: flex;
      flex-direction: column;
      box-shadow: 0 25px 50px -12px rgba(0,0,0,0.5);
      overflow: hidden;
    }
    .pos-modal.wide { max-width: 900px; }
    .pos-modal.extra-wide { max-width: 1100px; }
    .modal-head {
      padding: 1rem 1.5rem;
      border-bottom: 1px solid #1e293b;
      display: flex;
      align-items: center;
      justify-content: space-between;
      background: #060a14;
    }
    .modal-head h3 { font-size: 1.15rem; font-weight: 800; color: #ffffff; }
    .modal-close {
      background: none;
      border: none;
      color: #94a3b8;
      font-size: 1.5rem;
      cursor: pointer;
    }
    .modal-close:hover { color: #ffffff; }
    .modal-body {
      padding: 1.5rem;
      overflow-y: auto;
      flex: 1;
    }
    .modal-foot {
      padding: 1rem 1.5rem;
      border-top: 1px solid #1e293b;
      display: flex;
      align-items: center;
      justify-content: flex-end;
      gap: 0.75rem;
      background: #060a14;
    }

    /* FORM STYLES */
    .form-group {
      margin-bottom: 1rem;
    }
    .form-group label {
      display: block;
      font-size: 0.78rem;
      font-weight: 700;
      color: #cbd5e1;
      margin-bottom: 0.35rem;
      text-transform: uppercase;
      letter-spacing: 0.04em;
    }
    .form-control {
      width: 100%;
      height: 44px;
      border-radius: 8px;
      background: #162032;
      border: 1px solid #334155;
      padding: 0 0.85rem;
      color: #ffffff;
      font-size: 0.9rem;
      outline: none;
    }
    .form-control:focus {
      border-color: #ea580c;
      box-shadow: 0 0 0 2px rgba(234, 88, 12, 0.2);
    }

    /* RESTOCK SELECTION DESIGN */
    .restock-action-grid {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 0.75rem;
      margin-bottom: 1.25rem;
    }
    .restock-action-card {
      padding: 0.85rem 0.5rem;
      border-radius: 10px;
      border: 2px solid #1e293b;
      background: #162032;
      text-align: center;
      cursor: pointer;
      transition: all 0.2s ease;
    }
    .restock-action-card.active {
      border-color: #ea580c;
      background: rgba(234, 88, 12, 0.15);
      color: #ffffff;
    }
    .restock-action-card h4 {
      font-size: 0.85rem;
      font-weight: 800;
      margin-bottom: 0.2rem;
    }
    .restock-action-card p {
      font-size: 0.7rem;
      color: #94a3b8;
    }

    /* TABLE STYLES */
    .pos-table {
      width: 100%;
      border-collapse: collapse;
      font-size: 0.825rem;
    }
    .pos-table th {
      background: #060a14;
      padding: 0.65rem 0.85rem;
      text-align: left;
      font-weight: 800;
      color: #cbd5e1;
      border-bottom: 2px solid #1e293b;
    }
    .pos-table td {
      padding: 0.65rem 0.85rem;
      border-bottom: 1px solid #162032;
      color: #cbd5e1;
    }
    .pos-table tr:hover td {
      background: rgba(255, 255, 255, 0.02);
    }

    /* PRINT RECEIPT DOCKET */
    @media print {
      body * { visibility: hidden; }
      #kitchenReceiptDocket, #kitchenReceiptDocket * { visibility: visible; }
      #kitchenReceiptDocket {
        position: absolute;
        left: 0;
        top: 0;
        width: 100%;
        color: #000;
        background: #fff;
      }
    }
  </style>
</head>
<body>

  <!-- ==============================================================
       TOP HEADER — Brand, Shift & Navigation Actions
       ============================================================== -->
  <header class="pos-header">
    <div class="pos-brand">
      <div class="brand-icon">👨‍🍳</div>
      <div class="brand-text">
        <h1>KELVIN CAMEO KITCHEN &bull; FOOD POS</h1>
        <p>RC: 1613032 &bull; RESTAURANT &bull; PORTION INVENTORY ENGINE</p>
      </div>
      <span class="pos-badge" id="activeShiftBadge">KSHIFT-ACTIVE</span>
    </div>

    <div class="pos-top-actions">
      <button type="button" class="pos-btn" onclick="openMonthlyReportModal()">
        📊 Monthly Audit
      </button>
      <button type="button" class="pos-btn" onclick="openShiftModal()">
        🔄 Shift Handover
      </button>
      <button type="button" class="pos-btn" onclick="openLedgerModal()">
        📋 Daily Sheet
      </button>
      <button type="button" class="pos-btn" onclick="openOrdersModal()">
        🧾 Food Orders (<span id="todayOrderCount">0</span>)
      </button>
      <button type="button" class="pos-btn primary" onclick="openRestockModal()">
        📦 Restock Food
      </button>
      <button type="button" class="pos-btn" id="addDishBtn" onclick="openAddDishModal()" style="display:none;">
        ➕ Add Dish
      </button>
      <button type="button" class="pos-btn gold" id="adminUnlockBtn" onclick="openAdminUnlockModal()">
        🔒 Unlock Admin
      </button>
      <a href="<?php echo home_url('/bar/'); ?>" class="pos-btn" title="Switch to Bar POS">
        🍸 Bar POS
      </a>
      <a href="<?php echo home_url('/reception/'); ?>" class="pos-btn" title="Reception Dashboard">
        🔑 Reception
      </a>
      <a href="<?php echo esc_url($site_home); ?>" class="pos-btn" title="Back to Conglomerate Home">
        🏠 Home
      </a>
    </div>
  </header>

  <!-- ==============================================================
       MAIN WORKSPACE — Left Catalog + Right Cart
       ============================================================== -->
  <main class="pos-main">
    
    <!-- CATALOG PANE -->
    <section class="catalog-pane">
      <div class="catalog-bar">
        <div class="cat-pills" id="categoryPills">
          <button type="button" class="cat-pill active" data-cat="all">🍽️ All Menu Items</button>
          <button type="button" class="cat-pill" data-cat="grills">🍖 Grills &amp; Proteins</button>
          <button type="button" class="cat-pill" data-cat="mains">🍚 Rice &amp; Mains</button>
          <button type="button" class="cat-pill" data-cat="soups">🍲 Soups &amp; Swallows</button>
          <button type="button" class="cat-pill" data-cat="breakfast">🍳 Breakfast &amp; Bites</button>
          <button type="button" class="cat-pill" data-cat="sides">🍟 Sides &amp; Extras</button>
        </div>
        <div class="search-wrap">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>
          <input type="text" id="foodSearchInput" placeholder="Search dishes (e.g. Catfish, Egusi, Jollof)...">
        </div>
      </div>

      <div class="products-grid-scroll">
        <div class="products-grid" id="foodProductsGrid">
          <!-- Populated dynamically via JS -->
        </div>
      </div>
    </section>

    <!-- CART & CHECKOUT PANE -->
    <aside class="cart-pane">
      <div class="cart-head">
        <h2>🧾 Kitchen Order Docket</h2>
        <button type="button" class="cart-clear" onclick="clearCart()">Clear All</button>
      </div>

      <div class="cart-customer-bar">
        <div class="cart-field">
          <input type="text" id="guestNameInput" placeholder="Guest Name (e.g. Alh. Danladi)">
          <input type="text" id="chefNameInput" placeholder="Chef Name" value="Chef on Duty">
        </div>
        <div class="cart-field">
          <select id="tableRoomSelect">
            <option value="Restaurant Table 1">Restaurant Table 1</option>
            <option value="Restaurant Table 2">Restaurant Table 2</option>
            <option value="Restaurant Table 3">Restaurant Table 3</option>
            <option value="VIP Poolside Lounge">VIP Poolside Lounge</option>
            <option value="Bush Bar Terrace">Bush Bar Terrace</option>
            <option value="Room Delivery (Room 101)">Room Delivery (Room 101)</option>
            <option value="Room Delivery (Room 102)">Room Delivery (Room 102)</option>
            <option value="Room Delivery (Room 201)">Room Delivery (Room 201)</option>
            <option value="Room Delivery (Room 202)">Room Delivery (Room 202)</option>
            <option value="Room Delivery (Deluxe UK)">Room Delivery (Deluxe UK)</option>
            <option value="Room Delivery (Love Night)">Room Delivery (Love Night)</option>
            <option value="Room Delivery (Golden Nest)">Room Delivery (Golden Nest)</option>
            <option value="Room Delivery (Executive Suite)">Room Delivery (Executive Suite)</option>
            <option value="Room Delivery (Apartment 3-Bed)">Room Delivery (Apartment 3-Bed)</option>
            <option value="Takeaway Pack">Takeaway Pack</option>
          </select>
        </div>
      </div>

      <div class="cart-items-scroll" id="cartItemsList">
        <div class="cart-empty">
          <p>No dishes in docket.</p>
          <p style="font-size:0.75rem; margin-top:0.35rem;">Click any food item from the menu to add.</p>
        </div>
      </div>

      <div class="cart-foot">
        <div class="cart-total-row">
          <span class="cart-total-label">Total Amount:</span>
          <span class="cart-total-val" id="cartTotalVal">₦0</span>
        </div>

        <div class="payment-grid" id="paymentMethodGrid">
          <button type="button" class="pay-btn active" data-method="pos">💳 POS</button>
          <button type="button" class="pay-btn" data-method="cash">💵 Cash</button>
          <button type="button" class="pay-btn" data-method="transfer">📱 Transfer</button>
          <button type="button" class="pay-btn" data-method="room">🏨 Room</button>
        </div>

        <button type="button" class="btn-checkout" id="checkoutBtn" onclick="submitFoodOrder()" disabled>
          <span>🍳 Place Order &amp; Print Docket</span>
        </button>
      </div>
    </aside>

  </main>

  <!-- ==============================================================
       MODAL 1: RESTOCK INVENTORY & SPOILAGE
       ============================================================== -->
  <div class="pos-modal-overlay" id="restockModal">
    <div class="pos-modal">
      <div class="modal-head">
        <h3>📦 Food Inventory Restock &amp; Spoilage</h3>
        <button type="button" class="modal-close" onclick="closeModal('restockModal')">&times;</button>
      </div>
      <div class="modal-body">
        <div class="form-group">
          <label>Select Dish *</label>
          <select id="restockDishSelect" class="form-control" onchange="updateRestockDishDetails()">
            <!-- Populated dynamically -->
          </select>
        </div>

        <div style="background:#162032; border-radius:8px; padding:0.85rem; margin-bottom:1.25rem; font-size:0.85rem; display:flex; justify-content:space-between;">
          <div>Current Portions: <strong id="restockCurrentStock" style="color:#f59e0b;">0</strong></div>
          <div>Unit Price: <strong id="restockUnitPrice" style="color:#10b981;">₦0</strong></div>
        </div>

        <label style="font-size:0.78rem; font-weight:700; color:#cbd5e1; margin-bottom:0.5rem; display:block; text-transform:uppercase;">
          Action Type *
        </label>
        <div class="restock-action-grid" id="restockActionGrid">
          <div class="restock-action-card active" data-action="restock" onclick="selectRestockAction('restock')">
            <h4>📦 Market Restock</h4>
            <p>Add new portions</p>
          </div>
          <div class="restock-action-card" data-action="spoilage" onclick="selectRestockAction('spoilage')">
            <h4>⚠️ Spoilage / Waste</h4>
            <p>Log spoiled food</p>
          </div>
          <div class="restock-action-card" data-action="set_exact" onclick="selectRestockAction('set_exact')">
            <h4>🔒 Set Exact Count</h4>
            <p>Admin Override</p>
          </div>
        </div>

        <div class="form-group">
          <label id="restockQtyLabel">Quantity of Portions to Add *</label>
          <input type="number" id="restockQtyInput" class="form-control" min="1" placeholder="e.g. 15">
        </div>
      </div>
      <div class="modal-foot">
        <button type="button" class="pos-btn" onclick="closeModal('restockModal')">Cancel</button>
        <button type="button" class="pos-btn primary" onclick="submitRestock()">Save Inventory Update</button>
      </div>
    </div>
  </div>

  <!-- ==============================================================
       MODAL 2: DAILY RECONCILIATION SHEET (LEDGER)
       ============================================================== -->
  <div class="pos-modal-overlay" id="ledgerModal">
    <div class="pos-modal extra-wide">
      <div class="modal-head">
        <div>
          <h3>📋 Daily Kitchen Reconciliation Sheet &bull; <span id="sheetDateLabel">Today</span></h3>
          <p style="font-size:0.75rem; color:#94a3b8;">Opening Portions, Market Restocks, Sold Dishes, Closing Balances &amp; Sales Value</p>
        </div>
        <button type="button" class="modal-close" onclick="closeModal('ledgerModal')">&times;</button>
      </div>
      <div class="modal-body">
        <div style="overflow-x:auto;">
          <table class="pos-table" id="dailySheetTable">
            <thead>
              <tr>
                <th>Dish Name</th>
                <th>Category</th>
                <th>Price</th>
                <th>O/S (Open)</th>
                <th>N/S (New)</th>
                <th>Total Stock</th>
                <th>Qty Sold</th>
                <th>Spoilage</th>
                <th>C/S (Close)</th>
                <th>Total Amount</th>
              </tr>
            </thead>
            <tbody id="dailySheetTableBody">
              <!-- Populated dynamically -->
            </tbody>
            <tfoot>
              <tr style="font-weight:800; background:#060a14; border-top:2px solid #ea580c;">
                <td colspan="6">GRAND REVENUE TOTAL:</td>
                <td id="sheetTotalDishesSold" style="color:#34d399;">0</td>
                <td></td>
                <td></td>
                <td id="sheetGrandRevenue" style="color:#f59e0b; font-size:1.1rem; font-family:'JetBrains Mono', monospace;">₦0</td>
              </tr>
            </tfoot>
          </table>
        </div>
      </div>
      <div class="modal-foot">
        <button type="button" class="pos-btn" onclick="printDailySheet()">🖨️ Print Sheet</button>
        <button type="button" class="pos-btn gold" id="resetDayBtn" onclick="resetKitchenDay()" style="display:none;">
          ⚠️ Reset Day &amp; Rollover Stock (Admin)
        </button>
        <button type="button" class="pos-btn" onclick="closeModal('ledgerModal')">Close</button>
      </div>
    </div>
  </div>

  <!-- ==============================================================
       MODAL 3: SHIFT HANDOVER
       ============================================================== -->
  <div class="pos-modal-overlay" id="shiftModal">
    <div class="pos-modal wide">
      <div class="modal-head">
        <div>
          <h3>🔄 Chef Shift Handover &bull; <span id="shiftCodeTitle">KSHIFT</span></h3>
          <p style="font-size:0.75rem; color:#94a3b8;">Hand over kitchen stock, order sales, and reconciliation to incoming chef</p>
        </div>
        <button type="button" class="modal-close" onclick="closeModal('shiftModal')">&times;</button>
      </div>
      <div class="modal-body">
        <div style="display:grid; grid-template-columns: repeat(4, 1fr); gap:0.75rem; margin-bottom:1.25rem;">
          <div style="background:#162032; padding:0.85rem; border-radius:8px;">
            <span style="font-size:0.72rem; color:#94a3b8;">Total Shift Sales</span>
            <div id="shiftTotalSalesVal" style="font-size:1.15rem; font-weight:800; color:#f59e0b; font-family:'JetBrains Mono', monospace;">₦0</div>
          </div>
          <div style="background:#162032; padding:0.85rem; border-radius:8px;">
            <span style="font-size:0.72rem; color:#94a3b8;">Dishes Cooked/Sold</span>
            <div id="shiftTotalDishesVal" style="font-size:1.15rem; font-weight:800; color:#34d399;">0</div>
          </div>
          <div style="background:#162032; padding:0.85rem; border-radius:8px;">
            <span style="font-size:0.72rem; color:#94a3b8;">POS Sales</span>
            <div id="shiftPosSalesVal" style="font-size:1.15rem; font-weight:800; color:#60a5fa;">₦0</div>
          </div>
          <div style="background:#162032; padding:0.85rem; border-radius:8px;">
            <span style="font-size:0.72rem; color:#94a3b8;">Cash Sales</span>
            <div id="shiftCashSalesVal" style="font-size:1.15rem; font-weight:800; color:#a78bfa;">₦0</div>
          </div>
        </div>

        <div class="form-group">
          <label>Outgoing Chef Name *</label>
          <input type="text" id="shiftOutgoingStaff" class="form-control" value="Chef on Duty">
        </div>

        <div class="form-group">
          <label>Incoming Chef Taking Over *</label>
          <input type="text" id="shiftIncomingStaff" class="form-control" placeholder="Enter name of incoming chef (e.g. Chef Musa)">
        </div>

        <div class="form-group">
          <label>Shift Handover Notes (Optional)</label>
          <textarea id="shiftNotes" class="form-control" style="height:70px; padding:0.5rem;" placeholder="Note any low inventory items, VIP reservations, or market prep instructions..."></textarea>
        </div>
      </div>
      <div class="modal-foot">
        <button type="button" class="pos-btn" onclick="openShiftHistoryModal()">📜 Shift History</button>
        <button type="button" class="pos-btn" onclick="closeModal('shiftModal')">Cancel</button>
        <button type="button" class="pos-btn primary" onclick="submitCloseShift()">Complete Shift Handover</button>
      </div>
    </div>
  </div>

  <!-- ==============================================================
       MODAL 4: SHIFT HISTORY
       ============================================================== -->
  <div class="pos-modal-overlay" id="shiftHistoryModal">
    <div class="pos-modal wide">
      <div class="modal-head">
        <h3>📜 Chef Shift History &amp; Handover Logs</h3>
        <button type="button" class="modal-close" onclick="closeModal('shiftHistoryModal')">&times;</button>
      </div>
      <div class="modal-body">
        <table class="pos-table">
          <thead>
            <tr>
              <th>Shift Code</th>
              <th>Outgoing Chef</th>
              <th>Incoming Chef</th>
              <th>Orders</th>
              <th>Total Sales</th>
              <th>Status</th>
              <th>Closed At</th>
            </tr>
          </thead>
          <tbody id="shiftHistoryTableBody">
            <!-- Populated dynamically -->
          </tbody>
        </table>
      </div>
      <div class="modal-foot">
        <button type="button" class="pos-btn" onclick="closeModal('shiftHistoryModal')">Close</button>
      </div>
    </div>
  </div>

  <!-- ==============================================================
       MODAL 5: FOOD ORDERS LEDGER
       ============================================================== -->
  <div class="pos-modal-overlay" id="ordersModal">
    <div class="pos-modal wide">
      <div class="modal-head">
        <h3>🧾 Food Orders &amp; Receipts Ledger</h3>
        <button type="button" class="modal-close" onclick="closeModal('ordersModal')">&times;</button>
      </div>
      <div class="modal-body">
        <table class="pos-table">
          <thead>
            <tr>
              <th>Receipt No</th>
              <th>Guest / Table</th>
              <th>Dishes Ordered</th>
              <th>Total</th>
              <th>Payment</th>
              <th>Chef</th>
              <th>Date / Time</th>
            </tr>
          </thead>
          <tbody id="ordersTableBody">
            <!-- Populated dynamically -->
          </tbody>
        </table>
      </div>
      <div class="modal-foot">
        <button type="button" class="pos-btn" onclick="closeModal('ordersModal')">Close</button>
      </div>
    </div>
  </div>

  <!-- ==============================================================
       MODAL 6: MONTHLY FINANCIAL AUDIT
       ============================================================== -->
  <div class="pos-modal-overlay" id="monthlyReportModal">
    <div class="pos-modal wide">
      <div class="modal-head">
        <div>
          <h3>📊 Monthly Kitchen Financial &amp; Inventory Audit</h3>
          <p style="font-size:0.75rem; color:#94a3b8;">Revenue performance by category and top-selling dishes</p>
        </div>
        <button type="button" class="modal-close" onclick="closeModal('monthlyReportModal')">&times;</button>
      </div>
      <div class="modal-body">
        <div style="display:flex; align-items:center; gap:0.75rem; margin-bottom:1.25rem;">
          <label style="font-size:0.85rem; font-weight:700;">Select Month:</label>
          <input type="month" id="monthlySelect" class="form-control" style="width:200px;" value="<?php echo date('Y-m'); ?>" onchange="loadMonthlyReport()">
        </div>

        <div style="display:grid; grid-template-columns: repeat(3, 1fr); gap:1rem; margin-bottom:1.5rem;">
          <div style="background:#162032; padding:1rem; border-radius:10px;">
            <span style="font-size:0.75rem; color:#94a3b8;">Total Food Revenue</span>
            <div id="monthlyRevenueVal" style="font-size:1.4rem; font-weight:900; color:#f59e0b; font-family:'JetBrains Mono', monospace;">₦0</div>
          </div>
          <div style="background:#162032; padding:1rem; border-radius:10px;">
            <span style="font-size:0.75rem; color:#94a3b8;">Total Kitchen Orders</span>
            <div id="monthlyOrdersVal" style="font-size:1.4rem; font-weight:900; color:#34d399;">0</div>
          </div>
          <div style="background:#162032; padding:1rem; border-radius:10px;">
            <span style="font-size:0.75rem; color:#94a3b8;">Payment Breakdown</span>
            <div id="monthlyPaymentBreakdown" style="font-size:0.75rem; color:#cbd5e1; margin-top:0.35rem;"></div>
          </div>
        </div>

        <h4 style="font-size:0.95rem; font-weight:800; margin-bottom:0.75rem;">Top Selling Dishes This Month</h4>
        <div id="monthlyTopDishes" style="display:grid; grid-template-columns: repeat(2, 1fr); gap:0.5rem;">
          <!-- Populated dynamically -->
        </div>
      </div>
      <div class="modal-foot">
        <button type="button" class="pos-btn" onclick="closeModal('monthlyReportModal')">Close</button>
      </div>
    </div>
  </div>

  <!-- ==============================================================
       MODAL 7: ADD NEW DISH (ADMIN)
       ============================================================== -->
  <div class="pos-modal-overlay" id="addDishModal">
    <div class="pos-modal">
      <div class="modal-head">
        <h3>➕ Add New Dish to Kitchen Menu</h3>
        <button type="button" class="modal-close" onclick="closeModal('addDishModal')">&times;</button>
      </div>
      <div class="modal-body">
        <div class="form-group">
          <label>Dish Name *</label>
          <input type="text" id="newDishName" class="form-control" placeholder="e.g. Seafood Okro &amp; Semo">
        </div>
        <div class="form-group">
          <label>Category *</label>
          <select id="newDishCategory" class="form-control">
            <option value="grills">Grills &amp; Proteins</option>
            <option value="mains">Rice &amp; Mains</option>
            <option value="soups">Soups &amp; Swallows</option>
            <option value="breakfast">Breakfast &amp; Bites</option>
            <option value="sides">Sides &amp; Extras</option>
          </select>
        </div>
        <div class="form-group">
          <label>Selling Price (₦) *</label>
          <input type="number" id="newDishPrice" class="form-control" min="100" placeholder="e.g. 5000">
        </div>
        <div class="form-group">
          <label>Initial Opening Portions *</label>
          <input type="number" id="newDishOpeningStock" class="form-control" min="1" value="15">
        </div>
      </div>
      <div class="modal-foot">
        <button type="button" class="pos-btn" onclick="closeModal('addDishModal')">Cancel</button>
        <button type="button" class="pos-btn primary" onclick="submitAddDish()">Save Menu Item</button>
      </div>
    </div>
  </div>

  <!-- ==============================================================
       MODAL 8: ADMIN PIN AUTHORIZATION (1122)
       ============================================================== -->
  <div class="pos-modal-overlay" id="adminUnlockModal">
    <div class="pos-modal" style="max-width:380px;">
      <div class="modal-head">
        <h3>🔒 Security Authorization</h3>
        <button type="button" class="modal-close" onclick="closeModal('adminUnlockModal')">&times;</button>
      </div>
      <div class="modal-body" style="text-align:center;">
        <p style="font-size:0.85rem; color:#94a3b8; margin-bottom:1.25rem;">
          Enter <strong>Admin PIN (1122)</strong> for full privileges or <strong>Kitchen Staff PIN (1613)</strong>.
        </p>
        <input type="password" id="adminPinInput" class="form-control" style="font-size:1.5rem; text-align:center; letter-spacing:0.3em; height:50px; font-family:'JetBrains Mono', monospace;" maxlength="6" placeholder="••••">
      </div>
      <div class="modal-foot" style="justify-content:center;">
        <button type="button" class="pos-btn primary" style="width:100%; justify-content:center;" onclick="submitAdminUnlock()">Authorize Access</button>
      </div>
    </div>
  </div>

  <!-- HIDDEN PRINT DOCKET CONTAINER -->
  <div id="kitchenReceiptDocket" style="display:none; padding:1.5rem; font-family:'Courier New', Courier, monospace;">
    <div style="text-align:center; margin-bottom:1rem;">
      <h2 style="margin:0; font-size:1.3rem;">KELVIN CAMEO RESORT HOTEL</h2>
      <p style="margin:0; font-size:0.85rem;">KITCHEN ORDER DOCKET &bull; RC: 1613032</p>
      <p style="margin:0; font-size:0.8rem;">Suleja, Niger State &bull; +234 805 555 8197</p>
      <hr style="border:none; border-top:1px dashed #000; margin:0.5rem 0;">
    </div>
    <div style="font-size:0.85rem; margin-bottom:0.75rem;">
      <div>Receipt: <strong id="docketReceiptNo"></strong></div>
      <div>Date: <span id="docketDate"></span></div>
      <div>Guest: <span id="docketGuest"></span></div>
      <div>Location: <span id="docketTable"></span></div>
      <div>Chef: <span id="docketChef"></span></div>
    </div>
    <table style="width:100%; border-collapse:collapse; font-size:0.85rem; margin-bottom:0.75rem;">
      <thead>
        <tr style="border-bottom:1px dashed #000;">
          <th style="text-align:left;">Item</th>
          <th style="text-align:center;">Qty</th>
          <th style="text-align:right;">Price</th>
          <th style="text-align:right;">Total</th>
        </tr>
      </thead>
      <tbody id="docketItemsBody"></tbody>
    </table>
    <hr style="border:none; border-top:1px dashed #000; margin:0.5rem 0;">
    <div style="font-size:1.1rem; font-weight:bold; display:flex; justify-content:space-between;">
      <span>TOTAL:</span>
      <span id="docketTotalAmount"></span>
    </div>
    <div style="font-size:0.8rem; text-align:center; margin-top:1rem;">
      Payment Method: <strong id="docketPaymentMethod"></strong><br>
      Thank you for dining with Kelvin Cameo!
    </div>
  </div>

  <!-- ==============================================================
       JAVASCRIPT APPLICATION ENGINE
       ============================================================== -->
  <script>
    const AJAX_URL = '<?php echo esc_url($ajax_url); ?>';
    let products = [];
    let cart = [];
    let currentRole = sessionStorage.getItem('kc_kitchen_role') || 'staff';
    let sessionToken = sessionStorage.getItem('kc_kitchen_token') || '';
    let currentPaymentMethod = 'pos';
    let selectedRestockAction = 'restock';

    document.addEventListener('DOMContentLoaded', function() {
      // Check if we need initial login
      if (!sessionToken) {
        verifyPinAuto('1613'); // Auto login as Kitchen Staff by default
      } else {
        loadPosData();
      }

      setupEventListeners();
    });

    function setupEventListeners() {
      // Category filter pills
      document.querySelectorAll('.cat-pill').forEach(pill => {
        pill.addEventListener('click', function() {
          document.querySelectorAll('.cat-pill').forEach(p => p.classList.remove('active'));
          this.classList.add('active');
          filterProducts();
        });
      });

      // Search input
      document.getElementById('foodSearchInput').addEventListener('input', filterProducts);

      // Payment method buttons
      document.querySelectorAll('.pay-btn').forEach(btn => {
        btn.addEventListener('click', function() {
          document.querySelectorAll('.pay-btn').forEach(b => b.classList.remove('active'));
          this.classList.add('active');
          currentPaymentMethod = this.getAttribute('data-method');
        });
      });
    }

    function verifyPinAuto(pin) {
      const fd = new FormData();
      fd.append('action', 'kc_kitchen_verify_pin');
      fd.append('pin', pin);

      fetch(AJAX_URL, { method: 'POST', body: fd })
        .then(r => r.json())
        .then(res => {
          if (res.success) {
            sessionToken = res.data.token;
            currentRole = res.data.role;
            sessionStorage.setItem('kc_kitchen_token', sessionToken);
            sessionStorage.setItem('kc_kitchen_role', currentRole);
            updateRoleUI();
            loadPosData();
          }
        });
    }

    function loadPosData() {
      const fd = new FormData();
      fd.append('action', 'kc_kitchen_get_pos_data');
      fd.append('token', sessionToken);

      fetch(AJAX_URL, { method: 'POST', body: fd })
        .then(r => r.json())
        .then(res => {
          if (res.success) {
            products = res.data.products;
            document.getElementById('todayOrderCount').textContent = res.data.today_orders;
            if (res.data.shift) {
              document.getElementById('activeShiftBadge').textContent = res.data.shift.shift_code;
              document.getElementById('shiftOutgoingStaff').value = res.data.shift.staff_name || 'Chef on Duty';
              document.getElementById('chefNameInput').value = res.data.shift.staff_name || 'Chef on Duty';
            }
            renderProducts(products);
            populateRestockSelect();
          } else if (res.data && res.data.message && res.data.message.includes('Unauthorized')) {
            openAdminUnlockModal();
          }
        });
    }

    function updateRoleUI() {
      if (currentRole === 'admin') {
        document.getElementById('addDishBtn').style.display = 'inline-flex';
        document.getElementById('resetDayBtn').style.display = 'inline-flex';
        document.getElementById('adminUnlockBtn').textContent = '👑 Admin Active';
        document.getElementById('adminUnlockBtn').style.background = '#22c55e';
      } else {
        document.getElementById('addDishBtn').style.display = 'none';
        document.getElementById('resetDayBtn').style.display = 'none';
        document.getElementById('adminUnlockBtn').textContent = '🔒 Unlock Admin';
        document.getElementById('adminUnlockBtn').style.background = 'linear-gradient(135deg, #f59e0b, #d97706)';
      }
    }

    function renderProducts(items) {
      const grid = document.getElementById('foodProductsGrid');
      grid.innerHTML = '';

      if (items.length === 0) {
        grid.innerHTML = '<div style="grid-column: 1/-1; text-align:center; padding:3rem; color:#64748b;">No dishes found matching criteria.</div>';
        return;
      }

      items.forEach(p => {
        const isOutOfStock = parseInt(p.current_stock) <= 0;
        const isLow = parseInt(p.current_stock) > 0 && parseInt(p.current_stock) <= 5;
        
        const card = document.createElement('div');
        card.className = 'food-card ' + (isOutOfStock ? 'out-of-stock' : '');
        card.innerHTML = `
          <div>
            <div class="food-cat-tag">${formatCategory(p.category)}</div>
            <div class="food-name">${p.name}</div>
          </div>
          <div class="food-meta">
            <div class="food-price">₦${numberFormat(p.price)}</div>
            <div class="stock-pill ${isOutOfStock ? 'low' : (isLow ? 'low' : 'in-stock')}">
              ${isOutOfStock ? 'Sold Out' : p.current_stock + ' portions'}
            </div>
          </div>
        `;

        if (!isOutOfStock) {
          card.onclick = () => addToCart(p);
        }
        grid.appendChild(card);
      });
    }

    function formatCategory(cat) {
      const map = {
        grills: '🍖 Grills & Proteins',
        mains: '🍚 Rice & Mains',
        soups: '🍲 Soups & Swallows',
        breakfast: '🍳 Breakfast & Bites',
        sides: '🍟 Sides & Extras'
      };
      return map[cat] || cat;
    }

    function filterProducts() {
      const activePill = document.querySelector('.cat-pill.active');
      const cat = activePill ? activePill.getAttribute('data-cat') : 'all';
      const q = document.getElementById('foodSearchInput').value.toLowerCase().trim();

      const filtered = products.filter(p => {
        const matchCat = (cat === 'all' || p.category === cat);
        const matchQ = (!q || p.name.toLowerCase().includes(q));
        return matchCat && matchQ;
      });

      renderProducts(filtered);
    }

    /* CART OPERATIONS */
    function addToCart(product) {
      const existing = cart.find(item => item.id == product.id);
      if (existing) {
        if (existing.qty < parseInt(product.current_stock)) {
          existing.qty++;
        } else {
          alert('Cannot add more portions than available stock (' + product.current_stock + ').');
          return;
        }
      } else {
        cart.push({
          id: product.id,
          name: product.name,
          category: product.category,
          price: parseFloat(product.price),
          qty: 1,
          maxStock: parseInt(product.current_stock)
        });
      }
      renderCart();
    }

    function changeQty(id, delta) {
      const item = cart.find(i => i.id == id);
      if (!item) return;

      item.qty += delta;
      if (item.qty <= 0) {
        cart = cart.filter(i => i.id != id);
      } else if (item.qty > item.maxStock) {
        item.qty = item.maxStock;
        alert('Maximum available portions reached (' + item.maxStock + ').');
      }
      renderCart();
    }

    function clearCart() {
      cart = [];
      renderCart();
    }

    function renderCart() {
      const list = document.getElementById('cartItemsList');
      const totalEl = document.getElementById('cartTotalVal');
      const checkoutBtn = document.getElementById('checkoutBtn');

      if (cart.length === 0) {
        list.innerHTML = `
          <div class="cart-empty">
            <p>No dishes in docket.</p>
            <p style="font-size:0.75rem; margin-top:0.35rem;">Click any food item from the menu to add.</p>
          </div>
        `;
        totalEl.textContent = '₦0';
        checkoutBtn.disabled = true;
        return;
      }

      list.innerHTML = '';
      let total = 0;

      cart.forEach(item => {
        const itemTotal = item.price * item.qty;
        total += itemTotal;

        const row = document.createElement('div');
        row.className = 'cart-item';
        row.innerHTML = `
          <div class="cart-item-info">
            <div class="cart-item-name">${item.name}</div>
            <div class="cart-item-price">${item.qty} &times; ₦${numberFormat(item.price)} = <strong>₦${numberFormat(itemTotal)}</strong></div>
          </div>
          <div class="cart-qty-ctrl">
            <button type="button" class="qty-btn" onclick="changeQty(${item.id}, -1)">&minus;</button>
            <span class="cart-qty-val">${item.qty}</span>
            <button type="button" class="qty-btn" onclick="changeQty(${item.id}, 1)">&plus;</button>
          </div>
        `;
        list.appendChild(row);
      });

      totalEl.textContent = '₦' + numberFormat(total);
      checkoutBtn.disabled = false;
    }

    function submitFoodOrder() {
      if (cart.length === 0) return;

      const guestName = document.getElementById('guestNameInput').value.trim() || 'Walk-in Guest';
      const chefName = document.getElementById('chefNameInput').value.trim() || 'Kitchen Chef';
      const tableRoom = document.getElementById('tableRoomSelect').value;

      const fd = new FormData();
      fd.append('action', 'kc_kitchen_create_order');
      fd.append('token', sessionToken);
      fd.append('items', JSON.stringify(cart));
      fd.append('payment_method', currentPaymentMethod);
      fd.append('customer_name', guestName);
      fd.append('staff_name', chefName);
      fd.append('table_number', tableRoom);

      const btn = document.getElementById('checkoutBtn');
      btn.disabled = true;
      btn.innerHTML = '<span>⏳ Processing Order...</span>';

      fetch(AJAX_URL, { method: 'POST', body: fd })
        .then(r => r.json())
        .then(res => {
          btn.disabled = false;
          btn.innerHTML = '<span>🍳 Place Order &amp; Print Docket</span>';

          if (res.success) {
            printReceiptDocket(res.data);
            clearCart();
            loadPosData();
            alert('Kitchen Order ' + res.data.receipt_no + ' Placed Successfully!');
          } else {
            alert('Order Error: ' + (res.data ? res.data.message : 'Unknown error'));
          }
        })
        .catch(err => {
          btn.disabled = false;
          btn.innerHTML = '<span>🍳 Place Order &amp; Print Docket</span>';
          alert('Network or server error while placing order.');
        });
    }

    function printReceiptDocket(data) {
      document.getElementById('docketReceiptNo').textContent = data.receipt_no;
      document.getElementById('docketDate').textContent = data.date;
      document.getElementById('docketGuest').textContent = data.customer_name;
      document.getElementById('docketTable').textContent = data.table_number;
      document.getElementById('docketChef').textContent = data.staff_name;
      document.getElementById('docketPaymentMethod').textContent = data.payment_method.toUpperCase();
      document.getElementById('docketTotalAmount').textContent = '₦' + numberFormat(data.total_amount);

      const tbody = document.getElementById('docketItemsBody');
      tbody.innerHTML = '';
      data.items.forEach(it => {
        const tr = document.createElement('tr');
        tr.innerHTML = `
          <td>${it.name}</td>
          <td style="text-align:center;">${it.qty}</td>
          <td style="text-align:right;">₦${numberFormat(it.price)}</td>
          <td style="text-align:right;">₦${numberFormat(it.total)}</td>
        `;
        tbody.appendChild(tr);
      });

      const docket = document.getElementById('kitchenReceiptDocket');
      docket.style.display = 'block';
      window.print();
      docket.style.display = 'none';
    }

    /* RESTOCK FUNCTIONS */
    function populateRestockSelect() {
      const sel = document.getElementById('restockDishSelect');
      sel.innerHTML = '';
      products.forEach(p => {
        const opt = document.createElement('option');
        opt.value = p.id;
        opt.textContent = p.name + ' (' + formatCategory(p.category) + ')';
        sel.appendChild(opt);
      });
      updateRestockDishDetails();
    }

    function updateRestockDishDetails() {
      const sel = document.getElementById('restockDishSelect');
      const prod = products.find(p => p.id == sel.value);
      if (prod) {
        document.getElementById('restockCurrentStock').textContent = prod.current_stock + ' portions';
        document.getElementById('restockUnitPrice').textContent = '₦' + numberFormat(prod.price);
      }
    }

    function selectRestockAction(action) {
      selectedRestockAction = action;
      document.querySelectorAll('#restockActionGrid .restock-action-card').forEach(c => {
        c.classList.remove('active');
        if (c.getAttribute('data-action') === action) c.classList.add('active');
      });

      const lbl = document.getElementById('restockQtyLabel');
      if (action === 'restock') {
        lbl.textContent = 'Quantity of Portions to Add *';
      } else if (action === 'spoilage') {
        lbl.textContent = 'Quantity of Spoiled / Wasted Portions to Deduct *';
      } else {
        lbl.textContent = 'Exact Number of Available Portions (Admin) *';
      }
    }

    function submitRestock() {
      const prodId = document.getElementById('restockDishSelect').value;
      const qty = parseInt(document.getElementById('restockQtyInput').value);

      if (isNaN(qty) || qty <= 0) {
        alert('Please enter a valid quantity.');
        return;
      }

      const fd = new FormData();
      fd.append('action', 'kc_kitchen_update_stock');
      fd.append('token', sessionToken);
      fd.append('product_id', prodId);
      fd.append('action_type', selectedRestockAction);
      fd.append('qty', qty);

      fetch(AJAX_URL, { method: 'POST', body: fd })
        .then(r => r.json())
        .then(res => {
          if (res.success) {
            alert(res.data.message);
            closeModal('restockModal');
            document.getElementById('restockQtyInput').value = '';
            loadPosData();
          } else {
            alert('Restock Error: ' + (res.data ? res.data.message : 'Permission denied'));
            if (res.data && res.data.require_admin) {
              openAdminUnlockModal();
            }
          }
        });
    }

    /* DAILY RECONCILIATION SHEET */
    function openLedgerModal() {
      const fd = new FormData();
      fd.append('action', 'kc_kitchen_get_daily_sheet');
      fd.append('token', sessionToken);

      fetch(AJAX_URL, { method: 'POST', body: fd })
        .then(r => r.json())
        .then(res => {
          if (res.success) {
            document.getElementById('sheetDateLabel').textContent = res.data.date;
            document.getElementById('sheetTotalDishesSold').textContent = res.data.total_dishes_sold;
            document.getElementById('sheetGrandRevenue').textContent = '₦' + numberFormat(res.data.grand_total_amount);

            const tbody = document.getElementById('dailySheetTableBody');
            tbody.innerHTML = '';
            res.data.items.forEach(it => {
              const tr = document.createElement('tr');
              tr.innerHTML = `
                <td><strong>${it.name}</strong></td>
                <td>${formatCategory(it.category)}</td>
                <td>₦${numberFormat(it.price)}</td>
                <td>${it.opening_stock}</td>
                <td>${it.new_stock}</td>
                <td><strong>${it.total_stock}</strong></td>
                <td style="color:#34d399; font-weight:bold;">${it.qty_sold}</td>
                <td style="color:#f87171;">${it.breakage}</td>
                <td><strong>${it.closing_stock}</strong></td>
                <td style="font-family:'JetBrains Mono', monospace; font-weight:bold;">₦${numberFormat(it.amount)}</td>
              `;
              tbody.appendChild(tr);
            });

            openModal('ledgerModal');
          }
        });
    }

    function resetKitchenDay() {
      if (!confirm('Are you sure you want to ARCHIVE today\'s kitchen sheet and ROLLOVER closing stock to tomorrow\'s opening stock? This is an irreversible daily reset.')) return;

      const fd = new FormData();
      fd.append('action', 'kc_kitchen_reset_day');
      fd.append('token', sessionToken);

      fetch(AJAX_URL, { method: 'POST', body: fd })
        .then(r => r.json())
        .then(res => {
          if (res.success) {
            alert(res.data.message);
            closeModal('ledgerModal');
            loadPosData();
          } else {
            alert(res.data ? res.data.message : 'Failed to reset day.');
          }
        });
    }

    function printDailySheet() {
      window.print();
    }

    /* SHIFT HANDOVER */
    function openShiftModal() {
      const fd = new FormData();
      fd.append('action', 'kc_kitchen_get_active_shift');
      fd.append('token', sessionToken);

      fetch(AJAX_URL, { method: 'POST', body: fd })
        .then(r => r.json())
        .then(res => {
          if (res.success) {
            document.getElementById('shiftCodeTitle').textContent = res.data.shift_code;
            document.getElementById('shiftTotalSalesVal').textContent = '₦' + numberFormat(res.data.total_sales);
            document.getElementById('shiftTotalDishesVal').textContent = res.data.total_dishes_sold;
            document.getElementById('shiftPosSalesVal').textContent = '₦' + numberFormat(res.data.pos_sales);
            document.getElementById('shiftCashSalesVal').textContent = '₦' + numberFormat(res.data.cash_sales);
            openModal('shiftModal');
          }
        });
    }

    function submitCloseShift() {
      const outStaff = document.getElementById('shiftOutgoingStaff').value.trim();
      const inStaff = document.getElementById('shiftIncomingStaff').value.trim();
      const notes = document.getElementById('shiftNotes').value.trim();

      if (!inStaff) {
        alert('Please enter the name of the incoming chef taking over.');
        return;
      }

      const fd = new FormData();
      fd.append('action', 'kc_kitchen_close_shift');
      fd.append('token', sessionToken);
      fd.append('outgoing_staff', outStaff);
      fd.append('incoming_staff', inStaff);
      fd.append('notes', notes);

      fetch(AJAX_URL, { method: 'POST', body: fd })
        .then(r => r.json())
        .then(res => {
          if (res.success) {
            alert(res.data.message);
            closeModal('shiftModal');
            loadPosData();
          } else {
            alert(res.data ? res.data.message : 'Error closing shift.');
          }
        });
    }

    function openShiftHistoryModal() {
      const fd = new FormData();
      fd.append('action', 'kc_kitchen_get_shift_history');
      fd.append('token', sessionToken);

      fetch(AJAX_URL, { method: 'POST', body: fd })
        .then(r => r.json())
        .then(res => {
          if (res.success) {
            const tbody = document.getElementById('shiftHistoryTableBody');
            tbody.innerHTML = '';
            res.data.forEach(s => {
              const tr = document.createElement('tr');
              tr.innerHTML = `
                <td><strong>${s.shift_code}</strong></td>
                <td>${s.staff_name}</td>
                <td>${s.incoming_staff || '—'}</td>
                <td>${s.total_orders}</td>
                <td>₦${numberFormat(s.total_sales)}</td>
                <td><span class="pos-badge">${s.status}</span></td>
                <td>${s.end_time || s.start_time}</td>
              `;
              tbody.appendChild(tr);
            });
            openModal('shiftHistoryModal');
          }
        });
    }

    /* MONTHLY REPORT */
    function openMonthlyReportModal() {
      if (currentRole !== 'admin') {
        openAdminUnlockModal();
        return;
      }
      loadMonthlyReport();
      openModal('monthlyReportModal');
    }

    function loadMonthlyReport() {
      const m = document.getElementById('monthlySelect').value;
      const fd = new FormData();
      fd.append('action', 'kc_kitchen_get_monthly_report');
      fd.append('token', sessionToken);
      fd.append('month', m);

      fetch(AJAX_URL, { method: 'POST', body: fd })
        .then(r => r.json())
        .then(res => {
          if (res.success) {
            document.getElementById('monthlyRevenueVal').textContent = '₦' + numberFormat(res.data.total_revenue);
            document.getElementById('monthlyOrdersVal').textContent = res.data.total_orders;

            const pt = res.data.payment_totals;
            document.getElementById('monthlyPaymentBreakdown').innerHTML = `
              POS: ₦${numberFormat(pt.pos || 0)} &bull; Cash: ₦${numberFormat(pt.cash || 0)}<br>
              Transfer: ₦${numberFormat(pt.transfer || 0)} &bull; Room: ₦${numberFormat(pt.room || 0)}
            `;

            const topGrid = document.getElementById('monthlyTopDishes');
            topGrid.innerHTML = '';
            for (const [dish, count] of Object.entries(res.data.dish_quantities || {})) {
              const div = document.createElement('div');
              div.style = 'background:#162032; padding:0.5rem 0.75rem; border-radius:6px; font-size:0.8rem; display:flex; justify-content:space-between;';
              div.innerHTML = `<span>${dish}</span> <strong style="color:#f59e0b;">${count} portions</strong>`;
              topGrid.appendChild(div);
            }
          }
        });
    }

    /* ADD DISH (ADMIN) */
    function openAddDishModal() {
      if (currentRole !== 'admin') {
        openAdminUnlockModal();
        return;
      }
      openModal('addDishModal');
    }

    function submitAddDish() {
      const name = document.getElementById('newDishName').value.trim();
      const cat = document.getElementById('newDishCategory').value;
      const price = parseFloat(document.getElementById('newDishPrice').value);
      const stock = parseInt(document.getElementById('newDishOpeningStock').value);

      if (!name || isNaN(price) || price <= 0) {
        alert('Please enter a valid dish name and price.');
        return;
      }

      const fd = new FormData();
      fd.append('action', 'kc_kitchen_add_product');
      fd.append('token', sessionToken);
      fd.append('name', name);
      fd.append('category', cat);
      fd.append('price', price);
      fd.append('opening_stock', stock || 10);

      fetch(AJAX_URL, { method: 'POST', body: fd })
        .then(r => r.json())
        .then(res => {
          if (res.success) {
            alert(res.data.message);
            closeModal('addDishModal');
            document.getElementById('newDishName').value = '';
            document.getElementById('newDishPrice').value = '';
            loadPosData();
          } else {
            alert(res.data ? res.data.message : 'Error adding dish.');
          }
        });
    }

    /* ORDERS MODAL */
    function openOrdersModal() {
      const fd = new FormData();
      fd.append('action', 'kc_kitchen_get_monthly_report');
      fd.append('token', sessionToken);
      fd.append('month', new Date().toISOString().slice(0, 7));

      fetch(AJAX_URL, { method: 'POST', body: fd })
        .then(r => r.json())
        .then(res => {
          if (res.success) {
            const tbody = document.getElementById('ordersTableBody');
            tbody.innerHTML = '';
            res.data.orders.forEach(o => {
              const items = JSON.parse(o.items_json || '[]');
              const itemSummary = items.map(i => i.qty + 'x ' + i.name).join(', ');
              const tr = document.createElement('tr');
              tr.innerHTML = `
                <td><strong>${o.receipt_no}</strong></td>
                <td>${o.customer_name} (${o.table_number})</td>
                <td style="max-width:250px; overflow:hidden; text-overflow:ellipsis; white-space:nowrap;" title="${itemSummary}">${itemSummary}</td>
                <td style="color:#f59e0b; font-weight:bold; font-family:'JetBrains Mono', monospace;">₦${numberFormat(o.total_amount)}</td>
                <td><span class="pos-badge">${o.payment_method.toUpperCase()}</span></td>
                <td>${o.staff_name}</td>
                <td>${o.created_at}</td>
              `;
              tbody.appendChild(tr);
            });
            openModal('ordersModal');
          }
        });
    }

    /* ADMIN PIN AUTHORIZATION (1122) */
    function openAdminUnlockModal() {
      document.getElementById('adminPinInput').value = '';
      openModal('adminUnlockModal');
      document.getElementById('adminPinInput').focus();
    }

    function submitAdminUnlock() {
      const pin = document.getElementById('adminPinInput').value.trim();
      if (!pin) return;

      const fd = new FormData();
      fd.append('action', 'kc_kitchen_verify_pin');
      fd.append('pin', pin);

      fetch(AJAX_URL, { method: 'POST', body: fd })
        .then(r => r.json())
        .then(res => {
          if (res.success) {
            sessionToken = res.data.token;
            currentRole = res.data.role;
            sessionStorage.setItem('kc_kitchen_token', sessionToken);
            sessionStorage.setItem('kc_kitchen_role', currentRole);
            updateRoleUI();
            closeModal('adminUnlockModal');
            alert(res.data.message);
            loadPosData();
          } else {
            alert('Invalid PIN. Access Denied.');
          }
        });
    }

    /* MODAL HELPERS */
    function openModal(id) {
      document.getElementById(id).classList.add('open');
    }
    function closeModal(id) {
      document.getElementById(id).classList.remove('open');
    }

    function numberFormat(num) {
      return Number(num).toLocaleString('en-US');
    }
  </script>
</body>
</html>
