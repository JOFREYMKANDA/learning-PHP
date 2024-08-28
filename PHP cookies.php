<?php
        $cookieName = "Admin";
        $cookieValue = "Jofrey Mkanda";
        setcookie ($cookieName, $cookieValue, time() + (86400 * 30), "/");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Cookies</title>
</head>
<body>
    <?php
        if (!isset($_COOKIE["cookieName"])) {
            echo "Cookie named " . $cookieName . " is not set";
        }else {
            echo "Cookie " . $cookieName . " is set";
            echo "The value is " . $_COOKIE["cookieName"];
        }
        echo "<br><br>";

        //checking if the cookie is enabled
        if (count($_COOKIE) > 0) {
            echo "cookies enabled";
        }else {
            echo "cookies disabled";
        }
    ?>
</body>
</html>