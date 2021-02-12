<?php
session_start();
ob_start();
include 'header.php';
?>
<link rel="stylesheet" href="css/contactus.css">

<div class="contact-form">
  <h1>Kontakti</h1>
  <div id="error_message"></div>
  <form id="myform" onsubmit="return validation ()">
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
      <input type="submit" name="submit " value="Dërgo">
    </div>
  </form>
</div>

<script src="js/contactus.js"></script>

<?php
include 'footer.php';
?>