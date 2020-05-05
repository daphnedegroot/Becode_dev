<?php
require "inc/db_config.php";
require "process.php";
require "inc/header.php";

$id = $_GET['id'];

$sql = "SELECT * FROM weather WHERE id='$id'";
$result = $conn->prepare($sql);
$result->execute();

while ($row = $result->fetch(PDO::FETCH_ASSOC)){
    $city = $row['city'];
    $high = $row['high'];
    $low = $row['low'];
}
?>

<form method="POST">
    <form method="POST">
        <label for="city">City</label>
        <input type="text" name="city" id="city" value="<?php echo $city ?>">

        <label for="high">Max Temperature</label>
        <input type="number" name="high" id="high" value="<?php echo $high ?>">

        <label for="low">Min Temperature</label>
        <input type="number" name="low" id="low" value="<?php echo $low ?>">

        <input type="submit" name="update" value="update">
    </form>
</form>

<?php require "inc/footer.php"; ?>
