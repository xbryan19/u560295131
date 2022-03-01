<?php
session_start();
$id=$_SESSION['SESS_CLIENT_ID'];

include("../connect.php");


// Make sure the user actually selected a file
if (isset($_FILES['file']) && $_FILES['file']['size'] > 0) {   

      $file = rand(1000,100000)."-".$_FILES['file']['name'];
      //$file = $_FILES['file']['name'];
      $file_loc = $_FILES['file']['tmp_name'];
      $file_size = $_FILES['file']['size'];
      $file_type = $_FILES['file']['type'];
      $folder="./uploads/id/";
      $udate=date("Y-m-d H:i:s");

      $path=$folder.$file;
      $path2=$path;
	 
     $path=$file;
	 if(move_uploaded_file($file_loc,$path2)){
		  $_SESSION['TYPE']="success";
          $_SESSION['UPLOAD_RESULT']="Photo was uploaded successfully"; 
         $sql="UPDATE employers set idphoto=:a where accountid=:b";
         $q = $db->prepare($sql);
	     $q->execute(array(':b'=>$id,':a'=>$path));
		 }
	 else{
		$_SESSION['TYPE']="error";
        $_SESSION['UPLOAD_RESULT']="Something went wrong"; 
	   }	 

}
 else{
		$_SESSION['TYPE']="error";
        $_SESSION['UPLOAD_RESULT']="Please select a file"; 
	   }	 
	   
header("Location: uploadmsg.php");
	
    ?>