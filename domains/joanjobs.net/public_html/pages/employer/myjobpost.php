
<?php include("includes/nav.php");?>
<?php include("connect.php");?>

<div class="container">
			<div class="row">
				<div class="col-lg-10">
					<h3 class="page-header my-5"><span class="w3-xxlarge"><b> My job List</b></span></h3>
				</div>
               


    
       
			
   			<table class="table table-striped table-bordered" id="jobstable">

              <thead>
              <tr>
                 <th>Job Title</th>
                 <th>Description</th>
				 <th>Date Posted</th> 
                 <th>Date Expiry</th> 
                 <th>Payrate</th>
		         <th>Status</th>
                 <th>Action</th>
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
        { mData: 'xdate' },
        { mData: 'payrate' },

        { mData: 'status' },
         

              { mData: 'jobid' } 
                ],
      
      "columnDefs": [
      
       { "targets": 5,  "searchable":false,"sortable":false,
             "render": function ( data, type, row ) {
               return (data==1)?"Open":"Closed";
      }},
           
        {
            "targets": 6,  "searchable":false,"sortable":false,
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