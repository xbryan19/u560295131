
<?php include("includes/nav.php");?>
<?php include("connect.php");?>
<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:300px;margin-top:43px;">
<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<h3 class="page-header my-5">Registered Accounts</h3>
				</div>
             <a class='btn btn-success' href="print.php">PRINT</a>
		
		   <div class="col-lg-12">
			  <table class="table table-striped table-bordered" id="jobstable">

              <thead>
              <tr>
                 <th>Lastname</th>
                 <th>Firstname</th>
				 <th>Verification</th>
				 <th>Expertise</th>
		         <th></th>
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
        "sAjaxSource": "browseaccounts.php",

        "aoColumns": [
              { mData: 'lname' } ,
              { mData: 'fname' },
			  { mData: 'verified' },
			  { mData: 'expertise' },
              { mData: 'accountid' } 
		            ],
			
			
			"columnDefs": [
	 	       { "targets":2,"searchable":true,"sortable":true,
             "render": function ( data, type, row ) {
               return (data=='1')?"verified ":"not verified";

      }},   
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
	window.location.href="profile.php?accountid="+id;
}
  

</script>
  <script src="../../js/bootbox.min.js"></script>

</body>
</html>