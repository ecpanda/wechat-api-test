<?php

namespace Jwechat;

use EasyWeChat\OfficialAccount\Application;

class OfficalApplication extends Application
{
    protected $providers = [
        User\ServiceProvider::class,
        OAuth\ServiceProvider::class
    ];
}