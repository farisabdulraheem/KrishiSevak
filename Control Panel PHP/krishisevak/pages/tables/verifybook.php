<?php
$id=$_GET['bookid'];
include("check.php");
$db=include("connect.php");
$uname=$_SESSION['username'];
//date_default_timezone_set('India/Chennai');


if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
} 
  $sql = mysqli_query($db,"UPDATE `booking request` set status='Verified'  where Booking_reg_id='$id'");

  if (($sql) === TRUE) {
	 echo "<script type='text/javascript'>alert(' Verified . . .');
        window.location.href='bookreq.php';
        </script>";
}
 else
  {
		echo "<script type='text/javascript'>alert('Some error processing your request . . .');
        window.location.href='bookreq.php';
        </script>";
 }
?>