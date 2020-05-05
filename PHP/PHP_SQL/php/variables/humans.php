<?php

class greeting{
    public $str = "Hello World";

    function show_greeting(){
        return $this->str;
    }
}

$message = new greeting;
echo $message->show_greeting();

?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>Hello <?php echo $_GET['name']; ?>!</h1>
</body>
</html>

