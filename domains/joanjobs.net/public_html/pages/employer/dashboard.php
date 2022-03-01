<?php include("header.php");?>
<?php include("navadmin.php");?>

<body background="1.jpg" style=" background-repeat: no-repeat;background-size: 100%;">
<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<h3 class="page-header mt-5" style="color: white;">Client Dashboard</h3>
						<p style="color: white;">Current Date Time :
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
					<p><?php echo $session_client_name;?></p>

             <a href="myprofile.php" class="btn btn-sm btn-outline-success" ><i class="fa fa-edit"></i> Profile</a><br>


             <i class="fa fa-phone"><?php  
        $con=mysqli_connect("localhost","root","","joandb");
        if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }$sql="SELECT pnumber,email FROM employers where $session_id=accountid ";

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
  }$sql="SELECT email,pnumber FROM employers where $session_id=accountid ";

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
  }$sql="SELECT birthday,pnumber FROM employers where $session_id=accountid ";

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
              <h3>My Job Posts</h3>
              <h1 class="display-5"><i class="fa fa-pencil"></i><?php   

       $result = $db->prepare("SELECT count(*) as total FROM `jobs` where accountid=:accountid");
	   $result->bindParam(':accountid', $session_id);
       $result->execute();
	   $row = $result->fetch();
	   echo $row["total"];
?></h1><p>__________________________</p>
              <!--a href="jobs.php" class="btn btn-sm btn-outline-secondary">View</a-->
            
              <h3>Applicants</h3>
              <h1 class="display-5"><i class="fa fa-folder-open-o"></i><?php   
       $result = $db->prepare("SELECT count(*) as total FROM `jobseekers`");
       $result->execute();
	   $row = $result->fetch();
	   echo $row["total"];
?></h1>
              <a href="applicants.php" class="btn btn-sm btn-outline-secondary">View</a>
              <p>__________________________</p>
            </div>
          </div>
		  
		  
        </div>


        <div class="col-md-9 bg-light">

         
              <h3 class="mt-5">My Job Posts</h3> 
       
			
   			<table class="table table-striped table-bordered" id="jobstable">

              <thead>
              <tr>
                 <th>Job Title</th>
                 <th>Description</th>
				 <th>Date Posted</th> 
          <th>Payrate</th>
		         <th>Status</th>
             <th></th>
               </tr>
              </thead>
              </table>

<br>
    <a href="newpost.php" class="btn btn-outline-success d-inline"><i class="fa fa-plus"></i> Post a Job</a>
        
        </div>
		
</div>
</div><!-- container -->


<?php include("footer.php");?>
<script>
  $(document).ready(function() {
  
        $('#jobstable').dataTable({
        "bProcessing": true,
        "lengthMenu": [[10, 25, 50,75,100, -1], [10, 25, 50,75,100, "All"]],
        "sAjaxSource": "browsemyjobs.php",

        "aoColumns": [
              { mData: 'jobtitle' } ,
              { mData: 'description' },
			  { mData: 'dateposted' },  
        { mData: 'payrate' },
        { mData: 'status' },
              { mData: 'jobid' } 
		            ],
			
			"columnDefs": [
			
			 { "targets": 4,  "searchable":false,"sortable":false,
             "render": function ( data, type, row ) {
               return (data==1)?"Open":"Closed";
		  }},
	 	       
	      {
            "targets": 5,  "searchable":false,"sortable":false,
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