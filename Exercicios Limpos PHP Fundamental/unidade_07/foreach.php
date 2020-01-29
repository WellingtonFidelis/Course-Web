<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        <?php // For Each only works it in the objects
            $salada = array ("Maçã",
                             "Abacati",
                             "Laranja",
                             "Banana",
                             "Tomate",
                             "Limão"); // create an object
            foreach($salada as $fruta) { // loop foreach for each element of the object $fruta
                echo $fruta . "<br>"; //  print
            }
        ?>
    </body>
</html>