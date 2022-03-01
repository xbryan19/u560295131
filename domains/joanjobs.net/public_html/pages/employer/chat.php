
<?php include("includes/nav.php");?>
<?php include("connect.php");?>
<?php
$myid =  $_SESSION['EMAIL'] ;
if(isset($_GET["email"]))
$fid = $_GET["email"];
?>

<div class="container">
		<div class="row justify-content-center">
      			  <div class="col-lg-4">
			  <h3 class="mt-5"><span class="w3-xlarge"><b>Applicants</b></span></h3>
			    <ul class="list-group">
		

		<?php 
			  
			    $useremails = array();
		       // if(!isset($_GET["email"])){
				$res_exp = $db->prepare("SELECT distinct `from` FROM `chat` where `to`=:email");
			    $res_exp->execute(array(':email'=>$myid));
			    while($row = $res_exp->fetch()){ 
				
				    $res = $db->prepare("SELECT * FROM `jobseekers` where email=:email");
			        $res->execute(array(':email'=>$row["from"]));
			      	while($row2 = $res->fetch()){
				
					echo "<li class='list-group-item'><a href='chat.php?email=".$row["from"]."'>".$row2["fname"]." ". $row2["mname"]." ". $row2["lname"]."</a></li>";
                    array_push($useremails, $row["from"]);	
					}
				}
				//part 2
				$res_exp = $db->prepare("SELECT distinct `to` FROM `chat` where `from`=:email");
			    $res_exp->execute(array(':email'=>$myid));
			    while($row = $res_exp->fetch()){ 
				
				    $res = $db->prepare("SELECT * FROM `jobseekers` where email=:email");
			        $res->execute(array(':email'=>$row["to"]));
			      	while($row2 = $res->fetch()){
				
				    if(!in_array($row["to"],$useremails))
					echo "<li class='list-group-item'><a href='chat.php?email=".$row["to"]."'>".$row2["fname"]." ". $row2["mname"]." ". $row2["lname"]."</a></li>"; 
					}
				}
				
				
				
				
				//}
				
				
				
				
				
				
             	?>
			  
			  
			  
			    </ul>
			  </div>
			
    	   <div class="col-lg-6">  <h3 class="mt-5"><b>Chatbox</b></h3>
		   <h5>Applicant: <?php 
		        if(isset($_GET["email"])){
				$res_exp = $db->prepare("SELECT * FROM `jobseekers` where email=:email");
			    $res_exp->execute(array(':email'=>$fid));
			    $row = $res_exp->fetch();        
			    echo $row["fname"]." ". $row["mname"]." ". $row["lname"]; }
                else
                echo "None - Select an applicant";					
             	?>
		   
		   
		   </h5>
		   <div class="chatbox">
      <div class="chat" id="chat">
        <div class="stream" id="cstream">

      </div>
      </div>
      <div class="msg">
	  <form method="post" id="msenger" action="">
            <textarea class="form-control mt-2" name="msg" id="msg-min"></textarea>
            <input type="hidden" name="mid" value="<?php echo $myid;?>">
            <input type="hidden" name="fid" value="<?php echo $fid;?>">
			<button type="button" class="btn btn-primary btn-md"><i class="fa fa-paperclip"></i></button>
			<button type="submit" class="btn btn-primary" onclick="<?php 
		        if(!isset($_GET["email"])){echo "return false;";}?>" class="<?php 
		        if(!isset($_GET["email"])){echo "disabled";}?> btn btn-success btn-sm" id="sb-mt">Send</i></button>
          </form>
          <!-- <form method="post" id="msenger" action="">
            <textarea class="form-control mt-2" name="msg" id="msg-min"></textarea>
            <input type="hidden" name="mid" value="<?php echo $myid;?>">
            <input type="hidden" name="fid" value="<?php echo $fid;?>">
			<button type="button" class="btn btn-primary"><i class="fa fa-paperclip"></i></button>
			<button type="submit" class="btn btn-primary" onclick="<?php 
		        if(!isset($_GET["email"])){echo "return false;";}?>" required class="<?php 
		        if(!isset($_GET["email"])){echo "disabled";}?> btn btn-success btn-sm align-top mt-2" type="submit" value="Send" id="sb-mt">Send</i></button>
		 <i type="button" class="fa fa-paperclip btn btn-success align-top mt-2 btn-sm" aria-hidden="true"></i>
           <input onclick="<?php 
		        if(!isset($_GET["email"])){echo "return false;";}?>" required class="<?php 
		        if(!isset($_GET["email"])){echo "disabled";}?> btn btn-success btn-sm align-top mt-2" type="submit" value="Send" id="sb-mt"> 
          </form> -->
      </div>
      <div id="dataHelper" last-id=""></div>
  </div>
    </div>
    </div></div>
  <?php include("footer.php");?>
<script type="text/javascript">
$(document).keyup(function(e){
	if(e.keyCode == 13){
		if($('#msenger textarea').val().trim() == ""){
			$('#msenger textarea').val('');
		}else{
			$('#msenger textarea').attr('readonly', 'readonly');
			$('#sb-mt').attr('disabled', 'disabled');	// Disable submit button
			sendMsg();
		}		
	}
});	

$(document).ready(function() {
    $('#msg-min').focus();
	$('#msenger').submit(function(e){
		$('#msenger textarea').attr('readonly', 'readonly');
		$('#sb-mt').attr('disabled', 'disabled');	// Disable submit button
		sendMsg();
		e.preventDefault();	
	});
getChatMsgs();
});

function sendMsg(){
	$.ajax({
		type: 'post',
		url: 'chatM.php?rq=new',
		data: $('#msenger').serialize(),
		dataType: 'json',
		success: function(rsp){
				$('#msenger textarea').removeAttr('readonly');
				$('#sb-mt').removeAttr('disabled');	// Enable submit button
				if(parseInt(rsp.status) == 0){
					alert(rsp.msg);
				}else if(parseInt(rsp.status) == 1){
					$('#msenger textarea').val('');
					$('#msenger textarea').focus();
					//$design = '<div>'+rsp.msg+'<span class="time-'+rsp.lid+'"></span></div>';
					  var floatmsg;
					   if(rsp.from=="<?php echo $myid;?>")
					   floatmsg="ml-auto mine";
                       else
	                   floatmsg="mr-auto notmine text-white";
					$design = '<div class="float-fix">'+
								'<div class="f-rply '+ floatmsg +'">'+
										'<div class="msg-bg">'+
											'<div class="msgA">'+
												rsp.msg+
												'<div class="">'+
													'<div class="msg-time time-'+rsp.lid+'"></div>'+
													'<div class="myrply-i"></div>'+
												'</div>'+
											'</div>'+
										'</div>'+
									'</div>'+
								'</div>';
					$('#cstream').append($design);

					$('.time-'+rsp.lid).html(rsp.time);
					$('#dataHelper').attr('last-id', rsp.lid);
					$('#chat').scrollTop($('#cstream').height());
				}
			}
		});
}
function checkStatus(){
	$fid = '<?php echo $fid; ?>';
	$mid = '<?php echo $myid; ?>';
	$.ajax({
		type: 'post',
		url: 'chatM.php?rq=msg',
		data: {fid: $fid, mid: $mid, lid: $('#dataHelper').attr('last-id')},
		dataType: 'json',
		cache: false,
		success: function(rsp){
				if(parseInt(rsp.status) == 0){
					return false;
				}else if(parseInt(rsp.status) == 1){
					getMsg();
					
				}
			}
		});	
}

function getChatMsgs(){
	$fid = '<?php echo $fid; ?>';
	$mid = '<?php echo $myid; ?>';
	$.ajax({
		type: 'post',
		url: 'chatM.php?rq=exist',
		data: {fid: $fid, mid: $mid},
		dataType: 'json',
		cache: false,
		success: function(rsp){
			console.log(rsp);
				if(parseInt(rsp.status) == 0){
					return false;
				}else if(parseInt(rsp.status) == 1){
				   for(i=0;i<rsp.chat.length;i++)	
				   {
					   var floatmsg;
					   if(rsp.chat[i].from=="<?php echo $myid;?>")
					   floatmsg="ml-auto mine ";
                       else
	                   floatmsg="mr-auto notmine text-white";
				
					   $design = '<div class="float-fix mt-2">'+
									'<div class="f-rply '+ floatmsg +'">'+
										'<div class="msg-bg">'+
											'<div class="msgA">'+
												rsp.chat[i].msg+
												'<div class="">'+
													'<div class="msg-time time-'+rsp.chat[i].id+'"></div>'+
													'<div class="myrply-f"></div>'+
												'</div>'+
											'</div>'+
										'</div>'+
									'</div>'+
								'</div>';
					$('#cstream').append($design);
					$('#chat').scrollTop ($('#cstream').height());
					//$('.time-'+rsp.chat[i].id).livestamp();
					//$('.time-'+rsp.chat[i].id).html(moment(rsp.chat[i].time, "YYYYMMDD").fromNow());
					$('.time-'+rsp.chat[i].id).html(rsp.chat[i].time);
				    $('#dataHelper').attr('last-id', rsp.chat[i].id);
					}
				
				}
			}
		});	
}

// Check for latest message
setInterval(function(){checkStatus();}, 200);

function getMsg(){
	$fid = '<?php echo $fid; ?>';
	$mid = '<?php echo $myid; ?>';
	$.ajax({
		type: 'post',
		url: 'chatM.php?rq=NewMsg',
		data:  {fid: $fid, mid: $mid},
		dataType: 'json',
		success: function(rsp){
				if(parseInt(rsp.status) == 0){
					//alert(rsp.msg);
				}else if(parseInt(rsp.status) == 1){
					  var floatmsg;
					   if(rsp.from=="<?php echo $myid;?>")
					   floatmsg="ml-auto mine";
                       else
	                   floatmsg="mr-auto notmine text-white";
				  $design = '<div class="float-fix mt-2">'+
									'<div class="f-rply '+ floatmsg +'">'+
										'<div class="msg-bg">'+
											'<div class="msgA">'+
												rsp.msg+
												'<div class="">'+
													'<div class="msg-time time-'+rsp.lid+'"></div>'+
													'<div class="myrply-f"></div>'+
												'</div>'+
											'</div>'+
										'</div>'+
									'</div>'+
								'</div>';
					$('#cstream').append($design);
					$('#chat').scrollTop ($('#cstream').height());
					$('.time-'+rsp.lid).html(rsp.time);
					//$('.time-'+rsp.lid).livestamp();
					$('#dataHelper').attr('last-id', rsp.lid);	
				}
			}
	});
}
</script>
<script src="moment.js"></script>
<script src="livestamp.js"></script>
<link rel="stylesheet" type="text/css" href="chat.css">
</body>
</html>