


<?php include("includes/nav.php");?>
<?php include("connect.php");?>

<div class="container">
			<div class="row">		
				<div class="col-lg-10">
		<div class="row justify-content-center">
     
    	   <div class="col-lg-6">




    	   	
				 <?php
	 
		  
         
            include('../connect.php');
            $result = $db->prepare("SELECT * FROM jobseekers WHERE accountid= :accountid");
            $result->bindParam(':accountid', $session_id);
            $result->execute();
         	$foundrows = $result->rowCount();
			if($foundrows > 0)
			{ 
            $row6 = $result->fetch();
            ?>
			
			
		<p style="display: none;"><span>
            <?php echo $row6["fname"]." ". $row6["mname"]." ". $row6["lname"];?></span></p>
			 
	
          
    
            <?php
            }
			 ?>




				 <?php
	 
		  
            $id=$_GET['jobid'];
            include('../connect.php');
            $result = $db->prepare("SELECT * FROM jobs WHERE jobid= :jobid");
            $result->bindParam(':jobid', $id);
            $result->execute();
         	$foundrows = $result->rowCount();
			if($foundrows > 0)
			{ 
            $row = $result->fetch();
            ?>
			
			
			 <h3 class="mt-5"><span class="w3-xxlarge"><b><?php echo $row['jobtitle']; ?></b></span></h3>
			 
			
            <br>
		    <h4>Description</h4>
			 <p><span><?php echo $row['description'];?></span></p>
			 <!--input id="btnmsg" value="Send Message" class="btn-success btn"-->
          
    
            <?php
            }
			 ?>

		
			<h4 class="mt-5">Date Posted</h4>
			<p><span><?php echo $row['dateposted'];?></span></p>
			<?php 
				$res_exp = $db->prepare("SELECT * FROM `employers` where accountid=:accountid");
			    $res_exp->execute(array(':accountid'=>$row["accountid"]));
			    $row2 = $res_exp->fetch();        
			                
             	?>
			<h4 class="mt-5">Client</h4>
			<p><span><a href="employerprofile.php?accountid=<?php echo $row["accountid"]; ?>">
            <?php echo $row2["fname"]." ". $row2["mname"]." ". $row2["lname"];?></a></span></p>
			
			<h4 class="mt-5">Status</h4>
			<p><span><?php echo($row['status']==1)?" This job is Open":"This job has been closed";
			
			?></span></p>


            
			<?php
			    $res_jobapp = $db->prepare("SELECT * FROM `jobapplications` where accountid=:accountid and jobid=:jobid");
			    $res_jobapp->execute(array(':accountid'=>$session_id,':jobid'=>$id));
			    $row3 = $res_jobapp->fetch();        
			?>
			
			<?php if($res_jobapp->rowCount()==1 && $row['status']==1){?>
			 <a class="my-2 btn btn-warning" style="<?php echo($row3['status']==0)?"":"display:none";?>" href="cancelapplication.php?jobid=<?php echo $id;?>&accountid=<?php echo $session_id;?>" >Cancel Application</a>
			<?php }else if($res_jobapp->rowCount()==0 && $row['status']==1){ ?>  
     <a class="my-2 btn btn-success" style="<?php echo($row3['status']==0)?"":"display:none";?>" href="applynow.php?jobid=<?php echo $id;?>&accountid=<?php echo $session_id;?>" >Apply for this Job</a>
		
		   <?php } ?>  
			 <a class="my-2 btn btn-primary"  href="refer.php?jobid=<?php echo $id;?>&accountid=<?php echo $session_id;?>&job=<?php echo $row['jobtitle'];?>&efname=<?php echo $row2['fname'];?>&emname=<?php echo $row2['mname'];?>&elname=<?php echo $row2['lname'];?>&emp=<?php echo $row['accountid'];?>&f=<?php echo $row6['fname'];?>&l=<?php echo $row6['lname'];?>" >Refer A Applicant</a>
			</div>




	
</div>
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