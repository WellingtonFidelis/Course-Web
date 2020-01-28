<?php
    $salad = array ("Maça", "Abacate", "laranja"); // array hard coded
?>

<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        <?php
            echo $salad[0] . "<br>"; //imprimindo a 1º posição do array
            echo $salad[1] . "<br>"; //imprimindo a 2º posição do array
            echo $salad[2] . "<br>"; //imprimindo a 3º posição do array
        
            echo count($salad) . "<br>"; // return how much index the array have.
        
            $salad[] = "kiwi"; // to put a new item in the array.
        
            echo count($salad) . "<br>"; // return how much index the array have.
        
                
        
        ?>
        <pre>
            <?php 
                print_r($salad); // test to print the contents of the array
            ?>
        </pre>
        
    </body>
</html>