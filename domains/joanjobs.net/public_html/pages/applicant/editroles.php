<?php include("includes/nav.php");?>
<?php include("connect.php");?>

<div class="container">
		<div class="row justify-content-center">
     
    	   <div class="col-lg-6">
		      <h3 class="page-header mt-5"><b>Edit Job Roles</b></h3>
			  <p>Add/remove roles suited for you...</p>
							<form   method="post" action="addrole.php" name="register-form" id="register-form" >
                          

                               <div class="form-group">
                                  <label for="role" class="control-label">For Person who is an:</label>
                                  <select class="form-control" type="text" id="role" name="role" value="" required="" title="Please enter job role">
                                    <option>Electrician</option>
                                    <option>Farmer</option>
                                    <option>Maid</option>
                                    <option>Laborer</option>
                                    <option>Constraction Worker</option>
                                    <option>Technician  </option>

                                </select>
                                  <span class="help-block"></span>
                              </div>
							  			  
							  <input type="submit" class="btn btn-success mb-5" id="btnregister" value="Add Role">
                
                               <div class="form-group">
                                 <table class="table table-bordered"><thead>
								   <tr>
                                   <th>My Job Roles</th>
		                                 <th></th>
                                  </tr>
                                </thead>
		
		
						<?php
		 	  $result = $db->prepare("select * from expertise where `accountid`=:accountid order by `title`");
			  $result->bindParam(':accountid', $session_id);
			  $result->execute();
					
					while($row = $result->fetch()){
						 echo  "<tr><td>".$row["title"]."</td> <td><a href='removerole.php?id=".$row["id"]."' class='btn btn-sm btn-success'>Remove</a></td></tr>";
   		          
				   
					}?>
								
								
								 </table>
                              </div>


				          </form>		

			</div>
	
</div>
</div><!-- container -->


<?php include("footer.php");?>

<script>

  $(document).ready(function() {


   });

  
  

</script>
  <script src="../../js/bootbox.min.js"></script>

</body>
</html>