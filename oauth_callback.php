<?php

include __DIR__ . '/bootstrap.php';

$config['oauth'] = [
    'scopes'   => ['snsapi_userinfo'],
    'callback' => 'oauth_callback.php'
];

$app = new Jwechat\OfficalApplication($config);
$user =  $app->oauth->user();

$_SESSION['wechat_user'] = $user->toArray();

header('location: http://178.128.212.241/profile.php'); 

