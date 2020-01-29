<?php
    $i = 0;
?>
<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        <?php
            do {
                $sorteio = rand(1,10);
                echo $sorteio . " ";
                $i ++;                
            } while ($i <= 5);
        ?>
    </body>
</html>