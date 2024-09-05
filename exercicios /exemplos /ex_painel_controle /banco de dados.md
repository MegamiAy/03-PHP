### estrutura
    projeto
    - tb_equipe
        - id
        - Nome
        - Descricao
    - tb_sobre
        - id
        - Sobre

## banco: projeto

## tabelas: 
<div style="display:flex;">
<h3>tb_sobre</h3>
  <table>
    <tr>
      <td>id</td>
      <td>INT</td>
      <td>11</td>
      <td>PRIMARY</td>
      <td>A.I</td>
    </tr>
    <tr>
      <td>Sobre</td>
      <td>VARCHAR/td>
      <td>255</td>
      <td></td>
      <td></td>
    </tr>
  </table>

<h3>conteudo tb_sobre</h3>
  <table>
    <tr>
      <th>id</th>
      <th>Sobre</th>
    </tr>
    <tr>
      <td>1</td>
      <td>Lorem ipsum1</td>
    </tr>
    <tr>
      <td>2</td>
      <td>Lorem ipsum2</td>
    </tr>
  </table>
</div>

#

<div style="display:flex;">
<h3>tb_equipe</h3>
  <table>
    <tr>
      <td>id</td>
      <td>INT</td>
      <td>11</td>
      <td>PRIMARY</td>
      <td>A.I</td>
    </tr>
    <tr>
      <td>Nome</td>
      <td>VARCHAR</td>
      <td>100</td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <td>Descricao</td>
      <td>TEXT</td>
      <td>255</td>
      <td></td>
      <td></td>
    </tr>
  </table>

<h3>conteudo tb_equipe</h3>
  <table>
    <tr>
      <th>id</th>
      <th>Nome</th>
      <th>Descricao</th>
    </tr>
    <tr>
      <td>1</td>
      <td>Junior Bergavari</td>
      <td>Lorem ipsum1</td>
    </tr>
    <tr>
      <td>1</td>
      <td>Victor Foxy</td>
      <td>Lorem ipsum2</td>
    </tr>
  </table>
</div>

### Criando com SQL

    CREATE TABLE tb_sobre (
        id int PRIMARY KEY AUTO_INCREMENT,
        Sobre varchar(255)
    );

    CREATE TABLE tb_equipe (
        id int PRIMARY KEY AUTO_INCREMENT,
        Nome varchar(100),
        Descricao varchar(255)
    );

### Inserindo conteúdos com SQL

    INSERT INTO tb_sobre (Sobre)
    VALUES ("Lorem ipsum1");
    
    INSERT INTO tb_sobre (Sobre)
    VALUES ("Lorem ipsum2");

    INSERT INTO tb_equipe (Nome, Descricao)
    VALUES ("Junior Bergavari", "Lorem ipsum2");
    
    INSERT INTO tb_equipe (Nome, Descricao)
    VALUES ("Victor Foxy", "Lorem ipsum2");
