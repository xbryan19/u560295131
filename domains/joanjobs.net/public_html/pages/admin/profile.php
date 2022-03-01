<?php include("includes/nav.php");?>
<?php include("connect.php");?>
<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:300px;margin-top:43px;">
<div class="container">
		<div class="row justify-content-center">
     
    	   <div class="col-lg-4">
				 <?php
	 
		  
            $id=$_GET['accountid'];
    
            $result = $db->prepare("SELECT * FROM jobseekers WHERE accountid= :userid");
            $result->bindParam(':userid', $id);
            $result->execute();
         	$foundrows = $result->rowCount();
			if($foundrows > 0)
			{ 
            $row = $result->fetch();
            ?>
			
			 <h3 class="mt-5"><?php echo $row['fname']." ".$row['mname']." ".$row['lname']; ?></h3>
			  <h4>( Job Applicant )</h4>
			 <?php if(empty($row['avatar']))
			 {
			  $src="../../img/default_male_pic.png";
			 }	
             else			 
	         {
			 $src="../applicant/uploads/profile/".$row['avatar'];
			 } ?>
	

		    <img class="img-thumbnail" width="200" height="300" src="<?php echo $src ?>" >
			 <p>Email: <span><?php echo $row['email'];?></span></p>
			 <!--input id="btnmsg" value="Send Message" class="btn-success btn"-->
        
		    <p>Account Status <br><em><?php echo ($row["verified"]==1)?"Verified by admin":"Not yet verified by admin";?>
			<br><?php echo ($row["status"]==1)?"":"Blocked by admin";?></em></p>
			<a class="<?php echo ($row["status"]==2)?" ":"d-none";?> btn btn-success" href="unblockid.php?accountid=<?php echo $row["accountid"];?>">Unblock this Account</a>
			<a class="<?php echo ($row["status"]==1)?" ":"d-none";?> btn btn-success" href="blockid.php?accountid=<?php echo $row["accountid"];?>">Block this Account</a>
		    <a class="<?php echo ($row["verified"]==1)?"d-none":" ";?> btn btn-success" href="verifyid.php?accountid=<?php echo $row["accountid"];?>">Verify 
		    Account Now</a>
                <?php
            }
			 ?>
			 <a class=" btn btn-danger" href="rateapplicant.php?accountid=<?php echo $id;?>" id="btnrate"  class="d-inline btn-sm btn-danger btn">Ratings</a>
			 <a class=" btn btn-primary" href="itextinterface.php?contact=<?php echo $row['contact'];?>" id="btnrate"  class="d-inline btn-sm btn-primary btn">Send Sms</a>

			</div>
			<div class="col-lg-4">
			<h3 class="mt-5">Personal Information</h3>
			<p>Address: <span><?php echo $row['address'];?></span></p>
			<p>Birthday: <span><?php echo $row['birthday'];?></span></p><p>Number: <span><?php echo $row['contact'];?></span></p>
			<p>Gender: <span><?php echo ($row['gender']==1)?"Male":"Female";?></span></p>
			
			<h3 class="mt-5">Job Roles</h3>
			<p>
			<?php $res_exp = $db->prepare("SELECT * FROM `expertise` where accountid=:accountid");
			 $res_exp->execute(array(':accountid'=>$row["accountid"]));
			              $expertise="";
						  $cnt=0;
			              for($i2=0; $row2 = $res_exp->fetch(); $i2++){ 
						        if($cnt==0)
			                    {$expertise = $row2["title"];$cnt++;}
							    else
								$expertise.=", ".$row2["title"];
								
                          }
             echo empty($expertise)?"None Specified":$expertise;?></p>
	
			
		  	<h3 class="mt-5">Submitted ID</h3>
			 <?php if(empty($row['idphoto']))
			 {
			  $src="../../img/default-no-image.png";
			 }	
             else			 
	         {
			 $src="../applicant/uploads/id/".$row['idphoto'];
			 } ?>
		    <img class="img-thumbnail d-block"  src="<?php echo $src ?>" >
			</div>
			
			

	
</div>
</div><!-- container -->


<script>

  $(document).ready(function() {
   });

 

</script>
  <script src="../js/bootbox.min.js"></script>

</body>
</html>