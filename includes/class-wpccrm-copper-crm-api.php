<?php
class WPCCRM_Copper_Crm_API {
    
    var $url;
    var $api_key;
    
    function __construct() {

        $wpsii_smart_insightly_settings     = get_option( 'wpsii_smart_insightly_settings' );

        $api_key = isset($wpsii_smart_insightly_settings['api_key']) ? esc_attr($wpsii_smart_insightly_settings['api_key']) : '';
   
        $this->url              = 'https://accounts.copper.com';
        $this->api_key          = $api_key;
        $this->loadAPIFiles();
    }
    
    function loadAPIFiles(){
        require_once WPCCRM_PLUGIN_PATH . 'includes/class.getListofModules.php';
        require_once WPCCRM_PLUGIN_PATH . 'includes/class.getFieldsMetaData.php';
    }

    function getListModules(){
        return (new GetListofModules())->execute();
    }

    function getFieldsMetaData( $module_name = NULL ){
        return (new GetFieldsMetaData())->execute($module_name);
    }

    function addRecord( $module, $data ) {

        $api_endpoint = WPCCRM_INSIGHTLY_APIS_URL.'/v3.1/'.$module;

        $ch = curl_init($api_endpoint);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            'Authorization: Basic ' . base64_encode($this->api_key . ':'),
            'Content-Type: application/json',
        ));

        $response = curl_exec($ch);
        $httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);

       if ( isset( $response->data[0]->status ) && $response->data[0]->status == 'error' ) {
            $log = "errorCode: ".$response->data[0]->code."\n";
            $log .= "message: ".$response->data[0]->message."\n";
            $log .= "Date: ".date( 'Y-m-d H:i:s' )."\n\n";                            

            file_put_contents( WPCCRM_PLUGIN_PATH.'debug.log', $log, FILE_APPEND );
        }
        error_log($response);
        return $response;
    }
    
    function updateRecord( $module, $data, $record_id ) {
        
        $data = array(
            'data'  => array(
                $data,
            ),
        );
        
        $data = json_encode( $data );
        $header = array(
            'Authorization: Copper-oauthtoken '.$this->api_key,
        );
        
        $url = WPCCRM_INSIGHTLY_APIS_URL.'/v3.1/'.$module.'/'.$record_id;
        
        $ch = curl_init( $url );
        curl_setopt( $ch, CURLOPT_HTTPHEADER, $header );
        curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true );
        curl_setopt( $ch, CURLOPT_SSL_VERIFYPEER, false );
        curl_setopt( $ch, CURLOPT_CUSTOMREQUEST, 'PUT' );
        curl_setopt( $ch, CURLOPT_POSTFIELDS, $data );
        $json_response = curl_exec( $ch );
        curl_getinfo( $ch, CURLINFO_HTTP_CODE );
        curl_close( $ch );
        
        $response = json_decode( $json_response );
        if ( isset( $response->data[0]->status ) && $response->data[0]->status == 'error' ) {
            $log = "errorCode: ".$response->data[0]->code."\n";
            $log .= "message: ".$response->data[0]->message."\n";
            $log .= "Date: ".date( 'Y-m-d H:i:s' )."\n\n";                            

            file_put_contents( WPCCRM_PLUGIN_PATH.'debug.log', $log, FILE_APPEND );
        }
        
        return $response;
    }
}
?>