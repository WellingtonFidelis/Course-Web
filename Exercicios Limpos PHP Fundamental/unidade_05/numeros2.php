<?php
    $salario = 800;
    $gasolina = 2.7985421;
    $nome = "Tom";
?>

<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        
        
        <?php
            // testar se é numérica
            echo "O $salario é um número?" . "   -> " . is_numeric($salario) . "</br>";
            echo "O $gasolina é um número?" . "   -> " . is_numeric($gasolina) . "</br>";
            //quando não é número não aparecerá nada na tela.
            echo "O $nome é um número?" . "   -> " . is_numeric($nome) . "</br>""</br>";
        
            // testar se é inteiro
            echo "O $salario é um inteiro?" . "   -> " . is_int($salario) . "</br>";
            echo "O $gasolina é um inteiro?" . "   -> " . is_int($gasolina) . "</br>""</br>";
            
            // testar se é float
            echo "O $salario é um float?" . "   -> " . is_float($salario) . "</br>";
            echo "O $gasolina é um float?" . "   -> " . is_float($gasolina) . "</br>""</br>";
        
            // arredondar o número
            echo round($gasolina, 1) . "</br>"; // arredondar para uma casa
            echo floor($gasolina) . "</br>"; // arredondar para baixo
            echo ceil($gasolina) . "</br>"; // arredondar para cima
            
        ?>
        
        
    </body>
</html>