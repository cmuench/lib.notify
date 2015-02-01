<?php

require_once __DIR__ . '/../vendor/autoload.php';

use \CMuench\LibNotify;
use CMuench\LibNotify\Adapter\DbusModuleAdapter;

$client = new LibNotify\Client(new DbusModuleAdapter());

$client->send(
    'test: ' . time(),
    'body',
    LibNotify\Urgency\Level::CRITICAL(),
    LibNotify\Icon\Library\Gnome\Status::DIALOG_WARNING
);
