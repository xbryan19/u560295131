
<?php include("includes/nav.php");?>
<?php include("connect.php");?>


		
		 
<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:100px;margin-top:43px;margin-right: 80px;">
	<h3 class="page-header my-5"><span class="w3-xlarge"><b>Registered Applicants</b></span></h3>
 <table class="table table-striped table-bordered">


 
  <tr>
  <td>Applicant Name</td><td>Email</td> <td>jobroles</td>  <td>Address</td> 
  </tr>
  
  
        <?php 
              $jobroles=$_POST['jobroles'];

  
          $result = $db->prepare("SELECT * FROM jobseekers where role=:jobroles");
          $result->bindParam(':jobroles', $jobroles);
       $result->execute();
       $foundrows = $result->rowCount();  
        
           for($foundrows>0; $row = $result->fetch(); $foundrows++ ){
       ;
          
        ?>
      


      
        
        <tr><td><?php  echo $row["fname"]." ". $row["lname"]." ". $row["mname"];?> </td>"<td> <?php echo $row['email'];?></td><td> <?php echo $row['role']; ?></td><td> <?php echo $row['address']; ?></td>



              


          </tr>
<?php } ?>




      

      </a>



    </span></p>



</table><br><br><br><br><br><br><br>

</body>
</html>