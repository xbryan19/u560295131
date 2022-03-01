
<?php include("includes/nav.php");?>
<?php include("connect.php");?>
<?php 

$id =$_GET['jobid'];
$aid = $_GET['accountid'];
$job= $_GET['job'];
$efname= $_GET['efname'];
$emname= $_GET['emname'];
$elname= $_GET['elname'];
$emp= $_GET['emp'];
$f=$_GET['f'];
$l=$_GET['l'];

?>

<input style="display: none;" type="text" class="form-control" id="accountid" name="accountid" value="<?php echo $emp;?>" required="" title="Please enter Job Title">
<input style="display: none;" type="text" class="form-control" id="accountid" name="accountid" value="<?php echo $aid;?>" required="" title="Please enter Job Title">
<input style="display: none;" type="text" class="form-control" id="accountid" name="accountid" value="<?php echo $row["jobtitle"];?>" required="" title="Please enter Job Title">


<div class="w3-container">
    <h1><b>Referring for:<?php echo $job;?></b></h1>
    <div class="w3-section w3-bottombar w3-padding-16">
      <span class="w3-margin-right">Filter:</span> 
      <button class="w3-button w3-black">ALL</button>

    </div>
    </div>
  <table class="table table-striped table-bordered">
  <tr>
  <td>Name of Applicant</td><td>Refer to</td> <td>For the job</td> <td>Action</td>
  </tr>
  
  
				<?php 
		
			    $result = $db->prepare("SELECT * FROM jobseekers where refer= '0'");
			
			 $result->execute();
			 $foundrows = $result->rowCount();  
				
					 for($foundrows>0; $row3 = $result->fetch(); $foundrows++ ){
       ;
					
				?>
			


			
				
			  <tr><td><a href="profile.php?accountid=<?php  echo $row3["accountid"];?>"  ><?php  echo $row3["fname"]." ". $row3["lname"];?> </td>"<td> <?php echo $efname." ".$elname;?></td><td> <?php echo $job; ?></td>

			  	<td>

			  			 <a href="referapp.php?jobtitle=<?php echo $job;?>&fname=<?php echo $row3["fname"];?>&lname=<?php echo $row3["lname"];?>&elname=<?php echo $elname;?>&efname=<?php echo $efname;?>&aid=<?php echo $aid;?>&id=<?php echo $id;?>&emp=<?php echo $emp;?>&f=<?php echo $f;?>&l=<?php echo $l;?>&a=<?php echo $row3["accountid"];;?>"  class="btn btn-success">Refer</a>


			  	</td></tr>
<?php } ?>




			

			</a>



		</span></p>
   <script >
	


function showprofile(id){
	window.location.href="profile.php?accountid="+id;
}
</script>

</body>
</html>