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
    <link href="https://fonts.googleapis.com/css2?family=Audiowide&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css" integrity="sha384-HzLeBuhoNPvSl5KYnjx0BT+WB0QEEqLprO+NBkkk5gbc67FTaL7XIGa2w1L0Xbgc" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,800" rel="stylesheet">
    <link rel="shortcut icon" href="..\assets\images\favicon.ico" type="image/x-icon">
    <title>D-Bug</title>
    
    <link rel="stylesheet" href="..\assets\adminHome.css">
    <script>
            function getUser() {
            usrEmailID = document.getElementById("usrEmailID").value;
            if (usrEmailID == ""){
                return
            }
            var obj = {usrEmail: usrEmailID};
            console.log(usrEmailID);
            var userJSON = JSON.stringify(obj);

            var txt ="";
            var xmlhttp=new XMLHttpRequest();
            xmlhttp.onreadystatechange=function() {
                if (this.readyState==4 && this.status==200) {
                    myObj = JSON.parse(this.responseText); 
                    console.log(myObj);
                    if (myObj.length === 0) { 
                        txt = "No details found"
                    }
                    else{
                    for (x in myObj) { 
                        document.getElementById('username').innerHTML = myObj[x].name;
                        document.getElementById('mail').innerHTML = myObj[x].email;
                        document.getElementById('userId').innerHTML = myObj[x].userid;
                    } 
                    }
                }
            }
            xmlhttp.open("POST","../includes/indexphpajaxgetuserdetails.php",true);
            xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded"); 
            console.log(userJSON);
            xmlhttp.send("user=" + userJSON ); 
            }

            </script>
</head>
<body>
    <button class="logout" onclick="window.location.href='..\\includes\\logout.php'">logout</button>
    <div class="maincontainer">
        <h1 style="text-align: center; color: black; font-family: 'Audiowide', cursive; letter-spacing: 0.5px;">Welcome admin</h1>
        <div class="functionalities">
            <p class="table-headers">Search Users</p>
            <p class="table-headers">Delete Users</p>
            <p class="table-headers">Add Questions</p>
            <div class="search-users">
                <div style="border: none; display: flex; flex-direction: column; justify-content: space-around; align-items: center; height: 30%;">
                    <p>Enter user email id </p>
                    <input type="text" name="usrEmailID" id ="usrEmailID" style="outline: none; height: 25px; width: 80%; border-radius: 4px; border: 1px solid black; text-align: center; background-color: #BABABA;">
                    <input type="button" style="width: 30%;" class="submit-delete" onclick="getUser()" value="Search"/>
                </div>
                <div id="table-result">
                    <div class="header">Name</div>
                    <div id="username"></div>
                    <div class="header">E-mail</div>
                    <div id="mail" style="word-wrap: break-word"></div>
                    <div class="header">User ID</div>
                    <div id="userId"></div>
                </div>
            </div>

            <div class="delete-users">
                <form name="form2" id="delete-user" method="POST" action="..\includes\authentication.php">
                    <table>
                        <tr>
                            <td><label for="mail-delete">Enter User's email id</label></td>
                            <td><input class="form-inputs" type="text" name="mail-delete" id="mail-delete" required><br></td>
                        </tr>
                        <tr>
                            <td><label for="admin-password">Enter Admin password</label></td>
                            <td><input class="form-inputs" type="password" name="admin-password" id="admin-password" required></td>
                        </tr>
                        <tr>
                            <td colspan=2><input class="submit-delete" type="submit" value="Authenticate and delete"></td>
                        </tr>
                    </table>
                </form>
            </div>
            <div class="add-questions">
                <form method="POST" id="question-set" action="..\includes\addQuestion.php">
                    <label for="question">Enter Question</label><br>
                    <textarea class='questions' name="question" cols="30" rows="5"></textarea><br>
                    <label for="text">Enter Answer</label><br>
                    <input class='questions' type="text" name="answer" id="answer">
                    <input class="submit-delete" style="margin-top: 10px; width: 50%;" type="submit" value="Submit">
                </form>
            </div>
        </div>
    </div> 
</body>
</html>