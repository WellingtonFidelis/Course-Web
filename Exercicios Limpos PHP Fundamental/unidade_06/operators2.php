<?php
    $fumante = true;
?>
<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        <?php
            if ($fumante) { // or ($fumante == true)
                echo "Você é fumante" . "<br>";
            } else {
                echo "Você não é fumante" . "<br>";
            }
        
            if (!$fumante) { // or ($fumante != true)
                echo "Você não é fumante" . "<br>";
            } else {
                echo "Você é fumante" . "<br>";
            }
        ?>
    </body>
</html>