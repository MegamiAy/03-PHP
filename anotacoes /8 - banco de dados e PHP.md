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

## INSERT, SELECT, UPDATE e DELETE

Exemplo de tabela que vai ser usado nos outros exemplos

tabela -> cliente 
- Codigo
- Nome
- Sobrenome
- Idade

### INSERT

> INSERT INTO table_name (column1, column2, column3, ...)

> VALUES (value1, value2, value3, ...);

- INSERT INTO cliente (Codigo, Nome, Sobrenome, Idade) VALUES (1, 'Luna', 'Cavall', 24);

### SELECT
> SELECT column ou * (todas colunas)

> FROM table_name

> WHERE condition;

- SELECT * FROM cliente WHERE Codigo="1";

### UPDATE
> UPDATE table_name

> SET column1 = value1, column2 = value2, ...

> WHERE condition;

- UPDATE clientes SET Nome="Luana", Idade="25" WHERE Codigo="1";

### DELETE
> DELETE FROM table_name

> WHERE condition;

- DELETE FROM cliente WHERE Codigo="1";
