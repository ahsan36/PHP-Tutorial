<?php
    include("database.php");
?>

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

        <input type="submit" value="Log in">
    </form>

</body>
</html>

<?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS);
        $password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_SPECIAL_CHARS);

        if(empty($username)){
            echo "Please enter username";
        }else if(empty($password)){
            echo "Please enter password";
        }else{
            $sql = "INSERT INTO users (user, password) VALUES ('$username', '$password')";

            try {
                mysqli_query($conn, $sql);
                echo "You are now registered";
            } catch (mysqli_sql_exception) {
                echo "That username is taken";
            }
        }
    }

    mysqli_close($conn);
?>