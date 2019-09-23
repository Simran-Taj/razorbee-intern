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
$var1 = "";
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
    <meta charset="utf-8">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">  
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
        <title>loginlogo</title>
            <style>
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
                    width: 250px;
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
                    width: 560px; 
                    overflow: auto;
                }
                .modal-backdrop {display:none;}
            </style>
</head>
<body> 
    <div style="margin-top:-10px;position:fixed">
        <a href="http://localhost/intern/logo.php"><img src="http://razorbee.com/wp-content/uploads/2017/08/razorbee_logo.png" alt="RazorBee" class="img-logo-w2" style="width: 250px;  padding-top: -50px; padding-left:25px"></a>
        <h1 style="color:blue;text-align:right">Hello <?php $user->get_fullname($uid); ?></h1>
        <div style="margin-left:1620px; font-size:27px" id="header"><a href="http://localhost/EmployeeManagement/accounts/login.php">LogOut</a>
        </div>
    </div><br> 
    <div>
        <img src="https://image.freepik.com/free-photo/pine-tree-evergreen-juniper-background-christmas-winter-wallpaper_3249-2723.jpg" style="width:100%;margin-top:80px; height:100%">  
    </div>   
        <p id="show" style="margin-left:820px;margin-top:150px;font-size:50px;color:green"></p> 
        <p id="show1" style="margin-left:810px;margin-top:150px;font-size:50px;color:red"></p> 
        <!-- The Modal -->
<!-- view attendance -->
           
    <div class="modal fade" id="myModal1" role="dialog" style="margin-top:90px;margin-left:200px" >
        <div class="modal-dialog" >
            <!-- Modal content-->
            <div class="modal-content" >
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title" style="color:skyblue;font-size:20px">Task Management</h4>
                </div>
                    <div class="modal-body">
                        <table class="table table-bordered" id="t01" style="border:1px solid black;">
                            <tr>
                                <th style="width:150px;">Date</th>
                                <th style="width:250px;">Task</th>
                                <th >Add Task</th>
                            </tr>
                            <tr>
                                <?php
                                    $date = date("Y-m"). "-01"; //change the date -   (current date minus 15 days)
                                    $end_date = date("Y-m-d");
                                    $task=0;
                                    while (strtotime($date) <= strtotime($end_date)) 
                                    {
                                        echo "<tr>" ."<td>" . "$date" ."</td>" ;
                                        $date = date ("Y-m-d", strtotime("+1 day", strtotime($date)));
                                        $task++; 
                                        echo "<td><input id=task$task>"."</td>";
                                        echo "<td>"."<button id=addtask$task type=button class=btn btn-primary btn-lg data-toggle=modal onclick=save('task$task') data-target=#myModal3>Add task</button>"."</td>"."</tr>"."</tr>";
                                    }    
                                ?>
                            </tr>
                        </table>
                                                
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- add task modal -->
    <div class="modal" style="margin-top:200px;margin-left:1150px" id="myModal3">
        <div class="modal-dialog">
            <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Task</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                    <!-- Modal body -->
                <div class="modal-body">
                    <input type="text" class="form-control" id="taskdescription"  placeholder="Enter Task">
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
<!-- side panel -->
        <div class="sidenav">
                <button class="dropdown-btn">Attendance</button>
            <div class="dropdown-container"><br>
                <input type="button" class="btn btn-success" style="width:120px;" onclick="myFunction()" value="LogIn"></input><br><br>
                <input type="button" class="btn btn-danger" style="width:120px;" onclick="myFunction1()" value="LogOut"></a></input><br><br>
                <!-- view attendance -->
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
                                    <table class="table table-bordered" id="t01" style="border:1px solid black;">
                                            <tr>
                                                <th style="width:150px" >EmpId</th>
                                                <th style="width:150px">Date</th>
                                                <th style="width:150px">Time</th>
                                                <th style="width:150px">Type</th>
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
                <!-- View Attendance end -->
            </div><br>
            
            <button type="button" class="dropdown-btn" data-toggle="modal" data-target="#myModal1">Task Management</a></button><br>
            <button class="dropdown-btn">Leave Management</button><br>
               
            <div class="dropdown-container">
                <a href="#">Link 1</a>
                <a href="#">Link 2</a>
                <a href="#">Link 3</a>
            </div>
            <!-- dropdown validation -->
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
                            if (dropdownContent.style.display === "block")
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
    <!-- success message -->
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
<!-- add task to database -->
<script>
    function save($taskid){
    var text = $('#'+$taskid).attr("id");
    
    $(document).ready(
            function(){
                 $("#submitbutton").click(
                    function(a){
                       c = $("#taskdescription").val();
                       $(".modal").modal('hide');
                        $('#'+$taskid).val(c);
                        
                        a.stopImmediatePropagation();
                        $.ajax({type: "POST",
                        url: "accounts/taskvalidation.php",
                        data: "task="+c,
                        cache: false,
                             success: function(result){
                                //  console.log("hi");
                             //alert(result);
                             document.getElementById("taskdescription").value="";
                        }
                        });
                    }
                );
            }
        ) ;
}
</script>
</html>