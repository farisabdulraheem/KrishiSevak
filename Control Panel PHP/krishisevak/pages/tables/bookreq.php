<?php
include("check.php");
$db=include("connect.php");

if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
} 
  $uname=$_SESSION['username'];
  $kid=mysqli_query($db,"SELECT KrishiBhavan_id FROM `clogin` WHERE username='$uname'");
  $row=mysqli_fetch_array($kid,MYSQLI_ASSOC);
  $row1=implode('',$row);
  //echo $row1 ;
  $uid=mysqli_query($db,"SELECT User_id FROM user_info WHERE KrishiBhavan_id=$row1");
  $uids=mysqli_fetch_array($uid,MYSQLI_ASSOC);
  
?>
<!DOCTYPE php>
<php>
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
   
    <link rel="icon" href="../../favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="../../plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="../../plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="../../plugins/animate-css/animate.css" rel="stylesheet" />

    <!-- JQuery DataTable Css -->
    <link href="../../plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css" rel="stylesheet">

    
        <title>Arrived</title>

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
                <a class="navbar-brand" href="index.php">KrishiSevak</a>
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
                        <a href="index.php"><i class="fa fa-dashboard "></i>Dashboard</a>
                    </li>
                    <li>
                        <a class="active-menu-top" href="#"><i class="fa fa-desktop "></i>Requests <span class="fa arrow"></span></a>
                         <ul class="nav nav-second-level ">
        
                            <li>
                                <a  href="arrived.php"><i class="fa fa-bell "></i>Arrived</a>
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
                         <ul class="nav nav-second-level collapse in">
                           
                             <li>
                                <a href="addbooking.php"><i class="fa fa-desktop "></i>Add Booking </a>
                            </li>
                             <li>
                                <a href="booking.php"><i class="fa fa-code "></i>Existing Booking</a>
                            </li>
                           <li>
                                <a class="active-menu" href="bookreq.php"><i class="fa fa-code "></i>Booking Request</a>
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
                        <h1 class="page-head-line">Booking Request </h1>
                    </div>
                  </div> 
                  
                  <div class="row">

                    <div class="col-md-11">

                        <div class="table-responsive">
                            <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                <thead>
                                    <tr>
                                        <th>Booking Reg ID</th>
                                        <th>Booking Id</th>
                                        <th>User id</th>
                                        <th>From Date</th>
                                        <th>To Date</th>
                                         <th>Days</th>
                                         <th>Amount</th>
                                         <th>Status</th>
                                         <th>Update</th>
                                    </tr></thead>
                                    <tbody>
                                    <?php
                                    if($uids!=null)
                                    {
                                        $usid=implode('',$uids);
                                        $sql = mysqli_query($db,"SELECT * FROM `booking request` WHERE User_id=$usid");
                  if (mysqli_num_rows($sql) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($sql)) { ?>

                                    <tr>
                                    <td contentEditable ><?php echo $row["Booking_reg_id"] ?></td>
                                      <td contentEditable ><?php echo $row["Booking_id"] ?></td>
                                        <td contentEditable ><?php echo $row["User_id"] ?></td>
                                        <td contentEditable ><?php echo $row["From_date"] ?></td>
                                         <td contentEditable ><?php echo $row["To_date"] ?></td>
                                          <td contentEditable ><?php echo $row["Days"] ?></td>
                                          <td contentEditable ><?php echo $row["Amount"] ?></td>
                                        <td contentEditable ><?php echo $row["Status"] ?></td>
                                        <td><a href="verifybook.php?bookid=<?php echo $row['Booking_reg_id']; ?>" >Verify</a>/<a href="rejectbook.php?bookid=<?php echo $row['Booking_reg_id']; ?>" >Reject</a></td>
                                    </tr><?php 
    }
                  }
                  else
                  {
                      echo "error";
                  }         
                                    }                             
?>
          
                                </tbody>
                            </table>
                        
                        
                        </div>
                    </div>
                </div>
            </div>
            </div>
            </div>
            <!-- #END# Basic Examples -->
           
            
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

</php>