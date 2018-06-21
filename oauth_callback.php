<?php

include __DIR__ . '/bootstrap.php';

$config['oauth'] = [
    'scopes'   => ['snsapi_userinfo'],
    'callback' => 'oauth_callback.php?type=1'
];

Jwechat\Util::debug($_SERVER);
Jwechat\Util::debug($_REQUEST);

$app = EasyWeChat\Factory::officialAccount($config);
$oauth = $app->oauth;

$user = $oauth->user();

$_SESSION['wechat_user'] = $user->toArray();
$_SESSION['type'] = $app->request->query->get('type');

header('location: http://178.128.212.241/profile.php'); 

