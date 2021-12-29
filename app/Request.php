<?php


namespace App;


class Request
{
    public static $parameters = '';
    public static function capture(){
        self::$parameters = $_GET;
        return self::$parameters;
    }

    public static function getModel(){
        return self::$parameters['model'];
    }

    public static function getFormat(){
        return self::$parameters['format'];
    }

    public static function getPlatform(){
        return self::$parameters['platform'];
    }

    public static function getPlatformClass(){
        return ucfirst(self::$parameters['platform']);
    }

    public static function getFactoryClass(){
        return ucfirst(self::$parameters['platform'])."Factory";
    }
}