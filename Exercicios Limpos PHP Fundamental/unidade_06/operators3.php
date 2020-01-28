<?php
    $dia = "sábado";
?>
<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        <?php
            if ( $dia == "sábado" || $dia == "domingo") { // operator Or (||)
                echo "Dia de descansar" . "<br>";
            } else {
                echo "Dia de trabalhar" . "<br>";
            }
            
            if ( $dia == "sábado" && $dia == "domingo") { // operator and (&&)
                echo "Dia de descansar" . "<br>";
            } else {
                echo "Dia de trabalhar" . "<br>";
            }
        ?>
    </body>
</html>