<?php
include_once("db.php");

$db = new Db();
$db->connect();
$connection = $db->dbconnection;

$query = "SELECT * FROM animals";
$grab_animals_query = mysqli_query($connection, $query);

while ($row = mysqli_fetch_assoc($grab_animals_query)) {

    $animal_name = $row['animal_name'];
    $animal_age = $row['animal_age'];
    $animal_species = $row['animal_species'];
    $animal_image = $row['animal_image'];


    echo "<div class='container'>";
    echo   " <div class='card'>";
    echo       "<div class='card-header'>";
    echo       " </div>";
    echo        "<div class='card-body'>";
    echo           "<h4>$animal_name</h4>";
    echo          "<p>";
    echo                "$animal_name is a very buetiful $animal_species and it is $animal_age years old";
    echo         "</p>";
    echo                 "<img src = 'file://C:/XAMPP/htdocs/gitproject/projweb/img/$animal_image' width= '200' height = '200'/>";
    echo          "<div class='user'>";
    echo             " <div class='user-info'>";
    echo               "<h5>$animal_species</h5>";
    echo           "</div>";
    echo       "</div>";
    echo     "</div>";
    echo    "</div>";
}
#C:\XAMPP\htdocs\gitproject\projweb\img
