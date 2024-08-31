## programação orientada a objeto em PHP

### explicação de OO em um geral

Objeto
  - Atributos
  - Métodos
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
              // Objeto pessoa

              private $nome = 'Julia';
              private $idade = '23';
              private $altura = '1.75m'

              private function crescer(){
                // cod
              }

              private function comer(){
                // cod
              }
          }
&

          class Pessoa{
              // Objeto pessoa

              public $nome = 'Julia';
              public $idade = '23';
              public $altura = '1.75m'

              public function crescer(){
                // cod
              }

              public function comer(){
                // cod
              }
          }

### diferença entre private e public

-
