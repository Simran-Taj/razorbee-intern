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
// login attendance

    $conn = mysqli_connect('localhost','root','','employeemanagement');
    $uid = $_SESSION['uid'];
    $type = 'login';
    $var1="";
    $date = date('Y-m-d ');
    $date1 = date('h:m:s');
    $query = "INSERT INTO tblattendance (empid,date,time,type) VALUES ('$uid','$date',now(),'$type')";
    
    if(mysqli_query($conn,$query))
    {
        // $var1  = "Success";
       // print "login successfull";
    }
    else
    {
        // $var1="fail";
       // echo "error while login"; 
    }
   

    ?>    


<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />


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


    <!-- <script src="jquery-3.4.1.min.js"></script> -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">  
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
            <title>loginlogo</title>
                <style>
                    .container{
                        /* border:1px solid black; */
                        width:280px;  
                       color:black;
                        font-size:15px;
                        height:755px;
                        /* background-color:black; */
                        margin-left:-3px
                        
                    }
                   
                    img {
                        position: absolute;
                        z-index: -2;
                    }
                   
                    body{
                        height: 200px;
                        background-image: linear-gradient(to bottom right,white,skyblue);
                    }
                    h1{
                        font-family:'Georgia', Times New Roman, Times, serif;
                    }
                    img {
                        position: fixed;
                        z-index: -2;
                    }
                    body{
                        margin-top:20px;
                        height: 200px;
                        background-image: linear-gradient(to bottom right,white,skyblue);
                    }
                    h1{
                        font-family:'Georgia', Times New Roman, Times, serif;
                    }
                    .sidenav {
                        height: 100%;
                        width: 230px;
                        position: fixed;
                        z-index: 1;
                        top: 0;
                        left: 0;
                        background-color: #111;
                        overflow-x: hidden;
                        padding-top: 20px;
                        margin-top:120px;
                    }
                    .sidenav a, .dropdown-btn {
                        padding: 6px 8px 6px 16px;
                        text-decoration: none;
                        font-size: 20px;
                        color: #818181;
                        display: block;
                        border: none;
                        background: none;
                        width: 100%;
                        text-align: left;
                        cursor: pointer;
                        outline: none;
                    }
                    .sidenav a:hover, .dropdown-btn:hover {color: #f1f1f1;}
                    .main {
                        margin-left: 200px; 
                        font-size: 20px;
                        padding: 0px 10px;
                    }
                    .active {
                        background-image: linear-gradient(to bottom right,white,skyblue);
                        color: black;
                    }
                    .dropdown-container {
                        display: none;
                        background-color: #262626;
                        padding-left: 20px;
                    }
                    @media screen and (max-height: 450px) {
                    .sidenav {padding-top: 15px;}
                    .sidenav a {font-size: 18px;}
                    }
                    table {width:100%;}
                    table#t01 tr:nth-child(even) {background-color: #eee;}
                    table#t01 tr:nth-child(odd) {background-color: #fff;}
                    table#t01 th {
                        background-color: skyblue;
                        color: white;
                    }
                    tbody {
                        height: 540px;
                        display: inline-block;
                            /* width: 540px; */
                        overflow: auto;
                    }
                    .modal-backdrop {display:none;}
                   
                </style>
                  
                  
                 
    </head>
    <body> 
       
        <div style="margin-top:-10px">
           <a href="http://localhost/intern/logo.php"><img src="http://razorbee.com/wp-content/uploads/2017/08/razorbee_logo.png" alt="RazorBee" class="img-logo-w2" style="width: 250px;  padding-top: -50px; padding-left:25px"></a>
            <h1 style="color:blue;margin-left:1530px">Hello <?php $user->get_fullname($uid); ?></h1>
           
           <div style="margin-left:1620px; font-size:27px" id="header"><a href="http://localhost/EmployeeManagement/accounts/login.php">LogOut</a></div>
   
        </div><br> 
        
        <div>
        <img src="https://image.freepik.com/free-photo/pine-tree-evergreen-juniper-background-christmas-winter-wallpaper_3249-2723.jpg" style="width:100%; height:100%">  
            
        </div>   
                <p id="show" style="margin-left:820px;margin-top:150px;font-size:50px;color:green"></p> 
                <p id="show1" style="margin-left:810px;margin-top:150px;font-size:50px;color:red"></p> 
            <div class="sidenav">
                    <button class="dropdown-btn">Attendance</button>
                <div class="dropdown-container"><br>
                    <input type="button" class="btn btn-success" style="width:120px;" onclick="myFunction()" value="LogIn"></input><br><br>
                    <input type="button" class="btn btn-danger" style="width:120px;" onclick="myFunction1()" value="LogOut"></a></input><br><br>
                        <!-- <button class="btn btn-danger" style="width:120px"><a href="#">LogOut</a></button> -->
                        <div class="container">
                            <button type="button" class="btn btn-info " data-toggle="modal" data-target="#myModal" style="margin-left:-15px">View Attendance</button>
                            <!-- Modal -->
                            <div class="modal fade" id="myModal" role="dialog" style="margin-top:90px;margin-left:200px" >
                                <div class="modal-dialog" >
                                    <!-- Modal content-->
                                    <div class="modal-content" >
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            <h4 class="modal-title" style="color:skyblue;font-size:20px">Attendance Sheet</h4>
                                        </div>
                                        <div class="modal-body">
                                            <table class="table table-bordered" id="t01">
                                                <tr>
                                                    <th style="padding-left:10px;width:200px" >EmpId</th>
                                                    <th style="padding-left:30px;width:200px">Date</th>
                                                    <th style="padding-left:30px;width:200px">Time</th>
                                                    <th style="padding-left:10px;width:200px">Type</th>
                                                <tr>
                                                    <?php
                                                    
                                                        $con = mysqli_connect('localhost','root','','employeemanagement');
                                                        $sql = 'SELECT empid,date,time,type FROM tblattendance WHERE empid = "' . $_SESSION['uid'] . '"';
                                                        $result = $con->query($sql);
                                                        
                                                        if ($result->num_rows > 0) 
                                                        {
                                                            while($row = $result->fetch_assoc()) 
                                                            {
                                                                echo "<tr><td>". $row["empid"] ."</td><td>". $row["date"] ."</td><td>". $row["time"] ."</td><td>". $row["type"] ."</td><td>";
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
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- <a href="#">View Attendance</a> -->
                </div><br>
                    <button class="dropdown-btn">Task Management</button><br>
                    <button class="dropdown-btn">Leave Management</button><br>
                    <button class="dropdown-btn">Isadmin page</button>
                <div class="dropdown-container">
                    <a href="#">Link 1</a>
                    <a href="#">Link 2</a>
                    <a href="#">Link 3</a>
                </div>
                    <!-- modal -->
                    <script>
                        var dropdown = document.getElementsByClassName("dropdown-btn");
                        var i;

                        for (i = 0; i < dropdown.length; i++) 
                        {
                            dropdown[i].addEventListener("click", function() 
                            {
                                this.classList.toggle("active");
                                var dropdownContent = this.nextElementSibling;
                                if (dropdownContent.style.display === "block"
                                {
                                    dropdownContent.style.display = "none";
                                }else 
                                {
                                    dropdownContent.style.display = "block";
                                }
                            });
                        }
                    </script>
            </div>  
        </div>
            <script>
                function myFunction(){
                    document.getElementById("show").innerHTML="Login Successfull";
                }
            </script>
            <script>
                function myFunction1(){
                    document.getElementById("show1").innerHTML="Logout Successfull";
                }
            </script>
    </body>

    <?php
   
        $conn = mysqli_connect('localhost','root','','employeemanagement');
        $uid = $_SESSION['uid'];
        $type = 'logout';
        $date = date('Y-m-d ');
        $date1 = date('h:m:s');
        $query = "INSERT INTO tblattendance (empid,date,time,type) VALUES ('$uid','$date',now(),'$type')";
        if(mysqli_query($conn,$query))
        {
            echo 'Logout succesfull';
        }
        else
        {
            echo "error while logout"; 
        }
    ?>
    
</html>