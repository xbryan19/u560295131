
<?php include("includes/nav.php");?>
<?php include("connect.php");?>

  <header id="portfolio">

    <div class="w3-container">
    <h1><b>Profile Page</b></h1>
    <div class="w3-section w3-bottombar w3-padding-16">
      <br>
    </div>
    </div>
  </header>
<div class="container">
		<div class="row" >
     
    	   <div class="col-lg-4"> 	   	
				 <?php
	 
		  
            $result = $db->prepare("SELECT * FROM employers WHERE accountid= :userid");
            $result->bindParam(':userid', $session_id);
            $result->execute();
         	$foundrows = $result->rowCount();
			if($foundrows > 0)
			{ 
            $row = $result->fetch();
            ?>
            
		
			
			 <h3 class="mt-5"><?php echo $row['fname']." ".$row['mname']." ".$row['lname']; ?></h3>
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
		    <img class="img-thumbnail" width="200" height="600" src="<?php echo $src ?>" >
			 <p>Email: <span><?php echo $row['email'];?></span></p>
			
			 <a href="editphoto.php?accountid=<?php echo $session_id;?>" id="btnmsg"  class="d-inline btn-success btn">Change Photo</a>
			 <a href="editdetails.php?accountid=<?php echo $session_id;?>" id="btnview"  class="d-inline btn-info btn">Edit Details</a>
          
    </div>
            <?php
            }
			 ?>
		

			
			<div class="col-lg-4">
			<h3 class="mt-5">Personal Information</h3>
			<p>Address: <span><?php echo $row['address'];?></span></p>
			<p>Birthday: <span><?php echo $row['birthday'];?></span></p>
			<p>Contact: <span><?php echo $row['contact'];?></span></p>
			<p>Civil Status: <span><?php echo $row['civilstatus'];?></span></p>
			<p>Educational Background: <span><?php echo $row['education'];?></span></p>
			<p>Gender: <span><?php echo ($row['gender']==1)?"Male":"Female";?></span></p>
			
			<a href="secretquestion.php?accountid=<?php echo $session_id;?>" id="btnview"  class=" d-inline btn-danger btn">Your secret question</a>
			</div></div>

			
			<div class="container">

			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			
			</div>
	
</div>
</div><!-- container -->


<?php include("footer.php");?>
<script>

  $(document).ready(function() {
   });



</script>
  <script src="../js/bootbox.min.js"></script>

</body>
</html>