<?php
session_start();
ob_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<?php include 'pageIncludes/includetoheadtag.php';?>

	  	<title><?php echo $title;?> - <?php echo basename(__FILE__, '.php');?> </title>
</head>


<body class="<?php echo basename(__FILE__, '.php');?>">
  <header>
  	<?php include 'pageIncludes/header.php'; ?>
  </header>

  <main>

<div class="contact-form">
  <h1>Kontakti</h1>
  <div id="error_message"></div>

 

  <?php

  if (isset($_POST['submit'])) {

    $name = $_POST['name'];
    $mailFrom = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];


    $conn = mysqli_connect('localhost', 'root', '', 'doglover');


    $interset = "INSERT into email (name,email,number,message) VALUES ('{$name}','{$mailFrom}','{$phone}','{$message}')";

    mysqli_query($conn, $interset);
  } else {
    null;
  }

  ?>



  <form action="contactus.php" method="POST" id="myform">
    <div class="txtb">
      <input type="text" name="name" placeholder="Emri juaj i plotë" id="name">
    </div>

    <div class="txtb">
      <input type="email" name="email" placeholder="Emaili juaj" id="email">
    </div>

    <div class="txtb">
      <input type="text" name="phone" placeholder="Numri i telefonit tuaj" id="phonenumber">
    </div>

    <div class="txtb">
      <textarea id="message" name="message" placeholder="Mesazhi.."></textarea>
    </div>
    <div class="btn">
      <input type="submit" name="submit">
    </div>
  </form>
</div>


<?php
include 'pageIncludes/footer.php';
?>

<script src="js/contactus.js"></script>


</body>
</html>
