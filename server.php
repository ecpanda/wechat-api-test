<?php

include __DIR__ . '/bootstrap.php';

$app = Factory::officialAccount($config);

$app->server->push(function ($message) {
    return "wechatoken";
});

$response = $app->server->serve();

// 将响应输出
$response->send();