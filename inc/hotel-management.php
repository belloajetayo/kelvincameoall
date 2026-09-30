<?php
/**
 * Kelvin Cameo Resort Hotel - Front Desk & Hotel Management Backend
 * Registration: RC 1613032
 */

if (!defined('ABSPATH')) {
    exit;
}

/**
 * Bank Details Helper
 */
function kc_hotel_get_bank_details() {
    return [
        'bank_name'          => get_option('kc_hotel_bank_name', 'ZENITH BANK'),
        'account_name'        => get_option('kc_hotel_bank_account_name', 'KELVIN CAMEO RESORT'),
        'account_number'      => get_option('kc_hotel_bank_account_number', '1311320179'),
        'notification_email'  => get_option('kc_hotel_notification_email', 'kelvincameo73@gmail.com'),
        'manager_phone'       => get_option('kc_hotel_manager_phone', '+2348055558197'),
        'webhook_url'         => get_option('kc_notification_webhook_url', ''),
        'callmebot_apikey'    => get_option('kc_callmebot_apikey', '')
    ];
}

/**
 * 1. Database Table Initialization
 */
function kc_hotel_init_db() {
    global $wpdb;
    $charset_collate = $wpdb->get_charset_collate();
    require_once(ABSPATH . 'wp-admin/includes/upgrade.php');

    // Bookings Table
    $table_bookings = $wpdb->prefix . 'kc_hotel_bookings';
    $sql_bookings = "CREATE TABLE IF NOT EXISTS $table_bookings (
        id bigint(20) NOT NULL AUTO_INCREMENT,
        booking_ref varchar(32) NOT NULL,
        guest_name varchar(120) NOT NULL,
        guest_phone varchar(40) NOT NULL,
        guest_email varchar(120) DEFAULT '',
        guest_id_number varchar(80) DEFAULT '',
        room_number varchar(20) NOT NULL,
        room_type varchar(80) NOT NULL,
        branch varchar(40) NOT NULL DEFAULT 'Main Hotel',
        check_in date NOT NULL,
        check_out date NOT NULL,
        nights int(11) NOT NULL DEFAULT 1,
        rate_per_night decimal(12,2) NOT NULL DEFAULT 0.00,
        total_amount decimal(12,2) NOT NULL DEFAULT 0.00,
        amount_paid decimal(12,2) NOT NULL DEFAULT 0.00,
        balance_due decimal(12,2) NOT NULL DEFAULT 0.00,
        payment_status varchar(20) NOT NULL DEFAULT 'pending',
        payment_method varchar(30) NOT NULL DEFAULT 'cash',
        payment_reference varchar(100) DEFAULT '',
        booking_status varchar(20) NOT NULL DEFAULT 'reserved',
        notes text DEFAULT '',
        receptionist_name varchar(80) DEFAULT 'Front Desk',
        transfer_claimed tinyint(1) NOT NULL DEFAULT 0,
        transfer_sender_name varchar(120) DEFAULT '',
        transfer_sender_bank varchar(80) DEFAULT '',
        transfer_verified tinyint(1) NOT NULL DEFAULT 0,
        created_at datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
        updated_at datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
        PRIMARY KEY  (id),
        UNIQUE KEY booking_ref (booking_ref),
        KEY room_number (room_number),
        KEY check_in (check_in),
        KEY check_out (check_out),
        KEY booking_status (booking_status),
        KEY transfer_claimed (transfer_claimed)
    ) $charset_collate;";
    dbDelta($sql_bookings);

    // Rooms Inventory Table
    $table_rooms = $wpdb->prefix . 'kc_hotel_rooms';
    $sql_rooms = "CREATE TABLE IF NOT EXISTS $table_rooms (
        id bigint(20) NOT NULL AUTO_INCREMENT,
        room_number varchar(30) NOT NULL,
        room_type varchar(100) NOT NULL,
        branch varchar(50) NOT NULL DEFAULT 'Main Hotel',
        rate decimal(12,2) NOT NULL DEFAULT 0.00,
        features text DEFAULT '',
        image_url text DEFAULT '',
        status varchar(30) NOT NULL DEFAULT 'available',
        created_at datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
        updated_at datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
        PRIMARY KEY  (id),
        UNIQUE KEY room_number (room_number),
        KEY branch (branch),
        KEY status (status)
    ) $charset_collate;";
    dbDelta($sql_rooms);
}

/**
 * Reconcile Room Inventory Rates with Published Website Tariffs
 */
function kc_hotel_reconcile_room_rates() {
    global $wpdb;
    $table_rooms = $wpdb->prefix . 'kc_hotel_rooms';
    if ($wpdb->get_var("SHOW TABLES LIKE '$table_rooms'") !== $table_rooms) {
        return;
    }
    $reconcile_ver = get_option('kc_hotel_rates_ver', '0');
    if ($reconcile_ver !== '2026.1') {
        $wpdb->query("UPDATE $table_rooms SET rate = 55000.00 WHERE room_type LIKE '%Golden Nest%' AND rate != 55000.00");
        $wpdb->query("UPDATE $table_rooms SET rate = 45000.00 WHERE room_type LIKE '%Prestige%' AND rate != 45000.00");
        $wpdb->query("UPDATE $table_rooms SET rate = 60000.00 WHERE room_type LIKE '%Royal Treat%' AND rate != 60000.00");
        $wpdb->query("UPDATE $table_rooms SET rate = 60000.00 WHERE room_type LIKE '%Blissful Breeze%' AND rate != 60000.00");
        update_option('kc_hotel_rates_ver', '2026.1');
    }
}

/**
 * 2. Room Inventory Fetcher
 */
function kc_hotel_get_room_inventory() {
    global $wpdb;
    $table_rooms = $wpdb->prefix . 'kc_hotel_rooms';

    if ($wpdb->get_var("SHOW TABLES LIKE '$table_rooms'") !== $table_rooms) {
        kc_hotel_init_db();
    }

    kc_hotel_reconcile_room_rates();

    $rows = $wpdb->get_results("SELECT * FROM $table_rooms ORDER BY branch ASC, room_number ASC", ARRAY_A);
    $inventory = [];
    foreach ($rows as $row) {
        $inventory[] = [
            'id' => intval($row['id']),
            'number' => $row['room_number'],
            'type' => $row['room_type'],
            'branch' => $row['branch'],
            'rate' => floatval($row['rate']),
            'features' => $row['features'],
            'image_url' => $row['image_url'] ?: '',
            'status' => $row['status'] ?: 'available'
        ];
    }
    return $inventory;
}

/**
 * 3. Dashboard Aggregator
 */
function kc_hotel_get_dashboard_data() {
    global $wpdb;
    $table_bookings = $wpdb->prefix . 'kc_hotel_bookings';

    $today = date('Y-m-d');
    $inventory = kc_hotel_get_room_inventory();

    // Fetch active bookings
    $active_bookings = $wpdb->get_results(
        "SELECT * FROM $table_bookings 
         WHERE booking_status IN ('checked_in', 'reserved') 
         ORDER BY id DESC", 
        ARRAY_A
    );

    // Map bookings by room number
    $room_bookings = [];
    foreach ($active_bookings as $b) {
        if (!isset($room_bookings[$b['room_number']])) {
            $room_bookings[$b['room_number']] = $b;
        }
    }

    $room_rack = [];
    $occupied_count = 0;
    $reserved_count = 0;
    $maintenance_count = 0;
    $cleaning_count = 0;
    $available_count = 0;

    foreach ($inventory as $room) {
        $num = $room['number'];
        $base_status = $room['status'];

        if (isset($room_bookings[$num])) {
            $active_b = $room_bookings[$num];
            $status = $active_b['booking_status'] === 'checked_in' ? 'occupied' : 'reserved';
            if ($status === 'occupied') $occupied_count++;
            if ($status === 'reserved') $reserved_count++;

            $room_rack[] = array_merge($room, [
                'status' => $status,
                'active_guest' => $active_b
            ]);
        } else {
            if ($base_status === 'maintenance') {
                $maintenance_count++;
                $room_rack[] = array_merge($room, ['status' => 'maintenance', 'active_guest' => null]);
            } elseif ($base_status === 'cleaning') {
                $cleaning_count++;
                $room_rack[] = array_merge($room, ['status' => 'cleaning', 'active_guest' => null]);
            } else {
                $available_count++;
                $room_rack[] = array_merge($room, ['status' => 'available', 'active_guest' => null]);
            }
        }
    }

    $total_rooms = count($inventory);
    $occupancy_rate = $total_rooms > 0 ? round(($occupied_count / $total_rooms) * 100) : 0;

    // Daily KPIs
    $today_checkins = $wpdb->get_var($wpdb->prepare(
        "SELECT COUNT(*) FROM $table_bookings WHERE check_in = %s AND booking_status != 'cancelled'", 
        $today
    ));
    $today_checkouts = $wpdb->get_var($wpdb->prepare(
        "SELECT COUNT(*) FROM $table_bookings WHERE check_out = %s AND booking_status != 'cancelled'", 
        $today
    ));

    $today_revenue = $wpdb->get_var($wpdb->prepare(
        "SELECT SUM(amount_paid) FROM $table_bookings WHERE DATE(created_at) = %s AND booking_status != 'cancelled'", 
        $today
    ));

    $total_balance_due = $wpdb->get_var(
        "SELECT SUM(balance_due) FROM $table_bookings WHERE booking_status IN ('checked_in', 'reserved')"
    );

    $all_time_revenue = $wpdb->get_var(
        "SELECT SUM(amount_paid) FROM $table_bookings WHERE booking_status != 'cancelled'"
    );

    // All bookings list
    $all_bookings = $wpdb->get_results(
        "SELECT * FROM $table_bookings ORDER BY id DESC LIMIT 200", 
        ARRAY_A
    );

    // Pending Transfer Claims (unverified)
    $pending_transfers = $wpdb->get_results(
        "SELECT * FROM $table_bookings WHERE transfer_claimed = 1 AND transfer_verified = 0 ORDER BY id DESC",
        ARRAY_A
    );

    return [
        'kpis' => [
            'total_rooms' => $total_rooms,
            'available' => $available_count,
            'occupied' => $occupied_count,
            'reserved' => $reserved_count,
            'maintenance' => $maintenance_count,
            'cleaning' => $cleaning_count,
            'occupancy_rate' => $occupancy_rate,
            'today_checkins' => intval($today_checkins),
            'today_checkouts' => intval($today_checkouts),
            'today_revenue' => floatval($today_revenue ?: 0),
            'total_balance_due' => floatval($total_balance_due ?: 0),
            'all_time_revenue' => floatval($all_time_revenue ?: 0),
            'pending_transfers_count' => count($pending_transfers)
        ],
        'rooms' => $room_rack,
        'bookings' => $all_bookings,
        'pending_transfers' => $pending_transfers,
        'bank_details' => kc_hotel_get_bank_details(),
        'today' => $today
    ];
}

// -----------------------------------------------------------------------------
// AJAX ENDPOINTS & SECURITY GUARDS
// -----------------------------------------------------------------------------

/**
 * Verify Front Desk Staff Session or Logged-in WordPress Administrator/Staff
 */
function kc_hotel_verify_staff_session() {
    if (is_user_logged_in() && current_user_can('edit_posts')) {
        return true;
    }
    $token = sanitize_text_field($_REQUEST['token'] ?? ($_SERVER['HTTP_X_KC_HOTEL_TOKEN'] ?? ''));
    if (!empty($token) && wp_verify_nonce($token, 'kc_hotel_reception_session')) {
        return true;
    }
    return false;
}

// Verify Security PIN
add_action('wp_ajax_kc_hotel_verify_pin', 'kc_hotel_ajax_verify_pin');
add_action('wp_ajax_nopriv_kc_hotel_verify_pin', 'kc_hotel_ajax_verify_pin');
function kc_hotel_ajax_verify_pin() {
    $pin = isset($_POST['pin']) ? sanitize_text_field($_POST['pin']) : '';
    $stored_pin = get_option('kc_hotel_pin', '1613');

    if ($pin === $stored_pin || is_user_logged_in()) {
        $token = wp_create_nonce('kc_hotel_reception_session');
        wp_send_json_success(['token' => $token, 'message' => 'PIN accepted']);
    } else {
        wp_send_json_error(['message' => 'Invalid Security PIN']);
    }
}

// Get Dashboard Data (Protected)
add_action('wp_ajax_kc_hotel_get_dashboard', 'kc_hotel_ajax_get_dashboard');
add_action('wp_ajax_nopriv_kc_hotel_get_dashboard', 'kc_hotel_ajax_get_dashboard');
function kc_hotel_ajax_get_dashboard() {
    if (!kc_hotel_verify_staff_session()) {
        wp_send_json_error(['message' => 'Unauthorized: Valid staff session token required.'], 403);
    }
    $data = kc_hotel_get_dashboard_data();
    wp_send_json_success($data);
}

// Save Bank Settings (Protected - Restricted to Administrator)
add_action('wp_ajax_kc_hotel_save_bank_settings', 'kc_hotel_ajax_save_bank_settings');
function kc_hotel_ajax_save_bank_settings() {
    if (!is_user_logged_in() || !current_user_can('manage_options')) {
        wp_send_json_error(['message' => 'Unauthorized: Administrator privileges required to change bank account settings.'], 403);
    }

    $bank_name = sanitize_text_field($_POST['bank_name'] ?? '');
    $account_name = sanitize_text_field($_POST['account_name'] ?? '');
    $account_number = sanitize_text_field($_POST['account_number'] ?? '');
    $notification_email = sanitize_email($_POST['notification_email'] ?? '');
    $manager_phone = sanitize_text_field($_POST['manager_phone'] ?? '');
    $webhook_url = esc_url_raw($_POST['webhook_url'] ?? '');
    $callmebot_apikey = sanitize_text_field($_POST['callmebot_apikey'] ?? '');

    if ($bank_name) update_option('kc_hotel_bank_name', $bank_name);
    if ($account_name) update_option('kc_hotel_bank_account_name', $account_name);
    if ($account_number) update_option('kc_hotel_bank_account_number', $account_number);
    if ($notification_email) update_option('kc_hotel_notification_email', $notification_email);
    if ($manager_phone) update_option('kc_hotel_manager_phone', $manager_phone);
    if (isset($_POST['webhook_url'])) update_option('kc_notification_webhook_url', $webhook_url);
    if (isset($_POST['callmebot_apikey'])) update_option('kc_callmebot_apikey', $callmebot_apikey);

    wp_send_json_success([
        'message' => 'Bank details & notification settings saved successfully!',
        'bank_details' => kc_hotel_get_bank_details()
    ]);
}

// Create New Booking (Internal Front Desk - Protected)
add_action('wp_ajax_kc_hotel_create_booking', 'kc_hotel_ajax_create_booking');
add_action('wp_ajax_nopriv_kc_hotel_create_booking', 'kc_hotel_ajax_create_booking');
function kc_hotel_ajax_create_booking() {
    if (!kc_hotel_verify_staff_session()) {
        wp_send_json_error(['message' => 'Unauthorized: Valid staff session token required.'], 403);
    }
    global $wpdb;
    $table = $wpdb->prefix . 'kc_hotel_bookings';

    $guest_name = sanitize_text_field($_POST['guest_name'] ?? '');
    $guest_phone = sanitize_text_field($_POST['guest_phone'] ?? '');
    $guest_email = sanitize_email($_POST['guest_email'] ?? '');
    $guest_id_number = sanitize_text_field($_POST['guest_id_number'] ?? '');
    $room_number = sanitize_text_field($_POST['room_number'] ?? '');
    $check_in = sanitize_text_field($_POST['check_in'] ?? '');
    $check_out = sanitize_text_field($_POST['check_out'] ?? '');
    $amount_paid = floatval($_POST['amount_paid'] ?? 0);
    $payment_method = sanitize_text_field($_POST['payment_method'] ?? 'cash');
    $payment_reference = sanitize_text_field($_POST['payment_reference'] ?? '');
    $booking_status = sanitize_text_field($_POST['booking_status'] ?? 'checked_in');
    $notes = sanitize_textarea_field($_POST['notes'] ?? '');
    $receptionist_name = sanitize_text_field($_POST['receptionist_name'] ?? 'Front Desk');

    if (empty($guest_name) || empty($guest_phone) || empty($room_number) || empty($check_in) || empty($check_out)) {
        wp_send_json_error(['message' => 'Required fields missing.']);
    }

    $inventory = kc_hotel_get_room_inventory();
    $matched_room = null;
    foreach ($inventory as $r) {
        if ($r['number'] === $room_number) {
            $matched_room = $r;
            break;
        }
    }

    if (!$matched_room) {
        wp_send_json_error(['message' => 'Selected room not recognized in inventory.']);
    }

    $date1 = new DateTime($check_in);
    $date2 = new DateTime($check_out);
    $nights = $date1->diff($date2)->days;
    if ($nights < 1) $nights = 1;

    $rate_per_night = $matched_room['rate'];
    $total_amount = $rate_per_night * $nights;
    $balance_due = max(0, $total_amount - $amount_paid);

    $payment_status = 'pending';
    if ($amount_paid >= $total_amount) {
        $payment_status = 'paid';
    } elseif ($amount_paid > 0) {
        $payment_status = 'partial';
    }

    $booking_ref = 'KC-' . date('y') . '-' . strtoupper(wp_generate_password(5, false));

    $insert_result = $wpdb->insert(
        $table,
        [
            'booking_ref' => $booking_ref,
            'guest_name' => $guest_name,
            'guest_phone' => $guest_phone,
            'guest_email' => $guest_email,
            'guest_id_number' => $guest_id_number,
            'room_number' => $room_number,
            'room_type' => $matched_room['type'],
            'branch' => $matched_room['branch'],
            'check_in' => $check_in,
            'check_out' => $check_out,
            'nights' => $nights,
            'rate_per_night' => $rate_per_night,
            'total_amount' => $total_amount,
            'amount_paid' => $amount_paid,
            'balance_due' => $balance_due,
            'payment_status' => $payment_status,
            'payment_method' => $payment_method,
            'payment_reference' => $payment_reference,
            'booking_status' => $booking_status,
            'notes' => $notes,
            'receptionist_name' => $receptionist_name
        ]
    );

    if ($insert_result) {
        $booking_id = $wpdb->insert_id;
        wp_send_json_success([
            'message' => "Reservation $booking_ref successfully created!",
            'booking_id' => $booking_id,
            'booking_ref' => $booking_ref
        ]);
    } else {
        wp_send_json_error(['message' => 'Database error while saving reservation.']);
    }
}

// -----------------------------------------------------------------------------
// GUEST PUBLIC TRANSFER SUBMISSION ("I HAVE PAID / MADE TRANSFER")
// -----------------------------------------------------------------------------

add_action('wp_ajax_kc_hotel_guest_submit_transfer', 'kc_hotel_ajax_guest_submit_transfer');
add_action('wp_ajax_nopriv_kc_hotel_guest_submit_transfer', 'kc_hotel_ajax_guest_submit_transfer');
function kc_hotel_ajax_guest_submit_transfer() {
    global $wpdb;
    $table = $wpdb->prefix . 'kc_hotel_bookings';

    $guest_name = sanitize_text_field($_POST['guest_name'] ?? '');
    $guest_phone = sanitize_text_field($_POST['guest_phone'] ?? '');
    $guest_email = sanitize_email($_POST['guest_email'] ?? '');
    $room_number = sanitize_text_field($_POST['room_number'] ?? '');
    $room_name = sanitize_text_field($_POST['room_name'] ?? '');
    $check_in = sanitize_text_field($_POST['check_in'] ?? ($_POST['checkin_date'] ?? ''));
    $check_out = sanitize_text_field($_POST['check_out'] ?? ($_POST['checkout_date'] ?? ''));

    // Transfer details
    $sender_name = sanitize_text_field($_POST['sender_name'] ?? '');
    $sender_bank = sanitize_text_field($_POST['sender_bank'] ?? '');
    $transfer_ref = sanitize_text_field($_POST['transfer_reference'] ?? ($_POST['transfer_ref'] ?? ''));
    $amount_claimed = floatval($_POST['amount_paid'] ?? ($_POST['total_amount'] ?? 0));
    $notes = sanitize_textarea_field($_POST['notes'] ?? ($_POST['special_requests'] ?? ''));

    if (empty($guest_name) || empty($guest_phone) || empty($check_in) || empty($check_out)) {
        wp_send_json_error(['message' => 'Please provide your full name, phone number, and stay dates.']);
    }

    if (empty($sender_name)) {
        wp_send_json_error(['message' => 'Please provide the Sender Account Name used to make the transfer.']);
    }

    $inventory = kc_hotel_get_room_inventory();
    $matched_room = null;
    if (!empty($room_number)) {
        foreach ($inventory as $r) {
            if ($r['number'] === $room_number) {
                $matched_room = $r;
                break;
            }
        }
    }
    if (!$matched_room && !empty($room_name)) {
        foreach ($inventory as $r) {
            if (strcasecmp($r['type'], $room_name) === 0 || stripos($r['type'], $room_name) !== false) {
                $matched_room = $r;
                $room_number = $r['number'];
                break;
            }
        }
    }
    if (!$matched_room && !empty($inventory)) {
        $matched_room = $inventory[0];
        $room_number = $matched_room['number'];
    }

    if (!$matched_room) {
        wp_send_json_error(['message' => 'Selected room not found.']);
    }

    $date1 = new DateTime($check_in);
    $date2 = new DateTime($check_out);
    $nights = $date1->diff($date2)->days;
    if ($nights < 1) $nights = 1;

    $rate = $matched_room['rate'];
    $total_amount = $rate * $nights;
    if ($amount_claimed <= 0) {
        $amount_claimed = $total_amount;
    }

    $balance_due = max(0, $total_amount - $amount_claimed);
    $booking_ref = 'KC-' . date('y') . '-' . strtoupper(wp_generate_password(5, false));

    $full_notes = trim("Guest reported manual bank transfer on " . date('Y-m-d H:i') . ".\nSender Account: $sender_name\nBank: $sender_bank\nRef/Session ID: " . ($transfer_ref ?: 'None') . ($notes ? "\nGuest Note: $notes" : ''));

    $wpdb->insert(
        $table,
        [
            'booking_ref' => $booking_ref,
            'guest_name' => $guest_name,
            'guest_phone' => $guest_phone,
            'guest_email' => $guest_email,
            'room_number' => $room_number,
            'room_type' => $matched_room['type'],
            'branch' => $matched_room['branch'],
            'check_in' => $check_in,
            'check_out' => $check_out,
            'nights' => $nights,
            'rate_per_night' => $rate,
            'total_amount' => $total_amount,
            'amount_paid' => $amount_claimed,
            'balance_due' => $balance_due,
            'payment_status' => 'pending', // pending front desk verification
            'payment_method' => 'transfer',
            'payment_reference' => $transfer_ref ?: 'Pending Zenith Verification',
            'booking_status' => 'reserved',
            'notes' => $full_notes,
            'receptionist_name' => 'Online Guest Booking',
            'transfer_claimed' => 1,
            'transfer_sender_name' => $sender_name,
            'transfer_sender_bank' => $sender_bank,
            'transfer_verified' => 0
        ]
    );

    $booking_id = $wpdb->insert_id;

    // 1. Dispatch Email Notification to Hotel Desk
    $bank_details = kc_hotel_get_bank_details();
    $notify_email = $bank_details['notification_email'] ?: 'admin@kelvincameo.com';

    $subject = "🔔 [NEW PAYMENT ALERT] ₦" . number_format($amount_claimed, 2) . " Claimed by $guest_name for Room $room_number";
    
    $headers = ['Content-Type: text/html; charset=UTF-8'];

    $email_body = "
    <div style='font-family: Arial, sans-serif; max-width: 600px; margin: 0 auto; border: 1px solid #e2e8f0; border-radius: 12px; overflow: hidden;'>
      <div style='background: #060e1e; color: #fff; padding: 20px 24px; border-bottom: 2px solid #d4af37;'>
        <h2 style='margin: 0; color: #d4af37; font-size: 18px; text-transform: uppercase;'>Kelvin Cameo Resort Hotel</h2>
        <p style='margin: 4px 0 0; font-size: 12px; color: #94a3b8;'>Front Desk & Reservation Alert • RC 1613032</p>
      </div>

      <div style='padding: 24px; color: #1e293b;'>
        <div style='background: #ecfdf5; border: 1px solid #10b981; border-radius: 8px; padding: 12px 16px; margin-bottom: 20px;'>
          <strong style='color: #065f46; font-size: 14px;'>A guest has tapped 'I Have Paid / Made Transfer'</strong>
          <div style='color: #047857; font-size: 12px; margin-top: 2px;'>Please verify credit alert on Zenith Bank Account: <strong>1311320179</strong></div>
        </div>

        <table style='width: 100%; border-collapse: collapse; font-size: 13px; margin-bottom: 20px;'>
          <tr style='border-bottom: 1px solid #f1f5f9;'>
            <td style='padding: 8px 0; color: #64748b;'>Booking Reference:</td>
            <td style='padding: 8px 0; font-weight: bold; color: #1a428a;'>$booking_ref</td>
          </tr>
          <tr style='border-bottom: 1px solid #f1f5f9;'>
            <td style='padding: 8px 0; color: #64748b;'>Guest Name:</td>
            <td style='padding: 8px 0; font-weight: bold;'>$guest_name</td>
          </tr>
          <tr style='border-bottom: 1px solid #f1f5f9;'>
            <td style='padding: 8px 0; color: #64748b;'>Phone Number:</td>
            <td style='padding: 8px 0; font-weight: bold;'>$guest_phone</td>
          </tr>
          <tr style='border-bottom: 1px solid #f1f5f9;'>
            <td style='padding: 8px 0; color: #64748b;'>Room Assigned:</td>
            <td style='padding: 8px 0; font-weight: bold;'>$room_number ({$matched_room['type']} - {$matched_room['branch']})</td>
          </tr>
          <tr style='border-bottom: 1px solid #f1f5f9;'>
            <td style='padding: 8px 0; color: #64748b;'>Stay Dates:</td>
            <td style='padding: 8px 0;'>$check_in to $check_out ($nights Night" . ($nights > 1 ? 's' : '') . ")</td>
          </tr>
          <tr style='border-bottom: 1px solid #f1f5f9;'>
            <td style='padding: 8px 0; color: #64748b;'>Amount Claimed:</td>
            <td style='padding: 8px 0; font-weight: bold; color: #065f46; font-size: 16px;'>₦" . number_format($amount_claimed, 2) . "</td>
          </tr>
          <tr style='border-bottom: 1px solid #f1f5f9;'>
            <td style='padding: 8px 0; color: #64748b;'>Sender Account Name:</td>
            <td style='padding: 8px 0; font-weight: bold; color: #0f172a;'>$sender_name</td>
          </tr>
          <tr style='border-bottom: 1px solid #f1f5f9;'>
            <td style='padding: 8px 0; color: #64748b;'>Sender Bank:</td>
            <td style='padding: 8px 0;'>$sender_bank</td>
          </tr>
          <tr>
            <td style='padding: 8px 0; color: #64748b;'>Transfer Ref / Session ID:</td>
            <td style='padding: 8px 0; font-family: monospace;'>$transfer_ref</td>
          </tr>
        </table>

        <div style='text-align: center; margin-top: 24px;'>
          <a href='https://kelvincameo.com/reception/' style='display: inline-block; background: #d4af37; color: #060e1e; font-weight: bold; text-decoration: none; padding: 12px 24px; border-radius: 6px; font-size: 14px;'>
            Open Reception Dashboard & Verify Alert
          </a>
        </div>
      </div>

      <div style='background: #f8fafc; padding: 12px 24px; text-align: center; font-size: 11px; color: #94a3b8; border-top: 1px solid #e2e8f0;'>
        Kelvin Cameo Resort Hotel • Opposite Suleman Police Technical College, Kwamba, Suleja, Niger State (Abuja Capital Corridor) • RC: 1613032
      </div>
    </div>";

    try {
        @wp_mail($notify_email, $subject, $email_body, $headers);
    } catch (\Throwable $e) {
        error_log("Hotel Alert Mail Error: " . $e->getMessage());
    }

    // 2. Dispatch Confirmation Email to Guest if email provided
    if ($guest_email) {
        $guest_subject = "Your Reservation Notification: Room $room_number at Kelvin Cameo Resort Hotel ($booking_ref)";
        $guest_body = "
        <div style='font-family: Arial, sans-serif; max-width: 600px; margin: 0 auto; border: 1px solid #e2e8f0; border-radius: 12px; overflow: hidden;'>
          <div style='background: #060e1e; color: #fff; padding: 20px 24px; border-bottom: 2px solid #d4af37;'>
            <h2 style='margin: 0; color: #d4af37; font-size: 18px;'>Kelvin Cameo Resort Hotel</h2>
            <p style='margin: 4px 0 0; font-size: 12px; color: #94a3b8;'>Reservation & Payment Confirmation</p>
          </div>
          <div style='padding: 24px; color: #1e293b;'>
            <p>Dear <strong>$guest_name</strong>,</p>
            <p>Thank you for choosing Kelvin Cameo Resort Hotel. We have received your payment notification of <strong>₦" . number_format($amount_claimed, 2) . "</strong> for your stay in <strong>$room_number ({$matched_room['type']})</strong>.</p>
            <p>Our front desk has received the alert and is confirming the Zenith Bank credit. Your booking reference is <strong style='color: #1a428a;'>$booking_ref</strong>.</p>
            <p>Upon check-in, please present your booking reference or phone number at our executive front desk.</p>
            <p style='margin-top: 20px;'>Warm regards,<br><strong>Executive Front Desk</strong><br>Kelvin Cameo Resort Hotel & Suite<br>RC: 1613032</p>
          </div>
        </div>";
        try {
            @wp_mail($guest_email, $guest_subject, $guest_body, $headers);
        } catch (\Throwable $e) {}
    }

    // Generate Manager WhatsApp Ping URL (+234 805 555 8197)
    $manager_phone = get_option('kc_hotel_manager_phone', '+2348055558197');
    $clean_mgr_phone = preg_replace('/[^0-9]/', '', $manager_phone);
    if (substr($clean_mgr_phone, 0, 1) === '0') {
        $clean_mgr_phone = '234' . substr($clean_mgr_phone, 1);
    }
    if (empty($clean_mgr_phone)) {
        $clean_mgr_phone = '2348055558197';
    }

    $whatsapp_ping_text = "🏨 *KELVIN CAMEO RESORT — NEW RESERVATION ALERT*\n"
        . "────────────────────────\n"
        . "📌 *Ref:* {$booking_ref}\n"
        . "🛌 *Room:* {$matched_room['type']} (#{$room_number}, {$matched_room['branch']})\n"
        . "📅 *Stay:* {$check_in} to {$check_out} ({$nights} Nights)\n"
        . "👤 *Guest:* {$guest_name}\n"
        . "📞 *Phone:* {$guest_phone}\n"
        . "💰 *Total:* ₦" . number_format($total_amount) . "\n"
        . "🏦 *Payment Mode:* Zenith Bank Transfer (1311320179)\n"
        . "👤 *Sender Name:* {$sender_name}\n"
        . "🏛️ *Sender Bank:* {$sender_bank}\n"
        . ($notes ? "📝 *Notes:* {$notes}\n" : "")
        . "────────────────────────\n"
        . "Please confirm credit in Zenith Bank and assign room key at reception desk.";

    $manager_whatsapp_url = 'https://wa.me/' . $clean_mgr_phone . '?text=' . rawurlencode($whatsapp_ping_text);

    if (function_exists('kc_dispatch_server_whatsapp_ping')) {
        kc_dispatch_server_whatsapp_ping('New Booking: ' . $matched_room['type'] . ' - ' . $guest_name, $whatsapp_ping_text, [
            'ref' => $booking_ref,
            'guest' => $guest_name,
            'phone' => $guest_phone,
            'amount' => $total_amount
        ]);
    }

    wp_send_json_success([
        'message' => "Thank you! Your payment alert for $booking_ref has been received. Our front desk has been pinged and is verifying your transfer.",
        'booking_id' => $booking_id,
        'booking_ref' => $booking_ref,
        'guest_name' => $guest_name,
        'guest_phone' => $guest_phone,
        'guest_email' => $guest_email,
        'check_in' => $check_in,
        'check_out' => $check_out,
        'nights' => $nights,
        'total_amount' => $total_amount,
        'amount_paid' => $amount_claimed,
        'room_number' => $room_number,
        'room_type' => $matched_room['type'],
        'branch' => $matched_room['branch'],
        'sender_name' => $sender_name,
        'sender_bank' => $sender_bank,
        'manager_whatsapp_url' => $manager_whatsapp_url
    ]);
}

// -----------------------------------------------------------------------------
// VERIFY OR REJECT TRANSFER CLAIM (FRONT DESK ACTION)
// -----------------------------------------------------------------------------

add_action('wp_ajax_kc_hotel_verify_transfer', 'kc_hotel_ajax_verify_transfer');
add_action('wp_ajax_nopriv_kc_hotel_verify_transfer', 'kc_hotel_ajax_verify_transfer');
function kc_hotel_ajax_verify_transfer() {
    if (!kc_hotel_verify_staff_session()) {
        wp_send_json_error(['message' => 'Unauthorized: Valid staff session token required.'], 403);
    }
    global $wpdb;
    $table = $wpdb->prefix . 'kc_hotel_bookings';

    $id = intval($_POST['id'] ?? 0);
    $action_type = sanitize_text_field($_POST['action_type'] ?? 'confirm'); // confirm or reject

    $booking = $wpdb->get_row($wpdb->prepare("SELECT * FROM $table WHERE id = %d", $id), ARRAY_A);
    if (!$booking) {
        wp_send_json_error(['message' => 'Booking record not found.']);
    }

    if ($action_type === 'confirm') {
        $amount = floatval($_POST['amount'] ?? $booking['amount_paid']);
        if ($amount <= 0) $amount = floatval($booking['total_amount']);

        $balance_due = max(0, floatval($booking['total_amount']) - $amount);
        $payment_status = $balance_due <= 0 ? 'paid' : 'partial';

        $updated_notes = trim($booking['notes'] . "\n[" . date('Y-m-d H:i') . "] Zenith Bank transfer of ₦" . number_format($amount, 2) . " verified by Front Desk.");

        $wpdb->update(
            $table,
            [
                'amount_paid' => $amount,
                'balance_due' => $balance_due,
                'payment_status' => $payment_status,
                'transfer_verified' => 1,
                'payment_reference' => 'ZENITH-VERIFIED-' . date('dHis'),
                'notes' => $updated_notes,
                'updated_at' => current_time('mysql')
            ],
            ['id' => $id]
        );

        wp_send_json_success([
            'message' => "Payment verified! Booking {$booking['booking_ref']} is confirmed.",
            'booking_id' => $id,
            'booking_ref' => $booking['booking_ref']
        ]);
    } else {
        // Reject
        $updated_notes = trim($booking['notes'] . "\n[" . date('Y-m-d H:i') . "] Transfer alert rejected/not found by Front Desk.");

        $wpdb->update(
            $table,
            [
                'transfer_claimed' => 0,
                'transfer_verified' => 0,
                'notes' => $updated_notes,
                'updated_at' => current_time('mysql')
            ],
            ['id' => $id]
        );

        wp_send_json_success([
            'message' => "Transfer claim flagged as unverified for {$booking['booking_ref']}."
        ]);
    }
}

// -----------------------------------------------------------------------------
// EXISTING ENDPOINTS (Save Room, Delete Room, Record Payment, Sales Analytics)
// -----------------------------------------------------------------------------

// Save Room (Add or Edit)
add_action('wp_ajax_kc_hotel_save_room', 'kc_hotel_ajax_save_room');
add_action('wp_ajax_nopriv_kc_hotel_save_room', 'kc_hotel_ajax_save_room');
function kc_hotel_ajax_save_room() {
    if (!kc_hotel_verify_staff_session()) {
        wp_send_json_error(['message' => 'Unauthorized: Valid staff session token required.'], 403);
    }
    global $wpdb;
    $table_rooms = $wpdb->prefix . 'kc_hotel_rooms';

    $id = intval($_POST['id'] ?? 0);
    $room_number = strtoupper(trim(sanitize_text_field($_POST['room_number'] ?? '')));
    $room_type = sanitize_text_field($_POST['room_type'] ?? '');
    $branch = sanitize_text_field($_POST['branch'] ?? 'Main Hotel');
    $rate = floatval($_POST['rate'] ?? 0);
    $features = sanitize_text_field($_POST['features'] ?? '');
    $status = sanitize_text_field($_POST['status'] ?? 'available');
    $image_url = sanitize_text_field($_POST['image_url'] ?? '');
    $remove_image = intval($_POST['remove_image'] ?? 0);

    if (empty($room_number) || empty($room_type) || $rate <= 0) {
        wp_send_json_error(['message' => 'Please provide a valid room number, room type, and nightly rate.']);
    }

    $existing = $wpdb->get_row($wpdb->prepare(
        "SELECT id FROM $table_rooms WHERE room_number = %s AND id != %d", 
        $room_number, 
        $id
    ));
    if ($existing) {
        wp_send_json_error(['message' => "Room number '$room_number' already exists in inventory."]);
    }

    if (!empty($_FILES['room_image']) && !empty($_FILES['room_image']['name'])) {
        require_once(ABSPATH . 'wp-admin/includes/image.php');
        require_once(ABSPATH . 'wp-admin/includes/file.php');
        require_once(ABSPATH . 'wp-admin/includes/media.php');

        $attachment_id = media_handle_upload('room_image', 0);
        if (!is_wp_error($attachment_id)) {
            $image_url = wp_get_attachment_url($attachment_id);
        } else {
            $uploaded = wp_handle_upload($_FILES['room_image'], ['test_form' => false]);
            if (!empty($uploaded['url'])) {
                $image_url = $uploaded['url'];
            }
        }
    } elseif ($remove_image) {
        $image_url = '';
    }

    $data = [
        'room_number' => $room_number,
        'room_type' => $room_type,
        'branch' => $branch,
        'rate' => $rate,
        'features' => $features,
        'status' => in_array($status, ['available', 'maintenance', 'cleaning']) ? $status : 'available',
        'updated_at' => current_time('mysql')
    ];

    if ($image_url !== '' || $remove_image) {
        $data['image_url'] = $image_url;
    }

    if ($id > 0) {
        $wpdb->update($table_rooms, $data, ['id' => $id]);
        wp_send_json_success([
            'message' => "Room $room_number successfully updated!",
            'room_id' => $id,
            'image_url' => $image_url
        ]);
    } else {
        $data['created_at'] = current_time('mysql');
        $wpdb->insert($table_rooms, $data);
        $new_id = $wpdb->insert_id;
        wp_send_json_success([
            'message' => "Room $room_number added to inventory!",
            'room_id' => $new_id,
            'image_url' => $image_url
        ]);
    }
}

// Delete Room
add_action('wp_ajax_kc_hotel_delete_room', 'kc_hotel_ajax_delete_room');
add_action('wp_ajax_nopriv_kc_hotel_delete_room', 'kc_hotel_ajax_delete_room');
function kc_hotel_ajax_delete_room() {
    if (!kc_hotel_verify_staff_session()) {
        wp_send_json_error(['message' => 'Unauthorized: Valid staff session token required.'], 403);
    }
    global $wpdb;
    $table_rooms = $wpdb->prefix . 'kc_hotel_rooms';
    $table_bookings = $wpdb->prefix . 'kc_hotel_bookings';

    $id = intval($_POST['id'] ?? 0);
    $room = $wpdb->get_row($wpdb->prepare("SELECT * FROM $table_rooms WHERE id = %d", $id), ARRAY_A);

    if (!$room) {
        wp_send_json_error(['message' => 'Room not found in inventory.']);
    }

    $active_guest = $wpdb->get_row($wpdb->prepare(
        "SELECT guest_name, booking_ref FROM $table_bookings 
         WHERE room_number = %s AND booking_status = 'checked_in'", 
        $room['room_number']
    ));

    if ($active_guest) {
        wp_send_json_error([
            'message' => "Cannot delete Room {$room['room_number']}: Guest {$active_guest->guest_name} ({$active_guest->booking_ref}) is currently checked in. Please check out the guest first."
        ]);
    }

    $wpdb->delete($table_rooms, ['id' => $id]);
    wp_send_json_success([
        'message' => "Room {$room['room_number']} removed from inventory successfully."
    ]);
}

// Update Status (Check-in, Check-out, Cancel)
add_action('wp_ajax_kc_hotel_update_status', 'kc_hotel_ajax_update_status');
add_action('wp_ajax_nopriv_kc_hotel_update_status', 'kc_hotel_ajax_update_status');
function kc_hotel_ajax_update_status() {
    if (!kc_hotel_verify_staff_session()) {
        wp_send_json_error(['message' => 'Unauthorized: Valid staff session token required.'], 403);
    }
    global $wpdb;
    $table = $wpdb->prefix . 'kc_hotel_bookings';

    $id = intval($_POST['id'] ?? 0);
    $status = sanitize_text_field($_POST['status'] ?? '');

    $allowed = ['reserved', 'checked_in', 'checked_out', 'cancelled'];
    if (!$id || !in_array($status, $allowed)) {
        wp_send_json_error(['message' => 'Invalid status transition request.']);
    }

    $wpdb->update($table, ['booking_status' => $status, 'updated_at' => current_time('mysql')], ['id' => $id]);
    wp_send_json_success(['message' => 'Status updated successfully']);
}

// Record Additional Payment
add_action('wp_ajax_kc_hotel_record_payment', 'kc_hotel_ajax_record_payment');
add_action('wp_ajax_nopriv_kc_hotel_record_payment', 'kc_hotel_ajax_record_payment');
function kc_hotel_ajax_record_payment() {
    if (!kc_hotel_verify_staff_session()) {
        wp_send_json_error(['message' => 'Unauthorized: Valid staff session token required.'], 403);
    }
    global $wpdb;
    $table = $wpdb->prefix . 'kc_hotel_bookings';

    $id = intval($_POST['id'] ?? 0);
    $additional_amount = floatval($_POST['amount'] ?? 0);
    $method = sanitize_text_field($_POST['method'] ?? 'cash');
    $reference = sanitize_text_field($_POST['reference'] ?? '');

    if (!$id || $additional_amount <= 0) {
        wp_send_json_error(['message' => 'Invalid payment amount specified.']);
    }

    $booking = $wpdb->get_row($wpdb->prepare("SELECT * FROM $table WHERE id = %d", $id), ARRAY_A);
    if (!$booking) {
        wp_send_json_error(['message' => 'Reservation not found.']);
    }

    $new_paid = floatval($booking['amount_paid']) + $additional_amount;
    $new_balance = max(0, floatval($booking['total_amount']) - $new_paid);

    $new_payment_status = 'pending';
    if ($new_paid >= floatval($booking['total_amount'])) {
        $new_payment_status = 'paid';
    } elseif ($new_paid > 0) {
        $new_payment_status = 'partial';
    }

    $new_notes = trim($booking['notes'] . "\n[" . date('Y-m-d H:i') . "] Added payment of ₦" . number_format($additional_amount, 2) . " via " . strtoupper($method) . ($reference ? " (Ref: $reference)" : ""));

    $wpdb->update(
        $table,
        [
            'amount_paid' => $new_paid,
            'balance_due' => $new_balance,
            'payment_status' => $new_payment_status,
            'payment_method' => $method,
            'payment_reference' => $reference ?: $booking['payment_reference'],
            'notes' => $new_notes,
            'updated_at' => current_time('mysql')
        ],
        ['id' => $id]
    );

    wp_send_json_success([
        'message' => 'Payment recorded successfully!',
        'amount_paid' => $new_paid,
        'balance_due' => $new_balance,
        'payment_status' => $new_payment_status
    ]);
}

// Sales Analytics Endpoint
add_action('wp_ajax_kc_hotel_get_sales_analytics', 'kc_hotel_ajax_get_sales_analytics');
add_action('wp_ajax_nopriv_kc_hotel_get_sales_analytics', 'kc_hotel_ajax_get_sales_analytics');
function kc_hotel_ajax_get_sales_analytics() {
    if (!kc_hotel_verify_staff_session()) {
        wp_send_json_error(['message' => 'Unauthorized: Valid staff session token required.'], 403);
    }
    global $wpdb;
    $table_bookings = $wpdb->prefix . 'kc_hotel_bookings';
    $table_rooms = $wpdb->prefix . 'kc_hotel_rooms';

    $period = sanitize_text_field($_POST['period'] ?? 'all');
    $today = date('Y-m-d');

    $where_date = "1=1";
    $days_in_period = 30;

    if ($period === 'today') {
        $where_date = "DATE(created_at) = '$today'";
        $days_in_period = 1;
    } elseif ($period === 'week') {
        $week_start = date('Y-m-d', strtotime('-7 days'));
        $where_date = "DATE(created_at) >= '$week_start'";
        $days_in_period = 7;
    } elseif ($period === 'month') {
        $month_start = date('Y-m-d', strtotime('-30 days'));
        $where_date = "DATE(created_at) >= '$month_start'";
        $days_in_period = 30;
    } else {
        $first_booking = $wpdb->get_var("SELECT MIN(created_at) FROM $table_bookings WHERE booking_status != 'cancelled'");
        $days = $first_booking ? ceil((time() - strtotime($first_booking)) / 86400) : 1;
        $days_in_period = max(1, $days);
    }

    $bookings = $wpdb->get_results(
        "SELECT * FROM $table_bookings WHERE booking_status != 'cancelled' AND $where_date ORDER BY id DESC", 
        ARRAY_A
    );

    $total_rooms = intval($wpdb->get_var("SELECT COUNT(*) FROM $table_rooms") ?: 31);

    $gross_sales = 0.0;
    $collected = 0.0;
    $receivables = 0.0;
    $occupied_nights = 0;
    $bookings_count = count($bookings);

    $by_wing = [
        'Main Hotel' => ['revenue' => 0.0, 'bookings' => 0, 'nights' => 0],
        'The Annex' => ['revenue' => 0.0, 'bookings' => 0, 'nights' => 0]
    ];
    $by_room_type = [];
    $by_method = [
        'pos' => ['label' => 'POS Terminal', 'amount' => 0.0, 'count' => 0],
        'transfer' => ['label' => 'Bank Transfer', 'amount' => 0.0, 'count' => 0],
        'cash' => ['label' => 'Cash at Desk', 'amount' => 0.0, 'count' => 0],
        'paystack' => ['label' => 'Paystack Online', 'amount' => 0.0, 'count' => 0]
    ];

    $csv_rows = [];

    foreach ($bookings as $b) {
        $tot = floatval($b['total_amount']);
        $paid = floatval($b['amount_paid']);
        $bal = floatval($b['balance_due']);
        $nights = intval($b['nights']);
        $wing = $b['branch'] ?: 'Main Hotel';
        $type = $b['room_type'];
        $meth = strtolower($b['payment_method']) ?: 'cash';

        $gross_sales += $tot;
        $collected += $paid;
        $receivables += $bal;
        $occupied_nights += $nights;

        if (!isset($by_wing[$wing])) {
            $by_wing[$wing] = ['revenue' => 0.0, 'bookings' => 0, 'nights' => 0];
        }
        $by_wing[$wing]['revenue'] += $tot;
        $by_wing[$wing]['bookings']++;
        $by_wing[$wing]['nights'] += $nights;

        if (!isset($by_room_type[$type])) {
            $by_room_type[$type] = ['revenue' => 0.0, 'bookings' => 0, 'nights' => 0, 'branch' => $wing];
        }
        $by_room_type[$type]['revenue'] += $tot;
        $by_room_type[$type]['bookings']++;
        $by_room_type[$type]['nights'] += $nights;

        if (isset($by_method[$meth])) {
            $by_method[$meth]['amount'] += $paid;
            $by_method[$meth]['count']++;
        }

        $csv_rows[] = [
            'booking_ref' => $b['booking_ref'],
            'guest_name' => $b['guest_name'],
            'guest_phone' => $b['guest_phone'],
            'room_number' => $b['room_number'],
            'room_type' => $b['room_type'],
            'branch' => $b['branch'],
            'check_in' => $b['check_in'],
            'check_out' => $b['check_out'],
            'nights' => $b['nights'],
            'rate_per_night' => $b['rate_per_night'],
            'total_amount' => $b['total_amount'],
            'amount_paid' => $b['amount_paid'],
            'balance_due' => $b['balance_due'],
            'payment_status' => $b['payment_status'],
            'payment_method' => strtoupper($b['payment_method']),
            'payment_reference' => $b['payment_reference'],
            'booking_status' => $b['booking_status'],
            'date' => $b['created_at']
        ];
    }

    $adr = $occupied_nights > 0 ? round($gross_sales / $occupied_nights, 2) : 0.0;
    $avail_room_nights = max(1, $total_rooms * $days_in_period);
    $revpar = round($gross_sales / $avail_room_nights, 2);

    uasort($by_room_type, function($a, $b) {
        return $b['revenue'] <=> $a['revenue'];
    });

    wp_send_json_success([
        'period' => $period,
        'summary' => [
            'gross_sales' => $gross_sales,
            'collected_revenue' => $collected,
            'pending_receivables' => $receivables,
            'total_bookings' => $bookings_count,
            'occupied_nights' => $occupied_nights,
            'adr' => $adr,
            'revpar' => $revpar,
            'total_rooms' => $total_rooms,
            'days_in_period' => $days_in_period
        ],
        'by_wing' => $by_wing,
        'by_room_type' => $by_room_type,
        'by_method' => $by_method,
        'csv_rows' => $csv_rows
    ]);
}