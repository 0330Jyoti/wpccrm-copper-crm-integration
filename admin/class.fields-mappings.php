<?php
class WPCCRM_Copper_Crm_Field_Mappings {

	var $customer_fields;
	
	public function __construct(){
    	$this->wpccrm_delete_mapping_row_from_table();
    }

    public function wpccrm_process_mappings_form($POST = array()){
       	global $wpdb;
       	if(isset($_REQUEST['add_mapping'])){

       		extract($_POST);

       		$record_exists = $wpdb->get_row( 
       			$wpdb->prepare(
       				"SELECT * FROM ".$wpdb->prefix ."copper_crm_field_mapping  WHERE wp_module = %s AND wp_field = %s  AND copper_module = %s AND copper_field = %s" ,
       				$wp_module, $wp_field, $copper_module, $copper_field
       				)
       			
       		);

			if ( null !== $record_exists ) {
				
			  $reccord_id 		= $record_exists->id;
			  $is_predefined 	= $record_exists->is_predefined;
			  

			  	$wpdb->update(
					$wpdb->prefix . 'copper_crm_field_mapping', 
					array( 
					    'wp_module' 	=> sanitize_text_field($wp_module),
					    'wp_field' 		=> sanitize_text_field($wp_field),
					    'copper_module' 	=> sanitize_text_field($copper_module),
					    'copper_field'	=> sanitize_text_field($copper_field), 
					    'status' 		=> sanitize_text_field($status),
					    'description' 	=> sanitize_text_field($description), 
					    'is_predefined' => sanitize_text_field($is_predefined), 
					), 
					array( 'id' => $reccord_id ), 
					array( 
					    '%s', 
					    '%s', 
					    '%s', 
					    '%s', 
					    '%s', 
					    '%s', 
					    '%s'
					),
					array( '%d' )
				);

			}else{

				$wpdb->insert(
					$wpdb->prefix . 'copper_crm_field_mapping', 
					array( 
					    'wp_module' 		=> sanitize_text_field($wp_module),
					    'wp_field' 			=> sanitize_text_field($wp_field),
					    'copper_module' 	=> sanitize_text_field($copper_module),
					    'copper_field'	=> sanitize_text_field($copper_field), 
					    'status' 			=> sanitize_text_field($status),
					    'description' 		=> sanitize_text_field($description), 
					    'is_predefined' 	=> 'no', 
					), 
					array(
					    '%s', 
					    '%s', 
					    '%s', 
					    '%s', 
					    '%s', 
					    '%s', 
					    '%s'
					) 
				);	
			}
       	}
    }

    public function wpccrm_delete_mapping_row_from_table(){
		if( isset( $_REQUEST['action'] ) && isset( $_REQUEST['id'] ) &&  $_REQUEST['action'] == 'trash' ){
			global $wpdb;
	   		$wpdb->delete(
				$wpdb->prefix . 'copper_crm_field_mapping', 
				array( 
				    'id' 	=> sanitize_text_field($_REQUEST['id']),
				), 
				array(
				    '%d'
				)
			);
			wp_redirect(admin_url('admin.php?page=wpccrm-copper-crm-mappings'));
			exit();
		}    	
    }

    public function wpccrm_display_mappings_form(){
        $wp_module 		= isset($_GET['wp_module']) ? sanitize_text_field($_GET['wp_module']) : false;
        $copper_module 	= isset($_GET['copper_module']) ? sanitize_text_field($_GET['copper_module']) : false;

        $copper_crm_obj = new WPCCRM_Copper_Crm();
        // $wp_modules 	= $copper_crm_obj->wpccrm_get_wp_modules();
        // $getListModules = $copper_crm_obj->wpccrm_get_copper_modules();
        
       	require_once WPCCRM_PLUGIN_PATH . 'admin/partials/field-mappings.php';	
    }

    public function wpccrm_display_mappings_field_list(){

       	require_once WPCCRM_PLUGIN_PATH . 'admin/partials/mappings-field-list.php';	
    }
}
?>