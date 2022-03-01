<?php include("includes/nav.php");?>
<?php include("connect.php");?>
<div class="container">
		<div class="row justify-content-center">
     
    	   <div class="col-lg-6">
		      <h3 ><span class="w3-xlarge"><b>Secret Question</b></h3><br>
			  <p>This information will help you when the time you cant remember your password.</p><br><br>
							<form   method="post" action="savesecret.php" name="register-form" id="register-form" >

    <div class="form-group">
                                  
                                  <input style="display: none;"  type="text" class="form-control" id="id" name="id" value="<?php echo $row["accountid"];?>" required="" title="Please enter Lastname">
                                  <span class="help-block"></span>
                              </div>



                               <div class="form-group">
                                  
                                  <input style="display: none;" type="text" class="form-control" id="email" name="email" value="<?php echo $row["email"];?>" required="" title="Please enter Lastname">
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

        <?php

                                         $result = $db->prepare("SELECT * FROM secretclient where accountid=:userid");
          $result->bindParam(':userid', $session_id);
            $result->execute();
          $foundrows = $result->rowCount();
     
      { 
            $row = $result->fetch();
          
            ?>

               <div class="form-group">
                                  <label for="answer" class="control-label">Answer</label>
                               <input type="text" class="form-control" id="answer" name="answer" value="<?php echo $row["answer"];?>" required="" title="Please enter address">
              
                               
                                  <span class="help-block"></span>
                              </div>  
<?php } ?>





                
<?php 
  $id=$session_id;
          $hired=0;
          $res_agent = $db->prepare("SELECT * FROM `secretclient` where accountid=:accountid");
          $res_agent->execute(array(':accountid'=>$id));
          $row_agent = $res_agent->fetch();  
        if($res_agent->rowCount()==1){
          $hired=1;
       
?>
 <input type="submit" onclick="return validation();" value="Edit" class="btn btn-success btn-block mb-5" name="btnregister" id="btnregister">
 <?php }?>


      <?php if($hired==0){?>
    <input type="submit" onclick="return validation();" value="Save" class="btn btn-success btn-block mb-5" name="btnregister" id="btnregister"><?php } ?>
                          </form>		

			</div>
	
</div>
</div><!-- container -->


<?php include("footer.php");?>
<script src="../../js/bootstrap-birthday.min.js"></script>
  
  <script src="../../js/bootbox.min.js"></script>

