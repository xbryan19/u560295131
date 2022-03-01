<?php

include("connect.php");

$email=$_POST['email'];
$lname=$_POST['lname'];
$fname=$_POST['fname'];
$mname=$_POST['mname'];
$address=$_POST['address'];
$gender=$_POST['gender'];
$bday=$_POST['bday'];
$phone=$_POST['phone'];
$pword=$_POST['pword'];
$edu=$_POST['edu'];
$civil=$_POST['civil'];

 $sql="INSERT INTO `jobseekers` (email,lname,fname,mname,gender,address,birthday,contact,password,education,status,verified) VALUES(:a,:b,:c,:d,:e,:f,:g,:h,:i,:j,:k,'1')";
 $q = $db->prepare($sql);
$q->execute(array(':a'=>$email,':b'=>$lname,':c'=>$fname,':d'=>$mname,':e'=>$gender,':f'=>$address,':g'=>$bday,':h'=>$phone,':i'=>$pword,':j'=>$edu,':k'=>$civil));
 	

if($q->rowCount()==1)
	

	echo "<script type = \"text/javascript\">
									alert(\"Register Successful.................\");
									window.location = (\"index.php\")
									</script>";
	

  
    
else{
	echo "0";
}

	


	
