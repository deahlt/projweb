<?php
session_start();
ob_start();
include 'header.php';
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/dogs.css">
    <title>PETLOVE</title>
</head>

<main>
    <!--SLIDER-->
    <section class="auto-slider">
        <h1>Disa nga qentë tanë</h1>
        <div id="slider">
            <figure>
                <img src="img/dog1.jpg" alt="Image">
                <img src="img/dog2.jpg" alt="Image">
                <img src="img/dog3.jpg" alt="Image">
                <img src="img/dog4.jpg" alt="Image">
                <img src="img/dog5.jpg" alt="Image">
            </figure>
        </div>
    </section>
    <!--SLIDER END-->
</main>

<?php
include 'footer.php';
?>