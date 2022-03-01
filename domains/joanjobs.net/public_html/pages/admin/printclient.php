<html>

<head>
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
		<h1>Client Account information</h1>
<button type="submit" id="print" onclick="printPage()">Print</button>
	
        <div align="right">

	
        </div>			
		<br/>

  <table class="table table-striped table-bordered">
  <tr>
 <td><b>Name of Applicant</td><td><b>Verification</td><td><b>Address</td><td><b>Contact</td> 
  </tr>

<?php
					include ('connect.php');
					 $result = $db->prepare("SELECT * FROM employers ");
	
			 $result->execute();
			 $foundrows = $result->rowCount();  
				
					 for($foundrows>0; $row = $result->fetch(); $foundrows++ ){
       ;
					
				?>
						  <tbody>
					<tr>
								<td ><?php echo $row['fname']." ".$row['mname']." ".$row['fname']; ?></td>
								<td style="text-align:center;">verified</td>		
								<td><?php echo $row['address']; ?></td>
								<td><?php echo $row['contact']; ?></td>
						
							</tr>
							
							<?php 
							}					
							?>
					</tbody>
					  </table> 

				

<br />
<br />

<b style="color:blue; font-size:15px;">
Prepared By: admin.
</b>


			</div>
	
	
	
	

	</div>
</body>


</html>