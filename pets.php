<?php
session_start();
ob_start();
include 'header.php';
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/pets.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <!--SLIDER-->
    <section class="slider">
        <h1>Disa nga miqtë tanë!</h1>
        <div class="carousel">
            <a href="#" class="slide-left"> <i class="fa fa-arrow-left"></i> </a>
            <div class="carousel-item-wrapper">
                <img src="img/dog1.jpg" alt="" class="carousel-item">
                <img src="img/dog2.jpg" alt="" class="carousel-item">
                <img src="img/cat1.jpg" alt="" class="carousel-item">
                <img src="img/dog4.jpg" alt="" class="carousel-item">
                <img src="img/cat2.jpg" alt="" class="carousel-item">
            </div>
            <a href="#" class="slide-right"> <i class="fa fa-arrow-right"></i> </a>

        </div>
    </section>



    <script src="js/pets.js"></script>


</body>

<?php
include 'footer.php';
?>