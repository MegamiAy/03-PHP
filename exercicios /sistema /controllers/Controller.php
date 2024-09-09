<?php 

    namespace Controllers;

    class Controller{

        protected $view;
        protected $model;

        public function executar(){
            $this->view->render();
        }

    }

?>