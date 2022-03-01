<?php include("includes/nav.php");?>
<?php include("connect.php");?>

<!DOCTYPE html>
<html>
<title>Joan Jobs</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">


  

    <script  src="js/index.js"></script>

<style>
body,h1,h2,h3,h4,h5 {font-family: "Poppins", sans-serif}
body {font-size: 16px;}
img {margin-bottom: -8px;}
.mySlides {display: none;}




}

</style>

  <header id="portfolio">

    <div class="w3-container">
    <h1><b>Home Page</b></h1>
    <div class="w3-section w3-bottombar w3-padding-16">
      <br>
    </div>
    </div>
  </header>


<!-- Clarity Section -->
<div class="w3-padding-64 w3-light-grey">
  <div class="w3-row-padding">
    <div class="w3-col l1 m7">
      <p width="335" height="475">
    </div>
    <div class="w3-col l9 m6">
    <br> <br> <br> <br>
      <h1 class="w3-jumbo"><b>Joan Jobs</b></h1>
      <h1 class="w3-xxxlarge w3-text-red"><b>Joan, who?</b></h1>
      <br> <br> <br> <br> <br>
      
      <p><span class="w3-xlarge">A solution for those who need jobs or a quick employement.</span> Finding job is never easy, but hiring the right talent can equally though. Many of the population are unemployed and yet have skill and talent. This study is a solution for those individuals that cannot apply on a company or establishment. This application will serve as platform to make the unknown local non -office workers the opportunity to advertise or promote their skills to earn money in a modern way and vice versa our community that in need of the expertise and skills will no longer having a hard time finding one. With the help of the system, workers may have a great chance of opportunity to have a job and also help someone to easily find and hired workers.  </p>

  <div class="w3-display-right w3-padding w3-hide-small" style="width:30%">
      <div class="w3-light-grey w3-opacity w3-hover-opacity-off w3-padding-large w3-round-large">
        <img src="logoc.png" width="420" height="400" title="Logo of the company" alt="Logo of the company" />
      </div>
    </div>
  </div>


  </div>
</div>
    </div>
  </div>
</div>


<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:280px;">



<div class="w3-padding-64 w3-light-grey">
  <div class="w3-row-padding">

<div class="w3-container w3-padding-64 w3-blue-gray w3-center">
  <h1 class="w3-jumbo"><b>Applicants</b></h1>
  <p><span class="w3-xlarge">Rate and feedback</span></p>
  <p>__________________________________________________________________________________________________________________________________</p>



<div style="position: right;" class="gallery">
  <a target="_blank" href="img_5terre.jpg">
    <img src="img/image1.jpg"  alt=""
  width="700" height="400">
  </a>
  <div class="desc"><?php
        $result = $db->prepare("select * from jobseekersrating where id='5' ");
         $res = $db->prepare("select * from jobseekers where accountid='15' ");
                
               $res->execute();
          $result->execute();
           $row2=$res->fetch();

          while($row = $result->fetch()){
          
             echo  "Name:"." ".$row2["fname"]."_".$row2["mname"]."<br>";
             echo "Address:   ";
              echo $row2['address']."<br>";

             $rate=$row["rating"];

             echo "Rating: ";
            echo  "<tr><td>".$rate."/10 ";
                  for($i=0;$i<$rate;$i++)
                  echo "<i class='fa fa-star goshine'></i>";
             
                        
                
           
          }?></div>
</div>




<div class="gallery">
  <a target="_blank" >
    <img src="img/image3.jpg" alt=""
          width="600" height="400">
  </a>
  <div class="desc"><?php
        $result = $db->prepare("select * from jobseekersrating where id='4' ");
         $res = $db->prepare("select * from jobseekers where accountid='14' ");
                
               $res->execute();
          $result->execute();
           $row2=$res->fetch();

          while($row = $result->fetch()){
          
             echo  "Name:"." ".$row2["fname"]."_".$row2["mname"]."<br>";
             echo "Address:   ";
              echo $row2['address']."<br>";

             $rate=$row["rating"];

             echo "Rating: ";
            echo  "<tr><td>".$rate."/10 ";
                  for($i=0;$i<$rate;$i++)
                  echo "<i class='fa fa-star goshine'></i>";
             
                        
                
           
          }?></div>
</div>





<div class="gallery">
  <a target="_blank" href="img_mountains.jpg">
    <img src="img/image4.jpg" alt="Mountains" width="600" height="400">
  </a>
  <div class="desc"><?php
        $result = $db->prepare("select * from jobseekersrating where id='6' ");
         $res = $db->prepare("select * from jobseekers where accountid='16' ");
                
               $res->execute();
          $result->execute();
           $row2=$res->fetch();

          while($row = $result->fetch()){
          
             echo  "Name:"." ".$row2["fname"]."_".$row2["mname"]."<br>";
             echo "Address:   ";
              echo $row2['address']."<br>";

             $rate=$row["rating"];

             echo "Rating: ";
            echo  "<tr><td>".$rate."/10 ";
                  for($i=0;$i<$rate;$i++)
                  echo "<i class='fa fa-star goshine'></i>";
             
                        
                
           
          }?></div>
</div>







  </div>
</div></div><!-- Features Section -->
<div class="w3-container w3-padding-64 w3-black w3-center">
  <h1 class="w3-jumbo"><b>Features</b></h1>
  <p>This app is just so lorem ipsum.</p>

  <div class="w3-row" style="margin-top:64px">
    <div class="w3-col s3">
      <i class="fa fa-bolt w3-text-orange w3-jumbo"></i>
      <p>Fast</p>
    </div>
    <div class="w3-col s3">
      <i class="fa fa-heart w3-text-red w3-jumbo"></i>
      <p>Loved</p>
    </div>
    <div class="w3-col s3">
      <i class="fa fa-camera w3-text-yellow w3-jumbo"></i>
      <p>Clarity</p>
    </div>
    <div class="w3-col s3">
      <i class="fa fa-battery-full w3-text-green w3-jumbo"></i>
      <p>Power</p>
    </div>
  </div>

  <div class="w3-row" style="margin-top:64px">
    <div class="w3-col s3">
      <i class="fa fa-diamond w3-text-white w3-jumbo"></i>
      <p>Sharp</p>
    </div>
    <div class="w3-col s3">
      <i class="fa fa-cloud w3-text-blue w3-jumbo"></i>
      <p>Cloud</p>
    </div>
    <div class="w3-col s3">
      <i class="fa fa-globe w3-text-amber w3-jumbo"></i>
      <p>Global</p>
    </div>
    <div class="w3-col s3">
      <i class="fa fa-hdd-o w3-text-cyan w3-jumbo"></i>
      <p>Storage</p>
    </div>
  </div>
  
  <div class="w3-row" style="margin-top:64px">
    <div class="w3-col s3">
      <i class="fa fa-user w3-text-sand w3-jumbo"></i>
      <p>Safe</p>
    </div>
    <div class="w3-col s3">
      <i class="fa fa-shield w3-text-orange w3-jumbo"></i>
      <p>Stabile</p>
    </div>
    <div class="w3-col s3">
      <i class="fa fa-wifi w3-text-grey w3-jumbo"></i>
      <p>Connected</p>
    </div>
    <div class="w3-col s3">
      <i class="fa fa-image w3-text-pink w3-jumbo"></i>
      <p>HD</p>
    </div>
  </div>
</div>

  <!-- Pricing Section -->
  <div class="w3-main" style="margin-left:300px;">
    <h1 class="w3-jumbo"><b>Pay Rate Of All Jobs</b></h1>
    <p class="w3-large">We decide to gave pay rate to specific jobs.</p>
  </div>
  <div class="w3-main" style="margin-left:20px;"> 
        <ul class="w3-ul w3-card w3-hover-shadow">
          <li class="w3-dark-grey w3-xlarge w3-padding-32">Construction/
  konstruksiyon</li>
          <li  position="left"><b>Welder = </b> 500/Day</li>
          <li class="w3-padding-16"><b>Roofer = </b> 500/Day</li>
          <li class="w3-padding-16"><b>Plumber, Pipefitter, Steamfitter = </b> 550/Day</li>
          <li class="w3-padding-16"><b>Painter = </b> 500/Day</li>
          <li class="w3-padding-16"><b>Laborer = </b> 400/Day</li>
          <li class="w3-padding-16"><b>Mason = </b> 550/Day</li>
          <li class="w3-padding-16"><b>Foreman = </b> 550/Day</li>
          <li class="w3-padding-16"><b>Insulation Worker = </b> 500/Day</li>
           <li class="w3-padding-16"><b>Carpenter = </b> 500/Day</li>
           <li class="w3-padding-16"><b>Carpet Installer = </b> 500/Day</li>
          </li>
          <li class="w3-light-grey w3-padding-24">
            <h1 class="w3-jumbo w3-center"><b>Pay Rate</b></h1>
          </li>
        </ul>
      </div>
        <div class="w3-main" style="margin-left:20px;"> 
        <ul class="w3-ul w3-card w3-hover-shadow">
          <li class="w3-red w3-xlarge w3-padding-32">Farm Work</li>
          <li class="w3-padding-16"><b>Laborers = </b> 400/Day</li>
          <li class="w3-padding-16"><b>Planters = </b> 450/Day</li>
          <li class="w3-padding-16"><b>Animal Caretakers = </b> 450</li>
          <li class="w3-padding-16"><b>Pesticide Sprayer</b> 550/Day</li>
         
          </li>
          <li class="w3-light-grey w3-padding-24">
                  <h1 class="w3-jumbo w3-center"><b>Pay Rate</b></h1>
          </li>
        </ul>
      </div>
    
      </div>

    </div>
    <br>
  </div>

<!-- Footer -->
<footer class="w3-container w3-padding-32 w3-light-blue w3-center w3-xlarge">
  <div class="w3-section">
    <i class="fa fa-facebook-official w3-hover-opacity"></i>
    <i class="fa fa-instagram w3-hover-opacity"></i>
    <i class="fa fa-snapchat w3-hover-opacity"></i>
    <i class="fa fa-pinterest-p w3-hover-opacity"></i>
    <i class="fa fa-twitter w3-hover-opacity"></i>
    <i class="fa fa-linkedin w3-hover-opacity"></i>
  </div>
  <p class="w3-medium">Powered by <a href="https://www.w3schools.com/w3css/default.asp" target="_blank" class="w3-hover-text-green">php</a></p>
</footer>

<script>
// Slideshow
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  if (n > x.length) {slideIndex = 1}
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  x[slideIndex-1].style.display = "block";  
}
</script>

</body>
</html>
