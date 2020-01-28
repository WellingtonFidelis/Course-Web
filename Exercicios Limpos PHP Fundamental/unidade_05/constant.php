<?php
    // commom variables
    $nome = "José";
    $nome = "Maria"; // when i reedit a variable his value will be the last
    
    // constant variables
    // call the function define(), atribui the name between "" and with Upcases
    define("MESES", 12);
?>
<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        <?php
            echo "Meu nome é: " . $nome . "<br>";
            // don't need call the constant with $ only the name of the constant
            echo "Quantidad de meses: " . MESES . "<br>"; 
        ?>
        
    </body>
</html>