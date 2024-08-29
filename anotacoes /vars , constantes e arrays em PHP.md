## var em PHP:

### instanciada dessa forma =
- Cifrão e depois o Nome 
	> $Variavel

### Usando o $_SERVER de exemplo:

- $_SERVER -> Var do PHP
- ['SERVER_NAME'] -> Dado existente dentro da var
	> echo $_SERVER['SERVER_NAME']; -> Mostrará o nome do servidor

- print_r() -> Func do PHP para mostrar todos os dados dentro de uma var
	> print_r($_SERVER); -> Mostrará todas as informações/dados dentro da var

> $nome = 'Junior'; -> Insere um valor/dado dentro da var

> $idade = 24; -> Mesma coisa, porém com um número, sem ''... '' ou "" cria uma string

### uma var também pode receber outra var

> $var2 = 'texto';

> $var1 = $var2;

### tipo boolean do PHP =
- true = 1
- false = 0

## contantes em PHP

### instanciada desta forma:
- define, nome e conteúdo
	> define('NOME', 'Junior');

### Usando constante
- define() -> func do PHP para definir o nome e conteúdo da constante
- 'NOME', -> nome da constante. a vírgula espera um novo parâmetro (o conteúdo)
-  Junior' -> conteúdo da constante
-  define('NOME', 'Junior');
	> echo NOME; -> Mostrará o conteúdo da constante NOME

### detalhe sobre a constante, que a diferencia da variável
- quando um valor/conteúdo é definido ele não pode ser alterado tentando definir outro
- ex:
	> define('NOME', 'Junior');

 	> define('NOME', 'Marcelo');
- o valor inicial da constante é Junior, e não será alterado/substituido pelo Marcelo
- por senso, a constante é criada com o nome dela sendo em maiúsculo

## arrays em PHP
Variáveis com diversas chaves/dados

### instanciada destas formas (todas funcionam):
- array, dados dentro dela, separados por ,
	> array('Junior', 'Marcelo', 'Felipe', 'Kauan');
- variável que vai armazenar a array, recebe/seta(=) array
	> $nome = array('Junior', 'Marcelo', 'Felipe', 'Kauan');
- variável, array( [] )
	> $nome[] = 'Junior';
 
 	> $nome[] = 'Marcelo';
- variável, recebe(=), array
	> $nome = ['Junior', 'Marcelo', 'Felipe', 'Kauan';
- variável, onde guarda, recebe(=), array
	> $info['nome'] = 'Guilherme';

 	> $info['idade'] = 23;


 - as posições da array se iniciam em 0... **ex:** `[0, 1, 2, 3]` = 4 valores
 - para puxar apenas um dado de dentro dessa array, você pega a posição
	> echo $nome['0']; -> Mostrará o nome Junior

 	> echo $nome['2']; -> Mostrará o nome Felipe
- para puxar apenas um dado recebido, se usa o nome de onde foi armazenado dentro da array
	> echo info['nome']; -> Mostrará o nome Guilherme

 	> echo info['idade']; -> Mostrará a idade 23

## concatenação de variáveis em PHP
### usa desta forma =
- texto, ponto e variável
	> 'texto'.$Variavel
- o ponto (.) concatena

  
