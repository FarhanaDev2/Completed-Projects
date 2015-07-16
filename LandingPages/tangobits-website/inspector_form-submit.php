<?php


define(CM_Landing_INSPECTION_API_KEY, "1263120d4e09eb84a9d025c2d0c0ee09");  //landing inspection list key





require_once 'assets/php/campaign-monitor-landing.php';

$body = file_get_contents("php://input");
$data = json_decode($body);

$type = $data->user_type;
$user['user_name'] = $data->user_name;
$user['user_email'] = $data->user_email;






addToCampaignMonitor(CM_Landing_INSPECTION_API_KEY, $user);



?>