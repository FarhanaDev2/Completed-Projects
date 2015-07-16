<?php
/*
 * STEPS TO SET UP CAMPAIGN MONITOR LISTS
 *
 * 1) Create an account in campaign monitor
 * 2) Create 2 lists - Users and Professional under List & Subscribers in campaign monitor
 * 3) Grab the API Key and List IDs and populate the constants defined below
 * 4) API_KEY is your api key found under account settings in campaign monitor
 * 5) CM_USER_API_KEY - List Id for the users list   (click the list , click change name/type, grab the API Subscriber List ID)
 * 6) CM_PRO_API_KEY - List Id for the professionals list  (click the list , click change name/type, grab the API Subscriber List ID)
 * 7) Create custom fields for the new lists. For example - click Users
 * 8) On the right side, click Custom Fields
 * 9) Add a new custom field called "Suggestions" as Text
 * 10) Do the same for list Professionals
 *
 */
define(CM_USER_API_KEY, "fa936328983298b104cc95c0da4e1473");  //user list key
define(CM_PRO_API_KEY,"78a1b88917093d09db0029156464ae29"); //professional list key
define(API_KEY, "f18713a28c2fd4c042b90c6b7243426f"); //account key


require_once 'assets/php/campaign-monitor/csrest_subscribers.php';

$body = file_get_contents("php://input");
$data = json_decode($body);

$type = $data->user_type;
$user['user_name'] = $data->user_name;
$user['user_email'] = $data->user_email;
$user['user_suggestions']  = $data->user_suggestions;


switch ($type) {
    case "user":{
       addToCampaignMonitor(CM_USER_API_KEY, $user);
       break;
    }

    case "pro":{
       addToCampaignMonitor(CM_PRO_API_KEY, $user);
       break;
    }
}

function addToCampaignMonitor($list_id,$user){
    $auth = array('api_key' => API_KEY);
    $wrap = new CS_REST_Subscribers($list_id, $auth);

    $result = $wrap->add(array(
        'EmailAddress' => $user['user_email'],
        'Name' => $user['user_name'],
        'CustomFields' => array(
            array(
                'Key' => 'Suggestions',
                'Value' => $user['user_suggestions']
            )
        ),
        'Resubscribe' => false
    ));

    if($result->was_successful()) {
        echo json_encode(array('status' => true,'message'=> 'Added to campaign monitor'));
    } else {
        echo json_encode(array('status' => false,'message'=> 'Failed adding to campaign monitor '.$result->http_status_code));
    }

}
?>