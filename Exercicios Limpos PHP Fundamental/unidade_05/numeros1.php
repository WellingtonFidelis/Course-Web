<?php 
    $salario = 800;
    $meses   = 3;
?>

<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        <?php 
            // Multiplicacao e Divisao
            echo "Trimestre: " . $salario * $meses . "</br>";
            echo "Quinzena: " . $salario * $meses . "</br>";
        
            // Exponencial
            echo "Exponencial: " . pow(8,2) . "</br>";
        
            // Raiz Quadrada
            echo "Raiz quadrada: " . sqrt($salario) . "</br>";
        
            // Randômico Generica
            echo "Random: " . rand() . "</br>"; // sem intervalo
        
            // Randômico entre um intervalo
            echo "Random: " . rand(1,10) . "</br>"; // com intervalo de 1 a 10    
        
            // Valor absoluto
            echo "Absoluto: " . abs(-10) . "</br>"; // like Math modulo
            
        ?>
    </body>
</html>