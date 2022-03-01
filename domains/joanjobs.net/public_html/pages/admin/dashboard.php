
<?php include("header.php");?>
<?php include("navadmin.php");?>
<body background="dashboard.jpg" style=" background-repeat: no-repeat;background-size: 100%;">

<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<h3 class="page-header mt-5" style="color: white;">Dashboard</h3>
					<p style="color: white;">Logged User: <em><?php echo $session_admin_name;?></em></p>
					  <a href="editadmin.php?userid=<?php echo $session_id ;?>" class="btn btn-sm btn-outline-success d-inline" ><i class="fa fa-plus"></i> Edit Details </a>
									<p style="color: white;" >Current Date Time :
				<?php
				date_default_timezone_set("Asia/Manila");
				echo Date("M d, Y h:i:s a");
				?>
				</p>
		
				</div>
             
  
        
        <div class="col-md-3">
          <div class="card text-center bg-light mb-3">
            <div class="card-block p-2">
              <h3>Total Job Posts</h3>
              <h1 class="display-5"><i class="fa fa-pencil"></i><?php   
       $result = $db->prepare("SELECT count(*) as total FROM `jobs`");
       $result->execute();
	   $row = $result->fetch();
	   echo $row["total"];
?></h1>
<p>Open - <?php   
       $result = $db->prepare("SELECT count(*) as total FROM `jobs` where status=1");
       $result->execute();
	   $row = $result->fetch();
	   echo $row["total"];
?></p>
<p class="text-danger">Closed - <?php   
       $result = $db->prepare("SELECT count(*) as total FROM `jobs` where status<>1");
       $result->execute();
	   $row = $result->fetch();
	   echo $row["total"];
?></p>
              <a href="jobs.php" class="btn btn-sm btn-outline-secondary">View</a>

<p>__________________________</p>
         
          
              <h3>Applicants</h3>
              <h1 class="display-5"><i class="fa fa-folder-open-o"></i><?php   
       $result = $db->prepare("SELECT count(*) as total FROM `jobseekers`");
       $result->execute();
	   $row = $result->fetch();
	   echo $row["total"];
     ?>
     <h3 class="text-danger">Not Verified - <?php   
       $result = $db->prepare("SELECT count(*) as total FROM `jobseekers` where verified='0'");
       $result->execute();
     $row = $result->fetch();
     echo $row["total"];
?></h1>
              <a href="jobseekers.php" class="btn btn-sm btn-outline-secondary">View</a>
        

       <p>__________________________</p>
              <h3>Clients</h3>
              <h1 class="display-5"><i class="fa fa-users"></i> <?php   
       $result = $db->prepare("SELECT count(*) as total FROM `employers`");
       $result->execute();
	   $row = $result->fetch();
	   echo $row["total"];
      ?></h1>
        <h3 class="text-danger">Not Verified - <?php   
       $result = $db->prepare("SELECT count(*) as total FROM `employers` where verified='0'");
       $result->execute();
     $row = $result->fetch();
     echo $row["total"];
?></h1>
              <a href="employers.php" class="btn btn-sm btn-outline-secondary">View</a>
            </div>
          </div>
		  
		  
        </div>


        <div class="col-md-9 bg-light">

         
              <h3 class="mt-5">List of Users</h3> 
       
			
   			  <table class="table table-striped table-bordered" id="usertable">

              <thead>
              <tr>
                 <th>Lastname</th>
                 <th>Firstname</th>
				 <th>Middlename</th>
		         <th></th>
               </tr>
              </thead>
              </table>
<br>
    <a href="newadmin.php" class="btn btn-outline-success d-inline" ><i class="fa fa-plus"></i> Add User</a>
        
        </div>
		
</div>
</div><!-- container -->


<?php include("footer.php");?>
<script>
  $(document).ready(function() {
  
        $('#usertable').dataTable({
        "bProcessing": true,
        "lengthMenu": [[10, 25, 50,100, -1], [10, 25, 50,100, "All"]],
        "sAjaxSource": "browseadmin.php",

        "aoColumns": [
              { mData: 'lname' } ,
              { mData: 'fname' },
			  { mData: 'mname' },
              { mData: 'userid' } 
		            ],
			
			"columnDefs": [
	 	       
	      {
            "targets": 3,  "searchable":false,"sortable":false,
             "render": function ( data, type, row ) {
               return "<a class='btn btn-outline-warning' href='#' onclick='deleterecord("+row.accountid+")'><i class='fa fa-close'> Delete</i></a>";
            }
	  
		  }
	  
	  ]

			      


      });
   });

function deleterecord(id){
	    bootbox.confirm({
			title :"Confirm Action",
            message: "Delete selected admin user account?",
            buttons: {
                confirm: {
                    label: 'Yes',
                    className: 'btn-danger'
                },
                cancel: {
                    label: 'No',
                    className: 'btn-success'
                }
            },
            callback: function (result) {
				if(result==true)
				 { window.location.href='deleteuser.php?id='+id;}
            }
        });	
}
  
  

</script>
  <script src="../../js/bootbox.min.js"></script>
<style>
.modal-header{
	display:block;
}
</style>
</body>
</html>