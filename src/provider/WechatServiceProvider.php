<?php

namespace qcth\laravel_wechat_open\provider;

use Illuminate\Support\ServiceProvider;

use qcth\laravel_wechat_open\Index;

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
            return new Index($app);
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
