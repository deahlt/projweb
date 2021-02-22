<?php
session_start();
ob_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <?php include 'pageIncludes/includetoheadtag.php';?>
  <title><?php echo $title;?> - <?php echo basename(__FILE__, '.php');?></title>
</head>

<body class="<?php echo basename(__FILE__, '.php');?>">


  <header>
    <?php include 'pageIncludes/header.php'; ?>
  </header>

  <main>

    <!--SLIDER-->
    <section class="slider">
      <h1>Disa nga miqtë tanë!</h1>
      <div class="carousel">
<<<<<<< HEAD
        <a href="#!" class="slide-left"> <i class="fas fa-chevron-left"></i> </a>
=======
        <a href="#!" class="slide-left"> <i class="fa fa-arrow-left"></i> </a>
>>>>>>> f561b1b38a41e9ba243c3930f22c8dbbb5412114
        <div class="carousel-item-wrapper">
          <img src="img/dog1.jpg" alt="" class="carousel-item">
          <img src="img/dog2.jpg" alt="" class="carousel-item">
          <img src="img/cat1.jpg" alt="" class="carousel-item">
          <img src="img/dog4.jpg" alt="" class="carousel-item">
          <img src="img/cat2.jpg" alt="" class="carousel-item">
        </div>
<<<<<<< HEAD
        <a href="#!" class="slide-right"> <i class="fas fa-chevron-right"></i> </a>
=======
        <a href="#!" class="slide-right"> <i class="fa fa-arrow-right"></i> </a>
>>>>>>> f561b1b38a41e9ba243c3930f22c8dbbb5412114

      </div>
    </section>


  </main>

  <?php
      include 'pageIncludes/footer.php';
    ?>


  <script src="js/pets.js"></script>

</body>

</html>
