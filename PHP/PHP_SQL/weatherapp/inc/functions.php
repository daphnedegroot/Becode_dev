<?php
function __autoload($class){
    require "../classes/$class.php";
}

function create(){


    //Sent data to the database
    $crud = new Crud();

    if (isset($_POST['submit'])){
        $city = $crud->escape_string($_POST['city']);
        $high = $crud->escape_string($_POST['high']);
        $low = $crud->escape_string($_POST['low']);

        $result = $crud->execute("INSERT INTO weather (city, high, low) VALUES ('$city','$high','$low')");
        if ($result){
            header('Location: Product.php?create');
        } else {
            echo "<div class='alert alert-danger' role='alert'>Oops something went wrong!</div>";
        }
    }
}