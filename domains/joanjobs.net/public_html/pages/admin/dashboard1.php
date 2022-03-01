
<?php include("header.php");?>
<?php include("navadmin.php");?>

<div class="container">
      <div class="row">
        <div class="col-lg-12">
          <h3 class="page-header mt-5">Dashboard</h3>
          <p>Logged User: <em><?php echo $session_admin_name;?></em></p>
            <a href="editadmin.php?userid=<?php echo $session_id ;?>" class="btn btn-sm btn-outline-success d-inline" ><i class="fa fa-plus"></i> Edit Details </a>
                  <p>Current Date Time :
        <?php
        date_default_timezone_set("Asia/Manila");
        echo Date("M d, Y h:i:s a");
        ?>
        </p>
    
        </div>
 