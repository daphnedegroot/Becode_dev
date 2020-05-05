<?php
require "db_config.php";

$submit = isset($_POST['submit']) ? $_POST['submit'] : NULL;

if ($submit){
    $name = $_POST['name'];
    $difficulty = $_POST['difficulty'];
    $distance = $_POST['distance'];
    $duration = $_POST['duration'];
    $height_difference = $_POST['height_difference'];

    //var_dump($_POST);

    $sql = "INSERT INTO hiking(name, difficulty, distance, duration, height_difference)VALUES('$name', '$difficulty', '$distance', '$duration', '$height_difference')";
    //$conn->set_charset('utf8mb4');

    $result = mysqli_query($conn, $sql);
    //var_dump($result);
    if ($result) {
        header('Location: read.php');
    } else {
        echo "something went wrong";
    }
}