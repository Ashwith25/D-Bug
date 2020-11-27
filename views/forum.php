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
    <style>
        body{
            height:100vh;
            width:100%;
            background-color: #040e37;
            display:flex;
            justify-content:center;
            align-items:center;
        }
    </style>
    <body>
       <h1>Update Coming Soon!</h1>
    </body>
</html>
    