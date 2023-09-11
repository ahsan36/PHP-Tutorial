<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="index.php" method="post">
            <label>username: </label>
            <input type="text" name="username"><br>

            <label>password: </label>
            <input type="text" name="password"><br>

            <input type="submit" name="login" value="Log in">
    </form>
    
</body>
</html>


<?php

    foreach ($_POST as $key => $value) {
        echo "{$key} = {$value} <br> ";
    }

    if(isset($_POST["login"])){
        $username = $_POST["username"];
        $password = $_POST["password"];

        if(empty($username)){
            echo "Username is missing";
        }else if(empty($password)){
            echo "Password is missing";
        }else{
            echo "Hello {$username}"; 
        }
    }
?>

<?php
    // isset() :- Returns true if a variable is declared and not null
    // empty() :- Returns true if a variable is not declared

    // isset()

    // $username = "Ahsan"; 
    // echo isset($username);//true

    // $username = null; 
    // echo isset($username);//false
    
    // If we not declare a variable

    // if(isset($username)){
    //     echo "This variable is set";
    // }else{
    //     echo "This variable is NOT set"; // Print
    // }

    // If we declare a variable and it is null

    // $username = null;

    // if(isset($username)){
    //     echo "This variable is set";
    // }else{
    //     echo "This variable is NOT set"; // Print
    // }

    // If we declare a variable and it is NOT null

    // $username = true;

    // if(isset($username)){
    //     echo "This variable is set"; // Print
    // }else{
    //     echo "This variable is NOT set";
    // }


    // empty()

    // If we not declare a variable


    // if(empty($username)){
    //     echo "This variable is empty"; // Print
    // }else{
    //     echo "This variable is NOT empty";
    // }

    // If we declare a variable and it is null

    // $username = null;

    // if(empty($username)){
    //     echo "This variable is empty"; // Print
    // }else{
    //     echo "This variable is NOT empty";
    // }


    // $username = "Ahsan"; 

    // if(empty($username)){
    //     echo "This variable is empty";
    // }else{
    //     echo "This variable is NOT empty"; // Print
    // }


    // if variable is empty
    // $username = "";

    // if(empty($username)){
    //     echo "This variable is empty";
    // }else{
    //     echo "This variable is NOT empty";  // Print
    // }
?>
