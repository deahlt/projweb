<?php
include_once("db.php");


$db = new Db();
$db->connect();
$connection = $db->dbconnection;

$query = "SELECT * FROM animals";
$grab_animals_query = mysqli_query($connection, $query);

echo "<div class='container'>";
while ($row = mysqli_fetch_assoc($grab_animals_query)) {

    $animal_name = $row['animal_name'];
    $animal_age = $row['animal_age'];
    $animal_species = $row['animal_species'];
    $animal_image = $row['animal_image'];
    $author_name = $row['author_name'];



    echo   " <div class='card'>";
    echo       "<div class='card-header'>";
    echo       " </div>";
    echo        "<div class='card-body'>";
    echo                 "<img src = 'img/$animal_image' width= '239' height = '200'/>";
    echo          "<p>";
    echo                "$animal_name , a $animal_species, of the $animal_age of years old";
    echo         "</p>";
    echo          "<div class='user'>";
    echo             " <div class='user-info'>";
    echo               "<p>";
    echo                     "$author_name";
    echo                    "</p>";       
    echo               "</div>";
    echo       "</div>";
    echo     "</div>";
    echo    "</div>";
}
echo    "</div>";
