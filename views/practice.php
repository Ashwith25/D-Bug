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
    <link rel="stylesheet" href="..\assets\practice.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,800" rel="stylesheet">
</head>
<body style="background-color: #BABABA; font-family: 'Montserrat', sans-serif;">
    <div class="main">
        <div class="maincontainer">
            <div class='question-block' style="background-color: white;">
                <div class="text"><p>Questions</p></div>
                <div class="text"><p>Answer</p></div>
                <div class="text"><p>Submit</p></div>
                <div class="questions">
        
                </div>
                <div class="text-field">
        
                </div>
                <div class="submit-buttons">
        
                </div>
            </div>
            <div class="compiler">
                <iframe height="400px" width="100%" src="https://repl.it/@AshwithPoojary/WiseGreenProgram?lite=true" scrolling="no" frameborder="no" allowtransparency="true" allowfullscreen="true" sandbox="allow-forms allow-pointer-lock allow-popups allow-same-origin allow-scripts allow-modals"></iframe>
            </div>
        </div>
    </div>
</body>
</html>