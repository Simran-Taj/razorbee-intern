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
                border:1px solid black;
                width:280px;  
                margin-top:70px;
                font-size:10px;
                height:769px;
                background-color:black;
                margin-left:-3px;
            }
            .container1{
                border:1px solid black;
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
                
        </style>
    </head>
    <body> 
        <div>
            <div>
                    <a href="http://localhost/intern/logo.php"><img src="http://razorbee.com/wp-content/uploads/2017/08/razorbee_logo.png" alt="RazorBee" class="img-logo-w2" style="width: 250px;  padding-top: 18px; padding-left:50px"></a>
            </div><br> 
        </div>  
        <div>
                <img src="https://i.ytimg.com/vi/-MKapbz0GIo/maxresdefault.jpg" style="width:1778px;">   
            <div>
                <form action="attendancevalidation.php" method="POST">
                    <div  class="container">
                        <table class="table table-bordered" style="color:white; font-size:20px; margin-left:-13px">
                                <tr><th><a href="http://localhost/EmployeeManagement/home.php" style="color:white;" >Attendance</a></th></tr>
                                <tr><th><a href="http://localhost/EmployeeManagement/accounts/taskmanagement.php" style="color:white;" >Task Management</a></th></tr>
                                <tr><th><a href="" style="color:white;">Leave Management</a></th></tr>
                        </table>
                    </div>
                    <div class="container1" style="width:450px" >
                        <table class="table table-striped">
                            <tr style="margin-left:30px;">
                                <th style="padding-left:30px;">EmpId</th>
                                <th style="padding-left:30px;">Date</th>
                                <th style="padding-left:30px;">Time</th>
                                <th style="padding-left:10px;">Type</th>
                            <tr>
                                <?php
                                
                                    $con = mysqli_connect('localhost','root','','employeemanagement');
                                    $sql = "SELECT empid,date,time,type FROM tblattendance";
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