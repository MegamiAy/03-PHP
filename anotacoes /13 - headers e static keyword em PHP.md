## headers e static keyword em PHP

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
