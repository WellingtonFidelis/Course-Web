<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        <?php
            for ($i = 0; $i <= 6; $i++) {
                echo rand(1,60) . "   ";
            }
            echo "<br>" . "<br>"; 
            for ($i = 0; ; $i++) {
                if ($i == 6) {
                    break; // when we need to leave of the for or loop
                }
                echo rand(1,60) . "   ";
            }
        ?>
    </body>
</html>