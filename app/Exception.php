<?php


namespace App;

use App\Request;
class Exception
{
    public static $fail   = false;
    public static $errors = [
        "parameter_missing" => [400,'%s parameter is missing.'],
        "unexpected_error"  => [500,'Unexpected error encountered : %s'],
        "format_not_support"=> [400,'The %s format is not supporting.'],
        "default"           => [500,'']
    ];

    public static function __callStatic($class, $arguments){
        $data = [
            'error'   => true,
            'class'   => $class,
            'code'    => self::$errors[$arguments[0]][0],
            'message' => sprintf(self::$errors[$arguments[0]][1],$arguments[1])
        ];

        self::$fail = true;
        Request::setFormat('json');
        return json_encode($data);
    }

    public static function fail(){
        return self::$fail;
    }

    public function __invoke($message){

    }
}