<?php
    $nome = null;
    $endereco = "";
    $sign = "Virgem";
?>

<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        <?php
            // test if the variable is set or not
            echo "A variável está configurada? " . isset($nome) . "<br>"; //false        
            echo "A variável está configurada? " . isset($endereco) . "<br>"; //true
            echo "A variável está configurada? " . isset($sign) . "<br>"; //true
        ?>
    </body>
</html>