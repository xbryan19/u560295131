<?php include("includes/nav.php");?>
<?php include("connect.php");?>
<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:300px;margin-top:43px;">
<div class="container">
		<div class="row justify-content-center">
     
    	   <div class="col-lg-6">
		      <h3 class="page-header mt-5">Create Report by Month</h3>
			  <p></p>
							<form   method="post" action="printmonth.php" name="register-form" id="register-form" >
                              <div class="form-group">
                                  
                                  <select type="date" class="form-control" id="date" name="date">




                                  <option>Jan 2019</option>
                                   <option>Feb 2019</option>
                                    <option>March 2019</option>
                                     <option>April 2019</option>
                                      <option>May 2019</option>
                                       <option>June 2019</option>
                                        <option>July 2019</option>
                                         <option>August 2019</option>
                                      </select>
                                  <span class="help-block"></span>
                              </div>
							  
               


				
							  
							
							  <input type="submit" onclick="return validation();" value="Print" class="btn btn-success btn-block mb-5" name="btnregister" id="btnregister">
                          </form>		

			</div>
	
</div>
</div><!-- container -->


<script src="../js/bootstrap-birthday.min.js"></script>


  <script src="../../js/bootbox.min.js"></script>

</body>
</html>