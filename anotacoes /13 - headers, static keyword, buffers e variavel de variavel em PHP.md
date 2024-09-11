## headers, static keyword, buffers e variável de variável em PHP

## header
header de redirecionamento

    header('Location: https://etc.com');

header de imagem

    header('Content-type: image/tipo'); 
    readfile(img/img.tipo);          <- de fato vai ler/buscar o arquivo da imagem

## static keyword

    function teste(){
        static $n = 0;
        $n++;
        return $n;
    }

    echo teste();
    echo teste();

saida: 1 2... se fosse sem o static seria assim: 1 1

## buffers
manipular o momento que o servidor envia as informações para o usuário

iniciar
    
    ob_start();

terminar
    
    ob_end_clean();

pegar informações armazenadas no buffer
    
    ob_get_concents();

## variável de variável
se lê da direita para esquerda

    $nome = "exemplo";
    $$nome = "guilherme";

    echo $exemplo;
saida: guilherme

    $Bar = "a";
    $Foo = "Bar";
    $World = "Foo";
    $Hello = "World"
    $a = "Hello";

    echo $a; // retorna Hello
    echo $$a; // retorna World
    echo $$$a; // retorna Foo
    echo $$$$a; // retorna Bar
    echo $$$$$a; // retorna a
