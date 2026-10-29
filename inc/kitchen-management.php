<?php
/**
 * Kelvin Cameo Resort Hotel - Kitchen & Restaurant Management Engine
 * Point of Sale (POS), Food Inventory, Portion Tracking, Role-Based Access & Monthly Audit Reports
 *
 * Official RC: 1613032
 * Categories: Grills & Proteins, Rice & Mains, Soups & Swallows, Breakfast & Quick Bites, Sides & Extras
 * Admin PIN: 1122 | Kitchen Staff PIN: 1613
 *
 * @package Kelvin_Cameo
 */

if (!defined('ABSPATH')) {
    exit;
}

/**
 * Initialize Kitchen Tables in WordPress Database
 */
function kc_kitchen_init_db() {
    global $wpdb;
    $charset_collate = $wpdb->get_charset_collate();

    $table_products = $wpdb->prefix . 'kc_kitchen_products';
    $table_orders   = $wpdb->prefix . 'kc_kitchen_orders';
    $table_logs     = $wpdb->prefix . 'kc_kitchen_daily_logs';
    $table_shifts   = $wpdb->prefix . 'kc_kitchen_shifts';

    require_once ABSPATH . 'wp-admin/includes/upgrade.php';

    // 1. Kitchen Products & Live Inventory Table
    $sql_products = "CREATE TABLE IF NOT EXISTS $table_products (
        id bigint(20) NOT NULL AUTO_INCREMENT,
        name varchar(120) NOT NULL,
        category varchar(40) NOT NULL,
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

    // 2. Kitchen Orders & Food Sales Table
    $sql_orders = "CREATE TABLE IF NOT EXISTS $table_orders (
        id bigint(20) NOT NULL AUTO_INCREMENT,
        receipt_no varchar(40) NOT NULL,
        items_json longtext NOT NULL,
        total_items int(11) NOT NULL DEFAULT '1',
        total_amount decimal(12,2) NOT NULL DEFAULT '0.00',
        payment_method varchar(30) NOT NULL DEFAULT 'pos',
        staff_name varchar(80) NOT NULL DEFAULT 'Kitchen Chef',
        customer_name varchar(80) DEFAULT 'Walk-in Guest',
        table_number varchar(40) DEFAULT 'Restaurant Table',
        room_number varchar(30) DEFAULT '',
        status varchar(30) NOT NULL DEFAULT 'completed',
        created_at datetime DEFAULT CURRENT_TIMESTAMP,
        PRIMARY KEY (id),
        UNIQUE KEY receipt_idx (receipt_no),
        KEY payment_idx (payment_method),
        KEY created_idx (created_at)
    ) $charset_collate;";
    dbDelta($sql_orders);

    // 3. Kitchen Daily Stock Sheets & Reconciliation Table
    $sql_logs = "CREATE TABLE IF NOT EXISTS $table_logs (
        id bigint(20) NOT NULL AUTO_INCREMENT,
        log_date date NOT NULL,
        product_id bigint(20) NOT NULL,
        product_name varchar(120) NOT NULL,
        category varchar(40) NOT NULL,
        price decimal(12,2) NOT NULL,
        opening_stock int(11) NOT NULL DEFAULT '0',
        new_stock int(11) NOT NULL DEFAULT '0',
        total_stock int(11) NOT NULL DEFAULT '0',
        qty_sold int(11) NOT NULL DEFAULT '0',
        breakage int(11) NOT NULL DEFAULT '0',
        closing_stock int(11) NOT NULL DEFAULT '0',
        amount decimal(12,2) NOT NULL DEFAULT '0.00',
        staff_name varchar(80) DEFAULT 'Chef',
        created_at datetime DEFAULT CURRENT_TIMESTAMP,
        PRIMARY KEY (id),
        KEY date_idx (log_date)
    ) $charset_collate;";
    dbDelta($sql_logs);

    // 4. Kitchen Staff Shifts & Handover Reconciliation Table
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

    kc_kitchen_seed_initial_products();
}
add_action('after_switch_theme', 'kc_kitchen_init_db');
add_action('admin_init', 'kc_kitchen_init_db');

/**
 * Seed Initial Authentic Nigerian Food Menu & Kitchen Inventory
 */
function kc_kitchen_seed_initial_products() {
    global $wpdb;
    $table = $wpdb->prefix . 'kc_kitchen_products';

    $count = (int) $wpdb->get_var("SELECT COUNT(*) FROM $table");
    if ($count > 0) {
        return; // Already seeded
    }

    $products = array(
        // ==========================================
        // CATEGORY 1: GRILLS & PROTEINS (grills)
        // ==========================================
        array('name' => 'Whole Grilled Catfish (Point & Kill)', 'category' => 'grills', 'price' => 8000, 'os' => 15),
        array('name' => 'Half Grilled Catfish', 'category' => 'grills', 'price' => 4500, 'os' => 15),
        array('name' => 'Asun (Spiced Goat Meat)', 'category' => 'grills', 'price' => 3500, 'os' => 20),
        array('name' => 'Peppered Chicken (Quarter)', 'category' => 'grills', 'price' => 3000, 'os' => 25),
        array('name' => 'Peppered Turkey Wings', 'category' => 'grills', 'price' => 4500, 'os' => 20),
        array('name' => 'Beef Suya Platter', 'category' => 'grills', 'price' => 3000, 'os' => 20),
        array('name' => 'Catfish Pepper Soup', 'category' => 'grills', 'price' => 4000, 'os' => 20),
        array('name' => 'Goat Meat Pepper Soup / Isi Ewu', 'category' => 'grills', 'price' => 4500, 'os' => 15),
        array('name' => 'Gizdodo (Peppered Gizzard & Plantain)', 'category' => 'grills', 'price' => 3500, 'os' => 20),

        // ==========================================
        // CATEGORY 2: RICE & MAIN DISHES (mains)
        // ==========================================
        array('name' => 'Special Fried Rice & Chicken', 'category' => 'mains', 'price' => 4500, 'os' => 30),
        array('name' => 'Smoky Party Jollof Rice & Chicken', 'category' => 'mains', 'price' => 4000, 'os' => 35),
        array('name' => 'Party Jollof Rice & Beef', 'category' => 'mains', 'price' => 3500, 'os' => 30),
        array('name' => 'Native Village Rice (Ofada) & Assorted', 'category' => 'mains', 'price' => 5000, 'os' => 20),
        array('name' => 'White Rice & Ayamase / Tomato Stew', 'category' => 'mains', 'price' => 3500, 'os' => 25),
        array('name' => 'Stir-Fry Spaghetti & Chicken', 'category' => 'mains', 'price' => 3500, 'os' => 20),

        // ==========================================
        // CATEGORY 3: SOUPS & SWALLOWS (soups)
        // ==========================================
        array('name' => 'Rich Egusi Soup & Assorted Meat + Swallow', 'category' => 'soups', 'price' => 4500, 'os' => 25),
        array('name' => 'Fresh Fish Ogbono / Okro Soup + Swallow', 'category' => 'soups', 'price' => 4500, 'os' => 20),
        array('name' => 'Oha Soup & Goat Meat + Swallow', 'category' => 'soups', 'price' => 5000, 'os' => 15),
        array('name' => 'Afang Soup & Dried Fish + Swallow', 'category' => 'soups', 'price' => 5000, 'os' => 15),
        array('name' => 'Extra Pounded Yam Portion', 'category' => 'soups', 'price' => 1000, 'os' => 40),
        array('name' => 'Extra Semovita / Eba Portion', 'category' => 'soups', 'price' => 1000, 'os' => 40),

        // ==========================================
        // CATEGORY 4: BREAKFAST & QUICK BITES (breakfast)
        // ==========================================
        array('name' => 'Full English Breakfast (Eggs, Sausage, Beans, Tea)', 'category' => 'breakfast', 'price' => 4500, 'os' => 20),
        array('name' => 'Club Sandwich & French Fries', 'category' => 'breakfast', 'price' => 3500, 'os' => 20),
        array('name' => 'Chicken Sharwama (Double Sausage)', 'category' => 'breakfast', 'price' => 3000, 'os' => 30),
        array('name' => 'Beef Sharwama (Double Sausage)', 'category' => 'breakfast', 'price' => 3000, 'os' => 30),
        array('name' => 'Crispy Chicken Wings & Potato Chips', 'category' => 'breakfast', 'price' => 3500, 'os' => 25),
        array('name' => 'Fried Plantain (Dodo) & Egg Sauce', 'category' => 'breakfast', 'price' => 2500, 'os' => 25),

        // ==========================================
        // CATEGORY 5: SIDES & EXTRAS (sides)
        // ==========================================
        array('name' => 'Portion of Fried Plantain (Dodo)', 'category' => 'sides', 'price' => 1500, 'os' => 40),
        array('name' => 'Portion of French Fries (Chips)', 'category' => 'sides', 'price' => 1500, 'os' => 30),
        array('name' => 'Extra Beef Portion', 'category' => 'sides', 'price' => 1500, 'os' => 35),
        array('name' => 'Extra Peppered Chicken Portion', 'category' => 'sides', 'price' => 2000, 'os' => 30),
        array('name' => 'Extra Peppered Turkey Portion', 'category' => 'sides', 'price' => 3000, 'os' => 20),
        array('name' => 'Extra Fresh Fish Cut', 'category' => 'sides', 'price' => 2500, 'os' => 20),
        array('name' => 'Boiled Egg (2 Pcs)', 'category' => 'sides', 'price' => 1000, 'os' => 30),
    );

    foreach ($products as $p) {
        $wpdb->insert(
            $table,
            array(
                'name'          => $p['name'],
                'category'      => $p['category'],
                'price'         => $p['price'],
                'opening_stock' => $p['os'],
                'new_stock'     => 0,
                'current_stock' => $p['os'],
                'total_sold'    => 0,
                'breakage'      => 0,
                'is_active'     => 1,
            ),
            array('%s', '%s', '%f', '%d', '%d', '%d', '%d', '%d', '%d')
        );
    }
}

/**
 * Role & Session Verification
 */
function kc_kitchen_get_current_role() {
    $token = sanitize_text_field($_REQUEST['token'] ?? ($_SERVER['HTTP_X_KC_KITCHEN_TOKEN'] ?? ''));
    if (!empty($token)) {
        if (wp_verify_nonce($token, 'kc_kitchen_admin_session')) {
            return 'admin';
        }
        if (wp_verify_nonce($token, 'kc_kitchen_staff_session')) {
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

function kc_kitchen_verify_staff_session() {
    $role = kc_kitchen_get_current_role();
    return ($role === 'staff' || $role === 'admin');
}

function kc_kitchen_verify_admin_session() {
    return (kc_kitchen_get_current_role() === 'admin');
}

/**
 * AJAX: PIN Authentication
 */
function kc_kitchen_ajax_verify_pin() {
    $pin = sanitize_text_field($_POST['pin'] ?? '');
    $admin_pin = get_option('kc_kitchen_admin_pin', '1122');
    $staff_pin = get_option('kc_kitchen_pin', '1613');

    if ($pin === $admin_pin || $pin === '1122') {
        $token = wp_create_nonce('kc_kitchen_admin_session');
        wp_send_json_success(array(
            'message' => 'Admin Access Granted (Full Privileges)',
            'role'    => 'admin',
            'token'   => $token,
        ));
    } elseif ($pin === $staff_pin || $pin === '1613') {
        $token = wp_create_nonce('kc_kitchen_staff_session');
        wp_send_json_success(array(
            'message' => 'Kitchen Staff Access Granted (Orders & Restock Mode)',
            'role'    => 'staff',
            'token'   => $token,
        ));
    } else {
        wp_send_json_error(array('message' => 'Invalid Security PIN. Access Denied.'), 403);
    }
}
add_action('wp_ajax_kc_kitchen_verify_pin', 'kc_kitchen_ajax_verify_pin');
add_action('wp_ajax_nopriv_kc_kitchen_verify_pin', 'kc_kitchen_ajax_verify_pin');

/**
 * Active Shift Helpers
 */
function kc_kitchen_get_or_create_active_shift($staff_name = 'Kitchen Chef') {
    global $wpdb;
    $table_shifts = $wpdb->prefix . 'kc_kitchen_shifts';

    $active = $wpdb->get_row(
        "SELECT * FROM $table_shifts WHERE status = 'active' ORDER BY id DESC LIMIT 1",
        ARRAY_A
    );

    if ($active) {
        return $active;
    }

    $shift_code = 'KSHIFT-' . date('Ymd') . '-' . strtoupper(wp_generate_password(4, false));
    $wpdb->insert(
        $table_shifts,
        array(
            'shift_code' => $shift_code,
            'staff_name' => $staff_name,
            'start_time' => current_time('mysql'),
            'status'     => 'active',
        ),
        array('%s', '%s', '%s', '%s')
    );

    $id = $wpdb->insert_id;
    return $wpdb->get_row($wpdb->prepare("SELECT * FROM $table_shifts WHERE id = %d", $id), ARRAY_A);
}

function kc_kitchen_get_active_shift_summary() {
    global $wpdb;
    $table_shifts = $wpdb->prefix . 'kc_kitchen_shifts';
    $table_orders = $wpdb->prefix . 'kc_kitchen_orders';

    $active_shift = kc_kitchen_get_or_create_active_shift();
    $start_time = $active_shift['start_time'];

    $orders = $wpdb->get_results(
        $wpdb->prepare(
            "SELECT * FROM $table_orders WHERE created_at >= %s AND status = 'completed' ORDER BY id ASC",
            $start_time
        ),
        ARRAY_A
    );

    $total_orders = count($orders);
    $total_sales  = 0;
    $pos_sales    = 0;
    $cash_sales   = 0;
    $transfer_sales = 0;
    $room_sales   = 0;
    $total_dishes_sold = 0;
    $dishes_breakdown = array();

    foreach ($orders as $ord) {
        $amount = (float) $ord['total_amount'];
        $total_sales += $amount;

        switch ($ord['payment_method']) {
            case 'pos': $pos_sales += $amount; break;
            case 'cash': $cash_sales += $amount; break;
            case 'transfer': $transfer_sales += $amount; break;
            case 'room': $room_sales += $amount; break;
            default: $pos_sales += $amount; break;
        }

        $items = json_decode($ord['items_json'], true) ?: array();
        foreach ($items as $item) {
            $qty = (int) ($item['qty'] ?? 1);
            $total_dishes_sold += $qty;
            $name = $item['name'] ?? 'Dish';
            $dishes_breakdown[$name] = ($dishes_breakdown[$name] ?? 0) + $qty;
        }
    }

    return array(
        'shift_code'         => $active_shift['shift_code'],
        'staff_name'         => $active_shift['staff_name'],
        'start_time'         => $active_shift['start_time'],
        'total_orders'       => $total_orders,
        'total_sales'        => $total_sales,
        'pos_sales'          => $pos_sales,
        'cash_sales'         => $cash_sales,
        'transfer_sales'     => $transfer_sales,
        'room_sales'         => $room_sales,
        'total_dishes_sold'  => $total_dishes_sold,
        'dishes_breakdown'   => $dishes_breakdown,
    );
}

/**
 * AJAX: Get POS Initial Data
 */
function kc_kitchen_ajax_get_pos_data() {
    $role = kc_kitchen_get_current_role();
    if (!$role) {
        wp_send_json_error(array('message' => 'Unauthorized or session expired.'), 401);
    }

    global $wpdb;
    $table_products = $wpdb->prefix . 'kc_kitchen_products';
    $table_orders   = $wpdb->prefix . 'kc_kitchen_orders';

    kc_kitchen_init_db();

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
            "SELECT COUNT(*) as order_count, COALESCE(SUM(total_amount), 0) as total_revenue 
             FROM $table_orders 
             WHERE DATE(created_at) = %s AND status = 'completed'",
            $today
        ),
        ARRAY_A
    );

    // 3. Shift info
    $shift_info = kc_kitchen_get_active_shift_summary();

    wp_send_json_success(array(
        'role'          => $role,
        'products'      => $products,
        'today_sales'   => (float) ($sales_summary['total_revenue'] ?? 0),
        'today_orders'  => (int) ($sales_summary['order_count'] ?? 0),
        'shift'         => $shift_info,
        'system_time'   => current_time('mysql'),
    ));
}
add_action('wp_ajax_kc_kitchen_get_pos_data', 'kc_kitchen_ajax_get_pos_data');
add_action('wp_ajax_nopriv_kc_kitchen_get_pos_data', 'kc_kitchen_ajax_get_pos_data');

/**
 * AJAX: Create Kitchen Food Order
 */
function kc_kitchen_ajax_create_order() {
    if (!kc_kitchen_verify_staff_session()) {
        wp_send_json_error(array('message' => 'Unauthorized or session expired.'), 401);
    }

    global $wpdb;
    $table_products = $wpdb->prefix . 'kc_kitchen_products';
    $table_orders   = $wpdb->prefix . 'kc_kitchen_orders';

    $items_raw = stripslashes($_POST['items'] ?? '[]');
    $items = json_decode($items_raw, true);

    if (empty($items) || !is_array($items)) {
        wp_send_json_error(array('message' => 'No dishes in cart. Please select items to checkout.'));
    }

    $payment_method = sanitize_text_field($_POST['payment_method'] ?? 'pos');
    $staff_name     = sanitize_text_field($_POST['staff_name'] ?? 'Kitchen Chef');
    $customer_name  = sanitize_text_field($_POST['customer_name'] ?? 'Walk-in Guest');
    $table_number   = sanitize_text_field($_POST['table_number'] ?? 'Restaurant Table');
    $room_number    = sanitize_text_field($_POST['room_number'] ?? '');

    $total_amount = 0;
    $total_items  = 0;
    $processed_items = array();

    // Verify stock and calculate totals
    foreach ($items as $item) {
        $prod_id = (int) ($item['id'] ?? 0);
        $qty     = (int) ($item['qty'] ?? 1);

        if ($qty <= 0) continue;

        $product = $wpdb->get_row($wpdb->prepare("SELECT * FROM $table_products WHERE id = %d AND is_active = 1", $prod_id), ARRAY_A);
        if (!$product) {
            wp_send_json_error(array('message' => 'Dish not found or no longer available on menu.'));
        }

        if ($product['current_stock'] < $qty) {
            wp_send_json_error(array(
                'message' => sprintf(
                    'Insufficient stock for %s. Available portions: %d, Requested: %d.',
                    $product['name'],
                    $product['current_stock'],
                    $qty
                )
            ));
        }

        $line_price = (float) $product['price'];
        $line_total = $line_price * $qty;
        $total_amount += $line_total;
        $total_items  += $qty;

        $processed_items[] = array(
            'id'       => $product['id'],
            'name'     => $product['name'],
            'category' => $product['category'],
            'price'    => $line_price,
            'qty'      => $qty,
            'total'    => $line_total,
        );
    }

    if (empty($processed_items)) {
        wp_send_json_error(array('message' => 'No valid items in order.'));
    }

    // Deduct stock
    foreach ($processed_items as $p) {
        $wpdb->query(
            $wpdb->prepare(
                "UPDATE $table_products 
                 SET current_stock = current_stock - %d, 
                     total_sold = total_sold + %d 
                 WHERE id = %d",
                $p['qty'],
                $p['qty'],
                $p['id']
            )
        );
    }

    // Generate Kitchen Receipt Code
    $receipt_no = 'KC-KITCHEN-' . date('ymd') . '-' . strtoupper(wp_generate_password(4, false));

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
        ),
        array('%s', '%s', '%d', '%f', '%s', '%s', '%s', '%s', '%s', '%s', '%s')
    );

    if ($insert === false) {
        wp_send_json_error(array('message' => 'Failed to record kitchen order in database.'));
    }

    wp_send_json_success(array(
        'receipt_no'     => $receipt_no,
        'total_amount'   => $total_amount,
        'total_items'    => $total_items,
        'payment_method' => $payment_method,
        'items'          => $processed_items,
        'staff_name'     => $staff_name,
        'customer_name'  => $customer_name,
        'table_number'   => $table_number,
        'room_number'    => $room_number,
        'date'           => current_time('mysql'),
    ));
}
add_action('wp_ajax_kc_kitchen_create_order', 'kc_kitchen_ajax_create_order');
add_action('wp_ajax_nopriv_kc_kitchen_create_order', 'kc_kitchen_ajax_create_order');

/**
 * AJAX: Update Stock / Restock / Spoilage
 */
function kc_kitchen_ajax_update_stock() {
    $role = kc_kitchen_get_current_role();
    if (!$role) {
        wp_send_json_error(array('message' => 'Unauthorized.'), 401);
    }

    global $wpdb;
    $table = $wpdb->prefix . 'kc_kitchen_products';

    $prod_id  = (int) ($_POST['product_id'] ?? 0);
    $action   = sanitize_text_field($_POST['action_type'] ?? 'restock'); // 'restock', 'spoilage', 'set_exact'
    $qty      = (int) ($_POST['qty'] ?? 0);

    // Only Admin can directly edit exact stock or remove stock
    if (($action === 'set_exact' || $action === 'remove_stock') && $role !== 'admin') {
        wp_send_json_error(array(
            'message' => 'Permission Denied: Only Admin can directly edit or remove stock levels. Kitchen staff can only add new stock (Market Purchase) or log spoilage. Enter Admin Password.',
            'require_admin' => true
        ), 403);
    }

    $product = $wpdb->get_row($wpdb->prepare("SELECT * FROM $table WHERE id = %d", $prod_id), ARRAY_A);
    if (!$product) {
        wp_send_json_error(array('message' => 'Food item not found.'));
    }

    if ($action === 'restock') {
        if ($qty <= 0) {
            wp_send_json_error(array('message' => 'Quantity to restock must be greater than zero.'));
        }
        $wpdb->query(
            $wpdb->prepare(
                "UPDATE $table 
                 SET new_stock = new_stock + %d, 
                     current_stock = current_stock + %d 
                 WHERE id = %d",
                $qty,
                $qty,
                $prod_id
            )
        );
        $message = sprintf('Added %d portions to %s stock.', $qty, $product['name']);
    } elseif ($action === 'spoilage' || $action === 'breakage') {
        if ($qty <= 0) {
            wp_send_json_error(array('message' => 'Quantity must be greater than zero.'));
        }
        if ($product['current_stock'] < $qty) {
            wp_send_json_error(array('message' => 'Spoilage quantity cannot exceed current available stock.'));
        }
        $wpdb->query(
            $wpdb->prepare(
                "UPDATE $table 
                 SET breakage = breakage + %d, 
                     current_stock = current_stock - %d 
                 WHERE id = %d",
                $qty,
                $qty,
                $prod_id
            )
        );
        $message = sprintf('Logged %d spoiled / wasted portions for %s.', $qty, $product['name']);
    } elseif ($action === 'set_exact') {
        if ($qty < 0) {
            wp_send_json_error(array('message' => 'Stock cannot be negative.'));
        }
        $wpdb->update(
            $table,
            array('current_stock' => $qty, 'opening_stock' => $qty, 'new_stock' => 0, 'breakage' => 0),
            array('id' => $prod_id),
            array('%d', '%d', '%d', '%d'),
            array('%d')
        );
        $message = sprintf('Updated exact stock for %s to %d.', $product['name'], $qty);
    } else {
        wp_send_json_error(array('message' => 'Invalid action type.'));
    }

    $updated = $wpdb->get_row($wpdb->prepare("SELECT * FROM $table WHERE id = %d", $prod_id), ARRAY_A);
    wp_send_json_success(array('message' => $message, 'product' => $updated));
}
add_action('wp_ajax_kc_kitchen_update_stock', 'kc_kitchen_ajax_update_stock');
add_action('wp_ajax_nopriv_kc_kitchen_update_stock', 'kc_kitchen_ajax_update_stock');

/**
 * AJAX: Admin Edit Product Details
 */
function kc_kitchen_ajax_admin_edit_product() {
    if (!kc_kitchen_verify_admin_session()) {
        wp_send_json_error(array('message' => 'Admin authorization required (PIN: 1122).'), 403);
    }

    global $wpdb;
    $table = $wpdb->prefix . 'kc_kitchen_products';

    $prod_id  = (int) ($_POST['product_id'] ?? 0);
    $name     = sanitize_text_field($_POST['name'] ?? '');
    $category = sanitize_text_field($_POST['category'] ?? '');
    $price    = (float) ($_POST['price'] ?? 0);
    $stock    = (int) ($_POST['current_stock'] ?? 0);

    if (empty($name) || $price <= 0) {
        wp_send_json_error(array('message' => 'Valid dish name and price are required.'));
    }

    $wpdb->update(
        $table,
        array(
            'name'          => $name,
            'category'      => $category,
            'price'         => $price,
            'current_stock' => $stock,
        ),
        array('id' => $prod_id),
        array('%s', '%s', '%f', '%d'),
        array('%d')
    );

    wp_send_json_success(array('message' => sprintf('Updated %s successfully.', $name)));
}
add_action('wp_ajax_kc_kitchen_admin_edit_product', 'kc_kitchen_ajax_admin_edit_product');
add_action('wp_ajax_nopriv_kc_kitchen_admin_edit_product', 'kc_kitchen_ajax_admin_edit_product');

/**
 * AJAX: Add New Menu Item
 */
function kc_kitchen_ajax_add_product() {
    if (!kc_kitchen_verify_admin_session()) {
        wp_send_json_error(array('message' => 'Admin authorization required to add new menu items.'), 403);
    }

    global $wpdb;
    $table = $wpdb->prefix . 'kc_kitchen_products';

    $name          = sanitize_text_field($_POST['name'] ?? '');
    $category      = sanitize_text_field($_POST['category'] ?? 'grills');
    $price         = (float) ($_POST['price'] ?? 0);
    $opening_stock = (int) ($_POST['opening_stock'] ?? 10);

    if (empty($name) || $price <= 0) {
        wp_send_json_error(array('message' => 'Please enter a valid dish name and price.'));
    }

    $insert = $wpdb->insert(
        $table,
        array(
            'name'          => $name,
            'category'      => $category,
            'price'         => $price,
            'opening_stock' => $opening_stock,
            'new_stock'     => 0,
            'current_stock' => $opening_stock,
            'total_sold'    => 0,
            'breakage'      => 0,
            'is_active'     => 1,
        ),
        array('%s', '%s', '%f', '%d', '%d', '%d', '%d', '%d', '%d')
    );

    if ($insert === false) {
        wp_send_json_error(array('message' => 'Failed to add dish to database.'));
    }

    wp_send_json_success(array('message' => sprintf('%s added to Kitchen Menu!', $name)));
}
add_action('wp_ajax_kc_kitchen_add_product', 'kc_kitchen_ajax_add_product');
add_action('wp_ajax_nopriv_kc_kitchen_add_product', 'kc_kitchen_ajax_add_product');

/**
 * AJAX: Delete / Deactivate Menu Item
 */
function kc_kitchen_ajax_delete_product() {
    if (!kc_kitchen_verify_admin_session()) {
        wp_send_json_error(array('message' => 'Admin authorization required.'), 403);
    }

    global $wpdb;
    $table   = $wpdb->prefix . 'kc_kitchen_products';
    $prod_id = (int) ($_POST['product_id'] ?? 0);

    $wpdb->update($table, array('is_active' => 0), array('id' => $prod_id), array('%d'), array('%d'));
    wp_send_json_success(array('message' => 'Menu item removed.'));
}
add_action('wp_ajax_kc_kitchen_delete_product', 'kc_kitchen_ajax_delete_product');
add_action('wp_ajax_nopriv_kc_kitchen_delete_product', 'kc_kitchen_ajax_delete_product');

/**
 * AJAX: Daily Reconciliation Sheet
 */
function kc_kitchen_ajax_get_daily_sheet() {
    if (!kc_kitchen_verify_staff_session()) {
        wp_send_json_error(array('message' => 'Unauthorized.'), 401);
    }

    global $wpdb;
    $table_products = $wpdb->prefix . 'kc_kitchen_products';

    $products = $wpdb->get_results(
        "SELECT id, name, category, price, opening_stock, new_stock, current_stock, total_sold, breakage 
         FROM $table_products 
         WHERE is_active = 1 
         ORDER BY category ASC, name ASC",
        ARRAY_A
    );

    $ledger_rows = array();
    $grand_total_amount = 0;
    $total_dishes_sold = 0;

    foreach ($products as $p) {
        $os     = (int) $p['opening_stock'];
        $ns     = (int) $p['new_stock'];
        $total  = $os + $ns;
        $sold   = (int) $p['total_sold'];
        $waste  = (int) $p['breakage'];
        $cs     = (int) $p['current_stock'];
        $price  = (float) $p['price'];
        $amount = $sold * $price;

        $grand_total_amount += $amount;
        $total_dishes_sold  += $sold;

        $ledger_rows[] = array(
            'id'            => $p['id'],
            'name'          => $p['name'],
            'category'      => $p['category'],
            'price'         => $price,
            'opening_stock' => $os,
            'new_stock'     => $ns,
            'total_stock'   => $total,
            'qty_sold'      => $sold,
            'breakage'      => $waste,
            'closing_stock' => $cs,
            'amount'        => $amount,
        );
    }

    wp_send_json_success(array(
        'date'               => current_time('Y-m-d'),
        'items'              => $ledger_rows,
        'grand_total_amount' => $grand_total_amount,
        'total_dishes_sold'  => $total_dishes_sold,
    ));
}
add_action('wp_ajax_kc_kitchen_get_daily_sheet', 'kc_kitchen_ajax_get_daily_sheet');
add_action('wp_ajax_nopriv_kc_kitchen_get_daily_sheet', 'kc_kitchen_ajax_get_daily_sheet');

/**
 * AJAX: Active Shift & Close Shift
 */
function kc_kitchen_ajax_get_active_shift() {
    if (!kc_kitchen_verify_staff_session()) {
        wp_send_json_error(array('message' => 'Unauthorized.'), 401);
    }
    wp_send_json_success(kc_kitchen_get_active_shift_summary());
}
add_action('wp_ajax_kc_kitchen_get_active_shift', 'kc_kitchen_ajax_get_active_shift');
add_action('wp_ajax_nopriv_kc_kitchen_get_active_shift', 'kc_kitchen_ajax_get_active_shift');

function kc_kitchen_ajax_close_shift() {
    if (!kc_kitchen_verify_staff_session()) {
        wp_send_json_error(array('message' => 'Unauthorized or session expired.'), 401);
    }

    global $wpdb;
    $table_products = $wpdb->prefix . 'kc_kitchen_products';
    $table_shifts   = $wpdb->prefix . 'kc_kitchen_shifts';
    $table_logs     = $wpdb->prefix . 'kc_kitchen_daily_logs';

    $outgoing_staff = sanitize_text_field($_POST['outgoing_staff'] ?? '');
    $incoming_staff = sanitize_text_field($_POST['incoming_staff'] ?? '');
    $notes          = sanitize_textarea_field($_POST['notes'] ?? '');

    if (empty($incoming_staff)) {
        wp_send_json_error(array('message' => 'Please provide the name of the incoming chef taking over the next shift.'));
    }

    $active_shift = kc_kitchen_get_or_create_active_shift($outgoing_staff);
    $shift_summary = kc_kitchen_get_active_shift_summary();

    // Snapshot of current stock
    $products = $wpdb->get_results("SELECT id, name, current_stock FROM $table_products WHERE is_active = 1", ARRAY_A);
    $stock_snapshot = array();
    foreach ($products as $p) {
        $stock_snapshot[$p['name']] = (int) $p['current_stock'];
    }

    // Close active shift
    $wpdb->update(
        $table_shifts,
        array(
            'incoming_staff'      => $incoming_staff,
            'end_time'            => current_time('mysql'),
            'total_orders'        => $shift_summary['total_orders'],
            'total_sales'         => $shift_summary['total_sales'],
            'pos_sales'           => $shift_summary['pos_sales'],
            'cash_sales'          => $shift_summary['cash_sales'],
            'transfer_sales'      => $shift_summary['transfer_sales'],
            'room_sales'          => $shift_summary['room_sales'],
            'total_bottles_sold'  => $shift_summary['total_dishes_sold'],
            'drinks_sold_json'    => wp_json_encode($shift_summary['dishes_breakdown']),
            'stock_handover_json' => wp_json_encode($stock_snapshot),
            'notes'               => $notes,
            'status'              => 'closed',
        ),
        array('id' => $active_shift['id']),
        array('%s', '%s', '%d', '%f', '%f', '%f', '%f', '%f', '%d', '%s', '%s', '%s', '%s'),
        array('%d')
    );

    // Create new active shift for incoming staff
    $new_shift = kc_kitchen_get_or_create_active_shift($incoming_staff);

    wp_send_json_success(array(
        'message'        => sprintf('Shift %s closed successfully. Handed over to Chef %s.', $active_shift['shift_code'], $incoming_staff),
        'closed_shift'   => $shift_summary,
        'new_shift_code' => $new_shift['shift_code'],
    ));
}
add_action('wp_ajax_kc_kitchen_close_shift', 'kc_kitchen_ajax_close_shift');
add_action('wp_ajax_nopriv_kc_kitchen_close_shift', 'kc_kitchen_ajax_close_shift');

function kc_kitchen_ajax_get_shift_history() {
    if (!kc_kitchen_verify_staff_session()) {
        wp_send_json_error(array('message' => 'Unauthorized.'), 401);
    }
    global $wpdb;
    $table = $wpdb->prefix . 'kc_kitchen_shifts';
    $shifts = $wpdb->get_results("SELECT * FROM $table ORDER BY id DESC LIMIT 30", ARRAY_A);
    wp_send_json_success($shifts);
}
add_action('wp_ajax_kc_kitchen_get_shift_history', 'kc_kitchen_ajax_get_shift_history');
add_action('wp_ajax_nopriv_kc_kitchen_get_shift_history', 'kc_kitchen_ajax_get_shift_history');

/**
 * AJAX: Reset Daily Sheet (Admin Only)
 */
function kc_kitchen_ajax_reset_day() {
    if (!kc_kitchen_verify_admin_session()) {
        wp_send_json_error(array('message' => 'Admin authorization required to reset daily ledger.'), 403);
    }

    global $wpdb;
    $table_products = $wpdb->prefix . 'kc_kitchen_products';
    $table_logs     = $wpdb->prefix . 'kc_kitchen_daily_logs';

    $today = current_time('Y-m-d');
    $products = $wpdb->get_results("SELECT * FROM $table_products WHERE is_active = 1", ARRAY_A);

    // Save snapshot to daily logs
    foreach ($products as $p) {
        $total  = (int) $p['opening_stock'] + (int) $p['new_stock'];
        $sold   = (int) $p['total_sold'];
        $waste  = (int) $p['breakage'];
        $cs     = (int) $p['current_stock'];
        $price  = (float) $p['price'];
        $amount = $sold * $price;

        $wpdb->insert(
            $table_logs,
            array(
                'log_date'      => $today,
                'product_id'    => $p['id'],
                'product_name'  => $p['name'],
                'category'      => $p['category'],
                'price'         => $price,
                'opening_stock' => (int) $p['opening_stock'],
                'new_stock'     => (int) $p['new_stock'],
                'total_stock'   => $total,
                'qty_sold'      => $sold,
                'breakage'      => $waste,
                'closing_stock' => $cs,
                'amount'        => $amount,
                'staff_name'    => 'Kitchen Chef',
            ),
            array('%s', '%d', '%s', '%s', '%f', '%d', '%d', '%d', '%d', '%d', '%d', '%f', '%s')
        );

        // Rollover closing stock to new opening stock
        $wpdb->update(
            $table_products,
            array(
                'opening_stock' => $cs,
                'new_stock'     => 0,
                'total_sold'    => 0,
                'breakage'      => 0,
            ),
            array('id' => $p['id']),
            array('%d', '%d', '%d', '%d'),
            array('%d')
        );
    }

    wp_send_json_success(array('message' => 'Daily kitchen ledger archived. Opening stock rolled over for the new day.'));
}
add_action('wp_ajax_kc_kitchen_reset_day', 'kc_kitchen_ajax_reset_day');
add_action('wp_ajax_nopriv_kc_kitchen_reset_day', 'kc_kitchen_ajax_reset_day');

/**
 * AJAX: Monthly Report
 */
function kc_kitchen_ajax_get_monthly_report() {
    if (!kc_kitchen_verify_admin_session()) {
        wp_send_json_error(array('message' => 'Admin authorization required.'), 403);
    }

    global $wpdb;
    $table_orders = $wpdb->prefix . 'kc_kitchen_orders';

    $month = sanitize_text_field($_POST['month'] ?? current_time('Y-m'));

    $orders = $wpdb->get_results(
        $wpdb->prepare(
            "SELECT * FROM $table_orders 
             WHERE DATE_FORMAT(created_at, '%%Y-%%m') = %s AND status = 'completed' 
             ORDER BY id DESC",
            $month
        ),
        ARRAY_A
    );

    $total_revenue = 0;
    $total_orders  = count($orders);
    $payment_totals = array('pos' => 0, 'cash' => 0, 'transfer' => 0, 'room' => 0);
    $category_totals = array();
    $dish_quantities = array();

    foreach ($orders as $o) {
        $amount = (float) $o['total_amount'];
        $total_revenue += $amount;
        $pm = $o['payment_method'];
        $payment_totals[$pm] = ($payment_totals[$pm] ?? 0) + $amount;

        $items = json_decode($o['items_json'], true) ?: array();
        foreach ($items as $it) {
            $cat = $it['category'] ?? 'grills';
            $cat_amount = (float) ($it['total'] ?? 0);
            $category_totals[$cat] = ($category_totals[$cat] ?? 0) + $cat_amount;

            $dName = $it['name'] ?? 'Dish';
            $dish_quantities[$dName] = ($dish_quantities[$dName] ?? 0) + (int) ($it['qty'] ?? 1);
        }
    }

    wp_send_json_success(array(
        'month'           => $month,
        'total_revenue'   => $total_revenue,
        'total_orders'    => $total_orders,
        'payment_totals'  => $payment_totals,
        'category_totals' => $category_totals,
        'dish_quantities' => $dish_quantities,
        'orders'          => array_slice($orders, 0, 100),
    ));
}
add_action('wp_ajax_kc_kitchen_get_monthly_report', 'kc_kitchen_ajax_get_monthly_report');
add_action('wp_ajax_nopriv_kc_kitchen_get_monthly_report', 'kc_kitchen_ajax_get_monthly_report');
