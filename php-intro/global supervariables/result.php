<?php
ob_start();

if (isset($_POST['submit'])){
    $movies = $_POST['movie'];
    $series = $_POST['serie'];
}

if (isset($_GET['get'])){
    $fav_country = $_GET['fav_country'];
    $worst_movie = $_GET['worst_movie'];
    $worst_serie = $_GET['worst_serie'];
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
    <title>Document</title>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <nav class="mt-5">
                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                    <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">$_POST</a>
                    <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">$_GET</a>
                    <a class="nav-item nav-link" id="nav-server-tab" data-toggle="tab" href="#nav-server" role="tab" aria-controls="nav-server" aria-selected="true">$_SERVER</a>
                    <a class="nav-item nav-link" id="nav-files-tab" data-toggle="tab" href="#nav-files" role="tab" aria-controls="nav-files" aria-selected="true">$_FILES</a>
                    <a class="nav-item nav-link" id="nav-cookie-tab" data-toggle="tab" href="#nav-cookie" role="tab" aria-controls="nav-cookie" aria-selected="true">$_COOKIE</a>


                </div>
            </nav>
            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                    <table class="table table-striped table-sm mt-3">
                        <thead>
                        <tr>
                            <th>movies</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                            if (isset($movies)){
                            foreach ($movies as $movie){ ?>
                        <tr>
                            <td><?php echo $movie ?></td>
                        </tr>
                        <?php
                        }
                    }?>
                        </tbody>
                    </table>
                    <table class="table table-striped table-sm mt-3">
                        <thead>
                        <tr>
                            <th>Series</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        if (isset($series)){
                            foreach ($series as $serie){ ?>
                                <tr>
                                    <td><?php echo $serie ?></td>
                                </tr>
                                <?php
                            }
                        }?>
                        </tbody>
                    </table>
                </div>
                <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                    <h2 class="text-center mt-3">Couple of Questions</h2>
                    <p>
                        <strong>My favorite country is:</strong> <?php
                        if (isset($fav_country)){
                            echo $fav_country;
                        }
                        ?>
                    </p>
                    <p>
                        <strong>My worst movie ever seen is:</strong> <?php
                        if (isset($worst_movie)){
                            echo $worst_movie;
                        }
                        ?>
                    </p>
                    <p>
                        <strong>My worst serie ever seen is:</strong> <?php
                        if (isset($worst_serie)){
                            echo $worst_serie;
                        }
                        ?>
                    </p>
                </div>
                <div class="tab-pane fade" id="nav-server" role="tabpanel" aria-labelledby="nav-server-tab">

                    <table class="table table-striped table-sm mt-3">
                        <?php foreach ($_SERVER as $key=>$val ){ ?>
                        <thead>
                        <tr>
                            <th><?php echo $key ?></th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td><?php echo $val ?></td>
                        </tr>
                        </tbody>
                        <?php } ?>
                    </table>
                </div>
                <div class="tab-pane fade" id="nav-files" role="tabpanel" aria-labelledby="nav-server-tab">
                    <?php
                        if (isset($_POST['upload'])){
                            $file = $_FILES['file'];
                            //print_r($file);
                            $fileName = $_FILES['file']['name'];
                            $fileTmpName = $_FILES['file']['tmp_name'];
                            $fileSize = $_FILES['file']['size'];
                            $fileError = $_FILES['file']['error'];
                            $fileType = $_FILES['file']['type'];

                            $fileExt = explode('.', $fileName);
                            $fileActualExt = strtolower(end($fileExt));

                            $allowed = array('jpg', 'jpeg', 'png');

                            if (in_array($fileActualExt, $allowed)){
                                if ($fileError === 0) {
                                    if ($fileSize < 1000000){
                                        //$fileNameNew = uniqid('', true). "." . $fileActualExt;
                                        $fileNameNew = $fileName. "." . $fileActualExt;
                                        $fileDestination = 'uploads/'.$fileNameNew;
                                        move_uploaded_file($fileTmpName, $fileDestination);

                                    } else {
                                        echo "Your file is to big";
                                    }
                                } else {
                                    echo "There was an error uploading your file";
                                }
                            } else {
                                echo "You cannot upload files of this type";
                            }
                        }
                    ?>
                </div>
                <div class="tab-pane fade" id="nav-cookie" role="tabpanel" aria-labelledby="nav-cookie-tab">
                    <?php
                        $name = "myCookie";
                        $value = "Daphne";

                        setcookie($name, $value, time()+3600, "/");

                        if (isset($_COOKIE['myCookie'])){
                            echo "Welcome " . $_COOKIE['myCookie'];
                        } else {
                            echo "Sorry no cookie was set";
                        }
                    ?>
                </div>


            </div>
        </div>
    </div>
</div>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>

