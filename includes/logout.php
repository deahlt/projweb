<?php
ob_start();
session_start();

$_SESSION['user_id'] = NULL;
$_SESSION['username'] = NULL;
$_SESSION['email'] = NULL;
$_SESSION['role'] = NULL;

header("Location: ../login.php");
