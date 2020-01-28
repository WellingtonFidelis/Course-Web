<?php
    $dia = "segunda";
    $salario = 1000;
    $premio = "1000";
?>
<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        <?php
            if ($salario == $premio) { // comparation of iguality
                echo "Salário é igual a Prémio." . "<br>";
            } else {
                echo "Salário não é igual a Prémio." . "<br>";
            }
        
            if ($salario === $premio) { // comparation of identical
                echo "Salário é idêntico a Prémio." . "<br>";
            } else {
                echo "Salário não é idêntico a Prémio." . "<br>"; // they aren't of the same type
            }
        ?>
    </body>
</html>