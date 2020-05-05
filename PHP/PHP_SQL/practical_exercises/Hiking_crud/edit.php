<?php
require "db_config.php";
require "inc/header.php";

$id = $_GET['id'];

$sql = "SELECT * FROM hiking WHERE id='$id'";
$result = $conn->query($sql);

foreach ($result as $row){
    $name = $row['name'];
    $difficulty = $row['difficulty'];
    $distance = $row['distance'];
    $duration = $row['duration'];
    $height_difference = $row['height_difference'];
    $reasons = $row['reason'];
}

$submit = isset($_POST['update']) ? $_POST['update'] : NULL;

if ($submit) {

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

        $sql = "UPDATE hiking SET name='$name', difficulty='$difficulty', distance='$distance', duration='$duration', height_difference='$height_difference', reason='$reasons' WHERE id = '$id'";

        $result = $conn->query($sql);

        if (!$result){
            die(print_r(mysqli_error($conn)));
        } else {
            header('Location: read.php?update');
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
                    <input class="form-control" type="text" id="name" name="name" value="<?php echo $name ?>">
                </div>
                <div class="form-group">
                    <label for="difficulty">Difficulty</label>
                    <select class="custom-select" name="difficulty">
                        <option value="very easy" <?php if ($row['difficulty'] == 'very easy') echo "selected"; ?> >Very easy</option>
                        <option value="easy" <?php if ($row['difficulty'] == 'easy') echo "selected"; ?> >Easy</option>
                        <option value="normal" <?php if ($row['difficulty'] == 'normal') echo "selected"; ?> >Normal</option>
                        <option value="hard" <?php if ($row['difficulty'] == 'hard') echo "selected"; ?>>Hard</option>
                        <option value="very hard" <?php if ($row['difficulty'] == 'very hard') echo "selected"; ?>>Very hard</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="distance">Distance in km</label>
                    <input class="form-control" type="text" id="distance" name="distance" placeholder="example: 2.2" value="<?php echo $distance ?>">
                </div>
                <div class="form-group">
                    <label for="duration">Duration in hours</label>
                    <input class="form-control" type="text" id="duration" name="duration" placeholder="example: 6.5" value="<?php echo $duration ?>">
                </div>
                <div class="form-group">
                    <label for="height_difference">Height difference in m</label>
                    <input class="form-control" type="text" id="height_difference" name="height_difference" placeholder="example: 250" value="<?php echo $height_difference ?>">
                </div>
                <div class="form-group">
                    <label for="reliability">Reliability index</label>
                    <select class="custom-select" name="reason">
                        <option value="slecht" <?php if ($row['reason'] == 'slecht') echo "selected"; ?> >Slecht</option>
                        <option value="gemiddeld" <?php if ($row['reason'] == 'gemiddeld') echo "selected"; ?> >Gemiddeld</option>
                        <option value="goed"  <?php if ($row['reason'] == 'goed') echo "selected"; ?> >Goed</option>
                        <option value="uitstekend" <?php if ($row['reason'] == 'uitstekend') echo "selected"; ?> >Uitstekend</option>
                    </select>
                </div>
                <input class="btn btn-primary" type="submit" name="update" value="Edit">
            </form>
        </div>
    </div>
</div>


<?php require "inc/footer.php";?>
