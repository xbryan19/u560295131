
<?php
include("../connect.php");

//Fetching Values from URL

$conid=$_GET['contractid'];
//Insert query
 $sql="UPDATE jobcontracts set mark=:a where contractid=:i";
 $q = $db->prepare($sql);
$q->execute(array(':a'=>'Read',':i'=>$conid));



header("location: notification.php");
?>