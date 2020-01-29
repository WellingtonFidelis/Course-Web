<?php 
    if (isset($_POST["formulario"])) { // is congigured the formulario
        $nome = isset($_POST["nome"]) ? $_POST["nome"] : "Undefined";
        $email = isset($_POST["email"]) ? $_POST["email"] : "Undefined";
        echo "Meu nome : " . $nome . "<br>";
        echo "Meu email : " . $email . "<br>";
    }
?>

<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
        <link href="_css/estilo.css" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    </head>

    <body>
        <div class="container-sm">
            <?php if (!isset($_POST["formulario"])) { ?>
            <div class="form-row">
                <!--<form class="col-6" action="destino.php" method="get"> via URL-->
                <form class="form-group col-md-3" action="formulario2.php" method="post">    
                    <label for="nome">Nome Completo</label>
                    <input type="text" name="nome" id="nome">

                    <label for="email">Email</label>
                    <input type="text" name="email" id="email">

                    <input type="submit" name="formulario" value="Enviar Cadastro">
                </form>
            </div> 
            <?php } ?>
        </div>
    </body>
</html>