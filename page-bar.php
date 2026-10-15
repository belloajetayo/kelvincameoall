<?php
/**
 * Template Name: Bar POS & Beverage Inventory System
 * Template Post Type: page
 *
 * Kelvin Cameo Resort Hotel & Lounge - Bar Management & POS System
 * Official RC: 1613032
 * Access Levels: Admin PIN (1122) | Staff PIN (1613)
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
  <title>Bar POS &amp; Inventory | Kelvin Cameo Resort (RC 1613032)</title>
  
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&family=JetBrains+Mono:wght@500;700;800&display=swap" rel="stylesheet">
  
  <style>
    :root {
      --kc-navy-950: #040914;
      --kc-navy-900: #060e1e;
      --kc-navy-800: #0b1a36;
      --kc-navy-700: #122852;
      --kc-gold-500: #d4af37;
      --kc-gold-600: #b89327;
      --kc-gold-100: #fef9e7;
      --kc-amber-500: #f59e0b;
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
      width: 40px;
      height: 40px;
      border-radius: 10px;
      background: linear-gradient(135deg, #d4af37, #b89327);
      color: #060e1e;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 1.3rem;
      font-weight: 800;
    }
    .brand-text h1 {
      font-size: 1.15rem;
      font-weight: 800;
      color: #fff;
      display: flex;
      align-items: center;
      gap: 0.5rem;
    }
    .brand-text h1 span.rc-tag {
      background: rgba(212,175,55,0.18);
      color: #d4af37;
      font-size: 0.65rem;
      padding: 0.15rem 0.45rem;
      border-radius: 4px;
      font-weight: 700;
      border: 1px solid rgba(212,175,55,0.3);
    }
    .brand-text p {
      font-size: 0.75rem;
      color: #94a3b8;
    }

    .pos-top-actions {
      display: flex;
      align-items: center;
      gap: 0.6rem;
      flex-wrap: wrap;
    }

    /* Role Badge */
    .role-badge {
      padding: 0.35rem 0.75rem;
      border-radius: 9999px;
      font-size: 0.78rem;
      font-weight: 800;
      display: flex;
      align-items: center;
      gap: 0.4rem;
      cursor: pointer;
      transition: all 0.2s;
    }
    .role-badge.staff {
      background: #1e293b;
      color: #38bdf8;
      border: 1px solid #0284c7;
    }
    .role-badge.admin {
      background: rgba(212,175,55,0.2);
      color: #d4af37;
      border: 1px solid #d4af37;
      box-shadow: 0 0 10px rgba(212,175,55,0.25);
    }

    .staff-badge {
      background: #1e293b;
      border: 1px solid #334155;
      padding: 0.4rem 0.75rem;
      border-radius: 9999px;
      display: flex;
      align-items: center;
      gap: 0.4rem;
      font-size: 0.82rem;
      color: #e2e8f0;
      cursor: pointer;
    }
    .staff-badge .status-dot {
      width: 8px;
      height: 8px;
      background: #10b981;
      border-radius: 50%;
      box-shadow: 0 0 8px #10b981;
    }

    .nav-btn {
      background: #1e293b;
      color: #e2e8f0;
      border: 1px solid #334155;
      padding: 0.45rem 0.75rem;
      border-radius: 8px;
      font-size: 0.82rem;
      font-weight: 700;
      cursor: pointer;
      display: inline-flex;
      align-items: center;
      gap: 0.35rem;
      transition: all 0.2s;
    }
    .nav-btn:hover {
      background: #334155;
      color: #fff;
    }
    .nav-btn.primary {
      background: linear-gradient(135deg, #d4af37, #b89327);
      color: #060e1e;
      border: none;
      font-weight: 800;
    }
    .nav-btn.accent {
      background: linear-gradient(135deg, #0284c7, #0369a1);
      color: #fff;
      border: none;
      font-weight: 700;
    }

    /* MAIN CONTAINER */
    .pos-layout {
      flex: 1;
      display: flex;
      overflow: hidden;
      position: relative;
    }

    /* LEFT CATALOG PANE */
    .pos-catalog-pane {
      flex: 1;
      display: flex;
      flex-direction: column;
      overflow: hidden;
      background: #090e1a;
      border-right: 1px solid #1e293b;
    }

    .category-pills-bar {
      padding: 0.85rem 1.25rem 0.4rem;
      display: flex;
      gap: 0.6rem;
      flex-wrap: wrap;
      align-items: center;
      background: #060a14;
    }
    .cat-btn {
      background: #1e293b;
      color: #94a3b8;
      border: 1px solid #334155;
      padding: 0.5rem 0.9rem;
      border-radius: 9999px;
      font-size: 0.82rem;
      font-weight: 700;
      cursor: pointer;
      display: flex;
      align-items: center;
      gap: 0.35rem;
      transition: all 0.2s;
    }
    .cat-btn:hover { background: #334155; color: #fff; }
    .cat-btn.active {
      background: #d4af37;
      color: #060e1e;
      border-color: #d4af37;
      box-shadow: 0 0 15px rgba(212,175,55,0.3);
    }
    .cat-btn .badge {
      background: rgba(0,0,0,0.25);
      padding: 0.1rem 0.4rem;
      border-radius: 9999px;
      font-size: 0.7rem;
    }

    .catalog-search-row {
      padding: 0.4rem 1.25rem 0.85rem;
      background: #060a14;
      display: flex;
      gap: 0.75rem;
      border-bottom: 1px solid #1e293b;
    }
    .search-input-wrap {
      flex: 1;
      position: relative;
    }
    .search-input-wrap input {
      width: 100%;
      background: #0f172a;
      border: 1px solid #334155;
      color: #fff;
      padding: 0.6rem 1rem 0.6rem 2.4rem;
      border-radius: 10px;
      font-size: 0.9rem;
      outline: none;
    }
    .search-input-wrap input:focus { border-color: #d4af37; }
    .search-input-wrap svg {
      position: absolute;
      left: 0.85rem;
      top: 50%;
      transform: translateY(-50%);
      color: #64748b;
    }

    .products-grid-scroll {
      flex: 1;
      overflow-y: auto;
      padding: 1.25rem;
    }
    .products-grid {
      display: grid;
      grid-template-columns: repeat(auto-fill, minmax(185px, 1fr));
      gap: 1rem;
    }
    .product-card {
      background: #0f172a;
      border: 1px solid #1e293b;
      border-radius: 14px;
      padding: 0.95rem;
      cursor: pointer;
      display: flex;
      flex-direction: column;
      justify-content: space-between;
      min-height: 125px;
      transition: all 0.2s ease;
      position: relative;
    }
    .product-card:hover {
      border-color: #d4af37;
      transform: translateY(-2px);
      box-shadow: 0 8px 20px rgba(0,0,0,0.4);
    }
    .product-card:active { transform: scale(0.97); }
    .product-card.out-of-stock {
      opacity: 0.45;
      filter: grayscale(0.8);
      cursor: not-allowed;
    }
    .prod-cat-tag {
      font-size: 0.65rem;
      text-transform: uppercase;
      font-weight: 800;
      letter-spacing: 0.05em;
      margin-bottom: 0.25rem;
    }
    .prod-cat-tag.wine { color: #f43f5e; }
    .prod-cat-tag.beer { color: #f59e0b; }
    .prod-cat-tag.drinks { color: #38bdf8; }

    .product-title {
      font-size: 0.95rem;
      font-weight: 700;
      color: #f8fafc;
      line-height: 1.3;
      margin-bottom: 0.5rem;
    }
    .product-footer {
      display: flex;
      align-items: flex-end;
      justify-content: space-between;
      margin-top: auto;
      padding-top: 0.5rem;
      border-top: 1px dashed rgba(255,255,255,0.08);
    }
    .product-price {
      font-size: 1.05rem;
      font-weight: 800;
      color: #d4af37;
      font-family: 'JetBrains Mono', monospace;
    }
    .product-stock {
      font-size: 0.72rem;
      font-weight: 700;
      padding: 0.2rem 0.5rem;
      border-radius: 6px;
      background: #1e293b;
      color: #94a3b8;
    }
    .product-stock.ok { background: rgba(16,185,129,0.15); color: #10b981; }
    .product-stock.low { background: rgba(245,158,11,0.15); color: #f59e0b; }
    .product-stock.empty { background: rgba(239,68,68,0.15); color: #ef4444; }

    /* RIGHT: CART PANE */
    .pos-cart-pane {
      width: 420px;
      background: #060a14;
      display: flex;
      flex-direction: column;
      flex-shrink: 0;
    }
    .cart-header {
      padding: 1rem 1.25rem;
      border-bottom: 1px solid #1e293b;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }
    .cart-header h2 {
      font-size: 1.1rem;
      font-weight: 800;
      color: #fff;
      display: flex;
      align-items: center;
      gap: 0.5rem;
    }
    .cart-count-badge {
      background: #d4af37;
      color: #060e1e;
      font-size: 0.75rem;
      padding: 0.15rem 0.55rem;
      border-radius: 9999px;
      font-weight: 800;
    }
    .clear-cart-btn {
      background: none;
      border: none;
      color: #64748b;
      font-size: 0.8rem;
      cursor: pointer;
      font-weight: 600;
    }
    .clear-cart-btn:hover { color: #ef4444; }

    .cart-meta-bar {
      padding: 0.75rem 1.25rem;
      background: #0b1120;
      border-bottom: 1px solid #1e293b;
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 0.75rem;
    }
    .cart-meta-select {
      width: 100%;
      background: #0f172a;
      border: 1px solid #334155;
      color: #fff;
      padding: 0.45rem 0.65rem;
      border-radius: 8px;
      font-size: 0.8rem;
      outline: none;
    }

    .cart-items-scroll {
      flex: 1;
      overflow-y: auto;
      padding: 0.75rem 1.25rem;
      display: flex;
      flex-direction: column;
      gap: 0.6rem;
    }
    .empty-cart-state {
      height: 100%;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      color: #64748b;
      text-align: center;
      padding: 2rem;
    }
    .empty-cart-state svg {
      width: 48px;
      height: 48px;
      margin-bottom: 1rem;
      opacity: 0.4;
    }

    .cart-item-row {
      background: #0f172a;
      border: 1px solid #1e293b;
      border-radius: 10px;
      padding: 0.75rem;
      display: flex;
      align-items: center;
      justify-content: space-between;
      gap: 0.75rem;
    }
    .cart-item-info { flex: 1; min-width: 0; }
    .cart-item-name {
      font-size: 0.9rem;
      font-weight: 700;
      color: #f8fafc;
      white-space: nowrap;
      overflow: hidden;
      text-overflow: ellipsis;
    }
    .cart-item-sub {
      font-size: 0.75rem;
      color: #94a3b8;
      font-family: 'JetBrains Mono', monospace;
    }
    .cart-item-qty {
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
      color: #fff;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 0.9rem;
      font-weight: 700;
      cursor: pointer;
    }
    .qty-btn:hover { background: #334155; }
    .qty-val {
      min-width: 22px;
      text-align: center;
      font-weight: 800;
      font-family: 'JetBrains Mono', monospace;
      font-size: 0.9rem;
    }
    .cart-item-total {
      font-weight: 800;
      color: #d4af37;
      font-family: 'JetBrains Mono', monospace;
      font-size: 0.95rem;
      min-width: 75px;
      text-align: right;
    }
    .cart-item-del {
      background: none;
      border: none;
      color: #64748b;
      cursor: pointer;
      padding: 0.2rem;
    }
    .cart-item-del:hover { color: #ef4444; }

    .cart-footer {
      padding: 1.25rem;
      background: #090e1a;
      border-top: 1px solid #1e293b;
      display: flex;
      flex-direction: column;
      gap: 1rem;
    }
    .cart-total-row {
      display: flex;
      justify-content: space-between;
      align-items: flex-end;
    }
    .cart-total-label {
      font-size: 0.85rem;
      color: #94a3b8;
      font-weight: 600;
      text-transform: uppercase;
      letter-spacing: 0.05em;
    }
    .cart-total-amount {
      font-size: 1.85rem;
      font-weight: 800;
      color: #d4af37;
      font-family: 'JetBrains Mono', monospace;
    }

    .pay-methods-grid {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 0.5rem;
    }
    .pay-method-btn {
      background: #0f172a;
      border: 1px solid #334155;
      padding: 0.6rem 0.25rem;
      border-radius: 8px;
      color: #94a3b8;
      font-size: 0.78rem;
      font-weight: 700;
      cursor: pointer;
      display: flex;
      flex-direction: column;
      align-items: center;
      gap: 0.35rem;
      text-align: center;
    }
    .pay-method-btn.active {
      background: rgba(212,175,55,0.15);
      border-color: #d4af37;
      color: #d4af37;
    }

    .checkout-actions { display: flex; gap: 0.6rem; }
    .btn-checkout {
      flex: 1;
      background: linear-gradient(135deg, #10b981, #059669);
      color: #fff;
      border: none;
      padding: 0.85rem;
      border-radius: 10px;
      font-size: 1rem;
      font-weight: 800;
      cursor: pointer;
      display: flex;
      align-items: center;
      justify-content: center;
      gap: 0.5rem;
      box-shadow: 0 4px 15px rgba(16,185,129,0.3);
      transition: all 0.2s;
    }
    .btn-checkout:hover { filter: brightness(1.1); transform: translateY(-1px); }
    .btn-checkout:disabled { opacity: 0.5; cursor: not-allowed; transform: none; }

    /* MODALS */
    .pos-modal-overlay {
      position: fixed;
      inset: 0;
      background: rgba(0,0,0,0.85);
      backdrop-filter: blur(6px);
      z-index: 1000;
      display: none;
      align-items: center;
      justify-content: center;
      padding: 1.5rem;
    }
    .pos-modal {
      background: #0f172a;
      border: 1px solid #334155;
      border-radius: 18px;
      width: 100%;
      max-width: 620px;
      max-height: 90vh;
      display: flex;
      flex-direction: column;
      overflow: hidden;
      box-shadow: 0 25px 50px -12px rgba(0,0,0,0.7);
    }
    .pos-modal.wide { max-width: 980px; }
    .modal-head {
      padding: 1.15rem 1.5rem;
      border-bottom: 1px solid #1e293b;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }
    .modal-head h3 { font-size: 1.2rem; font-weight: 800; color: #fff; }
    .modal-close {
      background: none;
      border: none;
      color: #94a3b8;
      font-size: 1.4rem;
      cursor: pointer;
    }
    .modal-body { padding: 1.5rem; overflow-y: auto; flex: 1; }
    .modal-foot {
      padding: 1rem 1.5rem;
      border-top: 1px solid #1e293b;
      display: flex;
      justify-content: flex-end;
      gap: 0.75rem;
    }

    /* PIN LOCK SCREEN */
    #pinLockOverlay {
      display: flex;
      position: fixed;
      inset: 0;
      background: #060a14;
      z-index: 2000;
      align-items: center;
      justify-content: center;
    }
    .pin-card {
      background: #0f172a;
      border: 1px solid #334155;
      padding: 2.5rem 2rem;
      border-radius: 20px;
      width: 100%;
      max-width: 380px;
      text-align: center;
      box-shadow: 0 20px 40px rgba(0,0,0,0.6);
    }
    .pin-dots {
      display: flex;
      justify-content: center;
      gap: 0.85rem;
      margin: 1.75rem 0;
    }
    .pin-dot {
      width: 16px;
      height: 16px;
      border-radius: 50%;
      border: 2px solid #334155;
      transition: all 0.2s;
    }
    .pin-dot.filled {
      background: #d4af37;
      border-color: #d4af37;
      box-shadow: 0 0 10px #d4af37;
    }
    .pin-pad {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 0.75rem;
    }
    .pin-key {
      background: #1e293b;
      border: 1px solid #334155;
      color: #fff;
      font-size: 1.35rem;
      font-weight: 700;
      padding: 1rem 0;
      border-radius: 12px;
      cursor: pointer;
      transition: background 0.15s;
    }
    .pin-key:active { background: #d4af37; color: #060e1e; }

    /* TABLES */
    .ledger-table-wrap { overflow-x: auto; }
    .ledger-table {
      width: 100%;
      border-collapse: collapse;
      font-size: 0.85rem;
    }
    .ledger-table th, .ledger-table td {
      padding: 0.65rem 0.75rem;
      border: 1px solid #334155;
      text-align: center;
    }
    .ledger-table th {
      background: #1e293b;
      color: #d4af37;
      font-weight: 700;
      font-size: 0.8rem;
    }
    .ledger-table td:nth-child(2) {
      text-align: left;
      font-weight: 600;
      color: #fff;
    }
    .ledger-table tr:hover { background: rgba(255,255,255,0.03); }
    .ledger-table tfoot td {
      background: #1e293b;
      font-weight: 800;
      color: #d4af37;
    }

    /* THERMAL RECEIPT & MONTHLY REPORT PRINTING */
    #thermalReceiptArea, #printableMonthlyArea {
      display: none;
    }

    @media print {
      body * { visibility: hidden; }
      
      /* Mode 1: Thermal Receipt */
      body.printing-receipt #thermalReceiptArea,
      body.printing-receipt #thermalReceiptArea * {
        visibility: visible;
      }
      body.printing-receipt #thermalReceiptArea {
        display: block !important;
        position: absolute;
        left: 0;
        top: 0;
        width: 80mm;
        margin: 0;
        padding: 4mm;
        font-family: 'JetBrains Mono', monospace;
        font-size: 11px;
        line-height: 1.35;
        color: #000 !important;
        background: #fff !important;
      }

      /* Mode 2: Full Monthly A4 Report */
      body.printing-monthly #printableMonthlyArea,
      body.printing-monthly #printableMonthlyArea * {
        visibility: visible;
      }
      body.printing-monthly #printableMonthlyArea {
        display: block !important;
        position: absolute;
        left: 0;
        top: 0;
        width: 100%;
        margin: 0;
        padding: 15mm;
        font-family: 'Plus Jakarta Sans', sans-serif;
        color: #000 !important;
        background: #fff !important;
      }
      @page {
        margin: 10mm;
      }
    }

    .receipt-center { text-align: center; }
    .receipt-row { display: flex; justify-content: space-between; }
    .receipt-divider { border-top: 1px dashed #000; margin: 4px 0; }
    .receipt-double-divider { border-top: 2px solid #000; margin: 5px 0; }

    /* TOAST */
    #posToast {
      position: fixed;
      bottom: 2rem;
      left: 50%;
      transform: translateX(-50%) translateY(100px);
      background: #10b981;
      color: #fff;
      padding: 0.75rem 1.5rem;
      border-radius: 9999px;
      font-weight: 700;
      font-size: 0.9rem;
      box-shadow: 0 10px 25px rgba(0,0,0,0.5);
      z-index: 3000;
      opacity: 0;
      transition: all 0.3s cubic-bezier(0.16, 1, 0.3, 1);
    }
    #posToast.show { transform: translateX(-50%) translateY(0); opacity: 1; }
    #posToast.error { background: #ef4444; }

    @media (max-width: 900px) {
      .pos-layout { flex-direction: column; overflow-y: auto; }
      .pos-cart-pane { width: 100%; border-left: none; border-top: 1px solid #1e293b; max-height: 50vh; }
    }
  </style>
</head>
<body>

  <!-- ==============================================================
       PIN LOCK / LOGIN SCREEN
       ============================================================== -->
  <div id="pinLockOverlay">
    <div class="pin-card">
      <div class="brand-icon" style="margin: 0 auto 1rem; width: 48px; height: 48px;">KC</div>
      <h2 style="font-size: 1.3rem; font-weight:800; color:#fff;">Bar &amp; Lounge POS</h2>
      <p style="font-size:0.8rem; color:#94a3b8; margin-top:0.25rem;">
        Authorized Staff &amp; Management Only &bull; Enter 4-Digit Security PIN
      </p>
      
      <div class="pin-dots" id="pinDots">
        <div class="pin-dot"></div>
        <div class="pin-dot"></div>
        <div class="pin-dot"></div>
        <div class="pin-dot"></div>
      </div>

      <div class="pin-pad">
        <button type="button" class="pin-key" data-digit="1">1</button>
        <button type="button" class="pin-key" data-digit="2">2</button>
        <button type="button" class="pin-key" data-digit="3">3</button>
        <button type="button" class="pin-key" data-digit="4">4</button>
        <button type="button" class="pin-key" data-digit="5">5</button>
        <button type="button" class="pin-key" data-digit="6">6</button>
        <button type="button" class="pin-key" data-digit="7">7</button>
        <button type="button" class="pin-key" data-digit="8">8</button>
        <button type="button" class="pin-key" data-digit="9">9</button>
        <button type="button" class="pin-key" id="pinClearBtn" style="font-size:0.9rem;">CLEAR</button>
        <button type="button" class="pin-key" data-digit="0">0</button>
        <button type="button" class="pin-key" id="pinBackBtn" style="font-size:0.9rem;">⌫</button>
      </div>

      <div style="margin-top: 1.5rem;">
        <a href="<?php echo esc_url($site_home); ?>" style="color:#64748b; font-size:0.8rem; text-decoration:none;">&larr; Return to Kelvin Cameo Main Site</a>
      </div>
    </div>
  </div>

  <!-- ==============================================================
       TOP BAR
       ============================================================== -->
  <header class="pos-header">
    <div class="pos-brand">
      <div class="brand-icon">🍸</div>
      <div class="brand-text">
        <h1>
          Kelvin Cameo Bar &amp; Lounge
          <span class="rc-tag">RC: 1613032</span>
        </h1>
        <p>Beverage Inventory &amp; Thermal POS Terminal</p>
      </div>
    </div>

    <div class="pos-top-actions">
      <!-- Active Role Badge with Quick Unlock -->
      <div class="role-badge staff" id="roleBadgeBtn" title="Click to Switch / Unlock Admin (PIN: 1122)">
        <span id="roleIcon">🛡️</span>
        <span id="roleLabel">Staff (Cashier)</span>
      </div>

      <!-- Staff on duty -->
      <div class="staff-badge" id="staffBadgeBtn" title="Click to change staff name">
        <span class="status-dot"></span>
        <span>Staff: <strong id="currentStaffNameDisplay">Bar Staff</strong></span>
      </div>

      <!-- Monthly Report Button -->
      <button type="button" class="nav-btn accent" id="openMonthlyReportBtn">
        <span>📊 Monthly Report</span>
      </button>

      <!-- Daily Stock Sheet -->
      <button type="button" class="nav-btn" id="openLedgerBtn">
        <span>📋 Daily Sheet</span>
      </button>

      <!-- Restock / Spoilage Button -->
      <button type="button" class="nav-btn" id="openRestockBtn">
        <span>📦 Restock / Spill</span>
      </button>

      <!-- Orders History -->
      <button type="button" class="nav-btn" id="openOrdersBtn">
        <span>🧾 Orders</span>
      </button>

      <!-- Lock Screen -->
      <button type="button" class="nav-btn" id="lockPosBtn" title="Lock POS">
        <span>🔒 Lock</span>
      </button>
    </div>
  </header>

  <!-- ==============================================================
       MAIN WORKSPACE
       ============================================================== -->
  <main class="pos-layout">
    
    <!-- LEFT: CATALOG -->
    <section class="pos-catalog-pane">
      
      <!-- Category Pills -->
      <div class="category-pills-bar" id="categoryBar">
        <button type="button" class="cat-btn active" data-category="all">
          <span>⚡ All Drinks</span>
          <span class="badge" id="badgeAll">0</span>
        </button>
        <button type="button" class="cat-btn" data-category="wine">
          <span>🍷 Wine &amp; Spirits</span>
          <span class="badge" id="badgeWine">35</span>
        </button>
        <button type="button" class="cat-btn" data-category="beer">
          <span>🍺 Beer &amp; Bitters</span>
          <span class="badge" id="badgeBeer">15</span>
        </button>
        <button type="button" class="cat-btn" data-category="drinks">
          <span>🥤 Drinks &amp; Refreshments</span>
          <span class="badge" id="badgeDrinks">21</span>
        </button>
      </div>

      <!-- Search Row -->
      <div class="catalog-search-row">
        <div class="search-input-wrap">
          <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>
          <input type="text" id="productSearchInput" placeholder="Quick search drink by name (e.g. Heineken, Hennessy, Monster, Schweppes)...">
        </div>
        <button type="button" class="nav-btn primary" id="openAddDrinkModalBtn" style="flex-shrink:0;">
          <span>+ Add Drink (Admin)</span>
        </button>
      </div>

      <!-- Products Grid -->
      <div class="products-grid-scroll">
        <div class="products-grid" id="productsGrid">
          <!-- Populated by JavaScript -->
        </div>
      </div>

    </section>

    <!-- RIGHT: CART & CHECKOUT -->
    <aside class="pos-cart-pane">
      
      <div class="cart-header">
        <h2>
          <span>Current Order</span>
          <span class="cart-count-badge" id="cartCountBadge">0</span>
        </h2>
        <button type="button" class="clear-cart-btn" id="clearCartBtn">Clear All</button>
      </div>

      <div class="cart-meta-bar">
        <div>
          <label style="font-size:0.7rem; color:#94a3b8; display:block; margin-bottom:0.25rem;">Location / Table</label>
          <select id="cartTableSelect" class="cart-meta-select">
            <option value="Bar Counter">Bar Counter</option>
            <option value="Poolside Terrace">Poolside Terrace</option>
            <option value="VIP Sports Lounge">VIP Sports Lounge</option>
            <option value="Executive Bush Bar">Executive Bush Bar</option>
            <option value="Banquets Hall">Banquets Hall</option>
            <option value="Table 1">Table 1</option>
            <option value="Table 2">Table 2</option>
            <option value="Table 3">Table 3</option>
            <option value="Table 4">Table 4</option>
            <option value="Table 5">Table 5</option>
            <option value="Hotel Room">Hotel Room Service</option>
          </select>
        </div>
        <div id="roomNumWrapper">
          <label style="font-size:0.7rem; color:#94a3b8; display:block; margin-bottom:0.25rem;">Room # (Optional)</label>
          <input type="text" id="cartRoomInput" class="cart-meta-select" placeholder="e.g. Room 102">
        </div>
      </div>

      <div class="cart-items-scroll" id="cartItemsList">
        <div class="empty-cart-state" id="emptyCartState">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path><line x1="3" y1="6" x2="21" y2="6"></line><path d="M16 10a4 4 0 0 1-8 0"></path></svg>
          <p style="font-weight:700; color:#cbd5e1; margin-bottom:0.25rem;">Cart is empty</p>
          <p style="font-size:0.8rem;">Tap any drink on the left to add to order</p>
        </div>
      </div>

      <div class="cart-footer">
        
        <div class="cart-total-row">
          <div>
            <div class="cart-total-label">Total Amount</div>
            <div style="font-size:0.75rem; color:#94a3b8;">Tax &amp; Service Included</div>
          </div>
          <div class="cart-total-amount" id="cartGrandTotal">₦0</div>
        </div>

        <div>
          <label style="font-size:0.75rem; color:#94a3b8; font-weight:700; display:block; margin-bottom:0.4rem; text-transform:uppercase;">
            Payment Method
          </label>
          <div class="pay-methods-grid" id="payMethodGrid">
            <button type="button" class="pay-method-btn active" data-method="pos">
              <span style="font-size:1.2rem;">💳</span>
              <span>P.O.S (Card)</span>
            </button>
            <button type="button" class="pay-method-btn" data-method="cash">
              <span style="font-size:1.2rem;">💵</span>
              <span>Cash</span>
            </button>
            <button type="button" class="pay-method-btn" data-method="transfer">
              <span style="font-size:1.2rem;">🏦</span>
              <span>Transfer</span>
            </button>
          </div>
        </div>

        <div class="checkout-actions">
          <button type="button" class="btn-checkout" id="checkoutPrintBtn" disabled>
            <span>🖨️ Charge &amp; Print Receipt</span>
          </button>
          <button type="button" class="nav-btn" id="checkoutNoPrintBtn" style="padding:0.85rem;" title="Charge without printing receipt" disabled>
            <span>Charge Only</span>
          </button>
        </div>

      </div>

    </aside>

  </main>

  <!-- ==============================================================
       MODAL: MONTHLY SALES & INVENTORY AUDIT REPORT
       ============================================================== -->
  <div class="pos-modal-overlay" id="monthlyReportModal">
    <div class="pos-modal wide">
      <div class="modal-head">
        <div>
          <h3 style="display:flex; align-items:center; gap:0.5rem;">
            <span>📊 End-of-Month Beverage Audit &amp; Revenue Report</span>
          </h3>
          <p style="font-size:0.8rem; color:#94a3b8; margin-top:0.25rem;">
            Executive Financial &amp; Stock Reconciliation for Kelvin Cameo Resort Bar
          </p>
        </div>
        <button type="button" class="modal-close" onclick="closeModal('monthlyReportModal')">&times;</button>
      </div>

      <div class="modal-body">
        
        <!-- Controls: Select Month & Year -->
        <div style="display:flex; gap:1rem; align-items:center; background:#1e293b; padding:1rem; border-radius:12px; margin-bottom:1.5rem; flex-wrap:wrap;">
          <div>
            <label style="font-size:0.75rem; color:#94a3b8; display:block; margin-bottom:0.25rem;">Select Audit Month</label>
            <select id="monthlySelectMonth" class="cart-meta-select" style="padding:0.5rem 1rem;">
              <option value="1">January</option>
              <option value="2">February</option>
              <option value="3">March</option>
              <option value="4">April</option>
              <option value="5">May</option>
              <option value="6">June</option>
              <option value="7">July</option>
              <option value="8">August</option>
              <option value="9">September</option>
              <option value="10" selected>October</option>
              <option value="11">November</option>
              <option value="12">December</option>
            </select>
          </div>

          <div>
            <label style="font-size:0.75rem; color:#94a3b8; display:block; margin-bottom:0.25rem;">Select Year</label>
            <select id="monthlySelectYear" class="cart-meta-select" style="padding:0.5rem 1rem;">
              <option value="2026" selected>2026</option>
              <option value="2027">2027</option>
              <option value="2025">2025</option>
            </select>
          </div>

          <div style="margin-top:auto;">
            <button type="button" class="nav-btn primary" id="generateMonthlyBtn">🔄 Refresh Audit</button>
          </div>

          <div style="margin-left:auto; text-align:right;">
            <span style="font-size:0.75rem; color:#94a3b8;">Audited Period:</span>
            <div style="font-size:1.1rem; font-weight:800; color:#d4af37;" id="monthlyPeriodTitle">October 2026</div>
          </div>
        </div>

        <!-- KPI Cards -->
        <div style="display:grid; grid-template-columns: repeat(auto-fit, minmax(180px, 1fr)); gap:1rem; margin-bottom:1.5rem;">
          <div style="background:#1e293b; padding:1rem; border-radius:10px; border-left:4px solid #10b981;">
            <div style="font-size:0.75rem; color:#94a3b8;">Total Monthly Revenue</div>
            <div style="font-size:1.4rem; font-weight:800; color:#10b981; font-family:'JetBrains Mono';" id="monthlyTotalRev">₦0</div>
          </div>
          <div style="background:#1e293b; padding:1rem; border-radius:10px; border-left:4px solid #38bdf8;">
            <div style="font-size:0.75rem; color:#94a3b8;">POS Terminal Collections</div>
            <div style="font-size:1.4rem; font-weight:800; color:#38bdf8; font-family:'JetBrains Mono';" id="monthlyPosRev">₦0</div>
          </div>
          <div style="background:#1e293b; padding:1rem; border-radius:10px; border-left:4px solid #f59e0b;">
            <div style="font-size:0.75rem; color:#94a3b8;">Cash Collections</div>
            <div style="font-size:1.4rem; font-weight:800; color:#f59e0b; font-family:'JetBrains Mono';" id="monthlyCashRev">₦0</div>
          </div>
          <div style="background:#1e293b; padding:1rem; border-radius:10px; border-left:4px solid #a855f7;">
            <div style="font-size:0.75rem; color:#94a3b8;">Bank Transfer Collections</div>
            <div style="font-size:1.4rem; font-weight:800; color:#a855f7; font-family:'JetBrains Mono';" id="monthlyTransferRev">₦0</div>
          </div>
          <div style="background:#1e293b; padding:1rem; border-radius:10px; border-left:4px solid #d4af37;">
            <div style="font-size:0.75rem; color:#94a3b8;">Total Bottles/Cans Sold</div>
            <div style="font-size:1.4rem; font-weight:800; color:#d4af37;" id="monthlyTotalBottles">0</div>
          </div>
        </div>

        <!-- Top 5 Highest-Earning Beverages -->
        <div style="background:#1e293b; padding:1rem; border-radius:12px; margin-bottom:1.5rem;">
          <h4 style="font-size:0.95rem; font-weight:800; color:#d4af37; margin-bottom:0.75rem;">
            🏆 Top 5 Highest-Revenue Beverages This Month
          </h4>
          <div id="monthlyTop5Container" style="display:grid; grid-template-columns: repeat(auto-fit, minmax(180px, 1fr)); gap:0.75rem;">
            <!-- Populated dynamically -->
          </div>
        </div>

        <!-- Full Itemized Audit Table -->
        <h4 style="font-size:0.95rem; font-weight:800; color:#fff; margin-bottom:0.75rem;">
          Detailed Monthly Stock Movement &amp; Value Realized
        </h4>
        <div class="ledger-table-wrap">
          <table class="ledger-table" id="monthlyReportTable">
            <thead>
              <tr>
                <th>#</th>
                <th style="text-align:left;">Product</th>
                <th>Category</th>
                <th>Price (₦)</th>
                <th>O/S</th>
                <th>New Stock (N/S)</th>
                <th>Sold (Q/S)</th>
                <th>Breakage</th>
                <th>Closing (C/S)</th>
                <th>Month Revenue (₦)</th>
              </tr>
            </thead>
            <tbody id="monthlyReportTableBody">
              <!-- Populated dynamically -->
            </tbody>
            <tfoot>
              <tr>
                <td colspan="6" style="text-align:right; font-weight:800;">MONTHLY AUDIT TOTAL:</td>
                <td id="monthlyTotalSoldTable" style="font-weight:800; color:#10b981;">0</td>
                <td>-</td>
                <td>-</td>
                <td id="monthlyTotalRevTable" style="font-weight:800; font-family:'JetBrains Mono';">₦0</td>
              </tr>
            </tfoot>
          </table>
        </div>

      </div>

      <div class="modal-foot">
        <button type="button" class="btn-checkout" onclick="printMonthlyReport()" style="padding:0.6rem 1.25rem;">
          <span>🖨️ Print Monthly Report (A4 / PDF)</span>
        </button>
        <button type="button" class="nav-btn" onclick="closeModal('monthlyReportModal')">Close</button>
      </div>
    </div>
  </div>

  <!-- ==============================================================
       MODAL: DAILY STOCK SHEET / LEDGER
       ============================================================== -->
  <div class="pos-modal-overlay" id="ledgerModal">
    <div class="pos-modal wide">
      <div class="modal-head">
        <div>
          <h3 style="display:flex; align-items:center; gap:0.5rem;">
            <span>Daily Stock &amp; Sales Ledger</span>
            <span class="rc-tag" id="ledgerDateDisplay">15 October 2026</span>
          </h3>
          <p style="font-size:0.8rem; color:#94a3b8; margin-top:0.25rem;">
            Columns: Products | Prices | O/S (Opening) | N/S (New) | T/S (Total) | Q/S (Sold) | B/C/S (Spill) | C/S (Closing) | Amount
          </p>
        </div>
        <button type="button" class="modal-close" onclick="closeModal('ledgerModal')">&times;</button>
      </div>

      <div class="modal-body">
        
        <div style="display:grid; grid-template-columns: repeat(auto-fit, minmax(180px, 1fr)); gap:1rem; margin-bottom:1.5rem;">
          <div style="background:#1e293b; padding:1rem; border-radius:10px; border-left:4px solid #10b981;">
            <div style="font-size:0.75rem; color:#94a3b8;">Today's Revenue</div>
            <div style="font-size:1.35rem; font-weight:800; color:#d4af37; font-family:'JetBrains Mono';" id="ledgerGrandTotalRev">₦0</div>
          </div>
          <div style="background:#1e293b; padding:1rem; border-radius:10px; border-left:4px solid #38bdf8;">
            <div style="font-size:0.75rem; color:#94a3b8;">P.O.S Terminal</div>
            <div style="font-size:1.35rem; font-weight:800; color:#38bdf8; font-family:'JetBrains Mono';" id="ledgerPosRev">₦0</div>
          </div>
          <div style="background:#1e293b; padding:1rem; border-radius:10px; border-left:4px solid #f59e0b;">
            <div style="font-size:0.75rem; color:#94a3b8;">Cash</div>
            <div style="font-size:1.35rem; font-weight:800; color:#f59e0b; font-family:'JetBrains Mono';" id="ledgerCashRev">₦0</div>
          </div>
          <div style="background:#1e293b; padding:1rem; border-radius:10px; border-left:4px solid #a855f7;">
            <div style="font-size:0.75rem; color:#94a3b8;">Bank Transfer</div>
            <div style="font-size:1.35rem; font-weight:800; color:#a855f7; font-family:'JetBrains Mono';" id="ledgerTransferRev">₦0</div>
          </div>
        </div>

        <div class="ledger-table-wrap">
          <table class="ledger-table" id="ledgerTable">
            <thead>
              <tr>
                <th style="width:40px;">#</th>
                <th style="text-align:left;">Products</th>
                <th>Category</th>
                <th>Prices (₦)</th>
                <th>O/S</th>
                <th>N/S</th>
                <th>T/S</th>
                <th>Q/S</th>
                <th>B/C/S</th>
                <th>C/S</th>
                <th>Amount (₦)</th>
              </tr>
            </thead>
            <tbody id="ledgerTableBody"></tbody>
            <tfoot>
              <tr>
                <td colspan="7" style="text-align:right; font-weight:800;">TOTALS:</td>
                <td id="ledgerTotalBottlesSold" style="font-weight:800;">0</td>
                <td>-</td>
                <td>-</td>
                <td id="ledgerTotalTableAmount" style="font-weight:800; font-family:'JetBrains Mono';">₦0</td>
              </tr>
            </tfoot>
          </table>
        </div>

      </div>

      <div class="modal-foot">
        <button type="button" class="nav-btn" onclick="printDailyLedger()">🖨️ Print Daily Sheet</button>
        <button type="button" class="nav-btn" id="startNewDayBtn" style="color:#f59e0b;" title="Admin Only: Rolls closing stock into new opening stock">🔄 Close &amp; Roll Over Shift</button>
        <button type="button" class="nav-btn primary" onclick="closeModal('ledgerModal')">Done</button>
      </div>
    </div>
  </div>

  <!-- ==============================================================
       MODAL: RESTOCK / BREAKAGE (Role Sensitive)
       ============================================================== -->
  <div class="pos-modal-overlay" id="restockModal">
    <div class="pos-modal">
      <div class="modal-head">
        <div>
          <h3>Record Restock or Spoilage / Breakage</h3>
          <p style="font-size:0.75rem; color:#94a3b8;">Staff can add new stock. Only Admin can directly edit stock levels.</p>
        </div>
        <button type="button" class="modal-close" onclick="closeModal('restockModal')">&times;</button>
      </div>
      <div class="modal-body">
        
        <form id="restockForm">
          <div style="margin-bottom:1rem;">
            <label style="font-size:0.85rem; color:#94a3b8; display:block; margin-bottom:0.35rem;">Select Beverage Product</label>
            <select id="restockProdSelect" class="cart-meta-select" style="padding:0.65rem;" required></select>
          </div>

          <div style="display:grid; grid-template-columns:1fr 1fr; gap:1rem; margin-bottom:1rem;">
            <div>
              <label style="font-size:0.85rem; color:#94a3b8; display:block; margin-bottom:0.35rem;">Action Type</label>
              <select id="restockActionType" class="cart-meta-select" style="padding:0.65rem;" required>
                <option value="restock">New Stock In (N/S) - All Staff</option>
                <option value="breakage">Breakage / Complimentary (B/C/S)</option>
                <option value="set_exact" id="optSetExact">Set Exact Current Stock (Admin Only)</option>
              </select>
            </div>
            <div>
              <label style="font-size:0.85rem; color:#94a3b8; display:block; margin-bottom:0.35rem;">Quantity (Bottles/Cans)</label>
              <input type="number" id="restockQty" class="cart-meta-select" style="padding:0.65rem;" min="1" value="1" required>
            </div>
          </div>

          <div id="restockStockPreview" style="background:#1e293b; padding:0.75rem 1rem; border-radius:8px; font-size:0.85rem; color:#94a3b8; margin-bottom:1rem;">
            Current Stock: <strong id="previewCurrentStockVal" style="color:#d4af37;">--</strong>
          </div>

          <button type="submit" class="btn-checkout" style="width:100%;">Save Inventory Update</button>
        </form>

      </div>
    </div>
  </div>

  <!-- ==============================================================
       MODAL: ADMIN PRODUCT & PRICE MANAGER (PIN 1122 Protected)
       ============================================================== -->
  <div class="pos-modal-overlay" id="addDrinkModal">
    <div class="pos-modal">
      <div class="modal-head">
        <div>
          <h3>Add New Drink to Bar Menu</h3>
          <span style="font-size:0.75rem; color:#d4af37;">👑 Admin / Manager Privilege</span>
        </div>
        <button type="button" class="modal-close" onclick="closeModal('addDrinkModal')">&times;</button>
      </div>
      <div class="modal-body">
        
        <form id="addDrinkForm">
          <div style="margin-bottom:1rem;">
            <label style="font-size:0.85rem; color:#94a3b8; display:block; margin-bottom:0.35rem;">Drink Name</label>
            <input type="text" id="newDrinkName" class="cart-meta-select" style="padding:0.65rem;" placeholder="e.g. Corona Extra, Glenfiddich 15" required>
          </div>

          <div style="display:grid; grid-template-columns:1fr 1fr; gap:1rem; margin-bottom:1rem;">
            <div>
              <label style="font-size:0.85rem; color:#94a3b8; display:block; margin-bottom:0.35rem;">Category</label>
              <select id="newDrinkCat" class="cart-meta-select" style="padding:0.65rem;" required>
                <option value="wine">Wine &amp; Spirits</option>
                <option value="beer" selected>Beer &amp; Bitters</option>
                <option value="drinks">Drinks &amp; Refreshments</option>
              </select>
            </div>
            <div>
              <label style="font-size:0.85rem; color:#94a3b8; display:block; margin-bottom:0.35rem;">Selling Price (₦)</label>
              <input type="number" id="newDrinkPrice" class="cart-meta-select" style="padding:0.65rem;" placeholder="e.g. 2500" required>
            </div>
          </div>

          <div style="margin-bottom:1.25rem;">
            <label style="font-size:0.85rem; color:#94a3b8; display:block; margin-bottom:0.35rem;">Opening Stock Quantity</label>
            <input type="number" id="newDrinkStock" class="cart-meta-select" style="padding:0.65rem;" min="0" value="12" required>
          </div>

          <button type="submit" class="btn-checkout" style="width:100%;">Add to Inventory</button>
        </form>

      </div>
    </div>
  </div>

  <!-- ==============================================================
       MODAL: ADMIN ROLE UNLOCK (Prompt for PIN 1122)
       ============================================================== -->
  <div class="pos-modal-overlay" id="adminUnlockModal">
    <div class="pos-modal" style="max-width:400px; text-align:center;">
      <div class="modal-head">
        <h3 style="width:100%; text-align:center;">👑 Enter Admin Password</h3>
        <button type="button" class="modal-close" onclick="closeModal('adminUnlockModal')">&times;</button>
      </div>
      <div class="modal-body">
        <p style="font-size:0.85rem; color:#94a3b8; margin-bottom:1.25rem;">
          Enter Manager / Admin Security PIN to unlock direct stock editing, price adjustments, and shift close privileges.
        </p>
        <input type="password" id="adminPinInput" class="cart-meta-select" style="padding:0.75rem; text-align:center; font-size:1.5rem; letter-spacing:0.5rem;" maxlength="4" placeholder="••••">
        <button type="button" class="btn-checkout" id="submitAdminUnlockBtn" style="width:100%; margin-top:1rem;">
          Unlock Admin Mode
        </button>
      </div>
    </div>
  </div>

  <!-- ==============================================================
       MODAL: ORDERS HISTORY
       ============================================================== -->
  <div class="pos-modal-overlay" id="ordersModal">
    <div class="pos-modal wide">
      <div class="modal-head">
        <h3>Recent Bar Sales &amp; Receipts</h3>
        <button type="button" class="modal-close" onclick="closeModal('ordersModal')">&times;</button>
      </div>
      <div class="modal-body">
        <div id="ordersListContainer"></div>
      </div>
      <div class="modal-foot">
        <button type="button" class="nav-btn primary" onclick="closeModal('ordersModal')">Close</button>
      </div>
    </div>
  </div>

  <!-- ==============================================================
       PRINT AREA 1: ESC/POS THERMAL RECEIPT (58mm / 80mm)
       ============================================================== -->
  <div id="thermalReceiptArea">
    <div class="receipt-center">
      <div style="font-size:14px; font-weight:bold; letter-spacing:1px;">KELVIN CAMEO RESORT</div>
      <div style="font-size:12px; font-weight:bold;">BAR, LOUNGE &amp; SUITES</div>
      <div style="font-size:10px;">Opp. Suleiman Barau Tech College</div>
      <div style="font-size:10px;">Maje-Minna Rd, Kwamba, Suleja</div>
      <div style="font-size:10px;">RC: 1613032 | Tel: +234 805 555 8197</div>
    </div>

    <div class="receipt-divider"></div>

    <div class="receipt-row">
      <span>RECEIPT:</span>
      <strong id="printReceiptNo">KC-BAR-0001</strong>
    </div>
    <div class="receipt-row">
      <span>DATE:</span>
      <span id="printReceiptDate">15/10/2026 12:00</span>
    </div>
    <div class="receipt-row">
      <span>STAFF ON DUTY:</span>
      <span id="printReceiptStaff">Bar Staff</span>
    </div>
    <div class="receipt-row">
      <span>TABLE/LOCATION:</span>
      <span id="printReceiptTable">Bar Counter</span>
    </div>

    <div class="receipt-double-divider"></div>

    <div class="receipt-row" style="font-weight:bold; font-size:11px;">
      <span style="width:25px;">QTY</span>
      <span style="flex:1; text-align:left; padding-left:4px;">ITEM</span>
      <span style="width:70px; text-align:right;">AMOUNT</span>
    </div>

    <div class="receipt-divider"></div>

    <div id="printReceiptItems"></div>

    <div class="receipt-double-divider"></div>

    <div class="receipt-row" style="font-size:14px; font-weight:bold;">
      <span>TOTAL:</span>
      <span id="printReceiptTotal">₦0</span>
    </div>
    <div class="receipt-row">
      <span>PAYMENT:</span>
      <strong id="printReceiptPayment">P.O.S CARD</strong>
    </div>

    <div class="receipt-divider"></div>

    <div class="receipt-center" style="font-size:10px; margin-top:6px;">
      <div>Thank you for your patronage!</div>
      <div>Visit again &amp; enjoy our hospitality</div>
      <div style="margin-top:4px;">kelvincameo.com</div>
      <div style="margin-top:15px; font-size:8px;">. . . . . . . . . . . . . . . . . . . . .</div>
    </div>
  </div>

  <!-- ==============================================================
       PRINT AREA 2: OFFICIAL A4 MONTHLY AUDIT REPORT
       ============================================================== -->
  <div id="printableMonthlyArea">
    <div style="text-align:center; border-bottom:2px solid #000; padding-bottom:10px; margin-bottom:15px;">
      <h2 style="font-size:20px; font-weight:800; text-transform:uppercase; margin-bottom:4px;">KELVIN CAMEO RESORT &amp; LOUNGE</h2>
      <div style="font-size:12px; font-weight:bold;">RC: 1613032 | Suleja, Niger State (Abuja Corridor)</div>
      <h3 style="font-size:15px; font-weight:800; margin-top:8px; text-decoration:underline;" id="printAuditHeaderTitle">
        MONTHLY BEVERAGE INVENTORY &amp; REVENUE AUDIT REPORT - OCTOBER 2026
      </h3>
      <div style="font-size:11px; margin-top:4px;" id="printAuditGeneratedDate">Generated: 15 October 2026</div>
    </div>

    <!-- Summary Box -->
    <div style="display:grid; grid-template-columns: repeat(4, 1fr); gap:10px; border:1px solid #000; padding:10px; margin-bottom:15px; font-size:12px;">
      <div><strong>TOTAL REVENUE:</strong><br><span id="printAuditTotalRev" style="font-size:14px; font-weight:bold;">₦0</span></div>
      <div><strong>POS CARD:</strong><br><span id="printAuditPosRev">₦0</span></div>
      <div><strong>CASH:</strong><br><span id="printAuditCashRev">₦0</span></div>
      <div><strong>BANK TRANSFER:</strong><br><span id="printAuditTransferRev">₦0</span></div>
    </div>

    <!-- Table -->
    <table style="width:100%; border-collapse:collapse; font-size:11px; margin-bottom:20px;" border="1">
      <thead>
        <tr style="background:#eee;">
          <th style="padding:4px;">#</th>
          <th style="text-align:left; padding:4px;">Product Name</th>
          <th style="padding:4px;">Category</th>
          <th style="padding:4px;">Price (₦)</th>
          <th style="padding:4px;">Opening</th>
          <th style="padding:4px;">New Stock</th>
          <th style="padding:4px;">Sold Qty</th>
          <th style="padding:4px;">Breakage</th>
          <th style="padding:4px;">Closing Stock</th>
          <th style="padding:4px; text-align:right;">Month Revenue (₦)</th>
        </tr>
      </thead>
      <tbody id="printAuditTableBody"></tbody>
      <tfoot>
        <tr style="font-weight:bold; background:#eee;">
          <td colspan="6" style="text-align:right; padding:4px;">TOTAL:</td>
          <td id="printAuditTotalSold" style="text-align:center; padding:4px;">0</td>
          <td colspan="2">-</td>
          <td id="printAuditGrandTotal" style="text-align:right; padding:4px;">₦0</td>
        </tr>
      </tfoot>
    </table>

    <!-- Signature Audit Box -->
    <div style="display:grid; grid-template-columns: repeat(3, 1fr); gap:20px; margin-top:40px; font-size:11px;">
      <div style="border-top:1px solid #000; padding-top:6px; text-align:center;">
        <strong>PREPARED BY:</strong><br>
        <span style="font-size:10px;">Bar Supervisor / Attendant on Duty</span><br><br>
        Signature &amp; Date: ___________________
      </div>
      <div style="border-top:1px solid #000; padding-top:6px; text-align:center;">
        <strong>VERIFIED BY:</strong><br>
        <span style="font-size:10px;">Internal Auditor / Accountant</span><br><br>
        Signature &amp; Date: ___________________
      </div>
      <div style="border-top:1px solid #000; padding-top:6px; text-align:center;">
        <strong>APPROVED BY:</strong><br>
        <span style="font-size:10px;">Managing Director / Board</span><br><br>
        Signature &amp; Date: ___________________
      </div>
    </div>
  </div>

  <div id="posToast">Notification</div>

  <!-- ==============================================================
       POS JAVASCRIPT ENGINE
       ============================================================== -->
  <script>
    const AJAX_URL = '<?php echo esc_url($ajax_url); ?>';
    let sessionToken = sessionStorage.getItem('kc_bar_token') || '';
    let currentRole  = sessionStorage.getItem('kc_bar_role') || 'staff';
    let currentStaff = localStorage.getItem('kc_bar_staff') || 'Bar Staff';

    let products = [];
    let cart = [];
    let currentCategory = 'all';
    let currentPayMethod = 'pos';
    let recentOrders = [];
    let monthlyReportData = null;

    document.addEventListener('DOMContentLoaded', function() {
      initPinPad();
      setupEventListeners();
      
      if (sessionToken) {
        verifySession();
      } else {
        showPinScreen();
      }
    });

    // -------------------------------------------------------------
    // PIN SECURITY SYSTEM (Admin: 1122 | Staff: 1613)
    // -------------------------------------------------------------
    let enteredPin = '';

    function initPinPad() {
      const keys = document.querySelectorAll('.pin-key[data-digit]');
      keys.forEach(k => {
        k.addEventListener('click', () => {
          if (enteredPin.length < 4) {
            enteredPin += k.getAttribute('data-digit');
            updatePinDots();
            if (enteredPin.length === 4) {
              submitPin(enteredPin);
            }
          }
        });
      });

      document.getElementById('pinClearBtn').addEventListener('click', () => {
        enteredPin = '';
        updatePinDots();
      });

      document.getElementById('pinBackBtn').addEventListener('click', () => {
        enteredPin = enteredPin.slice(0, -1);
        updatePinDots();
      });
    }

    function updatePinDots() {
      const dots = document.querySelectorAll('#pinDots .pin-dot');
      dots.forEach((dot, index) => {
        if (index < enteredPin.length) {
          dot.classList.add('filled');
        } else {
          dot.classList.remove('filled');
        }
      });
    }

    function showPinScreen() {
      document.getElementById('pinLockOverlay').style.display = 'flex';
      enteredPin = '';
      updatePinDots();
    }

    function hidePinScreen() {
      document.getElementById('pinLockOverlay').style.display = 'none';
      enteredPin = '';
      updatePinDots();
    }

    function submitPin(pin) {
      const fd = new FormData();
      fd.append('action', 'kc_bar_verify_pin');
      fd.append('pin', pin);

      fetch(AJAX_URL, { method: 'POST', body: fd })
        .then(r => r.json())
        .then(res => {
          if (res.success && res.data.token) {
            sessionToken = res.data.token;
            currentRole  = res.data.role || 'staff';
            sessionStorage.setItem('kc_bar_token', sessionToken);
            sessionStorage.setItem('kc_bar_role', currentRole);
            hidePinScreen();
            updateRoleBadgeUI();
            loadPosData();
            showToast(res.data.message);
          } else {
            showToast(res.data?.message || 'Invalid PIN', true);
            enteredPin = '';
            updatePinDots();
          }
        })
        .catch(() => {
          showToast('Connection error. Try again.', true);
          enteredPin = '';
          updatePinDots();
        });
    }

    function verifySession() {
      hidePinScreen();
      updateRoleBadgeUI();
      loadPosData();
    }

    function updateRoleBadgeUI() {
      const badge = document.getElementById('roleBadgeBtn');
      const icon  = document.getElementById('roleIcon');
      const label = document.getElementById('roleLabel');
      const optSetExact = document.getElementById('optSetExact');

      if (currentRole === 'admin') {
        badge.className = 'role-badge admin';
        icon.textContent = '👑';
        label.textContent = 'Admin / Manager';
        badge.title = 'Admin Mode Active (Full Privileges)';
        if (optSetExact) optSetExact.disabled = false;
      } else {
        badge.className = 'role-badge staff';
        icon.textContent = '🛡️';
        label.textContent = 'Staff (Cashier)';
        badge.title = 'Click to enter Admin PIN (1122)';
        if (optSetExact) optSetExact.disabled = true;
      }
    }

    function unlockAdminModal() {
      if (currentRole === 'admin') {
        showToast('Admin Mode is already active (PIN: 1122).');
        return;
      }
      openModal('adminUnlockModal');
      document.getElementById('adminPinInput').value = '';
      document.getElementById('adminPinInput').focus();
    }

    function submitAdminUnlock() {
      const pin = document.getElementById('adminPinInput').value.trim();
      if (!pin) return;

      const fd = new FormData();
      fd.append('action', 'kc_bar_verify_pin');
      fd.append('pin', pin);

      fetch(AJAX_URL, { method: 'POST', body: fd })
        .then(r => r.json())
        .then(res => {
          if (res.success && res.data.role === 'admin') {
            sessionToken = res.data.token;
            currentRole  = 'admin';
            sessionStorage.setItem('kc_bar_token', sessionToken);
            sessionStorage.setItem('kc_bar_role', 'admin');
            updateRoleBadgeUI();
            closeModal('adminUnlockModal');
            showToast('👑 Admin Mode Unlocked! You have full stock editing privileges.');
            loadPosData();
          } else {
            showToast('Incorrect Admin PIN. Admin password is 1122.', true);
          }
        });
    }

    // -------------------------------------------------------------
    // DATA LOADING & RENDERING
    // -------------------------------------------------------------
    function loadPosData() {
      const fd = new FormData();
      fd.append('action', 'kc_bar_get_pos_data');
      fd.append('token', sessionToken);

      fetch(AJAX_URL, { method: 'POST', body: fd })
        .then(r => r.json())
        .then(res => {
          if (res.success) {
            products = res.data.products || [];
            recentOrders = res.data.recent_orders || [];
            if (res.data.role) {
              currentRole = res.data.role;
              sessionStorage.setItem('kc_bar_role', currentRole);
              updateRoleBadgeUI();
            }
            updateCategoryBadges();
            renderProducts();
            populateRestockSelect();
            updateStaffDisplay();
          } else {
            showPinScreen();
          }
        })
        .catch(() => {
          showToast('Failed to load products from server.', true);
        });
    }

    function updateCategoryBadges() {
      let wine = 0, beer = 0, drinks = 0;
      products.forEach(p => {
        if (p.category === 'wine') wine++;
        else if (p.category === 'beer') beer++;
        else if (p.category === 'drinks') drinks++;
      });
      document.getElementById('badgeAll').textContent = products.length;
      document.getElementById('badgeWine').textContent = wine;
      document.getElementById('badgeBeer').textContent = beer;
      document.getElementById('badgeDrinks').textContent = drinks;
    }

    function renderProducts() {
      const grid = document.getElementById('productsGrid');
      grid.innerHTML = '';

      const query = document.getElementById('productSearchInput').value.trim().toLowerCase();

      const filtered = products.filter(p => {
        const matchesCategory = (currentCategory === 'all' || p.category === currentCategory);
        const matchesQuery = (!query || p.name.toLowerCase().includes(query));
        return matchesCategory && matchesQuery;
      });

      if (filtered.length === 0) {
        grid.innerHTML = `<div style="grid-column: 1 / -1; text-align:center; padding:3rem; color:#64748b;">
          No drinks found matching "${query}".
        </div>`;
        return;
      }

      filtered.forEach(p => {
        const stock = parseInt(p.current_stock);
        let stockClass = 'ok';
        let stockText = `${stock} in stock`;
        let isOutOfStock = false;

        if (stock <= 0) {
          stockClass = 'empty';
          stockText = 'Out of Stock';
          isOutOfStock = true;
        } else if (stock <= 5) {
          stockClass = 'low';
          stockText = `Low: ${stock}`;
        }

        const card = document.createElement('div');
        card.className = `product-card ${isOutOfStock ? 'out-of-stock' : ''}`;
        card.innerHTML = `
          <div>
            <div class="prod-cat-tag ${p.category}">${p.category}</div>
            <div class="product-title">${escapeHtml(p.name)}</div>
          </div>
          <div class="product-footer">
            <div class="product-price">₦${formatNaira(p.price)}</div>
            <div class="product-stock ${stockClass}">${stockText}</div>
          </div>
        `;

        if (!isOutOfStock) {
          card.addEventListener('click', () => addToCart(p));
        } else {
          card.addEventListener('click', () => {
            showToast(`${p.name} is out of stock! Restock to sell.`, true);
          });
        }

        grid.appendChild(card);
      });
    }

    // -------------------------------------------------------------
    // CART OPERATIONS
    // -------------------------------------------------------------
    function addToCart(product) {
      const existing = cart.find(item => item.id === product.id);
      const stock = parseInt(product.current_stock);

      if (existing) {
        if (existing.qty + 1 > stock) {
          showToast(`Only ${stock} bottles of ${product.name} available in stock!`, true);
          return;
        }
        existing.qty += 1;
      } else {
        if (stock < 1) {
          showToast(`${product.name} is out of stock!`, true);
          return;
        }
        cart.push({
          id: product.id,
          name: product.name,
          category: product.category,
          price: parseFloat(product.price),
          qty: 1
        });
      }

      renderCart();
    }

    function updateCartQty(productId, delta) {
      const item = cart.find(i => i.id === productId);
      if (!item) return;

      const product = products.find(p => p.id === productId);
      const stock = product ? parseInt(product.current_stock) : 999;

      const newQty = item.qty + delta;
      if (newQty <= 0) {
        removeFromCart(productId);
      } else if (newQty > stock) {
        showToast(`Cannot exceed current stock (${stock} bottles)`, true);
      } else {
        item.qty = newQty;
        renderCart();
      }
    }

    function removeFromCart(productId) {
      cart = cart.filter(i => i.id !== productId);
      renderCart();
    }

    function clearCart() {
      cart = [];
      renderCart();
    }

    function renderCart() {
      const container = document.getElementById('cartItemsList');
      const emptyState = document.getElementById('emptyCartState');
      const countBadge = document.getElementById('cartCountBadge');
      const grandTotalElem = document.getElementById('cartGrandTotal');
      const checkoutPrintBtn = document.getElementById('checkoutPrintBtn');
      const checkoutNoPrintBtn = document.getElementById('checkoutNoPrintBtn');

      if (cart.length === 0) {
        container.innerHTML = '';
        container.appendChild(emptyState);
        countBadge.textContent = '0';
        grandTotalElem.textContent = '₦0';
        checkoutPrintBtn.disabled = true;
        checkoutNoPrintBtn.disabled = true;
        return;
      }

      container.innerHTML = '';
      let totalAmount = 0;
      let totalQty = 0;

      cart.forEach(item => {
        const itemSubtotal = item.price * item.qty;
        totalAmount += itemSubtotal;
        totalQty += item.qty;

        const row = document.createElement('div');
        row.className = 'cart-item-row';
        row.innerHTML = `
          <div class="cart-item-info">
            <div class="cart-item-name">${escapeHtml(item.name)}</div>
            <div class="cart-item-sub">₦${formatNaira(item.price)} each</div>
          </div>
          <div class="cart-item-qty">
            <button type="button" class="qty-btn" onclick="updateCartQty(${item.id}, -1)">-</button>
            <span class="qty-val">${item.qty}</span>
            <button type="button" class="qty-btn" onclick="updateCartQty(${item.id}, 1)">+</button>
          </div>
          <div class="cart-item-total">₦${formatNaira(itemSubtotal)}</div>
          <button type="button" class="cart-item-del" onclick="removeFromCart(${item.id})" title="Remove">✕</button>
        `;
        container.appendChild(row);
      });

      countBadge.textContent = totalQty;
      grandTotalElem.textContent = `₦${formatNaira(totalAmount)}`;
      checkoutPrintBtn.disabled = false;
      checkoutNoPrintBtn.disabled = false;
    }

    // -------------------------------------------------------------
    // CHECKOUT & PRINT RECEIPT
    // -------------------------------------------------------------
    function processCheckout(doPrint = true) {
      if (cart.length === 0) return;

      const printBtn = document.getElementById('checkoutPrintBtn');
      const noPrintBtn = document.getElementById('checkoutNoPrintBtn');
      printBtn.disabled = true;
      noPrintBtn.disabled = true;

      const table = document.getElementById('cartTableSelect').value;
      const room  = document.getElementById('cartRoomInput').value.trim();

      const fd = new FormData();
      fd.append('action', 'kc_bar_create_order');
      fd.append('token', sessionToken);
      fd.append('items', JSON.stringify(cart));
      fd.append('payment_method', currentPayMethod);
      fd.append('staff_name', currentStaff);
      fd.append('table_number', table);
      fd.append('room_number', room);

      fetch(AJAX_URL, { method: 'POST', body: fd })
        .then(r => r.json())
        .then(res => {
          if (res.success) {
            const orderData = res.data;
            showToast(`Order ${orderData.receipt_no} completed!`);
            
            if (doPrint) {
              prepareThermalReceipt(orderData);
              document.body.className = 'printing-receipt';
              window.print();
              setTimeout(() => { document.body.className = ''; }, 1000);
            }

            clearCart();
            loadPosData();
          } else {
            showToast(res.data?.message || 'Checkout failed.', true);
          }
        })
        .catch(() => {
          showToast('Checkout network error.', true);
        })
        .finally(() => {
          printBtn.disabled = false;
          noPrintBtn.disabled = false;
        });
    }

    function prepareThermalReceipt(order) {
      document.getElementById('printReceiptNo').textContent = order.receipt_no;
      document.getElementById('printReceiptDate').textContent = order.created_at || 'Just Now';
      document.getElementById('printReceiptStaff').textContent = order.staff_name || currentStaff;
      
      let locText = order.table_number || 'Bar Counter';
      if (order.room_number) locText += ` (${order.room_number})`;
      document.getElementById('printReceiptTable').textContent = locText;

      const itemsBox = document.getElementById('printReceiptItems');
      itemsBox.innerHTML = '';

      order.items.forEach(it => {
        const itemRow = document.createElement('div');
        itemRow.className = 'receipt-row';
        itemRow.style.fontSize = '11px';
        itemRow.innerHTML = `
          <span style="width:25px;">${it.qty}x</span>
          <span style="flex:1; text-align:left; padding-left:4px;">${escapeHtml(it.name)}</span>
          <span style="width:70px; text-align:right;">₦${formatNaira(it.subtotal)}</span>
        `;
        itemsBox.appendChild(itemRow);
      });

      document.getElementById('printReceiptTotal').textContent = `₦${formatNaira(order.total_amount)}`;
      
      let payName = 'P.O.S (Card Terminal)';
      if (order.payment_method === 'cash') payName = 'CASH';
      else if (order.payment_method === 'transfer') payName = 'BANK TRANSFER (Zenith)';
      else if (order.payment_method === 'room_charge') payName = 'HOTEL ROOM CHARGE';

      document.getElementById('printReceiptPayment').textContent = payName;
    }

    // -------------------------------------------------------------
    // MONTHLY REPORT AUDIT & PRINT ENGINE
    // -------------------------------------------------------------
    function loadMonthlyReport() {
      const month = document.getElementById('monthlySelectMonth').value;
      const year  = document.getElementById('monthlySelectYear').value;

      const fd = new FormData();
      fd.append('action', 'kc_bar_get_monthly_report');
      fd.append('token', sessionToken);
      fd.append('month', month);
      fd.append('year', year);

      fetch(AJAX_URL, { method: 'POST', body: fd })
        .then(r => r.json())
        .then(res => {
          if (res.success) {
            monthlyReportData = res.data;
            renderMonthlyReportUI(monthlyReportData);
            openModal('monthlyReportModal');
          } else {
            showToast(res.data?.message || 'Error generating monthly report', true);
          }
        })
        .catch(() => {
          showToast('Connection error while generating report', true);
        });
    }

    function renderMonthlyReportUI(data) {
      document.getElementById('monthlyPeriodTitle').textContent = data.month_name;
      document.getElementById('monthlyTotalRev').textContent = `₦${formatNaira(data.summary?.total_revenue || 0)}`;
      document.getElementById('monthlyPosRev').textContent = `₦${formatNaira(data.summary?.pos_revenue || 0)}`;
      document.getElementById('monthlyCashRev').textContent = `₦${formatNaira(data.summary?.cash_revenue || 0)}`;
      document.getElementById('monthlyTransferRev').textContent = `₦${formatNaira(data.summary?.transfer_revenue || 0)}`;
      document.getElementById('monthlyTotalBottles').textContent = formatNaira(data.summary?.total_bottles_sold || 0);

      // Top 5 Bestsellers
      const top5Box = document.getElementById('monthlyTop5Container');
      top5Box.innerHTML = '';
      if (data.top_5 && data.top_5.length > 0) {
        data.top_5.forEach((item, idx) => {
          const div = document.createElement('div');
          div.style.background = '#0f172a';
          div.style.border = '1px solid #334155';
          div.style.borderRadius = '8px';
          div.style.padding = '0.75rem';
          div.innerHTML = `
            <div style="font-size:0.75rem; color:#d4af37; font-weight:800;">#${idx + 1} TOP SELLER</div>
            <div style="font-weight:700; color:#fff; font-size:0.9rem; margin:0.25rem 0;">${escapeHtml(item.name)}</div>
            <div style="font-size:0.8rem; color:#94a3b8;">${item.sold_qty} sold &bull; ₦${formatNaira(item.revenue)}</div>
          `;
          top5Box.appendChild(div);
        });
      } else {
        top5Box.innerHTML = '<div style="color:#64748b; font-size:0.85rem;">No sales recorded for this period yet.</div>';
      }

      // Detailed Audit Table
      const tbody = document.getElementById('monthlyReportTableBody');
      tbody.innerHTML = '';
      let totalSold = 0;
      let totalRev = 0;

      data.items.forEach((it, idx) => {
        totalSold += it.sold_qty;
        totalRev  += it.revenue;

        const tr = document.createElement('tr');
        tr.innerHTML = `
          <td>${idx + 1}</td>
          <td>${escapeHtml(it.name)}</td>
          <td style="text-transform:capitalize; font-size:0.75rem;">${it.category}</td>
          <td style="font-family:'JetBrains Mono';">₦${formatNaira(it.price)}</td>
          <td>${it.opening_stock}</td>
          <td>${it.new_stock}</td>
          <td style="color:#10b981; font-weight:800;">${it.sold_qty}</td>
          <td style="color:#ef4444;">${it.breakage}</td>
          <td style="color:#d4af37; font-weight:700;">${it.closing_stock}</td>
          <td style="font-weight:800; font-family:'JetBrains Mono';">${it.revenue > 0 ? '₦' + formatNaira(it.revenue) : '-'}</td>
        `;
        tbody.appendChild(tr);
      });

      document.getElementById('monthlyTotalSoldTable').textContent = totalSold;
      document.getElementById('monthlyTotalRevTable').textContent = `₦${formatNaira(totalRev)}`;
    }

    function printMonthlyReport() {
      if (!monthlyReportData) return;

      const data = monthlyReportData;
      document.getElementById('printAuditHeaderTitle').textContent = `MONTHLY BEVERAGE INVENTORY & REVENUE AUDIT REPORT - ${data.month_name.toUpperCase()}`;
      document.getElementById('printAuditGeneratedDate').textContent = `Generated on ${data.generated_at} by ${data.prepared_by}`;

      document.getElementById('printAuditTotalRev').textContent = `₦${formatNaira(data.summary?.total_revenue || 0)}`;
      document.getElementById('printAuditPosRev').textContent = `₦${formatNaira(data.summary?.pos_revenue || 0)}`;
      document.getElementById('printAuditCashRev').textContent = `₦${formatNaira(data.summary?.cash_revenue || 0)}`;
      document.getElementById('printAuditTransferRev').textContent = `₦${formatNaira(data.summary?.transfer_revenue || 0)}`;

      const printTbody = document.getElementById('printAuditTableBody');
      printTbody.innerHTML = '';

      let totalSold = 0;
      let totalRev = 0;

      data.items.forEach((it, idx) => {
        totalSold += it.sold_qty;
        totalRev  += it.revenue;

        const tr = document.createElement('tr');
        tr.innerHTML = `
          <td style="text-align:center; padding:3px;">${idx + 1}</td>
          <td style="padding:3px;">${escapeHtml(it.name)}</td>
          <td style="text-align:center; padding:3px; text-transform:capitalize;">${it.category}</td>
          <td style="text-align:right; padding:3px;">₦${formatNaira(it.price)}</td>
          <td style="text-align:center; padding:3px;">${it.opening_stock}</td>
          <td style="text-align:center; padding:3px;">${it.new_stock}</td>
          <td style="text-align:center; padding:3px; font-weight:bold;">${it.sold_qty}</td>
          <td style="text-align:center; padding:3px;">${it.breakage}</td>
          <td style="text-align:center; padding:3px; font-weight:bold;">${it.closing_stock}</td>
          <td style="text-align:right; padding:3px; font-weight:bold;">${it.revenue > 0 ? '₦' + formatNaira(it.revenue) : '-'}</td>
        `;
        printTbody.appendChild(tr);
      });

      document.getElementById('printAuditTotalSold').textContent = totalSold;
      document.getElementById('printAuditGrandTotal').textContent = `₦${formatNaira(totalRev)}`;

      document.body.className = 'printing-monthly';
      window.print();
      setTimeout(() => { document.body.className = ''; }, 1000);
    }

    // -------------------------------------------------------------
    // DAILY STOCK SHEET / LEDGER
    // -------------------------------------------------------------
    function loadDailyLedger() {
      const fd = new FormData();
      fd.append('action', 'kc_bar_get_daily_sheet');
      fd.append('token', sessionToken);

      fetch(AJAX_URL, { method: 'POST', body: fd })
        .then(r => r.json())
        .then(res => {
          if (res.success) {
            const data = res.data;
            document.getElementById('ledgerDateDisplay').textContent = data.date;
            document.getElementById('ledgerGrandTotalRev').textContent = `₦${formatNaira(data.payment_totals?.grand_total || data.grand_total_amount)}`;
            document.getElementById('ledgerPosRev').textContent = `₦${formatNaira(data.payment_totals?.pos_total || 0)}`;
            document.getElementById('ledgerCashRev').textContent = `₦${formatNaira(data.payment_totals?.cash_total || 0)}`;
            document.getElementById('ledgerTransferRev').textContent = `₦${formatNaira(data.payment_totals?.transfer_total || 0)}`;

            const tbody = document.getElementById('ledgerTableBody');
            tbody.innerHTML = '';

            let counter = 1;
            data.rows.forEach(r => {
              const tr = document.createElement('tr');
              tr.innerHTML = `
                <td>${counter++}</td>
                <td>${escapeHtml(r.name)}</td>
                <td style="text-transform:capitalize; font-size:0.75rem;">${r.category}</td>
                <td style="font-family:'JetBrains Mono';">₦${formatNaira(r.price)}</td>
                <td><strong>${r.os}</strong></td>
                <td>${r.ns}</td>
                <td><strong>${r.ts}</strong></td>
                <td style="color:#10b981; font-weight:800;">${r.qs}</td>
                <td style="color:#ef4444;">${r.bcs}</td>
                <td><strong style="color:#d4af37;">${r.cs}</strong></td>
                <td style="font-weight:700; font-family:'JetBrains Mono';">${r.amount > 0 ? '₦' + formatNaira(r.amount) : '-'}</td>
              `;
              tbody.appendChild(tr);
            });

            document.getElementById('ledgerTotalBottlesSold').textContent = data.total_bottles_sold;
            document.getElementById('ledgerTotalTableAmount').textContent = `₦${formatNaira(data.grand_total_amount)}`;

            openModal('ledgerModal');
          }
        })
        .catch(() => {
          showToast('Failed to load ledger sheet.', true);
        });
    }

    function printDailyLedger() {
      window.print();
    }

    function resetDayShift() {
      if (currentRole !== 'admin') {
        showToast('Admin privilege required (PIN: 1122) to close/reset shift.', true);
        unlockAdminModal();
        return;
      }

      if (!confirm('Start New Day / Shift? This will carry over all current Closing Stocks as the new Opening Stocks, and reset Sold counts to 0.')) {
        return;
      }

      const fd = new FormData();
      fd.append('action', 'kc_bar_reset_day');
      fd.append('token', sessionToken);

      fetch(AJAX_URL, { method: 'POST', body: fd })
        .then(r => r.json())
        .then(res => {
          if (res.success) {
            showToast(res.data.message);
            closeModal('ledgerModal');
            loadPosData();
          } else {
            showToast(res.data?.message || 'Error resetting day', true);
          }
        });
    }

    // -------------------------------------------------------------
    // RESTOCK & INVENTORY UPDATES (Role Checked)
    // -------------------------------------------------------------
    function populateRestockSelect() {
      const select = document.getElementById('restockProdSelect');
      select.innerHTML = '<option value="">-- Choose Drink --</option>';
      products.forEach(p => {
        const opt = document.createElement('option');
        opt.value = p.id;
        opt.textContent = `${p.name} (${p.category.toUpperCase()} - Current: ${p.current_stock})`;
        select.appendChild(opt);
      });

      select.addEventListener('change', () => {
        const pId = parseInt(select.value);
        const prod = products.find(p => p.id === pId);
        document.getElementById('previewCurrentStockVal').textContent = prod ? `${prod.current_stock} bottles` : '--';
      });
    }

    function handleRestockSubmit(e) {
      e.preventDefault();
      const pId  = document.getElementById('restockProdSelect').value;
      const type = document.getElementById('restockActionType').value;
      const qty  = document.getElementById('restockQty').value;

      if (!pId) {
        showToast('Please select a beverage.', true);
        return;
      }

      // Check role if action is set_exact
      if (type === 'set_exact' && currentRole !== 'admin') {
        showToast('Only Admin (PIN: 1122) can directly edit current stock! Staff can only add new stock (N/S).', true);
        unlockAdminModal();
        return;
      }

      const fd = new FormData();
      fd.append('action', 'kc_bar_update_stock');
      fd.append('token', sessionToken);
      fd.append('product_id', pId);
      fd.append('action_type', type);
      fd.append('qty', qty);

      fetch(AJAX_URL, { method: 'POST', body: fd })
        .then(r => r.json())
        .then(res => {
          if (res.success) {
            showToast(res.data.message);
            closeModal('restockModal');
            loadPosData();
          } else {
            showToast(res.data?.message || 'Error updating stock.', true);
            if (res.data?.require_admin) {
              unlockAdminModal();
            }
          }
        });
    }

    // -------------------------------------------------------------
    // ORDERS HISTORY
    // -------------------------------------------------------------
    function renderOrdersHistory() {
      const box = document.getElementById('ordersListContainer');
      box.innerHTML = '';

      if (recentOrders.length === 0) {
        box.innerHTML = '<div style="text-align:center; padding:2rem; color:#64748b;">No completed orders recorded today.</div>';
        openModal('ordersModal');
        return;
      }

      recentOrders.forEach(ord => {
        const row = document.createElement('div');
        row.style.background = '#1e293b';
        row.style.border = '1px solid #334155';
        row.style.borderRadius = '10px';
        row.style.padding = '1rem';
        row.style.marginBottom = '0.75rem';
        row.style.display = 'flex';
        row.style.justifyContent = 'space-between';
        row.style.alignItems = 'center';

        let itemsSummary = ord.items.map(i => `${i.qty}x ${i.name}`).join(', ');

        row.innerHTML = `
          <div>
            <div style="font-weight:800; color:#fff; font-size:1rem; display:flex; align-items:center; gap:0.5rem;">
              <span>${ord.receipt_no}</span>
              <span style="font-size:0.75rem; background:#0f172a; padding:0.2rem 0.5rem; border-radius:4px; color:#d4af37;">${ord.payment_method.toUpperCase()}</span>
            </div>
            <div style="font-size:0.8rem; color:#94a3b8; margin:0.25rem 0;">
              Staff: ${escapeHtml(ord.staff_name)} &bull; Location: ${escapeHtml(ord.table_number || 'Bar')} &bull; ${ord.created_at}
            </div>
            <div style="font-size:0.85rem; color:#cbd5e1;">${escapeHtml(itemsSummary)}</div>
          </div>
          <div style="text-align:right;">
            <div style="font-size:1.25rem; font-weight:800; color:#d4af37; font-family:'JetBrains Mono'; margin-bottom:0.5rem;">
              ₦${formatNaira(ord.total_amount)}
            </div>
            <button type="button" class="nav-btn primary" onclick="reprintOrder(${ord.id})">🖨️ Re-Print</button>
          </div>
        `;
        box.appendChild(row);
      });

      openModal('ordersModal');
    }

    function reprintOrder(orderId) {
      const ord = recentOrders.find(o => o.id == orderId);
      if (!ord) return;

      prepareThermalReceipt(ord);
      document.body.className = 'printing-receipt';
      window.print();
      setTimeout(() => { document.body.className = ''; }, 1000);
    }

    // -------------------------------------------------------------
    // EVENT LISTENERS & SETUP
    // -------------------------------------------------------------
    function setupEventListeners() {
      // Category Filter Buttons
      const catBtns = document.querySelectorAll('#categoryBar .cat-btn');
      catBtns.forEach(btn => {
        btn.addEventListener('click', () => {
          catBtns.forEach(b => b.classList.remove('active'));
          btn.classList.add('active');
          currentCategory = btn.getAttribute('data-category');
          renderProducts();
        });
      });

      // Search Input
      document.getElementById('productSearchInput').addEventListener('input', () => {
        renderProducts();
      });

      // Clear Cart
      document.getElementById('clearCartBtn').addEventListener('click', clearCart);

      // Payment Method Buttons
      const payBtns = document.querySelectorAll('#payMethodGrid .pay-method-btn');
      payBtns.forEach(btn => {
        btn.addEventListener('click', () => {
          payBtns.forEach(b => b.classList.remove('active'));
          btn.classList.add('active');
          currentPayMethod = btn.getAttribute('data-method');
        });
      });

      // Checkout Buttons
      document.getElementById('checkoutPrintBtn').addEventListener('click', () => processCheckout(true));
      document.getElementById('checkoutNoPrintBtn').addEventListener('click', () => processCheckout(false));

      // Top Actions
      document.getElementById('openMonthlyReportBtn').addEventListener('click', loadMonthlyReport);
      document.getElementById('generateMonthlyBtn').addEventListener('click', loadMonthlyReport);
      document.getElementById('openLedgerBtn').addEventListener('click', loadDailyLedger);
      document.getElementById('openOrdersBtn').addEventListener('click', renderOrdersHistory);
      document.getElementById('openRestockBtn').addEventListener('click', () => openModal('restockModal'));
      document.getElementById('openAddDrinkModalBtn').addEventListener('click', () => {
        if (currentRole !== 'admin') {
          showToast('Admin password (1122) required to add new menu drinks.', true);
          unlockAdminModal();
          return;
        }
        openModal('addDrinkModal');
      });
      document.getElementById('startNewDayBtn').addEventListener('click', resetDayShift);

      // Role badge unlock click
      document.getElementById('roleBadgeBtn').addEventListener('click', unlockAdminModal);
      document.getElementById('submitAdminUnlockBtn').addEventListener('click', submitAdminUnlock);

      // Staff Badge Click
      document.getElementById('staffBadgeBtn').addEventListener('click', () => {
        const newName = prompt('Enter Name of Staff on Duty:', currentStaff);
        if (newName && newName.trim()) {
          currentStaff = newName.trim();
          localStorage.setItem('kc_bar_staff', currentStaff);
          updateStaffDisplay();
          showToast(`Active staff set to ${currentStaff}`);
        }
      });

      // Lock Screen
      document.getElementById('lockPosBtn').addEventListener('click', showPinScreen);

      // Forms
      document.getElementById('restockForm').addEventListener('submit', handleRestockSubmit);
      document.getElementById('addDrinkForm').addEventListener('submit', handleAddDrinkSubmit);
    }

    function updateStaffDisplay() {
      document.getElementById('currentStaffNameDisplay').textContent = currentStaff;
    }

    function handleAddDrinkSubmit(e) {
      e.preventDefault();
      const name  = document.getElementById('newDrinkName').value.trim();
      const cat   = document.getElementById('newDrinkCat').value;
      const price = document.getElementById('newDrinkPrice').value;
      const stock = document.getElementById('newDrinkStock').value;

      const fd = new FormData();
      fd.append('action', 'kc_bar_add_product');
      fd.append('token', sessionToken);
      fd.append('name', name);
      fd.append('category', cat);
      fd.append('price', price);
      fd.append('stock', stock);

      fetch(AJAX_URL, { method: 'POST', body: fd })
        .then(r => r.json())
        .then(res => {
          if (res.success) {
            showToast(res.data.message);
            closeModal('addDrinkModal');
            document.getElementById('addDrinkForm').reset();
            loadPosData();
          } else {
            showToast(res.data?.message || 'Error adding drink', true);
          }
        });
    }

    function openModal(id) { document.getElementById(id).style.display = 'flex'; }
    function closeModal(id) { document.getElementById(id).style.display = 'none'; }

    function showToast(msg, isError = false) {
      const toast = document.getElementById('posToast');
      toast.textContent = msg;
      toast.className = isError ? 'show error' : 'show';
      setTimeout(() => { toast.className = ''; }, 3500);
    }

    function formatNaira(num) { return Number(num).toLocaleString('en-NG'); }
    function escapeHtml(str) {
      if (!str) return '';
      return String(str).replace(/[&<>"']/g, m => ({ '&': '&amp;', '<': '&lt;', '>': '&gt;', '"': '&quot;', "'": '&#039;' })[m]);
    }
  </script>
</body>
</html>
