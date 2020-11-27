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
        <link rel="stylesheet" href="..\assets\challenges.css">
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,800" rel="stylesheet">
    </head>
    <body>
        <div class="main-container">
            <h1>Thankyou for showing your interest!</h1>
            <p class="para1">There are currently no challenges going on</p>
            <p class="para2">To get notified provide your Email Address below!</p>
            <form action="..\includes\notified.php" method="POST">
                <input type="email" class="email" placeholder="E-mail">
                <input type="submit" class="submit" value="Submit">
            </form>
        </div>
    </body>
</html>
    