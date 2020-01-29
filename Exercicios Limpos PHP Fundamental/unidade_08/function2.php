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
            function retornarDiaria ($salario) { // function with parameters
                return number_format($salario/30,2); // number format is used to format the result of function
            }
        
        $diaria =  retornarDiaria(2100); // call the functction   
        echo $diaria;
        
        ?>
    </body>
</html>