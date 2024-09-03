## JSON no PHP.md

Ajax + JSON

    $(function(){
        $.ajax({
             url: 'request.php',
             dataType: 'json'
        }).done(function(data){
              console.log(data);
        })
    })
