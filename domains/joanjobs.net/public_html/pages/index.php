<?php include("header.php");?>
<?php include("navigation.php");?>
  <link href="./modal/css/bootstrap.css" rel="stylesheet">
  <link href="./modal/signin.css" rel="stylesheet">
  
  <section id="showcase" class="py-5">
    <div class="primary-overlay">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-sm-12">
		    <h2 class="display-3 mt-5 pt-5">
              Find the right job <br>&amp; the right people...
            </h2>
		    <p class="lead mt-5">The use of this site is subject to proper guidelines. <br><br>
              Please be responsible in whatever you are posting or applying for. Misuse of our services may subject your account to deactivation and blocking. Be guided accordingly.
            </p>
          
          </div>
          <div class="col-lg-4 col-sm-12 col-md-12 text">
     			
    				
    						<h3 class="mt-5 pt-5">Please Login</h3>
    					
    					<ul class="nav nav-tabs">
    						<li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#menu1">Employer</a></li>
    						<li class="nav-item"><a class="nav-link" data-toggle="tab" href="#menu2">Job Applicant</a></li>
    					</ul>
    					<div class="tab-content" style="background-color: #474d52 !important">
    						<!-- employer -->
    						<div id="menu1" class="tab-pane active container">
    							<br />
    							<form style="padding:4px" method="post" name="employer_form">
    								<div class="form-group">
    									<input type="email" class="form-control" name="email" placeholder="Email">
    								</div>
    								<div class="form-group">
    									<input type="password" class="form-control" name="pass" placeholder="Password">
    								</div>
    								<div class="form-group">
    									<button onclick="' style="width: 130px;" class="btn btn-success btn-success" id = "btn login" name = "btn">Log in</button>
                                    

                                        <a href="clientforgot.php" class="btn btn-danger btn-success" >Forgot Password</a>
    								</div>
    								<div class="form-group" id="alert-msg">
    								</div>

    							</form>
    						</div>
							<!-- applicant -->
    						<div id="menu2" class="tab-pane container fade">
    							<br />
    							<form style="padding:4px" method="post" name="applicant_form">
    								<div class="form-group">
    									<input type="email" class="form-control" name="aemail" placeholder="Email">
    								</div>
    								<div class="form-group">
    									<input type="password" class="form-control" name="apass" placeholder="Password">
    								</div>
    								<div class="form-group">
    									<button style="width: 130px;" class="btn btn-success btn-success" id = "btn" name = "btn">Log in</button>
    								
                                        <a href="forgot.php" class="btn btn-danger btn-success" >Forgot Password</a>
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
<?php include("footer.php"); ?>


    	<script type="text/javascript">
    		jQuery(function(){
    			$('form[name="employer_form"]').on('submit', function(donard){
    				donard.preventDefault();

    				var a = $(this).find('input[name="email"]').val();
    				var b = $(this).find('input[name="pass"]').val();

    				if (a === '' && b ===''){
    					$('#alert-msg').html('<div class="alert alert-danger">All fields are required!</div>');
    				}else{    					$.ajax({
                            
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
    						}
								else if(donard == 200){
								setTimeout(' window.location.href = "block.php"; ',2000);
							}
							else{
    							$("#btn-login").html('<img src="../img/loading.gif" /> &nbsp; Signing In ...');
    							setTimeout(' window.location.href = "employer/home.php"; ',2000);
    						}
    					});
    				}
    			});
                

    			$('form[name="applicant_form"]').on('submit', function(donard){
    				donard.preventDefault();

    				var a = $(this).find('input[name="aemail"]').val();
    				var b = $(this).find('input[name="apass"]').val();

    				if (a === '' && b ===''){
    					$('#alert-msg1').html('<div class="alert alert-danger">All fields are required!</div>');
    				}else{
    					$.ajax({
    						type: 'POST',
    						url: 'loginapplicant.php',
    						data: {
    							email: a,
    							password: b
    						},
    						beforeSend:  function(){
    							$('#alert-msg1').html('');
    						}
    					})
    					.done(function(donard){
    						if (donard == 0){
    							$('#alert-msg1').html('<div class="alert alert-danger">Incorrect email or password!</div>');
    						}
							else if(donard == 200){
								setTimeout(' window.location.href = "block.php"; ',2000);
							}
							else{
    							$("#btn").html('<img src="../img/loading.gif" /> &nbsp; Signing In ...');
    							setTimeout(' window.location.href = "applicant/home.php"; ',2000);
    						}
    					});
    				}
    			});			

				////
    		});
			
	
    	</script>

    </body>
    </html>
