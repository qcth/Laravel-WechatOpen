<?php

namespace qcth\laravel_open;

use Illuminate\Support\Facades\Facade;

class WechatFacade extends  Facade
{
    protected static  function  getFacadeAccessor()
    {
        return 'Wechat';
    }
}