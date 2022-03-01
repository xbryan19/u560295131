
<?php
include("../connect.php");

//Fetching Values from URL

$conid=$_GET['contractid'];
//Insert query
 $sql="UPDATE refer set status=:a where accountid=:i";
 $q = $db->prepare($sql);
$q->execute(array(':a'=>'1',':i'=>$conid));



header("location: refer.php");
?>