<?php include("includes/nav.php");?>
<?php include("connect.php");?>


<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:300px;margin-top:43px;">

  <!-- Header -->
  <header class="w3-container" style="padding-top:22px">
    <h5><b><i class="fa fa-dashboard"></i> My Dashboard</b></h5>
  </header>

  <div class="w3-row-padding w3-margin-bottom">
    <div class="w3-quarter">
      <div class="w3-container w3-red w3-padding-16">
        <div class="w3-left"><i class="fa fa-archive w3-xxxlarge"></i></div>
        <div class="w3-right">
          <h3> <?php   
       $result = $db->prepare("SELECT count(*) as total FROM `jobseekers`");
       $result->execute();
     $row = $result->fetch();
     echo $row["total"];
     ?></h3>
        </div>
        <div class="w3-clear"></div>
        <h4>Applicants</h4>
      </div>
    </div>
    <div class="w3-quarter">
      <div class="w3-container w3-blue w3-padding-16">
        <div class="w3-left"><i class="fa fa-user w3-xxxlarge"></i></div>
        <div class="w3-right">
          <h3><?php   
       $result = $db->prepare("SELECT count(*) as total FROM `employers`");
       $result->execute();
     $row = $result->fetch();
     echo $row["total"];
      ?></h3>
        </div>
        <div class="w3-clear"></div>
        <h4>Client</h4>
      </div>
    </div>
    <div class="w3-quarter">
      <div class="w3-container w3-teal w3-padding-16">
        <div class="w3-left"><i class="fa fa-comments-o alt w3-xxxlarge"></i></div>
        <div class="w3-right">
          <h3><?php   
       $result = $db->prepare("SELECT count(*) as total FROM `jobs`");
       $result->execute();
     $row = $result->fetch();
     echo $row["total"];
?>
  
</h3>
        </div>
        <div class="w3-clear"></div>
        <h4>Job List</h4>
      </div>
    </div>
    <div class="w3-quarter">
      <div class="w3-container w3-orange w3-text-white w3-padding-16">
        <div class="w3-left"><i class="fa fa-drivers-license w3-xxxlarge"></i></div>
        <div class="w3-right">
          <h3>
     <?php   
       $result = $db->prepare("SELECT count(*) as total FROM `users`");
       $result->execute();
     $row = $result->fetch();
     echo $row["total"];
?>
     </h3>
        </div>
        <div class="w3-clear"></div>
        <h4>Admin</h4>
      </div>
    </div>
  </div>

  <div class="w3-panel">
    <div class="w3-row-padding" style="margin:0 -16px">
      <div class="w3-third">
        <h5>Location</h5>
         <div class = "widget-content">
              <iframe src="https://www.google.com/maps/embed/v1/place?key=AIzaSyAkTffKiw6bS3TCYDtgK7oE6qeSp-M4b70&q=Nasugbu,+Batangas"  frameborder="0" style="border:1;width: 100%;height: 300px;" allowfullscreen></iframe>
            </div>

      </div>
      <div class="w3-twothird">
        <h5>Feeds</h5>
        <table class="w3-table w3-striped w3-white">
          <tr>
            <td><i class="fa fa-user w3-text-blue w3-large"></i></td>
            <td><b>APPLICANT :</b> Verified Account = <?php   
       $result = $db->prepare("SELECT count(*) as total FROM `jobseekers` where verified='1'");
       $result->execute();
     $row = $result->fetch();
     echo $row["total"];
?></td>
            <td><i>Not Verified = <?php   
       $result = $db->prepare("SELECT count(*) as total FROM `jobseekers` where verified='0'");
       $result->execute();
     $row = $result->fetch();
     echo $row["total"];
?></i></td>
          </tr>
       
          <tr>
            <td><i class="fa fa-users w3-text-yellow w3-large"></i></td>
            <td><b>CLIENT: </b> Verified Account = <?php   
       $result = $db->prepare("SELECT count(*) as total FROM `employers` where verified='1'");
       $result->execute();
     $row = $result->fetch();
     echo $row["total"];
     ?></td>
            <td><i>Not Verified  = <?php   
       $result = $db->prepare("SELECT count(*) as total FROM `employers` where verified='0'");
       $result->execute();
     $row = $result->fetch();
     echo $row["total"];
     ?></i></td>
          </tr>
          <tr>
            <td><i class="fa fa-ban w3-text-red w3-large"></i></td>
            <td><b>Block Account  :      </b> Applicant = <?php   
       $result = $db->prepare("SELECT count(*) as total FROM `jobseekers` where status='2'");
       $result->execute();
     $row = $result->fetch();
     echo $row["total"];
     ?></td>
            <td><i>Client = <?php   
       $result = $db->prepare("SELECT count(*) as total FROM `employers` where status='2'");
       $result->execute();
     $row = $result->fetch();
     echo $row["total"];
     ?></i></td>
          </tr>
          <tr>
            <td><i class="fa fa-comments-o w3-text-blue w3-large"></i></td>
            <td><b>JOBS POST :</b> Open =<?php   
       $result = $db->prepare("SELECT count(*) as total FROM `jobs` where status='1'");
       $result->execute();
     $row = $result->fetch();
     echo $row["total"];
     ?></td>
            <td><i>Closed = <?php   
       $result = $db->prepare("SELECT count(*) as total FROM `jobs` where status='2'");
       $result->execute();
     $row = $result->fetch();
     echo $row["total"];
     ?></i></td>
          </tr>
          <tr>
            <td><i class="fa fa-cloud-download w3-text-red w3-large"></i></td>
            <td><b>MOBILE APP DOWNLOAD : </b>23</td>
            
          </tr>
       
        </table>
      </div>
    </div>
  </div>
  <hr>
  <div class="w3-container">
    <h5>General Stats</h5>
    <p>New Visitors</p>
    <div class="w3-grey">
      <div class="w3-container w3-center w3-padding w3-green" style="width:25%">+25%</div>
    </div>

    <p>New Users</p>
    <div class="w3-grey">
      <div class="w3-container w3-center w3-padding w3-orange" style="width:50%">50%</div>
    </div>

    <p>Bounce Rate</p>
    <div class="w3-grey">
      <div class="w3-container w3-center w3-padding w3-red" style="width:75%">75%</div>
    </div>
  </div>
  <hr>


  <br>
  <div class="w3-container w3-dark-grey w3-padding-32">
    <div class="w3-row">
      <div class="w3-container w3-third">
        <h5 class="w3-bottombar w3-border-green">Demographic</h5>
        <p>Language</p>
        <p>Country</p>
        <p>City</p>
      </div>
      <div class="w3-container w3-third">
        <h5 class="w3-bottombar w3-border-red">System</h5>
        <p>Browser</p>
        <p>OS</p>
        <p>More</p>
      </div>
      <div class="w3-container w3-third">
        <h5 class="w3-bottombar w3-border-orange">Target</h5>
        <p>Users</p>
        <p>Active</p>
        <p>Geo</p>
        <p>Interests</p>
      </div>
    </div>
  </div>

  <!-- Footer -->
  <footer class="w3-container w3-padding-16 w3-light-grey">
    
    <p>Powered by <a href="https://www.w3schools.com/w3css/default.asp" target="_blank">php</a></p>
  </footer>

  <!-- End page content -->
</div>

<script>
// Get the Sidebar
var mySidebar = document.getElementById("mySidebar");

// Get the DIV with overlay effect
var overlayBg = document.getElementById("myOverlay");

// Toggle between showing and hiding the sidebar, and add overlay effect
function w3_open() {
  if (mySidebar.style.display === 'block') {
    mySidebar.style.display = 'none';
    overlayBg.style.display = "none";
  } else {
    mySidebar.style.display = 'block';
    overlayBg.style.display = "block";
  }
}

// Close the sidebar with the close button
function w3_close() {
  mySidebar.style.display = "none";
  overlayBg.style.display = "none";
}
</script>

</body>
</html>
