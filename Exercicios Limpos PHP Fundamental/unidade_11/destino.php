<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        <pre>
            <?php
                // print_r($_POST); // if in the form it is method="get" then we use $_GET
            ?>
        </pre> 
        
        
        
            <?php
                // ask if $_POST["..."] is configured using isset function
                /* if (isset($_POST["nome"]) && isset($_POST["email"])) {
                    $nome = $_POST["nome"];
                    $email = $_POST["email"];
                } else {
                    $nome = "Undefined";
                    $email = "Undefined";
                }*/ 
        
                // using ternary operator
                $nome = isset($_POST["nome"]) ? $_POST["nome"] : "Undefined";
                $email = isset($_POST["email"]) ? $_POST["email"] : "Undefined";
                
                // $nome = $_POST["nome"];
                // $email = $_POST["email"];
                echo "Meu nome : " . $nome . "<br>";
                echo "Meu email : " . $email . "<br>";
            ?>
        
    </body>
</html>