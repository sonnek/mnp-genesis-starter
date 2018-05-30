<?php

/**
 * Theme customizations.
 *
 * @package    MNP Genesis Starter
 * @author     Rachelle Sonnek Soller
 * @link       https://mnpdev.com
 * @copyright  Copywright (c) 2018 Miles North Productions
 * @license    GPL-3.0+
 */

// Load child theme textdomain.
load_child_theme_textdomain( 'mnp-poc' );

add_action('genesis_setup', 'mnpgs_setup', 15 );
/**
 * Theme setup.
 *
 * Attach site-wide functions to the correct hooks and filters.
 * Functions are defined below this set-up function.
 *
 * @since 1.0.0
 */
function mnpgs_setup() {
  // Define theme constants.
  define( 'CHILD_THEME_NAME', 'MNP Genesis Starter' );
  define( 'CHILD_THEME_URL', 'https://github.com/milesnorth/mnp-genesis-starter' );
  define( 'CHILD_THEME_VERSION', '1.0.0' );

  // Add HTML5 markup structure.
  add_theme_support('html5', array('comment-list', 'comment-form', 'search-form', 'gallery', 'caption'));

  // Add viewport meta tag for mobile browsers.
  add_theme_support('genesis-responsive-viewport');

  // Add accessibility support.
  add_theme_support(
    'genesis-accessibility',
    array(
      '404-page',
      'drop-down-menu',
      'headings',
      'rems',
      'search-form',
      'skip-links',
    )
  );

  // Add footer support.
  add_theme_support( 'genesis-footer-widgets', 3 );

  // Unregister layouts that use secondary sidebar.
  genesis_unregister_layout( 'content-sidebar-sidebar' );
  genesis_unregister_layout( 'sidebar-sidebar-content' );
  genesis_unregister_layout( 'sidebar-content-sidebar' );

  // Unregister secondary sidebar.
  unregister_sidebar( 'sidebar-alt' );
  unregister_sidebar('sidebar-alt');

  // Add theme widget areas.
  include_once( get_stylesheet_directory() . '/functions/widget-areas.php' );
};
