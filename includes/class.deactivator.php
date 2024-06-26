<?php

class WPCCRM_Copper_Crm_Deactivator
{
    public static function deactivate() {
		global $wpdb;
		require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
		
		$copper_crm_report_table_name 			= $wpdb->prefix . 'copper_crm_report';
		$copper_crm_field_mapping_table_name 	= $wpdb->prefix . 'copper_crm_field_mapping';

		delete_option('wpccrm_copper_crm_settings');
		delete_option('wpccrm_copper_crm');
		delete_option('wpccrm_copper_crm_modules_fields');
	}
}
?>