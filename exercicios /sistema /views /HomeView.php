<?php
    namespace Views;
    class HomeView{

        private $viewName;

        public function __construct($viewName){
            $this->viewName = $viewName;
        }

        public function render(){
            include('pages/'.$this->viewName.'.php');
        }
    }
?>
