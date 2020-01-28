<?php
    $fumante = true; // variable of type boolean, ture or false
?>
<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        <?php
            // if it is true return 1, if it is false return blank()
            echo "É fumante? " . $fumante . "<br>"; 
            
            // if it is boolean return 1, else return blank()
            echo "É do tipo boolean? " . is_bool($fumante);
        ?>        
    </body>
</html>