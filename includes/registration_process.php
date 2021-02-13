<?php

require_once("User.php");
require_once("db.php");

if (isset($_POST['register_user'])) {
    $db = new Db();
    $connection = $db->connect();
    $email = $_POST['Email'];
    $password = $_POST['Password'];
    $username = $_POST['Username'];

    $user = new User($email, $password, $username, $db->dbconnection);
    $user->registerUser();
}
