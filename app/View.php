<?php


namespace App;

use App\Exception;
class View
{
    public $content = null;

    public function __construct($data){
        $this->render($data);
    }

    private function render($data){
        try{
            // Getting file format
            $format = Request::getFormat();

            if(!$format){
                // will showing error response
                $data   = Exception::View('parameter_missing','Format');
                $format = Request::getFormat();
            }

            // remove any string that could create an invalid JSON
            // such as PHP Notice, Warning, logs...
            ob_clean();

            header_remove();

            if($format != 'json'){
                ob_start();
                $data = json_decode($data);
                if(file_exists('resources/views/'.Request::getPlatform()."/".$format.".php")){
                    include_once ('resources/views/'.Request::getPlatform()."/".$format.".php");
                    $content = ob_get_clean();
                } else{
                    header("Content-type: application/json; charset=utf-8");
                    $content   = Exception::View('format_not_support',$format);
                }
            } else{
                header("Content-type: application/json; charset=utf-8");
                $content = $data;
            }

            // encode your PHP Object or Array into a JSON string.
            // stdClass or array
            $this->content =  $content;
            return $this->content;
        } catch (\Exception $e){
            return Exception::View('unexpected_error',$e->getMessage()." - ".$e->getLine());
        }
    }

}