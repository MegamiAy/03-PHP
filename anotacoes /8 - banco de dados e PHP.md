## banco de dados e PHP

### exemplo de estrutura de base
para fazer consultas, puxar dados, fazer updates, incrementações e deletar itens é usada a linguagem SQL...

base_tal
  - tabela
      - id - tipo int - chave primária - autoincremento
      - nome
      - desc
      - etc
  - tabela2
      - id - tipo int - chave primária - autoincremento
      - nome
      - etc
   
### conectar o sistema/site a base de dados
a classe nativa do PHP que gerencia banco de dados e puxa todos os dados prontos é o PDO
- host -> localhost... ou 127.0.0.1 (identificador do host)
- dbname -> base_tal (nome da base)
- login do phpmyadmin, etc -> root
- senha da phpmyadmin, etc -> '' (vazia)
  > $pdo = new PDO('mysql:host=localhost;dbname=base_tal','root', '');
