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

$app->template_message->send([
    'touser' => 'oBHttwloPVEvyZXbh-LMaHV8h6kk',
    'template_id' => 'xV_FigE7nVjW9gaIOnpVQF7x8gW0QwSFsE_aLgR2oHs',
    'url' => 'http//www.baidu.com',
    'data' => [
        'title' => ['回复标题', '#F00'],
        'content' => '回复内容'
    ],
]);


