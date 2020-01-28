<?php
 $a = 5;
 $b = 3;
?>

<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        <?php
            echo "O valor de A= " . $a . ", e o valor de B= " . $b . "." . "<br>";
        
         if ($a > $b) {
            echo "'A' é maior que 'B'. " . "<br>";
         } else if ( $a < $b ) {
            echo "'B' é maior que 'A'. " . "<br>";
         } else {
            echo "'A' é a 'B'." . "<br>";
         }
        ?>
    </body>
</html>