<?php
/**
 *
 * This Elementor function collect field data like [fullname] [email] [phone] and insert into SQL database [db]
 *
 */
add_action('elementor_pro/forms/new_record', function ($record, $ajax_handler) {

    $raw_fields = $record->get('fields');
    $fields = [];
    foreach ($raw_fields as $id => $field) {
        $fields[$id] = $field['value'];
    }
/**
 *
 * Inserting data into SQL databse [db]
 *
 */
    global $wpdb;
    $table_name = $wpdb->prefix . 'dev_kraken_lead';     
    $output['success'] = $wpdb->insert($table_name, array('full_name' => $fields['name'], 'email' => $fields['email'], 'phone' => $fields['phone']));
/**
 *
 * request handler you can see request in browser developer network in FETCH/XHR
 * if Request Handler success 1 its working good || if success false its not working
 * {"success":false,"data":{"message":"Server error. Form not sent.","errors":[],"data":{"1":{"success":1}}}}
 *
 */
    $ajax_handler->add_response_data(true, $output);
}, 10, 2);
?>