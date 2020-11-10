<?php
session_start();
$conn = new mysqli('localhost', 'root', '');
mysqli_select_db($conn, 'dbug');

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$name = $_POST['name'];
$pass = $_POST['password'];
$email = $_POST['email'];

// Form validation

$name_pattern = '/^[a-zA-Z ]*$/'; 
$email_pattern = '/[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$/';

if(!preg_match($name_pattern, $name)) { 
    echo("Name format mismatch");
    echo("<br>Redirecting you to register page...");
    header('refresh:2, url=..\views\login.php');
    exit();
} 
if(!preg_match($email_pattern, $email)) {
    echo("<br>Email invalid");
    echo("<br>Redirecting you to register page...");
    header('refresh:2, url=..\views\login.php');
    exit();
} 

$query_check = "select * from register where email='$email'";
$result = mysqli_query($conn, $query_check);
$num = mysqli_num_rows($result);
if($num==1){
    echo 'USER ALREADY EXISTS',"<br>";
    echo 'Redirecting...';
    header('refresh:2, url=..\views\login.php');
    exit();
}
else {
    $pass_hash = password_hash($pass, PASSWORD_DEFAULT);
    $query = "insert into register (name, password, email) values ('$name', '$pass_hash', '$email')";
    mysqli_query($conn, $query);
    echo 'ACCOUNT CREATED';      
    header('refresh:2, url=..\views\login.php');
    exit();
}