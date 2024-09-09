<?php

    namespace Views;
    class ContatoView{

        private $fileName;

        public function __construct($fileName){
            $this->fileName = $fileName;
        }

        public function render(){
            include('pages/'.$this->fileName.'.php');
        }
    }

?>
