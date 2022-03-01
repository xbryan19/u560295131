
    <?php
    
    ini_set( 'display_errors', 1 );
    error_reporting( E_ALL );
    $from = "admin@joanjobs.net";
    $to = "test@joanjobs.net";
    $subject = "2-factor Authentication";
    $randomid = mt_rand(100000,999999); 
    $message = "$randomid \n\n Use this code to continue accessing JoanJobs.net";
    $headers = "From:" . $from;
    
    if(mail($to,$subject,$message, $headers)) {
echo "The email message was sent.";
echo $randomid;
} else {
echo "The email message was not sent.";
}

    echo'
    <!-- CSS dependencies -->
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
    <!-- JS dependencies -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Bootstrap 4 dependency -->
    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>

    <a class="show-input-text"</a>
    
    <!-- bootbox code -->
    <script src="../js/bootbox.min.js"></script>
    <script src="../js/bootbox.locales.min.js"></script>
    <script>
            var dialog = bootbox.prompt("Enter the code sent to your email $randomid, function(result) {
                if (result === $randomid) {
                    // Prompt dismissed
                    dialog.modal("hide");
                } else {
                    // result has a value
                    
                } 
                
                }); 
    </script>
 ';
    
    ?>
