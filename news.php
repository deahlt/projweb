<?php
ob_start();
session_start();
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
    <?php include_once("./includes/get_animals.php"); ?>
  </main>
  <?php
  include 'pageIncludes/footer.php';
  ?>

</body>

</html>