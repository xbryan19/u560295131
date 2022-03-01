
<?php include("includes/nav.php");?>
<?php include("connect.php");?>

<div class="container">
			<div class="row">
				<div class="col-lg-12 pb-2">
			<h1><span class="w3-xxlarge">My Dashboard</h1>
						<p>Current Date Time :
				<?php
				date_default_timezone_set("Asia/Manila");
				echo Date("M d, Y h:i:s a");
				?>
				</p>
					 <?php if(empty($row['avatar']))
			 {
			  $src="../../img/default_male_pic.png";
			 }	
             else			 
	         {
			 $src="./uploads/profile/".$row['avatar'];
			 } ?>
		   
								
</div>
               
  
        
        <div class="col-md-3">
		
		          <div class="card text-center bg-light mb-3">
            <div class="card-block p-2">
               <img class="img-thumbnail" width="100" height="100" src="<?php echo $src ?>" >
					<p><?php echo $session_applicant_name;?></p>

                            <a href="myprofile.php" class="btn btn-sm btn-outline-success" ><i class="fa fa-edit"></i> Profile</a><br>
               <i class="fa fa-phone"><?php  
        $con=mysqli_connect("localhost","root","","joandb");
        if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }$sql="SELECT pnumber,email FROM jobseekers where $session_id=accountid ";

if ($result=mysqli_query($con,$sql))
  {
  // Fetch one and one row
  while ($row=mysqli_fetch_row($result))
    {
    printf (" (%s)\n",$row[0],$row[1]);
    }
  // Free result set
  mysqli_free_result($result);
}

mysqli_close($con);
         	                ?></i><br>
  <i class="fa fa-address-card-o"><?php  
        $con=mysqli_connect("localhost","root","","joandb");
        if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }$sql="SELECT email,pnumber FROM jobseekers where $session_id=accountid ";

if ($result=mysqli_query($con,$sql))
  {
  // Fetch one and one row
  while ($row=mysqli_fetch_row($result))
    {
    printf (" (%s)\n",$row[0],$row[1]);
    }
  // Free result set
  mysqli_free_result($result);
}

mysqli_close($con);

        
                          ?></i>


</i><br>
  <i class="fa fa-birthday-cake"><?php  
        $con=mysqli_connect("localhost","root","","joandb");
        if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }$sql="SELECT birthday,pnumber FROM jobseekers where $session_id=accountid ";

if ($result=mysqli_query($con,$sql))
  {
  // Fetch one and one row
  while ($row=mysqli_fetch_row($result))
    {
    printf (" (%s)\n",$row[0],$row[1]);
    }
  // Free result set
  mysqli_free_result($result);
}

mysqli_close($con);

        
                          ?></i><br>




<p>__________________________</p>


         
              <h3>Jobs</h3>
              <h1 class="display-5"><i class="fa fa-pencil-square-o"></i><?php   
       $result = $db->prepare("SELECT count(*) as total FROM `employers`");
       $result->execute();
	   $row = $result->fetch();
	   echo $row["total"];
?></h1><p>__________________________</p>
              <a href="jobs.php" class="btn btn-sm btn-outline-secondary">View</a>
               <h3>Clients</h3>
              <h1 class="display-5"><i class="fa fa-address-book-o"></i> <?php   
       $result = $db->prepare("SELECT count(*) as total FROM `employers`");
       $result->execute();
	   $row = $result->fetch();
	   echo $row["total"];
      ?></h1>
              <a href="employers.php" class="btn btn-sm btn-outline-secondary">View</a>
              <p>__________________________</p>
            </div>
          </div>

        
		  
        </div>


        <div class="col-md-9 bg-light">

         
              <h3 class="mt-5">Latest Job Posts</h3> 
       
			
   			<table class="table table-striped table-bordered" id="jobstable">

              <thead>
              <tr>
                 <th>Job Title</th>
                 <th>Description</th>
				 <th>Date Posted</th>
				   <th>Status</th>
		         <th></th>
               </tr>
              </thead>
              </table>

<br>
   
       
        </div>
		
</div>
</div><!-- container -->

<?php include("footer.php");?>
<script>
  $(document).ready(function() {
  
        $('#jobstable').dataTable({
        "bProcessing": true,
        "lengthMenu": [[10, 25, 50,100, -1], [10, 25, 50,100, "All"]],
        "sAjaxSource": "browsejobs.php",

        "aoColumns": [
              { mData: 'jobtitle' } ,
              { mData: 'description' },
			  { mData: 'dateposted' },
			  { mData: 'status' },
              { mData: 'jobid' } 
		            ],
			
			"columnDefs": [
 	      
	      { "targets": 3,  "searchable":false,"sortable":false,
             "render": function ( data, type, row ) {
               return (data==1)?"Open":"Closed";
		  }},
            {"targets": 4,  "searchable":false,"sortable":false,
             "render": function ( data, type, row ) {
               return "<a class='btn btn-success' href='#' onclick='showdetails("+row.jobid+")'><i class='fa fa-sign-in'> Details</i></a>";
            }
	  
		  }
	  
	  ]

			      


      });
   });

function showdetails(id){
	window.location.href="jobdetails.php?jobid="+id;
}
  
  
  

</script>
  <script src="../../js/bootbox.min.js"></script>

</body>
</html>