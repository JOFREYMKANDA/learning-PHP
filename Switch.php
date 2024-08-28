<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $fav_color = "black";

        switch($fav_color){
            case "red":
                echo "My favourite color is $fav_color";
                break;

            case "blue":
                echo "My favourite color is $fav_color";
                break;

            case "orange":
                echo "My favourite color is $fav_color";
                break;

            case "green":
                echo "My favourite color is $fav_color";
                break;

            default:
                echo "Please Enter A Valid Color";
        }



    ?>
</body>
</html>