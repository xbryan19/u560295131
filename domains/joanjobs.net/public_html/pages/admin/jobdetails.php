
<?php include("includes/nav.php");?>
<?php include("connect.php");?>
<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:300px;margin-top:43px;">

<div class="container">
		<div class="row justify-content-center">
     
    	   <div class="col-lg-6">
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
			
			 <h3 class="mt-5"><?php echo $row['jobtitle']; ?></h3>
			 
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
<h4 class="mt-5">Awarded To</h4>
			<p><span>		






				<?php 
		
			    $result = $db->prepare("SELECT * FROM jobcontracts where jobid=:jobid");
			    $result->bindParam(':jobid',$id);
			 $result->execute();
			 $foundrows = $result->rowCount();  
				
					 for($foundrows>0; $row = $result->fetch(); ){
       
					
				?>
				<a href="profile.php?accountid=<?php echo $row["accountid"] ;?>"> 
				<?php 
				
			    echo $row["fname"]."  ". $row["lname"];}

			

			?></a></span></p>
			
			
<a href="printjob.php?jobid=<?php echo $id;?>"  class="btn btn-success">Print</a>
			
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