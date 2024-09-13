## data-hora e spaceship operator em PHP

## data/hora
    $date = DateTime::createFromFormat('d/m/Y', '13/09/2024');
    echo $date->format('Y-m-d');


    date_default_timezone_set('America/Sao_Paulo');
    echo date('d/m/Y'); // <- data do dia
    echo date('d/m/Y H:i:s', time()); // <- dia + hora atual
   
    echo date('d/m/Y H:i:s', strtotime('1999-09-09  05:00:00')); // <- dia + hora definida
    
    echo date('d/m/Y H:i:s', time() + 60*60*24); // <- próx dia/hora

## spaceship operator

