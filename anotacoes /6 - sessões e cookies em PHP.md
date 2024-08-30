## sessões e cookies em PHP

Sessão -> valor armazenado em uma variável, que só vai ser redefinida quando o navegador for fechado

Cookie -> valor armazenado em uma variável, que tem um tempo definido para ficar armazenado

### usando sessões
- para iniciar a sessão
      > session_start();

- para destruir a sessão
      > session_destroy();

- definindo valores da sessão
      > $_SESSION['nome'] = 'Laiz';

- declarando um dado da sessão
      > $_SESSION['nome'];

- retirar a definição da sessão
      > unset($_SESSION['nome']);

### usando cookies
- para setar um cookie
  > setcookie('');

  > setcookie('nome', 'Laiz', time() + (60*60*24), '/';
  
  > setar o cookie, nome do cookie, valor, tempo definido para expirar e o caminho da pasta

- para destruir ou deletar o cookie
  
  > setcookie('nome', 'Laiz', time() - (60*60*24), '/';
  
  > reverter o valor, como se setasse novamente

- declarando um cookie
      > $_COOKIE['nome'];
