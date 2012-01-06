<?php
 
require 'facebook.php';

$app_id = "286203881426668";
$app_secret = "c7764d1259c34af2d99a7078adebee74";
$facebook = new Facebook(array(
'appId' => $app_id,
'secret' => $app_secret,
'cookie' => true
));

$signed_request = $facebook->getSignedRequest();
 
$page_id = $signed_request["page"]["id"];
$page_admin = $signed_request["page"]["admin"];
$like_status = $signed_request["page"]["liked"];
$country = $signed_request["user"]["country"];
$locale = $signed_request["user"]["locale"];
 
if ($like_status) {
//echo "You like us";
header("Location: si.php");
}
else {
header("Location: no.php");
}



?>
