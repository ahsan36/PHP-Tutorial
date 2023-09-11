<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        username: <br>
        <input type="text" name="username"><br>
        age: <br>
        <input type="text" name="age"><br>
        email: <br>
        <input type="text" name="email"><br>
        <input type="submit" name="login" value="login">
    </form>
</body>
</html>

<?php

    // Sanitize :- Remove any illegal character from the data

    // if(isset($_POST["login"])){
    //     $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS);

    //     $age = filter_input(INPUT_POST, "age", FILTER_SANITIZE_NUMBER_INT);

    //     $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);

    //     echo "Hello {$username} <br>";
    //     echo "Your age is {$age} <br>";
    //     echo "Your email is {$email}";
    // }

    // Validate :- The script checks for data in respective fields based on the rules set by the developer, 
    //             and returns an error if it does not meet the requirements.

    if(isset($_POST["login"])){
        $age = filter_input(INPUT_POST, "age", FILTER_VALIDATE_INT);
        
        if(empty($age)){
            echo "That number wasn't valid";
        }else{
            echo "Your age is {$age} <br>";
        }
    }
?>