<?php
    
    $conn = mysqli_connect('localhost','root','','internproject');
    $empid = $_COOKIE['empid'];
    $type = 'login';

    $date = date('Y-m-d ');
    $date1 = date('h:m:s');
    $query = "INSERT INTO tblattendance (empid,date,time,type) VALUES ('$empid','$date',now(),'$type')";
    if(mysqli_query($conn,$query))
    {
        echo "login successfull";
    }
    else
    {
        echo "error while login"; 
    }
       
?>