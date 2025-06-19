<?php
class Controller{
    public function view($view, $data = [])
    {
        require_once '/opt/lampp/htdocs/phpmvc/app/views/'.$view.'.php';
    }
    
}
?>