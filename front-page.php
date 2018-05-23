<?php

/**
 * Front page template.
 *
 * @package    MNP Genesis Starter
 * @author     Rachelle Sonnek Soller
 * @link       https://mnpdev.com
 * @copyright  Copywright (c) 2018 Miles North Productions
 * @license    GPL-3.0+
 */

add_action( 'genesis_meta', 'mnpgs_home_page_setup' );
/**
 * Conditionally load active front page widget areas.
 *
 * @since 1.1.0
 */
function mnpgs_home_page_setup(){

$mnpgs_home_sidebars = array(
  'home_welcome'   => is_active_sidebar( 'home-welcome' ),
  'call_to_action' => is_active_sidebar( 'call-to-action' ),
);

// Return if no sidebar widgets are active.
if ( ! in_array( true, $mnpgs_home_sidebars ) ) {
  return;
}

// Add home welcome if "Home Welcome" widget is active.
if ( $mnpgs_home_sidebars[ 'home_welcome' ] ) {
  add_action( 'genesis_after_header', 'mnpgs_home_welcome' );
}

// Add call to action if "Call to Action" widget is active.
if ( $mnpgs_home_sidebars[ 'call_to_action' ] ) {
  add_action( 'genesis_after_header', 'mnpgs_call_to_action' );
}

}

/**
* Display "Home Welcome" section content.
*
* @since 1.1.0
*/
function mnpgs_home_welcome() {
  genesis_widget_area( 'home-welcome', array(
    'before' => '<div class="home-welcome"><div class="wrap">',
    'after'  => '</div></div>',
  ) );
}

/**
 * Display "Call to Action" section content.
 *
 * @since 1.1.0
 */
function mnpgs_call_to_action() {
  genesis_widget_area('call-to-action', array(
    'before' => '<div class="call-to-action"><div class="wrap">',
    'after' => '</div></div>',
  ));
}
genesis();
