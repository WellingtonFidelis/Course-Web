<?php  
    $agenda = array(
        "nome" => "José",
        "sobrenome" => "Silva",
        "salario" => 800.99
    ); // array associative with index of string
?>

<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        <pre>
            <?php
                print_r($agenda); // print all index of the array
            ?>
        </pre>
        
        <p>
            <?php
                echo $agenda[0]; // don't show because the index isn't zero but is the name
            ?>
        </p>
    </body>
</html>