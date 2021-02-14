<?php
require_once("Animal.php");
require_once("db.php");

if (isset($_POST['animal_submit'])) {
    $name = $_POST['animal_name'];
    $age = $_POST['animal_age'];
    $db = new Db();
    $db->connect();
    $species = $_POST['animal_species'];
    $filename = $_FILES['animal_image']['name'];
    $tempname = $_FILES['animal_image']['tmp_name'];
    $folder = "C:\\XAMPP\htdocs\gitproject\projweb\img\\$filename";
    $animal = new Animal($name, $age, $species, $db->dbconnection, $filename, $tempname, $folder);
    $animal->saveAnimalToDb();
    header("Location: ../admin.php");
}
