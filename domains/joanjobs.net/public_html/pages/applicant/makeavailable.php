

<?php
include("../connect.php");
session_start();
//Fetching Values from URL

$accountid=$_GET['accountid'];




  $result = $db->prepare("insert into availability (avail,accountid) values (:a,:b)");
  $result->execute(array(':a'=>'Available',':b'=>$accountid));




 $sql="UPDATE jobseekers set avail=:a where accountid=:i";
 $q = $db->prepare($sql);
$q->execute(array(':a'=>'Available',':i'=>$accountid));



	   
header("location: myprofile.php?accountid=".$accountid);
?>