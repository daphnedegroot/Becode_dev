<?php

require "security.php";
include "functions.php";

if (isset($_POST['submit1'])){
    echo nickname_generator("Daphne");
}


?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>functions</title>
</head>

<style>
    .container_box {
        display: flex;
        justify-content: center;
    }

    .box {
        display: flex;
        align-items: center;
        width: 200px;
        height: 200px;
    }

    .three {
        display: flex;
        flex-direction: column;
        justify-content: center;
    }

    .three > input {
        margin: 10px 0;
    }
</style>

<body>

<div class="container_box">
    <div class="box one">
        <form action="" method="post">
            <input type="submit" name="submit1" value="Generate object">
        </form>
    </div>
    <div class="box two">
        <input type="submit" name="submit2" value="Revert object">
    </div>
    <div class="box three">
        <input type="text" name="nickname" placeholder="Enter nickname">
        <input type="submit" name="submit3" value="Get a nickname">
    </div>
</div>


</body>
</html>
