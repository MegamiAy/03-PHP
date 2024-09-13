## variáveis globais, externas e sistema de templateem PHP

## var global 
    $marca = "google";
    function teste(){
      global $marca;
      echo $marca;
    }

    teste();
&

    $marca = "google";

    class Teste(){
      global $marca;
      echo $marca;
    }

    new Teste;
    
saida de ambos: google

## variável externa em função

    class Classe1{
        public function index(){
            echo 'Chamado classe 1';
        }
    }

    class Classe2{
        public function index(){
            echo 'Chamando classe 2';
        }

        public function callBack($func){
            $func();
        }       
    }

    $class1 = new Classe1();
    $class2 = new Classe2();

    $class2->callBack(function() use ($class1){
        echo 'ola mundo';
        $class1->index();
    });

## sistema de template

### index.php

    include('Template.php');

    $template = new Template();
    $template->render(['titulo'=>'Meu título', 'nome'=>'pratricia'], 'sobre.phtml');

### Template.php

    class Template{
        public function render($arr, $file){
            $arquivo = file_get_contents('arquivos/'.$file);
            foreach($arr ad $key=> $val){
                $arquivo = str_replace('{'.$key'}', $val, $arquivo);
            }
            echo $arquivo;
        }
    }

### sobre.phtml

    <!DOCTYPE html>
    <html>
        <head>
            <title>{titulo}</title>
        </head>
        <body>
            <h3>Olá {nome}, tudo bem?</h3>
        </body>
    </html>

