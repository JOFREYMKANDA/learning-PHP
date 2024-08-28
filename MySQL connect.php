<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MySQL Connect</title>
</head>
<body>
    <?php
        $servername = "localhost";
        $username = "mkanda";
        $password = "Blanka2011";

        //create a connection
        $connection = new mysqli ($servername, $username, $password);

        //check a connection
        if ($connection -> connect_error) {
            die ("Connection failed " . $connection -> connect_error);
        } else {
            echo "Connected successfully";
        }
    ?>
</body>
</html>