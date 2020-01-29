<?php
    $sorteio = rand(1,60); // variable with a random 1 to 60
    $i = 0; // interator
    $numbers = array();
?>
<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        <?php
            echo $sorteio . "<br>" . "<br>" . "<br>";
        
            while ($i <= 6) { // until interator <= 3
                $sorteio = rand(1,60); //make a random number
                echo $sorteio . " "; // print the number
                $numbers[$i] = $sorteio; // save the random number in the arrar numbers                 
                $j = 0; // restart the interator to verify duplicity
                while ($j <= $i) { // loop to verify if it is iquals numbers
                    if ($numbers[$j] == $numbers[$i]) { // trying
                        $sorteio = rand(1,60); // if it is true make a new random number
                        $numbers[$j] = $sorteio; // and save in the same index
                    }
                    $j = $j + 1; // sum interator or $j ++
                }
                $i = $i + 1; // sum interator or $i ++
            }
        ?>
    </body>
</html> 