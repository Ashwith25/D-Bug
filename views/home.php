<?php
error_reporting(E_ALL ^ E_NOTICE);
$conn = new mysqli('localhost', 'root', '');
mysqli_select_db($conn, 'dbug');
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
                <li><a href="..\views\home.php">Practice</a></li>
                <li><a href="..\views\challenges.php">Challenges</a></li>
                <li><a href="..\views\certification.php">Certification</a></li>
                <li><a href="..\views\forum.php">Forum</a></li>
                <li><a href="..\includes\logout.php">Logout</a></li>
            </ul>
            <div class="user">
                <p>Welcome,</p>
                <div id="user-profile" style="display:inline-block ;font-weight:bold; color:red; cursor: pointer; font-family: Audiowide, cursive;">
                    <?php echo $_SESSION["name"]; ?>
                </div>
            </div>
        </div>

        <div class="bg-modal">
	        <div class="modal-contents">
		        <div class="close">+</div>
                <?php
                    $userid = $_SESSION['userid'];
                    $emails = $_SESSION["user"];
                    $query1 = "select name from register where email = '$emails' ";
                    $query2 = "select * from progress where userid='$userid'";
                    $result_name = mysqli_query($conn, $query1);
                    $result_id = mysqli_query($conn, $query2);
                    $rows = mysqli_num_rows($result_id);
                    $fetch_name = mysqli_fetch_row($result_name);
                    echo '<div id="user-details">';
                    echo '<p>Username: </p>';
                    echo '<p>'.$fetch_name[0].'</p>';
                    echo '<p>Registerd E-mail: </p>';
                    echo '<p>'.$emails.'</p>';
                    echo '<p>Questions solved</p>';
                    echo '<p>'.$rows.'</p>';
                    echo '</div>';
                ?>
                <button id="update-username">Update Username</button>
	        </div>
        </div>
        <div class="bg-modal-form">
	        <div class="modal-contents-form">
		        <div class="close-form">+</div>
                <form id="update-name-form" action="..\includes\update.php" method='POST'>
                    <input type="text" name="username" placeholder="Enter New username" pattern="[(A-Z)* (a-z)*]+" title="Should only contain letters" required>
                    <input type="password" name="password" placeholder="Enter password" required>
                    <input id="submit-form" type="submit" value="Submit">
                    <p style="color: red">login again to see the necessary changes</p>
                </form>
	        </div>
        </div>
        <div class="section1">
            <div class="div-blocks" onclick="window.open('..\\views\\practice.php')" onmouseover="python_hover_in()" onmouseout="python_hover_out()">
                <img class="python" src="..\\assets\\images\\python.png" alt="">
                <h2 class="python">Python</h2>
            </div>
            <div class="div-blocks" onclick="window.open('..\\views\\practice.php')" onmouseover="java_hover_in()" onmouseout="java_hover_out()">
                <img class="java" src="..\\assets\\images\\java.png" alt="">
                <h2 class="java">Java</h2>
            </div>
            <div class="div-blocks" onclick="window.open('..\\views\\practice.php')" onmouseover="cpp_hover_in()" onmouseout="cpp_hover_out()">
                <img class="cpp" src="..\\assets\\images\\cpp.png" alt="">
                <h2 class="cpp">C++</h2>
            </div>
            <div class="div-blocks" onclick="window.open('..\\views\\practice.php')" onmouseover="csharp_hover_in()" onmouseout="csharp_hover_out()">
                <img class="csharp" src="..\\assets\\images\\c-sharp.png" alt="">
                <h2 class="csharp">C#</h2>
            </div>
            <div class="div-blocks" onclick="window.open('..\\views\\practice.php')" onmouseover="js_hover_in()" onmouseout="js_hover_out()">
                <img class="js" src="..\\assets\\images\\javascript.png" alt="">
                <h2 class="js">JavaScript</h2>
            </div>
            <div class="div-blocks" onclick="window.open('..\\views\\practice.php')" onmouseover="php_hover_in()" onmouseout="php_hover_out()">
                <img class="php" src="..\\assets\\images\\php.png" alt="">
                <h2 class="php">PHP</h2>
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
<script src = "..\assets\\home.js"></script>
</body>
</html>