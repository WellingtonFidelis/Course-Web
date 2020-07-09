<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->
        <link rel="stylesheet" href="_css/estilo.css">
        <title>PHP com AJAX</title>
    </head>

    <body>
        <button id="botaoXml">Load.</button>
        <div id="listagem"></div>
        
        <script src="jquery.js"></script>
        <script>
        $('#botaoXml').click(function () {
            $('div#listagem').css('display', 'block');
            loadDatasXml();
        });

        function loadDatasXml () {
            $.ajax({
                url:'_xml/produtos.xml'
            }).then(successo, falha);

            function successo (file) {
               //console.log($(file).find('produto').find('nomeproduto').text());
                var elemento;
                elemento = "<ul>";
                $(file).find('produto').each(function(){
                    var nome = $(this).find('nomeproduto').text();
                    var valorProduto = $(this).find('precounitario').text();
                    elemento += "<li class='nome'>" + nome + "</li>";
                    elemento += "<li class='preco'>" + valorProduto + "</li>";
                });
                elemento += "</ul>";
                $('div#listagem').html(elemento);

            }

            function falha () {}   
        }
        </script>
    </body>
</html>