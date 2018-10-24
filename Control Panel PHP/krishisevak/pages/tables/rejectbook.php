<?php
$id=$_GET['bookid'];
include("check.php");
$db=include("connect.php");
$uname=$_SESSION['username'];
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
} 

  $sql = mysqli_query($db,"UPDATE `booking request` set  status='Rejected' where Booking_reg_id='$id'");

    if (($sql) === TRUE) {
        echo "<script type='text/javascript'>alert(' Rejected !');
        window.location.href='bookreq.php';
        </script>";
    
    }          
    else {
			echo "<script type='text/javascript'>alert('Some error processing your request . . .');
        window.location.href='bookreq.php';
        </script>";
      
    }
?>