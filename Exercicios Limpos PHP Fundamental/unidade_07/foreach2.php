<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        <?php
            $agenda = array ( // init an array associative
                "nome" => "José",
                "sobrenome" => "Silva",
                "salario" => 1000,
                "UF" => "São Paulo"
            );
            foreach ($agenda as $atributo => $valor) { // array as attributes and his values
                echo $atributo . " : " . $valor . "<br>"; // print
            }
        ?>
    </body>
</html>