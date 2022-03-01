
<?php
include("../connect.php");
//Fetching Values from URL
$who=$_POST['clientid'];
$by=$_POST['myid'];
$cnt=$_POST['starcnt'];
$comment=$_POST['comment'];
//Insert query

  $result = $db->prepare("insert into employersrating (rating,comment,byapplicant,toclient) values (:a,:b,:c,:d)");
  $result->execute(array(':a'=>$cnt,':b'=>$comment,':c'=>$by,':d'=>$who));

	   
header("location: rateclient.php?accountid=".$who);
?>