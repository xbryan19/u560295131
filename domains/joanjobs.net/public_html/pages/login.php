<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
 <link rel="stylesheet" href="../css/font-awesome.min.css">
	<link href="../css/bootstrap.css" rel="stylesheet">
    <link href="../css/style.css" rel="stylesheet">
	<title>Joan</title>

	<link rel="shortcut icon" href="logoc.png">
  
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
<?php include("navigation.php");?>

    <!-- SHOWCASE -->
  <section id="showcase" class="py-5">
    <div class="primary-overlay">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-sm-12">
		    <h2 class="display-3 mt-5 pt-5">
              Find the right job <br>&amp; the right people...
            </h2>

		    <p class="mt-5">The use of this site is subject to proper guidelines. <br><br>
              Please be responsible in whatever you are posting or applying for. Misuse of our services may subject your account to deactivation and blocking. Be guided accordingly.
            </p>
          
          </div>
          <div class="col-lg-4 col-sm-12 col-md-12 text">
     				<!--div class="login-panel panel panel-default "-->
    				
    						<h3 class="mt-5 pt-5">User Login</h3>
    					
    					<ul class="nav nav-tabs">
    						<li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#menu1">Employer</a></li>
    						<li class="nav-item"><a class="nav-link" data-toggle="tab" href="#menu2">Job Seeker</a></li>
    					</ul>
    					<div class="tab-content" style="background-color: #474d52 !important">
    						<!-- employer -->
    						<div id="menu1" class="tab-pane active container">
    							<br />
    							<form style="padding:4px" method="post" name="admin_form">
    								<div class="form-group">
    									<input type="text" class="form-control" name="username" placeholder="Username">
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
    						<div id="menu2" class="tab-pane container fade">
    							<br />
    							<form style="padding:4px"method="post" name="student_form">
    								<div class="form-group">
    									<input type="text" class="form-control" name="student_username" placeholder="Student ID#">
    								</div>
    								<div class="form-group">
    									<input type="password" class="form-control" name="student_pass" placeholder="Password">
    								</div>
    								<div class="form-group">
    									<button class="btn btn-block btn-success" id = "btn" name = "btn">Log in</button>
    								</div>
    								<div class="form-group" id="alert-msg1">
    								</div>
    							</form>
    						</div>
    					<!--/div-->
    				</div>
    		
          </div>
     </div>
		
      </div>
    </div>
  </section>

  <footer id="main-footer" class="py-5 bg-dark text-white">
    <div class="container">
      <div class="row text-center">
        <div class="col">
          <p class="lead">Copyright &copy; 2021 Job Outsourcing Nasugbu</p>
        </div>
      </div>
    </div>
  </footer>

  <script src="../js/jquery.min.js"></script>

  <script src="../js/bootstrap.min.js"></script>
   <script src="../js/popper.min.js"></script>


    	<script type="text/javascript">
    		jQuery(function(){
    			$('form[name="admin_form"]').on('submit', function(donard){
    				donard.preventDefault();

    				var a = $(this).find('input[name="username"]').val();
    				var b = $(this).find('input[name="pass"]').val();

    				if (a === '' && b ===''){
    					$('#alert-msg').html('<div class="alert alert-danger">All fields are required!</div>');
    				}else{
    					$.ajax({
    						type: 'POST',
    						url: 'new_login.php',
    						data: {
    							username: a,
    							password: b
    						},
    						beforeSend:  function(){
    							$('#alert-msg').html('');
    						}
    					})
    					.done(function(donard){
    						if (donard == 0){
    							$('#alert-msg').html('<div class="alert alert-danger">Incorrect username or password!</div>');
    						}else{
    							$("#btn-login").html('<img src="img/loading.gif" /> &nbsp; Signing In ...');
    							setTimeout(' window.location.href = "home.php"; ',2000);
    						}
    					});
    				}
    			});

    			$('form[name="student_form"]').on('submit', function(donard){
    				donard.preventDefault();

    				var a = $(this).find('input[name="student_username"]').val();
    				var b = $(this).find('input[name="student_pass"]').val();

    				if (a === '' && b ===''){
    					$('#alert-msg1').html('<div class="alert alert-danger">All fields are required!</div>');
    				}else{
    					$.ajax({
    						type: 'POST',
    						url: 'student/new_login.php',
    						data: {
    							username: a,
    							password: b
    						},
    						beforeSend:  function(){
    							$('#alert-msg1').html('');
    						}
    					})
    					.done(function(donard){
    						if (donard == 0){
    							$('#alert-msg1').html('<div class="alert alert-danger">Incorrect username or password!</div>');
    						}else{
    							$("#btn").html('<img src="img/loading.gif" /> &nbsp; Signing In ...');
    							setTimeout(' window.location.href = "student/dashboard.php"; ',2000);
    						}
    					});
    				}
    			});			

				////
    		});
			
			 ////php mail
				 function sendemail(){
					var semail = $("#senderemail").val();
					var smsg =$("#sendermsg").val();
					var sname = $("sendername").val();
					if(semail=="" || smsg=="" ||sname=="")
					{  $("#mailmsg").html("<h5>Please complete details.<h5>");}
               else	{			   
				$.ajax({
    						type: 'POST',
    						url: 'sendmail.php',
    						data: {
    							semail: semail,
    							sname: sname,
								smessage:smsg
    						},
    						beforeSend:  function(){
    							$('#mailmsg').html('');
    						}
    					})
    					.done(function(donard){
                           $("#mailmsg").html("<h5>Message was sent!<h5>");
						   $("#senderemail").val("");
					       $("#sendermsg").val("");
					       $("#sendername").val("");
						   setTimeout(' $("#mailmsg").html(""); ',5000);
    					});
				  }
				}
    	</script>

    </body>
    </html>
