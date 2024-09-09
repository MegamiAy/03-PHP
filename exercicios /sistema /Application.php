<?php
    define('INCLUDE_PATH_FULL','http://127.0.0.1:8080/simples/teste_mvc/views/pages/');

    class Application{

        public function executar(){
            $url = isset($_GET['url']) ? explode('/', $_GET['url']) : array('Home');
            $url = ucfirst($url[0]);
            $url .= "Controller";
            

            if(file_exists('controllers/'.$url.'.php')){
                $className = 'Controllers\\'.$url;
                $controller = new $className();
                $controller->executar();
            } else {
                die("Controlador Inexistente");
            }
        }

    }
?>
