<?php

namespace qcth\laravel_wechat_open\facade;

use Illuminate\Support\Facades\Facade;

class Wechat extends  Facade
{
    protected static  function  getFacadeAccessor()
    {
        return 'Wechat';
    }
}