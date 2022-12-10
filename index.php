<?php

require 'vendor/autoload.php';
//$log = new Monolog\Logger('name');
//var_dump($log);

$obj = new Xiaohei\Controller\Index();
echo $obj->index();