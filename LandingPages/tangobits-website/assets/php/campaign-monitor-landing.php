<?php

/*
 * STEPS TO SET UP CAMPAIGN MONITOR LISTS
 *
 * 1) Create an account in campaign monitor
 * 2) Grab the API Key and List IDs and populate the constants defined below
 * 3) API_KEY is your api key found under account settings in campaign monitor
 * 4)  Use the API key in  assets/php/campaign-monitor-landing.php
 * 5) CM_USER_API_KEY - List Id for the users list   (click the list , click change name/type, grab the API Subscriber List ID)
 *
 * 6) Need to create 4 types of users.
 *     1. for Landing User: use/change  CM_Landing_USER_API_KEY in landing_form-submit.php
 *     2. for Inspection User: use/change  CM_Landing_USER_API_KEY in Inspection_form-submit.php
 *     3. for Realtor User: use/change    CM_Landing_RETAILER_API_KEY in Realtor_form-submit.php
 *     4. for FSBO  User: use/change      CM_Landing_FSBO_API_KEY in FSBO_form-submit.php
 *

 *
 */
require_once 'assets/php/campaign-monitor/csrest_subscribers.php';



define(API_KEY, "92c9d1e40bb802242c519e29669b3999"); //account key




function addToCampaignMonitor($list_id,$user){
    $auth = array('api_key' => API_KEY);
    $wrap = new CS_REST_Subscribers($list_id, $auth);

    $result = $wrap->add(array(
        'EmailAddress' => $user['user_email'],
        'Name' => $user['user_name'],
        'Resubscribe' => false
    ));

    if($result->was_successful()) {
        echo json_encode(array('status' => true,'message'=> 'Added to campaign monitor'));
    } else {
        echo json_encode(array('status' => false,'message'=> 'Failed adding to campaign monitor '.$result->http_status_code));
    }

}
?>