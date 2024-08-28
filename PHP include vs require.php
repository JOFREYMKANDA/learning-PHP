<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Include vs Require</title>
</head>
<body>
    <?php
        //Use include when the page should continue to execute even if the document is not found
        include 'fo complete.php';
        echo "<br>";
        echo "The page still continued to execute" . "<br>";

        //Use require when the document is necessary and the page should stop if the document is not found
        require 'fo complete.php';
        echo "The page won't continue" . "<br>";
    ?>
</body>
</html>