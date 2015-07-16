<?php

define(CM_Landing_USER_API_KEY, "6274ea0a66740f095819be976711018e");  //landing user list key






require_once 'assets/php/campaign-monitor-landing.php';

$body = file_get_contents("php://input");
$data = json_decode($body);

$type = $data->user_type;
$user['user_name'] = $data->user_name;
$user['user_email'] = $data->user_email;






addToCampaignMonitor(CM_Landing_USER_API_KEY, $user);



?>