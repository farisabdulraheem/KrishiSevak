<?php
$id=$_GET['reqid'];
include("check.php");
$db=include("connect.php");
$uname=$_SESSION['username'];
//date_default_timezone_set('India/Chennai');
$dt = new DateTime();
$today = $dt->format('Y/m/d');

if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
} 
  $sql = mysqli_query($db,"UPDATE `notification request` set Date_verf='$today',status='Verified',Verified_by='$uname',Remarks='' where Request_reg_id='$id'");

 if (mysqli_num_rows($sql) > 0) {
	echo "<script type='text/javascript'>alert('You have approved the Event')</script>";
	 header('Location:main.php');
}
 else
  {
	echo "<script type='text/javascript'>alert('There is some error !!!')</script>";
	header('Location:main.php');
 }
?>