<?php
class Db
{

    public $host;
    public $user;
    public $password;
    public $database;
    public $dbconnection;

    function  __construct()
    {
        $this->host = "localhost";
        $this->user = "root";
        $this->password = "";
        $this->database = "doglover";
    }

    public function connect()
    {
        $this->dbconnection = mysqli_connect($this->host, $this->user, $this->password, $this->database);
    }
}