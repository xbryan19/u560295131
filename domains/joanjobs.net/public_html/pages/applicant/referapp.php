<?php
include("connect.php");
session_start();
//Fetching Values from URL
$jobtitle =$_GET['jobtitle'];
$fname =$_GET['fname'];
$lname =$_GET['lname'];
$efname =$_GET['efname'];
$elname =$_GET['elname'];
$aid =$_GET['aid'];
$id =$_GET['id'];
$emp =$_GET['emp'];
$f =$_GET['f'];
$l =$_GET['l'];
$a =$_GET['a'];
//Insert query

  $result = $db->prepare("insert into refer (jobtitle,fname,lname,efname,elname,accountid,emp,rfname,rlname,jobid,rid) values (:a,:b,:c,:d,:f,:g,:h,:i,:j,:k,:l)");
  $result->execute(array(':a'=>$jobtitle,':b'=>$fname,':c'=>$lname,':d'=>$efname,':f'=>$elname,':g'=>$aid,':h'=>$emp,':i'=>$f,':j'=>$l,':k'=>$id,':l'=>$a));

	   $sql="UPDATE jobseekers set refer=:a where fname=:i";
 $q = $db->prepare($sql);
$q->execute(array(':a'=>'1',':i'=>$fname)); 


header("location: jobdetails.php?jobid=".$id);
?>