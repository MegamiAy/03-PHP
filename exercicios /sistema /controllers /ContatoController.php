<?php
    namespace Controllers;
    use Views\ContatoView;

    class ContatoController{

        private $view;

        public function __construct(){
            $this->view = new ContatoView('contato');
        }

        public function executar() {
            // echo '<h2>Pág de Contato</h2>';
            $this->view->render();
        }
    }
?>
