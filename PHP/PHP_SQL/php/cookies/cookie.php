<?php
/*
 // Setting a single cookie
setcookie("language", "nl", time()+3600);

if (isset($_COOKIE['language'])){
    $cookie_var = $_COOKIE['language'];
    echo "cookie_value: " .$cookie_var;
} else {
    echo "Cookie does not exist";
}

setcookie("language", "nl", time()-3600);
*/

//Setting a multiple cookie
setcookie("myarray[1]", "Monkey");
setcookie("myarray[2]", "Nut");
setcookie("myarray[3]", "Banana");

if (isset($_COOKIE['myarray'])){
    foreach ($_COOKIE['myarray'] as $cookie => $value){
        echo $cookie . " : " . $value . "<br>";
    }
}


//Setting multiple cookie with explode()
setcookie("multicookie", "Monkey;Nut;Banana;Orange");

if (isset($_COOKIE['multicookie'])){
    $cookie_vars = explode(";", $_COOKIE['multicookie']);
    print_r($cookie_vars);
}