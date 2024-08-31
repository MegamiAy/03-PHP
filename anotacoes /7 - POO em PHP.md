## programação orientada a objeto em PHP

### explicação de OO em um geral

Classe
  - Atributos
  - Métodos

$objeto->método();

Exemplo sem usar PHP:

        Pessoa {
            nome
            idade
            altura

            crescer()
            comer()
            dormir()
        }

Exemplo usando PHP:

          class Pessoa{
              // Classe pessoa

              private $nome = 'Julia';
              private $idade = '23';
              private $altura = '1.75m'

              private function crescer(){echo 
                  'estou crescendo';
              }

              private function comer(){
                echo 'estou comendo';
              }
          }
caso tente usar fora, vai dar erro, pois está tudo privado

&

          class Pessoa{
              // Classe Pessoa

              public $nome = 'Julia';
              public $idade = '23';
              public $altura = '1.75m'

              public function crescer(){
                $this->comer();
                echo 'estou crescendo';
              }

              private function comer(){
                echo 'estou comendo';
              }
          }
caso tente usar fora, vai retornar = estou comendo estou crescendo

### diferença entre private, public e static
- private -> ele é privado, só pode ser utilizado dentro da própria classe
- public -> ele é publico, pode ser utilizado em qualquer lugar
- static -> ela não é acessivel pelo objeto

### como chamar/usar da classe

- instanciando:
- objeto recebe(=) classe
    > $pessoa = new Pessoa;
- usando:
- **->** acessa o método dentro do objeto
    > $pessoa->crescer();

como chamar/usar dentro da classe
- usando:
    > $this->comer();

- usando estatico
    > Pessoa::$var;
    > Pessoa::metodoEstatico();

## Mais

Exemplo.php

         class Exemplo{
              private $var1;
              public $var2;

              public function setVar1($var1){
                  $this->var1 = $var1;
              }

              public function pegaVar1(){
                 return $this->var1;
              }
          
          }

index.php 

          include('Exemplo.php');

          $exemplo = new Exemplo();
          $exemplo->setVar1('Junior');
          echo $exemplo->pegaVar1();

          $exemplo2 = new Exemplo;
          $exemplo2->setVar1('Ana');
          echo $exemplo2->pegaVar1();

saida disso: JuniorAna
