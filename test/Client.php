<?php

require_once __DIR__ . '/../vendor/autoload.php';

use \Cmuench\LibNotify;

$client = new LibNotify\Client();

$client->send(
    'test http://www.google.de',
    LibNotify\Urgency\Level::CRITICAL(),
    LibNotify\Icon\Library\Gnome\Status::DIALOG_WARNING
);
