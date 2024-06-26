<?php
class WPCCRM_Copper_Crm_Public {
  
    public function __construct() {
        
        $this->loadCustomerAction();
        $this->loadOrderAction();
        $this->loadProductAction();
    }


    private function loadCustomerAction() {
        add_action( 'user_register', array($this, 'addUserToCopper') );
        add_action( 'profile_update', array($this, 'addUserToCopper'), 10, 1 );
        add_action( 'woocommerce_update_customer', array($this, 'addUserToCopper'), 10, 1 );
    }


    private function loadOrderAction() {
        add_action( 'save_post', array( $this, 'addOrderToCopper' ), 10, 1 );
        add_action('woocommerce_thankyou', array( $this, 'addOrderToCopper' ), 10, 1);
    }


    private function loadProductAction() {
        add_action( 'woocommerce_update_product', array( $this, 'addProductToCopper' ), 10, 1 );
    }

    public function addUserToCopper( $user_id ){
        global $wpdb;
        $data       = array();
        $user_info  = get_userdata($user_id);

        $default_wp_module = "customers";

        $wpccrm_copper_crm_settings = get_option( 'wpccrm_copper_crm_settings' );
        $synch_settings         = !empty( $wpccrm_copper_crm_settings['synch'] ) ? $wpccrm_copper_crm_settings['synch'] : array();

        foreach ($synch_settings as $wp_copper_crm_module => $enable) {
            
            $wp_copper_crm_module = explode('_', $wp_copper_crm_module);
            $wp_module      = $wp_copper_crm_module[0];
            $copper_crm_module    = $wp_copper_crm_module[1];

            if($default_wp_module == $wp_module){
                
                $get_copper_crm_field_mapping = $wpdb->get_results( "SELECT * FROM {$wpdb->prefix}copper_crm_field_mapping WHERE wp_module ='".$wp_module."' AND copper_crm_module = '".$copper_crm_module."' AND status='active'");

                foreach ($get_copper_crm_field_mapping as $key => $value) {
                    $wp_field   = $value->wp_field;
                    $copper_crm_field = $value->copper_crm_field;

                    if ( $copper_crm_field ) {
                        if ( isset( $user_info->{$wp_field} ) ) {
                            if ( is_array( $user_info->{$wp_field} ) ) {
                                $user_info->{$wp_field} = implode(';', $user_info->{$wp_field} );
                            }
                            $data[$copper_crm_module][$copper_crm_field] = strip_tags( $user_info->{$wp_field} );
                        }
                    }
                }
            }   
        }

        if( $data != null ){
            $this->prepareAndActionOnData( $user_id, $data, $default_wp_module );
        }
    }


    public function addOrderToCopper( $order_id ){
        global $wpdb, $post_type; 
        $data       = array();
        $test = get_post_type( $order_id );

        if ( get_post_type( $order_id ) !== 'shop_order_placehold' ){
            return;
        }

        $order = wc_get_order( $order_id );
        if ( ! $order ) {
            return;
        }
        
        $default_wp_module = "orders";

        $wpccrm_copper_crm_settings = get_option( 'wpccrm_copper_crm_settings' );
        $synch_settings         = !empty( $wpccrm_copper_crm_settings['synch'] ) ? $wpccrm_copper_crm_settings['synch'] : array();

        foreach ($synch_settings as $wp_copper_crm_module => $enable) {
            
            $wp_copper_crm_module = explode('_', $wp_copper_crm_module);
            $wp_module      = $wp_copper_crm_module[0];
            $copper_crm_module    = $wp_copper_crm_module[1];

            if($default_wp_module == $wp_module){
                
                $get_copper_crm_field_mapping = $wpdb->get_results( "SELECT * FROM {$wpdb->prefix}copper_crm_field_mapping WHERE wp_module ='".$wp_module."' AND copper_crm_module = '".$copper_crm_module."' AND status='active'");

                foreach ($get_copper_crm_field_mapping as $key => $value) {
                    $wp_field   = $value->wp_field;
                    $copper_crm_field = $value->copper_crm_field;

                    if ( $copper_crm_field ) {

                        $order_field_value = $order->{$wp_field}();
                        if ( $order_field_value !== null ) {
                            $data[$copper_crm_module][$copper_crm_field] = strip_tags( $order_field_value );
                        }
                    }
                }
            }   
        }
        
        if( $data != null ){
            $this->prepareAndActionOnData( $order_id, $data, $default_wp_module );
        }
    }


    public function addProductToCopper( $post_id ){
        global $wpdb, $post_type, $data; 
        $data = array();

        if ( get_post_type( $post_id ) !== 'product' ){
            return;
        }
        
        $product = wc_get_product( $post_id );

        $default_wp_module = "products";

        $wpccrm_copper_crm_settings = get_option( 'wpccrm_copper_crm_settings' );
        $synch_settings         = !empty( $wpccrm_copper_crm_settings['synch'] ) ? $wpccrm_copper_crm_settings['synch'] : array();

        foreach ($synch_settings as $wp_copper_crm_module => $enable) {
            
            $wp_copper_crm_module = explode('_', $wp_copper_crm_module);
            $wp_module      = $wp_copper_crm_module[0];
            $copper_crm_module    = $wp_copper_crm_module[1];

            if($default_wp_module == $wp_module){
                
                $get_copper_crm_field_mapping = $wpdb->get_results( "SELECT * FROM {$wpdb->prefix}copper_crm_field_mapping WHERE wp_module ='".$wp_module."' AND copper_crm_module = '".$copper_crm_module."' AND status='active'");

                foreach ($get_copper_crm_field_mapping as $key => $value) {
                    $wp_field   = $value->wp_field;
                    $copper_crm_field = $value->copper_crm_field;

                    if ( $copper_crm_field ) {

                        if ( null !== $product->{$wp_field}() ) {
                            if(is_array($product->{$wp_field}())){
                                $data[$copper_crm_module][$copper_crm_field] = implode(',', $product->{$wp_field}());
                            }else{
                                $data[$copper_crm_module][$copper_crm_field] = strip_tags( $product->{$wp_field}() );    
                            }
                        }
                    }
                }
            }   
        }

        if($data != null ){
            $this->prepareAndActionOnData( $post_id, $data, $default_wp_module );
        }
    }


    public function prepareAndActionOnData($id, $data = array(), $default_wp_module = NULL){
        
        if( $default_wp_module == 'orders' ||  $default_wp_module == 'products' ){
            $copper_crm_relation = get_post_meta( $id, 'copper_crm_relation', true );
        }else{
            $copper_crm_relation = get_user_meta( $id, 'copper_crm_relation', true );    
        }
        

        if ( ! is_array( $copper_crm_relation ) ) {
            $copper_crm_relation = array();
        }

        $copper_crm_api_obj   = new WPCCRM_Copper_Crm_API();
        
        foreach ($data as $copper_crm_module => $copper_crm_data) {
            
            $record_id = ( isset( $copper_crm_relation[$copper_crm_module] ) ? $copper_crm_relation[$copper_crm_module] : 0 );

            if ( $record_id ) {
                $response = $copper_crm_api_obj->updateRecord($copper_crm_module, $copper_crm_data, $record_id);
            }else{
                $response = $copper_crm_api_obj->addRecord($copper_crm_module, $copper_crm_data);
            }
                        
            if ( isset( $response->data[0]->details->id ) ) {
                $record_id = $response->data[0]->details->id;
                $copper_crm_relation[$copper_crm_module] = $record_id;
            }
        }

        if( $default_wp_module == 'orders' ||  $default_wp_module == 'products' ){
            update_post_meta( $id, 'copper_crm_relation', $copper_crm_relation );
        }else{
            update_user_meta( $id, 'copper_crm_relation', $copper_crm_relation );    
        }
        
    }
}

new WPCCRM_Copper_Crm_Public();
?>