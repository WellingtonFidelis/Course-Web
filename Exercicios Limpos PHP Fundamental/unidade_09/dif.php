<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        <?php
            $date1 = new DateTime ('2020-01-28');
            $date2 = new DateTime ('2020-01-01');
            $diff_date = $date1->diff($date2);
            // echo $diff_date; it is not varible, is an array
        ?>
        <pre>
            <?php
                print_r($diff_date);
            ?>
            <p></p>
        </pre>
        <pre>
            <?php
                print_r('Diffence days: ' . $diff_date->format('%a') . "<br>" ); // difference betwenn days               
                print_r('Diffence months: ' . $diff_date->format('%m') . "<br>"); // months difference
                print_r('Diffence months: ' . $diff_date->format('%y') . "<br>"); // year difference
                print_r('Diffence days: ' . $diff_date->format('%r%a') . "<br>" ); // difference betwenn days 
            ?>
        </pre>
    </body>
</html>