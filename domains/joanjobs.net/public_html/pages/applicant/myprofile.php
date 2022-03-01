<?php include("includes/nav.php");?>
<?php include("connect.php");?>
<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<h3 class="page-header mt-5">Change profile photo</h3>
					<p>Applicant: <em><?php echo $session_applicant_name;?></em></p>
									
		        
				<form  method="POST" action="updatephoto.php" enctype="multipart/form-data" name="changer">

<div class="col-lg-4">
<div id="pix">
 <?php if(empty($row['avatar']))
			 {
			  $src="../../img/default_male_pic.png";
			 }	
             else			 
	         {
			 $src="./uploads/profile/".$row['avatar'];
			 } ?>
		    <img class="img-thumbnail" width="200" height="200" src="<?php echo $src ?>" >


</div><br/>
<input class="btn btn-success" name="cmdBrowse" value="Browse" type="button" onclick="$('#file').click();" />


<input class="btn btn-info "  name="cmdSave" value="Update Photo" type="submit"  />

</div>


<br>


<input style="display:none" name="file" type="file" id="file"  accept="image/*"/>




<script>
	if (window.FileReader) {
      function handleFileSelect(evt) {
        var files = evt.target.files;
        var f = files[0];
        var reader = new FileReader();
		
          reader.onload = (function(theFile) {
            return function(e) {
              document.getElementById('pix').innerHTML = ['<img src="', e.target.result,'" title="', theFile.name, '" height="225" width="225"/>'].join('');
            };
          })(f);
    
          reader.readAsDataURL(f);
      }
	 } else {
	  alert('This browser does not support FileReader');
	}
    
      document.getElementById('file').addEventListener('change', handleFileSelect, false);
    </script>
	<input type="hidden" name="MAX_FILE_SIZE" value="<?php echo $max_file_size ?>">

</form>

<form method="POST" action="uploadvaccine.php" enctype="multipart/form-data" name="changer">
    
    <h3 class="page-header mt-5">Upload your vaccination ID</h3>
    
        <div class="col-lg-4">
<div id="pix">
 <?php if(empty($row['vaccine']))
			 {
			  $src="../../img/vax.jpg";
			 }	
             else			 
	         {
			 $src="./uploads/vaccine/".$row['vax'];
			 } ?>
		    <img class="img-thumbnail" width="200" height="200" src="<?php echo $src ?>" >


</div><br/>
<input class="btn btn-success" name="cmdBrowse" value="Browse" type="button" onclick="$('#file').click();" />


<input class="btn btn-info "  name="cmdSave" value="Update Photo" type="submit"  />

</div>


<br>


<input style="display:none" name="file" type="file" id="file"  accept="image/*"/>




<script>
	if (window.FileReader) {
      function handleFileSelect(evt) {
        var files = evt.target.files;
        var f = files[0];
        var reader = new FileReader();
		
          reader.onload = (function(theFile) {
            return function(e) {
              document.getElementById('pix').innerHTML = ['<img src="', e.target.result,'" title="', theFile.name, '" height="225" width="225"/>'].join('');
            };
          })(f);
    
          reader.readAsDataURL(f);
      }
	 } else {
	  alert('This browser does not support FileReader');
	}
    
      document.getElementById('file').addEventListener('change', handleFileSelect, false);
    </script>
	<input type="hidden" name="MAX_FILE_SIZE" value="<?php echo $max_file_size ?>">
	
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