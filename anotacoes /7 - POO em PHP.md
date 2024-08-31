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
              // Classe pessoa

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

### diferença entre private e public
- private -> ele é privado
- public -> 


como chamar/usar fora da classe

- instanciando:
- objeto recebe(=) classe
    > $pessoa = new Pessoa;
- usando:
- **->** acessa o método dentro do objeto
    > $pessoa->crescer();

como chamar/usar dentro da classe
- usando:
    > $this->comer
