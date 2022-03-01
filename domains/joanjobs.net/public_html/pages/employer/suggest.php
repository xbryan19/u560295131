
<?php include("includes/nav.php");?>
<?php include("connect.php");?>


<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<h3 class="page-header my-5"><span class="w3-xlarge"><b>Registered Applicants</b></span></h3>
				</div>
               
		
		   <div class="col-lg-12">
			  <table class="table table-striped table-bordered" id="jobstable">

              <thead>
              <tr>
                 <th>Lastname</th>
                 <th>role</th>
				
		         <th>Action</th>
               </tr>
              </thead>
              </table>

			</div>

	
</div>
</div><!-- container -->


<?php include("footer.php"); ?>

<script>
  $(document).ready(function() {
  
        $('#jobstable').dataTable({
        "bProcessing": true,
        "lengthMenu": [[10, 25, 50,100, -1], [10, 25, 50,100, "All"]],
        "sAjaxSource": "browseaccounts.php",

        "aoColumns": [
              { mData: 'role' } ,
             
			  { mData: 'expertise' }, { mData: 'avail' },
              { mData: 'accountid' } 
		            ],
			
			"columnDefs": [
	 	       
	      {
            "targets": 5,  "searchable":false,"sortable":false,
             "render": function ( data, type, row ) {
               return "<a class='btn btn-success' href='#' onclick='showprofile("+row.accountid+")'><i class='fa fa-sign-in'> Profile</i></a>";
            }
	  
		  }
	  
	  ]

			      


      });
   });

function showprofile(id){
	window.location.href="profile.php?accountid="+id;
}
  
  

</script>
  <script src="../js/bootbox.min.js"></script>
<br><br><br><br><br><br>
</body>
</html>