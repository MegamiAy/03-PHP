## variáveis globais e sistema de templateem PHP

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
