<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        //  $_SERVER['']; Is a PHP super global variable that holds that holds information about headers paths and script locations
        
        echo $_SERVER ['HTTP_ACCEPT'];
        echo $_SERVER ['PHP_SELF'];
        echo $_SERVER ['SERVER_NAME'];
        echo $_SERVER ['HTTP_HOST'];



    ?>
</body>
</html>