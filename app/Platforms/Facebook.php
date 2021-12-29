<?php


namespace App\Platform;


class Facebook implements IPlatform
{
    public function products(){
        return array('Facebook');
    }
}