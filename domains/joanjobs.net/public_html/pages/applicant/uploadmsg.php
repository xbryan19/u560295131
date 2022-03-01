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

<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<h3 class="page-header mt-5">
					<?php 
						//Start session
                 	session_start();
					if(isset($_SESSION['UPLOAD_RESULT'])) {
					echo $_SESSION['UPLOAD_RESULT']; 
					}
					?>
					</h3>
									<p>Current Date Time :
				<?php
				date_default_timezone_set("Asia/Manila");
				echo Date("M d, Y h:i:s a");
				?>
				</p>
		        	<h3 class="page-header mt-5">What's next?</h3>
					<p>It may take a while but the admin will check and verify your id.</p>
				
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