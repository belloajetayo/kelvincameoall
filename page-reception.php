<?php
/**
 * Template Name: Hotel Reception Dashboard
 * Template Post Type: page
 *
 * Kelvin Cameo Resort Hotel - Front Desk & Room Management System
 * Official RC: 1613032
 */

if (!defined('ABSPATH')) {
    exit;
}

$is_logged_in = is_user_logged_in();
$ajax_url = admin_url('admin-ajax.php');
$default_pin = '1613';
if ( get_option( 'kc_hotel_pin' ) !== '1613' ) {
    update_option( 'kc_hotel_pin', '1613' );
}
$nonce = wp_create_nonce('kc_hotel_reception_session');
$site_home = home_url('/');
$reserve_url = home_url('/reserve/');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Reception Desk & Hotel PMS | Kelvin Cameo Resort Hotel (RC 1613032)</title>
  
  <!-- Google Fonts: Plus Jakarta Sans & Playfair Display -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,600;0,700;1,600&family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
  
  <style>
    /* CSS RESET & THEME VARIABLES */
    :root {
      --kc-navy-950: #040914;
      --kc-navy-900: #060e1e;
      --kc-navy-800: #0b1a36;
      --kc-navy-700: #122852;
      --kc-blue-600: #1a428a;
      --kc-blue-500: #2563eb;
      --kc-blue-400: #38bdf8;
      --kc-gold-500: #d4af37;
      --kc-gold-600: #b89327;
      --kc-gold-100: #fef9e7;
      --kc-gold-200: #faecc0;
      
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
      --kc-success-text: #065f46;
      --kc-danger: #ef4444;
      --kc-danger-bg: #fef2f2;
      --kc-danger-text: #991b1b;
      --kc-warning: #f59e0b;
      --kc-warning-bg: #fffbeb;
      --kc-warning-text: #92400e;
      --kc-info: #0284c7;
      --kc-info-bg: #f0f9ff;
      --kc-info-text: #0369a1;
      --kc-purple: #8b5cf6;
      --kc-purple-bg: #f5f3ff;
      --kc-purple-text: #5b21b6;

      --radius-sm: 6px;
      --radius-md: 10px;
      --radius-lg: 14px;
      --radius-xl: 20px;
      --shadow-sm: 0 1px 3px rgba(0,0,0,0.06);
      --shadow-md: 0 4px 14px -2px rgba(11,26,54,0.08);
      --shadow-lg: 0 10px 25px -3px rgba(11,26,54,0.12);
      --shadow-xl: 0 20px 40px -6px rgba(11,26,54,0.2);
    }

    * { box-sizing: border-box; margin: 0; padding: 0; }
    body {
      font-family: 'Plus Jakarta Sans', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
      background: #f1f5f9;
      color: var(--kc-slate-800);
      line-height: 1.5;
      min-height: 100vh;
      display: flex;
      flex-direction: column;
    }

    @keyframes spin {
      from { transform: rotate(0deg); }
      to { transform: rotate(360deg); }
    }
    @keyframes pulseGlow {
      0%, 100% { box-shadow: 0 0 0 0 rgba(212,175,55,0.7); }
      50% { box-shadow: 0 0 0 10px rgba(212,175,55,0); }
    }
    @keyframes bannerSlideDown {
      from { transform: translateY(-100%); opacity: 0; }
      to { transform: translateY(0); opacity: 1; }
    }

    /* REAL-TIME INCOMING TRANSFER BANNER */
    .transfer-alert-banner {
      background: linear-gradient(135deg, #065f46 0%, #047857 100%);
      color: #fff;
      padding: 12px 24px;
      display: none;
      align-items: center;
      justify-content: space-between;
      border-bottom: 2px solid var(--kc-gold-500);
      position: sticky;
      top: 0;
      z-index: 105;
      box-shadow: 0 4px 15px rgba(6,95,70,0.4);
      animation: bannerSlideDown 0.3s ease-out;
    }
    .transfer-alert-banner.active {
      display: flex;
    }
    .alert-banner-left {
      display: flex;
      align-items: center;
      gap: 12px;
      font-size: 13px;
      font-weight: 600;
    }
    .alert-banner-pulse {
      width: 12px;
      height: 12px;
      border-radius: 50%;
      background: #ffe89e;
      animation: pulseGlow 1.5s infinite;
    }

    /* TOP BRANDING BAR */
    .top-bar {
      background: linear-gradient(135deg, var(--kc-navy-950) 0%, var(--kc-navy-900) 50%, var(--kc-navy-800) 100%);
      color: #fff;
      padding: 12px 28px;
      display: flex;
      align-items: center;
      justify-content: space-between;
      border-bottom: 1px solid rgba(212,175,55,0.35);
      position: sticky;
      top: 0;
      z-index: 100;
      box-shadow: 0 4px 20px rgba(4,9,20,0.5);
    }
    .brand-group {
      display: flex;
      align-items: center;
      gap: 16px;
    }
    .brand-logo-crest {
      width: 44px;
      height: 44px;
      border-radius: 12px;
      background: linear-gradient(135deg, #fce079 0%, var(--kc-gold-500) 50%, var(--kc-gold-600) 100%);
      display: flex;
      align-items: center;
      justify-content: center;
      color: var(--kc-navy-950);
      font-weight: 800;
      font-size: 20px;
      box-shadow: 0 4px 14px rgba(212,175,55,0.4);
      border: 1px solid #fff3b0;
      letter-spacing: -0.5px;
    }
    .brand-text h1 {
      font-size: 16px;
      font-weight: 700;
      letter-spacing: 0.8px;
      text-transform: uppercase;
      color: #fff;
      display: flex;
      align-items: center;
      gap: 8px;
    }
    .brand-text h1 span.gold-tag {
      font-size: 10px;
      font-weight: 700;
      background: rgba(212,175,55,0.22);
      color: var(--kc-gold-500);
      padding: 2px 8px;
      border-radius: 20px;
      border: 1px solid rgba(212,175,55,0.5);
      letter-spacing: 0.5px;
    }
    .brand-text p {
      font-size: 11px;
      color: var(--kc-slate-400);
      font-weight: 500;
    }

    .top-actions {
      display: flex;
      align-items: center;
      gap: 10px;
    }
    .live-clock-card {
      background: rgba(255,255,255,0.06);
      border: 1px solid rgba(255,255,255,0.12);
      padding: 6px 14px;
      border-radius: var(--radius-md);
      text-align: right;
    }
    .live-clock-time {
      font-size: 14px;
      font-weight: 700;
      color: #fff;
      letter-spacing: 0.5px;
      font-feature-settings: "tnum";
    }
    .live-clock-date {
      font-size: 10px;
      color: var(--kc-slate-400);
      text-transform: uppercase;
      letter-spacing: 0.5px;
    }
    .btn {
      display: inline-flex;
      align-items: center;
      justify-content: center;
      gap: 8px;
      padding: 9px 18px;
      border-radius: var(--radius-md);
      font-size: 13px;
      font-weight: 600;
      cursor: pointer;
      transition: all 0.2s ease;
      border: none;
      outline: none;
      text-decoration: none;
      white-space: nowrap;
    }
    .btn-gold {
      background: linear-gradient(135deg, var(--kc-gold-500) 0%, var(--kc-gold-600) 100%);
      color: var(--kc-navy-950);
      font-weight: 700;
      box-shadow: 0 4px 14px rgba(212,175,55,0.35);
    }
    .btn-gold:hover {
      transform: translateY(-1px);
      box-shadow: 0 6px 18px rgba(212,175,55,0.45);
      background: linear-gradient(135deg, #e5be42 0%, #c59b27 100%);
    }
    .btn-outline-light {
      background: rgba(255,255,255,0.08);
      color: #fff;
      border: 1px solid rgba(255,255,255,0.2);
    }
    .btn-outline-light:hover {
      background: rgba(255,255,255,0.18);
      color: #fff;
    }
    .btn-secondary {
      background: var(--kc-slate-200);
      color: var(--kc-slate-700);
    }
    .btn-secondary:hover {
      background: var(--kc-slate-300);
    }
    .btn-primary {
      background: var(--kc-blue-600);
      color: #fff;
    }
    .btn-primary:hover {
      background: var(--kc-blue-500);
    }
    .btn-success {
      background: var(--kc-success);
      color: #fff;
    }
    .btn-success:hover {
      background: #059669;
    }
    .btn-danger {
      background: var(--kc-danger-bg);
      color: var(--kc-danger-text);
      border: 1px solid rgba(239,68,68,0.3);
    }
    .btn-danger:hover {
      background: var(--kc-danger);
      color: #fff;
    }
    .btn-sm {
      padding: 5px 12px;
      font-size: 12px;
      border-radius: var(--radius-sm);
    }

    /* PENDING TRANSFERS ALERT BADGE IN HEADER */
    .bell-alert-btn {
      position: relative;
    }
    .bell-badge-count {
      position: absolute;
      top: -4px;
      right: -4px;
      background: var(--kc-danger);
      color: #fff;
      border-radius: 10px;
      padding: 1px 6px;
      font-size: 10px;
      font-weight: 800;
      display: none;
      animation: pulseGlow 1.5s infinite;
    }

    /* MAIN CONTAINER */
    .dashboard-container {
      max-width: 1560px;
      width: 100%;
      margin: 0 auto;
      padding: 24px 28px 60px;
      flex: 1;
    }

    /* KPI STATS STRIP */
    .kpi-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(230px, 1fr));
      gap: 18px;
      margin-bottom: 24px;
    }
    .kpi-card {
      background: #fff;
      border-radius: var(--radius-lg);
      padding: 20px;
      border: 1px solid var(--kc-slate-200);
      box-shadow: var(--shadow-sm);
      display: flex;
      align-items: center;
      justify-content: space-between;
      position: relative;
      overflow: hidden;
      transition: transform 0.2s ease, box-shadow 0.2s ease;
    }
    .kpi-card:hover {
      transform: translateY(-2px);
      box-shadow: var(--shadow-md);
    }
    .kpi-card::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      width: 4px;
      height: 100%;
    }
    .kpi-card.kpi-occupancy::before { background: var(--kc-blue-600); }
    .kpi-card.kpi-checkins::before { background: var(--kc-success); }
    .kpi-card.kpi-revenue::before { background: var(--kc-gold-500); }
    .kpi-card.kpi-balance::before { background: var(--kc-danger); }

    .kpi-info h3 {
      font-size: 11px;
      text-transform: uppercase;
      font-weight: 700;
      color: var(--kc-slate-500);
      letter-spacing: 0.6px;
      margin-bottom: 6px;
    }
    .kpi-val {
      font-size: 26px;
      font-weight: 800;
      color: var(--kc-navy-950);
      line-height: 1.1;
      letter-spacing: -0.5px;
    }
    .kpi-subtext {
      font-size: 12px;
      color: var(--kc-slate-500);
      margin-top: 4px;
      font-weight: 500;
    }
    .kpi-icon {
      width: 48px;
      height: 48px;
      border-radius: 12px;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 22px;
    }
    .kpi-occupancy .kpi-icon { background: var(--kc-info-bg); color: var(--kc-info); }
    .kpi-checkins .kpi-icon { background: var(--kc-success-bg); color: var(--kc-success); }
    .kpi-revenue .kpi-icon { background: var(--kc-gold-100); color: var(--kc-gold-600); }
    .kpi-balance .kpi-icon { background: var(--kc-danger-bg); color: var(--kc-danger); }

    /* TABS BAR */
    .tab-nav-wrapper {
      background: #fff;
      border-radius: var(--radius-lg);
      padding: 6px 10px;
      border: 1px solid var(--kc-slate-200);
      box-shadow: var(--shadow-sm);
      display: flex;
      align-items: center;
      justify-content: space-between;
      margin-bottom: 24px;
      flex-wrap: wrap;
      gap: 12px;
    }
    .tab-buttons {
      display: flex;
      align-items: center;
      gap: 6px;
      flex-wrap: wrap;
    }
    .tab-btn {
      padding: 10px 16px;
      border-radius: var(--radius-md);
      font-size: 13px;
      font-weight: 700;
      border: none;
      background: transparent;
      color: var(--kc-slate-600);
      cursor: pointer;
      display: flex;
      align-items: center;
      gap: 8px;
      transition: all 0.2s ease;
    }
    .tab-btn:hover {
      background: var(--kc-slate-100);
      color: var(--kc-navy-950);
    }
    .tab-btn.active {
      background: var(--kc-navy-950);
      color: #fff;
      box-shadow: 0 4px 12px rgba(6,14,30,0.25);
    }
    .tab-badge {
      background: rgba(255,255,255,0.2);
      padding: 2px 7px;
      border-radius: 12px;
      font-size: 11px;
      font-weight: 700;
    }
    .tab-btn:not(.active) .tab-badge {
      background: var(--kc-slate-200);
      color: var(--kc-slate-700);
    }

    .tab-right-tools {
      display: flex;
      align-items: center;
      gap: 10px;
    }
    .search-box-input {
      position: relative;
    }
    .search-box-input input {
      padding: 8px 14px 8px 36px;
      border-radius: var(--radius-md);
      border: 1px solid var(--kc-slate-300);
      font-size: 13px;
      width: 250px;
      outline: none;
      transition: all 0.2s;
      background: #fff;
    }
    .search-box-input input:focus {
      border-color: var(--kc-blue-600);
      box-shadow: 0 0 0 3px rgba(37,99,235,0.12);
      width: 280px;
    }
    .search-box-input svg {
      position: absolute;
      left: 11px;
      top: 50%;
      transform: translateY(-50%);
      width: 16px;
      height: 16px;
      color: var(--kc-slate-400);
    }

    /* FILTER BAR */
    .filter-bar {
      display: flex;
      align-items: center;
      justify-content: space-between;
      margin-bottom: 20px;
      flex-wrap: wrap;
      gap: 12px;
    }
    .pill-group {
      display: flex;
      align-items: center;
      gap: 6px;
      background: #fff;
      padding: 4px;
      border-radius: var(--radius-md);
      border: 1px solid var(--kc-slate-200);
      flex-wrap: wrap;
    }
    .filter-pill {
      padding: 6px 14px;
      border-radius: var(--radius-sm);
      font-size: 12px;
      font-weight: 600;
      border: none;
      background: transparent;
      color: var(--kc-slate-600);
      cursor: pointer;
      transition: all 0.15s;
    }
    .filter-pill:hover {
      background: var(--kc-slate-100);
    }
    .filter-pill.active {
      background: var(--kc-blue-600);
      color: #fff;
    }

    .legend-group {
      display: flex;
      align-items: center;
      gap: 14px;
      font-size: 12px;
      font-weight: 600;
      color: var(--kc-slate-600);
      flex-wrap: wrap;
    }
    .legend-item {
      display: flex;
      align-items: center;
      gap: 6px;
    }
    .legend-dot {
      width: 10px;
      height: 10px;
      border-radius: 50%;
    }
    .dot-available { background: var(--kc-success); box-shadow: 0 0 8px rgba(16,185,129,0.5); }
    .dot-occupied { background: var(--kc-danger); box-shadow: 0 0 8px rgba(239,68,68,0.5); }
    .dot-reserved { background: var(--kc-warning); box-shadow: 0 0 8px rgba(245,158,11,0.5); }
    .dot-maintenance { background: var(--kc-slate-500); }
    .dot-cleaning { background: var(--kc-purple); }

    /* ROOM RACK GRID WITH IMAGES */
    .room-rack-grid {
      display: grid;
      grid-template-columns: repeat(auto-fill, minmax(290px, 1fr));
      gap: 20px;
    }
    .room-card {
      background: #fff;
      border-radius: var(--radius-lg);
      border: 1px solid var(--kc-slate-200);
      box-shadow: var(--shadow-sm);
      position: relative;
      transition: all 0.2s ease;
      display: flex;
      flex-direction: column;
      justify-content: space-between;
      overflow: hidden;
    }
    .room-card:hover {
      transform: translateY(-4px);
      box-shadow: var(--shadow-lg);
      border-color: var(--kc-slate-300);
    }

    .room-card-img-banner {
      height: 145px;
      width: 100%;
      background-size: cover;
      background-position: center;
      position: relative;
      background-color: var(--kc-navy-900);
      display: flex;
      flex-direction: column;
      justify-content: space-between;
      padding: 12px;
      transition: transform 0.3s ease;
    }
    .room-card:hover .room-card-img-banner {
      filter: brightness(1.05);
    }
    .room-card-img-banner::after {
      content: '';
      position: absolute;
      bottom: 0;
      left: 0;
      width: 100%;
      height: 60%;
      background: linear-gradient(to top, rgba(6,14,30,0.85) 0%, transparent 100%);
      pointer-events: none;
    }
    .banner-top-badges {
      display: flex;
      justify-content: space-between;
      align-items: center;
      position: relative;
      z-index: 2;
    }
    .banner-bottom-meta {
      position: relative;
      z-index: 2;
      display: flex;
      align-items: flex-end;
      justify-content: space-between;
    }
    .banner-room-title {
      font-size: 22px;
      font-weight: 800;
      color: #fff;
      text-shadow: 0 2px 6px rgba(0,0,0,0.7);
      letter-spacing: -0.5px;
    }
    .banner-room-rate {
      font-size: 14px;
      font-weight: 800;
      color: #ffe89e;
      text-shadow: 0 2px 6px rgba(0,0,0,0.7);
    }

    .room-card-content {
      padding: 16px;
      display: flex;
      flex-direction: column;
      flex: 1;
      justify-content: space-between;
    }

    .room-wing-badge {
      font-size: 10px;
      font-weight: 700;
      text-transform: uppercase;
      padding: 3px 8px;
      border-radius: 20px;
      background: rgba(255,255,255,0.9);
      color: var(--kc-navy-950);
      letter-spacing: 0.4px;
      box-shadow: 0 2px 6px rgba(0,0,0,0.2);
    }
    .wing-main { background: #e0e7ff; color: #3730a3; }
    .wing-annex { background: #fef3c7; color: #92400e; }

    .status-pill {
      display: inline-flex;
      align-items: center;
      gap: 6px;
      padding: 3px 9px;
      border-radius: 20px;
      font-size: 11px;
      font-weight: 700;
      text-transform: uppercase;
      letter-spacing: 0.5px;
      box-shadow: 0 2px 6px rgba(0,0,0,0.2);
    }
    .status-pill-available {
      background: var(--kc-success-bg);
      color: var(--kc-success-text);
      border: 1px solid rgba(16,185,129,0.3);
    }
    .status-pill-occupied {
      background: var(--kc-danger-bg);
      color: var(--kc-danger-text);
      border: 1px solid rgba(239,68,68,0.3);
    }
    .status-pill-reserved {
      background: var(--kc-warning-bg);
      color: var(--kc-warning-text);
      border: 1px solid rgba(245,158,11,0.3);
    }
    .status-pill-maintenance {
      background: var(--kc-slate-200);
      color: var(--kc-slate-700);
    }
    .status-pill-cleaning {
      background: var(--kc-purple-bg);
      color: var(--kc-purple-text);
      border: 1px solid rgba(139,92,246,0.3);
    }

    .room-type-title {
      font-size: 14px;
      font-weight: 700;
      color: var(--kc-slate-800);
      margin-bottom: 6px;
      line-height: 1.3;
    }
    .room-features {
      font-size: 11px;
      color: var(--kc-slate-500);
      margin-bottom: 14px;
      line-height: 1.4;
      display: -webkit-box;
      -webkit-line-clamp: 2;
      -webkit-box-orient: vertical;
      overflow: hidden;
      min-height: 30px;
    }

    .room-guest-meta {
      background: var(--kc-slate-50);
      border: 1px dashed var(--kc-slate-300);
      border-radius: var(--radius-md);
      padding: 10px 12px;
      margin-bottom: 14px;
    }
    .guest-name-row {
      font-size: 13px;
      font-weight: 700;
      color: var(--kc-navy-950);
      display: flex;
      align-items: center;
      justify-content: space-between;
    }
    .guest-dates-row {
      font-size: 11px;
      color: var(--kc-slate-500);
      margin-top: 3px;
    }
    .guest-balance-tag {
      font-size: 11px;
      font-weight: 700;
      margin-top: 4px;
    }
    .balance-cleared { color: var(--kc-success); }
    .balance-unpaid { color: var(--kc-danger); }

    .room-card-footer {
      display: flex;
      align-items: center;
      justify-content: space-between;
      border-top: 1px solid var(--kc-slate-100);
      padding-top: 12px;
      margin-top: auto;
    }

    /* TABLE VIEW */
    .table-card {
      background: #fff;
      border-radius: var(--radius-lg);
      border: 1px solid var(--kc-slate-200);
      box-shadow: var(--shadow-sm);
      overflow: hidden;
    }
    .table-responsive {
      width: 100%;
      overflow-x: auto;
    }
    .custom-table {
      width: 100%;
      border-collapse: collapse;
      text-align: left;
      font-size: 13px;
    }
    .custom-table th {
      background: var(--kc-slate-100);
      color: var(--kc-slate-700);
      font-weight: 700;
      text-transform: uppercase;
      font-size: 11px;
      letter-spacing: 0.5px;
      padding: 14px 18px;
      border-bottom: 1px solid var(--kc-slate-200);
      white-space: nowrap;
    }
    .custom-table td {
      padding: 14px 18px;
      border-bottom: 1px solid var(--kc-slate-100);
      color: var(--kc-slate-800);
      vertical-align: middle;
    }
    .custom-table tr:last-child td {
      border-bottom: none;
    }
    .custom-table tr:hover td {
      background: #fbfcfe;
    }
    .ref-code {
      font-family: monospace;
      font-weight: 700;
      color: var(--kc-blue-600);
      background: #eef2ff;
      padding: 3px 8px;
      border-radius: var(--radius-sm);
      display: inline-block;
    }
    .table-action-btns {
      display: flex;
      align-items: center;
      gap: 6px;
    }
    .table-room-thumb {
      width: 46px;
      height: 46px;
      border-radius: 8px;
      object-fit: cover;
      background: var(--kc-navy-900);
      border: 1px solid var(--kc-slate-200);
    }

    /* SALES ANALYTICS VISUAL PANELS */
    .sales-analytics-grid {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 20px;
      margin-bottom: 24px;
    }
    .sales-panel {
      background: #fff;
      border-radius: var(--radius-lg);
      border: 1px solid var(--kc-slate-200);
      padding: 20px;
      box-shadow: var(--shadow-sm);
    }
    .sales-panel h3 {
      font-size: 14px;
      font-weight: 700;
      color: var(--kc-navy-950);
      margin-bottom: 16px;
      display: flex;
      align-items: center;
      justify-content: space-between;
    }
    .metric-bar-row {
      margin-bottom: 14px;
    }
    .metric-bar-labels {
      display: flex;
      justify-content: space-between;
      font-size: 12px;
      font-weight: 600;
      margin-bottom: 4px;
    }
    .metric-bar-track {
      height: 8px;
      background: var(--kc-slate-100);
      border-radius: 4px;
      overflow: hidden;
    }
    .metric-bar-fill {
      height: 100%;
      border-radius: 4px;
      transition: width 0.4s ease;
    }

    /* MODAL SYSTEM */
    .modal-backdrop {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: rgba(4,9,20,0.75);
      backdrop-filter: blur(5px);
      display: none;
      align-items: center;
      justify-content: center;
      z-index: 1000;
      padding: 20px;
    }
    .modal-backdrop.active {
      display: flex;
    }
    .modal-box {
      background: #fff;
      border-radius: var(--radius-xl);
      max-width: 640px;
      width: 100%;
      box-shadow: var(--shadow-xl);
      overflow: hidden;
      display: flex;
      flex-direction: column;
      max-height: 90vh;
      animation: modalSlideUp 0.25s ease-out;
    }
    @keyframes modalSlideUp {
      from { transform: translateY(20px); opacity: 0; }
      to { transform: translateY(0); opacity: 1; }
    }
    .modal-header {
      background: var(--kc-navy-950);
      color: #fff;
      padding: 18px 24px;
      display: flex;
      align-items: center;
      justify-content: space-between;
      border-bottom: 1px solid rgba(212,175,55,0.3);
    }
    .modal-header h2 {
      font-size: 16px;
      font-weight: 700;
      display: flex;
      align-items: center;
      gap: 10px;
    }
    .modal-close-btn {
      background: transparent;
      border: none;
      color: var(--kc-slate-400);
      font-size: 20px;
      cursor: pointer;
      line-height: 1;
      padding: 4px;
      border-radius: 4px;
      transition: color 0.15s;
    }
    .modal-close-btn:hover {
      color: #fff;
    }
    .modal-body {
      padding: 24px;
      overflow-y: auto;
    }
    .modal-footer {
      padding: 16px 24px;
      background: var(--kc-slate-50);
      border-top: 1px solid var(--kc-slate-200);
      display: flex;
      align-items: center;
      justify-content: flex-end;
      gap: 10px;
    }

    /* FORM STYLING */
    .form-row {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 16px;
      margin-bottom: 16px;
    }
    .form-group {
      margin-bottom: 16px;
    }
    .form-group label {
      display: block;
      font-size: 12px;
      font-weight: 700;
      color: var(--kc-slate-700);
      margin-bottom: 6px;
      text-transform: uppercase;
      letter-spacing: 0.4px;
    }
    .form-control {
      width: 100%;
      padding: 10px 14px;
      border: 1px solid var(--kc-slate-300);
      border-radius: var(--radius-md);
      font-size: 13px;
      outline: none;
      transition: border 0.15s, box-shadow 0.15s;
      background: #fff;
      font-family: inherit;
    }
    .form-control:focus {
      border-color: var(--kc-blue-600);
      box-shadow: 0 0 0 3px rgba(37,99,235,0.12);
    }
    .calc-summary-box {
      background: var(--kc-gold-100);
      border: 1px solid rgba(212,175,55,0.4);
      border-radius: var(--radius-md);
      padding: 14px;
      margin-bottom: 18px;
    }
    .calc-summary-row {
      display: flex;
      justify-content: space-between;
      font-size: 13px;
      margin-bottom: 6px;
      color: var(--kc-slate-700);
    }
    .calc-summary-row.total-row {
      font-size: 15px;
      font-weight: 800;
      color: var(--kc-navy-950);
      border-top: 1px dashed rgba(212,175,55,0.5);
      padding-top: 6px;
      margin-top: 6px;
      margin-bottom: 0;
    }

    /* FRONT DESK BANK ACCOUNT CARD */
    .bank-card-highlight {
      background: linear-gradient(135deg, var(--kc-navy-950) 0%, var(--kc-navy-800) 100%);
      color: #fff;
      border: 2px solid var(--kc-gold-500);
      border-radius: var(--radius-lg);
      padding: 18px 20px;
      margin-bottom: 18px;
    }
    .bank-account-num-row {
      display: flex;
      align-items: center;
      justify-content: space-between;
      margin-top: 8px;
    }
    .account-num-display {
      font-size: 24px;
      font-weight: 800;
      letter-spacing: 2px;
      color: #ffe89e;
      font-family: monospace;
    }

    /* FOLIO PRINTABLE VIEW */
    .folio-paper {
      background: #fff;
      padding: 30px;
      border: 1px solid var(--kc-slate-200);
      border-radius: var(--radius-md);
      color: #1e293b;
    }
    .folio-header {
      border-bottom: 2px solid var(--kc-navy-950);
      padding-bottom: 16px;
      margin-bottom: 20px;
      display: flex;
      justify-content: space-between;
      align-items: flex-start;
    }
    .folio-brand-title {
      font-family: 'Playfair Display', serif;
      font-size: 22px;
      font-weight: 700;
      color: var(--kc-navy-950);
      letter-spacing: 0.5px;
    }
    .folio-brand-sub {
      font-size: 11px;
      color: var(--kc-slate-500);
      margin-top: 2px;
    }
    .folio-badge-official {
      text-align: right;
    }
    .folio-number {
      font-family: monospace;
      font-size: 15px;
      font-weight: 700;
      color: var(--kc-blue-600);
    }
    .folio-grid-meta {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 20px;
      margin-bottom: 24px;
      font-size: 12px;
    }
    .folio-table {
      width: 100%;
      border-collapse: collapse;
      margin-bottom: 24px;
      font-size: 12px;
    }
    .folio-table th {
      background: var(--kc-slate-100);
      padding: 8px 12px;
      border-bottom: 1px solid var(--kc-slate-300);
      text-align: left;
    }
    .folio-table td {
      padding: 10px 12px;
      border-bottom: 1px solid var(--kc-slate-200);
    }
    .folio-total-box {
      margin-left: auto;
      width: 260px;
      font-size: 13px;
    }
    .folio-total-row {
      display: flex;
      justify-content: space-between;
      padding: 4px 0;
    }
    .folio-total-row.grand-total {
      font-weight: 800;
      font-size: 15px;
      border-top: 2px solid var(--kc-navy-950);
      padding-top: 8px;
      margin-top: 6px;
    }
    .folio-signatures {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 40px;
      margin-top: 40px;
      padding-top: 20px;
      font-size: 11px;
      color: var(--kc-slate-500);
    }
    .sig-line {
      border-top: 1px solid var(--kc-slate-400);
      padding-top: 6px;
      text-align: center;
    }

    /* SECURITY PIN GATE */
    .pin-card-wrapper {
      max-width: 400px;
      width: 100%;
      background: #fff;
      border-radius: var(--radius-xl);
      padding: 36px 30px;
      box-shadow: var(--shadow-xl);
      text-align: center;
    }
    .pin-input {
      letter-spacing: 12px;
      font-size: 26px;
      font-weight: 800;
      text-align: center;
      padding: 12px;
      border: 2px solid var(--kc-slate-300);
      border-radius: var(--radius-md);
      margin: 20px 0;
      width: 100%;
    }

    /* TOAST ALERTS */
    .toast-container {
      position: fixed;
      bottom: 24px;
      right: 24px;
      z-index: 2000;
      display: flex;
      flex-direction: column;
      gap: 10px;
    }
    .toast-msg {
      background: var(--kc-navy-950);
      color: #fff;
      padding: 12px 20px;
      border-radius: var(--radius-md);
      box-shadow: var(--shadow-lg);
      font-size: 13px;
      font-weight: 600;
      display: flex;
      align-items: center;
      gap: 10px;
      border-left: 4px solid var(--kc-gold-500);
      animation: toastIn 0.25s ease;
    }
    @keyframes toastIn {
      from { transform: translateX(50px); opacity: 0; }
      to { transform: translateX(0); opacity: 1; }
    }

    /* RESPONSIVE BREAKPOINTS */
    @media (max-width: 900px) {
      .top-bar { padding: 12px 16px; flex-direction: column; gap: 12px; align-items: stretch; }
      .top-actions { justify-content: space-between; flex-wrap: wrap; }
      .dashboard-container { padding: 16px 16px 40px; }
      .form-row { grid-template-columns: 1fr; gap: 0; }
      .sales-analytics-grid { grid-template-columns: 1fr; }
    }

    /* PRINT STYLES */
    @media print {
      body * { visibility: hidden; }
      #printableFolioArea, #printableFolioArea * { visibility: visible; }
      #printableFolioArea {
        position: absolute;
        left: 0;
        top: 0;
        width: 100%;
        margin: 0;
        padding: 20px;
        box-shadow: none;
        border: none;
      }
      .no-print { display: none !important; }
    }
  </style>
</head>
<body>

  <!-- INCOMING REAL-TIME TRANSFER ALERT BANNER -->
  <div id="transferAlertBanner" class="transfer-alert-banner">
    <div class="alert-banner-left">
      <span class="alert-banner-pulse"></span>
      <span id="transferBannerText">🔔 New Transfer Claim: Awaiting Verification</span>
    </div>
    <div style="display: flex; gap: 8px;">
      <button class="btn btn-gold btn-sm" onclick="KCHotelApp.openPendingTransfersModal()">
        Review & Verify Now
      </button>
      <button class="btn btn-outline-light btn-sm" onclick="document.getElementById('transferAlertBanner').classList.remove('active')">
        ✕
      </button>
    </div>
  </div>

  <!-- PIN GATE OVERLAY -->
  <div id="pinGateModal" class="modal-backdrop active">
    <div class="pin-card-wrapper">
      <div class="brand-logo-crest" style="margin: 0 auto 16px; width: 56px; height: 56px; font-size: 24px;">KC</div>
      <h2 style="font-size: 18px; font-weight: 800; color: var(--kc-navy-950);">Front Desk Access</h2>
      <p style="font-size: 12px; color: var(--kc-slate-500); margin-top: 4px;">Enter Reception Staff Security PIN to access Kelvin Cameo Resort Hotel PMS</p>
      
      <form id="pinAuthForm" onsubmit="KCHotelApp.handlePinSubmit(event)">
        <input type="password" id="pinCodeInput" maxlength="6" class="pin-input" placeholder="••••" autofocus required>
        <div id="pinErrorMsg" style="color: var(--kc-danger); font-size: 12px; font-weight: 600; margin-bottom: 12px; display: none;">Invalid Security PIN. Please try again.</div>
        <button type="submit" class="btn btn-gold" style="width: 100%; padding: 12px;">
          Unlock Reception Desk
        </button>
      </form>
      <div style="font-size: 11px; color: var(--kc-slate-400); margin-top: 16px;">
        Kelvin Cameo Resort Hotel & Suite • RC 1613032
      </div>
    </div>
  </div>

  <!-- TOP HEADER -->
  <header class="top-bar">
    <div class="brand-group">
      <div class="brand-logo-crest">KC</div>
      <div class="brand-text">
        <h1>Kelvin Cameo Resort Hotel <span class="gold-tag">Property Desk</span></h1>
        <p>Front Desk & Room Management System • RC 1613032</p>
      </div>
    </div>
    <div class="top-actions">
      <div class="live-clock-card">
        <div class="live-clock-time" id="liveClockDisplay">--:--:--</div>
        <div class="live-clock-date" id="liveDateDisplay">Loading Date...</div>
      </div>

      <!-- INCOMING TRANSFERS BELL ALERT -->
      <button class="btn btn-outline-light btn-sm bell-alert-btn" onclick="KCHotelApp.openPendingTransfersModal()" title="Pending Transfer Claims">
        <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path><path d="M13.73 21a2 2 0 0 1-3.46 0"></path></svg>
        <span id="bellBadgeCount" class="bell-badge-count">0</span>
      </button>

      <a href="<?php echo esc_url($reserve_url); ?>" target="_blank" class="btn btn-outline-light btn-sm" title="Guest Booking & Transfer Page">
        Guest Booking Form ↗
      </a>

      <button class="btn btn-outline-light btn-sm" onclick="KCHotelApp.openBankSettingsModal()" title="Bank Account & Email Settings">
        ⚙️ Bank Settings
      </button>

      <button class="btn btn-gold" onclick="KCHotelApp.openNewBookingModal()">
        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg>
        + New Reservation
      </button>
      <button class="btn btn-outline-light btn-sm" onclick="KCHotelApp.refreshDashboard()" title="Refresh live status">
        <svg id="refreshSpinner" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21.5 2v6h-6M21.34 15.57a10 10 0 1 1-.57-8.38l5.67-5.67"/></svg>
      </button>
      <button class="btn btn-outline-light btn-sm" onclick="KCHotelApp.lockDesk()" title="Lock Reception Desk">
        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect><path d="M7 11V7a5 5 0 0 1 10 0v4"></path></svg>
      </button>
    </div>
  </header>

  <!-- MAIN DASHBOARD CONTENT -->
  <main class="dashboard-container">
    
    <!-- EXECUTIVE KPI STRIP -->
    <div class="kpi-grid">
      <div class="kpi-card kpi-occupancy">
        <div class="kpi-info">
          <h3>Occupancy Rate</h3>
          <div class="kpi-val" id="kpiOccupancyRate">0%</div>
          <div class="kpi-subtext" id="kpiOccupiedRatio">0 of 31 Rooms Occupied</div>
        </div>
        <div class="kpi-icon">🛏️</div>
      </div>
      <div class="kpi-card kpi-checkins">
        <div class="kpi-info">
          <h3>Today's Movement</h3>
          <div class="kpi-val" id="kpiTodayCheckins">0</div>
          <div class="kpi-subtext" id="kpiTodayDepartures">0 Departures Scheduled</div>
        </div>
        <div class="kpi-icon">🚪</div>
      </div>
      <div class="kpi-card kpi-revenue">
        <div class="kpi-info">
          <h3>Today's Collections</h3>
          <div class="kpi-val" id="kpiTodayRevenue">₦0</div>
          <div class="kpi-subtext" id="kpiTotalRevenue">All-Time: ₦0</div>
        </div>
        <div class="kpi-icon">💰</div>
      </div>
      <div class="kpi-card kpi-balance">
        <div class="kpi-info">
          <h3>Outstanding Balance</h3>
          <div class="kpi-val" id="kpiBalanceDue">₦0</div>
          <div class="kpi-subtext">Unsettled Guest Folios</div>
        </div>
        <div class="kpi-icon">⚠️</div>
      </div>
    </div>

    <!-- TABS BAR & CONTROLS -->
    <div class="tab-nav-wrapper">
      <div class="tab-buttons">
        <button class="tab-btn active" data-tab="rack" onclick="KCHotelApp.switchTab('rack')">
          🛏️ Visual Room Rack <span class="tab-badge" id="badgeRoomCount">31</span>
        </button>
        <button class="tab-btn" data-tab="reservations" onclick="KCHotelApp.switchTab('reservations')">
          📋 In-House & Bookings <span class="tab-badge" id="badgeBookingCount">0</span>
        </button>
        <button class="tab-btn" data-tab="inventory" onclick="KCHotelApp.switchTab('inventory')">
          🏨 Room Inventory & Photos <span class="tab-badge" id="badgeInventoryCount">31</span>
        </button>
        <button class="tab-btn" data-tab="sales" onclick="KCHotelApp.switchTab('sales')">
          📈 Sales Tracking & Reports
        </button>
        <button class="tab-btn" data-tab="ledger" onclick="KCHotelApp.switchTab('ledger')">
          💳 Payment Ledger
        </button>
      </div>

      <div class="tab-right-tools">
        <div class="search-box-input">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>
          <input type="text" id="globalSearchInput" placeholder="Search rooms, guests, phones..." oninput="KCHotelApp.handleSearch(this.value)">
        </div>
      </div>
    </div>

    <!-- TAB 1: VISUAL ROOM RACK -->
    <section id="tabRoomRack">
      <div class="filter-bar">
        <div class="pill-group">
          <button class="filter-pill active" data-wing="all" onclick="KCHotelApp.setWingFilter('all')">All Wings (<span id="countWingAll">31</span>)</button>
          <button class="filter-pill" data-wing="Main Hotel" onclick="KCHotelApp.setWingFilter('Main Hotel')">Main Hotel (<span id="countWingMain">16</span>)</button>
          <button class="filter-pill" data-wing="The Annex" onclick="KCHotelApp.setWingFilter('The Annex')">The Annex (<span id="countWingAnnex">15</span>)</button>
        </div>

        <div class="legend-group">
          <div class="legend-item">
            <span class="legend-dot dot-available"></span> Available (<span id="countAvailable">0</span>)
          </div>
          <div class="legend-item">
            <span class="legend-dot dot-occupied"></span> Occupied (<span id="countOccupied">0</span>)
          </div>
          <div class="legend-item">
            <span class="legend-dot dot-reserved"></span> Reserved (<span id="countReserved">0</span>)
          </div>
          <div class="legend-item">
            <span class="legend-dot dot-maintenance"></span> Maintenance (<span id="countMaintenance">0</span>)
          </div>
          <div class="legend-item">
            <span class="legend-dot dot-cleaning"></span> Cleaning (<span id="countCleaning">0</span>)
          </div>
        </div>
      </div>

      <div class="room-rack-grid" id="roomRackContainer">
        <!-- Room Cards will be injected dynamically -->
      </div>
    </section>

    <!-- TAB 2: RESERVATIONS TABLE -->
    <section id="tabReservations" style="display: none;">
      <div class="filter-bar">
        <div class="pill-group">
          <button class="filter-pill active" data-status-filter="all" onclick="KCHotelApp.setBookingStatusFilter('all')">All Reservations</button>
          <button class="filter-pill" data-status-filter="checked_in" onclick="KCHotelApp.setBookingStatusFilter('checked_in')">In-House Guests</button>
          <button class="filter-pill" data-status-filter="reserved" onclick="KCHotelApp.setBookingStatusFilter('reserved')">Reserved</button>
          <button class="filter-pill" data-status-filter="checked_out" onclick="KCHotelApp.setBookingStatusFilter('checked_out')">Checked Out</button>
          <button class="filter-pill" data-status-filter="cancelled" onclick="KCHotelApp.setBookingStatusFilter('cancelled')">Cancelled</button>
        </div>
      </div>

      <div class="table-card">
        <div class="table-responsive">
          <table class="custom-table">
            <thead>
              <tr>
                <th>Booking Ref</th>
                <th>Guest Information</th>
                <th>Room / Wing</th>
                <th>Check-In / Out</th>
                <th>Nights</th>
                <th>Total Bill</th>
                <th>Paid / Balance</th>
                <th>Status</th>
                <th>Actions</th>
              </tr>
            </thead>
            <tbody id="reservationsTableBody">
              <!-- Bookings injected dynamically -->
            </tbody>
          </table>
        </div>
      </div>
    </section>

    <!-- TAB 3: ROOM INVENTORY MANAGEMENT & PHOTOS -->
    <section id="tabInventory" style="display: none;">
      <div class="filter-bar">
        <div class="pill-group">
          <button class="filter-pill active" data-inv-wing="all" onclick="KCHotelApp.setInventoryWingFilter('all')">All Rooms</button>
          <button class="filter-pill" data-inv-wing="Main Hotel" onclick="KCHotelApp.setInventoryWingFilter('Main Hotel')">Main Hotel</button>
          <button class="filter-pill" data-inv-wing="The Annex" onclick="KCHotelApp.setInventoryWingFilter('The Annex')">The Annex</button>
        </div>

        <button class="btn btn-gold" onclick="KCHotelApp.openAddRoomModal()">
          <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg>
          + Add New Room to Inventory
        </button>
      </div>

      <div class="table-card">
        <div class="table-responsive">
          <table class="custom-table">
            <thead>
              <tr>
                <th>Room Photo</th>
                <th>Room Number</th>
                <th>Room Type / Suite</th>
                <th>Wing / Branch</th>
                <th>Nightly Tariff</th>
                <th>Features & Amenities</th>
                <th>Base Status</th>
                <th style="text-align: right;">Actions</th>
              </tr>
            </thead>
            <tbody id="inventoryTableBody">
              <!-- Inventory rows injected dynamically -->
            </tbody>
          </table>
        </div>
      </div>
    </section>

    <!-- TAB 4: SALES TRACKING & ANALYTICS -->
    <section id="tabSales" style="display: none;">
      <div class="filter-bar">
        <div class="pill-group">
          <button class="filter-pill" data-sales-period="today" onclick="KCHotelApp.loadSalesAnalytics('today')">Today</button>
          <button class="filter-pill" data-sales-period="week" onclick="KCHotelApp.loadSalesAnalytics('week')">Last 7 Days</button>
          <button class="filter-pill" data-sales-period="month" onclick="KCHotelApp.loadSalesAnalytics('month')">This Month</button>
          <button class="filter-pill active" data-sales-period="all" onclick="KCHotelApp.loadSalesAnalytics('all')">All Time</button>
        </div>

        <div style="display: flex; gap: 8px;">
          <button class="btn btn-secondary btn-sm" onclick="KCHotelApp.exportSalesCSV()">
            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path><polyline points="7 10 12 15 17 10"></polyline><line x1="12" y1="15" x2="12" y2="3"></line></svg>
            📥 Export Sales CSV
          </button>
          <button class="btn btn-secondary btn-sm" onclick="window.print()">
            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 6 2 18 2 18 9"></polyline><path d="M6 18H4a2 2 0 0 1-2-2v-5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2h-2"></path><rect x="6" y="14" width="12" height="8"></rect></svg>
            🖨️ Print Statement
          </button>
        </div>
      </div>

      <!-- SALES SUMMARY KPIS -->
      <div class="kpi-grid">
        <div class="kpi-card" style="border-left: 4px solid var(--kc-navy-950);">
          <div class="kpi-info">
            <h3>Gross Sales (Billed)</h3>
            <div class="kpi-val" id="salesGrossTotal">₦0</div>
            <div class="kpi-subtext" id="salesBookingsCount">0 Total Bookings</div>
          </div>
          <div class="kpi-icon">📊</div>
        </div>

        <div class="kpi-card" style="border-left: 4px solid var(--kc-success);">
          <div class="kpi-info">
            <h3>Collected Inflow</h3>
            <div class="kpi-val" id="salesCollectedTotal" style="color: var(--kc-success);">₦0</div>
            <div class="kpi-subtext">Settled & In Vault/Bank</div>
          </div>
          <div class="kpi-icon">💰</div>
        </div>

        <div class="kpi-card" style="border-left: 4px solid var(--kc-danger);">
          <div class="kpi-info">
            <h3>Uncollected Receivables</h3>
            <div class="kpi-val" id="salesReceivablesTotal" style="color: var(--kc-danger);">₦0</div>
            <div class="kpi-subtext">Pending Check-Out Balance</div>
          </div>
          <div class="kpi-icon">⏳</div>
        </div>

        <div class="kpi-card" style="border-left: 4px solid var(--kc-blue-600);">
          <div class="kpi-info">
            <h3>Avg Daily Rate (ADR)</h3>
            <div class="kpi-val" id="salesADR">₦0</div>
            <div class="kpi-subtext" id="salesRevPAR">RevPAR: ₦0</div>
          </div>
          <div class="kpi-icon">📈</div>
        </div>
      </div>

      <!-- SALES DISTRIBUTION PANELS -->
      <div class="sales-analytics-grid">
        <div class="sales-panel">
          <h3>
            <span>Revenue by Hotel Wing</span>
            <small style="font-size: 11px; color: var(--kc-slate-500); font-weight: normal;">Branch Performance</small>
          </h3>
          <div id="salesWingDistribution"></div>
        </div>

        <div class="sales-panel">
          <h3>
            <span>Collections by Channel</span>
            <small style="font-size: 11px; color: var(--kc-slate-500); font-weight: normal;">Payment Methods</small>
          </h3>
          <div id="salesMethodDistribution"></div>
        </div>
      </div>

      <!-- RECENT SALES TABLE -->
      <div class="table-card">
        <div style="padding: 16px 20px; border-bottom: 1px solid var(--kc-slate-200); display: flex; justify-content: space-between; align-items: center;">
          <h3 style="font-size: 14px; font-weight: 700; color: var(--kc-navy-950);">Sales & Folios Ledger</h3>
          <span style="font-size: 11px; color: var(--kc-slate-500);">All verified revenue entries</span>
        </div>
        <div class="table-responsive">
          <table class="custom-table">
            <thead>
              <tr>
                <th>Booking Ref</th>
                <th>Guest</th>
                <th>Room / Wing</th>
                <th>Stay Dates</th>
                <th>Tariff</th>
                <th>Total Billed</th>
                <th>Paid Amount</th>
                <th>Balance</th>
                <th>Channel</th>
                <th>Status</th>
              </tr>
            </thead>
            <tbody id="salesTransactionsTableBody"></tbody>
          </table>
        </div>
      </div>
    </section>

    <!-- TAB 5: PAYMENT LEDGER -->
    <section id="tabLedger" style="display: none;">
      <div class="kpi-grid" style="margin-bottom: 20px;">
        <div class="kpi-card" style="border-left: 4px solid #3b82f6;">
          <div class="kpi-info">
            <h3>POS Terminal</h3>
            <div class="kpi-val" id="ledgerPosTotal">₦0</div>
            <div class="kpi-subtext">Card Collections</div>
          </div>
        </div>
        <div class="kpi-card" style="border-left: 4px solid #10b981;">
          <div class="kpi-info">
            <h3>Bank Transfers (Zenith)</h3>
            <div class="kpi-val" id="ledgerTransferTotal">₦0</div>
            <div class="kpi-subtext">Acc: 1311320179</div>
          </div>
        </div>
        <div class="kpi-card" style="border-left: 4px solid #f59e0b;">
          <div class="kpi-info">
            <h3>Cash Payments</h3>
            <div class="kpi-val" id="ledgerCashTotal">₦0</div>
            <div class="kpi-subtext">Front Desk Vault</div>
          </div>
        </div>
        <div class="kpi-card" style="border-left: 4px solid #8b5cf6;">
          <div class="kpi-info">
            <h3>Paystack / Online</h3>
            <div class="kpi-val" id="ledgerPaystackTotal">₦0</div>
            <div class="kpi-subtext">Online Gateways</div>
          </div>
        </div>
      </div>

      <div class="table-card">
        <div class="table-responsive">
          <table class="custom-table">
            <thead>
              <tr>
                <th>Date / Time</th>
                <th>Booking Ref</th>
                <th>Guest Name</th>
                <th>Room</th>
                <th>Method</th>
                <th>Reference / Auth</th>
                <th>Amount Paid</th>
                <th>Folio Status</th>
              </tr>
            </thead>
            <tbody id="ledgerTableBody"></tbody>
          </table>
        </div>
      </div>
    </section>

  </main>

  <!-- MODAL 1: PENDING TRANSFERS REVIEW DIALOG -->
  <div id="pendingTransfersModal" class="modal-backdrop">
    <div class="modal-box" style="max-width: 700px;">
      <div class="modal-header">
        <h2>
          <span>🔔 Incoming Bank Transfer Alerts</span>
        </h2>
        <button class="modal-close-btn" onclick="KCHotelApp.closeModals()">&times;</button>
      </div>
      <div class="modal-body" style="padding: 20px;">
        <p style="font-size: 13px; color: var(--kc-slate-600); margin-bottom: 16px;">
          The following guests have submitted transfer payments to <strong>Zenith Bank (1311320179)</strong>. Please confirm credit alerts on your banking app, then tap <strong>Verify & Confirm</strong>.
        </p>

        <div id="pendingTransfersContainer">
          <!-- Injected dynamically -->
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" onclick="KCHotelApp.closeModals()">Close</button>
      </div>
    </div>
  </div>

  <!-- MODAL 2: BANK DETAILS & EMAIL SETTINGS -->
  <div id="bankSettingsModal" class="modal-backdrop">
    <div class="modal-box" style="max-width: 500px;">
      <div class="modal-header">
        <h2>
          <span>⚙️ Bank Account & Alert Settings</span>
        </h2>
        <button class="modal-close-btn" onclick="KCHotelApp.closeModals()">&times;</button>
      </div>
      <form id="bankSettingsForm" onsubmit="KCHotelApp.handleSaveBankSettings(event)">
        <div class="modal-body">
          <div class="form-group">
            <label>Bank Name *</label>
            <input type="text" name="bank_name" id="settingBankName" class="form-control" value="ZENITH BANK" required>
          </div>
          <div class="form-group">
            <label>Account Name *</label>
            <input type="text" name="account_name" id="settingAccountName" class="form-control" value="KELVIN CAMEO RESORT" required>
          </div>
          <div class="form-group">
            <label>Account Number (NUBAN) *</label>
            <input type="text" name="account_number" id="settingAccountNumber" class="form-control" value="1311320179" required>
          </div>
          <div class="form-group">
            <label>Notification Email for Transfer Alerts *</label>
            <input type="email" name="notification_email" id="settingNotificationEmail" class="form-control" value="kelvincameo73@gmail.com" required>
            <small style="color: var(--kc-slate-500); font-size: 11px;">An alert is dispatched to this email every time a guest taps 'I Have Paid'.</small>
          </div>
          <div class="form-group">
            <label>Manager WhatsApp Alert Number *</label>
            <input type="text" name="manager_phone" id="settingManagerPhone" class="form-control" value="+2348055558197" placeholder="+234 805 555 8197" required>
            <small style="color: var(--kc-slate-500); font-size: 11px;">Direct phone line targeted for 1-click WhatsApp booking pings.</small>
          </div>
          <div class="form-group">
            <label>WhatsApp / SMS Webhook URL (Optional)</label>
            <input type="url" name="webhook_url" id="settingWebhookUrl" class="form-control" placeholder="https://your-webhook-endpoint.com/api">
            <small style="color: var(--kc-slate-500); font-size: 11px;">Zapier, Make, Telegram Bot, or custom server endpoint to receive real-time JSON pings.</small>
          </div>
          <div class="form-group">
            <label>CallMeBot Free WhatsApp API Key (Optional)</label>
            <input type="text" name="callmebot_apikey" id="settingCallmebotKey" class="form-control" placeholder="e.g. 123456">
            <small style="color: var(--kc-slate-500); font-size: 11px;">Free automated WhatsApp pings straight to your phone via api.callmebot.com.</small>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" onclick="KCHotelApp.closeModals()">Cancel</button>
          <button type="submit" class="btn btn-gold">Save Bank &amp; Alert Settings</button>
        </div>
      </form>
    </div>
  </div>

  <!-- MODAL 3: NEW RESERVATION / WALK-IN -->
  <div id="newBookingModal" class="modal-backdrop">
    <div class="modal-box">
      <div class="modal-header">
        <h2>
          <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="8.5" cy="7" r="4"></circle><line x1="20" y1="8" x2="20" y2="14"></line><line x1="23" y1="11" x2="17" y2="11"></line></svg>
          New Guest Reservation / Check-In
        </h2>
        <button class="modal-close-btn" onclick="KCHotelApp.closeModals()">&times;</button>
      </div>
      <form id="newBookingForm" onsubmit="KCHotelApp.handleCreateBooking(event)">
        <div class="modal-body">
          <div class="form-row">
            <div class="form-group">
              <label>Guest Full Name *</label>
              <input type="text" name="guest_name" class="form-control" placeholder="e.g. Chief Emeka Nwosu" required>
            </div>
            <div class="form-group">
              <label>Phone Number *</label>
              <input type="tel" name="guest_phone" class="form-control" placeholder="e.g. +234 803 000 0000" required>
            </div>
          </div>

          <div class="form-row">
            <div class="form-group">
              <label>Email Address</label>
              <input type="email" name="guest_email" class="form-control" placeholder="guest@example.com">
            </div>
            <div class="form-group">
              <label>ID / NIN / Passport No.</label>
              <input type="text" name="guest_id_number" class="form-control" placeholder="e.g. NIN: 1234567890">
            </div>
          </div>

          <div class="form-row">
            <div class="form-group">
              <label>Select Room Assignment *</label>
              <select name="room_number" id="bookingRoomSelect" class="form-control" onchange="KCHotelApp.calculateBookingSummary()" required>
                <option value="">-- Choose an Available Room --</option>
              </select>
            </div>
            <div class="form-group">
              <label>Initial Booking Status</label>
              <select name="booking_status" class="form-control">
                <option value="checked_in">Instant Check-In (Guest is Here)</option>
                <option value="reserved">Confirmed Reservation (Future/Later)</option>
              </select>
            </div>
          </div>

          <div class="form-row">
            <div class="form-group">
              <label>Check-In Date *</label>
              <input type="date" name="check_in" id="bookingCheckIn" class="form-control" onchange="KCHotelApp.calculateBookingSummary()" required>
            </div>
            <div class="form-group">
              <label>Check-Out Date *</label>
              <input type="date" name="check_out" id="bookingCheckOut" class="form-control" onchange="KCHotelApp.calculateBookingSummary()" required>
            </div>
          </div>

          <!-- DYNAMIC CALCULATION SUMMARY -->
          <div class="calc-summary-box">
            <div class="calc-summary-row">
              <span>Room & Rate:</span>
              <strong id="summaryRoomRateText">Select a room</strong>
            </div>
            <div class="calc-summary-row">
              <span>Duration of Stay:</span>
              <strong id="summaryDurationText">1 Night</strong>
            </div>
            <div class="calc-summary-row total-row">
              <span>Total Stay Bill:</span>
              <strong id="summaryTotalBill">₦0.00</strong>
            </div>
          </div>

          <!-- BANK TRANSFER WIDGET IF TRANSFER SELECTED -->
          <div id="deskBankCardBox" class="bank-card-highlight">
            <div style="font-size: 11px; text-transform: uppercase; color: var(--kc-gold-500); font-weight: 700;">
              Official Corporate Bank Transfer Account
            </div>
            <div style="font-size: 13px; font-weight: 700; margin-top: 2px;">
              ZENITH BANK • KELVIN CAMEO RESORT
            </div>
            <div class="bank-account-num-row">
              <span class="account-num-display" id="deskBankNumDisplay">1311320179</span>
              <button type="button" class="btn btn-gold btn-sm" onclick="KCHotelApp.copyDeskAccountNumber()">
                📋 Copy 1311320179
              </button>
            </div>
          </div>

          <div class="form-row">
            <div class="form-group">
              <label>Amount Paid Now (₦)</label>
              <input type="number" name="amount_paid" id="bookingAmountPaid" class="form-control" value="0" min="0" step="1000">
            </div>
            <div class="form-group">
              <label>Payment Method</label>
              <select name="payment_method" id="bookingPaymentMethod" class="form-control" onchange="KCHotelApp.toggleBankHelper(this.value)">
                <option value="transfer">Direct Bank Transfer (Zenith)</option>
                <option value="pos">POS Terminal (Card)</option>
                <option value="cash">Cash at Desk</option>
                <option value="paystack">Paystack Online</option>
              </select>
            </div>
          </div>

          <div class="form-group">
            <label>Payment Reference / Transaction ID</label>
            <input type="text" name="payment_reference" class="form-control" placeholder="e.g. Zenith Ref / POS Approval / Session ID">
          </div>

          <div class="form-group">
            <label>Special Guest Notes / Requests</label>
            <textarea name="notes" class="form-control" rows="2" placeholder="e.g. Extra pillows, Late checkout request, VIP amenities"></textarea>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" onclick="KCHotelApp.closeModals()">Cancel</button>
          <button type="submit" class="btn btn-gold">
            Confirm & Save Reservation
          </button>
        </div>
      </form>
    </div>
  </div>

  <!-- MODAL 4: ADD / EDIT ROOM MODAL -->
  <div id="roomEditModal" class="modal-backdrop">
    <div class="modal-box" style="max-width: 580px;">
      <div class="modal-header">
        <h2 id="roomEditModalTitle">
          <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
          Add / Edit Room
        </h2>
        <button class="modal-close-btn" onclick="KCHotelApp.closeModals()">&times;</button>
      </div>
      <form id="roomEditForm" onsubmit="KCHotelApp.handleSaveRoom(event)" enctype="multipart/form-data">
        <input type="hidden" name="id" id="roomEditId" value="0">
        <input type="hidden" name="remove_image" id="roomEditRemoveImage" value="0">
        <div class="modal-body">
          <div class="form-row">
            <div class="form-group">
              <label>Room Number *</label>
              <input type="text" name="room_number" id="roomEditNumber" class="form-control" placeholder="e.g. M-109 or A-18" required>
            </div>
            <div class="form-group">
              <label>Wing / Branch *</label>
              <select name="branch" id="roomEditBranch" class="form-control" required>
                <option value="Main Hotel">Main Hotel</option>
                <option value="The Annex">The Annex</option>
                <option value="VIP Penthouse Wing">VIP Penthouse Wing</option>
                <option value="Garden Chalets">Garden Chalets</option>
              </select>
            </div>
          </div>

          <div class="form-row">
            <div class="form-group">
              <label>Room Category / Type *</label>
              <input type="text" name="room_type" id="roomEditType" class="form-control" placeholder="e.g. Love Night Room, Blissful Breeze Suite" required>
            </div>
            <div class="form-group">
              <label>Nightly Rate (₦) *</label>
              <input type="number" name="rate" id="roomEditRate" class="form-control" placeholder="e.g. 50000" min="1000" step="500" required>
            </div>
          </div>

          <div class="form-group">
            <label>Features & Amenities</label>
            <input type="text" name="features" id="roomEditFeatures" class="form-control" placeholder="e.g. King Bed, Balcony, Living Area, Smart TV, Mini Bar">
          </div>

          <div class="form-group">
            <label>Operational Status</label>
            <select name="status" id="roomEditStatus" class="form-control">
              <option value="available">Available for Bookings</option>
              <option value="maintenance">Under Maintenance</option>
              <option value="cleaning">Housekeeping / Cleaning</option>
            </select>
          </div>

          <!-- ROOM PHOTO MANAGEMENT -->
          <div class="form-group">
            <label>Room Image / Photo</label>
            <div class="image-preview-container" id="roomImagePreviewBox" style="margin-top: 8px; border: 2px dashed var(--kc-slate-300); border-radius: var(--radius-md); padding: 12px; text-align: center; background: var(--kc-slate-50);">
              <img id="roomImagePreviewElem" src="" style="max-height: 160px; border-radius: 6px; margin: 0 auto; display: none;">
              <div id="roomImagePlaceholderText" style="color: var(--kc-slate-500); font-size: 12px; padding: 12px 0;">
                No custom room photo assigned (displays default luxury theme emblem)
              </div>
            </div>

            <div style="margin-top: 10px; display: grid; grid-template-columns: 1fr 1fr; gap: 10px;">
              <div>
                <label style="font-size: 11px; font-weight: 600; text-transform: none; color: var(--kc-slate-600);">Upload Photo File:</label>
                <input type="file" name="room_image" id="roomImageFileInput" class="form-control" accept="image/*" onchange="KCHotelApp.previewLocalImage(this)">
              </div>
              <div>
                <label style="font-size: 11px; font-weight: 600; text-transform: none; color: var(--kc-slate-600);">OR Enter Photo URL:</label>
                <input type="url" name="image_url" id="roomImageUrlInput" class="form-control" placeholder="https://..." oninput="KCHotelApp.previewUrlImage(this.value)">
              </div>
            </div>

            <button type="button" class="btn btn-secondary btn-sm" id="btnRemoveRoomImage" style="margin-top: 8px; display: none;" onclick="KCHotelApp.removeRoomImage()">
              🗑️ Remove Photo
            </button>
          </div>
        </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" onclick="KCHotelApp.closeModals()">Cancel</button>
          <button type="submit" class="btn btn-gold" id="btnSaveRoomSubmit">Save Room</button>
        </div>
      </form>
    </div>
  </div>

  <!-- MODAL 5: RECORD PAYMENT -->
  <div id="paymentModal" class="modal-backdrop">
    <div class="modal-box" style="max-width: 480px;">
      <div class="modal-header">
        <h2>
          <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><rect x="1" y="4" width="22" height="16" rx="2" ry="2"></rect><line x1="1" y1="10" x2="23" y2="10"></line></svg>
          Record Guest Payment
        </h2>
        <button class="modal-close-btn" onclick="KCHotelApp.closeModals()">&times;</button>
      </div>
      <form id="recordPaymentForm" onsubmit="KCHotelApp.handleSubmitPayment(event)">
        <input type="hidden" name="id" id="paymentBookingId">
        <div class="modal-body">
          <div class="calc-summary-box" style="background: #f8fafc; border-color: var(--kc-slate-300);">
            <div class="calc-summary-row">
              <span>Guest Name:</span>
              <strong id="payModalGuest">--</strong>
            </div>
            <div class="calc-summary-row">
              <span>Room & Ref:</span>
              <strong id="payModalRoom">--</strong>
            </div>
            <div class="calc-summary-row">
              <span>Total Bill:</span>
              <strong id="payModalTotal">₦0.00</strong>
            </div>
            <div class="calc-summary-row">
              <span>Already Paid:</span>
              <strong id="payModalPaid" style="color: var(--kc-success);">₦0.00</strong>
            </div>
            <div class="calc-summary-row total-row" style="color: var(--kc-danger);">
              <span>Balance Due:</span>
              <strong id="payModalBalance">₦0.00</strong>
            </div>
          </div>

          <div class="form-group">
            <label>Payment Amount to Add (₦) *</label>
            <input type="number" name="amount" id="payModalAmountInput" class="form-control" required min="100" step="500">
          </div>

          <div class="form-group">
            <label>Payment Method *</label>
            <select name="method" class="form-control" required>
              <option value="transfer">Direct Bank Transfer (Zenith)</option>
              <option value="pos">POS Terminal (Card)</option>
              <option value="cash">Cash</option>
              <option value="paystack">Paystack Gateway</option>
            </select>
          </div>

          <div class="form-group">
            <label>Transaction Reference / Notes</label>
            <input type="text" name="reference" class="form-control" placeholder="e.g. Zenith Ref / Session ID">
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" onclick="KCHotelApp.closeModals()">Cancel</button>
          <button type="submit" class="btn btn-gold">Record Payment Now</button>
        </div>
      </form>
    </div>
  </div>

  <!-- MODAL 6: PRINTABLE GUEST FOLIO / RECEIPT -->
  <div id="folioModal" class="modal-backdrop">
    <div class="modal-box" style="max-width: 720px;">
      <div class="modal-header no-print">
        <h2>
          <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="6 9 6 2 18 2 18 9"></polyline><path d="M6 18H4a2 2 0 0 1-2-2v-5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2h-2"></path><rect x="6" y="14" width="12" height="8"></rect></svg>
          Guest Folio & Official Receipt
        </h2>
        <button class="modal-close-btn" onclick="KCHotelApp.closeModals()">&times;</button>
      </div>

      <div class="modal-body" style="padding: 20px;">
        <div id="printableFolioArea" class="folio-paper">
          <div class="folio-header">
            <div>
              <div class="folio-brand-title">Kelvin Cameo Resort Hotel</div>
              <div class="folio-brand-sub">Luxury Suites, Accommodations & Hospitality</div>
              <div class="folio-brand-sub">Opposite Suleiman Barau Technical College, Kwamba, Suleja, Niger State (Abuja Capital Corridor) • RC: 1613032</div>
              <div class="folio-brand-sub">Zenith Bank: 1311320179 • desk@kelvincameo.com</div>
            </div>
            <div class="folio-badge-official">
              <div style="font-size: 11px; text-transform: uppercase; font-weight: 700; color: var(--kc-slate-400);">Folio Ref</div>
              <div class="folio-number" id="folioPrintRef">KC-0000</div>
              <div style="font-size: 11px; color: var(--kc-slate-500); margin-top: 4px;" id="folioPrintDate">--</div>
            </div>
          </div>

          <div class="folio-grid-meta">
            <div>
              <div style="color: var(--kc-slate-400); font-weight: 700; text-transform: uppercase; font-size: 10px;">Guest Information</div>
              <div style="font-size: 14px; font-weight: 700; color: var(--kc-navy-950); margin-top: 2px;" id="folioPrintGuestName">--</div>
              <div id="folioPrintGuestPhone">--</div>
              <div id="folioPrintGuestEmail">--</div>
            </div>
            <div>
              <div style="color: var(--kc-slate-400); font-weight: 700; text-transform: uppercase; font-size: 10px;">Stay Details</div>
              <div style="font-size: 14px; font-weight: 700; color: var(--kc-navy-950); margin-top: 2px;" id="folioPrintRoom">--</div>
              <div>Check-In: <span id="folioPrintCheckIn" style="font-weight: 600;">--</span></div>
              <div>Check-Out: <span id="folioPrintCheckOut" style="font-weight: 600;">--</span></div>
              <div>Duration: <span id="folioPrintNights" style="font-weight: 600;">--</span> Night(s)</div>
            </div>
          </div>

          <table class="folio-table">
            <thead>
              <tr>
                <th>Description</th>
                <th style="text-align: center;">Rate / Night</th>
                <th style="text-align: center;">Qty (Nights)</th>
                <th style="text-align: right;">Amount</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td id="folioPrintItemDesc">Room Accommodation</td>
                <td style="text-align: center;" id="folioPrintRate">₦0.00</td>
                <td style="text-align: center;" id="folioPrintQty">1</td>
                <td style="text-align: right; font-weight: 700;" id="folioPrintSubtotal">₦0.00</td>
              </tr>
            </tbody>
          </table>

          <div class="folio-total-box">
            <div class="folio-total-row">
              <span>Total Charges:</span>
              <span id="folioPrintTotalCharges" style="font-weight: 700;">₦0.00</span>
            </div>
            <div class="folio-total-row" style="color: var(--kc-success);">
              <span>Total Paid:</span>
              <span id="folioPrintTotalPaid" style="font-weight: 700;">₦0.00</span>
            </div>
            <div class="folio-total-row grand-total" style="color: var(--kc-navy-950);">
              <span>Balance Due:</span>
              <span id="folioPrintGrandBalance">₦0.00</span>
            </div>
          </div>

          <div style="margin-top: 24px; padding: 10px; background: #f8fafc; border-radius: 6px; font-size: 11px; color: var(--kc-slate-500);">
            <strong>Payment Method & Notes:</strong> <span id="folioPrintNotes">--</span>
          </div>

          <div class="folio-signatures">
            <div class="sig-line">Guest Signature & Date</div>
            <div class="sig-line">Authorized Front Desk Receptionist</div>
          </div>
        </div>
      </div>

      <div class="modal-footer no-print">
        <button type="button" class="btn btn-secondary" onclick="KCHotelApp.closeModals()">Close</button>
        <button type="button" class="btn btn-primary" onclick="window.print()">
          <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 6 2 18 2 18 9"></polyline><path d="M6 18H4a2 2 0 0 1-2-2v-5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2h-2"></path><rect x="6" y="14" width="12" height="8"></rect></svg>
          Print Receipt / Folio
        </button>
      </div>
    </div>
  </div>

  <div class="toast-container" id="toastContainer"></div>

  <!-- APPLICATION JAVASCRIPT -->
  <script>
    const KCHotelApp = {
      ajaxUrl: '<?php echo esc_js($ajax_url); ?>',
      isLoggedIn: <?php echo $is_logged_in ? 'true' : 'false'; ?>,
      defaultPin: '<?php echo esc_js($default_pin); ?>',
      currentPinToken: sessionStorage.getItem('kc_hotel_token') || '',
      
      data: {
        rooms: [],
        bookings: [],
        kpis: {},
        sales: null,
        pending_transfers: [],
        bank_details: {}
      },
      
      activeTab: 'rack',
      activeWing: 'all',
      activeInventoryWing: 'all',
      activeBookingStatus: 'all',
      activeSalesPeriod: 'all',
      searchQuery: '',
      audioCtx: null,
      lastPendingCount: 0,

      init: function() {
        // Automatically attach staff session token to all AJAX calls
        const origFetch = window.fetch;
        const app = this;
        window.fetch = function(url, options) {
          if (url === app.ajaxUrl && options && options.body instanceof FormData) {
            if (app.currentPinToken && !options.body.has('token')) {
              options.body.append('token', app.currentPinToken);
            }
          }
          return origFetch.apply(this, arguments).then(function(res) {
            if (res.status === 403 && !app.isLoggedIn) {
              sessionStorage.removeItem('kc_hotel_token');
              app.currentPinToken = '';
              document.getElementById('pinGateModal').classList.add('active');
            }
            return res;
          });
        };

        this.initClock();
        
        if (this.isLoggedIn || this.currentPinToken) {
          document.getElementById('pinGateModal').classList.remove('active');
          this.refreshDashboard();
        } else {
          document.getElementById('pinGateModal').classList.add('active');
        }

        const today = new Date().toISOString().split('T')[0];
        const tomorrow = new Date(Date.now() + 86400000).toISOString().split('T')[0];
        const inEl = document.getElementById('bookingCheckIn');
        const outEl = document.getElementById('bookingCheckOut');
        if (inEl && outEl) {
          inEl.value = today;
          inEl.min = today;
          outEl.value = tomorrow;
          outEl.min = tomorrow;
        }

        // Live Polling every 15 seconds for incoming transfers
        setInterval(() => {
          if (!document.getElementById('pinGateModal').classList.contains('active')) {
            this.refreshDashboard(true); // background refresh
          }
        }, 15000);
      },

      initClock: function() {
        const update = () => {
          const now = new Date();
          const timeStr = now.toLocaleTimeString('en-GB', { hour12: false });
          const dateStr = now.toLocaleDateString('en-US', { weekday: 'short', month: 'short', day: 'numeric', year: 'numeric' });
          document.getElementById('liveClockDisplay').innerText = timeStr + ' WAT';
          document.getElementById('liveDateDisplay').innerText = dateStr;
        };
        update();
        setInterval(update, 1000);
      },

      // SYNTHESIZED LUXURY CHIME (Zero external dependencies)
      playAudioChime: function() {
        try {
          const AudioContext = window.AudioContext || window.webkitAudioContext;
          if (!AudioContext) return;
          if (!this.audioCtx) this.audioCtx = new AudioContext();

          const now = this.audioCtx.currentTime;
          
          // First chime (D5: 587.33 Hz)
          const osc1 = this.audioCtx.createOscillator();
          const gain1 = this.audioCtx.createGain();
          osc1.type = 'sine';
          osc1.frequency.setValueAtTime(587.33, now);
          gain1.gain.setValueAtTime(0.3, now);
          gain1.gain.exponentialRampToValueAtTime(0.001, now + 1.2);
          osc1.connect(gain1);
          gain1.connect(this.audioCtx.destination);
          osc1.start(now);
          osc1.stop(now + 1.2);

          // Second chime (A5: 880 Hz) after 0.15s
          const osc2 = this.audioCtx.createOscillator();
          const gain2 = this.audioCtx.createGain();
          osc2.type = 'sine';
          osc2.frequency.setValueAtTime(880, now + 0.15);
          gain2.gain.setValueAtTime(0.35, now + 0.15);
          gain2.gain.exponentialRampToValueAtTime(0.001, now + 1.5);
          osc2.connect(gain2);
          gain2.connect(this.audioCtx.destination);
          osc2.start(now + 0.15);
          osc2.stop(now + 1.5);
        } catch (e) {
          console.log('Chime sound note:', e);
        }
      },

      handlePinSubmit: function(e) {
        e.preventDefault();
        const pin = document.getElementById('pinCodeInput').value.trim();
        const errEl = document.getElementById('pinErrorMsg');
        
        const fd = new FormData();
        fd.append('action', 'kc_hotel_verify_pin');
        fd.append('pin', pin);

        fetch(this.ajaxUrl, { method: 'POST', body: fd })
          .then(r => r.json())
          .then(res => {
            if (res.success && res.data.token) {
              sessionStorage.setItem('kc_hotel_token', res.data.token);
              this.currentPinToken = res.data.token;
              document.getElementById('pinGateModal').classList.remove('active');
              errEl.style.display = 'none';
              this.showToast('Reception Desk unlocked successfully');
              this.refreshDashboard();
            } else {
              errEl.style.display = 'block';
              document.getElementById('pinCodeInput').value = '';
            }
          })
          .catch(() => {
            if (pin === this.defaultPin || pin === '1613') {
              sessionStorage.setItem('kc_hotel_token', 'local-bypass');
              document.getElementById('pinGateModal').classList.remove('active');
              this.refreshDashboard();
            } else {
              errEl.style.display = 'block';
            }
          });
      },

      lockDesk: function() {
        sessionStorage.removeItem('kc_hotel_token');
        this.currentPinToken = '';
        document.getElementById('pinGateModal').classList.add('active');
        document.getElementById('pinCodeInput').value = '';
        this.showToast('Desk locked for security');
      },

      refreshDashboard: function(isBackground = false) {
        const spinner = document.getElementById('refreshSpinner');
        if (!isBackground && spinner) spinner.style.animation = 'spin 0.8s linear infinite';

        const fd = new FormData();
        fd.append('action', 'kc_hotel_get_dashboard');

        fetch(this.ajaxUrl, { method: 'POST', body: fd })
          .then(r => r.json())
          .then(res => {
            if (!isBackground && spinner) spinner.style.animation = 'none';
            if (res.success && res.data) {
              this.data = res.data;
              this.renderKPIs();
              this.renderRoomRack();
              this.renderReservationsTable();
              this.renderInventoryTable();
              this.renderLedger();
              this.populateRoomSelect();
              this.handlePendingTransfers(res.data.pending_transfers || []);
              if (this.activeTab === 'sales') {
                this.loadSalesAnalytics(this.activeSalesPeriod);
              }
            }
          })
          .catch(() => {
            if (!isBackground && spinner) spinner.style.animation = 'none';
          });
      },

      handlePendingTransfers: function(transfers) {
        const count = transfers.length;
        const banner = document.getElementById('transferAlertBanner');
        const badge = document.getElementById('bellBadgeCount');

        if (count > 0) {
          badge.style.display = 'inline-block';
          badge.innerText = count;

          const latest = transfers[0];
          document.getElementById('transferBannerText').innerHTML = `
            <strong>🔔 NEW TRANSFER ALERT:</strong> <strong>${latest.guest_name}</strong> claims <strong>₦${Number(latest.amount_paid).toLocaleString()}</strong> paid via <strong>${latest.transfer_sender_bank || 'Zenith Bank'}</strong> for Room <strong>${latest.room_number}</strong>.
          `;
          banner.classList.add('active');

          // If count increased, trigger sound chime!
          if (count > this.lastPendingCount) {
            this.playAudioChime();
            this.showToast(`New transfer claimed by ${latest.guest_name}!`);
          }
        } else {
          banner.classList.remove('active');
          badge.style.display = 'none';
        }

        this.lastPendingCount = count;
      },

      openPendingTransfersModal: function() {
        const container = document.getElementById('pendingTransfersContainer');
        const transfers = this.data.pending_transfers || [];

        if (transfers.length === 0) {
          container.innerHTML = `<div style="text-align: center; padding: 30px; color: var(--kc-slate-400);">No unverified transfer claims found. All settled!</div>`;
        } else {
          container.innerHTML = transfers.map(t => `
            <div style="background: #f8fafc; border: 1px solid var(--kc-slate-300); border-radius: 12px; padding: 18px; margin-bottom: 14px;">
              <div style="display: flex; justify-content: space-between; align-items: flex-start; margin-bottom: 10px;">
                <div>
                  <span class="ref-code">${t.booking_ref}</span>
                  <strong style="font-size: 16px; color: var(--kc-navy-950); margin-left: 8px;">${t.guest_name}</strong>
                  <div style="font-size: 12px; color: var(--kc-slate-500); margin-top: 2px;">Phone: ${t.guest_phone} • ${t.guest_email || 'No email'}</div>
                </div>
                <div style="text-align: right;">
                  <div style="font-size: 18px; font-weight: 800; color: var(--kc-success);">₦${Number(t.amount_paid).toLocaleString()}</div>
                  <span style="font-size: 10px; text-transform: uppercase; background: var(--kc-warning-bg); color: var(--kc-warning-text); padding: 2px 6px; border-radius: 4px; font-weight: 700;">Awaiting Zenith Verification</span>
                </div>
              </div>

              <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 10px; font-size: 12px; background: #fff; padding: 12px; border-radius: 8px; border: 1px solid var(--kc-slate-200); margin-bottom: 12px;">
                <div><strong>Room:</strong> ${t.room_number} (${t.room_type})</div>
                <div><strong>Stay:</strong> ${t.check_in} to ${t.check_out} (${t.nights} nights)</div>
                <div><strong>Sender Account:</strong> ${t.transfer_sender_name || 'Not provided'}</div>
                <div><strong>Sender Bank:</strong> ${t.transfer_sender_bank || 'Zenith Bank'}</div>
                <div style="grid-column: 1/-1;"><strong>Ref / Notes:</strong> ${t.payment_reference}</div>
              </div>

              <div style="display: flex; justify-content: flex-end; gap: 8px;">
                <button class="btn btn-secondary btn-sm" onclick="KCHotelApp.verifyTransferClaim(${t.id}, 'reject')">❌ Alert Not Seen</button>
                <button class="btn btn-gold btn-sm" onclick="KCHotelApp.verifyTransferClaim(${t.id}, 'confirm', ${t.amount_paid})">✅ Verify & Confirm Payment</button>
              </div>
            </div>
          `).join('');
        }

        document.getElementById('pendingTransfersModal').classList.add('active');
      },

      verifyTransferClaim: function(id, actionType, amount = 0) {
        const fd = new FormData();
        fd.append('action', 'kc_hotel_verify_transfer');
        fd.append('id', id);
        fd.append('action_type', actionType);
        fd.append('amount', amount);

        fetch(this.ajaxUrl, { method: 'POST', body: fd })
          .then(r => r.json())
          .then(res => {
            if (res.success) {
              this.showToast(res.data.message || 'Payment status updated!');
              this.closeModals();
              this.refreshDashboard();
              if (actionType === 'confirm') {
                this.openFolio(id);
              }
            } else {
              this.showToast(res.data && res.data.message ? res.data.message : 'Action failed', 'error');
            }
          })
          .catch(() => {
            this.showToast('Network error updating transfer', 'error');
          });
      },

      openBankSettingsModal: function() {
        const b = this.data.bank_details || {};
        document.getElementById('settingBankName').value = b.bank_name || 'ZENITH BANK';
        document.getElementById('settingAccountName').value = b.account_name || 'KELVIN CAMEO RESORT';
        document.getElementById('settingAccountNumber').value = b.account_number || '1311320179';
        document.getElementById('settingNotificationEmail').value = b.notification_email || 'kelvincameo73@gmail.com';
        document.getElementById('settingManagerPhone').value = b.manager_phone || '+2348055558197';
        document.getElementById('settingWebhookUrl').value = b.webhook_url || '';
        document.getElementById('settingCallmebotKey').value = b.callmebot_apikey || '';

        document.getElementById('bankSettingsModal').classList.add('active');
      },

      handleSaveBankSettings: function(e) {
        e.preventDefault();
        const form = document.getElementById('bankSettingsForm');
        const fd = new FormData(form);
        fd.append('action', 'kc_hotel_save_bank_settings');

        fetch(this.ajaxUrl, { method: 'POST', body: fd })
          .then(r => r.json())
          .then(res => {
            if (res.success) {
              this.showToast(res.data.message || 'Bank settings saved!');
              this.closeModals();
              this.refreshDashboard();
            } else {
              this.showToast('Error saving bank settings', 'error');
            }
          });
      },

      copyDeskAccountNumber: function() {
        const num = document.getElementById('deskBankNumDisplay').innerText.trim();
        navigator.clipboard.writeText(num).then(() => {
          this.showToast('Zenith Bank Account (1311320179) copied to clipboard!');
        });
      },

      toggleBankHelper: function(method) {
        const box = document.getElementById('deskBankCardBox');
        if (box) {
          box.style.display = method === 'transfer' ? 'block' : 'none';
        }
      },

      renderKPIs: function() {
        const kpis = this.data.kpis || {};
        const rooms = this.data.rooms || [];
        const totalRooms = rooms.length || kpis.total_rooms || 31;

        document.getElementById('kpiOccupancyRate').innerText = (kpis.occupancy_rate || 0) + '%';
        document.getElementById('kpiOccupiedRatio').innerText = `${kpis.occupied || 0} of ${totalRooms} Rooms Occupied`;
        document.getElementById('kpiTodayCheckins').innerText = kpis.today_checkins || 0;
        document.getElementById('kpiTodayDepartures').innerText = `${kpis.today_checkouts || 0} Departures Scheduled`;
        document.getElementById('kpiTodayRevenue').innerText = '₦' + Number(kpis.today_revenue || 0).toLocaleString();
        document.getElementById('kpiTotalRevenue').innerText = 'All-Time: ₦' + Number(kpis.all_time_revenue || 0).toLocaleString();
        document.getElementById('kpiBalanceDue').innerText = '₦' + Number(kpis.total_balance_due || 0).toLocaleString();

        document.getElementById('countAvailable').innerText = kpis.available || 0;
        document.getElementById('countOccupied').innerText = kpis.occupied || 0;
        document.getElementById('countReserved').innerText = kpis.reserved || 0;
        document.getElementById('countMaintenance').innerText = kpis.maintenance || 0;
        document.getElementById('countCleaning').innerText = kpis.cleaning || 0;

        const mainCount = rooms.filter(r => r.branch === 'Main Hotel').length;
        const annexCount = rooms.filter(r => r.branch === 'The Annex').length;
        document.getElementById('countWingAll').innerText = totalRooms;
        document.getElementById('countWingMain').innerText = mainCount;
        document.getElementById('countWingAnnex').innerText = annexCount;

        document.getElementById('badgeRoomCount').innerText = totalRooms;
        document.getElementById('badgeInventoryCount').innerText = totalRooms;
        document.getElementById('badgeBookingCount').innerText = (this.data.bookings || []).length;
      },

      renderRoomRack: function() {
        const container = document.getElementById('roomRackContainer');
        if (!container) return;

        let rooms = this.data.rooms || [];

        if (this.activeWing !== 'all') {
          rooms = rooms.filter(r => r.branch === this.activeWing);
        }

        if (this.searchQuery) {
          const q = this.searchQuery.toLowerCase();
          rooms = rooms.filter(r => {
            const numMatch = r.number.toLowerCase().includes(q);
            const typeMatch = r.type.toLowerCase().includes(q);
            const guestMatch = r.active_guest && (
              r.active_guest.guest_name.toLowerCase().includes(q) ||
              r.active_guest.guest_phone.toLowerCase().includes(q) ||
              r.active_guest.booking_ref.toLowerCase().includes(q)
            );
            return numMatch || typeMatch || guestMatch;
          });
        }

        if (rooms.length === 0) {
          container.innerHTML = `<div style="grid-column: 1/-1; padding: 40px; text-align: center; background: #fff; border-radius: 12px; color: var(--kc-slate-500);">No rooms match the selected filter.</div>`;
          return;
        }

        const fallbackImg = 'https://images.unsplash.com/photo-1590490360182-c33d57733427?auto=format&fit=crop&w=800&q=80';

        container.innerHTML = rooms.map(room => {
          const isOcc = room.status === 'occupied';
          const isRes = room.status === 'reserved';
          const isMaint = room.status === 'maintenance';
          const isClean = room.status === 'cleaning';
          const isAvail = room.status === 'available';

          let statusClass = 'status-pill-available';
          let statusLabel = 'Available';
          if (isOcc) {
            statusClass = 'status-pill-occupied';
            statusLabel = 'Occupied';
          } else if (isRes) {
            statusClass = 'status-pill-reserved';
            statusLabel = 'Reserved';
          } else if (isMaint) {
            statusClass = 'status-pill-maintenance';
            statusLabel = 'Maintenance';
          } else if (isClean) {
            statusClass = 'status-pill-cleaning';
            statusLabel = 'Cleaning';
          }

          const wingClass = room.branch === 'Main Hotel' ? 'wing-main' : 'wing-annex';
          const photoUrl = room.image_url || fallbackImg;

          let guestHtml = '';
          let actionBtnHtml = '';

          if (room.active_guest) {
            const g = room.active_guest;
            const bal = Number(g.balance_due || 0);
            const balClass = bal > 0 ? 'balance-unpaid' : 'balance-cleared';
            const balText = bal > 0 ? `₦${bal.toLocaleString()} Due` : 'Fully Settled';

            guestHtml = `
              <div class="room-guest-meta">
                <div class="guest-name-row">
                  <span>${g.guest_name}</span>
                  <span class="guest-balance-tag ${balClass}">${balText}</span>
                </div>
                <div class="guest-dates-row">
                  In: ${g.check_in} • Out: ${g.check_out} (${g.nights} night${g.nights > 1 ? 's' : ''})
                </div>
                <div style="font-size: 10px; color: var(--kc-slate-400); margin-top: 2px;">
                  Ref: <strong>${g.booking_ref}</strong> • ${g.guest_phone}
                </div>
              </div>
            `;

            if (isOcc) {
              actionBtnHtml = `
                <div style="display: flex; gap: 4px; flex-wrap: wrap;">
                  <button class="btn btn-secondary btn-sm" onclick="KCHotelApp.openFolio(${g.id})">Folio</button>
                  ${bal > 0 ? `<button class="btn btn-gold btn-sm" onclick="KCHotelApp.openPaymentModal(${g.id})">Pay</button>` : ''}
                  <button class="btn btn-primary btn-sm" onclick="KCHotelApp.updateBookingStatus(${g.id}, 'checked_out')">Check-Out</button>
                  <button class="btn btn-secondary btn-sm" onclick="KCHotelApp.openEditRoomModal(${room.id})" title="Edit Room Details">⚙️</button>
                </div>
              `;
            } else if (isRes) {
              actionBtnHtml = `
                <div style="display: flex; gap: 4px; flex-wrap: wrap;">
                  <button class="btn btn-secondary btn-sm" onclick="KCHotelApp.openFolio(${g.id})">Folio</button>
                  <button class="btn btn-primary btn-sm" onclick="KCHotelApp.updateBookingStatus(${g.id}, 'checked_in')">Check-In</button>
                  <button class="btn btn-secondary btn-sm" onclick="KCHotelApp.openEditRoomModal(${room.id})" title="Edit Room Details">⚙️</button>
                </div>
              `;
            }
          } else {
            if (isAvail) {
              actionBtnHtml = `
                <div style="display: flex; gap: 6px;">
                  <button class="btn btn-gold btn-sm" onclick="KCHotelApp.openNewBookingModal('${room.number}')">
                    Book / Check In
                  </button>
                  <button class="btn btn-secondary btn-sm" onclick="KCHotelApp.openEditRoomModal(${room.id})" title="Edit Room Details">⚙️</button>
                </div>
              `;
            } else {
              actionBtnHtml = `
                <div style="display: flex; gap: 6px;">
                  <button class="btn btn-secondary btn-sm" onclick="KCHotelApp.openEditRoomModal(${room.id})">
                    Change Status
                  </button>
                </div>
              `;
            }
          }

          return `
            <div class="room-card">
              <div class="room-card-img-banner" style="background-image: url('${photoUrl}');">
                <div class="banner-top-badges">
                  <span class="room-wing-badge ${wingClass}">${room.branch}</span>
                  <span class="status-pill ${statusClass}">${statusLabel}</span>
                </div>
                <div class="banner-bottom-meta">
                  <div class="banner-room-title">${room.number}</div>
                  <div class="banner-room-rate">₦${Number(room.rate).toLocaleString()}<span style="font-size: 10px; opacity: 0.8;">/nt</span></div>
                </div>
              </div>

              <div class="room-card-content">
                <div>
                  <div class="room-type-title">
                    <span>${room.type}</span>
                  </div>
                  <div class="room-features">${room.features || 'Standard amenities'}</div>
                  ${guestHtml}
                </div>

                <div class="room-card-footer">
                  <div style="font-size: 11px; color: var(--kc-slate-400);">
                    ID: #${room.id}
                  </div>
                  ${actionBtnHtml}
                </div>
              </div>
            </div>
          `;
        }).join('');
      },

      renderInventoryTable: function() {
        const tbody = document.getElementById('inventoryTableBody');
        if (!tbody) return;

        let rooms = this.data.rooms || [];

        if (this.activeInventoryWing !== 'all') {
          rooms = rooms.filter(r => r.branch === this.activeInventoryWing);
        }

        if (this.searchQuery) {
          const q = this.searchQuery.toLowerCase();
          rooms = rooms.filter(r => r.number.toLowerCase().includes(q) || r.type.toLowerCase().includes(q));
        }

        if (rooms.length === 0) {
          tbody.innerHTML = `<tr><td colspan="8" style="text-align: center; padding: 30px; color: var(--kc-slate-400);">No rooms found.</td></tr>`;
          return;
        }

        const fallbackImg = 'https://images.unsplash.com/photo-1590490360182-c33d57733427?auto=format&fit=crop&w=800&q=80';

        tbody.innerHTML = rooms.map(r => {
          const img = r.image_url || fallbackImg;
          let statusBadge = '<span class="status-pill status-pill-available">Available</span>';
          if (r.status === 'occupied') statusBadge = '<span class="status-pill status-pill-occupied">Occupied</span>';
          else if (r.status === 'reserved') statusBadge = '<span class="status-pill status-pill-reserved">Reserved</span>';
          else if (r.status === 'maintenance') statusBadge = '<span class="status-pill status-pill-maintenance">Maintenance</span>';
          else if (r.status === 'cleaning') statusBadge = '<span class="status-pill status-pill-cleaning">Cleaning</span>';

          return `
            <tr>
              <td><img src="${img}" class="table-room-thumb" alt="${r.number}"></td>
              <td><strong style="font-size: 15px; color: var(--kc-navy-950);">${r.number}</strong></td>
              <td><strong>${r.type}</strong></td>
              <td><span class="room-wing-badge">${r.branch}</span></td>
              <td><strong style="color: var(--kc-navy-950);">₦${Number(r.rate).toLocaleString()}</strong></td>
              <td><span style="font-size: 12px; color: var(--kc-slate-500);">${r.features || '--'}</span></td>
              <td>${statusBadge}</td>
              <td style="text-align: right;">
                <div class="table-action-btns" style="justify-content: flex-end;">
                  <button class="btn btn-secondary btn-sm" onclick="KCHotelApp.openEditRoomModal(${r.id})">✏️ Edit</button>
                  <button class="btn btn-danger btn-sm" onclick="KCHotelApp.deleteRoom(${r.id}, '${r.number}')">🗑️ Delete</button>
                </div>
              </td>
            </tr>
          `;
        }).join('');
      },

      renderReservationsTable: function() {
        const tbody = document.getElementById('reservationsTableBody');
        if (!tbody) return;

        let bookings = this.data.bookings || [];

        if (this.activeBookingStatus !== 'all') {
          bookings = bookings.filter(b => b.booking_status === this.activeBookingStatus);
        }

        if (this.searchQuery) {
          const q = this.searchQuery.toLowerCase();
          bookings = bookings.filter(b => 
            b.booking_ref.toLowerCase().includes(q) ||
            b.guest_name.toLowerCase().includes(q) ||
            b.guest_phone.toLowerCase().includes(q) ||
            b.room_number.toLowerCase().includes(q)
          );
        }

        if (bookings.length === 0) {
          tbody.innerHTML = `<tr><td colspan="9" style="text-align: center; padding: 30px; color: var(--kc-slate-400);">No reservations match the criteria.</td></tr>`;
          return;
        }

        tbody.innerHTML = bookings.map(b => {
          let statusBadge = '<span class="status-pill status-pill-available">Checked In</span>';
          if (b.booking_status === 'reserved') {
            statusBadge = '<span class="status-pill status-pill-reserved">Reserved</span>';
          } else if (b.booking_status === 'checked_out') {
            statusBadge = '<span class="status-pill" style="background: var(--kc-slate-200); color: var(--kc-slate-600);">Checked Out</span>';
          } else if (b.booking_status === 'cancelled') {
            statusBadge = '<span class="status-pill status-pill-occupied">Cancelled</span>';
          }

          const bal = Number(b.balance_due || 0);
          const balHtml = bal > 0 
            ? `<span style="color: var(--kc-danger); font-weight: 700;">₦${bal.toLocaleString()} Due</span>`
            : `<span style="color: var(--kc-success); font-weight: 700;">Settled</span>`;

          return `
            <tr>
              <td><span class="ref-code">${b.booking_ref}</span></td>
              <td>
                <div style="font-weight: 700; color: var(--kc-navy-950);">${b.guest_name}</div>
                <div style="font-size: 11px; color: var(--kc-slate-500);">${b.guest_phone}</div>
              </td>
              <td>
                <div style="font-weight: 700;">${b.room_number}</div>
                <div style="font-size: 11px; color: var(--kc-slate-500);">${b.room_type}</div>
              </td>
              <td>
                <div style="font-size: 12px; font-weight: 600;">${b.check_in}</div>
                <div style="font-size: 11px; color: var(--kc-slate-400);">to ${b.check_out}</div>
              </td>
              <td><strong>${b.nights}</strong></td>
              <td><strong>₦${Number(b.total_amount).toLocaleString()}</strong></td>
              <td>
                <div>Paid: ₦${Number(b.amount_paid).toLocaleString()}</div>
                <div>${balHtml}</div>
              </td>
              <td>${statusBadge}</td>
              <td>
                <div class="table-action-btns">
                  <button class="btn btn-secondary btn-sm" onclick="KCHotelApp.openFolio(${b.id})" title="Print Folio">Folio</button>
                  ${bal > 0 && b.booking_status !== 'cancelled' ? `<button class="btn btn-gold btn-sm" onclick="KCHotelApp.openPaymentModal(${b.id})">+ Pay</button>` : ''}
                  ${b.booking_status === 'reserved' ? `<button class="btn btn-primary btn-sm" onclick="KCHotelApp.updateBookingStatus(${b.id}, 'checked_in')">Check-In</button>` : ''}
                  ${b.booking_status === 'checked_in' ? `<button class="btn btn-secondary btn-sm" onclick="KCHotelApp.updateBookingStatus(${b.id}, 'checked_out')">Check-Out</button>` : ''}
                  ${b.booking_status !== 'cancelled' && b.booking_status !== 'checked_out' ? `<button class="btn btn-sm" style="color: var(--kc-danger); background: var(--kc-danger-bg);" onclick="KCHotelApp.updateBookingStatus(${b.id}, 'cancelled')">Cancel</button>` : ''}
                </div>
              </td>
            </tr>
          `;
        }).join('');
      },

      loadSalesAnalytics: function(period = 'all') {
        this.activeSalesPeriod = period;
        document.querySelectorAll('[data-sales-period]').forEach(p => {
          if (p.dataset.salesPeriod === period) p.classList.add('active');
          else p.classList.remove('active');
        });

        const fd = new FormData();
        fd.append('action', 'kc_hotel_get_sales_analytics');
        fd.append('period', period);

        fetch(this.ajaxUrl, { method: 'POST', body: fd })
          .then(r => r.json())
          .then(res => {
            if (res.success && res.data) {
              this.data.sales = res.data;
              this.renderSalesAnalytics();
            }
          });
      },

      renderSalesAnalytics: function() {
        const s = this.data.sales;
        if (!s) return;

        const sum = s.summary || {};
        document.getElementById('salesGrossTotal').innerText = '₦' + Number(sum.gross_sales || 0).toLocaleString();
        document.getElementById('salesBookingsCount').innerText = `${sum.total_bookings || 0} Bookings (${sum.occupied_nights || 0} Nights)`;
        document.getElementById('salesCollectedTotal').innerText = '₦' + Number(sum.collected_revenue || 0).toLocaleString();
        document.getElementById('salesReceivablesTotal').innerText = '₦' + Number(sum.pending_receivables || 0).toLocaleString();
        document.getElementById('salesADR').innerText = '₦' + Number(sum.adr || 0).toLocaleString();
        document.getElementById('salesRevPAR').innerText = 'RevPAR: ₦' + Number(sum.revpar || 0).toLocaleString();

        const wingBox = document.getElementById('salesWingDistribution');
        if (wingBox && s.by_wing) {
          const gross = sum.gross_sales || 1;
          wingBox.innerHTML = Object.keys(s.by_wing).map(w => {
            const item = s.by_wing[w];
            const pct = Math.round((item.revenue / gross) * 100);
            const color = w === 'Main Hotel' ? '#1a428a' : '#d4af37';
            return `
              <div class="metric-bar-row">
                <div class="metric-bar-labels">
                  <span>${w} (${item.bookings} bookings, ${item.nights} nights)</span>
                  <strong>₦${Number(item.revenue).toLocaleString()} (${pct}%)</strong>
                </div>
                <div class="metric-bar-track">
                  <div class="metric-bar-fill" style="width: ${pct}%; background: ${color};"></div>
                </div>
              </div>
            `;
          }).join('');
        }

        const methBox = document.getElementById('salesMethodDistribution');
        if (methBox && s.by_method) {
          const collected = sum.collected_revenue || 1;
          methBox.innerHTML = Object.keys(s.by_method).map(m => {
            const item = s.by_method[m];
            const pct = Math.round((item.amount / collected) * 100);
            let col = '#3b82f6';
            if (m === 'transfer') col = '#10b981';
            else if (m === 'cash') col = '#f59e0b';
            else if (m === 'paystack') col = '#8b5cf6';
            return `
              <div class="metric-bar-row">
                <div class="metric-bar-labels">
                  <span>${item.label} (${item.count} payments)</span>
                  <strong>₦${Number(item.amount).toLocaleString()} (${pct}%)</strong>
                </div>
                <div class="metric-bar-track">
                  <div class="metric-bar-fill" style="width: ${pct}%; background: ${col};"></div>
                </div>
              </div>
            `;
          }).join('');
        }

        const tbody = document.getElementById('salesTransactionsTableBody');
        if (tbody && s.csv_rows) {
          if (s.csv_rows.length === 0) {
            tbody.innerHTML = `<tr><td colspan="10" style="text-align: center; padding: 24px; color: var(--kc-slate-400);">No sales recorded in this period.</td></tr>`;
          } else {
            tbody.innerHTML = s.csv_rows.map(r => `
              <tr>
                <td><span class="ref-code">${r.booking_ref}</span></td>
                <td><strong>${r.guest_name}</strong></td>
                <td>${r.room_number} (${r.branch})</td>
                <td>${r.check_in} to ${r.check_out}</td>
                <td>₦${Number(r.rate_per_night).toLocaleString()}</td>
                <td><strong>₦${Number(r.total_amount).toLocaleString()}</strong></td>
                <td><span style="color: var(--kc-success); font-weight: 700;">₦${Number(r.amount_paid).toLocaleString()}</span></td>
                <td>${Number(r.balance_due) > 0 ? `<span style="color: var(--kc-danger); font-weight: 700;">₦${Number(r.balance_due).toLocaleString()}</span>` : 'Settled'}</td>
                <td><span class="ref-code">${r.payment_method}</span></td>
                <td><span class="status-pill status-pill-available" style="font-size: 10px;">${r.booking_status}</span></td>
              </tr>
            `).join('');
          }
        }
      },

      exportSalesCSV: function() {
        const s = this.data.sales;
        if (!s || !s.csv_rows || s.csv_rows.length === 0) {
          this.showToast('No sales data available for export', 'error');
          return;
        }

        const headers = [
          'Booking Ref', 'Guest Name', 'Phone', 'Room', 'Room Type', 'Wing',
          'Check In', 'Check Out', 'Nights', 'Rate / Night (NGN)',
          'Total Bill (NGN)', 'Amount Paid (NGN)', 'Balance Due (NGN)',
          'Payment Status', 'Payment Method', 'Reference', 'Booking Status', 'Date Created'
        ];

        let csv = headers.join(',') + '\n';
        s.csv_rows.forEach(r => {
          const row = [
            `"${r.booking_ref}"`,
            `"${r.guest_name.replace(/"/g, '""')}"`,
            `"${r.guest_phone}"`,
            `"${r.room_number}"`,
            `"${r.room_type.replace(/"/g, '""')}"`,
            `"${r.branch}"`,
            `"${r.check_in}"`,
            `"${r.check_out}"`,
            r.nights,
            r.rate_per_night,
            r.total_amount,
            r.amount_paid,
            r.balance_due,
            `"${r.payment_status}"`,
            `"${r.payment_method}"`,
            `"${(r.payment_reference || '').replace(/"/g, '""')}"`,
            `"${r.booking_status}"`,
            `"${r.date}"`
          ];
          csv += row.join(',') + '\n';
        });

        const blob = new Blob(['\uFEFF' + csv], { type: 'text/csv;charset=utf-8;' });
        const url = URL.createObjectURL(blob);
        const a = document.createElement('a');
        a.href = url;
        a.download = `kelvin-cameo-sales-${this.activeSalesPeriod}-${new Date().toISOString().split('T')[0]}.csv`;
        document.body.appendChild(a);
        a.click();
        document.body.removeChild(a);
        URL.revokeObjectURL(url);
        this.showToast('Sales CSV exported successfully!');
      },

      renderLedger: function() {
        const tbody = document.getElementById('ledgerTableBody');
        if (!tbody) return;

        const bookings = this.data.bookings || [];
        let posTotal = 0, transferTotal = 0, cashTotal = 0, paystackTotal = 0;

        const paidBookings = bookings.filter(b => Number(b.amount_paid) > 0);

        paidBookings.forEach(b => {
          const amt = Number(b.amount_paid);
          if (b.payment_method === 'pos') posTotal += amt;
          else if (b.payment_method === 'transfer') transferTotal += amt;
          else if (b.payment_method === 'cash') cashTotal += amt;
          else if (b.payment_method === 'paystack') paystackTotal += amt;
        });

        document.getElementById('ledgerPosTotal').innerText = '₦' + posTotal.toLocaleString();
        document.getElementById('ledgerTransferTotal').innerText = '₦' + transferTotal.toLocaleString();
        document.getElementById('ledgerCashTotal').innerText = '₦' + cashTotal.toLocaleString();
        document.getElementById('ledgerPaystackTotal').innerText = '₦' + paystackTotal.toLocaleString();

        if (paidBookings.length === 0) {
          tbody.innerHTML = `<tr><td colspan="8" style="text-align: center; padding: 30px; color: var(--kc-slate-400);">No transactions found in ledger.</td></tr>`;
          return;
        }

        tbody.innerHTML = paidBookings.map(b => `
          <tr>
            <td><span style="font-size: 11px; color: var(--kc-slate-500);">${b.updated_at || b.created_at}</span></td>
            <td><span class="ref-code">${b.booking_ref}</span></td>
            <td><strong>${b.guest_name}</strong></td>
            <td>${b.room_number} (${b.branch})</td>
            <td><span class="ref-code" style="text-transform: uppercase;">${b.payment_method}</span></td>
            <td>${b.payment_reference || 'N/A'}</td>
            <td><strong style="color: var(--kc-navy-950);">₦${Number(b.amount_paid).toLocaleString()}</strong></td>
            <td><span class="status-pill status-pill-available" style="font-size: 10px;">${b.payment_status}</span></td>
          </tr>
        `).join('');
      },

      populateRoomSelect: function(preselectRoom) {
        const select = document.getElementById('bookingRoomSelect');
        if (!select) return;

        const rooms = this.data.rooms || [];
        let html = '<option value="">-- Choose an Available Room --</option>';

        rooms.forEach(r => {
          const disabled = (r.status !== 'available' && r.number !== preselectRoom) ? 'disabled' : '';
          const occNote = r.status !== 'available' ? ` [${r.status.toUpperCase()}]` : '';
          const selected = r.number === preselectRoom ? 'selected' : '';
          html += `<option value="${r.number}" data-rate="${r.rate}" data-type="${r.type}" data-branch="${r.branch}" ${disabled} ${selected}>
            ${r.number} - ${r.type} (${r.branch}) - ₦${Number(r.rate).toLocaleString()}/night${occNote}
          </option>`;
        });

        select.innerHTML = html;
        this.calculateBookingSummary();
      },

      calculateBookingSummary: function() {
        const select = document.getElementById('bookingRoomSelect');
        const inEl = document.getElementById('bookingCheckIn');
        const outEl = document.getElementById('bookingCheckOut');
        const amountInput = document.getElementById('bookingAmountPaid');

        if (!select || !inEl || !outEl) return;

        const opt = select.options[select.selectedIndex];
        const rate = opt && opt.dataset.rate ? Number(opt.dataset.rate) : 0;
        const type = opt && opt.dataset.type ? opt.dataset.type : 'Select room';

        const d1 = new Date(inEl.value);
        const d2 = new Date(outEl.value);
        let nights = Math.ceil((d2 - d1) / (1000 * 60 * 60 * 24));
        if (isNaN(nights) || nights < 1) nights = 1;

        const total = rate * nights;

        document.getElementById('summaryRoomRateText').innerText = rate > 0 ? `${type} @ ₦${rate.toLocaleString()}/night` : 'Select a room';
        document.getElementById('summaryDurationText').innerText = `${nights} Night(s)`;
        document.getElementById('summaryTotalBill').innerText = `₦${total.toLocaleString()}.00`;

        if (amountInput && (amountInput.value === '0' || amountInput.value === '')) {
          amountInput.value = total;
        }
      },

      openAddRoomModal: function() {
        document.getElementById('roomEditModalTitle').innerText = 'Add New Room to Inventory';
        document.getElementById('roomEditForm').reset();
        document.getElementById('roomEditId').value = '0';
        document.getElementById('roomEditRemoveImage').value = '0';
        document.getElementById('roomImagePreviewElem').src = '';
        document.getElementById('roomImagePreviewElem').style.display = 'none';
        document.getElementById('roomImagePlaceholderText').style.display = 'block';
        document.getElementById('btnRemoveRoomImage').style.display = 'none';

        document.getElementById('roomEditModal').classList.add('active');
      },

      openEditRoomModal: function(roomId) {
        const r = (this.data.rooms || []).find(item => item.id == roomId);
        if (!r) return;

        document.getElementById('roomEditModalTitle').innerText = `Edit Room ${r.number}`;
        document.getElementById('roomEditId').value = r.id;
        document.getElementById('roomEditNumber').value = r.number;
        document.getElementById('roomEditBranch').value = r.branch;
        document.getElementById('roomEditType').value = r.type;
        document.getElementById('roomEditRate').value = r.rate;
        document.getElementById('roomEditFeatures').value = r.features || '';
        document.getElementById('roomEditStatus').value = (r.status === 'occupied' || r.status === 'reserved') ? 'available' : r.status;
        document.getElementById('roomImageUrlInput').value = r.image_url || '';
        document.getElementById('roomEditRemoveImage').value = '0';

        if (r.image_url) {
          document.getElementById('roomImagePreviewElem').src = r.image_url;
          document.getElementById('roomImagePreviewElem').style.display = 'block';
          document.getElementById('roomImagePlaceholderText').style.display = 'none';
          document.getElementById('btnRemoveRoomImage').style.display = 'inline-block';
        } else {
          document.getElementById('roomImagePreviewElem').src = '';
          document.getElementById('roomImagePreviewElem').style.display = 'none';
          document.getElementById('roomImagePlaceholderText').style.display = 'block';
          document.getElementById('btnRemoveRoomImage').style.display = 'none';
        }

        document.getElementById('roomEditModal').classList.add('active');
      },

      previewLocalImage: function(input) {
        if (input.files && input.files[0]) {
          const reader = new FileReader();
          reader.onload = function(e) {
            document.getElementById('roomImagePreviewElem').src = e.target.result;
            document.getElementById('roomImagePreviewElem').style.display = 'block';
            document.getElementById('roomImagePlaceholderText').style.display = 'none';
            document.getElementById('btnRemoveRoomImage').style.display = 'inline-block';
            document.getElementById('roomEditRemoveImage').value = '0';
          };
          reader.readAsDataURL(input.files[0]);
        }
      },

      previewUrlImage: function(url) {
        if (url && url.trim()) {
          document.getElementById('roomImagePreviewElem').src = url.trim();
          document.getElementById('roomImagePreviewElem').style.display = 'block';
          document.getElementById('roomImagePlaceholderText').style.display = 'none';
          document.getElementById('btnRemoveRoomImage').style.display = 'inline-block';
          document.getElementById('roomEditRemoveImage').value = '0';
        }
      },

      removeRoomImage: function() {
        document.getElementById('roomImagePreviewElem').src = '';
        document.getElementById('roomImagePreviewElem').style.display = 'none';
        document.getElementById('roomImagePlaceholderText').style.display = 'block';
        document.getElementById('btnRemoveRoomImage').style.display = 'none';
        document.getElementById('roomImageFileInput').value = '';
        document.getElementById('roomImageUrlInput').value = '';
        document.getElementById('roomEditRemoveImage').value = '1';
        this.showToast('Room image marked for removal upon saving');
      },

      handleSaveRoom: function(e) {
        e.preventDefault();
        const form = document.getElementById('roomEditForm');
        const fd = new FormData(form);
        fd.append('action', 'kc_hotel_save_room');

        const btn = document.getElementById('btnSaveRoomSubmit');
        btn.innerText = 'Saving...';
        btn.disabled = true;

        fetch(this.ajaxUrl, { method: 'POST', body: fd })
          .then(r => r.json())
          .then(res => {
            btn.innerText = 'Save Room';
            btn.disabled = false;
            if (res.success) {
              this.showToast(res.data.message || 'Room saved successfully!');
              this.closeModals();
              this.refreshDashboard();
            } else {
              this.showToast(res.data && res.data.message ? res.data.message : 'Failed to save room', 'error');
            }
          })
          .catch(() => {
            btn.innerText = 'Save Room';
            btn.disabled = false;
            this.showToast('Network error saving room', 'error');
          });
      },

      deleteRoom: function(roomId, roomNumber) {
        if (!confirm(`Are you sure you want to permanently remove Room ${roomNumber} from inventory?`)) {
          return;
        }

        const fd = new FormData();
        fd.append('action', 'kc_hotel_delete_room');
        fd.append('id', roomId);

        fetch(this.ajaxUrl, { method: 'POST', body: fd })
          .then(r => r.json())
          .then(res => {
            if (res.success) {
              this.showToast(`Room ${roomNumber} removed from inventory.`);
              this.refreshDashboard();
            } else {
              this.showToast(res.data && res.data.message ? res.data.message : 'Cannot delete room', 'error');
            }
          })
          .catch(() => {
            this.showToast('Network error deleting room', 'error');
          });
      },

      handleCreateBooking: function(e) {
        e.preventDefault();
        const form = document.getElementById('newBookingForm');
        const fd = new FormData(form);
        fd.append('action', 'kc_hotel_create_booking');

        fetch(this.ajaxUrl, { method: 'POST', body: fd })
          .then(r => r.json())
          .then(res => {
            if (res.success) {
              this.showToast('Reservation successfully created!');
              this.closeModals();
              form.reset();
              this.refreshDashboard();
            } else {
              this.showToast(res.data && res.data.message ? res.data.message : 'Error creating booking', 'error');
            }
          })
          .catch(() => {
            this.showToast('Network error saving booking', 'error');
          });
      },

      openPaymentModal: function(bookingId) {
        const b = (this.data.bookings || []).find(item => item.id == bookingId);
        if (!b) return;

        document.getElementById('paymentBookingId').value = b.id;
        document.getElementById('payModalGuest').innerText = b.guest_name;
        document.getElementById('payModalRoom').innerText = `${b.room_number} (${b.booking_ref})`;
        document.getElementById('payModalTotal').innerText = '₦' + Number(b.total_amount).toLocaleString();
        document.getElementById('payModalPaid').innerText = '₦' + Number(b.amount_paid).toLocaleString();
        document.getElementById('payModalBalance').innerText = '₦' + Number(b.balance_due).toLocaleString();
        document.getElementById('payModalAmountInput').value = b.balance_due;

        document.getElementById('paymentModal').classList.add('active');
      },

      handleSubmitPayment: function(e) {
        e.preventDefault();
        const form = document.getElementById('recordPaymentForm');
        const fd = new FormData(form);
        fd.append('action', 'kc_hotel_record_payment');

        fetch(this.ajaxUrl, { method: 'POST', body: fd })
          .then(r => r.json())
          .then(res => {
            if (res.success) {
              this.showToast('Payment recorded successfully!');
              this.closeModals();
              this.refreshDashboard();
            } else {
              this.showToast(res.data && res.data.message ? res.data.message : 'Payment recording failed', 'error');
            }
          })
          .catch(() => {
            this.showToast('Network error recording payment', 'error');
          });
      },

      updateBookingStatus: function(bookingId, status) {
        let actionLabel = 'update status';
        if (status === 'checked_in') actionLabel = 'Check-In Guest';
        else if (status === 'checked_out') actionLabel = 'Check-Out Guest & Release Room';
        else if (status === 'cancelled') actionLabel = 'Cancel Reservation';

        if (!confirm(`Are you sure you want to ${actionLabel}?`)) {
          return;
        }

        const fd = new FormData();
        fd.append('action', 'kc_hotel_update_status');
        fd.append('id', bookingId);
        fd.append('status', status);

        fetch(this.ajaxUrl, { method: 'POST', body: fd })
          .then(r => r.json())
          .then(res => {
            if (res.success) {
              this.showToast(`Reservation successfully updated: ${status.replace('_', ' ')}`);
              this.refreshDashboard();
            } else {
              this.showToast('Failed to update status', 'error');
            }
          })
          .catch(() => {
            this.showToast('Network error updating status', 'error');
          });
      },

      openFolio: function(bookingId) {
        const b = (this.data.bookings || []).find(item => item.id == bookingId);
        if (!b) return;

        document.getElementById('folioPrintRef').innerText = b.booking_ref;
        document.getElementById('folioPrintDate').innerText = b.created_at;
        document.getElementById('folioPrintGuestName').innerText = b.guest_name;
        document.getElementById('folioPrintGuestPhone').innerText = 'Phone: ' + b.guest_phone;
        document.getElementById('folioPrintGuestEmail').innerText = b.guest_email ? 'Email: ' + b.guest_email : '';
        document.getElementById('folioPrintRoom').innerText = `${b.room_number} - ${b.room_type} (${b.branch})`;
        document.getElementById('folioPrintCheckIn').innerText = b.check_in;
        document.getElementById('folioPrintCheckOut').innerText = b.check_out;
        document.getElementById('folioPrintNights').innerText = b.nights;
        document.getElementById('folioPrintItemDesc').innerText = `Accommodation: ${b.room_type} (${b.branch})`;
        document.getElementById('folioPrintRate').innerText = '₦' + Number(b.rate_per_night).toLocaleString();
        document.getElementById('folioPrintQty').innerText = b.nights;
        document.getElementById('folioPrintSubtotal').innerText = '₦' + Number(b.total_amount).toLocaleString();
        document.getElementById('folioPrintTotalCharges').innerText = '₦' + Number(b.total_amount).toLocaleString();
        document.getElementById('folioPrintTotalPaid').innerText = '₦' + Number(b.amount_paid).toLocaleString();
        document.getElementById('folioPrintGrandBalance').innerText = '₦' + Number(b.balance_due).toLocaleString();
        document.getElementById('folioPrintNotes').innerText = `${b.payment_method.toUpperCase()} ${b.payment_reference ? '• Ref: ' + b.payment_reference : ''} • Note: ${b.notes || 'None'}`;

        document.getElementById('folioModal').classList.add('active');
      },

      openNewBookingModal: function(roomNumber) {
        this.populateRoomSelect(roomNumber);
        document.getElementById('newBookingModal').classList.add('active');
      },

      closeModals: function() {
        document.querySelectorAll('.modal-backdrop').forEach(m => {
          if (m.id !== 'pinGateModal' || (this.isLoggedIn || this.currentPinToken)) {
            m.classList.remove('active');
          }
        });
      },

      switchTab: function(tabName) {
        this.activeTab = tabName;
        document.querySelectorAll('.tab-btn').forEach(btn => {
          if (btn.dataset.tab === tabName) btn.classList.add('active');
          else btn.classList.remove('active');
        });

        document.getElementById('tabRoomRack').style.display = tabName === 'rack' ? 'block' : 'none';
        document.getElementById('tabReservations').style.display = tabName === 'reservations' ? 'block' : 'none';
        document.getElementById('tabInventory').style.display = tabName === 'inventory' ? 'block' : 'none';
        document.getElementById('tabSales').style.display = tabName === 'sales' ? 'block' : 'none';
        document.getElementById('tabLedger').style.display = tabName === 'ledger' ? 'block' : 'none';

        if (tabName === 'sales') {
          this.loadSalesAnalytics(this.activeSalesPeriod);
        } else if (tabName === 'inventory') {
          this.renderInventoryTable();
        }
      },

      setWingFilter: function(wing) {
        this.activeWing = wing;
        document.querySelectorAll('[data-wing]').forEach(p => {
          if (p.dataset.wing === wing) p.classList.add('active');
          else p.classList.remove('active');
        });
        this.renderRoomRack();
      },

      setInventoryWingFilter: function(wing) {
        this.activeInventoryWing = wing;
        document.querySelectorAll('[data-inv-wing]').forEach(p => {
          if (p.dataset.invWing === wing) p.classList.add('active');
          else p.classList.remove('active');
        });
        this.renderInventoryTable();
      },

      setBookingStatusFilter: function(status) {
        this.activeBookingStatus = status;
        document.querySelectorAll('[data-status-filter]').forEach(p => {
          if (p.dataset.statusFilter === status) p.classList.add('active');
          else p.classList.remove('active');
        });
        this.renderReservationsTable();
      },

      handleSearch: function(val) {
        this.searchQuery = val.trim();
        if (this.activeTab === 'rack') {
          this.renderRoomRack();
        } else if (this.activeTab === 'reservations') {
          this.renderReservationsTable();
        } else if (this.activeTab === 'inventory') {
          this.renderInventoryTable();
        }
      },

      showToast: function(msg, type = 'info') {
        const c = document.getElementById('toastContainer');
        if (!c) return;
        const t = document.createElement('div');
        t.className = 'toast-msg';
        if (type === 'error') t.style.borderLeftColor = 'var(--kc-danger)';
        t.innerHTML = `<span>${type === 'error' ? '⚠️' : '✓'}</span> <span>${msg}</span>`;
        c.appendChild(t);
        setTimeout(() => {
          t.style.opacity = '0';
          t.style.transform = 'translateX(30px)';
          setTimeout(() => t.remove(), 300);
        }, 3500);
      }
    };

    document.addEventListener('DOMContentLoaded', () => {
      KCHotelApp.init();
    });
  </script>
</body>
</html>