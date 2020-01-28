<?php
    $nome = null;
    $endereco = "";
?>

<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        <?php
            // if it is null return 1 else return blank()
            echo "A variável é null? " . is_null($nome) . "<br>";
        
            echo "A variável é null? " . is_null($endereco) . "<br>";
        ?>
    </body>
</html>