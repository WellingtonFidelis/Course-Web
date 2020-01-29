<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        <?php
            $megasena = array (); // create a variable that will give the numbers of lotery
            $i = 1; // interator
        
            while ($i < 7) {
                $sorteio = rand(1,60);
                // the function in_array search a number inside of the an array
                if (!in_array($sorteio, $megasena)) { 
                    $megasena[] = $sorteio;
                    $i ++;
                }
            }
        
            sort($megasena); // to put in order
        ?>
        <pre>
            <?php
                print_r($megasena);
            ?>
        </pre>
    </body>
</html>