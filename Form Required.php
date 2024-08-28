<!DOCTYPE HTML>  
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PHP Form Required</title>
        <style>
        .error {
            color: #FF0000;
        }
        body{
            font-family: georgia, serif;
        }
        .submit{
            width: 100px;
            padding: 10px;
            background-color: orange;
            border-radius: 10px;
        }
        .error{
            color: red;
        }
        </style>
    </head>
    <body>  
        <?php
            // define variables and set to empty values
            $nameErr = $emailErr = $genderErr = $websiteErr = "";
            $name = $email = $gender = $comment = $website = "";

            if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (empty($_POST["name"])) {
                $nameErr = "Name is required";
            } else {
                $name = test_input($_POST["name"]);
                //Checking if name only contains letters and whitespaces
                if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
                    $nameErr = "Only letters and white space allowed";
                }
            }
            
            if (empty($_POST["email"])) {
                $emailErr = "Email is required";
            } else {
                $email = test_input($_POST["email"]);
                //Cheking if e-mail address is well formed
                if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    $emailErr = "Invalid email format";
                }
            }
                
            if (empty($_POST["website"])) {
                $website = "";
            } else {
                $website = test_input($_POST["website"]);
                //Cheking if URL syntax is valid
                if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
                    $websiteErr = "Invalid URL";
                }
            }

            if (empty($_POST["comment"])) {
                $comment = "";
            } else {
                $comment = test_input($_POST["comment"]);
            }

            if (empty($_POST["gender"])) {
                $genderErr = "Gender is required";
            } else {
                $gender = test_input($_POST["gender"]);
            }
            }

            function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
            }
        ?>

        <h2>PHP Form Validation Example</h2>
        <fieldset name="Fill This Form">
        <p><span class="error">* required field</span></p>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
            <label>Name:</label>
            <input type="text" name="name" placeholder="Enter your name" value="">
            <span class="error">* <?php echo $nameErr;?></span>
            <br><br>

            <label>E-mail:</label> 
            <input type="text" name="email" placeholder="Enter E-mail">
            <span class="error">* <?php echo $emailErr;?></span>
            <br><br>

            <label>Website:</label> 
            <input type="text" name="website" placeholder="www.example.com">
            <span class="error"><?php echo $websiteErr;?></span>
            <br><br>

            <label>Comment:</label> 
            <textarea name="comment" rows="5" cols="40" placeholder="Comment here"></textarea>
            <br><br>

            <label>Gender:</label>
            <input type="radio" name="gender" value="male">Male
            <input type="radio" name="gender" value="female">Female
            <span class="error">* <?php echo $genderErr;?></span>
            <br><br>

            <input class="submit" type="submit" name="submit" value="Submit">  
        </form>
        </fieldset>
        

        <?php
        echo "<h2>Your Input:</h2>";
        if ($_SERVER["REQUEST_METHOD"] == "POST" && !$nameErr && !$emailErr && !$websiteErr && !$genderErr) {
            echo "Welcome " . $_POST["name"] . "<br>";
            echo "We will send you a gift at " . $_POST["email"] . "<br>";
            echo "You are a " . $_POST["gender"] . "<br>";
        }
        ?>
    </body>
</html>