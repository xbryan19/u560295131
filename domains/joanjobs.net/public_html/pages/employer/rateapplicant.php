<?php include("includes/nav.php");?>
<?php include("connect.php");?>

<div class="container">
			<div class="row">
				<div class="col-lg-10">

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
			<div class="col-lg-4">
			<h3 class="mt-5">Rate this applicant</h3>
			<p>Rating</p>
		<form method="post" action="sendreview.php">	
	    <div class="form-group">
		<input id="starcnt" value="" name="starcnt" type="hidden" >
		<input value="<?php echo $id; ?>" name="clientid" type="hidden" >
		<input value="<?php echo $session_id; ?>" name="myid" type="hidden" >
		<a id="rstar1" onclick="rankstar(1)" href="#" ><i class="fa fa-star"></i></a>
		<a id="rstar2"onclick="rankstar(2)"href="#" ><i class="fa fa-star"></i></a>
		<a id="rstar3"onclick="rankstar(3)"href="#" ><i class="fa fa-star"></i></a>
		<a id="rstar4"onclick="rankstar(4)"href="#" ><i class="fa fa-star"></i></a>
		<a id="rstar5"onclick="rankstar(5)"href="#" ><i class="fa fa-star"></i></a>
		<a id="rstar6"onclick="rankstar(6)"href="#" ><i class="fa fa-star"></i></a>
		<a id="rstar7"onclick="rankstar(7)"href="#" ><i class="fa fa-star"></i></a>
		<a id="rstar8"onclick="rankstar(8)"href="#" ><i class="fa fa-star"></i></a>
		<a id="rstar9"onclick="rankstar(9)"href="#" ><i class="fa fa-star"></i></a>
		<a id="rstar10"onclick="rankstar(10)"href="#" ><i class="fa fa-star"></i></a>
		
	   </div>
			<p>Comment</p>
			<textarea class="form-control" name="comment"></textarea>
			
			 <input id="btnrate"  class="mt-2 btn-danger btn" value="Submit" type="submit">
			 </form>
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
</div>
</div>	
</div><!-- container -->

<?php include("footer.php");?>
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