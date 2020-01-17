<?php 
    $nome = "Wellington Fidelis";
    $salario = 5000;
?>

<!doctype html>
<html>
    <head>
            <meta charset="UTF-8">
            <title>Curso PHP FUNDAMENTAL</title>
        </head>

        <body>
            <div class="container">
                <?php 
                    /*
                        all variable in PHP starts with $,
                        can't have charecter specials,
                        is case sensitive
                    */ 
                ?>
                <h1><?php echo "PHP Fundamental"?></h1>
                <p></p>
                <h3><?php echo $nome?></h3>
                <h3><?php echo $salario?></h3>

            </div>
    </body>
</html>