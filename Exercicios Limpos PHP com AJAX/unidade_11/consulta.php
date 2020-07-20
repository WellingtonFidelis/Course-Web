<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>PHP com AJAX</title>
        <link href="_css/estilo.css" rel="stylesheet">
    </head>

    <body>
        <main>
            <div id="janela_formulario">
                <form id="pesquisarProdutos">
                    <label for="categorias">Categorias</label>
                    <select id="categorias">
                    </select>
                    <br>
                    <label for="produtos">Produtos</label>
                    <select id="produtos">
                    </select>
                </form>
            </div>
        </main>
        
        
        <script src="_js/jquery.js"></script>
        <script>
            function retornarCategorias (data) {
                //console.log(data);
                var categorias = '';
                $.each( data, function(key, value){
                    //categorias += '<option value="' + value.catergoriaID + '">' + value.nomecategoria + '</option>';
                    categorias += `<option value='${value.categoriaID}'>${value.nomecategoria}</option>`;
                });
                $('#categorias').html(categorias);
            }
            $('#categorias').change(function(e){
                //console.log($(this).val());
                var categoriaID = $(this).val();
                $.ajax({
                    type: 'GET',
                    data: `categoriaID=${categoriaID}`,
                    url: 'http://localhost/php_ajax/unidade_11/retornar_produtos.php',
                    assync: false,
                }).done(function (data) {
                    //console.log($.parseJSON(data));
                    //var list = '<ul>';
                    var products = '';
                    $.each($.parseJSON(data), function (key, value) {
                        //list += `<li>${value.nomeproduto}</li>`;
                        products += `<option value='${value.produtoID}'>${value.nomeproduto}</option>`;
                    });
                    //list += '</ul>';
                    $('#produtos').html(products);
                });
            });
        </script>
        <script src="http://localhost/php_ajax/unidade_11/retornar_categorias.php?callback=retornarCategorias"></script>
    </body>
</html>