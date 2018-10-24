
<?php
include("check.php");
?>
<!DOCTYPE html>
<html>
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

    
        <title>Schemes</title>

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
                <a class="navbar-brand" href="index.html">KrishiSevak</a>
            </div>

             <div class="header-right">

                <a href="arrived.php" class="btn btn-info" title="New Requests"><b></b><i class="fa fa-envelope-o fa-2x"></i></a>
                <a href="status.php" class="btn btn-primary" title="Status"><b></b><i class="fa fa-bars fa-2x"></i></a>
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
                                <a href="addscheme.php"><i class="fa fa-edit"></i>Add Scheme</a>
                            </li>
                            <li>
                                <a class="active-menu" href="schemes.php"><i class="fa fa-flash "></i>Existing Schemes</a>
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
                        <a href="#"><i class="fa fa-sqaure-o "></i>User Details <span class="fa arrow"></span></a>
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
                        <h1 class="page-head-line">Schemes</h1>
                    </div>
                  </div>  
          <div class="row">
                <div class="col-md-13">
                        <section>
                         
                   
                            <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                <thead>
                                  <tr>
                                        <th>Scheme Id</th>
                                        <th>Scheme Name</th>
                                       
                                        
                                        <th>Start date</th>
                                        <th>End date</th>
                                        <th>Description</th>
                                        <th>Maximum Enrollement</th>
                                        <th>Modify / Update </th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>Scheme Id</th>
                                        <th>Scheme Name</th>
                                        
                                        
                                        <th>Start date</th>
                                        <th>End date</th>
                                        <th>Description</th>
                                        <th>Maximum Enrollement</th>
                                        <th>Modify / Update </th>
                                    </tr>
                                </tfoot>
                            <?php

$link = include("connect.php");
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Attempt select query execution
$uname=$_SESSION['username'];
$kid=mysqli_query($db,"SELECT KrishiBhavan_id FROM `clogin` WHERE username='$uname'");
//$kbid = mysqli_fetch_assoc($kid);
$row=mysqli_fetch_array($kid,MYSQLI_ASSOC);
$row1=implode('',$row);

$sql = "SELECT * FROM notification where KrishiBhavan_id='$row1'";

$result=mysqli_query($link,$sql);
                                   
                               if($result){
                                 if(($p=mysqli_num_rows($result))> 0){
                                    ?>
                                <tbody>
                                        <?php
                                     while($row = mysqli_fetch_array($result, MYSQLI_BOTH))
                                     {$rows[]=$row;
                                     }
                                        for($i=0;$i<$p;$i++)
                                        {$row=$rows[$i];
                                        ?>
                                        <tr> 
                            
                           <td> <?php echo $row['Not_id']?></td>
                            <td> <?php echo $row['Not_title']?></td>
                            
                            
                            <td> <?php echo $row['Is_date']?></td>
                            <td> <?php echo $row['Lt_date']?></td>
                             <td> <?php echo $row['Descp']?></td>
                            <td> <?php echo $row['Max_roll']?></td>
                            <td><a href="modifyscheme.php?reqid=<?php echo $row['Not_id']; ?>" >Edit</a> / <a href="deletescheme.php?reqid=<?php echo $row['Not_id']; ?>" >Delete</a> </td>
                                </tr>

   
                    <?php 
            
            }
                mysqli_free_result($result);
                    }
                   
            }?>
                               
                                </tbody>
                            </table>
<?php
// Close connection
mysqli_close($link);

?>
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
    <script src="../../plugins/jquery-datatable/extensions/export/buttons.html5.min.js"></script>
    <script src="../../plugins/jquery-datatable/extensions/export/buttons.print.min.js"></script>

    <!-- Custom Js -->
    <script src="../../js/admin.js"></script>
    <script src="../../js/pages/tables/jquery-datatable.js"></script>

    <!-- Demo Js -->
    <script src="../../js/demo.js"></script>
</body>

</html>