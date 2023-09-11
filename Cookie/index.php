<?php
    /**
     * Cookie :- Small piece of information which is stored at client browser.
     */

     setcookie("fav_food", "Pizza", time() + (86400 * 2), "/"); //expire after 2 days
     setcookie("fav_drink", "Coffee", time() + (86400 * 3), "/"); //expire after 3 days
     setcookie("fav_dessert", "Ice Cream", time() + (86400 * 4), "/"); //expire after 4 days
    //  setcookie("fav_food", "Pizza", time() - 0, "/");

    // foreach ($_COOKIE as $key => $value) {
    //     echo "{$key} = {$value} <br>";
    // }

    // setcookie("fav_food", "Pizza", time() + (86400 * 2), "/"); //expire after 2 days

    // if(isset($_COOKIE["fav_food"])){
    //     echo "Buy some {$_COOKIE["fav_food"]} !!!"; // Print
    // }else{
    //     echo "I don't kno your favorite food";
    // }

    setcookie("fav_food", "Pizza", time() - 0, "/"); //expire after 2 days

    if(isset($_COOKIE["fav_food"])){
        echo "Buy some {$_COOKIE["fav_food"]} !!!";
    }else{
        echo "I don't know your favorite food"; // Print
    }
?>