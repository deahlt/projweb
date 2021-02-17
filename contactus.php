<?php
session_start();
ob_start();
include 'header.php';
?>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/contactus.css">
  <title>PETLOVE</title>
</head>

<div class="contact-form">
  <h1>Kontakti</h1>
  <div id="error_message"></div>

  <!--  onsubmit="return validation ()"-->

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


  <!-- php code goes here -->
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
      <input type="submit" name="submit" value="Dërgo">
    </div>
  </form>
</div>

<script src="js/contactus.js"></script>

<?php
include 'footer.php';
?>