<?php
session_start();
$conn = new mysqli('localhost', 'root', '');
mysqli_select_db($conn, 'dbug');

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$question = $_POST['question'];
$answer = $_POST['answer'];

if ($question=="" || $answer==""){
    echo 'Question or Answer is blank';
    header('refresh:2, url=..\views\adminHome.php');
    exit();
}
else{
    $query = "insert into questions (question, answer) values ('$question', '$answer')";
    mysqli_query($conn, $query);
    echo 'Question inserted';
    header('refresh:2, url=..\views\adminHome.php');
    exit();
}