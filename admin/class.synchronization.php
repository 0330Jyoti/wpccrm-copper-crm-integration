<?php
class WPCCRM_Copper_Crm_Admin_Synchronization {

    public function wpccrm_process_synch($POST = array()){
       
       	if ( isset( $_POST['submit'] ) ) {

            if(isset($_REQUEST['tab']) && $_REQUEST['tab'] == "general"){
                $api_key                  = sanitize_text_field($_REQUEST['wpccrm_smart_insightly_settings']['api_key']);
                
            }
                        
            $wpccrm_smart_insightly_settings  = !empty(get_option( 'wpccrm_smart_insightly_settings' )) ? get_option( 'wpccrm_smart_insightly_settings' ) : array();

            $wpccrm_smart_insightly_settings = array_merge($wpccrm_smart_insightly_settings, $_REQUEST['wpccrm_smart_insightly_settings']);
            
            update_option( 'wpccrm_smart_insightly_settings', $wpccrm_smart_insightly_settings );
            
        }


        /*Synch product*/
        if( isset( $_POST['smart_synch'] ) && $_POST['smart_synch'] == 'copper' ){

           
            $id = $_POST['id'];

            switch ($_POST['wp_module']) {
                
                case 'products':
                    
                    $WPSII_Smart_Insightly_Public = new WPSII_Smart_Insightly_Public();
                    $WPSII_Smart_Insightly_Public->addProductToInsightly( $id );

                    break;

                case 'orders':
                    
                    $WPSII_Smart_Insightly_Public = new WPSII_Smart_Insightly_Public();
                    $WPSII_Smart_Insightly_Public->addOrderToInsightly( $id );

                    break;

                case 'customers':
                    
                    $WPSII_Smart_Insightly_Public = new WPSII_Smart_Insightly_Public();
                    $WPSII_Smart_Insightly_Public->addUserToInsightly( $id );

                    break;    
                
                default:
                    # code...
                    break;
            }
            
        }
        

    }

    public function wpccrm_display_synch_data(){
        require_once WPCCRM_PLUGIN_PATH . 'admin/partials/synchronization.php';
    }
}
?>