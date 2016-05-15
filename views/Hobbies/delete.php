<?php


include_once '../../vendor/autoload.php';
use App\Hobby\Hobbies;

$obj = new Hobbies();
//var_dump($obj);
//die();
$obj->prepare($_GET)->delete();