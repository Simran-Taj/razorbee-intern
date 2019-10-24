<?php

session_start();
include_once '../class.user.php';
$user = new User(); 
$uid = $_SESSION['uid'];

if(!$user->get_session()){
    header("location:accounts/login.php");
}

if(isset($_GET['q'])){
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
            </div>
            <div>
                <form class="form-horizontal" id="formCreate1" method="POST" action="#" style="display:;">
                <div class="modal-body" style="margin-left:-900px;margin-top:-50px"><br>
                <h2 style="color:rgb(153, 47, 153);margin-top:150px;margin-left:200px;">Time Sheet</h1> 
                            <table class="table table-bordered" id="t02" style="border:1px solid white;margin-left:-00px">
                            <tr>
                                <!-- <th style="width:150px;">Date</th>
                                <th style="width:350px;">Task</th>
                                <th >Add Task</th> -->
                                <th style="position:fixed;width:561px">Date<span style="margin-left:120px">Task</span><span style="margin-left:260px"> Add task </span></th>
                                <th style="width:360px;">Task</th>
                                <th >Add Task</th>
                            </tr>
                            <tr>
                                <?php
                                    $con = mysqli_connect('localhost','root','','employeemanagement');
                                   
                                    $date = date("Y-m"). "-01"; //change the date -   (current date minus 15 days)
                                    $end_date = date("Y-m-d");
                                    $task=0;
                                    while (strtotime($date) <= strtotime($end_date)) 
                                    {
                                        echo "<tr>" ."<td>" . "$date" ."</td>" ;
                                        $date = date ("Y-m-d", strtotime("+1 day", strtotime($date)));
                                        $task++; 
                                        echo "<td><textarea id=task$task cols=40 rows=3></textarea>"."</td>";
                                        echo "<td>"."<button id=addtask$task type=button class=btn btn-primary btn-lg data-toggle=modal onclick=save('task$task') data-target=#myModal3>Add task</button>"."</td>"."</tr>"."</tr>";
                                    }    
                                ?>
                            </tr>
                        </table>                                               
                    </div>
                </form>
            </div>
            <!-- end -->
    <!-- add task modal -->
    <div class="modal" style="margin-top:200px;margin-left:150px" id="myModal3">
        <div class="modal-dialog">
            <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Task</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                    <!-- Modal body -->
                <div class="modal-body">
                    <textarea type="text" class="form-control" id="taskdescription"  placeholder="Enter Task"></textarea>
                </div>
                    <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" id="submitbutton">Submit</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal" id="closebutton">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!-- end -->
                </body>
                <script>
                   $('#timesheet').on('click',function(){
                $('#formCreate1').show();
                    })

                   
    </script>
</html>