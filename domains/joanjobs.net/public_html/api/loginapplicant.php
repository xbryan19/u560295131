<?php
include('connect.php');

    // array for json response
   $response = array();
   $response["applicant"] = array();
  $email = $_POST['email'];
  $password = $_POST['password']; 
  //	 $email = 'rose@yahoo.com';
 //	 $password = '12345'; 


						
$query="SELECT * FROM `jobseekers` where email=:email and password=:password";
$stmt = $db->prepare($query);
$stmt->execute(array(":email"=>$email,":password"=>$password));

$row = $stmt->fetch(PDO::FETCH_ASSOC);
$count = $stmt->rowCount();
if($count>0){

  //  $result = mysqli_query($conn,"SELECT * FROM `users` where email = '$email' and password='$password'");

     

  //  while($row = mysqli_fetch_array($result))

        // temporary array to create single category
        $tmp = array();  
    	$tmp["accountid"] = $row["accountid"];
        $tmp["lname"] = ucfirst($row["lname"]);
		$tmp["payrate"] = ucfirst($row["payrate"]);
	    $tmp["fname"] = ucfirst($row["fname"]);
		$tmp["mname"] = ucfirst($row["mname"]);	$tmp["address"] = $row["address"];
		$tmp["birthday"] = $row["birthday"];$tmp["verified"] = $row["verified"];
        $tmp["email"] = $row["email"];
		   $tmp["status"] = $row["status"];$tmp["idphoto"] = $row["idphoto"];$tmp["profilephoto"] = $row["avatar"];
        $tmp["gender"] = $row["gender"]; 
        $tmp["password"] = $row["password"]; 
        // push category to final json array
        array_push($response["applicant"], $tmp);
		$response["error"] = false;
        $response["message"] = "Found account!";
}
else
{
	  $response["error"] = true;
      $response["message"] = "No account!";
}

    // keeping response header to json
   header('Content-Type: application/json');
     
    // echoing json result
    echo json_encode($response);
//exit();
?>