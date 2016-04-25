<?php

include_once ('../../vendor/autoload.php');

use App\Mobile\Mobile;

$mobiles = new Mobile();
$mobiles->prepare($_POST)->store();
//var_dump($mobiles);

