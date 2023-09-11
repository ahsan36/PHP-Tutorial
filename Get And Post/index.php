<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- <form action="index.php" method="post">
        <label>username: </label>
        <input type="text" name="username"><br>

        <label>password: </label>
        <input type="text" name="password"><br>

        <input type="submit" value="Log in">
    </form> -->

    <form action="index.php" method="post">
        <label>quantity: </label>
        <input type="text" name="quantity"><br>

        <input type="submit" value="total">
    </form>

</body>
</html>

<?php

    /*GET :- Data is append to the url
            Not Secure
            char limit
            get request can be cached
            better for a search page
    */

    // echo "{$_GET["username"]} <br>";
    // echo "{$_GET["password"]} <br>";

    /*POST :- Data is packaged inside the body of the http
            More Secure
            No data limit
            get request are not cached
            better for submitting credentials
    */

    // echo "{$_POST["username"]} <br>";
    // echo "{$_POST["password"]} <br>";
    
?>

<?php
    $item = "Pizza";
    $price = 5.99;

    $quantity = $_POST["quantity"];

    $total = null;

    $total = $quantity * $price;

    echo "You have ordered {$quantity} x {$item}/s <br>";
    echo "Your total is: \${$total}";
?>