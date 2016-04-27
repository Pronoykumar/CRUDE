<?php

include_once ('../../vendor/autoload.php');
use App\Mobile\Mobile;

$mobile = new Mobile();
$themobile = $mobile->update($_POST);