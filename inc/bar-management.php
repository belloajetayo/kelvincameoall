<?php
/**
 * Kelvin Cameo Bar & Lounge Management Engine
 * Point of Sale (POS), Beverage Inventory, Role-Based Access & Monthly Audit Reports
 *
 * Official RC: 1613032
 * Categories: Wine & Spirits, Beer & Bitters, Drinks & Refreshments
 * Admin PIN: 1122 | Staff PIN: 1613
 *
 * @package Kelvin_Cameo
 */

if (!defined('ABSPATH')) {
    exit;
}

/**
 * Initialize Bar Tables in WordPress Database
 */
function kc_bar_init_db() {
    global $wpdb;
    $charset_collate = $wpdb->get_charset_collate();

    $table_products = $wpdb->prefix . 'kc_bar_products';
    $table_orders   = $wpdb->prefix . 'kc_bar_orders';
    $table_logs     = $wpdb->prefix . 'kc_bar_daily_logs';
    $table_shifts   = $wpdb->prefix . 'kc_bar_shifts';

    require_once ABSPATH . 'wp-admin/includes/upgrade.php';

    // 1. Products & Live Inventory Table
    $sql_products = "CREATE TABLE IF NOT EXISTS $table_products (
        id bigint(20) NOT NULL AUTO_INCREMENT,
        name varchar(120) NOT NULL,
        category varchar(30) NOT NULL,
        price decimal(12,2) NOT NULL DEFAULT '0.00',
        opening_stock int(11) NOT NULL DEFAULT '0',
        new_stock int(11) NOT NULL DEFAULT '0',
        current_stock int(11) NOT NULL DEFAULT '0',
        total_sold int(11) NOT NULL DEFAULT '0',
        breakage int(11) NOT NULL DEFAULT '0',
        is_active tinyint(1) NOT NULL DEFAULT '1',
        created_at datetime DEFAULT CURRENT_TIMESTAMP,
        updated_at datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
        PRIMARY KEY (id),
        KEY category_idx (category)
    ) $charset_collate;";
    dbDelta($sql_products);

    // 2. Bar Orders & Sales Table
    $sql_orders = "CREATE TABLE IF NOT EXISTS $table_orders (
        id bigint(20) NOT NULL AUTO_INCREMENT,
        receipt_no varchar(40) NOT NULL,
        items_json longtext NOT NULL,
        total_items int(11) NOT NULL DEFAULT '1',
        total_amount decimal(12,2) NOT NULL DEFAULT '0.00',
        payment_method varchar(30) NOT NULL DEFAULT 'pos',
        staff_name varchar(80) NOT NULL DEFAULT 'Bar Staff',
        customer_name varchar(80) DEFAULT 'Walk-in Guest',
        table_number varchar(40) DEFAULT 'Bar Counter',
        room_number varchar(30) DEFAULT '',
        status varchar(30) NOT NULL DEFAULT 'completed',
        created_at datetime DEFAULT CURRENT_TIMESTAMP,
        PRIMARY KEY (id),
        UNIQUE KEY receipt_idx (receipt_no),
        KEY payment_idx (payment_method),
        KEY created_idx (created_at)
    ) $charset_collate;";
    dbDelta($sql_orders);

    // 3. Daily Stock Sheets & Reconciliation Table
    $sql_logs = "CREATE TABLE IF NOT EXISTS $table_logs (
        id bigint(20) NOT NULL AUTO_INCREMENT,
        log_date date NOT NULL,
        product_id bigint(20) NOT NULL,
        product_name varchar(120) NOT NULL,
        category varchar(30) NOT NULL,
        price decimal(12,2) NOT NULL,
        opening_stock int(11) NOT NULL DEFAULT '0',
        new_stock int(11) NOT NULL DEFAULT '0',
        total_stock int(11) NOT NULL DEFAULT '0',
        qty_sold int(11) NOT NULL DEFAULT '0',
        breakage int(11) NOT NULL DEFAULT '0',
        closing_stock int(11) NOT NULL DEFAULT '0',
        amount decimal(12,2) NOT NULL DEFAULT '0.00',
        staff_name varchar(80) DEFAULT 'Barman',
        created_at datetime DEFAULT CURRENT_TIMESTAMP,
        PRIMARY KEY (id),
        KEY date_idx (log_date)
    ) $charset_collate;";
    dbDelta($sql_logs);

    // 4. Staff Shifts & Handover Reconciliation Table
    $sql_shifts = "CREATE TABLE IF NOT EXISTS $table_shifts (
        id bigint(20) NOT NULL AUTO_INCREMENT,
        shift_code varchar(40) NOT NULL,
        staff_name varchar(80) NOT NULL,
        incoming_staff varchar(80) NOT NULL DEFAULT '',
        start_time datetime NOT NULL,
        end_time datetime DEFAULT NULL,
        total_orders int(11) NOT NULL DEFAULT '0',
        total_sales decimal(12,2) NOT NULL DEFAULT '0.00',
        pos_sales decimal(12,2) NOT NULL DEFAULT '0.00',
        cash_sales decimal(12,2) NOT NULL DEFAULT '0.00',
        transfer_sales decimal(12,2) NOT NULL DEFAULT '0.00',
        room_sales decimal(12,2) NOT NULL DEFAULT '0.00',
        total_bottles_sold int(11) NOT NULL DEFAULT '0',
        drinks_sold_json longtext,
        stock_handover_json longtext,
        notes text,
        status varchar(30) NOT NULL DEFAULT 'active',
        created_at datetime DEFAULT CURRENT_TIMESTAMP,
        PRIMARY KEY (id),
        KEY staff_idx (staff_name),
        KEY status_idx (status),
        KEY start_idx (start_time)
    ) $charset_collate;";
    dbDelta($sql_shifts);

    // Seed Initial Products if empty
    kc_bar_seed_initial_products();

    // Ensure Games Category (Shisha, Table Tennis, Snooker) is active in DB
    kc_bar_ensure_games_category_products();
}

/**
 * Ensure Games Category products exist in database
 */
function kc_bar_ensure_games_category_products() {
    global $wpdb;
    $table = $wpdb->prefix . 'kc_bar_products';
    if ($wpdb->get_var("SHOW TABLES LIKE '$table'") !== $table) {
        return;
    }

    $games = array(
        array('name' => 'Shisha', 'category' => 'games', 'price' => 5000.00, 'os' => 20),
        array('name' => 'Table Tennis', 'category' => 'games', 'price' => 2000.00, 'os' => 50),
        array('name' => 'Snooker', 'category' => 'games', 'price' => 1000.00, 'os' => 50),
    );

    foreach ($games as $g) {
        $existing_id = $wpdb->get_var($wpdb->prepare("SELECT id FROM $table WHERE name = %s", $g['name']));
        if (!$existing_id) {
            $wpdb->insert($table, array(
                'name'          => $g['name'],
                'category'      => $g['category'],
                'price'         => $g['price'],
                'opening_stock' => $g['os'],
                'new_stock'     => 0,
                'current_stock' => $g['os'],
                'total_sold'    => 0,
                'breakage'      => 0,
                'is_active'     => 1,
            ));
        } else {
            // Guarantee category is 'games' and item is active
            $wpdb->update($table, array(
                'category'  => 'games',
                'is_active' => 1
            ), array('id' => $existing_id));
        }
    }
}

/**
 * Seed all 71 products with exact prices & opening stocks from handwritten logs
 */
function kc_bar_seed_initial_products() {
    global $wpdb;
    $table = $wpdb->prefix . 'kc_bar_products';

    $count = (int) $wpdb->get_var("SELECT COUNT(*) FROM $table");
    if ($count > 0) {
        return; // Already seeded
    }

    $products = array(
        // ==========================================
        // CATEGORY 1: BEER & BITTERS (15 items)
        // ==========================================
        array('name' => 'Guinness', 'category' => 'beer', 'price' => 2000, 'os' => 24),
        array('name' => 'Legends', 'category' => 'beer', 'price' => 2000, 'os' => 24),
        array('name' => 'Trophy', 'category' => 'beer', 'price' => 2000, 'os' => 24),
        array('name' => 'Double Black', 'category' => 'beer', 'price' => 2000, 'os' => 14),
        array('name' => 'Hero', 'category' => 'beer', 'price' => 2000, 'os' => 16),
        array('name' => 'Heineken', 'category' => 'beer', 'price' => 2000, 'os' => 6),
        array('name' => 'Goldberg', 'category' => 'beer', 'price' => 2000, 'os' => 17),
        array('name' => 'Black Goldberg', 'category' => 'beer', 'price' => 2000, 'os' => 8),
        array('name' => 'Budweiser', 'category' => 'beer', 'price' => 2000, 'os' => 0),
        array('name' => 'Life', 'category' => 'beer', 'price' => 2000, 'os' => 6),
        array('name' => 'Desperado', 'category' => 'beer', 'price' => 2000, 'os' => 30),
        array('name' => 'Marvic', 'category' => 'beer', 'price' => 3000, 'os' => 12),
        array('name' => 'Origin Bitters', 'category' => 'beer', 'price' => 3500, 'os' => 30),
        array('name' => 'Origin Bitters (Big)', 'category' => 'beer', 'price' => 10000, 'os' => 0),
        array('name' => 'Igboya Bitters', 'category' => 'beer', 'price' => 4000, 'os' => 12),

        // ==========================================
        // CATEGORY 2: WINE & SPIRITS (35 items)
        // ==========================================
        array('name' => 'Don Paloma', 'category' => 'wine', 'price' => 20000, 'os' => 7),
        array('name' => 'Baron De Valls', 'category' => 'wine', 'price' => 20000, 'os' => 3),
        array('name' => 'Big Ben', 'category' => 'wine', 'price' => 20000, 'os' => 2),
        array('name' => 'Evic', 'category' => 'wine', 'price' => 20000, 'os' => 4),
        array('name' => 'Eva Sparkling Red', 'category' => 'wine', 'price' => 20000, 'os' => 1),
        array('name' => 'Castillo De Rossi', 'category' => 'wine', 'price' => 20000, 'os' => 3),
        array('name' => 'Smirnoff Chocolate (Big)', 'category' => 'wine', 'price' => 20000, 'os' => 2),
        array('name' => 'BAMA', 'category' => 'wine', 'price' => 20000, 'os' => 2),
        array('name' => 'Kayold Professor', 'category' => 'wine', 'price' => 20000, 'os' => 2),
        array('name' => 'Best Classic (Big)', 'category' => 'wine', 'price' => 20000, 'os' => 0),
        array('name' => 'Imperial Black', 'category' => 'wine', 'price' => 20000, 'os' => 0),
        array('name' => 'Andre', 'category' => 'wine', 'price' => 25000, 'os' => 2),
        array('name' => 'Royal Circle (Big)', 'category' => 'wine', 'price' => 25000, 'os' => 1),
        array('name' => 'Maluda', 'category' => 'wine', 'price' => 25000, 'os' => 2),
        array('name' => 'Red Label', 'category' => 'wine', 'price' => 30000, 'os' => 0),
        array('name' => 'Black & White', 'category' => 'wine', 'price' => 35000, 'os' => 2),
        array('name' => 'Baileys', 'category' => 'wine', 'price' => 35000, 'os' => 1),
        array('name' => 'Fossil', 'category' => 'wine', 'price' => 35000, 'os' => 2),
        array('name' => 'All Season', 'category' => 'wine', 'price' => 35000, 'os' => 1),
        array('name' => 'Blonde', 'category' => 'wine', 'price' => 45000, 'os' => 1),
        array('name' => 'Mega Rhino', 'category' => 'wine', 'price' => 45000, 'os' => 2),
        array('name' => 'Black Label', 'category' => 'wine', 'price' => 55000, 'os' => 1),
        array('name' => 'Jameson Black Barrel', 'category' => 'wine', 'price' => 65000, 'os' => 0),
        array('name' => 'Hennessy V.S', 'category' => 'wine', 'price' => 75000, 'os' => 1),
        array('name' => 'Martell V.S', 'category' => 'wine', 'price' => 75000, 'os' => 2),
        array('name' => 'Singleton 12 Years', 'category' => 'wine', 'price' => 75000, 'os' => 1),
        array('name' => 'Observatory 20 Years', 'category' => 'wine', 'price' => 95000, 'os' => 2),
        array('name' => 'Martell V.S.O.P', 'category' => 'wine', 'price' => 120000, 'os' => 1),
        array('name' => 'Best Cream (Small)', 'category' => 'wine', 'price' => 5000, 'os' => 7),
        array('name' => 'Best Classic (Small)', 'category' => 'wine', 'price' => 5000, 'os' => 6),
        array('name' => 'Royal Circle (Small)', 'category' => 'wine', 'price' => 5000, 'os' => 0),
        array('name' => 'Smirnoff Chocolate (Small)', 'category' => 'wine', 'price' => 5000, 'os' => 0),
        array('name' => 'Pure Heaven (Wine)', 'category' => 'wine', 'price' => 15000, 'os' => 1),
        array('name' => 'Imperial Blue', 'category' => 'wine', 'price' => 15000, 'os' => 0),
        array('name' => 'Royal Circle (Medium)', 'category' => 'wine', 'price' => 15000, 'os' => 0),

        // ==========================================
        // CATEGORY 3: DRINKS & REFRESHMENTS (21 items)
        // ==========================================
        array('name' => 'Bottle Water', 'category' => 'drinks', 'price' => 500, 'os' => 5),
        array('name' => 'Coca-Cola Can', 'category' => 'drinks', 'price' => 1500, 'os' => 8),
        array('name' => 'Fanta Can', 'category' => 'drinks', 'price' => 1500, 'os' => 10),
        array('name' => 'Sprite Can', 'category' => 'drinks', 'price' => 1500, 'os' => 7),
        array('name' => 'Schweppes Can', 'category' => 'drinks', 'price' => 1500, 'os' => 41),
        array('name' => 'Fayrouz Can', 'category' => 'drinks', 'price' => 1500, 'os' => 10),
        array('name' => 'Maltina Can', 'category' => 'drinks', 'price' => 1500, 'os' => 19),
        array('name' => 'Amstel Maltina', 'category' => 'drinks', 'price' => 2000, 'os' => 23),
        array('name' => 'Fearless Energy', 'category' => 'drinks', 'price' => 1500, 'os' => 12),
        array('name' => 'Predator Energy', 'category' => 'drinks', 'price' => 1500, 'os' => 0),
        array('name' => 'Monster Energy', 'category' => 'drinks', 'price' => 3000, 'os' => 15),
        array('name' => 'Bullet Can', 'category' => 'drinks', 'price' => 3500, 'os' => 22),
        array('name' => 'Nutri-Milk', 'category' => 'drinks', 'price' => 1500, 'os' => 1),
        array('name' => 'Nutri-Yo', 'category' => 'drinks', 'price' => 1500, 'os' => 23),
        array('name' => 'Nutri-Choco', 'category' => 'drinks', 'price' => 2000, 'os' => 11),
        array('name' => 'Yugo-Yoghurt', 'category' => 'drinks', 'price' => 2000, 'os' => 16),
        array('name' => 'Dudu-Yoghurt', 'category' => 'drinks', 'price' => 2000, 'os' => 9),
        array('name' => 'Hollandia Yoghurt', 'category' => 'drinks', 'price' => 4000, 'os' => 17),
        array('name' => 'Chivita Active', 'category' => 'drinks', 'price' => 4000, 'os' => 0),
        array('name' => 'Chivita Exotic', 'category' => 'drinks', 'price' => 4000, 'os' => 11),
        array('name' => 'Chivita Orange Juice', 'category' => 'drinks', 'price' => 4000, 'os' => 0),
        array('name' => 'Five Alive (85cl)', 'category' => 'drinks', 'price' => 4000, 'os' => 1),

        // ==========================================
        // CATEGORY 4: GAMES & LOUNGE (3 items)
        // ==========================================
        array('name' => 'Shisha', 'category' => 'games', 'price' => 5000, 'os' => 20),
        array('name' => 'Table Tennis', 'category' => 'games', 'price' => 2000, 'os' => 50),
        array('name' => 'Snooker', 'category' => 'games', 'price' => 1000, 'os' => 50),
    );

    foreach ($products as $p) {
        $wpdb->insert($table, array(
            'name'          => $p['name'],
            'category'      => $p['category'],
            'price'         => $p['price'],
            'opening_stock' => $p['os'],
            'new_stock'     => 0,
            'current_stock' => $p['os'],
            'total_sold'    => 0,
            'breakage'      => 0,
            'is_active'     => 1,
        ));
    }
}

/**
 * Access Level & Role Helper:
 * Admin PIN: 1122
 * Staff PIN: 1613
 */
function kc_bar_get_current_role() {
    $token = sanitize_text_field($_REQUEST['token'] ?? ($_SERVER['HTTP_X_KC_BAR_TOKEN'] ?? ''));
    if (!empty($token)) {
        if (wp_verify_nonce($token, 'kc_bar_admin_session')) {
            return 'admin';
        }
        if (wp_verify_nonce($token, 'kc_bar_staff_session')) {
            return 'staff';
        }
    }
    if (current_user_can('manage_options')) {
        return 'admin';
    }
    if (is_user_logged_in()) {
        return 'staff';
    }
    return false;
}

function kc_bar_verify_staff_session() {
    return kc_bar_get_current_role() !== false;
}

function kc_bar_verify_admin_session() {
    return kc_bar_get_current_role() === 'admin';
}

/**
 * AJAX: Verify PIN (Admin: 1122 | Staff: 1613)
 */
add_action('wp_ajax_kc_bar_verify_pin', 'kc_bar_ajax_verify_pin');
add_action('wp_ajax_nopriv_kc_bar_verify_pin', 'kc_bar_ajax_verify_pin');
function kc_bar_ajax_verify_pin() {
    $pin = sanitize_text_field($_POST['pin'] ?? '');
    $admin_pin = get_option('kc_bar_admin_pin', '1122');
    $staff_pin = get_option('kc_bar_pin', '1613');

    if ($pin === $admin_pin || $pin === '1122') {
        $token = wp_create_nonce('kc_bar_admin_session');
        wp_send_json_success(array(
            'message' => 'Admin Access Granted (Full Privileges)',
            'role'    => 'admin',
            'token'   => $token,
        ));
    } elseif ($pin === $staff_pin || $pin === '1613') {
        $token = wp_create_nonce('kc_bar_staff_session');
        wp_send_json_success(array(
            'message' => 'Staff Access Granted (Sales & Restock Mode)',
            'role'    => 'staff',
            'token'   => $token,
        ));
    } else {
        wp_send_json_error(array('message' => 'Invalid Security PIN. Please try again or contact Management.'));
    }
}

/**
 * Helper: Get or Create Active Staff Shift
 */
function kc_bar_get_or_create_active_shift($staff_name = 'Bar Staff') {
    global $wpdb;
    $table_shifts = $wpdb->prefix . 'kc_bar_shifts';

    $active = $wpdb->get_row("SELECT * FROM $table_shifts WHERE status = 'active' ORDER BY id DESC LIMIT 1", ARRAY_A);
    if ($active) {
        if (!empty($staff_name) && $staff_name !== 'Bar Staff' && ($active['staff_name'] === 'Bar Staff' || empty($active['staff_name']))) {
            $wpdb->update($table_shifts, array('staff_name' => $staff_name), array('id' => $active['id']));
            $active['staff_name'] = $staff_name;
        }
        return $active;
    }

    $shift_code = 'SHIFT-' . current_time('Ymd') . '-' . strtoupper(wp_generate_password(4, false, false));
    $wpdb->insert($table_shifts, array(
        'shift_code'  => $shift_code,
        'staff_name'  => !empty($staff_name) ? $staff_name : 'Bar Staff',
        'start_time'  => current_time('mysql'),
        'status'      => 'active',
    ));

    return $wpdb->get_row($wpdb->prepare("SELECT * FROM $table_shifts WHERE id = %d", $wpdb->insert_id), ARRAY_A);
}

/**
 * Helper: Calculate Active Shift Sales & Items Sold
 */
function kc_bar_get_active_shift_summary($active_shift) {
    global $wpdb;
    $table_orders = $wpdb->prefix . 'kc_bar_orders';

    if (!$active_shift) {
        return array(
            'total_orders'     => 0,
            'total_revenue'    => 0,
            'pos_revenue'      => 0,
            'cash_revenue'     => 0,
            'transfer_revenue' => 0,
            'room_revenue'     => 0,
            'total_bottles'    => 0,
            'items_sold'       => array(),
        );
    }

    $start_time = $active_shift['start_time'];

    $orders = $wpdb->get_results(
        $wpdb->prepare(
            "SELECT id, total_amount, total_items, payment_method, items_json 
             FROM $table_orders 
             WHERE created_at >= %s AND status = 'completed'
             ORDER BY id ASC",
            $start_time
        ),
        ARRAY_A
    );

    $total_orders     = count($orders);
    $total_revenue    = 0;
    $pos_revenue      = 0;
    $cash_revenue     = 0;
    $transfer_revenue = 0;
    $room_revenue     = 0;
    $total_bottles    = 0;
    $items_sold       = array();

    foreach ($orders as $ord) {
        $amt = (float) $ord['total_amount'];
        $total_revenue += $amt;
        $total_bottles += (int) $ord['total_items'];

        if ($ord['payment_method'] === 'pos') {
            $pos_revenue += $amt;
        } elseif ($ord['payment_method'] === 'cash') {
            $cash_revenue += $amt;
        } elseif ($ord['payment_method'] === 'transfer') {
            $transfer_revenue += $amt;
        } elseif ($ord['payment_method'] === 'room_charge') {
            $room_revenue += $amt;
        }

        $items = json_decode($ord['items_json'], true) ?: array();
        foreach ($items as $it) {
            $name = $it['name'] ?? 'Drink';
            $qty  = (int) ($it['qty'] ?? 1);
            $sub  = (float) ($it['subtotal'] ?? 0);
            if (!isset($items_sold[$name])) {
                $items_sold[$name] = array(
                    'name'     => $name,
                    'category' => $it['category'] ?? '',
                    'qty'      => 0,
                    'amount'   => 0,
                    'price'    => (float) ($it['price'] ?? 0),
                );
            }
            $items_sold[$name]['qty']    += $qty;
            $items_sold[$name]['amount'] += $sub;
        }
    }

    return array(
        'total_orders'     => $total_orders,
        'total_revenue'    => $total_revenue,
        'pos_revenue'      => $pos_revenue,
        'cash_revenue'     => $cash_revenue,
        'transfer_revenue' => $transfer_revenue,
        'room_revenue'     => $room_revenue,
        'total_bottles'    => $total_bottles,
        'items_sold'       => array_values($items_sold),
    );
}

/**
 * AJAX: Get POS Dashboard Data (Inventory, Shift Sales, Orders)
 */
add_action('wp_ajax_kc_bar_get_pos_data', 'kc_bar_ajax_get_pos_data');
add_action('wp_ajax_nopriv_kc_bar_get_pos_data', 'kc_bar_ajax_get_pos_data');
function kc_bar_ajax_get_pos_data() {
    $role = kc_bar_get_current_role();
    if (!$role) {
        wp_send_json_error(array('message' => 'Unauthorized or session expired.'), 401);
    }

    global $wpdb;
    $table_products = $wpdb->prefix . 'kc_bar_products';
    $table_orders   = $wpdb->prefix . 'kc_bar_orders';

    kc_bar_init_db();

    // 1. Fetch all active products
    $products = $wpdb->get_results(
        "SELECT id, name, category, price, opening_stock, new_stock, current_stock, total_sold, breakage 
         FROM $table_products 
         WHERE is_active = 1 
         ORDER BY category ASC, name ASC",
        ARRAY_A
    );

    // 2. Fetch today's sales summary
    $today = current_time('Y-m-d');
    $sales_summary = $wpdb->get_row(
        $wpdb->prepare(
            "SELECT 
                COUNT(*) as total_orders,
                COALESCE(SUM(total_amount), 0) as total_revenue,
                COALESCE(SUM(CASE WHEN payment_method = 'pos' THEN total_amount ELSE 0 END), 0) as pos_revenue,
                COALESCE(SUM(CASE WHEN payment_method = 'cash' THEN total_amount ELSE 0 END), 0) as cash_revenue,
                COALESCE(SUM(CASE WHEN payment_method = 'transfer' THEN total_amount ELSE 0 END), 0) as transfer_revenue,
                COALESCE(SUM(CASE WHEN payment_method = 'room_charge' THEN total_amount ELSE 0 END), 0) as room_revenue,
                COALESCE(SUM(total_items), 0) as total_drinks_sold
             FROM $table_orders 
             WHERE DATE(created_at) = %s AND status = 'completed'",
            $today
        ),
        ARRAY_A
    );

    // 3. Fetch recent 40 orders
    $recent_orders = $wpdb->get_results(
        "SELECT id, receipt_no, items_json, total_items, total_amount, payment_method, staff_name, customer_name, table_number, room_number, created_at 
         FROM $table_orders 
         ORDER BY id DESC 
         LIMIT 40",
        ARRAY_A
    );

    foreach ($recent_orders as &$ord) {
        $ord['items'] = json_decode($ord['items_json'], true) ?: array();
    }

    // 4. Fetch Active Shift for Current Staff
    $staff_requested = sanitize_text_field($_POST['staff_name'] ?? '');
    $active_shift    = kc_bar_get_or_create_active_shift($staff_requested);
    $shift_summary   = kc_bar_get_active_shift_summary($active_shift);

    wp_send_json_success(array(
        'role'          => $role,
        'products'      => $products,
        'sales_summary' => $sales_summary,
        'recent_orders' => $recent_orders,
        'active_shift'  => $active_shift,
        'shift_summary' => $shift_summary,
        'server_time'   => current_time('mysql'),
    ));
}

/**
 * AJAX: Checkout & Create Bar Sale Order
 */
add_action('wp_ajax_kc_bar_create_order', 'kc_bar_ajax_create_order');
add_action('wp_ajax_nopriv_kc_bar_create_order', 'kc_bar_ajax_create_order');
function kc_bar_ajax_create_order() {
    if (!kc_bar_verify_staff_session()) {
        wp_send_json_error(array('message' => 'Unauthorized or session expired.'), 401);
    }

    global $wpdb;
    $table_products = $wpdb->prefix . 'kc_bar_products';
    $table_orders   = $wpdb->prefix . 'kc_bar_orders';

    $items_raw = stripslashes($_POST['items'] ?? '[]');
    $items = json_decode($items_raw, true);

    if (empty($items) || !is_array($items)) {
        wp_send_json_error(array('message' => 'No drinks in cart. Please select items to checkout.'));
    }

    $payment_method = sanitize_text_field($_POST['payment_method'] ?? 'pos');
    $staff_name     = sanitize_text_field($_POST['staff_name'] ?? 'Bar Staff');
    $customer_name  = sanitize_text_field($_POST['customer_name'] ?? 'Walk-in Guest');
    $table_number   = sanitize_text_field($_POST['table_number'] ?? 'Bar Counter');
    $room_number    = sanitize_text_field($_POST['room_number'] ?? '');

    $total_amount = 0;
    $total_items  = 0;
    $processed_items = array();

    // Verify stock and calculate totals
    foreach ($items as $item) {
        $prod_id = (int) ($item['id'] ?? 0);
        $qty     = max(1, (int) ($item['qty'] ?? 1));

        $product = $wpdb->get_row($wpdb->prepare("SELECT * FROM $table_products WHERE id = %d AND is_active = 1", $prod_id), ARRAY_A);
        if (!$product) {
            wp_send_json_error(array('message' => "Item ID $prod_id is no longer available."));
        }

        $price = (float) $product['price'];
        $subtotal = $price * $qty;
        $total_amount += $subtotal;
        $total_items  += $qty;

        $processed_items[] = array(
            'id'       => $prod_id,
            'name'     => $product['name'],
            'category' => $product['category'],
            'price'    => $price,
            'qty'      => $qty,
            'subtotal' => $subtotal,
        );
    }

    // Generate unique Receipt Number
    $date_prefix = current_time('Ymd');
    $daily_count = (int) $wpdb->get_var($wpdb->prepare(
        "SELECT COUNT(*) FROM $table_orders WHERE DATE(created_at) = %s",
        current_time('Y-m-d')
    )) + 1;
    $receipt_no = 'KC-BAR-' . $date_prefix . '-' . str_pad($daily_count, 3, '0', STR_PAD_LEFT);

    // Insert Order
    $insert = $wpdb->insert(
        $table_orders,
        array(
            'receipt_no'     => $receipt_no,
            'items_json'     => wp_json_encode($processed_items),
            'total_items'    => $total_items,
            'total_amount'   => $total_amount,
            'payment_method' => $payment_method,
            'staff_name'     => $staff_name,
            'customer_name'  => $customer_name,
            'table_number'   => $table_number,
            'room_number'    => $room_number,
            'status'         => 'completed',
            'created_at'     => current_time('mysql'),
        )
    );

    if (!$insert) {
        wp_send_json_error(array('message' => 'Failed to record bar transaction. Please retry.'));
    }

    $order_id = $wpdb->insert_id;

    // Decrement Stock for each item & update total sold
    foreach ($processed_items as $p_item) {
        $wpdb->query($wpdb->prepare(
            "UPDATE $table_products 
             SET current_stock = GREATEST(0, current_stock - %d), 
                 total_sold = total_sold + %d 
             WHERE id = %d",
            $p_item['qty'],
            $p_item['qty'],
            $p_item['id']
        ));
    }

    wp_send_json_success(array(
        'message'        => 'Sale completed successfully!',
        'order_id'       => $order_id,
        'receipt_no'     => $receipt_no,
        'total_amount'   => $total_amount,
        'total_items'    => $total_items,
        'payment_method' => $payment_method,
        'staff_name'     => $staff_name,
        'customer_name'  => $customer_name,
        'table_number'   => $table_number,
        'room_number'    => $room_number,
        'created_at'     => current_time('d/m/Y h:i A'),
        'items'          => $processed_items,
    ));
}

/**
 * AJAX: Restock / Adjust Stock / Log Breakage
 * ACCESS CONTROL:
 * - Staff can ONLY 'restock' (N/S) or 'breakage' (B/C/S)
 * - Only ADMIN (PIN: 1122) can 'set_exact' or edit prices/baseline
 */
add_action('wp_ajax_kc_bar_update_stock', 'kc_bar_ajax_update_stock');
add_action('wp_ajax_nopriv_kc_bar_update_stock', 'kc_bar_ajax_update_stock');
function kc_bar_ajax_update_stock() {
    $role = kc_bar_get_current_role();
    if (!$role) {
        wp_send_json_error(array('message' => 'Unauthorized.'), 401);
    }

    global $wpdb;
    $table = $wpdb->prefix . 'kc_bar_products';

    $prod_id  = (int) ($_POST['product_id'] ?? 0);
    $action   = sanitize_text_field($_POST['action_type'] ?? 'restock'); // 'restock', 'breakage', 'set_exact'
    $qty      = (int) ($_POST['qty'] ?? 0);

    // Strict Role Restriction: Only Admin can directly edit exact stock or remove stock
    if (($action === 'set_exact' || $action === 'remove_stock') && $role !== 'admin') {
        wp_send_json_error(array(
            'message' => 'Permission Denied: Only Admin can directly edit or remove stock levels. Staff can only add new stock (N/S) or log breakage (B/C/S). Enter Admin Password.',
            'require_admin' => true
        ), 403);
    }

    $product = $wpdb->get_row($wpdb->prepare("SELECT * FROM $table WHERE id = %d", $prod_id), ARRAY_A);
    if (!$product) {
        wp_send_json_error(array('message' => 'Product not found.'));
    }

    if ($action === 'restock') {
        $wpdb->query($wpdb->prepare(
            "UPDATE $table SET new_stock = new_stock + %d, current_stock = current_stock + %d WHERE id = %d",
            $qty, $qty, $prod_id
        ));
        $msg = "Added $qty new bottles to {$product['name']} (New Stock Recorded).";
    } elseif ($action === 'breakage') {
        $wpdb->query($wpdb->prepare(
            "UPDATE $table SET breakage = breakage + %d, current_stock = GREATEST(0, current_stock - %d) WHERE id = %d",
            $qty, $qty, $prod_id
        ));
        $msg = "Logged $qty breakage/spoilage for {$product['name']}.";
    } elseif ($action === 'set_exact') {
        $wpdb->query($wpdb->prepare(
            "UPDATE $table SET current_stock = %d WHERE id = %d",
            $qty, $prod_id
        ));
        $msg = "[Admin Action] Set {$product['name']} exact current stock to $qty bottles.";
    } elseif ($action === 'remove_stock') {
        $wpdb->query($wpdb->prepare(
            "UPDATE $table SET current_stock = GREATEST(0, current_stock - %d) WHERE id = %d",
            $qty, $prod_id
        ));
        $msg = "[Admin Action] Removed $qty bottles from {$product['name']}.";
    } else {
        wp_send_json_error(array('message' => 'Invalid action type.'));
    }

    $updated = $wpdb->get_row($wpdb->prepare("SELECT * FROM $table WHERE id = %d", $prod_id), ARRAY_A);

    wp_send_json_success(array(
        'message' => $msg,
        'product' => $updated,
    ));
}

/**
 * AJAX: Admin Only - Edit Product Price / Name
 */
add_action('wp_ajax_kc_bar_admin_edit_product', 'kc_bar_ajax_admin_edit_product');
add_action('wp_ajax_nopriv_kc_bar_admin_edit_product', 'kc_bar_ajax_admin_edit_product');
function kc_bar_ajax_admin_edit_product() {
    if (!kc_bar_verify_admin_session()) {
        wp_send_json_error(array('message' => 'Admin privileges required.'), 403);
    }

    global $wpdb;
    $table = $wpdb->prefix . 'kc_bar_products';

    $prod_id = (int) ($_POST['product_id'] ?? 0);
    $price   = (float) ($_POST['price'] ?? 0);
    $name    = sanitize_text_field($_POST['name'] ?? '');
    $stock   = isset($_POST['stock']) ? (int) $_POST['stock'] : null;

    if ($prod_id <= 0 || $price <= 0) {
        wp_send_json_error(array('message' => 'Invalid product price or ID.'));
    }

    $update_data = array('price' => $price);
    if (!empty($name)) {
        $update_data['name'] = $name;
    }
    if ($stock !== null && $stock >= 0) {
        $update_data['current_stock'] = $stock;
    }

    $wpdb->update($table, $update_data, array('id' => $prod_id));

    wp_send_json_success(array('message' => 'Product updated successfully by Admin.'));
}

/**
 * AJAX: Add New Product to Menu (Admin only)
 */
add_action('wp_ajax_kc_bar_add_product', 'kc_bar_ajax_add_product');
add_action('wp_ajax_nopriv_kc_bar_add_product', 'kc_bar_ajax_add_product');
function kc_bar_ajax_add_product() {
    if (!kc_bar_verify_admin_session()) {
        wp_send_json_error(array('message' => 'Admin privileges required to add new menu items.'), 403);
    }

    global $wpdb;
    $table = $wpdb->prefix . 'kc_bar_products';

    $name     = sanitize_text_field($_POST['name'] ?? '');
    $category = sanitize_text_field($_POST['category'] ?? 'beer');
    $price    = (float) ($_POST['price'] ?? 0);
    $stock    = (int) ($_POST['stock'] ?? 0);

    if (empty($name) || $price <= 0) {
        wp_send_json_error(array('message' => 'Please provide a valid drink name and price.'));
    }

    if (!in_array($category, array('wine', 'beer', 'drinks', 'games'))) {
        $category = 'beer';
    }

    $insert = $wpdb->insert($table, array(
        'name'          => $name,
        'category'      => $category,
        'price'         => $price,
        'opening_stock' => $stock,
        'new_stock'     => 0,
        'current_stock' => $stock,
        'total_sold'    => 0,
        'breakage'      => 0,
        'is_active'     => 1,
    ));

    if (!$insert) {
        wp_send_json_error(array('message' => 'Failed to add drink.'));
    }

    wp_send_json_success(array(
        'message' => "Successfully added $name to $category by Admin!",
        'id'      => $wpdb->insert_id,
    ));
}

/**
 * AJAX: Delete / Remove Product from Bar Stock (Admin Only)
 */
add_action('wp_ajax_kc_bar_delete_product', 'kc_bar_ajax_delete_product');
add_action('wp_ajax_nopriv_kc_bar_delete_product', 'kc_bar_ajax_delete_product');
function kc_bar_ajax_delete_product() {
    if (!kc_bar_verify_admin_session()) {
        wp_send_json_error(array('message' => 'Admin privileges required to remove a product from inventory.'), 403);
    }

    global $wpdb;
    $table = $wpdb->prefix . 'kc_bar_products';

    $prod_id = (int) ($_POST['product_id'] ?? 0);
    if ($prod_id <= 0) {
        wp_send_json_error(array('message' => 'Invalid drink ID.'));
    }

    $product = $wpdb->get_row($wpdb->prepare("SELECT * FROM $table WHERE id = %d", $prod_id), ARRAY_A);
    if (!$product) {
        wp_send_json_error(array('message' => 'Beverage not found in stock.'));
    }

    // Set is_active to 0 so it disappears from POS catalog & active ledger
    $wpdb->update($table, array('is_active' => 0), array('id' => $prod_id));

    wp_send_json_success(array(
        'message' => "Successfully removed '{$product['name']}' from bar stock & POS menu.",
        'product_id' => $prod_id
    ));
}

/**
 * AJAX: Get Daily Stock Ledger matching physical notebook
 */
add_action('wp_ajax_kc_bar_get_daily_sheet', 'kc_bar_ajax_get_daily_sheet');
add_action('wp_ajax_nopriv_kc_bar_get_daily_sheet', 'kc_bar_ajax_get_daily_sheet');
function kc_bar_ajax_get_daily_sheet() {
    if (!kc_bar_verify_staff_session()) {
        wp_send_json_error(array('message' => 'Unauthorized.'), 401);
    }

    global $wpdb;
    $table_products = $wpdb->prefix . 'kc_bar_products';
    $table_orders   = $wpdb->prefix . 'kc_bar_orders';

    $today = current_time('Y-m-d');

    $products = $wpdb->get_results(
        "SELECT id, name, category, price, opening_stock, new_stock, current_stock, total_sold, breakage 
         FROM $table_products 
         WHERE is_active = 1 
         ORDER BY category ASC, name ASC",
        ARRAY_A
    );

    $ledger_rows = array();
    $grand_total_amount = 0;
    $total_bottles_sold = 0;

    foreach ($products as $p) {
        $os     = (int) $p['opening_stock'];
        $ns     = (int) $p['new_stock'];
        $ts     = $os + $ns;
        $qs     = (int) $p['total_sold'];
        $bcs    = (int) $p['breakage'];
        $cs     = max(0, $ts - $qs - $bcs);
        $amount = $qs * (float) $p['price'];

        $grand_total_amount += $amount;
        $total_bottles_sold += $qs;

        $ledger_rows[] = array(
            'id'       => $p['id'],
            'name'     => $p['name'],
            'category' => $p['category'],
            'price'    => (float) $p['price'],
            'os'       => $os,
            'ns'       => $ns,
            'ts'       => $ts,
            'qs'       => $qs,
            'bcs'      => $bcs,
            'cs'       => $cs,
            'amount'   => $amount,
        );
    }

    // Payment totals from orders
    $payment_totals = $wpdb->get_row(
        $wpdb->prepare(
            "SELECT 
                COALESCE(SUM(CASE WHEN payment_method = 'pos' THEN total_amount ELSE 0 END), 0) as pos_total,
                COALESCE(SUM(CASE WHEN payment_method = 'cash' THEN total_amount ELSE 0 END), 0) as cash_total,
                COALESCE(SUM(CASE WHEN payment_method = 'transfer' THEN total_amount ELSE 0 END), 0) as transfer_total,
                COALESCE(SUM(CASE WHEN payment_method = 'room_charge' THEN total_amount ELSE 0 END), 0) as room_total,
                COALESCE(SUM(total_amount), 0) as grand_total
             FROM $table_orders 
             WHERE DATE(created_at) = %s AND status = 'completed'",
            $today
        ),
        ARRAY_A
    );

    wp_send_json_success(array(
        'date'               => current_time('d F Y'),
        'role'               => kc_bar_get_current_role(),
        'rows'               => $ledger_rows,
        'grand_total_amount' => $grand_total_amount,
        'total_bottles_sold' => $total_bottles_sold,
        'payment_totals'     => $payment_totals,
    ));
}

/**
 * AJAX: Get Active Shift & Live Performance for Current Staff
 */
add_action('wp_ajax_kc_bar_get_active_shift', 'kc_bar_ajax_get_active_shift');
add_action('wp_ajax_nopriv_kc_bar_get_active_shift', 'kc_bar_ajax_get_active_shift');
function kc_bar_ajax_get_active_shift() {
    if (!kc_bar_verify_staff_session()) {
        wp_send_json_error(array('message' => 'Unauthorized or session expired.'), 401);
    }

    $staff_name = sanitize_text_field($_POST['staff_name'] ?? '');
    $active_shift = kc_bar_get_or_create_active_shift($staff_name);
    $summary = kc_bar_get_active_shift_summary($active_shift);

    wp_send_json_success(array(
        'shift'   => $active_shift,
        'summary' => $summary,
    ));
}

/**
 * AJAX: Staff Close Shift & Handover to Next Attendant
 * Dedicated shift report recorded per staff name
 */
add_action('wp_ajax_kc_bar_close_shift', 'kc_bar_ajax_close_shift');
add_action('wp_ajax_nopriv_kc_bar_close_shift', 'kc_bar_ajax_close_shift');
function kc_bar_ajax_close_shift() {
    if (!kc_bar_verify_staff_session()) {
        wp_send_json_error(array('message' => 'Unauthorized or session expired.'), 401);
    }

    global $wpdb;
    $table_products = $wpdb->prefix . 'kc_bar_products';
    $table_shifts   = $wpdb->prefix . 'kc_bar_shifts';
    $table_logs     = $wpdb->prefix . 'kc_bar_daily_logs';

    $outgoing_staff = sanitize_text_field($_POST['outgoing_staff'] ?? '');
    $incoming_staff = sanitize_text_field($_POST['incoming_staff'] ?? '');
    $notes          = sanitize_textarea_field($_POST['notes'] ?? '');

    if (empty($incoming_staff)) {
        wp_send_json_error(array('message' => 'Please provide the name of the incoming staff member taking over the next shift.'));
    }

    $active_shift = kc_bar_get_or_create_active_shift($outgoing_staff);
    if (!$active_shift) {
        wp_send_json_error(array('message' => 'Could not find an active shift to close.'));
    }

    $shift_metrics = kc_bar_get_active_shift_summary($active_shift);

    // 1. Snapshot physical stock handover
    $products = $wpdb->get_results(
        "SELECT id, name, category, price, opening_stock, new_stock, current_stock, total_sold, breakage 
         FROM $table_products 
         WHERE is_active = 1 
         ORDER BY category ASC, name ASC",
        ARRAY_A
    );

    $stock_handover = array();
    $today = current_time('Y-m-d');

    foreach ($products as $p) {
        $stock_handover[] = array(
            'id'            => $p['id'],
            'name'          => $p['name'],
            'category'      => $p['category'],
            'price'         => (float) $p['price'],
            'opening_stock' => (int) $p['opening_stock'],
            'new_stock'     => (int) $p['new_stock'],
            'total_sold'    => (int) $p['total_sold'],
            'breakage'      => (int) $p['breakage'],
            'closing_stock' => (int) $p['current_stock'],
        );

        // Also log to daily stock sheet logs
        $ts = $p['opening_stock'] + $p['new_stock'];
        $cs = max(0, $ts - $p['total_sold'] - $p['breakage']);
        $amt = $p['total_sold'] * (float) $p['price'];

        $wpdb->insert($table_logs, array(
            'log_date'      => $today,
            'product_id'    => $p['id'],
            'product_name'  => $p['name'],
            'category'      => $p['category'],
            'price'         => $p['price'],
            'opening_stock' => $p['opening_stock'],
            'new_stock'     => $p['new_stock'],
            'total_stock'   => $ts,
            'qty_sold'      => $p['total_sold'],
            'breakage'      => $p['breakage'],
            'closing_stock' => $cs,
            'amount'        => $amt,
            'staff_name'    => !empty($outgoing_staff) ? $outgoing_staff : $active_shift['staff_name'],
        ));
    }

    // 2. Finalize and close the active shift
    $end_time = current_time('mysql');
    $wpdb->update($table_shifts, array(
        'staff_name'          => !empty($outgoing_staff) ? $outgoing_staff : $active_shift['staff_name'],
        'incoming_staff'      => $incoming_staff,
        'end_time'            => $end_time,
        'total_orders'        => $shift_metrics['total_orders'],
        'total_sales'         => $shift_metrics['total_revenue'],
        'pos_sales'           => $shift_metrics['pos_revenue'],
        'cash_sales'          => $shift_metrics['cash_revenue'],
        'transfer_sales'      => $shift_metrics['transfer_revenue'],
        'room_sales'          => $shift_metrics['room_revenue'],
        'total_bottles_sold'  => $shift_metrics['total_bottles'],
        'drinks_sold_json'    => wp_json_encode($shift_metrics['items_sold']),
        'stock_handover_json' => wp_json_encode($stock_handover),
        'notes'               => $notes,
        'status'              => 'closed',
    ), array('id' => $active_shift['id']));

    // 3. Stock Rollover: Current Stock becomes Opening Stock for incoming staff, reset delta counters
    $wpdb->query("UPDATE $table_products SET opening_stock = current_stock, new_stock = 0, total_sold = 0, breakage = 0");

    // 4. Start the next shift immediately dedicated to the incoming staff!
    $new_shift_code = 'SHIFT-' . current_time('Ymd') . '-' . strtoupper(wp_generate_password(4, false, false));
    $wpdb->insert($table_shifts, array(
        'shift_code'  => $new_shift_code,
        'staff_name'  => $incoming_staff,
        'start_time'  => current_time('mysql'),
        'status'      => 'active',
    ));
    $new_shift_id = $wpdb->insert_id;

    wp_send_json_success(array(
        'message'            => "Shift successfully closed by {$outgoing_staff}! Handed over to {$incoming_staff}.",
        'closed_shift'       => array(
            'shift_code'         => $active_shift['shift_code'],
            'outgoing_staff'     => !empty($outgoing_staff) ? $outgoing_staff : $active_shift['staff_name'],
            'incoming_staff'     => $incoming_staff,
            'start_time'         => date('d/m/Y h:i A', strtotime($active_shift['start_time'])),
            'end_time'           => date('d/m/Y h:i A', strtotime($end_time)),
            'totals'             => $shift_metrics,
            'items_sold'         => $shift_metrics['items_sold'],
            'stock_handover'     => $stock_handover,
            'notes'              => $notes,
        ),
        'new_shift'          => array(
            'id'                 => $new_shift_id,
            'shift_code'         => $new_shift_code,
            'staff_name'         => $incoming_staff,
            'start_time'         => current_time('d/m/Y h:i A'),
        ),
        'new_active_staff'   => $incoming_staff,
    ));
}

/**
 * AJAX: Get Closed Shift History & Handover Reports
 */
add_action('wp_ajax_kc_bar_get_shift_history', 'kc_bar_ajax_get_shift_history');
add_action('wp_ajax_nopriv_kc_bar_get_shift_history', 'kc_bar_ajax_get_shift_history');
function kc_bar_ajax_get_shift_history() {
    if (!kc_bar_verify_staff_session()) {
        wp_send_json_error(array('message' => 'Unauthorized.'), 401);
    }

    global $wpdb;
    $table_shifts = $wpdb->prefix . 'kc_bar_shifts';

    $shifts = $wpdb->get_results(
        "SELECT id, shift_code, staff_name, incoming_staff, start_time, end_time, total_orders, total_sales, pos_sales, cash_sales, transfer_sales, total_bottles_sold, drinks_sold_json, notes, status 
         FROM $table_shifts 
         ORDER BY id DESC 
         LIMIT 25",
        ARRAY_A
    );

    foreach ($shifts as &$s) {
        $s['drinks_sold'] = json_decode($s['drinks_sold_json'] ?? '[]', true) ?: array();
    }

    wp_send_json_success(array('shifts' => $shifts));
}

/**
 * AJAX: Reset Daily Shift (Admin Only)
 */
add_action('wp_ajax_kc_bar_reset_day', 'kc_bar_ajax_reset_day');
add_action('wp_ajax_nopriv_kc_bar_reset_day', 'kc_bar_ajax_reset_day');
function kc_bar_ajax_reset_day() {
    if (!kc_bar_verify_admin_session()) {
        wp_send_json_error(array('message' => 'Admin privileges required to close/reset shift.'), 403);
    }

    global $wpdb;
    $table_products = $wpdb->prefix . 'kc_bar_products';
    $table_logs     = $wpdb->prefix . 'kc_bar_daily_logs';

    $today = current_time('Y-m-d');

    $products = $wpdb->get_results("SELECT * FROM $table_products WHERE is_active = 1", ARRAY_A);
    foreach ($products as $p) {
        $ts = $p['opening_stock'] + $p['new_stock'];
        $cs = max(0, $ts - $p['total_sold'] - $p['breakage']);
        $amt = $p['total_sold'] * (float) $p['price'];

        $wpdb->insert($table_logs, array(
            'log_date'      => $today,
            'product_id'    => $p['id'],
            'product_name'  => $p['name'],
            'category'      => $p['category'],
            'price'         => $p['price'],
            'opening_stock' => $p['opening_stock'],
            'new_stock'     => $p['new_stock'],
            'total_stock'   => $ts,
            'qty_sold'      => $p['total_sold'],
            'breakage'      => $p['breakage'],
            'closing_stock' => $cs,
            'amount'        => $amt,
            'staff_name'    => 'Shift Close',
        ));
    }

    $wpdb->query("UPDATE $table_products SET opening_stock = current_stock, new_stock = 0, total_sold = 0, breakage = 0");

    wp_send_json_success(array('message' => 'Day archived and new shift started! Closing stocks rolled over to new Opening Stocks.'));
}

/**
 * AJAX: Clear Test Orders & Start Fresh Tomorrow (Admin Only)
 * Preserves all current physical stocks while wiping test orders & test shift noise
 */
add_action('wp_ajax_kc_bar_clear_test_data', 'kc_bar_ajax_clear_test_data');
add_action('wp_ajax_nopriv_kc_bar_clear_test_data', 'kc_bar_ajax_clear_test_data');
function kc_bar_ajax_clear_test_data() {
    if (!kc_bar_verify_admin_session()) {
        wp_send_json_error(array('message' => 'Admin privileges required.'), 403);
    }

    global $wpdb;
    $table_products = $wpdb->prefix . 'kc_bar_products';
    $table_orders   = $wpdb->prefix . 'kc_bar_orders';
    $table_logs     = $wpdb->prefix . 'kc_bar_daily_logs';
    $table_shifts   = $wpdb->prefix . 'kc_bar_shifts';

    // 1. Delete all test orders
    $wpdb->query("DELETE FROM $table_orders");
    $wpdb->query("ALTER TABLE $table_orders AUTO_INCREMENT = 1");

    // 2. Clear daily logs
    $wpdb->query("DELETE FROM $table_logs");
    $wpdb->query("ALTER TABLE $table_logs AUTO_INCREMENT = 1");

    // 3. Clear shifts
    $wpdb->query("DELETE FROM $table_shifts");
    $wpdb->query("ALTER TABLE $table_shifts AUTO_INCREMENT = 1");

    // 4. Reset product sales counts while preserving current actual stock as opening stock
    $wpdb->query("UPDATE $table_products SET opening_stock = current_stock, new_stock = 0, total_sold = 0, breakage = 0");

    // 5. Initialize fresh shift
    $shift_code = 'SHIFT-' . current_time('Ymd') . '-LIVE01';
    $wpdb->insert($table_shifts, array(
        'shift_code'  => $shift_code,
        'staff_name'  => 'Bar Staff',
        'start_time'  => current_time('mysql'),
        'status'      => 'active',
    ));

    wp_send_json_success(array(
        'message' => 'All test orders and shift logs have been cleared! Physical bottle stock levels are preserved. The system is 100% clean and ready for tomorrow\'s live report.',
    ));
}

/**
 * AJAX: Generate Comprehensive Monthly Sales & Inventory Report
 * Formatted for End-of-Month Audit & Executive Printout
 */
add_action('wp_ajax_kc_bar_get_monthly_report', 'kc_bar_ajax_get_monthly_report');
add_action('wp_ajax_nopriv_kc_bar_get_monthly_report', 'kc_bar_ajax_get_monthly_report');
function kc_bar_ajax_get_monthly_report() {
    if (!kc_bar_verify_staff_session()) {
        wp_send_json_error(array('message' => 'Unauthorized.'), 401);
    }

    global $wpdb;
    $table_products = $wpdb->prefix . 'kc_bar_products';
    $table_orders   = $wpdb->prefix . 'kc_bar_orders';

    $year  = (int) ($_POST['year'] ?? current_time('Y'));
    $month = (int) ($_POST['month'] ?? current_time('m'));

    if ($year < 2020 || $year > 2040) $year = (int) current_time('Y');
    if ($month < 1 || $month > 12) $month = (int) current_time('m');

    $month_str = str_pad($month, 2, '0', STR_PAD_LEFT);
    $start_date = "$year-$month_str-01 00:00:00";
    $end_date   = date('Y-m-t 23:59:59', strtotime($start_date));
    $month_name = date('F Y', strtotime($start_date));

    // 1. Total Financial Aggregates
    $summary = $wpdb->get_row(
        $wpdb->prepare(
            "SELECT 
                COUNT(*) as total_orders,
                COALESCE(SUM(total_amount), 0) as total_revenue,
                COALESCE(SUM(CASE WHEN payment_method = 'pos' THEN total_amount ELSE 0 END), 0) as pos_revenue,
                COALESCE(SUM(CASE WHEN payment_method = 'cash' THEN total_amount ELSE 0 END), 0) as cash_revenue,
                COALESCE(SUM(CASE WHEN payment_method = 'transfer' THEN total_amount ELSE 0 END), 0) as transfer_revenue,
                COALESCE(SUM(CASE WHEN payment_method = 'room_charge' THEN total_amount ELSE 0 END), 0) as room_revenue,
                COALESCE(SUM(total_items), 0) as total_bottles_sold
             FROM $table_orders 
             WHERE created_at BETWEEN %s AND %s AND status = 'completed'",
            $start_date,
            $end_date
        ),
        ARRAY_A
    );

    // 2. Fetch all products and compile monthly stats
    $products = $wpdb->get_results(
        "SELECT id, name, category, price, opening_stock, new_stock, current_stock, total_sold, breakage 
         FROM $table_products 
         WHERE is_active = 1 
         ORDER BY category ASC, name ASC",
        ARRAY_A
    );

    // 3. Extract itemized sales from orders in this month
    $orders = $wpdb->get_results(
        $wpdb->prepare(
            "SELECT items_json FROM $table_orders 
             WHERE created_at BETWEEN %s AND %s AND status = 'completed'",
            $start_date,
            $end_date
        ),
        ARRAY_A
    );

    $sold_per_product = array();
    foreach ($orders as $ord) {
        $items = json_decode($ord['items_json'], true) ?: array();
        foreach ($items as $it) {
            $p_id = (int) ($it['id'] ?? 0);
            $qty  = (int) ($it['qty'] ?? 0);
            if ($p_id > 0) {
                $sold_per_product[$p_id] = ($sold_per_product[$p_id] ?? 0) + $qty;
            }
        }
    }

    $report_items = array();
    $cat_totals = array('wine' => 0, 'beer' => 0, 'drinks' => 0);
    $cat_rev    = array('wine' => 0, 'beer' => 0, 'drinks' => 0);

    foreach ($products as $p) {
        $pid = (int) $p['id'];
        $sold_month = $sold_per_product[$pid] ?? (int) $p['total_sold'];
        $price = (float) $p['price'];
        $revenue = $sold_month * $price;

        $cat = $p['category'];
        if (isset($cat_totals[$cat])) {
            $cat_totals[$cat] += $sold_month;
            $cat_rev[$cat]    += $revenue;
        }

        $report_items[] = array(
            'id'            => $pid,
            'name'          => $p['name'],
            'category'      => $cat,
            'price'         => $price,
            'opening_stock' => (int) $p['opening_stock'],
            'new_stock'     => (int) $p['new_stock'],
            'sold_qty'      => $sold_month,
            'breakage'      => (int) $p['breakage'],
            'closing_stock' => (int) $p['current_stock'],
            'revenue'       => $revenue,
        );
    }

    // Sort Top 5 Bestsellers by Revenue
    $top_items = $report_items;
    usort($top_items, function($a, $b) {
        return $b['revenue'] <=> $a['revenue'];
    });
    $top_5 = array_slice($top_items, 0, 5);

    wp_send_json_success(array(
        'month_name'     => $month_name,
        'year'           => $year,
        'month'          => $month,
        'summary'        => $summary,
        'category_qty'   => $cat_totals,
        'category_rev'   => $cat_rev,
        'top_5'          => $top_5,
        'items'          => $report_items,
        'generated_at'   => current_time('d F Y, h:i A'),
        'prepared_by'    => 'Kelvin Cameo Automated Bar Accounting Engine',
    ));
}
