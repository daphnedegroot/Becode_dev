<?php session_start(); ?>
<?php require "inc/header.php"; ?>
<?php require "db_config.php"; ?>

<?php

if ($_POST['login']){
    //define username and password
    $username = mysqli_real_escape_string($conn,$_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    //if input fields are empty
    if (empty($_POST['username']) || empty($_POST['password'])){
        header('Location: login.php?empty');
        exit();
    } else {
        //sql query to fetch information
        $sql = "SELECT * FROM users WHERE username='$username' ";
        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);

        //check if there are any results
        if ($resultCheck < 1){
            header('Location: login.php?no_result');
            exit();
        } else {
            //get results
            if ($row = mysqli_fetch_assoc($result)){
                //De-hasing the password
                $hashed_password_check = password_verify($password, $row['password']);
                if ($hashed_password_check === false){
                    header('Location: login.php?pass_error');
                    exit();
                } elseif ($hashed_password_check === true){
                    //login the user here
                    $_SESSION['username'] = $row['username'];
                    header('Location: index.php?login=success');
                    exit();
                }
            }
        }

    }
} else {
    header('Location: index.php?error');
    exit();
}

?>
