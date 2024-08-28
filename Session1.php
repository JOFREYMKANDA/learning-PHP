<?php
    //Starting the session
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Session1</title>
</head>
<body>
    <?php
    //setting session variables
    $_SESSION["userName"] = "JofreyMkanda";
    $_SESSION["favColor"] = "green";
    if (count($_SESSION) > 0) {
        echo "The session variables are set";
    } else {
        echo "The session variables are not set";
    }
    ?>
</body>
</html>