
<?php include("includes/nav.php");?>
<?php include("connect.php");?>
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
			 $src="uploads/profile/".$row['avatar'];
			 } ?>
		    <img class="img-thumbnail" width="200" height="300" src="<?php echo $src ?>" >
			 <p>Email: <span><?php echo $row['email'];?></span></p>
			 <!--input id="btnmsg" value="Send Message" class="btn-success btn"-->
           <a href="chat.php?email=<?php echo $row["email"];?>" id="btnmsg"  class="d-inline btn-success btn">Send Message</a>
           <a href="rateapplicant.php?accountid=<?php echo $id;?>"  class="d-inline btn-danger btn">Ratings</a>
            <?php
            }
			 ?>

			</div>
			<div class="col-lg-4">
			<h3 class="mt-5">Personal Information</h3>
			<p>Address: <span><?php echo $row['address'];?></span></p>
			<p>Birthday: <span><?php echo $row['birthday'];?></span></p>
			<p>Educational Background: <span><?php echo $row['education'];?></span></p>
			<p>Contact Number: <span><?php echo $row['contact'];?></span></p>
			<p>Availability: <span><?php echo $row['avail'];?></span></p>
			<p>Gender: <span><?php echo ($row['gender']==1)?"Male":"Female";?></span></p>
			
			<h3 class="mt-5">Job Roles</h3>
			<span>
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
             echo empty($expertise)?"None Specified":$expertise;?></span>
			
			</div>
	
</div>
</div><!-- container -->



<?php include("footer.php");?>
<script>

  $(document).ready(function() {
   });

 

</script>
  <script src="../../js/bootbox.min.js"></script>

</body>
</html>