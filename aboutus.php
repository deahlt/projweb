<?php
session_start();
ob_start();
include 'header.php';
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/aboutus.css">
    <title>PETLOVE</title>
</head>

<main>
    <!--MAIN TEXT-->
    <div id="main-section">
        <h1>Për ne</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam ac finibus felis. Orci varius natoque
            penatibus et magnis dis parturient montes, nascetur ridiculus mus. Ut sit amet quam sit amet orci
            pretium semper quis quis lectus. Donec vitae ex sed tortor placerat mattis. Phasellus sed nulla sapien.
            Duis quis lectus non erat pharetra elementum in vitae erat. Morbi sodales nunc sapien, eu faucibus risus
            dignissim ac. Sed quis elit in ex sagittis tincidunt. Aliquam erat volutpat. Donec commodo nisl sit
            amet. Vestibulum sed leo id metus placerat pulvinar. Curabitur quam enim, mattis in congue aliquet,
            faucibus vitae ex. Maecenas quis diam mauris. Suspendisse in nunc leo.<br><br>
            <b>LOKACIONI:</b> PRISHTINA, KOSOVO <br>
            <b>NR. TEL:</b> 044123123 <br>
            <b>EMAIL:</b> petlove@email.com
            <br><br>
            Për më shumë:
        </p>
        <a href="contactus.php" type="button" class="contactusButton">Na kontaktoni</a>
    </div>
    <!--MAIN TEXT END-->
</main>

<?php
include 'footer.php';
?>