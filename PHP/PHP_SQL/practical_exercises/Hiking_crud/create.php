<?php
    require "db_config.php";
    require "inc/header.php";

$submit = isset($_POST['submit']) ? $_POST['submit'] : NULL;

    if ($submit){
        //check if number
        if (!is_numeric($_POST['distance']) || !is_numeric($_POST['duration']) || !is_numeric($_POST['height_difference'])){
            echo "<div class='alert alert-danger'>must be a number</div>";

        } else {
            //if value is a number execute
            $name = mysqli_real_escape_string($conn, $_POST['name']);
            $difficulty = $_POST['difficulty'];
            $distance = $_POST['distance'];
            $duration = $_POST['duration'];
            $height_difference = $_POST['height_difference'];
            $reasons = $_POST['reason'];

            $sql = "INSERT INTO hiking(name, difficulty, distance, duration, height_difference, reason)VALUES('$name', '$difficulty', '$distance', '$duration', '$height_difference', '$reasons')";
            $conn->set_charset('utf8mb4');
            var_dump($sql);

            $result = $conn->query($sql);

            if (!$result) {
                die(print_r(mysqli_error($conn)));
            } else {
                header('Location: read.php?create');
            }
        }
    }
?>

<div class="container">
    <div class="row">
        <div class="col-lg-6 offset-lg-3">
            <form method="POST">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input class="form-control" type="text" id="name" name="name">
                </div>
                <div class="form-group">
                    <label for="difficulty">Difficulty</label>
                    <select class="custom-select" name="difficulty" id="difficulty">
                        <option value="very easy">Very easy</option>
                        <option value="easy">Easy</option>
                        <option value="normal">Normal</option>
                        <option value="hard">Hard</option>
                        <option value="very hard">Very hard</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="distance">Distance in km</label>
                    <input class="form-control" type="text" id="distance" name="distance" placeholder="example: 2.2">
                </div>
                <div class="form-group">
                    <label for="duration">Duration in hours</label>
                    <input class="form-control" type="text" id="duration" name="duration" placeholder="example: 6.5">
                </div>
                <div class="form-group">
                    <label for="height_difference">Height difference in m</label>
                    <input class="form-control" type="text" id="height_difference" name="height_difference" placeholder="example: 250">
                </div>
                <div class="form-group">
                    <label for="reliability">Reliability index</label>
                    <select class="custom-select" name="reason" id="reliability">
                        <option value="slecht">Slecht</option>
                        <option value="gemiddeld">Gemiddeld</option>
                        <option value="goed">Goed</option>
                        <option value="uitstekend">Uitstekend</option>
                    </select>
                </div>
                <input class="btn btn-primary" type="submit" name="submit" value="Add">
            </form>
        </div>
    </div>
</div>



<?php require "inc/footer.php";?>
