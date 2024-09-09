<?php

    namespace Views;
    class MainView{

        private $viewName;
        private $header;
        private $footer;
        // const TITULO = 'Projeto MVC'; 
        public $menuItems = array('Home', 'Contato', 'Sobre');

        public function __construct($viewName, $header = 'header', $footer = 'footer'){
            $this->viewName = $viewName;
            $this->header = $header;
            $this->footer = $footer;
        }

        public function render($arr = array()){
            include('pages/templates/'.$this->header.'.php');
            include('pages/'.$this->viewName.'.php');
            include('pages/templates/'.$this->footer.'.php');
        }
    }

?>
