<?php include("includes/nav.php");?>
<?php include("connect.php");?>
<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:300px;margin-top:43px;">
<div class="container">
		<div class="row justify-content-center">
     
    	   <div class="col-lg-4">
				 <?php
	
		  
            $id=$_GET['accountid'];

            $result = $db->prepare("SELECT * FROM employers WHERE accountid= :userid");
            $result->bindParam(':userid', $id);
            $result->execute();
         	$foundrows = $result->rowCount();
			if($foundrows > 0)
			{ 
            $row = $result->fetch();
            ?>
			
			 <h3 class="mt-5"><?php echo $row['fname']." ".$row['mname']." ".$row['lname']; ?></h3>
			 
			 <?php if(empty($row['avatar']))
			 {
			  $src="../../img/default_male_pic.png";
			 }	
             else			 
	         {
			 $src="../employer/uploads/profile/".$row['avatar'];
			 } ?>
		    <img class="img-thumbnail" width="200" height="300" src="<?php echo $src ?>" >
			 <p>Email: <span><?php echo $row['email'];?></span></p>
			 <!--input id="btnmsg" value="Send Message" class="btn-success btn"-->
            <p>Account Status <br><em><?php echo ($row["verified"]==1)?"Verified by admin":"Not yet verified by admin";?>
			<br><?php echo ($row["status"]==1)?"":"Blocked by admin";?></em></p>
			
			<a class="<?php echo ($row["status"]==2)?" ":"d-none";?> btn btn-success" href="unblockclient.php?accountid=<?php echo $row["accountid"];?>">Unblock this Account</a>
			<a class="<?php echo ($row["status"]==1)?" ":"d-none";?> btn btn-success" href="blockclient.php?accountid=<?php echo $row["accountid"];?>">Block this Account</a>
		    <a class="<?php echo ($row["verified"]==1)?"d-none":" ";?> btn btn-success" href="verifyclient.php?accountid=<?php echo $row["accountid"];?>">Verify Account Now</a>
	
	
            <?php
            }
			 ?>
			  <a class=" btn btn-danger" href="rateclient.php?accountid=<?php echo $id;?>" id="btnrate"  class="d-inline btn-sm btn-danger btn">Ratings</a>

			</div>
			<div class="col-lg-4">
			<h3 class="mt-5">Personal Information</h3>
			<p>Address: <span><?php echo $row['address'];?></span></p>
			<p>Birthday: <span><?php echo $row['birthday'];?></span></p>
			<p>Gender: <span><?php echo ($row['gender']==1)?"Male":"Female";?></span></p>
			
			 	<h3 class="mt-5">Submitted ID</h3>
			 <?php if(empty($row['idphoto']))
			 {
			  $src="../../img/default-no-image.png";
			 }	
             else			 
	         {
			 $src="../employer/uploads/id/".$row['idphoto'];
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