<?php
function __autoload($class){
    require "classes/$class.php";
}
require "inc/header.php";

$crud = new Crud();

//get id of url
$id = $crud->escape_string($_GET['id']);

//get the data of the id
$result = $crud->getData("SELECT * FROM weather WHERE id = $id");

foreach ($result as $row){
    $city = $row['city'];
    $high = $row['high'];
    $low = $row['low'];
}

//update all data of id
if (isset($_POST['update'])){
    $city = $crud->escape_string($_POST['city']);
    $high = $crud->escape_string($_POST['high']);
    $low = $crud->escape_string($_POST['low']);

    $result = $crud->execute("UPDATE weather SET city='$city', high='$high', low='$low' WHERE id=$id");

    if ($result){
        header('Location: index.php?update');
    } else {
        echo "<div class='alert alert-danger' role='alert'>Oops something went wrong!</div>";
    }
}
?>

    <div class="container">

        <h2 class="display-3 text-center mt-4">Edit </h2>
        <form method="POST">
            <div class="form-group">
                <label for="city" id="city"></label>
                <input class="form-control" type="text" name="city" placeholder="City" value="<?php echo $city ?>">
            </div>
            <div class="form-group">
                <label for="high" id="max"></label>
                <input class="form-control" type="text" name="high" placeholder="Max Temperature" value="<?php echo $high ?>">
            </div>
            <div class="form-group">
                <label for="low"></label>
                <input class="form-control" type="text" name="low" placeholder="Min Temperature" value="<?php echo $low ?>">
            </div>
            <button class="btn btn-md btn-primary" type="submit" name="update">Update</button>
        </form>
    </div>


<?php require "inc/footer.php";
