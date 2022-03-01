<?php include("includes/nav.php");?>

<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<h1 class="w3-jumbo">Projecname:</h1>
				</div>
               
		
		   <div class="col-lg-12">
			  <table class="table table-striped table-bordered" id="jobstable">

              <thead>
              <tr>
                 <th>System Features</th>
                 <th>Expected Percentage</th>
				 <th>Actual Percentage</th>
           <th>Status</th>
		         <th>Action</th>
               </tr>
              </thead>
              </table>

			</div>

	
</div>
</div><!-- container -->





<script>
  $(document).ready(function() {
  
        $('#jobstable').dataTable({
        "bProcessing": true,
        "lengthMenu": [[10, 25, 50,100, -1], [10, 25, 50,100, "All"]],
        "sAjaxSource": "browseproject.php",

        "aoColumns": [
              { mData: 'feature' } ,
              { mData: 'actual' },
			  { mData: 'expected' },
        { mData: 'status' },


              { mData: 'id' } 
		            ],
			
			"columnDefs": [
	 	       
	      {
            "targets": 4,  "searchable":false,"sortable":false,
             "render": function ( data, type, row ) {
               return "<a class='btn btn-success' href='#' onclick='showprofile("+row.accountid+")'><i class='fa fa-sign-in'> Profile</i></a>";
            }
	  
		  }
	  
	  ]

			      


      });
   });


     function showprofile(id){
	window.location.href="employerprofile.php?accountid="+id;
}
  

</script>
  <script src="../js/bootbox.min.js"></script>

</body>
</html>