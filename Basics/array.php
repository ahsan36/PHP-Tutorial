<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="array.php" method="post">
        <label>Enter a country</label>
        <input type="text" name="country"><br>

        <input type="submit">
    </form>
</body>
</html>

<?php

// Associative array :- An array made key=>value pair
    $capitals = array("USA"=>"Washington D.C",
                        "Japan"=> "Kyoto",
                        "South Korea"=> "Seoul",
                        "India"=> "New Delhi");
    
    $capital = $capitals[$_POST["country"]];

    echo $capital;
?>