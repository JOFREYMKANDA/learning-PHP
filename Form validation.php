<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Validation Form</title>
    <style>
        body{
            font-family: georgia, serif;
        }
        ul{
            list-style-type: none;
            padding: 0;
        }
        li{
            padding-bottom: 15px;
        }
        button{
            width: 100px;
            padding: 10px;
            background-color: orange;
            border-radius: 10px;
        }
    </style>
</head>
<body>
    <h1>PHP Form Validation Example</h1> <br>

    <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>">
        <fieldset>
            <legend>Fill in your details</legend>

            <ul>
                <li>
                    <label for="name">Name</label>
                    <input type="text" id="name" name="name" placeholder="Enter your name">
                </li>
                
                <li>
                    <label for="email">E-mail</label>
                    <input type="email" id="email" name="email" placeholder="E-mail">
                </li>
                <li>
                    <label for="website">Website</label>
                    <input type="text" id="website" name="website" placeholder="Website">
                </li>
                <li>
                    <label for="comments">Comments</label>
                    <textarea name="comments" id="comments" rows="5" cols="40"></textarea>
                </li>
                <li>
                    <label for="gender">Gender</label>
                    <input type="radio" id="gender" name="gender" value="male"> Male
                    <input type="radio" id="gender" name="gender" value="female"> Female
                </li>
                <button type="submit" name="submit">Submit</button>
            </ul>
        </fieldset>
    </form>


        
    <?php
        //PHP VALIDATION

        //Setting all the variables to empty values
        $name = $email = $website = $comments = $gender = "";
        //Creating an if statement that links the variables and the validation function
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $name = validation($_POST['name']);
            $email = validation($_POST['email']);
            $website = validation($_POST['website']);
            $comments = validation($_POST['comments']);
            $gender = validation($_POST['gender']);
        }
        //Creating a function that does all the checking for us
        function validation($data) {
            $data = htmlspecialchars($data);
            $data = trim($data);
            $data = stripslashes($data);
            return $data;
        }
    ?>
</body>
</html>