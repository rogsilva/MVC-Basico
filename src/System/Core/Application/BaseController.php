<?php

namespace System\Core\Controller;

class BaseController
{

    public function model($model)
    {
        try{
            $newModel = "\\App\\Models\\{$model}";
            $object = new $newModel();
            if( !$object )
                throw new \Exception("O Model nao foi encontrado!");
        }catch (\Exception $e){
            die($e->getMessage());
        }
    }

    public function view($view, array $data = [])
    {
        try{
            extract($data, EXTR_OVERWRITE);

            if(file_exists("../app/Views/{$view}.php"))
            {
                require_once "../app/Views/{$view}.php";

            }else{
                throw new \Exception("A View não foi encontrada!");
            }
        }catch (\Exception $e){
            die($e->getMessage());
        }
    }

}