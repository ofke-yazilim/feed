<?php


namespace App\Factory;

use App\Request;

class PlatformFactory implements IProductFactory
{
    public function products()
    {
        $platform  = Request::getPlatformClass();
        $class = "\\App\Platform\\".$platform;
        return (new $class())->products();
    }
}