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

### final class
essa classe não pode ser herdada

### herança
é a extensão de outra classe

#### Exemplo de herança: classe filha é uma extensão da classe mãe
vai ocorrer tudo certo, não há erro

		class Mae {

			public function mostraOla(){
				echo 'Mãe';
			}			

		}

		class Filha extends Mae(){
			
			public function mostraTchau(){
				echo 'Filha';
			}

		}


#### Exemplo de final class (que não pode ser extendida):
vai ocorreu um erro, dizendo que a classe pai não  pode herdar a classe filha

		final class Filha {

			public function mostraOla(){
				echo 'Ola mundo';
			}			

		}

		class Pai extends Filha(){
			
			public function mostraTchau(){
				echo 'Tchau mundo';
			}

		}


### protected
acessível a partir de todas as classes no mesmo pacote e a partir de qualquer subclasse em qualquer lugar

### abstract 
pode apenas ser herdada, não pode ser instanciada

		abstract class Teste{

 			public function func1(){
    				echo 'chamando função 1';
			}

			public function func2();
   
		}

		class Principal extends Teste {

			public function func2(){
   				echo 'estou declarando ofc o metodo abstrato';
			}
       
		}

  		$principal = new Principal;
    		$principal->func1();
    		$principal->func2();

assim vai  funcionar...

### interface

index.php

		include('interface1.php');

  		class Teste implement Interface1 {
    			public funtion EscrevaNaTela($par){
       				echo $par;
			}
		}

  		$teste = new Teste;

    		$teste->EscrevaNaTela('Olá Mundo');

interface1.php

		interface Interface1{
  			public funtion EscrevaNaTela($par);
		}

### métodos "mágicos"

#### método construtor
a partir do momento que a classe for instanciada/chamada o método contruct é o primeiro que vai ser buscado, sem precisar ser chamado

Classe.php

		class Classe {
			private $nome;
   			private $idade;
         
			public function __construct($Nome, $Idade){
   				$this->nome = $Nome;
       				$this->idade = $Idade;
			}
   	
		}

  index.php

  		include('Classe.php');
    		$teste = new Classe('Gui', 23);
