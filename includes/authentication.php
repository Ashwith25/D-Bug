<?php
session_start();
$conn = new mysqli('localhost', 'root', '');
mysqli_select_db($conn, 'dbug');

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$pass = $_POST['admin-password'];
$user_mail = $_POST['mail-delete'];

if (!($pass == "dbug")) {
    echo 'Authentication failed';      
    header('refresh:3, url=..\views\adminHome.php');
    exit();
}
else{
    $delete_query = "delete from register where email='$user_mail'";
    mysqli_query($conn, $delete_query);
    echo "User Data deleted successfully!";
    header('refresh:3, url=..\views\adminHome.php');
    exit();
}
