<?php
class GetFieldsMetaData{
    public function execute($module = NULL){
        if ($module == 'leads') {
        $GetFieldsMetaData = array(
                                    'fields' => array(
                                                        'LEAD_ID' => array(
                                                                    'system_mandatory' => 1,
                                                                    'field_read_only' => '',
                                                                    'display_label' => 'Lead ID',
                                                                    'api_name' => 'LEAD_ID'
                                                                ),
                                                        'FIRST_NAME' => array(
                                                                    'system_mandatory' => 1,
                                                                    'field_read_only' => '',
                                                                    'display_label' => 'First Name',
                                                                    'api_name' => 'FIRST_NAME'
                                                                ),
                                                        'LAST_NAME' => array(
                                                                    'system_mandatory' => 1,
                                                                    'field_read_only' => '',
                                                                    'display_label' => 'Last Name',
                                                                    'api_name' => 'LAST_NAME'
                                                                ),
                                                        'PHONE' => array(
                                                                    'system_mandatory' => 0,
                                                                    'field_read_only' => '',
                                                                    'display_label' => 'Phone Number',
                                                                    'api_name' => 'PHONE'
                                                                ),
                                                        'EMAIL' => array(
                                                                    'system_mandatory' => 1,
                                                                    'field_read_only' => '',
                                                                    'display_label' => 'Email',
                                                                    'api_name' => 'EMAIL'
                                                                ),
                                                 
                                                        'LEAD_DESCRIPTION' => array(
                                                                    'system_mandatory' => 0,
                                                                    'field_read_only' => '',
                                                                    'display_label' => 'Lead Description',
                                                                    'api_name' => 'LEAD_DESCRIPTION'
                                                                ),
                                                         'ADDRESS_CITY' => array(
                                                                    'system_mandatory' => 0,
                                                                    'field_read_only' => '',
                                                                    'display_label' => 'Address City',
                                                                    'api_name' => 'ADDRESS_CITY'
                                                                ),
                                                       'LEAD_SOURCE_ID' => array(
                                                                    'system_mandatory' => 0,
                                                                    'field_read_only' => '',
                                                                    'display_label' => 'Lead Source ID',
                                                                    'api_name' => 'LEAD_SOURCE_ID'
                                                                ),
                                                        'LEAD_STATUS_ID' => array(
                                                                    'system_mandatory' => 0,
                                                                    'field_read_only' => '',
                                                                    'display_label' => 'Lead Status ID',
                                                                    'api_name' => 'LEAD_STATUS_ID'
                                                                ),

                                                        'TITLE' => array(
                                                                    'system_mandatory' => 0,
                                                                    'field_read_only' => '',
                                                                    'display_label' => 'Title',
                                                                    'api_name' => 'TITLE'
                                                                ),
                                                        'CONVERTED_CONTACT_ID' => array(
                                                                    'system_mandatory' => 0,
                                                                    'field_read_only' => '',
                                                                    'display_label' => 'Converted Contact ID',
                                                                    'api_name' => 'CONVERTED_CONTACT_ID'
                                                                ),
                                                        'CONVERTED_DATE_UTC' => array(
                                                                    'system_mandatory' => 0,
                                                                    'field_read_only' => '',
                                                                    'display_label' => 'Converted Date UTC',
                                                                    'api_name' => 'CONVERTED_DATE_UTC'
                                                                ),
                                                 
                                                        'CONVERTED_OPPORTUNITY_ID' => array(
                                                                    'system_mandatory' => 0,
                                                                    'field_read_only' => '',
                                                                    'display_label' => 'Converted Opportunity ID',
                                                                    'api_name' => 'CONVERTED_OPPORTUNITY_ID'
                                                                ),
                                                         'CONVERTED_ORGANISATION_ID' => array(
                                                                    'system_mandatory' => 0,
                                                                    'field_read_only' => '',
                                                                    'display_label' => 'Converted Organisation ID',
                                                                    'api_name' => 'CONVERTED_ORGANISATION_ID'
                                                                ),
                                                          'DATE_CREATED_UTC' => array(
                                                                    'system_mandatory' => 0,
                                                                    'field_read_only' => '',
                                                                    'display_label' => 'Date Created UTC',
                                                                    'api_name' => 'DATE_CREATED_UTC'
                                                                ),
                                                         'DATE_UPDATED_UTC' => array(
                                                                    'system_mandatory' => 0,
                                                                    'field_read_only' => '',
                                                                    'display_label' => 'Date Update UTC',
                                                                    'api_name' => 'DATE_UPDATED_UTC'
                                                                ),
                                                         'EMPLOYEE_COUNT' => array(
                                                                    'system_mandatory' => 0,
                                                                    'field_read_only' => '',
                                                                    'display_label' => 'Employee Count',
                                                                    'api_name' => 'EMPLOYEE_COUNT'
                                                                ),
                                                        'FAX' => array(
                                                                    'system_mandatory' => 0,
                                                                    'field_read_only' => '',
                                                                    'display_label' => 'Fax',
                                                                    'api_name' => 'FAX'
                                                                ),
                                                        'INDUSTRY' => array(
                                                                    'system_mandatory' => 0,
                                                                    'field_read_only' => '',
                                                                    'display_label' => 'Industry',
                                                                    'api_name' => 'INDUSTRY'
                                                                ),
                                                        'LEAD_RATING' => array(
                                                                    'system_mandatory' => 0,
                                                                    'field_read_only' => '',
                                                                    'display_label' => 'Lead Rating',
                                                                    'api_name' => 'LEAD_RATING'
                                                                ),
                                                        'MOBILE' => array(
                                                                    'system_mandatory' => 0,
                                                                    'field_read_only' => '',
                                                                    'display_label' => 'Mobile',
                                                                    'api_name' => 'MOBILE'
                                                                ),
                                                 
                                                        'OWNER_USER_ID' => array(
                                                                    'system_mandatory' => 0,
                                                                    'field_read_only' => '',
                                                                    'display_label' => 'Owner User ID',
                                                                    'api_name' => 'OWNER_USER_ID'
                                                                ),
                                                        'RESPONSIBLE_USER_ID' => array(
                                                                    'system_mandatory' => 0,
                                                                    'field_read_only' => '',
                                                                    'display_label' => 'Responsible User ID',
                                                                    'api_name' => 'RESPONSIBLE_USER_ID'
                                                                ),
                                                       'WEBSITE' => array(
                                                                    'system_mandatory' => 0,
                                                                    'field_read_only' => '',
                                                                    'display_label' => 'Website',
                                                                    'api_name' => 'WEBSITE'
                                                                ),
                                                        'ADDRESS_STREET' => array(
                                                                    'system_mandatory' => 0,
                                                                    'field_read_only' => '',
                                                                    'display_label' => 'Address Street',
                                                                    'api_name' => 'ADDRESS_STREET'
                                                                ),

                                                        'ADDRESS_CITY' => array(
                                                                    'system_mandatory' => 0,
                                                                    'field_read_only' => '',
                                                                    'display_label' => 'Address City',
                                                                    'api_name' => 'ADDRESS_CITY'
                                                                ),
                                                        'ADDRESS_STATE' => array(
                                                                    'system_mandatory' => 0,
                                                                    'field_read_only' => '',
                                                                    'display_label' => 'Address State',
                                                                    'api_name' => 'ADDRESS_STATE'
                                                                ),
                                                        'ADDRESS_POSTCODE' => array(
                                                                    'system_mandatory' => 0,
                                                                    'field_read_only' => '',
                                                                    'display_label' => 'Address Postcode',
                                                                    'api_name' => 'ADDRESS_POSTCODE'
                                                                ),
                                                 
                                                        'ADDRESS_COUNTRY' => array(
                                                                    'system_mandatory' => 0,
                                                                    'field_read_only' => '',
                                                                    'display_label' => 'Converted Opportunity ID',
                                                                    'api_name' => 'Address Country'
                                                                ),
                                                        'LAST_ACTIVITY_DATE_UTC' => array(
                                                                    'system_mandatory' => 0,
                                                                    'field_read_only' => '',
                                                                    'display_label' => 'Last Activity Date UTC',
                                                                    'api_name' => 'LAST_ACTIVITY_DATE_UTC'
                                                                ),
                                                        'ORGANISATION_NAME' => array(
                                                                    'system_mandatory' => 0,
                                                                    'field_read_only' => '',
                                                                    'display_label' => 'Organisation Name',
                                                                    'api_name' => 'ORGANISATION_NAME'
                                                                ),
                                                        'TAGS' => array(
                                                                    'system_mandatory' => 0,
                                                                    'field_read_only' => '',
                                                                    'display_label' => 'Tags',
                                                                    'api_name' => 'TAGS'
                                                                ),
                                        ),
                                ); 
                }elseif ($module == 'Contacts') {
                     
                     $GetFieldsMetaData = array(
                                        'fields' => array(
                                                        'FIRST_NAME' => array(
                                                                    'system_mandatory' => 1,
                                                                    'field_read_only' => '',
                                                                    'display_label' => 'First Name',
                                                                    'api_name' => 'FIRST_NAME'
                                                                ),
                                                        'LAST_NAME' => array(
                                                                    'system_mandatory' => 0,
                                                                    'field_read_only' => '',
                                                                    'display_label' => 'Last Name',
                                                                    'api_name' => 'LAST_NAME'
                                                                ),
                                                        'PHONE_MOBILE' => array(
                                                                    'system_mandatory' => 0,
                                                                    'field_read_only' => '',
                                                                    'display_label' => 'Phone Number',
                                                                    'api_name' => 'PHONE_MOBILE'
                                                                ),
                                                         'TITLE' => array(
                                                                    'system_mandatory' => 0,
                                                                    'field_read_only' => '',
                                                                    'display_label' => 'Title',
                                                                    'api_name' => 'TITLE'
                                                                ),
                                                        'ADDRESS_MAIL_STREET' => array(
                                                                    'system_mandatory' => 0,
                                                                    'field_read_only' => '',
                                                                    'display_label' => 'Address Mail Street',
                                                                    'api_name' => 'ADDRESS_MAIL_STREET'
                                                                ),
                                                        'IMAGE_URL' => array(
                                                                    'system_mandatory' => 0,
                                                                    'field_read_only' => '',
                                                                    'display_label' => 'Image url ',
                                                                    'api_name' => 'IMAGE_URL'
                                                                ),
                                                        'BACKGROUND' => array(
                                                                    'system_mandatory' => 0,
                                                                    'field_read_only' => '',
                                                                    'display_label' => 'Background',
                                                                    'api_name' => 'BACKGROUND'
                                                                ),
                                                        'OWNER_USER_ID' => array(
                                                                    'system_mandatory' => 0,
                                                                    'field_read_only' => '',
                                                                    'display_label' => 'Owner User ID',
                                                                    'api_name' => 'OWNER_USER_ID'
                                                                ),
                                                        'DATE_UPDATED_UTC' => array(
                                                                    'system_mandatory' => 0,
                                                                    'field_read_only' => '',
                                                                    'display_label' => 'Date Update UTC',
                                                                    'api_name' => 'DATE_UPDATED_UTC'
                                                                ),
                                                        'SOCIAL_LINKEDIN' => array(
                                                                    'system_mandatory' => 0,
                                                                    'field_read_only' => '',
                                                                    'display_label' => 'Social Linkedin',
                                                                    'api_name' => 'SOCIAL_LINKEDIN'
                                                                ),
                                                        'SOCIAL_FACEBOOK' => array(
                                                                    'system_mandatory' => 0,
                                                                    'field_read_only' => '',
                                                                    'display_label' => 'Social Facebook',
                                                                    'api_name' => 'SOCIAL_FACEBOOK'
                                                                ),
                                                        'SOCIAL_TWITTER' => array(
                                                                    'system_mandatory' => 0,
                                                                    'field_read_only' => '',
                                                                    'display_label' => 'Social Twitter',
                                                                    'api_name' => 'SOCIAL_TWITTER'
                                                                ),
                                                        'DATE_OF_BIRTH' => array(
                                                                    'system_mandatory' => 0,
                                                                    'field_read_only' => '',
                                                                    'display_label' => 'Date Of Birth',
                                                                    'api_name' => 'DATE_OF_BIRTH'
                                                                ),
                                                        'PHONE_OTHER' => array(
                                                                    'system_mandatory' => 0,
                                                                    'field_read_only' => '',
                                                                    'display_label' => 'Phone Other',
                                                                    'api_name' => 'PHONE_OTHER'
                                                                ),
                                                        'PHONE_ASSISTANT' => array(
                                                                    'system_mandatory' => 0,
                                                                    'field_read_only' => '',
                                                                    'display_label' => 'Phone Assistant',
                                                                    'api_name' => 'PHONE_ASSISTANT'
                                                                ),
                                                        'PHONE_FAX' => array(
                                                                    'system_mandatory' => 0,
                                                                    'field_read_only' => '',
                                                                    'display_label' => 'Phone Fax',
                                                                    'api_name' => 'PHONE_FAX'
                                                                ),
                                                         'ASSISTANT_NAME' => array(
                                                                    'system_mandatory' => 0,
                                                                    'field_read_only' => '',
                                                                    'display_label' => 'Assistant Name',
                                                                    'api_name' => 'ASSISTANT_NAME'
                                                                ),
                                                        'ADDRESS_MAIL_CITY' => array(
                                                                    'system_mandatory' => 0,
                                                                    'field_read_only' => '',
                                                                    'display_label' => 'Address Mail City',
                                                                    'api_name' => 'ADDRESS_MAIL_CITY'
                                                                ),
                                                        'ADDRESS_MAIL_STATE' => array(
                                                                    'system_mandatory' => 0,
                                                                    'field_read_only' => '',
                                                                    'display_label' => 'Address Mail State',
                                                                    'api_name' => 'ADDRESS_MAIL_STATE'
                                                                ),
                                                        'ADDRESS_MAIL_POSTCODE' => array(
                                                                    'system_mandatory' => 0,
                                                                    'field_read_only' => '',
                                                                    'display_label' => 'Address Mail Postcode',
                                                                    'api_name' => 'ADDRESS_MAIL_POSTCODE'
                                                                ),
                                                        'ADDRESS_MAIL_COUNTRY' => array(
                                                                    'system_mandatory' => 0,
                                                                    'field_read_only' => '',
                                                                    'display_label' => 'Address Mail Country',
                                                                    'api_name' => 'ADDRESS_MAIL_COUNTRY'
                                                                ),
                                                        'ADDRESS_OTHER_STREET' => array(
                                                                    'system_mandatory' => 0,
                                                                    'field_read_only' => '',
                                                                    'display_label' => 'Address Other Street',
                                                                    'api_name' => 'ADDRESS_OTHER_STREET'
                                                                ),
                                                        'ADDRESS_OTHER_CITY' => array(
                                                                    'system_mandatory' => 0,
                                                                    'field_read_only' => '',
                                                                    'display_label' => 'Address Other City',
                                                                    'api_name' => 'ADDRESS_OTHER_CITY'
                                                                ),
                                                         'ADDRESS_OTHER_POSTCODE' => array(
                                                                    'system_mandatory' => 0,
                                                                    'field_read_only' => '',
                                                                    'display_label' => 'Address Other Postcode',
                                                                    'api_name' => 'ADDRESS_OTHER_POSTCODE'
                                                                ),
                                                        'ORGANISATION_ID' => array(
                                                                    'system_mandatory' => 0,
                                                                    'field_read_only' => '',
                                                                    'display_label' => 'Organisation ID',
                                                                    'api_name' => 'ORGANISATION_ID'
                                                                ),
                                                        'TITLE' => array(
                                                                    'system_mandatory' => 0,
                                                                    'field_read_only' => '',
                                                                    'display_label' => 'Title',
                                                                    'api_name' => 'TITLE'
                                                                ),
                                                        'TAGS' => array(
                                                                    'system_mandatory' => 0,
                                                                    'field_read_only' => '',
                                                                    'display_label' => 'Tags',
                                                                    'api_name' => 'TAGS'
                                                                ),
                                                        'CONTACT_ID' => array(
                                                                    'system_mandatory' => 0,
                                                                    'field_read_only' => '',
                                                                    'display_label' => 'Contact ID',
                                                                    'api_name' => 'CONTACT_ID'
                                                                ),

                                                    ),
                                    );
                }elseif($module == 'Tasks'){
                     $GetFieldsMetaData = array(
                                    'fields' => array(
                                                        'TITLE' => array(
                                                                    'system_mandatory' => 1,
                                                                    'field_read_only' => '',
                                                                    'display_label' => 'Title',
                                                                    'api_name' => 'TITLE'
                                                                ),
                                                         'CATEGORY_ID' => array(
                                                                    'system_mandatory' => 1,
                                                                    'field_read_only' => '',
                                                                    'display_label' => 'Category ID',
                                                                    'api_name' => 'CATEGORY_ID'
                                                                ),
                                                        'DUE_DATE' => array(
                                                                    'system_mandatory' => 1,
                                                                    'field_read_only' => '',
                                                                    'display_label' => 'Due Date',
                                                                    'api_name' => 'DUE_DATE'
                                                                ),
                                                        'COMPLETED_DATE_UTC' => array(
                                                                    'system_mandatory' => 0,
                                                                    'field_read_only' => '',
                                                                    'display_label' => 'Completed Date UTC',
                                                                    'api_name' => 'COMPLETED_DATE_UTC'
                                                                ),
                                                        'DETAILS' => array(
                                                                    'system_mandatory' => 0,
                                                                    'field_read_only' => '',
                                                                    'display_label' => 'Details',
                                                                    'api_name' => 'DETAILS'
                                                                ),
                                                         'STATUS' => array(
                                                                    'system_mandatory' => 0,
                                                                    'field_read_only' => '',
                                                                    'display_label' => 'Status',
                                                                    'api_name' => 'STATUS'
                                                                ),
                                                        'PRIORITY' => array(
                                                                    'system_mandatory' => 0,
                                                                    'field_read_only' => '',
                                                                    'display_label' => 'Priority',
                                                                    'api_name' => 'PRIORITY'
                                                                ),
                                                        'PERCENT_COMPLETE' => array(
                                                                    'system_mandatory' => 0,
                                                                    'field_read_only' => '',
                                                                    'display_label' => 'Percent Complete',
                                                                    'api_name' => 'PERCENT_COMPLETE'
                                                                ),
                                                        'DATE_CREATED_UTC' => array(
                                                                    'system_mandatory' => 0,
                                                                    'field_read_only' => '',
                                                                    'display_label' => 'Date Created UTC',
                                                                    'api_name' => 'DATE_CREATED_UTC'
                                                                ),
                                                         'DATE_UPDATED_UTC' => array(
                                                                    'system_mandatory' => 0,
                                                                    'field_read_only' => '',
                                                                    'display_label' => 'Date Update UTC',
                                                                    'api_name' => 'DATE_UPDATED_UTC'
                                                                ),
                                                         'EMAIL_ID' => array(
                                                                    'system_mandatory' => 0,
                                                                    'field_read_only' => '',
                                                                    'display_label' => 'Email ID',
                                                                    'api_name' => 'EMAIL_ID'
                                                                ),
                                                         'PROJECT_ID' => array(
                                                                    'system_mandatory' => 0,
                                                                    'field_read_only' => '',
                                                                    'display_label' => 'Project ID',
                                                                    'api_name' => 'PROJECT_ID'
                                                                ),
                                                        'REMINDER_DATE_UTC' => array(
                                                                    'system_mandatory' => 0,
                                                                    'field_read_only' => '',
                                                                    'display_label' => 'Reminder Date UTC',
                                                                    'api_name' => 'REMINDER_DATE_UTC'
                                                                ),
                                                        'OWNER_VISIBLE' => array(
                                                                    'system_mandatory' => 0,
                                                                    'field_read_only' => '',
                                                                    'display_label' => 'Owner Visible',
                                                                    'api_name' => 'OWNER_VISIBLE'
                                                                ),
                                                        'STAGE_ID' => array(
                                                                    'system_mandatory' => 0,
                                                                    'field_read_only' => '',
                                                                    'display_label' => 'Stage ID',
                                                                    'api_name' => 'STAGE_ID'
                                                                ),
                                                         'STATUS' => array(
                                                                    'system_mandatory' => 0,
                                                                    'field_read_only' => '',
                                                                    'display_label' => 'Status',
                                                                    'api_name' => 'STATUS'
                                                                ),
                                                        'ASSIGNED_BY_USER_ID' => array(
                                                                    'system_mandatory' => 0,
                                                                    'field_read_only' => '',
                                                                    'display_label' => 'Assigned By User ID',
                                                                    'api_name' => 'ASSIGNED_BY_USER_ID'
                                                                ),
                                                        'PARENT_TASK_ID' => array(
                                                                    'system_mandatory' => 0,
                                                                    'field_read_only' => '',
                                                                    'display_label' => 'Parent Task ID',
                                                                    'api_name' => 'PARENT_TASK_ID'
                                                                ),
                                                        'OPPORTUNITY_ID' => array(
                                                                    'system_mandatory' => 0,
                                                                    'field_read_only' => '',
                                                                    'display_label' => 'Opportunity ID',
                                                                    'api_name' => 'OPPORTUNITY_ID'
                                                                ),
                                                         'ASSIGNED_TEAM_ID' => array(
                                                                    'system_mandatory' => 0,
                                                                    'field_read_only' => '',
                                                                    'display_label' => 'Assigned Team ID',
                                                                    'api_name' => 'ASSIGNED_TEAM_ID'
                                                                ),
                                                         'ASSIGNED_DATE_UTC' => array(
                                                                    'system_mandatory' => 0,
                                                                    'field_read_only' => '',
                                                                    'display_label' => 'Assigned Date UTC',
                                                                    'api_name' => 'ASSIGNED_DATE_UTC'
                                                                ),
                                                         'CREATED_USER_ID' => array(
                                                                    'system_mandatory' => 0,
                                                                    'field_read_only' => '',
                                                                    'display_label' => 'Created User ID',
                                                                    'api_name' => 'CREATED_USER_ID'
                                                                ),
                                                         'TASK_ID' => array(
                                                                    'system_mandatory' => 0,
                                                                    'field_read_only' => '',
                                                                    'display_label' => 'Task ID',
                                                                    'api_name' => 'TASK_ID'
                                                                ),
                                                         

                                                    ),

                                );
                }elseif($module == 'organizations'){
                     $GetFieldsMetaData = array(
                                    'fields' => array(
                                                        'ORGANISATION_NAME' => array(
                                                                    'system_mandatory' => 1,
                                                                    'field_read_only' => '',
                                                                    'display_label' => 'Organisation Name',
                                                                    'api_name' => 'ORGANISATION_NAME'
                                                                ),
                                                        'ORGANISATION_ID' => array(
                                                                    'system_mandatory' => 1,
                                                                    'field_read_only' => '',
                                                                    'display_label' => 'Organisation ID',
                                                                    'api_name' => 'ORGANISATION_ID'
                                                                ),
                                                        'PHONE' => array(
                                                                    'system_mandatory' => 1,
                                                                    'field_read_only' => '',
                                                                    'display_label' => 'Phone Number',
                                                                    'api_name' => 'PHONE'
                                                                ),
                                                        'PHONE_FAX' => array(
                                                                    'system_mandatory' => 0,
                                                                    'field_read_only' => '',
                                                                    'display_label' => 'Phone Fax',
                                                                    'api_name' => 'PHONE_FAX'
                                                                ),
                                                         'PHONE_FAX' => array(
                                                                    'system_mandatory' => 0,
                                                                    'field_read_only' => '',
                                                                    'display_label' => 'Phone Fax',
                                                                    'api_name' => 'PHONE_FAX'
                                                                ),
                                                        'WEBSITE' => array(
                                                                    'system_mandatory' => 0,
                                                                    'field_read_only' => '',
                                                                    'display_label' => 'Website',
                                                                    'api_name' => 'WEBSITE'
                                                                ),
                                                        'ADDRESS_BILLING_STREET' => array(
                                                                    'system_mandatory' => 0,
                                                                    'field_read_only' => '',
                                                                    'display_label' => 'Address Billing Street',
                                                                    'api_name' => 'ADDRESS_BILLING_STREET'
                                                                ),
                                                        'ADDRESS_BILLING_CITY' => array(
                                                                    'system_mandatory' => 0,
                                                                    'field_read_only' => '',
                                                                    'display_label' => 'Address Billing City',
                                                                    'api_name' => 'ADDRESS_BILLING_CITY'
                                                                ),
                                                        'ADDRESS_BILLING_STATE' => array(
                                                                    'system_mandatory' => 0,
                                                                    'field_read_only' => '',
                                                                    'display_label' => 'Address Billing State',
                                                                    'api_name' => 'ADDRESS_BILLING_STATE'
                                                                ),
                                                        'ADDRESS_BILLING_COUNTRY' => array(
                                                                    'system_mandatory' => 0,
                                                                    'field_read_only' => '',
                                                                    'display_label' => 'Address Billing Country',
                                                                    'api_name' => 'ADDRESS_BILLING_COUNTRY'
                                                                ),
                                                        'ADDRESS_BILLING_POSTCODE' => array(
                                                                    'system_mandatory' => 0,
                                                                    'field_read_only' => '',
                                                                    'display_label' => 'Address Billing Postcode',
                                                                    'api_name' => 'ADDRESS_BILLING_POSTCODE'
                                                                ),
                                                        'ADDRESS_SHIP_STREET' => array(
                                                                    'system_mandatory' => 0,
                                                                    'field_read_only' => '',
                                                                    'display_label' => 'Address Ship Street',
                                                                    'api_name' => 'ADDRESS_SHIP_STREET'
                                                                ),
                                                        'ADDRESS_SHIP_CITY' => array(
                                                                    'system_mandatory' => 0,
                                                                    'field_read_only' => '',
                                                                    'display_label' => 'Address Ship City',
                                                                    'api_name' => 'ADDRESS_SHIP_CITY'
                                                                ),
                                                        'ADDRESS_SHIP_STATE' => array(
                                                                    'system_mandatory' => 0,
                                                                    'field_read_only' => '',
                                                                    'display_label' => 'Address Ship State',
                                                                    'api_name' => 'ADDRESS_SHIP_STATE'
                                                                ),
                                                        'ADDRESS_SHIP_POSTCODE' => array(
                                                                    'system_mandatory' => 0,
                                                                    'field_read_only' => '',
                                                                    'display_label' => 'Address Ship Postcode',
                                                                    'api_name' => 'ADDRESS_SHIP_POSTCODE'
                                                                ),
                                                        'ADDRESS_SHIP_COUNTRY' => array(
                                                                    'system_mandatory' => 0,
                                                                    'field_read_only' => '',
                                                                    'display_label' => 'Address Ship Country',
                                                                    'api_name' => 'ADDRESS_SHIP_COUNTRY'
                                                                ),
                                                        'EMAIL_DOMAIN' => array(
                                                                    'system_mandatory' => 0,
                                                                    'field_read_only' => '',
                                                                    'display_label' => 'Email Domain',
                                                                    'api_name' => 'EMAIL_DOMAIN'
                                                                ),
                                                        'TAGS' => array(
                                                                    'system_mandatory' => 0,
                                                                    'field_read_only' => '',
                                                                    'display_label' => 'Tags',
                                                                    'api_name' => 'TAGS'
                                                                ),
                                                        'BACKGROUND' => array(
                                                                    'system_mandatory' => 0,
                                                                    'field_read_only' => '',
                                                                    'display_label' => 'Background',
                                                                    'api_name' => 'BACKGROUND'
                                                                ),
                                                        'IMAGE_URL' => array(
                                                                    'system_mandatory' => 0,
                                                                    'field_read_only' => '',
                                                                    'display_label' => 'Image urlL',
                                                                    'api_name' => 'IMAGE_URL'
                                                                ),
                                                        'DATE_CREATED_UTC' => array(
                                                                    'system_mandatory' => 0,
                                                                    'field_read_only' => '',
                                                                    'display_label' => 'Date Created UTC',
                                                                    'api_name' => 'DATE_CREATED_UTC'
                                                                ),
                                                        'LAST_ACTIVITY_DATE_UTC' => array(
                                                                    'system_mandatory' => 0,
                                                                    'field_read_only' => '',
                                                                    'display_label' => 'Last Activity Date UTC',
                                                                    'api_name' => 'LAST_ACTIVITY_DATE_UTC'
                                                                ),
                                                                       'SOCIAL_LINKEDIN' => array(
                                                                    'system_mandatory' => 0,
                                                                    'field_read_only' => '',
                                                                    'display_label' => 'Social Linkedin',
                                                                    'api_name' => 'SOCIAL_LINKEDIN'
                                                                ),
                                                        'SOCIAL_FACEBOOK' => array(
                                                                    'system_mandatory' => 0,
                                                                    'field_read_only' => '',
                                                                    'display_label' => 'Social Facebook',
                                                                    'api_name' => 'SOCIAL_FACEBOOK'
                                                                ),
                                                        'SOCIAL_TWITTER' => array(
                                                                    'system_mandatory' => 0,
                                                                    'field_read_only' => '',
                                                                    'display_label' => 'Social Twitter',
                                                                    'api_name' => 'SOCIAL_TWITTER'
                                                                ),
                                                        'PHONE_FAX' => array(
                                                                    'system_mandatory' => 0,
                                                                    'field_read_only' => '',
                                                                    'display_label' => 'Phone Fax',
                                                                    'api_name' => 'PHONE_FAX'
                                                                ),                                            
                                                    ),
                                );   
                 }elseif($module == 'Projects'){
                     $GetFieldsMetaData = array(
                                    'fields' => array(
                                                         'PROJECT_ID' => array(
                                                                    'system_mandatory' => 1,
                                                                    'field_read_only' => '',
                                                                    'display_label' => 'Project ID',
                                                                    'api_name' => 'PROJECT_ID'
                                                                ),
                                                        'PROJECT_NAME' => array(
                                                                    'system_mandatory' => 1,
                                                                    'field_read_only' => '',
                                                                    'display_label' => 'Project Name',
                                                                    'api_name' => 'PROJECT_NAME'
                                                                ),
                                                        'PROJECT_DETAILS' => array(
                                                                    'system_mandatory' => 0,
                                                                    'field_read_only' => '',
                                                                    'display_label' => 'Project Description',
                                                                    'api_name' => 'PROJECT_DETAILS'
                                                                ),
                                                        'STATUS' => array(
                                                                    'system_mandatory' => 1,
                                                                    'field_read_only' => '',
                                                                    'display_label' => 'Status',
                                                                    'api_name' => 'STATUS'
                                                                ),
                                                        'STARTED_DATE' => array(
                                                                    'system_mandatory' => 0,
                                                                    'field_read_only' => '',
                                                                    'display_label' => 'Start Date',
                                                                    'api_name' => 'STARTED_DATE'
                                                                ),
                                                         'COMPLETED_DATE' => array(
                                                                    'system_mandatory' => 0,
                                                                    'field_read_only' => '',
                                                                    'display_label' => 'Completed Date',
                                                                    'api_name' => 'COMPLETED_DATE'
                                                                ),

                                                        'OWNER_USER_ID' => array(
                                                                    'system_mandatory' => 0,
                                                                    'field_read_only' => '',
                                                                    'display_label' => 'Owner User ID',
                                                                    'api_name' => 'OWNER_USER_ID'
                                                                ),
                                                         'OPPORTUNITY_ID' => array(
                                                                    'system_mandatory' => 0,
                                                                    'field_read_only' => '',
                                                                    'display_label' => 'Opportunity id',
                                                                    'api_name' => 'OPPORTUNITY_ID'
                                                                ),
                                                        'CATEGORY_ID' => array(
                                                                    'system_mandatory' => 0,
                                                                    'field_read_only' => '',
                                                                    'display_label' => 'Category ID',
                                                                    'api_name' => 'CATEGORY_ID'
                                                                ),
                                                        'PIPELINE_ID' => array(
                                                                    'system_mandatory' => 0,
                                                                    'field_read_only' => '',
                                                                    'display_label' => 'Pipeline ID',
                                                                    'api_name' => 'PIPELINE_ID'
                                                                ),
                                                        'STAGE_ID' => array(
                                                                    'system_mandatory' => 0,
                                                                    'field_read_only' => '',
                                                                    'display_label' => 'Stage ID',
                                                                    'api_name' => 'STAGE_ID'
                                                                ),
                                                        'IMAGE_URL' => array(
                                                                    'system_mandatory' => 0,
                                                                    'field_read_only' => '',
                                                                    'display_label' => 'Image Url',
                                                                    'api_name' => 'IMAGE_URL'
                                                                ),
                                                         'DATE_CREATED_UTC' => array(
                                                                    'system_mandatory' => 0,
                                                                    'field_read_only' => '',
                                                                    'display_label' => 'Date Create utc',
                                                                    'api_name' => 'DATE_CREATED_UTC'
                                                                ),
                                                        'DATE_UPDATED_UTC' => array(
                                                                    'system_mandatory' => 0,
                                                                    'field_read_only' => '',
                                                                    'display_label' => 'Date Updated utc',
                                                                    'api_name' => 'DATE_UPDATED_UTC'
                                                                ),
                                                        'LAST_ACTIVITY_DATE_UTC' => array(
                                                                    'system_mandatory' => 0,
                                                                    'field_read_only' => '',
                                                                    'display_label' => 'Last Activity Date utc',
                                                                    'api_name' => 'LAST_ACTIVITY_DATE_UTC'
                                                                ),
                                                        'NEXT_ACTIVITY_DATE_UTC' => array(
                                                                    'system_mandatory' => 0,
                                                                    'field_read_only' => '',
                                                                    'display_label' => 'Next Activity Date utc',
                                                                    'api_name' => 'NEXT_ACTIVITY_DATE_UTC'
                                                                ),
                                                        'RESPONSIBLE_USER_ID' => array(
                                                                    'system_mandatory' => 0,
                                                                    'field_read_only' => '',
                                                                    'display_label' => 'Responsible User ID',
                                                                    'api_name' => 'RESPONSIBLE_USER_ID'
                                                                ),
                                                        'OWNER_USER_ID' => array(
                                                                    'system_mandatory' => 0,
                                                                    'field_read_only' => '',
                                                                    'display_label' => 'Owner User ID',
                                                                    'api_name' => 'OWNER_USER_ID'
                                                                ),
                                                       
                                            
                                                    ),
                                ); 
                        }  
                return $GetFieldsMetaData;
            }
        }

