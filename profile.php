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

$user = $_SESSION['wechat_user'];

echo 'type: '. $app->request->input('type');
var_dump($user);

