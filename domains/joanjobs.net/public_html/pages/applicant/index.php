
<?php
	include '../connect.php';

	//Start session
	session_start();
	
	//Check whether the session variable SESS_MEMBER_ID is present or not
	if(!isset($_SESSION['SESS_MEMBER_ID']) || (trim($_SESSION['SESS_MEMBER_ID']) == '')) {
		header("location: ../index.php");
		exit();
	}

	$session_id  = $_SESSION['SESS_MEMBER_ID'];

	$query = $db->prepare("SELECT * FROM jobseekers WHERE accountid = ?");
	$query->execute(array($session_id));
	$row = $query->fetch();

	$applicant_name = $row['fname']." ".$row['mname'] ." ". $row['lname'];
	$_SESSION['PWD'] = $row['password'];
    $_SESSION['EMAIL'] = $row['email'];
	$_SESSION['VERIFIED'] = $row['verified'];
	
	if($_SESSION['VERIFIED']==1 ) {
		header("location: inde.php");
		exit();
	}
	
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<title>Posted Jobs</title>
	
	<link rel="shortcut icon" href="logoc.jpg">

	<!-- Bootstrap Core CSS -->
	<link href="../../css/bootstrap.min.css" rel="stylesheet">


	<!-- Custom Fonts -->
	<link href="../../css/font-awesome.min.css" rel="stylesheet" type="text/css">
   <link rel="stylesheet" type="text/css" href="../../datatables/responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="../../datatables/dataTables.min.css">
<style>
html, body {
  height: 100%!important;
}
 body {
  display: flex!important;
  flex-direction: column;
}
.content {
  flex: 1 0 auto;
}
.footer {
  flex-shrink: 0!important;


  
</style>
</head>

<body>
<div class="content">
<?php include("navverify.php");?>
<?php include('../connect.php'); ?>
<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<h3 class="page-header mt-5">Thank You for registering!</h3>
					<p>Applicant: <em><?php echo $applicant_name;?></em></p>
									<p>Current Date Time :
				<?php
				date_default_timezone_set("Asia/Manila");
				echo Date("M d, Y h:i:s a");
				?>
				</p>
				
				
		        	<h3 class="page-header mt-5">One more step...</h3>
					<p class="<?php echo (!empty($row["idphoto"]))?"d-none":"d-block";?>">Your <b>account needs to be  verified first</b> by the admin before you proceed. Please <b>upload a photo of you holding any valid id</b>. The id must be readable.</p>
					<p class="<?php echo (!empty($row["idphoto"]))?"d-block":"d-none";?>">The verification of your account is still being process. Try to login in a later time.</p>
		
				<form class="<?php echo (!empty($row["idphoto"]))?"d-none":"d-block";?>" method="POST" action="upload_id.php" enctype="multipart/form-data" name="changer">
<div class="col-lg-4">
<div id="pix"><img src="../../img/default-no-image.png" width="225" height="225">
</div><br/>
<input class="btn btn-success" name="cmdBrowse" value="Browse" type="button" onclick="$('#file').click();" />


<input class="btn btn-info "  name="cmdSave" value="Upload Image" type="submit"  />

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