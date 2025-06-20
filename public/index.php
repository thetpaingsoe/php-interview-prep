<?php

require_once __DIR__ . '/../vendor/autoload.php';

use App\MainController;

$main = new MainController();
var_dump($main->verifyTLS());