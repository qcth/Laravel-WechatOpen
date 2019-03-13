<?php

namespace qcth\laravel_wechat_open;

use Illuminate\Support\Facades\Facade;

class Wechat extends  Facade
{
    protected static  function  getFacadeAccessor()
    {
        return 'Wechat';
    }
}