<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->
        <title>PHP com AJAX</title>
    </head>

    <body>
        <div id="listagem"></div>
        
        <script src="jquery.js"></script>
        <script>
            $.ajax({
                url:'_xml/produtos.xml'
            }).then(successo, falha);

            function successo (file) {
               //console.log($(file).find('produto').find('nomeproduto').text());
                var elemento;
                elemento = "<ul>";
                $(file).find('produto').each(function(){
                    var nome = $(this).find('nomeproduto').text();
                    elemento += "<li>" + nome + "</li>";
                });
                elemento += "</ul>";
                $('div#listagem').html(elemento);

            }

            function falha () {}
        </script>
    </body>
</html>