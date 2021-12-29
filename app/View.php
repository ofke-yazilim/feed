<?php


namespace App;


class View
{
    public $content = null;

    public function __construct($data){
        $this->render($data);
    }

    private function render($data){
        // Getting file format
        $format = Request::getFormat();

        // remove any string that could create an invalid JSON
        // such as PHP Notice, Warning, logs...
        ob_clean();

        header_remove();

        if($format != 'json'){
            ob_start();
            $data = json_decode($data);
            include_once ('resources/views/'.Request::getPlatform()."/".$format.".php");
            $content = ob_get_clean();
        } else{
            header("Content-type: application/json; charset=utf-8");
            $content = $data;
        }

        // encode your PHP Object or Array into a JSON string.
        // stdClass or array
        $this->content =  $content;
        return $this->content;
    }

}