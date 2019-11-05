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
                    <a href="#tasksub" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Task Management</a>
                    <ul class="collapse list-unstyled" id="tasksub">
                        <li>
                            <a href="#" id="taskCreate">Create</a>
                        </li>
                        
                        <li>
                            <a href="#" id="formTaskview">View</a>
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
            <!-- end -->
    <!-- timesheet -->
            <div>
                
                <form class="form-horizontal" id="formCreate1" method="POST" action="#" style="display: none;">
                <div class="modal-body" style="margin-left:300px"><br>
                <h2 style="color:rgb(153, 47, 153);margin-top:-45px;margin-left:220px;">Time Sheet</h1> 
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
                                    while(strtotime($date) <= strtotime($end_date)) 
                                    {
                                        echo "<tr>" ."<td>" . "$date" ."</td>" ;
                                        $date = date ("Y-m-d", strtotime("+1 day", strtotime($date)));
                                        $task++; 
                                        echo "<td><textarea id=task$task readonly></textarea>"."</td>";
                                        echo "<td>"."<button  id=addtask$task type=button class=btn btn-primary btn-lg data-toggle=modal onclick=save('task$task') data-target=#myModal3>Add task</button>"."</td>"."</tr>"."</tr>";
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
    <!-- Create task-->
    <?php

// php select option value from database

$conn = mysqli_connect('localhost','root','','employeemanagement');

$query = "SELECT * FROM `employeemaster`";

$result1 = mysqli_query($conn, $query);
?>
    <div>
                <form class="form-horizontal" id="formTask" method="POST" action="taskcreate.php" style="display: none;"><br><br>
                <h2 style="color:rgb(153, 47, 153);margin-top:-30px;margin-left:450px;">Create New Task</h1> <br>   
                 <div class="container" style="border-radius: 25px;border:1px solid black;"><br><br>
                <b>Assigneed to:</b>
                <select name="assignee">
               <?php while($row = mysqli_fetch_array($result1)):;?>
               <option  selected="selected" name="assignees" value="<?php echo $row[2];?>"><?php echo $row[2];?></option>

<?php endwhile;?>
                </select>
                    <br><br>
                  
                    <b>Description:</b><br>
                    <br>
                    <textarea class="form-control" name="description" id="description" placeholder ="Enter Description"></textarea>
                    <br><br>
                    <b>Status</b>: <span name="status_id" value="open">open</span>
                    <br><br>
                    <button type="submit" class="btn btn-primary" type="button" id="submitTask">Submit</button>
                    <button type="reset" class="btn btn-danger waves-effect waves-light" onclick="window.history.back();">Cancel</button>
                    <p id="tagcreate" ></p><br>
                                </div>
                </form>              
            </div>

<!--end-->
<!-- view task-->
<?php
 $connect = mysqli_connect("localhost", "root", "", "employeemanagement");  
 
 //$sql = "SELECT * FROM newtask INNER JOIN statusmaster ON newtask.status_id = statusmaster.status_id";  
 $sql = "SELECT * FROM newtask";
 $result = mysqli_query($connect, $sql);  
//  $result1 = mysqli_query($connect,"SELECT * FROM statusmaster");
 ?>  
 <div>
                
                <form class="form-horizontal" id="formTaskviews" method="POST" action="#" style="display: none;">
                <tr>
                                           
                    <div class="modal-body" >
                    
                        <h2 style="margin-top:-37px;margin-left:490px;color: rgb(153, 47, 153)">View Task</h2><br>
                       
                            <table class="table table-bordered" id="t01" style="border:1px solid white;width:40%;">
                                    
                                <tr>
                                                <!-- <th style="" >EmpId</th> -->
                                                <!-- <th style="width:200px">Date</th>
                                                <th style="width:200px">Time</th>
                                                <th style="width:200px">Type</th> -->
                                                <th>Assigned to</th>
                                                <th>Task</th>
                                                <th style="width:30%;">Status</th>

                                                </tr>
                                                <?php  
                          if(mysqli_num_rows($result) > 0)  
                          {  
                               while($row = mysqli_fetch_array($result))  
                               {  
                          ?>            
                          <tr>  
                               <td><?php echo $row["assignee"];?></td>  
                               <td><?php echo $row["description"]; ?> </td>  
                         <td style="width:30%;"><button type="button" class="btn" data-toggle="modal" data-target=""><a href="edit.php?id=<?php echo $row['id'];?>">Add Comments</a></button></td>
                          </tr>  
                          <?php }}?> 
                          </form>
     </div>                 
                          
                          <?php
 $connect = mysqli_connect("localhost", "root", "", "employeemanagement");  
 
 $sql = "SELECT * FROM newtask ";
 $result = mysqli_query($connect, $sql);  

 ?>                
                          <div id="myModal4" class="modal fade" role="dialog">
                          <form action=""  method="post" id="updateform">
   
                  
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <?php  
                          if(mysqli_num_rows($result) > 0)  
                          {  
                               while($row = mysqli_fetch_array($result))  
                               {  
                          ?>            
        <h4 class="modal-title"> 
        <?php echo $row["description"];?>
                           <?php echo $row["assignee"];?>
                           <?php echo $row["status_id"];?>   
                         
                            </h4>
      </div>
      <div class="modal-body">
        <textarea col="6" id="comments"  value=" <?php echo $row["comments"]; ?>" name="comments" /></textarea>
      </div>
     
      <div class="modal-footer">
      <button type="submit" class="btn btn-primary" type="button" id="updateTask" name="taskcomment">Submit</a></button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
      <?php }}?> 
    </div>
    </div>
  </div>
 </form>
</div>
</table>
               
                            
          
            <!--end-->
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
    <!-- add profile -->
        
    <form  class="form-inline" id="admin" method="POST" action="#" style="display: none;">
        <h2 style="color:rgb(153, 47, 153);margin-top:-70px;margin-left:350px;">Add Profile</h1> <br>
             <div class="scrollbar" class="style-1" >

                <label>Emp Name <span style="color:red">*</span>:</label>
                <input type="text" id="empname" name="name" placeholder="Enter your name" class="form-control" style="margin-left:40px" required>

                <label style="margin-left:80px">Emp Id <span style="color:red">*</span>:</label>
                <input type="text"  id="empid" placeholder="Enter your Id" class="form-control" style="margin-left:86px" required ><br><br>

                <label>Email<span style="color:red">*</span>:</label>
                <input type="text"  id="email" placeholder="Enter your Email" class="form-control" style="margin-left:80px" required>

                <label style="margin-left:80px">Designation <span style="color:red">*</span>:</label>
                <input type="text"  id="designation" placeholder="Enter your Designation" class="form-control" style="margin-left:46px" required><br><br>

                <label>Mobile No <span style="color:red">*</span>:</label>
                <input type="text"  id="mobile" placeholder="Enter mobile number" class="form-control" style="margin-left:46px" value="" required>

                <label style="margin-left:80px">Alternate Mob No <span style="color:red">*</span>:</label>
                <input type="text"  id="alternatenumber" placeholder="Enter Alternate mob no" class="form-control"  style="margin-left:10px" ><br><br>
                 
         
                <label>Date of Joining <span style="color:red">*</span>:</label>
                <input type="text"  id="doj" placeholder="Enter Date of Joining" class="form-control" style="margin-left:10px" required>
           
                <label style="margin-left:80px">Date of Birth <span style="color:red">*</span>:</label>
                <input type="text"  name="dop" id="dob" placeholder="Enter Date of Birth" class="form-control" style="margin-left:46px" required><br><br>

                <label>Qualification <span style="color:red">*</span>:</label>
                <input type="text" style="margin-left:25px" id="qualification" placeholder="Enter Qualification" class="form-control" required rows="1" cols="105"></input>
               
               
                <label style="margin-left:80px">Department <span style="color:red">*</span>:</label>
                <select id="department" class="form-control" style="margin-left:45px">
                    <option name="dept" value="select">Select the department</option>
                    <option name="dept" value="IT">IT</option>
                    <option name="dept" value="web development">WEb development</option>
                    <option name="dept" value="testing">Testing</option>
                    <option name="dept" value="Graphic designer">Graphic designer</option>
                    <option name="dept" value="Java development">Java development</option>
                </select><br><br>

                <label>Nationality <span style="color:red"></span>:</label>
                <input type="text" id="nationality" style="margin-left:45px" placeholder="Indian" class="form-control" style="margin-left:40px" readonly><br><br>
               
                <div>
                <label>Present Address <span style="color:red">*</span>:</label><br>
                <textarea type="text" id="presentaddress" placeholder="Enter Present Address" class="form-control" required rows="6" cols="50"></textarea>
                </div>

                <div style="margin-left:400px;margin-top:-160px">
                <label style="">Permanent Address <span style="color:red">*</span>:</label><br>
                <textarea type="text" id="permanentaddress" placeholder="Permanent Address" class="form-control" required rows="6" cols="50"></textarea><br><br>
                </div>

                <form>
                    <label>Gender <span style="color:red">*</span>:</label>
                    <input type="radio" id="male" name="gender" style="margin-left:70px" value="Male"><span style="margin-left:8px">male</span><input type="radio" name="gender" id="Female" style="margin-left:20px" value="Female"><span style="margin-left:8px">female</span><input type="radio" id="other" name="gender" style="margin-left:20px" value="Other"><span style="margin-left:8px">other</span>
                </form><br><br>
                <form>
                    <label>Marital Status <span style="color:red;">*</span>:</label>
                    <input type="radio" id="maritalstatus" name="name" style="margin-left:20px" value="Single"><span style="margin-left:8px">Single</span><input type="radio" name="name" value="Married" style="margin-left:20px"><span style="margin-left:8px">Married</span><br><br>
                </form>

                <label>Admin Privileges:</label>
                <input type="checkbox"style="margin-left:10px" id="adminprivileges" name="admin"><br><br>

                <button type="submit" class="btn btn-success" type="button" id="submitProject1">create</button>
                <button class="btn btn-danger" style="margin-left:50px" id="cancel">Cancel</button>
                <span style="color:green;font-size:15px;margin-left:50px;" id="tagcreate1"></span> 
            </div>
        <div class="force-overflow"></div>
    </form >
    <!-- end of admin page -->
    <!-- view  profile -->
        
    <form  class="form-inline" id="admin1" method="POST" action="#" style="display: none;">
        <h2 style="color:rgb(153, 47, 153);margin-top:-450px;margin-left:350px;">Add Profile</h1> <br>
             <div class="scrollbar" class="style-1" >

                <label>Emp Name <span style="color:red">*</span>:</label>
                <input  id="empname1" name="name" placeholder="Enter your name" class="form-control" value="empname" style="margin-left:40px" required></input>

                <label style="margin-left:80px">Emp Id <span style="color:red">*</span>:</label>
                <input type="text" value="empid" id="empid1" placeholder="Enter your Id" class="form-control" style="margin-left:86px" required ><br><br>

                <label>Email<span style="color:red">*</span>:</label>
                <input type="text" value="email" id="email1" placeholder="Enter your Email" class="form-control" style="margin-left:80px" required>

                <label style="margin-left:80px">Designation <span style="color:red">*</span>:</label>
                <input type="text" value="designation" id="designation1" placeholder="Enter your Designation" class="form-control" style="margin-left:46px" required><br><br>

                <label>Mobile No <span style="color:red">*</span>:</label>
                <input type="text" value="mobile" id="mobile1" placeholder="Enter mobile number" class="form-control" style="margin-left:46px" value="" required>

                <label style="margin-left:80px">Alternate Mob No <span style="color:red">*</span>:</label>
                <input type="text" value="alternateno" id="alternatenumber1" placeholder="Enter Alternate mob no" class="form-control"  style="margin-left:10px" ><br><br>
                 
         
                <label>Date of Joining <span style="color:red">*</span>:</label>
                <input type="text" value="doj" id="doj1" placeholder="Enter Date of Joining" class="form-control" style="margin-left:10px" required>
           
                <label style="margin-left:80px">Date of Birth <span style="color:red">*</span>:</label>
                <input type="text" value="dob" name="doj" id="dob1" placeholder="Enter Date of Birth" class="form-control" style="margin-left:46px" required><br><br>

                <label>Qualification <span style="color:red">*</span>:</label>
                <input type="text"  value="qualification" style="margin-left:25px" id="qualification1" placeholder="Enter Qualification" class="form-control" required ></input>
               
               
                <label style="margin-left:80px">Department <span style="color:red">*</span>:</label>
                <select id="department1" class="form-control" id="selector"  value="select" style="margin-left:45px">
                    <option name="dept1" value="select">Select the department</option>
                    <option name="dept1" value="IT">IT</option>
                    <option name="dept1" value="web development">WEb development</option>
                    <option name="dept1" value="testing">Testing</option>
                    <option name="dept1" value="Graphic designer">Graphic designer</option>
                    <option name="dept1" value="Java development">Java development</option>
                </select><br><br>

                <label>Nationality <span style="color:red"></span>:</label>
                <input type="text" id="nationality1" style="margin-left:45px" placeholder="Indian" class="form-control" style="margin-left:40px" readonly><br><br>
               
                <div>
                <label>Present Address <span style="color:red">*</span>:</label><br>
                <textarea type="text"  value="presenttaddress" id="presentaddress1" placeholder="Enter Present Address" class="form-control" required rows="6" cols="50"></textarea>
                </div>

                <div style="margin-left:400px;margin-top:-160px">
                <label style="">Permanent Address <span style="color:red">*</span>:</label><br>
                <textarea type="text"  value="permanentaddress" id="permanentaddress1" placeholder="Permanent Address" class="form-control" required rows="6" cols="50"></textarea><br><br>
                </div>

                <form>
                    <label>Gender <span style="color:red">*</span>:</label>
                    <input type="radio"  id="male1" name="gender1" style="margin-left:70px" value="Male"><span style="margin-left:8px">male</span><input type="radio" name="gender1" id="Female1" style="margin-left:20px" value="Female"><span style="margin-left:8px">female</span><input type="radio" id="other1" name="gender1" style="margin-left:20px" value="Other"><span style="margin-left:8px">other</span>
                </form><br><br>
                <form>
                    <label>Marital Status <span style="color:red;">*</span>:</label>
                    <input type="radio" id="maritalstatus1" name="name1" style="margin-left:20px" value="Single"><span style="margin-left:8px">Single</span><input type="radio" name="name1" value="Married" style="margin-left:20px"><span style="margin-left:8px">Married</span><br><br>
                </form>

                <label>Admin Privileges:</label>
                <input type="checkbox"style="margin-left:10px" id="adminprivileges1" name="admin1"><br><br>

                <button type="button" class="btn btn-success" id="viewprofileofadmin">Update</button>
                <button class="btn btn-danger" type="button" style="margin-left:50px" id="cancelfield">Cancel</button>
                <span style="color:green;font-size:15px;margin-left:50px;" id="errortag"></span> 
            </div>
        <div class="force-overflow"></div>
    </form>

    <!-- change password -->
    <form  class="form-inline" id="changepassword1" method="POST" action="#" style="display: none;">
    
        <h2 style="color:rgb(153, 47, 153);margin-top:-850px;margin-left:430px;">Change Password</h1> <br>
        <div class="container" style="border-radius: 25px;border:1px solid black;margin-left:320px;padding:20px;width:480px;height:340px"><br><br>
            <label>Current Password:</label>
            <input type="password"  id="currentpass" placeholder="Enter current password"  class="form-control" style="margin-left:65px"><br><br>    
            <label>New Password:</label>
            <input type="password"  id="newpass" placeholder="Enter New password" class="form-control" style="margin-left:90px" ><br><br>
            <label>Confirm Password:</label>
            <input type="password"  id="confirmpass" placeholder="Confirm password" class="form-control" style="margin-left:60px"><br><br><br>
            <button  class="btn btn-success" type="submit" style="margin-left:120px" id="submit2">submit</button>
            <button class="btn btn-success" type="button" style="margin-left:50px" id="cleartext">Clear</button><br><br>
            <span style="color:green;font-size:15px;margin-left:120px;" id="tagcreate2"></span>  
        </div>      
    </form>
    <!-- end of change password -->
    <!-- sales tracker add-->
    <form  class="form-inline" id="salestracker" method="POST" action="#" style="display: none;">
    
        <h2 style="color:rgb(153, 47, 153);margin-top:-900px;margin-left:430px;">Sales Tracker</h1> <br>
        <div class="container" style="border-radius: 25px;border:1px solid black;margin-left:190px;padding:20px;width:680px;height:450px"><br><br>
            <label>Client Name:</label>
            <input type="text"  id="clientname" placeholder="Enter Client Name" class="form-control"  style="margin-left:35px"><br><br>    
            <label>Mobile Number:</label>
            <input type="text"  id="mnumber" placeholder="Enter Mobile Number" class="form-control"  style="margin-left:14px"><br><br>
            <label>Description:</label>
            <textarea type="text"  id="descript" placeholder="Description" class="form-control" cols="65" rows="6" style="margin-left:36px"></textarea><br><br><br>
            <button  class="btn btn-success" type="submit" style="margin-left:280px" id="submit1">submit</button><br><br>
            <span style="color:green;font-size:15px;margin-left:200px;" id="tagcreate3"></span>  
        </div>        
    </form>
    <!-- salestracker view -->
<div class="container" id="salestracker1" style="display: none;">
 
    <h2 style="color:rgb(153, 47, 153);margin-top:-900px;margin-left:460px;">Salestracker view</h1> <br>
        <table class="table table-bordered" id="t04" style="border:1px solid black;">
        <thead>
         <tr>
             <th style="width:50px">ID</th>
             <!-- <th style="width:50px">ID</th> -->
             <th style="width:150px">Client Name</th>
             <th style="width:110px">Mobile</th>
             <th style="width:250px">Description</th>
             <th style="width:100px">Status</th>
        
         </tr>
     </thead>
     <tbody>
     <tr>
     <?php
         $conn = mysqli_connect('localhost','root','','employeemanagement');
         $result = mysqli_query($conn,"SELECT * FROM salestracker");
         $detailsCnt = 0;
         while($test = mysqli_fetch_array($result))
         {
             $id = $test['id']; 
             echo"<td>".$test['id']."</td>";
             echo"<td>".$test['name']."</td>";
             echo"<td>".$test['mobile']."</td>";
             echo"<td>".$test['description']."</td>"; 
             echo"<td>".$test['status']."</td>"; 
            //  $detailsCnt++;
            //  echo "<td><button type=button class='btn btn-primary' id=details$detailsCnt onclick=showprojectdetails('details$detailsCnt')>Details</button></td>";
             echo "</tr>";
         }    
     ?>
     </table>
 
 </div>
    <!-- end of sales tracker -->

    <!-- add profile -->
    <form  class="form-inline" id="viewtable" method="POST" action="#" style="display: none;margin-top:-900px">
   
   <?php
     $conn = mysqli_connect('localhost','root','','employeemanagement');
    // $sql="SELECT empname,empid FROM employeemaster1 order by name"; 
    if($stmt = $conn->query("SELECT * from employeemaster1")){

    echo "<select name='selects' id='selects' class='form-control' style='width:200px;'>";
    while ($row = $stmt->fetch_assoc()) {
    echo "<option name='options' value='options'>$row[empname]</option>";
    }
    echo "</select>";
    
    }else{
    echo $connection->error;
    }
    echo"<input type='button' id='viewprofilebutton' value='submit' style='margin-left:20px;'>";
    ?>

    </form>
    <!-- end of add profile -->

    <!-- view project -->
            <div class="container" id="projecttable" style="display: none;">
 
            <h2 style="color:rgb(153, 47, 153);margin-top:-870px;margin-left:480px;">View Project</h1> <br>
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
                $('#viewtable').hide();
                $('#changepassword1').hide();
                $('#salestracker').hide();
                $('#admin1').hide();
                $('#salestracker1').hide();
                $('#formTaskviews').hide();
                $('#formTask').hide();
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
                $('#viewtable').hide();
                $('#changepassword1').hide();
                $('#salestracker').hide();
                $('#salestracker1').hide();
                $('#admin1').hide();
                $('#formTaskviews').hide();
                $('#formTask').hide();
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
                $('#viewtable').hide();
                $('#changepassword1').hide();
                $('#salestracker').hide();
                $('#salestracker1').hide();
                $('#admin1').hide();
                $('#formTaskviews').hide();
                $('#formTask').hide();
            })
            $('#viewattendance').on('click',function(){
                $('#formCreate1').hide();
                $('#projecttable').hide();
                $('#ProjectDetails').hide();
                $('#formCreate').hide();
                $('#formCreate2').show();
                $('#attendanceloginmessage').hide();
                $('#attendancelogoutmessage').hide();
                $('#admin').hide();
                $('#viewtable').hide();
                $('#changepassword1').hide();
                $('#salestracker').hide();
                $('#salestracker1').hide();
                $('#admin1').hide();
                $('#formTaskviews').hide();
                $('#formTask').hide();
            })
            // attendance
            $('#taskCreate').on('click',function(){
                $('#projecttable').hide();
                $('#formCreate1').hide();
                $('#ProjectDetails').hide();
                $('#formCreate').hide();
                $('#formCreate2').hide();
                $('#attendanceloginmessage').hide();
                $('#attendancelogoutmessage').hide();
                $('#admin').hide();
                $('#formTask').show();
                $('#viewtable').hide();
                $('#changepassword1').hide();
                $('#salestracker').hide();
                $('#salestracker1').hide();
                $('#admin1').hide();
                $('#formTaskviews').hide();
           
            })
            // $('#timesheet').on('click',function(){
            //     $('#formCreate1').show();
            //     $('#projecttable').hide();
            //     $('#ProjectDetails').hide();
            //     $('#formCreate').hide();
            //     $('#formCreate2').hide();
            //     $('#attendanceloginmessage').hide();
            //     $('#attendancelogoutmessage').hide();
            //     $('#admin').hide();
            //     $('#viewtable').hide();
            //     $('#changepassword1').hide();
            //     $('#salestracker').hide();
            //     $('#salestracker1').hide();
            //     $('#admin1').hide();
            // })
            // admin page
            $('#addprofile').on('click',function(){
                $('#projecttable').hide();
                $('#formCreate1').hide();
                $('#ProjectDetails').hide();
                $('#formCreate').hide();
                $('#admin').show();
                $('#attendanceloginmessage').hide();
                $('#attendancelogoutmessage').hide();
                $('#viewtable').hide();
                $('#changepassword1').hide();
                $('#salestracker').hide();
                $('#salestracker1').hide();
                $('#admin1').hide();
                $('#formTaskviews').hide();
                $('#formTask').hide();
            })
            // view 
            $('#viewprofile').on('click',function(){
                $('#projecttable').hide();
                $('#formCreate1').hide();
                $('#ProjectDetails').hide();
                $('#formCreate').hide();
                $('#viewtable').show();
                $('#admin1').hide();
                $('#attendanceloginmessage').hide();
                $('#attendancelogoutmessage').hide();
                $('#changepassword1').hide();
                $('#admin').hide();
                $('#salestracker').hide();
                $('#salestracker1').hide();
                $('#formTaskviews').hide();
                $('#formTask').hide();
            })
            // change password
            $('#changepassword').on('click',function(){
                $('#projecttable').hide();
                $('#formCreate1').hide();
                $('#ProjectDetails').hide();
                $('#formCreate').hide();
                $('#changepassword1').show();
                $('#attendanceloginmessage').hide();
                $('#attendancelogoutmessage').hide();
                $('#viewtable').hide();
                $('#admin').hide();
                $('#salestracker').hide();
                $('#salestracker1').hide();
                $('#admin1').hide();
                $('#formTaskviews').hide();
                $('#formTask').hide();
            })
            // salestracker
            $('#addsalestracker').on('click',function(){
                $('#projecttable').hide();
                $('#formCreate1').hide();
                $('#ProjectDetails').hide();
                $('#formCreate').hide();
                $('#salestracker').show();
                $('#attendanceloginmessage').hide();
                $('#attendancelogoutmessage').hide();
                $('#viewtable').hide();
                $('#admin').hide();
                $('#changepassword1').hide();
                $('#salestracker1').hide();
                $('#admin1').hide();
                $('#formTaskviews').hide();
                $('#formTask').hide();
            })

     
            $('#formTaskview').on('click',function(){
                $('#projecttable').hide();
                $('#formCreate1').hide();
                $('#ProjectDetails').hide();
                $('#formCreate').hide();
                $('#formTask').hide();
                $('#salestracker').hide();
                $('#attendanceloginmessage').hide();
                $('#attendancelogoutmessage').hide();
                $('#viewtable').hide();
                $('#admin').hide();
                $('#changepassword1').hide();
                $('#salestracker1').hide();
                $('#admin1').hide();
                $('#formTaskviews').show();
                
                })

            // vsales tracker view
            $('#viewsalestracker').on('click',function(){
                $('#projecttable').hide();
                $('#formCreate1').hide();
                $('#ProjectDetails').hide();
                $('#formCreate').hide();
                $('#salestracker1').show();
                $('#attendanceloginmessage').hide();
                $('#attendancelogoutmessage').hide();
                $('#viewtable').hide();
                $('#admin').hide();
                $('#changepassword1').hide();
                $('#salestracker').hide();
                $('#admin1').hide();
                $('#formTaskviews').hide();
                $('#formTask').hide();
            })
            // selecting of name from profile
          
            // update profile
            $('#viewprofileofadmin').on('click',function(){
                var empname1 = $("#empname1").val();
                var empid1 = $("#empid1").val();
                var email1 = $("#email1").val();
                var designation1 = $("#designation1").val();
                var mobile1 = $("#mobile1").val();
                var alternatenumber1 = $("#alternatenumber1").val();
                var doj1 = $("#doj1").val();
                var dob1 = $("#dob1").val();
                var qualification1 = $("#qualification1").val();
                var gender1 = $("input[name='gender1']:checked").val();
                var presentaddress1 = $("#presentaddress1").val();
                var permanentaddress1 = $("#permanentaddress1").val();
                var maritalstatus1 = $("input[name='name1']:checked").val();
                var department1 = $("option[name='dept1']:selected").val();
                var adminprivileges1 = 0;
                if($("input[name='admin1']:checked").val()=="on"){
                    adminprivileges=1;
                }
                var dataString2 = '&empname1='+ empname1 + '&empid1='+ empid1 + '&email1='+ email1 + '&designation1='+ designation1 + 
                                  '&mobile1='+ mobile1 + '&alternatenumber1='+ alternatenumber11 + '&doj1='+ doj1 + '&dob1='+ dob1 + '&qualification1='+ qualification1
                                   + '&gender1='+ gender1 +'&presentaddress1='+ presentaddress1 +'&permanentaddress1='+ permanentaddress1 
                                   + '&maritalstatus1='+ maritalstatus1 + '&department1='+ department1 +'&adminprivileges1='+ adminprivileges1;
                    alert(dataString2);
                    $.ajax({
                        type:"POST",
                        url:"http://localhost/EmployeeManagement/accounts/updateprofile.php",
                        data: dataString2,
                        cache: true,
                        success: function(msg){
                            $("#errortag").text(msg); 
                        }
                    });
                });
            
            // view profile
            $('#viewprofilebutton').on('click',function(){
                $('#admin1').show();
                $('#projecttable').hide();
                $('#formCreate1').hide();
                $('#ProjectDetails').hide();
                $('#formCreate').hide();
                $('#salestracker1').hide();
                $('#attendanceloginmessage').hide();
                $('#attendancelogoutmessage').hide();
                $('#viewtable').hide();
                $('#admin').hide();
                $('#changepassword1').hide();
                $('#salestracker').hide();
                $.ajax({
                        type: 'POST',
                        datatype: "json",
                        url:"http://localhost/EmployeeManagement/accounts/viewprofile.php",
                   
                        success: function(msg){
                             var res = $.parseJSON(msg);
                            $("#empname1").val(res.empname).css('color','black');
                            $("#empid1").val(res.id).css('color','black');
                            $("#email1").val(res.email).css('color','black');
                            $("#designation1").val(res.designation).css('color','black');
                            $("#mobile1").val(res.mobile).css('color','black');
                            $("#alternatenumber1").val(res.alternatenumber).css('color','black');
                            $("#doj1").val(res.doj).css('color','black');
                            $("#dob1").val(res.dob).css('color','black');
                            $("#qualification1").val(res.qualification).css('color','black');
                            $('input[name=gender1][value='+res.gender+']').prop('checked',true);
                            $('input[name=name1][value='+res.maritalstatus+']').prop('checked',true);
                            $("#presentaddress1").val(res.presentaddress).css('color','black');
                            $("#permanentaddress1").val(res.permanentaddress).css('color','black');
                            $('option[name=dept1][value='+res.department+']').prop('selected',true);
                            $('input[name=admin1][value='+res.adminprivileges+']').prop('checked',true);
                        }
                    });
            })
            $('#backToProject').on('click',function(){
                $('#ProjectDetails').hide();
                $('#viewproject').click();
            })
            $('#cleartext').on('click',function(){
                $('#currentpass').val('');
                $('#newpass').val('');
                $('#confirmpass').val('');
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
           
        });

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
                    function(e){
                       c = $("#taskdescription").val();
                       $(".modal").modal('hide');
                        $('#'+$taskid).val(c);
                        e.stopImmediatePropagation();
                        $.ajax({type: "POST",
                        url: "accounts/taskvalidation.php",
                        data: "task="+c,
                        cache: false,
                             success: function(result){
                             document.getElementById("taskdescription").value="";
                        }
                        });
                    });
           }) ;
}
</script>
<!-- login post -->
<script>
 
    
    $(document).ready(
            function(){
                 $("#submitTask").click(
                    function(e){
                        var myform = document.getElementById("formTask");
           var data = new FormData(myform);
                       c = $("#description").val();
                    //    $(".modal").modal('hide');
                    //     $('#'+$taskid).val(c);
                        
                        e.preventDefault();
                        $.ajax({type: "POST",
                            contentType: false,
                  
                    processData:false,    
                        url: "taskcreate.php",
                        data: data,
                        cache: false,
                             success: function(result){
                             document.getElementById("formTask").reset();
                             alert("task is successfully updated");
                        }
                        });
                    });
           }) ;

</script>

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
</script> 
<!-- add profile -->
<script>
 $(document).ready(function() {

$('#addprofile').click(function() {
    $('#submitProject1').click(function(e){
    e.preventDefault();
    // alert('hiii');
                var empname = $("#empname").val();
                var empid = $("#empid").val();
                var email = $("#email").val();
                var designation = $("#designation").val();
                var mobile = $("#mobile").val();
                var alternatenumber = $("#alternatenumber").val();
                var doj = $("#doj").val();
                var dob = $("#dob").val();
                var qualification = $("#qualification").val();
                var gender = $("input[name='gender']:checked").val();
                var presentaddress = $("#presentaddress").val();
                var permanentaddress = $("#permanentaddress").val();
                var maritalstatus = $("input[name='name']:checked").val();
                var department = $("option[name='dept']:selected").val();
                var adminprivileges = 0;
                if($("input[name='admin']:checked").val()=="on"){
                    adminprivileges=1;
                }
                var dataString1 = '&empname2='+ empname + '&empid2='+ empid + '&email2='+ email+ '&designation2='+ designation + 
                                  '&mobile2='+ mobile + '&alternatenumber2='+ alternatenumber + '&doj2='+ doj + '&dob2='+ dob+ '&qualification2='+ qualification
                                   + '&gender2='+ gender +'&presentaddress2='+ presentaddress +'&permanentaddress2='+ permanentaddress 
                                   + '&maritalstatus2='+ maritalstatus + '&department2='+ department+'&adminprivileges2='+ adminprivileges;
                    // AJAX Code To Submit Form.
                    $.ajax({
                        type: "POST",
                        url:"http://localhost/EmployeeManagement/accounts/adminvalidation.php",
                        data: dataString1,
                        cache: true,
                        success: function(msg){
                            $("#tagcreate1").text(msg); 
                        }
                    });
            });
           
        });
});
</script>
<!-- change password -->
<script>
 $(document).ready(function() {
$('#changepassword').click(function() {
    $('#submit2').click(function(e){
    e.preventDefault();
 
                var currentpass = $("#currentpass").val();
                var newpass = $("#newpass").val();
                var confirmpass = $("#confirmpass").val();
                var check = true;
                var errormessage="";
                if(currentpass=="" && newpass=="" && confirmpass==""){
                    errormessage = "please fill in the details";
                    $("#tagcreate2").text(errormessage).css('color','red');
                    check=false;
                }else{
                    if(currentpass==""){
                        check=false;
                        errormessage="Please enter current password"; 
                        $("#tagcreate2").text(errormessage).css('color','red');
                        exit();
                    }
                    if(newpass==""){
                        check=false;
                        errormessage="Please enter new password"; 
                        $("#tagcreate2").text(errormessage).css('color','red');
                        exit();
                    }
                    if(confirmpass==""){
                        check=false;
                        errormessage="Please enter confirm password"; 
                        $("#tagcreate2").text(errormessage).css('color','red');
                        exit();
                    }
                } 
                
                
                if(check==false){
                    $("#tagcreate2").text(errormessage).css('color','red');
                }else{
                    var dataString5 = 'currentpass2='+ currentpass + '&newpass2='+ newpass + '&confirmpass2='+ confirmpass;
                   // AJAX Code To Submit Form.
                    $.ajax({
                        type: "POST",
                        url:"http://localhost/EmployeeManagement/accounts/changepassword.php",
                        data: dataString5,
                        cache: true,
                        success: function(msg){
                            if(msg=="password updated successfully"){
                                $("#tagcreate2").text(msg); 
                            }else{
                                $("#tagcreate2").text(msg).css('color','red');
                            }
                          
                        }
                    });
                } 
            });
}); 
 });
// salestracker
$('#addsalestracker').click(function() {
    $('#submit1').click(function(e){
    e.preventDefault();
 
                var clientname = $("#clientname").val();
                var mnumber = $("#mnumber").val();
                var descript = $("#descript").val();
                var dataString = '&clientname1='+ clientname + '&mnumber1='+ mnumber + '&descript1='+ descript;
                // alert(dataString);
            
                    // AJAX Code To Submit Form.
                    $.ajax({
                        type: "POST",
                        url:"http://localhost/EmployeeManagement/accounts/salestracker.php",
                        data: dataString,
                        cache: true,
                        success: function(msg){
                            $("#tagcreate3").text(msg); 
                        }
                    });
            });
}); 
</script>

</html>