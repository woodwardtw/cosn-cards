<?php 
/*
Plugin Name: COSN Cybersecurity Cards
Plugin URI:  https://github.com/
Description: For stuff that's magical
Version:     1.0
Author:      Tom Woodward
Author URI:  http://altlab.vcu.edu
License:     GPL2
License URI: https://www.gnu.org/licenses/gpl-2.0.html
Domain Path: /languages
Text Domain: my-toolset

*/

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;



// Array of files to include.
$cosn_cards_includes = array(
      '/cards-acf.php',                  // localize json
      '/cards-data.php'                  // add cpt and custom taxonomies 

);

foreach ( $cosn_cards_includes as $file ) {
   require_once plugin_dir_path( __FILE__ ) .'/inc/' . $file;
}