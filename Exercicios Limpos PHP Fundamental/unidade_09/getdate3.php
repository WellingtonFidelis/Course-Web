<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        <?php
        //determinate Timezone
            date_default_timezone_set ('Etc/GMT+3'); // to get a corret Time Zone
        // 
            setlocale(LC_TIME, "pt_BR");
            // $agora = getdate();
            // create the elements
            $year = strftime("%Y");
            $month = strftime ('%B');
            $day = strftime('%d');
            $dia_semana = strftime('%A');
        
            // echo $day . "/" . $month . "/" . $year . "<br>";
        
            $hour = strftime ('%H');
            $minute = strftime ('%M');
            $second = strftime ('%S');
        
            echo $dia_semana . ", " . $day . " de " . $month . " de " . $year . " - " . $hour . ":" . $minute . ":" . $second .  "<br>";
        
        ?>
    </body>
</html  >