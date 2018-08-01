<?php
/**
 * Created by 张星.
 * User: 张星
 * Date: 2017/12/1 0001
 * Time: 10:35
 */

namespace Common\Handler;


use Overtrue\Http\Client;
use Overtrue\Http\Config;

class HttpHandler
{
    public static function __callStatic($name, $arguments)
    {
        if(isset($arguments[1])){
            return Client::create()->$name($arguments[0],$arguments[1]);
        }
        if(isset($arguments[1])){
            return Client::create()->$name($arguments[0],$arguments[1]);
        }
        return Client::create()->$name($arguments[0]);
    }

    public static function Client($config=[])
    {
        return  Client::create(new Config($config));
    }

}

