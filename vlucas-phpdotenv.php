<?php

require 'vendor/autoload.php';

Dotenv\Dotenv::createImmutable(__DIR__, ['.env', '.env.dev'], true)->safeLoad();

echo $_ENV['HELLO'];
