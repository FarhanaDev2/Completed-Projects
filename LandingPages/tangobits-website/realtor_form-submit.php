<?php

define(CM_Landing_RETAILER_API_KEY, "95cafe159939c6734475c153d73528eb");  //landing retailer list key

/*define(API_KEY, "92c9d1e40bb802242c519e29669b3999"); //API/account key */




require_once 'assets/php/campaign-monitor-landing.php';

$body = file_get_contents("php://input");
$data = json_decode($body);

$type = $data->user_type;
$user['user_name'] = $data->user_name;
$user['user_email'] = $data->user_email;






addToCampaignMonitor(CM_Landing_RETAILER_API_KEY, $user);



?>