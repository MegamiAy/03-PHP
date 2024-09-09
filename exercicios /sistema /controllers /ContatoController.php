<?php
    namespace Controllers;
    use Views\ContatoView;

    class ContatoController extends Controller{

        public function __construct(){
            $this->view = new ContatoView('contato');
        }
        
    }
?>
