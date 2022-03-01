 <?php
include("../connect.php");

//Fetching Values from URL



$ques=$_POST['question'];
$ans=$_POST['answer'];
$id=$_POST['id'];
$email=$_POST['email'];
//Insert query


          $res_agent = $db->prepare("SELECT * FROM `secretclient` where accountid=:accountid");
          $res_agent->execute(array(':accountid'=>$id));
          $row_agent = $res_agent->fetch();  
        if($res_agent->rowCount()==0){
        

  $result = $db->prepare("insert into secretclient (question,answer,accountid,email) values (:a,:b,:c,:d)");
  $result->execute(array(':a'=>$ques,':b'=>$ans,':c'=>$id,':d'=>$email));}
else{

   $sql="UPDATE secretclient set question=:a,answer=:b,email=:c where accountid=:i";
 $q = $db->prepare($sql);
$q->execute(array(':a'=>$ques,':b'=>$ans,':c'=>$email,':i'=>$id));}
	   
header("location: secretquestion.php");
?>