<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Date and TIme</title>
</head>
<body>
    <?php
        //Get a date
        echo "Today is " . date("d/m/y"). "<br>";
        echo "Today is " . date("d-m-y"). "<br>";
        echo "Today is " . date("d.m.y"). "<br>";
        echo "Today is " . date("l"). "<br>";

        //Automatic copyright year
        echo "&copy; 2010 -" .  date("Y");
        echo "<br>";

        //Get a time
        echo date("h:i:sa") . "<br>"; //12 hour format
        echo date("H:i:sa") . "<br>"; //24 hour format

        //Get your timeezone
        date_default_timezone_set("Africa/Dar_es_salaam");
        echo "The Current time in this timezone is " . date("h:i:sa");
    ?>
</body>
</html>