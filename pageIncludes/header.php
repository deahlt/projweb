<!--Punuar nga Dea Haliti 192047103 dhe Lorik Halili 192047100-->

<?php
$url = $_SERVER["REQUEST_URI"];
$pos = strrpos($url, "dashboard.php"); 
;?>

    <!--NAVBAR-->
    <nav>
        <div class="logo">
            <h4>Petlove</h4>
        </div>

        <div class="menu collapse">
            <button id="navToggle" class="show-close-menu" onclick="navToggleFunction()">
              <span class="menubar first"></span>
              <span class="menubar middle"></span>
              <span class="menubar last"></span>
            </button>

            <ul id="navigation" class="nav-links">
                <li><a href="index.php"><span class="link-title">Home</span></a></li>
                <li><a href="aboutus.php"><span class="link-title">About</span></a></li>
                <li><a href="pets.php"><span class="link-title">Pets</span></a></li>
                <li><a href="contactus.php"><span class="link-title">Contact</span></a></li>
                <li><a href="news.php"><span class="link-title">News</span></a></li>
                <?php

                if (isset($_SESSION['user_id'])) {
                    echo "<li class='parent'><a href='#!'><span class='link-title'>Hi, {$_SESSION['username']} <i class='fas fa-caret-down'></i></span></a>
                    <ul class='dropdown'>";

                    if (isset($_SESSION['role']) && $_SESSION['role'] === 'admin') {
                        echo "<li><a href='dashboard.php'><span class='link-title'>Dashboard</span></a></li>";

                    
                        if($pos != false) {
                            echo "<li><a href='admin.php'><span class='link-title'>Add Pet</span></a></li>";
                        }
                    }
                    echo "<li><a href='./includes/logout.php'><span class='link-title'>Logout</span></a></li>";
                    echo "</ul>";
                    echo "</li>";
                } else {
                    echo "<li><a href='login.php'><span class='link-title'>Log in | Register</span></a></li>";
                }

                ?>


            </ul>
        </div>
    </nav>
    <!--NAVBAR END-->
