<?php
session_start();
    include_once 'class.user.php';
    $user = new User(); 
    $uid = $_SESSION['uid'];
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
            <title>attendance</title>
        <style>
            .container{
                /* border:1px solid black; */
                width:240px;  
                margin-top:70px;
                font-size:10px;
                height:669px;
                /* background-color:skyblue; */
                margin-left:-3px;
            }
            .container1{
                /* border:1px solid black; */
                width:600px;  
                margin-top:-769px;
                font-size:10px;
                background-color:white;
                margin-left:700px;
            }

            img {
                position: absolute;
                z-index: -2;
            }

            table{
                border-collapse:collapse;
                width:90px;
                color:white;
                font-family:verdana;
                font-size:15px;
                color:black;
            }
     body{
                   
  height: 200px;
  background-image: linear-gradient(to bottom right,white,skyblue);

                }
}
#t{
    display: inline-block;
}
tbody {
    height: 740px;
    display: inline-block;
    width: 400px;
    overflow: auto;
}
  
                
        </style>
    </head>
    <body> 
    <div style="margin-top:10px;">
           <a href="http://localhost/intern/logo.php"><img src="http://razorbee.com/wp-content/uploads/2017/08/razorbee_logo.png" alt="RazorBee" class="img-logo-w2" style="width: 250px;  padding-left:25px"></a>
           <div style="margin-left:1620px; font-size:27px" id="header"><a href="http://localhost/EmployeeManagement/accounts/login.php">LogOut</a></div>
   
        </div><br>  
        <div>
                <img src="https://image.freepik.com/free-photo/pine-tree-evergreen-juniper-background-christmas-winter-wallpaper_3249-2723.jpg" style="width:100%;height:100%;margin-top:-30px">   
            <div>
                <form action="attendancevalidation.php" method="POST">
                    <div  class="container" >
                        <table class="table table-bordered" style="color:black; margin-top:-30px;font-size:20px; margin-left:-13px;">
                                <tr><th><a href="http://localhost/EmployeeManagement/home.php" style="color:black;" >Attendance</a></th></tr>
                                <tr><th><a href="http://localhost/EmployeeManagement/accounts/taskmanagement.php" style="color:black;" >Task Management</a></th></tr>
                                <tr><th><a href="" style="color:black;">Leave Management</a></th></tr>
                        </table>
                    </div>
                    <div class="container1" style="width:450px;margin-top:-699px" id="t" >
                        <table class="table table-striped">
                            <tr style="margin-left:30px;">
                                <th style="padding-left:30px;" >EmpId</th>
                                <th style="padding-left:30px;">Date</th>
                                <th style="padding-left:30px;">Time</th>
                                <th style="padding-left:10px;">Type</th>
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
                </form>
            </div>  
        </div>
    </body>
</html>