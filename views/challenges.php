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
    <script>
        function notify(){
            quesid = document.getElementsByClassName("email")[0].value;
            if (quesid.length == 0){
                alert("Please enter your Email-Id");
            }
            else if(!quesid.match('[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z].{2,3}$')){
                alert ("Invalid Email-Id");
	        }
            else{
                var obj = {quesid: quesid};
                var quesJSON = JSON.stringify(obj);
                var xmlhttp = new XMLHttpRequest();
                xmlhttp.open("POST","..\\includes\\notified.php",true);
                xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                xmlhttp.send("question=" + quesJSON);
                alert ("You'll be notified soon!");
            }
        }
    </script>
    <body>
        <div class="main-container">
            <h1>Thankyou for showing your interest!</h1>
            <p class="para1">There are currently no challenges going on</p>
            <div class="notify">
                <p class="para2">To get notified provide your Email Address below!</p>
                <input type="email" class="email" placeholder="E-mail" required>
                <input type="submit" onclick="notify()" class="submit" value="Submit">
            </div>
        </div>
    </body>
</html>
    