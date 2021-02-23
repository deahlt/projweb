<?php
include_once("db.php");


$db = new Db();
$db->connect();
$connection = $db->dbconnection;

$query = "SELECT * FROM animals ORDER BY animal_id DESC";
$grab_animals_query = mysqli_query($connection, $query);
echo "<div class='container'>";

while ($row = mysqli_fetch_assoc($grab_animals_query)) {

    $animal_name = $row['animal_name'];
    $animal_age = $row['animal_age'];
    $animal_species = $row['animal_species'];
    $author_name = $row['author_name'];
    $time_stamp = $row['time_stamp'];
    $animal_image = $row['animal_image'];


    echo    "<div class='card'>";


    echo     "<div class='card-header'>";
                  if($animal_image) {
                    echo  "<img src = 'img/$animal_image'/>";
                  } else {
                    echo "<i class='far fa-image'></i>";
                  }
    echo     "</div>";


    echo     "<div class='card-body'>";
    echo          "<p>";
    echo                "$animal_name is a $animal_age year old $animal_species";
    echo         "</p>";

        echo        "<div class='user'>";
        echo           "<div class='user-info'>";
        echo              "<div class='date'>". $time_stamp . "</div>";
        echo              "<div class='author'>". $author_name ."</div>";
        echo            "</div>";
        echo        "</div>";


    echo     "</div>"; //end of card-body
    echo    "</div>"; //end of card
}

echo    "</div>"; //end of container