<?php include("includes/nav.php");?>
<?php include("connect.php");?>
<div class="w3-main" style="margin-left:300px;margin-top:43px;">

<div class="container">     	
		<div class="row">
		
  	
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
		    <img class="img-thumbnail" width="100" height="100" src="<?php echo $src ?>" >
         	
   
            <?php
            }
			 ?>

			</div>
	
		
	     <div class="col-lg-12">
		 <table class="table mt-5">
         <thead>
              <tr>
                 <th>Ratings</th>
                 <th>Comments</th>
				 <th>By</th>
		         <th>Date Posted</th>
               </tr>
            </thead>

		    
			<?php
		 	  $result = $db->prepare("select * from jobseekersrating where `toapplicant`=:toapplicant order by dateposted");
			  $result->bindParam(':toapplicant', $id);
					$result->execute();
					
					while($row = $result->fetch()){
						$rate=$row["rating"];
						echo  "<tr><td>".$rate."/10 ";
			            for($i=0;$i<$rate;$i++)
			            echo "<i class='fa fa-star goshine'></i>";
                        echo "</td><td>".$row["comment"]."</td><td>";
						
						 $res = $db->prepare("select * from employers where accountid=:accountid ");
			             $res->bindParam(':accountid', $row["byclient"]);
					     $res->execute();
						 $row2=$res->fetch();
						 echo  "<a href='employerprofile.php?accountid=".$row["byclient"]."'>".$row2["fname"]." ".$row2["mname"]." ".$row2["lname"]."</a></td><td>".$row["dateposted"]."</td></tr>";
   		          
			   
					}?>
	    	</table>			
		 </div>
	
</div>

</div><!-- container -->

<script>

  $(document).ready(function() {
   });

function rankstar(cnt){
	for(i=1;i<=7;i++)
	$('#rstar'+i).removeClass('goshine');
    $('#starcnt').val(cnt);
    for(i2=1;i2<=cnt;i2++)
	$('#rstar'+i2).addClass('goshine');
$('#revbtn').focus();
	
}

</script>
  <script src="../js/bootbox.min.js"></script>
  
<style>
.goshine{color:red}
</style>
</body>
</html>