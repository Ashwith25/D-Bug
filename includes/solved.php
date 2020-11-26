
<?php header("Content-Type: application/json; charset=UTF-8"); ?>
<?php session_start();
?>
<?php

$obj = json_decode($_POST["question"], false);

$conn = mysqli_connect('localhost', 'root', '','dbug' );
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$userid = $_SESSION["userid"];
$quesid=$obj->quesid;

$sql = "insert into progress(userid, quesid) values ('$userid', '$quesid')";
mysqli_query($conn, $sql);

mysqli_close($conn);
?>
