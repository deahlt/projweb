<?php
session_start();
ob_start();
include 'header.php';
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/index.css">
    <title>PETLOVE</title>
</head>

<main>
    <!--MAIN TEXT-->
    <div id="main-section">
        <h1>Duaj kafshët! 🐾 </h1>
        <p>T'i ndihmojmë miqtë tanë jetësor!</p>
        <a href="aboutus.html" type="button" class="aboutusButton">Rreth nesh</a>
    </div>
    <!--MAIN TEXT END-->
</main>

<?php
include 'footer.php';
?>