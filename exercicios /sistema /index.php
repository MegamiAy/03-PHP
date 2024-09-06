<?php
    $autoload = function($class){               /// criar função que vai carregar as classes automaticamente
        include($class.'.php');
    };

    spl_autoload_register($autoload);

    $app = new Application();           //instanciando a classe
    $app->executar();                   //executando a classe

?>
