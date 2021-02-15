<?php
session_start();
require_once("db.php");



class User
{
    public $email;
    public $password;
    public $username;
    public $connect;

    function __construct($email, $password, $username, $db)
    {

        $this->email = $email;
        $this->password = $password;
        $this->username = $username;
        $this->connect = $db;
    }


    public function registerUser()
    {
        $query = "INSERT INTO users(username,email,password)";
        $query .= "VALUES(?,?,?)";  //We use prepared statments here to clean the users entry. Never do queries with un sanitized data other people can hack your app and not using prepared statments is a bad practice.
        $hashed_pass = password_hash($this->password, PASSWORD_BCRYPT, ["cost" => 12]);
        $stmt = mysqli_stmt_init($this->connect);
        if (!mysqli_stmt_prepare($stmt, $query)) {
            die("QUERY FAILED" . mysqli_error($this->connect));
        } else {
            mysqli_stmt_bind_param($stmt, 'sss', $this->username, $this->email, $hashed_pass);
            $result = mysqli_stmt_execute($stmt);
            header("Location: ../login.php");
        }
    }

    public function loginUser()
    {
        $query = "SELECT * FROM users where email = ?";
        $stmt = mysqli_stmt_init($this->connect);
        if (!mysqli_stmt_prepare($stmt, $query)) {
            die("QUERY FAILED" . mysqli_error($this->connect));
        } else {
            mysqli_stmt_bind_param($stmt, 's', $this->email);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);

            while ($row = mysqli_fetch_array($result)) {
                $db_user_id = $row['id'];
                $db_username = $row['username'];
                $db_user_password = $row['password'];
                $db_user_role = $row['role'];

                if (password_verify($this->password, $db_user_password)) {
                    $_SESSION['user_id'] = $db_user_id;
                    $_SESSION['username'] = $db_username;
                    $_SESSION['email'] = $this->email;
                    $_SESSION['role'] = $db_user_role;
                    header("Location: ../dashboard.php");
                } else {
                    header("Location: ../login.php?error=invalid_email_or_pass");
                    exit();
                }
            }
        }
    }
}
