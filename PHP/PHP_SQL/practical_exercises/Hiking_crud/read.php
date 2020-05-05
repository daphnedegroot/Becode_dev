<?php require "db_config.php";
    require "inc/header.php";

    if (isset($_GET['create'])){
        $msg = "<div class='alert alert-success' role='alert'>The hike has been added successfully</div>";
        echo $msg;
    } elseif (isset($_GET['update'])){
        $msg = "<div class='alert alert-success' role='alert'>The hike has been updated successfully</div>";
        echo $msg;
    } elseif (isset($_GET['delete'])) {
        $msg = "<div class='alert alert-success' role='alert'>The hike has been deleted successfully</div>";
        echo $msg;
    }

$sql = "SELECT * FROM hiking";

$result = $conn->query($sql);

if ($result->num_rows > 0){ ?>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Difficulty</th>
                    <th>Distance</th>
                    <th>Duration</th>
                    <th>Height difference</th>
                    <th>Betrouwbaarheid</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
            <?php while($row = $result->fetch_assoc()){ ?>
                <tr>
                    <td><?php echo $row['id'] ?></td>
                    <td><?php echo $row['name'] ?></td>
                    <td><?php echo $row['difficulty'] ?></td>
                    <td><?php echo $row['distance'] ?></td>
                    <td><?php echo $row['duration'] ?></td>
                    <td><?php echo $row['height_difference'] ?></td>
                    <td><?php echo $row['reason'] ?></td>
                    <td><a class="btn btn-sm btn-dark" href="edit.php?id=<?php echo $row['id'] ?>">Edit</a> <a class="btn btn-sm btn-danger" href="delete.php?id=<?php echo $row['id'] ?>">Delete</a></td>
                </tr>
            <?php } ?>
            </tbody>
        </table>
    <a href="create.php" class="btn btn-primary">Add new hike</a>
    <?php
}

require "inc/footer.php";