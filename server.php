<?php

include __DIR__ . '/bootstrap.php';

$config['token'] = 'wechatoken';

$app = Factory::officialAccount($config);

$response = $app->server->serve();

// 将响应输出
$response->send();