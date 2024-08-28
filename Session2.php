<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Session2</title>
</head>
<body>
    <?php
        echo "The logged in user is " . $_SESSION['userName'] . "<br>";
        echo "His favourite color is " . $_SESSION['favColor'] . "<br>";
        
        if (count($_SESSION) > 0) {
            echo "You have a session";
        } else {
            echo "You don't have a session";
        }
    ?>
</body>
</html>