<?php require "inc/header.php"; ?>
<?php require "db_config.php"; ?>

<?php
if (isset($_POST['submit'])){
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    //hashing password
    $hash_pass = password_hash($password, PASSWORD_DEFAULT);

    //insert into db
    $sql = "INSERT INTO users(username, email, password)VALUES('$username', '$email', '$hash_pass')";

    $result = $conn->query($sql);

    if ($result) {
        header('Location: login.php');
    } else {
        echo "<p class='alert alert-danger'>Data is not inserted!</p>";
    }

}
?>

<div class="container">
    <div class="row">
        <div class="col-lg-6 offset-lg-3 col-sm-12 mt-5">
            <h2 class="display-4 text-center">Create</h2>
            <form method="POST">
                <div class="form-group">
                    <label for="username" id="username">username</label>
                    <input class="form-control" type="text" name="username" id="username">
                </div>
                <div class="form-group">
                    <label for="email" id="email">Email</label>
                    <input class="form-control" type="email" name="email" id="email" placeholder="example: @gmail.com">
                </div>
                <div class="form-group">
                    <label for="password" id="password">Password</label>
                    <input class="form-control" type="password" name="password" id="password">
                </div>
                <input class="btn btn-primary btn-block" type="submit" name="submit" value="create">
            </form>
        </div>
    </div>
</div>


<?php require "inc/footer.php"; ?>
