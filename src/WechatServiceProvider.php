<?php

namespace qcth\laravel_open;

use Illuminate\Support\ServiceProvider;

class WechatServiceProvider extends ServiceProvider
{

    //服务提供者延迟加载
    protected $defer=true;

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {

        $this->app->singleton('Wechat',function ($app){
            return new Wechat($app);
        });


    }

    /**
     * 
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {

       
    }

    public  function  provides()
    {
        return ['Wechat'];
    }
}
