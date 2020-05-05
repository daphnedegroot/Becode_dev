<?php
$tvArr = [
    ["tv-show" => "Naruto", "rating" => 4],
    ["tv-show" => "Firefly", "rating" => 5],
    ["tv-show" => "Big bang theory", "rating" => 4],
    ["tv-show" => "Family Guy", "rating" => 5],
    ["tv-show" => "Grey Anatomy", "rating" => 5],
    ["tv-show" => "Game of Thrones", "rating" => 5],
    ["tv-show" => "Luther", "rating" => 4],
    ["tv-show" => "Code Black", "rating" => 2]
];

//echo "<pre>";
//print_r($tvArr);
//echo "</pre>";

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">


    <title>Loops</title>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-lg-6 offset-lg-3">
            <h2 class="display-4 text-center my-3">Tv-shows</h2>
            <table class="table table-sm table-striped">
                <thead>
                <tr>
                    <th>Tv show</th>
                    <th>Rating</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($tvArr as $value){ ?>
                    <tr>
                        <td><a href="https://google.com/search?q=tv+show+<?php echo $value['tv-show']?>"><?php echo $value['tv-show']?></a></td>
                        <td>
                            <?php //echo $value['rating']
                                if (!empty($value['rating'])){
                                    for ($i = 0; $i < $value['rating']; $i++){
                                        echo "<span><i class=\"far fa-star\"></i></i>
</span>";
                                    }
                                }
                            ?>
                        </td>
                    </tr>
                <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>


</body>
</html>
