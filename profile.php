<?php

include __DIR__ . '/bootstrap.php';

$config['oauth'] = [
    'scopes'   => ['snsapi_userinfo'],
    'callback' => 'oauth_callback.php?type=1'
];

$app = EasyWeChat\Factory::officialAccount($config);
$oauth = $app->oauth;

if (empty($_SESSION['wechat_user'])) {
    $oauth->redirect()->send();
}

var_dump($_SESSION);

