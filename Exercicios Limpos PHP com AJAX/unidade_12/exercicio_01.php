<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>PHP com AJAX</title>
    </head>

    <body>

        
        <script src="_js/jquery.js"></script>
        <script>
            let cep = '80210-390';
            $.ajax({
                type: 'GET',
                url: `http://viacep.com.br/ws/${cep}/json`,
                async: false
            }).done( function(data) {
                console.log(data);
            }).fail(function(){
                console.log('Erro na consulta!');
            });
        </script>
    </body>
</html>