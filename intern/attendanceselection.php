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
                        font-size:15px;
                        height:769px;
                        background-color:black;
                        margin-left:-3px
                        
                    }
                    .container1{
                        border:1px solid black;
                        width:280px;  
                        margin-top:70px;
                        font-size:15px;
                        height:769px;
                        background-color:black;
                        margin-left:500px;
                        
                    }
                    img {
                        position: absolute;
                        z-index: -2;
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
                <img src="https://i.ytimg.com/vi/-MKapbz0GIo/maxresdefault.jpg" style="width:1778px; height:769px">   
            <div>
                <form action="attendancevalidation.php" method="POST">
                    <div  class="container">
                    <h3><a href="http://localhost/intern/employeeattendance.php"><span style="color:white">Attendance</span></a><h3>
                        <h3><a href="http://localhost/intern/taskmanagement.php"><span style="color:white">Task Management</span></a></h3>
                        <h3><a href=""><span style="color:white">Leave Management</span></a></h3>
                        <div  class="container" style="background-color:white; margin-left:850px; height:269px; margin-top:-148px;">
                        <select style="width:130px; height:30px; margin-top:40px; margin-left:55px;">
                            <option>Select Month</option>
                            <option>January</option>
                            <option>Febraury</option>
                            <option>March</option>
                            <option>April</option>
                            <option>may</option>
                            <option>June</option>
                            <option>July</option>
                            <option>August</option>
                            <option>September</option>
                            <option>October</option>
                            <option>November</option>
                            <option>December</option>
                        </select>  
                        <select style="width:130px; height:30px; margin-top:33px; margin-left:55px;">
                            <option>Select year</option>
                            <option>2019</option>
                        </select>
                        <a href="http://localhost/intern/attendancetable.php"><button  style="width:90px; height:40px; margin-top:48px ;margin-left:70px;" type="button" class="btn btn-primary">Submit</button></a>
                        </div>
                    </div>
                </form>
            </div>  
        </div>
    </body>
</html>