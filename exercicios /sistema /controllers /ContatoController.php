<?php
    namespace Controllers;

use Models\ContatoModel;
use Router;
use Views\MainView;

    class ContatoController extends Controller{

        // public function __construct(){
        //     $this->view = new MainView('contato');
        // }

        public function executar(){             // vai sobrescrever a func executar do Controller.php e adicionar novas validações etc a ela
            if(isset($_POST['acao'])){
                ContatoModel::enviarFormulario();
                echo '<script>location.href="'.INCLUDE_PATH.'contato/sucesso"</script>';
                die();
            }
            
            Router::rota('contato/sucesso', function() {
                $view = new MainView('contato_sucesso');
                $view->render(array('titulo'=>'Contato Sucesso'));
            });
    
            Router::rota('contato', function() {
                $view = new MainView('contato');
                $view->render(array('titulo'=>'Contato'));
            });
            
        }

    }
?>
