<!DOCTYPE html>
<html lang="en">

<head>
  <title>CONTACT US</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="css/contactus.css">
</head>

<body>

  <!--NAVBAR-->

  <header>
    <nav>
      <div class="logo">
        <h4>Petlove</h4>
      </div>
      <ul class="nav-links">
        <li><a href="index.html">Home</a></li>
        <li><a href="aboutus.html">Për ne</a></li>
        <li><a href="contactus.html">Kontakti</a></li>
        <li><a href="login.html">Kyçu | Regjistrohu</a></li>
      </ul>
    </nav>
  </header>

  <!--NAVBAR END-->

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
        <input type="submit" name="submit "value="Dërgo">
      </div>
    </form>
  </div>

  <!--FOOTER-->
  <footer>
    <p>&copy;Copyright PETLOVE. By Dea Haliti and Lorik Halili for UBT.</p>
    <ul>
      <li><a href="https://facebook.com"><img src="https://img.icons8.com/fluent/48/000000/facebook-new.png"
            alt="Facebook" /></a>
      </li>
      <li><a href="https://instagram.com"><img src="https://img.icons8.com/fluent/48/000000/instagram-new.png"
            alt="Instagram" /></a>
      </li>
      <li><a href="https://twitter.com"><img src="https://img.icons8.com/fluent/48/ffffff/twitter.png"
            alt="Twitter" /></a>
      </li>

    </ul>
    <!--FOOTER END-->
  </footer>
  <script src="js/contactus.js"></script>
</body>

</html>