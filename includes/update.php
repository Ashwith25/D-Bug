<?php
session_start();
error_reporting(E_ALL ^ E_NOTICE);
$conn = new mysqli('localhost', 'root', '');
mysqli_select_db($conn, 'dbug');

$name = $_POST["username"];
$pass = $_POST["password"];
$email = $_SESSION["user"];

$fetch_pass_query =  "select password from register where email = '$email'";
$result_pass = mysqli_query($conn, $fetch_pass_query);
$fetch_pass = mysqli_fetch_row($result_pass);
$verify_pass = password_verify($pass, $fetch_pass[0]);

if ($verify_pass) {
    $query1 = "update register set name='$name' where email='$email'";
    if (mysqli_query($conn, $query1)) {
        echo "Record updated successfully";
      }
    echo '<br>Please login again to see the changes';
    header('refresh:2, url=..\views\home.php');
}
else {
    echo "password is incorrect";
    header('refresh:2, url=..\views\home.php');
}