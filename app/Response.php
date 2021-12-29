<?php


namespace App;

class Response
{
    private $view = null;
    public function __construct(View $view){
        $this->view = $view;
    }

    /**
     * Eğer response içeriği ile alkalı bir ekleme yapılmak isteniyorsa bu fonksiyon içinde gerçekleştirilebilir.
     */
    public function setContent(){
        // this will clean up any previously added headers, to start clean
        http_response_code(200);
    }

    public function __destruct(){
        echo $this->view->content;
    }
}