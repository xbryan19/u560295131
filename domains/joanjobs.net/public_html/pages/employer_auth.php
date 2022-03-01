<?php include("header.php");?>
    <?php include("navigation.php");?>
    <!-- CSS dependencies -->
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
    <!-- JS dependencies -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Bootstrap 4 dependency -->
    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <!-- bootbox code -->
    <script src="../js/bootbox.min.js"></script>
    <script src="../js/bootbox.locales.min.js"></script>
    


<?php

session_start();


 	    $_SESSION['email'] = $_POST['email'];
        $_SESSION['lname'] = $_POST['lname'];
        $_SESSION['fname'] = $_POST['fname'];
        $_SESSION['mname'] = $_POST['mname'];
        $_SESSION['address'] = $_POST['address'];
        $_SESSION['gender'] = $_POST['gender'];
        $_SESSION['bday'] = $_POST['bday'];
        $_SESSION['phone'] = $_POST['phone'];
        $_SESSION['pword'] = $_POST['pword'];
        $_SESSION['edu'] = $_POST['edu'];
        $_SESSION['civil'] = $_POST['civil'];
        $_SESSION['question'] = $_POST['question'];
        $_SESSION['answer'] = $_POST['answer'];
    
        
    
    ini_set( 'display_errors', 1 );
    error_reporting( E_ALL );
    $from = "admin@joanjobs.net";
    $to = $_SESSION['email'];
    $subject = "2-factor Authentication";
    $randomid = mt_rand(100000,999999); 
    $message = "$randomid \n\n Use this code to continue accessing JoanJobs.net";
    $headers = "From:" . $from;
    $hash = password_hash("$randomid", PASSWORD_DEFAULT);
    $_SESSION['hash'] = $hash;
    echo <<<END
    
    <div class="container">
		<div class="row justify-content-center">
     
    	   <div class="col-lg-6">
		      <h3 class="page-header mt-5">New Employer</h3>
			  <p>Email Verification</p>
							<form   method="post" action="saveemployer.php" name="register-form" id="register-form" >
                              <div class="form-group">
                                  <label for="code" class="control-label">Please input the code sent to $to</label>
                                  <input type="text" class="form-control" id="code" name="code" value="" required="" title="Code">
                              </div>
							  
                              
							  <input type="submit" onclick="" value="Register" class="btn btn-success btn-block mb-5" name="btnregister" id="btnregister">
                          </form>		

			</div>
	
    </div>
    </div><!-- container -->
    
END;
    echo "Email Status: ";
        if(mail($to,$subject,$message, $headers)) {
    echo "Sent";
    } else {
    echo "Not sent";
    }

?>

