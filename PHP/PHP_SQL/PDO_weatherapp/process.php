<?php
//get message url
if (isset($_GET['create'])){
    $msg = "<p class='alert success'>Inserted successfully</p>";
    echo $msg;
} elseif (isset($_GET['update'])){
    $msg = "<p class='alert success'>Update successfully!</p>";
    echo $msg;
} elseif (isset($_GET['delete'])){
    $msg = "<p class='alert success'>deleted successfully!</p>";
    echo $msg;
}

//insert data
if (isset($_POST['create'])){
    $city = $_POST['city'];
    $high = $_POST['high'];
    $low = $_POST['low'];

    $sql = "INSERT INTO weather(city, high, low)VALUES(:city, :high, :low)";

    $result = $conn->prepare($sql);

    if (!$result){
        echo "\nPDO::errorInfo():\n";
        print_r($conn->errorInfo());
    } else {
        $result->bindParam(':city', $city);
        $result->bindParam(':low', $low);
        $result->bindParam(':high', $high);

        $result->execute();

        header('Location: index.php?create');
    }
}


//edit data
if (isset($_POST['update'])){

    $id = $_GET['id'];

    $city = $_POST['city'];
    $high = $_POST['high'];
    $low = $_POST['low'];

    $sql = "UPDATE weather SET city=:city, high=:high, low=:low WHERE id=:id";

    $result = $conn->prepare($sql);

    if (!$result){
        echo "\nPDO::errorInfo():\n";
        print_r($conn->errorInfo());
    } else {
        $result->bindParam(':id', $id);
        $result->bindParam(':city', $city);
        $result->bindParam(':high', $high);
        $result->bindParam(':low', $low);

        $result->execute();

        header('Location: index.php?update');
    }
}

//delete data
if (isset($_GET['delete'])){
        $id = $_GET['delete'];
        //echo $id;
    require "inc/db_config.php";

    $sql = "DELETE FROM weather WHERE id=:id";
    $result = $conn->prepare($sql);

    if (!$result){
        echo "\nPDO::errorInfo():\n";
        print_r($conn->errorInfo());
    } else {
        $result->bindParam(':id', $id);

        $result->execute();

        header('Location: index.php');
    }
}

