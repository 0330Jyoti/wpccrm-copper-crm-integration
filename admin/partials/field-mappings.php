<div class="loader"></div>
<form method="post" action="<?php echo admin_url('/admin.php?page=wpccrm-copper-crm-mappings') ?>" id="wpccrm-copper-crm-mappings-form">

    <h2><?php echo esc_html__('Fields Mapping', 'wpccrm-copper-crm'); ?></h2>

    <table class="form-table">
        <!-- WP Modules Row -->
        <tr valign="top">
            <th scope="row" class="titledesc">
                <label><?php echo  esc_html__( 'WP Modules', 'wpccrm-copper-crm' ); ?></label>
            </th>
            <td class="forminp forminp-text">
                <select name="wp_module">
                    <option><?php echo  esc_html__('Select Module', 'wpccrm-copper-crm'); ?></option>
                    <?php 
                        if($wp_modules){
                            foreach ($wp_modules as $key => $singleModule) {
                                ?>            
                                <option value = "<?php echo $key; ?>"><?php echo esc_html__($singleModule, 'wpccrm-copper-crm'); ?></option>
                                <?php            
                            }
                        }
                    ?>
                </select>
            </td>
        </tr>

        <!-- WP Fields Row -->
        <tr valign="top">
            <th scope="row" class="titledesc">
                <label><?php echo  esc_html__( 'WP Fields', 'wpccrm-copper-crm' ); ?></label>
            </th>
            <td class="forminp forminp-text">
                <select name="wp_field">
                    <option><?php echo  esc_html__('Please select WP Modules', 'wpccrm-copper-crm'); ?></option>
                </select>
            </td>
        </tr>

        <!-- Copper Modules Row -->
        <tr valign="top">
            <th scope="row" class="titledesc">
                <label><?php echo  esc_html__( 'Copper Modules', 'wpccrm-copper-crm' ); ?></label>
            </th>
            <td class="forminp forminp-text">
                <select name="insightly_module">
                    <option><?php echo  esc_html__('Select Copper Module', 'wpccrm-copper-crm'); ?></option>
                    <?php
                        $insightly_modules_options = "";

                        if($getListModules['modules']){
                            foreach ($getListModules['modules'] as $key => $singleModule) {
                                if( $singleModule['deletable'] &&  $singleModule['creatable'] ){
                    ?>
                                <option value = '<?php echo $singleModule['api_name']; ?>'> 
                                    <?php echo  esc_html__($singleModule['plural_label'], 'wpccrm-copper-crm'); ?>
                                </option>
                    <?php                
                                }
                            }
                        }
                    ?>
                </select>
            </td>
        </tr>

        <!-- Copper Fields Row -->
       <tr valign="top">
            <th scope="row" class="titledesc">
                <label><?php echo  esc_html__( 'Copper Fields', 'wpccrm-copper-crm' ); ?></label>
            </th>
            <td class="forminp forminp-text">
                <select name="insightly_field">
                    <option><?php echo  esc_html__('Please select Copper Modules', 'wpccrm-copper-crm'); ?></option>
                </select>
            </td>
        </tr>

        <!-- Copper Modules Row -->
        <tr valign="top">
            <th scope="row" class="titledesc">
                <label><?php echo  esc_html__( 'Status', 'wpccrm-copper-crm' ); ?></label>
            </th>
            <td class="forminp forminp-text">
                <select name="status">
                    <option value="active"><?php echo esc_html__( 'Active', 'wpccrm-copper-crm' ); ?></option>
                    <option value="inactive"><?php echo esc_html__( 'In Active', 'wpccrm-copper-crm' ); ?></option>
                </select>
            </td>
        </tr>

        <!-- Copper Modules Row -->
        <tr valign="top">
            <th scope="row" class="titledesc">
                <label><?php echo esc_html__( 'Description', 'wpccrm-copper-crm' ); ?></label>
            </th>
            <td class="forminp forminp-text">
                <textarea name="description" rows="5" cols="46"></textarea>
            </td>
        </tr>

    </table>

    <p class="submit">
        <input type="submit" name="add_mapping" class="button-primary woocommerce-save-button" value="<?php echo  esc_html__( 'Add Mapping', 'wpccrm-copper-crm' ); ?>">
    </p>
</form>