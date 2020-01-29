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
            function retornarDiaria ($salario, $dia) { // function with multi parameters
                return number_format($salario/$dia,2); // number format is used to format the result of function
            }
        
            $diaria =  retornarDiaria(3000,10); // call the functction   
            echo $diaria;        
        ?>
    </body>
</html>