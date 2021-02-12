<?php 
require_once("db.php");


class User {
    public $email;
    public $password;
    public $username;
    public $connect;

    function __construct($email,$password,$username,$db){

        $this->email = $email;
        $this->password = $password;
        $this->username = $username;
        $this->connect = $db;

    }
        

    public function registerUser(){
        $query = "INSERT INTO users(username,email,password)";
        $query .= "VALUES(?,?,?)";  //We use prepared statments here to clean the users entry. Never do queries with un sanitized data other people can hack your app and not using prepared statments is a bad practice.
        $hashed_pass = password_hash($this->password,PASSWORD_BCRYPT, ["cost" => 12]);
        $stmt = mysqli_stmt_init($this->connect);
        if(!mysqli_stmt_prepare($stmt,$query)){
            die("QUERY FAILED".mysqli_error($this->connect));
        }else{
            mysqli_stmt_bind_param($stmt,'sss',$this->username,$this->email,$hashed_pass);
            $result = mysqli_stmt_execute($stmt);
            header("Location: ../login.php");
        }
    }




}