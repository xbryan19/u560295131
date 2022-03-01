<?php

include("connect.php");


$aid = $_GET['aid'];
$jid = $_GET['jid'];



 $sql="DELETE FROM jobapplications where jobid=:a";
 $q = $db->prepare($sql);
$q->execute(array(':a'=>$jid));

$sql="UPDATE jobs SET status=1 where jobid=:a";
 $q = $db->prepare($sql);
$q->execute(array(':a'=>$jid));


	header("location: home.php"); 

  
    ?>