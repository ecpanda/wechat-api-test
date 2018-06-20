<?php

namespace Jwechat;

use EasyWeChat\OfficialAccount\Application;
use EasyWeChat\OfficialAccount\User\ServiceProvider as UserService;
use EasyWeChat\OfficialAccount\OAuth\ServiceProvider as OAuthService;

class OfficalApplication extends Application
{
    protected $providers = [
        UserService::class,
        OAuthService::class
    ];
}