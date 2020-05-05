<?php
function __autoload($class){
    require "classes/$class.php";
}
require "inc/header.php";

if (isset($_GET['create'])){
    $msg = "<div class='alert alert-success' role='alert'>Inserted Successfully</div>";
    echo $msg;
} elseif (isset($_GET['update'])){
    $msg = "<div class='alert alert-success' role='alert'>Updated Successfully</div>";
    echo $msg;
} elseif (isset($_GET['delete'])){
    $msg = "<div class='alert alert-success' role='alert'>Deleted Successfully</div>";
    echo $msg;
}

$crud = new Crud();

if (isset($_POST['submit'])){
    $city = $crud->escape_string($_POST['city']);
    $high = $crud->escape_string($_POST['high']);
    $low = $crud->escape_string($_POST['low']);

    $result = $crud->execute("INSERT INTO weather (city, high, low) VALUES ('$city','$high','$low')");
    if ($result){
        header('Location: index.php?create');
    } else {
        echo "<div class='alert alert-danger' role='alert'>Oops something went wrong!</div>";
    }
}
?>
<!-- CREATE FORM -->
<div class="container">
    <h2 class="display-3 text-center mt-4">Weather<i class="fas fa-cloud-sun fa-2x"></i></h2>
    <form method="POST">
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label for="city" id="city"></label>
                    <input class="form-control" type="text" name="city" placeholder="City">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="high" id="max"></label>
                    <input class="form-control" type="text" name="high" placeholder="Max Temperature">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="low"></label>
                    <input class="form-control" type="text" name="low" placeholder="Min Temperature">
                </div>
            </div>
        </div>
        <button class="btn btn-sm btn-outline-success btn-block" type="submit" name="submit">Create</button>
    </form>
</div>

<!-- READ -->
<div class="container mt-4">
    <table class="table table-sm">
        <thead>
        <tr>
            <th>City</th>
            <th>Max Temperature</th>
            <th>Min Temperature</th>
            <th class="text-center">Action</th>
        </tr>
        </thead>
        <tbody>
        <?php
        $query = "SELECT * FROM weather";
        $result = $crud->getData($query);
        //var_dump($rows);

        foreach ($result as $row){ ?>
            <tr>
                <td><?php echo $row['city'] ?></td>
                <td><?php echo $row['high'] ?></td>
                <td><?php echo $row['low'] ?></td>
                <td class="text-center">
                    <a class="btn btn-sm btn-outline-dark" href="edit.php?id=<?php echo $row['id']; ?>">Edit</a>
                    <a class="btn btn-sm btn-outline-danger" href="delete.php?id=<?php echo $row['id']; ?>">Delete</a>
                </td>
            </tr>
        <?php } ?>
        </tbody>
    </table>

</div>


<?php require "inc/footer.php"; ?>


