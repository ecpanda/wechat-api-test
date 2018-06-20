<?php

include __DIR__ . '/bootstrap.php';

$config['oauth'] = [
    'scopes'   => ['snsapi_userinfo'],
    'callback' => '/oauth_callback.php'
];

$app = EasyWeChat\Factory::officialAccount($config);
$oauth = $app->oauth;

$user = $oauth->user();

$_SESSION['wechat_user'] = $user->toArray();

header('location: /profile.php'); 

