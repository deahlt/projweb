<?php 
require_once("db.php");


class User {
    public $username;
    public $password;

    function __construct(username,password){

        $this->username = username;
        $this->password = password;

    }


    public function registerUser(){
        $query = "INSERT INTO users(email,password)";
        $query .= "VALUES(?,?)";  //We use prepared statments here to clean the users entry. Never do queries with un sanitized data other people can hack your app and not using prepared statments is a bad practice.
        $stmt = mysqli_stmt_init($connection);
        if(!mysqli_stmt_prepare($stmt,$query)){
            die("QUERY FAILED".mysqli_error($connection));
        }else{
            mysqli_stmt_bind_param($stmt,'ss',$this->username,$this->password);
            $result = mysqli_stmt_execute($stmt);
            header("Location: ../login.php");
        }
    }




}