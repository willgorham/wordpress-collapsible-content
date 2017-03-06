<?php
/**
 * Initiate the plugin
 *
 * @package  RitualWeb\CollapsibleContent
 * @since    1.0.0
 * @author   Will Gorham
 * @link     willgorham.com
 * @license  GPL-3.0+
 *
 */
namespace RitualWeb\CollapsibleContent;

if ( ! defined( 'ABSPATH') ) exit;


add_action( 'wp_enqueue_scripts', __NAMESPACE__ . '\enqueue_assets' );

/**
 * Enqueue plugin scripts and styles
 *
 * @since 1.0.0
 *
 * @return void
 */
function enqueue_assets() {
  wp_enqueue_style( 'dashicons' );

  wp_enqueue_script(
    'collapsible-content-script',
    COLLAPSIBLE_CONTENT_URL . 'assets/dist/js/jquery.plugin.min.js',
    array( 'jquery' ),
    '1.0.0',
    true
  );
}

/**
 * Load plugin files
 *
 * @since  1.0.0
 *
 * @return void
 */
function load() {
  $files = array(
    'shortcode/shortcodes.php'
  );

  foreach( $files as $file) {
    include( __DIR__ . '/' . $file );
  }
}


load();
