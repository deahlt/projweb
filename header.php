<!--Punuar nga Dea Haliti 192047103 dhe Lorik Halili 192047100-->
<!DOCTYPE html>
<html lang="en">

<body>
    <header>
        <!--NAVBAR-->
        <nav>
            <div class="logo">
                <h4>Petlove</h4>
            </div>
            <ul class="nav-links">
                <li><a href="index.php">Home</a></li>
                <li><a href="aboutus.php">AboutUs</a></li>
                <li><a href="dogs.php">Dogs</a></li>
                <li><a href="contactus.php">Contact</a></li>
                <li><a href="news.php">News</a></li>
                <?php

                if (isset($_SESSION['user_id'])) {
                    echo "<li><a href='#'>Hi, {$_SESSION['username']}</a></li>";
                    echo "<li><a href='./includes/logout.php'>Logout</a></li>";
                } else {
                    echo "<li><a href='login.php'>LogIn|Register</a></li>";
                }
                if (isset($_SESSION['role']) && $_SESSION['role'] === 'admin') {
                    echo "<li><a href='admin.php'>Admin</a></li>";
                }

                ?>

            </ul>
        </nav>
        <!--NAVBAR END-->
    </header>