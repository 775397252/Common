<?php  
require_once __DIR__ . '/vendor/autoload.php';

use Common\Handler\HttpHandler;
use Common\Handler\ResultHandler;

//$result=HttpHandler::get('https://httpbin.org/ip',['hello'=>'dash']);
$result=HttpHandler::Client()->get('https://httpbin.org/ip');
$status=ResultHandler::ok($result);
var_dump($status);