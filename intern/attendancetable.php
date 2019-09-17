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
                        margin-left:660px;
                        
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
                    /* h3{
                        border:1px solid white;
                        height:35px;
                        margin-left:-13px;
                    } */
                    /* .sidepanel{
                        color:white;
                        margin-left:10px;
                    } */
                   
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
                                <tr><th><a href="http://localhost/intern/employeeattendance.php" style="color:white;" >Attendance</a></th></tr>
                                <tr><th><a href="http://localhost/intern/taskmanagement.php" style="color:white;" >Task Management</a></th></tr>
                                <tr><th><a href="" style="color:white;">Leave Management</a></th></tr>
                                
                               
                        </table>
                                <!-- <tr><th><h3><a href=""><span class="sidepanel">Attendance</span></a></h3></th></tr>
                                <tr><th><h3><a href=""><span class="sidepanel">Timesheet</span></a></h3></th></tr>
                                <tr><th><h3><a href=""><span class="sidepanel">Leave Management</span></a></h3></th></tr>
                                <tr><th><h3><a href=""><span class="sidepanel">Task Management</span></a></h3></th></tr> -->
                              
                    </div>
                    <div class="container1" style="width:500px" >
                        <table class="table table-striped" style="width:480px">
                            <tr style="background-color:pink; margin-left:20px; ">
                                <th style="padding-left:30px;">EmpId</th>
                                <th style="padding-left:30px;">Date</th>
                                <th style="padding-left:30px;">Time</th>
                                <th style="padding-left:10px;">Type</th>
                            <tr>
                                <?php
                                    $con = mysqli_connect('localhost','root','','internproject');
                                    $sql = "SELECT empid,date,time,type FROM tblattendance";
                                    $result = $con->query($sql);
                                    
                                    if ($result->num_rows > 0) 
                                    {
                                        while($row = $result->fetch_assoc()) 
                                        {
                                            // echo " date: ". $row["date"] ." , "."Attendance: ".$row["type"];
                                            echo "<tr><td>". $row["empid"] ."</td><td>". $row["date"] ."</td><td>". $row["time"] ."</td><td>". $row["type"] ."</td><td>";
                                            // echo "<br>";
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