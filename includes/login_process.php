<?php

require_once("User.php");
require_once("db.php");


if (isset($_POST['login_user'])) {
    $db = new Db();
    $connection = $db->connect();
    $email = $_POST['Email'];
    $password = $_POST['Password'];


    $user = new User($email, $password, "none", $db->dbconnection);
    $user->loginUser();
}
