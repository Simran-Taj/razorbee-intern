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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>RazorBee Online Solutions</title>

    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous"> -->
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="style.css">

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
                    <a href="#"><img src="http://razorbee.com/wp-content/uploads/2017/08/razorbee_logo.png" alt="RazorBee" class="img-logo-w2" style="width: 190px;  margin-top: -15px;font-color:white "></a>

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
                
            </ul>

           
        </nav>

        <!-- Page Content  -->
        <div id="content">

            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">

                    <!-- <button type="button" id="sidebarCollapse" class="btn btn-info">
                        <i class="fas fa-align-left"></i>
                        <span>Toggle Sidebar</span>
                    </button> -->
                   
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="nav navbar-nav ml-auto">
                            <li class="nav-item active">
                                <h1 style="color:purple;margin-left:945px;font-size:25px;margin-top:-10px">Hello <?php $user->get_fullname($uid); ?></h1>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" style="margin-top:-20px;font-size:25px">Logout</a>
                            </li>
                            
                        </ul>
                    </div>
                </div>
            </nav>
            <div>
                <!-- login validation -->
            <form class="form-horizontal" id="formCreate4" method="POST" action="#" style="display: none;">
                <p style="color:rgb(153, 47, 153);font-size:40px;margin-left:500px;margin-top:200px">Login successfull</p>        
            </form>
</div>

             <!-- logout validation -->
             <div>
            <form class="form-horizontal" id="formCreate5" method="POST" action="#" style="display: none;">
                <p style="color:rgb(153, 47, 153);font-size:40px;margin-left:500px;margin-top:200px">Logout successfull</p>        
            </form>
</div>
            <!-- view attendance -->
            <div>
                
                <form class="form-horizontal" id="formCreate2" method="POST" action="#" style="display: none;">
                <div class="modal-body">
                             <h2 style="margin-top:-37px;margin-left:490px;color: rgb(153, 47, 153)">Attendance Sheet</h2><br>
                                    <table class="table table-bordered" id="t01" style="border:1px solid white;">
                                    
                                            <tr>
                                                <!-- <th style="" >EmpId</th> -->
                                                <th style="width:200px">Date</th>
                                                <th style="width:200px">Time</th>
                                                <th style="width:200px">Type</th>
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
            <!-- end -->
<!-- timesheet -->
            <div>
                
                <form class="form-horizontal" id="formCreate1" method="POST" action="#" style="display: none;">
                <div class="modal-body">
                <h2 style="margin-top:-30px;margin-left:500px;color: rgb(153, 47, 153)">Time Sheet</h2><br>
                            <table class="table table-bordered" id="t02" style="border:1px solid white;">
                            <tr>
                                <th style="width:150px;">Date</th>
                                <th style="width:350px;">Task</th>
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
                                        echo "<td><textarea id=task$task></textarea>"."</td>";
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

            <div>
            
                <form class="form-horizontal" id="formCreate" method="POST" action="#" style="display: none;"><br><br>
                 <div class="container" style="border:1px solid black;">
                    
                <h2 style="color:rgb(153, 47, 153)">Create New Project</h1> <br>   
                <b>Project Name:</b><br><br><input class="form-control" type="text" name="ProjectName" id="ProjectName" placeholder ="Enter project name">
                    <br><br>
                    <b>Client Name    : </b><br><br><input class="form-control" type="text" name="ClientName" id = "ClientName" placeholder ="Enter client name">
                    <br><br>
                    <b>Description:</b><br>
                    <br>
                    <textarea class="form-control" name="description" id = "description" placeholder ="Enter Description"></textarea>
                    <br><br>
                    <button type="submit" class="btn btn-primary" type="button" id="submitProject">Submit</button>
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
                        // include("C:/xampp/htdocs/employee1/config.php");
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
            <div class="container" id="projecttable" style="display: none;">
 
            <h2 style="margin-top:-37px;margin-left:500px;color: rgb(153, 47, 153)">Time Sheet</h2><br>
                            <table class="table table-bordered" id="t03" style="border:1px solid white;">
                <thead>
                    <tr>
                        <th style="width:50px">ID</th>
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

   <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

    <script type="text/javascript">
        $(document).ready(function () {
            

        });

        $(document).ready(
            function() {

                $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
            });
            $('#viewproject').on('click',function(){
                $('#projecttable').show();
                $('#formCreate').hide();
                $('#ProjectDetails').hide();
                $('#formCreate1').hide();
                $('#formCreate2').hide();
                $('#formCreate5').hide();
                $('#formCreate4').hide();
            })
            $('#createproject').on('click',function(){
                $('#projecttable').hide();
                $('#formCreate').show();
                $('#ProjectDetails').hide();
                $('#formCreate1').hide();
                $('#formCreate2').hide();
                $('#formCreate5').hide();
                $('#formCreate4').hide();
            })
            // timesheet
            $('#timesheet').on('click',function(){
                $('#projecttable').hide();
                $('#formCreate1').show();
                $('#ProjectDetails').hide();
                $('#formCreate').hide();
                $('#formCreate2').hide();
                $('#formCreate5').hide();
                $('#formCreate4').hide();
            })
            // attendance
            $('#viewattendance').on('click',function(){
                $('#projecttable').hide();
                $('#formCreate1').hide();
                $('#ProjectDetails').hide();
                $('#formCreate').hide();
                $('#formCreate2').show();
                $('#formCreate5').hide();
                $('#formCreate4').hide();
            })
            $('#backToProject').on('click',function(){
                $('#ProjectDetails').hide();
                $('#viewproject').click();
            })
            // login
            $('#login').on('click',function(){
                $('#formCreate4').show();
                // $('#formCreate4').attr("disabled", true);
                $('#projecttable').hide();
                $('#formCreate1').hide();
                $('#ProjectDetails').hide();
                $('#formCreate').hide();
                $('#formCreate2').hide();
                $('#formCreate5').hide();
            })
            $('#logout').on('click',function(){
                $('#formCreate5').show();
                // $('#formCreate5').attr("disabled", true);
                $('#projecttable').hide();
                $('#formCreate1').hide();
                $('#ProjectDetails').hide();
                $('#formCreate').hide();
                $('#formCreate2').hide();
                $('#formCreate4').hide();
            })

                        
           $("#submitProject").click(function(){

                
                var name = $("#ProjectName").val();
                var client = $("#ClientName").val();
                var description = $("#description").val();
                var func = "yes";
                // Returns successful data submission message when the entered information is stored in database.
                var dataString = 'name1='+ name + '&client1='+ client + '&description1='+ description+ '&Func_createProject='+ func;
                //alert(dataString);
                if(name=='')
                // if(name==''||email==''||password=='')
                {
                    alert("Please Fill All Fields");
                }
                else
                {
                    alert("hi");
                    // AJAX Code To Submit Form.
                    $.ajax({
                        type: "POST",
                        url:"http://localhost/employee1/project/projectview.php",
                        data: dataString,
                        cache: false,
                        success: function(result){
                            
                            if(result==1){
                                $("#tagcreate").text("Project created successfully").css("color","green");
                            }else{
                                $("#tagcreate").text("Failed to create project").css("color","red");
                            }
                        }
                    });
                    
                }
                return false;
            });
           
        }
        
        );

        function showprojectdetails($detailsid){
            var func = "yes";
            var dataString = 'id1='+ $detailsid.replace("details","")+ '&Func_projectview='+ func;
               
            $.ajax({
                type: "POST",
                url:"http://localhost/employee1/project/projectview.php",
                data: dataString,
                dataType:"JSON",    
                cache: false,
                success: function(result){
                   $('#ProjectDetails').toggle();
                    $('#projecttable').hide();
                    $('#title').text(result.projectname);
                    $('#client').text(result.clientname);
                    $('#description').text(result.description);
                    $('#status').text(result.status);
                   
                },
                error:function(){
                    $('#error').text("There was an error. Try again please!");
                }
            });
           
        }
    </script>
    <!-- login -->
<!-- <script>
    $(document).ready(function () {

        $("#formCreate4").click(function (e) {
            
            //stop submitting the form to see the disabled button effect
            e.preventDefault();
            $('#formCreate4').show();
            //disable the submit button
            $("#login").attr("disabled", true);

            //disable a normal button
            // $("#logout").attr("enabled", true);

            return true;

        });
        
        $(document).ready(function () {
        $("#formCreate5").click(function (e) {

        //stop submitting the form to see the disabled button effect
        e.preventDefault();

        //disable the submit button
        $("#logout").attr("disabled", true);

        //disable a normal button
        // $("#logout").attr("enabled", true);

        return true;

        });
    });
</script> -->
</body>

<?php

    $conn = mysqli_connect('localhost','root','','employeemanagement');
    $uid = $_SESSION['uid'];
    $type = 'logout';
    $date = date('Y-m-d ');
    $date1 = date('h:m:s');
    $query = "INSERT INTO tblattendance (empid,date,time,type) VALUES ('$uid','$date',now(),'$type')";
    $query = "SELECT * FROM tblattendance WHERE empid=$uid";
    // if($query>0){
    //     echo "already exists";
    // }else{
    //     echo"create";
    // }
    if(mysqli_query($conn,$query))
    {
        // echo 'Logout succesfull';
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