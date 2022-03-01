<?php $clientid=$_GET["accountid"];?>
<?php include("header.php");?>
<?php include("navadmin.php");?>
<?php include ("../connect.php");?>
<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<h3 class="page-header my-5">Posted Jobs by : <?php 
				$res_exp = $db->prepare("SELECT * FROM `employers` where accountid=:accountid");
			    $res_exp->execute(array(':accountid'=>$clientid));
			    $row2 = $res_exp->fetch();        
			                
             	?>
            <a href="employerprofile.php?accountid=<?php echo $clientid; ?>"><?php echo $row2["fname"]." ". $row2["mname"]." ". $row2["lname"];?></a>
			</h3>
				</div>
               
		
		   <div class="col-lg-12">
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

			</div>

	
</div>
</div><!-- container -->


<?php include("footer.php");?>


<script>
  $(document).ready(function() {
  
        $('#jobstable').dataTable({
        "bProcessing": true,
        "lengthMenu": [[10, 25, 50,100, -1], [10, 25, 50,100, "All"]],
        "sAjaxSource": "browseposts.php?accountid="+<?php echo $clientid;?>,

        "aoColumns": [
              { mData: 'jobtitle' } ,
              { mData: 'description' },
			  { mData: 'dateposted' }, { mData: 'status' },
              { mData: 'jobid' } 
		            ],
			
			"columnDefs": [
	 	       { "targets": 3,  "searchable":false,"sortable":false,
             "render": function ( data, type, row ) {
               return (data==1)?"Open":"Closed";
		  }}, 
	      {
            "targets": 4,  "searchable":false,"sortable":false,
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