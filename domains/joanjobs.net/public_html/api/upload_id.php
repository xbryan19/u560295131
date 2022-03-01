<?php
 if($_SERVER['REQUEST_METHOD']=='POST'){

 $userid = $_POST['userid'];
 $imgname = $_POST['imgname'];
$imsrc = str_replace(' ','+',$_POST['image']);
$imsrc = base64_decode($imsrc);

//$base_to_php = explode(',',$img);

//$data = base64_decode($base_to_php[1]);

$filepath = "../img/prescription/".$imgname; 


$fp = fopen($filepath, 'w');
fwrite($fp, $imsrc);

//file_put_contents($filepath,$data);
$filepath="http://localhost/joan/pages/applicant/uploads/id/".$imgname;
 
  include('dbconnect.php');


   $sql = "INSERT INTO `order_prescription` (`user_id`,`picture`) VALUES ($userid,'$filepath')";



 if(mysqli_query($conn,$sql)){
       // 
    echo 'Post has been sent.';
  }
  else{
    echo 'System has failed to send your post. Please try again.';
  }
  mysqli_close($conn);


 
 }else{
 echo "there was an error in sending your post please try again.";
 }


 ?>
