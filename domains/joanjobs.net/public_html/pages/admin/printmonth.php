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
		<h1>Report Montly</h1>
<button type="submit" id="print" onclick="printPage()">Print</button>
	
        <div align="right">

	
        </div>			
		<br/>

  <table class="table table-striped table-bordered">
  <tr>
 <td><b>Client</td><td><b>Jobtitle</td><td><b>Description</td><td><b>Job Awarded to</td>  <td><b>Date</td>
  </tr>

<?php
					include ('connect.php');

					$date=$_POST['date'];
					 $result = $db->prepare("SELECT * FROM jobcontracts where datee=:datee");
					         $result->bindParam(':datee', $date);
	
			 $result->execute();
			 $foundrows = $result->rowCount();  
				
					 for($foundrows>0; $row = $result->fetch(); $foundrows++ ){
       ;
					
				?>
						  <tbody>
					<tr>
								<td ><?php echo $row['efname']." ".$row['elname']; ?></td>
								<td style="text-align:center;"><?php echo $row['jobtitle'];?></td>		
								<td><?php echo $row['description']; ?></td>
								<td><?php echo $row['fname']." ".$row['lname']; ?></td>
								<td><?php echo $row['date_time']; ?></td>
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