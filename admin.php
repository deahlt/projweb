<?php
session_start();
if (isset($_SESSION['role']) && $_SESSION['role'] === "user") {
    header("Location: ./login.php");
} else if (!isset($_SESSION['role'])) {
    header("Location: ./login.php");
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin area</title>
    <link rel="stylesheet" href="./css/admin.css">
</head>

<div class="container">
    <form id="contact" action="" method="post">
        <h3>Add an animal</h3>
        <h4>Fill this form to add an animal</h4>
        <fieldset>
            <input placeholder="name" type="text" tabindex="1" required autofocus name="animal_name">
        </fieldset>
        <fieldset>
            <input placeholder="Age" type="text" tabindex="2" name="animal_age" required>
        </fieldset>
        <fieldset>
            <input placeholder="Species" type="text" tabindex="3" required name="animal_species">
        </fieldset>
        <fieldset>
            <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Submit</button>
        </fieldset>
    </form>


</div>

</html>