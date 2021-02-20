<?php

require ("upload.php");

class Animal
{

    public $name;
    public $age;
    public $species;
    public $connection;
    public $filename;
    public $tempname;
    public $folder;



    function __construct($name, $age, $species, $db, $filename, $tempname, $folder)
    {
        $this->name = $name;
        $this->age = $age;
        $this->species = $species;
        $this->connection = $db;
        $this->filename = $filename;
        $this->tempname = $tempname;
        $this->folder = $folder;
    }

    public function saveAnimalToDb()
    {
        $query = "INSERT INTO animals(animal_name,animal_age,animal_species,animal_image)";
        $query .= "VALUES(?,?,?,?)"; 
        $stmt = mysqli_stmt_init($this->connection);
        if (!mysqli_stmt_prepare($stmt, $query)) {
            die("QUERY FAILED" . mysqli_error($this->connection));
        } else {
            mysqli_stmt_bind_param($stmt, 'ssss', $this->name, $this->age, $this->species, $this->filename);
            mysqli_stmt_execute($stmt);
            move_uploaded_file($this->filename, $this->folder);
        }
    }
}
