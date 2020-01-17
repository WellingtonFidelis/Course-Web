<?php 
    $_nome = "Maria Aparecida";
    $_sobrenome = "Apareceu";
    $_nomeCompleto = $_nome . " " . $_sobrenome;
?>

<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        
        <p>
            <?php // formas de usar strings and concatenação
                echo $_nome . " " . $_sobrenome
            ?>
        </p>
        <p> 
            <?php // formas de usar strings and concatenação
                echo $_nomeCompleto
            ?>
        </p>
        
    </body>
</html>