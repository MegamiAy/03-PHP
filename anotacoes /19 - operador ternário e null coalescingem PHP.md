## operador ternário em PHP

### como funciona
verificação mostra(?) resultado caso contrário(:) mostra
+- assim:
if { mostra } else { mostra }

    $nome = "Maria";

    $msg = 'olá '.(isset($nome) ? $nome : 'Visitante');
    // caso o nome exista, mostra o nome, caso não exista mostra Visitante no lugar do nome

    echo $msg; // saida: olá Maria

### null coalescing

    $valor = $_POST['nome'] ?? $_POST['outra_coisa'] ?? 'Nada deu certo :(';
    // se post nome for nulo, tenta pegar o post outra_coisa, mas se o post outra_coisa for nulo também, passa para o próximo com a mensagem que não deu certo
    
    echo $valor; // <- saida: Nada deu certo :(
