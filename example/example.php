<?php

require_once(dirname(__FILE__) . '/../lib/Oklink.php');

$key = "[redacted]";
$secret = "[redacted]";


$client = Oklink::withApiKey($key, $secret);

$params = array();
       

try{
    $result = $client->buttonsListButton($params);
    var_dump($result);
}catch (Exception $e) {
    $msg = $e->getMessage();
    error_log($msg);
}


