<?php

include_once '../../vendor/autoload.php';

use App\Hobby\Hobbies;
//var_dump($_POST);

$hobby = $_POST['hobby'];
$comma_separated = implode(",", $hobby);
//echo $comma_separated;
$_POST['hobby'] = $comma_separated;
$hobbies = new Hobbies();
$hobbies->prepare($_POST)->store();
