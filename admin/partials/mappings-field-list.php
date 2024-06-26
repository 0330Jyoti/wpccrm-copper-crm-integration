<?php
    global $wpdb;
    $fieldlists = $wpdb->get_results( "SELECT * FROM {$wpdb->prefix}copper_crm_field_mapping");
?>
    <h2><?php echo esc_html__('Fields Mapping List'); ?></h2>

    <table id="mapping-list-table" class="wp-list-table widefat fixed striped table-view-list display">
        <thead>
            <th><?php echo esc_html__('Id', 'wpccrm-copper-crm'); ?></th>
            <th><?php echo esc_html__('Copper Module', 'wpccrm-copper-crm'); ?></th>
            <th><?php echo esc_html__('Copper Field', 'wpccrm-copper-crm'); ?></th>
            <th><?php echo esc_html__('WP Module', 'wpccrm-copper-crm'); ?></th>
            <th><?php echo esc_html__('WP Field', 'wpccrm-copper-crm'); ?></th>
            <th><?php echo esc_html__('Status', 'wpccrm-copper-crm'); ?></th>
            <th><?php echo esc_html__('Description', 'wpccrm-copper-crm'); ?></th>
            <th><?php echo esc_html__('Action', 'wpccrm-copper-crm'); ?></th>
        </thead>

        <tfoot>
            <th><?php echo esc_html__('Id', 'wpccrm-copper-crm'); ?></th>
            <th><?php echo esc_html__('Copper Module', 'wpccrm-copper-crm'); ?></th>
            <th><?php echo esc_html__('Copper Field', 'wpccrm-copper-crm'); ?></th>
            <th><?php echo esc_html__('WP Module', 'wpccrm-copper-crm'); ?></th>
            <th><?php echo esc_html__('WP Field', 'wpccrm-copper-crm'); ?></th>
            <th><?php echo esc_html__('Status', 'wpccrm-copper-crm'); ?></th>
            <th><?php echo esc_html__('Description', 'wpccrm-copper-crm'); ?></th>
            <th><?php echo esc_html__('Action', 'wpccrm-copper-crm'); ?></th>
        </tfoot>
        <tbody>
            <!-- WP Modules Row -->
            <?php
                if ( $fieldlists ) {
                    foreach ( $fieldlists as $singlelist ) {
                        ?>
                        <tr>
                            <td><?php echo esc_html__($singlelist->id, 'wpccrm-copper-crm'); ?></td>
                            <td><?php echo esc_html__($singlelist->insightly_module, 'wpccrm-copper-crm'); ?></td>
                            <td><?php echo esc_html__($singlelist->insightly_field, 'wpccrm-copper-crm'); ?></td>
                            <td><?php echo esc_html__($singlelist->wp_module, 'wpccrm-copper-crm'); ?></td>
                            <td><?php echo esc_html__($singlelist->wp_field, 'wpccrm-copper-crm'); ?></td>
                            <td><?php echo ucfirst( esc_html__($singlelist->status, 'wpccrm-copper-crm') ); ?></td>
                            <td><?php echo esc_html__($singlelist->description, 'wpccrm-copper-crm'); ?></td>
                            <td>
                                <?php if($singlelist->is_predefined != 'yes' ){ ?>
                                    <a href="<?php echo admin_url('admin.php?page=wpccrm-copper-crm-mappings&action=trash&id='.$singlelist->id); ?>">
                                        <button type="submit"><?php echo esc_html__('Delete', 'wpccrm-copper-crm'); ?></button>
                                    </a>
                                <?php }?>
                            </td>
                        </tr>
                        <?php
                    }   
                } else {
                    ?>
                    <tr>
                        <td colspan="7">
                            <?php echo esc_html__('No Record Found', 'wpccrm-copper-crm'); ?>
                        </td>
                    </tr>
                    <?php
                }
            ?>
        </tbody>
    </table>