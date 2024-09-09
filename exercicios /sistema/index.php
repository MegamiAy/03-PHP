<?php
    $autoload = function($class){                   // função q vai carregar as classes automaticamente
        $class = str_replace('\\', '/', $class);
        include($class.'.php');  
    };

    spl_autoload_register($autoload);

    $app = new Application();           //instanciando a classe
    $app->executar();                   //executando a classe

?>