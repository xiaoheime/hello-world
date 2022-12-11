<?php

require 'vendor/autoload.php';
//$log = new Monolog\Logger('name');

$obj = new Xiaohei\Controller\Index();
echo $obj->index();