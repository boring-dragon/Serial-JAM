<?php

require_once './vendor/autoload.php';

use Jinas\Serial\Serial;


$serial = new Serial();
$serial->setPort("COM5")
       ->setBaudRate(115200)
       ->execute();