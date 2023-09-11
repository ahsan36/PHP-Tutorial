<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        <input type="checkbox" name="pizza" value="Pizza">Pizza <br>
        <input type="checkbox" name="burger" value="Burger">Burger <br>
        <input type="checkbox" name="taco" value="Taco">Taco <br>
        <input type="checkbox" name="hotpizza" value="Hotpizza">Hotpizza <br>

        <input type="submit" name="submit">
    </form>
</body>
</html>

<?php
    if(isset($_POST["submit"])){
        if(isset($_POST["pizza"])){
            echo "You like pizza! <br>";
        }
        if(isset($_POST["burger"])){
            echo "You like burger! <br>";
        }
        if(isset($_POST["taco"])){
            echo "You like taco! <br>";
        }
        if(isset($_POST["hotpizza"])){
            echo "You like hotpizza! <br>";
        }

        // We can do when you not select some thing

        if(empty($_POST["pizza"])){
            echo "You DON'T like pizza! <br>";
        }
        if(empty($_POST["burger"])){
            echo "You DON'T like burger! <br>";
        }
        if(empty($_POST["taco"])){
            echo "You DON'T like taco! <br>";
        }
        if(empty($_POST["hotpizza"])){
            echo "You DON'T like hotpizza! <br>";
        }
    }
?>