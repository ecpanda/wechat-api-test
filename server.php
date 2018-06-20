<?php

include __DIR__ . '/vendor/autoload.php';

$config = [
    'app_id' => 'wxff9c142e93044137',
    'secret' => '28c654c04c3ab0b5e7866f6016d6c6f5',
    'token' => 'wechatoken',

    // 指定 API 调用返回结果的类型：array(default)/collection/object/raw/自定义类名
    'response_type' => 'array',

    'log' => [
        'level' => 'debug',
        'file' => __DIR__.'/wechat.log',
    ],
];

$app = EasyWeChat\Factory::officialAccount($config);

$response = $app->server->serve();

// 将响应输出
$response->send();