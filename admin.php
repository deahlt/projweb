<?php
session_start();
if (isset($_SESSION['role']) && $_SESSION['role'] === "user") {
    header("Location: ./login.php");
} else if (!isset($_SESSION['role'])) {
    header("Location: ./login.php");
}
include 'header.php';
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin area</title>
    <link rel="stylesheet" href="css/admin.css">
</head>


<div class="container">
    <form id="animal" action="./includes/animal_process.php" method="post" enctype="multipart/form-data">
        <h1>Shtoni një kafshë</h1>
        <h3>Plotëso pyetësorin për të shtuar kafshë</h3>
        <fieldset>
            <input placeholder="Emri" class="emri" type="text" tabindex="1" required autofocus name="animal_name">
        </fieldset>
        <fieldset>
            <input placeholder="Mosha" class="mosha" type="text" tabindex="2" name="animal_age" required>
        </fieldset>
        <fieldset>
            <input placeholder="Specia" class="specia" type="text" tabindex="3" required name="animal_species">
        </fieldset>
        <fieldset>
            <input type="file" class="file" name="animal_image">
        </fieldset>
        <fieldset>
            <button name="animal_submit" type="submit" data-submit="...Sending">Dërgo</button>
        </fieldset>
    </form>


</div>

</html>

<?php
include 'footer.php';
?>