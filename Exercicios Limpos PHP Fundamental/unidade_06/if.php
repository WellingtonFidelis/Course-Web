<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        <?php
            $a = 5;
            $b = 3;
            // can be use without {}
            if ($a > $b) echo "'A' é maior que 'B'." . "<br>";
        
            $a = 5;
            $b = 8;            
            if ($a > $b) {
                echo "'A' é maior que 'B'." . "<br>";
            } else {
                echo "'B' é maior que 'A'." . "<br>";
            }
        
            $fumante = true;
            if ($fumante == true) {
                echo "Não poderá entrar." . "<br>";
            } else {
                echo "Acesso permitido." . "<br>";
            }
            $fumante = true;
            if (!$fumante) { // when is booelan type don't need to put == symbol
                echo "Não poderá entrar." . "<br>";
            } else {
                echo "Acesso permitido." . "<br>";
            }
        ?>
    </body>
</html>