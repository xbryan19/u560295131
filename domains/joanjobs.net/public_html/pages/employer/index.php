<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
 <link rel="stylesheet" href="../css/font-awesome.min.css">
	<link href="../../css/bootstrap.css" rel="stylesheet">
    <link href="../../css/style.css" rel="stylesheet">
	<title>Joan Jobs</title>

	<link rel="shortcut icon" href="logoc.jpg">
  
    <style>
.nav {   background: #343A40;}
/*	
.nav-pills > li > a {
    display: block;
    text-align: center;
    text-decoration: none;
    position: relative;
    text-transform: uppercase;
    color: #000;color: #f4f4f4;
    background: linear-gradient(180deg, transparent 29%, #98927C 30%);
	background:  #98927C;
}

	.nav-pills > li.active > a, .nav-pills > li.active > a:focus, .nav-pills > li.active > a:hover {
    color: #1e1b1b;
    background-color: #fff;
    border-top: 0px solid black;
}
.nav-pills > li > a {
    border-radius: 0px;
}




.nav-pills > li > a {
    display: block;
    text-align: center;
    text-decoration: none;
    position: relative;
    text-transform: uppercase;
    color: #000;color: #f4f4f4;
    background: linear-gradient(180deg, transparent 29%, #98927C 30%);
	background:  #98927C;
}
.nav-pills > li.active > a, .nav-pills > li.active > a:focus, .nav-pills > li.active > a:hover {
    background:  #F2EEE2 ;  background:  #F2EEE0 ; 
    color: #98927C;    color: #000;
}
.nav-pills > li > a:hover {
    border-radius: 0px; color: #000!important; 
}

form,.fade {
 background: #F2EEE2 ;	
}

*/


.nav-link {color: #fff;}
.nav-link:hover {color:#b9a8a1;}
	</style>

	


    </head>

  <body>
<?php include("../header.php");?>
<?php include("../navigation.php");?>

    <!-- SHOWCASE -->
  <section  class="py-5">

      <div class="container">
        <div class="row justify-content-center">
    
          <div class="col-lg-4 col-sm-12 col-md-12">
     				<!--div class="login-panel panel panel-default "-->
    				
    						<h3 class="mt-5 pt-5">User Login</h3>
    					
    					<ul class="nav nav-tabs">
    						<li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#menu1">Administrator</a></li>
    					
    					</ul>
    					<div class="tab-content" style="background-color: #474d52 !important">
    						<!-- employer -->
    						<div id="menu1" class="tab-pane active container">
    							<br />
    							<form style="padding:4px" method="post" name="admin_form">
    								<div class="form-group">
    									<input type="email" class="form-control" name="email" placeholder="Email">
    								</div>
    								<div class="form-group">
    									<input type="password" class="form-control" name="pass" placeholder="Password">
    								</div>
    								<div class="form-group">
    									<button class="btn btn-block btn-success" id = "btn-login" name = "btn-login">Log in</button>
    								</div>
    								<div class="form-group" id="alert-msg">
    								</div>

    							</form>
    						</div>
							<!-- applicant -->
   
    					<!--/div-->
    				</div>
    		   <p class="mt-5">For administrative use only. Please redirect if you are seeing this.
            </p>
          </div>
     </div>
		
      </div>

  </section>

<?php include("footer.php");?>

  <script src="../../js/jquery.min.js"></script>

  <script src="../../js/bootstrap.min.js"></script>
   <script src="../../js/popper.min.js"></script>


    	<script type="text/javascript">
    		jQuery(function(){
    			$('form[name="admin_form"]').on('submit', function(donard){
    				donard.preventDefault();

    				var a = $(this).find('input[name="email"]').val();
    				var b = $(this).find('input[name="pass"]').val();

    				if (a === '' && b ===''){
    					$('#alert-msg').html('<div class="alert alert-danger">All fields are required!</div>');
    				}else{
    					$.ajax({
    						type: 'POST',
    						url: 'loginemployer.php',
    						data: {
    							email: a,
    							password: b
    						},
    						beforeSend:  function(){
    							$('#alert-msg').html('');
    						}
    					})
    					.done(function(donard){
    						if (donard == 0){
    							$('#alert-msg').html('<div class="alert alert-danger">Incorrect email or password!</div>');
    						}else{
    							$("#btn-login").html('<img src="../../img/loading.gif" /> &nbsp; Signing In ...');
    							setTimeout(' window.location.href = "home.php"; ',2000);
    						}
    					});
    				}
    			});
		////
    		});
			


    	</script>

    </body>
    </html>
