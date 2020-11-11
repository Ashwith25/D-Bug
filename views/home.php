<?php
session_start();
if(isset($_SESSION['user'])!=1){
    echo"<br>Session not created.<br>Please login to continue";
    header('refresh:2, url=..\index.php');
    exit();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,800" rel="stylesheet">
    <link rel="shortcut icon" href="..\assets\images\favicon.ico" type="image/x-icon">

    <title>D-Bug</title>
    <link rel="stylesheet" href="..\assets\home.css">
</head>
<body>
    <div class="maincontainer">
        <div class="navbar">
            <ul>
                <li><a href="#"><img src="..\\assets\\images\logo-without-tagline.png" alt=""></a></li>
            </ul>
            <ul>
                <li><a href="#">Practice</a></li>
                <li><a href="#">Challenges</a></li>
                <li><a href="#">Certification</a></li>
                <li><a href="#">Forum</a></li>
                <li><a href="..\includes\logout.php">Logout</a></li>
            </ul>
            <div class="user">
                <p>Welcome,</p>
                <div style="display:inline-block ;font-weight:bold; color:red;">
                    <?php echo $_SESSION["name"] ?>
                </div>
            </div>
        </div>
        <div class="section1">
            <div class="div-blocks">
                <input type='button' value="python" onclick='python_f()' id='python' style="height:100%; width:100%; background-image: url('..\\assets\\images\\python.png'); background-repeat: no-repeat; background-size: contain;"><h2>Python</h2>
            </div>
            <div class="div-blocks">
                <button id='java' style="background-image: url('..\\assets\\images\\java.png'); background-repeat: no-repeat; background-size: contain;"><h2>Java</h2></button>
            </div>
            <div class="div-blocks">
                <button id='cpp' style="background-image: url('..\\assets\\images\\cpp.png'); background-repeat: no-repeat; background-size: contain;"><h2>C++</h2></button>
            </div>
            <div class="div-blocks">
                <button id='csharp' style="background-image: url('..\\assets\\images\\c-sharp.png'); background-repeat: no-repeat; background-size: contain;"><h2>C#</h2></button>
            </div>
            <div class="div-blocks">
                <button id='javascript' style="background-image: url('..\\assets\\images\\javascript.png'); background-repeat: no-repeat; background-size: contain;"><h2>JavaScript</h2></button>
            </div>
            <div class="div-blocks">
                <button id='php' style="background-image: url('..\\assets\\images\\php.png'); background-repeat: no-repeat; background-size: contain;"><h2>PHP</h2></button>
            </div>
        </div>
    </div>
    
    <hr>
    <div class="footer">
        <div class="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2726.3431456582275!2d73.12767!3d18.990201!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xc1c5d5badc610f5f!2sPillai%20College%20of%20Engineering%2C%20New%20Panvel!5e1!3m2!1sen!2sus!4v1602238872608!5m2!1sen!2sus" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </div>
        <div class="links">
            <div class="link">
                <ul>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Contact Us</a></li>
                    <li><a href="#">3rd link</a></li>
                </ul>
            </div>
            <div class="link link2">
                <p style="color: orangered;">Subscribe to our newsletter</p>
                <form action="#">
                    <input type="email" id="email" placeholder="E-mail">
                    <input type="submit" id="email-btn" value="     ">
                </form>
            </div>
            <div class="link link3">
                <p style="color: orangered;">Query Form</p>
                <form action="#">
                    <input type="text" placeholder="Name">
                    <input type="email" name="query-email" placeholder="E-mail">
                    <input type="textfield" placeholder="Enter query here">
                    <input type="submit" value="submit" id="query-btn">
                </form>
            </div>
            <div class="socials">
                <a href="#"><img src="..\\assets\\images\\png\\001-instagram.png" alt=""></a>
                <a href="#"><img src="..\\assets\\images\\png\\002-twitter.png" alt=""></a>
                <a href="#"><img src="..\\assets\\images\\png\\003-facebook.png" alt=""></a>
                <a href="#"><img src="..\\assets\\images\\png\\004-whatsapp.png" alt=""></a>
                <a href="#"><img src="..\\assets\\images\\png\\005-linkedin.png" alt=""></a>
            </div>
        </div>
        
        <div class="copyright">
            <p>©2020 D-Bug, All rights reserved</p>
        </div>
    </div>
<script src = "..\assets\home.js"></script>
</body>
</html>