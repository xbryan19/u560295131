  <link rel="stylesheet" href="modal.php">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<nav class="navbar navbar-expand-md bg-dark navbar-dark">
  <a class="navbar-brand" href="#">JOAN Jobs</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
	<li class="nav-item">
        <a class="nav-link" href="index.php">Home</a>
      </li>   
	 <li class="nav-item">

      </li>    
	     <li class="nav-item">
        <a class="nav-link" href="about.php">About Us</a>
      </li>   

    </ul>


      <ul class="navbar-nav nav ml-auto"> 
      <li class="nav-item">
        <a class="nav-link" data-toggle="modal" data-target="#myModal" >Register Here</a>



        <div class="modal fade" id="myModal">

    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Register</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
        <p>If you are lookin for a job or a quick employement register as Job Applicant.</p><br>
        <p>If you are finding a right person for a job or a worker register as Client.</p>
        
        <!-- Modal footer -->
        <div class="modal-footer">
         <a style="color: black;" href="newaccount.php">  <button  style="width: 200px;" type="button" class="btn btn-primary">Job Applicant</button></a>
           <a style="color: black;" href="newemployer.php"><button style="width: 200px;" type="button" class="btn btn-primary">Client</button></a>
          
        </div>
        
      </li>    

    </li>    
       <li class="nav-item">
           <a href="admin/index.php" class="nav-link" ><i class="fa fa-users"></i></a>
      </li>  
      
 
    </ul>



	
		
  </div>  
</nav>