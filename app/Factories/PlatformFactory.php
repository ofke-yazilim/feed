<?php


namespace App\Factory;

use App\Exception;
use App\Request;

class PlatformFactory implements IProductFactory
{
    public function products()
    {
        try{
            $platform  = Request::getPlatformClass();
            if($platform){
                $class = "\\App\Platform\\".$platform;
                return (new $class())->products();
            }
            // will showing error response
            return Exception::PlatformFactory('parameter_missing','Platform');
        } catch (\Exception $e){
            // will showing error response
            return Exception::PlatformFactory('unexpected_error',$e->getMessage()." - ".$e->getLine());
        }
    }
}