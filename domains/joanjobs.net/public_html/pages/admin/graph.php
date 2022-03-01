<?php include("header.php");?>
<?php include("navadmin.php");?>


<!DOCTYPE html>
<html lang="en">
    <head>

        <title>Graph</title>

    </head>
    <script src="js/jquery.js" type="text/javascript"></script>


    <script type="application/javascript" src="js/awesomechart.js"> </script>

<body>
     
       


<?php
$con=mysqli_connect("localhost","root","","joandb");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$sql="SELECT * FROM employers ORDER BY accountid";

if ($result=mysqli_query($con,$sql))
  {
  // Return the number of rows in result set
  $rowcount=mysqli_num_rows($result);

  // Free result set
  mysqli_free_result($result);
  }

  ?>
  <?php
  $sql="UPDATE graph set total='$rowcount' where category='client'";
  if ($result=mysqli_query($con,$sql))
{

}
mysqli_close($con);
?>
<?php
$con=mysqli_connect("localhost","root","","joandb");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$sql="SELECT * FROM jobseekers ORDER BY accountid";

if ($result=mysqli_query($con,$sql))
  {
  // Return the number of rows in result set
  $rowcount=mysqli_num_rows($result);

  // Free result set
  mysqli_free_result($result);
  }

  ?>
  <?php
  $sql="UPDATE graph set total='$rowcount' where category='applicant'";
  if ($result=mysqli_query($con,$sql))
{

}
mysqli_close($con);
?>

<?php
$con=mysqli_connect("localhost","root","","joandb");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$sql="SELECT * FROM jobs ORDER BY jobid";

if ($result=mysqli_query($con,$sql))
  {
  // Return the number of rows in result set
  $rowcount=mysqli_num_rows($result);

  // Free result set
  mysqli_free_result($result);
  }

  ?>
  <?php
  $sql="UPDATE graph set total='$rowcount' where category='jobs'";
  if ($result=mysqli_query($con,$sql))
{

}
mysqli_close($con);
?>


<?php
$con=mysqli_connect("localhost","root","","joandb");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$sql="SELECT * FROM users ORDER BY userid";

if ($result=mysqli_query($con,$sql))
  {
  // Return the number of rows in result set
  $rowcount=mysqli_num_rows($result);

  // Free result set
  mysqli_free_result($result);
  }

  ?>
  <?php
  $sql="UPDATE graph set total='$rowcount' where category='admin'";
  if ($result=mysqli_query($con,$sql))
{

}
mysqli_close($con);
?>






















   <?php
mysql_select_db('joandb',mysql_connect('localhost','root',''))or die(mysql_error());
?>
         

            <div class="container">

                <div class="row-fluid">
                   
                    <div class="span12">

                        <div class="hero-unit-table">   


                            <div class="charts_container">
                                <div class="chart_container">
                                     <div class="alert alert-info">Dashboard//Graphs</div>  
                                    <canvas id="chartCanvas1" width="1100" height="400">
                                   
                                    </canvas>

                                </div>
                            </div>






                            <script type="application/javascript">

                                var chart1 = new AwesomeChart('chartCanvas1');


                                chart1.data = [
                                <?php
                                $query = mysql_query("select * from graph") or die(mysql_error());
                                while ($row = mysql_fetch_array($query)) {
                                    ?>
                                    <?php echo $row['total'] . ','; ?>	
                                <?php }; ?>
                                ];

                                chart1.labels = [
                                <?php
                                $query = mysql_query("select * from graph") or die(mysql_error());
                                while ($row = mysql_fetch_array($query)) {
                                    ?>
                                    <?php echo "'" . $row['category'] . "'" . ','; ?>	
                                <?php }; ?>
                                ];
                                chart1.colors = ['#006CFF', '#FF6600', '#34A038', '#945D59', '#93BBF4', '#F493B8'];
                                chart1.randomColors = true;
                                chart1.animate = true;
                                chart1.animationFrames = 30;
                                chart1.draw();


                               
                            </script>


                        </div>

                    </div>
                </div>



            </div>
        </div>
    </div>



   
</body>
</html>


