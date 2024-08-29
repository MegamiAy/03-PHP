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

### concatenação de variáveis
desta forma =
- texto, ponto e variável
	> 'texto'.$Variavel
- o ponto (.) concatena
