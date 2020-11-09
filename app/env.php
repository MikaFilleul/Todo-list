<?php
declare(strict_types=1);

use Dotenv\Dotenv;

$dotenv = DotEnv::createImmutable(__DIR__ . '/../');
$dotenv->load();
