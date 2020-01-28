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
            $salad = array("Maçã", "Uva", "Abacate");
        
            // there isn't
            echo "Existe o elemento? " . in_array("Pêra",$salad) . "<br>"; // return true or false if the element there is
            // there is    
            echo "Existe o elemento? " . in_array("Uva",$salad) . "<br>"; // return true or false if the element there is
            
        
            // return the position of that element
            echo "Qual a posição do elemento? " . array_search("Uva",$salad) . "<br>";
            echo "Qual a posição do elemento? " . array_search("Maçã",$salad) . "<br>";
        
            
            
        ?>
    </body>
</html>