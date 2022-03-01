<?php include("header.php");?>
<?php include("navigation.php");?>
<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<h3 class="my-5">Job Listing</h3>
				</div>
              
		
		   <div class="col-lg-12">
			  <table class="table table-striped table-bordered" id="jobstable">

              <thead>
              <tr>
                 <th>Job Title</th>
                 <th>Description</th>
				 <th>Date Posted</th><th>Status</th>
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
			  { mData: 'dateposted' },    { mData: 'status' },
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
  <script src="../js/bootbox.min.js"></script>

</body>
</html>