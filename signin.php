<?php
session_start();
$conn = new mysqli('localhost', 'root', '');
mysqli_select_db($conn, 'dbug');

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$email = $_POST['signin_email'];
$pass = $_POST['signin_password'];

$fetch_mail_query =  "select email from register where email ='$email'";
$fetch_pass_query =  "select password from register where email = '$email'";

echo 'query = '.$fetch_mail_query;
$result_mail = mysqli_query($conn, $fetch_mail_query);
$result_pass = mysqli_query($conn, $fetch_pass_query);

$fetch_mail = mysqli_fetch_row($result_mail);
$fetch_pass = mysqli_fetch_row($result_pass);

$verify_pass = password_verify($pass, $fetch_pass[0]);
if ($fetch_mail[0]==$email) {
    if ($verify_pass){
        header('location:home.html');
    }
    else{
        echo 'Password Mismatch'.'<br>';
        echo 'Redirecting you to login page...';
        header('refresh:2, url=login.php');
    }
}
else{
    echo 'USER NOT FOUND',"<br>";
    echo 'Redirecting...';
    header('refresh:2, url=login.php');
}

$_SESSION["username"] = $email;
?>