	

<?php include("includes/nav.php");?>
<?php include("connect.php");?>

<div class="container">
			<div class="row">
				<div class="col-lg-3">
	<!--input onclick="window.history.back();" class="btn btn-primary mt-2" value="Back"-->
		<div class="row justify-content-center">
     
    	<?php date_default_timezone_set("Asia/Manila");




      ?>



      <input type="text" name="datee" id="datee" value="<?php echo Date("M Y");  ?>">

    	   	    	   <div class="col-lg-6">
                       <?php
        
      
            $emp=$_GET['emp'];
 

            $result = $db->prepare("SELECT * FROM employers WHERE accountid= :emp");
            $result->bindParam(':emp', $emp);
            $result->execute();
          $foundrows = $result->rowCount();
      if($foundrows > 0)
      { 
            $row3 = $result->fetch();

            ?>

   <h3 style="width: 300px;display: none;" class="mt-5">Applicants for <?php echo $row3['accountid']; ?></h3>
       <h3 style="width: 300px;display: none;" class="mt-5">Applicants for <?php echo $row3['fname']; ?></h3>
         <h3 style="width: 300px;display: none;" class="mt-5">Applicants for <?php echo $row3['mname']; ?></h3>
       <h3 style="width: 300px;display: none;" class="mt-5">Applicants for <?php echo $row3['lname']; ?></h3>
             
       
       
            <br>
         
    
            <?php
            }
       ?>




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
			
			 <h3 style="width: 300px;" class="mt-5">Applicants for <?php echo $row['jobtitle']; ?></h3>
             <h3 style="width: 300px;display: none;" class="mt-5">Applicants for <?php echo $row['description']; ?></h3>
       
			 
            <br>
         
    
            <?php
            }
			 ?>

			

  <table style="width: 870px;" class="table table-striped table-bordered">
  <tr>
  <td>Name of Applicant(s)</td> <td>Availability</td><td>Action</td>
  </tr>

			<?php 


			$id=$_GET['jobid'];
				$res_exp = $db->prepare("SELECT *  FROM jobseekers,`jobapplications` where jobid=:jobid and jobapplications.accountid=jobseekers.accountid");
			    $res_exp->execute(array(':jobid'=>$id));
                for($i=0; $row2 = $res_exp->fetch(); $i++){
            ?>
          
			  
              <tr><td><a href="profile.php?accountid=<?php  echo $row2["accountid"];?>"  >
              	<?php echo  $row2["lname"].", ". $row2["fname"];?></a></td>
                 <td>	<?php echo $row2["avail"];?></td>

             <td>

             <h3 style="width: 300px;display: none;" class="mt-5">Applicants for <?php echo $row['jobtitle']; ?></h3>
             <h3 style="width: 300px;display: none;" class="mt-5">Applicants for <?php echo $row['description']; ?></h3>

              		<?php if ( $row2['avail']=='Available'){?>
              		<a href="approveapplicant.php?id=<?php echo $row2["id"];?>&jid=<?php echo $id;?>&aid=<?php echo $row2["accountid"];?>&fname=<?php echo $row2["fname"]?>&lname=<?php echo $row2["lname"]?>&jobtitle=<?php echo $row["jobtitle"]?>&description=<?php echo $row["description"]?>&empfname=<?php echo $row3["fname"]?>&empmname=<?php echo $row3["mname"]?>&emplname=<?php echo $row3["lname"]?>&seid=<?php echo $row3["accountid"]?>&datee=<?php echo Date("M Y");?>"  class="btn btn-success">Approve</a>
              		<?php } ?>

              		<?php if ( $row2['avail']=='Not Available'){?>
              		<a style="display: none;" href="approveapplicant.php?jid=<?php echo $id;?>&aid=<?php echo $row2["accountid"];?>"  class="btn btn-success">Approve</a>

              		<?php } ?>

             <a href="decline.php?jid=<?php echo $id;?>&aid=<?php echo $row2["accountid"];?>"  class="btn btn-danger">Decline</a></td></tr>
           
   
       <?php   } 
               if($res_exp->rowCount()==0)	 
               {
				   ?>
				   <tr><td colspan="2">No applicants for this job...</td></tr>
			  <?php }		   
             	?>
			 </table>


		
			 <h5 style="width: 300px;color:red;">
  
Click the name of the applicant to see the profile


</h5>
			</div>


</div>
</div><!-- container -->

<script >
	


function showprofile(id){
	window.location.href="profile.php?accountid="+id;
}
</script>



<script>


 function toggle(n){
	window.location.href="togglestatus.php?jobid=<?php echo $id;?>&status="+ n; 
 }

</script>
  <script src="../../js/bootbox.min.js"></script>

</body>
</html>