<?php include("auth.php");?>
<?php include("connect.php");?>
<!DOCTYPE html>
<html>
<title>Joan Jobs</title>
<meta charset="UTF-8">

<meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="../../css/bootstrap.min.css" rel="stylesheet">


<script src="../../js/jquery.min.js"></script>
<script src="../../datatables/datatables/js/jquery.dataTables.min.js"></script>

<!-- DataTables JavaScript -->

<script src="../../datatables/datatables/js/dataTables.bootstrap4.min.js"></script>
<script src="../../datatables/responsive/js/responsive.bootstrap4.js"></script>

<script src="../../js/bootstrap.min.js"></script>
<script src="../../js/tether.min.js"></script> 
  <!-- Custom Fonts -->
  <link href="../../css/font-awesome.min.css" rel="stylesheet" type="text/css">
   <link rel="stylesheet" type="text/css" href="../../datatables/responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="../../datatables/dataTables.min.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
html,body,h1,h2,h3,h4,h5 {font-family: "Raleway", sans-serif}
</style>
<body class="w3-light-grey">

<!-- Top container -->
<div class="w3-bar w3-top w3-black w3-large" style="z-index:4">
  <button class="w3-bar-item w3-button w3-hide-large w3-hover-none w3-hover-text-light-grey" onclick="w3_open();"><i class="fa fa-bars"></i>  Menu</button>
  <span class="w3-bar-item w3-right"><i>Joan Jobs</i></span>
</div>

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-collapse w3-white w3-animate-left" style="z-index:3;width:300px;" id="mySidebar"><br>
  <div class="w3-container w3-row">
    <div class="w3-col s4">
      <img src="includes/image/admin.jpg" class="w3-circle w3-margin-right" style="width:46px">
    </div>
    <div class="w3-col s8 w3-bar">
      <span>Welcome, <strong><em><?php echo $session_admin_name;?></em></p></strong></span>
      <p style="color: black;" >Current Date Time :
        <?php
        date_default_timezone_set("Asia/Manila");
        echo Date("M d, Y h:i:s a");
        ?>
        </p>
      <a href="editadmin.php?userid=<?php echo $session_id ;?>" class="btn btn-sm btn-outline-success d-inline" ><i class="fa fa-plus"></i> Edit Details </a>
    </div>
  </div>
  <hr>
  <div class="w3-container">
    <h5><a href="home.php">Dashboard<a></h5>
  </div>
  <div class="w3-bar-block">
    <a href="#" class="w3-bar-item w3-button w3-padding-16 w3-hide-large w3-dark-grey w3-hover-black" onclick="w3_close()" title="close menu"><i class="fa fa-remove fa-fw"></i>  Close Menu</a>
    <a href="useradmin.php" class="w3-bar-item w3-button w3-padding w3-blue"><i class="fa fa-address-card-o fa-fw"></i>  User Admin</a>
       <a href="adduser.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-users fa-fw"></i>  Add user</a>
    <a href="joblist.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-comments-o fa-fw"></i>  Job Post</a>
    <a href="jobseekers.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-archive fa-fw"></i>  Applicants</a>
    <a href="employers.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-user fa-fw"></i>   Client</a>
    <a href="logs.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-newspaper-o fa-fw"></i>   Active Logs</a>
     <a href="creatreport.php" class="w3-bar-item w3-button w3-padding"><i class=" fa fa-print fa-fw"></i>   Make A Report</a>
  
 
    <a href="logout.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-cog fa-fw"></i>  Log out</a><br><br>
  </div>
</nav>