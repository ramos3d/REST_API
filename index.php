<?php
require_once __DIR__ . '/EnvLoader.php';

$envFile = __DIR__ . '/.env';
$envVariables = EnvLoader::LoadEnv();

// Routing of requests
include_once __DIR__ . '/routes/route.php';