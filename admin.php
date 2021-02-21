<?php
session_start();
if (isset($_SESSION['role']) && $_SESSION['role'] === "user") {
    header("Location: ./login.php");
} else if (!isset($_SESSION['role'])) {
    header("Location: ./login.php");
}

$tz = 'CET';
$timestampp = time();
$dt = new DateTime("now", new DateTimeZone($tz)); 
$dt->setTimestamp($timestampp); 
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'pageIncludes/includetoheadtag.php';?>
  	<title><?php echo $title;?> - <?php echo basename(__FILE__, '.php');?> area</title>
</head>

<body class="<?php echo basename(__FILE__, '.php');?>">

<header>
  <?php include 'pageIncludes/header.php';?>
</header>


<main>
  <div class="container">
      <form id="animal" action="./includes/animal_process.php" method="post" enctype="multipart/form-data">
          <h1>Shtoni një kafshë</h1>
          <h3>Plotëso pyetësorin për të shtuar kafshë</h3>


          <fieldset>
              <input class="name disabled" type="hidden" name="author_name" value="<?php echo $_SESSION['username']; ?>" readonly>
          </fieldset>

          <fieldset>
              <input class="name disabled" type="hidden" name="time_stamp" value="<?php echo $dt->format('d.m.Y'); ?>" readonly>
          </fieldset>

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
              <input type="file" class="file" name="animal_image" tabindex="4">
          </fieldset>
          <fieldset>
              <button name="animal_submit" type="submit" tabindex="5" data-submit="...Sending">Dërgo</button>
          </fieldset>
      </form>


  </div>
</main>

<?php
  include 'pageIncludes/footer.php';
?>
</body>
</html>
