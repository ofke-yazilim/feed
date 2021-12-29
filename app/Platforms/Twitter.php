<?php


namespace App\Platform;

class Twitter implements IPlatform
{
    public function products(){
        return array('Twitter');
    }
}