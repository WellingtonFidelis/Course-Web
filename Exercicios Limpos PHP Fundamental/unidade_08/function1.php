<?php
    
?>
<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        <?php
            function retornarDiaria () { // function with return
                $salario = 910;
                return number_format($salario/30,2); // number format is used to format the result of function
            }
        
        echo retornarDiaria();    
        
        ?>
    </body>
</html>