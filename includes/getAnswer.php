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
$output = array();

$sql = "SELECT * from questions where quesid ='$quesid'";
$result = mysqli_query($conn, $sql);
 while($row = mysqli_fetch_assoc($result)) {
	$output[]=$row;
  }
$sresult = json_encode($output);
echo $sresult;
mysqli_close($conn);
?>
