<?php

/*
  Plugin Name: WP AC remove yoast Google Analytics with cookie
  Plugin URI: https://github.com/ambercouch/wp_save
  Description:
  Version: 0.1
  Author: Richie Ambercouch
  Author URI: http://ambercouch.co.uk
 */


if ( ! defined( 'WPACYGA_PLUGIN_DIR' ) ) {
    define('WPACYGA_PLUGIN_DIR', untrailingslashit(dirname(__FILE__)));
}

include WPACYGA_PLUGIN_DIR . '/vendor/filters-extras.php';

include WPACYGA_PLUGIN_DIR . '/frontend/set-cookie.php';

include WPACYGA_PLUGIN_DIR . '/frontend/remove-action.php';
