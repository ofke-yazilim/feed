<?php


namespace App\Platform;

class Twitter implements IPlatform
{
    public function products(){
        $string = file_get_contents("includes/products.json");
        return $string;
        //return json_decode($string, true);
    }
}