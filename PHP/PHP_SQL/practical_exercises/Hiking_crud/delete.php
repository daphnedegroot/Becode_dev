<?php

require "db_config.php";

$id = mysqli_real_escape_string($conn, $_GET['id']);
var_dump($id);

$sql = "DELETE FROM hiking WHERE id='$id'";

$result = $conn->query($sql);

if (!$result){
    die(print_r(mysqli_error($conn)));
} else {
    header('Location: read.php?delete');
}