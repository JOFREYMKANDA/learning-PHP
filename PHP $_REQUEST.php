<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   
      <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>"> 
        First Name: <input type="text" placeholder="Enter first name" name="firstName"> <br>
        Surname Name: <input type="text" placeholder="Enter surname" name="surname"> <br>
        Loan Ammount: <input type="text" placeholder="Ammount" name="ammount"> <br>
        Interest Rate: <input type="text" name="interest_rate" value="15%"> <br>
        <input type="submit">
        
      </form>

        <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST"){
            $fname = htmlspecialchars($_REQUEST['firstName']);
            $surname = htmlspecialchars($_REQUEST['surname']);
            $ammount = htmlspecialchars($_REQUEST['ammount']);
             if (empty($fname)){
                echo "Please enter first name";
             if (empty($surname)){
                echo "Please enter second name";
             if (empty($ammount)){
                echo "Please enter loan ammount";
            }}}else{
                echo "Congratulations $fname $surname, Yoor loan application is complete";
            }}
        ?>
</body>
</html>