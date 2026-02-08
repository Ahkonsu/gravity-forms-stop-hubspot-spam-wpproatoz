<?php
/**
 * Plugin Name:       Gravity Forms Stop HubSpot Spam from WPProAtoZ
 * Plugin URI:        https://wpproatoz.com
 * Description:       Prevents the Gravity Forms HubSpot Add-On from sending spam-marked entries (status = 'spam') to HubSpot. Keeps your CRM clean without extra conditional logic hassle.
 * Version:           1.0.0
 * Requires at least: 6.0
 * Requires PHP:      8.0
 * Author:            WPProAtoZ.com
 * Author URI:        https://wpproatoz.com
 * Text Domain:       gravity-forms-stop-hubspot-spam
 * Update URI:        https://github.com/Ahkonsu/gravity-forms-stop-hubspot-spam-wpproatoz/releases
 * GitHub Plugin URI: https://github.com/Ahkonsu/gravity-forms-stop-hubspot-spam-wpproatoz/releases
 * GitHub Branch:     main
 * Requires Plugins:  gravityforms, gravityformshubspot
 */
////***check for updates code

require 'plugin-update-checker/plugin-update-checker.php';
use YahnisElsts\PluginUpdateChecker\v5\PucFactory;

$myUpdateChecker = PucFactory::buildUpdateChecker(
	'https://github.com/Ahkonsu/gravity-forms-stop-hubspot-spam-wpproatoz/',
	__FILE__,
	'gravity-forms-stop-hubspot-spam-wpproatoz'
);

//Set the branch that contains the stable release.
$myUpdateChecker->setBranch('main');

//$myUpdateChecker->getVcsApi()->enableReleaseAssets();
 
 
//Optional: If you're using a private repository, specify the access token like this:
//$myUpdateChecker->setAuthentication('your-token-here');

/////////////////////

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

// Only run if Gravity Forms and HubSpot Add-On are active
if ( class_exists( 'GFForms' ) && class_exists( 'GF_HubSpot' ) ) {

    add_filter( 'gform_hubspot_should_process_feed', function( $should_process, $feed, $entry, $form ) {
        // Check if the entry is marked as spam
        if ( rgar( $entry, 'status' ) === 'spam' ) {
            return false; // Do NOT process/send to HubSpot
        }
        return $should_process;
    }, 10, 4 );

}