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
            $agora = getdate();
            // create the elements
            $year = $agora["year"];
            $month = $agora["month"]; // or $month = $agora["mon"];
            $day = $agora["mday"];
        
            // echo $day . "/" . $month . "/" . $year . "<br>";
        
            $hour = $agora["hours"];
            $minute = $agora["minutes"];
            $second = $agora["seconds"];
        
            echo $day . "/" . $month . "/" . $year . " - " . $hour . ":" . $minute . ":" . $second .  "<br>";
        
        ?>
    </body>
</html>