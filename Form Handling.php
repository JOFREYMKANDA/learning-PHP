<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        ol{
            list-style-type: none;
            padding-left: 0px;
        }
    </style>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
        <fieldset>
        <legend>Login to our website</legend>
            <ol>
                <li>
                    <label>First Name:</label>
                    <input type="text" placeholder="First name" name="firstName">
                </li>
                <li>
                    <label>Second Name</label>
                    <input type="text" placeholder="Second name" name="secondName">
                </li>
            </ol>
            <input type="submit">
            
        </fieldset>    
    </form>

    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $fname = htmlspecialchars($_REQUEST['firstName']);
        }
            if (empty($fname)) {
                echo "Please enter your name";
            }else {
                echo "Welcome $fname";
            }
        
    ?>
</body>
</html>