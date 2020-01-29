<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        <?php
            date_default_timezone_set ('Etc/GMT+3'); // to get a corret Time Zone
            $agora = getdate();
            print_r($agora); // print_r is used to show arrays
        ?>
    </body>
</html>