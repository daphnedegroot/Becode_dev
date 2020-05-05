<?php

if (isset($_POST['submit'])){
    //check for session
    session_start();

    //unset session
    session_unset();

    //destroy session
    session_destroy();

    //redirect to Product.php
    header('Location: index.php');
    exit();
}