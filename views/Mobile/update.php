<?php

include_once ('../../vendor/autoload.php');
use App\Mobile\Mobile;

$mobile = new Mobile();
//var_dump($mobile);
//die();
$themobile = $mobile->update($_POST);
//print_r($themobile);
 