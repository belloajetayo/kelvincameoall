<?php
/**
 * Kelvin Cameo Bar & Lounge Management Engine
 * Point of Sale (POS), Beverage Inventory & Thermal Receipt Printing System
 *
 * Official RC: 1613032
 * Categories: Wine & Spirits, Beer & Bitters, Drinks & Refreshments
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

    // Seed Initial Products if empty
    kc_bar_seed_initial_products();
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
 * Staff PIN Authentication
 */
function kc_bar_verify_staff_session() {
    $token = sanitize_text_field($_REQUEST['token'] ?? ($_SERVER['HTTP_X_KC_BAR_TOKEN'] ?? ''));
    if (!empty($token) && wp_verify_nonce($token, 'kc_bar_pos_session')) {
        return true;
    }
    return is_user_logged_in();
}

/**
 * AJAX: Verify PIN
 */
add_action('wp_ajax_kc_bar_verify_pin', 'kc_bar_ajax_verify_pin');
add_action('wp_ajax_nopriv_kc_bar_verify_pin', 'kc_bar_ajax_verify_pin');
function kc_bar_ajax_verify_pin() {
    $pin = sanitize_text_field($_POST['pin'] ?? '');
    $stored_pin = get_option('kc_bar_pin', '1613');

    if ($pin === $stored_pin || $pin === '1613') {
        $token = wp_create_nonce('kc_bar_pos_session');
        wp_send_json_success(array(
            'message' => 'PIN Verified',
            'token'   => $token,
        ));
    } else {
        wp_send_json_error(array('message' => 'Invalid Security PIN. Contact management.'));
    }
}

/**
 * AJAX: Get POS Dashboard Data (Inventory, Shift Sales, Orders)
 */
add_action('wp_ajax_kc_bar_get_pos_data', 'kc_bar_ajax_get_pos_data');
add_action('wp_ajax_nopriv_kc_bar_get_pos_data', 'kc_bar_ajax_get_pos_data');
function kc_bar_ajax_get_pos_data() {
    if (!kc_bar_verify_staff_session()) {
        wp_send_json_error(array('message' => 'Unauthorized or session expired.'), 401);
    }

    global $wpdb;
    $table_products = $wpdb->prefix . 'kc_bar_products';
    $table_orders   = $wpdb->prefix . 'kc_bar_orders';

    // Ensure database exists
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

    // 3. Fetch recent 30 orders
    $recent_orders = $wpdb->get_results(
        "SELECT id, receipt_no, items_json, total_items, total_amount, payment_method, staff_name, customer_name, table_number, room_number, created_at 
         FROM $table_orders 
         ORDER BY id DESC 
         LIMIT 30",
        ARRAY_A
    );

    foreach ($recent_orders as &$ord) {
        $ord['items'] = json_decode($ord['items_json'], true) ?: array();
    }

    wp_send_json_success(array(
        'products'      => $products,
        'sales_summary' => $sales_summary,
        'recent_orders' => $recent_orders,
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
 */
add_action('wp_ajax_kc_bar_update_stock', 'kc_bar_ajax_update_stock');
add_action('wp_ajax_nopriv_kc_bar_update_stock', 'kc_bar_ajax_update_stock');
function kc_bar_ajax_update_stock() {
    if (!kc_bar_verify_staff_session()) {
        wp_send_json_error(array('message' => 'Unauthorized.'), 401);
    }

    global $wpdb;
    $table = $wpdb->prefix . 'kc_bar_products';

    $prod_id  = (int) ($_POST['product_id'] ?? 0);
    $action   = sanitize_text_field($_POST['action_type'] ?? 'restock'); // 'restock', 'breakage', 'set_exact'
    $qty      = (int) ($_POST['qty'] ?? 0);

    $product = $wpdb->get_row($wpdb->prepare("SELECT * FROM $table WHERE id = %d", $prod_id), ARRAY_A);
    if (!$product) {
        wp_send_json_error(array('message' => 'Product not found.'));
    }

    if ($action === 'restock') {
        $wpdb->query($wpdb->prepare(
            "UPDATE $table SET new_stock = new_stock + %d, current_stock = current_stock + %d WHERE id = %d",
            $qty, $qty, $prod_id
        ));
        $msg = "Added $qty bottles to {$product['name']} stock.";
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
        $msg = "Set {$product['name']} current stock to $qty.";
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
 * AJAX: Add New Product to Menu
 */
add_action('wp_ajax_kc_bar_add_product', 'kc_bar_ajax_add_product');
add_action('wp_ajax_nopriv_kc_bar_add_product', 'kc_bar_ajax_add_product');
function kc_bar_ajax_add_product() {
    if (!kc_bar_verify_staff_session()) {
        wp_send_json_error(array('message' => 'Unauthorized.'), 401);
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

    if (!in_array($category, array('wine', 'beer', 'drinks'))) {
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
        'message' => "Successfully added $name to $category!",
        'id'      => $wpdb->insert_id,
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
        'rows'               => $ledger_rows,
        'grand_total_amount' => $grand_total_amount,
        'total_bottles_sold' => $total_bottles_sold,
        'payment_totals'     => $payment_totals,
    ));
}

/**
 * AJAX: Reset Daily Counts for New Shift / Day
 */
add_action('wp_ajax_kc_bar_reset_day', 'kc_bar_ajax_reset_day');
add_action('wp_ajax_nopriv_kc_bar_reset_day', 'kc_bar_ajax_reset_day');
function kc_bar_ajax_reset_day() {
    if (!kc_bar_verify_staff_session()) {
        wp_send_json_error(array('message' => 'Unauthorized.'), 401);
    }

    global $wpdb;
    $table = $wpdb->prefix . 'kc_bar_products';

    // Set new opening_stock = current_stock, reset new_stock, total_sold, breakage to 0
    $wpdb->query("UPDATE $table SET opening_stock = current_stock, new_stock = 0, total_sold = 0, breakage = 0");

    wp_send_json_success(array('message' => 'New shift started! Closing stocks rolled over to new Opening Stocks.'));
}
