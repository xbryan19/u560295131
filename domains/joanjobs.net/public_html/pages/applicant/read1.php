
<?php
include("../connect.php");

//Fetching Values from URL

$conid=$_GET['accountid'];
//Insert query
 $sql="UPDATE refer set mark=:a where accountid=:i";
 $q = $db->prepare($sql);
$q->execute(array(':a'=>'1',':i'=>$conid));



header("location: notification.php");
?>