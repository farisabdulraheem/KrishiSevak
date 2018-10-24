<?php
$id=$_GET['reqid'];
include("check.php");
echo $id;
$db=include("connect.php");
$uname=$_SESSION['username'];
//date_default_timezone_set('India/Chennai');

if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
} 
  $sql = mysqli_query($db,"DELETE FROM notification WHERE Not_id='$id'");

  if (($sql) === TRUE) {
	 echo "<script type='text/javascript'>alert(' Deleted Successfully . . . ');
       window.location.href='schemes.php';
        </script>";
}
 else
  {
		echo "<script type='text/javascript'>alert('Some error processing your request . . .');
        window.location.href='schemes.php';
        </script>";
 }
?>