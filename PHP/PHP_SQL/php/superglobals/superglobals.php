<?php


//S_GET
if (isset($_GET['name'], $_GET['age'])){
    echo 'Hey there ' . $_GET['name'] . " you are " . $_GET['age'] . " years old!";
} else {
    echo "One of the required variables does not exits";
}

//$_SERVER
echo '<pre>' . print_r($_SERVER, true) . '</pre>';

