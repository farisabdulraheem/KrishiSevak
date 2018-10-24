﻿
<?php
include("check.php");
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
     <title>Add Scheme</title>
    <!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!--CUSTOM BASIC STYLES-->
    <link href="assets/css/basic.css" rel="stylesheet" />
    <!--CUSTOM MAIN STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="main.php">KrishiSevak</a>
                </div>
              <div class="header-right">

                <a href="arrived.php" class="btn btn-info" title="New Requests"><b></b><i class="fa fa-envelope-o fa-2x"></i></a>
                <a href="Status.php" class="btn btn-primary" title="Status"><b></b><i class="fa fa-bars fa-2x"></i></a>
                <a href="logout.php" class="btn btn-danger" title="Logout"><i class="fa fa-exclamation-circle fa-2x"></i></a>

            </div>
        </nav>
        <!-- /. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <li>
                        <div class="user-img-div">
                            <img src="assets/img/user.png" class="img-thumbnail" />

                            <div class="inner-text">
                                        Kondotty Krishi Bhavan
                            <br />
                              
                            </div>
                        </div>

                    </li>


                    <li>
                        <a href="main.php"><i class="fa fa-dashboard "></i>Dashboard</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-desktop "></i>Requests <span class="fa arrow"></span></a>
                         <ul class="nav nav-second-level">
                           
                            <li>

                                <a href="arrived.php"><i class="fa fa-bell "></i>Arrived</a>
                            </li>
                             <li>
                                <a href="pending.php"><i class="fa fa-circle-o "></i>Pending</a>
                            </li>
                             <li>
                                <a href="verified.php"><i class="fa fa-code "></i>Verified</a>
                            </li>
                             
                            
                           
                        </ul>
                    </li>
                    <li>
                        <a href="status.php"><i class="fa fa-flash "></i>Status </a>
                        
                    </li>
                     <li>
                        <a class="active-menu-top" href="#"><i class="fa fa-yelp "></i>Schemes <span class="fa arrow"></span></a>
                         <ul class="nav nav-second-level collapse in">
                            <li>
                                <a class="active-menu" href="addscheme.php"><i class="fa fa-edit"></i>Add Scheme</a>
                            </li>
                            <li>
                                <a href="schemes.php"><i class="fa fa-flash "></i>Existing Schemes</a>
                            </li>
                             
                        </ul>
                    </li>
                        <li>
                        <a href="#"><i class="fa fa-bicycle "></i>Booking <span class="fa arrow"></span></a>
                         <ul class="nav nav-second-level">
                           
                             <li>
                                <a href="addbooking.php"><i class="fa fa-desktop "></i>Add Booking </a>
                            </li>
                             <li>
                                <a href="booking.php"><i class="fa fa-code "></i>Existing Booking</a>
                            </li>
                             <li>
                                <a href="bookreq.php"><i class="fa fa-code "></i>Booking Request</a>
                            </li> 
                           
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-male "></i>User Details <span class="fa arrow"></span></a>
                         <ul class="nav nav-second-level">
                           
                             <li>
                                <a href="adduser.php"><i class="fa fa-desktop "></i>Add User </a>
                            </li>
                             <li>
                                <a href="user.php"><i class="fa fa-code "></i>Existing User</a>
                            </li>
                             
                           
                        </ul>
                    </li>
                    
                        </ul>
                    </li>
                    
                 
            </div>

        </nav>
  
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Insert Schemes</h1>
                      

                    </div>
                </div>
                <!-- /. ROW  -->
                <div class="row">
            <div class="col-md-11">
               <div class="panel panel-info">
                        <div class="panel-heading">
                           BASIC FORM
                        </div>
                        <div class="panel-body">
                            <form role="form" method="POST">
                                        <div class="form-group">
                                            <label>Enter Scheme Name</label>
                                            <input class="form-control" type="text" name="Not_title">
                                       
                                        </div>
                                 
                                         <div class="form-group">
                                            <label>Description</label>
                                            <textarea class="form-control" name="Descp" rows="5"></textarea>
                                        </div>
                                         <div class="form-group">
                                            <label>Enter Date Of Publishing</label>
                                            <input class="form-control" name="Is_date" type="date">
                                 
                                        </div>
                                         <div class="form-group">
                                            <label>Enter last Date for applications</label>
                                            <input class="form-control" name="Lt_date" type="date">
                                     
                                        </div>
                                         <div class="form-group">
                                            <label>Enter Maximum Number of Applicants</label>
                                            <input class="form-control" type="number" name="Max_roll">
                                    
                                        </div>
                                    </div>
                                      <button type="submit" class="btn btn-info" name="submit" value="Register!">Submit </button>

                                      </form>  

            
</div>

</div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
    <!-- /. WRAPPER  -->
    <div id="footer-sec">
        
    </div>
    <!-- /. FOOTER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
    <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
    <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>


</body>
</html>
<?php
$db=include("connect.php");

$uname=$_SESSION['username'];
$kid=mysqli_query($db,"SELECT KrishiBhavan_id FROM `clogin` WHERE username='$uname'");

$row=mysqli_fetch_array($kid,MYSQLI_ASSOC);
$row1=implode('',$row);

if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
} 
if(isset($_POST["submit"]))
{
    $Not_title = $_POST["Not_title"];
    $Descp = $_POST["Descp"];
    $Is_date = $_POST["Is_date"];
    $Lt_date = $_POST["Lt_date"];
    $Max_roll = $_POST["Max_roll"];
 
    $Not_title = mysqli_real_escape_string($db, $Not_title);
    $Is_date= mysqli_real_escape_string($db,$Is_date);
    $Lt_date= mysqli_real_escape_string($db,$Lt_date);
    $Descp = mysqli_real_escape_string($db, $Descp);
    $Max_roll= mysqli_real_escape_string($db,$Max_roll);

    $sql = mysqli_query($db, "INSERT INTO notification (KrishiBhavan_id,Not_title,Is_date,Lt_date,Descp,Max_roll) VALUES ('$row1','$Not_title', '$Is_date','$Lt_date','$Descp','$Max_roll')");



    if (($sql) === TRUE) {
	 echo "<script type='text/javascript'>alert(' New Scheme added Successfully . . . ');
       window.location.href='schemes.php';
        </script>";
}
 else
  {
		echo "<script type='text/javascript'>alert('Some error processing your request . . .');
        window.location.href='schemes.php';
        </script>";
 }
}
$db->close();
?>


