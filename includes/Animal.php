<?php

require ("upload.php");

class Animal
{
    public $connection;
    public $name;
    public $age;
    public $species;
    public $author;
    public $time_stamp;
    public $filename;
    public $tempname;
    public $folder;



    function __construct($db, $name, $age, $species, $author, $time_stamp, $filename, $tempname, $folder)
    {
        $this->connection = $db;
        $this->name = $name;
        $this->age = $age;
        $this->species = $species;
        $this->author = $author;
        $this->time_stamp = $time_stamp;
        $this->filename = $filename;
        $this->tempname = $tempname;
        $this->folder = $folder;
    }

    public function saveAnimalToDb()
    {
        $query = "INSERT INTO animals(animal_name,animal_age,animal_species,author_name,time_stamp,animal_image)";
        $query .= "VALUES(?,?,?,?,?,?)";
        $stmt = mysqli_stmt_init($this->connection);
        if (!mysqli_stmt_prepare($stmt, $query)) {
            die("QUERY FAILED" . mysqli_error($this->connection));
        } else {
            mysqli_stmt_bind_param($stmt, 'ssssss', $this->name, $this->age, $this->species, $this->author, $this->time_stamp, $this->filename);
            mysqli_stmt_execute($stmt);
            move_uploaded_file($this->filename, $this->folder);
        }
    }
}
