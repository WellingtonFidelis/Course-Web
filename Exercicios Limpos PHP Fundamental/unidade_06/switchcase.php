<?php
    $dia = "ja";
?>
<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        <?php
            switch ($dia) { // asking...
                case "segunda": echo "Hoje ainda é Segunda =/." . "<br>"; break;
                case "terça": echo "Hoje ainda é Terça." . "<br>"; break;
                case "quarta": echo "Hoje ainda é Quarta." . "<br>"; break;
                case "quinta": echo "Hoje ainda é Quinta." . "<br>"; break;
                case "sexta": echo "Hoje ainda é Sexta. =D" . "<br>"; break;
                case "sabado": echo "Hoje ainda é Sábado." . "<br>"; break;
                case "domingo": echo "Hoje ainda é Domingo." . "<br>"; break;
                default: echo "Só lamento...";    
            }
        ?>
    </body>
</html>