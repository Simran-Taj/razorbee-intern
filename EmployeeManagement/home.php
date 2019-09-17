<?php
    
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

    //session_start();
   // include_once 'class.user.php';
    $conn = mysqli_connect('localhost','root','','employeemanagement');
    $uid = $_SESSION['uid'];
    $type = 'login';
    $var1="";
    $date = date('Y-m-d ');
    $date1 = date('h:m:s');
    $query = "INSERT INTO tblattendance (empid,date,time,type) VALUES ('$uid','$date',now(),'$type')";
    if(mysqli_query($conn,$query))
    {
        $var1  = "Success";
       // print "login successfull";
    }
    else
    {
        $var1="fail";
       // echo "error while login"; 
    }
       
?>

<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
<div style="margin-left:1600px; margin-top:20px; font-size:24px" id="header"><a href="http://localhost/EmployeeManagement/accounts/login.php">LogOut</a></div>
    <div id="main-body"> 
        <!-- <h1>Hello <?php $user->get_fullname($uid); ?></h1> -->
    </div>
</div>
<div id="footer"></div>

 <?php

    $user = new User(); $uid = $_SESSION['uid'];
    if (!$user->get_session()){
    header("location:login.php");
    }

    if (isset($_GET['q'])){
    $user->user_logout();
    header("location:login.php");
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
                        margin-top:55px;
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
            <!-- <div id="header"><a href="home.php?q=logout">LOGOUT</a></div>  -->
            <div id="main-body">
                <h1 style="margin-top:-40px;color:blue;text-align:center">Hello <?php $user->get_fullname($uid); ?></h1>
            </div>
            <div id="footer"></div>
        </div>
        <div>
            <a href="http://localhost/intern/logo.php"><img src="http://razorbee.com/wp-content/uploads/2017/08/razorbee_logo.png" alt="RazorBee" class="img-logo-w2" style="width: 250px;  padding-top: -20px; padding-left:25px"></a>
        </div><br> 
        
        <div>
                <img src="https://i.ytimg.com/vi/-MKapbz0GIo/maxresdefault.jpg" style="width:1778px; height:769px">   
            <div>
                <form action="attendancevalidation.php" method="POST">
                    <div class="container">
                        <h3><a href=""><span style="color:white">Attendance</span></a><h3>
                        <h3><a href="http://localhost/EmployeeManagement/accounts/taskmanagement.php"><span style="color:white">Task Management</span></a></h3>
                        <h3><a href=""><span style="color:white">Leave Management</span></a></h3>
                        <div class="container" style="background-color:white; margin-left:730px; height:269px; margin-top:-148px;">
                            <div class="design"><br>
                                <!-- <a href="http://localhost/EmployeeManagement/accounts/loginattendance.php"> -->
                                <button type="button" class="btn btn-primary btn-lg" style="margin-left:85px;margin-top:40px">Login</button></a><br><br>
                                <a href="http://localhost/EmployeeManagement/accounts/logoutattendance.php"><button type="button" class="btn btn-danger btn-lg" style="margin-left:80px">Logout</button></a><br>
                                <h3><a href="http://localhost/EmployeeManagement/accounts/viewattendance.php" style="margin-left:35px">ViewAttendance</button></a></h3> 
                                
                                <p><?= $var1?></p>

                            </div>
                        </div>
                    </div>
                </form>
            </div>  
        </div>
    </body>
</html>