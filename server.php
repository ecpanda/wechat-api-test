<?php

include __DIR__ . '/bootstrap.php';

$app = Factory::officialAccount($config);

$response = $app->server->serve();

// 将响应输出
$response->send();