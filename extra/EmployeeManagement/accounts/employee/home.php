<?php

session_start();
include_once '../class.user.php';
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

<?php

$user = new User(); 
$uid = $_SESSION['uid'];

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
<script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
        <script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
        <!-- [/] jquery -->

        <!-- bootstrap -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->

    <title>RazorBee Online Solutions</title>

    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous"> -->
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="/EmployeeManagement/accounts/styles.css">

    <!-- Font Awesome JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
</head>

<body>
    <div class="wrapper">
        <!-- Sidebar  -->
        <nav id="sidebar">
            
            <ul class="list-unstyled components">
                <div class="sidebar-header" style="margin-top:-20px">
                    <!-- <h3>RazorBee Online Solutions</h3> -->
                    <a href="#"><img src="http://razorbee.com/wp-content/uploads/2017/08/razorbee_logo.png" alt="RazorBee" class="img-logo-w2" style="width: 190px;  margin-top: -10px;font-color:white "></a>

                </div>
                <li class="active">
                    <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Attendance</a>
                    <ul class="collapse list-unstyled" id="homeSubmenu">
                        <li>
                            <a href="#" id="login">Login</a>
                        </li>
                        <li>
                            <a href="#" id="logout">Logout</a>
                        </li>
                        <li>
                            <a href="#"  id="viewattendance">View Attendance</a>  
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#" id="timesheet">Timesheet</a>
                </li>
                <li>
                    <a href="#leaveSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Leave Management</a>
                    <ul class="collapse list-unstyled" id="leaveSubmenu">
                        <li>
                            <a href="#">Apply</a>
                        </li>
                        <li>
                            <a href="#">Status</a>
                        </li>   
                        <li>
                            <a href="#">View</a>
                        </li>
                    </ul>
                </li>

                <li>
                    <a href="#projectSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Project Management</a>
                    <ul class="collapse list-unstyled" id="projectSubmenu">
                        <li>
                            <a href="#" id="viewproject">View Project</a>
                        </li>
                        <li>
                            <a href="#" id="createproject">Create Project</a>
                        </li>   
                        
                    </ul>
                </li>
                <li>
                    <a href="#profilesubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Profile </a>
                    <ul class="collapse list-unstyled" id="profilesubmenu">
                        <li>
                            <a href="#" id="addprofile">Add</a>
                        </li>
                        <li>
                            <a href="#" id="viewprofile">View</a>
                        </li> 
                        <li>
                            <a href="#" id="changepassword">Change Password</a>
                        </li>  
                        
                    </ul>
                </li>
                <li>
                    <a href="#salessubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Sales Tracker </a>
                    <ul class="collapse list-unstyled" id="salessubmenu">
                        <li>
                            <a href="#" id="addsalestracker">Add</a>
                        </li>
                        <li>
                            <a href="#" id="viewsalestracker">View</a>
                        </li> 
                    </ul>
                </li>
            </ul> 
        </nav>

        <!-- Page Content  -->
        <div id="content">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="nav navbar-nav ml-auto">
                            <li class="nav-item active">
                                <h1 style="color:purple;margin-left:850px;font-size:25px;margin-top:-10px;color:rgb(153, 47, 153)">Hello <?php $user->get_fullname($uid); ?></h1>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="../accounts/login.php" style="margin-top:-20px;font-size:25px">Logout</a>
                            </li>
                            
                        </ul>
                    </div>
                </div>
            </nav>
            <div>
           <!-- login validation -->
                <p style="color:rgb(153, 47, 153);font-size:40px;margin-left:400px;margin-top:200px" id="attendanceloginmessage"></p>        
        
    </div>
             <!-- logout validation -->
             <div>
                <p style="color:rgb(153, 47, 153);font-size:40px;margin-left:400px;margin-top:200px" id="attendancelogoutmessage"></p>       
            </div>
    <!-- view attendance -->
            <div>
                
                <form class="form-horizontal" id="formCreate2" method="POST" action="#" style="display: none;">
                    <div class="modal-body" >
                             <h2 style="margin-top:-37px;margin-left:490px;color: rgb(153, 47, 153)">Attendance Sheet</h2><br>
                                    <table class="table table-bordered" id="t01" style="border:1px solid white;">
                                    
                                            <tr>
                                                <!-- <th style="" >EmpId</th> -->
                                                <!-- <th style="width:200px">Date</th>
                                                <th style="width:200px">Time</th>
                                                <th style="width:200px">Type</th> -->
                                                <th style="width:356px;position:fixed">Date<span style="margin-left:80px">Time</span><span style="margin-left:90px">Type</span></th>
                                                <th style="width:140px;text-align:center">Time</th>
                                                <th style="width:120px">Type</th>
                                            <tr>
                                                <?php
                                                
                                                    $con = mysqli_connect('localhost','root','','employeemanagement');
                                                    $sql = 'SELECT empid,date,time,type FROM tblattendance WHERE empid = "' . $_SESSION['uid'] . '"';
                                                    $result = $con->query($sql);
                                                    
                                                    if ($result->num_rows > 0) 
                                                    {
                                                        while($row = $result->fetch_assoc()) 
                                                        {
                                                            echo "<tr><td>". $row["date"] ."</td><td>". $row["time"] ."</td><td>". $row["type"] ."</td><tr>";
                                                        }
                                                        echo "</table>";
                                                    } 
                                                    else 
                                                    {
                                                        echo "0 result";
                                                    }
                                                ?>
                                    </table>
                    </div>
                </form>
            </div>
                <form class="form-horizontal" id="formCreate2" method="POST" action="#" style="display: none;">
                    <div class="modal-body" >
                        <h2 style="margin-top:-50px;margin-left:490px;color: rgb(153, 47, 153)">Attendance Sheet</h2><br>
                            <table class="table table-bordered" id="t01" style="border:1px solid white;">
                                <tr>
                                                <!-- <th style="" >EmpId</th> -->
                                                <!-- <th style="width:200px">Date</th>
                                                <th style="width:200px">Time</th>
                                                <th style="width:200px">Type</th> -->
                                    <th style="width:356px;position:fixed">Date<span style="margin-left:80px">Time</span><span style="margin-left:90px">Type</span></th>
                                    <th style="width:140px;text-align:center">Time</th>
                                    <th style="width:120px">Type</th>
                                <tr>
                                                <?php
                                                
                                                    $con = mysqli_connect('localhost','root','','employeemanagement');
                                                    $sql = 'SELECT empid,date,time,type FROM tblattendance WHERE empid = "' . $_SESSION['uid'] . '"';
                                                    $result = $con->query($sql);
                                                    
                                                    if ($result->num_rows > 0) 
                                                    {
                                                        while($row = $result->fetch_assoc()) 
                                                        {
                                                            echo "<tr><td>". $row["date"] ."</td><td>". $row["time"] ."</td><td>". $row["type"] ."</td><tr>";
                                                        }
                                                        echo "</table>";
                                                    } 
                                                    else 
                                                    {
                                                        echo "0 result";
                                                    }
                                                ?>
                                    </table>
                   
                </form>

            
            <!-- end -->
            <!-- end -->
    </body>
  
<!-- login post -->
<script>
 // attendance
 $('#viewattendance').on('click',function(){
                $('#formCreate2').show();
                $('#attendanceloginmessage').hide();
                $('#attendancelogoutmessage').hide();
            });
$('#login').click(function(e) {
    e.preventDefault();
    $.ajax({
        type: "POST",
        url: "http://localhost/EmployeeManagement/accounts/loginattendance.php",
        success: function(msg) {
            //stuffs
            // $('#formCreate4').show();
            $('#attendanceloginmessage').text(msg);
            $('#login').attr("disabled", true);
            $('#attendancelogoutmessage').attr("disabled", true);
            $('#formCreate2').hide();
        },
    });      
}); 
// logout post 
$('#logout').click(function(e) {
    e.preventDefault();
    $.ajax({
        type: "POST",
        url: "http://localhost/EmployeeManagement/accounts/logoutattendance.php",
        success: function(msg) {
            //stuffs
            // $('#formCreate5').show();
            $('#attendancelogoutmessage').text(msg);
            $('#logout').attr("disabled", true);
            $('#attendanceloginmessage').hide();
            $('#formCreate2').hide();
        },
    });      
}); 
 
 </script>
</html>