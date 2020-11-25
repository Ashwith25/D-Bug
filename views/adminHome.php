<?php
session_start();
if(isset($_SESSION['user'])!=1){
    echo"<br>Session not created.<br>Please login to continue";
    header('refresh:2, url=..\index.php');
    exit();
}
?>
<?php
$conn = new mysqli('localhost', 'root', '');
mysqli_select_db($conn, 'dbug');

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "select userid, name, email from register";
$result = mysqli_query($conn, $sql);
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
        window.onload=function(){
            document.getElementById('user-profile').addEventListener("click", function() {
                document.querySelector('.bg-modal').style.display = "flex";
            });

            document.querySelector('.close').addEventListener("click", function() {
                document.querySelector('.bg-modal').style.display = "none";
            });
        }
        
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
                        alert('User not found !');
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
<style>
.bg-modal {
	background-color: rgba(0, 0, 0, 0.8);
	width: 100%;
	height: 100%;
	position: absolute;
	top: 0;
	display: none;
	justify-content: center;
	align-items: center;
}

.modal-contents {
	height: 300px;
	width: 500px;
	background-color: #BABABA;
	padding: 20px;
	position: relative;
    border-radius: 4px;
    display: flex;
    flex-direction: column;
    justify-content: space-around;
    align-self: center;
    overflow-x: hidden;
}

.close {
	position: absolute;
	top: 0;
	right: 10px;
	font-size: 42px;
	color: #333;
	transform: rotate(45deg);
	cursor: pointer;
}

.close:hover {
    color: #666;
}

#fetch-users{
    border: 1px solid black;
    border-collapse: collapse;
    padding: 5px;
    text-align: center;
    color: black;
    overflow: hidden;
}

.fetch-th{
    border: 1px solid black;
    /* border-collapse: collapse; */
    padding: 5px;
    text-align: center;
    color: black;
}

.fetch-td {
    border: 1px solid black;
    border-collapse: collapse;
    padding: 5px;
    text-align: center;
    color: black;
}

</style>
<body>
    <button class="logout" onclick="window.location.href='..\\includes\\logout.php'">logout</button>
    <div class="bg-modal">
        <div class="modal-contents">
            <div class="close">+</div>
            <h2 style="color: black; text-align: center;">Users List</h2>
            <table id="fetch-users">
            <tr>
                <th class="fetch-th">User ID</th>
                <th class="fetch-th">Name</th>
                <th class="fetch-th">E-mail</th>
            </tr>
                <?php
                    if (mysqli_num_rows($result) > 0) {
                        while($row = mysqli_fetch_assoc($result)) {
                            echo '<tr>';
                            echo '<td class="fetch-td">'.$row["userid"].'</td>';
                            echo '<td class="fetch-td">'.$row["name"].'</td>';
                            echo '<td class="fetch-td">'.$row["email"].'</td>';
                            echo '</tr>';
                        }
                    } 
                    else {
                        echo "No users found";
                    }
                ?>
                </table>
	    </div>
    </div>

    <div class="maincontainer">
        <h1 style="text-align: center; color: black; font-family: 'Audiowide', cursive; letter-spacing: 0.5px; font-weight: lighter;">Welcome admin</h1>
        <div class="functionalities">
            <p class="table-headers">Search Users</p>
            <p class="table-headers">Delete Users</p>
            <p class="table-headers">Add Questions</p>
            <div class="search-users">
                <div class="search-block">
                    <p style="grid-column: span 2;">Enter user email id </p>
                    <input type="text" name="usrEmailID" id ="usrEmailID" style="outline: none; height: 25px; width: 80%; border-radius: 4px; border: 1px solid black; text-align: center; background-color: #BABABA; font-family: 'Montserrat', sans-serif;" required>
                    <input type="button" class="submit-delete searchs" onclick="getUser()" value="Search"/>
                    <input class="submit-delete searchs" id="user-profile" type="submit" value="Search all users">
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
                            <td><label style="font-size: medium;" for="mail-delete">Enter User's email id</label></td>
                            <td><input style="font-family: 'Montserrat', sans-serif; width: 100%;" class="form-inputs" type="text" name="mail-delete" id="mail-delete" required><br></td>
                        </tr>
                        <tr>
                            <td><label style="font-size: 15px;" for="admin-password">Enter Admin password</label></td>
                            <td><input style="width: 100%" class="form-inputs" type="password" name="admin-password" id="admin-password" required></td>
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