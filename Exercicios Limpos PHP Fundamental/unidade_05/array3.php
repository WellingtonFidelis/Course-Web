<?php  
    $lost = array(23,15,16,8,42,4);
?>

<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>        
        <p>
            <?php
                echo max($lost) . "<br>"; // to print the bigger number of the array lost
                echo min($lost) . "<br>"; // to print the less number of the array lost
                echo array_sum($lost) . "<br>"; // to print the sum of all itens of the array lost
                
                sort($sort); // to put in order decressing
                shuffle($lost); // para embaralhar os elementos
            ?>
        </p>
        
        <pre>
            <?php
                print_r($lost); // print all index of the array
            ?>
        </pre>
        
    </body>
</html>