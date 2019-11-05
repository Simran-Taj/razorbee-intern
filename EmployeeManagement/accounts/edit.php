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
<?php


$connect = mysqli_connect("localhost", "root", "", "employeemanagement"); 

$id = $_REQUEST['id']; // send from link so get variable by REQUEST method

//echo $eid;

$sel = "select * from newtask where id='".$id."'";

$qr = mysqli_query($connect,$sel);


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
<?php


$result1 = mysqli_query($connect, ("SELECT * FROM `statusmaster`"));

?>
<div>
<h2 style="color:rgb(153, 47, 153);margin-top:-130px;margin-left:450px;">Edit Task</h1> <br>  

<div class="container" style="border-radius: 25px;border:1px solid black;padding:30px 0 20px 20px;margin-bottom:30px;">
<form name="form1" method="post">

<?php while($arr = mysqli_fetch_array($qr)) { ?>

<input style="margin:0px 10px 20px 0px;display:none;" type="text" value="<?php echo  $arr[0]; ?>" readonly="readonly" name="id"/>

<b>Name</b>: <span style="margin:0px 10px 20px 0px;"> <?php echo  $arr[1]; ?></span>
<b>Task</b>: <span style="margin:0px 10px 20px 0px;"><?php echo  $arr[2]; ?></span>
<select name="status">
               <?php while($row = mysqli_fetch_array($result1)):;?>
               <option  selected="selected" name="status" value="<?php echo $row[1];?>"><?php echo $row[1];?></option>

<?php endwhile;?>
                </select><br><br>
<textarea rows="4" cols="100" value="<?php echo  $arr[4]; ?>"  name="comments" /></textarea><br><br>

<input type="submit" value="edit" name="edit">

<?php } ?>




<?php


if(isset($_POST['edit'])){
$task_id=$_POST['id'];
$comments  = $_POST['comments'];
$status  = $_POST['status'];
// $date = date('m/d/Y h:i:s', time());
$upqr = "INSERT INTO taskcomment (comments,task_id,status,date) VALUES ('$comments','$task_id','$status',now())";
$strup = mysqli_query($connect,$upqr);

// if($strup){
	
// 	header('Location:home1.php');
// 	}else { echo "fail" ;}

}
$task_id=$_GET['id'];
$res = mysqli_query($connect,"SELECT * FROM taskcomment where task_id='".$task_id."' ");
;
 ?>
<?php
	while($row = mysqli_fetch_array($res)){
        ?> 
        <table style="overflow: scroll!important;">           
        <tr>  
             <td style="width:30%;"><?php echo $row["comments"];?></td>  
             <td style="width:30%;"><?php echo substr($row["date"],0,19);?></td> 
             <td style="width:30%;"><?php echo $row["status"];?></td>  
        </tr> 
        </table>   
        <?php
    }?>
    
</form>
</div>
</div>
</div>

</body>
</html>