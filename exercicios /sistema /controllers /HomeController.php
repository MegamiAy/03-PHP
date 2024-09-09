<?php
    namespace Controllers;
    use Views\HomeView;

    class HomeController extends Controller{

        public function __construct(){
            $this->view = new HomeView('home');
        }

    }
?>
