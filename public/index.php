<?php

require_once __DIR__ . '/../vendor/autoload.php';

use App\Router;

$requestUri = $_SERVER['REQUEST_URI'] ?? '/';
Router::route($requestUri);



