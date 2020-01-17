<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        <div class="container">
            <h1>
                <p>"Minha Primeira página!"</p> <!-- sem php-->
                <?php echo "Minha Primeira página!" ?> <!-- com php-->                
            </h1>
            <h3> <?php echo "Wellington Fidelis" ?> </h3>
            <p><?php echo 2*2 ?></p> <!-- Cálculo hard code com php-->
            <p>
                <?php 
                    echo "Testando comentários no PHP"
                    // esse é um comentário da linguagem PHP.
                    /*
                        ou esse comentário para mais de uma linha, similar ao Java.
                        
                        all variable in PHP starts with $, can't have charecter specials,
                        is case sensitive
                    */    
    
                ?>
            </p>
            
        </div>
    </body>
</html>
