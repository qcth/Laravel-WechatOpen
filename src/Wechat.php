<?php

namespace qcth\laravel_open;


/**
 * 微信插件统一入口
 * 在控制器中使用示例：WechatFacade::AppLogin($config)->login();
 */

class Wechat{

    private $link=null;

    //单例插件
    public function __call($plug_name, $arguments=null)
    {

        $class_name='\\qcth\\laravel_open\\plug\\'.ucfirst($plug_name);

        if($this->link instanceof $class_name){
            return $this->link;
        }


        return $this->link=new $class_name(...$arguments);
    }

}