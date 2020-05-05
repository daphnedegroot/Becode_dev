<?php

$db_host = "localhost";
$db_user = 'root';
$db_password = '';
$db_name = 'login';

$conn = new mysqli($db_host, $db_user, $db_password, $db_name);

if (!$conn){
    echo "Can not connect to database";
}
