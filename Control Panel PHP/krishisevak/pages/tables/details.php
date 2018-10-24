<?php
include("check.php");
$id=$_GET['reqid'];
?>
<!DOCTYPE php>
<php xmlns="http://www.w3.org/1999/xphp">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Existing Users</title>

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

                <a href="message-task.php" class="btn btn-info" title="New Message"><b></b><i class="fa fa-envelope-o fa-2x"></i></a>
                <a href="message-task.php" class="btn btn-primary" title="New Task"><b></b><i class="fa fa-bars fa-2x"></i></a>
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
                        <a href="#"><i class="fa fa-yelp "></i>Schemes <span class="fa arrow"></span></a>
                         <ul class="nav nav-second-level">
                           <li>
                                <a href="addscheme.php"><i class="fa fa-desktop "></i>Add Scheme </a>
                            </li>
                             <li>
                                <a href="schemes.php"><i class="fa fa-code "></i>Existing Schemes</a>
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
                        <a class="active-menu-top" href="#"><i class="fa fa-male "></i>User Details <span class="fa arrow"></span></a>
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
                        <h1 class="page-head-line">User Details</h1>
                      

                    </div>
                </div>
                <!-- /. ROW  -->
                <?php
                $link = include("connect.php");
                $sql = "SELECT * FROM user_info where Aadhar_no=$id";
                $result=mysqli_query($link,$sql);
                $sql1="SELECT * FROM add_user_info where Aadhar_no=$id";
                $result1=mysqli_query($link,$sql1);
                                   
                               if($result ){
                                if($result1){
                                 if(($p=mysqli_num_rows($result))> 0){
                                     $row = mysqli_fetch_array($result, MYSQLI_BOTH);
                                      $row1 = mysqli_fetch_array($result1, MYSQLI_BOTH);
                                    // $kid=$row['KrishiBhavn_id'];
                ?>

                <div class="row">
            <div class="col-md-11">
               <div class="panel panel-info">
                        <div class="panel-heading">
                           Information form
                        </div>
                        <div class="panel-body">
                            <form role="form" method="POST">
                                        <div class="form-group">
                                            <label>User Id</label>
                                            <input class="form-control" type="number" name="Nt_id" value ='<?php echo $row['User_id']?>'>
                                        </div>
                                        <div class="form-group">
                                            <label>Name</label>
                                            <input class="form-control" type="text" name="Not_title" value ='<?php echo $row['Name']?>'>
                                        </div>
                                 
                                         <div class="form-group">
                                            <label>Krishibhavan Id</label>
                                            <input class="form-control" type="number" name="Descp"  value ='<?php echo $row['KrishiBhavan_id']?>'>
                                        </div>
                                         <div class="form-group">
                                            <label>Phone Number</label>
                                            <input class="form-control" name="Is_date" type="number" value ='<?php echo $row['Phone_no']?>'>
                                 
                                        </div>
                                         <div class="form-group">
                                            <label>Aadhar Number</label>
                                            <input class="form-control" name="Lt_date" type="number" value ='<?php echo $row['Aadhar_no']?>'>
                                     
                                        </div>
                                        <div class="form-group">
                                            <label>DOB</label>
                                            <input class="form-control" type="date" name="Max_roll" value ='<?php echo $row1['DOB']?>'>
                                         </div>
                                         <div class="form-group">
                                            <label>House Name</label>
                                            <input class="form-control" type="text" name="Max_roll" value ='<?php echo $row1['House_name']?>'>
                                         </div>
                                         <div class="form-group">
                                            <label>Pincode</label>
                                            <input class="form-control" type="number" name="Max_roll" value ='<?php echo $row1['Pincode']?>'>
                                         </div>
                                    </div>
                                      <button type="submit" class="btn btn-info" name="submit" value="Register!"> OK </button>

                                      </form>  
            <?php 
            
                   
                        mysqli_free_result($result);
                         }
                        }
                    }
                     if (isset($_POST["submit"]) ){
                        echo "<script type='text/javascript'>alert('Cintinue . . . ? ? ?');
                        window.location.href='user.php';
                        </script>";
      
    }      
                   
            ?>

            
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
</php>
