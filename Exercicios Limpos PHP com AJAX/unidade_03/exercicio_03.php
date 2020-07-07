<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>PHP com AJAX</title>
    </head>

    <body>
        <div id="nome"></div>
        <div id="menssagem"></div>

        <script src="jquery.js"></script>
        <script>
            $.ajax({
                url:'nome.php',
            }).done(function(valor) {
                $('div#nome').html(valor);
            }).fail(function(valor){
                $('div#nome').html('Falha no carregamento.');
            }).always(function(){
                $('div#menssagem').html('Envio mesmo se der erro ou não.');
            });
        </script>
    </body>
</html>