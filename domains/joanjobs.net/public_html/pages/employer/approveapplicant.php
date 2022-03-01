<?php
 
include("connect.php");

$jid = $_GET['jid'];
$aid = $_GET['aid'];
$fname = $_GET['fname'];
$lname = $_GET['lname'];
$jobtitle = $_GET['jobtitle'];
$description = $_GET['description'];
$empfname = $_GET['empfname'];
$empmname = $_GET['empmname'];
$emplname = $_GET['emplname'];
$seid=$_GET['seid'];
$date =$_GET['datee'];  

echo 0;
echo $jid;
echo $aid;
echo $fname;
echo $lname;
echo $jobtitle;
echo $description;
echo $empfname;
echo $empmname;
echo $emplname;
echo $seid;
echo $date;


 $sql="INSERT INTO `jobcontracts` (jobid,accountid,fname,lname,description,jobtitle,efname,emname,elname,seid,datee) VALUES(:a,:b,:c,:d,:e,:f,:g,:h,:i,:j,:k)";
 $q = $db->prepare($sql);
 $q->execute(array(':a'=>$jid,':b'=>$aid,':c'=>$fname,':d'=>$lname,':e'=>$description,':f'=>$jobtitle,':g'=>$empfname,':h'=>$empmname,':i'=>$emplname,':j'=>$seid,':k'=>$date));

 $sql="DELETE FROM jobapplications where jobid=:a";
 $q = $db->prepare($sql);
 $q->execute(array(':a'=>$jid));


	header("location: home.php");
    ?>