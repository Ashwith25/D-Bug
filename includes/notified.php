<?php header("Content-Type: application/json; charset=UTF-8"); ?>
<?php session_start();
?>
<?php

$obj = json_decode($_POST["question"], false);

$conn = mysqli_connect('localhost', 'root', '','dbug' );
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$quesid=$obj->quesid;

$sql = "insert into subscribe(email) values ('$quesid')";
mysqli_query($conn, $sql);

mysqli_close($conn);
?>
