<?php
    namespace Controllers;
    use Views\MainView;

    class ContatoController extends Controller{

        public function __construct(){
            $this->view = new MainView('contato');
        }

        public function executar(){             // vai sobrescrever a func executar do Controller.php
            $this->view->render(array('titulo'=>'Contato'));
        }

    }
?>
