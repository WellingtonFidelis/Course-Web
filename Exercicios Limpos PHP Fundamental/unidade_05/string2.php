<?php 
    $_nome = "Curso PHP Fundamental";
?>

<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        
        <?php 
            // strlen - Retorna primeira ocorrencia, quantidade de caracteres
            echo strlen($_nome); . "</br>"; // a tag </br> serve para pular uma linha
            
            // stripos  - Retorna primeira ocorrência da letra procurada
            echo stripos($_nome, "u"); . "</br>";// não é case sensitive

            // strripos - Retorna última ocorrência
            echo strripos($_nome, "u"); . "</br>";
            
            // strtolower - converte para letras minúsculas.
            echo strtolower($_nome); . "</br>";

            // strtoupper - converte para letras maiúsculas.
            echo strupper($_nome, "u"); . "</br>";

            // SUBSTR_COUNT - Conta quantas ocorreram
            // de um texto ou string
            // Faz diferença Maiusculas e minusculas
            echo SUSBSTR-COUNT($_nome, "u"); . "</br>";
        
        // www.php.net/manual/pt_BR
            
        ?>
        
        
    </body>
</html>