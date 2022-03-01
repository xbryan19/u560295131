<?php include("includes/nav.php");?>
<?php include("connect.php");?>
<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:70px;margin-top:43px;">
<div class="container">
		<div class="row justify-content-center">
     
    	   <div class="col-lg-6">
		      <h3 class="page-header mt-5">Search Applicant</h3>
			  <p></p>
							<form   method="post" action="applicants.php" name="register-form" id="register-form" >
                              <div class="form-group">
                                  
                                  <select type="date" class="form-control" id="jobroles" name="jobroles">




                                  <option>Farmer</option>
                                   <option>Maid</option>
                                    <option>Technician</option>
                                      <option>Electrician</option>
                                        <option>Laborer</option>
                                  
                                      </select>
                                  <span class="help-block"></span>
                              </div>
							  
               


				
							  
							
							  <input type="submit" onclick="return validation();" value="submit" class="btn btn-success btn-block mb-5" name="btnregister" id="btnregister">
                          </form>		

			</div>
	
</div>
</div><!-- container -->


<script src="../js/bootstrap-birthday.min.js"></script>


  <script src="../../js/bootbox.min.js"></script>

</body>
</html>