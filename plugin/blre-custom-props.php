<?php

/**
 *
 * @link              frankluongo.com
 * @since             1.2.0
 * @package           Blre_Custom_Props
 *
 * @wordpress-plugin
 * Plugin Name:       Brotherly Love Real Estate
 * Plugin URI:        brotherlyloveproperties.com
 * Description:       This plugin add all custom functionality used on brotherlyloveproperties.com
 * Version:           1.0.0
 * Author:            Frank Luongo
 * Author URI:        frankluongo.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       blre-custom-props
 * Domain Path:       /languages
 */

if ( ! defined( 'WPINC' ) ) {
	die;
}
define( 'BLRE_CUSTOM_PROPS_VERSION', '1.0.0' );

function activate_blre_custom_props() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-blre-custom-props-activator.php';
	Blre_Custom_Props_Activator::activate();
}
function deactivate_blre_custom_props() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-blre-custom-props-deactivator.php';
	Blre_Custom_Props_Deactivator::deactivate();
}
register_activation_hook( __FILE__, 'activate_blre_custom_props' );
register_deactivation_hook( __FILE__, 'deactivate_blre_custom_props' );
require plugin_dir_path( __FILE__ ) . 'includes/class-blre-custom-props.php';

function run_blre_custom_props() {
	$plugin = new Blre_Custom_Props();
  $plugin->run();
  require plugin_dir_path( __FILE__ ) . 'templates/class-blre-custom-props-templates.php';
  require plugin_dir_path( __FILE__ ) . 'post-types/all.php';
  require plugin_dir_path( __FILE__ ) . 'custom-fields/all.php';
  flush_rewrite_rules();
}
run_blre_custom_props();
