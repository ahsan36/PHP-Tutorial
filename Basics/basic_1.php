<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<style>
    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    .container {
        max-width: 80%;
        background-color: rgb(228, 195, 195);
        margin: auto;
        padding: 23px;
    }
</style>
<body>
    
    <div class="container">
        <h1>Let's learn about PHP</h1>
        This is container

        <?php
        $age = 25;

        // Conditional Statement

        if($age > 18){
            echo "You are adult";
        }else if($age == 10){
            echo "You are 10 years old";
        }
        else{
            echo "You are not adult";
        }

        // Array

        $language = array("Java", "Python", "PHP", "C");

        // echo count($language);
        // echo $language[0];

        // Loops 

        // $a = 0;

        // while($a <= 10){
        //     echo "<br> The value of a is : ";
        //     echo $a;
        //     $a++;
        // }

        // Iterating array using while loop
        // $a = 0;

        // while($a < count($language)){
        //     echo "<br> The language is ";
        //     echo $language[$a];
        //     $a++;
        // }

        // Iterating using do while loop

        // $a = 0;

        // do{
        //     echo "<br> The value of a is : ";
        //     echo $a;
        //     $a++;
        // }while($a <= 10);

        // Iterating using for loop
        // for($a = 0; $a<= 10; $a++){
        //     echo "<br> The value of a is : ";
        //     echo $a;
        // }

        // Iterating array using for each loop

        foreach ($language as $value) {
            echo "<br> The language is ";
            echo $value;
        }

        // Function

        function print5(){
            echo "<br> Five";
        }
        
        print5();

        function print_Number($num){
            echo "<br> The number is : ";
            echo $num;
        }

        print_Number(25);
        print_Number(224);
        print_Number(50);
        ?>
    </div>
    
</body>
</html>