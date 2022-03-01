    <?php
                
                    $email= $_POST['email'];
                    
        
                    if ($email)
                    {
                        $con=mysqli_connect("localhost","root","","joandb");
                        $query=mysqli_query($con,"SELECT * FROM secret WHERE email='$email'");
                        $numrows=mysqli_num_rows($query);
            
                            if($numrows !=0)
                            {
                                while ($row=mysqli_fetch_assoc($query))
                                {
                                    $dbusername=$row['email'];
                                   
                                }
                                    if($email==$dbusername)
                                    {
                                     
                                    
        $_SESSION['email']=$email;
        echo "<script>windows: location='changed.php?email=$email'</script>";
    
                                       
                                    }
                                    else
                                        echo "Incorrect password!";
                            }
                            else
                                echo "That username doesnt exist!";
                        mysqli_close($con);
                    }
                    else
                        echo "Please enter a username and password!";
                
            ?>