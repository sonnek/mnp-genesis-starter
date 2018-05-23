<?php

/**
 * Custom widget areas.
 *
 * @package    MNP Genesis Starter
 * @author     Rachelle Sonnek Soller
 * @link       https://mnpdev.com
 * @copyright  Copywright (c) 2018 Miles North Productions
 * @license    GPL-3.0+
 */


// Register front page widget areas.
genesis_register_sidebar(array(
  'id' => 'home-welcome',
  'name' => __('Home Welcome', 'mnp-gs'),
  'description' => __('This is a home widget area that will show up on the front page.', 'mnp-gs'),
));

genesis_register_sidebar(array(
  'id' => 'call-to-action',
  'name' => __('Call to action', 'mnp-gs'),
  'description' => __('This is a call to action widget area that will show up on the front page.', 'mnp-gs'),
));
