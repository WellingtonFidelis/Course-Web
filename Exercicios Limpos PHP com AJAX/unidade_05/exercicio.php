<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>PHP com AJAX</title>
        <link href="_css/estilo.css" rel="stylesheet">
    </head>

    <body>
        <button id="botao" class="btn btn-primary">Load JSON.</button>
        <div id="listagem"></div>
        <script src="jquery.js"></script>
        <script>
            $('button#botao').click(function () {
                $('div#listagem').css('display', 'block');
                loadDatasJSON();
            });
            function loadDatasJSON () {
                $.getJSON('_json/produtos.json', function (data) {
                var element;
                element = "<ul>";
                $.each(data, function(index, value) {
                    // get value of product
                    //console.log(value.nomeproduto);
                    element += "<li class='nome'>" + value.nomeproduto + "</li>";
                    element += "<li class='preco'>" + value.precounitario + "</li>";
                });
                element += "</ul>";

                $('div#listagem').html(element);
            } );
            }
        </script>
    </body>
</html>