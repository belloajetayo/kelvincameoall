<?php
/**
 * The template for displaying 404 pages (Not Found)
 * Kelvin Cameo Organization (RC: 1613032)
 *
 * Automatically 301-redirects all 404 errors directly to the homepage.
 *
 * @package Kelvin_Cameo
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

wp_safe_redirect( home_url( '/' ), 301 );
exit;
