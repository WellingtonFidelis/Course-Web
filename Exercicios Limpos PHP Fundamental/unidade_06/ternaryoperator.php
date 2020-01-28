<?php
    $idade = 17;
    $maioridade = null;
?>
<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        <?php
            // ternaru operator decide if the ask is true or false at a one line (if and else).
            $maioridade = ($idade >= 18)? "De maior" : "De menor";
            echo $maioridade;
        ?>
    </body>
</html>