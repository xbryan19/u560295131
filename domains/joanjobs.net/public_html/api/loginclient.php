<?php
include('connect.php');
    // array for json response
   $response = array();
   $response["client"] = array();
  $email = $_POST['email'];
  $password = $_POST['password']; 
  //	$email = 'b@yahoo.com';
 	// $password = '12345'; 


						
$query="SELECT * FROM `employers` where email=:email and password=:password";
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
	    $tmp["fname"] = ucfirst($row["fname"]);
		$tmp["mname"] = ucfirst($row["mname"]);$tmp["address"] = $row["address"];
		$tmp["birthday"] = $row["birthday"];
			   $tmp["status"] = $row["status"];
        $tmp["email"] = $row["email"];$tmp["idphoto"] = $row["idphoto"];$tmp["profilephoto"] = $row["avatar"];
        $tmp["gender"] = $row["gender"]; $tmp["verified"] = $row["verified"];
        $tmp["password"] = $row["password"]; 
        // push category to final json array
        array_push($response["client"], $tmp);
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