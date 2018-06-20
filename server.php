<?php

include __DIR__ . '/vendor/autoload.php';

define('BASE_PATH', __DIR__);

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

$app->server->push(function ($message) use ($app) {
    $user = $app->user->get($message['FromUserName']);

    return $app->template_message->send([
        'touser' => $user['openid'],
        'template_id' => 'xV_FigE7nVjW9gaIOnpVQF7x8gW0QwSFsE_aLgR2oHs',
        'url' => 'https://easywechat.org',
        'scene' => 1000,
        'data' => [
            'title' => ['测试模板回复标题', '#F00'],
            'content' => '测试模板回复内容',
        ],
    ]);

    return "您好{$user['nickname']}, 欢迎使用 EasyWeChat";
});

$response = $app->server->serve();

// 将响应输出
$response->send();