<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        //Casting is used to change data types

        $x = 100;
        $y = "Name";
        $z = 12.8;
        $j = "True";



        $x = (String) $x;  //Changed to String
        var_dump($x);

        $y = (int) $Y;  //Changed to int
        var_dump($y);

        $z = (unset) $z; //Changed to NULL
        var_dump($z);


    ?>
</body>
</html>