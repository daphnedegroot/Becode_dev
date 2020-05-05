<?php require "inc/header.php"; ?>
<?php require "db_config.php"; ?>

<?php
if (isset($_GET['empty'])){
    $msg = "<span class='alert alert-danger'>Username and/or password field must be filled in!</span>";
    echo $msg;
} elseif (isset($_GET['pass_error'])){
    $msg = "<span class='alert alert-danger'>Password is incorrect!</span>";
    echo $msg;
} elseif (isset($_GET['no_result'])){
    $msg = "<span class='alert alert-danger'>No results found in database</span>";
    echo $msg;
}

?>


<div class="container">
    <div class="row">
        <div class="col-lg-6 offset-lg-3 col-sm-12 mt-5">
            <h2 class="display-4 text-center">Login</h2>
            <form action="login_check.php" method="POST">
                <div class="form-group">
                    <label for="username" id="username">Username</label>
                    <input class="form-control" type="text" name="username" id="username">
                </div>
                <div class="form-group">
                    <label for="password" id="password">Password</label>
                    <input class="form-control" type="password" name="password" id="password">
                </div>
                <input class="btn btn-primary btn-block" type="submit" name="login" value="login">
            </form>
        </div>
    </div>
</div>



<?php require "inc/footer.php"; ?>
