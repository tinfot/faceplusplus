<?php

require "../vendor/autoload.php";

use Tinfot\FacePlusplus\FacePlusplus;

$face = new FacePlusplus([
    'api_key'    => 'vZ71hpGiK7Gyy18UfA4w2rjNpSwam2a7',
    'api_secret' => 'wQrX4K2mQ49MwkNO2QDxTQtAiNrMNKr3'
]);

$base64 = "data:image/png;base64,...";
$result = $face->getHumanBodySegment($base64);
print_r($result);

$url    = "http://xxxx.com/image.jpg";
$result = $face->getHumanBodySegment($url);
print_r($result);

$file   = file_get_contents("http://xxx.com/image.jpg");
$result = $face->getHumanBodySegment($file);
print_r($result);

