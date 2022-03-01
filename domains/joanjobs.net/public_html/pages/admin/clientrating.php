<?php include("includes/nav.php");?>
<?php include("connect.php");?>

<div class="w3-main" style="margin-left:300px;margin-top:43px;">
<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<h1 class="w3-jumbo">Registered Employers</h1>
				</div>
               
		
		   <div class="col-lg-12">
			  <table class="table table-striped table-bordered" id="jobstable">

              <thead>
              <tr>
                 <th>Lastname</th>
                 <th>Firstname</th>
				 <th>Verified</th>
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
        "sAjaxSource": "browseemployers.php",

        "aoColumns": [
              { mData: 'lname' } ,
              { mData: 'fname' },
			  { mData: 'verified' },
       
              { mData: 'accountid' } 
		            ],
			
		
	 	       


			      


      });
   });




</script>
<a href="rateclient.php?accountid=<?php echo $id;?>" id="btnrate"  class="d-inline btn-sm btn-danger btn">Ratings</a>
  <script src="../js/bootbox.min.js"></script>