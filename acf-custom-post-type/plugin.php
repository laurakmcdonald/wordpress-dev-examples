<?php
/**
 * Plugin Name: ACF Portfolio CPT
 * Description: Example plugin that registers a Portfolio CPT with ACF fields exposed in REST API.
 * Version: 1.0
 * Author: Laura McDonald
 */

if ( ! defined( 'ABSPATH' ) ) exit;

// Includes
require_once plugin_dir_path(__FILE__) . 'inc/register-cpt.php';
require_once plugin_dir_path(__FILE__) . 'inc/register-fields.php';
require_once plugin_dir_path(__FILE__) . 'inc/rest-endpoints.php';

