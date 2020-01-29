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
            function retornarDiaria ($salario, $dia, $cotacao) { // function with multi returns
                $real = number_format($salario/$dia,2); // number format is used to format the result of function
                $dolar = number_format(($salario/$dia) * $cotacao,2);
                // to return two values we need to create an array and the variables with elements
                return array($real, $dolar);
            }
        
            $diaria_array =  retornarDiaria(3000,10, 4.1); // call the functction   
            foreach ($diaria_array as $values) {
                echo $values . "<br>";
            }
            /* Or 
                list($resultado_real, $resultado_dolar) = retornarDiaria(3000,10, 4.1);
                echo "Diária em R$ " . $resultado_real . "<br>";
                echo "Diária em US$ " . $resultado_dolar . "<br>";
            */
        
        ?>
    </body>
</html>