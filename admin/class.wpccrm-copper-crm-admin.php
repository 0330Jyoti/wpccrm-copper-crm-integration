<?php
class WPCCRM_COPPER_CRM_Admin {

    public function __construct() {
        $this->load();
        $this->menu();
    }

    private function load() {
        require_once WPCCRM_PLUGIN_PATH . 'admin/class.settings.php';
        require_once WPCCRM_PLUGIN_PATH . 'admin/class.fields-mappings.php';
        require_once WPCCRM_PLUGIN_PATH . 'admin/class.synchronization.php';
        require_once WPCCRM_PLUGIN_PATH . 'admin/class.customers-list.php';
        require_once WPCCRM_PLUGIN_PATH . 'admin/class.orders-list.php';
        require_once WPCCRM_PLUGIN_PATH . 'admin/class.products-list.php';
    }

    private function menu() {
        add_action( 'admin_enqueue_scripts', array($this, 'wpccrm_copper_crm_scripts_callback') );
        add_action( 'wp_ajax_wp_field', array($this, 'wpccrm_copper_crm_wp_field_callback') );
        add_action( 'wp_ajax_insightly_field', array($this, 'wpccrm_copper_crm_field_callback') );
        add_action( 'admin_menu', array($this, 'wpccrm_copper_crm_main_menu_callback') );
    }

    public function wpccrm_copper_crm_scripts_callback(  $hook ) {
        
        $hook_array = array(
                            'toplevel_page_wpccrm-copper-crm-integration',
                            'copper-crm_page_wpccrm-copper-crm-mappings'
                        );
        if (  ! in_array($hook, $hook_array)  ) {
            return;
        }

        // Register the script

        wp_register_script( 
                    'jquery-dataTables-min-js', 
                    WPCCRM_PLUGIN_URL . 'admin/js/jquery.dataTables.min.js', 
                    array(), 
                    time() 
                );

        wp_register_script( 
                    'wpccrm-copper-crm-js', 
                    WPCCRM_PLUGIN_URL . 'admin/js/wpccrm-copper-crm.js', 
                    array(), 
                    time() 
                );

        wp_register_style( 
                    'jquery-dataTables-min-css', 
                    WPCCRM_PLUGIN_URL . 'admin/css/jquery.dataTables.min.css', 
                    array(), 
                    time() 
                );

        wp_register_style( 
                    'wpccrm-copper-crm-style', 
                    WPCCRM_PLUGIN_URL . 'admin/css/wpccrm-copper-crm.css', 
                    array(), 
                    time() 
                );
        

        // Localize the script with new data
        $localize_array = array(
            'ajaxurl'       => admin_url( 'admin-ajax.php' ),
        );

        wp_localize_script( 'wpccrm-copper-crm-js', 'copper_crm_js', $localize_array );
         
        // Enqueued script with localized data.

        wp_enqueue_script( 'jquery-dataTables-min-js' );
        wp_enqueue_script( 'wpccrm-copper-crm-js' );
        
        wp_enqueue_style( 'jquery-dataTables-min-css' );
        wp_enqueue_style( 'wpccrm-copper-crm-style' );
    }

    public function wpccrm_copper_crm_wp_field_callback() {
       ob_start(); 
       $wp_fields = array();

       if( isset( $_REQUEST['wp_module_name'] ) ){

            switch ( $_REQUEST['wp_module_name'] ) {
                case 'customers':
                    $wp_fields = WPCCRM_Copper_Crm::wpccrm_get_customer_fields();
                    break;

                case 'orders':
                    $wp_fields = WPCCRM_Copper_Crm::wpccrm_get_order_fields();
                    break;

                case 'products':
                    $wp_fields = WPCCRM_Copper_Crm::wpccrm_get_product_fields();
                    break;

                default:
                    # code...
                    break;
            }
       }
       
       $wp_fields_options = "<option>".esc_html__('Select WP Fields', 'wpccrm-copper-crm')."</option>";
       
       if($wp_fields){
            foreach ($wp_fields as $option_value => $option_label) {
                $wp_fields_options .=  "<option value='".$option_value."'>".esc_html__($option_label, 'wpccrm-copper-crm')."</option>";
            }
       }
       
       ob_get_clean();
       echo $wp_fields_options;
       wp_die(); 
    }

    public function wpccrm_copper_crm_field_callback() {
       ob_start(); 
       $insightly_fields = array();

       if( isset($_REQUEST['insightly_module_name']) ){
            $insightly_module    = $_REQUEST['insightly_module_name'];
                $insightly_api_obj   = new WPCCRM_Copper_Crm_API();
                $insightly_fields    = $insightly_api_obj->getFieldsMetaData($insightly_module);
       }
       
       $insightly_fields_options = "<option>".esc_html__('Select copper Fields', 'wpccrm-copper-crm')."</option>";
       
       if($insightly_fields){
            foreach ($insightly_fields['fields'] as $insightly_field_key => $insightly_field_data) {
                if($insightly_field_data['field_read_only'] == NULL){

                    $system_mandatory   = ($insightly_field_data['system_mandatory'] == 1) ? " ( Required ) " : "";
                    $data_type          = isset($insightly_field_data['data_type']) ? " ( ".ucfirst($insightly_field_data['data_type'])." ) " : "";

                    echo 
                    $insightly_fields_options .= "<option value='".$insightly_field_data['api_name']."'>". esc_html__($insightly_field_data['display_label'], 'wpccrm-copper-crm') . esc_html($data_type) . esc_html($system_mandatory) . "</option>";
                }
            }
       }
       
       ob_get_clean();
       echo $insightly_fields_options;
       wp_die(); 
    }

    public function wpccrm_copper_crm_main_menu_callback() {
        add_menu_page( 
                        esc_html__('Copper CRM', 'wpccrm-copper-crm'), 
                        esc_html__('Copper CRM', 'wpccrm-copper-crm'), 
                        'manage_options', 
                        'wpccrm-copper-crm-integration', 
                        array($this, 'settings_callback'), 
                        'dashicons-migrate' 
                    );

        add_submenu_page( 
                        'wpccrm-copper-crm-integration', 
                        esc_html__( 'Copper CRM Settings', 'wpccrm-copper-crm' ), 
                        esc_html__( 'Copper Crm', 'wpccrm-copper-crm' ), 
                        'manage_options', 
                        'wpccrm-copper-crm-integration', 
                        array($this, 'settings_callback')
                    );

        add_submenu_page( 
                        'wpccrm-copper-crm-integration', 
                        esc_html__( 'Copper CRM Fields Mappings', 'wpccrm-copper-crm' ), 
                        esc_html__( 'Fields Mappings', 'wpccrm-copper-crm' ), 
                        'manage_options', 
                        'wpccrm-copper-crm-mappings', 
                        array($this, 'wpccrm_mappings_callback')
                    );

        add_submenu_page( 
                        'wpccrm-copper-crm-integration', 
                        esc_html__( 'Copper CRM Synchronization', 'wpccrm-copper-crm' ), 
                        esc_html__( 'Synchronization', 'wpccrm-copper-crm' ), 
                        'manage_options', 
                        'wpccrm-copper-crm-synchronization', 
                        array($this, 'Synchronization_callback')
                    );

        add_submenu_page( 
                        'wpccrm-copper-crm-integration', 
                        NULL, 
                        NULL, 
                        'manage_options', 
                        'wpccrm_copper_crm_process', 
                        array($this, 'insightly_process_callback')
                    );
    }

    public function insightly_process_callback(){
        
        global $wpdb;

        $smart_insightly_obj = new WPCCRM_Copper_Crm();
        $smart_insightly_obj->wpccrm_store_required_field_mapping_data();
        
        wp_redirect(WPCCRM_SETTINGS_URI);
        exit();
    }

    public function settings_callback(){
        $admin_settings_obj = new WPCCRM_Copper_Crm_Admin_Settings();
        $admin_settings_obj->wpccrm_process_settings_form();
        $admin_settings_obj->wpccrm_display_settings_form();
    }

    public function wpccrm_mappings_callback(){
        $field_mapping_obj = new WPCCRM_Copper_Crm_Field_Mappings();
        $field_mapping_obj->wpccrm_process_mappings_form();
        $field_mapping_obj->wpccrm_display_mappings_form(); 
        $field_mapping_obj->wpccrm_display_mappings_field_list();
    }

    public function Synchronization_callback(){
        $admin_synch_obj = new WPCCRM_Copper_Crm_Admin_Synchronization();
        $admin_synch_obj->wpccrm_process_synch();
        $admin_synch_obj->wpccrm_display_synch_data();
    }
}

new WPCCRM_COPPER_CRM_Admin();
?>