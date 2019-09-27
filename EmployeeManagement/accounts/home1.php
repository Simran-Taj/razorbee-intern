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
                    <a href="#profilesubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Admin Page </a>
                    <ul class="collapse list-unstyled" id="profilesubmenu">
                        <li>
                            <a href="#" id="addprofile">Add Profile</a>
                        </li>
                        <li>
                            <a href="#" id="viewprofile">View Profile</a>
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
            <!-- end -->
    <!-- timesheet -->
            <div>
                
                <form class="form-horizontal" id="formCreate1" method="POST" action="#" style="display: none;">
                <div class="modal-body"><br>
                <h2 style="color:rgb(153, 47, 153);margin-top:-45px;margin-left:500px;">Time Sheet</h1> 
                            <table class="table table-bordered" id="t02" style="border:1px solid white;">
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
    <!-- admin page -->
        
    <form  class="form-inline" id="admin" method="POST" action="#" style="display: none;">
        <h2 style="color:rgb(153, 47, 153);margin-top:-70px;margin-left:350px;">Add Profile</h1> <br>
             <div class="scrollbar" id="style-1" >

                <label>Emp Name <span style="color:red">*</span>:</label>
                <input type="text" id="empname" name="name" placeholder="Enter your name" class="form-control" style="margin-left:40px" required>

                <label style="margin-left:80px">Emp Id <span style="color:red">*</span>:</label>
                <input type="text" name="name" id="empid" placeholder="Enter your Id" class="form-control" style="margin-left:86px" required ><br><br>

                <label>Email<span style="color:red">*</span>:</label>
                <input type="text" name="name" id="email" placeholder="Enter your Email" class="form-control" style="margin-left:80px" required>

                <label style="margin-left:80px">Designation <span style="color:red">*</span>:</label>
                <input type="text" name="name" id="designation" placeholder="Enter your Designation" class="form-control" style="margin-left:46px" required><br><br>

                <label>Mobile No <span style="color:red">*</span>:</label>
                <input type="text" name="name" id="mobile" placeholder="Enter mobile number" class="form-control" style="margin-left:46px" required>

                <label style="margin-left:80px">Alternate Mob No <span style="color:red">*</span>:</label>
                <input type="text" name="name" id="alternatenumber" placeholder="Enter Alternate mob no" class="form-control"  style="margin-left:10px" required><br><br>

                <label>Date of Joining <span style="color:red">*</span>:</label>
                <input type="text" name="name" id="doj" placeholder="Enter Date of Joining" class="form-control" style="margin-left:10px" required>

                <label style="margin-left:80px">Date of Birth <span style="color:red">*</span>:</label>
                <input type="text" name="name" id="dop" placeholder="Enter Date of Birth" class="form-control" style="margin-left:46px" required><br><br>
                
                <form>
                    <label>Gender <span style="color:red">*</span>:</label>
                    <input type="radio" id="gender" name="name" style="margin-left:60px">Male<input type="radio" name="name" style="margin-left:20px">Female<input type="radio" name="name" style="margin-left:20px">Other
                </form><br><br>
                <form>
                    <label>Marital Status <span style="color:red;">*</span>:</label>
                    <input type="radio" id="maritalstatus" name="name" style="margin-left:10px">Single<input type="radio" name="name" style="margin-left:20px">Married<br><br>
                </form>

                <label>Qualification <span style="color:red">*</span>:</label>
                <textarea type="text" id="qualification" name="name" placeholder="Enter Qualification" class="form-control" required rows="1" cols="105"></textarea>
            <br><br>
                <label>Present Address <span style="color:red">*</span>:</label>
                <label style="margin-left:270px">Permanent Address <span style="color:red">*</span>:</label><br>
                <textarea type="text" id="presentaddress" name="name" placeholder="Enter Present Address" class="form-control" required rows="6" cols="50"></textarea>

               
                <textarea type="text" id="permanentaddress" name="name" placeholder="Permanent Address" class="form-control" required rows="6" cols="50"></textarea><br><br>
                
                <label>Nationality <span style="color:red"></span>:</label>
                <input type="text" id="nationality" name="name" placeholder="Indian" class="form-control" style="margin-left:40px" readonly>

                <label style="margin-left:80px">Department <span style="color:red">*</span>:</label>
                <select id="department" class="form-control" style="margin-left:75px">
                    <option>IT</option>
                    <option>WEb development</option>
                    <option>Java development</option>
                </select><br><br>
                
                <label>Admin Privileges <span style="color:red">*</span>:</label>
                <input type="checkbox" id="adminprivileges"><br><br>
                <button type="submit" class="btn btn-success" type="button" id="submitProject1">create</button>
                <button class="btn btn-danger" style="margin-left:50px" id="cancel">Cancel</button>
                <p style="color:rgb(153, 47, 153);font-size:40px;margin-left:400px;margin-top:px" id="tagcreate1"></p> 
                
    
            </div>
        <div class="force-overflow"></div>
    </form >
<!-- end of admin page -->
    <!-- view project -->
            <div class="container" id="projecttable" style="display: none;">
 
            <h2 style="color:rgb(153, 47, 153);margin-top:-470px;margin-left:480px;">View Project</h1> <br>
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
                $('#attendanceloginmessage').hide();
                $('#attendancelogoutmessage').hide();
                $('#admin').hide();
            })
            $('#createproject').on('click',function(){
                $('#projecttable').hide();
                $('#formCreate').show();
                $('#ProjectDetails').hide();
                $('#formCreate1').hide();
                $('#formCreate2').hide();
                $('#attendanceloginmessage').hide();
                $('#attendancelogoutmessage').hide();
                $('#admin').hide();
            })
            // timesheet
            $('#timesheet').on('click',function(){
                $('#formCreate1').show();
                $('#projecttable').hide();
                $('#ProjectDetails').hide();
                $('#formCreate').hide();
                $('#formCreate2').hide();
                $('#attendanceloginmessage').hide();
                $('#attendancelogoutmessage').hide();
                $('#admin').hide();
            })
            // attendance
            $('#viewattendance').on('click',function(){
                $('#projecttable').hide();
                $('#formCreate1').hide();
                $('#ProjectDetails').hide();
                $('#formCreate').hide();
                $('#formCreate2').show();
                $('#attendanceloginmessage').hide();
                $('#attendancelogoutmessage').hide();
                $('#admin').hide();
               
            })
            // admin page
            $('#addprofile').on('click',function(){
                $('#projecttable').hide();
                $('#formCreate1').hide();
                $('#ProjectDetails').hide();
                $('#formCreate').hide();
                $('#admin').show();
                $('#attendanceloginmessage').hide();
                $('#attendancelogoutmessage').hide();
               
            })
            $('#backToProject').on('click',function(){
                $('#ProjectDetails').hide();
                $('#viewproject').click();
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
                        url:"http://localhost/EmployeeManagement/accounts/projectview.php",
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
                url:"http://localhost/EmployeeManagement/accounts/projectview.php",
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
    
<p id="tag"></p>
</body>

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
                              
                             document.getElementById("taskdescription").value="";
                        }
                        });
                    }
                );
            }
        ) ;
}
</script>
<!-- login post -->
<script>
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
        },
    });      
}); 

// add profile


$("#submitProject1").click(function(){
                var empname = $("#empname").val();
                var empid = $("#empid").val();
                var email = $("#email").val();
                var designation = $("#designation").val();
                var mobile = $("#mobile").val();
                var alternatenumber = $("#alternatenumber").val();
                var doj = $("#doj").val();
                var dob = $("#dob").val();
                var gender = $("#gender").val();
                var presentaddress = $("#presentaddress").val();
                var permanentaddress = $("#permanentaddress").val();
                var maritalstatus = $("#maritalstatus").val();
                // var nationality = $("#email").val();
                var department = $("#department").val();
                var adminprivileges = $("#adminprivileges").val();
                // var func = "yes";
                // Returns successful data submission message when the entered information is stored in database.
                // var dataString = 'name1='+ name + '&client1='+ client + '&description1='+ description+ '&Func_createProject='+ func;
                var dataString1 = 'empname2='+ empname + '&empid2='+ empid + '&email2='+ email+ '&designation2='+ designation + 
                                  'mobile2='+ mobile + '&alternatenumber2='+ alternatenumber + '&doj2='+ doj + '&dob2='+ dob + '&gender2='+ gender + 
                                   '&presentaddress2='+ presentaddress +
                                  'permanentaddress2='+ permanentaddress + '&maritalstatus2='+ maritalstatus + '&department2='+ department + 
                                  '&adminprivileges2='+ adminprivileges + '&Func_createProfile='+ func;
                alert(dataString1);
                if(empname =='')
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
                        url:"http://localhost/EmployeeManagement/accounts/adminvalidation.php",
                        data: dataString1,
                        cache: true,
                        success: function(msg){
                            
                            if(result1==1){
                                $("#tagcreate1").text(msg);
                            }else{
                                $("#tagcreate1").text(msg);
                            }
                        }
                    });
                    
                }
                return false;
            });
           
        }
        
        );

</script> 
</html>