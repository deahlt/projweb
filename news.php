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
                <img src="https://s.aolcdn.com/images/dims?client=fh7w6q744eiognjk&signature=d59d0cf6af1d779a3dca451e0ba259c33bbc6115&image_uri=https%3A%2F%2Fs.aolcdn.com%2Fos%2Fab%2F_cms%2F2019%2F08%2F30142658%2F2020-jeep-wrangler-16.jpg&thumbnail=750%2C422&quality=80" alt="" />
            </div>
            <div class="card-body">
                <h4>Why is the Tesla Cybertruck designed the way it is?</h4>
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
        <div class="card">
            <div class="card-header">
                <img src="https://images.cruisecritic.com/image/18740535/10-best-cruise-destinations-for-hot-air-balloon-rides_600x400_21.jpg" alt="" />
            </div>
            <div class="card-body">
                <h4>
                    Hot Air Ballooning in Nepal - 1 Day - Nepal Mother House Treks
                </h4>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat
                    dolor nihil saepe. Nobis nihil minus similique hic quas mollitia.
                    Error.
                </p>
                <div class="user">
                    <div class="user-info">
                        <h5>Dea Haliti</h5>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header">
                <img src="https://dynaimage.cdn.cnn.com/cnn/q_auto,w_412,c_fill,g_auto,h_232,ar_16:9/http%3A%2F%2Fcdn.cnn.com%2Fcnnnext%2Fdam%2Fassets%2F200305114843-01-edge-hudson-yards-observation-deck.jpg" alt="" />
            </div>
            <div class="card-body">
                <h4>New York City | Layout, People, Economy, Culture, & History</h4>
                <p>
                    Happy New Year everyone around the World!
                </p>
                <div class="user">
                    <div class="user-info">
                        <h5>Dea Haliti</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>


<?php
include 'footer.php';
?>