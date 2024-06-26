<div class="wrap">                
	<h1><?php echo esc_html__( 'Copper Synchronization' ); ?></h1>
	<hr>
	<form method="post">
		<?php 
			$tab = isset( $_REQUEST['tab'] ) ? $_REQUEST['tab'] : 'products';
		?>
		<nav class="nav-tab-wrapper woo-nav-tab-wrapper">
			<a href="<?php echo admin_url('admin.php?page=wpccrm-copper-crm-synchronization&tab=products'); ?>" class="nav-tab <?php if($tab == 'products'){ echo 'nav-tab-active';} ?>"><?php echo esc_html__( 'Products', 'wpccrm-copper-crm' ); ?></a>
			<a href="<?php echo admin_url('admin.php?page=wpccrm-copper-crm-synchronization&tab=orders'); ?>" class="nav-tab <?php if($tab == 'orders'){ echo 'nav-tab-active';} ?>"><?php echo esc_html__( 'Orders', 'wpccrm-copper-crm' ); ?></a>
			<a href="<?php echo admin_url('admin.php?page=wpccrm-copper-crm-synchronization&tab=customers'); ?>" class="nav-tab <?php if($tab == 'customers'){ echo 'nav-tab-active';} ?>"><?php echo esc_html__( 'Customers', 'wpccrm-copper-crm' ); ?></a>
		</nav>
		<input type="hidden" name="tab" value="<?php echo esc_attr($tab); ?>">
		<?php if( isset($tab) && 'products' == $tab ){
				
				$Product_List = new Product_Lists();
				$Product_List->prepare_items();
				$Product_List->display(); 

			}else if( isset($tab) && 'orders' == $tab ){ 
				
				$Orders_List = new Order_Lists();
				$Orders_List->prepare_items();
				$Orders_List->display(); 

			}else if( isset($tab) && 'customers' == $tab ){
				
				$Customers_List = new Customers_Lists();
				$Customers_List->prepare_items();
				$Customers_List->display(); 
				
			}?>	
	</form>
</div>