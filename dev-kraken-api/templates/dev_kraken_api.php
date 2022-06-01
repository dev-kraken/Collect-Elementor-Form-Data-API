<?php
/**
 * Fetching Data From SQL Database [db] and convert into json-encode
 */
global $wpdb;
$table_prefix = $wpdb->prefix.'dev_kraken_lead';
$result = $wpdb->get_results("SELECT * FROM $table_prefix");
$response = array();
if ($result){
    $i=0;
    header("Content-Type: JSON");
    foreach($result as $row){
        $response[$i]['full_name'] = $row->full_name;
        $response[$i]['email'] = $row->email;
        $response[$i]['phone'] = $row->phone;
        $response[$i]['date_time'] = $row->date_time;
        $i++;
       
    }  
    echo json_encode($response, JSON_PRETTY_PRINT);
}