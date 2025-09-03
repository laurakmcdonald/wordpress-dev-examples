<?php
/**
 * Plugin Name: Gutenberg Custom Testimonial Block
 * Description: Example custom Gutenberg block built with vanilla JS.
 * Version: 1.0
 * Author: Laura McDonald
 */

if ( ! defined( 'ABSPATH' ) ) exit;

// Enqueue block editor JS and CSS
function gc_enqueue_block_assets() {
    wp_enqueue_script(
        'gc-testimonial-block',
        plugins_url( 'block.js', __FILE__ ),
        [ 'wp-blocks', 'wp-element', 'wp-editor', 'wp-components', 'wp-i18n' ],
        filemtime( plugin_dir_path( __FILE__ ) . 'block.js' )
    );

    wp_enqueue_style(
        'gc-testimonial-block-style',
        plugins_url( 'style.css', __FILE__ ),
        [],
        filemtime( plugin_dir_path( __FILE__ ) . 'style.css' )
    );
}
add_action( 'enqueue_block_editor_assets', 'gc_enqueue_block_assets' );
add_action( 'enqueue_block_assets', 'gc_enqueue_block_assets' );
