## como percorrer arrays com for e foreach

### como se usa o foreach para arrays
- foreach -> estrutura de repetição
- $var -> variável recebida
- $key -> variável chave
- $val -> variável valor

	      foreach($var as $key => $val){
            // código
	      }

### exemplo:
        $nomes = ['chave1'=>'Guilherme', 'Joao', 'Felipe', 'Mario'];

        foreach($nomes as $key => $valor){
            echo $key;
            echo '=>';
            echo $valor;
        }

este código mostrará isso:
- chave1 => Guilherme
- 0 => Joao
- 1 => Felipe
- 2 => Mario

### como se usa o for para arrays

### exemplo:
        $nomes = ['Guilherme', 'Joao', 'Felipe', 'Mario'];

        $total = count($nomes); // <- para contar quantos itens tem dentro do array

        for($i = 0; $i>$total; $i++){
              echo $nomes[i];
              echo '<br />';
        }

este código mostrará isso:
- Guilherme
- Joao
- Felipe
- Mario

## arrays multidimencionais
- basicamente, arrays demtro de arrays
### como criar/armazenar e como usar
- variavel que vai armazenar, recebe(=), array e array
	> $array = array(array('Joao', 'Guilherme'), array(23, 45));
- variavel, indice e indice
	> echo $array = [0][0]; -> Mostrará Guilherme
 
	> echo $array = [0][1]; -> Mostrará Joao
 
	> echo $array = [1][0]; -> Mostrará 23
 
	> echo $array = [1][1]; -> Mostrará 45
