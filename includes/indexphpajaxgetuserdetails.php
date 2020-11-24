
<?php header("Content-Type: application/json; charset=UTF-8"); ?>
<?php session_start();
?>
<?php

$obj = json_decode($_POST["user"], false);

$conn = mysqli_connect('localhost', 'root', '','dbug' );
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$emailid=$obj->usrEmail;
$output = array();

$sql = "SELECT * from register where email ='$emailid'";
$result = mysqli_query($conn, $sql);
 while($row = mysqli_fetch_assoc($result)) {
	$output[]=$row;
  }
$sresult = json_encode($output);
echo $sresult;
mysqli_close($conn);
?>
