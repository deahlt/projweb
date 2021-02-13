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


    echo "<img src = 'file:XAMPP\htdocs\gitproject\projweb\img$animal_image'/>";
    echo "<style>";
    echo ".card--1 .card__img, .card--1 .card__img--hover {
        background-image: import('C:\\XAMPP\htdocs\gitproject\projweb\img\\$animal_image');
    }";
    echo "</style>";
    echo "<section class='cards'>";
    echo "<article class='card card--1'>";
    echo  "<img src='../css/$animal_image' class = ''>";
    echo  "<div class='card__info-hover'>";
    echo  "<img src='../css/$animal_image' class = ''>";
    echo   "<div class='card__clock-info'>";
    echo  "</div>";
    echo   "</div>";
    echo   "<div class='card__img'></div>";
    echo   "<a href='#' class='card_link'>";
    echo        "<div class='card__img--hover'></div>";
    echo   "</a>";
    echo   "<div class='card__info'>";
    echo       "<span class='card__category'> $animal_name</span>";
    echo       "<h3 class='card__title'>This is a $animal_name which is a species of $animal_species which is $animal_age years old</h3>";
    echo    "</div>";
    echo "</article>";
}
