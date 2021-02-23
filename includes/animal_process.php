<?php
require_once("Animal.php");
require_once("db.php");
require_once("upload.php");

if (isset($_POST['animal_submit'])) {
  $db = new Db();
  $db->connect();

    $name = $_POST['animal_name'];
    $age = $_POST['animal_age'];
    $species = $_POST['animal_species'];
    $author = $_POST['author_name'];
    $time_stamp = $_POST['time_stamp'];
    $filename = $_FILES['animal_image']['name'];
    $tempname = $_FILES['animal_image']['tmp_name'];
    $folder = "img\\$filename";
    $animal = new Animal($db->dbconnection, $name, $age, $species, $author, $time_stamp, $filename, $tempname, $folder);
    $animal->saveAnimalToDb();
    header("Location: ../admin.php");
}