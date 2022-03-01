<?php

 $userid = $_POST['userid'];
 $imgname = $_POST['imgname'];
$imsrc = str_replace(' ','+',$_POST['image']);
$imsrc = base64_decode($imsrc);

//$base_to_php = explode(',',$img);

//$data = base64_decode($base_to_php[1]);

$filepath = "../pages/applicant/uploads/id/".$imgname; 


$fp = fopen($filepath, 'w');
fwrite($fp, $imsrc);

//file_put_contents($filepath,$data);
$filepath="http://localhost/joan/pages/applicant/uploads/id/".$imgname;

$response = array();

 
  include('connect.php');

        $sql="UPDATE jobseekers set idphoto=:a where accountid=:b";
         $q = $db->prepare($sql);
	     $q->execute(array(':b'=>$userid,':a'=>$imgname));

         if($q->rowCount()==1) {
			$response["error"] = false;
            $response["message"] = "Photo uploaded!";
			} 
         else {
            // no account found
             $response["error"] = true;
             $response["message"] = "Something went wrong!";

        }
            echo json_encode($response);
		 

 ?>
