

<?php include("auth.php");?>
<?php include("css.php");?>
<?php include("connect.php");?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Joan Jobs</title>
  
    <title>Joan Jobs</title>
  
  <link rel="shortcut icon" href="logoc.jpg">

  <!-- Bootstrap Core CSS -->
  <link href="../../css/bootstrap.min.css" rel="stylesheet">


  <!-- Custom Fonts -->
  <link href="../../css/font-awesome.min.css" rel="stylesheet" type="text/css">
   <link rel="stylesheet" type="text/css" href="../../datatables/responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="../../datatables/dataTables.min.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script>
// Script to open and close sidebar
function w3_open() {
    document.getElementById("mySidebar").style.display = "block";
    document.getElementById("myOverlay").style.display = "block";
}
 
function w3_close() {
    document.getElementById("mySidebar").style.display = "none";
    document.getElementById("myOverlay").style.display = "none";
}
</script>
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", sans-serif}
</style>
<body class="w3-light-grey w3-content" style="max-width:1600px">

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-collapse w3-white w3-animate-left" style="z-index:3;width:300px;" id="mySidebar"><br>
  <div class="w3-container">
    <a href="#" onclick="w3_close()" class="w3-hide-large w3-right w3-jumbo w3-padding w3-hover-grey" title="close menu">
      <i class="fa fa-remove"></i>
    </a>
   <?php
          $result = $db->prepare("SELECT * FROM employers WHERE accountid= :userid");
          $result->bindParam(':userid', $session_id);
          $result->execute();
          $foundrows = $result->rowCount();
      if($foundrows > 0)
      { 
            $row = $result->fetch();
    ?>
      
       <h3 class="mt-5"><b><?php echo $row['fname']." ".$row['mname']." ".$row['lname']; ?></b></h3>
       <h4>( As Client )</h4> <p><span class="w3-small">Current Date Time :
        <?php
        date_default_timezone_set("Asia/Manila");
        echo Date("M d, Y h:i:s a");
   
        ?></span>
        </p>
           
       <?php if(empty($row['avatar']))
       {
        $src="../../img/default_male_pic.png";
       }  
             else      
           {
       $src="./uploads/profile/".$row['avatar'];
       } ?>
        <img class="img-thumbnail" style="width: 200px;height: 150px;" src="<?php echo $src ?>" >
       <p>Email: <span ><?php echo $row['email'];?></span></p>
       <input style="display: none;" type="email" name="email" value="<?php echo $row['email'];?>">
 <?php
            }
       ?>

    <h4><b>Profile</b></h4>
  
  </div>
  <div class="w3-bar-block">
    <a href="home.php" onclick="w3_close()" class="w3-bar-item w3-button w3-padding w3-text-teal"><i class="  fa fa-home fa-fw w3-margin-right"></i>Home</a>
        <a href="myprofile.php" onclick="w3_close()" class="w3-bar-item w3-button w3-padding "><i class="fa fa-user-circle-o fa-fw w3-margin-right"></i>Profile</a>

           <a href="refer.php" onclick="w3_close()" class="w3-bar-item w3-button w3-padding "><i class="fa fa-circle-o fa-fw w3-margin-right"></i>notification
<?php   
   $result = $db->prepare("SELECT * FROM refer WHERE emp= :userid");
            $result->bindParam(':userid', $session_id);
            $result->execute();
          $foundrows = $result->rowCount();
      if($foundrows > 0)




        ?>


      <i style="color: red;"><?php echo $foundrows; ?></i>






         </a>
        <a href="searchapplicant.php" onclick="w3_close()" class="w3-bar-item w3-button w3-padding "><i class="fa fa-th-large fa-fw w3-margin-right"></i>Applicant</a> 
   
    <a href="myjobpost.php" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-shopping-bag fa-fw w3-margin-right"></i>My Job List</a>

     <a href="chat.php" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-comment fa-fw w3-margin-right"></i>Chat</a>

 <a href="aboutus.php" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-diamond fa-fw w3-margin-right"></i>About us</a>
 <a href="help.php" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-question-circle-o fa-fw w3-margin-right"></i>Help</a>
 <a href="logout.php" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-arrow-circle-left fa-fw w3-margin-right"></i>Log Out</a>
<br><br><br><br>

  </div>
  <div class="w3-panel w3-large">
    <i class="fa fa-facebook-official w3-hover-opacity"></i>
    <i class="fa fa-instagram w3-hover-opacity"></i>
    <i class="fa fa-snapchat w3-hover-opacity"></i>
    <i class="fa fa-pinterest-p w3-hover-opacity"></i>
    <i class="fa fa-twitter w3-hover-opacity"></i>
    <i class="fa fa-linkedin w3-hover-opacity"></i>
  </div>
</nav>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:300px">

  <!-- Header -->
  <header id="portfolio">
    <a href="#"><img  style="width:65px;" class="w3-circle w3-right w3-margin w3-hide-large w3-hover-opacity"></a>
    <span class="w3-button w3-hide-large w3-xxlarge w3-hover-text-grey" onclick="w3_open()"><i class="fa fa-bars"></i></span>
   
  </header>
