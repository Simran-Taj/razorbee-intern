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
    
    <!-- view project -->
    <div class="container" id="projecttable" style="margin-top:-140px">
 
 <h2 style="color:rgb(153, 47, 153);margin-top:-1 70px;margin-left:480px;">View Project</h1> <br>
     <table class="table table-bordered" id="t03" style="border:1px solid white;">
     <thead>
         <tr>
         <th style="position:fixed;">ID<span style="margin-left:20px">Project Name</span><span style="margin-left:100px">Client </span>
         </span><span style="margin-left:150px">Description </span></span><span style="margin-left:220px">Status </span><span style="margin-left:120px"></span></th>
             <!-- <th style="width:50px">ID</th> -->
             <th style="width:200px">Project Name</th>
             <th style="width:200px">Client</th>
             <th style="width:300px">Description</th>
             <th style="width:100px">Status</th>
             <th></th>
         </tr>
     </thead>
     <tbody>
     <tr>
     <?php
         $conn = mysqli_connect('localhost','root','','employeemanagement');
         $result = mysqli_query($conn,"SELECT * FROM projectmaster");
         $detailsCnt = 0;
         while($test = mysqli_fetch_array($result))
         {
             $id = $test['id']; 
             echo"<td>".$test['id']."</td>";
             echo"<td>".$test['projectname']."</td>";
             echo"<td>".$test['clientname']."</td>";
             echo"<td>".$test['description']."</td>"; 
             echo"<td>".$test['projectstatus']."</td>"; 
             $detailsCnt++;
             echo "<td><button type=button class='btn btn-primary' id=details$detailsCnt onclick=showprojectdetails('details$detailsCnt')>Details</button></td>";
             echo "</tr>";
         }
     
     ?>
     </table>
 
 </div>
</div>

</div>
<!-- create project -->
<div>
                <form class="form-horizontal" id="formCreate" method="POST" action="#" style="display: none;"><br><br>
                <h2 style="color:rgb(153, 47, 153);margin-top:-30px;margin-left:450px;">Create New Project</h1> <br>   
                 <div class="container" style="border-radius: 25px;border:1px solid black;"><br><br>
                <b>Project Name:</b><br><br><input class="form-control" type="text" name="ProjectName" id="ProjectName" placeholder ="Enter project name">
                    <br><br>
                    <b>Client Name    : </b><br><br><input class="form-control" type="text" name="ClientName" id = "ClientName" placeholder ="Enter client name">
                    <br><br>
                    <b>Description:</b><br>
                    <br>
                    <textarea class="form-control" name="description" id = "description" placeholder ="Enter Description"></textarea>
                    <br><br>
                    <button type="submit" class="btn btn-primary" type="button" id="submitProject">Submit</button><br><br>
                    <p id="tagcreate" ></p><br>
                                </div>
                </form>              
            </div>

            <form  class="form-horizontal" id="ProjectDetails" style="display:none;">
                <h1 id="error"></h1>
                <h1 id="title"></h1><hr>
                <h2 id="client"></h2><hr>
                <h2 id="description"></h2><hr>
                <h2 id = "status"></h2><hr>
                <button id="backToProject" type=button class='btn btn-primary'>Back To View Projects</button>
                <hr><h3>Comments</h3> <button id="addComments" type=button class='btn btn-primary'>Add Comments</button><hr>
                <textarea id="commentarea" rows="2" cols="100" placeholder = "Enter comments"></textarea>
                <div id="Discussions">

                    <?php
                        
                        $conn = mysqli_connect('localhost','root','','employeemanagement');
                        $result = mysqli_query($conn,"SELECT * FROM `projectcomments` WHERE projectid=1");
                        $detailsCnt = 0;
                        while($test = mysqli_fetch_array($result))
                        {                            
                            echo"<p>".$test['projectid']."</p>";
                            echo"<p>".$test['empname']."</p>";
                            echo"<p>".$test['comment']."</p><hr>";                            
                        }
                    ?>

                </div>
            </form>
    </body>
        <script>
        document.ready(function(){
            $('#viewproject').on('click',function(){
                $('#projecttable').show();
            })
            $('#createproject').on('click',function(){
                $('#formCreate').show();
            })
        })
           
            
        </script>
</html>