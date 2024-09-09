<?php
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
