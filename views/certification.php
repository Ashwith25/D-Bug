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
        <title>D-Bug</title>
        <link rel="shortcut icon" href="..\assets\images\favicon.ico" type="image/x-icon">
        <link rel="stylesheet" href="..\assets\certification.css">
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,800" rel="stylesheet">
    </head>
<body style="font-family: 'Montserrat', sans-serif;">
    <h1>Get your skills certified by us!</h1>
    <div class='ul'>
        <ul>
            <li>Enrich your profile</li>
            <li>Stand out from the crowd</li>
            <li>Enhance your skill</li>
        </ul>
    </div>
    <div class="section">
        <div class="section-blocks" onclick="window.open('https://quilgo.com/form/ns4sgVs0WlKKlvNm')" onmouseover="python_hover_in()" onmouseout="python_hover_out()">
            <img src="..\\assets\\images\\python.png" alt="">
            <h2>Python</h2>
        </div>
        <div class="section-blocks" onclick="window.open('https://quilgo.com/form/vMgxOpGeqIXPjEic')" onmouseover="java_hover_in()" onmouseout="java_hover_out()">
            <img src="..\\assets\\images\\java.png" alt="">
            <h2>Java</h2>
        </div>
        <div class="section-blocks" onclick="window.open('https://quilgo.com/form/4h2Cn04c3Hg2jYKi')" onmouseover="js_hover_in()" onmouseout="js_hover_out()">
            <img src="..\\assets\\images\\javascript.png" alt="">
            <h2>JavaScript</h2>
        </div>
        <div class="section-blocks" onclick="window.open('https://quilgo.com/form/M7MjtCapfDM26bCy')" onmouseover="php_hover_in()" onmouseout="php_hover_out()">
            <img src="..\\assets\\images\\php.png" alt="">
            <h2>PHP</h2>
        </div>
        <div class="section-blocks" onclick="window.open('https://quilgo.com/form/ns4sgVs0WlKKlvNm')" onmouseover="cpp_hover_in()" onmouseout="cpp_hover_out()">
            <img src="..\\assets\\images\\cpp.png" alt="">
            <h2>C++</h2>
        </div>
        <div class="section-blocks" onclick="window.open('https://quilgo.com/form/uNBNpqJX3QeBHoyx')" onmouseover="csharp_hover_in()" onmouseout="csharp_hover_out()">
            <img src="..\\assets\\images\\c-sharp.png" alt="">
            <h2>C#</h2>
        </div>
    </div>
<script src = "..\\assets\certification.js"></script>
</body>
</html>