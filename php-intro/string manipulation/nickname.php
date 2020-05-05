<?php

if (isset($_POST['submit'])){

    $username = $_POST['username'];

    if (isset($username)){
        //string reverse
        $str_rev = strrev($username);
        echo $str_rev ."<br>";

        //string uppercase
        $str_up = strtoupper($username);
        echo $str_up ."<br>";

        //reverse name back to original
        $sub = substr($username,0);
        echo $sub ."<br>";

        //add -- to front and back
        $add = "--".$username."--";
        echo $add . "<br>";

        //add x to front
        $add_x = "x " . $username;
        echo $add_x . "<br>";

        //add 2-4 random characters
        $length = rand(2,4);
        $randomString = substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, $length);
        echo $randomString . " " . $username . "<br>";

        //wrap random characters with []

        // capitalize random character of username
        if (strtoupper($username)){
            echo strtolower($username);
        }
    }

}

?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>String manipulation</title>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-lg-6 offset-lg-3">
            <form action="" method="post">
                <h2 class="display-4 text-center">Cool NickName Generator</h2>
                <div class="form-group">
                    <input type="text" name="username" class="form-control" minlength="1">
                </div>
                <input type="submit" name="submit" value="Submit" class="btn btn-sm btn-info btn-block">
            </form>
        </div>
    </div>
</div>



</body>
</html>