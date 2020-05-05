<?php

$usr = "daphnedegroot";
$pass = "Welkom001";


if (isset($_POST['login'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    if (!empty($username) || !empty($password)){
        if ($username === $usr && $password === $pass){
            echo "Hello " . $username;
        } else {
            echo "Wrong password or username";
        }
    } else {
        echo "Fields cannot be empty";
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
    <title>Login</title>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-lg-6 offset-lg-3">
            <h2 class="display-4 text-center mt-3">Login</h2>
            <form action="" method="post">
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" name="username" id="username" class="form-control">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" class="form-control">
                </div>
                <input type="submit" name="login" value="login" class="btn btn-sm btn-info btn-block">
            </form>

        </div>
    </div>
</div>

</body>
</html>
