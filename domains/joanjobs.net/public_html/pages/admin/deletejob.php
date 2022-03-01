<?php

include("../connect.php");

$sid=$_GET['id'];

$sql="DELETE from `jobs` where jobid=:id";
$q = $db->prepare($sql);
$q->execute(array(':id'=>$sid));

header("location: joblist.php");
  
    ?>