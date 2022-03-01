<?php include("includes/nav.php");?>
<?php include("connect.php");?>
<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:300px;margin-top:43px;">

<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<h3 class="page-header my-5">User Logs</h3>
				</div>
               
		
		   <div class="col-lg-12">
			  <table class="table table-striped table-bordered" id="logid">

              <thead>
              <tr>
                 <th>Name</th>
                 <th>Date And Time</th>
				 <th>Category</th>	   <th>Status</th>
		        
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
        "sAjaxSource": "browselogs.php",

        "aoColumns": [
              { mData: 'name' } ,
              { mData: 'date_time' },
			  { mData: 'category' },  { mData: 'status' },
             
                ],
      
		      "columnDefs": [
      
           { "targets":3,"searchable":false,"sortable":false,
             "render": function ( data, type, row ) {
               return (data=='log in')?"log in ":"log out";

      }}, 



    
    ]

       


      });
   });


</script>
  <script src="../../js/bootbox.min.js"></script>
<style>
.modal-header{
  display:block;
}
</style>
</body>
</html>