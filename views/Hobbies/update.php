<?php

include_once '../../vendor/autoload.php';

use App\Hobby\Hobbies;

$hobby = $_POST['hobby'];
$comma_separated = implode(",", $hobby);
//echo $comma_separated;

$_POST['hobby'] = $comma_separated;
$obj = new Hobbies();
$obj->prepare($_POST)->update();

