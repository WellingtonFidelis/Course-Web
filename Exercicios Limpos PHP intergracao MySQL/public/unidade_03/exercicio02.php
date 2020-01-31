<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        <?php
            include("pagina1.php"); // if has an error show a content and erro
            echo "<br>";
            include("pagina2.php");
            echo "<br>";
            // require("pagina3.php"); // if has an error show a fatal erro
            echo "<br>";
            include_once("pagina1.php"); // if i try to put the same include he doen't work it.
            echo "<br>";
            include_once("pagina1.php");
        
            require_once("pagina1.php"); // if i try to put the same include he doen't work it.
            echo "<br>";
            require_once("pagina1.php");
        ?>
    </body>
</html>