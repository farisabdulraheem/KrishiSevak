<?php
include("check.php");
?>
<!DOCTYPE php>
<php xmlns="http://www.w3.org/1999/xphp">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Exisiting Booking</title>

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
                        <a class="active-menu-top" href="#"><i class="fa fa-bicycle "></i>Booking <span class="fa arrow"></span></a>
                         <ul class="nav nav-second-level colapse in">
                           <li>
                                <a href="addbooking.php"><i class="fa fa-desktop "></i>Add Booking </a>
                            </li>
                             <li>
                                <a class="active-menu" href="booking.php"><i class="fa fa-code "></i>Existing Booking</a>
                            </li>
                             <li>
                                <a href="bookreq.php"><i class="fa fa-code "></i>Booking Requests</a>
                            </li>
                             
                             
                        </ul>
                    </li>
                    
                    
                           
                      
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
               <div id="page-wrapper">
            <div id="page-inner">
               
             <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Booking Items</h1>
                    </div>
                  </div>  
          <div class="row">
                <div class="col-md-13">
                        <section>
                         
                   
                            <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                <thead>
                                  <tr>
                                        <th>Booking Id</th>
                                        <th>Item</th>
                                       
                                        
                                        <th>Days</th>
                                        <th>Amount</th>
                                        <th>Details</th>
                                       
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>Booking Id</th>
                                        <th>Item</th>
                                       
                                        
                                        <th>Days</th>
                                        <th>Amount</th>
                                        <th>Details</th>
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

$sql = "SELECT * FROM booking where KrishiBhavan_id='$row1'";

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
                            
                           <td> <?php echo $row['Booking_id']?></td>
                            <td> <?php echo $row['Item']?></td>
                            
                            
                            <td> <?php echo $row['Days']?></td>
                            <td> <?php echo $row['Amount']?></td>
                             <td> <?php echo $row['Detail']?></td>
                           
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
</php>
