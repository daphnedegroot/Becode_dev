<?php

function __autoload($class){
    require "classes/$class.php";
}

$crud = new Crud;

$id = $crud->escape_string($_GET['id']);

$result = $crud->delete($id, 'weather');

if ($result){
    header('Location: index.php?delete');
} else {
    echo "<div class='alert alert-danger' role='alert'>Oops something went wrong!</div>";
}

