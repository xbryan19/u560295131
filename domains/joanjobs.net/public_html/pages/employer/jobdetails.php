
<?php include("includes/nav.php");?>
<?php include("connect.php");?>

<div class="container">
		<div class="row justify-content-center">
     
    	   <div class="col-lg-6">
				 <?php
	 
		  
            $id=$_GET['jobid'];

            $result = $db->prepare("SELECT * FROM jobs WHERE jobid= :jobid");
            $result->bindParam(':jobid', $id);
            $result->execute();
         	$foundrows = $result->rowCount();
			if($foundrows > 0)
			{ 
            $row = $result->fetch();
            ?>
			
			 <h3 class="mt-5"><b><?php echo $row['jobtitle']; ?></b></h3>
			 
            <br>
		    <h4><b>Description</b></h4>
			 <p><span><?php echo $row['description'];?></span></p>
			 <!--input id="btnmsg" value="Send Message" class="btn-success btn"-->
          
    
            <?php
            }
			 ?>

		
			<h4 class="mt-5"><b>Date Posted</b></h4>
			<p><span><?php echo $row['dateposted'];?></span></p>
			<?php 
				$res_exp = $db->prepare("SELECT * FROM `employers` where accountid=:accountid");
			    $res_exp->execute(array(':accountid'=>$row["accountid"]));
			    $row2 = $res_exp->fetch();        
			                
             	?>
			<h4 class="mt-5"><b>Client</b></h4>
			<p><span><a href="employerprofile.php?accountid=<?php echo $row["accountid"]; ?>">
            <?php echo $row2["fname"]." ". $row2["mname"]." ". $row2["lname"];?></a></span></p>
			
			<h4 class="mt-5"><b>Status</b></h4>
			<p><span><?php echo($row['status']==1)?" This job is Open":"This job has been closed";
			
			?></span></p>

			<?php
			if($row2["accountid"]==$row["accountid"])
			{
				echo($row['status']==1)?'<input onclick="toggle(2);" id="btnclose" type="button" class="btn btn-success" value="Close Job Post"> ':'<input onclick="toggle(1);" id="btnopen" type="button" class="btn btn-success" value="Open Job Post"> ';
			}
			?>
					<h4 class="mt-5">Awarded To</h4>
			<p><span>		






				<?php 
		
			    $result = $db->prepare("SELECT * FROM jobcontracts where accountid=:jobid");
			    $result->bindParam(':jobid',$id);
			 $result->execute();
			 $foundrows = $result->rowCount();  
				
					 for($foundrows>0; $row = $result->fetch(); ){
       
					
				?>
				<a href="profile.php?accountid=<?php echo $row["accountid"] ;?>"> 
				<?php 
				
			    echo $row["fname"]."  ". $row["lname"];}

			

			?></a></span></p>
			
			
	
			
	
			<a class="btn btn-primary" href="viewapplication.php?jobid=<?php echo $id;?>&emp=<?php echo $row2["accountid"]?>" >View Applicants</a>
		
			</div>
			
			
			</div>

	



</div>
</div><!-- container -->



<?php include("footer.php");?>
<script>

  $(document).ready(function() {
	  
	  
	  
   });

 function toggle(n){
	window.location.href="togglestatus.php?jobid=<?php echo $id;?>&status="+ n; 
 }

</script>
  <script src="../js/bootbox.min.js"></script>

</body>
</html>