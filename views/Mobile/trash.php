<?php

include_once '../../vendor/autoload.php';

use App\Mobile\Mobile;
use App\Mobile\Message;
use App\Mobile\Utility;


$obj = new Mobile();
$obj->prepare($_GET)->trash();
