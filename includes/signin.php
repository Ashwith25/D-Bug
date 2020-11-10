<?php
session_start();
error_reporting(E_ALL ^ E_NOTICE);
$conn = new mysqli('localhost', 'root', '');
mysqli_select_db($conn, 'dbug');

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$email = $_POST['signin_email'];
$pass = $_POST['signin_password'];

$fetch_mail_query =  "select email from register where email ='$email'";
$fetch_pass_query =  "select password from register where email = '$email'";
$fetch_name_query = "select name from register where email = '$email'";

$result_mail = mysqli_query($conn, $fetch_mail_query);
$result_pass = mysqli_query($conn, $fetch_pass_query);
$result_name = mysqli_query($conn, $fetch_name_query);

$fetch_mail = mysqli_fetch_row($result_mail);
$fetch_pass = mysqli_fetch_row($result_pass);
$fetch_name = mysqli_fetch_row($result_name);

$verify_pass = password_verify($pass, $fetch_pass[0]);

if ($fetch_mail[0]==$email) {
    if ($verify_pass){
        $_SESSION["user"] = $email;
        $_SESSION["name"] = $fetch_name[0];
        header('location:..\views\home.php');
        exit();
    }
    else{
        echo 'Incorrect password'.'<br>';
        echo 'Redirecting you to login page...';
        header('refresh:2, url=..\views\login.php');
        exit();
    }
}
else{
    echo 'USER NOT FOUND',"<br>";
    echo 'Redirecting...';
    header('refresh:2, url=..\views\login.php');
    exit();
}
