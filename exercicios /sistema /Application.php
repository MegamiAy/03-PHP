<?php
    class Application {

        public function executar(){
            $url = isset($_GET['url']) ? explode('/',$_GET['url'])[0] : 'Home';
            $url = ucfirst($url);
            $url."Controller";

            if(file_exists('controllers/'.$url.'.php')){
                $className = 'controllers\\'.$url;
                $controller = new $className();
                $controller->executar();
            } else {
                die("Controlador Inexistente");
            }
        }

    }
?>
