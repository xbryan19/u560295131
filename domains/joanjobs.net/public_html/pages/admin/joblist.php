<?php include("includes/nav.php");?>
<?php include("connect.php");?>
<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:300px;margin-top:43px;">



<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<h3 class="page-header my-5">Job Listing</h3>
				</div>
               
		
		   <div class="col-lg-12">
			  <table class="table table-striped table-bordered" id="jobstable">

              <thead>
              <tr>
                 <th>Job Title</th>
                 <th>Description</th>
				 <th>Date Posted</th>	   <th>Status</th>
		         <th></th>  <th></th>
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
        "sAjaxSource": "browsejobs.php",

        "aoColumns": [
              { mData: 'jobtitle' } ,
              { mData: 'description' },
			  { mData: 'dateposted' },  { mData: 'status' },
              { mData: 'jobid' },  { mData: 'jobid' } 
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
	  
		  },
		   {
            "targets": 5,  "searchable":false,"sortable":false,
             "render": function ( data, type, row ) {
               return "<a class='btn btn-danger' href='#' onclick='deleterecord("+row.jobid+")'><i class='fa fa-close'> Delete</i></a>";
            }
	  
		  }
	  
	  ]

	     


      });
   });


  function showdetails(id){
	window.location.href="jobdetails.php?jobid="+id;
}

  
function deleterecord(id){
	    bootbox.confirm({
			title :"Confirm Action",
            message: "Delete selected job post?",
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
				 { window.location.href='deletejob.php?id='+id;}
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







	