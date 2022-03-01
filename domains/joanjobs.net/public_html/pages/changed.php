 <?php
	 
		  include("connect.php");
            $result = $db->prepare("SELECT * FROM secret WHERE email= :email");
            $result->bindParam(':email', $session_id);
            $result->execute();
         	$foundrows = $result->rowCount();
			if($foundrows > 0)
			
            $row = $result->fetch();
            ?>
 
	
  <div class="form-group">
                                  <label for="lname" class="control-label">Lastname</label>
                                  <input type="text" class="form-control" id="lname" name="lname" value="<?php echo $row["email"];?>" required="" title="Please enter Lastname">
                                  <span class="help-block"></span>
                              </div>