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
            // null is diferent of the empty
            
            // if it is empty return 1 else return blank()
            echo "A variável está vazia? " . empty($nome) . "<br>"; //true        
            echo "A variável está vazia? " . empty($endereco) . "<br>"; //true
            echo "A variável está vazia? " . empty($sign) . "<br>"; //false
        ?>
    </body>
</html>