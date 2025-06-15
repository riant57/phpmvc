<?php
class App{

    protected $controller = "Home";
    protected $method = "index";
    protected $params = [];

    public function __construct(){
        // var_dump($_GET);
        $url = $this->parseURL();

        // controller
        // file_exists('../app/controller/'.$url[0].'.php'
        if (isset($url[0])){
            if (file_exists('/opt/lampp/htdocs/phpmvc/app/controllers/'.$url[0].'.php')){
                //echo "file ada";
                $this->controller =$url[0];
                unset($url[0]);
            }
        }
        //require_once '../app/controllers/' .$this->controller. '.php';
        require_once '/opt/lampp/htdocs/phpmvc/app/controllers/' .$this->controller. '.php';
        $this->controller = new $this->controller;

        // method
        if (isset($url[1])){
            if(method_exists($this->controller, $url[1])){
                $this->method = $url[1];
                unset($url[1]);
            }
        }

        // params
        if(!empty($url)){
            //var_dump($url);
            $this->params = array_values($url);
        }
        //unset($url[0]);
        //unset($url[1]);
        //var_dump($url);

        // Jalankan controller & method, serta kirimkan params jika ada

        call_user_func_array([$this->controller, $this->method], $this->params);
    }

    public function parseURL(){
        if(isset($_GET['url'])){
            $url = rtrim($_GET['url'], '/');
            $url = filter_var($url, FILTER_SANITIZE_URL);
            $url = explode('/', $url);
            return $url;
        }
    }

}

?>
