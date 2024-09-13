## recursividade, variáveis como funções e callbacks e instanceof em PHP

## recursividade
se for feito

    testes();
    function testes(){
        testes()
    }

vai ficar rodando a func teste() infinitamente. isso se chama recursividade

como faz para chegar no limite disto?

    testes();
    function testes(){
        static $i = 0;
        echo 'Olá chamando a funcao';
        $i++
        if($i < 3){
            testes()
        }
    }

vai exibir o echo 3 vezes

## variáeis como funções

    $func = function($nome){
          echo $nome;
    }

    $func('claudia');

saida: claudia

## instanceof

    class A {
        
    }

    class B {
        
    }

    $a = new A;
    $b = new B;

    if($a instanceof A){
        echo 'a variável "$a" faz referência a classe "A"';
    }

## callback ou clousures

    function executar($a = "um", $b){
          $b($a);
    }

    executar(function($num){
        echo 'Num '.$num;
    });


