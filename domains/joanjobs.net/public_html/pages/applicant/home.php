
<?php include("includes/nav.php");?>
<?php include("connect.php");?>
<!DOCTYPE html>
<html>
<title>Joan Jobs</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">


  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js'></script>

  

    <script  src="js/index.js"></script>
<style>
body,h1,h2,h3,h4,h5 {font-family: "Poppins", sans-serif}
body {font-size: 16px;}
img {margin-bottom: -8px;}
.mySlides {display: none;}




}

</style>





<!--modal   -->
  <div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->

    <div class="modal-content">
      <div class="modal-header">
        <h4 style="color: red">Information</h4>
        <button style="" type="button" class="close" data-dismiss="modal">&times;</button>
        
      </div>
      <div class="modal-body">
     <?php
   
      
            $result = $db->prepare("SELECT * FROM jobseekers WHERE accountid= :userid     ");
            $result->bindParam(':userid', $session_id);
            $result->execute();
            $foundrows = $result->rowCount();
      if($foundrows > 0)
      { 
            $row = $result->fetch();
            ?>

        
            <p>New Job Post For  :   <span><?php echo $row['role'];?></span></p>
                    <p>Client  :  <span><?php echo $row['name'];?></span></p>
            <p>Description  :   <span><?php echo $row['description'];?></span></p>

            <?php }?>

      </div>


      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>





  <!-- Header -->
  <header id="portfolio">

    <div class="w3-container">
    <h1><b>Homepage</b></h1>
    <div class="w3-section w3-bottombar w3-padding-16">
      With Joan Jobs, finding the right jobs have never been easier!
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


<!-- !Analytics CONTENT! -->
<div class="w3-container">
    <h1><b>Statistics</b></h1>
    <div class="w3-section w3-bottombar w3-padding-16">
        
    <?php
    
    $roles = array("Electrician","Farmer","Maid","Laborer","Construction Worker","Technician" );
    $values = array();
       for ($ctr=0; $ctr<=5; $ctr++){
            $result = $db->prepare("SELECT * FROM `jobs` WHERE role = '$roles[$ctr]'"); 
            $result->execute();
            $values[$ctr]=$result->rowCount();
       }

       
    $dataPoints = array(
	array("y" => "$values[0]","label" => "Electrician" ),
	array("y" => "$values[1]","label" => "Farmer" ),
	array("y" => "$values[2]","label" => "Maid" ),
	array("y" => "$values[3]","label" => "Laborer" ),
	array("y" => "$values[4]","label" => "Construction Worker" ),
	array("y" => $values[5],"label" => "Technician" )
    );
    
 
    ?>

    <script>
window.onload = function() {
 
var chart = new CanvasJS.Chart("chartContainer", {
	animationEnabled: true,
	title:{
		text: "JOB DEMANDS"
	},
	axisY: {
		title: "No. of Jobs Posted",
		includeZero: true,
		prefix: "",
		suffix:  ""
	},
	data: [{
		type: "bar",
		yValueFormatString: "#,##0",
		indexLabel: "{y}",
		indexLabelPlacement: "inside",
		indexLabelFontWeight: "bolder",
		indexLabelFontColor: "white",
		dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
	}]
});
chart.render();
 
}
</script>

    <div id="chartContainer" style="height: 370px; width: 100%;"></div>
    <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>

  </div> 
  </div>
    </div>
  </div>
</div>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>



<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:280px;">
<div class="w3-padding-64 w3-light-blue">
  <div class="w3-row-padding">
    
<div class="w3-container w3-padding-64 w3-gray w3-center">
  <h1 class="w3-jumbo"><b>Clients</b></h1>
  <p><span class="w3-xlarge">Rate and Feedbacks</span></p>
  <p>==============================================================================================================</p>



<div class="gallery">
  <a target="_blank" href="img_5terre.jpg">
    <img src="../employer/uploads/profile/64872-IMG_20211006_095008.jpg"  alt=""
  width="700" height="400">
  </a>
  <div class="desc"><?php
		 	  $result = $db->prepare("select * from employersrating where id='10' ");
			   $res = $db->prepare("select * from employers where accountid='10' ");
			          
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
    <img src="../employer/uploads/profile/68997-anime the division.jpg" alt=""
					width="600" height="400">
  </a>
  <div class="desc"><?php
		 	  $result = $db->prepare("select * from employersrating where id='11' ");
			   $res = $db->prepare("select * from employers where accountid='15' ");
			          
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
    <img src="../employer/uploads/profile/50083-sample.jpg" alt="Mountains" width="600" height="400">
  </a>
  <div class="desc"><?php
		 	  $result = $db->prepare("select * from employersrating where id='12' ");
			   $res = $db->prepare("select * from employers where accountid='12' ");
			          
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

<!-- Features Section -->
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
<div class="w3-padding-1 w3-center w3-white">
  <h1 class="w3-jumbo"><b>Pay Rate Of All Jobs</b></h1>
  <p class="w3-large">We decide to gave pay rate to specific jobs.</p>
</div>
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
    <div class="w3-half w3-section">
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
    
    <div class="w3-half w3-section">
      <ul class="w3-ul w3-card w3-hover-shadow">
        <li class="w3-blue w3-xlarge w3-padding-32">House Work</li>
        <li class="w3-padding-16"><b>Maid = </b> 11k/Month</li>
        <li class="w3-padding-16"><b>Plumber = </b> 350/Day</li>
        <li class="w3-padding-16"><b>Clothes Washer = </b> 500per/Trasaction</li>
        <li class="w3-padding-16"><b>Cleaner = </b> 550/Day</li>
        </li>
        <li class="w3-light-grey w3-padding-24">
                <h1 class="w3-jumbo w3-center"><b>Pay Rate</b></h1>
        </li>
      </ul>
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
  <p class="w3-medium">Powered by <a href="#" target="_blank" class="w3-hover-text-green">php</a></p>
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
