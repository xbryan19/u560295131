<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
 <link rel="stylesheet" href="../css/font-awesome.min.css">
	<link href="../css/bootstrap.css" rel="stylesheet">
    <link href="../css/style.css" rel="stylesheet">
	  <link href="../css/navbar-fixed.css" rel="stylesheet">
	<title>Joan</title>

	<link rel="shortcut icon" href="logoc.jpg">
  
    <style>
	
.nav {background: #245A98;}
.nav-link {
	color: #d2d4ed;
}
.nav-link:hover {
	color: #fff;
}
.btn-mine {
    color: #fcf8e3;
  background-color: #244595;
    border: none; 
}
.btn-mine:hover{
    color: #fcf8e3;
   background-color: #4a629e;
    border: 0px blue solid; 
}
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

.nav-pills > li > a:hover {
    border-radius: 0px; color: #000;  background: linear-gradient(180deg, transparent 29%, #98927C 30%);
}


.nav {    background:  #98927C;}
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

form,.fade {
 background: #F2EEE2 ;	
}


.btn-mine {
    color: #fcf8e3;
   background-color: #7b7661; 
    border: none; 
}

.btn-mine:hover{
    color: #fcf8e3;
    background-color: #424037;
    border: 0px blue solid; 
}*/
	</style>

	



    </head>

  <body id="home">
<?php include("navigation.php");?>

    <!-- SHOWCASE -->
  <section id="showcase" class="py-5">
    <div class="primary-overlay text-white">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-sm-12 text-center">
            <h1 class="display-2 mt-5 pt-5">
              Finding the right job for you...
            </h1>
            <p class="lead">Design, create something you would like to see for years to come...</p>
            <a href="more.php" class="btn btn-outline-secondary btn-lg text-white"><i class="fa fa-arrow-right"></i> Read More</a>
          </div>
          <div class="col-lg-4 col-sm-12 col-md-12 text">
     				<!--div class="login-panel panel panel-default "-->
    				
    						<h3 class="mt-5 pt-5">User Login</h3>
    					
    					<ul class="nav nav-tabs">
    						<li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#menu1">Employer</a></li>
    						<li class="nav-item"><a class="nav-link" data-toggle="tab" href="#menu2">Job Seeker</a></li>
    					</ul>
    					<div class="tab-content" style="background-color: #afbfe0 !important">
    						<!-- admin -->
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
    									<button class="btn btn-block btn-mine" id = "btn-login" name = "btn-login">Log in</button>
    								</div>
    								<div class="form-group" id="alert-msg">
    								</div>

    							</form>
    						</div>
							<!-- student -->
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
    									<button class="btn btn-block btn-mine" id = "btn" name = "btn">Log in</button>
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
  
  
      <!-- Download app -->
  <section id="downloadapp" class="my-5 py-5 text-center bg-faded">
    <div class="container">
      <div class="row">
        <div class="col">
          <div class="info-header mb-5">
            <h1 class="text-primary pb-3">
              Get the Android app
            </h1>
			 <p class="lead pb-3">
              By downloading the android mobile app, you can easily view the uploaded photos using your mobile devices.
            </p>
				<a class="btn btn-primary mb-5" href="../androidapp/photoviewer.apk" download><i class="fa fa-android"></i> Download</a>
          </div>
        </div>
      </div>
    </div>
  </section>			
			
    <!-- ABOUT / WHY -->
  <section id="about" class="my-5 py-5 text-center bg-faded">
    <div class="container">
      <div class="row">
        <div class="col">
          <div class="info-header mb-5">
            <h1 class="text-primary pb-3">
              Why This Application?
            </h1>

            <p class="lead pb-3">
              With this web application, making a yearbook will be a lot faster.
            </p>
		
          </div>

          <!-- ACCORDION -->
          <div id="accordion" role="tablist">
            <div class="card">
              <div class="card-header" role="tab" id="heading1">
                <h5 class="mb-0">
                  <div href="#collapse1" data-toggle="collapse" data-parent="#accordion">
                    <i class="fa fa-arrow-circle-down"></i> Get Organized
                  </div>
                </h5>
              </div>

              <div id="collapse1" class="collapse show">
                <div class="card-block">
                  Proper organizing and referencing of photos uploaded by users from a particular school batch or course.
                </div>
              </div>
            </div>

            <div class="card">
              <div class="card-header" role="tab" id="heading2">
                <h5 class="mb-0">
                  <div class="collapsed" href="#collapse2" data-toggle="collapse" data-parent="#accordion">
                    <i class="fa fa-arrow-circle-down"></i> Be Productive
                  </div>
                </h5>
              </div>

              <div id="collapse2" class="collapse">
                <div class="card-block">
                    Using page templates for faster design and content making.              
                </div>
              </div>
            </div>

            <div class="card">
              <div class="card-header" role="tab" id="heading3">
                <h5 class="mb-0">
                  <div class="collapsed" href="#collapse3" data-toggle="collapse" data-parent="#accordion">
                    <i class="fa fa-arrow-circle-down"></i> Get The Photos You Want
                  </div>
                </h5>
              </div>

              <div id="collapse3" class="collapse">
                <div class="card-block">
                 Users can select from photos uploaded by students.
               </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- CONTACT -->
  <section id="contact" class="bg-faded py-5">
    <div class="container">
      <div class="row">
        <div class="col-lg-9">
          <h3>Get In Touch</h3>
          <p class="lead">We welcome any feedback coming from you.</p>
          <form>
            <div class="form-group">
              <div class="input-group input-group-lg">
                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                <input type="text" id="sendername" class="form-control" placeholder="Name">
              </div>
            </div>
            <div class="form-group">
              <div class="input-group input-group-lg">
                <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                <input type="email" id="senderemail" class="form-control" placeholder="Email">
              </div>
            </div>
            <div class="form-group">
              <div class="input-group input-group-lg">
                <span class="input-group-addon"><i class="fa fa-pencil"></i></span>
                <textarea id="sendermsg" class="form-control" placeholder="Message" rows="5"></textarea>
              </div>
            </div>
            <input id="btnmail" type="button" onclick="sendemail()" value="Submit" class="btn btn-primary btn-block btn-lg">
			<span id="mailmsg" ></span>
          </form>
        </div>
		
        <div class="col-lg-3 align-self-center">
          <img src="../img/ncst.png" class="img-fluid hidden-md-down" alt="">
        </div>
      </div>
    </div>
  </section>
  
    <footer id="main-footer" class="py-5 bg-primary text-white">
    <div class="container">
      <div class="row text-center">
        <div class="col-md-6 offset-md-6">
          <p class="lead">Copyright &copy; 2018 Joan</p>
        </div>
      </div>
    </div>
  </footer>

  <script src="../js/jquery.min.js"></script>

  <script src="../js/bootstrap.min.js"></script>
   <script src="../js/popper.min.js"></script>
  <script src="../js/navbar-fixed.js"></script>


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
