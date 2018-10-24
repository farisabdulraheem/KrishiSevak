<?php
include("check.php");
$db=include("connect.php");

if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
} 
 $usid=null;
 $sql=null;
 $uids=null;
 //$pen=null;
 //$ver=null;
 //$rej=null;
  $uname=$_SESSION['username'];
  $kid=mysqli_query($db,"SELECT KrishiBhavan_id FROM `clogin` WHERE username='$uname'");
  $row=mysqli_fetch_array($kid,MYSQLI_ASSOC);
  $row1=implode('',$row);
 
  $uid=mysqli_query($db,"SELECT User_id FROM user_info WHERE KrishiBhavan_id=$row1");
  if($uid!=NULL)
  {
  $uids=mysqli_fetch_array($uid,MYSQLI_ASSOC);
  if($uids!=null)
  $usid=implode('',$uids);
  
  $sql = mysqli_query($db,"SELECT * FROM `notification request` WHERE User_id=$usid ORDER BY Date_sub DESC LIMIT 5");
  }
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Main</title>

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
     <link href="../../plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css" rel="stylesheet">
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
                            <img src="assets/img/jithu.jpg" class="img-thumbnail" />

                            <div class="inner-text">
                                        Kondotty Krishi Bhavan
                            <br />
                              
                            </div>
                        </div>

                    </li>

                    <li>
                        <a class="active-menu" href="main.php"><i class="fa fa-dashboard "></i>Dashboard</a>
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
                        <a href="#"><i class="fa fa-yelp "></i>Schemes <span class="fa arrow"></span></a>
                         <ul class="nav nav-second-level">
                            <li>
                                <a href="addscheme.php"><i class="fa fa-edit"></i>Add Scheme</a>
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
                    
                 
            </div>

        </nav>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">DASHBOARD</h1>
                         As long as there's a few farmers out there, we'll keep fighting for them.
                        <h1 class="page-subhead-line" > Details of Requests </h1>

                    </div>
                </div>
                <!-- /. ROW  -->
                <div class="row">
                    <div class="col-md-4">
                        <div class="main-box mb-red">
                            <a href="arrived.php">
                                <i class="fa fa-edit fa-5x"></i>
                                <h5>Pending Requests 
                                <?php
                                         if($usid!=null)
                                         {
                                            $pensql = mysqli_query($db,"SELECT count(*) FROM `notification request` WHERE User_id=$usid AND Status='Pending'");
                                            $pent=mysqli_fetch_array($pensql,MYSQLI_ASSOC);
                                            if($pent!=NULL)
                                            {
                                                    $pen=implode('',$pent);
                                                    if($pen!=null)
                                                    echo $pen;
                                            
                                            }
                                            if($pen=NULL)
                                            {
                                                $pen=0;
                                        
                                            echo $pen;
                                            }
                                         }
                                ?></h5>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="main-box mb-dull">
                            <a href="verified.php">
                                <i class="fa fa-plug fa-5x"></i>
                                <h5>Verified Requets
                                <?php
                                         if($usid!=null)
                                         {
                                            $versql = mysqli_query($db,"SELECT count(*) FROM `notification request` WHERE User_id=$usid AND Status='Verified'");
                                            $vert=mysqli_fetch_array($versql,MYSQLI_ASSOC);
                                            if($vert!=NULL)
                                            {       
                                                    $ver=implode('',$vert);
                                                    if($ver!=null)
                                                    echo $ver ;
                                            }
                                            if($ver=NULL)
                                            {
                                                    $ver=0;
                                                    echo $ver ;
                                            }
                                            
                                            }
                                ?></h5>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="main-box mb-pink">
                            <a href="pending.php">
                                <i class="fa fa-circle fa-5x"></i>
                                <h5>Rejected Requests 
                                <?php
                                         if($usid!=null)
                                         {
                                            $rejsql = mysqli_query($db,"SELECT count(*) FROM `notification request` WHERE User_id=$usid AND Status='Rejected'");
                                            $rejt=mysqli_fetch_array($rejsql,MYSQLI_ASSOC);
                                            if($rejt!=NULL)
                                                    $rej=implode('',$rejt);
                                            else
                                                    $rej=0;
                                         
                                            echo $rej ;
                                            }
                                ?></h5>
                            </a>
                        </div>
                    </div>

                </div>
                <!-- /. ROW  -->

                <div class="row">

                    <div class="col-md-11">

                        <div class="table-responsive">
                            <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                <thead>
                                    <tr>
                                        <th>Request Reg ID</th>
                                        <th>Notification Id</th>
                                        <th>User id</th>
                                        <th>Submission Date</th>
                                        <th>Status</th>
                                        <!-- <th>Verification Date</th>
                                         <th>Verified By</th>
                                         
                                         <th>Remarks</th>
                                        <th>Update</th>-->
                                    </tr></thead>
                                    <tbody>
                                    <?php
                         if($sql!=null)           
                  if ((mysqli_num_rows($sql)) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($sql)) { ?>

                                    <tr>
                                    <td contentEditable ><?php echo $row["Request_reg_id"] ?></td>
                                      <td contentEditable ><?php echo $row["Notification_id"] ?></td>
                                        <td contentEditable ><?php echo $row["User_id"] ?></td>
                                        <td contentEditable ><?php echo $row["Date_sub"] ?></td>
                                        <td contentEditable ><?php echo $row["Status"] ?></td>
                                        <!--  <td contentEditable ><?php echo $row["Date_verf"] ?></td>
                                          <td contentEditable ><?php echo $row["Verified_by"] ?></td>
                                          
                                        <td contentEditable ><?php echo $row["Remarks"] ?></td>
                                       <td><a href="verifyreq.php?reqid=<?php echo $row['Request_reg_id']; ?>" >Verify</a>/<a href="rejectreq.php?reqid=<?php echo $row['Request_reg_id']; ?>" >Reject</a></td>
                                   -->
                                    </tr><?php 
    }
                  }
                  else
                  {
                      echo "error";
                  }                                      
?>

                                
                                
                                
                                </tbody>
                            </table>
                        </div>




                        </div>
                 
                <!--/.ROW-->

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
    <script src="assets/js/jquery-1.10.2.js"></script>
    <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
    <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>


    <!-- Jquery Core Js -->
    <script src="../../plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="../../plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Select Plugin Js -->
    <script src="../../plugins/bootstrap-select/js/bootstrap-select.js"></script>

    <!-- Slimscroll Plugin Js -->
    <script src="../../plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="../../plugins/node-waves/waves.js"></script>

    <!-- Jquery DataTable Plugin Js -->
    <script src="../../plugins/jquery-datatable/jquery.dataTables.js"></script>
    <script src="../../plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js"></script>
    <script src="../../plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js"></script>
    <script src="../../plugins/jquery-datatable/extensions/export/buttons.flash.min.js"></script>
    <script src="../../plugins/jquery-datatable/extensions/export/jszip.min.js"></script>
    <script src="../../plugins/jquery-datatable/extensions/export/pdfmake.min.js"></script>
    <script src="../../plugins/jquery-datatable/extensions/export/vfs_fonts.js"></script>
    <script src="../../plugins/jquery-datatable/extensions/export/buttons.php5.min.js"></script>
    <script src="../../plugins/jquery-datatable/extensions/export/buttons.print.min.js"></script>

    <!-- Custom Js -->
    <script src="../../js/admin.js"></script>
    <script src="../../js/pages/tables/jquery-datatable.js"></script>

    <!-- Demo Js -->
    <script src="../../js/demo.js"></script>


</body>
</html>
