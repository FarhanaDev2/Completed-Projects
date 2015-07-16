<?php

define(CM_Landing_FSBO_API_KEY, "9ef57449a51620378576d55524d85c8c");  //landing FSBO   list key




require_once 'assets/php/campaign-monitor-landing.php';

$body = file_get_contents("php://input");
$data = json_decode($body);

$type = $data->user_type;
$user['user_name'] = $data->user_name;
$user['user_email'] = $data->user_email;






addToCampaignMonitor(CM_Landing_FSBO_API_KEY, $user);



?>