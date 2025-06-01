<?php

require 'vendor/autoload.php';

(new Symfony\Component\Dotenv\Dotenv())->bootEnv(__DIR__ . '/.env');

echo $_ENV['HELLO'];
