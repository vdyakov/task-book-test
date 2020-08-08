<?php

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

define('DB_HOST', $_ENV['DB_HOST']);
define('DB_PORT', $_ENV['DB_PORT']);
define('DB_DATABASE', $_ENV['DB_DATABASE']);
define('DB_USERNAME', $_ENV['DB_USERNAME']);
define('DB_PASSWORD', $_ENV['DB_PASSWORD']);
