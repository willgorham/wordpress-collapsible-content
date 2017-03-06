<?php
/**
 * Register and process shortcodes
 *
 * @package  RitualWeb\CollapsibleContent\Shortcode
 * @since    1.0.0
 * @author   Will Gorham
 * @link     willgorham.com
 * @license  GPL-3.0+
 *
 */

namespace RitualWeb\CollapsibleContent\Shortcode;

/**
 * Regirter the shortcodes to WordPress
 */
add_shortcode( 'qa', __NAMESPACE__ . '\process_shortcode' );
add_shortcode( 'teaser', __NAMESPACE__ . '\process_shortcode' );

/**
 * Process a shortcode and return the HTML content.
 *
 * @since 1.0.0
 *
 * @param array|string $user_defined_attributes User defined attributes for this shortcode instance
 * @param string|null $content Content between the opening and closing shortcode elements
 * @param string $shortcode_name Name of the shortcode
 *
 * @return string
 */
function process_shortcode( $user_defined_attributes, $content, $shortcode_name ) {

  $config = get_shortcode_configuration( $shortcode_name );

  $attributes = shortcode_atts(
    $config['defaults'],
    $user_defined_attributes,
    $shortcode_name
  );

  // do the processing
  $attributes['closed_icon'] = esc_attr( $attributes['closed_icon'] );
  $attributes['opened_icon'] = esc_attr( $attributes['opened_icon'] );
  if ( $content ) {
    $content = do_shortcode( $content );
  }

  // Call the view file, capture it into the output buffer, and then return it.
  ob_start();
  include( $config['view'] );
  return ob_get_clean();
}

/**
 * Get the runtime configuration parameters for the specified shortcode
 *
 * @since  1.0.0
 *
 * @param  string $shortcode_name Name of the shortcode
 *
 * @return array                  Default shortcode attributes
 */
function get_shortcode_configuration( $shortcode_name ) {

  $config = array(
    'view' => __DIR__ . '/views/' . $shortcode_name . '.php',
    'defaults' => array()
  );

  if ( $shortcode_name == 'qa' ) {

    $config['defaults'] = array(
      'question' => '',
      'opened_icon' => 'dashicons dashicons-arrow-up-alt2',
      'closed_icon' => 'dashicons dashicons-arrow-down-alt2',
    );

  } elseif ( $shortcode_name == 'teaser' ) {

    $config['defaults'] = array(
      'visible_message' => '',
      'opened_icon' => 'dashicons dashicons-arrow-up-alt2',
      'closed_icon' => 'dashicons dashicons-arrow-down-alt2',
    );

  }

  return $config;

}
