<?php
class WPCCRM_Copper_Crm {

	protected $plugin_name;

	protected $version;

	public function __construct() {
		$this->version = '1.0.0';
		$this->plugin_name = 'wpccrm-copper-crm';
	}

	public function run() {
		/*
			Load all class files
		*/
		require_once WPCCRM_PLUGIN_PATH . 'includes/class-wpccrm-copper-crm-api.php';
        require_once WPCCRM_PLUGIN_PATH . 'admin/class.wpccrm-copper-crm-admin.php';
		require_once WPCCRM_PLUGIN_PATH . 'public/class.wpccrm-copper-crm-public.php';
	}

	public function get_plugin_name() {
		return $this->plugin_name;
	}
	
	public function get_version() {
		return $this->version;
	}

	public function wpsii_get_wp_modules(){
		return array(
                'customers' => esc_html__('Customers','wpccrm-copper-crm'),
                'orders'    => esc_html__('Orders','wpccrm-copper-crm'),
                'products'  => esc_html__('Products','wpccrm-copper-crm'),
            );
	}

	public function wpsii_get_insightly_modules(){

		$insightly_api_obj   = new WPCCRM_Copper_Crm_API();
       
        /*get list modules*/
        $getListModules = $insightly_api_obj->getListModules();
        
        return $getListModules;
	}

	public static function wpsii_get_customer_fields(){
    	
    	global $wpdb;
		$wc_fields = array(
		    'first_name'            => esc_html__('First Name', 'wpccrm-copper-crm'),
		    'last_name'             => esc_html__('Last Name', 'wpccrm-copper-crm'),
		    'user_email'            => esc_html__('Email', 'wpccrm-copper-crm'),
		    'billing_first_name'    => esc_html__('Billing First Name', 'wpccrm-copper-crm'),
		    'billing_last_name'     => esc_html__('Billing Last Name', 'wpccrm-copper-crm'),
		    'billing_company'       => esc_html__('Billing Company', 'wpccrm-copper-crm'),
		    'billing_address_1'     => esc_html__('Billing Address 1', 'wpccrm-copper-crm'),
		    'billing_address_2'     => esc_html__('Billing Address 2', 'wpccrm-copper-crm'),
		    'billing_city'          => esc_html__('Billing City', 'wpccrm-copper-crm'),
		    'billing_state'         => esc_html__('Billing State', 'wpccrm-copper-crm'),
		    'billing_postcode'      => esc_html__('Billing Postcode', 'wpccrm-copper-crm'),
		    'billing_country'       => esc_html__('Billing Country', 'wpccrm-copper-crm'),
		    'billing_phone'         => esc_html__('Billing Phone', 'wpccrm-copper-crm'),
		    'billing_email'         => esc_html__('Billing Email', 'wpccrm-copper-crm'),
		    'shipping_first_name'   => esc_html__('Shipping First Name', 'wpccrm-copper-crm'),
		    'shipping_last_name'    => esc_html__('Shipping Last Name', 'wpccrm-copper-crm'),
		    'shipping_company'      => esc_html__('Shipping Company', 'wpccrm-copper-crm'),
		    'shipping_address_1'    => esc_html__('Shipping Address 1', 'wpccrm-copper-crm'),
		    'shipping_address_2'    => esc_html__('Shipping Address 2', 'wpccrm-copper-crm'),
		    'shipping_city'         => esc_html__('Shipping City', 'wpccrm-copper-crm'),
		    'shipping_postcode'     => esc_html__('Shipping Postcode', 'wpccrm-copper-crm'),
		    'shipping_country'      => esc_html__('Shipping Country', 'wpccrm-copper-crm'),
		    'shipping_state'        => esc_html__('Shipping State', 'wpccrm-copper-crm'),
		    'user_url'              => esc_html__('Website', 'wpccrm-copper-crm'),
		    'description'           => esc_html__('Biographical Info', 'wpccrm-copper-crm'),
		    'display_name'          => esc_html__('Display name publicly as', 'wpccrm-copper-crm'),
		    'nickname'              => esc_html__('Nickname', 'wpccrm-copper-crm'),
		    'user_login'            => esc_html__('Username', 'wpccrm-copper-crm'),
		    'user_registered'       => esc_html__('Registration Date', 'wpccrm-copper-crm')
		);

		return $wc_fields;
    }


    public static  function wpsii_get_order_fields(){
    	
    	global $wpdb;


        $wc_fields =  array(
                'get_id'                       => esc_html__('Order Number', 'wpccrm-copper-crm'),
                'get_order_key'                => esc_html__('Order Key', 'wpccrm-copper-crm'),
                'get_billing_first_name'       => esc_html__('Billing First Name', 'wpccrm-copper-crm'),
                'get_billing_last_name'        => esc_html__('Billing Last Name', 'wpccrm-copper-crm'),
                'get_billing_company'          => esc_html__('Billing Company', 'wpccrm-copper-crm'),
                'get_billing_address_1'        => esc_html__('Billing Address 1', 'wpccrm-copper-crm'),
                'get_billing_address_2'        => esc_html__('Billing Address 2', 'wpccrm-copper-crm'),
                'get_billing_city'             => esc_html__('Billing City', 'wpccrm-copper-crm'),
                'get_billing_state'            => esc_html__('Billing State', 'wpccrm-copper-crm'),
                'get_billing_postcode'         => esc_html__('Billing Postcode', 'wpccrm-copper-crm'),
                'get_billing_country'          => esc_html__('Billing Country', 'wpccrm-copper-crm'), 
                'get_billing_phone'            => esc_html__('Billing Phone', 'wpccrm-copper-crm'),
                'get_billing_email'            => esc_html__('Billing Email', 'wpccrm-copper-crm'),
                'get_shipping_first_name'      => esc_html__('Shipping First Name', 'wpccrm-copper-crm'),
                'get_shipping_last_name'       => esc_html__('Shipping Last Name', 'wpccrm-copper-crm'),
                'get_shipping_company'         => esc_html__('Shipping Company', 'wpccrm-copper-crm'),
                'get_shipping_address_1'       => esc_html__('Shipping Address 1', 'wpccrm-copper-crm'),
                'get_shipping_address_2'       => esc_html__('Shipping Address 2', 'wpccrm-copper-crm'),
                'get_shipping_city'            => esc_html__('Shipping City', 'wpccrm-copper-crm'),
                'get_shipping_state'           => esc_html__('Shipping State', 'wpccrm-copper-crm'),
                'get_shipping_postcode'        => esc_html__('Shipping Postcode', 'wpccrm-copper-crm'),
                'get_shipping_country'         => esc_html__('Shipping Country',  'wpccrm-copper-crm'),
                'get_formatted_order_total'     => esc_html__('Formatted Order Total', 'wpccrm-copper-crm'),
                'get_cart_tax'                  => esc_html__('Cart Tax', 'wpccrm-copper-crm'),
                'get_currency'                  => esc_html__('Currency', 'wpccrm-copper-crm'),
                'get_discount_tax'              => esc_html__('Discount Tax', 'wpccrm-copper-crm'),
                'get_discount_to_display'       => esc_html__('Discount to Display', 'wpccrm-copper-crm'),
                'get_discount_total'            => esc_html__('Discount Total', 'wpccrm-copper-crm'),
                'get_shipping_tax'              => esc_html__('Shipping Tax', 'wpccrm-copper-crm'),
                'get_shipping_total'            => esc_html__('Shipping Total', 'wpccrm-copper-crm'),
                'get_subtotal'                  => esc_html__('SubTotal', 'wpccrm-copper-crm'),
                'get_subtotal_to_display'       => esc_html__('SubTotal to Display', 'wpccrm-copper-crm'),
                'get_total'                     => esc_html__('Get Total', 'wpccrm-copper-crm'),
                'get_total_discount'            => esc_html__('Get Total Discount', 'wpccrm-copper-crm'),
                'get_total_tax'                 => esc_html__('Total Tax', 'wpccrm-copper-crm'),
                'get_total_refunded'            => esc_html__('Total Refunded', 'wpccrm-copper-crm'),
                'get_total_tax_refunded'        => esc_html__('Total Tax Refunded', 'wpccrm-copper-crm'),
                'get_total_shipping_refunded'   => esc_html__('Total Shipping Refunded', 'wpccrm-copper-crm'),
                'get_item_count_refunded'       => esc_html__('Item count refunded', 'wpccrm-copper-crm'),
                'get_total_qty_refunded'        => esc_html__('Total Quantity Refunded', 'wpccrm-copper-crm'),
                'get_remaining_refund_amount'   => esc_html__('Remaining Refund Amount', 'wpccrm-copper-crm'),
                'get_item_count'                => esc_html__('Item count', 'wpccrm-copper-crm'),
                'get_shipping_method'           => esc_html__('Shipping Method', 'wpccrm-copper-crm'),
                'get_shipping_to_display'       => esc_html__('Shipping to Display', 'wpccrm-copper-crm'),
                'get_date_created'              => esc_html__('Date Created', 'wpccrm-copper-crm'),
                'get_date_modified'             => esc_html__('Date Modified', 'wpccrm-copper-crm'),
                'get_date_completed'            => esc_html__('Date Completed', 'wpccrm-copper-crm'),
                'get_date_paid'                 => esc_html__('Date Paid', 'wpccrm-copper-crm'),
                'get_customer_id'               => esc_html__('Customer ID', 'wpccrm-copper-crm'),
                'get_user_id'                   => esc_html__('User ID', 'wpccrm-copper-crm'),
                'get_customer_ip_address'       => esc_html__('Customer IP Address', 'wpccrm-copper-crm'),
                'get_customer_user_agent'       => esc_html__('Customer User Agent', 'wpccrm-copper-crm'),
                'get_created_via'               => esc_html__('Order Created Via', 'wpccrm-copper-crm'),
                'get_customer_note'             => esc_html__('Customer Note', 'wpccrm-copper-crm'),
                'get_shipping_address_map_url'  => esc_html__('Shipping Address Map URL', 'wpccrm-copper-crm'),
                'get_formatted_billing_full_name'   => esc_html__('Formatted Billing Full Name', 'wpccrm-copper-crm'),
                'get_formatted_shipping_full_name'  => esc_html__('Formatted Shipping Full Name', 'wpccrm-copper-crm'),
                'get_formatted_billing_address'     => esc_html__('Formatted Billing Address', 'wpccrm-copper-crm'),
                'get_formatted_shipping_address'    => esc_html__('Formatted Shipping Address', 'wpccrm-copper-crm'),
                'get_payment_method'            => esc_html__('Payment Method', 'wpccrm-copper-crm'),
                'get_payment_method_title'      => esc_html__('Payment Method Title', 'wpccrm-copper-crm'),
                'get_transaction_id'            => esc_html__('Transaction ID', 'wpccrm-copper-crm'),
                'get_checkout_payment_url'      => esc_html__( 'Checkout Payment URL', 'wpccrm-copper-crm'),
                'get_checkout_order_received_url'   => esc_html__('Checkout Order Received URL', 'wpccrm-copper-crm'),
                'get_cancel_order_url'          => esc_html__('Cancel Order URL', 'wpccrm-copper-crm'),
                'get_cancel_order_url_raw'      => esc_html__('Cancel Order URL Raw', 'wpccrm-copper-crm'),
                'get_cancel_endpoint'           => esc_html__('Cancel Endpoint', 'wpccrm-copper-crm'),
                'get_view_order_url'            => esc_html__('View Order URL', 'wpccrm-copper-crm'),
                'get_edit_order_url'            => esc_html__('Edit Order URL', 'wpccrm-copper-crm'),
                'get_status'                    => esc_html__('Status', 'wpccrm-copper-crm'),
            );
        
        return $wc_fields;
    }


    public static function wpsii_get_product_fields(){
    	global $wpdb;
		$wc_fields = array(
		    'get_id'              		=> esc_html__('Product Id', 'wpccrm-copper-crm'),
            'get_type'       			=> esc_html__('Product Type', 'wpccrm-copper-crm'),
            'get_name'       			=> esc_html__('Name', 'wpccrm-copper-crm'),
            'get_slug'          		=> esc_html__('Slug', 'wpccrm-copper-crm'),
            'get_date_created'      	=> esc_html__('Date Created', 'wpccrm-copper-crm'),
            'get_date_modified'     	=> esc_html__('Date Modified', 'wpccrm-copper-crm'),
            'get_status'            	=> esc_html__('Status', 'wpccrm-copper-crm'),
            'get_featured'          	=> esc_html__('Featured', 'wpccrm-copper-crm'),
            'get_catalog_visibility'	=> esc_html__('Catalog Visibility', 'wpccrm-copper-crm'),
            'get_description'       	=> esc_html__('Description', 'wpccrm-copper-crm'),
            'get_short_description' 	=> esc_html__('Short Description', 'wpccrm-copper-crm'),
            'get_sku'            		=> esc_html__('Sku', 'wpccrm-copper-crm'),
            'get_menu_order'      		=> esc_html__('Menu Order', 'wpccrm-copper-crm'),
            'get_virtual'       		=> esc_html__('Virtual', 'wpccrm-copper-crm'),
            'get_permalink'         	=> esc_html__('Product Permalink', 'wpccrm-copper-crm'),
            'get_price'       			=> esc_html__('Price', 'wpccrm-copper-crm'),
            'get_regular_price'       	=> esc_html__('Regular Price', 'wpccrm-copper-crm'),
            'get_sale_price'            => esc_html__('Sale Price', 'wpccrm-copper-crm'),
            'get_date_on_sale_from'     => esc_html__('Date on Sale From', 'wpccrm-copper-crm'),
            'get_date_on_sale_to'       => esc_html__('Date on Sale To', 'wpccrm-copper-crm'),
            'get_total_sales'         	=> esc_html__('Total Sales', 'wpccrm-copper-crm'),
            'get_tax_status'     		=> esc_html__('Tax Status', 'wpccrm-copper-crm'),
            'get_tax_class'           	=> esc_html__('Tax Class', 'wpccrm-copper-crm'),
            'get_manage_stock'          => esc_html__('Manage Stock', 'wpccrm-copper-crm'),
            'get_stock_quantity'        => esc_html__('Stock Quantity', 'wpccrm-copper-crm'),
            'get_stock_status'          => esc_html__('Stock Status', 'wpccrm-copper-crm'),
            'get_backorders'       		=> esc_html__('Backorders', 'wpccrm-copper-crm'),
            'get_sold_individually'     => esc_html__('Sold Individually', 'wpccrm-copper-crm'),
            'get_purchase_note'         => esc_html__('Purchase Note', 'wpccrm-copper-crm'),
            'get_shipping_class_id'     => esc_html__('Shipping Class ID', 'wpccrm-copper-crm'),
            'get_weight'               	=> esc_html__('Weight', 'wpccrm-copper-crm'),
            'get_length'              	=> esc_html__('Length', 'wpccrm-copper-crm'),
            'get_width'            		=> esc_html__('Width', 'wpccrm-copper-crm'),
            'get_height'            	=> esc_html__('Height', 'wpccrm-copper-crm'),
            'get_categories'            => esc_html__('Categories', 'wpccrm-copper-crm'),
            'get_category_ids'          => esc_html__('Categories IDs', 'wpccrm-copper-crm'),
            'get_tag_ids'            	=> esc_html__('Tag IDs', 'wpccrm-copper-crm'),
		);
        
		return $wc_fields;
    }

    public function wpsii_store_required_field_mapping_data(){

        global $wpdb;
        $insightly_api_obj   = new WPCCRM_Smart_Insightly_API();
        $wp_modules     = $this->wpsii_get_wp_modules();
        $getListModules = $this->wpsii_get_insightly_modules();

        if($getListModules['modules']){
            foreach ($getListModules['modules'] as $key => $singleModule) {
                if( $singleModule['deletable'] &&  $singleModule['creatable'] ){
        
                    $insightly_fields = $insightly_api_obj->getFieldsMetaData( $singleModule['api_name'] );
        
                    if($insightly_fields){
                        foreach ($insightly_fields['fields'] as $insightly_field_key => $insightly_field_data) {
                            if($insightly_field_data['field_read_only'] == NULL){
                                if( $insightly_field_data['system_mandatory'] == 1 ){
                                    if($wp_modules){
                                        foreach ($wp_modules as $wpModuleSlug => $wpModuleLabel) {
        
                                            switch ( $wpModuleSlug ) {
                                                case 'customers':
                                                    $wp_field = "first_name";
                                                    break;
                                                
                                                case 'orders':
                                                    $wp_field = "get_id";
                                                    break;

                                                case 'products':
                                                    $wp_field = "get_name";
                                                    break;

                                                default:
                                                    $wp_field = "";
                                                    break;
                                            }

                                            $status         = 'active';
                                            $description    = '';

                                            $record_exists = $wpdb->get_row( 
                                                $wpdb->prepare(
                                                    "
                                                    SELECT * FROM ".$wpdb->prefix ."smart_insightly_field_mapping  WHERE wp_module = %s AND wp_field = %s  AND insightly_module = %s AND insightly_field = %s
                                                    " ,
                                                    $wpModuleSlug, $wp_field, $singleModule['api_name'], $insightly_field_data['api_name']
                                                    )
                                                
                                            );

                                            if ( null !== $record_exists ) {
                                                
                                              $reccord_id       = $record_exists->id;
                                              $is_predefined    = $record_exists->is_predefined;
                                              

                                                $wpdb->update(
                                                    $wpdb->prefix . 'smart_insightly_field_mapping', 
                                                    array( 
                                                        'wp_module'     => sanitize_text_field($wpModuleSlug),
                                                        'wp_field'      => sanitize_text_field($wp_field),
                                                        'insightly_module'   => sanitize_text_field($singleModule['api_name']),
                                                        'insightly_field'    => sanitize_text_field($insightly_field_data['api_name']), 
                                                        'status'        => sanitize_text_field($status),
                                                        'description'   => sanitize_text_field($description), 
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
                                                    $wpdb->prefix . 'smart_insightly_field_mapping', 
                                                    array( 
                                                        'wp_module'     => sanitize_text_field($wpModuleSlug),
                                                        'wp_field'      => sanitize_text_field($wp_field),
                                                        'insightly_module'   => sanitize_text_field($singleModule['api_name']),
                                                        'insightly_field'    => sanitize_text_field($insightly_field_data['api_name']), 
                                                        'status'        => sanitize_text_field($status),
                                                        'description'   => sanitize_text_field($description), 
                                                        'is_predefined' => 'yes', 
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
                                }
                            }
                        }
                    }
                }
            }
        }
    }
}
?>