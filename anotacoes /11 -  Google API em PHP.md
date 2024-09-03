## Google API em PHP

requisições parar outros servidores

### Request de maps JSON

    ...html
    
    <input type="text" name="address"/>                     <- recebe= 1600+Amphitheatre+Parkway+Mountain+View+CA - rua,eetc
    <input type="submit" name="acao" value="Enviar" />

    ... php

    if(isset($_POST['acao'])){
          $url = urlencode($_POST['address']);
          
          $str = file_get_contents('http://maps.googleapis.com/maps/api/geocode/json?address='.$url.'&sensor=false');

          $endereco = jso_decode($str);

          echo $endereco->results->address_components[0]->short_name;
          
    }
    
