<?php include("includes/nav.php");?>
<?php include("connect.php");?>


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
			
			 <h3 class="mt-5"><b><?php echo $row['fname']." ".$row['mname']." ".$row['lname']; ?></b></h3>
			 <h4>( Job Client )</h4>
			 <?php if(empty($row['avatar']))
			 {
			  $src="../../img/default_male_pic.png";
			 }	
             else			 
	         {
			 $src="../employer/uploads/profile/".$row['avatar'];
			 } ?>
		    <img class="img-thumbnail" style="width: 300px;height: 300px;" src="<?php echo $src ?>" >
			 <p>Email: <span><?php echo $row['email'];?></span></p>
			
			 <a href="chat.php?email=<?php echo $row["email"];?>" id="btnmsg"  class="d-inline btn-sm btn-success btn">Send Message</a>
			 <a href="allposts.php?accountid=<?php echo $id;?>" id="btnview"  class="d-inline btn-sm btn-info btn">Posts by Client</a>
          	 <a href="rateclient.php?accountid=<?php echo $id;?>" id="btnrate"  class="d-inline btn-sm btn-danger btn">Ratings</a>
    
            <?php
            }
			 ?>

			</div>
			<div class="col-lg-4">
			<h3 class="mt-5"><b>Personal Information</b></h3>
			<p>Address: <span><?php echo $row['address'];?></span></p>
			<p>Birthday: <span><?php echo $row['birthday'];?></span></p>
			<p>Birthday: <span><?php echo $row['contact'];?></span></p>
			<p>Gender: <span><?php echo ($row['gender']==1)?"Male":"Female";?></span></p>
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