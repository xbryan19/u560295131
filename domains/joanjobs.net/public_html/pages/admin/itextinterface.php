
<?php include("includes/nav.php");?>
<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:300px;margin-top:43px;">
<div class="container">
		<div class="row justify-content-center">
     <?php $contact=$_GET['contact']; ?>
    	   <div class="col-lg-6">
		      <h3 class="page-header mt-5">New Job Applicant</h3>
			  <p>Please fill-up the following details</p>
							<form   method="post" action="itextmoaction.php" name="register-form" id="register-form" >
                              <div class="form-group">
                                  <label for="lname" class="control-label">Number</label>
                                  <input type="text" class="form-control" id="number" name="number" value="<?php echo $contact ?>" required="" title="Please enter Lastname">
                                  <span class="help-block"></span>
                              </div>
							  
                              <div class="form-group">
                                  <label for="fname" class="control-label">Message</label>
                                  <textarea style="height: 200px;"     type="text" class="form-control" id="message" name="message" value="" required="" title="Please enter Firstname"></textarea> 
                                  <span class="help-block"></span>
                              </div>

											  
						
            
							  <input type="submit" onclick="return validation();" value="Send" class="btn btn-success btn-block mb-5" name="btnregister" id="btnregister">
                          </form>		

			</div>
	
</div>
</div><!-- container -->


</body>
</html>