## expressões regulares em PHP 

preg_match(patern, subject);

    $teste = "Carolina";

    if(preg_match('/lina/', $teste)){
      echo 'verdade';
    }
saida: verdade

      $teste = "Carolina";

      preg_match('/(.*?)lina/', $teste, $retorno);
      echo $retorno[0];
      echo $retorno[1];
saida: Carolina    Caro

### exemplo real

    <?php
      function cpfValido($cpf){
      // formato cpf 000.000.000-00
          $expressao = '/[0-9]{3}\.[0-9]{3}\.[0-9]{3}-[0-9]{2}/';
          return preg_match($expressao, $cpf);
      }

      if(isset($_POST['acao'])){
          $cpf = $_POST['cpf'];
  
          if(cpfValido($cpf)){
              echo 'O cpf é válido';
          } else {
              echo 'O cpf não é válido':
          }
          
      }
      
    ?>

    <form method="POST">
        <input type="text" name"cpf">
        <input type="submit" name="acao">
    </form>
