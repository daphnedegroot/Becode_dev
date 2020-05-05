<?php
require "inc/db_config.php";
require "inc/header.php";
require "process.php";

?>
<h2>Weather app<i class="fas fa-cloud-sun fa-2x icon"></i></h2>

<!-- CREATE DATA -->
<form method="POST">
    <div class="inputs">
        <input type="text" name="city" placeholder="Enter city name">
        <input type="number" name="high" placeholder="Enter max temperature">
        <input type="number" name="low" placeholder="Enter min temperature">
    </div>

    <input class="btn-create" type="submit" name="create" value="create">
</form>


<!-- READ DATA -->
<?php
$sql = "SELECT * FROM weather ORDER BY id DESC";
$result = $conn->query($sql);
?>

<div class="container">
    <?php while ($row = $result->fetch()){ ?>
        <div class="card">
            <img src="https://source.unsplash.com/random/300x200/?sky,sun,clouds,rain,snow" alt="">
            <div class="text">
                <h4>City: <?php echo $row['city']; ?></h4>
                <p>Max Temperature: <?php echo $row['high']; ?></p>
                <p>Min Temperature: <?php echo $row['low']; ?></p>
                <a class="edit" type="edit" href="edit.php?id=<?php echo $row['id']; ?>">Edit</a> <a class="delete" type="delete" href="process.php?delete=<?php echo $row['id']; ?>">Delete</a>
            </div>
        </div>
    <?php } ?>

</div>


<?php require "inc/footer.php"?>

