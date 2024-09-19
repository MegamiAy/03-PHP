## segurança em PHP
## conexão DB segura
utilizar try para iniciar a conexão, para não acabar vazando os dados do PDO

exemplo:

      try{
          $pdo = new PDO('mysql:host=localhost;dbname=devweb', 'root', '');
          $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);                -> para modo de desenvolvimento
      } catch(Exception $e){
          echo 'Não foi possível conectar! tente novamente mais tarde';
      }

## bloqueando diretórios

.htaccess 
    cod cod

    RewriteEngine On
    #RewriteCond %{SCRIPT_FILENAME} !-f
    #RewriteCond %{SCRIPT_FILENAME} !-d
    #RewriteRule ^(.*)$ index.php?url=$1 [QSA,L]
  
    Options -Indexes                  #<- protege as url dos diretórios

## criptografia

md5 ou sha1

    md5($_POST['senha']);
    sha1($_POST['senha']);

e milhões de outras
