<?php

namespace Jwechat;

use EasyWeChat\OfficialAccount;

class OfficalApplication extends Application
{
    protected $providers = [
        User\ServiceProvider::class,
        OAuth\ServiceProvider::class
    ];
}