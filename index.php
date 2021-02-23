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
    <?php include 'pageIncludes/header.php';?>
  </header>


  <main>
    <!--MAIN TEXT-->
    <div id="main-section">
      <h1>Duaj Kafshët! 🐾 </h1>
      <p>T'i ndihmojmë miqtë tanë jetësor!</p>
      <a href="aboutus.php" type="button" class="aboutusButton">Rreth nesh</a>
    </div>
    <!--MAIN TEXT END-->
  </main>

  <?php
	include 'pageIncludes/footer.php';
?>

</body>

</html>