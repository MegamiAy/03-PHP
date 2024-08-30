## 4 - manipulação de strings em PHP

### como fazer isto?
algumas das uncionalidades mais usadas

### exemplo:
Vars:

      $conteudo =   'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
                    Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
                    Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum';
      $nome = 'Joao Silva Morais';
 Usos:
 
      // serve para recortar linhas... 
      echo substr($conteudo, 0, 20); -> retorna apenas 20 linhas

      // separa a string
      // explode -> função
      // ' ' -> separador usado na string
      $nomes = explode(' ', $nome); -> vai retornar um array com os indicies = Joao, Silva, Morais

      // juntar um array com um delimitador (no caso, o espaço)
      // implode -> função
      // ' ' -> separador usado na string
      $nomes = implode(' ', $nome); -> vai retornar um array = Joao Silva Morais
