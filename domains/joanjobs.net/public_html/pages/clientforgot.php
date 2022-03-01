<?php include("header.php");?>
<?php include("navigation.php");?>

<?php include("connect.php");?>





<div class="container">
		<div class="row justify-content-center">
     
    	   <div class="col-lg-5">
		      <h3 ><span class="w3-xlarge"><b>Enter Your Email Address</b></h3><br>
			  <p>Enter your email to proceed.</p><br><br>
							<form  action="nextclient.php"  method="post"  id="register-form" >

    <div class="form-group">
                                    <label for="email" class="control-label">Email Address</label>
                                  <input  type="email" class="form-control" id="email" name="email" value="" title="Please enter Email">
                                  <span class="help-block"></span>
                              </div>
        <div class="form-group">
                                  <label for="question" class="control-label">Pick Somequestion:</label>
                                   <select class="form-control" id="question" name="question">
                                  <option>Who is your favorite pet?</option>
                                   <option>Who is you favorite brother/sister?</option>
                                   <option>What is your favorite friend</option>
                </select>
              
                               
                                  <span class="help-block"></span>
                              </div>  



               <div class="form-group">
                                  <label for="answer" class="control-label">Answer</label>
                               <input type="text" class="form-control" id="answer" name="answer" value="" required="" title="Please enter address">
              
                               
                                  <span class="help-block"></span>
                              </div>  


   <div class="form-group">
                                  <label for="password" class="control-label">New Password</label>
                               <input type="text" class="form-control" id="password" name="password" value="" required="" title="Please enter address">
              
                               
                                  <span class="help-block"></span>
                              </div>  



<input type="submit" onclick="return validation();" value="Changed Password" class="btn btn-success btn-block mb-5" name="btnregister" id="btnregister">
    
  	

 </div>
                  </div>
                  </div>
                  </div>
                 
</form>




































<?php include("footer.php"); ?>