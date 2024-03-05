<?php
error_reporting(E_ALL);
//MVC yapısı 
require './config.php';
require DIR.'/helpers/app.php';
require DIR.'/controller/user.php';


$route = get('route');
$route = explode('@', $route);

$Class = $route[0];
$Method = $route[1];

$Run = new $Class();
$Run->$Method();

