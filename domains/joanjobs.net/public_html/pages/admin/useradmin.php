<?php include("includes/nav.php");?>
<?php include("connect.php");?>
<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:300px;margin-top:43px;">











	 <div class="col-md-12 bg-light">

         
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
               return "<a class='btn btn-outline-warning' href='#' onclick='deleterecord("+row.userid+")'><i class='fa fa-close'> Delete</i></a>";
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