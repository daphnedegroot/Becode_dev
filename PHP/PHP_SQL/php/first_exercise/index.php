<?php
//get path
$path = "images/";

//get image
$img = "adorable-animal-baby-177809.jpg";

//set link
$link = 'cats.php';
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>first php test</title>

    <style>
        img {
            width: 50%;
            margin: 10% 25%;
        }
    </style>
</head>
<body>
<img src="<?php echo $path . $img ?>" alt="">
<a href="<?php echo $link ?>">Read more about cats...</a>
</body>
</html>



