<?php
ob_start();
session_start();
include 'header.php';
?>

<link rel="stylesheet" href="./css/news.css">
<?php include_once("./includes/get_animals.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>News</title>

    <link rel="stylesheet" href="style.css" />
</head>

<body>

    <div class="container">
        <div class="card">
            <div class="card-header">
            </div>
            <div class="card-body">
                <h4>lorem ipsum</h4>
                <p>
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aspernatur
                    tenetur distinctio neque?
                </p>
                <div class="user">
                    <div class="user-info">
                        <h5>Lorik Halili</h5>
                    </div>
                </div>
            </div>
        </div>


</body>

</html>


<?php
include 'footer.php';
?>