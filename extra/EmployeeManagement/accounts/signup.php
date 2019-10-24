<?php

include_once '../class.user.php';  $user = new User(); // Checking for user logged in or not
$mail= $_POST['emailidsignup'];
$pass=$_POST['passwordsignup'];
$register = $user->reg_user($mail, $pass);
                        
    if ($register) {
        // Registration Success
        
        header("Location: ../accounts/login.php");
       // echo 'Registration successfull, <a href="login.php">click here</a> to login';
    } else {
        // Registration Failed
        echo 'Registration failed. Email or Username already exits please try again. <a href="login.php">Click here</a> to go to login page';
    }
?>


