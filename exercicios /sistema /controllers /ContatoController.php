<?php
    namespace Controllers;
    use Views\MainView;

    class ContatoController extends Controller{

        public function __construct(){
            $this->view = new MainView('contato');
        }

    }
?>
