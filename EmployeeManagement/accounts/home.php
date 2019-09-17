<?php
/**
 * Created by PhpStorm.
 * User: imran
 * Date: 23/4/18
 * Time: 12:26 PM
 */

session_start();
include_once 'class.user.php';
$user = new User(); 
$uid = $_SESSION['uid'];
if (!$user->get_session()){
    header("location:accounts/login.php");
}

if (isset($_GET['q'])){
    $user->user_logout();
    header("location:accounts/login.php");
}
?>
<!DOCTYPE html>
<html>
    <head>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">  
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
            <title>loginlogo</title>
                <style>
                    .container{
                        border:1px solid black;
                        width:280px;  
                        margin-top:70px;
                        font-size:15px;
                        height:769px;
                        background-color:black;
                        margin-left:-3px
                        
                    }
                   
                    img {
                        position: absolute;
                        z-index: -2;
                    }
                    <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
                    body{
                        font-family:Arial, Helvetica, sans-serif;
                    }
                    h1{
                        font-family:'Georgia', Times New Roman, Times, serif;
                    }
                </style>
    </head>
    <body> 
        <div id="container">
            <div id="header"><a href="home.php?q=logout">LOGOUT</a></div>
            <div id="main-body">
                <h1>Hello <?php $user->get_fullname($uid); ?></h1>
            </div>
            <div id="footer"></div>
        </div>
                
   
        
            <div>
                    <a href="http://localhost/intern/logo.php"><img src="http://razorbee.com/wp-content/uploads/2017/08/razorbee_logo.png" alt="RazorBee" class="img-logo-w2" style="width: 250px;  padding-top: 18px; padding-left:50px"></a>
            </div><br> 
        
            <div>
                <img src="https://www.spruson.com/app/uploads/2019/01/hand-digital-globe.jpg" style="width:1778px; height:769px">   
            <div>
                <form action="attendancevalidation.php" method="POST">
                    <div  class="container">
                        <h3><a href=""><span style="color:white">Attendance</span></a><h3>
                        <h3><a href="http://localhost/EmployeeManagement/accounts/taskmanagement.php"><span style="color:white">Task Management</span></a></h3>
                        <h3><a href=""><span style="color:white">Leave Management</span></a></h3>
                        <div class="container" style="background-color:white; margin-left:850px; height:269px; margin-top:-148px;">
                            <div class="design"><br>
                                <a href="loginattendance.php"><button type="button" class="btn btn-primary btn-lg" style="margin-left:85px;margin-top:40px">Login</button></a><br><br>
                                <a href="logoutattendance.php"><button type="button" class="btn btn-danger btn-lg" style="margin-left:80px">Logout</button></a><br>
                                <h3><a href="http://localhost/EmployeeManagement/accounts/viewattendance.php" style="margin-left:35px">ViewAttendance</button></a></h3> 
                            </div>
                        </div>
                    </div>
                </form>
            </div>  
       

</body>
</html>