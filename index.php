<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css" integrity="sha384-HzLeBuhoNPvSl5KYnjx0BT+WB0QEEqLprO+NBkkk5gbc67FTaL7XIGa2w1L0Xbgc" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,800" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
    integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
    crossorigin=""/>
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
    integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
    crossorigin=""></script>
    <link rel="shortcut icon" href="assets\images\favicon.ico" type="image/x-icon">
    <title>D-Bug</title>
    
    <link rel="stylesheet" href="assets\landing.css">
</head>
<body style="font-family: 'Montserrat', sans-serif;">
    <div id="maincontainer">
        <div class="navbar">
            <button id="ham" onclick="myFunction()">
                <i class="fas fa-bars"></i>
            </button>
            <ul id="forham">
                <li><a href="#home" class="middle">Home</a></li>
                <li><a href="#about" class="middle">About</a></li>
                <li><a href="#contact" class="middle">Contact Us</a></li>
            </ul>
            <ul class="login-signup">
                <li><a href="views\login.php">Login / Sign up</a></li>
            </ul>
        </div>
        <div id="ham-links">
            <ul>
                <li><a href="#home" class="middle">Home</a></li>
                <li><a href="#about" class="middle">About</a></li>
                <li><a href="#contact" class="middle">Contact Us</a></li>
            </ul>
        </div>

        <section id="home">
                <div class="img">
                </div>
                <div class="video">
                    <img id="myVideo" src="assets\video\ezgif.com-crop.gif" alt="">
                </div>
        </section>

        <section id="about">
            <h1>About</h1>
            <div id="para">
                <p>
                    We started <strong style="color: red;">D-BUG</strong> because of the lack of help for newly starting programmers. 
                    That's why D-BUG has been created as such to help them achieve their beginner goals.
                    Along the way, people have created forums and helped each other, we have a simple UI which helps people at all levels of programming to understand the content.
                </p>   
            </div>
            <div class="about-video">
                <div class="video-buttons">
                    <button class="video-buttons play" onclick="video_play()">`</button>
                    <button class="video-buttons pause" onclick="video_pause()"></button>
                    <button class="video-buttons fullscreen" onclick="fullscreen()">`</button>
                </div>
                <video muted id="landing-video">
                    <source src="assets\\video\landing-video.mp4" type="video/mp4">
                </video>
            </div>  
        </section>

        <section id="contact">
            <h1 style="align-self: center; justify-self: center; padding-top: 10px;">Contact Us</h1>
            <div id="contact-grid">
                <div class="profiles" onmouseover="hover_change_Ashwith()" onmouseout="hover_back_Ashwith()">
                    <div class="profile-photo">
                        <img class="Ashwith" src="assets\images\\Ashwith.jpg" alt="">
                    </div>
                    <div class="profile-name">
                        <p id="Ashwith">Ashwith
                           Poojary
                        </p>
                    </div>
                    <div class="profile-links">
                        <a href="https://github.com/Ashwith25" target="_blank"><img src="assets\images\\github.png" alt=""></a>
                        <a href="https://www.linkedin.com/in/ashwith-poojary-8384471a6" target="_blank"><img src="assets\images\\linkedin.png" alt=""></a>
                    </div>
                </div>
                <div class="profiles" onmouseover="hover_change_Ritika()" onmouseout="hover_back_Ritika()">
                    <div class="profile-photo">
                        <img class="Ritika" src="assets\images\\Ritika.jpg" alt="">
                    </div>
                    <div class="profile-name">
                        <p id="Ritika">Ritika 
                           Radhakrishnan
                        </p>
                    </div>
                    <div class="profile-links">
                        <a href="https://github.com/ritikaradhakrishnan" target="_blank"><img src="assets\images\\github.png" alt=""></a>
                        <a href="https://www.linkedin.com/in/ritika-radhakrishnan-a089091a9" target="_blank"><img src="assets\images\\linkedin.png" alt=""></a>
                    </div>
                </div>
                <form class="query-form" method="POST" name="query-form">
                    <h3 style="color: red">Query Form</h3>
                        <input type="text" placeholder="Name" pattern="[(A-Z)* (a-z)*]*" title="Should only contain letters" id="query-name" required>
                        <input type="email" placeholder="E-mail" id="query-email" required>
                        <input type="text" placeholder="Phone number (Optional)" pattern="^(?:(?:\+|0{0,2})91(\s*[\-]\s*)?|[0]?)?[1-9]\d{9}$" title="Should only contain 10 digits" id="query-phone" optional>
                        <textarea placeholder="Enter your query here" id="query-text" required></textarea>
                        <button type="submit" onclick="query_submit()">Submit</button>
                </form>
                <div class="profiles" onmouseover="hover_change_Girish()" onmouseout="hover_back_Girish()">
                    <div class="profile-photo">
                        <img class="Girish" src="assets\images\\Girish.jpg" alt="">
                    </div>
                    <div class="profile-name">
                        <p id="Girish">Girish 
                           Shetiya
                        </p>
                    </div>
                    <div class="profile-links">
                        <a href="https://github.com/GirishRajendraShetiya" target="_blank"><img src="assets\images\\github.png" alt=""></a>
                        <a href="https://www.linkedin.com/in/girish-shetiya-2a48b01b1" target="_blank"><img src="assets\images\\linkedin.png" alt=""></a>
                    </div>
                </div>
                <div class="profiles" onmouseover="hover_change_Manasi()" onmouseout="hover_back_Manasi()">
                    <div class="profile-photo">
                        <img class="Manasi" src="assets\images\\Manasi.jpg" alt="">
                    </div>
                    <div class="profile-name">
                        <p id="Manasi">Manasi
                           Variar
                        </p>
                    </div>
                    <div class="profile-links">
                        <a href="https://github.com/manasivariar" target="_blank"><img src="assets\images\\github.png" alt=""></a>
                        <a href="https://www.linkedin.com/in/manasi-variar-9739691a0" target="_blank"><img src="assets\images\\linkedin.png" alt=""></a>
                    </div>
                </div>
                <div id="map"></div>
            </div>
        </section>
    </div>
<script src = "assets\landing.js"></script>
</body>
</html>