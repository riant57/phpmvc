<?php
class Controller{
    public function view($view, $data = [])
    {
        require_once '/opt/lampp/htdocs/phpmvc/app/views/'.$view.'.php';
    }

    public function model($model)
    {
        require_once '/opt/lampp/htdocs/phpmvc/app/models/'.$model.'.php';
        return new $model;
    }
    
}
?>