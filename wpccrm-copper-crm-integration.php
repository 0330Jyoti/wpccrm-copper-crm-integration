<?php
/**
 * Plugin Name:       WPCCRM Copper CRM Integration
 * Plugin URI:        https://profiles.wordpress.org/iqbal1486/
 * Description:       WP Copper Crm help you to manage and synch possible WordPress data like customers, orders, products to the Copper modules as per your settings/mapping options.
 * Version:           1.0.0
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            Geekerhub
 * Author URI:        https://profiles.wordpress.org/iqbal1486/
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       wpccrm-copper-crm-integration
 * Domain Path:       /languages
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit( 'restricted access' );
}

define( 'WPCCRM_VERSION', '1.0.0' );

if (! defined('WPCCRM_ADMIN_URL') ) {
    define('WPCCRM_ADMIN_URL', get_admin_url());
}

if (! defined('WPCCRM_PLUGIN_FILE') ) {
    define('WPCCRM_PLUGIN_FILE', __FILE__);
}

if (! defined('WPCCRM_PLUGIN_PATH') ) {
    define('WPCCRM_PLUGIN_PATH', plugin_dir_path(WPCCRM_PLUGIN_FILE));
}

if (! defined('WPCCRM_PLUGIN_URL') ) {
    define('WPCCRM_PLUGIN_URL', plugin_dir_url(WPCCRM_PLUGIN_FILE));
}

if (! defined('WPCCRM_REDIRECT_URI') ) {
    define('WPCCRM_REDIRECT_URI', admin_url( 'admin.php?page=wpccrm_copper_crm_process' ));
}

if (! defined('WPCCRM_SETTINGS_URI') ) {
    define('WPCCRM_SETTINGS_URI', admin_url( 'admin.php?page=wpccrm-copper-crm-integration' ));
}

if (! defined('WPCCRM_COPPER_CRM_APIS_URL') ) {

    define('WPCCRM_COPPER_CRM_APIS_URL', 'https://api.insight.ly');
}

function wpccrm_copper_crm_activate() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class.activator.php';
	$WPCCRM_Copper_Crm_Activator = new WPCCRM_Copper_Crm_Activator();
    $WPCCRM_Copper_Crm_Activator->activate();
}

/**
 * The code that runs during plugin deactivation.
 */
function wpccrm_copper_crm_deactivate() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class.deactivator.php';
    WPCCRM_Copper_Crm_Deactivator::deactivate();
}


/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-wpccrm-copper-crm.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function wpccrm_copper_crm_run() {
    $plugin = new WPCCRM_Copper_Crm();
	$plugin->run();
}

register_activation_hook( __FILE__, 'wpccrm_copper_crm_activate' );
register_deactivation_hook( __FILE__, 'wpccrm_copper_crm_deactivate' );

wpccrm_copper_crm_run();

function wpccrm_copper_crm_textdomain_init() {
    load_plugin_textdomain( 'wpccrm-copper-crm', false, dirname( plugin_basename( __FILE__ ) ) . '/languages/' );
}
add_action('plugins_loaded', 'wpccrm_copper_crm_textdomain_init');
?>