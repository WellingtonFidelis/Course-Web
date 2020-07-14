<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>PHP com AJAX</title>

        <!-- chamada da função -->
        <script>
            function retornarProdutos (data) {
                // all products
                //console.log(data);
                // only one product
                //console.log(data[0]);
                // get only one attribute of product
                console.log(data[0].nomeproduto);
            } 
        </script>
     
    </head>

    <body>
        <!-- leitura de arquivo externo -->
        <script src="http://localhost/php_ajax/unidade_07/gerar_json.php?callback=retornarProdutos"></script>

    </body>
</html>