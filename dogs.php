<?php
session_start();
ob_start();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title><?php echo $title;?> - <?php echo basename(__FILE__, '.php');?></title>
    <?php include 'pageIncludes/includetoheadtag.php';?>
  </head>

<body class="<?php echo basename(__FILE__, '.php');?>">

<header>
  <?php include 'pageIncludes/header.php';?>
</header>
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
include 'pageIncludes/footer.php';
?>

</body>
</html>
