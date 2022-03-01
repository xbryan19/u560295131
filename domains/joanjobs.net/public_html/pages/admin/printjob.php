<title>Print</title>
		
		<style>
		
		
.container {
	width:75%;
	margin:auto;
}
		
.table {
    width: 100%;
    margin-bottom: 20px;
}	

.table-striped tbody > tr:nth-child(odd) > td,
.table-striped tbody > tr:nth-child(odd) > th {
    background-color: #f9f9f9;
}

@media print{
#print {
display:none;
}
}

#print {
	width: 90px;
    height: 30px;
    font-size: 18px;
    background: white;
    border-radius: 4px;
	margin-left:28px;
	cursor:hand;
}
		
		</style>
<script>
function printPage() {
    window.print();
}
</script>
		
</head>


<body>
	<div class = "container">
		<div id = "header">
		<br/>
		<h1>Job information</h1>
<button type="submit" id="print" onclick="printPage()">Print</button>
	
        <div align="right">

	
        </div>			









<div class="container">
		<div class="row justify-content-center">
     
    	   <div class="col-lg-6">
				 <?php
	 
		  
            $id=$_GET['jobid'];
            include('../connect.php');
            $result = $db->prepare("SELECT * FROM jobs WHERE jobid= :jobid");
            $result->bindParam(':jobid', $id);
            $result->execute();
         	$foundrows = $result->rowCount();
			if($foundrows > 0)
			{ 
            $row = $result->fetch();
            ?>
			
			 <h3 class="mt-5"><?php echo $row['jobtitle']; ?></h3>
			 
            <br>
		    <h4>Description</h4>
			 <p><span><?php echo $row['description'];?></span></p>
			 <!--input id="btnmsg" value="Send Message" class="btn-success btn"-->
          
    
            <?php
            }
			 ?>

		
			<h4 class="mt-5">Date Posted</h4>
			<p><span><?php echo $row['dateposted'];?></span></p>
			<?php 
				$res_exp = $db->prepare("SELECT * FROM `employers` where accountid=:accountid");
			    $res_exp->execute(array(':accountid'=>$row["accountid"]));
			    $row2 = $res_exp->fetch();        
			                
             	?>
			<h4 class="mt-5">Client</h4>
			<p><span><a href="employerprofile.php?accountid=<?php echo $row["accountid"]; ?>">
            <?php echo $row2["fname"]." ". $row2["mname"]." ". $row2["lname"];?></a></span></p>
			</span></p>
<h4 class="mt-5">Awarded To</h4>
			<p><span>		






				<?php 
		
			    $result = $db->prepare("SELECT * FROM jobcontracts where jobid=:jobid");
			    $result->bindParam(':jobid',$id);
			 $result->execute();
			 $foundrows = $result->rowCount();  
				
					 for($foundrows>0; $row = $result->fetch(); ){
       
					
				?>
				<a href="profile.php?accountid=<?php echo $row["accountid"] ;?>"> 
				<?php 
				
			    echo $row["fname"]."  ". $row["lname"];}

			

			?></a></span></p>
			
			

			
			</div>
	
</div>
</div><!-- container -->
