<?php
if (!isset($_SESSION)){
    session_start();
}

require "inc/header.php";

?>

<!-- NAVIGATION -->
<nav class="navbar navbar-expand-lg navbar-light">
    <a class="navbar-brand" href="#">Home</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
            <?php
            //if username isset
            if (isset($_SESSION['username'])){
                //show logout button
                echo '<li>
                            <form action="logout.php" method="POST">
                                <button class="btn btn-sm btn-light" type="submit" name="submit">Logout</button>
                            </form>
                          </li>';
            } else {
                //if not show register and sign up button
                echo '<li class="nav-item">
                            <a class="nav-link" href="register.php">Register</span></a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="login.php">Sign up</a>
                          </li>';
            }
            ?>
        </ul>
    </div>
</nav>

<div class="container">
    <div class="row">
        <div class="col-md-12 text-center mt-2">
            <h2 class="show_username display-4">
                <?php
                //if session isset then show username
                    if (isset($_SESSION['username'])){
                        echo "Welcome " . $_SESSION['username'];
                    }
                ?>
            </h2>
        </div>
    </div>
</div>

<?php require "inc/footer.php"; ?>
