<?php

require dirname(__FILE__)."/../vendor/autoload.php";

use Tinfot\FacePlusplus\FacePlusplus;

$face = new FacePlusplus([
    'api_key'    => '',
    'api_secret' => ''
]);

$resource = dirname(__FILE__) . '/../resources/demo-pic75.jpg';
$file     = fopen($resource, 'r');
$base64   = base64_encode(file_get_contents($resource));
$url      = "https://cdn.faceplusplus.com.cn/mc-official/scripts/demoScript/images/demo-pic75.jpg";

$result = $face->getBeautify($url);
fclose($file);
print_r($result);
