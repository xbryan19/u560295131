<?php include("includes/nav.php");?>
<?php include("connect.php");?>


<div class="w3-container">
    <h1><b>Applied Job</b></h1>
    <div class="w3-section w3-bottombar w3-padding-16">
      <span class="w3-margin-right">Filter:</span> 
      <button class="w3-button w3-black">ALL</button>
   
    </div>
    </div>
  <table class="table table-striped table-bordered">
  <tr>
  <td>Name of CLient</td><td>Job Title</td><td>Description</td><td>Awarded To</td><td>Time/Date Hired</td>  <td>Action</td>
  </tr>
  
  
				<?php 
		
			    $result = $db->prepare("SELECT * FROM jobcontracts where accountid=:userid and mark=''");
			    $result->bindParam(':userid',$session_id);
			 $result->execute();
			 $foundrows = $result->rowCount();  
				
					 for($foundrows>0; $row = $result->fetch(); $foundrows++ ){
       ;
					
				?>
			


			
				
			  <tr><td><a href="employerprofile.php?accountid=<?php  echo $row["seid"];?>"  ><?php  echo $row["efname"]." ". $row["elname"];?> </td>"<td> <?php echo $row["jobtitle"];?></td><td> <?php echo $row["description"];?></td><td> <?php echo $row["fname"]." ".$row["lname"];?></td><td> <?php echo $row["date"];?></td>

			  	<td><a href="read.php?contractid=<?php echo $row["contractid"];?>"  class="btn btn-success">Mark As Read</a></td></tr>
<?php } ?>

</table>


			

			</a>



		</span></p>
	
<div class="w3-container">
    <h1><b>You hired and refer for:</b></h1>
    <div class="w3-section w3-bottombar w3-padding-16">

   
    </div>
    </div>
  <table class="table table-striped table-bordered">
  <tr>
 <td>Name of Applicant</td><td>Job Title</td><td>Refer BY</td><td>Time/Date</td>  <td>Action</td>
  </tr>
  
  
				<?php 
		
			    $result = $db->prepare("SELECT * FROM refer where rid=:userid and mark='0'and status='1'");
			    $result->bindParam(':userid',$session_id);
			 $result->execute();
			 $foundrows = $result->rowCount();  
				
					 for($foundrows>0; $row = $result->fetch(); $foundrows++ ){
       ;
					
				?>
			


			
				
			  <tr><td><a href="profile.php?accountid=<?php  echo $row["accountid"];?>"  ><?php  echo $row["fname"]." ". $row["lname"];?> </td>"<td><a href="jobdetails.php?jobid=<?php  echo $row["jobid"];?>"  ><?php echo $row["jobtitle"];?> </td><td> <?php echo $row["rfname"]." ".$row["rlname"];?></td><td> <?php echo $row["date"];?></td>

			  	<td><a href="read1.php?accountid=<?php echo $row["accountid"];?>"  class="btn btn-success">Mark As Read</a></td></tr>
<?php } ?>




			

			</a>



		</span></p>
   <script >
	


function showprofile(id){
	window.location.href="profile.php?accountid="+id;
}
</script>