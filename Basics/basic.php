<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
        This is my PHP Website
        <?php

        define('PI', 3.14); // Constant
            echo "Hello World";
            echo "<br>";

            $variable1 = 3;
            $variable2 = 4;

            echo $variable1;
            echo "<br>";
            echo $variable2;

            echo "<br>";

            Echo $variable2; // Php is not case sensitive
            echo "<br>";

            echo $variable1 + $variable2;

            // Logical Operator

            // $myVar = (true and true); // true
            // $myVar = (true and false); // false
            // $myVar = (false and true); // false
            $myVar = (false and false); // false
            echo "<br>";
            echo var_dump($myVar); // it checks the type

            echo "<br>";

            echo PI;
        ?>
    </div>
</body>
</html>